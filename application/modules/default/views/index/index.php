<!-- main start -->
    <div id="main" class="clearfix">
        <!-- content start -->
        <div id="content">
            <div class="top01">
                <div class="inner">
                    <h3 class="title"><span class="ttl fontB">5</span><span class="ttl">つの理由</span> <span class="txt">サンコーモールドベトナムが選ばれる</span></h3>
                    <ol>
                        <li><span class="num">1</span><span class="norTxt">創業４３年、ベトナム設立１５年の信頼と実績</span></li>
                        <li><span class="num">2</span><span class="norTxt">日系企業としての教育による、品質、納期の遵守</span></li>
                        <li class="li01"><span class="num">3</span><span class="norTxt">金型部門、成形部門があり、</span></li>
                        <li><span class="num"></span><span class="norTxt">チューニングや修理修繕のすばやい対応</span></li>
                        <li><span class="num">4</span><span class="norTxt">洗練された製品、マイクロ製品の生産が可能</span></li>
                        <li><span class="num">5</span><span class="norTxt">高品質・低コストでの対応</span></li>
                    </ol>
                </div>
            </div>
            <div class="con">
                <h3 class="h3Style">製品</h3>
                <ul class="pageListTop">
                    <?php
                    for($i = 1; $i <= $pages; $i++)
                    {
                    ?>
                    <li><a href="?p=<?php echo $i?>"><?php echo $i?></a></li>
                    <?php
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
                            <li class="hide-sp"> <img src="<?php echo$ps['post_featured_image']?>" alt="<?php echo $ps['post_seo_title']?>" class="hide-sp" /> <img src="<?php echo$ps['post_featured_image']?>" alt="????????" class="hide-pc" /> <a href="#"><?php echo$ps['post_title']?></a> </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <ul class="pageListBtm hide-pc">
                    <li><a href="#">&lt; Prev</a></li>
                    <li>1</li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">Next &gt;</a></li>
                </ul>
            </div>
        </div>
        <!-- content end -->