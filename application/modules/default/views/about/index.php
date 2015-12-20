<!-- main start -->
    <div id="main" class="clearfix">
        <!-- content start -->
        <div id="content" class="con">
            <h3>沿革</h3>
            <div class="section">
            	<?php
            	foreach($about as $a) {
            	?>
                <p><?php echo $a['post_content']?></p>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- content end -->