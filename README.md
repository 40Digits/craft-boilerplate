# Boilerplate Setup / Installation

1. Import the boilerplate to our [bitbucket team.](https://bitbucket.org/repo/import)
  * Use this as the url: `https://github.com/40Digits/craft-boilerplate.git` to import
2. Clone the newly imported repo
3. `cd` into the root level of the project
4. Add the vhost, database, and restart apache.
  * We use [threepio](https://github.com/40Digits/threepio) to do this for us
  * Make sure the vhost points to the `public/` folder
5. Application setup instructions are in SETUP.md.
  * Keep SETUP.md in the repo so that future devs know how to begin with this project.
  * Update SETUP.md with the specific tools you use for a project. For instance, if you need to use composer, make sure to add a setup step.
6. After you're finished, replace this README with the "New Repo README" below.
7. Push up your changes and start developing!

### New Repo README

```
# Project Name
***

## URLs
* Live - http://www.site-name.com
* Staging - N/A
* Development - http://site-name.domain.net

## Git Branches

* Development
* Master

***

## Project Manager(s)
* PM Name

## Developer(s)

#### Developer 1
* Major Task One
* Major Task Two

#### Developer 2
* Major Task One
* Major Task Two

#### Developer 3
* Major Task One
* Major Task Two

***

## Notes

Any major notes that need to be shared with the project.
```
