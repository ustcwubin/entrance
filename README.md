entrance
========

# Repository introduction

* Develop branch: branch to which codes under developing are committed
* Master branch: branch to which codes completed all function are merged
* doc folder: storing design sketch, protype and need documents
* other folders: code files

# Git operation in brief

**Note:** repository must be fork to yourselves account to commit your items.

* Download git client: https://help.github.com/articles/set-up-git, and install it
* Forking repository: log in https://github.com/eefocus/entrance, and click the `fork` button under your account
* Clone repository to local: using git client window or git shell command, which is:
    git clone https://github.com/{your git account}/entrance
* Switch branch: using git client window or git shell command to get `develop` branch:
    git checkout develop
* Add channel for updating code from remote repository (eefocus/entrance):
    git remote add upstream https://github.com/eefocus/entrance
* Updating local from remote repository:
    git fetch upstream
    git merge upstream/develop
* Updating your remote repository:
    git push
* Commit your items
  * Copy your changes to the local folder you have cloned
  * Using git client window to check if the changes correct
  * Added commit note and commit
  * Sync commit to your remote repository
* Push your changes to remote repository
  * Click the `pull request` button in your repository page

