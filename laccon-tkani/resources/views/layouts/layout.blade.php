<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title')Laccon_tkani @show</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="css/nomalize.css">
    <link rel="stylesheet" href="css/fonts.css">-->
    <link rel="stylesheet" href="{{asset('assets/front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery.formstyler.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery.formstyler.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery.rateyo.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/media.css')}}">

</head>
<body>

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="header__top-inner">
                <nav class="menu">
                    <button class="menu__btn">
                        <div class="menu__btn-line"></div>
                        <div class="menu__btn-line"></div>
                        <div class="menu__btn-line"></div>
                    </button>
                    <ul class="menu__list">
                        <!--<li class="menu__item">
                            <button class="menu__btn">
                                <img src="img/menu.svg" alt="">
                            </button>
                        </li>-->
                        <li class="menu__item">
                            <a href="/about" class="menu__link">
                                О магазине
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#sale" class="menu__link">
                                Акции
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="/delivery" class="menu__link">
                                Доставка и оплата
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="/glavnaya" class="logo">
                    <img class="logo__img" src="{{asset('assets/front/img/logo.jpg')}}" alt="">
                </a>
                <div class="header__box">
                    <p class="header__adress">
                        г.Ростов-на-Дону, ул.Серафимовича, 72
                    </p>
                    <ul class="user-list">
                        <li class="user-list__item">
                            <a href="#" class="user-list__link">
                                <img src="{{asset('assets/front/img/favorite.svg')}}" alt="">
                            </a>
                        </li>
                        <li class="user-list__item">
                            <a href="#" class="user-list__link js-open-modal" data-modal="1">
                                <img src="{{asset('assets/front/img/user.svg')}}" alt="">
                            </a>
                        </li>
                        <li class="user-list__item">
                            <button onclick="getCart('{{ route('cart.show') }}')" type="button" class="user-list__link basket js-open-modal" data-modal="2">
                                <img src="{{asset('assets/front/img/shopping-cart-4.svg')}}" alt="">
                                <p class="basket__num mini-cart-qty">{{ session('cart_qty') ?? 0 }}</p>
                            </button>
                        </li>


                    </ul>
                    <div class="modal" data-modal="1">
                        <!--   Svg иконка для закрытия окна  -->
                        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                        <div class="signin">
                            <form class="signin_form">
                                <input class="form_input" checked="" id="signin" name="action" type="radio" value="signin">
                                <label class="label_form" for="signin">Вход</label>
                                <input class="form_input" id="signup" name="action" type="radio" value="signup">
                                <label class="label_form" for="signup">Регистрация</label>
                                <input class="form_input" id="reset" name="action" type="radio" value="reset">
                                <label class="label_form" for="reset">Сбросить пароль</label>
                                <div id="wrapper-modal">
                                    <div id="arrow"></div>
                                    <input class="form_input" id="email" placeholder="Email" type="text">
                                    <input class="form_input" id="pass" placeholder="Пароль" type="password">
                                    <input class="form_input" id="repass" placeholder="Повторите пароль" type="password">
                                </div>
                                <button class="signin_btn" type="submit">
								    <span>
								      Сбросить пароль
								      <br>
								      Войти
								      <br>
								      Регистрация
								    </span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="modal" id="cart-modal" data-modal="2">
                        <!--   Svg иконка для закрытия окна  -->
                        <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                        <p class="modal__title">Корзина</p>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="clearCart('{{ route('cart.clear') }}')" class="btn btn-danger btn-cart @if(empty(session('cart'))) d-none @endif">Очистить корзину</button>
                            <a href="{{ route('cart.checkout') }}" class="btn btn-primary btn-cart @if(empty(session('cart'))) d-none @endif">Оформить заказ</a>
                            <!--<button type="button" class="btn btn-primary btn-cart @if(empty(session('cart'))) d-none @endif">Оформить заказ</button>-->

                        </div>
                    </div>

                    <!-- Подложка под модальным окном -->
                    <div class="overlay js-overlay-modal"></div>
                </div>
            </div>
        </div>
    </div>
    <ul class="menu-mobile__list">
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('assets/front/img/user.svg')}}" alt="">
                <p>Войти</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('assets/front/img/user2.svg')}}" alt="">
                <p>Регистрация</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('assets/front/img/favorite.svg')}}" alt="">
                <p>Избранное</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <button onclick="getCart('{{ route('cart.show') }}')" type="button" class="user-list__link basket js-open-modal menu-mobile__btn" data-modal="2">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('assets/front/img/shopping-cart-4.svg')}}" alt="">
                <p>Корзина</p>
            </a>
            </button>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="/about">
                <img class="menu-mobile__img" src="{{asset('assets/front/img/home.svg')}}" alt="">
                <p>О магазине</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <img class="menu-mobile__img" src="{{asset('assets/front/img/sale.svg')}}" alt="">
                <p>Акции</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="/delivery">
                <img class="menu-mobile__img" src="{{asset('assets/front/img/delivery.svg')}}" alt="">
                <p>Доставка и оплата</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="{{route('catalog')}}">
                <p>Все ткани</p>
            </a>
        </li>
        @foreach($categories as $category)
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
            </li>
        @endforeach
        <!--<li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Футер</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Кулирка</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Кашкорсе</p>
            </a>
        </li>
        <li class="menu-mobile__item">
            <a class="menu-mobile__link" href="#">
                <p>Фурнитура</p>
            </a>
        </li>-->
    </ul>
    <div class="menu__mobile-line_wrapper">
        <ul class="menu__mobile-line">
            <li class="menu__item">
                <a href="/about" class="menu__link">
                    О магазине
                </a>
            </li>
            <li class="menu__item">
                <a href="#sale" class="menu__link">
                    Акции
                </a>
            </li>
            <li class="menu__item">
                <a href="/delivery" class="menu__link">
                    Доставка и оплата
                </a>
            </li>
        </ul>
    </div>
    <div class="header__bottom">
        <div class="container">
            <ul class="menu-categories">
                <li class="menu-categories__item">
                    <a href="{{route('catalog')}}" class="menu-categories__link">Все ткани</a>
                </li>
                @foreach($categories as $category)
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->title }}</a>
                    </li>
                @endforeach

                <!--<li class="menu-categories__item">
                    <a href="#" class="menu-categories__link">Футер</a>
                </li>
                <li class="menu-categories__item">
                    <a href="#" class="menu-categories__link">Кулирка</a>
                </li>
                <li class="menu-categories__item">
                    <a href="#" class="menu-categories__link">Кашкорсе</a>
                </li>
                <li class="menu-categories__item">
                    <a href="#" class="menu-categories__link">Фурнитура</a>
                </li>-->
            </ul>
        </div>
    </div>
</header>

@yield('content')




<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top-inner">
                <div class="footer__top-item footer__top-info">
                    <a href="/glavnaya" class="logo">
                        <img class="logo__img-footer" src="{{asset('assets/front/img/logo.jpg')}}" alt="">
                    </a>
                    <p class="footer-form-info">© 2021 Интернет-магазин Laccon_tkani. Все права принадлежат правообладателю. Копирование информации разрешено только при наличии обратной гиперссылки на источник.</p>
                </div>
                <div class="footer__top-item">
                    <h6 class="footer__top-title footer__topdrop">
                        Информация
                    </h6>
                    <ul class="footer-list">
                        <!--<li class="footer-list__item">
                            <a href="/about">О магазине</a>
                        </li>-->
                        <li class="footer-list__item">
                            <a href="/contacts">Контакты</a>
                        </li>
                        <li class="footer-list__item">
                            <a href="#">Личный кабинет</a>
                        </li>
                        <li class="footer-list__item">
                            <a href="#">Избранное</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__top-item">
                    <h6 class="footer__top-title footer__topdrop">
                        Интернет-магазин
                    </h6>
                    <ul class="footer-list">
                        <li class="footer-list__item">
                            <a href="/delivery">Доставка и оплата</a>
                        </li>
                        <li class="footer-list__item">
                            <a href="/vozvrat">Условия возврата</a>
                        </li>
                        <!--<li class="footer-list__item">
                            <a href="#">Отзывы о магазине</a>
                        </li>-->
                        <li class="footer-list__item">
                            <a href="#">Карта сайта</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__top-item footer__top-social">
                    <h6 class="footer__top-title">
                        Подписка на рассылку
                    </h6>
                    <form class="footer-form">
                        <input class="footer-form__input" type="text" placeholder="Введите e-mail">
                        <button class="footer-form__btn" type="submit">Отправить</button>
                    </form>
                    <ul class="social-list">
                        <li class="social-list__item">
                            <a href="https://www.instagram.com/laccon_tkani/?hl=ru">
                                <img src="{{asset('assets/front/img/instagram.svg')}}" alt="">
                            </a>
                        </li>
                        <li class="social-list__item">
                            <a href="https://api.whatsapp.com/send/?phone=79094141652&text&app_absent=0">
                                <img src="{{asset('assets/front/img/whatsapp.svg')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <a class="footer__bottom-link" href="#">
                Договор оферты
            </a>
            <a class="footer__bottom-link" href="#">
                Политика обработки персональных данных
            </a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<script src="{{asset('assets/front/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.formstyler.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.rateyo.min.js')}}"></script>
<script src="{{asset('assets/front/js/main.js')}}"></script>
<script src="{{asset('assets/front/js/modal.js')}}"></script>

</body>
</html>

