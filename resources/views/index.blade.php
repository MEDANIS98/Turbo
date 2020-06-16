@extends('layouts.app')

@section('title', __('Home'))

@section('content')
<div class="block-finder block">
    <div class="decor block-finder__decor decor--type--bottom">
        <div class="decor__body">
            <div class="decor__start"></div>
            <div class="decor__end"></div>
            <div class="decor__center"></div>
        </div>
    </div>
    <div class="block-finder__image" style="background-image: url('/images/finder-1903x500.jpg');"></div>
    <div class="block-finder__body container container--max--xl">
        <div class="block-finder__title">
            @lang('Find Parts For Your Vehicle')
        </div>
        <div class="block-finder__subtitle">
            @lang('Over hundreds of brands and tens of thousands of parts')
        </div>
        <form class="block-finder__form" action="{{ route('search') }}" method="POST" role="form">
            @csrf
            <div class="block-finder__form-control block-finder__form-control--select">
                <select name="year" aria-label="@lang('Vehicle Year')" id="select-year" required>
                    <option value="none">@lang('Select Year')</option>
                    @foreach ($years as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                    @endforeach
                </select>
                @error('year')
                <span class="invalid-feedback" role="alert" style="display: block;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select name="brand" aria-label="@lang('Vehicle Brand')" disabled="disabled" id="select-brand" required>
                    <option value="none" selected>@lang('Sélectionnez la marque')</option>
                </select>
                @error('brand')
                <span class="invalid-feedback" role="alert" style="display: block;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select name="model" aria-label="@lang('Vehicle Model')" disabled="disabled" id="select-model" required>
                    <option value="none">@lang('Select Model')</option>
                </select>
                @error('model')
                <span class="invalid-feedback" role="alert" style="display: block;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select name="fuel" aria-label="@lang('Vehicle Engine')" disabled="disabled" id="select-fuel" required>
                    <option value="none" selected>@lang('Select Engine')</option>
                </select>
                @error('fuel')
                <span class="invalid-feedback" role="alert" style="display: block;">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button class="block-finder__form-control block-finder__form-control--button" type="submit"
                id="submit-search" disabled>
                @lang('Search')
            </button>
        </form>
    </div>
</div>
<div class="block-features block block-features--layout--top-strip">
    <div class="container">
        <ul class="block-features__list">
            <li class="block-features__item">
                <div class="block-features__item-icon">
                    @include('svg.free_shipping')
                </div>
                <div class="block-features__item-info">
                    <div class="block-features__item-title">Free Shipping</div>
                    <div class="block-features__item-subtitle">For orders from $50</div>
                </div>
            </li>
            <li class="block-features__item">
                <div class="block-features__item-icon">
                    @include('svg.phone_24x7')
                </div>
                <div class="block-features__item-info">
                    <div class="block-features__item-title">Support 24/7</div>
                    <div class="block-features__item-subtitle">Call us anytime</div>
                </div>
            </li>
            <li class="block-features__item">
                <div class="block-features__item-icon">
                    @include('svg.secure_payments')
                </div>
                <div class="block-features__item-info">
                    <div class="block-features__item-title">100% Safety</div>
                    <div class="block-features__item-subtitle">Only secure payments</div>
                </div>
            </li>
            <li class="block-features__item">
                <div class="block-features__item-icon">
                    @include('svg.hot_offers')
                </div>
                <div class="block-features__item-info">
                    <div class="block-features__item-title">Hot Offers</div>
                    <div class="block-features__item-subtitle">Discounts up to 90%</div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="block-space block-space--layout--divider-nl">
</div>
<div class="block block-products-carousel" data-layout="grid-5">
    <div class="container">
        <div class="section-header">
            <div class="section-header__body">
                <h2 class="section-header__title">Featured Products</h2>
                <div class="section-header__spring">
                </div>
                <ul class="section-header__groups">
                    <li class="section-header__groups-item">
                        <button type="button"
                            class="section-header__groups-button section-header__groups-button--active">
                            All
                        </button>
                    </li>
                    <li class="section-header__groups-item">
                        <button type="button" class="section-header__groups-button">Power Tools</button>
                    </li>
                    <li class="section-header__groups-item">
                        <button type="button" class="section-header__groups-button">Hand Tools
                        </button>
                    </li>
                    <li class="section-header__groups-item"><button type="button"
                            class="section-header__groups-button">Plumbing
                        </button>
                    </li>
                </ul>
                <div class="section-header__arrows">
                    <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev"><button
                            class="arrow__button" type="button">
                            @include('svg.arrow_left')
                        </button>
                    </div>
                    <div class="arrow section-header__arrow section-header__arrow--next arrow--next"><button
                            class="arrow__button" type="button">
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
                                    aria-label="Add to wish list">
                                    @include('svg.heart')
                                </button>
                                <button class="product-card__action product-card__action--compare" type="button"
                                    aria-label="Add to compare">
                                    @include('svg.chart')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-3-245x245.jpg" alt="">
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
                                <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
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
                                <a href="/shop-grid-4-columns-sidebar" class="btn btn-primary btn-sm">Shop All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-zone__widget">
                <div class="block-zone__widget-header">
                    <div class="block-zone__tabs">
                        <button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">Featured
                        </button>
                        <button class="block-zone__tabs-button" type="button">Bestsellers
                        </button>
                        <button class="block-zone__tabs-button" type="button">Popular
                        </button>
                    </div>
                    <div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
                        <button class="arrow__button" type="button">
                            @include('svg.arrow_left')
                        </button>
                    </div>
                    <div class="arrow block-zone__arrow block-zone__arrow--next arrow--next"><button
                            class="arrow__button" type="button">
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
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-1-245x245.jpg" alt="">
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image"><a href="product-full.html">
                                            <img src="/images/products/product-2-245x245.jpg" alt="">
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-3-245x245.jpg" alt="">
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image"><a href="product-full.html">
                                            <img src="/images/products/product-4-245x245.jpg" alt="">
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image"><a href="product-full.html">
                                            <img src="/images/products/product-5-245x245.jpg" alt="">
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 729-51203-B
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-6-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 573-49386-C
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
                                        <button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button> <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-7-245x245.jpg" alt="">
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 753-38573-B
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-8-245x245.jpg" alt="">
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
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
                                <a href="/shop-grid-4-columns-sidebar" class="btn btn-primary btn-sm">Shop All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-zone__widget">
                <div class="block-zone__widget-header">
                    <div class="block-zone__tabs">
                        <button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">Featured
                        </button>
                        <button class="block-zone__tabs-button" type="button">Bestsellers
                        </button>
                        <button class="block-zone__tabs-button" type="button">Popular
                        </button>
                    </div>
                    <div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev">
                        <button class="arrow__button" type="button">
                            @include('svg.arrow_left')
                        </button>
                    </div>
                    <div class="arrow block-zone__arrow block-zone__arrow--next arrow--next"><button
                            class="arrow__button" type="button">
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
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-1-245x245.jpg" alt="">
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-2-245x245.jpg" alt="">
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 573-23743-C
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
                                        <button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-3-245x245.jpg" alt="">
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 009-50078-Z
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
                                        <button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-4-245x245.jpg" alt="">
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
                                        <button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-5-245x245.jpg" alt="">
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
                                        <button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html">
                                            <img src="/images/products/product-6-245x245.jpg" alt=""></a>
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
                                        <button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-7-245x245.jpg" alt=""></a>
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
                                        <button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview"
                                            type="button" aria-label="Quick view">
                                            @include('svg.zoom')
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist"
                                            type="button" aria-label="Add to wish list">
                                            @include('svg.heart')
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">
                                            @include('svg.chart')
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product-full.html"><img src="/images/products/product-8-245x245.jpg"
                                                alt=""></a>
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
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
                                    class="btn btn-primary btn-sm">Shop All</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-zone__widget">
                <div class="block-zone__widget-header">
                    <div class="block-zone__tabs">
                        <button class="block-zone__tabs-button block-zone__tabs-button--active" type="button">Featured
                        </button>
                        <button class="block-zone__tabs-button" type="button">Bestsellers
                        </button>
                        <button class="block-zone__tabs-button" type="button">Popular
                        </button>
                    </div>
                    <div class="arrow block-zone__arrow block-zone__arrow--prev arrow--prev"><button
                            class="arrow__button" type="button">
                            @include('svg.arrow_left')
                        </button>
                    </div>
                    <div class="arrow block-zone__arrow block-zone__arrow--next arrow--next"><button
                            class="arrow__button" type="button">
                            @include('svg.arrow_right')</button></div>
                </div>
                <div class="block-zone__widget-body">
                    <div class="block-zone__carousel">
                        <div class="block-zone__carousel-loader"></div>
                        <div class="owl-carousel">
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-1-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 140-10440-B
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
                                            aria-label="Add to cart">@include('svg.shop_circle')</button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-2-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 573-23743-C
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
                                            aria-label="Add to cart">@include('svg.shop_circle')</button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-3-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 009-50078-Z
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">
                                            @include('svg.shop_circle')
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-4-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> A43-44328-B
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">@include('svg.shop_circle')</button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-5-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 729-51203-B
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">@include('svg.shop_circle')</button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-6-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 573-49386-C
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">@include('svg.shop_circle')</button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-7-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 753-38573-B
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">@include('svg.shop_circle')</button>
                                    </div>
                                </div>
                            </div>
                            <div class="block-zone__carousel-item">
                                <div class="product-card">
                                    <div class="product-card__actions-list"><button
                                            class="product-card__action product-card__action--quickview" type="button"
                                            aria-label="Quick view">@include('svg.zoom')</button> <button
                                            class="product-card__action product-card__action--wishlist" type="button"
                                            aria-label="Add to wish list">@include('svg.heart')</button> <button
                                            class="product-card__action product-card__action--compare" type="button"
                                            aria-label="Add to compare">@include('svg.chart')</button></div>
                                    <div class="product-card__image"><a href="product-full.html"><img
                                                src="/images/products/product-8-245x245.jpg" alt=""></a>
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
                                        <div class="product-card__meta"><span
                                                class="product-card__meta-title">SKU:</span> 472-67382-Z
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
                                        </div><button class="product-card__addtocart-icon" type="button"
                                            aria-label="Add to cart">@include('svg.shop_circle')</button>
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
        <div class="block-banners__list"><a href="#" class="block-banners__item block-banners__item--style--one"><span
                    class="block-banners__item-image"><img src="/images/banners/banner1.jpg" alt=""></span><span
                    class="block-banners__item-image block-banners__item-image--blur"><img
                        src="/images/banners/banner1.jpg" alt=""></span><span class="block-banners__item-title">Motor
                    Oils</span> <span class="block-banners__item-details">Synthetic motor oil with free
                    shipping<br>Friction
                    free life
                    guaranteed </span><span class="block-banners__item-button btn btn-primary btn-sm">Shop
                    Now </span></a><a href="#" class="block-banners__item block-banners__item--style--two"><span
                    class="block-banners__item-image"><img src="/images/banners/banner2.jpg" alt=""></span><span
                    class="block-banners__item-image block-banners__item-image--blur"><img
                        src="/images/banners/banner2.jpg" alt=""></span><span class="block-banners__item-title">Save
                    up
                    to $40</span> <span class="block-banners__item-details">Luxurious interior part for real
                    aesthetes<br>Leather, fabric, ivory
                    and more. </span><span class="block-banners__item-button btn btn-primary btn-sm">Shop
                    Now</span></a>
        </div>
    </div>
</div>
<div class="block-space block-space--layout--divider-nl"></div>
<div class="block block-products-carousel" data-layout="horizontal">
    <div class="container">
        <div class="section-header">
            <div class="section-header__body">
                <h2 class="section-header__title">New Arrivals</h2>
                <div class="section-header__spring"></div>
                <ul class="section-header__links">
                    <li class="section-header__links-item">
                        <a href="#" class="section-header__links-link">Wheel
                            Covers
                        </a>
                    </li>
                    <li class="section-header__links-item">
                        <a href="#" class="section-header__links-link">Timing
                            Belts</a>
                    </li>
                    <li class="section-header__links-item">
                        <a href="#" class="section-header__links-link">Oil
                            Pans
                        </a>
                    </li>
                    <li class="section-header__links-item">
                        <a href="#" class="section-header__links-link">ShowAll
                        </a>
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
                <div class="block-products-carousel__column">
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-1-245x245.jpg" alt="">
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
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-2-245x245.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <div>
                                        <a href="product-full.html">Brandix Brake Kit BDX-750Z370-S
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
                                    <div class="product-card__price product-card__price--current">$224.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-products-carousel__column">
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-3-245x245.jpg" alt="">
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
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-4-245x245.jpg" alt="">
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
                </div>
                <div class="block-products-carousel__column">
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-5-245x245.jpg" alt="">
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
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-6-245x245.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
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
                                    <div class="product-card__price product-card__price--current">$23.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-products-carousel__column">
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image"><a href="product-full.html"><img
                                        src="/images/products/product-7-245x245.jpg" alt=""></a></div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <div><a href="product-full.html">Brandix Engine Block Z4</a></div>
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
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-8-245x245.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <div><a href="product-full.html">Brandix Clutch Discs Z175
                                        </a>
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
                                    <div class="product-card__price product-card__price--current">$345.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-products-carousel__column">
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-9-245x245.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <div><a href="product-full.html">Brandix Manual Five Speed Gearbox</a>
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
                    <div class="block-products-carousel__cell">
                        <div class="product-card product-card--layout--horizontal">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-10-245x245.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <div><a href="product-full.html">Set of Car Floor Mats Brandix Z4</a>
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
                                    <div class="product-card__rating-label">4 on 16 reviews</div>
                                </div>
                            </div>
                            <div class="product-card__footer">
                                <div class="product-card__prices">
                                    <div class="product-card__price product-card__price--current">$78.00
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
<div class="block block-posts-carousel block-posts-carousel--layout--grid" data-layout="grid">
</div>
<div class="block-space block-space--layout--divider-nl"></div>
<div class="block block-brands block-brands--layout--columns-8-full">

</div>
<div class="block-space block-space--layout--divider-nl d-xl-block d-none"></div>
<div class="block block-products-columns">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="block-products-columns__title">Top Rated Products</div>
                <div class="block-products-columns__list">
                    <div class="block-products-columns__list-item">
                        <div class="product-card">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-1-245x245.jpg" alt="">
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
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-2-245x245.jpg" alt="">
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
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-3-245x245.jpg" alt="">
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
                <div class="block-products-columns__title">Special Offers</div>
                <div class="block-products-columns__list">
                    <div class="block-products-columns__list-item">
                        <div class="product-card">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-4-245x245.jpg" alt="">
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
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-5-245x245.jpg" alt="">
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
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-6-245x245.jpg" alt="">
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
                <div class="block-products-columns__title">Bestsellers</div>
                <div class="block-products-columns__list">
                    <div class="block-products-columns__list-item">
                        <div class="product-card">
                            <div class="product-card__actions-list">
                                <button class="product-card__action product-card__action--quickview" type="button"
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-7-245x245.jpg" alt="">
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
                                    aria-label="Quick view">
                                    @include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-8-245x245.jpg" alt="">
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
                                    aria-label="Quick view">@include('svg.zoom')
                                </button>
                            </div>
                            <div class="product-card__image">
                                <a href="product-full.html">
                                    <img src="/images/products/product-9-245x245.jpg" alt="">
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
