<template>
  
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              
              <router-link to="/home" class="nav-link" :class="routers == 'home' ? 'active-style' : '' ">
               Home
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/about" class="nav-link" :class="routers == 'about' ? 'active-style' : '' ">
                <!-- <a class="nav-link" href="#">About Us</a> -->
                About Us
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/doctors" class="nav-link" :class="routers == 'doctors' ? 'active-style' : '' ">
                  Doctors
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/blog" class="nav-link" :class="routers == 'news' ? 'active-style' : '' ">
                  News
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/contact" class="nav-link" :class="routers == 'contact' ? 'active-style' : '' ">
               Contact
              </router-link>
            </li>
            <li class="nav-item">
               <div class="dropdown" v-if="state.id !== null && state.id !== ''">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              {{state.firstName}}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="triggerId">
                           <router-link to="/logout" class="dropdown-item"> 
                              Logout
                           </router-link>
                           <router-link to="/profile" class="dropdown-item"> 
                            Profile
                           </router-link>
                      </div>
                  </div>
              <router-link to="/login" class="btn btn-primary ml-lg-3" v-else> 
              Login
              </router-link>
             
            </li>
            
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
</template>

<script>
import {useRoute} from 'vue-router'
export default {
name : "Header",
data(){
  return{
    routers : '',
    state : {
      firstName : null,
      login : false,
      id : null
    },
  }
},
methods : {
  currentRoute(){
    let route = useRoute().name;
    this.routers = route
  }
},
beforeMount(){
  this.currentRoute()
    axios.get('http://localhost:8000/api/authenticated',{
      withCredentials : true,
      headers : {
        Authorization   : 'Bearer '+ localStorage.getItem('loginToken'),
      }
    }).then(res=>{
      if (res.data.id) {
        this.state.firstName = res.data.first_name
        this.state.id = res.data.id
        this.state.login = true
      }
     
    })
  }
}
</script>

<style scoped>
.active-style{
  color : #00D9A5 !important;
}
</style>>
