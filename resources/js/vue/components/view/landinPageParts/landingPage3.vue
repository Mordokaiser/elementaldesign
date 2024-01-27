<template>
    <!-- grilla parte 3-->
    <div class="row suscripciones">
        <p class="RobotoFont title fix3">CONSULTA LAS <spam>SUSCRIPCIONES</spam></p>
        <div class="col d-flex justify-content-evenly sub-box">

            <div class="sub-box-in FugazOneFont">1<br> mes</div>
        </div>
        <div class="col d-flex justify-content-evenly sub-box">
            <div class=" sub-box-in FugazOneFont">2 <br> meses</div>
        </div>
        <div class="col d-flex justify-content-evenly sub-box">
            <div class="sub-box-in FugazOneFont">1<br> año</div>
        </div>
    </div>
</template>

<script setup>
</script>

<style>
.fix3 {
    padding-bottom: 55px;

}
.suscripciones {
    align-items: center;
    align-content: center;
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

}
</style>
