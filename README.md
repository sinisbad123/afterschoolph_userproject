# AfterschoolPH User Directory
User directory of AfterschoolPH

# NOTE
- Before starting, make sure to run the script in order to simulate the different records.
- Currently there are two users, mike and marcus.
- You can check their respective login info within the script or within the database after running the script.

## Exercise 1
Used tools:
- Sublime Text 3
- Xampp (Apache, PHPMyadmin)
- Firefox Developer tools
- Bootstrap
- Font Awesome (For those textbox icons)
- JQuery (For rapid JS coding)

## Exercise 2
Used tools:
- PhpMyadmin (For generating database diagram)

Note: Used normalization, assuming that we only need to monitor the tasks and only one user is assigned to each task.

## Exercise 3
Used tools:
- Sublime Text 3
- Xampp (Apache, PHPMyadmin)
- Firefox Developer tools
- Bootstrap
- Font Awesome (For those textbox icons)
- JQuery (For rapid JS coding)
- [Bootstrap table](https://github.com/wenzhixin/bootstrap-table)
...For better data binding

## Preference(Front-end or back-end)
I am comfortable working in the front-end, but I can also help a little bit for the back-end.

#Explanation for each individual files:

## index.html
- This contains the basic login UI. The page issues an ajax request and receives the response from the login_api.php file.
- Also contains the code for destroying sessions because it's not good to retain sessions when they are not in use at all.

## login.js
- This contains the basic validations and the communication between the web service and the client side for the login page.

## search.js
- This contains the basic validations and the communication between the web service and the client side for the landing/search page.

## dbutil.php
- This contains the inital connection to the database

## login_api.php
- This contains the web service for retrieving and validating the user upon logging in.

## search_api.php
- This contains the web service for retrieving data from the database based on the supplied username.

## afterschool.pdf
- This pdf file contains the database diagram for the project.

## afterschoolph.sql
- Contains the script for the whole database used
