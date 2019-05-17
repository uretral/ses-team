@extends('tpl.tpl')
<div class="header-space"></div>
{!! \App\Models\Statics\Breadcrumbs::resource($data->name) !!}
{!! \App\Models\Statics\Share::block() !!}
<main>
    <div>
        <div class="detail">
            <aside class="aside">
                @include('tpl.aside')
            </aside>
            <div class="detail-content">
                <h1>{!! $data->name !!}</h1>
                <p>{!! $data->intro !!}</p>

                {!! $data->detail !!}
                @empty(!$data->clients)
                    <h2 class="inner">Наши партнеры</h2>
                    <div class="detail-clients">

                        @foreach($data->clients as $partner)
                            <div class="detail-client">

                                <strong>{{$partner->name}}</strong>

                                <img src="/storage/{{$partner->img}}" alt=""/>
                                {!! $partner->intro !!}
                                <a href="{{MENU['12']['link']}}/{{$partner->alias}}">Читать далее</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endempty

                @isset($data->art)
                    <h2 class="inner">Статьи</h2>
                    <div class="detail-articles">
                        @foreach($data->art as $article)
                            <div class="detail-article">
                                <a href="{{MENU[15]['link']}}/{{$article->alias}}" class="detail-article">{{$article->name}}</a>
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
                @isset($data->sign)
                    <div class="detail-sign">
                        <img src="/storage/{{$data->sign}}" alt="img"/>
                        {!! $data->sign_text !!}
                    </div>
                @endisset
                @isset($data->aim_heading)
                    <div class="detail-aim">
                        <div class="detail-aim-img">
                            <img src="/storage/{{$data->aim_img}}" alt="img"/>
                        </div>
                        <div class="detail-aim-text">
                            <h2>{!! $data->aim_heading !!}</h2>
                            {!! $data->aim_text !!}
                        </div>
                    </div>
                @endisset
                {!! \App\Models\Forms\FormFeedback::block() !!}
            </div>
        </div>
    </div>
</main>
