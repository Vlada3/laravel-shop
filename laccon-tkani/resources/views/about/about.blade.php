@extends('layouts.layout')
@section('title', 'О магазине')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list mobile-overflow">
                    <li class="breadcrumbs__list-item">
                        <a href="/glavnaya">Главная</a>
                    </li>
                    <li class="breadcrumbs__list-item">
                        <span>О магазине</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="about">
        <div class="container">
            <div class="title-h1">
                <h1>О нас</h1>
            </div>
            <div class="all-box-contact">




                <p><strong>Адрес:</strong> г.Ростов-на-Дону, ул.Серафимовича, 72<br>
                    <strong>Телефон: 8 (909) 414 16 52</strong><br>
                    <br>
                    <strong>E-mail:</strong> <a href="mailto:info@laccontkani.ru">info@laccontkani.ru</a><br>
                    <strong>Работаем:<br></strong> по будням с 10:00 до 19:00<br>по выходным с 11:00 до 18:00.</p>
                <div>
                    &nbsp;
                </div>
                <div>
                    <strong>Юридические данные:</strong>
                </div>
                <div>
                    ИП Иванов И.И.
                </div>
                <div>
                    ИНН: 616161616161;
                </div>
                <div>
                    ОГРН: 310000000000000;
                </div>
                <div>
                    Фактический адрес: 344002, г.Ростов-на-Дону, ул.Серафимовича, 72
                </div>
            </div>
        </div>
    </section>
@endsection
