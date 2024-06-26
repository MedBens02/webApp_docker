# Web Server Setup Guide

This guide provides step-by-step instructions to set up a 3 containers web app developpement environement using the files provided in this repository.

## Table of Contents

- [Authors](#Authors)
- [Introduction](#introduction)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
  - [Cloning the Repository](#cloning-the-repository)
  - [Building the Docker Image](#building-the-docker-image)
  - [Accessing the Docker Containers](#running-the-docker-containers)
  - [Updating the MySQL Data Base](#Updating-the-MySQL-Data-Base)
  - [Changing the web app source code](#Changing-the-web-app-source-code)
- [Accessing the Website](#accessing-the-website)
- [Contributing](#contributing)


## Authors

This project is authored by:  
  
  Bensaddik Mohamed  
  Portfolio: [bensym.com](https://bensym.com/)  
  mohamedbensaddik1234@gmail.com

## Introduction

This repository facilitates the setup of a development environment for a web application using Docker. It consists of three containers: a web server, a MySQL database, and phpMyAdmin. The web server container comes pre-installed with Git for version control convenience.

In addition to the Docker configuration files, the repository includes scripts for easy setup, container management, and database interaction. The containers are configured with volumes that link host machine directories to specific locations within the containers:

    ./sources is mapped to /var/www/html on the web server container, allowing real-time modification of project files.
    ./db is mapped to /docker-entrypoint-initdb.d on the MySQL container, facilitating easy access and updates to the database.

This setup enables seamless development and testing of the web application, allowing developers to work efficiently both from the host machine and within the containers.


## Prerequisites

Before you begin, ensure that you have the following prerequisites installed on your system:

- Docker: [Installation Guide](https://docs.docker.com/get-docker/)

## Getting Started

### Cloning the Repository

1. Clone this repository to your local machine using Git:

   ```bash
   git clone https://github.com/MedBens02/webApp_docker.git
   ```

### Building the Docker Image

1. Run the create_env.sh script
  
   ```bash
   ./create_env.sh
   ```

### Accessing the Docker Containers

1. If you want to access a container get its id then run access_server.sh
    
    Example: 

   ```bash
    bensm@bensm-VirtualBox:~/docker/webApp_docker$ docker ps
    CONTAINER ID   IMAGE                   COMMAND                  CREATED          STATUS          PORTS                                   NAMES
    0349f8fd9f7d   new-web                 "docker-php-entrypoi…"   30 minutes ago   Up 30 minutes   0.0.0.0:9000->80/tcp, :::9000->80/tcp   new-web-1
    c3a8fc5cdfe4   mysql:latest            "docker-entrypoint.s…"   30 minutes ago   Up 30 minutes   3306/tcp, 33060/tcp                     new-db-1
    cdb85e69b9cf   phpmyadmin/phpmyadmin   "/docker-entrypoint.…"   30 minutes ago   Up 30 minutes   0.0.0.0:9001->80/tcp, :::9001->80/tcp   new-phpmyadmin-1
    bensm@bensm-VirtualBox:~/docker/webApp_docker$ ./access_server.sh
    Usage: ./access_server.sh <container_name_or_id>
    bensm@bensm-VirtualBox:~/docker/webApp_docker$ ./access_server.sh 0349f8fd9f7d
    root@0349f8fd9f7d:/var/www/html# 
    ```

### Updating the MySQL Data Base

1. If you want to backup the database before recreating a new environement while keeping the new database:
    
   ```bash
   ./backup_db.sh
   ```

  This will update the initialization database to have the new data after recreating a new server.

### Changing the web app source code

1. You can either change them directly from the sources directory or connect to the web server as shown before and update them from there.

## Accessing the Website

1. Open any browser on your machine.
2. Go to:
   ```bash
   http://localhost:9000/
   ```
3. Modify the database from:
   ```bash
   http://localhost:9001/
   ```

  login  :   `myuser`  
  pass   :   `password`  

