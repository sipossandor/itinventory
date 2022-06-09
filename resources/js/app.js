require('./bootstrap');

import Alpine from 'alpinejs';

import {createApp} from "vue";
import VueAxios from "vue-axios";
import axios from "axios";
import App from './vue.js';
const app = createApp({

});

window.Alpine = Alpine;

Alpine.start();
