<div id="page-wrapper">
        <form method='get'>
        <div id="main-wrapper">
            <div id="main-header">
                <div class="block-left">
                    <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                    <h1 class='title'>
                        <?php echo $this->lang->line('txt_user');?>
                    </h1>
                </div>
                <div class="block-right">
                    <input name="txtSearch" placeholder=<?php echo $this->lang->line('txt_keyword');?> type="text" id="txtSearch" class="txtSearch textbox">
                    <input type="submit"  name="cmdSearch" value=<?php echo $this->lang->line('txt_search');?> onclick="javascript:return RequiredEmptyField('.txtSearch','Chưa nhập chuỗi tìm kiếm!');"
                        id="cmdSearch" class="cmdSearch button">
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
            
                <div class="widget">
                    <div class="whead">
                     <div class="block-left control">
                        <?php
                            my_select_range(
                                array('name' => 'range', 'id' => 'ddlshowitem' , 'class' => 'combobox', 'data-filter' => url_add_params($params, '/index.php/admin/user')),
                                $params['range']
                            );
                        ?>
                    </div>
                     <div class="block-right control">
                    <input data-href="/index.php/admin/user/add" type="submit" name="cmdAdd" value=<?php echo $this->lang->line('txt_add');?> id="cmdAdd" class="button buttonAdd" />
                    <input type="submit" name="cmdDel" value=<?php echo $this->lang->line('txt_del');?> id="cmdDel" class="button buttonDel" />
                   </div>
                        <div class="clearfix">
                        </div>
                    </div>
                    <table class="aGrid" cellspacing="0" id="GridView1" style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <th>
                                    <span class="chkHeader">
                                        <input id="chkHeader" type="checkbox" name="chkHeader" class="check_all" /></span>
                                </th>
                                <th>
                                    <?php echo $this->lang->line('txt_delete_edit');?>
                                </th>
                                
                                <th scope="col">
                                   <?php echo $this->lang->line('txt_username');?>
                                </th>
                                <th>
                                    <?php echo $this->lang->line('txt_fullname');?>
                                </th>
                                <th scope="col">
                                    Email
                                </th>
                                <th scope="col">
                                    Change Password
                                </th>
                                <th scope="col">
                                    Kích hoạt
                                </th>
                                <th>
                                    <?php echo $this->lang->line('txt_gender');?>
                                </th>
                               <th>
                                    ID
                                </th>
                            </tr>
                            <?php
                            foreach($list as $l) {
                            ?>
                            <tr class="">
                                <td class="cellwidth1">
                                    <input id="chkSelect" type="checkbox" name="ids[]" value='<?php echo $l['user_id']?>' />
                                </td>
                                <td class="cellwidth2">
                                    <input type="button" data-href='/index.php/admin/user/delete?userid=<?php echo $l['user_id']?>' class="tooltip btgrid delete" title="Xóa"  />
                                    <input type="button" data-href="/index.php/admin/user/edit?userid=<?php echo $l['user_id']?>" class="tooltip btgrid edit" title="Sửa" />
                                </td>
                                <td class="textleft">
                                    <a href="/index.php/admin/user/edit?userid=<?php echo $l['user_id']?>" id="lblName" class="lblname"><?php echo $l['username']?></a>
                                </td>
                                <td>
                                        <?php echo $l['fullname']?>
                                </td>
                                <td class="textleft">
                                    <a href="#" id="lblCategory"><?php echo $l['email']?></a>
                                </td>
                                <td class="changepassword">
                                    <a href="/index.php/admin/user/password?userid=<?php echo $l['user_id']?>">Change Password</a>
                                </td>
                                <td>
                                    <?php my_toggle_button($l['active'], $l['user_id'], url_add_params($params, '/index.php/admin/user/active'), array('name'=>'ImgRowStatus'));?>
                                </td>
                                <td class="cellwidth7">
                                   <?php echo ($l['gender'] == 0) ? $this->lang->line('txt_male') : $this->lang->line('txt_female') ?>
                                </td>
                                <td class="cellwidth1">
                                    <span id="lblID"><?php echo $l['user_id']?></span>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="fg-toolbar tableFooter">
                        <div class="dataTables_info" id="dynamic_info">
                            Showing 1 to 10 of 57 entries</div>
                        <div class="dataTables_paginate paging_full_numbers" id="dynamic_paginate">
                            <a tabindex="0" class="first paginate_button paginate_button_disabled" id="dynamic_first"><?php echo $this->lang->line('txt_first');?></a>
							<a tabindex="0" class="previous paginate_button paginate_button_disabled" id="dynamic_previous"><?php echo $this->lang->line('txt_previous');?></a>
							<span>
							<a tabindex="0" class="paginate_active">1</a>
							<a tabindex="0" class="paginate_button">2</a>
							<a tabindex="0" class="paginate_button">3</a>
							<a tabindex="0" class="paginate_button">4</a>
							<a tabindex="0" class="paginate_button">5</a>
							</span>
							<a tabindex="0" class="next paginate_button" id="dynamic_next"><?php echo $this->lang->line('txt_next');?></a>
							<a tabindex="0" class="last paginate_button" id="dynamic_last"><?php echo $this->lang->line('txt_last');?></a>
                            <a id="gotopage" class="paginate_button">+</a>
						</div>
                        <div class="showgotopage">
                            <input type="text" name="txtgotopage" class="txtgotopage" />
                            <a class="paginate_button bt_gotopage" href="#" >Go</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
        </div>
         <div class="clearfix"></div>
    </div>
    <div class="clearfix">
        </form>
    </div>