<div class="header__topbar-start-bg"></div>
<div class="header__topbar-start">
    <div class="topbar topbar--spaceship-start">
        <div class="topbar__item-text d-none d-xxl-flex">@lang('Call Us'): (800) 060-0730</div>
        <div class="topbar__item-text">
            <a class="topbar__link" href="{{ route('about') }}">
                @lang('About')
            </a>
        </div>
        <div class="topbar__item-text">
            <a class="topbar__link" href="{{ route('contact') }}">
                @lang('Contact US')
            </a>
        </div>
        <div class="topbar__item-text">
            <a class="topbar__link" href="{{ route('track') }}">
                @lang('Track Order')
            </a>
        </div>
    </div>
</div>
<div class="header__topbar-end-bg"></div>
<div class="header__topbar-end">
    <div class="topbar topbar--spaceship-end">
        <div class="topbar__item-button">
            <a href="#" class="topbar__button">
                <span class="topbar__button-label">Compare:</span>
                <span class="topbar__button-title">5</span>
            </a>
        </div>
        <div class="topbar__item-button topbar__menu">
            <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
                <span class="topbar__button-label">Currency:</span>
                <span class="topbar__button-title">USD</span>
                <span class="topbar__button-arrow">
                    <svg width="7px" height="5px">
                        <path
                            d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                    </svg>
                </span>
            </button>
            <div class="topbar__menu-body">
                <a class="topbar__menu-item" href="#">€ Euro</a>
                <a class="topbar__menu-item" href="#">£ Pound Sterling</a>
                <a class="topbar__menu-item" href="#">$ US Dollar</a>
                <a class="topbar__menu-item" href="#">₽ Russian Ruble</a>
            </div>
        </div>
        @include('partials.languageSwitcher')
    </div>
</div>
