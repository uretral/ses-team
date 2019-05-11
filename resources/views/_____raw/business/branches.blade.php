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
        <h1>{{$intro->title}}</h1>
        <strong>{!! $intro->subtitle !!}</strong>
        {!! $intro->intro !!}

            <div class="collection-collection">

                <div class="collection-items">
                    @foreach($data->toArray() as $child)
                        <a href="{{$alias}}/{{$child['alias']}}" class="collection-item">
                            @if($child['img'])
                                <img src="/upload/{{$child['img']}}" alt="img"/>
                            @else
                                <img src="/img/weevils.jpg" alt="img"/>
                            @endif

                            <span>{{$child['name']}}</span>
                        </a>
                    @endforeach
                </div>
            </div>


    </div>
</section>
