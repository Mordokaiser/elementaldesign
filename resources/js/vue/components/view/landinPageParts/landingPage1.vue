<template>
  <div class="principal" :style="{ 'background-image': `url(${background1})` }">
    <div class="row">
      <div class="col">
        <p class="textSeba" >SITIOS WEBS QUE INSPIRAN, RESULTADOS QUE PERDURAN, TU NEGOCIO ES <spam>ELEMENTAL</spam>
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
  width: 100%;
  display: flex;
  justify-content: center;
}

.textSeba {
  padding-top: 320px;
  font-family: 'Inter';
  font-weight: 700;
  font-size: 15px;
  color: rgb(0, 0, 0);
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.3rem;
}

.textSeba spam {
  background-color: rgb(0, 141, 213);
  font-family: 'inter';
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.5rem;
}
</style>
  

