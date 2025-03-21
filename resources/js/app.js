/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import Vue from "vue";

Vue.component("home-component", require("./components/Home.vue").default);
Vue.component("form-component", require("./components/Form.vue").default);
Vue.component("table-component", require("./components/Tabela.vue").default);

new Vue({
    el: "#app",
});
