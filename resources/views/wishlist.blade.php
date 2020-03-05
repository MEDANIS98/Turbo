@extends('layouts.app')
@section('title','wishlist')
@section('content')

<div class="site__body">
    <div class="block-header block-header--has-breadcrumb block-header--has-title">
        <div class="container">
            <div class="block-header__body">
                <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    <ol class="breadcrumb__list">
                        <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                        <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first"><a
                                href="index.html" class="breadcrumb__item-link">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--parent"><a href="#"
                                class="breadcrumb__item-link">Breadcrumb</a></li>
                        <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last"
                            aria-current="page"><span class="breadcrumb__item-link">Current Page</span></li>
                        <li class="breadcrumb__title-safe-area" role="presentation"></li>
                    </ol>
                </nav>
                <h1 class="block-header__title">Wishlist</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container container--max--xl">
            <div class="wishlist">
                <table class="wishlist__table">
                    <thead class="wishlist__head">
                        <tr class="wishlist__row wishlist__row--head">
                            <th class="wishlist__column wishlist__column--head wishlist__column--image">Image</th>
                            <th class="wishlist__column wishlist__column--head wishlist__column--product">Product</th>
                            <th class="wishlist__column wishlist__column--head wishlist__column--stock">Stock status
                            </th>
                            <th class="wishlist__column wishlist__column--head wishlist__column--price">Price</th>
                            <th class="wishlist__column wishlist__column--head wishlist__column--button"></th>
                            <th class="wishlist__column wishlist__column--head wishlist__column--remove"></th>
                        </tr>
                    </thead>
                    <tbody class="wishlist__body">
                        <tr class="wishlist__row wishlist__row--body">
                            <td class="wishlist__column wishlist__column--body wishlist__column--image"><a href="#"><img
                                        src="images/products/product-1-160x160.jpg" alt=""></a></td>
                            <td class="wishlist__column wishlist__column--body wishlist__column--product">
                                <div class="wishlist__product-name"><a href="#">Brandix Spark Plug Kit ASR-400</a></div>
                                <div class="wishlist__product-rating">
                                    <div class="wishlist__product-rating-stars">
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
                                    <div class="wishlist__product-rating-title">3 reviews</div>
                                </div>
                            </td>
                            <td class="wishlist__column wishlist__column--body wishlist__column--stock">
                                <div class="status-badge status-badge--style--success status-badge--has-text">
                                    <div class="status-badge__body">
                                        <div class="status-badge__text">In Stock</div>
                                    </div>
                                    <<<<<<< HEAD <div class="form-group account-menu__form-button"><button type="submit"
                                            class="btn btn-primary btn-sm">Login</button>
                                </div>
                                <div class="account-menu__form-link"><a href="account-login.html">Create An Account</a>
                                </div>
                                </form>
                                <div class="account-menu__divider"></div><a href="#" class="account-menu__user">
                                    <div class="account-menu__user-avatar"><img src="images/avatars/avatar-4.jpg"
                                            alt=""></div>
                                    <div class="account-menu__user-info">
                                        <div class="account-menu__user-name">Ryan Ford</div>
                                        <div class="account-menu__user-email">red-parts@example.com</div>
                                    </div>
                                </a>
                                <div class="account-menu__divider"></div>
                                <ul class="account-menu__links">
                                    <li><a href="account-dashboard.html">Dashboard</a></li>
                                    <li><a href="account-dashboard.html">Garage</a></li>
                                    <li><a href="account-profile.html">Edit Profile</a></li>
                                    <li><a href="account-orders.html">Order History</a></li>
                                    <li><a href="account-addresses.html">Addresses</a></li>
                                </ul>
                                <div class="account-menu__divider"></div>
                                <ul class="account-menu__links">
                                    <li><a href="account-login.html">Logout</a></li>
                                </ul>
            </div>
        </div>
    </div>
    <div class="indicator indicator--trigger--click"><a href="cart.html" class="indicator__button"><span
                class="indicator__icon"><svg width="32" height="32">
                    <circle cx="10.5" cy="27.5" r="2.5" />
                    <circle cx="23.5" cy="27.5" r="2.5" />
                    <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
	l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
	c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z" />
                </svg> <span class="indicator__counter">3</span> </span><span class="indicator__title">Shopping
                Cart</span> <span class="indicator__value">$250.00</span></a>
        <div class="indicator__content">
            <div class="dropcart">
                <ul class="dropcart__list">
                    <li class="dropcart__item">
                        <div class="dropcart__item-image"><a href="product-full.html"><img
                                    src="images/products/product-4-70x70.jpg" alt=""></a></div>
                        <div class="dropcart__item-info">
                            <div class="dropcart__item-name"><a href="product-full.html">Glossy Gray 19" Aluminium Wheel
                                    AR-19</a></div>
                            <ul class="dropcart__item-features">
                                <li>Color: Yellow</li>
                                <li>Material: Aluminium</li>
                            </ul>
                            <div class="dropcart__item-meta">
                                <div class="dropcart__item-quantity">2</div>
                                <div class="dropcart__item-price">$699.00</div>
                            </div>
                        </div><button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z" /></svg></button>
                    </li>
                    <li class="dropcart__divider" role="presentation"></li>
                    <li class="dropcart__item">
                        <div class="dropcart__item-image"><a href="product-full.html"><img
                                    src="images/products/product-2-70x70.jpg" alt=""></a></div>
                        <div class="dropcart__item-info">
                            <div class="dropcart__item-name"><a href="product-full.html">Brandix Brake Kit
                                    BDX-750Z370-S</a>
                            </div>
                            <div class="dropcart__item-meta">
                                <div class="dropcart__item-quantity">1</div>
                                <div class="dropcart__item-price">$849.00</div>
                            </div>
                        </div><button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z" /></svg></button>
                    </li>
                    <li class="dropcart__divider" role="presentation"></li>
                    <li class="dropcart__item">
                        <div class="dropcart__item-image"><a href="product-full.html"><img
                                    src="images/products/product-5-70x70.jpg" alt=""></a></div>
                        <div class="dropcart__item-info">
                            <div class="dropcart__item-name"><a href="product-full.html">Twin Exhaust Pipe From Brandix
                                    Z54</a></div>
                            <ul class="dropcart__item-features">
                                <li>Color: True Red</li>
                            </ul>
                            <div class="dropcart__item-meta">
                                <div class="dropcart__item-quantity">3</div>
                                <div class="dropcart__item-price">$1210.00</div>
                            </div>
                        </div><button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z" /></svg></button>
                    </li>
                    <li class="dropcart__divider" role="presentation"></li>
                </ul>
                <div class="dropcart__totals">
                    <table>
                        <tr>
                            <th>Subtotal</th>
                            <td>$5877.00</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>$25.00</td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>$5902.00</td>
                        </tr>
                    </table>
                    =======
                    >>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
                </div>
                </td>
                <td class="wishlist__column wishlist__column--body wishlist__column--price">$19.00</td>
                <td class="wishlist__column wishlist__column--body wishlist__column--button"><button type="button"
                        class="btn btn-sm btn-primary">Add to cart</button></td>
                <td class="wishlist__column wishlist__column--body wishlist__column--remove"><button type="button"
                        class="wishlist__remove btn btn-sm btn-muted btn-icon"><svg width="12" height="12">
                            <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button></td>
                </tr>
                <tr class="wishlist__row wishlist__row--body">
                    <td class="wishlist__column wishlist__column--body wishlist__column--image"><a href="#"><img
                                src="images/products/product-2-160x160.jpg" alt=""></a></td>
                    <td class="wishlist__column wishlist__column--body wishlist__column--product">
                        <div class="wishlist__product-name"><a href="#">Brandix Brake Kit BDX-750Z370-S</a></div>
                        <div class="wishlist__product-rating">
                            <div class="wishlist__product-rating-stars">
                                <div class="rating">
                                    <div class="rating__body">
                                        <div class="rating__star rating__star--active"></div>
                                        <div class="rating__star rating__star--active"></div>
                                        <div class="rating__star rating__star--active"></div>
                                        <div class="rating__star rating__star--active"></div>
                                        <div class="rating__star rating__star--active"></div>
                                    </div>
                                </div>
                                <<<<<<< HEAD </td> <td
                                    class="wishlist__column wishlist__column--body wishlist__column--stock">
                                    <div class="status-badge status-badge--style--success status-badge--has-text">
                                        <div class="status-badge__body">
                                            <div class="status-badge__text">In Stock</div>
                                        </div>
                                    </div>
                    </td>
                    <td class="wishlist__column wishlist__column--body wishlist__column--price">$349.00</td>
                    <td class="wishlist__column wishlist__column--body wishlist__column--button"><button type="button"
                            class="btn btn-sm btn-primary">Add to cart</button></td>
                    <td class="wishlist__column wishlist__column--body wishlist__column--remove"><button type="button"
                            class="wishlist__remove btn btn-sm btn-muted btn-icon"><svg width="12" height="12">
                                <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button></td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
</div><!-- site__body / end -->
<!-- site__footer -->
<footer class="site__footer">
    <div class="site-footer">
        <div class="decor site-footer__decor decor--type--bottom">
            <div class="decor__body">
                <div class="decor__start"></div>
                <div class="decor__end"></div>
                <div class="decor__center"></div>
            </div>
        </div>
        <div class="site-footer__widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Contact Us</h5>
                            <div class="footer-contacts__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer in
                                feugiat lorem.</div>
                            <address class="footer-contacts__contacts">
                                <dl>
                                    <dt>Phone Number</dt>
                                    <dd>+1 (800) 060-07-30</dd>
                                </dl>
                                <dl>
                                    <dt>Email Address</dt>
                                    <dd>red-parts@example.com</dd>
                                </dl>
                                <dl>
                                    <dt>Our Location</dt>
                                    <dd>715 Fake Street, New York 10021 USA</dd>
                                </dl>
                                <dl>
                                    <dt>Working Hours</dt>
                                    <dd>Mon-Sat 10:00pm - 7:00pm</dd>
                                </dl>
                            </address>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Information</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="#" class="footer-links__link">About Us</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Delivery
                                        Information</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Privacy Policy</a>
                                </li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Brands</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Contact Us</a>
                                </li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Returns</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xl-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">My Account</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Store Location</a>
                                </li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Order History</a>
                                </li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Wish List</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Newsletter</a>
                                </li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Specials</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Gift
                                        Certificates</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Affiliate</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Newsletter</h5>
                            <div class="footer-newsletter__text">Enter your email address below to subscribe to our
                                newsletter and
                                keep up to date with discounts and special offers.</div>
                            <form action="#" class="footer-newsletter__form"><label class="sr-only"
                                    for="footer-newsletter-address">Email Address</label> <input type="text"
                                    class="footer-newsletter__form-input" id="footer-newsletter-address"
                                    placeholder="Email Address..."> <button
                                    class="footer-newsletter__form-button">Subscribe</button>
                            </form>
                            <div class="footer-newsletter__text footer-newsletter__text--social">Follow us on social
                                networks
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
                                    <li class="social-links__item social-links__item--rss"><a
                                            href="https://themeforest.net/user/kos9" target="_blank" rel="noopener"><i
                                                class="fas fa-rss"></i></a></li>
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
                    </div>
                    <div class="site-footer__payments"><img src="images/payments.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- site__footer / end -->
</div><!-- site / end -->
<!-- mobile-menu -->
<div class="mobile-menu">
    <div class="mobile-menu__backdrop"></div>
    <div class="mobile-menu__body"><button class="mobile-menu__close" type="button"><svg width="12" height="12">
                <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button>
        <div class="mobile-menu__panel">
            <div class="mobile-menu__panel-header">
                <div class="mobile-menu__panel-title">Menu</div>
            </div>
            <div class="mobile-menu__panel-body">
                <div class="mobile-menu__settings-list">
                    <div class="mobile-menu__setting" data-mobile-menu-item><button class="mobile-menu__setting-button"
                            title="Language" data-mobile-menu-trigger><span class="mobile-menu__setting-icon"><img
                                    src="images/languages/language-5.png" alt=""> </span><span
                                class="mobile-menu__setting-title">Italian</span> <span
                                class="mobile-menu__setting-arrow"><svg width="6px" height="9px">
                                    <path
                                        d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                </svg></span></button>
                        <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                            <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
                                        type="button"><svg width="7" height="11">
                                            <path
                                                d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg></button>
                                    <div class="mobile-menu__panel-title">Language</div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image"><img
                                                        src="images/languages/language-1.png" alt=""></div>
                                                English
                                            </button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image"><img
                                                        src="images/languages/language-2.png" alt=""></div>
                                                French
                                            </button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image"><img
                                                        src="images/languages/language-3.png" alt=""></div>
                                                German
                                            </button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image"><img
                                                        src="images/languages/language-4.png" alt=""></div>
                                                Russian
                                            </button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>
                                                <div class="mobile-menu__links-image"><img
                                                        src="images/languages/language-5.png" alt=""></div>
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
                                class="mobile-menu__setting-title">US Dollar</span> <span
                                class="mobile-menu__setting-arrow"><svg width="6px" height="9px">
                                    <path
                                        d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z" />
                                </svg></span></button>
                        <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                            <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
                                        type="button"><svg width="7" height="11">
                                            <path
                                                d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg></button>
                                    <div class="mobile-menu__panel-title">Currency</div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>€ Euro</button>
                                        </li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>£ Pound
                                                Sterling</button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>$ US
                                                Dollar</button></li>
                                        <li data-mobile-menu-item><button type="button" class=""
                                                data-mobile-menu-trigger>₽ Russian
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
                        </span><span class="mobile-menu__indicator-title">Wishlist</span> </a><a
                        class="mobile-menu__indicator" href="account-dashboard.html"><span
                            class="mobile-menu__indicator-icon"><svg width="20" height="20">
                                <path d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
	c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z" /></svg>
                        </span><span class="mobile-menu__indicator-title">Account</span> </a><a
                        class="mobile-menu__indicator" href="cart.html"><span class="mobile-menu__indicator-icon"><svg
                                width="20" height="20">
                                <circle cx="7" cy="17" r="2" />
                                <circle cx="15" cy="17" r="2" />
                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" /></svg> <span
                                class="mobile-menu__indicator-counter">3</span> </span><span
                            class="mobile-menu__indicator-title">Cart</span> </a><a class="mobile-menu__indicator"
                        href="account-garage.html"><span class="mobile-menu__indicator-icon"><svg width="20"
                                height="20">
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
                                <div class="mobile-menu__panel-header"><button class="mobile-menu__panel-back"
                                        type="button"><svg width="7" height="11">
                                            <path
                                                d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                        </svg></button>
                                    <div class="mobile-menu__panel-title">Home</div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item><a href="index.html" class=""
                                                data-mobile-menu-trigger>Home One</a></li>
                                        <li data-mobile-menu-item><a href="index2.html" class=""
                                                data-mobile-menu-trigger>Home Two</a>
                                        </li>
                                        <li data-mobile-menu-item><a href="header-spaceship-variant-one.html" class=""
                                                data-mobile-menu-trigger>Header Spaceship <svg width="7" height="11">
                                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                    <div class="mobile-menu__panel-header"><button
                                                            class="mobile-menu__panel-back" type="button"><svg width="7"
                                                                height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">Header Spaceship</div>
                                                    </div>
                                                    <div class="mobile-menu__panel-body">
                                                        <ul class="mobile-menu__links">
                                                            <li data-mobile-menu-item><a
                                                                    href="header-spaceship-variant-one.html" class=""
                                                                    data-mobile-menu-trigger>Variant One</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="header-spaceship-variant-two.html" class=""
                                                                    data-mobile-menu-trigger>Variant Two</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="header-spaceship-variant-three.html" class=""
                                                                    data-mobile-menu-trigger>Variant Three</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-mobile-menu-item><a href="header-classic-variant-one.html" class=""
                                                data-mobile-menu-trigger>Header Classic <svg width="7" height="11">
                                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                    <div class="mobile-menu__panel-header"><button
                                                            class="mobile-menu__panel-back" type="button"><svg width="7"
                                                                height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">Header Classic</div>
                                                    </div>
                                                    <div class="mobile-menu__panel-body">
                                                        <ul class="mobile-menu__links">
                                                            <li data-mobile-menu-item><a
                                                                    href="header-classic-variant-one.html" class=""
                                                                    data-mobile-menu-trigger>Variant One</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="header-classic-variant-two.html" class=""
                                                                    data-mobile-menu-trigger>Variant Two</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="header-classic-variant-three.html" class=""
                                                                    data-mobile-menu-trigger>Variant Three</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="header-classic-variant-four.html" class=""
                                                                    data-mobile-menu-trigger>Variant Four</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="header-classic-variant-five.html" class=""
                                                                    data-mobile-menu-trigger>Variant Five</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-mobile-menu-item><a href="mobile-header-variant-one.html" class=""
                                                data-mobile-menu-trigger>Mobile Header <svg width="7" height="11">
                                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                    <div class="mobile-menu__panel-header"><button
                                                            class="mobile-menu__panel-back" type="button"><svg width="7"
                                                                height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">Mobile Header</div>
                                                    </div>
                                                    <div class="mobile-menu__panel-body">
                                                        <ul class="mobile-menu__links">
                                                            <li data-mobile-menu-item><a
                                                                    href="mobile-header-variant-one.html" class=""
                                                                    data-mobile-menu-trigger>Variant One</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="mobile-header-variant-two.html" class=""
                                                                    data-mobile-menu-trigger>Variant Two</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    =======
                                    >>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
                                </div>
                                <div class="wishlist__product-rating-title">22 reviews</div>
                            </div>
                            <<<<<<< HEAD </div> </li> <li data-mobile-menu-item><a
                                    href="shop-grid-4-columns-sidebar.html" class="" data-mobile-menu-trigger>Shop
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
                                            <div class="mobile-menu__panel-title">Shop</div>
                                        </div>
                                        <div class="mobile-menu__panel-body">
                                            <ul class="mobile-menu__links">
                                                <li data-mobile-menu-item><a href="category.html" class=""
                                                        data-mobile-menu-trigger>Category <svg width="7" height="11">
                                                            <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                                    <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                        <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                            <div class="mobile-menu__panel-header"><button
                                                                    class="mobile-menu__panel-back" type="button"><svg
                                                                        width="7" height="11">
                                                                        <path
                                                                            d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                    </svg></button>
                                                                <div class="mobile-menu__panel-title">Category</div>
                                                            </div>
                                                            <div class="mobile-menu__panel-body">
                                                                <ul class="mobile-menu__links">
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-3-columns-sidebar.html"
                                                                            class="" data-mobile-menu-trigger>3 Columns
                                                                            Sidebar</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-4-columns-sidebar.html"
                                                                            class="" data-mobile-menu-trigger>4 Columns
                                                                            Sidebar</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-5-columns-sidebar.html"
                                                                            class="" data-mobile-menu-trigger>5 Columns
                                                                            Sidebar</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-4-columns-full.html" class=""
                                                                            data-mobile-menu-trigger>4 Columns Full</a>
                                                                    </li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-5-columns-full.html" class=""
                                                                            data-mobile-menu-trigger>5 Columns Full</a>
                                                                    </li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-6-columns-full.html" class=""
                                                                            data-mobile-menu-trigger>6 Columns Full</a>
                                                                    </li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-7-columns-full.html" class=""
                                                                            data-mobile-menu-trigger>7 Columns Full</a>
                                                                    </li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="category-right-sidebar.html" class=""
                                                                            data-mobile-menu-trigger>Right Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-mobile-menu-item><a href="shop-grid-4-columns-sidebar.html"
                                                        class="" data-mobile-menu-trigger>Shop Grid <svg width="7"
                                                            height="11">
                                                            <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                                    <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                        <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                            <div class="mobile-menu__panel-header"><button
                                                                    class="mobile-menu__panel-back" type="button"><svg
                                                                        width="7" height="11">
                                                                        <path
                                                                            d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                    </svg></button>
                                                                <div class="mobile-menu__panel-title">Shop Grid</div>
                                                            </div>
                                                            <div class="mobile-menu__panel-body">
                                                                <ul class="mobile-menu__links">
                                                                    <li data-mobile-menu-item><a
                                                                            href="shop-grid-6-columns-full.html"
                                                                            class="" data-mobile-menu-trigger>6 Columns
                                                                            Full</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="shop-grid-5-columns-full.html"
                                                                            class="" data-mobile-menu-trigger>5 Columns
                                                                            Full</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="shop-grid-4-columns-full.html"
                                                                            class="" data-mobile-menu-trigger>4 Columns
                                                                            Full</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="shop-grid-4-columns-sidebar.html"
                                                                            class="" data-mobile-menu-trigger>4 Columns
                                                                            Sidebar</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="shop-grid-3-columns-sidebar.html"
                                                                            class="" data-mobile-menu-trigger>3 Columns
                                                                            Sidebar</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-mobile-menu-item><a href="shop-list.html" class=""
                                                        data-mobile-menu-trigger>Shop List</a>
                                                </li>
                                                <li data-mobile-menu-item><a href="shop-table.html" class=""
                                                        data-mobile-menu-trigger>Shop
                                                        Table</a></li>
                                                <li data-mobile-menu-item><a href="shop-right-sidebar.html" class=""
                                                        data-mobile-menu-trigger>Shop
                                                        Right Sidebar</a></li>
                                                <li data-mobile-menu-item><a href="product-full.html" class=""
                                                        data-mobile-menu-trigger>Product
                                                        <svg width="7" height="11">
                                                            <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                                    <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                        <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                            <div class="mobile-menu__panel-header"><button
                                                                    class="mobile-menu__panel-back" type="button"><svg
                                                                        width="7" height="11">
                                                                        <path
                                                                            d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                    </svg></button>
                                                                <div class="mobile-menu__panel-title">Product</div>
                                                            </div>
                                                            <div class="mobile-menu__panel-body">
                                                                <ul class="mobile-menu__links">
                                                                    <li data-mobile-menu-item><a
                                                                            href="product-full.html" class=""
                                                                            data-mobile-menu-trigger>Full Width</a></li>
                                                                    <li data-mobile-menu-item><a
                                                                            href="product-sidebar.html" class=""
                                                                            data-mobile-menu-trigger>Left Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li data-mobile-menu-item><a href="cart.html" class=""
                                                        data-mobile-menu-trigger>Cart</a></li>
                                                <li data-mobile-menu-item><a href="checkout.html" class=""
                                                        data-mobile-menu-trigger>Checkout</a>
                                                </li>
                                                <li data-mobile-menu-item><a href="wishlist.html" class=""
                                                        data-mobile-menu-trigger>Wishlist</a>
                                                </li>
                                                <li data-mobile-menu-item><a href="compare.html" class=""
                                                        data-mobile-menu-trigger>Compare</a>
                                                </li>
                                                <li data-mobile-menu-item><a href="track-order.html" class=""
                                                        data-mobile-menu-trigger>Track
                                                        Order</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                    </li>
                    <li data-mobile-menu-item><a href="blog-classic-right-sidebar.html" class=""
                            data-mobile-menu-trigger>Blog
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
                                                    <div class="mobile-menu__panel-header"><button
                                                            class="mobile-menu__panel-back" type="button"><svg width="7"
                                                                height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">Blog Classic</div>
                                                    </div>
                                                    <div class="mobile-menu__panel-body">
                                                        <ul class="mobile-menu__links">
                                                            <li data-mobile-menu-item><a
                                                                    href="blog-classic-left-sidebar.html" class=""
                                                                    data-mobile-menu-trigger>Left Sidebar</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="blog-classic-right-sidebar.html" class=""
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
                                                    <div class="mobile-menu__panel-header"><button
                                                            class="mobile-menu__panel-back" type="button"><svg width="7"
                                                                height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">Blog List</div>
                                                    </div>
                                                    <div class="mobile-menu__panel-body">
                                                        <ul class="mobile-menu__links">
                                                            <li data-mobile-menu-item><a
                                                                    href="blog-list-left-sidebar.html" class=""
                                                                    data-mobile-menu-trigger>Left Sidebar</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="blog-list-right-sidebar.html" class=""
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
                                                    <div class="mobile-menu__panel-header"><button
                                                            class="mobile-menu__panel-back" type="button"><svg width="7"
                                                                height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">Blog Grid</div>
                                                    </div>
                                                    <div class="mobile-menu__panel-body">
                                                        <ul class="mobile-menu__links">
                                                            <li data-mobile-menu-item><a
                                                                    href="blog-grid-left-sidebar.html" class=""
                                                                    data-mobile-menu-trigger>Left Sidebar</a></li>
                                                            <li data-mobile-menu-item><a
                                                                    href="blog-grid-right-sidebar.html" class=""
                                                                    data-mobile-menu-trigger>Right Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-mobile-menu-item><a href="post-full-width.html" class=""
                                                data-mobile-menu-trigger>Post
                                                Page <svg width="7" height="11">
                                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                            <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                    <div class="mobile-menu__panel-header"><button
                                                            class="mobile-menu__panel-back" type="button"><svg width="7"
                                                                height="11">
                                                                <path
                                                                    d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                            </svg></button>
                                                        <div class="mobile-menu__panel-title">Post Page</div>
                                                    </div>
                                                    <div class="mobile-menu__panel-body">
                                                        <ul class="mobile-menu__links">
                                                            <li data-mobile-menu-item><a href="post-full-width.html"
                                                                    class="" data-mobile-menu-trigger>Full Width</a>
                                                            </li>
                                                            <li data-mobile-menu-item><a href="post-left-sidebar.html"
                                                                    class="" data-mobile-menu-trigger>Left Sidebar</a>
                                                            </li>
                                                            <li data-mobile-menu-item><a href="post-right-sidebar.html"
                                                                    class="" data-mobile-menu-trigger>Right Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-mobile-menu-item><a href="post-without-image.html" class=""
                                                data-mobile-menu-trigger>Post
                                                Without Image</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-mobile-menu-item><a href="account-login.html" class="" data-mobile-menu-trigger>Account
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
                                    <div class="mobile-menu__panel-title">Account</div>
                                </div>
                                <div class="mobile-menu__panel-body">
                                    <ul class="mobile-menu__links">
                                        <li data-mobile-menu-item><a href="account-login.html" class=""
                                                data-mobile-menu-trigger>Login &
                                                Register</a></li>
                                        <li data-mobile-menu-item><a href="account-dashboard.html" class=""
                                                data-mobile-menu-trigger>Dashboard</a></li>
                                        <li data-mobile-menu-item><a href="account-garage.html" class=""
                                                data-mobile-menu-trigger>Garage</a></li>
                                        <li data-mobile-menu-item><a href="account-profile.html" class=""
                                                data-mobile-menu-trigger>Edit
                                                Profile</a></li>
                                        <li data-mobile-menu-item><a href="account-orders.html" class=""
                                                data-mobile-menu-trigger>Order
                                                History</a></li>
                                        <li data-mobile-menu-item><a href="account-addresses.html" class=""
                                                data-mobile-menu-trigger>Address Book</a></li>
                                        <li data-mobile-menu-item><a href="account-password.html" class=""
                                                data-mobile-menu-trigger>Change
                                                Password</a></li>
                                    </ul>
                                    =======
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--stock">
                                        <div class="status-badge status-badge--style--success status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__text">In Stock</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--price">$224.00
                                    </td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--button"><button
                                            type="button" class="btn btn-sm btn-primary">Add to cart</button></td>
                                    <td class="wishlist__column wishlist__column--body wishlist__column--remove"><button
                                            type="button" class="wishlist__remove btn btn-sm btn-muted btn-icon"><svg
                                                width="12" height="12">
                                                <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button></td>
                                    </tr>
                                    <tr class="wishlist__row wishlist__row--body">
                                        <td class="wishlist__column wishlist__column--body wishlist__column--image"><a
                                                href="#"><img src="images/products/product-3-160x160.jpg" alt=""></a>
                                        </td>
                                        <td class="wishlist__column wishlist__column--body wishlist__column--product">
                                            <div class="wishlist__product-name"><a href="#">Left Headlight Of Brandix
                                                    Z54</a></div>
                                            <div class="wishlist__product-rating">
                                                <div class="wishlist__product-rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body">
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star rating__star--active"></div>
                                                            <div class="rating__star"></div>
                                                            <div class="rating__star"></div>
                                                        </div>
                                                    </div>
                                                    >>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
                                                </div>
                                                <div class="wishlist__product-rating-title">14 reviews</div>
                                            </div>
                                            <<<<<<< HEAD </div> </li> <li data-mobile-menu-item><a href="about-us.html"
                                                    class="" data-mobile-menu-trigger>Pages <svg width="7" height="11">
                                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" /></svg></a>
                                                <div class="mobile-menu__links-panel" data-mobile-menu-panel>
                                                    <div class="mobile-menu__panel mobile-menu__panel--hidden">
                                                        <div class="mobile-menu__panel-header"><button
                                                                class="mobile-menu__panel-back" type="button"><svg
                                                                    width="7" height="11">
                                                                    <path
                                                                        d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                </svg></button>
                                                            <div class="mobile-menu__panel-title">Pages</div>
                                                        </div>
                                                        <div class="mobile-menu__panel-body">
                                                            <ul class="mobile-menu__links">
                                                                <li data-mobile-menu-item><a href="about-us.html"
                                                                        class="" data-mobile-menu-trigger>About Us</a>
                                                                </li>
                                                                <li data-mobile-menu-item><a href="contact-us-v1.html"
                                                                        class="" data-mobile-menu-trigger>Contact
                                                                        Us v1</a></li>
                                                                <li data-mobile-menu-item><a href="contact-us-v2.html"
                                                                        class="" data-mobile-menu-trigger>Contact
                                                                        Us v2</a></li>
                                                                <li data-mobile-menu-item><a href="404.html" class=""
                                                                        data-mobile-menu-trigger>404</a></li>
                                                                <li data-mobile-menu-item><a href="terms.html" class=""
                                                                        data-mobile-menu-trigger>Terms And
                                                                        Conditions</a></li>
                                                                <li data-mobile-menu-item><a href="faq.html" class=""
                                                                        data-mobile-menu-trigger>FAQ</a></li>
                                                                <li data-mobile-menu-item><a href="components.html"
                                                                        class="" data-mobile-menu-trigger>Components</a>
                                                                </li>
                                                                <li data-mobile-menu-item><a href="typography.html"
                                                                        class="" data-mobile-menu-trigger>Typography</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                    </li>
                    <li data-mobile-menu-item><a
                            href="https://themeforest.net/item/redparts-auto-parts-html-template/24735474"
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
        <div class="modal-content"><button type="button" class="vehicle-picker-modal__close"><svg width="12"
                    height="12">
                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button>
            <div class="vehicle-picker-modal__panel vehicle-picker-modal__panel--active">
                <div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
                <div class="vehicle-form vehicle-form--layout--modal">
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Year">
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
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Brand" disabled="disabled">
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
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Model" disabled="disabled">
                            <option value="none">Select Model</option>
                            <option>Explorer</option>
                            <option>Focus S</option>
                            <option>Fusion SE</option>
                            <option>Mustang</option>
                        </select></div>
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Engine" disabled="disabled">
                            <option value="none">Select Engine</option>
                            <option>Gas 1.6L 125 hp AT/L4</option>
                            <option>Diesel 2.5L 200 hp AT/L5</option>
                            <option>Diesel 3.0L 250 hp MT/L5</option>
                        </select></div>
                    <div class="vehicle-form__divider">Or</div>
                    <div class="vehicle-form__item"><input type="text" class="form-control"
                            placeholder="Enter VIN number" aria-label="VIN number"></div>
                </div>
                <div class="vehicle-picker-modal__actions"><button type="button"
                        class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel</button> <button
                        type="button" class="btn btn-sm btn-primary">Add A Vehicle</button></div>
            </div>
        </div>
    </div>
</div><!-- add-vehicle-modal / end -->
<!-- vehicle-picker-modal -->
<div id="vehicle-picker-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
        <div class="modal-content"><button type="button" class="vehicle-picker-modal__close"><svg width="12"
                    height="12">
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
                                        class="input-radio__circle"></span> </span></span><span
                                class="vehicles-list__item-info"><span class="vehicles-list__item-name">2011 Ford Focus
                                    S</span> <span class="vehicles-list__item-details">Engine 2.0L 1742DA L4 FI
                                    Turbo</span> </span><button type="button" class="vehicles-list__item-remove"><svg
                                    width="16" height="16">
                                    <path
                                        d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                </svg></button></label> <label class="vehicles-list__item"><span
                                class="vehicles-list__item-radio input-radio"><span class="input-radio__body"><input
                                        class="input-radio__input" name="header-vehicle" type="radio"> <span
                                        class="input-radio__circle"></span> </span></span><span
                                class="vehicles-list__item-info"><span class="vehicles-list__item-name">2019 Audi Q7
                                    Premium</span> <span class="vehicles-list__item-details">Engine 3.0L 5626CC L6
                                    QK</span> </span><button type="button" class="vehicles-list__item-remove"><svg
                                    width="16" height="16">
                                    <path
                                        d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                </svg></button></label></div>
                </div>
                <div class="vehicle-picker-modal__actions"><button type="button"
                        class="btn btn-sm btn-secondary vehicle-picker-modal__close-button">Cancel</button> <button
                        type="button" class="btn btn-sm btn-primary" data-to-panel="form">Add A Vehicle</button></div>
            </div>
            <div class="vehicle-picker-modal__panel" data-panel="form">
                <div class="vehicle-picker-modal__title card-title">Add A Vehicle</div>
                <div class="vehicle-form vehicle-form--layout--modal">
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Year">
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
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Brand" disabled="disabled">
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
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Model" disabled="disabled">
                            <option value="none">Select Model</option>
                            <option>Explorer</option>
                            <option>Focus S</option>
                            <option>Fusion SE</option>
                            <option>Mustang</option>
                        </select></div>
                    <div class="vehicle-form__item vehicle-form__item--select"><select
                            class="form-control form-control-select2" aria-label="Engine" disabled="disabled">
                            <option value="none">Select Engine</option>
                            <option>Gas 1.6L 125 hp AT/L4</option>
                            <option>Diesel 2.5L 200 hp AT/L5</option>
                            <option>Diesel 3.0L 250 hp MT/L5</option>
                        </select></div>
                    <div class="vehicle-form__divider">Or</div>
                    <div class="vehicle-form__item"><input type="text" class="form-control"
                            placeholder="Enter VIN number" aria-label="VIN number"></div>
                </div>
                <div class="vehicle-picker-modal__actions"><button type="button" class="btn btn-sm btn-secondary"
                        data-to-panel="list">Back to list</button> <button type="button"
                        class="btn btn-sm btn-primary">Add A
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
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button
                class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
            =======
            </td>
            <td class="wishlist__column wishlist__column--body wishlist__column--stock">
                <div class="status-badge status-badge--style--success status-badge--has-text">
                    <div class="status-badge__body">
                        <div class="status-badge__text">In Stock</div>
                    </div>
                </div>
            </td>
            <td class="wishlist__column wishlist__column--body wishlist__column--price">$349.00</td>
            <td class="wishlist__column wishlist__column--body wishlist__column--button"><button type="button"
                    class="btn btn-sm btn-primary">Add to cart</button></td>
            <td class="wishlist__column wishlist__column--body wishlist__column--remove"><button type="button"
                    class="wishlist__remove btn btn-sm btn-muted btn-icon"><svg width="12" height="12">
                        <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" /></svg></button></td>
            </tr>
            </tbody>
            </table>
            >>>>>>> 209187adbb27d6dd30f9b6e104fd17bafb9c612d
        </div>
    </div>
</div>
<div class="block-space block-space--layout--before-footer"></div>
@stop
