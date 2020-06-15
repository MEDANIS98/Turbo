<div class="topbar__menu">
	<button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
		<span class="topbar__button-label">
			@lang('Language:')
		</span>
		<span class="topbar__button-title">{{ strtoupper(app()->getLocale()) }}</span>
		<span class="topbar__button-arrow">
			@include('svg.arrow_down')
		</span>
	</button>
	<div class="topbar__menu-body">
		@foreach (config('app.locales') as $locale)
		<a class="topbar__menu-item" href="{{ route('locale', ['locale' => $locale]) }}">
			<img src="/images/languages/{{ $locale }}.png" alt="@lang('Flag')">
			<span>@lang($locale)</span>
		</a>
		@endforeach
	</div>
</div>
