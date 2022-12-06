<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Проект</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php'?>
            <?php include 'menu.inc.php'?>
        </div>

        <div class="about_me">

            <h1>  <?php  echo $p  ?> </h1>

                        <div class="data">


                <div class="fullname">

                    <p> Меня зовут
                    <?php echo $name, ' ' , $surname . '<br>';
                          echo 'город', ' ', $city; ?></p>
                    <p> Мне
                    <?php echo $age;      ?>
                    года </p>
                    <p> - Мы научились создавать переменные;</p>
                    <p> - Изучили простые операции с ними;</p>
                    <p> - Научились писать одностроничный сайт - визитку на PHP языке. </p>
                </div>
            </div>

            <div class="knowledge">

                      <?php include 'knowledge.inc.php'; ?>
                      <?php
                      echo $a, ' ', $b, ' ', $c;?> <br>
                      <?php
                      echo $j;

                      ?> <br>

                      <?php
                          $a = 5;
                          $b = 35;
                          $c = $a / $b;
                          echo $c;
                      ?> <br>
                       <?php
                              echo $d1, ' ', $d2;
                      ?> <br>


                       <?php
                              echo $k;
                       ?>

             </div>

            <div class="article">
                <br><br><br><p class="text">
                    Привет! Этот сайт - визитка был написан мной после того,
                    как я прошла блок программы "Основы веб-программирования".
                    И хотя мне сейчас даётся всё сложно и многие вещи для меня не понятны,
                    я не сдаюсь и хочу пройти этот увлекательный путь до конца!

                </p>

            </div>
        </div>

            <?php include 'footer.inc.php' ?>
    </div>


</body>
</html>


































