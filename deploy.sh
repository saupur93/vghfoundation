#!/bin/bash
echo -e  "\033[33;32m 1. Running build tasks \033[33;0m"
echo ""
gulp build --production && git add -A :/ && git commit -m "Build from deploy script" && git push
echo ""
echo -e "\033[33;32m 2. Getting server to pull from Git repo \033[33;0m"
echo ""
#ssh signals_vps@ps405853.dreamhostps.com 'cd ~/aslan.signalsinteractive.com; git pull'