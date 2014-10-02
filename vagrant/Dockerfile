FROM seeruk/baseimage

ADD vagrant.pub /tmp/vagrant.pub
RUN cat /tmp/vagrant.pub >> /root/.ssh/authorized_keys && rm -f /tmp/vagrant.pub
