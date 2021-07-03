
require('./bootstrap');

import Vue from 'vue'

import ProductIndex from './components/admin/index.vue'

new Vue({
    el: '#app',
	components: {
		ProductIndex
	}
});
