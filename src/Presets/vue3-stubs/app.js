/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// Vue 3
import { createApp } from 'vue';
import App from './components/ExampleComponent.vue';

// mounting App component to your application 
// you can make change the Id or even make it a class
createApp(App).mount("#example");
