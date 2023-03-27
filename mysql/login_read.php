<?php

include("db.php");

include("functions.php");

?>


<?php include("includes/header.php"); ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">User List</h1>

        <?php displayData() ?>

    </div>
</div>

<?php include("includes/footer.php"); ?>