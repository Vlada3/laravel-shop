@extends('layouts.layout')
@section('title', 'Страница товара')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list mobile-overflow">
                    <li class="breadcrumbs__list-item">
                        <a href="/glavnaya">Главная</a>
                    </li>
                    <li class="breadcrumbs__list-item">
                        <a href="{{route('catalog')}}">Все такни</a>
                    </li>
                    <li class="breadcrumbs__list-item">
                        <span>{{ $product->title }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-card">
        <div class="container">
            <div class="product-card__inner">
                <div class="product-card__img-box"> <!--product-item--sale-->
                    <div class="product-card__img-slider">
                        <div class="product-card__slider-item">
                            <img class="product-card__img" src="{{$product->getImage()}}" alt="{{$product->title}}">
                        </div>
                        <!--<div class="product-card__slider-item">
                            <img class="product-card__img" src="img/avocado1.jpg" alt="">
                        </div>
                        <div class="product-card__slider-item">
                            <img class="product-card__img" src="img/avocado2.jpg" alt="">
                        </div>
                        <div class="product-card__slider-item">
                            <img class="product-card__img" src="img/avocado3.jpg" alt="">
                        </div>
                        <div class="product-card__slider-item">
                            <img class="product-card__img" src="img/avocado4.jpg" alt="">
                        </div>
                        <div class="product-card__slider-item">
                            <img class="product-card__img" src="img/avocado5.jpg" alt="">
                        </div>
                        <div class="product-card__slider-item">
                            <img class="product-card__img" src="img/avocado6.jpg" alt="">
                        </div>-->
                    </div>
                    <!--<img src="img/avocado.jpg" alt="" class="product-card__img">-->
                    @if($product->old_price)
                    <p class="product-card__price-old">
                        <strike>@price_format($product->old_price) ₽/метр</strike>
                    </p>
                    @endif
                    <p class="product-card__price-new">
                        @price_format($product->price) ₽/метр
                    </p>
                    <div class="product-card__btn product-card__btn-mobile @if($product->status_) product-item__not-availible @endif">
                        <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-add" name="qty" value="1">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="input-group-append">
                                    <button>Добавить в корзину</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="product-card__tabs-mobile">
                    <div class="tabs-mobile">
                        Характеристики</a>
                    </div>
                    <div class="tabs-container">

                        <ul class="product-card__list">
                            <li class="product-card__item">
                                <div class="product-card__item-left">
                                    Тип ткани:
                                </div>
                                <div class="product-card__item-right">
                                    {{$product->category->title}}
                                </div>
                            </li>
                            <li class="product-card__item">
                                <div class="product-card__item-left">
                                    Плотность:
                                </div>
                                <div class="product-card__item-right">
                                    <!--190 г/м-->
                                </div>
                            </li>
                            <li class="product-card__item">
                                <div class="product-card__item-left">
                                    Цвет:
                                </div>
                                <div class="product-card__item-right">
                                    <!--зеленый-->
                                </div>
                            </li>
                            <li class="product-card__item">
                                <div class="product-card__item-left">
                                    Принт:
                                </div>
                                <div class="product-card__item-right">
                                    <!--с принтом-->
                                </div>
                            </li>
                            <li class="product-card__item">
                                <div class="product-card__item-left">
                                    Ширина:
                                </div>
                                <div class="product-card__item-right">
                                    {{$product->fabric_width}} см
                                </div>
                            </li>
                            <li class="product-card__item">
                                <div class="product-card__item-left">
                                    Состав:
                                </div>
                                <div class="product-card__item-right">
                                    <!--95% хлопок, 5% лайкра-->
                                </div>
                            </li>
                            <li class="product-card__item">
                                <div class="product-card__item-left">
                                    Наличие в магазине:
                                </div>
                                <div class="product-card__item-right">
                                    {{$product->status->title}} в магазине
                                </div>
                            </li>
                        </ul>

                        <!--<div id="product-2" class="tabs-content product-card__tab-content">
                            <div class="product-available">
                                В наличии в магазине
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="product-card__content">
                    <h1 class="product-card__title">{{$product->title}}</h1>
                    <p class="product-card__code">
                        Код товара: {{$product->product_code}}
                    </p>
                    <div class="product-card__buttons">
                        <button class="product-card__icon-favorite">
                            <!--<img src="img/favorite.svg" alt="">-->
                        </button>
                        <a class="rate">
                            <div class="rate-yo" data-rateyo-rating="5"></div>
                        </a>
                    </div>
                    <div class="tabs-wrapper product-card__tabs">
                        <div class="tabs">
                            <a class="tab product-card__tab tab--active" href="#product-1">Характеристики</a>
                            <a class="tab product-card__tab" href="#product-2">Наличие в магазине</a>
                        </div>
                        <div class="tabs-container">
                            <div id="product-1" class="tabs-content product-card__tab-content tabs-content--active">
                                <ul class="product-card__list">
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">
                                            Тип ткани:
                                        </div>
                                        <div class="product-card__item-right">
                                            {{$product->category->title}}
                                        </div>
                                    </li>
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">
                                            Плотность:
                                        </div>
                                        <div class="product-card__item-right">
                                            <!--190 г/м-->
                                        </div>
                                    </li>
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">
                                            Цвет:
                                        </div>
                                        <div class="product-card__item-right">
                                            <!--зеленый-->
                                        </div>
                                    </li>
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">
                                            Принт:
                                        </div>
                                        <div class="product-card__item-right">
                                            <!--с принтом-->
                                        </div>
                                    </li>
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">
                                            Ширина:
                                        </div>
                                        <div class="product-card__item-right">
                                            {{$product->fabric_width}} см
                                        </div>
                                    </li>
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">
                                            Состав:
                                        </div>
                                        <div class="product-card__item-right">
                                            <!--95% хлопок, 5% лайкра-->
                                        </div>
                                    </li>
                                </ul>
                                <div class="product-card__btn @if($product->status_) product-item__not-availible @endif">
                                    <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-add" name="qty" value="1">
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <div class="input-group-append">
                                                <button>Добавить в корзину</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="product-2" class="tabs-content product-card__tab-content">
                                <div class="product-available">
                                    {{$product->status->title}} в магазине
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="products__inner">
                <h3 class="product__title">С этим товаром покупают</h3>
                <div class="tabs-wrapper">
                    <div class="tabs products__tabs">
                        <a class="tab products__tab tab--active" href="#">

                        </a>
                        <a class="tab products__tab" href="#additional-tab-1">
                            Ткани компаньоны
                        </a>
                        <a class="tab products__tab" href="#additional-tab-2">
                            Окантовочные ткани
                        </a>
                        <a class="tab products__tab" href="#additional-tab-3">
                            Фурнитура
                        </a>
                    </div>
                    <div class="tabs-container products__container">
                        <div id="additional-tab-1" class="tabs-content products__content tabs-content--active">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper @if($product->status_) product-item__not-availible @endif">
                                        <button class="product-item__favorite">
                                        </button>

                                        <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="qty" value="1">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="input-group-append">
                                                    <button class="product-item__basket">
                                                        <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item @if($product->sale) product-item--sale @endif" href="{{route('products.show', ['slug' => $product->slug])}}">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{$product->getImage()}}" alt="">
                                            <h4 class="product-item__title">{{$product->title}}</h4>
                                            @if($product->old_price)
                                                <p class="price product-item__price-old">
                                                    <strike> @price_format($product->old_price) ₽/метр </strike>
                                                </p>
                                            @endif
                                            <p class="price product-item__price-new">@price_format($product->price) ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="additional-tab-2" class="tabs-content products__content">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper @if($product->status_) product-item__not-availible @endif">
                                        <button class="product-item__favorite">
                                        </button>

                                        <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="qty" value="1">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="input-group-append">
                                                    <button class="product-item__basket">
                                                        <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item @if($product->sale) product-item--sale @endif" href="{{route('products.show', ['slug' => $product->slug])}}">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{$product->getImage()}}" alt="">
                                            <h4 class="product-item__title">{{$product->title}}</h4>
                                            @if($product->old_price)
                                                <p class="price product-item__price-old">
                                                    <strike> @price_format($product->old_price) ₽/метр </strike>
                                                </p>
                                            @endif
                                            <p class="price product-item__price-new">@price_format($product->price) ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="additional-tab-3" class="tabs-content products__content">
                            <div class="product-slider">
                                <div class="product-slider__item">
                                    <div class="product-item__wrapper @if($product->status_) product-item__not-availible @endif">
                                        <button class="product-item__favorite">
                                        </button>

                                        <form action="{{ route('cart.add') }}" method="post" class="addtocart">
                                            @csrf
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="qty" value="1">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <div class="input-group-append">
                                                    <button class="product-item__basket">
                                                        <img src="{{asset('assets/front/img/addToCart.svg')}}" alt="">
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <a href="#" class="product-item__notify-link">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item @if($product->sale) product-item--sale @endif" href="{{route('products.show', ['slug' => $product->slug])}}">
                                            <p class="product-item__hover-text">
                                                Посмотреть товар
                                            </p>
                                            <img class="product-item__img" src="{{$product->getImage()}}" alt="">
                                            <h4 class="product-item__title">{{$product->title}}</h4>
                                            @if($product->old_price)
                                                <p class="price product-item__price-old">
                                                    <strike> @price_format($product->old_price) ₽/метр </strike>
                                                </p>
                                            @endif
                                            <p class="price product-item__price-new">@price_format($product->price) ₽/метр</p>
                                            <p class="product-item__notify-text">нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
