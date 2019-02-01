require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);


import CreateComponent from './components/projetos/CreateComponent.vue';
import IndexComponent from './components/projetos/IndexComponent.vue';


import CreateManager from './components/gerentes/CreateComponent.vue';


import CreateEmployee from './components/funcionarios/CreateComponent.vue';

const routes = [
  {
      name: '/',
      path: '/projetos',
      component: IndexComponent
  },
  {
      name: 'create-project',
      path: '/create/project',
      component: CreateComponent
  },
  {
      name: 'projetos',
      path: '/projetos',
      component: IndexComponent
  },
  {
      name: 'create-manager',
      path: '/create/manager',
      component: CreateManager
  },
  {
      name: 'create-employee',
      path: '/create/employee',
      component: CreateEmployee
  }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');