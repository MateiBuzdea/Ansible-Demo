deploy-webserver
=========

Creates and deploys an apache2 web server.

Role Variables
--------------

* webserver_port is the port number to listen to
* webserver_hostname will be the directory under `/var/www` acting as the server document root
* (optional) webserver_fqdn is used for virtual host routing