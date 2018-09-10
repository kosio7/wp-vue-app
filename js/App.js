let App = Vue.extend({});

let posts = Vue.extend({
  template:'#posts-template',
  data: function () {
    return {
      posts: ''
    };
  },
  mounted: function () {
    posts = this.$resource('/wordpress/wp-json/wp/v2/posts?per_page=15');
    posts.get().then((response) => {
      this.posts = response.body;
    });  
  }
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