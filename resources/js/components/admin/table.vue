<template>
    <div class="card-body">
		<table id="product-table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Reference</th>
					<th>Stock</th>
					<th>Details</th>
					<th>Description</th>
					<th>Price</th>
					<th>Shipping</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(product, index) in all_product" :key="index">
					<td>{{ product.name }}</td>
					<td>{{ product.reference }}</td>
					<td>{{ product.stock }}</td>
					<td>{{ product.details }}</td>
					<td>{{ product.description }}</td>
					<td>$ {{ product.price }}</td>
					<td>$ {{ product.shipping_cost }}</td>
					<td>
						<a :href="`admin/edit/${product.id}`" class="btn btn-xs btn-info"><i class="fa fa-plus"></i></a>
						<a href="#" class="btn btn-xs btn-danger" @click.prevent="deleteProduct(product, index)"><i class="fa fa-times"></i></a>
					</td>
				</tr>
			</tbody>		

		</table>
	</div>
</template>
<script>
export default {
	props: ['all_product'],
	methods:{
		async deleteProduct(product, index){
			await axios.delete(`admin/delete/${product.id}`).then(res => {
				if(res.data.deleted){
					this.$parent.all_product.splice(index, 1)
					alert('removed product')
				}
			})
		}
	}
}
</script>

