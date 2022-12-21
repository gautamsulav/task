## About the project

It is a simple Api driven application to create/login users and their tasks.

The project structure is self explanatory.
There are three controllers: AuthController, UserController and TaskController.

AuthController is used for user registration and login.
TaskController and UserController are auth protected and requires token for CRUD operations.
