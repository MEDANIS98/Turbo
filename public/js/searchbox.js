const search = instantsearch({
	indexName: 'parts_index',
	searchClient: algoliasearch('3W1YKTWP94', 'df1b7898727e456a094ccac34d855246'),
});
search.addWidgets([
	instantsearch.widgets.searchBox({
		container: '#searchbox',
		placeholder: 'Enter Keyword or Part Number',
		showReset: false,
		showLoadingIndicator: false,
		cssClasses: {
			input: 'search__input',
			submit: [
				'search__button',
				'search__button--end'
			],
			// submitIcon: 'search__button-icon',
			// form: 'search__body'
		},
		templates: {
			// form: `
			// 	<div class="search__shadow"></div>
			// `,
			// submit: `
			// 	<span class="search__button-icon">
			// 		<svg width="20" height="20">
			// 			<path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15 c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8 c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
			// 		</svg>
			// 	</span>
			// `,
		},
	}),

	instantsearch.widgets.poweredBy({
		container: '#powered-by',
	}),

	instantsearch.widgets.hits({
		container: '#hits',
		cssClasses: {
			root: 'MyCustomHits',
			list: ['MyCustomHitsList', 'MyCustomHitsList--subclass'],
		},
		templates: {
			item: `
			<a class="suggestions__item suggestions__product" href="#">
				<div class="suggestions__product-image">
					<img src="{{ image }}" alt="image">
				</div>
				<div class="suggestions__product-info">
					<div class="suggestions__product-name">
						{{#helpers.highlight}}{ "attribute": "title" }{{/helpers.highlight}}
					</div>
					<div class="suggestions__product-rating">
						<div class="suggestions__product-rating-stars">
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
							<div class="suggestions__product-rating-label">5 on 22 reviews</div>
						</div>
					</div>
				<div class="suggestions__product-price">{{ price }} DZD</div>
			</a>
			`,
		},
	})
]);
search.start();
