# Craft Local Setup Guide

1. Create Your database and vhost file
  * There is nothing unsual about creating your database
  * Keep your credentials handy
  * Make sure the vhost points to the `public` folder
  * ProTip: Use [threepio](https://github.com/40Digits/threepio)

2. htaccess
  * If you want pretty urls (which you do), you'll need to create your .htaccess file: `cp public/htaccess public/.htaccess`
  * We put it in the .gitignore so you don't have to worry about pushing it up

3. Add/Update Craft App
  * We always want to start new projects with the most updated Craft so we don't include the `craft/app/`
  * If you want to get it manually, you can go to [https://craftcms.com/](https://craftcms.com/) and click the download link
  * We wrote a script to do it for you. Just run `npm run update-craft`

4. Create and Update Local Config Files
  * `cp craft/config/local/db.example.php craft/config/local/db.php`
  * Update your MySQL credentials in `craft/config/local/db.php`
  * `cp craft/config/local/general.example.php craft/config/local/general.php`
  * Make sure to take a look at that file, but you shouldn't need to update anything just yet

5. Install CraftCMS DB
  * You really only need to do this if you're the first one to set this project up. If there's already a dev site then just skip this step
  * In your browser, go to `site-name/admin` and run through the install process

6. dbmigrate.php
  * In order to keep every developer's local env up to date we only make db changes on development
  * After you make db changes you can sync those changes down to your local
  * Make sure to have all of the variables setup in db.php and the syncOptions variables in general.php
  * Run `npm run migrate:down` in order to pull down the dev database and any synced folders
  * Depending on when you setup your development site you won't need to do this until later on

7. Gulp Eta
  * We use [40Digits gulp-eta](https://github.com/40Digits/gulp-eta). If you need more info about how to set it up follow that link
  * In this project all Eta's tasks can be run using NPM scripts
  * run `npm install` -- Downloads necessary NPM packages (like gulp and gulp-eta) to start installation
  * run these commands if you're the first one to set this project up
    * run `npm run init` -- creates `_src` folder and additional dependencies
    * run `npm start` -- creates your assests folder and builds files from `_src`
  * Next time you start the project, run `npm run bs` -- starts up BrowserSync and Watch
  * Run any NPM script with the `-s` flag to silence NPM's output and only get Eta's output
