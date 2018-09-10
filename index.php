<?php get_header(); ?>
  <div class="white-wrap">
    <div id="app">
      <router-view></router-view>
    </div>
  </div>

  <template id='posts-template'>
    <div>
      <div v-for='post in posts'>
        {{ post.id }}
        {{ post.title.rendered }}
        {{ post.author }}
      </div>
    </div> 
  </template>
<?php get_footer(); ?>