</div>
<div class="col-sm-2 sidenav">
    <?php if (isset($_SESSION['onlineTime'])): ?>
    <h4>Online</h4>
    <div class="well">
        <?= date('i',  time() - $_SESSION['onlineTime']) . " минут  "
            . date('s',  time() - $_SESSION['onlineTime']) . " секунд";?>
    </div>
    <?php endif; ?>

</div>
</div>
</div>

<footer class="container-fluid text-center">
    <p>&copy; 2016 Company, Inc.</p>
</footer>

</body>
</html>