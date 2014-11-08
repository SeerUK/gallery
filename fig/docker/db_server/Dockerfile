# Dockerised MySQL

FROM seeruk/ansible-baseimage
MAINTAINER Elliot Wright, elliot@elliotwright.co

RUN mkdir -p /opt/provisioning
RUN mkdir -p /var/log/supervisor
RUN mkdir -p /var/pid/supervisor

ADD provisioning /opt/provisioning/
RUN cp /opt/provisioning/ansible/hosts /etc/ansible/hosts

# Provision with Ansible
RUN ansible-playbook /opt/provisioning/ansible/db_server.yml -c local

EXPOSE 3306

CMD ["/usr/bin/supervisord"]
