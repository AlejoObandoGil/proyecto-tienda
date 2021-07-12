<template>
	<section>
		<form-product :new_product="new_product"/>
		<table-product :all_product="all_product"/>
	</section>
</template>

<script>
import TableProduct from './table'
import FormProduct from './form'

export default {
	props: ['product', 'new_product'],
    created(){
        this.all_product = this.product
    },
	data(){
		return{
			all_product: {}
		}
	},
	components: {
		TableProduct,
		FormProduct
	}
}
</script>
