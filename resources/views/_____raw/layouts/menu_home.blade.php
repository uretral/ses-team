<?
$home = \App\Menu::libraryTree();
?>

<ul class="main_nav">
    @foreach($home['popular'] as $popular)
        <li>
            <a href="{{$popular['alias']}}"><span>{{$popular['name']}}</span></a>
        </li>
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
                            @if($home['tree'][1]  )
                                @foreach($home['tree'][1]['child'] as $k => $item)
                                    @if(($k % 2) == 0)
                                        <li><a href="/{{$item['alias']}}">{{$item['name']}}</a></li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                        <ul class="sub-menu-vertical">
                            @if($home['tree'][1])
                                @foreach($home['tree'][1]['child'] as $k => $item)
                                    @if(($k % 2) != 0)
                                        <li><a href="/{{$item['alias']}}">{{$item['name']}}</a></li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                    </li>
                    <li>
                        Грызуны
                    </li>
                    <li class="sub-menu-double">
                        <ul class="sub-menu-vertical">
                            @if($home['tree'][2])
                                @foreach($home['tree'][2]['child'] as $k => $item)
                                    @if(($k % 2) == 0)
                                        <li><a href="/{{$item['alias']}}">{{$item['name']}}</a></li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                        <ul class="sub-menu-vertical">
                            @if($home['tree'][2])
                                @foreach($home['tree'][2]['child'] as $k => $item)
                                    @if(($k % 2) != 0)
                                        <li><a href="/{{$item['alias']}}">{{$item['name']}}</a></li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <span>&nbsp;</span>
                <ul class="sub-menu-level">
                    @if($home['tree'][3])
                        @foreach($home['tree'][3]['child'] as $k => $item)
                            <li><a href="/{{$item['alias']}}">{{$item['name']}}</a></li>
                        @endforeach
                    @endif

                </ul>
            </li>
            <li>
                <h4>Страховой полис</h4>

                <ul class="sub-menu-level">

                    <li>

                        <a href="javascript:">Обслуживание 24/7</a>


                    </li>
                    <li>

                        <a href="javascript:">Ежемесячный аудит</a>


                    </li>
                    <li>

                        <a href="javascript:">Скидка по полису 20%</a>


                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="root ">
        <a href="/library"><span>Библиотека</span></a>
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
    <li>
        <a href="{{\App\Menu::ABOUT}}"><span>Почему мы</span></a>
    </li>
</ul>
