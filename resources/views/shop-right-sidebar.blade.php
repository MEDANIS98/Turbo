@extends('layouts.app')
@section('title','Shop-Right-Sidebar')
@section('content')

<div class="site__body">
	<div class="block-header block-header--has-breadcrumb block-header--has-title">
		<div class="container">
			<div class="block-header__body">
				<nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
					<ol class="breadcrumb__list">
						<li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
						<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a href="index.html"
								class="breadcrumb__item-link">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--parent"><a href="#"
								class="breadcrumb__item-link">Breadcrumb</a></li>
						<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page"><span
								class="breadcrumb__item-link">Current Page</span></li>
						<li class="breadcrumb__title-safe-area" role="presentation"></li>
					</ol>
				</nav>
				<h1 class="block-header__title">Transmission</h1>
			</div>
		</div>
	</div>
	<div class="block-split block-split--has-sidebar">
		<div class="container">
			<div class="block-split__row row no-gutters">
				<div class="block-split__item block-split__item-content col-auto">
					<div class="block">
						<div class="products-view">
							<div class="products-view__options view-options view-options--offcanvas--mobile">
								<div class="view-options__body"><button type="button"
										class="view-options__filters-button filters-button"><span class="filters-button__icon"><svg
												width="16" height="16">
												<path d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2
	C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2
	C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3
	C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z" /></svg> </span><span
											class="filters-button__title">Filters</span> <span
											class="filters-button__counter">3</span></button>
									<div class="view-options__layout layout-switcher">
										<div class="layout-switcher__list"><button type="button"
												class="layout-switcher__button layout-switcher__button--active" data-layout="grid"
												data-with-features="false"><svg width="16" height="16">
													<path d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
	H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
	C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
	C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z" /></svg></button> <button type="button"
												class="layout-switcher__button" data-layout="grid" data-with-features="true"><svg width="16"
													height="16">
													<path d="M16,0.8v14.4c0,0.4-0.4,0.8-0.8,0.8H9.8C9.4,16,9,15.6,9,15.2V0.8C9,0.4,9.4,0,9.8,0l5.4,0C15.6,0,16,0.4,16,0.8z M7,0.8
	v14.4C7,15.6,6.6,16,6.2,16H0.8C0.4,16,0,15.6,0,15.2L0,0.8C0,0.4,0.4,0,0.8,0l5.4,0C6.6,0,7,0.4,7,0.8z" />
<<<<<<< HEAD
														</svg></button> <button type="button" class="layout-switcher__button" data-layout="list"
														data-with-features="false"><svg width="16" height="16">
															<path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h14.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
=======
												</svg></button> <button type="button" class="layout-switcher__button" data-layout="list"
												data-with-features="false"><svg width="16" height="16">
													<path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h14.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
	H0.8C0.4,7,0,6.6,0,6.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z" /></svg></button>
											<button type="button" class="layout-switcher__button" data-layout="table"
												data-with-features="false"><svg width="16" height="16">
													<path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2v-2.4C0,12.4,0.4,12,0.8,12h14.4c0.4,0,0.8,0.4,0.8,0.8v2.4C16,15.6,15.6,16,15.2,16z
	 M15.2,10H0.8C0.4,10,0,9.6,0,9.2V6.8C0,6.4,0.4,6,0.8,6h14.4C15.6,6,16,6.4,16,6.8v2.4C16,9.6,15.6,10,15.2,10z M15.2,4H0.8
	C0.4,4,0,3.6,0,3.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v2.4C16,3.6,15.6,4,15.2,4z" /></svg></button></div>
<<<<<<< HEAD
											</div>
											<div class="view-options__legend">Showing 6 of 98 products</div>
											<div class="view-options__spring"></div>
											<div class="view-options__select"><label for="view-option-sort">Sort:</label> <select
													id="view-option-sort" class="form-control form-control-sm" name="">
													<option value="">Price</option>
												</select></div>
											<div class="view-options__select"><label for="view-option-limit">Show:</label> <select
													id="view-option-limit" class="form-control form-control-sm" name="">
													<option value="">16</option>
												</select></div>
										</div>
										<div class="view-options__body view-options__body--filters">
											<div class="view-options__label">Active Filters</div>
											<div class="applied-filters">
												<ul class="applied-filters__list">
													<li class="applied-filters__item"><a href="#"
															class="applied-filters__button applied-filters__button--filter">Sales: Top Sellers <svg
																width="9" height="9">
																<path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z" />
															</svg></a></li>
													<li class="applied-filters__item"><a href="#"
															class="applied-filters__button applied-filters__button--filter">Color: True Red <svg
																width="9" height="9">
																<path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z" />
															</svg></a></li>
													<li class="applied-filters__item"><button type="button"
															class="applied-filters__button applied-filters__button--clear">Clear All</button></li>
												</ul>
											</div>
										</div>
=======
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
									</div>
									<div class="view-options__legend">Showing 6 of 98 products</div>
									<div class="view-options__spring"></div>
									<div class="view-options__select"><label for="view-option-sort">Sort:</label> <select
											id="view-option-sort" class="form-control form-control-sm" name="">
											<option value="">Price</option>
										</select></div>
									<div class="view-options__select"><label for="view-option-limit">Show:</label> <select
											id="view-option-limit" class="form-control form-control-sm" name="">
											<option value="">16</option>
										</select></div>
								</div>
								<div class="view-options__body view-options__body--filters">
									<div class="view-options__label">Active Filters</div>
									<div class="applied-filters">
										<ul class="applied-filters__list">
											<li class="applied-filters__item"><a href="#"
													class="applied-filters__button applied-filters__button--filter">Sales: Top Sellers <svg
														width="9" height="9">
														<path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z" />
													</svg></a></li>
											<li class="applied-filters__item"><a href="#"
													class="applied-filters__button applied-filters__button--filter">Color: True Red <svg width="9"
														height="9">
														<path d="M9,8.5L8.5,9l-4-4l-4,4L0,8.5l4-4l-4-4L0.5,0l4,4l4-4L9,0.5l-4,4L9,8.5z" />
													</svg></a></li>
											<li class="applied-filters__item"><button type="button"
													class="applied-filters__button applied-filters__button--clear">Clear All</button></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="products-view__list products-list products-list--grid--4" data-layout="grid"
								data-with-features="false">
								<div class="products-list__head">
									<div class="products-list__column products-list__column--image">Image</div>
									<div class="products-list__column products-list__column--meta">SKU</div>
									<div class="products-list__column products-list__column--product">Product</div>
									<div class="products-list__column products-list__column--rating">Rating</div>
									<div class="products-list__column products-list__column--price">Price</div>
								</div>
								<div class="products-list__content">
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-1-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
													</div>
													<div class="product-card__info">
														<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
															140-10440-B</div>
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
														<div class="product-card__features">
															<ul>
																<li>Speed: 750 RPM</li>
																<li>Power Source: Cordless-Electric</li>
																<li>Battery Cell Type: Lithium</li>
																<li>Voltage: 20 Volts</li>
																<li>Battery Capacity: 2 Ah</li>
															</ul>
														</div>
													</div>
													<div class="product-card__footer">
														<div class="product-card__prices">
															<div class="product-card__price product-card__price--current">$19.00</div>
														</div><button class="product-card__addtocart-icon" type="button"
															aria-label="Add to cart"><svg width="20" height="20">
																<circle cx="7" cy="17" r="2" />
																<circle cx="15" cy="17" r="2" />
																<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
														<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
															class="product-card__wishlist" type="button"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
											</div>
											<div class="products-list__item">
												<div class="product-card">
													<div class="product-card__actions-list"><button
															class="product-card__action product-card__action--quickview" type="button"
															aria-label="Quick view"><svg width="16" height="16">
																<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
															class="product-card__action product-card__action--wishlist" type="button"
															aria-label="Add to wish list"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-2-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-1-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													140-10440-B</div>
												<div class="product-card__name">
													<div>
														<div class="product-card__badges">
															<div class="tag-badge tag-badge--sale">sale</div>
															<div class="tag-badge tag-badge--new">new</div>
															<div class="tag-badge tag-badge--hot">hot</div>
														</div><a href="product-full.html">Brandix Spark Plug Kit ASR-400</a>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$19.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-3-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-2-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													573-23743-C</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a></div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$224.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-4-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
													</div>
													<div class="product-card__info">
														<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
															A43-44328-B</div>
														<div class="product-card__name">
															<div>
																<div class="product-card__badges">
																	<div class="tag-badge tag-badge--hot">hot</div>
																</div><a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
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
														<div class="product-card__features">
															<ul>
																<li>Speed: 750 RPM</li>
																<li>Power Source: Cordless-Electric</li>
																<li>Battery Cell Type: Lithium</li>
																<li>Voltage: 20 Volts</li>
																<li>Battery Capacity: 2 Ah</li>
															</ul>
														</div>
													</div>
													<div class="product-card__footer">
														<div class="product-card__prices">
															<div class="product-card__price product-card__price--current">$589.00</div>
														</div><button class="product-card__addtocart-icon" type="button"
															aria-label="Add to cart"><svg width="20" height="20">
																<circle cx="7" cy="17" r="2" />
																<circle cx="15" cy="17" r="2" />
																<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
														<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
															class="product-card__wishlist" type="button"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
											</div>
											<div class="products-list__item">
												<div class="product-card">
													<div class="product-card__actions-list"><button
															class="product-card__action product-card__action--quickview" type="button"
															aria-label="Quick view"><svg width="16" height="16">
																<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
															class="product-card__action product-card__action--wishlist" type="button"
															aria-label="Add to wish list"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-5-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-3-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													009-50078-Z</div>
												<div class="product-card__name">
													<div>
														<div class="product-card__badges">
															<div class="tag-badge tag-badge--sale">sale</div>
														</div><a href="product-full.html">Left Headlight Of Brandix Z54</a>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--new">$349.00</div>
													<div class="product-card__price product-card__price--old">$415.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-6-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
													</div>
													<div class="product-card__info">
														<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
															573-49386-C</div>
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
														<div class="product-card__features">
															<ul>
																<li>Speed: 750 RPM</li>
																<li>Power Source: Cordless-Electric</li>
																<li>Battery Cell Type: Lithium</li>
																<li>Voltage: 20 Volts</li>
																<li>Battery Capacity: 2 Ah</li>
															</ul>
														</div>
													</div>
													<div class="product-card__footer">
														<div class="product-card__prices">
															<div class="product-card__price product-card__price--current">$23.00</div>
														</div><button class="product-card__addtocart-icon" type="button"
															aria-label="Add to cart"><svg width="20" height="20">
																<circle cx="7" cy="17" r="2" />
																<circle cx="15" cy="17" r="2" />
																<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
														<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
															class="product-card__wishlist" type="button"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
											</div>
											<div class="products-list__item">
												<div class="product-card">
													<div class="product-card__actions-list"><button
															class="product-card__action product-card__action--quickview" type="button"
															aria-label="Quick view"><svg width="16" height="16">
																<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
															class="product-card__action product-card__action--wishlist" type="button"
															aria-label="Add to wish list"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-7-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-4-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													A43-44328-B</div>
												<div class="product-card__name">
													<div>
														<div class="product-card__badges">
															<div class="tag-badge tag-badge--hot">hot</div>
														</div><a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$589.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-8-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-5-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													729-51203-B</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a></div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$749.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-9-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-6-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													573-49386-C</div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$23.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-10-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-7-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													753-38573-B</div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$452.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-11-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-8-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													472-67382-Z</div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$345.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-12-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-9-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													855-78336-G</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Brandix Manual Five Speed Gearbox</a></div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$879.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-13-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-10-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													473-75662-R</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Set of Car Floor Mats Brandix Z4</a></div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$78.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-14-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-11-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													521-57812-H</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Taillights Brandix Z54</a></div>
												</div>
												<div class="product-card__rating">
													<div class="rating product-card__rating-stars">
														<div class="rating__body">
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star"></div>
															<div class="rating__star"></div>
															<div class="rating__star"></div>
														</div>
													</div>
													<div class="product-card__rating-label">2 on 8 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$60.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-15-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-12-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													994-34346-B</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Wiper Blades Brandix WL2</a></div>
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
													<div class="product-card__rating-label">5 on 41 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$12.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-16-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
													</div>
													<div class="product-card__info">
														<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
															563-73744-Q</div>
														<div class="product-card__name">
															<div><a href="product-full.html">Brandix Driver's seat</a></div>
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
															<div class="product-card__rating-label">3 on 4 reviews</div>
														</div>
														<div class="product-card__features">
															<ul>
																<li>Speed: 750 RPM</li>
																<li>Power Source: Cordless-Electric</li>
																<li>Battery Cell Type: Lithium</li>
																<li>Voltage: 20 Volts</li>
																<li>Battery Capacity: 2 Ah</li>
															</ul>
														</div>
													</div>
													<div class="product-card__footer">
														<div class="product-card__prices">
															<div class="product-card__price product-card__price--current">$78.00</div>
														</div><button class="product-card__addtocart-icon" type="button"
															aria-label="Add to cart"><svg width="20" height="20">
																<circle cx="7" cy="17" r="2" />
																<circle cx="15" cy="17" r="2" />
																<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
														<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
															class="product-card__wishlist" type="button"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
											</div>
											<div class="products-list__item">
												<div class="product-card">
													<div class="product-card__actions-list"><button
															class="product-card__action product-card__action--quickview" type="button"
															aria-label="Quick view"><svg width="16" height="16">
																<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
															class="product-card__action product-card__action--wishlist" type="button"
															aria-label="Add to wish list"><svg width="16" height="16">
																<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-17-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-13-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													985-00884-S</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Fantastic 12-Stroke Engine With A Power of 1991 hp</a>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
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
													<div class="product-card__rating-label">3 on 17 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$2579.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-18-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-14-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													855-56888-U</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Set of Four 19 Inch Spiked Tires</a></div>
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
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$327.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-19-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-15-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													345-99553-E</div>
												<div class="product-card__name">
													<div><a href="product-full.html">40 Megawatt Low Beam Lamp</a></div>
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
													<div class="product-card__rating-label">4 on 31 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$4.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
<<<<<<< HEAD
															class="product-card__action product-card__action--compare" type="button"
															aria-label="Add to compare"><svg width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg></button></div>
													<div class="product-card__image"><a href="product-full.html"><img
																src="images/products/product-20-245x245.jpg" alt=""></a>
														<div
															class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
															<div class="status-badge__body">
																<div class="status-badge__icon"><svg width="13" height="13">
																		<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
																<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
																<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
																	title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
															</div>
														</div>
=======
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-16-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													563-73744-Q</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Brandix Driver's seat</a></div>
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
													<div class="product-card__rating-label">3 on 4 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$78.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
<<<<<<< HEAD
																wishlist</span></button> <button class="product-card__compare" type="button"><svg
																width="16" height="16">
																<path
																	d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
																<path
																	d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
																<path
																	d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
															</svg> <span>Add to compare</span></button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="products-view__pagination">
										<nav aria-label="Page navigation example">
											<ul class="pagination">
												<li class="page-item disabled"><a class="page-link page-link--with-arrow" href="#"
														aria-label="Previous"><span class="page-link__arrow page-link__arrow--left"
															aria-hidden="true"><svg width="7" height="11">
																<path
																	d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
															</svg></span></a></li>
												<li class="page-item"><a class="page-link" href="#">1</a></li>
												<li class="page-item active" aria-current="page"><span class="page-link">2 <span
															class="sr-only">(current)</span></span></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#">4</a></li>
												<li class="page-item page-item--dots">
													<div class="pagination__dots"></div>
												</li>
												<li class="page-item"><a class="page-link" href="#">9</a></li>
												<li class="page-item"><a class="page-link page-link--with-arrow" href="#"
														aria-label="Next"><span class="page-link__arrow page-link__arrow--right"
															aria-hidden="true"><svg width="7" height="11">
																<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></span></a></li>
											</ul>
										</nav>
										<div class="products-view__pagination-legend">Showing 6 of 98 products</div>
									</div>
								</div>
							</div>
						</div>
						<div class="block-split__item block-split__item-sidebar col-auto">
							<div class="sidebar sidebar--offcanvas--mobile">
								<div class="sidebar__backdrop"></div>
								<div class="sidebar__body">
									<div class="sidebar__header">
										<div class="sidebar__title">Filters</div><button class="sidebar__close" type="button"><svg
												width="12" height="12">
												<path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button>
									</div>
									<div class="sidebar__content">
										<div class="widget widget-filters widget-filters--offcanvas--mobile" data-collapse
											data-collapse-opened-class="filter--opened">
											<div class="widget__header widget-filters__header">
												<h4>Filters</h4>
											</div>
											<div class="widget-filters__list">
												<div class="widget-filters__item">
													<div class="filter filter--opened" data-collapse-item><button type="button"
															class="filter__title" data-collapse-trigger>Categories <span class="filter__arrow"><svg
																	width="12px" height="7px">
																	<path
																		d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
																</svg></span></button>
														<div class="filter__body" data-collapse-content>
															<div class="filter__container">
																<div class="filter-categories">
																	<ul class="filter-categories__list">
																		<li class="filter-categories__item filter-categories__item--parent"><span
																				class="filter-categories__arrow"><svg width="6" height="9">
																					<path d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
	C6.1,7.8,6.1,8.4,5.7,8.7z" /></svg> </span><a href="#">Construction & Repair</a>
																			<div class="filter-categories__counter">254</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--parent"><span
																				class="filter-categories__arrow"><svg width="6" height="9">
																					<path d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
	C6.1,7.8,6.1,8.4,5.7,8.7z" /></svg> </span><a href="#">Instruments</a>
																			<div class="filter-categories__counter">75</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--current"><a
																				href="#">Power Tools</a>
																			<div class="filter-categories__counter">21</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Drills & Mixers</a>
																			<div class="filter-categories__counter">15</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Cordless Screwdrivers</a>
																			<div class="filter-categories__counter">2</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Screwdrivers</a>
																			<div class="filter-categories__counter">30</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Wrenches</a>
																			<div class="filter-categories__counter">7</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Grinding Machines</a>
																			<div class="filter-categories__counter">5</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Milling Cutters</a>
																			<div class="filter-categories__counter">2</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Electric Spray Guns</a>
																			<div class="filter-categories__counter">9</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Jigsaws</a>
																			<div class="filter-categories__counter">4</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Jackhammers</a>
																			<div class="filter-categories__counter">0</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a
																				href="#">Planers</a>
																			<div class="filter-categories__counter">12</div>
																		</li>
																		<li class="filter-categories__item filter-categories__item--child"><a href="#">Glue
																				Guns</a>
																			<div class="filter-categories__counter">7</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="widget-filters__item">
													<div class="filter filter--opened" data-collapse-item><button type="button"
															class="filter__title" data-collapse-trigger>Vehicle <span class="filter__arrow"><svg
																	width="12px" height="7px">
																	<path
																		d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
																</svg></span></button>
														<div class="filter__body" data-collapse-content>
															<div class="filter__container">
																<div class="filter-vehicle">
																	<ul class="filter-vehicle__list">
																		<li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span
																					class="filter-list__input input-radio"><span class="input-radio__body"><input
																							class="input-radio__input" name="filter_vehicle" type="radio"> <span
																							class="input-radio__circle"></span> </span></span><span
																					class="filter-vehicle__item-title">All Parts </span><span
																					class="filter-vehicle__item-counter">57</span></label></li>
																		<li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span
																					class="filter-list__input input-radio"><span class="input-radio__body"><input
																							class="input-radio__input" name="filter_vehicle" type="radio"
																							checked="checked"> <span class="input-radio__circle"></span>
																					</span></span><span class="filter-vehicle__item-title">2011 Ford Focus S
																				</span><span class="filter-vehicle__item-counter">12</span></label></li>
																		<li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span
																					class="filter-list__input input-radio"><span class="input-radio__body"><input
																							class="input-radio__input" name="filter_vehicle" type="radio"> <span
																							class="input-radio__circle"></span> </span></span><span
																					class="filter-vehicle__item-title">2015 Audi A3 </span><span
																					class="filter-vehicle__item-counter">51</span></label></li>
																	</ul>
																	<div class="filter-vehicle__button"><button type="button"
																			class="btn btn-xs btn-secondary">Add Vehicle</button></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="widget-filters__item">
													<div class="filter filter--opened" data-collapse-item><button type="button"
															class="filter__title" data-collapse-trigger>Price <span class="filter__arrow"><svg
																	width="12px" height="7px">
																	<path
																		d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
																</svg></span></button>
														<div class="filter__body" data-collapse-content>
															<div class="filter__container">
																<div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1000">
																	<div class="filter-price__slider"></div>
																	<div class="filter-price__title-button">
																		<div class="filter-price__title">$<span class="filter-price__min-value"></span> –
																			$<span class="filter-price__max-value"></span></div><button type="button"
																			class="btn btn-xs btn-secondary filter-price__button">Filter</button>
																	</div>
																</div>
															</div>
=======
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-17-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													999-60606-X</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Air Filter From Ash's Chainsaw</a></div>
												</div>
												<div class="product-card__rating">
													<div class="rating product-card__rating-stars">
														<div class="rating__body">
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
														</div>
													</div>
													<div class="product-card__rating-label">5 on 66 reviews</div>
												</div>
<<<<<<< HEAD
												<div class="widget-filters__item">
													<div class="filter filter--opened" data-collapse-item><button type="button"
															class="filter__title" data-collapse-trigger>Brand <span class="filter__arrow"><svg
																	width="12px" height="7px">
																	<path
																		d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
																</svg></span></button>
														<div class="filter__body" data-collapse-content>
															<div class="filter__container">
																<div class="filter-list">
																	<div class="filter-list__list"><label class="filter-list__item"><span
																				class="input-check filter-list__input"><span class="input-check__body"><input
																						class="input-check__input" type="checkbox"> <span
																						class="input-check__box"></span> <span class="input-check__icon"><svg
																							width="9px" height="7px">
																							<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																						</svg> </span></span></span><span class="filter-list__title">Wakita
																			</span><span class="filter-list__counter">7</span></label> <label
																			class="filter-list__item"><span class="input-check filter-list__input"><span
																					class="input-check__body"><input class="input-check__input" type="checkbox"
																						checked="checked"> <span class="input-check__box"></span> <span
																						class="input-check__icon"><svg width="9px" height="7px">
																							<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																						</svg> </span></span></span><span class="filter-list__title">Zosch
																			</span><span class="filter-list__counter">42</span></label> <label
																			class="filter-list__item filter-list__item--disabled"><span
																				class="input-check filter-list__input"><span class="input-check__body"><input
																						class="input-check__input" type="checkbox" checked="checked"
																						disabled="disabled"> <span class="input-check__box"></span> <span
																						class="input-check__icon"><svg width="9px" height="7px">
																							<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																						</svg> </span></span></span><span
																				class="filter-list__title">WeVALT</span></label> <label
																			class="filter-list__item filter-list__item--disabled"><span
																				class="input-check filter-list__input"><span class="input-check__body"><input
																						class="input-check__input" type="checkbox" disabled="disabled"> <span
																						class="input-check__box"></span> <span class="input-check__icon"><svg
																							width="9px" height="7px">
																							<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																						</svg> </span></span></span><span
																				class="filter-list__title">Hammer</span></label> <label
																			class="filter-list__item"><span class="input-check filter-list__input"><span
																					class="input-check__body"><input class="input-check__input" type="checkbox">
																					<span class="input-check__box"></span> <span class="input-check__icon"><svg
																							width="9px" height="7px">
																							<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																						</svg> </span></span></span><span class="filter-list__title">Mitasia
																			</span><span class="filter-list__counter">1</span></label> <label
																			class="filter-list__item"><span class="input-check filter-list__input"><span
																					class="input-check__body"><input class="input-check__input" type="checkbox">
																					<span class="input-check__box"></span> <span class="input-check__icon"><svg
																							width="9px" height="7px">
																							<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																						</svg> </span></span></span><span class="filter-list__title">Metaggo
																			</span><span class="filter-list__counter">25</span></label></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="widget-filters__item">
													<div class="filter filter--opened" data-collapse-item><button type="button"
															class="filter__title" data-collapse-trigger>Brand <span class="filter__arrow"><svg
																	width="12px" height="7px">
																	<path
																		d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
																</svg></span></button>
														<div class="filter__body" data-collapse-content>
															<div class="filter__container">
																<div class="filter-list">
																	<div class="filter-list__list"><label class="filter-list__item"><span
																				class="filter-list__input input-radio"><span class="input-radio__body"><input
																						class="input-radio__input" name="filter_radio" type="radio"> <span
																						class="input-radio__circle"></span> </span></span><span
																				class="filter-list__title">Wakita </span><span
																				class="filter-list__counter">7</span></label> <label
																			class="filter-list__item"><span class="filter-list__input input-radio"><span
																					class="input-radio__body"><input class="input-radio__input"
																						name="filter_radio" type="radio"> <span class="input-radio__circle"></span>
																				</span></span><span class="filter-list__title">Zosch </span><span
																				class="filter-list__counter">42</span></label> <label
																			class="filter-list__item filter-list__item--disabled"><span
																				class="filter-list__input input-radio"><span class="input-radio__body"><input
																						class="input-radio__input" name="filter_radio" type="radio"
																						checked="checked" disabled="disabled"> <span
																						class="input-radio__circle"></span> </span></span><span
																				class="filter-list__title">WeVALT</span></label> <label
																			class="filter-list__item filter-list__item--disabled"><span
																				class="filter-list__input input-radio"><span class="input-radio__body"><input
																						class="input-radio__input" name="filter_radio" type="radio"
																						disabled="disabled"> <span class="input-radio__circle"></span>
																				</span></span><span class="filter-list__title">Hammer</span></label> <label
																			class="filter-list__item"><span class="filter-list__input input-radio"><span
																					class="input-radio__body"><input class="input-radio__input"
																						name="filter_radio" type="radio"> <span class="input-radio__circle"></span>
																				</span></span><span class="filter-list__title">Mitasia </span><span
																				class="filter-list__counter">1</span></label> <label
																			class="filter-list__item"><span class="filter-list__input input-radio"><span
																					class="input-radio__body"><input class="input-radio__input"
																						name="filter_radio" type="radio"> <span class="input-radio__circle"></span>
																				</span></span><span class="filter-list__title">Metaggo </span><span
																				class="filter-list__counter">25</span></label></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="widget-filters__item">
													<div class="filter filter--opened" data-collapse-item><button type="button"
															class="filter__title" data-collapse-trigger>Rating <span class="filter__arrow"><svg
																	width="12px" height="7px">
																	<path
																		d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
																</svg></span></button>
														<div class="filter__body" data-collapse-content>
															<div class="filter__container">
																<div class="filter-rating">
																	<ul class="filter-rating__list">
																		<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																					class="input-check filter-rating__item-input"><span
																						class="input-check__body"><input class="input-check__input" type="checkbox">
																						<span class="input-check__box"></span> <span class="input-check__icon"><svg
																								width="9px" height="7px">
																								<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																							</svg> </span></span></span><span class="filter-rating__item-stars">
																					<div class="rating">
																						<div class="rating__body">
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																						</div>
																					</div>
																				</span><span class="filter-rating__item-title sr-only">5 stars </span><span
																					class="filter-rating__item-counter">42</span></label></li>
																		<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																					class="input-check filter-rating__item-input"><span
																						class="input-check__body"><input class="input-check__input" type="checkbox">
																						<span class="input-check__box"></span> <span class="input-check__icon"><svg
																								width="9px" height="7px">
																								<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																							</svg> </span></span></span><span class="filter-rating__item-stars">
																					<div class="rating">
																						<div class="rating__body">
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star"></div>
																						</div>
																					</div>
																				</span><span class="filter-rating__item-title sr-only">4 stars </span><span
																					class="filter-rating__item-counter">24</span></label></li>
																		<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																					class="input-check filter-rating__item-input"><span
																						class="input-check__body"><input class="input-check__input" type="checkbox">
																						<span class="input-check__box"></span> <span class="input-check__icon"><svg
																								width="9px" height="7px">
																								<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																							</svg> </span></span></span><span class="filter-rating__item-stars">
																					<div class="rating">
																						<div class="rating__body">
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star"></div>
																							<div class="rating__star"></div>
																						</div>
																					</div>
																				</span><span class="filter-rating__item-title sr-only">3 stars </span><span
																					class="filter-rating__item-counter">19</span></label></li>
																		<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																					class="input-check filter-rating__item-input"><span
																						class="input-check__body"><input class="input-check__input" type="checkbox">
																						<span class="input-check__box"></span> <span class="input-check__icon"><svg
																								width="9px" height="7px">
																								<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																							</svg> </span></span></span><span class="filter-rating__item-stars">
																					<div class="rating">
																						<div class="rating__body">
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star"></div>
																							<div class="rating__star"></div>
																							<div class="rating__star"></div>
																						</div>
																					</div>
																				</span><span class="filter-rating__item-title sr-only">2 stars </span><span
																					class="filter-rating__item-counter">3</span></label></li>
																		<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																					class="input-check filter-rating__item-input"><span
																						class="input-check__body"><input class="input-check__input" type="checkbox">
																						<span class="input-check__box"></span> <span class="input-check__icon"><svg
																								width="9px" height="7px">
																								<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																							</svg> </span></span></span><span class="filter-rating__item-stars">
																					<div class="rating">
																						<div class="rating__body">
																							<div class="rating__star rating__star--active"></div>
																							<div class="rating__star"></div>
																							<div class="rating__star"></div>
																							<div class="rating__star"></div>
																							<div class="rating__star"></div>
																						</div>
																					</div>
																				</span><span class="filter-rating__item-title sr-only">1 star </span><span
																					class="filter-rating__item-counter">12</span></label></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="widget-filters__item">
													<div class="filter filter--opened" data-collapse-item><button type="button"
															class="filter__title" data-collapse-trigger>Color <span class="filter__arrow"><svg
																	width="12px" height="7px">
																	<path
																		d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
																</svg></span></button>
														<div class="filter__body" data-collapse-content>
															<div class="filter__container">
																<div class="filter-color">
																	<div class="filter-color__list"><label class="filter-color__item"><span
																				class="filter-color__check input-check-color input-check-color--white"
																				style="color: #fff;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span
																				class="filter-color__check input-check-color input-check-color--light"
																				style="color: #d9d9d9;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #b3b3b3;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #808080;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #666;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #4d4d4d;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #262626;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #ff4040;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox" checked="checked"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #ff8126;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span
																				class="filter-color__check input-check-color input-check-color--light"
																				style="color: #ffd440;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span
																				class="filter-color__check input-check-color input-check-color--light"
																				style="color: #becc1f;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #8fcc14;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox" checked="checked"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #47cc5e;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #47cca0;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #47cccc;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #40bfff;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox" disabled="disabled"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #3d6dcc;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox" checked="checked"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #7766cc;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #b852cc;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label> <label
																			class="filter-color__item"><span class="filter-color__check input-check-color"
																				style="color: #e53981;"><label class="input-check-color__body"><input
																						class="input-check-color__input" type="checkbox"> <span
																						class="input-check-color__box"></span> <span
																						class="input-check-color__icon"><svg width="12px" height="9px">
																							<path
																								d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																						</svg></span><span
																						class="input-check-color__stick"></span></label></span></label></div>
																</div>
															</div>
=======
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$666.99</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-18-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													545-74573-D</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Side Rearview Mirror</a></div>
												</div>
												<div class="product-card__rating">
													<div class="rating product-card__rating-stars">
														<div class="rating__body">
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star rating__star--active"></div>
															<div class="rating__star"></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
														</div>
													</div>
													<div class="product-card__rating-label">4 on 25 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$40.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-19-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													965-73344-F</div>
												<div class="product-card__name">
													<div>
														<div class="product-card__badges">
															<div class="tag-badge tag-badge--sale">sale</div>
														</div><a href="product-full.html">Brandix Car Door Lock</a>
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
													<div class="product-card__rating-label">3 on 24 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--new">$21.00</div>
													<div class="product-card__price product-card__price--old">$31.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
											</div>
										</div>
									</div>
									<div class="products-list__item">
										<div class="product-card">
											<div class="product-card__actions-list"><button
													class="product-card__action product-card__action--quickview" type="button"
													aria-label="Quick view"><svg width="16" height="16">
														<path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" /></svg></button> <button
													class="product-card__action product-card__action--wishlist" type="button"
													aria-label="Add to wish list"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg></button> <button
													class="product-card__action product-card__action--compare" type="button"
													aria-label="Add to compare"><svg width="16" height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg></button></div>
											<div class="product-card__image"><a href="product-full.html"><img
														src="images/products/product-20-245x245.jpg" alt=""></a>
												<div
													class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
													<div class="status-badge__body">
														<div class="status-badge__icon"><svg width="13" height="13">
																<path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" /></svg></div>
														<div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
														<div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip"
															title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
													</div>
												</div>
											</div>
											<div class="product-card__info">
												<div class="product-card__meta"><span class="product-card__meta-title">SKU:</span>
													365-32667-P</div>
												<div class="product-card__name">
													<div><a href="product-full.html">Air Suspension For Brandix Car</a></div>
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
													<div class="product-card__rating-label">5 on 7 reviews</div>
												</div>
												<div class="product-card__features">
													<ul>
														<li>Speed: 750 RPM</li>
														<li>Power Source: Cordless-Electric</li>
														<li>Battery Cell Type: Lithium</li>
														<li>Voltage: 20 Volts</li>
														<li>Battery Capacity: 2 Ah</li>
													</ul>
												</div>
											</div>
											<div class="product-card__footer">
												<div class="product-card__prices">
													<div class="product-card__price product-card__price--current">$162.00</div>
												</div><button class="product-card__addtocart-icon" type="button" aria-label="Add to cart"><svg
														width="20" height="20">
														<circle cx="7" cy="17" r="2" />
														<circle cx="15" cy="17" r="2" />
														<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg></button>
												<button class="product-card__addtocart-full" type="button">Add to cart</button> <button
													class="product-card__wishlist" type="button"><svg width="16" height="16">
														<path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" /></svg> <span>Add to
														wishlist</span></button> <button class="product-card__compare" type="button"><svg width="16"
														height="16">
														<path
															d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
														<path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
														<path
															d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
													</svg> <span>Add to compare</span></button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="products-view__pagination">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item disabled"><a class="page-link page-link--with-arrow" href="#"
												aria-label="Previous"><span class="page-link__arrow page-link__arrow--left"
													aria-hidden="true"><svg width="7" height="11">
														<path
															d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
													</svg></span></a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item active" aria-current="page"><span class="page-link">2 <span
													class="sr-only">(current)</span></span></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">4</a></li>
										<li class="page-item page-item--dots">
											<div class="pagination__dots"></div>
										</li>
										<li class="page-item"><a class="page-link" href="#">9</a></li>
										<li class="page-item"><a class="page-link page-link--with-arrow" href="#" aria-label="Next"><span
													class="page-link__arrow page-link__arrow--right" aria-hidden="true"><svg width="7"
														height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></span></a></li>
									</ul>
<<<<<<< HEAD
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-4">
								<div class="site-footer__widget footer-newsletter">
									<h5 class="footer-newsletter__title">Newsletter</h5>
									<div class="footer-newsletter__text">Enter your email address below to subscribe to our newsletter and
										keep up to date with discounts and special offers.</div>
									<form action="#" class="footer-newsletter__form"><label class="sr-only"
											for="footer-newsletter-address">Email Address</label> <input type="text"
											class="footer-newsletter__form-input" id="footer-newsletter-address"
											placeholder="Email Address..."> <button class="footer-newsletter__form-button">Subscribe</button>
									</form>
									<div class="footer-newsletter__text footer-newsletter__text--social">Follow us on social networks
									</div>
									<div class="footer-newsletter__social-links social-links">
										<ul class="social-links__list">
											<li class="social-links__item social-links__item--facebook"><a
													href="https://themeforest.net/user/kos9" target="_blank" rel="noopener"><i
														class="fab fa-facebook-f"></i></a>
											</li>
											<li class="social-links__item social-links__item--twitter"><a
													href="https://themeforest.net/user/kos9" target="_blank" rel="noopener"><i
														class="fab fa-twitter"></i></a>
											</li>
											<li class="social-links__item social-links__item--youtube"><a
													href="https://themeforest.net/user/kos9" target="_blank" rel="noopener"><i
														class="fab fa-youtube"></i></a>
											</li>
											<li class="social-links__item social-links__item--instagram"><a
													href="https://themeforest.net/user/kos9" target="_blank" rel="noopener"><i
														class="fab fa-instagram"></i></a>
											</li>
											<li class="social-links__item social-links__item--rss"><a href="https://themeforest.net/user/kos9"
													target="_blank" rel="noopener"><i class="fas fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="site-footer__bottom">
					<div class="container">
						<div class="site-footer__bottom-row">
							<div class="site-footer__copyright">
								<!-- copyright --> Powered by HTML — Designed by <a href="https://themeforest.net/user/kos9"
									target="_blank" rel="noopener">Kos</a><!-- copyright / end -->
=======
								</nav>
								<div class="products-view__pagination-legend">Showing 6 of 98 products</div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
							</div>
						</div>
					</div>
				</div>
				<div class="block-split__item block-split__item-sidebar col-auto">
					<div class="sidebar sidebar--offcanvas--mobile">
						<div class="sidebar__backdrop"></div>
						<div class="sidebar__body">
							<div class="sidebar__header">
								<div class="sidebar__title">Filters</div><button class="sidebar__close" type="button"><svg width="12"
										height="12">
										<path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button>
<<<<<<< HEAD
			<div class="mobile-menu__panel">
				<div class="mobile-menu__panel-header">
					<div class="mobile-menu__panel-title">Menu</div>
				</div>
				<div class="mobile-menu__panel-body">
					<div class="mobile-menu__settings-list">
						<div class="mobile-menu__setting" data-mobile-menu-item><button class="mobile-menu__setting-button"
								title="Language" data-mobile-menu-trigger><span class="mobile-menu__setting-icon"><img
										src="images/languages/language-5.png" alt=""> </span><span
									class="mobile-menu__setting-title">Italian</span> <span class="mobile-menu__setting-arrow"><svg
										width="6px" height="9px">
										<path
											d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
									</svg></span></button>
							<div class="mobile-menu__setting-panel" data-mobile-menu-panel>
								<div class="mobile-menu__panel mobile-menu__panel--hidden">
									<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg
												width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></button>
										<div class="mobile-menu__panel-title">Language</div>
									</div>
									<div class="mobile-menu__panel-body">
										<ul class="mobile-menu__links">
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>
													<div class="mobile-menu__links-image"><img src="images/languages/language-1.png" alt=""></div>
													English
												</button></li>
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>
													<div class="mobile-menu__links-image"><img src="images/languages/language-2.png" alt=""></div>
													French
												</button></li>
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>
													<div class="mobile-menu__links-image"><img src="images/languages/language-3.png" alt=""></div>
													German
												</button></li>
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>
													<div class="mobile-menu__links-image"><img src="images/languages/language-4.png" alt=""></div>
													Russian
												</button></li>
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>
													<div class="mobile-menu__links-image"><img src="images/languages/language-5.png" alt=""></div>
													Italian
												</button></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="mobile-menu__setting" data-mobile-menu-item><button class="mobile-menu__setting-button"
								title="Currency" data-mobile-menu-trigger><span
									class="mobile-menu__setting-icon mobile-menu__setting-icon--currency">$ </span><span
									class="mobile-menu__setting-title">US Dollar</span> <span class="mobile-menu__setting-arrow"><svg
										width="6px" height="9px">
										<path
											d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
									</svg></span></button>
							<div class="mobile-menu__setting-panel" data-mobile-menu-panel>
								<div class="mobile-menu__panel mobile-menu__panel--hidden">
									<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg
												width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></button>
										<div class="mobile-menu__panel-title">Currency</div>
									</div>
									<div class="mobile-menu__panel-body">
										<ul class="mobile-menu__links">
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>€ Euro</button>
											</li>
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>£ Pound
													Sterling</button></li>
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>$ US
													Dollar</button></li>
											<li data-mobile-menu-item><button type="button" class="" data-mobile-menu-trigger>₽ Russian
													Ruble</button></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile-menu__divider"></div>
					<div class="mobile-menu__indicators"><a class="mobile-menu__indicator" href="wishlist.html"><span
								class="mobile-menu__indicator-icon"><svg width="20" height="20">
									<path d="M14,3c2.2,0,4,1.8,4,4c0,4-5.2,10-8,10S2,11,2,7c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.7,1L10,5.2L11.3,4C12.1,3.4,13,3,14,3 M14,1
	c-1.5,0-2.9,0.6-4,1.5C8.9,1.6,7.5,1,6,1C2.7,1,0,3.7,0,7c0,5,6,12,10,12s10-7,10-12C20,3.7,17.3,1,14,1L14,1z" /></svg>
							</span><span class="mobile-menu__indicator-title">Wishlist</span> </a><a class="mobile-menu__indicator"
							href="account-dashboard.html"><span class="mobile-menu__indicator-icon"><svg width="20" height="20">
									<path d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
	c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z" /></svg>
							</span><span class="mobile-menu__indicator-title">Account</span> </a><a class="mobile-menu__indicator"
							href="cart.html"><span class="mobile-menu__indicator-icon"><svg width="20" height="20">
									<circle cx="7" cy="17" r="2" />
									<circle cx="15" cy="17" r="2" />
									<path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg> <span
									class="mobile-menu__indicator-counter">3</span> </span><span
								class="mobile-menu__indicator-title">Cart</span> </a><a class="mobile-menu__indicator"
							href="account-garage.html"><span class="mobile-menu__indicator-icon"><svg width="20" height="20">
									<path d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
	c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
	C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
	c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
	c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
	C15.5,10.2,14,11.3,14,12z" /></svg> </span><span class="mobile-menu__indicator-title">Garage</span></a></div>
					<div class="mobile-menu__divider"></div>
					<ul class="mobile-menu__links">
						<li data-mobile-menu-item><a href="index.html" class="" data-mobile-menu-trigger>Home <svg width="7"
									height="11">
									<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
							<div class="mobile-menu__links-panel" data-mobile-menu-panel>
								<div class="mobile-menu__panel mobile-menu__panel--hidden">
									<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg
												width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></button>
										<div class="mobile-menu__panel-title">Home</div>
									</div>
									<div class="mobile-menu__panel-body">
										<ul class="mobile-menu__links">
											<li data-mobile-menu-item><a href="index.html" class="" data-mobile-menu-trigger>Home One</a></li>
											<li data-mobile-menu-item><a href="index2.html" class="" data-mobile-menu-trigger>Home Two</a>
											</li>
											<li data-mobile-menu-item><a href="header-spaceship-variant-one.html" class=""
													data-mobile-menu-trigger>Header Spaceship <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Header Spaceship</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="header-spaceship-variant-one.html" class=""
																		data-mobile-menu-trigger>Variant One</a></li>
																<li data-mobile-menu-item><a href="header-spaceship-variant-two.html" class=""
																		data-mobile-menu-trigger>Variant Two</a></li>
																<li data-mobile-menu-item><a href="header-spaceship-variant-three.html" class=""
																		data-mobile-menu-trigger>Variant Three</a></li>
=======
							</div>
							<div class="sidebar__content">
								<div class="widget widget-filters widget-filters--offcanvas--mobile" data-collapse
									data-collapse-opened-class="filter--opened">
									<div class="widget__header widget-filters__header">
										<h4>Filters</h4>
									</div>
									<div class="widget-filters__list">
										<div class="widget-filters__item">
											<div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
													data-collapse-trigger>Categories <span class="filter__arrow"><svg width="12px" height="7px">
															<path
																d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
														</svg></span></button>
												<div class="filter__body" data-collapse-content>
													<div class="filter__container">
														<div class="filter-categories">
															<ul class="filter-categories__list">
																<li class="filter-categories__item filter-categories__item--parent"><span
																		class="filter-categories__arrow"><svg width="6" height="9">
																			<path d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
	C6.1,7.8,6.1,8.4,5.7,8.7z" /></svg> </span><a href="#">Construction & Repair</a>
																	<div class="filter-categories__counter">254</div>
																</li>
																<li class="filter-categories__item filter-categories__item--parent"><span
																		class="filter-categories__arrow"><svg width="6" height="9">
																			<path d="M5.7,8.7L5.7,8.7c-0.4,0.4-0.9,0.4-1.3,0L0,4.5l4.4-4.2c0.4-0.4,0.9-0.3,1.3,0l0,0c0.4,0.4,0.4,1,0,1.3l-3,2.9l3,2.9
	C6.1,7.8,6.1,8.4,5.7,8.7z" /></svg> </span><a href="#">Instruments</a>
																	<div class="filter-categories__counter">75</div>
																</li>
																<li class="filter-categories__item filter-categories__item--current"><a href="#">Power
																		Tools</a>
																	<div class="filter-categories__counter">21</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a href="#">Drills &
																		Mixers</a>
																	<div class="filter-categories__counter">15</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a href="#">Cordless
																		Screwdrivers</a>
																	<div class="filter-categories__counter">2</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a
																		href="#">Screwdrivers</a>
																	<div class="filter-categories__counter">30</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a
																		href="#">Wrenches</a>
																	<div class="filter-categories__counter">7</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a href="#">Grinding
																		Machines</a>
																	<div class="filter-categories__counter">5</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a href="#">Milling
																		Cutters</a>
																	<div class="filter-categories__counter">2</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a href="#">Electric
																		Spray Guns</a>
																	<div class="filter-categories__counter">9</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a
																		href="#">Jigsaws</a>
																	<div class="filter-categories__counter">4</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a
																		href="#">Jackhammers</a>
																	<div class="filter-categories__counter">0</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a
																		href="#">Planers</a>
																	<div class="filter-categories__counter">12</div>
																</li>
																<li class="filter-categories__item filter-categories__item--child"><a href="#">Glue
																		Guns</a>
																	<div class="filter-categories__counter">7</div>
																</li>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
															</ul>
														</div>
													</div>
												</div>
<<<<<<< HEAD
											</li>
											<li data-mobile-menu-item><a href="header-classic-variant-one.html" class=""
													data-mobile-menu-trigger>Header Classic <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Header Classic</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="header-classic-variant-one.html" class=""
																		data-mobile-menu-trigger>Variant One</a></li>
																<li data-mobile-menu-item><a href="header-classic-variant-two.html" class=""
																		data-mobile-menu-trigger>Variant Two</a></li>
																<li data-mobile-menu-item><a href="header-classic-variant-three.html" class=""
																		data-mobile-menu-trigger>Variant Three</a></li>
																<li data-mobile-menu-item><a href="header-classic-variant-four.html" class=""
																		data-mobile-menu-trigger>Variant Four</a></li>
																<li data-mobile-menu-item><a href="header-classic-variant-five.html" class=""
																		data-mobile-menu-trigger>Variant Five</a></li>
=======
											</div>
										</div>
										<div class="widget-filters__item">
											<div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
													data-collapse-trigger>Vehicle <span class="filter__arrow"><svg width="12px" height="7px">
															<path
																d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
														</svg></span></button>
												<div class="filter__body" data-collapse-content>
													<div class="filter__container">
														<div class="filter-vehicle">
															<ul class="filter-vehicle__list">
																<li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span
																			class="filter-list__input input-radio"><span class="input-radio__body"><input
																					class="input-radio__input" name="filter_vehicle" type="radio"> <span
																					class="input-radio__circle"></span> </span></span><span
																			class="filter-vehicle__item-title">All Parts </span><span
																			class="filter-vehicle__item-counter">57</span></label></li>
																<li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span
																			class="filter-list__input input-radio"><span class="input-radio__body"><input
																					class="input-radio__input" name="filter_vehicle" type="radio"
																					checked="checked"> <span class="input-radio__circle"></span>
																			</span></span><span class="filter-vehicle__item-title">2011 Ford Focus S
																		</span><span class="filter-vehicle__item-counter">12</span></label></li>
																<li class="filter-vehicle__item"><label class="filter-vehicle__item-label"><span
																			class="filter-list__input input-radio"><span class="input-radio__body"><input
																					class="input-radio__input" name="filter_vehicle" type="radio"> <span
																					class="input-radio__circle"></span> </span></span><span
																			class="filter-vehicle__item-title">2015 Audi A3 </span><span
																			class="filter-vehicle__item-counter">51</span></label></li>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
															</ul>
															<div class="filter-vehicle__button"><button type="button"
																	class="btn btn-xs btn-secondary">Add Vehicle</button></div>
														</div>
													</div>
												</div>
<<<<<<< HEAD
											</li>
											<li data-mobile-menu-item><a href="mobile-header-variant-one.html" class=""
													data-mobile-menu-trigger>Mobile Header <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Mobile Header</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="mobile-header-variant-one.html" class=""
																		data-mobile-menu-trigger>Variant One</a></li>
																<li data-mobile-menu-item><a href="mobile-header-variant-two.html" class=""
																		data-mobile-menu-trigger>Variant Two</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li data-mobile-menu-item><a href="shop-grid-4-columns-sidebar.html" class="" data-mobile-menu-trigger>Shop
								<svg width="7" height="11">
									<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
							<div class="mobile-menu__links-panel" data-mobile-menu-panel>
								<div class="mobile-menu__panel mobile-menu__panel--hidden">
									<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg
												width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></button>
										<div class="mobile-menu__panel-title">Shop</div>
									</div>
									<div class="mobile-menu__panel-body">
										<ul class="mobile-menu__links">
											<li data-mobile-menu-item><a href="category.html" class="" data-mobile-menu-trigger>Category <svg
														width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Category</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="category-3-columns-sidebar.html" class=""
																		data-mobile-menu-trigger>3 Columns Sidebar</a></li>
																<li data-mobile-menu-item><a href="category-4-columns-sidebar.html" class=""
																		data-mobile-menu-trigger>4 Columns Sidebar</a></li>
																<li data-mobile-menu-item><a href="category-5-columns-sidebar.html" class=""
																		data-mobile-menu-trigger>5 Columns Sidebar</a></li>
																<li data-mobile-menu-item><a href="category-4-columns-full.html" class=""
																		data-mobile-menu-trigger>4 Columns Full</a></li>
																<li data-mobile-menu-item><a href="category-5-columns-full.html" class=""
																		data-mobile-menu-trigger>5 Columns Full</a></li>
																<li data-mobile-menu-item><a href="category-6-columns-full.html" class=""
																		data-mobile-menu-trigger>6 Columns Full</a></li>
																<li data-mobile-menu-item><a href="category-7-columns-full.html" class=""
																		data-mobile-menu-trigger>7 Columns Full</a></li>
																<li data-mobile-menu-item><a href="category-right-sidebar.html" class=""
																		data-mobile-menu-trigger>Right Sidebar</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li data-mobile-menu-item><a href="shop-grid-4-columns-sidebar.html" class=""
													data-mobile-menu-trigger>Shop Grid <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Shop Grid</div>
=======
											</div>
										</div>
										<div class="widget-filters__item">
											<div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
													data-collapse-trigger>Price <span class="filter__arrow"><svg width="12px" height="7px">
															<path
																d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
														</svg></span></button>
												<div class="filter__body" data-collapse-content>
													<div class="filter__container">
														<div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1000">
															<div class="filter-price__slider"></div>
															<div class="filter-price__title-button">
																<div class="filter-price__title">$<span class="filter-price__min-value"></span> –
																	$<span class="filter-price__max-value"></span></div><button type="button"
																	class="btn btn-xs btn-secondary filter-price__button">Filter</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="widget-filters__item">
											<div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
													data-collapse-trigger>Brand <span class="filter__arrow"><svg width="12px" height="7px">
															<path
																d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
														</svg></span></button>
												<div class="filter__body" data-collapse-content>
													<div class="filter__container">
														<div class="filter-list">
															<div class="filter-list__list"><label class="filter-list__item"><span
																		class="input-check filter-list__input"><span class="input-check__body"><input
																				class="input-check__input" type="checkbox"> <span
																				class="input-check__box"></span> <span class="input-check__icon"><svg
																					width="9px" height="7px">
																					<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																				</svg> </span></span></span><span class="filter-list__title">Wakita
																	</span><span class="filter-list__counter">7</span></label> <label
																	class="filter-list__item"><span class="input-check filter-list__input"><span
																			class="input-check__body"><input class="input-check__input" type="checkbox"
																				checked="checked"> <span class="input-check__box"></span> <span
																				class="input-check__icon"><svg width="9px" height="7px">
																					<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																				</svg> </span></span></span><span class="filter-list__title">Zosch
																	</span><span class="filter-list__counter">42</span></label> <label
																	class="filter-list__item filter-list__item--disabled"><span
																		class="input-check filter-list__input"><span class="input-check__body"><input
																				class="input-check__input" type="checkbox" checked="checked"
																				disabled="disabled"> <span class="input-check__box"></span> <span
																				class="input-check__icon"><svg width="9px" height="7px">
																					<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																				</svg> </span></span></span><span
																		class="filter-list__title">WeVALT</span></label> <label
																	class="filter-list__item filter-list__item--disabled"><span
																		class="input-check filter-list__input"><span class="input-check__body"><input
																				class="input-check__input" type="checkbox" disabled="disabled"> <span
																				class="input-check__box"></span> <span class="input-check__icon"><svg
																					width="9px" height="7px">
																					<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																				</svg> </span></span></span><span
																		class="filter-list__title">Hammer</span></label> <label
																	class="filter-list__item"><span class="input-check filter-list__input"><span
																			class="input-check__body"><input class="input-check__input" type="checkbox">
																			<span class="input-check__box"></span> <span class="input-check__icon"><svg
																					width="9px" height="7px">
																					<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																				</svg> </span></span></span><span class="filter-list__title">Mitasia
																	</span><span class="filter-list__counter">1</span></label> <label
																	class="filter-list__item"><span class="input-check filter-list__input"><span
																			class="input-check__body"><input class="input-check__input" type="checkbox">
																			<span class="input-check__box"></span> <span class="input-check__icon"><svg
																					width="9px" height="7px">
																					<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																				</svg> </span></span></span><span class="filter-list__title">Metaggo
																	</span><span class="filter-list__counter">25</span></label></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="widget-filters__item">
											<div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
													data-collapse-trigger>Brand <span class="filter__arrow"><svg width="12px" height="7px">
															<path
																d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
														</svg></span></button>
												<div class="filter__body" data-collapse-content>
													<div class="filter__container">
														<div class="filter-list">
															<div class="filter-list__list"><label class="filter-list__item"><span
																		class="filter-list__input input-radio"><span class="input-radio__body"><input
																				class="input-radio__input" name="filter_radio" type="radio"> <span
																				class="input-radio__circle"></span> </span></span><span
																		class="filter-list__title">Wakita </span><span
																		class="filter-list__counter">7</span></label> <label class="filter-list__item"><span
																		class="filter-list__input input-radio"><span class="input-radio__body"><input
																				class="input-radio__input" name="filter_radio" type="radio"> <span
																				class="input-radio__circle"></span>
																		</span></span><span class="filter-list__title">Zosch </span><span
																		class="filter-list__counter">42</span></label> <label
																	class="filter-list__item filter-list__item--disabled"><span
																		class="filter-list__input input-radio"><span class="input-radio__body"><input
																				class="input-radio__input" name="filter_radio" type="radio" checked="checked"
																				disabled="disabled"> <span class="input-radio__circle"></span>
																		</span></span><span class="filter-list__title">WeVALT</span></label> <label
																	class="filter-list__item filter-list__item--disabled"><span
																		class="filter-list__input input-radio"><span class="input-radio__body"><input
																				class="input-radio__input" name="filter_radio" type="radio" disabled="disabled">
																			<span class="input-radio__circle"></span>
																		</span></span><span class="filter-list__title">Hammer</span></label> <label
																	class="filter-list__item"><span class="filter-list__input input-radio"><span
																			class="input-radio__body"><input class="input-radio__input" name="filter_radio"
																				type="radio"> <span class="input-radio__circle"></span>
																		</span></span><span class="filter-list__title">Mitasia </span><span
																		class="filter-list__counter">1</span></label> <label class="filter-list__item"><span
																		class="filter-list__input input-radio"><span class="input-radio__body"><input
																				class="input-radio__input" name="filter_radio" type="radio"> <span
																				class="input-radio__circle"></span>
																		</span></span><span class="filter-list__title">Metaggo </span><span
																		class="filter-list__counter">25</span></label></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="widget-filters__item">
											<div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
													data-collapse-trigger>Rating <span class="filter__arrow"><svg width="12px" height="7px">
															<path
																d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
														</svg></span></button>
												<div class="filter__body" data-collapse-content>
													<div class="filter__container">
														<div class="filter-rating">
															<ul class="filter-rating__list">
																<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																			class="input-check filter-rating__item-input"><span
																				class="input-check__body"><input class="input-check__input" type="checkbox">
																				<span class="input-check__box"></span> <span class="input-check__icon"><svg
																						width="9px" height="7px">
																						<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																					</svg> </span></span></span><span class="filter-rating__item-stars">
																			<div class="rating">
																				<div class="rating__body">
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																				</div>
																			</div>
																		</span><span class="filter-rating__item-title sr-only">5 stars </span><span
																			class="filter-rating__item-counter">42</span></label></li>
																<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																			class="input-check filter-rating__item-input"><span
																				class="input-check__body"><input class="input-check__input" type="checkbox">
																				<span class="input-check__box"></span> <span class="input-check__icon"><svg
																						width="9px" height="7px">
																						<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																					</svg> </span></span></span><span class="filter-rating__item-stars">
																			<div class="rating">
																				<div class="rating__body">
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star"></div>
																				</div>
																			</div>
																		</span><span class="filter-rating__item-title sr-only">4 stars </span><span
																			class="filter-rating__item-counter">24</span></label></li>
																<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																			class="input-check filter-rating__item-input"><span
																				class="input-check__body"><input class="input-check__input" type="checkbox">
																				<span class="input-check__box"></span> <span class="input-check__icon"><svg
																						width="9px" height="7px">
																						<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																					</svg> </span></span></span><span class="filter-rating__item-stars">
																			<div class="rating">
																				<div class="rating__body">
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star"></div>
																					<div class="rating__star"></div>
																				</div>
																			</div>
																		</span><span class="filter-rating__item-title sr-only">3 stars </span><span
																			class="filter-rating__item-counter">19</span></label></li>
																<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																			class="input-check filter-rating__item-input"><span
																				class="input-check__body"><input class="input-check__input" type="checkbox">
																				<span class="input-check__box"></span> <span class="input-check__icon"><svg
																						width="9px" height="7px">
																						<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																					</svg> </span></span></span><span class="filter-rating__item-stars">
																			<div class="rating">
																				<div class="rating__body">
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star"></div>
																					<div class="rating__star"></div>
																					<div class="rating__star"></div>
																				</div>
																			</div>
																		</span><span class="filter-rating__item-title sr-only">2 stars </span><span
																			class="filter-rating__item-counter">3</span></label></li>
																<li class="filter-rating__item"><label class="filter-rating__item-label"><span
																			class="input-check filter-rating__item-input"><span
																				class="input-check__body"><input class="input-check__input" type="checkbox">
																				<span class="input-check__box"></span> <span class="input-check__icon"><svg
																						width="9px" height="7px">
																						<path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
																					</svg> </span></span></span><span class="filter-rating__item-stars">
																			<div class="rating">
																				<div class="rating__body">
																					<div class="rating__star rating__star--active"></div>
																					<div class="rating__star"></div>
																					<div class="rating__star"></div>
																					<div class="rating__star"></div>
																					<div class="rating__star"></div>
																				</div>
																			</div>
																		</span><span class="filter-rating__item-title sr-only">1 star </span><span
																			class="filter-rating__item-counter">12</span></label></li>
															</ul>
														</div>
													</div>
												</div>
<<<<<<< HEAD
											</li>
											<li data-mobile-menu-item><a href="shop-list.html" class="" data-mobile-menu-trigger>Shop List</a>
											</li>
											<li data-mobile-menu-item><a href="shop-table.html" class="" data-mobile-menu-trigger>Shop
													Table</a></li>
											<li data-mobile-menu-item><a href="shop-right-sidebar.html" class="" data-mobile-menu-trigger>Shop
													Right Sidebar</a></li>
											<li data-mobile-menu-item><a href="product-full.html" class="" data-mobile-menu-trigger>Product
													<svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Product</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="product-full.html" class=""
																		data-mobile-menu-trigger>Full Width</a></li>
																<li data-mobile-menu-item><a href="product-sidebar.html" class=""
																		data-mobile-menu-trigger>Left Sidebar</a></li>
															</ul>
=======
											</div>
										</div>
										<div class="widget-filters__item">
											<div class="filter filter--opened" data-collapse-item><button type="button" class="filter__title"
													data-collapse-trigger>Color <span class="filter__arrow"><svg width="12px" height="7px">
															<path
																d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
														</svg></span></button>
												<div class="filter__body" data-collapse-content>
													<div class="filter__container">
														<div class="filter-color">
															<div class="filter-color__list"><label class="filter-color__item"><span
																		class="filter-color__check input-check-color input-check-color--white"
																		style="color: #fff;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span
																		class="filter-color__check input-check-color input-check-color--light"
																		style="color: #d9d9d9;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #b3b3b3;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #808080;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #666;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #4d4d4d;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #262626;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #ff4040;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox" checked="checked"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #ff8126;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span
																		class="filter-color__check input-check-color input-check-color--light"
																		style="color: #ffd440;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span
																		class="filter-color__check input-check-color input-check-color--light"
																		style="color: #becc1f;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #8fcc14;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox" checked="checked"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #47cc5e;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #47cca0;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #47cccc;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #40bfff;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox" disabled="disabled"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #3d6dcc;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox" checked="checked"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #7766cc;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #b852cc;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label> <label
																	class="filter-color__item"><span class="filter-color__check input-check-color"
																		style="color: #e53981;"><label class="input-check-color__body"><input
																				class="input-check-color__input" type="checkbox"> <span
																				class="input-check-color__box"></span> <span
																				class="input-check-color__icon"><svg width="12px" height="9px">
																					<path
																						d="M12.002,1.396 L4.461,9.002 L-0.002,4.498 L1.383,3.096 L4.461,6.203 L10.617,-0.006 L12.002,1.396 Z" />
																				</svg></span><span
																				class="input-check-color__stick"></span></label></span></label></div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button>
										<button class="btn btn-secondary btn-sm">Reset</button></div>
								</div>
<<<<<<< HEAD
							</div>
						</li>
						<li data-mobile-menu-item><a href="blog-classic-right-sidebar.html" class="" data-mobile-menu-trigger>Blog
								<svg width="7" height="11">
									<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
							<div class="mobile-menu__links-panel" data-mobile-menu-panel>
								<div class="mobile-menu__panel mobile-menu__panel--hidden">
									<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg
												width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></button>
										<div class="mobile-menu__panel-title">Blog</div>
									</div>
									<div class="mobile-menu__panel-body">
										<ul class="mobile-menu__links">
											<li data-mobile-menu-item><a href="blog-classic-right-sidebar.html" class=""
													data-mobile-menu-trigger>Blog Classic <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Blog Classic</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="blog-classic-left-sidebar.html" class=""
																		data-mobile-menu-trigger>Left Sidebar</a></li>
																<li data-mobile-menu-item><a href="blog-classic-right-sidebar.html" class=""
																		data-mobile-menu-trigger>Right Sidebar</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li data-mobile-menu-item><a href="blog-list-right-sidebar.html" class=""
													data-mobile-menu-trigger>Blog List <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Blog List</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="blog-list-left-sidebar.html" class=""
																		data-mobile-menu-trigger>Left Sidebar</a></li>
																<li data-mobile-menu-item><a href="blog-list-right-sidebar.html" class=""
																		data-mobile-menu-trigger>Right Sidebar</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li data-mobile-menu-item><a href="blog-grid-right-sidebar.html" class=""
													data-mobile-menu-trigger>Blog Grid <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Blog Grid</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="blog-grid-left-sidebar.html" class=""
																		data-mobile-menu-trigger>Left Sidebar</a></li>
																<li data-mobile-menu-item><a href="blog-grid-right-sidebar.html" class=""
																		data-mobile-menu-trigger>Right Sidebar</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li data-mobile-menu-item><a href="post-full-width.html" class="" data-mobile-menu-trigger>Post
													Page <svg width="7" height="11">
														<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
												<div class="mobile-menu__links-panel" data-mobile-menu-panel>
													<div class="mobile-menu__panel mobile-menu__panel--hidden">
														<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
																type="button"><svg width="7" height="11">
																	<path
																		d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
																</svg></button>
															<div class="mobile-menu__panel-title">Post Page</div>
														</div>
														<div class="mobile-menu__panel-body">
															<ul class="mobile-menu__links">
																<li data-mobile-menu-item><a href="post-full-width.html" class=""
																		data-mobile-menu-trigger>Full Width</a></li>
																<li data-mobile-menu-item><a href="post-left-sidebar.html" class=""
																		data-mobile-menu-trigger>Left Sidebar</a></li>
																<li data-mobile-menu-item><a href="post-right-sidebar.html" class=""
																		data-mobile-menu-trigger>Right Sidebar</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li data-mobile-menu-item><a href="post-without-image.html" class="" data-mobile-menu-trigger>Post
													Without Image</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li data-mobile-menu-item><a href="account-login.html" class="" data-mobile-menu-trigger>Account <svg
									width="7" height="11">
									<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
							<div class="mobile-menu__links-panel" data-mobile-menu-panel>
								<div class="mobile-menu__panel mobile-menu__panel--hidden">
									<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg
												width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></button>
										<div class="mobile-menu__panel-title">Account</div>
									</div>
									<div class="mobile-menu__panel-body">
										<ul class="mobile-menu__links">
											<li data-mobile-menu-item><a href="account-login.html" class="" data-mobile-menu-trigger>Login &
													Register</a></li>
											<li data-mobile-menu-item><a href="account-dashboard.html" class=""
													data-mobile-menu-trigger>Dashboard</a></li>
											<li data-mobile-menu-item><a href="account-garage.html" class=""
													data-mobile-menu-trigger>Garage</a></li>
											<li data-mobile-menu-item><a href="account-profile.html" class="" data-mobile-menu-trigger>Edit
													Profile</a></li>
											<li data-mobile-menu-item><a href="account-orders.html" class="" data-mobile-menu-trigger>Order
													History</a></li>
											<li data-mobile-menu-item><a href="account-addresses.html" class=""
													data-mobile-menu-trigger>Address Book</a></li>
											<li data-mobile-menu-item><a href="account-password.html" class="" data-mobile-menu-trigger>Change
													Password</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li data-mobile-menu-item><a href="about-us.html" class="" data-mobile-menu-trigger>Pages <svg width="7"
									height="11">
									<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
							<div class="mobile-menu__links-panel" data-mobile-menu-panel>
								<div class="mobile-menu__panel mobile-menu__panel--hidden">
									<div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back" type="button"><svg
												width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></button>
										<div class="mobile-menu__panel-title">Pages</div>
									</div>
									<div class="mobile-menu__panel-body">
										<ul class="mobile-menu__links">
											<li data-mobile-menu-item><a href="about-us.html" class="" data-mobile-menu-trigger>About Us</a>
											</li>
											<li data-mobile-menu-item><a href="contact-us-v1.html" class="" data-mobile-menu-trigger>Contact
													Us v1</a></li>
											<li data-mobile-menu-item><a href="contact-us-v2.html" class="" data-mobile-menu-trigger>Contact
													Us v2</a></li>
											<li data-mobile-menu-item><a href="404.html" class="" data-mobile-menu-trigger>404</a></li>
											<li data-mobile-menu-item><a href="terms.html" class="" data-mobile-menu-trigger>Terms And
													Conditions</a></li>
											<li data-mobile-menu-item><a href="faq.html" class="" data-mobile-menu-trigger>FAQ</a></li>
											<li data-mobile-menu-item><a href="components.html" class=""
													data-mobile-menu-trigger>Components</a></li>
											<li data-mobile-menu-item><a href="typography.html" class=""
													data-mobile-menu-trigger>Typography</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li data-mobile-menu-item><a href="https://themeforest.net/item/redparts-auto-parts-html-template/24735474"
								class="highlight" target="_blank" rel="noopener" data-mobile-menu-trigger>Buy Theme</a></li>
					</ul>
					<div class="mobile-menu__spring"></div>
					<div class="mobile-menu__divider"></div><a class="mobile-menu__contacts" href="#">
						<div class="mobile-menu__contacts-subtitle">Free call 24/7</div>
						<div class="mobile-menu__contacts-title">800 060-0730</div>
					</a>
				</div>
			</div>
		</div>
	</div><!-- mobile-menu / end -->
	<!-- quickview-modal -->
	<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"></div>
	<!-- quickview-modal / end -->
	<!-- add-vehicle-modal -->
	<div id="add-vehicle-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
			<div class="modal-content"><button type="button" class="vehicle-picker-modal__close"><svg width="12" height="12">
						<path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button>
				<div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active">
					<div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
					<div class="vehicle-form vehicle-form--layout--modal">
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Year">
								<option value="none">Select Year</option>
								<option>2010</option>
								<option>2011</option>
								<option>2012</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
							</select></div>
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Brand" disabled="disabled">
								<option value="none">Select Brand</option>
								<option>Audi</option>
								<option>BMW</option>
								<option>Ferrari</option>
								<option>Ford</option>
								<option>KIA</option>
								<option>Nissan</option>
								<option>Tesla</option>
								<option>Toyota</option>
							</select></div>
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Model" disabled="disabled">
								<option value="none">Select Model</option>
								<option>Explorer</option>
								<option>Focus S</option>
								<option>Fusion SE</option>
								<option>Mustang</option>
							</select></div>
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Engine" disabled="disabled">
								<option value="none">Select Engine</option>
								<option>Gas 1.6L 125 hp AT/L4</option>
								<option>Diesel 2.5L 200 hp AT/L5</option>
								<option>Diesel 3.0L 250 hp MT/L5</option>
							</select></div>
						<div class="vehicle-form__divider">Or</div>
						<div class="vehicle-form__item"><input type="text" class="form-control" placeholder="Enter VIN number"
								aria-label="VIN number"></div>
					</div>
					<div class="vehicle-picker-modal__actions"><button type="button"
							class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel</button> <button type="button"
							class="btn btn-sm btn-primary">Add A Vehicle</button></div>
				</div>
			</div>
		</div>
	</div><!-- add-vehicle-modal / end -->
	<!-- vehicle-picker-modal -->
	<div id="vehicle-picker-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
			<div class="modal-content"><button type="button" class="vehicle-picker-modal__close"><svg width="12" height="12">
						<path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button>
				<div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active" data-panel="list">
					<div class="vehicle-picker-modal__title card-title">Select Vehicle</div>
					<div class="vehicle-picker-modal__text">Select a vehicle to find exact fit parts</div>
					<div class="vehicles-list">
						<div class="vehicles-list__body"><label class="vehicles-list__item"><span
									class="vehicles-list__item-radio input-radio"><span class="input-radio__body"><input
											class="input-radio__input" name="header-vehicle" type="radio"> <span
											class="input-radio__circle"></span> </span></span><span class="vehicles-list__item-info"><span
										class="vehicles-list__item-name">2011 Ford Focus S</span> <span
										class="vehicles-list__item-details">Engine 2.0L 1742DA L4 FI Turbo</span> </span><button
									type="button" class="vehicles-list__item-remove"><svg width="16" height="16">
										<path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
									</svg></button></label> <label class="vehicles-list__item"><span
									class="vehicles-list__item-radio input-radio"><span class="input-radio__body"><input
											class="input-radio__input" name="header-vehicle" type="radio"> <span
											class="input-radio__circle"></span> </span></span><span class="vehicles-list__item-info"><span
										class="vehicles-list__item-name">2019 Audi Q7 Premium</span> <span
										class="vehicles-list__item-details">Engine 3.0L 5626CC L6 QK</span> </span><button type="button"
									class="vehicles-list__item-remove"><svg width="16" height="16">
										<path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
									</svg></button></label></div>
					</div>
					<div class="vehicle-picker-modal__actions"><button type="button"
							class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel</button> <button type="button"
							class="btn btn-sm btn-primary" data-to-panel="form">Add A Vehicle</button></div>
				</div>
				<div class="vehicle-picker-modal__panel" data-panel="form">
					<div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
					<div class="vehicle-form vehicle-form--layout--modal">
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Year">
								<option value="none">Select Year</option>
								<option>2010</option>
								<option>2011</option>
								<option>2012</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
							</select></div>
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Brand" disabled="disabled">
								<option value="none">Select Brand</option>
								<option>Audi</option>
								<option>BMW</option>
								<option>Ferrari</option>
								<option>Ford</option>
								<option>KIA</option>
								<option>Nissan</option>
								<option>Tesla</option>
								<option>Toyota</option>
							</select></div>
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Model" disabled="disabled">
								<option value="none">Select Model</option>
								<option>Explorer</option>
								<option>Focus S</option>
								<option>Fusion SE</option>
								<option>Mustang</option>
							</select></div>
						<div class="vehicle-form__item vehicle-form__item--select"><select class="form-control form-control-select2"
								aria-label="Engine" disabled="disabled">
								<option value="none">Select Engine</option>
								<option>Gas 1.6L 125 hp AT/L4</option>
								<option>Diesel 2.5L 200 hp AT/L5</option>
								<option>Diesel 3.0L 250 hp MT/L5</option>
							</select></div>
						<div class="vehicle-form__divider">Or</div>
						<div class="vehicle-form__item"><input type="text" class="form-control" placeholder="Enter VIN number"
								aria-label="VIN number"></div>
					</div>
					<div class="vehicle-picker-modal__actions"><button type="button" class="btn btn-sm btn-secondary"
							data-to-panel="list">Back to list</button> <button type="button" class="btn btn-sm btn-primary">Add A
							Vehicle</button></div>
				</div>
			</div>
		</div>
	</div><!-- vehicle-picker-modal / end -->
	<!-- photoswipe -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="pswp__bg"></div>
		<div class="pswp__scroll-wrap">
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>
			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
						title="Close (Esc)"></button>
					<!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>--> <button
						class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button
						class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
=======
								<div class="card widget widget-products d-none d-lg-block">
									<div class="widget__header">
										<h4>Latest Products</h4>
									</div>
									<div class="widget-products__list">
										<div class="widget-products__item">
											<div class="widget-products__image"><a href="product-full.html"><img
														src="images/products/product-1-64x64.jpg" alt=""></a></div>
											<div class="widget-products__info">
												<div class="widget-products__name"><a href="product-full.html">Brandix Spark Plug Kit
														ASR-400</a></div>
												<div class="widget-products__prices">
													<div class="widget-products__price widget-products__price--current">$19.00</div>
												</div>
											</div>
										</div>
										<div class="widget-products__item">
											<div class="widget-products__image"><a href="product-full.html"><img
														src="images/products/product-2-64x64.jpg" alt=""></a></div>
											<div class="widget-products__info">
												<div class="widget-products__name"><a href="product-full.html">Brandix Brake Kit
														BDX-750Z370-S</a></div>
												<div class="widget-products__prices">
													<div class="widget-products__price widget-products__price--current">$224.00</div>
												</div>
											</div>
										</div>
										<div class="widget-products__item">
											<div class="widget-products__image"><a href="product-full.html"><img
														src="images/products/product-3-64x64.jpg" alt=""></a></div>
											<div class="widget-products__info">
												<div class="widget-products__name"><a href="product-full.html">Left Headlight Of Brandix
														Z54</a></div>
												<div class="widget-products__prices">
													<div class="widget-products__price widget-products__price--new">$349.00</div>
													<div class="widget-products__price widget-products__price--old">$415.00</div>
												</div>
											</div>
										</div>
										<div class="widget-products__item">
											<div class="widget-products__image"><a href="product-full.html"><img
														src="images/products/product-4-64x64.jpg" alt=""></a></div>
											<div class="widget-products__info">
												<div class="widget-products__name"><a href="product-full.html">Glossy Gray 19" Aluminium
														Wheel AR-19</a></div>
												<div class="widget-products__prices">
													<div class="widget-products__price widget-products__price--current">$589.00</div>
												</div>
											</div>
										</div>
										<div class="widget-products__item">
											<div class="widget-products__image"><a href="product-full.html"><img
														src="images/products/product-5-64x64.jpg" alt=""></a></div>
											<div class="widget-products__info">
												<div class="widget-products__name"><a href="product-full.html">Twin Exhaust Pipe From
														Brandix Z54</a></div>
												<div class="widget-products__prices">
													<div class="widget-products__price widget-products__price--current">$749.00</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
>>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
						</div>
					</div>
				</div>
			</div>
			<div class="block-space block-space--layout--before-footer"></div>
		</div>
	</div>
	@stop
