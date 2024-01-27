<template>
  <div class="principal" :style="{ 'background-image': `url(${background1})` }">
    <div class="row">
      <div class="col">
        <p class="RobotoFont" >SITIOS WEBS QUE INSPIRAN, RESULTADOS QUE PERDURAN, TU NEGOCIO ES <spam>ELEMENTAL</spam>
        </p>
      </div>

    </div>
  </div>
</template>
  
<script setup>
const background1 = '/images/backgrounds/fondoPC.png';
</script>
  
<style>
.principal {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 800px;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
  

