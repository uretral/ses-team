@extends('tpl.backend')
<section>
	<div>
		<div class="communication">
			<div class="communication-callback">
				<span>Найдите ваш регион</span>
				<select rel="region-links" class="simple inter">
					@foreach(\App\Admin\Controllers\SiteController::regions() as $region)
						<option @if(request()->root() == $region->url) selected @endif value="{{$region->url}}">{{$region['region']}}</option>
					@endforeach
				</select>
{{--				<div class="communication-callback_col">
					<label>
						<input class="region-search" type="text" placeholder="Ваш регион..."/>
						<button class="region-sbt"><b>GO</b></button>
					</label>
					<ul class="regions-list"></ul>
				</div>--}}
				<span>Или звоните: <em>{{REGION['phone']}}</em></span>
			</div>
			<div class="communication-feedback">
				<mark>
					<span>Сергей Новиков г. Москва</span>
					<cite>
						Настоящий ОПЫТ.  ...ЭТО ДЕЙСТВИТЕЛЬНО  ТО, ЧТО ВЫ ПОКАЗЫВАЕТЕ В своих делах. <em>... потрясающий опыт.</em>
					</cite>

				</mark>
				<a class="btn" href="{{MENU[22]['link']}}"><span>Больше</span></a>
			</div>
			<div class="hr"></div>
		</div>
	</div>
</section>
