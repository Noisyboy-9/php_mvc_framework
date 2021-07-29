# User

The user model is responsible to model all users in the database.

## load()

this function is overwritten version of the base model load function that will get the input name, email, password,
password confirmation and sets them to their fields.

## isValid()

this method first checks if the name, email, password, password_confirmation fields are not missing and then checks if
the password confirmation, and the actual password input form the user are the same. if the validations pass it will
return true. if the validation doesn't pass it will return false and populates the errors array.

## save()
the save method will write the current state of the fields to the database. It will write the name, the email, and a 
md5 hash version of the password to the database. 