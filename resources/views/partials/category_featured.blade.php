<div class="block block-products-carousel" data-layout="horizontal">
	<div class="container">
		<div class="section-header">
			<div class="section-header__body">
				<h2 class="section-header__title">@lang('Featured Products')</h2>
				<div class="section-header__spring"></div>
				<div class="section-header__arrows">
					<div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
						<button class="arrow__button" type="button">
							@include('svg.arrow_prev')
						</button>
						</div>
					<div class="arrow section-header__arrow section-header__arrow--next arrow--next">
						<button class="arrow__button" type="button">
							@include('svg.arrow_next')
						</button>
					</div>
				</div>
				<div class="section-header__divider"></div>
			</div>
		</div>
		<div class="block-products-carousel__carousel">
			<div class="block-products-carousel__carousel-loader"></div>
			<div class="owl-carousel">
				@foreach ($featured_parts->chunk(2) as $chunk)
				<div class="block-products-carousel__column">
					@foreach ($chunk as $part)
					<div class="block-products-carousel__cell">
						<div class="product-card product-card--layout--horizontal">
							<div class="product-card__actions-list">
								<button class="product-card__action product-card__action--quickview" type="button" aria-label="@lang('Quick view')">
									@include('svg.zoom')
								</button>
							</div>
							<div class="product-card__image">
								<a href="{{ route('part', ['part' => $part]) }}">
									<img src="{{ secure_asset($part->indexImage) }}" alt="@lang('Photo')">
								</a>
							</div>
							<div class="product-card__info">
								<div class="product-card__name">
									<div>
										<div class="product-card__badges">
											@if($part->old_price)
												<div class="tag-badge tag-badge--sale">@lang('sale')</div>
											@endif
											<div class="tag-badge tag-badge--hot">@lang('hot')</div>
											@if($part->wasRecentlyCreated)
												<div class="tag-badge tag-badge--new">@lang('new')</div>
											@endif
										</div>
										<a href="{{ route('part', ['part' => $part]) }}">
											{{ $part->title }}
										</a>
									</div>
								</div>
								<div class="product-card__rating">
									<div class="rating product-card__rating-stars">
										<div class="rating__body">
											@for($i = 0; $i < $part->rating; $i++)
												<div class="rating__star rating__star--active"></div>
											@endfor
											@for($s = $part->rating; $s < 5; $s++)
												<div class="rating__star"></div>
											@endfor
										</div>
									</div>
									<div class="product-card__rating-label">4 on 3 reviews</div>
								</div>
							</div>
							<div class="product-card__footer">
								<div class="product-card__prices">
									<div class="product-card__price product-card__price--current">
										{{ $part->price }} DZD
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
