<template>
    <navbarComponentVue />
    <slot></slot> 
    <footerComponentVue />
</template>

<script setup>
import navbarComponentVue from './elements/navbarComponent.vue';
import footerComponentVue from './elements/footerComponent.vue';
</script>
