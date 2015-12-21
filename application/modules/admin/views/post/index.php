<div id="page-wrapper">
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                     <?php echo $this->lang->line('txt_post');?>
                </h1>
            </div>
            <div class="block-right">
                <input name="keyword" data-href='<?php echo url_add_params($params, '/index.php/admin/post'); ?>' value='<?php echo $params['keyword'];?>' data-cha type="text" id="txtSearch" class="txtSearch textbox" placeholder='<?php echo $this->lang->line('txt_keyword');?>'>
                <input type="submit" name="search" value="<?php echo $this->lang->line('txt_search');?>" id="cmdSearch" class="cmdSearch button">
            </div>
        </div>
        <form class='table-form' action='<?php echo url_add_params($params, '/index.php/admin/post/update'); ?>' method='post'><!--Content form-->
            <div id="main-content">
            <div class="widget">
                <div class="whead">
                    <div class="block-left control">
                        <?php
                            my_select_range(
                                array('name' => 'range', 'id' => 'ddlshowitem' , 'class' => 'combobox ddlFilter', 'data-href' => url_add_params($params, '/index.php/admin/post')),
                                $params['range']
                            );
                        ?>
                    </div>
                    <div class="block-right control block-right-control-button">
                        <?php 
                            my_select(
                                array( array('title' =>  $this->lang->line('txt_yes'), 'value'=> 1), array('title' =>  $this->lang->line('txt_no'), 'value' => 0) ), 
                                $keywords = array('title' => 'title', 'value' => 'value'),
                                $attributes = array('name' => 'show', 'id' => 'ddlstatus' , 'class' => 'combobox ddlFilter', 'data-href' => url_add_params($params, '/index.php/admin/category')),
                                $selected = array($params['show']),
                                $no_choice = array('title' => $this->lang->line('txt_highlight'), 'value' => -1) 
                            );
                        ?>
                        <?php 
                            my_select(
                                array( array('title' =>  $this->lang->line('txt_show'), 'value'=> 1), array('title' =>  $this->lang->line('txt_hide'), 'value' => 0) ), 
                                $keywords = array('title' => 'title', 'value' => 'value'),
                                $attributes = array('name' => 'show', 'id' => 'ddlstatus' , 'class' => 'combobox ddlFilter', 'data-href' => url_add_params($params, '/index.php/admin/category')),
                                $selected = array($params['show']),
                                $no_choice = array('title' => $this->lang->line('txt_show_hide'), 'value' => -1) 
                            );
                        ?>
                        <?php 
                        
                            /*my_select(
                                $list_sort, 
                                $keywords = array('title' => 'category_title', 'value' => 'category_id', 'parent'=> 'catparent_id', 'level' => 'category_level'),
                                $attributes = array('name' => 'pid', 'id' => 'ddlInCate' , 'class' => 'combobox ddlFilter', 'data-href' => url_add_params($params, '/index.php/admin/category') ),
                                $selected = array($params['pid']),
                                $no_choice = array('title' => $this->lang->line('txt_category'), 'value' => 0)
                            );*/
                        ?>
                        
                        <button type="submit" name="type" value='update' id="cmdUpdate" class="button buttonUpdate buttonSubmit" ><?php echo $this->lang->line('txt_update');?></button>
                        <button type="submit" name="type" value='delete' id="cmdDel" class="button buttonDelete deleteSelected" ><?php echo $this->lang->line('txt_del');?></button>
                        <button name='cmdAdd' data-href="<?php echo url_add_params($params, '/index.php/admin/post/add')?>" class='button buttonAdd buttonMedia'><?php echo $this->lang->line('txt_add');?></button>
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
                                Ảnh đại diện
                            </th>
                            <th>
                                Danh mục
                            </th>
                            <th>
                                <?php echo $this->lang->line('txt_show_hide');?>
                            </th>
                            <th scope="col">
                                <?php echo $this->lang->line('txt_name');?>
                            </th>
                            <th class="colum_sort">
                                <?php echo $this->lang->line('txt_oders');?>
                            </th>
                            <th>
                                ID
                            </th>
                        </tr>
                        <?php 
                        foreach ($list as $key => $l) {
                            $expand_params = $params;
                            $expand_params['id'] = $l['post_id'];
                        ?>
                        <tr class="">
                            <td class="cellwidth1">
                                <input id="chkSelect" type="checkbox" name="ids[]" value='<?php echo $l['post_id']?>' />
                            </td>
                            <td class="cellwidth2">
                                <input type="button" data-href='<?php echo url_add_params($expand_params, '/index.php/admin/post/delete')?>' class="tooltip btgrid delete" title="Xóa"  />
                                <input type="button" data-href='<?php echo url_add_params($expand_params, '/index.php/admin/post/edit')?>' class="tooltip btgrid edit" title="Sửa" />
                            </td>
                            <td>
                                No image
                            </td>
                            <td>
                                Category
                            </td>
                            <td class="cellwidth1">
                                <?php my_toggle_button($l['post_status'], $l['post_id'], url_add_params($params, '/index.php/admin/post/status'), array('name'=>'ImgRowStatus'));?>
                            </td>
                            <td class="textleft">
                                <a href="<?php echo url_add_params($expand_params, '/index.php/admin/post/edit')?>" id="lblName" class="lblname"><?php echo $l['post_title']?></a>
                            </td>
                            <td class="">
                                <?php my_sort_input('sorts', $l['post_order'], array('class' => 'txtSort'), true, $l['post_id']);?>
                            </td>
                            <td class="cellwidth1">
                                <span id="lblID"><?php echo $l['post_id']?></span>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
                <div class="fg-toolbar tableFooter">
                    <?php
                        my_pagination( $num_rows = 100, $page = $params['page'], $range = $params['range'], url_add_params($params, '/index.php/admin/post') );
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