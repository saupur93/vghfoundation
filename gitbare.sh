#!/bin/bash
#
# Quick way to make a post-hook enabled Git bare repo
# Usage:
#
# ON SERVER: Run './gitbare.sh projectname' (will create projectname.git as Git repo folder in current dir)
#
# ON LOCAL DEV BOX: Run 'git remote add gt signals@signals.nmsrv.com:/var/home/signals/MYPROJECT/MYBAREREPOFOLDER.git'

if [ ! -d "$1.git" ]; then
mkdir $1".git" && echo -e "Making Git Repo Bare Folder in" $1".git" && cd $1".git" && echo "" && git init --bare;
cat <<EOT >> hooks/post-receive
#!/bin/sh
GIT_WORK_TREE=../ git checkout -f
EOT
chmod +x hooks/post-receive && echo "" && echo -e "\033[33;32mDone! Ready to push to!\033[33;0m" && exit;
else
  echo "Repo already exists"
fi
