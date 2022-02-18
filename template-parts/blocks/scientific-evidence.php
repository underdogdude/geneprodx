<?php

if( have_rows('scientific_evidence') ):
    while( have_rows('scientific_evidence') ) : the_row();

        $title = get_sub_field('scientific_title');
        $author = get_sub_field('scientific_authors');
        $link = get_sub_field('scientific_link');
        ?>
        <style>
            .list { 
                flex-direction: row;
            }
            .list-button { 
                border-top-right-radius: 8px; 
                border-bottom-right-radius: 8px;
                min-width: 80px; 
                width: 80px; 
            }
            @media only screen and (max-width: 600px) {
                .list {
                    flex-direction: column;
                }
                .list-button { 
                    border-top-right-radius: 0; 
                    border-bottom-right-radius: 8px;
                     border-bottom-left-radius: 8px;
                    min-width: 100%; 
                    width: 100%;
                    min-height: 50px; 
                }   
            }
        </style>
        <div class="list" style="margin-bottom: 20px; background-color: white; border-radius: 8px; display: flex; justify-content: space-between;">
            <div style="padding: 16px;">
                <a href="<?php echo $link; ?>" target="_blank"><h3 style="font-size: 20px; font-weight: 700;"><?php echo $title; ?></h3></a>
                <span style="color:#3EADCF; font-size: 14px;"><?php echo $author; ?></span>
            </div>
            <a href="<?php echo $link; ?>" class="list-button" target="_blank" style="background: linear-gradient(90deg, #82DAE7 0%, #3EADCF 100%); display: flex; align-items:center; justify-content: center; ">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ffffff" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </a>
        </div>
        <?php
    endwhile;
endif;