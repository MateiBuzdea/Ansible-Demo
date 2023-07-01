# base image
FROM ubuntu:22.04

RUN apt-get update && \
    apt-get install -y openssh-server sudo net-tools && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends php

WORKDIR /

# server requirements
RUN useradd --create-home server-adm
COPY entrypoint.sh /entrypoint.sh

# Change passwords
# Do NOT use this in real applications, this is just an example
RUN echo "root:root43509281236" | chpasswd
RUN echo "server-adm:srvadm310498010" | chpasswd

# setup ssh to allow root authentication
RUN sed -i 's/#PermitRootLogin .*/PermitRootLogin yes/g' /etc/ssh/sshd_config

# deploy
EXPOSE 8000
EXPOSE 22

CMD /entrypoint.sh
