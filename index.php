<?php get_header(); ?>
  <div class="wrapper">
    <div id="app">
      <router-view></router-view>
    </div>
  </div>

  <template id='posts-template'>    
    <div>
      <v-toolbar>
        <v-toolbar-title>Post Fetcher</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
          <v-btn flat to="/">Posts</v-btn>
          <v-btn flat to="/articles">Articles</v-btn>
        </v-toolbar-items>
      </v-toolbar>
      <div v-for='post in posts'>
        <v-card class="my-3">        
          <v-container>
            <v-layout>
              <v-flex d-flex>
                <span class="headline">{{ post.title.rendered }}</span>                
              </v-flex>
            </v-layout>
            <v-layout>              
              Article written by &nbsp
              <p class='author'>
                {{ post._embedded.author[0].name }}
                <!-- NOTE: Find a way to present background image for the post. -->
                <!-- {{ post._embedded['wp:featuredmedia'][0] }} -->
              </p>
            </v-layout>
            <v-layout>          
              Post added on:
              {{ moment(post.date).format('MMMM Do YYYY, h:mm a') }}              
            </v-layout>
          </v-container>
            </div>
          </div> 
        </v-card>
        
  </template>

  <template id='articles-template'>
    <div>
    <v-toolbar>
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

  <style>  
    .author {
    font-family: Verdana, Helvetica, Arial, sans-serif;
    font-weight: bold;
    color: #383333;
  }
  </style>
<?php get_footer(); ?>