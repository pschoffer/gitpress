This is **highly experimental** project stage. I do not recomend using it to anybody

# GitPress

<span><a href="https://hub.docker.com/repository/docker/pschoffer/gitpress" title="View this project on docker hub"><img src="https://img.shields.io/docker/cloud/build/pschoffer/gitpress" alt="Docker hub build" /></a></span>

The aim of this project is to have git backed [WordPress](https://wordpress.org/) installation.

There are two *modes* of working.

One is based on [versionpress](https://versionpress.com/)

The other is using SQL dump.

All the persistance happen in git repo, the only usage of mysql is for "caching".

The main use case is when you have static websites with a small amount of changes and don't plan to use DB that much. But you still like to levarage the CMS part of WordPress.

## Benefits

- You don't need to care about DB (no uptime, backups, hosting of mysql)
- You version control data (pages, posts, users, ...) as well as files (themes, plugins, ...)
- All the benefits of git (rollbacks, reproducing the same site on different server)

## Downsides

- Your backup is only as good as your last pushed commit
- Currently there is no UI to `push`, you need to do it from server
- DB can crash on you and you will lose all the data since last `git push`

## Pushing

There is a executable `gitpress_push` to create DB export (if in SQL mode), add all the file changes, commit change and push to repo.

## Modes

This image has 2 modes. The default mode is `FETCH` mode. Variable `GITPRESS_MODE` chooses the mode.

### SEED_VP and SEED_SQL Mode

Purpose of this mode is to create a fresh new instance of WordPress and push everything in the repo of your choice. It will keep the instance alive and it is OK to keep using it.

### Seed Mode Specific Config (same for SEED_VP and SEED_SQL)

Supported config switches

| variable           | example               | description              |
| ------------------ | --------------------- | ------------------------ |
| WORDPRESS_TITLE    | `Cool Wordpress Site` | WordPress Title          |
| WORDPRESS_USER     | `admin`               | WordPress admin username |
| WORDPRESS_PASSWORD | `secret`              | WordPress admin password |
| WORDPRESS_EMAIL    | `test@test.com`       | WordPress admin email    |

### FETCH Mode

Fetches the instalation from Git and restores it.

### Shared Config

| variable      | example                         | description                      |
| ------------- | ------------------------------- | -------------------------------- |
| GITPRESS_MODE | `FETCH`                         | Gitpress mode                    |
| WORDPRESS_URL | `https://your.domain.here`      | WordPress URL                    |
| GIT_ORIGIN    | `gitlab.com/yourGroup/yourRepo` | Remote repo to point the repo to |
| GIT_USER      | `systemUser`                    | Remote repo user                 |
| GIT_PASSWORD  | `systemUserPassword`            | Remote repo password             |

## Example usage

You can start by fetching the example project.

```
docker run -p 80:80 -d \
    --env "GITPRESS_MODE=FETCH" \
    --env "WORDPRESS_URL=http://localhost/" \
    --env "GIT_ORIGIN=github.com/pschoffer/gitpress-example.git" \
    pschoffer/gitpress
```

Docker compose version:

```
version: '3.1'

services:
  gitpress:
    image: pschoffer/gitpress
    ports:
      - 80:80
    environment:
      GITPRESS_MODE: FETCH
      WORDPRESS_URL: http://localhost/
      GIT_ORIGIN: github.com/pschoffer/gitpress-example.git
```

The admin login credentials are `gitpress:pass`
