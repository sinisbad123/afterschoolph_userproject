# AfterschoolPH User Directory
User directory of AfterschoolPH

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

## index.html
- This contains the basic login UI. The page issues an ajax request and receives the response from the login_api.php file.
- Also contains the code for destroying sessions because it's not good to retain sessions when they are not in use at all.

## login.js
- This contains the basic validations and the communication between the web service and the client side.

## dbutil.php
- This contains the inital connection to the database

## afterschool.pdf
- This pdf file contains the database diagram for the project.
