
@extends('layouts.layout')
@section('content')
    <div  class="text_category">
        <h2>{{ $activeCategory ? $activeCategory->name : 'Все пиццы' }}</h2>
    </div>
    <form action="{{ route( 'basket_product') }}">
    <div class="pizza_sh">

        @foreach($products as $product)
        <div class="pizza">
            <a href="{{ route('show_product', ['id' => $product->id]) }}" class="pizza__image-link" >
{{--                <div class="hits">--}}
{{--                    <img src="{{$img->image}}" alt="hit">--}}
{{--                </div>--}}
                <img class="pizza__image" src="{{ $product->image }}" alt="">

            </a>
            <h3 class="pizza__name">{{ $product->name }}</h3>
            <div class="buttons">
                <div class="buttons__kind">
{{--                    @foreach($kinds as $kind)--}}
{{--                        <button class="buttons__button">{{ $kind->name }}</button>--}}
{{--                    @endforeach--}}
                </div>
                <div class="buttons__size">
{{--                    @foreach($product->sizes as $size)--}}
{{--                        <button class="buttons__button">{{ $size->title }}</button>--}}
{{--                    @endforeach--}}
                </div>
            </div>
            <div class="buttons__button__lets">
                <div class="price">
                    <h3>{{ $product->price }}</h3>
                </div>
                <div class="buttons__button__sends">
                    <button class="battons__button__send">+Добавить</button>
                </div>
            </div>
                @csrf
        </div>
        @endforeach


    </div>
    </form>
        <a class="btn_admin" href="{{ route('admin.login') }}">Админ</a>

</div>

@endsection



