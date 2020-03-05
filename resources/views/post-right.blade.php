@extends('layouts.app')
@section('title','post-right')
@section('content')

<div class="site__body">
	<div class="block post-view">
		<div class="post-view__header post-header post-header--has-image">
			<div class="post-header__image" style="background-image: url('images/posts/post-1-1903x500.jpg');"></div>
			<div class="post-header__body">
				<div class="post-header__categories">
					<ul class="post-header__categories-list">
						<li class="post-header__categories-item"><a href="#" class="post-header__categories-link">Latest
								News</a></li>
					</ul>
				</div>
				<h1 class="post-header__title">Morbi Interdum Velit Quis Magna Placerat Lobortis Eget</h1>
				<div class="post-header__meta">
					<ul class="post-header__meta-list">
						<li class="post-header__meta-item">By <a href="#" class="post-header__meta-link">Jessica Moore</a></li>
						<li class="post-header__meta-item">November 30, 2018</li>
						<li class="post-header__meta-item"><a href="#" class="post-header__meta-link">4 Comments</a></li>
					</ul>
				</div>
			</div>
			<div class="decor post-header__decor decor--type--bottom">
				<div class="decor__body">
					<div class="decor__start"></div>
					<div class="decor__end"></div>
					<div class="decor__center"></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="post-view__body">
				<div class="post-view__item post-view__item-post">
					<div class="post-view__card post">
						<div class="post__body typography">
							<p>Vestibulum sagittis justo sit amet nisl semper, et pulvinar elit maximus. Morbi interdum velit quis
								magna placerat lobortis eget pharetra magna. Nulla tristique sollicitudin turpis, eget maximus risus
								faucibus non. Nulla vestibulum ipsum risus, vitae maximus nunc bibendum quis.</p>
							<p>Raesent eu consequat nibh. Quisque ullamcorper, augue eu fringilla sodales, leo metus volutpat
								risus, at suscipit ipsum diam eget sem. Maecenas dictum elit in enim molestie, vel sollicitudin erat
								ultricies. Sed risus tellus, molestie finibus dui quis, suscipit consequat ex.</p>
							<blockquote>
								<p>Sed a dictum elit. In iaculis porttitor luctus. Maecenas ultricies dolor et semper placerat.
									Proin at lectus felis.</p>
								<p><cite>John Mcarthy</cite></p>
							</blockquote>
							<p>Vivamus in nisi at turpis rhoncus feugiat. Mauris scelerisque non ante et ultrices. Donec sit amet
								sem lobortis, ullamcorper felis at, finibus sem. Curabitur tincidunt neque nunc.</p>
							<h2>Nam Eget Blandit Diam</h2>
							<p>Quisque semper magna eget libero maximus, a sollicitudin nunc hendrerit. Cras efficitur, ante vitae
								fringilla rutrum, mi tortor dapibus metus, in egestas metus erat sit amet orci. Ut faucibus non ante
								dapibus efficitur. Nam eget blandit diam, imperdiet condimentum neque. Donec risus nisi, aliquet a
								commodo ac, elementum vitae leo.</p>
							<p>Vestibulum sagittis justo sit amet nisl semper, et pulvinar elit maximus. Morbi interdum velit quis
								magna placerat lobortis eget pharetra magna.</p>
							<p><strong>Nulla fringilla:</strong> <a href="#">Donec aliquet at felis et dignissim</a></p>
							<figure><a href="#"><img src="images/posts/post-3-664xauto.jpg" alt=""></a>
								<figcaption>Nunc viverra, dui nec commodo dignissim, libero arcu.</figcaption>
							</figure>
							<p>Vestibulum non varius lectus. Cras vel elit id ligula laoreet imperdiet. Mauris quis laoreet velit.
								Suspendisse sed velit nec ante facilisis pharetra.</p>
							<p>Phasellus ut elit vestibulum, dignissim mi non, suscipit ex. Praesent eu consequat nibh. Quisque
								ullamcorper, augue eu fringilla sodales, leo metus volutpat risus, <a href="#">at suscipit ipsum
									diam eget sem</a>. Maecenas dictum elit in enim molestie, vel sollicitudin erat ultricies. Sed
								risus tellus, molestie finibus dui quis, suscipit consequat ex.</p>
							<hr>
							<h2>Nunc Dapibus Varius Ligula</h2>
							<p>Maecenas ultrices arcu ut feugiat semper. Praesent dictum tincidunt justo, ac tincidunt ante
								fermentum at. Vestibulum non varius lectus. Cras vel elit id ligula laoreet imperdiet. Mauris quis
								laoreet velit. Suspendisse sed velit nec ante facilisis pharetra. Duis vitae fermentum elit. Integer
								ac mattis elit.</p>
							<p>Mauris scelerisque non ante et ultrices. Donec sit amet sem lobortis:</p>
							<ol>
								<li>Duis <strong>finibus imperdiet ultricies</strong>. Donec vel pretium turpis. In auctor euismod
									posuere.</li>
								<li>Praesent dictum tincidunt justo, ac tincidunt ante fermentum at. Vestibulum non varius lectus.
									Cras vel elit id ligula laoreet imperdiet.</li>
								<li><strong>In iaculis porttitor luctus</strong>. Maecenas ultricies dolor et semper placerat. Proin
									at lectus felis. Quisque dapibus auctor justo id dictum.</li>
							</ol>
							<p>Ut faucibus non ante dapibus efficitur. Nam eget blandit diam, imperdiet condimentum neque. Donec
								risus nisi, aliquet a commodo ac, elementum vitae leo.</p>
						</div>
						<div class="post__pagination">
							<div class="post__pagination-title">Pages</div>
							<div class="post__pagination-list">
								<ul>
									<li><span class="post__pagination-link post__pagination-link--current">1</span></li>
									<li><a href="#" class="post__pagination-link">2</a></li>
									<li><a href="#" class="post__pagination-link">3</a></li>
								</ul>
							</div>
						</div>
						<div class="post__footer">
							<div class="post__tags tags tags--sm">
								<div class="tags__list"><a href="#">Promotion</a> <a href="#">Power Tool</a> <a href="#">Wrench</a>
									<a href="#">Electrodes</a></div>
							</div>
							<div class="post__share-links share-links">
								<ul class="share-links__list">
									<li class="share-links__item share-links__item--type--like"><a href="#">Like</a></li>
									<li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a></li>
									<li class="share-links__item share-links__item--type--pin"><a href="#">Pin It</a></li>
									<li class="share-links__item share-links__item--type--counter"><a href="#">4K</a></li>
								</ul>
							</div>
						</div>
						<div class="post__author">
							<div class="post__author-avatar"><img src="images/avatars/avatar-4-70x70.jpg" alt=""></div>
							<div class="post__author-info">
								<div class="post__author-name">Ryan Ford</div>
								<div class="post__author-about">Aliquam ullamcorper elementum sagittis. Etiam lacus lacus, mollis in
									mattis in, vehicula eu nulla. Nulla nec tellus pellentesque.</div>
							</div>
						</div>
					</div>
					<div class="post-view__card post-navigation">
						<div class="post-navigation__body"><a class="post-navigation__item post-navigation__item--prev" href="#">
								<div class="post-navigation__item-image"><img src="images/posts/post-2-80x80.jpg" alt=""></div>
								<div class="post-navigation__item-info">
									<div class="post-navigation__direction">
										<div class="post-navigation__direction-arrow"><svg width="7" height="11">
												<path
													d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
											</svg></div>
										<div class="post-navigation__direction-title">Previous post</div>
									</div>
									<div class="post-navigation__item-title">Logic Is The Study Of Reasoning And Argument Part 2</div>
								</div>
							</a><a class="post-navigation__item post-navigation__item--next" href="#">
								<div class="post-navigation__item-info">
									<div class="post-navigation__direction">
										<div class="post-navigation__direction-title">Next post</div>
										<div class="post-navigation__direction-arrow"><svg width="7" height="11">
												<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></div>
									</div>
									<div class="post-navigation__item-title">Some Philosophers Specialize In One Or More Historical
										Periods</div>
								</div>
								<div class="post-navigation__item-image"><img src="images/posts/post-3-80x80.jpg" alt=""></div>
							</a></div>
					</div>
					<div class="post-view__card">
						<h2 class="post-view__card-title">Comments (4)</h2>
						<div class="post-view__card-body comments-view">
							<ol class="comments-list comments-list--level--0 comments-view__list">
								<li class="comments-list__item">
									<div class="comment">
										<div class="comment__body">
											<div class="comment__avatar"><img src="images/avatars/avatar-1-38x38.jpg" alt=""></div>
											<div class="comment__meta">
												<div class="comment__author">Jessica Moore</div>
												<div class="comment__date">November 30, 2018</div>
											</div>
											<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button>
											</div>
											<div class="comment__content typography">Aliquam ullamcorper elementum sagittis. Etiam lacus
												lacus, mollis in mattis in, vehicula eu nulla. Nulla nec tellus pellentesque.</div>
										</div>
									</div>
									<div class="comments-list__children">
										<ol class="comments-list comments-list--level--1">
											<li class="comments-list__item">
												<div class="comment">
													<div class="comment__body">
														<div class="comment__avatar"><img src="images/avatars/avatar-2-38x38.jpg" alt=""></div>
														<div class="comment__meta">
															<div class="comment__author">Adam Taylor</div>
															<div class="comment__date">December 4, 2018</div>
														</div>
														<div class="comment__reply"><button type="button"
																class="btn btn-xs btn-light">Reply</button></div>
														<div class="comment__content typography">Ut vitae finibus nisl, suscipit porttitor urna.
															Integer efficitur efficitur velit non pulvinar. Aliquam blandit volutpat arcu vel
															tristique. Integer commodo ligula id augue tincidunt faucibus.</div>
													</div>
												</div>
											</li>
											<li class="comments-list__item">
												<div class="comment">
													<div class="comment__body">
														<div class="comment__avatar"><img src="images/avatars/avatar-3-38x38.jpg" alt=""></div>
														<div class="comment__meta">
															<div class="comment__author">Helena Garcia</div>
															<div class="comment__date">December 12, 2018</div>
														</div>
														<div class="comment__reply"><button type="button"
																class="btn btn-xs btn-light">Reply</button></div>
														<div class="comment__content typography">Suspendisse dignissim luctus metus vitae
															aliquam. Vestibulum sem odio, ullamcorper a imperdiet a, tincidunt sed lacus. Sed
															magna felis, consequat a erat ut, rutrum finibus odio.</div>
													</div>
												</div>
											</li>
										</ol>
									</div>
								</li>
								<li class="comments-list__item">
									<div class="comment">
										<div class="comment__body">
											<div class="comment__avatar"><img src="images/avatars/avatar-4-38x38.jpg" alt=""></div>
											<div class="comment__meta">
												<div class="comment__author">Ryan Ford</div>
												<div class="comment__date">December 5, 2018</div>
											</div>
											<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button>
											</div>
											<div class="comment__content typography">Nullam at varius sapien. Sed sit amet condimentum
												elit.</div>
										</div>
									</div>
								</li>
								<li class="comments-list__item">
									<div class="comment">
										<div class="comment__body">
											<div class="comment__avatar"><img src="images/avatars/avatar-3-38x38.jpg" alt=""></div>
											<div class="comment__meta">
												<div class="comment__author">Helena Garcia</div>
												<div class="comment__date">December 12, 2018</div>
											</div>
											<div class="comment__reply"><button type="button" class="btn btn-xs btn-light">Reply</button>
											</div>
											<div class="comment__content typography">Suspendisse dignissim luctus metus vitae aliquam.
												Vestibulum sem odio, ullamcorper a imperdiet a, tincidunt sed lacus. Sed magna felis,
												consequat a erat ut, rutrum finibus odio.</div>
										</div>
									</div>
								</li>
							</ol>
							<div class="comments-view__pagination">
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
												class="page-link__arrow page-link__arrow--right" aria-hidden="true"><svg width="7" height="11">
													<path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="post-view__card">
						<h2 class="post-view__card-title">Write A Comment</h2>
						<form class="post-view__card-body">
							<div class="form-row">
								<div class="form-group col-md-4"><label for="comment-first-name">First Name</label> <input type="text"
										class="form-control" id="comment-first-name" placeholder="First Name"></div>
								<div class="form-group col-md-4"><label for="comment-last-name">Last Name</label> <input type="text"
										class="form-control" id="comment-last-name" placeholder="Last Name"></div>
								<div class="form-group col-md-4"><label for="comment-email">Email Address</label> <input type="email"
										class="form-control" id="comment-email" placeholder="Email Address"></div>
							</div>
							<div class="form-group"><label for="comment-content">Comment</label> <textarea class="form-control"
									id="comment-content" rows="6"></textarea></div>
							<div class="form-group mb-0"><button type="submit" class="btn btn-primary mt-md-4 mt-2">Post
									Comment</button></div>
						</form>
					</div>
				</div>
				<div class="post-view__item post-view__item-sidebar">
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
			</div>
		</div>
	</div>
	<div class="block-space block-space--layout--before-footer"></div>
	@stop
