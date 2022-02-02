@extends('layouts.layout')

@section('title')@parent :: Оформление заказа
@endsection

@section('content')

    <div class="col-md-12">
        <h1>Оформление заказа</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(!empty(session('cart')))
            <div class="table-responsive cart-table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Фото</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Кол-во</th>
                        <th scope="col">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(session('cart') as $item)
                        <tr>
                            <td>
                                <a href="{{ route('products.show', ['slug' => $item['slug']]) }}">
                                    <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('products.show', ['slug' => $item['slug']]) }}">{{ $item['title'] }}</a>
                            </td>
                            <td>@price_format($item['price'])  ₽/метр</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>
                    <span class="text-danger del-item" data-action="{{ route('cart.del_item', ['product_id' => $item['product_id']]) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z" fill="#b00202"/></svg>
                    </span>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" align="right">Итого:</td>
                        <td id="modal-cart-qty">{{ session('cart_qty') }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" align="right">На сумму:</td>
                        <td id="modal-cart-total">@price_format(session('cart_total')) руб.</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <form method="post" action="{{ route('cart.checkout') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" class="form-checkout" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">e-mail</label>
                    <input type="email" class="form-checkout" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="text" class="form-checkout" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-checkout" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="note">Примечание к заказу</label>
                    <textarea class="form-checkout" id="note" name="note"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Оформить заказ</button>
            </form>
        @else
            <h4>Корзина пуста</h4>
        @endif

    </div>

@endsection
