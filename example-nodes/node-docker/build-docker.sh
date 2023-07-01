#!/bin/bash
docker-compose rm -s -f test-server
docker-compose -p "ansible" up
