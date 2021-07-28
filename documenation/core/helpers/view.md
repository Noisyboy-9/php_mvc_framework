# view

the view function is a helper that helps to abstract the process of including a view and then showing. All it gets is a
view name, and then it will concatenate .view.php to end of it and includes the file from public/views/ folder. The view
method has a second argument called params which is an empty array by default, and then it will extract the array to
create variables with, the array key as the variable name, and the value as the variable value.