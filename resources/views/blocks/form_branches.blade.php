@extends('tpl.backend')
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
                        @isset($data)
                            @foreach($data as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        @endisset
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
