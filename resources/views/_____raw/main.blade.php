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
    <div class="wide">
        <div class="wide-box bb origin">
            <a class="pest-menu-callback btn" href="javascript:;"><span>обратный звонок</span></a>
            <div class="pest-menu-items">
                <a href="javascript:" class="pest-menu-item">
                    <img src="../../../img/dot-pest-control.png" alt="img"/>
                    <span>Короед </span>
                </a>
                <a href="javascript:" class="pest-menu-item">
                    <img src="../../../img/dot-termite-control.png" alt="img"/>
                    <span>Кроты</span>
                </a>
                <a href="javascript:" class="pest-menu-item">
                    <img src="../../../img/dot-bed-bug-alt.png" alt="img"/>
                    <span>Клещи</span>
                </a>
                <a href="javascript:" class="pest-menu-item">
                    <img src="../../../img/dot-mosquito.png" alt="img"/>
                    <span>Борщевик</span>
                </a>
            </div>
        </div>
    </div>
</section>

@include('tpl_home.region_double')

{{----}}
@include('tpl_home.happy')

{{--@include('snippets.library_slider')--}}
{{--<%=_.template(require('./../includes/snippets/slider.html'))(data)%>--}}

@include('tpl_home.services_acc')

{{--





<%=_.template(require('./../includes/snippets/triple/training.html'))(data)%>
<%=_.template(require('./../includes/snippets/half/starting.html'))(data)%>
<%=_.template(require('./../includes/snippets/running/cite.html'))(data)%>
<%=_.template(require('./../includes/snippets/running/science.html'))(data)%>
<% var zip = {subClass: '' };%>
<%=_.template(require('./../includes/snippets/running/zip.html'))(zip)%>

--}}




