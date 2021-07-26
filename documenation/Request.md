# Request

this class will have methods that are working with the $_SERVER global variable. It will have methods to getPath() to
getMethod(). <br>

## getPath

This method will get the REQUEST_URI from the server and parses it to delete all query strings and then just returns
it. <br>

## getMethod

This method will get the REQUEST_METHOD from the server and parses it and makes sure that it is uppercase. so the Router
class can easily work with it and use the return value of the object as key for its internal routes array.<br>