<?php include_once "partials/header.php" ?>
<h1 class="h1 mb-4">Register</h1>

<form method="post" action="/contact">
    <div class="mb-4">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="mb-4">
        <button type="submit" class="btn btn-success">Register</button>
        <a class="m-3 link-primary" href="/login">Already Have an Account?</a>
    </div>
</form>
<?php include_once "partials/footer.php" ?>
