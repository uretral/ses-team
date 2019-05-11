@php
use App\Menu;
    $branches = Menu::branches();
    $branchesRoot = Menu::SOLUTIONS;
    $servicesCategories = Menu::servicesCategories();
    $services = Menu::services();
    $servicesTree = Menu::servicesTree();
    $servicesRoot = Menu::SERVICES;
    $branchesLeft = 0;
    $branchesRight = 0;

@endphp


<ul class="main_nav">

    <li class="root">
        <a href="javascript:"><span>Сферы бизнеса</span></a>
        <ul class="sub-menu">

            <li>
                <ul class="sub-menu-level">
                    @foreach($branches as $branch)
                        @if(($branchesLeft % 2) == 0)
                            <li>
                                <a href="{{$branchesRoot}}/{{$branch['alias']}}">{{$branch['name']}}</a>
                            </li>
                        @endif
                        @php $branchesLeft++ @endphp
                    @endforeach
                </ul>
            </li>
            <li>
                <ul class="sub-menu-level">
                    @foreach($branches as $branch)
                        @if(($branchesRight % 2) != 0)
                            <li>
                                <a href="{{$branchesRoot}}/{{$branch['alias']}}">{{$branch['name']}}</a>
                            </li>
                        @endif
                        @php $branchesRight++ @endphp
                    @endforeach
                </ul>
            </li>

        </ul>
    </li>

    <li class="root">
        <a href="{{\App\Menu::root(5)}}"><span>Наши услуги</span></a>
        <ul class="sub-menu">
            <li>
{{--                <h4>Вредители</h4>--}}

                    <ul class="sub-menu-level">
                        @foreach($servicesTree as $category)
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
                        @endforeach
                    </ul>


            </li>
            <li>
                <h4>Документы для СЭС</h4>
                <ul class="sub-menu-level">
                    @foreach($servicesTree as $category)
                        @if(!$category['main'])
                            @foreach($category['child'] as $service)

                                    <li><a href="{{$servicesRoot}}/{{$service['alias']}}">{{$service['name']}}</a></li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </li>
            <li>
                <h4>Популярные услуги</h4>

                <ul class="sub-menu-level">
                    @foreach($services as $service)
                        @if($service['popular'])
                            <li><a href="{{$servicesRoot}}/{{$service['alias']}}">{{$service['name']}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </li>
        </ul>
    </li>


    <li>
        <a href="{{\App\Menu::root(6)}}"><span>Наши клиенты</span></a>
    </li>
    <li>
        <a href="{{\App\Menu::root(7)}}"><span>Библиотека</span></a>
    </li>
    <li>
        <a href="{{\App\Menu::ABOUT}}"><span>Почему мы</span></a>
    </li>
</ul>
