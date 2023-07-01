# Ansible-Demo

This repository contains a simple testing environment for automation using ansible playbooks.

## Docker setup

In order to build the testing node, which represents a `ubuntu 22.04` distribution, run the following:

```
cd example-nodes/node-docker
./build-docker.sh
```

Then replace the ip in the inventory file with that from the output of:
```
docker inspect ansible_test-server
```

The root and user password can be found in the `Dockerfile`.

## Basic commands

### View inventory:
```
ansible-inventory -i inventory --list
```

### Test the network connection of the machines:
```
ansible all -i inventory -m ping
ansible webservers -i inventory -m ping
```

### Run command:
```
ansible all -i inventory -a 'whoami'
```

## Roles

### add-user-and-ssh

This role adds the user with the specified name and password and set up ssh passwordless authentication.
```
ansible-playbook -i ./inventory ./add-user-and-ssh.yml
```

If you want to add another user, modify the `add-user-and-ssh.yml` playbook.
Alternatively, override the variables using `-e`:
```
ansible-playbook -i ./inventory ./add-user-and-ssh.yml -e user_name=root -e new_password=securepwd
```

### deploy-apache-webserver

This role installs apache2 and configures the server to listen to a specific port. Virtual hosting can be added optionally. The webserver delivers the `index.php` file as a sample.
```
ansible-playbook -i ./inventory ./deploy-apache-webserver.yml
```

To override the port number:
```
ansible-playbook -i ./inventory ./deploy-apache-webserver.yml -e webserver_port=8080
```

Note that restarting the apache service does not work with the example docker container. Reloading must be done manually.

## TODO
* Add vagrant node and manage it with ansible
* Make docker accept service management