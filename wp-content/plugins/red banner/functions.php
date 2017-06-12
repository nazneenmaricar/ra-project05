<?php

/*
Plugin Name: Red banner
Plugin URI: redacademy.com
Description:Adding function to create a custom banner
Version: 0.1
Author: Your name
*/



// function hello(){ echo "hello";
// }
//
// function new_title() {
//   the_title();
// }
//
// class new_title {
//   function init (){
//     the_title();
//   }
// }
//
// class display_post {
//   function init () {
//     $this->title =  get_the_title();
//     $this->content = get_the_content();
//    $this->author = get_the_author();
//   //  self:: new_title();
//     self::render();
//   //  self:: new_author();
//   }
//   function render() {
//   //echo $this->title;
//   echo $this->content;
//   //echo $this->author;
// }
// }

class camp_banner {
          function __construct() {

                self:: check_image();
          }

          function check_image(){
            $value = get_field( "banner_image" );
            if( $value != null && !is_archive()) {
            // echo $value;
            self::show_banner();
          }
            if(is_archive() || get_field("banner_image")==null){
            self::hide_banner();
            }
           }


          function show_banner(){
              $this -> output = '<style>
          			.banner { background-image:  linear-gradient( rgba(0,0,0,0.2),rgba(0,0,0,0.3)),
          								url("wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-full.svg"), url("'.get_field("banner_image").'") ;
          								height: 100vh;
          								background-position: center, center center;
          								background-size:  contain, 30vh, cover;
          								background-repeat: no-repeat;}

                          a:visited {color: white;}
                          a:active {color: white;}
                          a:link {color: white;}
                          a:hover {color:#008C83;}

                          span {color: black;}

          		</style>';
              self::render();
            }

             function hide_banner(){



               $this -> output = '<style> .banner { background-image: none;}

                  .top-nav {padding: 10px 30px;
                            border-bottom: solid 1px #d1d4d6;}

                  .top-nav ul li {color: #008C83;}

                  .logo-img {height: 100%;}

                    a:visited {color: #008C83;}
                    a:active {color: #008C83;}
                    a:link {color: #008C83;}
                    a:hover {color:midnightblue;}

                    span {color: #008C83; }

        </style>';
               self:: render();
             }

              function render(){
                echo $this->output;
        }

    function logo_imgs(){
        if(is_archive() || get_field("banner_image")==null){
          return "green-logo";
        }
        else {
          return "white-logo";
        }
    }

function red_starter_scripts(){
  wp_enqueue_script( 'i-haz-search', get_template_directory_uri() . '/js/search.js', array(), '20130115', true );
}
}
?>
