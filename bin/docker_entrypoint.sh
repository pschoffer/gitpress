#!/bin/bash
set -e
# shellcheck disable=SC1091
source gitpress_utils.sh

mode="${GITPRESS_MODE:-FETCH}"

if [ "$mode" != "SEED" ] && [ "$mode" != "FETCH" ]; then
  fatal "Mode ${mode} is not supported"
fi

initDB

if [ "$mode" == "SEED" ]; then
  installWP
  setupGit

  chown -R www-data .

  git push origin master
else 
  if [[ ! -d ".git" ]]; then
    echo "Git is not here will clone it"
    cloneGit
  fi

  createWPConfig
  restoreWP
  
  chown -R www-data .
fi

apache2-foreground
