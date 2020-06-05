<div class="topbar__menu">
    <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
        <span class="topbar__button-label">
            @lang('Language:')
        </span>
        <span class="topbar__button-title">{{ strtoupper(app()->getLocale()) }}</span>
        <span class="topbar__button-arrow">
            <svg width="7px" height="5px">
                <path
                    d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
            </svg>
        </span>
    </button>
    <div class="topbar__menu-body">
        @foreach (config('app.locales') as $locale)
        <a class="topbar__menu-item" href="#">
            <img src="/images/languages/{{ $locale }}.png" alt="">
            <span>@lang($locale)</span>
        </a>
        @endforeach
    </div>
</div>
