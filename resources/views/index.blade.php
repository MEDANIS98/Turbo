@extends('layouts.app')

@section('title', __('Home'))

@section('content')
@include('partials.finder')
@include('partials.features')
@include('partials.brands')
<div class="block-space block-space--layout--divider-nl"></div>
<div class="block block-products-carousel" data-layout="grid-5">
	<div class="container">
		<div class="section-header">
			<div class="section-header__body">
				<h2 class="section-header__title">@lang('Featured Products')</h2>
				<div class="section-header__spring">
				</div>
				<ul class="section-header__groups">
					<li class="section-header__groups-item">
						<button type="button" class="section-header__groups-button section-header__groups-button--active">
							@lang('All')
						</button>
					</li>
					<li class="section-header__groups-item">
						<button type="button" class="section-header__groups-button">Power Tools</button>
					</li>
					<li class="section-header__groups-item">
						<button type="button" class="section-header__groups-button">Hand Tools
						</button>
					</li>
					<li class="section-header__groups-item"><button type="button" class="section-header__groups-button">Plumbing
						</button>
					</li>
				</ul>
				<div class="section-header__arrows">
					<div class="arrow section-header__arrow section-header__arrow--prev arrow--prev"><button class="arrow__button"
							type="button">
							@include('svg.arrow_left')
						</button>
					</div>
					<div class="arrow section-header__arrow section-header__arrow--next arrow--next"><button class="arrow__button"
							type="button">
							@include('svg.arrow_right')
						</button>
					</div>
				</div>
				<div class="section-header__divider"></div>
			</div>
		</div>
		<div class="block-products-carousel__carousel">
			<div class="block-products-carousel__carousel-loader"></div>
			<div class="owl-carousel">
				@for ($i = 0; $i < 32; $i++) <div class="block-products-carousel__column">
					<div class="block-products-carousel__cell">
						<div class="product-card product-card--layout--grid">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
								<button class="product-card__action product-card__action--wishlist" type="button"
									aria-label="@lang('Add to wish list')">
									@include('svg.heart')
								</button>
								<button class="product-card__action product-card__action--compare" type="button"
									aria-label="@lang('Add to compare')">
									@include('svg.chart')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-3-245x245.jpg" alt="@lang('Photo')">
								</a>
								<div
									class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
									<div class="status-badge__body">
										<div class="status-badge__icon">
											@include('svg.valid')
										</div>
										<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
										<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
											title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
										</div>
									</div>
								</div>
							</div>
							<div class="product-card__info">
								<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
									009-50078-Z
								</div>
								<div class="product-card__name">
									<div>
										<div class="product-card__badges">
											<div class="tag-badge tag-badge--sale">sale</div>
										</div><a href="product-full.html">Left Headlight Of Brandix Z54</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">{{ $i }} on 14 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--new">$349.00</div>
									<div class="product-card__price product-card__price--old">$415.00</div>
								</div>
								<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
									@include('svg.shop_circle')
								</button>
							</div>
						</div>
					</div>
			</div>
			@endfor
		</div>
	</div>
</div>
<div class="block-space block-space--layout--divider-nl"></div>
<div class="block-space block-space--layout--divider-lg"></div>
<div class="block block-zone">
	<div class="container">
		<div class="block-zone__body">
			<div class="block-zone__card category-card category-card--layout--overlay">
				<div class="category-card__body">
					<div class="category-card__content">
						<div class="category-card__info">
							<div class="category-card__name"><a href="category-4-sidebar">Wheels & Tires
								</a>
							</div>
							<ul class="category-card__children">
								<li><a href="category-4-sidebar">Wheel Covers</a></li>
								<li><a href="category-4-sidebar">Brake Kits</a></li>
								<li><a href="category-4-sidebar">Tire Chains</a></li>
								<li><a href="category-4-sidebar">Wheel disks</a></li>
								<li><a href="category-4-sidebar">Tires</a></li>
								<li><a href="category-4-sidebar">Sensors</a></li>
								<li><a href="category-4-sidebar">Accessories</a></li>
							</ul>
							<div class="category-card__actions">
								<a href="/shop-grid-4-columns-sidebar" class="btn btn-primary btn-sm">@lang('Shop All')
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-zone__widget">
				<div class="block-zone__widget-header">
					<div class="block-zone__tabs">
						<button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">@lang('Featured')
						</button>
						<button class="block-zone__tabs-button" type="button">@lang('Bestsellers')
						</button>
						<button class="block-zone__tabs-button" type="button">@lang('Popular')
						</button>
					</div>
					<div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
						<button class="arrow__button" type="button">
							@include('svg.arrow_left')
						</button>
					</div>
					<div class="arrow block-zone__arrow block-zone__arrow--next arrow--next">
						<button class="arrow__button" type="button">
							@include('svg.arrow_right')
						</button>
					</div>
				</div>
				<div class="block-zone__widget-body">
					<div class="block-zone__carousel">
						<div class="block-zone__carousel-loader">
						</div>
						<div class="owl-carousel">
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button" aria-label=""
											@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-1-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
												</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 140-10440-B
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale</div>
													<div class="tag-badge tag-badge--new">new</div>
													<div class="tag-badge tag-badge--hot">hot</div>
												</div><a href="product-full.html">Brandix Spark Plug Kit
													ASR-400</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 3 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$19.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image"><a href="product-full.html">
											<img src="/images/products/product-2-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
												</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 573-23743-C
										</div>
										<div class="product-card__name">
											<div>
												<a href="product-full.html">Brandix Brake Kit
													BDX-750Z370-S
												</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
												</div>
											</div>
											<div class="product-card__rating-label">5 on 22 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$224.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-3-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
												</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 009-50078-Z
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale
													</div>
												</div>
												<a href="product-full.html">Left Headlight Of Brandix
													Z54</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">3 on 14 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--new">
												$349.00</div>
											<div class="product-card__price product-card__price--old">
												$415.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image"><a href="product-full.html">
											<img src="/images/products/product-4-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
												</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> A43-44328-B
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--hot">hot
													</div>
												</div>
												<a href="product-full.html">Glossy Gray 19" Aluminium
													Wheel AR-19</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 26 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$589.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image"><a href="product-full.html">
											<img src="/images/products/product-5-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 729-51203-B
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Twin Exhaust Pipe From Brandix
													Z54</a></div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 9 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$749.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image"><a href="product-full.html"><img
												src="/images/products/product-6-245x245.jpg" alt="@lang('Photo')"></a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-49386-C
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Motor Oil Level 5</a></div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
												</div>
											</div>
											<div class="product-card__rating-label">5 on 2 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$23.00</div>
										</div>
										<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list"><button
											class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button> <button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-7-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 753-38573-B
										</div>
										<div class="product-card__name">
											<div>
												<a href="product-full.html">Brandix Engine Block Z4
												</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">0 on 0 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$452.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-8-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 472-67382-Z
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Brandix Clutch Discs Z175</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">3 on 7 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$345.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-space block-space--layout--divider-sm"></div>
<div class="block block-zone">
	<div class="container">
		<div class="block-zone__body">
			<div class="block-zone__card category-card category-card--layout--overlay">
				<div class="category-card__body">
					<div class="category-card__content">
						<div class="category-card__info">
							<div class="category-card__name">
								<a href="category-4-sidebar">Interior
									Parts
								</a>
							</div>
							<ul class="category-card__children">
								<li><a href="category-4-sidebar">Dashboards</a></li>
								<li><a href="category-4-sidebar">Seat Covers</a></li>
								<li><a href="category-4-sidebar">Floor Mats</a></li>
								<li><a href="category-4-sidebar">Sun Shades</a></li>
								<li><a href="category-4-sidebar">Visors</a></li>
								<li><a href="category-4-sidebar">Car Covers</a></li>
								<li><a href="category-4-sidebar">Accessories</a></li>
							</ul>
							<div class="category-card__actions">
								<a href="/shop-grid-4-columns-sidebar" class="btn btn-primary btn-sm">@lang('Shop All')
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-zone__widget">
				<div class="block-zone__widget-header">
					<div class="block-zone__tabs">
						<button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">@lang('Featured')
						</button>
						<button class="block-zone__tabs-button" type="button">@lang('Bestsellers')
						</button>
						<button class="block-zone__tabs-button" type="button">@lang('Popular')
						</button>
					</div>
					<div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
						<button class="arrow__button" type="button">
							@include('svg.arrow_left')
						</button>
					</div>
					<div class="arrow block-zone__arrow block-zone__arrow--next arrow--next"><button class="arrow__button"
							type="button">
							@include('svg.arrow_right')
						</button>
					</div>
				</div>
				<div class="block-zone__widget-body">
					<div class="block-zone__carousel">
						<div class="block-zone__carousel-loader"></div>
						<div class="owl-carousel">
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-1-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 140-10440-B
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale</div>
													<div class="tag-badge tag-badge--new">new</div>
													<div class="tag-badge tag-badge--hot">hot</div>
												</div><a href="product-full.html">Brandix Spark Plug Kit
													ASR-400</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 3 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$19.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-2-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-23743-C
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Brandix Brake Kit
													BDX-750Z370-S</a></div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
												</div>
											</div>
											<div class="product-card__rating-label">5 on 22 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$224.00</div>
										</div>
										<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-3-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 009-50078-Z
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale</div>
												</div><a href="product-full.html">Left Headlight Of Brandix
													Z54</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">3 on 14 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--new">
												$349.00</div>
											<div class="product-card__price product-card__price--old">
												$415.00</div>
										</div>
										<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-4-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> A43-44328-B
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--hot">hot</div>
												</div><a href="product-full.html">Glossy Gray 19" Aluminium
													Wheel AR-19</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star">

													</div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 26 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$589.00</div>
										</div>
										<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-5-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 729-51203-B
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Twin Exhaust Pipe From Brandix
													Z54</a></div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 9 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$749.00
											</div>
										</div>
										<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-6-245x245.jpg" alt="@lang('Photo')"></a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 573-49386-C
										</div>
										<div class="product-card__name">
											<div>
												<a href="product-full.html">Motor Oil Level 5
												</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
												</div>
											</div>
											<div class="product-card__rating-label">5 on 2 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$23.00</div>
										</div>
										<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image"><a href="product-full.html"><img
												src="/images/products/product-7-245x245.jpg" alt="@lang('Photo')"></a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 753-38573-B
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Brandix Engine Block Z4</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">0 on 0 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$452.00
											</div>
										</div>
										<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html"><img src="/images/products/product-8-245x245.jpg"
												alt="@lang('Photo')"></a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> 472-67382-Z
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Brandix Clutch Discs Z175</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">3 on 7 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$345.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-space block-space--layout--divider-sm"></div>
<div class="block block-zone">
	<div class="container">
		<div class="block-zone__body">
			<div class="block-zone__card category-card category-card--layout--overlay">
				<div class="category-card__body">
					<div class="category-card__content">
						<div class="category-card__info">
							<div class="category-card__name"><a href="category-4-sidebar">Engine &
									Drivetrain</a>
							</div>
							<ul class="category-card__children">
								<li><a href="category-4-sidebar">Timing Belts</a></li>
								<li><a href="category-4-sidebar">Spark Plugs</a></li>
								<li><a href="category-4-sidebar">Oil Pans</a></li>
								<li><a href="category-4-sidebar">Engine Gaskets</a></li>
								<li><a href="category-4-sidebar">Oil Filters</a></li>
								<li><a href="category-4-sidebar">Engine Mounts</a></li>
								<li><a href="category-4-sidebar">Accessories</a></li>
							</ul>
							<div class="category-card__actions"><a href="/shop-grid-4-columns-sidebar"
									class="btn btn-primary btn-sm">@lang('Shop All')</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-zone__widget">
				<div class="block-zone__widget-header">
					<div class="block-zone__tabs">
						<button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">@lang('Featured')
						</button>
						<button class="block-zone__tabs-button" type="button">@lang('Bestsellers')
						</button>
						<button class="block-zone__tabs-button" type="button">@lang('Popular')
						</button>
					</div>
					<div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
						<button class="arrow__button" type="button">
							@include('svg.arrow_left')
						</button>
					</div>
					<div class="arrow block-zone__arrow block-zone__arrow--next arrow--next">
						<button class="arrow__button" type="button">
							@include('svg.arrow_right')</button></div>
				</div>
				<div class="block-zone__widget-body">
					<div class="block-zone__carousel">
						<div class="block-zone__carousel-loader"></div>
						<div class="owl-carousel">
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button> <button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="" @lang('Add to wish list')"">@include('svg.heart')</button> <button
											class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">@include('svg.chart')</button></div>
									<div class="product-card__image"><a href="product-full.html"><img
												src="/images/products/product-1-245x245.jpg" alt="@lang('Photo')"></a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">@include('svg.valid')</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 140-10440-B
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale</div>
													<div class="tag-badge tag-badge--new">new</div>
													<div class="tag-badge tag-badge--hot">hot</div>
												</div><a href="product-full.html">Brandix Spark Plug Kit
													ASR-400</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 3 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$19.00</div>
										</div><button class="product-card__addtocart-icon" type="button"
											aria-label="@lang('Add to cart')">@include('svg.shop_circle')</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list"><button
											class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">@include('svg.zoom')</button> <button
											class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">@include('svg.heart')</button> <button
											class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">@include('svg.chart')</button></div>
									<div class="product-card__image"><a href="product-full.html"><img
												src="/images/products/product-2-245x245.jpg" alt="@lang('Photo')"></a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">@include('svg.valid')</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-23743-C
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Brandix Brake Kit
													BDX-750Z370-S</a></div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
												</div>
											</div>
											<div class="product-card__rating-label">5 on 22 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$224.00</div>
										</div><button class="product-card__addtocart-icon" type="button"
											aria-label="@lang('Add to cart')">@include('svg.shop_circle')</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-3-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">@include('svg.valid')</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 009-50078-Z
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--sale">sale</div>
												</div><a href="product-full.html">Left Headlight Of Brandix
													Z54</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">3 on 14 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--new">
												$349.00</div>
											<div class="product-card__price product-card__price--old">
												$415.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-4-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta">
											<span class="product-card__meta-title">SKU:
											</span> A43-44328-B
										</div>
										<div class="product-card__name">
											<div>
												<div class="product-card__badges">
													<div class="tag-badge tag-badge--hot">hot</div>
												</div><a href="product-full.html">Glossy Gray 19" Aluminium
													Wheel AR-19</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 26 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$589.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-5-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 729-51203-B
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Twin Exhaust Pipe From Brandix
													Z54</a></div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">4 on 9 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$749.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-6-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-49386-C
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Motor Oil Level 5</a></div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
												</div>
											</div>
											<div class="product-card__rating-label">5 on 2 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$23.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-7-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 753-38573-B
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Brandix Engine Block Z4</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">0 on 0 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$452.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
							<div class="block-zone__carousel-item">
								<div class="product-card">
									<div class="product-card__actions-list">
										<button class="product-card__action product-card__action--quickview" type="button"
											aria-label="@lang('Quick view')">
											@include('svg.zoom')
										</button>
										<button class="product-card__action product-card__action--wishlist" type="button"
											aria-label="@lang('Add to wish list')">
											@include('svg.heart')
										</button>
										<button class="product-card__action product-card__action--compare" type="button"
											aria-label="@lang('Add to compare')">
											@include('svg.chart')
										</button>
									</div>
									<div class="product-card__image">
										<a href="product-full.html">
											<img src="/images/products/product-8-245x245.jpg" alt="@lang('Photo')">
										</a>
										<div
											class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
											<div class="status-badge__body">
												<div class="status-badge__icon">
													@include('svg.valid')
												</div>
												<div class="status-badge__text">Part Fit for 2011 Ford Focus
													S</div>
												<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
													title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S">
												</div>
											</div>
										</div>
									</div>
									<div class="product-card__info">
										<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z
										</div>
										<div class="product-card__name">
											<div><a href="product-full.html">Brandix Clutch Discs Z175</a>
											</div>
										</div>
										<div class="product-card__rating">
											<div class="rating product-card__rating-stars">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
											<div class="product-card__rating-label">3 on 7 reviews</div>
										</div>
									</div>
									<div class="product-card__footer">
										<div class="product-card__prices">
											<div class="product-card__price product-card__price--current">
												$345.00</div>
										</div><button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-space block-space--layout--divider-nl"></div>
<div class="block-banners block">
	<div class="container">
		<div class="block-banners__list">
			<a href="#" class="block-banners__item block-banners__item--style--one">
				<span class="block-banners__item-image">
					<img src="/images/banners/banner1.jpg" alt="@lang('Photo')">
				</span>
				<span class="block-banners__item-image block-banners__item-image--blur">
					<img src="/images/banners/banner1.jpg" alt="@lang('Photo')">
				</span>
				<span class="block-banners__item-title">Motor
					Oils
				</span>
				<span class="block-banners__item-details">Synthetic motor oil with free
					shipping<br>Friction
					free life
					guaranteed
				</span>
				<span class="block-banners__item-button btn btn-primary btn-sm">Shop
					Now
				</span>
			</a>
			<a href="#" class="block-banners__item block-banners__item--style--two">
				<span class="block-banners__item-image">
					<img src="/images/banners/banner2.jpg" alt="@lang('Photo')">
				</span>
				<span class="block-banners__item-image block-banners__item-image--blur"><img src="/images/banners/banner2.jpg"
						alt="@lang('Photo')">
				</span>
				<span class="block-banners__item-title">Save
					up
					to $40
				</span>
				<span class="block-banners__item-details">Luxurious interior part for real
					aesthetes<br>Leather, fabric, ivory
					and more.
				</span>
				<span class="block-banners__item-button btn btn-primary btn-sm">Shop
					Now
				</span>
			</a>
		</div>
	</div>
</div>
<div class="block-space block-space--layout--divider-nl"></div>
@include('partials.new_arrivals')
<div class="block-space block-space--layout--divider-nl"></div>
<div class="block block-posts-carousel block-posts-carousel--layout--grid" data-layout="grid"></div>
<div class="block-space block-space--layout--divider-nl"></div>
<div class="block-space block-space--layout--divider-nl d-xl-block d-none"></div>
<div class="block block-products-columns">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="block-products-columns__title">@lang('Produits les mieux notés')</div>
				<div class="block-products-columns__list">
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-1-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div>
										<div class="product-card__badges">
											<div class="tag-badge tag-badge--sale">sale</div>
											<div class="tag-badge tag-badge--new">new</div>
											<div class="tag-badge tag-badge--hot">hot</div>
										</div><a href="product-full.html">Brandix Spark Plug Kit ASR-400</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">4 on 3 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$19.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-2-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div><a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
										</div>
									</div>
									<div class="product-card__rating-label">5 on 22 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$224.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list"><button
									class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-3-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div>
										<div class="product-card__badges">
											<div class="tag-badge tag-badge--sale">sale</div>
										</div><a href="product-full.html">Left Headlight Of Brandix Z54</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">3 on 14 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--new">$349.00</div>
									<div class="product-card__price product-card__price--old">$415.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="block-products-columns__title">@lang('Special Offers')</div>
				<div class="block-products-columns__list">
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-4-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div>
										<div class="product-card__badges">
											<div class="tag-badge tag-badge--hot">hot</div>
										</div><a href="product-full.html">Glossy Gray 19" Aluminium Wheel
											AR-19</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">4 on 26 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$589.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-5-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div><a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">4 on 9 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$749.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-6-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div>
										<a href="product-full.html">Motor Oil Level 5
										</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
										</div>
									</div>
									<div class="product-card__rating-label">5 on 2 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$23.00
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="block-products-columns__title">@lang('Bestsellers')</div>
				<div class="block-products-columns__list">
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-7-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div>
										<a href="product-full.html">Brandix Engine Block Z4
										</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star"></div>
											<div class="rating__star"></div>
											<div class="rating__star"></div>
											<div class="rating__star"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">0 on 0 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$452.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-8-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div><a href="product-full.html">Brandix Clutch Discs Z175</a></div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">3 on 7 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$345.00
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block-products-columns__list-item">
						<div class="product-card">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button"
									aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="product-full.html">
									<img src="/images/products/product-9-245x245.jpg" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div>
										<a href="product-full.html">Brandix Manual Five Speed Gearbox
										</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star rating__star--active"></div>
											<div class="rating__star"></div>
										</div>
									</div>
									<div class="product-card__rating-label">4 on 6 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">$879.00
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-space block-space--layout--before-footer"></div>
@stop

@push('styles')
<link rel="stylesheet" href="/css/index.css">
@endpush
