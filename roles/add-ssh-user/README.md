add-ssh-user
=========

Adds the user with the specified name and password and set up ssh passwordless authentication.

Role Variables
--------------

* user_name is the name of the newly created or modified user
* new_password is the password to be set
The defaults are `root` with a random password.
If root is given as user, then the home directory will be `/root`; else it will be `/home/user`.
* my_ssh_key contains the path to the ssh public key to be added
