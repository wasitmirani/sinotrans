<template>
    <div>
        <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create a new project</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form  v-on:submit.prevent="onSubmit">

                            <div class=" row">
                                <div class="form-group col-4">
                                    <input type="text" required v-model="title" name="title" class="form-control input-default " placeholder="Project Title">
                                </div>
                                 <div class="form-group col-4">
                                       <select class="form-control default-select" v-model="industry_id">
                                                <option v-for="item in industries" :key="item.id" :value="item.id"> {{item.name}}</option>

                                     </select>
                                </div>
                                <div class="form-group col-4">
                                    <div class="input-group">

                                               <b-form-file
                                                v-model="thumbnail"
                                                required
                                                :state="Boolean(thumbnail)"
                                                placeholder="Choose a file or drop it here..."
                                                drop-placeholder="Drop file here..."
                                                ></b-form-file>

                                            <!-- <label class="custom-file-label">Choose Thumbnail</label> -->

                                    </div>
                                </div>

                                <div class="form-group col-12">
                                  <vue-editor required v-model="content" />

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            content:"",
            title:"",
            thumbnail:null,
            industries:{},
            industry_id:""
        };
    },
    methods: {

        getIndustries(){
            axios.get('/dashboard/industries').then((res)=>{
                console.log("industries",res.data);
                this.industries=res.data.industries;

            })
        },

        onSubmit(){

             Vue.$toast.default("please wait data is processing...",{duration:800});
             let formdata = new FormData();
             formdata.append("title",this.title);
             formdata.append("thumbnail",this.thumbnail);
             formdata.append("content",this.content);

                axios.post("/dashboard/project/store/",formdata).then((res)=>{

                    setTimeout(() => {
                          Vue.$toast.success("New Project has been created",{duration:1500});
                    }, 1500);
                });
        }
    },
    mounted(){
        this.getIndustries();
    }
}
</script>

<style>

</style>
