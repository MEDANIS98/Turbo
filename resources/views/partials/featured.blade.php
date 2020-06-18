<div class="block block-products-carousel" data-layout="grid-5">
	<div class="container">
		<div class="section-header">
			<div class="section-header__body">
				<h2 class="section-header__title">
					@lang('Featured Products')
				</h2>
				<div class="section-header__spring"></div>
				<ul class="section-header__groups">
					<li class="section-header__groups-item">
						<button type="button" class="section-header__groups-button section-header__groups-button--active">
							@lang('All')
						</button>
					</li>
					<li class="section-header__groups-item">
						<button type="button" class="section-header__groups-button">
							Power Tools
						</button>
					</li>
					<li class="section-header__groups-item">
						<button type="button" class="section-header__groups-button">
							Hand Tools
						</button>
					</li>
					<li class="section-header__groups-item">
						<button type="button" class="section-header__groups-button">
							Plumbing
						</button>
					</li>
				</ul>
				<div class="section-header__arrows">
					<div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
						<button class="arrow__button" type="button">
							@include('svg.arrow_left')
						</button>
					</div>
					<div class="arrow section-header__arrow section-header__arrow--next arrow--next">
						<button class="arrow__button" type="button">
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
				@foreach ($featured_parts as $part)
					<div class="block-products-carousel__column">
						<div class="block-products-carousel__cell">
							<div class="product-card product-card--layout--grid">
								<div class="product-card__actions-list">
									<button class="product-card__action product-card__action--quickview" type="button" aria-label="@lang('Quick view')">
										@include('svg.zoom')
									</button>
									<button class="product-card__action product-card__action--wishlist" type="button" aria-label="@lang('Add to wish list')">
										@include('svg.heart')
									</button>
									<button class="product-card__action product-card__action--compare" type="button" aria-label="@lang('Add to compare')">
										@include('svg.chart')
									</button>
								</div>
								<div class="product-card__image">
									<a href="{{ route('part', ['part' => $part]) }}">
										<img src="{{ secure_asset($part->indexImage) }}" alt="@lang('Image')">
									</a>
									<div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
										<div class="status-badge__body">
											<div class="status-badge__icon">
												@include('svg.valid')
											</div>
											<div class="status-badge__text">{{ $part->title }}</div>
											{{-- Compatibility --}}
											{{-- <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part Fit for 2011 Ford Focus S">
											</div> --}}
										</div>
									</div>
								</div>
								<div class="product-card__info">
									<div class="product-card__meta">
										<span class="product-card__meta-title">@lang('SKU'):</span>
										{{ $part->sku ?? __('unavailable') }}
									</div>
									<div class="product-card__name">
										<div>
											<div class="product-card__badges">
												@if($part->old_price)
												<div class="tag-badge tag-badge--sale">@lang('sale')</div>
												@endif
												<div class="tag-badge tag-badge--hot">@lang('hot')</div>
												@if($part->wasRecentlyCreated)
												<div class="tag-badge tag-badge--new">@lang('new')</div>
												@endif
											</div>
											<a href="{{ route('part', ['part' => $part]) }}">{{ $part->title }}</a>
										</div>
									</div>
									<div class="product-card__rating">
										<div class="rating product-card__rating-stars">
											<div class="rating__body">
												@for($i = 0; $i < $part->rating; $i++)
												<div class="rating__star rating__star--active"></div>
												@endfor
												@for($s = $part->rating; $s < 5; $s++)
												<div class="rating__star"></div>
												@endfor
											</div>
										</div>
										<div class="product-card__rating-label">3 on 7 reviews</div>
									</div>
								</div>
								<div class="product-card__footer">
									<div class="product-card__prices">
										<div class="product-card__price product-card__price--new">
											{{ $part->price }} DZD
										</div>
										@if($part->old_price)
											<div class="product-card__price product-card__price--old">
												{{ $part->old_price }} DZD
											</div>
										@endif
									</div>
									<form action="{{ route('cart.add', ['part' => $part]) }}" method="post">
										@csrf
										<button class="product-card__addtocart-icon" type="submit" aria-label="@lang('Add to cart')">
											@include('svg.shop_circle')
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
