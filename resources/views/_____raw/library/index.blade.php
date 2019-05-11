@extends('layouts.tpl'){{--<div class="header-space"></div>--}}
@include('snippets.banner')
@include('snippets.breadcrumbs')
@include('snippets.share')

<main>
    <div>
        <div class="wide">
            <div class="wide-content">
                <h1>{{$data['utp']}}</h1>
                <h3>{!! $data['intro'] !!}</h3>

                <div class="wide-boxes">
                    <div class="wide-boxes-img">
                        @foreach($imgList as $key => $img)
                            @if($key == 1 || $key == 2)
                                <div class="wide-boxes-img-frame" style="background-image: url('/upload/{{$img['img']}}') ">

                                </div>
                            @else
                                <img src="/upload/{{$img['img']}}" alt="img"/>
                            @endif
                        @endforeach
                    </div>
                    <div class="wide-boxes-text">
                        {!! $data['desc'] !!}

                        <div class="price">
                            <div class="price-header">
                                {!! $data['price_head'] !!}
                            </div>
                            <div class="price-body">
                                {!! $data['price_body'] !!}
                            </div>
                            <div class="price-footer"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<section>
    <div class="schedule">
        <div class="schedule-header">
            <p>Свяжитесь с нашим специалистом: 866-835-5978</p>
        </div>
        <div class="schedule-body">
            <legend>Бесплатная консультация:</legend>
            <form class="schedule-form" action="javascript:">
                <label for="schedule-branch">
                    <select id="schedule-branch" class="simple">
                        <option value="Select Industry">Сфера бизнеса</option>
                        <option value="Pest Management For Schools">Education</option>
                        <option value="Food and Beverage Processing">Food and Beverage Processing</option>
                        <option value="Foodservice">Foodservice</option>
                        <option value="government Pest Management">Government</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Hospitality Gaming">Hospitality</option>
                        <option value="Logistics">Logistics</option>
                        <option value="Multi Family Property Management">Multifamily</option>
                        <option value="Office Property Management">Office Property Management</option>
                        <option value="Other Industries Solutions">Other Industries</option>
                        <option value="Pharmaceutical">Pharmaceutical</option>
                        <option value="Retail Pest Management">Retail</option>
                    </select>
                </label>



                <input type="text" placeholder="Имя"/>
                <input type="text" placeholder="Телефон"/>
                <button class="black" type="submit"><span>Отправить</span></button>
            </form>

        </div>
        <div class="schedule-footer"></div>
    </div>
</section>


@include('tpl_library_index.acc')

<section>
    <div>
        <div class="video">
            <div class="video-video">
                {{--                <iframe  src="https://www.youtube.com/embed/{{$data['video_video']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}

                <img src="/upload/{{$data['video_img']}}" alt="image"/>
            </div>
            <div class="video-text">
                {!! $data['video_text'] !!}
            </div>
        </div>
    </div>
</section>

<section>
    <div>
        <div class="quadro">
            <h2>{!! $data['libraries_h'] !!}</h2>
            <div class="quadro-items">
                @foreach($libraries as $libItem)
                    <div class="quadro-item">
                        <h4>{!! $libItem['name'] !!}</h4>
                        <p>
                            {!! Str::limit($libItem['intro'], 150, '...') !!}
                            <a href="{{$data['alias']}}/{{$libItem['alias']}}"> Читать далее ></a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>@include('snippets.cite')@include('snippets.happy_invert')@include('tpl_home.services_acc')


<section>
    <div>
        <div class="links">
            <div class="links-faq">
                <h2>{!! $data['ask_h'] !!}</h2>
                <ul class="links-faqs">
                    @if($faq && array_key_exists('faq',$faq))
                        @foreach($faq['faq'] as $faqItem)
                            <li class="links-faqs-item">
                                <a href="{{$data['alias']}}/{{$faqItem['alias']}}">{!! $faqItem['name'] !!}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <div class="links-more">
                <h2>{!! $data['lib_heading'] !!}</h2>
                <ul class="links-items">
                    @if($faq && array_key_exists('other',$faq))
                        @foreach($faq['other'] as $other)
                            <li class="links-item">
                                <a href="{{$data['alias']}}/{{$other['alias']}}">{!! $other['name'] !!}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>

@include('snippets.zip')


