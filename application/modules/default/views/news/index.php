<!-- main start -->
    <div id="main" class="clearfix">
<!-- content start -->
        <div id="content" class="con">
            <h3>ニュース</h3>
            <div class="section">
                <?php
                foreach($news as $n) {
                    $src = $n['post_featured_image'];
                    $img = ( !empty($src) ) ? '<img src="' . $src .  '" alt="" class="pt05" />' : ''; 
                    
                ?>
                <div class="news">
                    <p class="newsDate">2015年05月05日  <?php echo $img; ?> </p>
                    
                    <div class="newsRight">
                        <div class="newsInner">
                            
                            <p class="title"><?php echo $n['post_seo_title']?></p>
                            <p><?php echo $n['post_description']?></p>
                            
                             
                            <p class="newsbtn prevContent"><a class="btnRutgon imgover" href="javascript:;"><?php echo $this->lang->line('txt_close');?></a> <a class="btnChitiet imgover" href="javascript:;">...<?php echo $this->lang->line('txt_more');?></a></p>
                        </div>
                        <div class="newsContent clear">
                            <!-- <p><span class="bold">ニュース詳細表示</span> -->
                            <br />
                            <div><?php echo $n['post_content']?></div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                   ?>
            </div>
        </div>
        <!-- content end -->