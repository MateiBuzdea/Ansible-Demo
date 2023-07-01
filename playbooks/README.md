## Sample playbooks

### Run the add-user playbook:
Creates/modifies the user with the given password.
```
ansible-playbook -i inventory playbooks/add-user.yml
```

### Start/Stop a background job
Starts a php development server.
The port number can be changed from the playbook vars.
```
ansible-playbook -i inventory playbooks/run-background-job.yml --tags start-server
ansible-playbook -i inventory playbooks/run-background-job.yml --tags stop-server
```

### Update/Install packages
Package names can be modified within the yml file.
```
ansible-playbook -i inventory playbooks/update.yml
```

### Create a service
Note that on our docker container, the service cannot be started through ansible, because the container would need higher privileges.
```
ansible-playbook -i inventory playbooks/create-service.yml
```
