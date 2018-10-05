# Planroom Environment
## What's in it?
 - Ubuntu 16.04 VM with 4 GB RAM and 2 Processor Cores (creds: vagrant/vagrant)
 - Generic Shared Folder
 - Shared Repos Folder
 - Ports 8080, 8000, and 3306 forwarded to the host. (additional configuration is required if these are changed or adjusted for collisions)
 - Docker
 - MySQL running in Docker (creds: planroom/planroom)
 - PHP 7.2 with Composer
 - node 8.12.0
 - planroom-api
 - planroom-ui

## How to use it
1. Install Virtualbox
1. Install Vagrant 2.0 or higher
1. `vagrant up`

## Basic Vagrant Commands
Note - All commands should be executed in the same directory as the Vagrantfile

### Build New VM or Resume Halted Machine
```
vagrant up
```

### Start Terminal Session in VM
```
vagrant ssh
```

### Check VM Status
```
vagrant status
```

### Shutdown VM
```
vagrant halt
```

### Remove VM
```
vagrant destroy
```
