require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import Resume from './components/Resume.vue';
import Protfolow from './components/Protfolow.vue';
import Contact from './components/Contact.vue';
import Login from './components/Login.vue';
import Dashboard from './components/Dashboard.vue';
import Product from './components/Product.vue';
import Clients from './components/passport/Clients.vue';
import AuthorizedClients from './components/passport/AuthorizedClients.vue';
import PersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';

const routes = [
  {
      name: 'home',
      path: '/nurkarim',
      component: HomeComponent
  },{
      name: 'resume',
      path: '/nurkarim/resume',
      component: Resume
  },{
      name: 'protfolow',
      path: '/nurkarim/protfolow',
      component: Protfolow
  },{
      name: 'contact',
      path: '/nurkarim/contact',
      component: Contact
  },{
      name: 'product',
      path: '/nurkarim/products/:id/:slug',
      component: Product
  },
  {
    path: '/nurkarim/login',
    name: 'Login',
    component: Login
  }
];



const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
