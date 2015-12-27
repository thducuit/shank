<?php
$class = $this->router->fetch_class();
?>
<!-- navi start -->
        <div id="navi" class="clearfix">
            <ul class="nav01">
                <?php
                foreach ($menu_list['current'] as $key => $m) {
                    $c =  ($class == $m['post_module']) ? 'atv' : '';
                    if($m['post_module']!='about' && $m['post_module'] !='product')  {                 
                ?>
                    <li class='sub <?php echo $c; ?>'><a href="<?php short_url($m['post_module']); ?>"><?php echo $m['post_title']?><span><?php echo $menu_list['sub'][$key]['post_title']?></span></a></li>
                <?php 
                    //menu about
                    }elseif($m['post_module'] == 'about'){
                ?>   
                    <li class="sub <?php echo $c; ?>"><a href="javascript:;"><?php echo $m['post_title']?><span><?php echo $menu_list['sub'][$key]['post_title']?></span></a>
                    <ul class="sublink">
                        <?php
                        foreach($about_list as $al) {
                        ?>
                            <li><a href="<?php short_url('about', array($al['alias_name'])); ?>"><?php echo $al['post_title']?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                    //menu product
                    }elseif($m['post_module'] == 'product'){
                ?>
                    <li class="sub <?php echo $c; ?>"><a href="javascript:;"><?php echo $m['post_title']?><span><?php echo $menu_list['sub'][$key]['post_title']?></span></a>
                        <ul class="sublink">
                            <?php
                            foreach($products_list as $pl) {
                            ?>
                            <li><a href="<?php short_url('productcat', array($pl['alias_name'])); ?>"><?php echo $pl['category_title']?></a></li>
                            <?php }?>
                        </ul>
                    </li>
                <?php        
                    }
                }
                ?>
            </ul>
            <div class="navMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3917.3532310267246!2d106.88847!3d10.9366675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174de6cbff5bf79%3A0x21c412885fbc1a4b!2sC%C3%B4ng+Ty+TNHH+Sanko+Mold+Vi%E1%BB%87t+Nam!5e0!3m2!1svi!2s!4v1449462005687" width="234" height="219" frameborder="0" style="border:0"></iframe>
            </div>
            <p class="navText01"><span class="bold">VIETNAM: SMV</span><br />
                Sanko Mold Vietnam Co., Ltd.</p>
            <p class="navText01">Amata Industrial Park<br />
                116/1 Amata Rd., Bien Hoa City,<br />
                Dong Nai Province, Viet Nam<br />
                Tel : (+84)61 393 6635 / 393 6636<br />
                Fax: (+84)61 393 6637<br />
                E-mail: <a href="mailto:sale@sankomold.com">sale@sankomold.com</a></p>
            <ul class="nav02">
                <?php
                foreach($ads as $r) {
                ?>
                    <li><a href="<?php echo ($r['a']) ? $r['a'] :'#' ; ?>"><img src="<?php echo $r['img']; ?>" alt="SMJ" /></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <!-- navi end -->
    </div>
    <!-- main end -->