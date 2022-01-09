<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make("post_meta", "one_container", "первый слайд")  
        
                ->add_fields( array(
                        Field::make( 'image', 'one_bckgr', __( ' фоновое изображение' ))->set_width( 20 ),
                        Field::make( 'text', 'one_title', __( ' заголовок' ))->set_width( 80 ),
                        Field::make( 'textarea', 'one_text', __( ' текст' ))->set_width( 80 ),
                ) );

Container::make("post_meta", "two_container", "второй слайд")  
        
                ->add_fields( array(
                        Field::make( 'image', 'two_bckgr', __( ' фоновое изображение' ))->set_width( 20 ),
                        Field::make( 'image', 'two_review_icon', __( ' иконка' ))->set_width( 40 ),
                       Field::make( 'textarea', 'two_text', __( ' текст' ))->set_width( 40 ),
                ) );

Container::make("post_meta", "three_container", "третий слайд")
        
                ->add_fields( array(
                        Field::make( 'image', 'three_bckgr', __( ' Фоновое изображение' ))->set_width( 20 ),
                        Field::make( 'textarea', 'three_text_1', __( ' текст' ))->set_width( 40 ),
               ) );

Container::make("post_meta", "four_container", "четвертый слайд")  
        
                ->add_fields( array(
                        Field::make( 'image', 'four_bckgr', __( ' Фоновое изображение' ))->set_width( 20 ),
                        Field::make( 'textarea', 'four_text_1', __( ' Текст' )) ->set_width( 80 ),      
                ) );

Container::make("post_meta", "five_container", "пятый слайд")  
        
                ->add_fields( array(
                        Field::make( 'image', 'five_bckgr', __( ' Фоновое изображение' ))->set_width( 20 ),
                        Field::make( 'textarea', 'five_text_1', __( ' Текст' ))->set_width( 40 ),
                        Field::make( 'textarea', 'five_text_2', __( ' Текст' ))->set_width( 40 )
                ) );

Container::make("post_meta", "six_container", "шестой слайд 'тарифы'")  
          
                ->add_fields( array(
                        Field::make( 'image', 'six_bcgr', __( ' фоновое изображение' ))->set_width( 20 ),
                        Field::make( 'text', 'six_title', __( ' заголовок' ))->set_width( 80 ),
                        Field::make( 'complex', 'six_tarif', ' блок "один тариф"  максимум 6шт' )->set_layout( 'tabbed-horizontal' )->set_max( 6 )
                        ->add_fields( array(
                                Field::make( 'image', 'smile', __( ' смайлик' ))->set_width( 20 ),
                                Field::make( 'text', 'alt', __( ' "Alt" смайлика' ))->set_width( 20 ),
                                Field::make( 'textarea', 'description', __( ' Описание' ))->set_width(60 )
                        ) ),
                        Field::make( 'text', 'six_comment', __( ' комментарий' ))->set_width( 100 ),
                ) );
          
Container::make("post_meta", "seven_container", "седьмой слайд 'почему мы?'") 
             
                ->add_fields( array(    
                        Field::make( 'image', 'seven_bcgr', __( ' фоновое изображение' ))->set_width( 20 ),
                        Field::make( 'text', 'seven_title', __( ' заголовок' ))->set_width( 80 ),
                        Field::make( 'complex', 'seven_posts', ' блок "посты"  максимум 10шт' )->set_layout( 'tabbed-horizontal' )->set_max( 10 )
                        ->add_fields( array(
                                Field::make( 'text', 'seven_post', __( ' пост' ))
                        ) ),
                ) );

Container::make("post_meta", "eight_container", "восьмой слайд 'видео 1'")  
             
                ->add_fields( array(
                        Field::make( 'text', 'review_title1', __( ' заголовок' ))->set_width( 60 ),
                        Field::make( 'image', 'review_bcgr1', __( ' фоновое изображение' ))->set_width( 20 ),
                        Field::make("file", "review_video", __( ' Видео MP4, M4V, WebM, OGV, WMV, FLV ' ))
                        ->set_type('video')->set_width( 20 )

                ) );
Container::make("post_meta", "nine_container", "девятый слайд 'видео 2'")  
             
                ->add_fields( array(
                        Field::make( 'text', 'review_title2', __( ' заголовок' ))->set_width( 60 ),
                        Field::make( 'image', 'review_bcgr2', __( ' фоновое изображение' ))->set_width( 20 ),
                        Field::make("file", "review_video2", __( ' Видео MP4, M4V, WebM, OGV, WMV, FLV ' ))
                        ->set_type('video')->set_width( 20 )

                ) );
Container::make("post_meta", "ten_container", "десятый слайд 'видео 3'")  
             
                ->add_fields( array(
                        Field::make( 'text', 'review_title3', __( ' заголовок' ))->set_width( 60 ),
                        Field::make( 'image', 'review_bcgr3', __( ' фоновое изображение' ))->set_width( 20 ),
                        Field::make("file", "review_video3", __( ' Видео MP4, M4V, WebM, OGV, WMV, FLV ' ))
                        ->set_type('video')->set_width( 20 )

                ) );

Container::make("post_meta", "eleven_container", "одинадцатый слайд 'обратная связь'") 
           
                ->add_fields( array(       
                        Field::make( 'text', 'feedback_title', __( ' заголовок' )),
                        Field::make( 'textarea', 'feedback_last_comment', __( ' коментарий под формой' ))->set_width( 50 ),        
                ) );