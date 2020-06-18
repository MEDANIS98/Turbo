<!-- mobile-menu -->
<div class="mobile-menu">
	<div class="mobile-menu__backdrop"></div>
	<div class="mobile-menu__body">
		<button class="mobile-menu__close" type="button">
			@include('svg.mobile.close_x')
		</button>
		<div class="mobile-menu__panel">
			<div class="mobile-menu__panel-header">
				<div class="mobile-menu__panel-title">Menu</div>
			</div>
			<div class="mobile-menu__panel-body">
				<div class="mobile-menu__settings-list">
					<div class="mobile-menu__setting" data-mobile-menu-item>
						<button class="mobile-menu__setting-button" title="Language" data-mobile-menu-trigger>
							<span class="mobile-menu__setting-icon">
								<img src="/images/languages/fr.png" alt="Français">
							</span>
							<span class="mobile-menu__setting-title">Français
							</span>
							<span class="mobile-menu__setting-arrow">
								@include('svg.mobile.arrow_right')
							</span>
						</button>
						<div class="mobile-menu__setting-panel" data-mobile-menu-panel>
							<div class="mobile-menu__panel mobile-menu__panel--hidden">
								<div class="mobile-menu__panel-header">
									<button class="mobile-menu__panel-back" type="button">
										@include('svg.mobile.arrow_left')
									</button>
									<div class="mobile-menu__panel-title">@lang('Language')</div>
								</div>
								<div class="mobile-menu__panel-body">
									<ul class="mobile-menu__links">
										<li data-mobile-menu-item>
											<button type="button" class="" data-mobile-menu-trigger>
												<div class="mobile-menu__links-image">
													<img src="/images/languages/en.png" alt="">
												</div>
												English
											</button>
										</li>
										<li data-mobile-menu-item>
											<button type="button" class="" data-mobile-menu-trigger>
												<div class="mobile-menu__links-image">
													<img src="/images/languages/fr.png" alt="">
												</div>
												Français
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="mobile-menu__divider"></div>
				<div class="mobile-menu__indicators">
					<a class="mobile-menu__indicator" href="/wishlist">
						<span class="mobile-menu__indicator-icon">
							@include('svg.mobile.heart')
						</span>
						<span class="mobile-menu__indicator-title">@lang('Wishlist')
						</span>
					</a>
					<a class="mobile-menu__indicator" href="/dashboard">
						<span class="mobile-menu__indicator-icon">
							@include('svg.mobile.avatar ')
						</span>
						<span class="mobile-menu__indicator-title">@lang('Account')
						</span>
					</a>
					<a class="mobile-menu__indicator" href="/cart">
						<span class="mobile-menu__indicator-icon">
							@include('svg.mobile.shop_circle')
							<span class="mobile-menu__indicator-counter">3
							</span>
						</span>
						<span class="mobile-menu__indicator-title">@lang('Cart')
						</span>
					</a>
					<a class="mobile-menu__indicator" href="/garage">
						<span class="mobile-menu__indicator-icon">
							@include('svg.mobile.car')
						</span>
						<span class="mobile-menu__indicator-title">@lang('Garage')
						</span>
					</a>
				</div>
				<div class="mobile-menu__divider"></div>
				<ul class="mobile-menu__links">
					<li data-mobile-menu-item>
						<a href="/" class="" data-mobile-menu-trigger>Home
						</a>

					</li>
					<li data-mobile-menu-item><a href="/shop-grid-4-columns-sidebar" class=""
							data-mobile-menu-trigger>@lang('Shop')
							<svg width="7" height="11">
								<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
						<div class="mobile-menu__links-panel" data-mobile-menu-panel>
							<div class="mobile-menu__panel mobile-menu__panel--hidden">
								<div class="mobile-menu__panel-header">
									<button class="mobile-menu__panel-back" type="button">
										<svg width="7" height="11">
											<path
												d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
										</svg>
									</button>
									<div class="mobile-menu__panel-title">@lang('Shop')</div>
								</div>
								<div class="mobile-menu__panel-body">
									<ul class="mobile-menu__links">
										<li data-mobile-menu-item><a href="category.html" class=""
												data-mobile-menu-trigger>Category
												<svg width="7" height="11">
													<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
													 C-0.1,9.8-0.1,10.4,0.3,10.7z" />
												</svg>
											</a>
											<div class="mobile-menu__links-panel" data-mobile-menu-panel>
												<div class="mobile-menu__panel mobile-menu__panel--hidden">
													<div class="mobile-menu__panel-header">
														<button class="mobile-menu__panel-back" type="button">
															<svg width="7" height="11">
																<path
																	d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
															</svg>
														</button>
														<div class="mobile-menu__panel-title">Category</div>
													</div>
													<div class="mobile-menu__panel-body">
														<ul class="mobile-menu__links"></ul>
													</div>
												</div>
											</div>
										</li>
										<li data-mobile-menu-item>
											<a href="/shop-grid-4-columns-sidebar" class=""
												data-mobile-menu-trigger>Shop Grid
												<svg width="7" height="11">
													<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
											<div class="mobile-menu__links-panel" data-mobile-menu-panel>
												<div class="mobile-menu__panel mobile-menu__panel--hidden">
													<div class="mobile-menu__panel-header">
														<button class="mobile-menu__panel-back" type="button">
															<svg width="7" height="11">
																<path
																	d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
															</svg>
														</button>
														<div class="mobile-menu__panel-title">Shop Grid</div>
													</div>
													<div class="mobile-menu__panel-body">
														<ul class="mobile-menu__links">
															<li data-mobile-menu-item><a
																	href="/shop-grid-6-columns-full" class=""
																	data-mobile-menu-trigger>6 Columns Full</a></li>
															<li data-mobile-menu-item><a
																	href="/shop-grid-5-columns-full" class=""
																	data-mobile-menu-trigger>5 Columns Full</a></li>
															<li data-mobile-menu-item><a
																	href="/shop-grid-4-columns-full" class=""
																	data-mobile-menu-trigger>4 Columns Full</a></li>
															<li data-mobile-menu-item><a
																	href="/shop-grid-4-columns-sidebar" class=""
																	data-mobile-menu-trigger>4 Columns Sidebar</a>
															</li>
															<li data-mobile-menu-item><a
																	href="/shop-grid-3-columns-sidebar" class=""
																	data-mobile-menu-trigger>3 Columns Sidebar</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li data-mobile-menu-item><a href="/shop-list" class=""
												data-mobile-menu-trigger>Shop List</a>
										</li>
										<li data-mobile-menu-item><a href="/shop-table" class=""
												data-mobile-menu-trigger>Shop
												Table</a></li>
										<li data-mobile-menu-item><a href="/shop-right-sidebar" class=""
												data-mobile-menu-trigger>Shop
												Right Sidebar</a></li>
										<li data-mobile-menu-item><a href="product-full.html" class=""
												data-mobile-menu-trigger>Product
												<svg width="7" height="11">
													<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
											<div class="mobile-menu__links-panel" data-mobile-menu-panel>
												<div class="mobile-menu__panel mobile-menu__panel--hidden">
													<div class="mobile-menu__panel-header">
														<button class="mobile-menu__panel-back" type="button">
															<svg width="7" height="11">
																<path
																	d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
															</svg>
														</button>
														<div class="mobile-menu__panel-title">Product</div>
													</div>
													<div class="mobile-menu__panel-body">
														<ul class="mobile-menu__links">
															<li data-mobile-menu-item>
																<a href="product-full.html" class=""
																	data-mobile-menu-trigger>Full Width</a>
															</li>
															<li data-mobile-menu-item>
																<a href="product-sidebar.html" class=""
																	data-mobile-menu-trigger>Left
																	Sidebar
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li data-mobile-menu-item>
											<a href="/cart" class="" data-mobile-menu-trigger>@lang('Cart')
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/checkout" class="" data-mobile-menu-trigger>@lang('Checkout')
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/wishlist" class="" data-mobile-menu-trigger>@lang('Wishlist')
											</a>
										</li>
										<li data-mobile-menu-item><a href="/compare" class=""
												data-mobile-menu-trigger>@lang('Compare')
											</a>
										</li>
										{{-- <li data-mobile-menu-item>
											<a href="/track-order" class="" data-mobile-menu-trigger>
												@lang('Track Order')
											</a>
										</li> --}}
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li data-mobile-menu-item>
						<a href="/login" class="" data-mobile-menu-trigger>@lang('Account')
							<svg width="7" height="11">
								<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
							</svg>
						</a>
						<div class="mobile-menu__links-panel" data-mobile-menu-panel>
							<div class="mobile-menu__panel mobile-menu__panel--hidden">
								<div class="mobile-menu__panel-header">
									<button class="mobile-menu__panel-back" type="button">
										<svg width="7" height="11">
											<path
												d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
										</svg>
									</button>
									<div class="mobile-menu__panel-title">@lang('Account')</div>
								</div>
								<div class="mobile-menu__panel-body">
									<ul class="mobile-menu__links">
										<li data-mobile-menu-item>
											<a href="/login" class="" data-mobile-menu-trigger>@lang('Login &
												Register')
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/dashboard" class="" data-mobile-menu-trigger>@lang('Dashboard')
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/garage" class="" data-mobile-menu-trigger>Garage
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/account-profile" class="" data-mobile-menu-trigger>@lang('Edit
												Profile')
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/account-orders" class="" data-mobile-menu-trigger>@lang('Order')
												History
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/account-addresses" class="" data-mobile-menu-trigger>Address Book
											</a>
										</li>
										<li data-mobile-menu-item>
											<a href="/account-password" class="" data-mobile-menu-trigger>@lang('Change
												Password')
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="mobile-menu__spring"></div>
				<div class="mobile-menu__divider"></div>
				<a class="mobile-menu__contacts" href="tel:@option('header.phone')">
					<div class="mobile-menu__contacts-subtitle">@lang('Call 24/7')</div>
					<div class="mobile-menu__contacts-title">
						@option('header.phone')
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- mobile-menu / end -->
