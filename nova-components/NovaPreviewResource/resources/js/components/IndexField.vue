<template>
	<div :class="`text-${field.textAlign}`">
		<tooltip trigger="hover">
			<div class="text-primary inline-flex items-center dim cursor-pointer">
				<span class="text-primary font-bold">{{ __("View") }}</span>
			</div>

			<tooltip-content slot="content">
				<img :src="image" :alt="__('Photo')" />
				<div>{{ title }}</div>
				<ol>
					<li>{{ buyPrice }}</li>
					<li>{{ sellPrice }}</li>
				</ol>
				<!-- <ul class="list-reset">
					<li v-for="option in value" class="mb-1" :key="option">
						<span class="inline-flex items-center py-1 pl-2 pr-3 rounded-full font-bold text-sm">
							<span class="ml-1">{{ option.label }}</span>
						</span>
					</li>
				</ul>-->
			</tooltip-content>
		</tooltip>
	</div>
</template>

<script>
export default {
	props: ["resourceName", "field"],

	data: () => ({
		image: "",
		title: "",
		buyPrice: 0,
		sellPrice: 0,
		related: "",
		list: []
	}),
	created() {
		this.image = this.field.image;
		this.title = this.field.title;
		this.buyPrice = this.field.buyPrice;
		this.sellPrice = this.field.sellPrice;
		this.related = this.field.related;
		this.list = this.field.list;
	}
};
</script>
