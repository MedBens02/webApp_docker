# Web Server Setup Guide

This guide provides step-by-step instructions to set up a web server using the files provided in this repository.

## Table of Contents

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
- [License](#license)

## Introduction

This repository contains the files required to set up a web server using Docker. The server includes a PHP-based web application and a MySQL database.

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

  login  :   myuser
  pass   :   password
