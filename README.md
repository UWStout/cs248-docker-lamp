# LAMP stack built with Docker Compose

This repository provides a basic LAMP stack environment built using Docker Compose. It consists of the following:

- Linux Base (Debian Buster)
- Apache (v2.4)
- PHP (v8.2)
- MySQL (via MariaDB v10.6)

It also comes with phpMyAdmin preinstalled to help you manage your databases.

## Setup Docker
If you are on Windows, it is recommended to install Windows Subsystem for Linux v2 (WSL2) to improve performance:
- Type `Powershell` in the Windows search bar then right-click and select `Run as administrator`
- In the Powershell window, run these commands:
  - `wsl --install`
  - `wsl --set-default-version 2`

This will install and configure WSL2 and a basic Ubuntu image.

On all systems, you need to have the basic Docker containerization tool installed:
- Download and install Docker Desktop: https://www.docker.com/products/docker-desktop
- You do NOT need to create a docker account to download docker desktop or to use this project.

## Installation
To use this LAMP container, follow these steps:
- Clone this repository on your local computer (or just download a zip archive)
- Rename cs248.env to .env (this file contains environment variables for docker-compose)
- Run `docker-compose up -d` from the root of the project
- Visit `http://localhost:3000` in your browser

You can edit the files in `www` to see changes reflected in the browser. PHP 8.2 is supported.

## Setup Docker to use WSL (Windows only)
You must tell docker to use WSL in its settings:
- Start Docker Desktop and Navigate to Settings
- From the General tab, check the box next to `Use WSL 2 based engine` (if it is not already checked)
- Select `Apply & Restart`

## Credit
This is a copy of the sprintcube docker-compose-lamp repo, with some modifications to suit the needs of our class. Extra PHP and MySQL versions have been removed along with redis, and the project structure has been simplified.

For more information, visit the original repo: https://github.com/sprintcube/docker-compose-lamp
