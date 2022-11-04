# `Login` Installation with docker and Jenkins.
Directly you can run this app by using docker images pls visit my DcokerHub account => **[raam043](https://hub.docker.com/u/raam043)**
```sh
docker run --name login-page -d -p 80:80 raam043/login-page
```

Release linux server and install Jenkins and Docker

```sh
yum update -y
yum install docker -y
systemctl enable docker
systemctl start docker
yum install pip -y
pip install docker-py
wget -O /etc/yum.repos.d/jenkins.repo \
    https://pkg.jenkins.io/redhat-stable/jenkins.repo
rpm --import https://pkg.jenkins.io/redhat-stable/jenkins.io.key
yum upgrade
amazon-linux-extras install java-openjdk11 -y
yum install jenkins -y
systemctl enable jenkins
systemctl start jenkins
yum install git -y
```
Make app directory and add Application files using git clone
```sh
rm -rf /opt/login-page/*
mkdir /opt/login-page
cd /opt/login-page
git clone https://github.com/Raam043/Lagin-page.git
cp /opt/login-page/Login-page/* /opt/login-page

```

Build Docker images and Run container 
```sh
docker stop login-page
docker rm -f login-page
docker image rm -f login-page
docker build -t login-page .
docker run --name login-page -d -p 80:80 login-page
```
Open New tab with `Server_Public_IP:`

With Above commands Jenkins CICD can be made

Output :- 


