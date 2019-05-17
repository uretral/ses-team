<ul class="main_nav">
    @foreach(MENU[5]['child'] as $popular)
        @if($popular['menu'])
            <li>
                <a href="{{$popular['link']}}"><span>{{$popular['name']}}</span></a>
            </li>
        @endif
    @endforeach
    <li class="root">
        <a href="javascript:"><span>Другие</span></a>
        <ul class="sub-menu">
            <li>
                <h4>Вредители</h4>
                <ul class="sub-menu-level">
                    <li>
                        Насекомые
                    </li>
                    <li class="sub-menu-double">
                        <ul class="sub-menu-vertical">
                            @foreach(MENU[5]['child'] as $k => $item)
                                @if(($k % 2) == 0 && $item['parent'] == 1)
                                    <li><a href="{{$item['link']}}">{{$item['name']}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <ul class="sub-menu-vertical">
                            @foreach(MENU[5]['child'] as $k => $item)
                                @if(($k % 2) != 0 && $item['parent'] == 1)
                                    <li><a href="{{$item['link']}}">{{$item['name']}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        Грызуны
                    </li>
                    <li class="sub-menu-double">
                        <ul class="sub-menu-vertical">
                            @foreach(MENU[5]['child'] as $k => $item)
                                @if(($k % 2) == 0 && $item['parent'] == 2)
                                    <li><a href="{{$item['link']}}">{{$item['name']}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                        <ul class="sub-menu-vertical">
                            @foreach(MENU[5]['child'] as $k => $item)
                                @if(($k % 2) != 0 && $item['parent'] == 2)
                                    <li><a href="{{$item['link']}}">{{$item['name']}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <span>&nbsp;</span>
                <ul class="sub-menu-level">
                    @foreach(MENU[5]['child'] as $k => $item)
                        @if($item['parent'] == 3)
                            <li><a href="{{$item['link']}}">{{$item['name']}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
{{--            <li>--}}
{{--                <h4>Страховой полис</h4>--}}
{{--                <ul class="sub-menu-level">--}}
{{--                    <li>--}}
{{--                        <a href="javascript:">Обслуживание 24/7</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="javascript:">Ежемесячный аудит</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="javascript:">Скидка по полису 20%</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>

    </li>
        {{--
    <li class="root ">
        <a href="{{MENU[2]['link']}}"><span>{{MENU[2]['name']}}</span></a>--}}{{--        Библиотека--}}{{--

        <ul class="sub-menu">
            <li>
                <h4>ПОПУЛЯРНЫЕ ВРЕДИТЕЛИ</h4>

                <ul class="sub-menu-level">

                    <li>

                        <a href="javascript:">Тараканы</a>


                    </li>
                    <li>

                        <a href="javascript:">Клопы</a>


                    </li>
                    <li>

                        <a href="javascript:">Блохи</a>


                    </li>
                    <li>

                        <a href="javascript:">Клещи</a>


                    </li>
                    <li>

                        <a href="javascript:">Комары</a>


                    </li>
                    <li>

                        <a href="javascript:">Короед</a>


                    </li>
                    <li>

                        <a href="javascript:">Муравьи</a>


                    </li>
                    <li>

                        <a href="javascript:">Садовые муравьи</a>


                    </li>
                    <li>

                        <a href="javascript:">Мокрицы</a>
                    </li>
                    <li>

                        <a href="javascript:">Чешуйницы</a>
                    </li>
                    <li>

                        <a href="javascript:">Мухи</a>
                    </li>
                    <li>

                        <a href="javascript:">Моль</a>
                    </li>
                    <li>

                        <a href="javascript:">Осы</a>
                    </li>
                    <li>

                        <a href="javascript:">Оводы</a>
                    </li>
                    <li>

                        <a href="javascript:">Мошки</a>
                    </li>
                    <li>

                        <a href="javascript:">Медведка</a>
                    </li>
                    <li>

                        <a href="javascript:">Шашель</a>
                    </li>
                    <li>

                        <a href="javascript:">Кожеед</a>
                    </li>
                    <li>

                        <a href="javascript:">Крысы</a>
                    </li>
                    <li>

                        <a href="javascript:">Мыши</a>
                    </li>
                    <li>

                        <a href="javascript:">Кроты</a>

                    </li>
                </ul>

            </li>
            <li>

                <span>&nbsp;</span>

                <ul class="sub-menu-level">

                    <li>

                        <a href="javascript:">Фотогаллерея</a>


                    </li>
                    <li>

                        <a href="javascript:">Научный подход</a>


                    </li>
                    <li>

                        <a href="javascript:">Посетите библиотеку с вредителями</a>


                    </li>
                    <li>


                    </li>
                </ul>

            </li>
        </ul>
    </li>
        --}}
    <li>
        <a href="{{MENU[7]['link']}}"><span>{{MENU[7]['name']}}</span></a>{{--Почему мы--}}
    </li>
</ul>
