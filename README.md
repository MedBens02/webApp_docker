# Web Server Setup Guide

This guide provides step-by-step instructions to set up a web server using the files provided in this repository.

## Table of Contents

- [Introduction](#introduction)
- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
  - [Cloning the Repository](#cloning-the-repository)
  - [Building the Docker Image](#building-the-docker-image)
  - [Running the Docker Containers](#running-the-docker-containers)
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
2. Run the create_env.sh script
  
   ```bash
   ./create_env.sh
   ```
3. If you want to access the webserver get its id then run access_server.sh
    
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