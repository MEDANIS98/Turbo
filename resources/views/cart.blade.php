@extends('layouts.app')
@section('title','Cart')
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
				<h1 class="block-header__title">Shopping Cart</h1>
			</div>
		</div>
	</div>
	<div class="block">
		<div class="container">
			<div class="cart">
				<div class="cart__table cart-table">
					<table class="cart-table__table">
						<thead class="cart-table__head">
							<tr class="cart-table__row">
								<th class="cart-table__column cart-table__column--image">Image</th>
								<th class="cart-table__column cart-table__column--product">Product</th>
								<th class="cart-table__column cart-table__column--price">Price</th>
								<th class="cart-table__column cart-table__column--quantity">Quantity</th>
								<th class="cart-table__column cart-table__column--total">Total</th>
								<th class="cart-table__column cart-table__column--remove"></th>
							</tr>
						</thead>
						<tbody class="cart-table__body">
							<tr class="cart-table__row">
								<td class="cart-table__column cart-table__column--image"><a href="#"><img
											src="images/products/product-4-160x160.jpg" alt=""></a></td>
								<td class="cart-table__column cart-table__column--product"><a href="#"
										class="cart-table__product-name">Glossy Gray 19" Aluminium Wheel AR-19</a>
									<ul class="cart-table__options">
										<li>Color: Yellow</li>
										<li>Material: Aluminium</li>
									</ul>
								</td>
								<td class="cart-table__column cart-table__column--price" data-title="Price">$699.00</td>
								<td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
									<div class="cart-table__quantity input-number"><input class="form-control input-number__input"
											type="number" min="1" value="2">
										<div class="input-number__add"></div>
										<div class="input-number__sub"></div>
									</div>
								</td>
								<td class="cart-table__column cart-table__column--total" data-title="Total">$1398.00</td>
								<td class="cart-table__column cart-table__column--remove"><button type="button"
										class="cart-table__remove btn btn-sm btn-icon btn-muted"><svg width="12" height="12">
											<path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button></td>
							</tr>
							<tr class="cart-table__row">
								<td class="cart-table__column cart-table__column--image"><a href="#"><img
											src="images/products/product-2-160x160.jpg" alt=""></a></td>
								<td class="cart-table__column cart-table__column--product"><a href="#"
										class="cart-table__product-name">Brandix Brake Kit BDX-750Z370-S</a></td>
								<td class="cart-table__column cart-table__column--price" data-title="Price">$849.00</td>
								<td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
									<div class="cart-table__quantity input-number"><input class="form-control input-number__input"
											type="number" min="1" value="1">
										<div class="input-number__add"></div>
										<div class="input-number__sub"></div>
									</div>
								</td>
								<td class="cart-table__column cart-table__column--total" data-title="Total">$849.00</td>
								<td class="cart-table__column cart-table__column--remove"><button type="button"
										class="cart-table__remove btn btn-sm btn-icon btn-muted"><svg width="12" height="12">
											<path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button></td>
							</tr>
							<tr class="cart-table__row">
								<td class="cart-table__column cart-table__column--image"><a href="#"><img
											src="images/products/product-5-160x160.jpg" alt=""></a></td>
								<td class="cart-table__column cart-table__column--product"><a href="#"
										class="cart-table__product-name">Twin Exhaust Pipe From Brandix Z54</a>
									<ul class="cart-table__options">
										<li>Color: True Red</li>
									</ul>
								</td>
								<td class="cart-table__column cart-table__column--price" data-title="Price">$1210.00</td>
								<td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
									<div class="cart-table__quantity input-number"><input class="form-control input-number__input"
											type="number" min="1" value="3">
										<div class="input-number__add"></div>
										<div class="input-number__sub"></div>
									</div>
								</td>
								<td class="cart-table__column cart-table__column--total" data-title="Total">$3630.00</td>
								<td class="cart-table__column cart-table__column--remove"><button type="button"
										class="cart-table__remove btn btn-sm btn-icon btn-muted"><svg width="12" height="12">
											<path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button></td>
							</tr>
						</tbody>
						<tfoot class="cart-table__foot">
							<tr>
								<td colspan="6">
									<div class="cart-table__actions">
										<form class="cart-table__coupon-form form-row">
											<div class="form-group mb-0 col flex-grow-1"><input type="text"
													class="form-control form-control-sm" placeholder="Coupon Code"></div>
											<div class="form-group mb-0 col-auto"><button type="button" class="btn btn-sm btn-primary">Apply
													Coupon</button></div>
										</form>
										<div class="cart-table__update-button"><a class="btn btn-sm btn-primary" href="#">Update
												Cart</a></div>
									</div>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="cart__totals">
					<div class="card">
						<div class="card-body card-body--padding--2">
							<h3 class="card-title">Cart Totals</h3>
							<table class="cart__totals-table">
								<thead>
									<tr>
										<th>Subtotal</th>
										<td>$5,877.00</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Shipping</th>
										<td>$25.00<div><a href="#">Calculate shipping</a></div>
										</td>
									</tr>
									<tr>
										<th>Tax</th>
										<td>$0.00</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Total</th>
										<td>$5,902.00</td>
									</tr>
								</tfoot>
							</table><a class="btn btn-primary btn-xl btn-block" href="#">Proceed to checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="block-space block-space--layout--before-footer"></div>
	@stop
