# Request

this class will have methods that are working with the $_SERVER global variable. It will have methods to getPath() to
getMethod(). <br>

## path()

This method will get the REQUEST_URI from the server and parses it to delete all query strings and then just returns
it. <br>

## method()

This method will get the REQUEST_METHOD from the server and parses it and makes sure that it is uppercase. so the Router
class can easily work with it and use the return value of the object as key for its internal routes array.<br>

## isGet()

checks if the incoming request is an instance of GET method.

## isPost()

checks if the incoming request is an instance of POST method.

## body()

this method is responsible to look inside the $_GET or $_POST super globals based on the current request method and then
sanitize the values and make a new array from them and return that.