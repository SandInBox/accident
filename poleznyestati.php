<?php require_once 'connect.php'; ?>
<?php
session_start();
?>
<?php
$sql = $pdo->prepare("SELECT * FROM info");
$sql->execute();
$res = $sql->fetchAll(PDO::FETCH_ASSOC);

$city = 'Пенза';
$nomber = '+78412720222';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Аварийные коммисары</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style-two.css">
    </head>

    <body>
        <header class="header">
            <div class="container">
                <div class="header__up-flex">
                    <div class="header__up-flex-item">
                        <svg class="header__up-flex-svg" width="18" height="25" viewBox="0 0 18 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.44133 24.3198C11.2502 22.5015 18 15.2879 18 8.88166C18 6.65881 17.0518 4.52676 15.364 2.955C13.676 1.383 11.3868 0.5 9 0.5C6.61315 0.5 4.32372 1.383 2.63597 2.955C0.948162 4.52681 0 6.65885 0 8.88166C0 15.2879 6.74958 22.5017 8.55867 24.3198C8.67252 24.4347 8.83231 24.5 9.00009 24.5C9.16787 24.5 9.32748 24.4347 9.44133 24.3198ZM4.30858 8.88166C4.30858 7.72319 4.80274 6.61195 5.68238 5.79276C6.56223 4.97338 7.75526 4.51319 8.99944 4.51319C10.2436 4.51319 11.4366 4.97338 12.3165 5.79276C13.1961 6.61195 13.6903 7.72319 13.6903 8.88166C13.6903 10.0403 13.1961 11.1516 12.3165 11.9708C11.4366 12.7899 10.2436 13.2503 8.99944 13.2503C7.75526 13.2503 6.56223 12.7899 5.68238 11.9708C4.80273 11.1516 4.30858 10.0403 4.30858 8.88166Z"
                                fill="#01A77A" />
                        </svg>
                        <p class="header__up-flex-city">
                            <?php echo $city ?>
                        </p>
                    </div>
                    <p class="header__up-flex-work">
                        Работаем <b class="header__up-flex-work-b">24/7</b>
                    </p>
                    <svg class="header__up-flex-svg2" width="28" height="28" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle class="header__up-flex-svg2-circle" cx="14" cy="14" r="14" fill="#01A77A"
                            fill-opacity="0.2" />
                        <circle cx="14" cy="14" r="13.5" stroke="#01A77A" stroke-opacity="0.5" />
                        <circle cx="14.0001" cy="14.0001" r="6.22222" fill="#01A77A" />
                    </svg>

                    <p class="header__up-flex-inline">
                        Комиссаров на линии: 6
                    </p>
                    <a href="tel:<?php echo $nomber ?>" class="header__up-flex-btn btn-1 btn-2">
                        <svg class="header__up-flex-btn-svg" width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.2452 11.7549C15.3788 10.8948 13.9799 10.8948 13.1135 11.7549L12.5872 12.2876C12.1188 12.756 11.3808 12.8267 10.8353 12.4545C8.74962 11.0295 6.97197 9.25162 5.54729 7.16554C5.17514 6.61995 5.2456 5.88181 5.71417 5.41333L6.24675 4.88693C7.10666 4.02041 7.10666 2.62123 6.24675 1.75472L5.13014 0.644368C4.27023 -0.222145 2.86484 -0.222145 1.95993 0.689357C-0.324884 2.97427 -0.652177 6.51709 1.18968 9.11682C3.30746 12.1079 5.89353 14.6944 8.88409 16.8126C10.0136 17.6084 11.3163 18 12.6253 18C14.3195 18 16.0201 17.339 17.3101 16.0423L17.3551 15.9973C18.215 15.1373 18.215 13.7316 17.3551 12.8714L16.2449 11.7546L16.2452 11.7549Z"
                                fill="url(#paint0_linear_107_792)" />
                            <defs>
                                <linearGradient id="paint0_linear_107_792" x1="0" y1="0" x2="18.584" y2="0.624629"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4CCE70" />
                                    <stop offset="1" stop-color="#01A77A" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <p class="header__up-flex-btn-text">
                            Вызвать комиссара
                        </p>
                    </a>
                </div>
            </div>
        </header>

        <section class="rev">
            <div class="container">
                <p class="rev__title">
                    Полезные статьи
                </p>
                <div class="rev__flex">
                    <?php  foreach ($res as $item): ?>
                    <div class="rev__flex-item">
                        <img class="rev__flex-item-ico" src="<?php echo $item['image'] ?>" alt="">
                        <p class="rev__flex-item-title">
                            <?php echo $item['title'] ?>
                        </p>
                        <a href="poleznyestati.php" class="reviews__flex-btn">
                            <p class="reviews__flex-btn-text">
                                Читать статью
                            </p>
                            <svg class="reviews__flex-btn-svg" width="7" height="14" viewBox="0 0 7 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 7.00002C7 7.23301 6.91597 7.46597 6.74825 7.6436L1.46804 13.2333C1.13215 13.5889 0.587565 13.5889 0.251814 13.2333C-0.0839378 12.8779 -0.0839377 12.3015 0.251814 11.9459L4.92404 7.00002L0.251978 2.05414C-0.0837731 1.69856 -0.083773 1.12222 0.251978 0.766813C0.58773 0.411061 1.13231 0.411061 1.4682 0.766813L6.74842 6.35645C6.91616 6.53416 7 6.76712 7 7.00002Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </body>

    </html>