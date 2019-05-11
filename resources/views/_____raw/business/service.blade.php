@extends('layouts.tpl')

<div class="header-space"></div>
@include('snippets.breadcrumbs')
@include('snippets.share')
<main>
    <div>
        <div class="detail">
            <aside class="aside">
                @include('snippets.aside')
            </aside>
            <div class="detail-content">
                <h1>{!! $data->name !!}</h1>
                <p>{!! $data->intro !!}</p>

                {!! $data->detail !!}


                @isset($branches)
                    <h2 class="inner">Сферы бизнеса</h2>
                    <div class="detail-clients">
                        @foreach($branches as $branch)
                            <div class="detail-client">
                                <img src="/upload/{{$branch->img}}" alt=""/>
                                {!! $branch->intro !!}
                                <a href="{{App\Menu::SOLUTIONS}}/{{$branch->alias}}">Читать далее</a>
                            </div>
                        @endforeach
                    </div>
                @endisset

                @isset($methods)
                    <h2 class="inner">Применяемые методы</h2>
                    <div class="accordion">
                        @foreach($methods as $key => $method)

                            <input type="radio" id="methods-{{$method->id}}" @if($key == 0) checked @endif  name="methods"/>
                            <label for="methods-{{$method->id}}">{{$method->name}}</label>
                            <div>
                                {!! $method->text !!}
                            </div>
                        @endforeach
                    </div>
                @endisset

                @isset($data->price)
                    <div class="detail-contrast">
                        <div class="detail-contrast-header">
                            <p>Прайс-лист</p>
                        </div>
                        <div class="detail-contrast-body">
                            {!! $data->price !!}
                        </div>
                        <div class="detail-contrast-footer"></div>
                    </div>
                @endisset

                @isset($data->warranty)
                    <div class="detail-contrast">
                        <div class="detail-contrast-header">
                            <p>Гарантия</p>
                        </div>
                        <div class="detail-contrast-body">
                            {!! $data->warranty !!}
                        </div>
                        <div class="detail-contrast-footer"></div>
                    </div>
                @endisset

                @include('forms.feedback')

            </div>
        </div>
    </div>
</main>

@include('snippets.zip')
