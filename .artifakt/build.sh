#!/bin/bash

set -e

echo ">>>>>>>>>>>>>> START CUSTOM BUILD SCRIPT <<<<<<<<<<<<<<<<< "

# used by entrypoint to init JWT
sudo apt-get update && \
    sudo apt-get install -y --no-install-recommends acl && \
    sudo rm -rf /var/lib/apt/lists/*

sudo chmod 755 /var/www/html/bin/console

echo ">>>>>>>>>>>>>> END CUSTOM BUILD SCRIPT <<<<<<<<<<<<<<<<< "