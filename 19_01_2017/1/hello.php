<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/style.css">
<div class="hello">
<?php
session_start();

echo "<br><h2>Hello {$_SESSION['name']}!</h2>";
?>
<a href="logout.php" class="btn btn-info"><?=$_SESSION['name']?> Выйти из системы</a>
</div>