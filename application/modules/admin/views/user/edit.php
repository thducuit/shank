<div id="page-wrapper">
    <form action='' method='post'>
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                    <?php echo $this->lang->line('txt_edit');?>
                </h1>
            </div>
            <div class="block-right">
                <input type="submit" name="cmdEdit" value=<?php echo $this->lang->line('txt_save');?> id="cmdEdit" class="button " />
                <input data-href="/index.php/admin/user" type="submit" name="cmdDel" value=<?php echo $this->lang->line('txt_cancel');?> id="cmdDel" class="button " />
            </div>
        </div>
        <div id="main-content">
            <div id="content-outer">
                <div class="content-wrapper">
                    <div class="content">
                        <div id="tabs" class="tabs">
                            <ul class='tabs-heading'>
                                <li>
                                    <a href="#tabs-1">
                                        <img src="<?php echo FLAGS_PATH ?>/<?php echo ADMIN_LANGUAGE . '.png'; ?>" />
                                    </a>
                                </li>
                            </ul>
                            <div id="tabs-1">
                                <div class="form">
                                    <div class="block-left">
                                        
                                        <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_username');?></label>
                                            <input name="username" type="text" value="<?php echo $list['username'];?>" class="field text full">
                                        </div>
                                        
                                         <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_fullname');?></label>
                                            <input name="fullname" type="text" value="<?php echo $list['fullname'];?>" class="field text full">
                                        </div>
                                        
                                        <!--<div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_password');?></label>
                                            <input name="password" type="password" value="<?php echo $list['password'];?>" class="field text full">
                                        </div>
                                        
                                        <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_confirm_password');?></label>
                                            <input name="password" type="password" value="<?php echo $list['password'];?>" class="field text full">
                                        </div>-->
                                        
                                        <div class='form-field'>
                                            <label class="desc">Email</label>
                                            <input name="email" type="text" value="<?php echo $list['email'];?>" class="field text full">
                                        </div>
                                        
                                        <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_gender');?></label>
                                            <select name="gender">
                                                <option value="0" <?php echo $list['gender'] == 0 ? 'selected' : '' ?> ><?php echo $this->lang->line('txt_male');?></option>
                                                <option value="1" <?php echo $list['gender'] == 1 ? 'selected' : '' ?> ><?php echo $this->lang->line('txt_female');?></option>
                                            </select>
                                        </div>
                                        
                                         <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_address');?></label>
                                            <input name="address" type="text" value="<?php echo $list['address'];?>" class="field text full">
                                        </div>
                                        
                                         <div class='form-field'>
                                            <label class="desc"><?php echo $this->lang->line('txt_phone');?></label>
                                            <input name="phone" type="text" value="<?php echo $list['phone'];?>" class="field text full">
                                        </div>
                                        
                                        
                                        
                                    </div><!--//block-left -->
                                    <div class='clearfix'></div>
                                    <div class="form-control">
                                        <input type="submit" name="cmdEdit" value=<?php echo $this->lang->line('txt_save');?> id="cmdAdd" class="button " />
                                        <input type="submit" name="cmdDel" value=<?php echo $this->lang->line('txt_cancel');?> id="cmdDel" class="button " />
                                    </div>
                                </div>
                            </div><!--//tab -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="block-left sidebar">
                <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
                    <div class="portlet-header ui-widget-header">
                        <span class="ui-icon ui-icon-circle-arrow-s"></span><?php echo $this->lang->line('txt_category');?></div>
                    <div class="portlet-content">
                        <select size="4" name="lstCate"  id="lstCate" class="listbox lstCate">
                            <option value="0">Top</option>
                            <option value="102">Đá quý &amp; Bán quý ép vỉ</option>
                            <option value="95">TS đá cz</option>
                            <option value="142">.....Nhẫn</option>
                            <option value="143">.....Bông tai</option>
                            <option value="144">.....Mặt dây</option>
                            <option value="94">TS nam</option>
                            <option value="149">.....Nhẫn đá màu</option>
                            <option value="145">.....Nhẫn kim cương</option>
                            <option value="50">TS cưới</option>
                            <option value="51">.....Nhẫn cặp</option>
                            <option value="5">TS đá màu</option>
                            <option value="31">.....Mặt dây</option>
                            <option value="32">.....Bông tai</option>
                            <option value="30">.....Nhẫn</option>
                            <option value="4">TS kim cương</option>
                            <option selected="selected" value="27">.....Bông tai</option>
                            <option value="26">.....Mặt dây</option>
                            <option value="25">.....Nhẫn nữ</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="widget none">
                <div class="whead">
                    <div class="block-left control">
                    </div>
                    <div class="block-right control">
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                abcd
                <div class="fg-toolbar tableFooter">
                    <input type="submit" name="cmdAdd" value="Lưu" id="cmdAdd" class="button " />
                    <input type="submit" name="cmdDel" value="Hủy" id="cmdDel" class="button " />
                </div>
            </div>
            <div class="clearfix">
            </div>
        </div>
        <div class="clearfix">
        </div>
    </div>
    <div class="clearfix">
    </div>
    </form>
</div>