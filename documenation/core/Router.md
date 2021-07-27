# Router

The router class will have a list of all the routes in the application and will redirect the incoming requests to the
current closure or controller.

## routes filed

the routes filed will be a multi-dimensional array containing all routes that are registered with POST, GET methods.<br>
by default, it has a key for GET routes which equals an empty array and also a POST key which again is an empty array.
These arrays will be populated with routes string as their key and closure or controllers as their values.

## constructor()

in its constructor the Router class will receive an instance of Request class in order to be able to delegate the path
reading and parsing to it. <br>

## get()

this method will register an GET route in the application, it will add the route to GET key of the array.

## post()

this method will register an POST route in the application, it will add the route to POST key of the array.

## view()

sometimes all a method callback is doing is to just render a view.It would be better if we had some shorter syntax for
it so whenever the client hits the route with a GET method a view will be shown. the view() method is responsible for
making a shorter and better way for just showing the view, all it does is to get the view name string and then creates a
callback that renders the view and then calls the get() on the object to get register the route with its callback as a
GET route.

## resolve()

this method is the main method responsible for resolving input path. if it finds the path in its registered routes it
will get the callback and execute it, if it doesn't find the input URL as a registered route, it will throw an
PageNotFoundException with 404 status code
