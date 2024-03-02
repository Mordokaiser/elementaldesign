<template>
    <form @submit="login">
        <div class="form-group center-input">
            <label for="email">Correo</label>
            <input type="email" class="form-control" id="email" placeholder="exaple@gmail.com">
        </div>
        <div class="form-group center-input">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="***********">
        </div>
        <div class="button-form">
            <button type="submit" class="button button-send">Ingresar</button>
        </div>
    </form>
    <p style="text-align: center;  padding-top: 50px; margin-bottom: 0px;">No tienes cuenta?</p>
    <div class="button-form">
            <button type="submit" class="button" style="background-color: rgb(0, 213, 47); color:white; border-width: 1px; border-color: antiquewhite; box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.25); padding-inline: 100px; margin-bottom: 30px;">Registrate aquí</button>
    </div>
    <p style="text-align: center;">Olvidaste tu contraseña? <span>Cambiala <a href="">aqui</a></span></p>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
//v-models
const email = ref('');
const password = ref('');

//funcion que envia la consulta al servidor
function login() {
    axios.post('/api/login', {
    email: email.value,
    password: password.value
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });

}
</script>

<style scoped>
form {
    width: 650px;
    margin: 0 auto;
    margin-top: 25px;
}

.form-group {
    margin-bottom: 25px;
}

.form-control {
    background-color: rgba(217, 217, 217, 1);
    border-color: black;
    border-radius: 7px;
}

.form-control::placeholder {
    color: rgba(0, 141, 213, 0.7);
}

#message {
    height: 250px;
    resize: none;
}

#message::placeholder {
    text-align: start;
}

.button{
    border-radius: 14px;
}
.button-form {
    display: flex;
    justify-content: center;
    align-items: center;
}

.button-send {
    background-color: rgba(0, 141, 213, 0.7);
    border-color: transparent;
    border-radius: 14px;
    color: white;
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);
    font-weight: bold;
    font-size: 20px;
    width: 180px;
    height: 50px;
    box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.25);
}
.center-input{
    text-align: center;
    color:black;
}
</style>

  



