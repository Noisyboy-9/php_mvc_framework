# Response

This class will have methods to control the response of the application and to further abstract the process of setting a
HTTP STATUS CODE and other things.

## setStatus()

this will set the status on the http response. it will get an int for the code, and then passes it to http_response_code
function of php-core.

## showNotFoundPage()

this will first set the http_response_code to 404 using setStatus() on the object and then renders the pageNotFound.
view.php file.