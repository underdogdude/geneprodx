<?php
 $footer_social = get_field('social'); 
 $size = get_field('social_icon_size');
 $className = $block['className'] ? $block['className'] : '';
 if(!empty($footer_social)) {
    ?>  
        <section class="widget widget-social <?php echo $className; ?>">
            <?php  
                foreach($footer_social as $row){

                    $style = "";
                    if( $size ){
                        $style = "width: ". $size ."px; height: ". $size ."px;";
                    }

                    switch ($row['social_name']) {
                        case "facebook":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link fb-icon' style='". $style ."'>";
                            echo seed_icon('s-facebook');
                            break; 
                        case "twitter":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('s-twitter');
                            break;
                        case "instagram":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('instagram');
                            break;
                        case "line":
                            echo "<a href='http://line.me/ti/p/~". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('s-line');
                            break;
                        case "youtube":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('s-youtube');
                            break;
                        case "vimeo":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('s-vimeo');
                            break;
                        case "pinterest":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('s-pinterest');
                            break;
                        case "linkedin":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('s-linkedin');
                            break;
                        case "messenger":
                            echo "<a href='http://m.me/". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('s-messenger');
                            break;
                        case "mail":
                            echo "<a href='mailto:". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('mail');
                            break;
                        case "podcast":
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('mic');
                            break;
                        default:
                            echo "<a href='//". $row['social_url'] ."' target='_blank' class='icon-link' style='". $style ."'>";
                            echo seed_icon('globe');
                    }
                    echo "</a>";
                } ?>
        </section>
    <?php
  }
?>