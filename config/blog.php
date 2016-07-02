<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Blog Meta Configuration
  |--------------------------------------------------------------------------
  |
  | Here you may define all of the blog meta tags for your application.
  | These will be used for web scraping and open graph tags
  | on sites such as Facebook and Twitter.
  |
  */
  'name'            => 'Canvas',
  'title'           => 'Canvas',
  'subtitle'        => 'Minimal Blogging App',
  'description'     => 'Blog',
  'author'          => 'Todd Austin',

  /*
  |--------------------------------------------------------------------------
  | Blog Post Configuration
  |--------------------------------------------------------------------------
  |
  | Pretty self-explanatory here. Indicate how many posts you would
  | like to appear on each page.
  |
  */
  'posts_per_page'  => 6,

  /*
  |--------------------------------------------------------------------------
  | Uploads Configuration
  |--------------------------------------------------------------------------
  |
  | Specify what type of storage you would like for your application. Just
  | as a reminder, your uploads directory MUST be writable by the
  | web server for the uploading to function properly.
  |
  | Supported: "local"
  |
  */
  'uploads'         => [
    'storage'       => 'local',
    'webpath'       => '/uploads/',
  ],

];
