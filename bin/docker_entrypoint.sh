#!/bin/bash
set -e
# shellcheck disable=SC1091
source gitpress_utils.sh

mode="${GITPRESS_MODE:-FETCH}"

if [ "$mode" != "SEED_VP" ] && [ "$mode" != "SEED_SQL" ] && [ "$mode" != "FETCH" ]; then
  fatal "Mode ${mode} is not supported"
fi

initDB

if [ "$mode" == "SEED_VP" ] || [ "$mode" == "SEED_SQL" ]; then
  installWP

  if [ "$mode" == "SEED_VP" ]; then
    installVP
  else
    dumpDB
    initGit
  fi

  setupGit

  chown -R www-data .

  pushGit
else
  if [[ ! -d ".git" ]]; then
    echo "Git is not here will clone it"
    cloneGit
  fi

  createWPConfig
  createDB

  restoreWP

  chown -R www-data .
fi

apache2-foreground
