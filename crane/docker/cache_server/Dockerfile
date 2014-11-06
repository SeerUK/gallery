# Dockerised Memcached

FROM seeruk/ansible-baseimage
MAINTAINER Elliot Wright, elliot@elliotwright.co

RUN mkdir -p /opt/provisioning
RUN mkdir -p /var/log/supervisor
RUN mkdir -p /var/pid/supervisor

ADD provisioning /opt/provisioning
RUN cp /opt/provisioning/ansible/hosts /etc/ansible/hosts

# Provisiong with Ansible
RUN ansible-playbook /opt/provisioning/ansible/cache_server.yml -c local

CMD ["/usr/bin/supervisord"]
