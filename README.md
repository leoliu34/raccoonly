# Raccoonly (raccoon.ly)

## Introduction

Raccoonly is a simple web application built to help developer candidates demonstrate practical skills with

* [GitHub](https://github.com/)
* [Git](https://git-scm.com/)
* [MySQL 5.5](https://www.mysql.com/) 
* [PHP 5](http://php.net/)
* [Composer 1.1](https://getcomposer.org/)
* [CakePHP 3](http://cakephp.org/)
* [Bootstrap 3](http://getbootstrap.com/)
* [jQuery 3](https://jquery.com/)
* the editor of their choice
* the web developer tools of their choice (Chrome Developer Tools, Firebug, etc)

both before the interview (by completing the "Getting Started" steps) and during the interview (by solving simple problems hands-on with our team, either on screenshare or in-person).

By using Raccoonly in our interviews we hope to:

* **Reduce bias:** Candidates complete the same set of steps and problems as other candidates with the same experience for the same role.  Each problem has specific evaluation criteria.

* **Reduce the (unrealistic!) need for memorization:** Most developers can't memorize the names of every function, their arguments, and the precise details of how they behave, or recall them during an interview.  Candidates are free to use Google, Stack Overflow, man pages, documentation, tutorials, etc during their interview as they would normally.

* **Make interviews more efficient:** Candidates complete the "Getting Started" steps and prepare for their interview ahead of time, at their convenience, resulting in a shorter, more focused interview.

* **Make interviews more comfortable:** Candidates come to their interview having already seen the codebase they'll be solving problems in.

* **Provide realistic problems:** Candidates are given realistic problems to solve rather than trivia, logic puzzles, or trivial problems that can be introduced and set up entirely during the interview.

## Getting Started

### Getting started

Raccoonly is built on MySQL and PHP.  In order to solve the problems during the interview, you will need a computer that's capable of running both, and a user with rights to install both.  (We recommend using a virtual machine, container, or a clean operating system install, if possible.)

### Install MySQL

Install MySQL.  The exact steps will vary depending on your operating system, whether you use a package manager or build from source, etc.  (We recommend using a package manager if possible.)

### Install PHP 5 with the intl and mysql extensions

Install PHP 5 with the intl and mysql extensions.  The exact steps will vary depending on your operating system, whether you use a package manager or build from source, etc.  (We recommend using a package manager if possible.)

### Fork, clone, and install the application

(Optional) Fork the application's GitHub repo.  If you're concerned about your current employer seeing you forking the repo, you can skip this step and clone the original repo, and we'll talk through forking and pull requests during the interview.

Clone your fork of the repo.

Install the application's dependencies using Composer.

Install the application's database objects in MySQL by running `raccoonly.sql`.  This will create a database `raccoonly`, a set of tables with some data, and a user named `raccoonly` with full rights to the database.  There should be no errors or warnings.

### (Optional) Reconfigure the application

If you didn't install MySQL locally, or if you installed it using a non-standard port or another non-standard configuration setting, you will need to edit `app.php` appropriately for your configuration.  See the [Database Basics](http://book.cakephp.org/3.0/en/orm/database-basics.html#configuration) section of the CakePHP book for details.

### Start the application

Start the application using CakePHP's development server.  The output should look something like this:

```
Welcome to CakePHP v3.2.10 Console
---------------------------------------------------------------
App : src
Path: /home/yourname/projects/raccoonly/src/
DocumentRoot: /home/yourname/projects/raccoonly/webroot
---------------------------------------------------------------
built-in server is running in http://localhost:8765/
You can exit with `CTRL-C`
```

### Confirm the application is properly configured

The application should be accessible at [http://localhost:8765/](http://localhost:8765/).  

If everything was installed and configured correctly, you should see a default CakePHP page with a list of environment, filesystem, database, and DebugKit checks.  If any of the checks fail, you will need to figure out why and fix them.  (This isn't a test.  The checks should all pass following the instructions above.)

### Familiarize yourself with the basics of the application and the technologies used

Raccoonly is a simple web application for tracking the raccoon population in Toronto and surrounding cities.  It lets you list, create, update, and delete `cities`, `tags`, and `raccoons` (which can live in 0..n cities and have 0..n tags):

### Default routes
Cities: http://localhost:8765/cities  
Raccoons: http://localhost:8765/raccoons  
Tags: http://localhost:8765/tags

Raccoonly follows the standard CakePHP folder structure and conventions.  98% of its code was generated using `cake bake all`, and only 2% was written to support the interview scenarios.
