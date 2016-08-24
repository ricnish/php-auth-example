# Very simple PHP authentication example
This is a very basic example on how to use PHP to authenticate the user login.

It implements two types of authentication:
- HTML page login, when the user arrives by index.php;
- Basic Authentication method, when accessing by api.php.

[See the working example](http://ricnish.rf.gd/php-auth-example/).

Use the user 'admin' and password 'admin'.

To authenticate a page using an HTML login page, include the 'auth.php' file, and call the function **authHTML()**.

To authenticate an API script using the [BASIC Authentication method](https://en.wikipedia.org/wiki/Basic_access_authentication), include the 'auth.php' file, and call the function **authAPI()**, [test the API login](http://ricnish.rf.gd/php-auth-example/api.php)

**NOTE:** There is a lot more to be done for security in real life, this code was done for testing purposes.

The user validation is done by the function **isValidUser($user, $pass)** in the file auth.php, reimplement it to use a custom validation or to just change the default user and password.

The styles and sample page came from [Bootstrap](https://getbootstrap.com/), many thanks.
