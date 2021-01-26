FROM docker.io/bitnami/codeigniter:3-debian-10
WORKDIR /app

RUN apt-get update && apt-get install -y \
    vim \
    nano \
    npm

#RUN npm install -g npm@latest
RUN curl https://www.npmjs.com/install.sh | sh
RUN npm install -g @vue/cli
