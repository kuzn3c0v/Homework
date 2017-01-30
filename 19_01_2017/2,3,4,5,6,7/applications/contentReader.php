<?php if (empty($page)): echo "error"; //Если страница вдруг не указана?>

<?php else: $content = unserialize(file_get_contents('database/content.txt'));?>
           <!-- Если в базе есть контент для этой страницы -->
    <?php if ((isset($content[$page]['title'])) && (isset($content[$page]['content']))): ?>
        <h1><?= $content[$page]['title'] ?></h1>  <!-- Выводим на экран -->
        <p><?= $content[$page]['content'] ?></p>
        <hr>
        <h3>Test</h3>
        <p>Lorem ipsum...</p>
        <?php else: echo "error";
        endif;?>
<?php endif; ?>