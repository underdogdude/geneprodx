<?php 
    $display = get_field("team_display") ? get_field("team_display") : "slider";
    $grid = get_field("team_display") === "grid" ? 3 : 4;
?>

<?php if( have_rows('team') ): ?>
    <div class="s-container">
        <div class="s-<?php echo $display;?> -d<?php echo $grid; ?> team-carousel">
            <?php while( have_rows('team') ): the_row(); 
                $image = get_sub_field('member_image');
                $name = get_sub_field('member_name');
                $description = get_sub_field('member_description');
                $occupation = get_sub_field('member_occupation');
                $url = get_sub_field('member_linkedin');
                ?>
                <?php if($display == 'slider'): ?>
                    <div class="slider">
                        <div class="team-card">
                            <div class="pic">
                                <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
                            </div>
                            <h2><?php echo $name; ?></h2>
                            <h3><?php echo $occupation; ?></h3>
                            <?php if($url) :?>
                                <a href="<?php echo $url; ?>" target="_blank" class="link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="448" height="448" viewBox="0 0 448 448"><path d="M416,32H31.9A32.14,32.14,0,0,0,0,64.3V447.7A32.14,32.14,0,0,0,31.9,480H416a32.22,32.22,0,0,0,32-32.3V64.3A32.22,32.22,0,0,0,416,32ZM135.4,416H69V202.2h66.5V416ZM102.2,173a38.5,38.5,0,1,1,38.5-38.5A38.52,38.52,0,0,1,102.2,173ZM384.3,416H317.9V312c0-24.8-.5-56.7-34.5-56.7-34.6,0-39.9,27-39.9,54.9V416H177.1V202.2h63.7v29.2h.9c8.9-16.8,30.6-34.5,62.9-34.5,67.2,0,79.7,44.3,79.7,101.9Z" transform="translate(0 -32)" fill="currentColor"/></svg>    
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="team-card -grid">
                        <div class="pic">
                            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
                        </div>
                        <div class="content">
                            <h2><?php echo $name; ?></h2>
                            <h3><?php echo $occupation; ?></h3>
                            <?php if($url) :?>
                                <a href="<?php echo $url; ?>" target="_blank" class="link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="448" height="448" viewBox="0 0 448 448"><path d="M416,32H31.9A32.14,32.14,0,0,0,0,64.3V447.7A32.14,32.14,0,0,0,31.9,480H416a32.22,32.22,0,0,0,32-32.3V64.3A32.22,32.22,0,0,0,416,32ZM135.4,416H69V202.2h66.5V416ZM102.2,173a38.5,38.5,0,1,1,38.5-38.5A38.52,38.52,0,0,1,102.2,173ZM384.3,416H317.9V312c0-24.8-.5-56.7-34.5-56.7-34.6,0-39.9,27-39.9,54.9V416H177.1V202.2h63.7v29.2h.9c8.9-16.8,30.6-34.5,62.9-34.5,67.2,0,79.7,44.3,79.7,101.9Z" transform="translate(0 -32)" fill="currentColor"/></svg>    
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="description">
                            <?php echo $description; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>