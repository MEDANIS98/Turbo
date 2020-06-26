@extends('layouts.app')

@section('title', $brand->name)

@section('content')
<div class="block-header block-header--has-breadcrumb block-header--has-title">
	<div class="container">
		<div class="block-header__body">
			<nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
				<ol class="breadcrumb__list">
					<li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
					<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
						<a href="/" class="breadcrumb__item-link">
							@lang('Home')
						</a>
					</li>
					<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page">
						<span class="breadcrumb__item-link">
							{{ $brand->name }}
						</span>
					</li>
					<li class="breadcrumb__title-safe-area" role="presentation"></li>
				</ol>
			</nav>
			<h1 class="block-header__title">{{ $brand->name }}</h1>
		</div>
	</div>
</div>
<div class="block block-split">
	<div class="container">
		<div class="block-split__row row no-gutters">
			<div class="block-split__item block-split__item-content col-auto">
				<div class="block-space block-space--layout--divider-nl"></div>
				<div class="block block-products-carousel" data-layout="grid-5">
					<div class="container">
						<div class="section-header">
							<div class="section-header__body">
								<h2 class="section-header__title">@lang('Parts')</h2>
								<div class="section-header__spring"></div>
								<div class="section-header__arrows">
									<div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
										<button class="arrow__button" type="button">
											@include('svg.arrow_prev')
										</button>
									</div>
									<div class="arrow section-header__arrow section-header__arrow--next arrow--next">
										<button class="arrow__button" type="button">
											@include('svg.arrow_next')
										</button>
									</div>
								</div>
								<div class="section-header__divider"></div>
							</div>
						</div>
						<div class="block-products-carousel__carousel">
							<div class="block-products-carousel__carousel-loader"></div>
							<div class="owl-carousel">
								@foreach ($brand->parts as $part)
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
														<img src="{{ secure_asset($part->indexImage) }}" alt="@lang('Photo')">
													</a>
													<div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
														<div class="status-badge__body">
															<div class="status-badge__icon">
																@include('svg.valid')
															</div>
															<div class="status-badge__text">
																Part Fit for 2011 Ford Focus S
															</div>
															<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part Fit for 2011 Ford Focus S">
															</div>
														</div>
													</div>
												</div>
												<div class="product-card__info">
													<div class="product-card__meta">
														<span class="product-card__meta-title">
															@lang('Reference'):
														</span> {{ $part->sku }}
													</div>
													<div class="product-card__name">
														<div>
															<div class="product-card__badges">
																@if($part->old_price)
																	<div class="tag-badge tag-badge--sale">@lang('sale')</div>
																@endif
																@if($part->isHot)
																<div class="tag-badge tag-badge--hot">@lang('hot')</div>
																@endif
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
														<div class="product-card__rating-label">4 on 3 reviews</div>
													</div>
												</div>
												<div class="product-card__footer">
													<div class="product-card__prices">
														<div class="product-card__price product-card__price--current">
															{{ $part->price }} DZD
														</div>
													</div>
													<button class="product-card__addtocart-icon" type="button" aria-label="@lang('Add to cart')">
														@include('svg.shop_circle')
													</button>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="block-space block-space--layout--divider-nl"></div>
				@include('partials.category_featured')
				<div class="block-space block-space--layout--divider-nl"></div>
				@include('partials.brands')
			</div>
		</div>
		<div class="block-space block-space--layout--before-footer"></div>
	</div>
</div>
@stop
