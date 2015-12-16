<div id="page-wrapper">
    <form action='' method='post'>
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                     Gallery :: Add
                </h1>
            </div>
            <div class="block-right">
                <button type="submit" name="change" id="cmdUpdate" class="button gallery_submit"><?php echo $this->lang->line('txt_save');?></button>
                <button type="submit" data-href='<?php echo url_add_params($params, '/index.php/admin/user')?>' name="cancel"  id="cmdCancel" class="button "><?php echo $this->lang->line('txt_cancel');?></button>
            </div>
        </div>
        <div id="main-content">
            <!--notice-->
            <?php
            $notice = $this->session->flashdata('notice');
            if( isset( $notice ) && $notice ) {
                notice( $notice ); 
            }
            ?>
            <!--//notice-->
            <div id="content-outer">
                <div class="content-wrapper">
                    <div class="content full">
                            <div class='content-form-field'>
                                <div id="tabs" class="tabs">
                                    <ul class='tabs-heading'>
                                        <?php foreach($languages as $lang) { ?>
                                        <li>
                                            <a href="#tabs-<?php echo $lang['language_id']?>"><img src="<?php echo FLAGS_PATH ?>/<?php echo $lang['language_id'] . '.png'; ?>" /></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    <?php foreach($languages as $lang) { 
                                        $l = $lang['language_id'];
                                        if( count($list[$l]) > 0 ){
                                            $g = $list[$l][0];
                                            $g = json_decode(stripslashes($g['media_file']), true);
                                        }else{
                                            $g = array();
                                        } 
                                    ?>
                                    <div id="tabs-<?php echo $lang['language_id']?>">
                                        <p><a class='upload-gallery' href="#" rel='<?php echo $l; ?>'>Upload</a></p>
                                        <ul lang='<?php echo $l; ?>' class='gallery_list' id='<?php echo sprintf("gallery_%s_list", $l); ?>' >
                                            <?php 
                                            foreach ($g as $v) {
                                            ?>
                                            <li>
                                                <div class='image'><img src="<?php echo $v['img']?>"></div>
                                                <div class='config'>
                                                    <input value='<?php echo $v['w']?>' placeholder='w' class='width'/>
                                                    <input value='<?php echo $v['h']?>' placeholder='h' class='height'/>
                                                    <input value='<?php echo $v['a']?>' placeholder='http://' class='anchor'/>
                                                </div>
                                                <a href="#" class='remove'>X</a>
                                            </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <input type='hidden' id='<?php echo sprintf("gallery_%s", $l); ?>' name='galleries[<?php echo $l; ?>][photos]' />
                                    </div><!--//tab -->
                                    <?php 
                                    }
                                    ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>
            
        </div>
        <div class="clearfix">
        </div>
    </div>
    <div class="clearfix"></div>
    </form>
</div>
