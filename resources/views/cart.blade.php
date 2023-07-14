<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>Document</title>
</head>
<body class="body_cart">
<div class="container">
    <div class="header">
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
<div class="cart">
    <h3>Корзина</h3>
    <a href=""><p>очистить корзину</p></a>
</div>
<div class="container_body">
    <div class="first">
        <div class="first_img">
            <img src="image/pizza1.jpeg" alt="">
        </div>
        <div>
            <div class="product_info">
                <h3>Карбона</h3>
            </div>
            <div>
                <span>Тонкое</span>
                <span>26см</span>
            </div>
        </div>
    </div>
    <div class="cart__item-count">
        <button disabled="" class="button button--outline button--circle cart__item-count-minus">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.92001 3.84V5.76V8.64C5.92001 9.17016 5.49017 9.6 4.96001 9.6C4.42985 9.6 4.00001 9.17016 4.00001 8.64L4 5.76L4.00001 3.84V0.96C4.00001 0.42984 4.42985 0 4.96001 0C5.49017 0 5.92001 0.42984 5.92001 0.96V3.84Z"
                    fill="#EB5A1E"></path>
                <path
                    d="M5.75998 5.92001L3.83998 5.92001L0.959977 5.92001C0.429817 5.92001 -2.29533e-05 5.49017 -2.29301e-05 4.96001C-2.2907e-05 4.42985 0.429817 4.00001 0.959977 4.00001L3.83998 4L5.75998 4.00001L8.63998 4.00001C9.17014 4.00001 9.59998 4.42985 9.59998 4.96001C9.59998 5.49017 9.17014 5.92001 8.63998 5.92001L5.75998 5.92001Z"
                    fill="#EB5A1E"></path>
            </svg>
        </button>
        <b>1</b>
        <button class="button button--outline button--circle cart__item-count-plus">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.92001 3.84V5.76V8.64C5.92001 9.17016 5.49017 9.6 4.96001 9.6C4.42985 9.6 4.00001 9.17016 4.00001 8.64L4 5.76L4.00001 3.84V0.96C4.00001 0.42984 4.42985 0 4.96001 0C5.49017 0 5.92001 0.42984 5.92001 0.96V3.84Z"
                    fill="#EB5A1E"></path>
                <path
                    d="M5.75998 5.92001L3.83998 5.92001L0.959977 5.92001C0.429817 5.92001 -2.29533e-05 5.49017 -2.29301e-05 4.96001C-2.2907e-05 4.42985 0.429817 4.00001 0.959977 4.00001L3.83998 4L5.75998 4.00001L8.63998 4.00001C9.17014 4.00001 9.59998 4.42985 9.59998 4.96001C9.59998 5.49017 9.17014 5.92001 8.63998 5.92001L5.75998 5.92001Z"
                    fill="#EB5A1E"></path>
            </svg>
        </button>
    </div>
    <div class="cart__item-price"><b>489 ₽</b></div>
    <div class="cart__item-remove">
        <button class="button button--outline button--circle">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.92001 3.84V5.76V8.64C5.92001 9.17016 5.49017 9.6 4.96001 9.6C4.42985 9.6 4.00001 9.17016 4.00001 8.64L4 5.76L4.00001 3.84V0.96C4.00001 0.42984 4.42985 0 4.96001 0C5.49017 0 5.92001 0.42984 5.92001 0.96V3.84Z"
                    fill="#EB5A1E"></path>
                <path
                    d="M5.75998 5.92001L3.83998 5.92001L0.959977 5.92001C0.429817 5.92001 -2.29533e-05 5.49017 -2.29301e-05 4.96001C-2.2907e-05 4.42985 0.429817 4.00001 0.959977 4.00001L3.83998 4L5.75998 4.00001L8.63998 4.00001C9.17014 4.00001 9.59998 4.42985 9.59998 4.96001C9.59998 5.49017 9.17014 5.92001 8.63998 5.92001L5.75998 5.92001Z"
                    fill="#EB5A1E">
                </path>
            </svg>
        </button>
    </div>
</div>
<div class="cart__bottom-details">
    <span>Всего пицц: <b>1 шт.</b></span>
    <span>Сумма заказа: <b>978 ₽</b></span>
</div>
<div class="cart__bottom-buttons">
    <a class="button button--outline button--add go-back-btn" href="/">
            <span>Вернуться назад</span>
    </a>
    <button class="button pay-btn">
        <span>Оформить заказа</span>
    </button>
    <div class="modal">
        <div class="modal__content">
            <form class="modal__form"><label>Ваше имя:</label><input required="" placeholder="Alex" type="text"><label>Ваш
                    номер:</label><input required="" placeholder="+996 (111) 123 456" type="text"><label>Ваш
                    email:</label><input placeholder="alex.pushkin@gmail.com (не обязательно)" type="email"><label>Ваш
                    адрес:</label><input required="" placeholder="ул. Пушкина19 / кв.44"
                                         type="text"><label>Прочее:</label><input required=""
                                                                                  placeholder="подъезд-2, этаж-8 и тд."
                                                                                  type="text"><label> Способ
                    оплаты:</label><select>
                    <option value="cash">наличными</option>
                    <option value="visa">картой</option>
                </select>
                <div>
                    <button>Оформить</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>
