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
								@foreach ($brand->parts as $part)
									<div class="block-products-carousel__column">
										<div class="block-products-carousel__cell">
											<div class="product-card product-card--layout--grid">
												@include('partials.part_card')
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
