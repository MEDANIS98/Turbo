@extends('layouts.app')
@section('title','blog cla left')
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
				<h1 class="block-header__title">Latest News</h1>
			</div>
		</div>
	</div>
	<div class="block blog-view blog-view--layout--classic">
		<div class="container">
			<div class="blog-view__body">
				<div class="blog-view__item blog-view__item-sidebar">
					<div class="card widget widget-search">
						<form action="#" class="widget-search__form"><input class="widget-search__input" type="search"
								placeholder="Blog search..."> <button class="widget-search__button"><svg width="20" height="20">
									<path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
	c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
	c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" /></svg></button>
							<div class="widget-search__field"></div>
						</form>
					</div>
					<div class="card widget widget-about-us">
						<div class="widget__header">
							<h4>About Blog</h4>
						</div>
						<div class="widget-about-us__body">
							<div class="widget-about-us__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
								tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque.
								Quisque id sodales libero.</div>
							<div class="widget-about-us__social-links social-links">
								<ul class="social-links__list">
									<li class="social-links__item social-links__item--rss"><a href="https://themeforest.net/user/kos9"
											target="_blank"><i class="widget-social__icon fas fa-rss"></i></a></li>
									<li class="social-links__item social-links__item--youtube"><a href="https://themeforest.net/user/kos9"
											target="_blank"><i class="widget-social__icon fab fa-youtube"></i></a></li>
									<li class="social-links__item social-links__item--facebook"><a
											href="https://themeforest.net/user/kos9" target="_blank"><i
												class="widget-social__icon fab fa-facebook-f"></i></a></li>
									<li class="social-links__item social-links__item--twitter"><a href="https://themeforest.net/user/kos9"
											target="_blank"><i class="widget-social__icon fab fa-twitter"></i></a></li>
									<li class="social-links__item social-links__item--instagram"><a
											href="https://themeforest.net/user/kos9" target="_blank"><i
												class="widget-social__icon fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card widget widget-categories">
						<div class="widget__header">
							<h4>Categories</h4>
						</div>
						<ul class="widget-categories__list widget-categories__list--root" data-collapse
							data-collapse-opened-class="widget-categories__item--open">
							<li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Latest
									News</a></li>
							<li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Special
									Offers </a><button class="widget-categories__expander" type="button" data-collapse-trigger></button>
								<div class="widget-categories__container" data-collapse-content>
									<ul class="widget-categories__list widget-categories__list--child">
										<li class="widget-categories__item"><a href="#" class="widget-categories__link">Spring Sales</a>
										</li>
										<li class="widget-categories__item"><a href="#" class="widget-categories__link">Summer Sales</a>
										</li>
										<li class="widget-categories__item"><a href="#" class="widget-categories__link">Autumn Sales</a>
										</li>
										<li class="widget-categories__item"><a href="#" class="widget-categories__link">Christmas
												Sales</a></li>
										<li class="widget-categories__item"><a href="#" class="widget-categories__link">Other Sales</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">New
									Arrivals</a></li>
							<li class="widget-categories__item" data-collapse-item><a href="#"
									class="widget-categories__link">Reviews</a></li>
							<li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Wheels
									& Tires</a></li>
							<li class="widget-categories__item" data-collapse-item><a href="#" class="widget-categories__link">Engine
									& Drivetrain</a></li>
							<li class="widget-categories__item" data-collapse-item><a href="#"
									class="widget-categories__link">Transmission</a></li>
							<li class="widget-categories__item" data-collapse-item><a href="#"
									class="widget-categories__link">Performance</a></li>
						</ul>
					</div>
					<div class="card widget widget-posts">
						<div class="widget__header">
							<h4>Latest Posts</h4>
						</div>
						<ul class="widget-posts__list">
							<li class="widget-posts__item">
								<div class="widget-posts__image"><a href="#"><img src="images/posts/post-1-70x70.jpg" alt=""></a>
								</div>
								<div class="widget-posts__info">
									<div class="widget-posts__name"><a href="#">Philosophy That Addresses Topics Such As Goodness</a>
									</div>
									<div class="widget-posts__date">October 19, 2019</div>
								</div>
							</li>
							<li class="widget-posts__item">
								<div class="widget-posts__image"><a href="#"><img src="images/posts/post-2-70x70.jpg" alt=""></a>
								</div>
								<div class="widget-posts__info">
									<div class="widget-posts__name"><a href="#">Logic Is The Study Of Reasoning And Argument Part
											2</a></div>
									<div class="widget-posts__date">September 5, 2019</div>
								</div>
							</li>
							<li class="widget-posts__item">
								<div class="widget-posts__image"><a href="#"><img src="images/posts/post-3-70x70.jpg" alt=""></a>
								</div>
								<div class="widget-posts__info">
									<div class="widget-posts__name"><a href="#">Some Philosophers Specialize In One Or More Historical
											Periods</a></div>
									<div class="widget-posts__date">August 12, 2019</div>
								</div>
							</li>
							<li class="widget-posts__item">
								<div class="widget-posts__image"><a href="#"><img src="images/posts/post-4-70x70.jpg" alt=""></a>
								</div>
								<div class="widget-posts__info">
									<div class="widget-posts__name"><a href="#">A Variety Of Other Academic And Non-Academic
											Approaches Have Been Explored</a></div>
									<div class="widget-posts__date">Jule 30, 2019</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="widget widget-newsletter">
						<div class="widget-newsletter__title">
							<h4>Newsletter</h4>
						</div>
						<div class="widget-newsletter__form">
							<form action="#">
								<div class="widget-newsletter__text">Enter your email address below to subscribe to our newsletter
									and keep up to date with the latest news, discounts and special offers.</div><input type="text"
									class="widget-newsletter__email" placeholder="Email Address..."> <button type="button"
									class="widget-newsletter__button">Subscribe</button>
							</form>
						</div>
					</div>
					<div class="card widget widget-comments">
						<div class="widget__header">
							<h4>Latest Comments</h4>
						</div>
						<div class="widget-comments__body">
							<ul class="widget-comments__list">
								<li class="widget-comments__item">
									<div class="widget-comments__author"><a href="#">Emma Williams</a></div>
									<div class="widget-comments__content">In one general sense, philosophy is associated with wisdom,
										intellectual culture and a search for knowledge...</div>
									<div class="widget-comments__meta">
										<div class="widget-comments__date">3 minutes ago</div>
										<div class="widget-comments__name">On <a href="#"
												title="Nullam at varius sapien sed sit amet condimentum elit">Nullam at varius sapien sed
												sit amet condimentum elit</a></div>
									</div>
								</li>
								<li class="widget-comments__item">
									<div class="widget-comments__author"><a href="#">Airic Ford</a></div>
									<div class="widget-comments__content">In one general sense, philosophy is associated with wisdom,
										intellectual culture and a search for knowledge...</div>
									<div class="widget-comments__meta">
										<div class="widget-comments__date">25 minutes ago</div>
										<div class="widget-comments__name">On <a href="#"
												title="Integer efficitur efficitur velit non pulvinar pellentesque dictum viverra">Integer
												efficitur efficitur velit non pulvinar pellentesque dictum viverra</a></div>
									</div>
								</li>
								<li class="widget-comments__item">
									<div class="widget-comments__author"><a href="#">Loyd Walker</a></div>
									<div class="widget-comments__content">In one general sense, philosophy is associated with wisdom,
										intellectual culture and a search for knowledge...</div>
									<div class="widget-comments__meta">
										<div class="widget-comments__date">2 hours ago</div>
										<div class="widget-comments__name">On <a href="#"
												title="Curabitur quam augue vestibulum in mauris fermentum pellentesque libero">Curabitur
												quam augue vestibulum in mauris fermentum pellentesque libero</a></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="card widget-tags widget">
						<div class="widget__header">
							<h4>Tags Cloud</h4>
						</div>
						<div class="widget-tags__body tags">
							<div class="tags__list"><a href="#">Promotion</a> <a href="#">Power Tool</a> <a href="#">New
									Arrivals</a> <a href="#">Screwdriver</a> <a href="#">Wrench</a> <a href="#">Mounts</a> <a
									href="#">Electrodes</a> <a href="#">Chainsaws</a> <a href="#">Manometers</a> <a href="#">Nails</a>
								<a href="#">Air Guns</a> <a href="#">Cutting Discs</a></div>
						</div>
					</div>
				</div>
				<div class="blog-view__item blog-view__item-posts">
					<div class="block posts-view">
						<div class="posts-view__list posts-list posts-list--layout--classic">
							<div class="posts-list__body">
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-1-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">Special Offers</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">Philosophy That Addresses Topics Such As Goodness</a>
												</h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on October 19, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-2-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">Latest News</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">Logic Is The Study Of Reasoning And Argument Part 2</a>
												</h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on September 5, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-3-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">New Arrivals</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">Some Philosophers Specialize In One Or More Historical
														Periods</a></h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on August 12, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-4-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">Special Offers</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">A Variety Of Other Academic And Non-Academic Approaches
														Have Been Explored</a></h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on Jule 30, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-5-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">New Arrivals</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">Germany Was The First Country To Professionalize
														Philosophy</a></h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on June 12, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-6-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">Special Offers</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">Logic Is The Study Of Reasoning And Argument Part 1</a>
												</h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on May 21, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-7-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">Special Offers</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">Many Inquiries Outside Of Academia Are Philosophical In
														The Broad Sense</a></h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on April 3, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-8-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">Latest News</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">An Advantage Of Digital Circuits When Compared To Analog
														Circuits</a></h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on Mart 29, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-9-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">New Arrivals</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">A Digital Circuit Is Typically Constructed From Small
														Electronic Circuits</a></h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on February 10, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
								<div class="posts-list__item">
									<div class="post-card post-card--layout--grid">
										<div class="post-card__image"><a href="/post-width"><img src="images/posts/post-10-730x485.jpg"
													alt=""></a></div>
										<div class="post-card__content">
											<div class="post-card__category"><a href="/blog-classic-right">Special Offers</a>
											</div>
											<div class="post-card__title">
												<h2><a href="/post-width">Engineers Use Many Methods To Minimize Logic
														Functions</a></h2>
											</div>
											<div class="post-card__date">By <a href="#">Jessica Moore</a> on January 1, 2019</div>
											<div class="post-card__excerpt">
												<div class="typography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
													facilisis neque ut purus fermentum, ac pretium nibh facilisis. Vivamus venenatis viverra
													iaculis. Suspendisse tempor orci non sapien ullamcorper dapibus. Suspendisse at velit
													diam. Donec pharetra nec enim blandit vulputate.</div>
											</div>
											<div class="post-card__more"><a href="/post-width" class="btn btn-secondary btn-sm">Read more</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="posts-view__pagination">
							<ul class="pagination">
								<li class="page-item disabled"><a class="page-link page-link--with-arrow" href="#"
										aria-label="Previous"><span class="page-link__arrow page-link__arrow--left" aria-hidden="true"><svg
												width="7" height="11">
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
											class="page-link__arrow page-link__arrow--right" aria-hidden="true"><svg width="7" height="11">
												<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="block-space block-space--layout--before-footer"></div>
	@stop
