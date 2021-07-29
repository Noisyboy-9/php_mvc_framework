# Application

this class will act as a container and has everything the application needs.<br>
the list of the things the application class have is :

- request : to access the request object of the application
- router : to access the router object of the application
- loggedIn : to have a flag indicator that the current user is logged in or not

the Application class will implement the singleton design pattern, so an instance of it is available globally in the
project.

## getInstance()

to get the singleton instance of the class, if the instance filed is null, then it will create a new instance of the
Application class and sets on the field again, so every other time the getInstance() is called the saved instance will
be returned.

## isLoggedIn()

to check if the current user is logged in or not.