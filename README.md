# PHP Authentication example
This is a very basic example on how to use PHP to authenticate the user login.

It implements two types of authentication:
- HTML page login, when the user arrives by index.php;
- Basic Authentication method, when accessing by api.php.

To authenticate using an HTML login page, include 'auth.php' file, and call the function **authHTML()**.

To authenticate using the [BASIC Authentication method](https://en.wikipedia.org/wiki/Basic_access_authentication), include 'auth.php' file, and call the function **authAPI()**.

[See the working example](http://ricnish.16mb.com/php-auth-example).

To authenticate, use user 'admin' and password 'admin'.

The styles and sample page came from [Bootstrap](https://getbootstrap.com/), many thanks.
