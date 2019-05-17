
<ul class="main_nav">

    <li class="root">
        <a href="{{MENU[8]['link']}}"><span>Сферы бизнеса</span></a>
        <ul class="sub-menu">

            <li>
                <ul class="sub-menu-level">
                    @foreach(MENU[10]['child'] as $branchKey => $branch)
                        @if(($branchKey % 2) == 0)
                            <li>
                                <a href="{{$branch['link']}}">{{$branch['name']}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
            <li>
                <ul class="sub-menu-level">
                    @foreach(MENU[10]['child'] as $branchKey => $branch)
                        @if(($branchKey % 2) != 0)
                            <li>
                                <a href="{{$branch['link']}}">{{$branch['name']}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>

        </ul>
    </li>

    <li class="root">
        <a href="{{MENU[9]['link']}}"><span>Наши услуги</span></a>
        <ul class="sub-menu">
            <li>
{{--                <h4>Вредители</h4>--}}

                    <ul class="sub-menu-level">
{{--                        @foreach($servicesTree as $category)
                            @if($category['main'])
                                <li class="underlined">
                                    {{$category['name']}}
                                </li>
                                <li class="sub-menu-double">
                                    <ul class="sub-menu-vertical">
                                        @php $servicesLeft = 0; @endphp
                                        @php $servicesRight = 0; @endphp

                                        @foreach($category['child'] as $service)
                                            @if($service['parent'] == $category['id'] && $servicesLeft % 2 == 0)
                                                <li><a href="{{$servicesRoot}}/{{$service['alias']}}">{{$service['name']}}</a></li>
                                            @endif
                                                @php $servicesLeft++ @endphp
                                        @endforeach
                                    </ul>

                                    <ul class="sub-menu-vertical">
                                        @foreach($category['child'] as $service)
                                            @if($service['parent'] == $category['id'] && $servicesRight % 2 != 0)
                                                <li><a href="{{$servicesRoot}}/{{$service['alias']}}">{{$service['name']}}</a></li>
                                            @endif
                                                @php $servicesRight++ @endphp
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach--}}
                    </ul>


            </li>
            <li>
                <h4>Документы для СЭС</h4>
                <ul class="sub-menu-level">
{{--                    @foreach($servicesTree as $category)
                        @if(!$category['main'])
                            @foreach($category['child'] as $service)

                                    <li><a href="{{$servicesRoot}}/{{$service['alias']}}">{{$service['name']}}</a></li>
                            @endforeach
                        @endif
                    @endforeach--}}
                </ul>
            </li>
            <li>
                <h4>Популярные услуги</h4>

                <ul class="sub-menu-level">
{{--                    @foreach($services as $service)
                        @if($service['popular'])
                            <li><a href="{{$servicesRoot}}/{{$service['alias']}}">{{$service['name']}}</a></li>
                        @endif
                    @endforeach--}}
                </ul>
            </li>
        </ul>
    </li>


    <li>
        <a href="{{MENU[12]['link']}}"><span>{{MENU[12]['name']}}</span></a>
    </li>
{{--    <li>--}}
{{--        <a href="{{\App\Menu::root(7)}}"><span>Библиотека</span></a>--}}
{{--    </li>--}}
    <li>
        <a href="{{MENU[7]['link']}}"><span>{{MENU[7]['name']}}</span></a>
    </li>
</ul>
