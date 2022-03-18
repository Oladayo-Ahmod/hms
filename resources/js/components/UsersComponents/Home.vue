<template>
<Header /> 
</template>

<script>
import Header from './layouts/Header';
    export default {
        name : "home",
        components : {
            Header,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
