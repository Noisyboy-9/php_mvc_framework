<?php include_once "partials/header.php"; ?>

<form method="post" action="/contact">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" required> </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include_once "partials/footer.php"; ?>
