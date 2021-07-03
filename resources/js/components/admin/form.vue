<template>
	<form @submit.prevent="save()" method="POST" class="form"> 
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" v-model="product.name" required>
		</div>
		<div class="form-group">
			<label>Reference</label>
			<input type="text" class="form-control" v-model="product.reference" required>
		</div>
		<div class="form-group">
			<label>Stock</label>
			<input type="text" class="form-control" v-model="product.stock" required>
		</div>	
		<div class="form-group">
			<label>Details</label>
			<textarea rows="5" type="text" class="form-control" v-model="product.details" required></textarea>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea rows="10" type="text" class="form-control" v-model="product.description" required></textarea>
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" class="form-control" v-model="product.price" required>
		</div>	
		<div class="form-group">
			<label>Shipping cost</label>
			<input type="text" class="form-control" v-model="product.shipping_cost" required>
		</div>			  
		<div class="text-center">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>			
	</form>
</template>

<script>
export default {
	data(){
		return{
			product: {
				name: '',
				reference: '',
				stock: '',
				details: '',
				description: '',
				price: '',
				shipping_cost: ''
			}
		}
	},
	methods:{
		async save(){
			await axios.post('admin/create', this.product).then(res => {
				if(res.data.saved){
					
					this.product = {
						name: '',
						reference: '',
						stock: '',
						details: '',
						description: '',
						price: '',
						shipping_cost: ''
					}
					this.$parent.all_product.push(res.data.product)
					alert('Save Product')	
				}
				
			})
		}
	}
}
</script>