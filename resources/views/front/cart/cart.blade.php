@extends('front.layout')
@section('content')
@include('front.meta.meta', [
'title' => 'Поиск - Bitex',
'description' => '$index_page->seo_description',
'keywords' => '$index_page->seo_keywords'
])

<main class="page__index index" style="color: #fff">
    <div class="container">
        
        @php
        session_start();
        echo "<pre>";
        if(isset($_SESSION['cart'])){
            print_r($_SESSION);

            foreach ($_SESSION['cart'] as $key => $value) {
                echo $value['id']."<br>";
                echo $value['name']."<br>";
                echo $value['title']."<br>";
                echo $value['slug']."<br>";
                echo $value['old_price']."<br>";
                echo $value['price']."<br>";
                echo $value['img']."<br>";
                echo $value['size']."<br>";
                echo $value['qty']."<br>";
            }
            echo "<h2> Количество товаров в корзине ". $_SESSION['cart.qty'] ."</h1>";
            echo "<h2> Итоговая сумма ". $_SESSION['cart.sum'] ."</h1>";
        } else{
            echo "<h1>Корзина пуста</h1>";
        }
        // var_dump($_SESSION);
        // if(isset($_POST['cart'])){
        //     switch($_POST['cart']){
        //         case 'add':
        //             $id = isset($_POST['id']) ? (int)$_POST['id']:0;
        //             echo json_encode(['code'=>'ok', 'answer'=>$id]);
        //             break;
        //     }
        // }
        if(isset($_SESSION['cart'])){
        @endphp
        <form action="/cart.php" method="post">
        <input name = "clear" type="submit" value="Оформить заказ">
        <input name = "clear" type="submit" value="Очистить корзину">
        </form>
            <a id = "clear-cart" style="color: #fff" >Оформить заказ</a>
            <a id = "clear-cart" href="#" style="color: #fff" >Очистить корзину</a>
        @php
            }
        @endphp
        
    </div>
</main>
@include('front.footer')
@endsection