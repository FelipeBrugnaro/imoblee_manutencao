#!/bin/bash
set -e

export NVM_DIR=~/.nvm
source ~/.nvm/nvm.sh

echo "Deployment started ..."

git pull origin main

echo "Deployment finished!"
