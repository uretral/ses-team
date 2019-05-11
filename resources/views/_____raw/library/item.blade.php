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

				{!! $data->desc !!}

			</div>
		</div>
	</div>
</main>

@include('snippets.zip')

