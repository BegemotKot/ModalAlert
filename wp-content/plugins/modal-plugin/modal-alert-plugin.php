<?php
/**
 * Plugin Name: Modal Alert Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: Plugin for Modal Alert
 * Version: 1.0
 * Author:
 * Author URI:
 */

 add_action( 'the_content', 'modal_alert' );

 function modal_alert () {


   $posts = get_field('choose_post_type', 'options');
   //var_dump($posts);

   if( $posts ): ?>
     <?php $postUrl = array(); ?>
     <?php foreach( $posts as $post):  ?>
         <?php setup_postdata($post); ?>
             <?php $postUrl[] = get_permalink($post->ID); ?>
     <?php endforeach; ?>
     <?php wp_reset_postdata(); ?>
   <?php endif; ?>

  <?php

      $currentUrl = get_the_permalink();
      //var_dump($postUrl)
      //var_dump($currentUrl);


     if (in_array($currentUrl, $postUrl))
       {
         echo "
               <script type=\"text/javascript\">

                 var hideFirst = document.getElementById('hideFirst');
                 var hideSecond = document.getElementById('hideSecond');
                 var hideFirstText = hideFirst.innerText;
                 var hideSecondText = hideSecond.innerText;
                 document.getElementById('modal_title').innerHTML = hideFirstText;
                 document.getElementById('modal_text').innerHTML = hideSecondText;

                 var modal = document.getElementById('myModal');
                 window.onload = function() {
                   modal.style.display = 'block';
                 }

                 window.onclick = function(event) {
                   if (event.target == modal) {
                     modal.style.display = 'none';
                   }
                 }

               </script>
           ";
       }
     else
       {
       echo "Match not found";
       }

 }












 ?>
