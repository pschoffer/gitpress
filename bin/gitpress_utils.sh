#!/bin/bash
set -e

WORDPRESS_CONFIG_FILE="wp-config.php"
WORDPRESS_FILES_CHECK="wp-settings.php"
GITPRESS_DB_NAME="gitpress"

function info {
  echo "[GitPress]" "$@"
}

function fatal {
  echo "$@"
  exit 1
}

function initDB {
  info "Initializing DB"
  mysqld &
  while !(mysqladmin ping)
  do
    sleep 3
    info "Waiting for mysql ..."
  done
  info "Mysql is up"

  info "Running init script"
  mysql < /etc/db_init.sql
}

function createWPConfig {
  if [[ ! -f "$WORDPRESS_CONFIG_FILE" ]]; then
    info "$WORDPRESS_CONFIG_FILE is not present, will create one"
    wp config create --dbname="gitpress" \
      --dbuser="gituser" \
      --dbpass="pass" \
      --dbhost="0.0.0.0" \
      --allow-root

    info "Creating DB"
    wp db create --allow-root
  fi
}

function installWP {
  info "Installing WP"
  
  if [[ ! -f "$WORDPRESS_FILES_CHECK" ]]; then
    info "$WORDPRESS_FILES_CHECK is not present, will download wp"
    wp core download --path=/var/www/html --allow-root
  fi

  createWPConfig

  wp core install --url="${WORDPRESS_URL:-http://localhost}" \
    --title="${WORDPRESS_TITLE:-test_title}" \
    --admin_user="${WORDPRESS_USER:-root}" \
    --admin_password="${WORDPRESS_PASSWORD:-shh}" \
    --admin_email="${WORDPRESS_EMAIL:-test@test.com}" \
    --allow-root
  
  
  wp vp activate --allow-root
}

function restoreWP {
  info "Restoring WP"         
  wp vp restore-site --siteurl="${WORDPRESS_URL:-http://localhost}" --require=wp-content/mu-plugins/versionpress/src/Cli/vp.php --yes --allow-root
}

function getGitEndpoint {
  if [ -n "$GIT_ORIGIN" ]; then
    if [ -z "$GIT_USER" ] || [ -z "$GIT_PASSWORD" ]; then
      echo "https://$GIT_ORIGIN"
    else 
      echo "https://${GIT_USER}:${GIT_PASSWORD}@${GIT_ORIGIN}"
    fi
  fi
}

function setupGit {
  gitEndpoint=$(getGitEndpoint)
  git remote add origin "$gitEndpoint"
}

function cloneGit {
  gitEndpoint=$(getGitEndpoint)
  git clone "$gitEndpoint" ./
}
