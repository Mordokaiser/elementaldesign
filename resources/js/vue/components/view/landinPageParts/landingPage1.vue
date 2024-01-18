<template>
    <div class="principal" :style="{ 'background-image': `url(${background1})` }">
      <p class="textSeba">SITIOS WEBS QUE INSPIRAN, RESULTADOS QUE PERDURAN, TU NEGOCIO ES <spam>ELEMENTAL</spam></p>
    </div>
  </template>
  
  <script setup>
  const background1 = '/images/backgrounds/fondoPC.png';
  </script>
  
  <style>
  .principal{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .textSeba{
    font-family: 'Inter';
    font-size: 15px;
    color: rgb(0, 0, 0);
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.5rem;
  }
  .textSeba spam{
    background-color: rgb(0, 141, 213);
    font-family: 'inter';
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.5rem;
  }
  </style>
  

