<!-- main start -->
    <div id="main" class="clearfix">
                <!-- content start -->
        <div id="content" class="con">
           
            <h3><?php echo $category['category_title']?></h3>
           
            <ul class="pageListTop">            
                <?php
                for($i = 1; $i <=$pages; $i++) {
                    if( $i == $current_page ) {
                    ?>
                    <li><?php echo $i?></li>
                    <?php    
                    }else{
                ?>
                    <li><a href="?p=<?php echo $i?>"><?php echo $i?></a></li>
                <?php
                    }
                }
                ?>
                <li><a href="#">&gt;</a></li>
            </ul>
            <div class="section">
                <ul class="list_products biggerlink">
                    <?php
                    foreach($products as $ps) {
                    ?>
                    <li> 
                        <img src="<?php echo $ps['post_featured_image']?>" alt="<?php echo $ps['post_seo_title']?>" class="hide-sp" /> 
                        <img src="<?php echo $ps['post_featured_image']?>" alt="<?php echo $ps['post_seo_title']?>" class="hide-pc" /> 
                        <a href="<?php short_url('product', array($ps['alias_name']) );?>">
                            <?php echo $ps['post_title']?>
                        </a> 
                    </li>
                    <?php }?>
                </ul>
            </div>
            <ul class="pageListBtm hide-pc">

                <?php 
                if($current_page > 1) {
                ?>
                <li><a href="?p=<?php echo $current_page-1;?>">&lt; <?php echo $this->lang->line('txt_prev');?></a></li>
                <?php }?>

                <?php
                for($i = 1; $i <=$pages; $i++) {
                    if( $i == $current_page ) {
                    ?>
                        <li><?php echo $i?></li>
                    <?php    
                    }else{
                ?>
                        <li><a href="?p=<?php echo $i?>"><?php echo $i?></a></li>
                <?php
                    }
                }
                ?>

                <?php 
                if($current_page < $pages) {
                ?>
                <li><a href="?p=<?php echo $current_page+1;?>"><?php echo $this->lang->line('txt_next');?> &gt;</a></li>
                <?php }?>
                
            </ul>
        </div>
        <!-- content end -->