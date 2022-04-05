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
    <div class="container my-5">
        <div class="row justify-content-center align-items-center" >
           <div class="col-md-5 shadow p-3 rounded">
             <div class="container" v-if="message !== ''">
               <div v-if="message.error !== '' ">
                 <p class="alert alert-danger">{{message.error}}</p>
               </div>
               <div v-else-if="message.success !== '' ">
                 <p class="alert alert-success">{{message.success}}</p>
               </div>
               
             </div>
               <form class="form-group" @submit.prevent="register"  action="" method="post">
                   <label for="">First Name</label>
                   <input type="text" class="form-control" v-model="form.first_name" > 
                   <label for="">Last Name</label>
                   <input type="text" class="form-control" v-model="form.last_name" > 
                    <label for="">Email</label>
                   <input type="email" class="form-control" v-model="form.email" >
                   <label for="">Password</label>
                   <input type="password" class="form-control" v-model="form.password" >
                   <label for="">Confirm Password</label>
                   <input type="password" class="form-control" v-model="form.confirm_password" >
                   <button  @click="register" type="button" class="btn btn-primary my-3">Register</button>
               </form>
               <!-- {{username}} -->
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
    data(){
        return{

            message : {
              error : '',
              success : ''
            },

            form : 
              {
              first_name : '',
              last_name : '',
              email : '',
              password : '',
              confirm_password : ''
            }
            
        }
    },
    computed : {
        register(){
          if (this.form.password !== this.form.confirm_password) { // check password combination
            this.message.error = `passwords do not match`
          }
          else if(this.form.first_name == ''){
            this.message.error = 'first name is missing' // check username
          }
          else if(this.form.last_name == ''){
            this.message.error = 'last name is missing' // check username
          }
          else if(this.form.password == ''){
            this.message.error = 'password is missing' // check password
          }
          else{
            axios.get('http://localhost:8000/api/register').then(
              response =>{
               this.message.error = ''
               this.message.success = 'Success'
              }
            ).catch(error =>{
              console.log(error)
            })
          }
        }
        
    }

}
</script>

<style>

</style>