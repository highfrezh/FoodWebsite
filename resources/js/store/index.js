import Vuex from 'vuex';
import Vue from 'vue';
import restuarant from './modules/restuarant';

// Load Vuex 
Vue.use(Vuex);

// Create store
export default new Vuex.Store({
  modules: {
    restuarant
  }
});