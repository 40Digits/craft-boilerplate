== Craft Local Setup Guide

1. Create and Update Local Config Files
	* `cp craft/config/local/db.example.php craft/config/local/db.php`
	* `cp craft/config/local/general.example.php craft/config/local/general.php`

2. Create Your Database
	* There is nothing unsual about creating your database.
	* Just make sure you have your credentials handy and update them in `craft/config/local/db.php`
	* Migrating from development is managed through dbmigrate.php.

3. dbmigrate
	* In order to keep every developer's local env up to date we only make db changes on development.
	* After you make db changes you can sync those changes down to your local.
	* Make sure to have all of the variables setup in db.php and the syncOptions variables in general.php.
	* Run `php dbmigrate.php` in order to pull down the dev database and any synced folders.
	* Depending on when you setup your development site you won't need to do this until later on.

4. htaccess
	* If you want pretty urls (which you do), you'll need to create your .htaccess file: `cp public/htaccess public/.htaccess`
	* We put it in the .gitignore so you don't have to worry about pushing it up.

5. Gulp
	* We use [40Digits gulp-eta](https://github.com/40Digits/gulp-eta). If you need more info about how to set it up follow that link.