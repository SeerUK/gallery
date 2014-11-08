# Dockerised MySQL

FROM seeruk/ansible-baseimage
MAINTAINER Elliot Wright, elliot@elliotwright.co

ADD provisioning /opt/provisioning

RUN \
    mkdir -p /opt/provisioning && \
    mkdir -p /var/log/supervisor && \
    mkdir -p /var/pid/supervisor && \
    cp /opt/provisioning/ansible/hosts /etc/ansible/hosts && \
    ansible-playbook /opt/provisioning/ansible/db_server.yml -c local

EXPOSE 3306

CMD ["/usr/bin/supervisord"]
