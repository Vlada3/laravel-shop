<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog(){

        /*$category = new Category();
        $category->title = 'Тестовая категория';
        $category->save();*/

        /*$products = Product::query()->with(['category', 'status'])->orderBy('id', 'desc')->get();
        foreach ($products as $product) {
            echo "<p>{$product->title} | {$product->category->title} | {$product->status->title}</p>";
        }*/

        // записываем в сессию
        /*session([
            'cart' => [
                1 => [
                    'id' => 1,
                    'title' => 'Product 1',
                    'price' => 10,
                    'qty' => 2,
                ],
                3 => [
                    'id' => 3,
                    'title' => 'Product 3',
                    'price' => 20,
                    'qty' => 1,
                ],
            ]
        ]);*/

        // получаем значения
        /*dump(session('cart.3.title'));
        dump(session('cart')[1]['title']);*/

        // дописываем в сессию
        /*session([
            'cart.2' => [
                'id' => 2,
                'title' => 'Product 2',
                'price' => 15,
                'qty' => 2,
            ]
        ]);*/

        // проверяем наличие элемента
        /*dump(session()->has('cart.2'));*/

        // пройдемся в цикле
        /*foreach (session('cart') as $item) {
            dump($item['title'], $item['price']);
        }*/

        // изменим значение элемента
        /*session(['cart.3.qty' => session('cart.3.qty') + 4]);*/

        // добавим одиночные значения
        /*session(['cart_total' => 150, 'cart_qty' => 9]);*/

        // удалим элемент из сессии
        /*session()->forget('cart.1');*/

        // очистим сессию
//        session()->flush();

        $title = 'Home Page';
        $products = Product::with(['category', 'status'])->orderBy('id', 'desc')->paginate(12);
        return view('products.catalog', compact('title', 'products'));
    }

    public function show($slug)
    {
        $product = Product::query()->with(['category', 'status'])->where('slug', $slug)->firstOrFail();
        return view('products.show', compact('product'));
    }
}
