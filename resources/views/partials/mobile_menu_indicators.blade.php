<div class="mobile-menu__indicators">
	<a class="mobile-menu__indicator" href="/wishlist">
		<span class="mobile-menu__indicator-icon">
			@include('svg.mobile.heart')
		</span>
		<span class="mobile-menu__indicator-title">
			@lang('Wishlist')
		</span>
	</a>
	<a class="mobile-menu__indicator" href="/dashboard">
		<span class="mobile-menu__indicator-icon">
			@include('svg.mobile.account')
		</span>
		<span class="mobile-menu__indicator-title">
			@lang('Account')
		</span>
	</a>
	<a class="mobile-menu__indicator" href="/cart">
		<span class="mobile-menu__indicator-icon">
			@include('svg.mobile.shop_circle')
			<span class="mobile-menu__indicator-counter">
				{{ Cart::count() }}
			</span>
		</span>
		<span class="mobile-menu__indicator-title">
			@lang('Cart')
		</span>
	</a>
	<a class="mobile-menu__indicator" href="/garage">
		<span class="mobile-menu__indicator-icon">
			@include('svg.mobile.car')
		</span>
		<span class="mobile-menu__indicator-title">
			@lang('Garage')
		</span>
	</a>
</div>
