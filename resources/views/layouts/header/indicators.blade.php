<div class="header__indicators">
	<div class="indicator">
		<a href="{{ route('wishlist') }}" class="indicator__button">
			<span class="indicator__icon">
				@include('svg.wish')
			</span>
		</a>
	</div>
	<div class="indicator indicator--trigger--click @if($errors->has('email') && (url()->previous() != url('login'))) indicator--open @endif">
		<a href="/login" class="indicator__button">
			<span class="indicator__icon">
				@include('svg.account')
			</span>
			@guest
			<span class="indicator__title">@lang('Hello')</span>
			<span class="indicator__value">@lang('Login')</span>
			@else
			<span class="indicator__value">@lang('My Account')</span>
			<span class="indicator__title">{{ auth()->user()->name }}</span>
			@endguest
		</a>
		<div class="indicator__content">
			@include('partials.account_menu')
		</div>
	</div>
	<div class="indicator indicator--trigger--click">
		<a href="/cart" class="indicator__button">
			<span class="indicator__icon">
				@include('svg.cart')
				<span class="indicator__counter">3</span>
			</span>
			<span class="indicator__title">@lang('Shopping Cart')</span>
			<span class="indicator__value">$250.00</span>
		</a>
		<div class="indicator__content">
			<div class="dropcart">
				<ul class="dropcart__list">
					<li class="dropcart__item">
						<div class="dropcart__item-image">
							<a href="product-full.html">
								<img src="/images/products/product-4-70x70.jpg" alt="">
							</a>
						</div>
						<div class="dropcart__item-info">
							<div class="dropcart__item-name">
								<a href="product-full.html">
									Glossy Gray 19" Aluminium Wheel AR-19
								</a>
							</div>
							<ul class="dropcart__item-features">
								<li>@lang('Color'): Yellow</li>
								<li>@lang('Material'): Aluminium</li>
							</ul>
							<div class="dropcart__item-meta">
								<div class="dropcart__item-quantity">2</div>
								<div class="dropcart__item-price">$699.00</div>
							</div>
						</div>
						<button type="button" class="dropcart__item-remove">
							@include('svg.remove')
						</button>
					</li>
					<li class="dropcart__divider" role="presentation"></li>
				</ul>
				<div class="dropcart__totals">
					<table>
						<tr>
							<th>@lang('Subtotal')</th>
							<td>$5877.00</td>
						</tr>
						<tr>
							<th>@lang('Shipping')</th>
							<td>$25.00</td>
						</tr>
						<tr>
							<th>@lang('Total')</th>
							<td>$5902.00</td>
						</tr>
					</table>
				</div>
				<div class="dropcart__actions">
					<a href="/cart" class="btn btn-secondary">
						@lang('View Cart')
					</a>
					<a href="/checkout" class="btn btn-primary">@lang('Checkout')</a>
				</div>
			</div>
		</div>
	</div>
</div>
