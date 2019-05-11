@extends('layouts.tpl')

<section>
    <div class="wide banner">
        <div class="wide-box origin">
            <img src="/upload/{{$data->banner}}" alt="banner"/>
            <div class="banner-slogan">
                <cite>
                    {!! $data->banner_cite !!}
                </cite>
            </div>
        </div>
    </div>
</section>
<section>
    <div>
        <div class="expertise">
            <div class="expertise-box">
                <h2>{!! $data->name !!}</h2>
                <p>
                    {!! $data->subtitle !!}
                </p>

                <ul class="expertise-items">
                    @foreach($branches as $branch)
                        <li>
                            <a href="{{$solutionsRoot}}/{{$branch['alias']}}">
                                <img src="/upload/{{$branch['img']}}" alt="img"/>
                                <span>{!! $branch['name'] !!}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="triple both">
        <div class="triple-header">
            <div class="count">
                <div class="count-info">
                    <span><em>3</em></span>
                </div>
            </div>
            <h2 class="tall">
                <strong>Тройная гарантия</strong>от SESteam
            </h2>
        </div>
        <div class="triple-items">
            <div class="triple-item border">
                <h3>ГАРАНТИЯ</h3>
                <h3>24X365</h3>
                <p>
                    Если у Вас появилась проблема с вредителями, наши специалисты мнгновенно отреагируют на ваш запрос: мы работаем 24 часа в сутки, 365 дней в году.
                </p>
            </div>
            <div class="triple-item border">
                <h3>Гарантия</h3>
                <h3>возврата денег</h3>
                <p>Если ваша компания будет оштрафована контролирующим органом по нашей вине,
                    SESteam возместит вам сумму уплаченных штрафов.
                </p>
            </div>
            <div class="triple-item border">
                <h3>Гарантия</h3>
                <h3>стоимости</h3>
                <p>Гарантируем,что стоимость услуги не измениться. Никаких скрытых и дополнительных платяжей. Вы заранее знаете стоимость услуги.</p>

        </div>
    </div>
</section>

@include('snippets.zip_gray')


<section>
    <div class="double top">
        <div class="double-header">
            <h2>Наши услуги</h2>
            <p>
                Pest control can take many forms, and for us, it’s always about helping to protect your business. Choose
                a service to learn more.
            </p>
        </div>

        <div class="double-items ">
            <div class="double-item bottom">
                <div class="accordion">
                    @php $left = 0 @endphp
                    @foreach($services as $leftService)
                        @if($leftService['left_col'] == '1')
                            <input type="radio" id="{{$leftService['alias']}}" @if($left == 0) checked  @endif name="services_left"/>
                            <label for="{{$leftService['alias']}}">{{$leftService['name']}}</label>
                            <div>
                                <p>{{$leftService['intro']}} <a href="{{$servicesRoot}}/{{$leftService['alias']}}">Узнать больше ></a></p>
                            </div>
                            @php $left++ @endphp
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="double-item bottom">
                <div class="accordion">
                    @php $right = 0 @endphp
                    @foreach($services as $rightService)
                        @if($rightService['right_col'] == '1')
                            <input type="radio" id="{{$rightService['alias']}}" @if($right == 0) checked  @endif name="services_right"/>
                            <label for="{{$rightService['alias']}}">{{$rightService['name']}}</label>
                            <div>
                                <p>{{$rightService['intro']}} <a href="{{$servicesRoot}}/{{$rightService['alias']}}">Узнать больше ></a></p>
                            </div>
                            @php $right++ @endphp
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="select-block">
        <div class="select-block-container">
            <div class="select-block-row">
                <h2>Наши клиенты</h2>
                <div class="select-links"></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="triple top">
        <div class="triple-header">
            <p>Orkin’s approach to Integrated Pest Management {IPM) is called A.I.M. You can read some of our case studies below to understand how we can help businesses manage pest control problems.</p>
        </div>
        <div class="triple-items">
            <div class="triple-item">
                <div class="img">
                    <div class="img-frame">
                        <img src="../img/pictured-1.jpg" alt="img"/>
                    </div>
                </div>

                <span class="triple-subtitle">CAROLINA BEVERAGE GROUP </span>
            </div>
            <div class="triple-item">
                <div class="img">
                    <div class="img-frame">
                        <img src="../img/pictured-2.jpg" alt="img"/>
                    </div>
                </div>

                <span class="triple-subtitle">MORTON SALT COMPANY</span>
            </div>
            <div class="triple-item">
                <div class="img">
                    <div class="img-frame">
                        <iframe src="https://www.youtube.com/embed/8g9Qnjq29a8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <span class="triple-subtitle">TYSON FOODS</span>
            </div>
        </div>
        <div class="triple-footer">
            <a class="btn" href="{{$clientsRoot}}">
                <span>Больше</span>
            </a>
        </div>
    </div>
</section>
