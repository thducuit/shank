<div id="page-wrapper">
    <form action='' method='post'>
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                    <?php echo $this->lang->line('txt_post');?> :: <?php echo $this->lang->line('txt_edit');?>
                </h1>
            </div>
            <div class="block-right">
                <button type="submit" name="add" id="cmdAdd" class="button "><?php echo $this->lang->line('txt_update');?></button>
                <button type="submit" data-href='<?php echo url_add_params($params, '/index.php/admin/post')?>' name="cancel"  id="cmdCancel" class="button "><?php echo $this->lang->line('txt_cancel');?></button>
            </div>
        </div>
        <div id="main-content">
            <div id="content-outer">
                <div class="content-wrapper">
                    <div class="content">
                        <div id="tabs" class="tabs">
                            <ul class='tabs-heading'>
                                <?php foreach($languages as $lang) { ?>
                                <li>
                                    <a href="#tabs-<?php echo $lang['language_id']?>"><img src="<?php echo FLAGS_PATH ?>/<?php echo $lang['language_id'] . '.png'; ?>" /></a>
                                </li>
                                <?php } ?>
                            </ul><!--//TABS-HEADING-->
                            <?php foreach($languages as $lang) { 
                                 $l = $lang['language_id'];
                            ?>
                            <div id="tabs-<?php echo $lang['language_id']?>">
                                <div class="form">
                                    <div class="block-left">
                                        
                                        <div class='form-field'>
                                            <input name="post[<?php echo $lang['language_id']?>][id]" type="hidden" value="<?php echo $posts[$lang['language_id']]['post_id'];?>">
                                            <input name="post[<?php echo $lang['language_id']?>][alias_id]" type="hidden" value="<?php echo $posts[$lang['language_id']]['alias_id'];?>">
                                        </div>
                                        
                                        <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_title');?></label>
                                            <input name="post[<?php echo $lang['language_id']?>][title]" type="text" value="<?php echo $posts[$lang['language_id']]['post_title'];?>" class="field text full">
                                        </div>
                                        
                                        <div class="form-field">
                                            <label class="desc">Alias</label>
                                            <input id='<?php echo sprintf("post_%s_alias", $l); ?>' name="post[<?php echo $lang['language_id']?>][alias]" data-area='category[<?php echo $lang['language_id']?>][title]' type="text" value="<?php echo $posts[$lang['language_id']]['alias_name'];?>" class="field text full">
                                        </div>
                                        
                                        <div class="form-field">
                                            <label class="desc"><?php echo $this->lang->line('txt_description');?></label>
                                            <textarea id='<?php echo sprintf("post_%s_description", $l); ?>' data-editor='<?php echo sprintf("post_%s_description", $l); ?>' name="post[<?php echo $lang['language_id']?>][description]" class="textarea small full"><?php echo $posts[$lang['language_id']]['post_description'];?></textarea>  
                                        </div>
                                        
                                        <div class="form-field">
                                            <label class="desc"><?php echo $this->lang->line('txt_content');?></label>
                                            <textarea id='<?php echo sprintf("post_%s_content", $l); ?>' data-editor='<?php echo sprintf("post_%s_content", $l); ?>' name="post[<?php echo $lang['language_id']?>][content]" class="textarea small full"><?php echo $posts[$lang['language_id']]['post_content'];?></textarea>  
                                        </div>
                                        
                                        <!--SEO-->
                                        <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
                                            <div class="portlet-header ui-widget-header">
                                                <span class="ui-icon ui-icon-circle-arrow-s"></span>SEO
                                            </div>
                                            <div class="portlet-content">
                                                <div class="form-field">
                                                    <label class="desc">SEO <?php echo $this->lang->line('txt_title');?></label>
                                                    <input name="post[<?php echo $lang['language_id']?>][seo_title]" type="text" value="<?php echo $posts[$lang['language_id']]['post_seo_title'];?>" class="field text full">
                                                </div>
                                                
                                                <div class="form-field">
                                                    <label class="desc">SEO <?php echo $this->lang->line('txt_description');?></label>
                                                    <textarea name="post[<?php echo $lang['language_id']?>][seo_description]" class="textarea small full"><?php echo $posts[$lang['language_id']]['post_seo_description'];?></textarea>  
                                                </div>
                                                
                                                <div class="form-field">
                                                    <label class="desc">SEO <?php echo $this->lang->line('txt_keyword');?></label>
                                                    <textarea name="post[<?php echo $lang['language_id']?>][seo_keywords]" class="textarea small full"><?php echo $posts[$lang['language_id']]['post_seo_keywords'];?></textarea>  
                                                </div>
                                            </div>
                                        </div><!--//SEO-->
                                        
                                    </div><!--//Block left-->
                                    
                                    <div class="block-right">
                                        <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_category');?></label>
                                            <?php 
                                                my_select(
                                                    $list[$lang['language_id']], 
                                                    $option = array('title' => 'category_title', 'value' => 'category_id', 'parent' => 'catparent_id', 'level' => 'category_level'),
                                                    $attributes = array('name' => "post[" . $lang['language_id'] . "][category_id]", 'id' => 'lstCate', 'class' => 'listbox lstCate', 'size' => 4),
                                                    $selected = array(), 
                                                    $no_choice = array('title' => $this->lang->line('txt_all'), 'value' => 0)
                                                );
                                            ?>
                                        </div>
                                    </div><!--//Block right-->
                                    <div class="clearfix"></div>
                                </div><!--//form-->
                                
                                <div class="form-control">
                                    <button type="submit" name="add" id="cmdAdd" class="button "><?php echo $this->lang->line('txt_update');?></button>
                                    <button type="submit" name="cancel"  id="cmdCancel" class="button "><?php echo $this->lang->line('txt_cancel');?></button>
                                </div>
                        
                            </div><!--//TABS-CONTENT-->
                            <?php } ?>
                        </div><!--//TABS-->
                        
                    </div>
                </div>
            </div>
            
            <div class="block-left sidebar">
                
                <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
                    <div class="portlet-header ui-widget-header">
                        <span class="ui-icon ui-icon-circle-arrow-s"></span><?php echo $this->lang->line('txt_configuration');?>
                    </div>
                    <div class="portlet-content">
                        <ul>
                            <li>
                                <label class="desc">
                                    <?php echo $this->lang->line('txt_status');?>
                                </label>
                                <div>
                                    <?php 
                                        my_select(
                                            array(array('title' => $this->lang->line('txt_show'), 'value' => 1), array('title' => $this->lang->line('txt_hide'), 'value' => 0)), 
                                            $option = array('title' => 'title', 'value' => 'value'),
                                            $attributes = array('name' => 'status', 'id' => 'lstStatus', 'class' => 'listbox lstStatus'),
                                            $selected = array($posts[DEFAULT_LANGUAGE]['post_status'])
                                        );
                                    ?>
                                </div>
                            </li>
                            <li>
                                <label class="desc">
                                    <?php echo $this->lang->line('txt_highlight');?>
                                </label>
                                <div>
                                    <?php 
                                        my_select(
                                            array(array('title' => $this->lang->line('txt_yes'), 'value' => 1), array('title' => $this->lang->line('txt_no'), 'value' => 0)), 
                                            $option = array('title' => 'title', 'value' => 'value'),
                                            $attributes = array('name' => 'highlight', 'id' => 'lstHighlight', 'class' => 'listbox lstHighlight'),
                                            $selected = array($posts[DEFAULT_LANGUAGE]['post_highlight'])
                                        );
                                    ?>
                                </div>
                            </li>
                            <li>
                                <label class="desc">
                                    <?php echo $this->lang->line('txt_oders');?>
                                </label>
                                <input name="order" type="text" value="<?php echo $posts[DEFAULT_LANGUAGE]['post_order'];?>" class="field text small">
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
                    <div class="portlet-header ui-widget-header">
                        <span class="ui-icon ui-icon-circle-arrow-s"></span><?php echo $this->lang->line('txt_featured_photo');?>
                    </div>
                    <div class="portlet-content">
                        <div class='featured_photo'></div>
                        <div>
                            <a href='#'><?php echo $this->lang->line('txt_upload');?></a>
                            <a href='#'><?php echo $this->lang->line('txt_remove');?></a>
                            <input type="hidden" name=""/>
                        </div>
                    </div>
                </div>
                
            </div><!--//SIDEBAR-->
            
            <div class="clearfix"></div>
            
        </div>
        <div class="clearfix">
        </div>
    </div>
    <div class="clearfix"></div>
    </form>
</div>