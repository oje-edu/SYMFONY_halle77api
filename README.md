﻿# SYMFONY_halle77api

![GitHub last commit](https://img.shields.io/github/last-commit/oje-edu/SYMFONY_halle77api) ![GitHub repo size](https://img.shields.io/github/repo-size/oje-edu/SYMFONY_halle77api) ![API](https://img.shields.io/website?down_color=red&down_message=offline&style=plastic&up_color=lime&up_message=online&url=https%3A%2F%2Fhalle77api.oje.guru/api) ![BACKEND](https://img.shields.io/website?down_color=red&down_message=offline&style=plastic&up_color=lime&up_message=online&url=https%3A%2F%2Fhalle77-dyno.vercel.app)

## Dependencies
- PHP8
- composer (v2)
- nodejs/npm

## Setup

- `git clone https://github.com/oje-edu/SYMFONY_halle77api.git`

- change into directory: `cd SYMFONY_halle77api`

- then run `composer i && npm i` after that 
- build the styles and JS files with `npm run build`

- point your webservers vhost root to the `public directory`
- generate production .env with `APP_ENV=prod APP_DEBUG=0 php bin/console cache:clear`

## Update APP
- `composer upgrade`


## TestAccounts

- Admin: 
  - admin@admin.com
  - admin123
  
- Benutzer
  - test@test.com
  - test123
