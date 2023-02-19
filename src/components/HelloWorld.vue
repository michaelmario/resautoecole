<template>
  <div class="hello">
    <div class="position-relative overflow-hidden p-3 p-md-5  text-center ">
  <div class="col-md-8 p-lg-5 bgDark my-5">
    <h1 class="FirstTitle">Carrosserie & Lavage</h1>
    <p class="lead font-weight-normal text-white">Nous travaillons à la fois manuels et machines pour satisfaire nos clients et leur apporter le confort qu'ils méritent</p>
    <a class="btn btn-outline-secondary text-white" href="#">Nous Contactez</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .hello{
    background-image: url('http://newsite.local/wp-content/uploads/2023/02/Untitled-design-4.png');
    background-size: cover;
    background-repeat: no-repeat;
    margin-top:-70px;
  }
  @media(max-width:768px){
 .hello{
  margin-top:0px;
 }
 
  }
</style>
