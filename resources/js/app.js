import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap';
import { createApp } from "vue";
import App from"./vue/components/view/landinPage.vue"
const app = createApp (App)
 app.mount("#app")

import AppLogin from"./vue/components/login/loginComponent.vue"
const login = createApp (AppLogin)
 login.mount("#login")

import AppRegister from"./vue/components/login/registerComponent.vue"
const register = createApp (AppRegister)
register.mount("#register")

 