@extends('layouts.tpl')
<div class="header-space"></div>
<section>
    <div class="wide banner">
        <div class="wide-box origin">
            <img src="/img/banners/library.jpg" alt="banner"/>
        </div>
    </div>
</section>@include('snippets.breadcrumbs')@include('snippets.share')
<section>
    <div class="wide collection">
        <h1>Pest Library</h1>
        <strong>Research a pest</strong>
        <p>Learn how to identify common pests; understand their biology, diet, and habits; and find out what you can do
            to control them.
        </p>

        @foreach($data['tree'] as $item)
            <div class="collection-collection">

                <h2>{{$item['name']}}</h2>
                <div class="collection-items">
                    @foreach($item['child'] as $child)
                        <a href="/{{$child['alias']}}" class="collection-item">
                            @if($child['preview_image'])
                                <img src="/upload/{{$child['preview_image']}}" alt="img"/>
                            @else
                                <img src="/img/weevils.jpg" alt="img"/>
                            @endif

                            <span>{{$child['name']}}</span> <i>family Curculionidae</i>
                        </a>
                    @endforeach
                </div>
            </div>

        @endforeach


    </div>
</section>
