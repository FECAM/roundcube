#/bin/bash
docker build -t  local/roundcube  .
docker stop roundcube;
docker rm roundcube; docker run --name roundcube --env-file .env -p 443:443 -p 80:80 local/roundcube
