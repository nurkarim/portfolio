<template>
    <div>
        <app-side-bar v-if="showNavAndSide"></app-side-bar>
        <div class="col-lg-9 col-md-8 tab-container" style="margin-top: -16px;">
         <div class="row">
            <app-nav v-if="showNavAndSide"></app-nav>              
            <router-view></router-view>
          </div> 
        </div>
    </div>
</template>

<style>
.nav-link {
  display: block;
     padding: 2px 15px 11px 18px;
     font-weight: 700
}
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>
    import AppSideBar from './partial/AppSideBar'
    import AppNav from './partial/AppNav'
    export default{
        components: {
            'app-nav': AppNav,
            'app-side-bar': AppSideBar
        },
        computed:{
            showNavAndSide(){
                return this.$route.name == 'Login' ? false : true;
            }
        },
        created(){

        }
    }
</script>