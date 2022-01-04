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
$review_video1 = wp_get_attachment_url(carbon_get_post_meta($post->ID, 'review_video1'));

$review_bcgr2 = carbon_get_post_meta($post->ID, 'review_bcgr2');
$review_title2 = carbon_get_post_meta($post->ID, 'review_title2');
$review_video2 = wp_get_attachment_url(carbon_get_post_meta($post->ID, 'review_video2'));

$review_bcgr3 = carbon_get_post_meta($post->ID, 'review_bcgr3');
$review_title3 = carbon_get_post_meta($post->ID, 'review_title3');
$review_video3 = wp_get_attachment_url(carbon_get_post_meta($post->ID, 'review_video3'));


$feedback_title = carbon_get_post_meta($post->ID, 'feedback_title');
$feedback_first_comment = carbon_get_post_meta($post->ID, 'feedback_first_comment');
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
            </div>
            <div class="animation_content">
                <div id="el_16935" class="js-bnfy">
                     <img id="img_16935" class="bnfy-enter" alt="Название" src="'. get_stylesheet_directory_uri() .'/assets/image/16935.svg"/>
                          <h1>'. $one_title .'</h1>
                          <p>' . wpautop($one_text) . '</p>                     
                </div>
            </div>
        </div>	
      </div>
      
      <div id="frame_2" class="frame" >
            <div class="block_background">';                     
                if(!empty($two_bckgr)){
echo'               <img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $two_bckgr , 'full' ).'"/>';
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
                    
                    <div id="el_16994" class="js-bnfy">
                        <img id="img_16994" class="bnfy-enter" alt="1 смс" width="298" height="79" 
                             src="'. get_stylesheet_directory_uri() .'/assets/image/16994.png"/>
                             <p>'. wpautop($two_text) .'</p>
                    </div>
                </div>  
            </div>
	  </div>
	  
	  <div id="frame_3" class="frame">
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
                </div>
                <div class="animation_content">
               
                    <div id="el_170128" class="js-bnfy">
                        <img id="img_170128" class="bnfy-enter" alt="2" src="'. get_stylesheet_directory_uri() .'/assets/image/170128.svg"/>
                        <p>'.wpautop($three_text_1).'</p>
                    </div>
                    
                    <div id="el_170127" class="js-bnfy">
                        <img id="img_170127" class=" bnfy-enter" alt="1"  src="'. get_stylesheet_directory_uri() .'/assets/image/170127.svg"/>
                        <p>'.wpautop($three_text_2).'</p>
                    </div>
                </div>
            </div>
	  </div>
	  
	  <div id="frame_4" class="frame">
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
                  </div>
                
                <div class="animation_content">
                   <div id="el_276261" class="js-bnfy">
                       <img id="img_276261" class="bnfy-enter" alt="Текст" src="'. get_stylesheet_directory_uri() .'/assets/image/276261.svg"/>
                       <p>'.wpautop($four_text_1).'</p>
                   </div>
                </div>
            </div>   
      </div>
        
      <div id="frame_5" class="frame">
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
                </div>
                
                <div class="animation_content">
                    <div id="el_172219" class="js-bnfy">
                        <img id="img_172219" class="bnfy-enter" alt="2" src="'. get_stylesheet_directory_uri() .'/assets/image/172219.svg"/>
                        <p>'.wpautop($five_text_1).'</p>
                        
                    </div>
                    
                    <div id="el_172218" class="js-bnfy">
                        <img id="img_172218" class="bnfy-enter" alt="1" src="'. get_stylesheet_directory_uri() .'/assets/image/172218.svg"/>
                        <p>'.wpautop($five_text_2).'</p>
                    </div>
                </div>
            </div>
		</div>
		
	  <div id="frame_6" class="frame">
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
                </div>
                <div class="animation_content">
                    <div id="el_176375">
                        <img id="img_176375" class="bnfy-enter" alt="Тарифы" src="'. get_stylesheet_directory_uri() .'/assets/image/176375.svg"/>
                        <h2>' . $six_title . '</h2>
                    </div>';

                if ( ! empty( $six_tarif ) ):
                foreach ( $six_tarif as $cnt => $item ): 
echo'
                    <div id="el_' . $six_counter . '">
                        <img id="img_' . $six_counter . '" class="bnfy-enter" alt="' . $item['alt'] . '" src="'.wp_get_attachment_image_url( $item['smile'] , 'full' ).'"/>
                        <p id="txt_' . $six_counter . '">' . $item['description'] . '</p>
                        <img id="img_' . $six_counter++. '" class="bnfy-enter" alt="' . $item['alt'] . '" src="'.wp_get_attachment_image_url( $item['smile'] , 'full' ).'"/>
                    </div>';
                endforeach;
            endif;

echo'

                     <div id="el_25342">
                        <img id="img_25342" class="bnfy-enter" alt="Оплата за посты" src="'. get_stylesheet_directory_uri() .'/assets/image/25342.svg"/>
                        <p>' . $six_comment . '</p>
                    </div>
                  
                </div> 
            </div>
       </div>
	  
  	  <div id="frame_7" class="frame">
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
                </div>
                 <div class="animation_content">
                 
                    <div id="el_172256">
                    <h2>' . $seven_title . '</h2>
                        <img id="img_172256" class="bnfy-enter" alt="Почему мы" src="'. get_stylesheet_directory_uri() .'/assets/image/172256.svg"/>
                    </div>
                    ';

                if ( ! empty( $seven_posts ) ):
                foreach ( $seven_posts as $cnt => $item ): 
echo'
                    <div id="el_' . $seven_counter . '">
                        <p id="txt_' . $seven_counter++ . '">' . $item['seven_post'] . '</p>
                    </div>';
                endforeach;
            endif;

echo'           
                </div>
            </div>
       </div>';


echo'      <div id="frame_8" class="frame">
            <div class="block_background">';                     
            if(!empty($review_bcgr1)){
                echo '<img id="img_25016" class="background" alt="background_img" src="'.wp_get_attachment_image_url( $review_bcgr , 'full' ).'"/>';
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
                        <div class="tab"><div class="active white"></div></div>
                        <div class="tab"><div class="active"></div></div>
                        <div class="tab"><div class="active"></div></div>
                    </div>
                    <div class="animation_content">
                        <div id="el_176330">
                            <h2>' . $review_title1 . '</h2>
                            <img id="img_176330" class="bnfy-enter" alt="Отзыв" src="'. get_stylesheet_directory_uri() .'/assets/image/176330.svg"/>                                
                            <video  width="300" height="375" autoplay="" loop="" playsinline="" muted="" >
                                <source src="' . $review_video1 . '" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>';

echo'  
	  <div id="frame_9" class="frame">
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
                    <div class="tab"><div class="active"></div></div>
                </div>
                <div class="animation_content">
                    <div id="el_176351">
                        <img id="img_176351" class="bnfy-enter" alt="Название"
                        src="'. get_stylesheet_directory_uri() .'/assets/image/176351.svg"/>
                        <h1>'. $one_title .'</h1>
                        <p>' . wpautop($one_text) . '</p>   
                    </div>
                    
                    <form action="#">
                        <input type="text" placeholder="Ваше имя" id="name" name="name">
                        <input type="tel" placeholder="Ваш телефон" id="phone" name="phone">
                        <button>Оставить заявку</button>
                        <h3>ИЛИ</h3>
                        <button>Тестировать сервис</button>
                    </form>
                
                    <div id="el_176364">
                        <img id="img_176364" class="bnfy-enter" alt="1 смс" src="'. get_stylesheet_directory_uri() .'/assets/image/176364.png"/>
                        <p>' . wpautop($feedback_last_comment) . '</p>   
                    </div>
                </div>
            </div>  
	   </div>';
