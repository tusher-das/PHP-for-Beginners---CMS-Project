<?php include "db.php"; ?>

<?php include "functions.php"; ?>

<?php
if (isset($_POST['submit'])) {
    deleteRow();
}
?>

<?php include("includes/header.php"); ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="">
            </div> <br>
            <div class="form-group">
                <select name="id" id="">
                    <?php showAllData(); ?>
                </select>
            </div>
            <br>
            <input type="submit" value="DELETE" name="submit" class="btn btn-primary">
        </form>

    </div>
</div>

<?php include("includes/footer.php"); ?>