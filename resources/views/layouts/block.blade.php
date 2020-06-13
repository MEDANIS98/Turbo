@extends('layouts.app')

@section('content')
<div class="block-space block-space--layout--after-header"></div>
	<div class="block">
		@yield('block')
	</div>
<div class="block-space block-space--layout--before-footer"></div>
@stop