<template>
        <section>
            <form @submit.prevent="save" class="form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-4">
                        <label> Titulo </label>
                        <input type="text" class="form-control" v-model="blog.titulo">
                    </div>
                    <div class="col-md-4">
                        <label> Archivo </label>
                        <input type="file" class="form-control" @change="previewFiles">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                <div>
                    <img :src="blog.file" alt="" class="img-responsive imagen-form">
                </div>
            </form>
        </section>
</template>
<script>
export default {
    data(){
        return{
            blog: {},
            avatar: null
        }
    },
    methods:{
        previewFiles(event){
            this.avatar = event.target.files[0]
            this.blog.file = URL.createObjectURL(this.avatar)
        },
        async save(){
            var data = new FormData();
            data.append('file', this.avatar, this.avatar.name)
            data.append('titulo', this.blog.titulo)

            await axios.post('/file/save', data).then(res =>{
                console.log(res.data)
            })
        }
    }

}
</script>
