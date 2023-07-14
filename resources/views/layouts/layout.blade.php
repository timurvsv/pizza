<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{ asset("assets/css/tailwind.output.css") }}"/>
    <link rel="stylesheet" href="{{ asset("assets/css/tailwind.css") }}"/>

    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="g-con">
<div class="container">
    <div class="pizza2">
        <div class="image_pizza">
            <img src="image/pizza.svg" alt="dsfds">
        </div>
        <div class="text-haed">
            <h2>
                Реагировать на пиццу
            </h2>
            <p>
                Самая вкусная пицца во вселенный
            </p>
        </div>
    </div>
    <div class="input-haed">
        <input class="header__search-title" value="{{ $value }}" name="search_field" placeholder="Поиск пиццы" type="text">
    </div>
    <div class="haeder__cart">
        <a class="button--cart" href="{{ route('basket_product') }}">
            <span>447</span>
            <span>
                <svg
                    width="18"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M11 19V22H13V19H14C16.2091 19 18 17.2091 18 15C18 12.7909 16.2091 11 14 11H13V7H15V9H17V5H13V2H11V5H10C7.79086 5 6 6.79086 6 9C6 11.2091 7.79086 13 10 13H11V17H9V15H7V19H11ZM13 17H14C15.1046 17 16 16.1046 16 15C16 13.8954 15.1046 13 14 13H13V17ZM11 11V7H10C8.89543 7 8 7.89543 8 9C8 10.1046 8.89543 11 10 11H11Z"
                      fill="currentColor"
                  />
                </svg>
            </span>
            |
            <span>10</span>
        </a>
    </div>

</div>
<div class="clyki-con">
    <div class="pizza_categories">
        <div class="clyks">
            <a id="all" href="{{ route('index_product') }}" class="{{!$activeCategory ? 'active' : ''}}">все</a>
            @foreach($categories as $category)
                <a class="categories__item-link {{$activeCategory && $category->id == $activeCategory->id ? 'active' : ''}}"
                   href="#" id="{{$category->id}}">{{ $category->name }}</a>
            @endforeach
        </div>
        <form>
            <div>
                <select class="categories__order-select js-select2" name="city">
                    <option value="DESC" {{ $order == 'DESC' ? 'selected' : ''}}>Убывание цены</option>
                    <option value="ASC" {{ $order == 'ASC' ? 'selected' : ''}}>Возрастание цены</option>
                </select>
            </div>
        </form>

    </div>

    @yield('content')


</div>
<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>




