<template>
    <Header />
          <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
            <li class="breadcrumb-item active" aria-current="page">Registration Form</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Register</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

    <!-- registration form -->
    <div class="container">
        <div class="row justify-content-center align-items-center">
           <div class="col-md-5">
               <form class="form-group" @submit.prevent="register()" action="" method="post">
                   <label for="">Username</label>
                   <input type="text" class="form-control" v-model="username" > <br>
                    <label for="">Email</label>
                   <input type="email" class="form-control" v-model="email" ><br>
                   <label for="">Password</label>
                   <input type="password" class="form-control" v-model="password" ><br>
                   <label for="">Confirm Password</label>
                   <input type="password" class="form-control" v-model="c_password" ><br>
               </form>
           </div>
        </div>
    </div>
    <Footer />
</template>

<script>
import axios from 'axios'
import Footer from './layouts/Footer.vue'
import Header from './layouts/Header.vue'
export default {
    name : "Register",
    components : {
        Footer,
        Header
    },
}
</script>

<style>

</style>