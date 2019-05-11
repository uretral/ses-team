<section>
    <div class="breadcrumbs">
        <div class="breadcrumbs-box">
            <a href="/">Главная</a>
            <em>»</em>
            @isset($breadcrumbs)
                @foreach($breadcrumbs as $link => $name)
                    @if($link != 'last')
                        <a href="{{$link}}">{{$name}}</a>
                        <em>»</em>
                    @else
                        <span>{{$name}}</span>
                    @endif
                @endforeach
            @endisset
        </div>
    </div>
</section>
