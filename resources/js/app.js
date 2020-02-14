/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//window.Vue = require('vue');
import Vue from 'vue'
import ImagesCarousel from './components/ImagesCarousel.vue'
import CarouselControl from './components/CarouselControl'



// Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#slider',
    data:{
        loading: true
    },
    components:{
        ImagesCarousel
    },
    mounted: function(){
        this.loading=false
    }
});
