import "../public/app.css";

import Vue from "vue";
import App from "./App.vue";
import VueAnalytics from "vue-analytics";
import VueScrollTo from "vue-scrollto";



Vue.config.productionTip = false;

Vue.use(VueAnalytics,{
  id:'UA-11199921-17'
})

Vue.use(VueScrollTo, {
  container: "body",
  duration: 500,
  easing: "ease",
  offset: 0,
  force: true,
  cancelable: true,
  onStart: false,
  onDone: false,
  onCancel: false,
  x: false,
  y: true
});

new Vue({
  render: h => h(App)
}).$mount("#app");
