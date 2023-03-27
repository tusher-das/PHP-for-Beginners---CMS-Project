<?php
include("db.php");
include("functions.php");

if (isset($_POST['submit'])) {
    createUser();
}
?>


<?php include("includes/header.php"); ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="">
            </div>
            <br>
            <input type="submit" value="CREATE" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>

<?php include("includes/footer.php"); ?>