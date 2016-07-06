<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Marapahu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include_once "header.php";?>
    <section class="navigation">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <div class="col-xs-12">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="navbar-nav">
                        <li>
                            <a href="/index.php">Главная</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Поиск туров</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Горячие туры</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Новости</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="/contacts.php">Контакты</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#">Отзывы</a>
                            <div class="jaw">
                                <div></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section class="hot-tours">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info_block">
                        <p>Заказать туры</p>
                        <p class="info-text">
                            Самые актуальные горящие туры.
                            Звоните и летите отдыхать.
                        </p>
                        <button>Контакты</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="empty">
                    
                </div>
            </div>
        </div>
    </section>

    <section class="send-message">
        <div class="row">
            <div class="col-md-offset-1 col-md-11">
                <div class="message-form">
                    <div class="container">
                        <header>
                            Не нашли то что искали, напиши свои пожелания и мы подберем:
                        </header>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="message-inputs">
                                    <input type="text" placeholder="ФИО*" />
                                    <br />
                                    <input type="tel" placeholder="Ваш телефон*" />
                                    <br />
                                    <input type="email" placeholder="E-mail*" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="message-text">
                                    <textarea placeholder="Куда желаете улететь"></textarea>
                                </div>
                                <button>Отправить</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="hot-tours-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info_block">
                        <p>Египет</p>
                        <p class="info-text">Короткий фрагмент</p>
                        <button>See More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php include_once "footer.php";?>

    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</body>
</html>
