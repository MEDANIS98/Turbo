<div class="header__navbar">
	<div class="header__navbar-departments">
		<div class="departments">
			<button class="departments__button" type="button">
				<span class="departments__button-icon">
					@include('svg.sidebar')
				</span>
				<span class="departments__button-title">
					@lang('Menu')
				</span>
				<span class="departments__button-arrow">
					@include('svg.button_arrow')
				</span>
			</button>
			<div class="departments__menu">
				<div class="departments__arrow"></div>
				<div class="departments__body">
					<ul class="departments__list">
						<li class="departments__list-padding" role="presentation"></li>
						@foreach ($categories as $category)
							<li class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
								<a href="#" class="departments__item-link">
									{{ $category->name }}
									<span class="departments__item-arrow">
										@include('svg.arrow_right')
									</span>
								</a>
								<div class="departments__item-menu">
									<div class="megamenu departments__megamenu departments__megamenu--size--{{ $category->megaMenuSize }}">
										<div class="megamenu__image" style="background-image: url('{{ secure_asset('storage/'.$category->image) }}')">
										</div>
										<div class="row">
											@foreach ($category->fertileSubCategories as $sub_category)
											<div class="col-1of{{ round($category->fertileSubCategories->count() / 2) }}">
												<ul class="megamenu__links megamenu-links megamenu-links--root">
													<li class="megamenu-links__item megamenu-links__item--has-submenu">
														<a class="megamenu-links__item-link" href="#">
															{{ $sub_category->name }}
														</a>
														<ul class="megamenu-links">
															@foreach ($sub_category->types as $type)
															<li class="megamenu-links__item">
																<a class="megamenu-links__item-link" href="#">
																	{{ $type->name }}
																</a>
															</li>
															@endforeach
														</ul>
													</li>
												</ul>
											</div>
											@endforeach
											@foreach ($category->infertileSubCategories->chunk(5) as $chunk)
												<div class="col-1of3">
													<ul class="megamenu__links megamenu-links megamenu-links--root">
													@foreach ($chunk as $sub_category)
														<li class="megamenu-links__item">
															<a class="megamenu-links__item-link" href="#">
																{{ $sub_category->name }}
															</a>
														</li>
													@endforeach
													</ul>
												</div>
											@endforeach
										</div>
									</div>
								</div>
							</li>
						@endforeach
						@foreach ($infertile_categories as $category)
							<li class="departments__item">
								<a href="#" class="departments__item-link">
									{{ $category->name }}
								</a>
							</li>
						@endforeach
						<li class="departments__list-padding" role="presentation"></li>
					</ul>
					<div class="departments__menu-container"></div>
				</div>
			</div>
		</div>
	</div>
	{{-- Left navigation start --}}
	<div class="header__navbar-menu">
		<div class="main-menu">
			<ul class="main-menu__list">
				{{-- Home button --}}
				<li class="main-menu__item">
					<a href="/" class="main-menu__link home-menu">@lang('Home')</a>
				</li>
				{{-- Shop button --}}
				<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
					<a href="/shop-grid-4-columns-sidebar" class="main-menu__link">
						@lang('Shop') @include('svg.arrow_down')
					</a>
					<div class="main-menu__submenu">
						<ul class="menu">
							@foreach ($categories as $category)
							<li class="menu__item">
								<a href="/shop-list" class="menu__link">
									{{ $category->name }}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</li>
				{{-- Account button --}}
				<li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
					<a href="@guest /login @else # @endguest" class="main-menu__link">
						@lang('Account') @include('svg.arrow_down')
					</a>
					<div class="main-menu__submenu">
						<ul class="menu">
							@guest
							<li class="menu__item">
								<a href="/login" class="menu__link">
									@lang('Login')
								</a>
							</li>
							<li class="menu__item">
								<a href="/register" class="menu__link">
									@lang('Register')
								</a>
							</li>
							@else
							<li class="menu__item">
								<a href="/dashboard" class="menu__link">
									@lang('Dashboard')
								</a>
							</li>
							<li class="menu__item">
								<a href="/garage" class="menu__link">
									@lang('Garage')
								</a>
							</li>
							<li class="menu__item">
								<a href="/account/profile" class="menu__link">
									@lang('Edit Profile')
								</a>
							</li>
							<li class="menu__item">
								<a href="/account/orders" class="menu__link">
									@lang('Order History')
								</a>
							</li>
							<li class="menu__item">
								<a href="/account/addresses" class="menu__link">
									@lang('Addresses')
								</a>
							</li>
							@endguest
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
