<?php
$feature_title = $page['_feature_title'];
$features = (!empty($page['_feature'])) ? json_decode($page['_feature'], true) : array();
$features = (!empty($features)) ? $features : array();
$count_feature = count($features);
?>
<!-- main start -->
    <div id="main" class="clearfix">
        <!-- content start -->
        <div id="content">
            <div class="top01">
                <div class="inner">
                    <h3 class="title">
                        <span class="ttl fontB"><?php echo $count_feature; ?></span>
                        <?php echo $feature_title; ?>
                        <!--<span class="ttl">つの理由</span> <span class="txt">サンコーモールドベトナムが選ばれる</span>-->
                    </h3>
                    <ol>
                        <?php 
                            $stt = 0;
                            foreach($features as $k => $f) {
                                $stt = $k + 1;
                        ?>
                            <li>
                                <span class="num"><?php echo $stt; ?></span>
                                <span class="norTxt"><?php echo $f; ?></span>
                            </li>
                        <?php }?>
                        <!--<li><span class="num">1</span><span class="norTxt">創業４３年、ベトナム設立１５年の信頼と実績</span></li>
                        <li><span class="num">2</span><span class="norTxt">日系企業としての教育による、品質、納期の遵守</span></li>
                        <li class="li01"><span class="num">3</span><span class="norTxt">金型部門、成形部門があり、</span></li>
                        <li><span class="num"></span><span class="norTxt">チューニングや修理修繕のすばやい対応</span></li>
                        <li><span class="num">4</span><span class="norTxt">洗練された製品、マイクロ製品の生産が可能</span></li>
                        <li><span class="num">5</span><span class="norTxt">高品質・低コストでの対応</span></li>-->
                    </ol>
                </div>
            </div>
            <div class="con">
                <h3 class="h3Style"><?php echo $this->lang->line('txt_product');?></h3>
                <ul class="pageListTop">
                <?php
                for($i = 1; $i <=$pages; $i++) {
                    if( $i == $current_page ) {
                ?>
                        <li><?php echo $i?></li>
                <?php    
                    }
                    else
                    {
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
<!--                        <li> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
<!--                        <li class="hide-sp"> <img src="--><?php //echo DEFAULT_IMAGE_PATH; ?><!--/index_img_02.jpg" alt="????????" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="????????" class="hide-pc" /> <a href="mold.html">????????</a> </li>-->
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
                        <?php
                        }
                        ?>
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
        </div>
        <!-- content end -->