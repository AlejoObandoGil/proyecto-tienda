<template>
	<form @submit.prevent="save()" method="POST" class="form" enctype="multipart/form-data">
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
        <div class="form-group">
            <label>Image file</label>
            <input type="file" class="form-control" @change="previewFiles">
        </div>

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
        <div>
            <img :src="product.image_path" alt="" class="img-responsive imagen-form">
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
				shipping_cost: '',
                image_path: ''
			},
            avatar: null
		}
	},

	methods:{
        previewFiles(event){
            this.avatar = event.target.files[0]
            this.product.image_path = URL.createObjectURL(this.avatar)
        },
		async save(){
            var data = new FormData();
            data.append('image_path', this.avatar, this.avatar.name)

			await axios.post('admin/create', this.product).then(res => {
				if(res.data.saved){
					this.product = {
						name: '',
						reference: '',
						stock: '',
						details: '',
						description: '',
						price: '',
						shipping_cost: '',
                        image_path: ''
					}
					this.$parent.all_product.push(res.data.product)
					alert('Save Product')
                    console.log(res.data)
				}
			})
		}
	}
}
</script>
