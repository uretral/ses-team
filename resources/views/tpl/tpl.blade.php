<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="favicon.ico" />
    <link href="{{ asset('less/style.css') }}" rel="stylesheet">
    <title></title>
</head>
<body>

<header>
    <div>
        <div class="header">
            <a class="header-call-btn" href="javascript:"></a>
            <div class="header-logo">
                <a href="{{MENU[1]['link']}}">
                    <img src="{{asset('img/logo.jpg')}}" alt="logo" style="    width: 70%;    margin: 0 auto;    display: block;"/>
                </a>
            </div>
            <input type="checkbox" id="topMenuSwitcher"/>
            <label for="topMenuSwitcher">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="header-nav">
                <div class="header-nav-info">
                    <a href="javascript:"><span>tel: + 7 495 001 01 50</span></a>
                    <input type="checkbox" id="regionsSwitcher"/>
                    <label for="regionsSwitcher"><span>Регионы</span>
                        <div class="regions-top">
                            <div rel="region"></div>
                        </div>
                    </label>
                    <input  type="checkbox" id="mobileSearchSwitcher"/>
                    <label for="mobileSearchSwitcher"><span>Поиск</span>

                        <form class="mobile-search-top" action="{{MENU[6]['link']}}">
                            <label>
                                <input type="search"/>
                            </label>
                            <button type="submit"><em>Поиск</em></button>
                        </form>
                    </label>

                    <a href="javascript:"><span>поддержка</span></a>
                </div>
                <div class="header-nav-main">
                    <div class="header-nav-menu">
                        <div class="header-nav-menu_top">
                            @if(strpos(url()->current(),'business'))
                                <a href="{{MENU[1]['link']}}">Для дома</a>
                                <a class="{{MENU[4]['active']}}" href="{{MENU[4]['link']}}">Для бизнеса</a>
                            @else
                                <a class="{{MENU[1]['active']}}" href="{{MENU[1]['link']}}">Для дома</a>
                                <a href="{{MENU[4]['link']}}">Для бизнеса</a>
                            @endif
                        </div>
                        <div class="header-nav-menu_main">
                            <input type="checkbox" id="searchSwitcher"/>
                            <label for="searchSwitcher"></label>
                            <form class="search-top" action="{{MENU[6]['link']}}">
                                <label>
                                    <input type="search"/>
                                </label>
                                <button type="submit"><em>Поиск</em></button>
                            </form>
                            @if(strpos(url()->current(),'business'))
{{--                                @include('layouts.menu_business')--}}
                            @else
                                @include('tpl.menu_home')
                            @endif
                        </div>
                    </div>
                    <div class="header-nav-callback">
                        <a href="javascript:" class="red-callback">Оставить<span>Заявку</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')
<footer>

    <div class="footer">
        <div class="footer-box">
            <div class="footer-links">
                <div class="footer-links_media">
                    <h5>Почему SESTEAM</h5>
                    <ul>
                        <li>
                            <a href="javascript:">Вакансии</a>
                        </li>
                        <li>
                            <a href="javascript:">Медиа/Новости</a>
                        </li>
                        <li>
                            <a href="javascript:">Откытие филиала</a>
                        </li>
                        <li>
                            <a href="javascript:">Продажа Вашего Бизнеса</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-links_socials">
                    <h5>Мы в соц.сетях</h5>
                    <ul>
                        <li>
                            <a rel="nofollow" href="javascript:" class="facebook" target="_blank">facebook</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="javascript:" class="youtube" target="_blank">youtube</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="javascript:" class="twitter" target="_blank">twitter</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="javascript:" class="pinterest" target="_blank">pinterest</a>
                        </li>
                        <li>
                            <a rel="nofollow" href="javascript:" class="email" target="_blank">email</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-links_other">
                    <h5>Поддержка</h5>
                    <ul>
                        <li>
                            <a href="javascript:">Связаться с нами</a>
                        </li>
                        <li>
                            <a href="javascript:">Товарный знак</a>
                        </li>
                        <li>
                            <a href="javascript:">Местонахождение</a>
                        </li>
                        <li>
                            <a href="javascript:">Часто задаваемые вопросы</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyrights">
                <p>© 2019 Ses Team</p>
            </div>
            <div class="footer-terms">
                <a href="javascript:">условия пользования</a>
                |
                <a href="javascript:">Политика конфедициальности</a>
                |
                <a href="javascript:">карта сайта
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jq.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
