require('./bootstrap');
 
window.Vue = require('vue');
 
Vue.component('modal', require('./components/ModalComponent.vue').default);
Vue.component('welcome', require('./components/Example.vue').default);
const app = new Vue({
    el: '#app',
    data: {
        showModal: false,
    },
    methods:{

        
    }
});

const app2 = new Vue({
    el: '#example',
    data: {
      message : 'Hello Vue!',
    }
  })