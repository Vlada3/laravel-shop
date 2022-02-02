@extends('layouts.layout')
@section('title')@parent :: {{$title}}
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs__inner">
            <ul class="breadcrumbs__list mobile-overflow">
                <li class="breadcrumbs__list-item">
                    <a href="/glavnaya">Главная</a>
                </li>
                <li class="breadcrumbs__list-item">
                    <span>Все такни</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="catalog">
    <div class="container">
        <h2 class="catalog__title">
            Каталог
        </h2>

        <div class="catalog__filter">
            <div class="catalog__filter-itemsinner">
                <div class="catalog__filter-items mobile-overflow">
                    <button>Кулирка</button>
                    <button>от 850</button>
                    <button>с принтом</button>
                    <button>ещё</button>
                </div>
            </div>
            <div class="catalog__filter-btn">
                <select class="filter-style select-item">
                    <option>По цене дешевле</option>
                    <option>По цене дороже</option>
                    <option>По популярности</option>
                </select>
                <!--<button class="catalog__filter-btngrid catalog__filter-button catalog__filter-button--active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 6h-6v-6h6v6zm9-6h-6v6h6v-6zm9 0h-6v6h6v-6zm-18 9h-6v6h6v-6zm9 0h-6v6h6v-6zm9 0h-6v6h6v-6zm-18 9h-6v6h6v-6zm9 0h-6v6h6v-6zm9 0h-6v6h6v-6z"/></svg>
                </button>
                <button class="catalog__filter-btnline catalog__filter-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 3h-16v-2h16v2zm0 3h-16v2h16v-2zm0 5h-16v2h16v-2zm0 5h-16v2h16v-2zm0 5h-16v2h16v-2zm-18-20h-6v6h6v-6zm0 8h-6v6h6v-6zm0 8h-6v6h6v-6z"/></svg>
                </button>-->
            </div>
        </div>
        <div class="catalog__inner">
            <div class="aside__btn">
                Фильтры
            </div>
            <aside class="catalog__inner-aside aside-filter">
                <div class="tabs-wrapper">
                    <div class="tabs aside-filter__tabs">
                        <a class="tab aside-filter__tab tab--active" href="#parameters"><span>Параметры</span></a>
                        <a class="tab aside-filter__tab" href="#colors"><span>по цвету</span></a>
                    </div>
                    <div class="tabs-conteiner">
                        <div id="parameters" class="tabs-content aside-filter__tabs-content tabs-content--active">


                            <form class="aside-filter__form">
                                <ul class="aside-filter__list">
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title filter__item-drop filter__item-drop--active">Цена</p>
                                        <div class="aside-filter__content">
                                            <input type="text" class="js-range-slider" name="my_range" value=""
                                                   data-min="260"
                                                   data-max="1350"
                                                   data-from="600"
                                                   data-to="1000"
                                                   data-grid="false"
                                            />
                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title filter__item-drop filter__item-drop--active">Принт</p>
                                        <div class="aside-filter__content">
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Купон
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Однотонный
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    С принтом
                                                </label>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title filter__item-drop filter__item-drop--active">Тип</p>
                                        <div class="aside-filter__content">
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Кашкорсе
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Кулирка
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Фурнитура
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Футер
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Футер двухнитка
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Футер трехнитка
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Футер с начесом
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title filter__item-drop filter__item-drop--active">Плотность, гр/м</p>
                                        <div class="aside-filter__content">
                                            <input type="text" class="js-range-slider" name="my_range" value=""
                                                   data-min="180"
                                                   data-max="330"
                                                   data-from="200"
                                                   data-to="300"
                                                   data-grid="false"
                                            />
                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title filter__item-drop filter__item-drop--active">Состав</p>
                                        <div class="aside-filter__content">
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    95% хлопок, 5% лайкра
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    92% хлопок, 8% лайкра
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    80% хлопок, 20% полиэстер
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    65% хлопок, 35% полиэстр
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title filter__item-drop filter__item-drop--active">Другое</p>
                                        <div class="aside-filter__content">
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Новинки
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Популярное
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class ="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Со скидкой
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop aside-filter__item-btn">
                                        <button class="filter-btn__send filter-btn__send--active" type="submit">Выбрать</button>
                                        <button class="filter-btn__reset" type="submit">Сбросить фильтр</button>
                                    </li>
                                </ul>
                            </form>

                        </div>
                        <div id="colors" class="tabs-content aside-filter__tabs-content">
                            <div class="aside-filter__content">
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Розовый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Красный
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Оранжевый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Желтый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Зеленый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Синий
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Фиолетовый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Коричневый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Серый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Белый
                                    </label>
                                </div>
                                <div class="aside-filter__content-box">
                                    <label class ="aside-filter__content-label">
                                        <input class="filter-style" type="checkbox">
                                        Черный
                                    </label>
                                </div>
                                <li class="aside-filter__item-drop aside-filter__item-btn">
                                    <button class="filter-btn__send" type="submit">Выбрать</button>
                                    <button class="filter-btn__reset" type="submit">Сбросить фильтр</button>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="catalog__inner-list">
                @foreach($products as $product)
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
                @endforeach

                <div class="pagination">
                    {{$products->links()}}
                    <!--<ul class="pagination-list">
                        <li class="pagination-list__item active"><a href="#">1</a></li>
                        <li class="pagination-list__item"><a href="#">2</a></li>
                        <li class="pagination-list__item"><a href="#">3</a></li>
                        <li class="pagination-list__item"><a href="#">4</a></li>
                        <li class="pagination-list__item"><a href="#">5</a></li>
                        <li class="pagination-list__item pagination-list__item--dots"><span>...</span></li>
                        <li class="pagination-list__item"><a href="#">11</a></li>
                    </ul>-->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
