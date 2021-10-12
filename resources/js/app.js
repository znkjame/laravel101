require('./bootstrap');

require('alpinejs');

import Vue from 'vue'

Vue.component('Hello',require('./components/Hello').default);


const app = new Vue({
    el: '#app',
    components: { Hello }
});
