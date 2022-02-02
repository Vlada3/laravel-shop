@extends('layouts.layout')
@section('title', 'Доставка и оплата')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list mobile-overflow">
                    <li class="breadcrumbs__list-item">
                        <a href="/glavnaya">Главная</a>
                    </li>
                    <li class="breadcrumbs__list-item">
                        <span>Доставка и оплата</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="delivery">
        <div class="container">
            <div class="title-h1">
                <h1>Доставка</h1>
            </div>
            <div class="all-box-contact">
                <div class="box-delivery clearfix">
                    <div class="box-delivery_left">
                        <div class="box-delivery_title">
                            По Ростову-на-Дону и Батайску:
                        </div>
                        <div class="box-delivery_thumb"><img alt="photo" src="{{asset('assets/front/img/city3.png')}}"></div>
                        <div class="box-delivery_item">
                            <h3><span>Бесплатная доставка</span> по Ростову-на-Дону и Батайску</h3>
                            <p>При заказе товаров на сумму<br>
                                <span>от 3000 рублей</span></p>
                        </div>
                    </div>
                    <div class="box-delivery_right">
                        <div class="box-delivery_item">
                            <h3>Доставка по Ростову-на-Дону курьером <span></span></h3>
                            <p>Доставка осуществляется<br>
                                в течение 1-2 рабочих дней.</p>
                            <div class="box-delivery_price">
                                200 <span>₽</span>
                            </div>
                        </div>
                        <div class="box-delivery_item">
                            <h3>Доставка по Батайску курьером <span></span></h3>
                            <p>Доставка осуществляется<br>
                                в течение 1-2 рабочих дней.</p>
                            <div class="box-delivery_price">
                                100 <span>₽</span>
                            </div>
                        </div>
                        <!--<div class="box-delivery_item">
                            <h3>Доставка по Ростову-на-Дону и Батайску курьером<span></span></h3>
                            <p>если вес посылки не превышает 5кг</p>
                            <div class="box-delivery_price">
                                <span class="box-delivery_price-text"></span>&nbsp;99 <span>₽</span>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="box-delivery box-delivery-2 clearfix">
                    <div class="box-delivery_left">
                        <div class="box-delivery_title">
                            По регионам:
                        </div>
                        <div class="box-delivery_thumb"><img alt="photo" src="{{asset('assets/front/img/images-house.svg')}}"></div>
                    </div>
                    <div class="box-delivery_right">
                        <div class="box-delivery_item">
                            <h3>Доставка Почтой России</h3>
                            <!--<p>Средний срок доставки 7-15<br>
                            рабочих дней</p>
                            <div class="box-delivery_price">
                                250 <span>₽</span>
                            </div>-->
                            <p>Стоимость доставки рассчитывается<br>
                                согласно тарифам Почты России</p>
                            <div class="box-delivery_price">
                                <span class="box-delivery_price-text">по тарифу Почты России</span>
                            </div>
                        </div>
                        <div class="box-delivery_item">
                            <h3>Доставка службой СДЭК</h3>
                            <p>Стоимость доставки рассчитывается<br>
                                согласно тарифам выбранной компании</p>
                            <div class="box-delivery_price">
                                <span class="box-delivery_price-text">по тарифу ТК СДЭК</span>
                            </div>
                        </div>
                        <div class="box-delivery_item">
                            <h3>Доставка службой OZON</h3>
                            <p>В любой пункт выдачи или постомат, который есть в Вашем городе</p>
                            <div class="box-delivery_price">
                                119 <span>₽</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-delivery clearfix">
                    <div class="box-delivery_left">
                        <div class="box-delivery_title">
                            Самовывоз:
                        </div>
                        <div class="box-delivery_thumb">
                            <img alt="photo" src="{{asset('assets/front/img/image-map.svg')}}">
                            <div class="box-delivery_position">
                                <a class="box-delivery_link-map" href="https://yandex.ru/maps/-/CCU544eFPA"><i><svg height="43px" width="29px" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.851,19.976 C26.335,24.018 24.359,27.835 22.157,31.530 C20.042,35.079 17.809,38.558 15.612,42.057 C14.934,43.138 14.118,43.127 13.415,42.071 C9.787,36.625 6.355,31.062 3.443,25.193 C2.255,22.801 1.184,20.359 0.496,17.763 C-0.471,14.117 0.109,10.674 1.964,7.469 C4.309,3.420 7.855,1.032 12.496,0.317 C13.169,0.213 13.854,0.181 14.339,0.135 C21.191,0.260 26.582,4.519 28.412,10.574 C29.380,13.778 29.008,16.890 27.851,19.976 ZM26.013,10.243 C24.037,4.995 18.351,1.574 12.811,2.456 C8.337,3.168 5.129,5.618 3.243,9.729 C2.310,11.765 1.967,13.923 2.372,16.158 C2.763,18.318 3.591,20.333 4.490,22.318 C6.433,26.607 8.787,30.673 11.247,34.680 C12.287,36.374 13.373,38.041 14.488,39.799 C14.666,39.542 14.781,39.392 14.879,39.233 C16.586,36.478 18.335,33.749 19.986,30.960 C22.149,27.307 24.128,23.558 25.674,19.589 C26.877,16.498 27.215,13.436 26.013,10.243 ZM14.580,22.583 C10.109,22.597 6.483,18.999 6.485,14.550 C6.488,10.124 10.116,6.503 14.531,6.519 C18.939,6.536 22.527,10.126 22.537,14.530 C22.548,18.937 18.960,22.569 14.580,22.583 ZM14.550,8.688 C11.341,8.660 8.667,11.303 8.654,14.516 C8.642,17.747 11.265,20.406 14.475,20.416 C17.706,20.427 20.357,17.807 20.369,14.591 C20.381,11.358 17.777,8.717 14.550,8.688 Z" fill="rgb(0, 0, 0)" fill-rule="evenodd"></path></svg></i> <span>Показать на карте</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="box-delivery_right">
                        <div class="box-delivery_item">
                            <h3>Бесплатно</h3>
                            <p>по адресу г.Ростов-на-Дону, ул.Серафимовича, 72 <b><br>по будням с 10:00 до 19:00<br>по выходным с 11:00 до 18:00</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
