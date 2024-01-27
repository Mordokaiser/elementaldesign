<template>
    <principalLayaout>
        <landingPage1Vue />
        <landingPage2Vue />
        
        <landingPage3Vue />
       <landingPage4Vue />
        <landingPage5Vue />
    </principalLayaout>
</template>
<script setup>
import principalLayaout from '../layaut/principalLayautComponent.vue';
import landingPage1Vue from './landinPageParts/landingPage1.vue';
import landingPage2Vue from './landinPageParts/landingPage2.vue';
import landingPage3Vue from './landinPageParts/landingPage3.vue';
import landingPage4Vue from './landinPageParts/landingPage4.vue';
import landingPage5Vue from './landinPageParts/landingPage5.vue';
</script>
<style>
.title{
    padding-top: 55px;
    text-align: center;
    font-size: 50px;
    font-family: 'Inter';
    text-transform: uppercase;
    letter-spacing: 0.2rem;
}
.RobotoFont {
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    color: rgb(0, 0, 0);
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);
    font-weight: bold;
    text-transform: uppercase;
}

.RobotoFont spam {
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    color: rgb(255, 255, 255);
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);
    font-weight: bold;
    background-color: rgb(0, 141, 213);
}

.RobotoFont2 {
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    color: rgb(255, 255, 255);
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);
    font-weight: bold;
    text-transform: uppercase;
}

.RobotoFont2 spam {
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    color: rgb(255, 255, 255);
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.25);
    font-weight: bold;
    background-color: rgb(0, 141, 213);
}

.FugazOneFont {
    font-family: Fugaz One;
    font-size:80px;
    font-weight: 400;
    line-height: 80px;
    letter-spacing: 0em;
    text-align: center;
}
</style>