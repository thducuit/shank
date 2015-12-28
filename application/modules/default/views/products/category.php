<!-- main start -->
    <div id="main" class="clearfix">
                <!-- content start -->
        <div id="content" class="con">
           
            <h3><?php echo $category['category_title']?></h3>
           
            <ul class="pageListTop">            
                <?php
                for($i = 1; $i <=$pages; $i++) {
                ?>
                <li><a href="?p=<?php echo $i?>"><?php echo $i?></a></li>
                <?php
                }
                ?>
                <li><a href="#">&gt;</a></li>
            </ul>
            <div class="section">
                <ul class="list_products biggerlink">
                    <?php
                    foreach($products as $ps) {
                    ?>
                    <li> <img src="<?php echo $ps['post_featured_image']?>" alt="テキストテキスト" class="hide-sp" /> <img src="<?php echo $ps['post_featured_image']?>" alt="<?php echo $ps['post_seo_title']?>" class="hide-pc" /> <a href="<?php short_url('product', array($ps['alias_name']) );?>"><?php echo $ps['post_title']?></a> </li>
                    <?php }?>
                    <!-- <li> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li>
                    <li class="hide-sp"> <img src="images/index_img_02.jpg" alt="テキストテキスト" class="hide-sp" /> <img src="images/index_img_02_sp.jpg" alt="テキストテキスト" class="hide-pc" /> <a href="product_detail.html">テキストテキスト</a> </li> -->
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
        <!-- content end -->