<template>
    <div class="row poto2">
        <p class="textSeba3">¿quienes <spam>SOMOS?</spam>
        </p>
        <div class="row">
            <!--texto-->
            <p class="textoLargo">Somos un grupo de 5 programadores con un objetivo común: crear un servicio que tenga como
                finalidad desarrollar una plataforma web. Esta plataforma está diseñada para cubrir las necesidades de las
                pequeñas y medianas empresas que buscan soluciones como la creación de plataformas web responsivas. Nuestro
                propósito es hacer accesible este servicio a todas las empresas que requieran de estas capacidades.</p>
        </div>
        <div class="row rowSomos" >
            <!--images-->
            <img class="imagenSomos" :src="somos">

        </div>
    </div>
</template>

<script setup>
const somos = '/images/landing/chanteibur.png';
</script>
<style>
.textSeba3 {
    padding-top: 50px;
    font-family: 'Inter';
    font-size: 20px;
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    letter-spacing: 0.2rem;

}

.textSeba3 spam {
    background-color: rgb(0, 141, 213);
    font-family: 'inter';
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
}

.poto2 {
    text-align: center;
    background-image: url('/images/backgrounds/landingBackground2.png');
    color: aliceblue;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 800px;
    width: 100%;
    background-blend-mode: color;
    background-color: rgba(0, 0, 0, 0.5);
    /* Cambia el valor de transparencia según tus necesidades */
}

.textoLargo {
    text-align: justify;
    width: 70%;
    /* Ajusta el ancho según tus necesidades */
    margin: 0 auto;
    /* Centra el texto horizontalmente */
    font-family: 'Inter';
    font-size: 15px;
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    letter-spacing: 0.2rem;
}
.imagenSomos{
    height: 340px; 
    width: 809px;
}
.rowSomos{
    justify-content: center;
}
</style>
