<template>
	<section>
		<form-product/>
		<table-product :all_product="all_product"/>
	</section>
</template>

<script>
import TableProduct from './Table'
import FormProduct from './Form'

export default {
	props: ['product'],
	data(){
		return{
			all_product: this.product,
		}
	},
	components: {
		TableProduct,
		FormProduct
	}
}
</script>