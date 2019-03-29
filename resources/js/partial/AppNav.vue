<template>
	<header class="col-md-12">
        <nav>
            <div class="row">
                <!-- navigation bar -->
                <div class="col-md-8 col-sm-8 col-xs-4">
                    <ul class="tabs">
                        <li class="tab">
                            <router-link  to="/nurkarim" class="nav-link home-btn"><i class="fa fa-home" aria-hidden="true"></i></router-link>
                        </li>
                        <li class="tab"><router-link to="/nurkarim/resume" class="nav-link">RESUME</router-link></li>
                        <li class="tab"><router-link to="/nurkarim/protfolow" class="nav-link">PORTFOLIO</router-link></li>
                        <li class="tab"><router-link to="/nurkarim/contact" class="nav-link">CONTACT</router-link></li>
                        <li class="tab"><router-link to="/nurkarim/blogs" class="nav-link">BLOG</router-link></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-8 dynamic">
                    <a href="mailto:nurkarim772@gmail.com" class="pull-right site-btn icon hidden-xs">Hire Me <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                    <div class="hamburger pull-right hidden-lg hidden-md"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="hidden-md social-icons"> 
                        <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                        <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                        <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
                        <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a> 
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
	export default{
		name: 'Nav',
		
	};
</script>