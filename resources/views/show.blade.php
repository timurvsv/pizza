
@extends('layouts.layout')
@section('content')

    <div style="margin: 0px 0px 0px 88px">
        <h2>Все пиццы</h2>
    </div>
    <form action="{{ route('index_product') }}"></form>
    <div class="pizza_sh">
        @foreach($products as $product)
            <div class="pizza">
                <a href="#" class="pizza__image-link" >
                    {{--                <div class="hits">--}}
                    {{--                    <img src="{{$img->image}}" alt="hit">--}}
                    {{--                </div>--}}
                    <img class="pizza__image" src="{{ $product->image }}" alt="">

                </a>
                <h3 class="pizza__name">{{ $product->name }}</h3>
                <div class="buttons">
                    <div class="buttons__kind">
                        @foreach($kinds as $kind)
                            <button class="buttons__button">{{ $kind->name }}</button>
                        @endforeach
                    </div>
                    <div class="buttons__size">
                        @foreach($product->sizes as $size)
                            <button class="buttons__button">{{ $size->title }}</button>
                        @endforeach
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
            <div class="descript_wrap">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->text }}</p>
            </div>
    </div>


    </div>

@endsection



