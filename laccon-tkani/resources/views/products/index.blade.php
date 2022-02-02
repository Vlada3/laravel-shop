@extends('layouts.layout')


@section('content')
    <section class="banner-section page-section">
        <div class="container">
            <div class="banner-section__inner">
                <div class="banner-section__slider">
                    <div class="banner-section__slider-item">
                        <img class="banner__img" src="{{asset('assets/front/img/banner1.png')}}" alt="">
                    </div>
                    <div class="banner-section__slider-item">
                        <img class="banner__img" src="{{asset('assets/front/img/banner2.png')}}" alt="">
                    </div>
                    <div class="banner-section__slider-item">
                        <img class="banner__img" src="{{asset('assets/front/img/banner3.png')}}" alt="">
                    </div>
                    <div class="banner-section__slider-item">
                        <img class="banner__img" src="{{asset('assets/front/img/banner4.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="search page-section">
        <div class="container">
            <div class="searh__inner">
                <div class="search__tab">
                    Поиск по названию товара
                </div>
                <div class="searh__content">
                    <form class="searh__content-form">
                        <input class="searh__content-input" type="text" placeholder="Введите название товара">
                        <button class="searh__content-btn" type="submit">Искать</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <div class="products__inner">
                <h3 class="product__title">Новинки</h3>
                <div class="tabs-wrapper">
                    <div class="tabs products__tabs">
                        <a class="tab products__tab tab--active" href="#">

                        </a>
                        <a class="tab products__tab" href="#product-new-tab-1">
                            Футер
                        </a>
                        <a class="tab products__tab" href="#product-new-tab-2">
                            Кулирка
                        </a>
                        <a class="tab products__tab" href="#product-new-tab-3">
                            Кашкорсе
                        </a>
                        <a class="tab products__tab" href="#product-new-tab-4">
                            Фурнитура
                        </a>
                    </div>
                    <div class="tabs-conteiner products__container">
                        <div id="product-new-tab-1" class="tabs-content products__content tabs-content--active">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//abrikos.jpg')}}"alt="">
                                            <h4 class="product-item__title">Абрикосы</h4>
                                            <p class="price product-item__price">1050 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//bozyakorovka.jpg')}}"alt="">
                                            <h4 class="product-item__title">Божьи коровки</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//cheetos.jpg')}}"alt="">
                                            <h4 class="product-item__title">Читос</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//cola.jpg')}}"alt="">
                                            <h4 class="product-item__title">Кола</h4>
                                            <p class="price product-item__price">870 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//kraski.jpg')}}"alt="">
                                            <h4 class="product-item__title">Краски</h4>
                                            <p class="price product-item__price">1390 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//uyt.jpg')}}"alt="">
                                            <h4 class="product-item__title">Уют</h4>
                                            <p class="price product-item__price">860 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//zveryata.jpg')}}"alt="">
                                            <h4 class="product-item__title">Зверята</h4>
                                            <p class="price product-item__price">210 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-new-tab-2" class="tabs-content products__content">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//avocado.jpg')}}"alt="">
                                            <h4 class="product-item__title">Авокадо</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//flamingo.jpg')}}"alt="">
                                            <h4 class="product-item__title">Фламинго</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snegovik.jpg')}}"alt="">
                                            <h4 class="product-item__title">Снеговик</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snezinki.jpg')}}"alt="">
                                            <h4 class="product-item__title">Снежинки</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//vgoroshek.jpg')}}"alt="">
                                            <h4 class="product-item__title">В горошек</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//limon.jpg')}}"alt="">
                                            <h4 class="product-item__title">Сочный лимон</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//hlopok.jpg')}}" alt="">
                                            <h4 class="product-item__title">Хлопок</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-new-tab-3" class="tabs-content products__content">
                            slider-3
                        </div>
                        <div id="product-new-tab-4" class="tabs-content products__content">
                            slider-4
                        </div>
                    </div>
                </div>
                <h3 class="product__title">Популярные товары</h3>
                <div class="tabs-wrapper">
                    <div class="tabs products__tabs">
                        <a class="tab products__tab tab--active" href="#">

                        </a>
                        <a class="tab products__tab" href="#product-tab-1">
                            Футер
                        </a>
                        <a class="tab products__tab" href="#product-tab-2">
                            Кулирка
                        </a>
                        <a class="tab products__tab" href="#product-tab-3">
                            Кашкорсе
                        </a>
                        <a class="tab products__tab" href="#product-tab-4">
                            Фурнитура
                        </a>
                    </div>
                    <div class="tabs-conteiner products__container">
                        <div id="product-tab-1" class="tabs-content products__content tabs-content--active">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//avocado.jpg')}}" alt="">
                                            <h4 class="product-item__title">Авокадо</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//flamingo.jpg')}}" alt="">
                                            <h4 class="product-item__title">Фламинго</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snegovik.jpg')}}" alt="">
                                            <h4 class="product-item__title">Снеговик</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snezinki.jpg')}}" alt="">
                                            <h4 class="product-item__title">Снежинки</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//vgoroshek.jpg')}}" alt="">
                                            <h4 class="product-item__title">В горошек</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//limon.jpg')}}" alt="">
                                            <h4 class="product-item__title">Сочный лимон</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//hlopok.jpg')}}" alt="">
                                            <h4 class="product-item__title">Хлопок</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-tab-2" class="tabs-content products__content">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//avocado.jpg')}}" alt="">
                                            <h4 class="product-item__title">Авокадо</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//flamingo.jpg')}}" alt="">
                                            <h4 class="product-item__title">Фламинго</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snegovik.jpg')}}" alt="">
                                            <h4 class="product-item__title">Снеговик</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snezinki.jpg')}}" alt="">
                                            <h4 class="product-item__title">Снежинки</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//vgoroshek.jpg')}}" alt="">
                                            <h4 class="product-item__title">В горошек</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//limon.jpg')}}" alt="">
                                            <h4 class="product-item__title">Сочный лимон</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//hlopok.jpg')}}" alt="">
                                            <h4 class="product-item__title">Хлопок</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-tab-3" class="tabs-content products__content">
                            slider-3
                        </div>
                        <div id="product-tab-4" class="tabs-content products__content">
                            slider-4
                        </div>
                    </div>
                </div>
                <h3 class="product__title"><a name="sale"></a>Распродажа</h3>
                <div class="tabs-wrapper">
                    <div class="tabs products__tabs">
                        <a class="tab products__tab tab--active" href="#">
                        </a>
                        <a class="tab products__tab" href="#product-sale-tab-1">
                            Футер
                        </a>
                        <a class="tab products__tab" href="#product-sale-tab-2">
                            Кулирка
                        </a>
                        <a class="tab products__tab" href="#product-sale-tab-3">
                            Кашкорсе
                        </a>
                        <a class="tab products__tab" href="#product-sale-tab-4">
                            Фурнитура
                        </a>
                    </div>
                    <div class="tabs-conteiner products__container">
                        <div id="product-sale-tab-1" class="tabs-content products__content tabs-content--active">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//bees.jpg')}}" alt="">
                                            <h4 class="product-item__title">Пчелки</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 400 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">260 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//cherry.jpg')}}" alt="">
                                            <h4 class="product-item__title">Вишня</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">770 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//granat.jpg')}}" alt="">
                                            <h4 class="product-item__title">Гранат</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">790 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//green.jpg')}}" alt="">
                                            <h4 class="product-item__title">Салатовый</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">800 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//hearts.jpg')}}" alt="">
                                            <h4 class="product-item__title">Сердечки</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">790 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//rose.jpg')}}" alt="">
                                            <h4 class="product-item__title">Пыльная роза</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">800 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//tomjerry.jpg')}}" alt="">
                                            <h4 class="product-item__title">Том и Джерри</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">790 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-sale-tab-2" class="tabs-content products__content">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//avocado.jpg')}}" alt="">
                                            <h4 class="product-item__title">Авокадо</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//flamingo.jpg')}}" alt="">
                                            <h4 class="product-item__title">Фламинго</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snegovik.jpg')}}" alt="">
                                            <h4 class="product-item__title">Снеговик</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//snezinki.jpg')}}" alt="">
                                            <h4 class="product-item__title">Снежинки</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//vgoroshek.jpg')}}" alt="">
                                            <h4 class="product-item__title">В горошек</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26//limon.jpg')}}"alt="">
                                            <h4 class="product-item__title">Сочный лимон</h4>
                                            <p class="price product-item__price">850 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper product-item__not-availible">
                                        <button class="product-item__favorite">
                                        </button>
                                        <button class="product-item__basket">
                                            <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                        </button>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item--sale" href="#">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{asset('storage/images/2022-01-26/hlopok.jpg')}}" alt="">
                                            <h4 class="product-item__title">Хлопок</h4>
                                            <p class="price product-item__price-old">
                                                <strike> 900 ₽/метр </strike>
                                            </p>
                                            <p class="price product-item__price-new">750 ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-sale-tab-3" class="tabs-content products__content">
                            slider-3
                        </div>
                        <div id="product-sale-tab-4" class="tabs-content products__content">
                            slider-4
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
