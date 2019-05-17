<div class="aside-region">
    <h3>Find Your Local Branch</h3>
    <p>Enter a zip code below to view local branches.</p>
    <div rel="region"></div>
</div>
<div class="aside-call">
    <h3>Беспокоят насекомые?</h3>
    <p class="tel">
        Позвоните нам: <span>+7 905 552 40 40</span>
    </p>
    <p>
        Или отправьте нам заявку, мы перезвоним Вам в течении 5ти минут:
    </p>

    <form action="javascript:">
        <input type="text" name="name" placeholder="ваше имя"/>
        <input type="text" name="email" placeholder="ваше email"/>
        <input type="text" name="phone" placeholder="ваше телефон"/>

        <button class="sbt"><span>Отправить</span></button>

        <mark>
            By clicking the “Get Started” button, I authorize Orkin to contact me about their services at this number using an auto dialer. I understand my consent is not required to make a purchase.
        </mark>
    </form>
</div>

@if($data->aside_cite_text && $data->aside_cite_switcher)
    <div class="aside-info">
        <mark>
{!! $data->aside_cite_text !!}
        </mark>
    </div>
@elseif($data->aside_cite_switcher)
    <div class="aside-banner">
        <img src="/storage/{{$data->aside_cite_img}}" alt="img"/>
    </div>
@endif

@if($data->aside_advert_text && $data->aside_advert_switcher)
    <div class="aside-info">
        <mark>
            {!! $data->aside_advert_text !!}
        </mark>
    </div>
@elseif($data->aside_advert_switcher)
    <div class="aside-banner">
        <img src="/storage/{{$data->aside_advert_img}}" alt="img"/>
    </div>
@endif
