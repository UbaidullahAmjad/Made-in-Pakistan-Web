
require('./bootstrap');
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';

window.Vue = require('vue');
Vue.use(Vuetify)





/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const VueUploadComponent = require('vue-upload-component')
Vue.component('file-upload', VueUploadComponent)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Chat', require('./components/Chat.vue').default);
Vue.component('PrivateChat', require('./components/PrivateChat.vue').default);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
});
