
require('./bootstrap');

import Vue from 'vue'

import ProductIndex from './components/admin/index.vue'
import Blog from './components/blog.vue'

new Vue({
    el: '#app',
	components: {
		ProductIndex,
        Blog,
	}
});
