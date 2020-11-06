#!/bin/bash
set -e

WORDPRESS_CONFIG_FILE="wp-config.php"
WORDPRESS_FILES_CHECK="wp-settings.php"
SQL_DUMP_FILE="sql_dump.sql"

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
  while ! (mysqladmin ping)
  do
    sleep 3
    info "Waiting for mysql ..."
  done
  info "Mysql is up"

  info "Running init script"
  mysql < /etc/db_init.sql
}

function isUsingDBDump {
  if [ -f "$SQL_DUMP_FILE" ]; then
    # 0 - true
    return 0;
  else
    # 5 - false
    return 5
  fi
}

function reCreateHtaccess {
cat <<EOF > .htaccess
# Protect the htaccess file
<Files .htaccess>
Order Allow,Deny
Deny from all
</Files>

# Protect $SQL_DUMP_FILE
<Files $SQL_DUMP_FILE>
Order Allow,Deny
Deny from all
</Files>

# Disable directory browsing
Options All -Indexes
EOF
}

function dumpDB {
  reCreateHtaccess
  rm -f "$SQL_DUMP_FILE"
  wp db export --add-drop-table --allow-root "$SQL_DUMP_FILE"
}

function importDB {
  wp db import --allow-root "$SQL_DUMP_FILE"
}

function createDB {
    info "Creating DB"
    wp db create --allow-root
}


function createWPConfig {
  if [[ ! -f "$WORDPRESS_CONFIG_FILE" ]]; then
    info "$WORDPRESS_CONFIG_FILE is not present, will create one"
    wp config create --dbname="gitpress" \
      --dbuser="gituser" \
      --dbpass="pass" \
      --dbhost="0.0.0.0" \
      --allow-root
  fi
}

function installWP {
  info "Installing WordPress"

  if [[ ! -f "$WORDPRESS_FILES_CHECK" ]]; then
    info "$WORDPRESS_FILES_CHECK is not present, will download wp"
    wp core download --path=/var/www/html --allow-root
  fi

  createWPConfig

  createDB

  wp core install --url="${WORDPRESS_URL:-http://localhost}" \
    --title="${WORDPRESS_TITLE:-test_title}" \
    --admin_user="${WORDPRESS_USER:-root}" \
    --admin_password="${WORDPRESS_PASSWORD:-shh}" \
    --admin_email="${WORDPRESS_EMAIL:-test@test.com}" \
    --allow-root
}

function installVP {
  info "Installing VersionPress"

  wp plugin install /usr/src/versionpress/*.zip --activate --allow-root
  wp vp activate --allow-root
}

function restoreWP {
  info "Restoring WP"

  if isUsingDBDump; then
    importDB
  else
    unzip /usr/src/versionpress/versionpress-4.0-beta2.zip -d wp-content/plugins/
    wp vp restore-site --siteurl="${WORDPRESS_URL:-http://localhost}" --require=wp-content/plugins/versionpress/src/Cli/vp.php --yes --allow-root
  fi
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

function commitGit {
  git add .
  git config --global user.email "gitpress@gitpress.com"
  git config --global user.name "gitpress"
  git commit -m "Gitpress CLI commit"
}


function initGit {
  git init .
  commitGit
}

function setupGit {
  gitEndpoint=$(getGitEndpoint)
  git remote add origin "$gitEndpoint"
}

function cloneGit {
  gitEndpoint=$(getGitEndpoint)
  git clone "$gitEndpoint" ./
}

function pushGit {
  git push origin master
}
