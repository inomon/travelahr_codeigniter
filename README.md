# Introduction
This is a project built under CodeIgniter `3.1.11` with a few composer packages helping in making it work smoother.
This app aims to be able to give weather information and venue suggestions for travellers - travelAHHR.

## Installation 

### Prerequisites
Stable Docker version installed on local machine and a little of CLI knowledge

### Steps

Easy installation is as follows:

1. Clone repo via git into your local machine
2. Open a CLI (CLI/powershell/bash) on your machine, and navigate to the project directory.
3. Execute docker compose commands

### Commands

```bash
# setup the project
mkdir travelahr_codeigniter
cd travelahr_codeigniter
git clone git@github.com:inomon/travelahr_codeigniter.git .

# initialize the container and setup the project
docker-compose up -d
docker exec -it travelah_codeigniter_myapp_1 bash -c "composer install"
```

### Access
If you want to access the server and do some tinkering, you can do so by using this command:

```bash
docker exec -it travelah_codeigniter_myapp_1 bash
```
## Background of Build
This project is based off on the tools sets listed here:

- https://github.com/bitnami/bitnami-docker-codeigniter
- https://github.com/vlucas/phpdotenv
- https://docs.guzzlephp.org/en/stable/

### Development Environment
Using `bitnami/bitnami-docker-codeigniter`, a docker container fit for CodeIgniter development was used as a base. It also contains a MariaDB build, but was not needed.
Composer is also setup on it, which made it helpful to install `vlucas/phpdotenv` - this is inline with existing/newer frameworks (also in other languages) that help in making sure environment based parameters are used correctly and efficiently.
Last is GuzzleHttp, which wrapped the API endpoints cohesively for a stable end-to-end communication - compared to using plain curl that needs further error catching and initializations.

# Usage
Coding exam

## Requirements
Create a simple information web app for tourists. You can use Laravel with VueJS or OOP PHP + Javascript framework (JQuery/ES6/ES5)

## Project Scope
This page aims to provide travel information of Japan for foreign tourists visiting Japan for the first time.
The traveler has the possibility of going to the following cities.
Tokyo, Yokohama, Kyoto, Osaka, Sapporo, Nagoya

## Solution
Created project using CodeIgniter version `3.1.11`, with MVC framework in mind.
Libraries are created to handle each API fetching procedure.
To alleviate strain on API fetch overload - hence using the free tier - a caching also was implemented to make sure that each new API fetch can be preserved for an ample time.
To be used in the future if needed (TTL = 120 seconds).
