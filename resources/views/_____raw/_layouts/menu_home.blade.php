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
                        <a href="javascript:">Насекомые</a>
                    </li>
                    <li class="sub-menu-double">
                        <ul class="sub-menu-vertical">

                            <li>Клопы</li>
                            <li>Тараканы</li>
                            <li>Муравьи</li>
                            <li>Блохи</li>
                            <li>Мокрицы</li>
                            <li>Чешуйницы</li>
                            <li>Мухи</li>
                            <li>Моль</li>
                            <li>Осы</li>
                            <li>Оводы</li>
                            <li>Мошки</li>
                            <li>Кожеед</li>
                        </ul>

                        <ul class="sub-menu-vertical">
                            <li>Клещи</li>
                            <li>Садовые муравьи</li>
                            <li>Комары</li>
                            <li>Короед</li>
                        </ul>
                    </li>
                    <li>

                        <a href="/">Грызуны</a>


                    </li>
                    <li>
                        <ul class="sub-menu-vertical">
                            <li>Крысы</li>
                            <li>Мыши</li>
                            <li>Кроты</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <span>&nbsp;</span>
                <ul class="sub-menu-level">
                    <li>


                        <a href="javascript:">Лечение деревьев
                        </a>


                    </li>
                    <li>

                        <a href="javascript:">Плесень и грибок</a>


                    </li>
                    <li>

                        <a href="javascript:">Устранение запахов</a>


                    </li>
                    <li>

                        <a href="javascript:">Борщевик и сорные растения</a>


                    </li>
                    <li>

                        <a href="javascript:">Клининг</a>


                    </li>
                    <li>

                        <a href="javascript:">Анализ воды и почвы</a>


                    </li>
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
        <a href="javascript:"><span>Библиотека</span></a>
        <ul class="sub-menu">
            @foreach($home['tree'] as $root)
                <li>
                    <h4>{{$root['name']}}</h4>
                    <ul class="sub-menu-level">
                        <li>
                            <a href="javascript:">Насекомые</a>
                        </li>
                        <li class="sub-menu-double">
                            <ul class="sub-menu-vertical">

                                <li>Клопы</li>
                                <li>Тараканы</li>
                                <li>Муравьи</li>
                                <li>Блохи</li>
                                <li>Мокрицы</li>
                                <li>Чешуйницы</li>
                                <li>Мухи</li>
                                <li>Моль</li>
                                <li>Осы</li>
                                <li>Оводы</li>
                                <li>Мошки</li>
                                <li>Кожеед</li>
                            </ul>

                            <ul class="sub-menu-vertical">
                                <li>Клещи</li>
                                <li>Садовые муравьи</li>
                                <li>Комары</li>
                                <li>Короед</li>
                            </ul>
                        </li>
                        <li>

                            <a href="/">Грызуны</a>


                        </li>
                        <li>
                            <ul class="sub-menu-vertical">
                                <li>Крысы</li>
                                <li>Мыши</li>
                                <li>Кроты</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </li>

    <li>
        <a href="{{\App\Menu::ABOUT}}"><span>Почему мы</span></a>
    </li>
</ul>
