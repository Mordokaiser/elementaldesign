<template>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Nombre Completo">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="message" placeholder="Mensaje"></textarea>
        </div>
        <div class="button-form">
            <button type="submit" class="button button-send">Enviar</button>
        </div>
    </form>
</template>

<script setup>
</script>

<style>
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
</style>
