<div class="container-fluid bg-3 text-center" style="margin-top: 4%">
    <div class="row">
<?php
$statistic = unserialize(file_get_contents('database/statistic.db'));//Посмотреть в базе статистику скачиваний
$handle = opendir('uploads/');    //Дескриптор каталога
$count = 0;                       //Счетчик для перехода на новую строку, после вывода 4 картинок
while(false !== ($objectName = readdir($handle))) {
    if (pathinfo($objectName, PATHINFO_EXTENSION) == "jpg"): $count++  //Если это рисунок нужного формата?>
        <?php if ($count == 5): //больше 4 картинок - переход на новую строку?>
            </div>
        </div><br>
        <div class="container-fluid bg-3 text-center">
            <div class="row">
        <?php endif; ?>
        <div class="col-sm-3">
            <p><a href="applications/download.php?file=<?= $objectName ?>"><?= pathinfo($objectName, PATHINFO_FILENAME)
            . "  "; ?><span class="glyphicon glyphicon-download-alt">
                        <h6><?= echoStat($objectName, $statistic) ?></h6></span></a></p> <!-- Выведем статистку скачиваний -->

            <img src="<?="uploads" . DIRECTORY_SEPARATOR .$objectName?>" class="img-responsive" style="width:100%" alt="Image">
        </div>
    <?php endif;
}
?>
    </div>
</div><br>

<?php
function echoStat ($filename, $statistic){ //Функция для нахожждения в базе статистики скачиваний файла
    foreach ($statistic as $value) {
        if ($value['filename'] == $filename){
            return (" скачиваний: " . $value['downloadCount']);
        }
    }
    return (" скачиваний: 0");
}
?>
