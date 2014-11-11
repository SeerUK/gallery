# Dockerised NginX & HHVM

FROM seeruk/ansible-baseimage
MAINTAINER Elliot Wright, elliot@elliotwright.co

ADD provisioning /opt/provisioning

RUN \
    mkdir -p /opt/provisioning && \
    mkdir -p /var/log/supervisor && \
    mkdir -p /var/pid/supervisor && \
    cp /opt/provisioning/ansible/hosts /etc/ansible/hosts && \
    ansible-playbook /opt/provisioning/ansible/web_server.yml -c local

EXPOSE 80
EXPOSE 443

CMD ["/usr/bin/supervisord"]
