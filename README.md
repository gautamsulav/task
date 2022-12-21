## About the project

It is a simple Api driven application to create/login users and their tasks.

The project structure is self explanatory.
There are three controllers: AuthController, UserController and TaskController.

AuthController is used for user registration and login.
TaskController and UserController are auth protected and requires token for CRUD operations.

## Following routes are available
```
  POST            api/auth/login ........................................................................ Api\AuthController@login
  POST            api/auth/register .................................................................... Api\AuthController@create
  GET|HEAD        api/task/mark-closed/{task} ...................................................... Api\TaskController@markClosed
  GET|HEAD        api/task/mark-completed/{task} ................................................ Api\TaskController@markCompleted
  GET|HEAD        api/tasks ............................................................... tasks.index › Api\TaskController@index
  POST            api/tasks ............................................................... tasks.store › Api\TaskController@store
  GET|HEAD        api/tasks/{task} .......................................................... tasks.show › Api\TaskController@show
  PUT|PATCH       api/tasks/{task} ...................................................... tasks.update › Api\TaskController@update
  DELETE          api/tasks/{task} .................................................... tasks.destroy › Api\TaskController@destroy
  GET|HEAD        api/users ............................................................... users.index › Api\UserController@index
  POST            api/users ............................................................... users.store › Api\UserController@store
  GET|HEAD        api/users/{user} .......................................................... users.show › Api\UserController@show
  PUT|PATCH       api/users/{user} ...................................................... users.update › Api\UserController@update
  DELETE          api/users/{user} .................................................... users.destroy › Api\UserController@destroy
```
