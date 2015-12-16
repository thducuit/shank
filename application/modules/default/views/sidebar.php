<!-- navi start -->
        <div id="navi" class="clearfix">
            <ul class="nav01">
                <li><a href="index.html">ホームページ<span>Home</span></a></li>
                <li class="sub atv"><a href="javascript:;">会社概要<span>About Us</span></a>
                    <ul class="sublink">
                        <li><a href="vision_mission.html">ミッション・ビジョン</a></li>
                        <li><a href="message_from_ceo.html">CEOからのメッセージ</a></li>
                        <li><a href="company_information.html">会社紹介</a></li>
                        <li><a href="company_history.html">沿革</a></li>
                    </ul>
                </li>
                <li class="sub"><a href="javascript:;">製品<span>Product</span></a>
                    <ul class="sublink">
                        <li><a href="mold.html">金型の設計・制作</a></li>
                        <li><a href="plastic.html">プラスチック部品の製造・組立</a></li>
                        <li><a href="battery.html">電池式携帯電話充電器の組立</a></li>
                    </ul>
                </li>
                <li><a href="main_equipment.html">主な設備、機械<span>The main equipment, machinery</span></a></li>
                <li><a href="news.html">ニュース<span>News</span></a></li>
                <li><a href="career.html">採用情報<span>Careers</span></a></li>
                <li><a href="contact.html">お問い合わせ<span>Contact Us</span></a></li>
                <li><a href="sitemap.html">サイトマップ<span>Site Map</span></a></li>
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