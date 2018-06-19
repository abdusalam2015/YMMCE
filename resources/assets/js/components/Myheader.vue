<template lang="html">
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-dark">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <a class="navbar-brand" href="#">Navbar</a>
       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <router-link to="/home" class="nav-link">Home</router-link>
             </li>
             <li class="nav-item">
               <router-link to="/about" class="nav-link">About</router-link>
             </li>

             <li class="nav-item">
               <router-link to="/contact" class="nav-link">Contact</router-link>
             </li>

         </ul>
       </div>
     </nav>
 </template>

<script>
export default {
}
</script>

<style lang="css">

</style>
