<?php
$url = url_add_params($params, $url);
?>
<div id="page-wrapper">
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                    Module
                </h1>
            </div>
            <div class="block-right">
                <form action='/index.php/install/module' method='get'>
                <input name="keyword" value='<?php echo $params['keyword'];?>' type="text" id="txtSearch" class="txtSearch textbox" placeholder='keyword'>

                <?php 
                    echo my_select(
                        $list_parent, 
                        $option = array('title' => 'module_name', 'value' => 'module_id', 'level' => 'module_level'),
                        $selected = array($params['pid']),
                        $key = array('id' => 'module_id', 'parent' => 'module_parent'),
                        $no_choice = array('title' => '-- None --', 'value' => 0),
                        $name = 'pid',
                        $id = 'ddlInCate' , $class = 'combobox ddlFilter');
                ?>

                <?php 
                    echo my_select(
                        array( array('title'=>'Show', 'value'=>1), array('title'=>'Hide', 'value'=>0) ), 
                        $option = array('title' => 'title', 'value' => 'value'),
                        $selected = array($params['show']),
                        $key = array(),
                        $no_choice = array('title' => '-- All --', 'value' => -1),
                        $name = 'show',
                        $id = 'ddlstatus' , $class = 'combobox ddlFilter');
                ?>

                <?php 
                    echo my_select(
                        array( array('title'=>'Hot', 'value'=>1), array('title'=>'Normal', 'value'=>0) ), 
                        $option = array('title' => 'title', 'value' => 'value'),
                        $selected = array($params['highlight']),
                        $key = array(),
                        $no_choice = array('title' => '-- All --', 'value' => -1),
                        $name = 'highlight',
                        $id = 'ddlIsHot' , $class = 'combobox ddlFilter');
                ?>

                <input type="submit" name="search" value="Tìm kiếm" onclick="javascript:return RequiredEmptyField('.txtSearch','Chưa nhập chuỗi tìm kiếm!');"
                    id="cmdSearch" class="cmdSearch button">

                <a href="#" id="cmdReset" class="button">Reset</a>
                </form>
            </div>
        </div>
        <div id="main-content">
            <div class="widget">
                <div class="whead">
                 <div class="block-left control">
                 show
                    <select name="ddlshowitem" id="ddlshowitem" class="combobox">
                    <option value="10">10</option>
                     <option selected="selected" value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    </select>
                 entries
                </div>
                 <div class="block-right control">
                    <a href="/index.php/install/module/add" class='button'>Thêm</a>
                    <input type="submit" name="cmdDel" value="Xóa" id="cmdDel" class="button buttonDel" />
                    <input type="submit" name="cmdPublish" value="Hiện" id="cmdPublish" class="button buttonUnPublish" />
                    <input type="submit" name="cmdUnPublish" value="Ẩn" id="cmdUnPublish" class="button buttonPublish" />
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
                                Xóa/Sửa
                            </th>
                            <th>
                                Hiện
                            </th>
                            <th scope="col">
                                Tên bài viết
                            </th>
                            <th>
                                Hình ảnh
                            </th>
                            <th scope="col">
                                Danh mục
                            </th>
                            <th>
                                Nổi bật
                            </th>
                            <th class="colum_sort">
                                Thứ tự
                                <input type="image" name="ImgSaveSort" id="ImgSaveSort" src="<?php echo ADMIN_IMAGE_PATH ?>/icons/save.png">
                            </th>
                            <th>
                                ID
                            </th>
                        </tr>
                        <?php 
                        foreach ($list as $key => $l) {
                            
                        ?>
                        <tr class="">
                            <td class="cellwidth1">
                                <input id="chkSelect" type="checkbox" name="ids[]" value='<?php echo $l['module_id']?>' />
                            </td>
                            <td class="cellwidth2">
                                <input type="button" class="tooltip btgrid delete" title="Xóa"  />
                                <input type="button" class="tooltip btgrid edit" title="Sửa" />
                            </td>
                            <td class="cellwidth1">
                                <input type="button" name="ImgRowStatus"  class="tooltip btgrid publish" title="Đăng" id="ImgRowStatus" />
                            </td>
                            <td class="textleft">
                                <a href="add.html" id="lblName" class="lblname"><?php echo $l['module_name']?></a>
                            </td>
                            <td>
                                <a href="#" id="aPost" class="cbox cboxElement">
                                    <img src="images/about_us.jpg" id="imgPost" class="imgPost" />
                                </a>
                            </td>
                            <td class="textleft">
                                <a id="lblCategory">Không có danh mục</a>
                            </td>
                            <td class="cellwidth7">
                                <input type="button" name="ImgRowHot" id="ImgRowHot" class="tooltip btgrid unpublish" title="Nổi bật" />
                            </td>
                            <td class="">
                                <input name="txtSort" type="text" value="<?php echo $l['module_order']?>" id="txtSort" class="textbox txtSort" />
                            </td>
                            <td class="cellwidth1">
                                <span id="lblID"><?php echo $l['module_id']?></span>
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
                        <a tabindex="0" class="first paginate_button paginate_button_disabled" id="dynamic_first">First</a>
						<a tabindex="0" class="previous paginate_button paginate_button_disabled" id="dynamic_previous">Previous</a>
						<span>
						<a tabindex="0" class="paginate_active">1</a>
						<a tabindex="0" class="paginate_button">2</a>
						<a tabindex="0" class="paginate_button">3</a>
						<a tabindex="0" class="paginate_button">4</a>
						<a tabindex="0" class="paginate_button">5</a>
						</span>
						<a tabindex="0" class="next paginate_button" id="dynamic_next">Next</a>
						<a tabindex="0" class="last paginate_button" id="dynamic_last">Last</a>
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