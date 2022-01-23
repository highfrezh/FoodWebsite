require('./bootstrap');

//importing vue
window.Vue = require('vue').default;

// Import VueRouter
import VueRouter from 'vue-router';
import routes from './routes';
//importing vuex
import store from './store';

//Import VueProgressBar
import VueProgressBar from 'vue-progressbar';

// Telling the vue we want to use vueProgressbar
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '3px'
});

window.Fire = new Vue();

//Import Sweetalert2
import Swal from 'sweetalert2'
// for global declaration i.e its accessable anywhere in the application
window.swal = Swal;

// sweetalert2 toaster importation
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

//global Toast to be accessable any where in the application
window.Toast = Toast; //window.toast is use to access the the toast anywhere in the application

// Import V-form
import Form from 'vform'
window.Form = Form;
// vform component importation
import {
  Button,
  HasError,
  AlertError,
  AlertErrors,
  AlertSuccess
} from 'vform/src/components/bootstrap4'

// vform build in  components registration
Vue.component(Button.name, Button)
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(AlertErrors.name, AlertErrors)
Vue.component(AlertSuccess.name, AlertSuccess)

// Telling vue we want use VueRouter
Vue.use(VueRouter) 

// component link
Vue.component('heading', require('./components/restaurant/Header.vue').default);
Vue.component('foot', require('./components/restaurant/Footer.vue').default);
Vue.component('preload', require('./components/restaurant/Preload.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
    store
});