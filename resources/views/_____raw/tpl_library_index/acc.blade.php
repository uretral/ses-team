<section>
    <div class="half">
        <div class="half-bg">
            <img src="/upload/{{$data['steps_img']}}" alt=""/>
        </div>
        <div class="half-items">
            <div class="half-item covered">
                <div class="accordion">
                    @foreach($stepsList as $l => $step)
                        @if($l == 0)
                            <input type="radio" id="type14569_{{$l}}" checked name="type_0980"/>
                        @else
                            <input type="radio" id="type14569_{{$l}}" name="type_0980"/>
                        @endif
                        <label for="type14569_{{$l}}">{!! $step['title'] !!}</label>
                        <div>
                            <p>{!! $step['text'] !!}</p>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="half-item text">
                <div class="shadow-txt">
                    {!! $data['steps_text'] !!}
                </div>
            </div>
        </div>
    </div>
</section>
