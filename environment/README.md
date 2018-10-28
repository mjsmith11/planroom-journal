# Planroom Environment
## What's in it?
 - Ubuntu 16.04 VM with 4 GB RAM and 2 Processor Cores (creds: vagrant/vagrant)
 - Generic Shared Folder
 - Ports 8080, 8000, and 3306 forwarded to the host. (additional configuration is required if these are changed or adjusted for collisions)
 - Docker
 - MySQL running in Docker (creds: planroom/planroom)
 - PHP 7.2 with Composer
 - node 8.12.0
 - planroom-api
 - planroom-ui
 - default user: default@email.com/password

## How to use it
1. Install Virtualbox
1. Install Vagrant 2.0 or higher
1. `vagrant up`

## Editing Files
One known method for editing the files in the vagrant VM is to use Visual Studio Code with the SSH FS extension. The VM will map a port on the host to its ssh port. This port appears early in the output of the `vagrant up` command and is usually 2222. 

### Sample SSH FS config file (vagrant.sshfs.jsonc)
```
{
    "label": "planroom vagrant",
    "root": "/home/vagrant/repos",
    "host": "127.0.0.1",
    "port": 2222,
    "username": "vagrant",
    "password": "vagrant"
}
```

### Pushing Code
In order to push code, you will have to setup your github credentials inside the vm and use git from the command line.


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
