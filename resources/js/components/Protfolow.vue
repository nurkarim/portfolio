<template>
	<div class="col-md-12">
        <div id="content" class="panel-container">
<div id="portfolio" class="row bottom_45" >
          <div class="col-md-4 col-sm-6" v-for="product in products">
                    <div class="single-product-item-5">
                        <div class="thumb">
                             <router-link :to="{ path: '/products/'+product.id+'/'+product.slug}">
                                <div class="img-wrapper">
                                    <img src="https://fiverr-res.cloudinary.com/images/t_medium7,q_auto,f_auto/gigs/38669230/original/ed1245d351c3bab3ecf85215daa1dade30763eb6/design-5-pinterest-images-for-your-blog.png" alt="">
                                </div>
                             </router-link>
                            <span class="tag" >New</span>
                        </div>
                        <div class="content">
                            <router-link :to="{ path: '/products/'+product.id}">
                                <h4 class="title" v-html="product.name"></h4>
                            </router-link>
                            <span class="price" v-html="product.price"></span>
                      
                            <a href="#" style="float: right;" class=" btn btn-xs btn-primary">Live Demo</a>
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
                products : [
                {
                id:'1',
                name:'EMS',
                image:'',
                price:'$100',
                slug:'education-management-system-ems',
                },{
                id:'2',
                name:'Inventory',
                image:'',
                price:'$100',
                slug:'inventory-management-system',

                },{
                id:'3',
                name:'E-Attendance',
                image:'',
                price:'$100',
                slug:'biometric-attendance-management-system',

                }
                ]
            }
        }
    }
</script>