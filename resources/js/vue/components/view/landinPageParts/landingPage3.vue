<template>
    <!-- grilla parte 3-->
    <div class="row suscripciones">
        <p class="textSeba2">CONSULTA LAS <span>SUSCRIPCIONES</span></p>
        <div class="col d-flex justify-content-evenly sub-box">

            <div class="sub-box-in">1 mes</div>
        </div>
        <div class="col d-flex justify-content-evenly sub-box">
            <div class=" sub-box-in">2 meses</div>
        </div>
        <div class="col d-flex justify-content-evenly sub-box">
            <div class="sub-box-in">1 año</div>
        </div>
    </div>
</template>

<script setup>
</script>

<style>
.textSeba2 {
    padding-top: 3%;
    padding-bottom: 1%;
    font-family: 'Inter';
    font-size: 15px;
    color: rgb(0, 0, 0);
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.5rem;
}

.textSeba2 span {
    background-color: rgb(0, 141, 213);
    font-family: 'inter';
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.5rem;
}

.suscripciones {
    margin-inline: 10%;
    height: 800px;
}

.sub-box {
    
    align-content: center;
    background-color: rgb(205, 205, 205);
    margin-left: 5%;
    margin-right: 5%;
    height: 600px;
    width: 50px;
    border: 7px solid black;
    box-shadow: 10px 10px rgb(176, 176, 177);
}

.sub-box-in {
    padding-top: 50%;
    color: rgb(0, 141, 213);
    text-transform: uppercase;
    font-family: Fugaz One;
    font-size: 90px;
    text-align: center;

}</style>
