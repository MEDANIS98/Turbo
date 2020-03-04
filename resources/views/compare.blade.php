@extends('layouts.app')
@section('title','Compare')
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
				<h1 class="block-header__title">Compare</h1>
			</div>
		</div>
	</div>
	<div class="block">
		<div class="container">
			<div class="compare card">
				<div class="compare__options-list">
					<div class="compare__option">
						<div class="compare__option-label">Show:</div>
						<div class="compare__option-control">
							<div class="button-toggle">
								<div class="button-toggle__list"><label class="button-toggle__item"><input type="radio"
											class="button-toggle__input" name="compare-filter" checked="checked"> <span
											class="button-toggle__button">All</span></label> <label class="button-toggle__item"><input
											type="radio" class="button-toggle__input" name="compare-filter"> <span
											class="button-toggle__button">Different</span></label></div>
							</div>
						</div>
					</div>
					<div class="compare__option">
						<div class="compare__option-control"><button type="button" class="btn btn-secondary btn-xs">Clear
								list</button></div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="compare__table compare-table">
						<tbody>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Product</th>
								<td class="compare-table__column compare-table__column--product"><a href="#"
										class="compare-table__product">
										<div class="compare-table__product-image"><img src="images/products/product-1-150x150.jpg" alt="">
										</div>
										<div class="compare-table__product-name">Brandix Spark Plug Kit ASR-400</div>
									</a></td>
								<td class="compare-table__column compare-table__column--product"><a href="#"
										class="compare-table__product">
										<div class="compare-table__product-image"><img src="images/products/product-2-150x150.jpg" alt="">
										</div>
										<div class="compare-table__product-name">Brandix Brake Kit BDX-750Z370-S</div>
									</a></td>
								<td class="compare-table__column compare-table__column--product"><a href="#"
										class="compare-table__product">
										<div class="compare-table__product-image"><img src="images/products/product-3-150x150.jpg" alt="">
										</div>
										<div class="compare-table__product-name">Left Headlight Of Brandix Z54</div>
									</a></td>
								<td class="compare-table__column compare-table__column--product"><a href="#"
										class="compare-table__product">
										<div class="compare-table__product-image"><img src="images/products/product-4-150x150.jpg" alt="">
										</div>
										<div class="compare-table__product-name">Glossy Gray 19" Aluminium Wheel AR-19</div>
									</a></td>
								<td class="compare-table__column compare-table__column--product"><a href="#"
										class="compare-table__product">
										<div class="compare-table__product-image"><img src="images/products/product-5-150x150.jpg" alt="">
										</div>
										<div class="compare-table__product-name">Twin Exhaust Pipe From Brandix Z54</div>
									</a></td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Rating</th>
								<td class="compare-table__column compare-table__column--product">
									<div class="compare-table__rating">
										<div class="compare-table__rating-stars">
											<div class="rating">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
										</div>
										<div class="compare-table__rating-title">Based on 3 reviews</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="compare-table__rating">
										<div class="compare-table__rating-stars">
											<div class="rating">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
												</div>
											</div>
										</div>
										<div class="compare-table__rating-title">Based on 22 reviews</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="compare-table__rating">
										<div class="compare-table__rating-stars">
											<div class="rating">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
													<div class="rating__star"></div>
												</div>
											</div>
										</div>
										<div class="compare-table__rating-title">Based on 14 reviews</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="compare-table__rating">
										<div class="compare-table__rating-stars">
											<div class="rating">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
										</div>
										<div class="compare-table__rating-title">Based on 26 reviews</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="compare-table__rating">
										<div class="compare-table__rating-stars">
											<div class="rating">
												<div class="rating__body">
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star rating__star--active"></div>
													<div class="rating__star"></div>
												</div>
											</div>
										</div>
										<div class="compare-table__rating-title">Based on 9 reviews</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Availability</th>
								<td class="compare-table__column compare-table__column--product">
									<div class="status-badge status-badge--style--success status-badge--has-text">
										<div class="status-badge__body">
											<div class="status-badge__text">In Stock</div>
										</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="status-badge status-badge--style--success status-badge--has-text">
										<div class="status-badge__body">
											<div class="status-badge__text">In Stock</div>
										</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="status-badge status-badge--style--success status-badge--has-text">
										<div class="status-badge__body">
											<div class="status-badge__text">In Stock</div>
										</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="status-badge status-badge--style--success status-badge--has-text">
										<div class="status-badge__body">
											<div class="status-badge__text">In Stock</div>
										</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--product">
									<div class="status-badge status-badge--style--success status-badge--has-text">
										<div class="status-badge__body">
											<div class="status-badge__text">In Stock</div>
										</div>
									</div>
								</td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Price</th>
								<td class="compare-table__column compare-table__column--product">$19.00</td>
								<td class="compare-table__column compare-table__column--product">$224.00</td>
								<td class="compare-table__column compare-table__column--product">$349.00</td>
								<td class="compare-table__column compare-table__column--product">$589.00</td>
								<td class="compare-table__column compare-table__column--product">$749.00</td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Add to cart</th>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-primary">Add to cart</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-primary">Add to cart</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-primary">Add to cart</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-primary">Add to cart</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-primary">Add to cart</button></td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">SKU</th>
								<td class="compare-table__column compare-table__column--product">140-10440-B</td>
								<td class="compare-table__column compare-table__column--product">573-23743-C</td>
								<td class="compare-table__column compare-table__column--product">009-50078-Z</td>
								<td class="compare-table__column compare-table__column--product">A43-44328-B</td>
								<td class="compare-table__column compare-table__column--product">729-51203-B</td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Weight</th>
								<td class="compare-table__column compare-table__column--product">0.1 Kg</td>
								<td class="compare-table__column compare-table__column--product">2.3 Kg</td>
								<td class="compare-table__column compare-table__column--product">1.4 Kg</td>
								<td class="compare-table__column compare-table__column--product">5 Kg</td>
								<td class="compare-table__column compare-table__column--product">2 Kg</td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Color</th>
								<td class="compare-table__column compare-table__column--product">Gray</td>
								<td class="compare-table__column compare-table__column--product">Red</td>
								<td class="compare-table__column compare-table__column--product">Black</td>
								<td class="compare-table__column compare-table__column--product">Black</td>
								<td class="compare-table__column compare-table__column--product">Metallic</td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header">Material</th>
								<td class="compare-table__column compare-table__column--product">Thorium</td>
								<td class="compare-table__column compare-table__column--product">Steel</td>
								<td class="compare-table__column compare-table__column--product">Plastic</td>
								<td class="compare-table__column compare-table__column--product">Aluminium</td>
								<td class="compare-table__column compare-table__column--product">Aluminium</td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
							<tr class="compare-table__row">
								<th class="compare-table__column compare-table__column--header"></th>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-secondary">Remove</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-secondary">Remove</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-secondary">Remove</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-secondary">Remove</button></td>
								<td class="compare-table__column compare-table__column--product"><button type="button"
										class="btn btn-sm btn-secondary">Remove</button></td>
								<td class="compare-table__column compare-table__column--fake"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="block-space block-space--layout--before-footer"></div>
	@stop
