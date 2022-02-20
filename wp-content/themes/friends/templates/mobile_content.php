<?php
/*
Template Name: Mobile page
*/
$advice_title = carbon_get_post_meta($post->ID, 'advice_title');
$one_bckgr = carbon_get_post_meta($post->ID, 'one_bckgr');
$one_title = carbon_get_post_meta($post->ID, 'one_title');
$one_text = carbon_get_post_meta($post->ID, 'one_text');

$two_bckgr = carbon_get_post_meta($post->ID, 'two_bckgr');
$two_text = carbon_get_post_meta($post->ID, 'two_text');
$two_icon= carbon_get_post_meta($post->ID, 'two_review_icon');

$three_bckgr = carbon_get_post_meta($post->ID, 'three_bckgr');
$three_text_1 = carbon_get_post_meta($post->ID, 'three_text_1');
$three_text_2 = carbon_get_post_meta($post->ID, 'three_text_2');

$four_bckgr = carbon_get_post_meta($post->ID, 'four_bckgr');
$four_text_1 = carbon_get_post_meta($post->ID, 'four_text_1');

$five_bckgr = carbon_get_post_meta($post->ID, 'five_bckgr');
$five_text_1 = carbon_get_post_meta($post->ID, 'five_text_1');
$five_text_2 = carbon_get_post_meta($post->ID, 'five_text_2');

$six_title = carbon_get_post_meta($post->ID, 'six_title');
$six_bcgr = carbon_get_post_meta($post->ID, 'six_bcgr');
$six_tarif = carbon_get_post_meta($post->ID, 'six_tarif');
$six_counter = 0;
$six_comment = carbon_get_post_meta($post->ID, 'six_comment');

$seven_bcgr = carbon_get_post_meta($post->ID, 'seven_bcgr');
$seven_title = carbon_get_post_meta($post->ID, 'seven_title');
$seven_posts = carbon_get_post_meta($post->ID, 'seven_posts');
$seven_counter = 0;

$review_bcgr1 = carbon_get_post_meta($post->ID, 'review_bcgr1');
$review_title1 = carbon_get_post_meta($post->ID, 'review_title1');
$review_video1 = wp_get_attachment_url(carbon_get_post_meta($post->ID, 'review_video'));

$review_bcgr2 = carbon_get_post_meta($post->ID, 'review_bcgr2');
$review_title2 = carbon_get_post_meta($post->ID, 'review_title2');
$review_video2 = wp_get_attachment_url(carbon_get_post_meta($post->ID, 'review_video2'));

$review_bcgr3 = carbon_get_post_meta($post->ID, 'review_bcgr3');
$review_title3 = carbon_get_post_meta($post->ID, 'review_title3');
$review_video3 = wp_get_attachment_url(carbon_get_post_meta($post->ID, 'review_video3'));


$feedback_title = carbon_get_post_meta($post->ID, 'feedback_title');
$feedback_offer = carbon_get_post_meta($post->ID, 'feedback_offer');
$feedback_last_comment = carbon_get_post_meta($post->ID, 'feedback_last_comment');

echo' <div id="frame_1" class="frame active">
		<div class="block_background">';
			if(!empty($one_bckgr)){
			    echo '<img id="img_18116" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $one_bckgr , 'full' ).'"/>';
            }
echo'   </div>
		<div class="absolute">
            <div class="pagination">
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
                <div class="tab"><div class="active"></div></div>
            </div>
            <div class="animation_content">
                <div id="el_16935" class="info_block js-bnfy">
                  <div id="img_16935" class="bnfy-enter f_col">
                      <h1>'. $one_title .'</h1>
                     <p>' . wpautop($one_text) . '</p> 
                 </div>
                </div>
            </div>
        </div>	
      </div>
      
      <div id="frame_2" class="frame" style="display: none;">
            <div class="block_background">';                     
                if(!empty($two_bckgr)){
           echo'  <img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $two_bckgr , 'full' ).'"/>';
                }
           echo'
            </div>
            <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div> 
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                <div class="animation_content">        
                        
                    <div id="el_28914" class="js-bnfy">
                        <img class="img_28914 bnfy-enter" alt="Vector" width="20" height="16"
                             src="'. get_stylesheet_directory_uri() .'/assets/image/28914.svg"/>
                        <img class="img_28914 bnfy-exit" alt="Vector" width="20" height="16" 
                             src="'. get_stylesheet_directory_uri() .'/assets/image/28914.svg"/>
                    </div>
                    
                    <div id="el_28917" class="js-bnfy">
                        <img class="img_28917 bnfy-enter" alt="Vector" width="20" height="16"
                             src="'. get_stylesheet_directory_uri() .'/assets/image/28917.svg"/>
                        <img class="img_28917 bnfy-exit" alt="Vector" width="20" height="16" 
                             src="'. get_stylesheet_directory_uri() .'/assets/image/28917.svg"/>
                    </div>
                    
                    <div id="el_28918" class="js-bnfy">
                        <img class="img_28918 bnfy-enter" alt="Vector" width="20" height="16" 
                             src="'. get_stylesheet_directory_uri() .'/assets/image/28918.svg"/>
                        <img class="img_28918 bnfy-exit" alt="Vector" width="20" height="16" 
                             src="'. get_stylesheet_directory_uri() .'/assets/image/28918.svg"/>
                    </div>
                    <div id="el_16994" class="two_infoBlock js-bnfy">
                       <div id="img_16994">';
                        if(!empty($two_icon)){
                            echo'  <img class="icon bnfy-enter" alt="icon" src="'.wp_get_attachment_image_url( $two_icon , 'small' ).'"/>';
                        }
                        echo '<div class="two_info"><p>'. wpautop($two_text) .'</p></div>';
                echo' </div>
                    </div>
               </div>  
            </div>
	  </div>
	  
	  <div id="frame_3" class="frame" style="display: none;">
            <div class="block_background">';                     
            if(!empty($three_bckgr)){
echo'             <img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $three_bckgr , 'full' ).'"/>';
            }
echo'
            </div>
            <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                <div class="animation_content">
                   <div id="el_170128" class="info_block js-bnfy">
                      <div id="img_170128" class="bnfy-enter">
                           <p>'.wpautop($three_text_1).'</p>
                      </div>
                   </div>
                 </div>
            </div>
	  </div>
	  
	  <div id="frame_4" class="frame" style="display: none;">
            <div class="block_background">';                     
            if(!empty($four_bckgr)){
echo'           <img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $four_bckgr , 'full' ).'"/>';
            }
echo'
            </div>
            <div class="absolute">
                  <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                  </div>
                
                <div class="animation_content">
                    <div id="el_276261" class="info_block js-bnfy">
                         <div id="img_276261" class="bnfy-enter f_col">
                            '.wpautop($four_text_1).'
                        </div>
                    </div>
                </div>
            </div>   
      </div>
        
      <div id="frame_5" class="frame" style="display: none;">
            <div class="block_background">';                     
            if(!empty($five_bckgr)){
echo'           <img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $five_bckgr , 'full' ).'"/>';
            }
echo'
            </div>
            <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                
                <div class="animation_content">
                    <div id="el_172218" class="info_block_top js-bnfy">
                       <div id="img_172218" class="bnfy-enter">
                           '.wpautop($five_text_1).'
                        </div>
                   </div>';
                   if(!empty($five_text_2)){
echo            '   <div id="el_172219" class="info_block_bottom js-bnfy">
                       <div id="img_172219" class="bnfy-enter">
                            '.wpautop($five_text_2).'
                        </div>
                    </div>';
                   }
                    

  echo '             </div>
            </div>
		</div>
		
	  <div id="frame_6" class="frame" style="display: none;">
            <div class="block_background">';                     
            if(!empty($six_bcgr)){
echo'             <img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $six_bcgr , 'full' ).'"/>';
            }
echo'
            </div>
            <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                <div class="animation_content">
                    <div id="el_176375" class="info_block">
                       <div id="img_176375" class="bnfy-enter f_row">
                           <h2>' . $six_title . '</h2>
                       </div>
                    </div>';

                if ( ! empty( $six_tarif ) ):
                foreach ( $six_tarif as $cnt => $item ):
echo'
                    <div id="el_62' . $cnt . '" class="info_block">
                       <div id="img_62' . $cnt . '" class="bnfy-enter">
                            <img alt="' . $item['alt'] . '" src="'.wp_get_attachment_image_url( $item['smile'] , 'full' ).'"/>
                             '. wpautop($item['description']).'
                           <img alt="' . $item['alt'] . '" src="'.wp_get_attachment_image_url( $item['smile'] , 'full' ).'"/>
                       </div>
                    </div>';
                endforeach;
            endif;

echo'

                     <div id="el_25342" class="info_block">
                         <div id="img_25342" class="bnfy-enter f_row">
                             ' . wpautop($six_comment) . '
                          </div>
                     </div>
                  
                </div> 
            </div>
       </div>
	  
  	  <div id="frame_7" class="frame" style="display: none;">
            <div class="block_background">';                     
            if(!empty($seven_bcgr)){
echo'             <img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $seven_bcgr , 'full' ).'"/>';
            }
echo'
            </div>
            <div class="absolute">
                 <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                 <div class="animation_content">
                 
                    <div id="el_172256" class="info_block">
                        <div id="img_172256" class="bnfy-enter f_row">
                            <h2>' . $seven_title . '</h2>
                        </div>
                     </div>
                    ';

                if ( ! empty( $seven_posts ) ):
                foreach ( $seven_posts as $cnt => $item ): 
echo'
                    <div id="el_7' . $cnt . '" class="info_block">
                       <div id="img_7'. $cnt .'" class="bnfy-enter f_row">
                            ' . wpautop($item['seven_post']) . '
                       </div>
                    </div>';
                endforeach;
            endif;

echo'           
                </div>
            </div>
       </div>';


echo'      <div id="frame_8" class="frame" style="display: none;">';
$flag = true;
             if(!empty($review_video1)) {
                 $flag = false;
echo '        <video autoplay muted loop playsinline class="background-video" src="' . $review_video1 . '">
               </video> ';
             }

echo '       <div class="block_background">';
            if($flag && !empty($review_bcgr1)){
                echo '<img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $review_bcgr1 , 'full' ).'"/>';
            }
echo'       </div>
            <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                  
                    <div class="animation_content">';
                    if(!empty($review_title1)){
echo '                <div id="el_176330" class="info_block">
                            <div id="img_176330" class="bnfy-enter f_row">
                                <h2>' . $review_title1 . '</h2>
                            </div>
                        </div>  ';
                    }

echo '              </div>
              </div>
              <div class="video_control_box">
                  <div class="video-play"></div>
              </div>  
            </div>';

echo' <div id="frame_9" class="frame" style="display: none;">';

 $flag_1 = true;

             if(!empty($review_video2)){
                 $flag_1 = false;

echo     '      <video autoplay muted loop class="background-video" autoplay  loop playsinline >
                      <source src="' . $review_video2 . '" type="video/mp4">
                </video> ';
             }

 echo '     <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                
                 <div class="block_background">';
            if($flag_1 && !empty($review_bcgr2)){
                echo '<img class="background" alt="background_img" src=" '.wp_get_attachment_image_url( $review_bcgr2 , 'full' ).'"/>';
            }
echo '         </div>
                <div class="animation_content">';
                if(!empty($review_title2)){
echo '              <div class="info_block">
                       <div  class="bnfy-enter f_row">
                            <h2>' . $review_title2 . '</h2>
                       </div>
                    </div>';
                }
echo '          </div>
            </div>  
            <div class="video_control_box">
                  <div class="video-play"></div>
            </div>
	   </div>';
echo' <div id="frame_10" class="frame" style="display: none;">';

$flag_2 = true;

                  if(!empty($review_video3)){
                    $flag_2 = false;

echo '              <video autoplay muted loop class="background-video" autoplay  loop >
                            <source src="' . $review_video3 . '" type="video/mp4">
                     </video> ';
                  }

echo '     <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                
                 <div class="block_background">';
                if($flag_2 && !empty($review_bcgr3)){
echo '             <img class="background" alt="background_img" src=" '.wp_get_attachment_image_url( $review_bcgr3 , 'full' ).'"/>';
                 }
echo '         </div>
                <div class="animation_content">';
                if(!empty($review_title3)){
echo '              <div class="info_block">
                       <div  class="bnfy-enter f_row">
                            <h2>' . $review_title3 . '</h2>
                       </div>
                </div>';
                }
echo '          </div>
               </div>  
            <div class="video_control_box">
                  <div class="video-play"></div>
           </div>
	   </div>';

echo' <div id="frame_11" class="frame" style="display: none;">
             <div class="absolute">
                <div class="pagination">
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active white"></div></div>
                    <div class="tab"><div class="active"></div></div>
                </div>
                <div class="animation_content">
                    <div id="el_176351" class="info_block">
                        <div id="img_176351" class="bnfy-enter f_col">
                            <h1>'. $one_title .'</h1>
                             <p>' . wpautop($one_text) . '</p> 
                        </div>
                    </div>
                    
                    <form id="feedback" action="" method="post" name="request">
                        <input type="text" placeholder="Ваше имя" id="name" name="name" required>
                        <input type="tel" placeholder="Ваш телефон" id="phone" name="phone" required>';
                         if(!empty($feedback_offer)){
echo '                   <h3>'. $feedback_offer .'</h3>  ';
                         }
echo '                  <input type="submit" id="submit" class="button" value="Оставить заявку">
                        <h3>ИЛИ</h3>
                        <a class="button" href="https://t.me/EpocketCashBot?start=382">Тестировать сервис</a>
                    </form>
                
                    <div id="el_176364" class="info_block">
                        <div id="img_176364" class="bnfy-enter f_col">
                            <p>' . wpautop($feedback_last_comment) . '</p> 
                        </div>
                    </div>
                </div>
            </div>  
	   </div>';
