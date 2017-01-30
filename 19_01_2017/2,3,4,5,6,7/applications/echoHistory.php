<table class="table table-striped">
    <thead>
    <tr>
        <th>Страница</th>
        <th>Время посещения</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION['history'] as $value): ?>
        <tr>
            <td><?php echo $value[0]; ?></td>
            <td><?php echo $value[1]; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<!-- Кнопка очистки истории-->
<div class="clear">
    <form action="history.php" method="post">
        <input type="hidden" name="clear">
        <input type="submit" value="Очистить историю" id="clearButton" class="btn btn-primary">
    </form>
</div>