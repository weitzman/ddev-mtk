FROM docker.io/skpr/mysql:8.x-v3-stable
LABEL org.opencontainers.image.source=https://github.com/ORG/REPO

RUN --mount=type=bind,source=dump.sql.gz,target=/tmp/dump.sql.gz \
    bash -c 'database-import local local local <(gunzip < /tmp/dump.sql.gz)'
