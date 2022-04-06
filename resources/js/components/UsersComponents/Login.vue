<template>
    <Header />
          <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><router-link to="/">Home</router-link></li>
            <li class="breadcrumb-item active" aria-current="page">User Login</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Login</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

    <!-- registration form -->
    <div class="container my-5">
        <div class="row justify-content-center align-items-center" >
           <div class="col-md-5 shadow p-3 rounded">
             <div class="container" v-if="message !== ''">
               <div v-if="message.error !== '' ">
                 <div v-for="msg in message.error" :key="msg">
                    <p class="alert alert-danger">{{msg}}</p>
                 </div>
               </div>
               <div v-if="message.success !== '' ">
                 <p class="alert alert-success">{{message.success}}</p>
               </div>
               
             </div>
               <form class="form-group" @submit.prevent="login"  action="" method="post">
                   @csrf
                    <label for="">Email</label>
                   <input type="email" class="form-control" v-model="form.email" >
                   <label for="">Password</label>
                   <input type="password" class="form-control" v-model="form.password" >
                   <div class="d-flex " style="justify-content:space-between">
                      <button  @click="login" type="button" class="btn btn-primary my-3">Register</button>
                      <span class="my-4 text-sm">Not yet registered? <a href="/register">Register</a> </span>
                   </div>
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
              error : [],
              success : ''
            },
            form : 
              {
              email : '',
              password : '',
            }
            
        }
    },
    computed : {
        register(){ // user registration
          if (this.form.password !== this.form.confirm_password) { // check password combination
            this.message.error[0] = `passwords do not match`
          }
          else if(this.form.first_name == ''){
            this.message.error[0] = 'first name is missing' // check username
          }
          else if(this.form.last_name == ''){
            this.message.error[0] = 'last name is missing' // check username
          }
          else if(this.form.password == ''){
            this.message.error[0] = 'password is missing' // check password
          }
          else{
            axios.post('http://localhost:8000/api/register',this.form).then(
              response =>{
               if (response.data.error) {
                 this.message.success = '' //set success message to empty
                 Object.keys(response.data.error).forEach(e =>{
                   this.message.error = response.data.error[e]
                 })
               }
               else if(response.data.success){
                 this.message.error = '' // set error message to empty
                 console.log(response.data.success)
                  this.message.success = response.data.success
                 console.log(response.data.success)

               }

              }
            ).catch(errors =>{
              // this.message.error = errors.error.email
              console.log(errors)
            })
          }
        }
        
    }

}
</script>

<style>

</style>