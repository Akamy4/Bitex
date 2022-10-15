@extends('front.layout')
@section('content')
@include('front.meta.meta', [
'title' => 'Поиск - Bitex',
'description' => '$index_page->seo_description',
'keywords' => '$index_page->seo_keywords'
])
<main class="page__index index" style="color: #fff">
    
<script>

</script>
    @php
    $test = $_GET['search_name'];
    $query = "SELECT groups.id, groups.name, groups.title, groups.slug 
    FROM groups WHERE groups.name like '%products_list' AND title like '%$test%'
    ORDER BY groups.id";
    $query_groups = DB::select($query);

    if($query_groups){
        $query = "SELECT groups.id, groups.name, groups.title, images.entity_name, images.link 
        FROM groups, images 
        WHERE groups.id = images.entity_id
        AND images.name = 'img'
        AND groups.name like '%products_list' 
        AND title like '%$test%'
        ORDER BY groups.id";
        $query_images = DB::select($query);
        foreach ($query_images as $value) {
            $unique_images[$value->title] = $value;
        }
        $unique_images = array_values($unique_images);

        $query = "SELECT groups.id, groups.name, groups.title, strings.name as string_name, strings.value as string_value
        FROM groups, strings 
        WHERE groups.id = strings.entity_id
        AND groups.name like '%products_list' AND title like '%$test%'
        AND strings.name IN ('old_price', 'price', 'product_name', 'sale')
        ORDER BY groups.id";
        $query_string = DB::select($query);


    }
    @endphp

    <div class="retail-catalog__wrap">
        @if(!$query_groups)
        <h1 style="color: #fff; max-width: 1200px; padding: 0 40px; margin: 40px auto;">Извините, ничего не найдено! </h1>
        @else
        <h1 style="color: #fff; max-width: 1200px; padding: 0 40px; margin: 40px auto;">По запросу "{{$test}}</i>" найдено: {{ count($query_groups) }}</h1>
        <ul class="retail-catalog__cards-list catalog__cards-list js_products_list">
            @for($i = 0; $i < count($query_groups); $i++)
            <li class="retail-catalog__cards-item catalog__cards-item catalog__cards-item--retail js_catalog_product">
                <div class="retail-catalog__cards-img-wrap catalog__cards-img-wrap img__wrap">
                    <img data-src="{{ $unique_images[$i]->link }}" alt=""
                        class="retail-catalog__cards-img catalog__cards-img img b-lazy">
                </div>
                <div class="retail-catalog__price-block catalog__cards-price-block">
                    <p class="retail-catalog__current-price catalog__cards-current-price">
                        <b>
                            @foreach($query_string as $value)
                                @if($value->title === $query_groups[$i]->title && $value->string_name === "price")
                                    {{$value->string_value }}
                                @endif
                            @endforeach
                        </b>
                    </p>
                    <p class="retail-catalog__old-price catalog__cards-old-price">
                        @foreach($query_string as $value)
                            @if($value->title === $query_groups[$i]->title && $value->string_name === "old_price")
                                {{$value->string_value }}
                            @endif
                        @endforeach
                    </p>
                    <p class="retail-catalog__sale catalog__cards-sale catalog__cards-sale--retail">
                        <b>
                            @foreach($query_string as $value)
                                @if($value->title === $query_groups[$i]->title && $value->string_name === "sale")
                                    {{$value->string_value }}
                                @endif
                            @endforeach
                        </b>
                    </p>
                </div>
                <p class="retail-catalog__card-desc catalog__cards-desc">
                    {{ $query_groups[$i]->title }}
                </p>
                
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <a 
                href="retail-product/{{ $query_groups[$i]->slug }}"
                    {{-- href="../cart?cart=add&id={{$query_groups[$i]->id}}" --}}
                    {{-- id="{{$query_groups[$i]->id}}" --}}
                    class="retail-catalog__card-btn catalog__cards-btn catalog__cards-btn--retail btn add-To-Cart"
                    {{-- onclick="addToCart({{$query_groups[$i]->id}}); return false;" --}}
                    >Купить</a>
                    
            </li>
            @endfor
        </ul>
        @endif
    </div>
    

</main>
@include('front.footer')
@endsection