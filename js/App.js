let App = Vue.extend({});

let posts = Vue.extend({
  template:'#posts-template',
  data: function () {
    return {
      posts: ''
    };
  },
  mounted: function () {
    posts = this.$resource('/wordpress/wp-json/wp/v2/posts?_embed');
    posts.get().then((response) => {
      this.posts = response.body;
    });  
  },
  methods: {
    //We use MomentJS to format dates returned by the WP API.
    moment: function (date) {
      return moment(date);
    }
  }
});

let articles = Vue.extend({
  template:'#articles-template',
  data: function () {
    return {
      articles: ''
    };
  },
  mounted: function () {
    articles = this.$resource('/wordpress/wp-json/wp/v2/posts');
    articles.get().then((response) => {
      this.articles = response.body;
    });  
  }
});

let router = new VueRouter({
  routes: [
    {
      path: '/',
      name: 'posts',
      component: posts
    },
    {
      path: '/articles',
      name: 'articles',
      component: articles
    }
  ]
});

new Vue({
  el: '#app',
  router,
  template: '',
  components: { App }
});