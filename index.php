<?php get_header(); ?>
  <div class="wrapper">
    <div id="app">
      <router-view></router-view>
    </div>
  </div>

  <template id='posts-template'>    
    <div>
      <v-toolbar>
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>Post Fetcher</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
          <v-btn flat to="/">Posts</v-btn>
          <v-btn flat to="/articles">Articles</v-btn>
        </v-toolbar-items>
      </v-toolbar>
      <div v-for='post in posts'>
        {{ moment(post.date).format('MMMM Do YYYY, h:mm:ss a') }}
        {{ post.title.rendered }}
        {{ post._embedded.author[0].name }}
      </div>
    </div> 
  </template>

  <template id='articles-template'>
    <div>
    <v-toolbar>
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>Post Fetcher</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
          <v-btn flat to="/">Posts</v-btn>
          <v-btn flat to="/articles">Articles</v-btn>
        </v-toolbar-items>
    </v-toolbar>
    <div v-for='article in articles'>
        <div v-html="article.content.rendered"></div>
    </div>
    </div> 
  </template>
<?php get_footer(); ?>