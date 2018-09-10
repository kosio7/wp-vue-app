let App = Vue.extend({});

// TODO: This is for testing purposes only, refactor and change
// as needed.
let posts = Vue.extend({
  template:"<h1>TEST</h1>"
});

let router = new VueRouter({
  routes: [
    {
      path: '/',
      name: 'posts',
      component: posts
    }  
  ]
});

new Vue({
  el: '#app',
  router,
  template: '',
  components: { App }
});