<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/custom.css') }}"> -->
    @vite(['resources/css/custom.css'])
    @vite(['resources/js/custom.js'])
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/536caefa35.js" crossorigin="anonymous"></script>
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">--}}

    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    {{--    <script src="https://unpkg.com/@popperjs/core@2https://unpkg.com/@popperjs/core@2https://unpkg.com/@popperjs/core@2" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
    {{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
    <title>FoodCenter</title>
</head>
<body>
<header id="header" class="position-relative my-header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F5F5F5">
        <div class="container-fluid my-container">
            <a href="{{ route('welcomeUnlog.index') }}" class="navbar-brand">FoodCenter</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
                    <li class="nav-item">
                        <a href="{{ route('stockUnlog.index') }}" class="nav-link">Акции</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contactUnlog.index') }}" class="nav-link">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('infoUnlog.index') }}" class="nav-link">Доставка и оплата</a>
                    </li>
                </ul>
                <form class="d-flex search">
                    <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn-search btn-outline" type="submit">Поиск</button>
                </form>

                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

                    <li>
                        <div class="linkToLogReg">
                            <a href="{{ route('login') }}" class="linksToLogin">Войти</a>
                            <a href="{{ route('register') }}" class="linksToLogin">Регистрация</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    {{--        <i class="fa-solid fa-bars"></i>--}}
</header>
   <div class="contacts">
       <div class="container">
           <div class="contact-title">
               <h1>Контакты</h1>
           </div>
           <div class="contacts-icons">
               <div class="row">
                   <div class="col-sm">
                       <ul style="list-style: none">
                           <li><a href="#"><i class="fa-solid fa-phone"></i><a href="tel:555 123-45-67">555 123-45-67</a></a></li>
                           <li><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
                           <li><a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a></li>
                           <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
                       </ul>
                   </div>
                   <div class="col-sm">
                       <ul style="list-style: none">
                           <li><a href="#"><i class="fa-brands fa-discord"></i>Discord</a></li>
                           <li><a href="#"><i class="fa-brands fa-youtube"></i>Youtube</a></li>
                           <li> <a href="#"><i class="fa-brands fa-telegram"></i>Telegram</a></li>
                           <li><a href="#"><i class="fa-solid fa-envelope"></i>info@info.ru</a></li>
                       </ul>
                   </div>
               </div>
           </div>
           <div class="form-send-message">
               <h2>Напишите нам</h2>
               <p>Заполните форму и отправьте сообщение! Мы обязательно с Вами свяжемся!</p>
               <div class="form">
                   <input required type="text" name="name" placeholder="Как к Вам можно обращаться" autocomplete="off">
                   <input required type="text" name="phone" placeholder="Ваш телефон" autocomplete="off">
                   <input required type="email" name="email" placeholder="Ваша электронная почта" autocomplete="off">
                   <div>
                       <textarea required name="mess" placeholder="Напишите сообщение" rows="6"></textarea>
                   </div>
               </div>
               <input class="button" type="submit" value="Отправить">
           </div>
       </div>
   </div>
<footer>
    <section class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-6">
                    <h4>Информация</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Оплата и доставка</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Время работы</h4>
                    <ul class="list-unstyled">
                        <li>Юр.-адрес: г. Севастополь, ул.Нахимова, 1</li>
                        <li>Время приема: пн-пт: 9:00-18:00</li>
                        <li>Время работы доставки: пн-вс: 8:00-23:00 </li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Контакты</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:5551234567">555 123-45-67</a></li>
                        <li><a href="tel:5551234568">555 123-45-68</a></li>
                        <li><a href="tel:5551234569">555 123-45-69</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4>Социальные сети</h4>
                    <div class="footer-icons">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

