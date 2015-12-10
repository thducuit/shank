<div id="page-wrapper">
    <form action='' method='post'>
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                     User :: Change password
                </h1>
            </div>
            <div class="block-right">
                <button type="submit" name="update" id="cmdUpdate" class="button "><?php echo $this->lang->line('txt_save');?></button>
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
                    <div class="content">
                            <div class='content-form-field'>
                                
                                <div class='form-field'>
                                    <label class="desc">Password cũ</label>
                                    <input name="old_password" type="text" value="" class="field text full">
                                </div>
                                
                                <div class='form-field'>
                                    <label class="desc">Password mới</label>
                                    <input name="new_password" type="text" value="" class="field text full">
                                </div>
                                
                                <div class='form-field'>
                                    <label class="desc">Xác nhận lại password</label>
                                    <input name="new_password_confirm" type="text" value="" class="field text full">
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