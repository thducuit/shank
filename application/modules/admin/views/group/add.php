<div id="page-wrapper">
    <form action='' method='post'>
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                     Group :: Add
                </h1>
            </div>
            <div class="block-right">
                <button type="submit" name="add" id="cmdAdd" class="button "><?php echo $this->lang->line('txt_add');?></button>
                <button type="submit" data-href='<?php echo url_add_params($params, '/index.php/admin/group')?>' name="cancel"  id="cmdCancel" class="button "><?php echo $this->lang->line('txt_cancel');?></button>
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
                                    <label class="desc">Tên Nhóm</label>
                                    <input name="name" type="text" value="" class="field text full">
                                </div>
                                
                                <div class='form-field'>
                                    <label class="desc">Mô tả</label>
                                    <input name="description" type="text" value="" class="field text full">
                                </div>
                                
                                <div class='form-field'>
                                    <label class="desc">Phân quyền</label>
                                    <table class="aGrid" cellspacing="0" id="GridView1" style="border-collapse: collapse;">
                                        <tr>
                                            <th>
                                                Tên module
                                            </th>
                                            <th>
                                                Phân quyền
                                            </th>
                                        </tr>
                                        <?php
                                        foreach( $list_module as $m ) {
                                        ?>
                                        <tr class='alt'>
                                            <td class='textleft'><?php echo $m['module_name']?></td>
                                            <td>
                                                <select name='permission[<?php echo $m['module_code']?>]'>
                                                    <option value='0'></option>
                                                    <option value='<?php echo VIEW;?>'>Xem</option>
                                                    <option value='<?php echo ADD;?>'>Thêm</option>
                                                    <option value='<?php echo EDIT;?>'>Sửa</option>
                                                    <option value='<?php echo DELETE;?>'>Xóa</option>
                                                    <option value='<?php echo FULL_PERMISSION;?>'>Toàn quyền</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <?php
                                            if( count($m['children']) > 0 ) {
                                                foreach($m['children'] as $c) {
                                                    ?>
                                                    <tr>
                                                        <td class='textleft'><?php echo $c['module_level']?> <?php echo $c['module_name']?></td>
                                                        <td>
                                                            <select name='permission[<?php echo $c['module_code']?>]'>
                                                                <option value='0'></option>
                                                                <option value='<?php echo VIEW;?>'>Xem</option>
                                                                <option value='<?php echo ADD;?>'>Thêm</option>
                                                                <option value='<?php echo EDIT;?>'>Sửa</option>
                                                                <option value='<?php echo DELETE;?>'>Xóa</option>
                                                                <option value='<?php echo FULL_PERMISSION;?>'>Toàn quyền</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                        <?php 
                                        }
                                        ?>
                                    </table>
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