# Current
php + nginx + adminer + mysql
* nginx : localhost:80
* adminer : localhost:8080
* mysql : localhost:3306 root:root, user:devpass

```bash
docker-compose -f ./docker/docker-compose.yml up -d#
```
## PHP Container
```bash
docker compose exec php bash
```
## Nginx Container
```bash
docker compose exec nginx bash
```

# Symfony
## Install Symfony
add this line to the Dockerfile
```bash
# Install Symfony
RUN curl -sS https://get.symfony.com/cli/installer | bash
# Make "Symfony" command available globally
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
```
## Create a new Symfony project
### Configure Git
indside php container
```bash
docker compose exec php bash
```
config github using 
```bash
git config --global user.email "you@example.com"
git config --global user.name "Your Name"
```
### Create Symfony Project
```bash
symfony new projectName --webapp
```
#### in current folder
```bash
symfony new . --webapp
```

