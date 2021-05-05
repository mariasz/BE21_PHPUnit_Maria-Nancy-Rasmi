# PHPUnit Tests How To

## Install Composer

https://getcomposer.org/doc/00-intro.md

to check installation worked run `composer --v`

## Setup PHPUnit Project

1. Create a project folder (inside xampp/htdocs)

2. add ‘scr’ folder for source files (that need to be tested)

   project
   └── scr

3. add ‘tests’ folder for test files

   project
   └── scr  
   └── tests

4. add composer.json file for composer package management

   either copy existing compser.json project
   or create it new one with 'composer init'

   project
   └── scr  
   └── tests
   └── composer.json

5. Install/Update required composer

   inside the terminal (inside project folder) run:
   `composer require --dev phpunit/phpunit ^9.5`
   (or what ever version needed for compatibility)

   this command creates a vendor folder inside the project with the installation

   project
   └── scr  
   └── tests
   └── vendor
   └── composer.json

6. verify that PHPUnit is installed successfully to your composer test folder

   `vendor\bin\phpunit --version`

## Write PHPUnit Test

- Inside of the 'src' folder add PHP Class files to be testet
- inside of 'tests' folder create testing files

To run all tests inside tests folder:

`vendor\bin\phpunit tests`
