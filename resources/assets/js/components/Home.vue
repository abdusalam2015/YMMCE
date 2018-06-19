<template lang="html">
  <div class="">
    <div class="panel panel-success" >
        <div class="panel-heading">
          <!-- <button type="button" class="btn btn-success">Add New</button> -->
          <router-link to="/create" class="btn btn-primary">Create New Name</router-link>

          <span class="pull-right">YMMCE</span>
        </div>
        <div class="panel-body" dir="rtl">
          <input class="form-control" id="myInput" dir="rtl" type="text" placeholder="ابحث..">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6">lkdjsffffffffffffffffffffffffffffffffffffffffffffffffffffffff  </div>
            <div class="col-lg-2 col-sm-2 col-md-2 text-success">
                <i class="fas fa-eye"></i>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2 text-info">
               <i class="fas fa-edit"></i>
           </div>
            <div class="col-lg-2 col-sm-2 col-md-2 text-danger">
                <i class="fas fa-trash-alt"></i>
            </div>


        </div>

      </div>
    </div>
    <Add></Add>
    </div>
</template>

<script>
let Add =  require('./Add.vue');

export default {
  components:{Add}
}
</script>

<style lang="css">
</style>
