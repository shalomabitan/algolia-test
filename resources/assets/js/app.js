
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import InstantSearch from 'vue-instantsearch';
import Vue2Filters from 'vue2-filters'
import VueResource from 'vue-resource';

Vue.use(InstantSearch);
Vue.use(Vue2Filters);
Vue.use(VueResource);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
        objectIds: []
    },
    methods: {
        exportxls: function (event) {

            //get al elements
            let table = document.getElementsByClassName("object-id-number");

            //loop over and append to objectIds
            for (var i = 0; i < table.length; i++) {
                this.objectIds.push(table[i].innerText);
            }

            let param_ids = this.objectIds.join(';');

            // POST /export
            window.location.href = '/export?ids=' + param_ids;
        }
  }
});
