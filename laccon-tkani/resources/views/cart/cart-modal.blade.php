@if(!empty(session('cart')))
    <div class="table-responsive">
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
                <td colspan="4" align="right"><b>Итого:</b></td>
                <td id="modal-cart-qty"><b>{{ session('cart_qty') }}</b></td>
            </tr>
            <tr>
                <td colspan="4" align="right"><b>На сумму:</b></td>
                <td id="modal-cart-total"><b>@price_format(session('cart_total')) руб.</b></td>
            </tr>
            </tbody>
        </table>
    </div>
@else
    <h4>Корзина пуста</h4>
@endif
