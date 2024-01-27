<template>
    <navbarComponentVue />
    <slot></slot>
    <footerComponentVue />
</template>

<script setup>
import "@fontsource/roboto";
import "@fontsource/inter";
import '@fontsource/fugaz-one';

import navbarComponentVue from './elements/navbarComponent.vue';
import footerComponentVue from './elements/footerComponent.vue';
</script>
