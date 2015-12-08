<div id="page-wrapper">
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                     Nhóm
                </h1>
            </div>
            <div class="block-right">
                <input name="keyword" data-href='<?php echo url_add_params($params, '/index.php/admin/group'); ?>' value='<?php echo $params['keyword'];?>' data-cha type="text" id="txtSearch" class="txtSearch textbox" placeholder='<?php echo $this->lang->line('txt_keyword');?>'>
                <input type="submit" name="search" value="<?php echo $this->lang->line('txt_search');?>" id="cmdSearch" class="cmdSearch button">
            </div>
        </div>
        <form class='table-form' action='<?php echo url_add_params($params, '/index.php/admin/group/update'); ?>' method='post'><!--Content form-->
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
                                array('name' => 'range', 'id' => 'ddlshowitem' , 'class' => 'combobox ddlFilter', 'data-filter' => url_add_params($params, '/index.php/admin/group')),
                                $params['range']
                            );
                        ?>
                    </div>
                    <div class="block-right control block-right-control-button">
                        <button type="submit" name="type" value='update' id="cmdUpdate" class="button buttonUpdate buttonSubmit" ><?php echo $this->lang->line('txt_update');?></button>
                        <button type="submit" name="type" value='delete' id="cmdDel" class="button buttonDelete deleteSelected" ><?php echo $this->lang->line('txt_del');?></button>
                        <button name='cmdAdd' data-href="<?php echo url_add_params($params, '/index.php/admin/group/add')?>" class='button buttonAdd buttonMedia'><?php echo $this->lang->line('txt_add');?></button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <table class="aGrid" cellspacing="0" id="GridView1" style="border-collapse: collapse;">
                    <tbody>
                        <tr>
                            <th>
                                <span class="chkHeader">
                                    <input id="chkHeader" type="checkbox" name="chkHeader" class="check_all" />
                                </span>
                            </th>
                            <th>
                                <?php echo $this->lang->line('txt_delete_edit');?>
                            </th>
                            <th>
                                Tên nhóm
                            </th>
                            <th scope="col">
                                Mô tả
                            </th>
                            <th class="colum_sort">
                                Thành viên
                            </th>
                            <th>
                                ID
                            </th>
                        </tr>
                        <?php 
                        foreach ($list as $key => $l) {
                            //$expand_params = $params;
                            //$expand_params['id'] = $l['category_id'];
                        ?>
                        <tr class="">
                            <td class="cellwidth1">
                                <input id="chkSelect" type="checkbox" name="ids[]" value='<?php echo $l['group_id']?>' />
                            </td>
                            <td class="cellwidth2">
                                <input type="button"  class="tooltip btgrid delete" title="Xóa"  />
                                <input type="button"  class="tooltip btgrid edit" title="Sửa" />
                            </td>
                            <td class="cellwidth1">
                                <?php echo $l['group_name']?>
                            </td>
                            <td class="textleft">
                                <?php echo $l['group_description']?>
                            </td>
                            <td class="">
                                Xem
                            </td>
                            <td class="cellwidth1">
                                <span id="lblID"><?php echo $l['group_id']?></span>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
                <div class="fg-toolbar tableFooter">
                    <?php
                        my_pagination( $num_rows = 100, $page = $params['page'], $range = $params['range'], url_add_params($params, '/index.php/admin/group') );
                    ?>
                </div>
            </div>
        </div>
        </form><!--//Content form-->
        <div class="clearfix">
        </div>
    </div>
     <div class="clearfix"></div>
</div>