@extends('layouts.tpl'){{--<div class="header-space"></div>--}}
<section>
    <div class="wide banner">
        <div class="wide-box origin">
            <img src="/upload/{{$category->banner}}" alt="banner"/>
        </div>
    </div>
</section>@include('snippets.breadcrumbs')@include('snippets.share')

<section>
    <div class="wide collection">
        <h1>{{$category->title}}</h1>
        @isset($category->title)
            <strong>{!! $category->subtitle !!}</strong>
        @endisset
        @isset($category->intro)
            {!! $category->intro !!}
        @endisset

        @foreach($arrArticles as $branch)
            <div class="collection-branches">
                <h2>{{$branch['name']}}</h2>
                <div class="collection-branches-items">
                    @foreach($branch['child'] as $article)
                        <div class="collection-branches-item">
                            <a href="{{\App\Menu::root(7)}}/{{$article['alias']}}">{{$article['name']}}</a>
                        </div>

                    @endforeach
                </div>
            </div>
        @endforeach


    </div>
</section>
