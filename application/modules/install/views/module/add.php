<div id="page-wrapper">
    <form action='' method='post'>
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                    Module :: Add
                </h1>
            </div>
            <div class="block-right">
                <input type="submit" name="add" value="Add" id="cmdAdd" class="button" />
                <input type="submit" name="cancel" value="Cancel" id="cmdCancel" class="button" />
            </div>
        </div>
        <div id="main-content">
            <div id="content-outer">
                <div class="content-wrapper">
                    <div class="content">
                        <div id="tabs" class="tabs">
                            <ul>
                                <li><a href="#tabs-1">Add</a></li>
                            </ul>
                            <div id="tabs-1">
                                <div class="form">
                                    <div class="block-left">
                                        <label class="desc">Code</label>
                                        <input name="module_code" type="text" value="" class="field text full">
                                  
                                        <label class="desc">Name</label>
                                        <input name="module_name" type="text" value="" class="field text full">

                                        <label class="desc">Link</label>
                                        <input name="module_link" type="text" value="" class="field text full">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="control">
                                <input type="submit" name="add" value="Add" id="cmdAdd" class="button " />
                                <input type="submit" name="cancel" value="Cancel" id="cmdCancel" class="button " />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-left sidebar">
                <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
                    <div class="portlet-header ui-widget-header">
                        <span class="ui-icon ui-icon-circle-arrow-s"></span>Parent
                    </div>
                    <div class="portlet-content">
                        <?php 
                            echo my_select(
                                $list_parent, 
                                $option = array('title' => 'module_name', 'value' => 'module_id', 'parent' => 'module_parent', 'level' => 'module_level'),
                                $attributes = array('name' => 'module_parent', 'id' => 'lstCate', 'class' => 'listbox lstCate', 'size' => 4),
                                $selected = array(), 
                                $no_choice = array('title' => '-- None --', 'value' => 0),
                                $exception = $list_children
                            );
                        ?>
                    </div>
                </div>
                
                <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
                    <div class="portlet-header ui-widget-header">
                        <span class="ui-icon ui-icon-circle-arrow-s"></span>Configuration
                    </div>
                    <div class="portlet-content">
                        <ul>
                            <li>
                                <label class="desc">
                                    Status
                                </label>
                                <div>
                                    <?php 
                                        echo my_select(
                                            array(array('title' => 'Show', 'value' => 1), array('title' => 'Hide', 'value' => 0)), 
                                            $option = array('title' => 'title', 'value' => 'value'),
                                            $attributes = array('name' => 'module_status', 'id' => 'lstStatus', 'class' => 'listbox lstStatus')
                                        );
                                    ?>
                                </div>
                            </li>
                            <li>
                                <label class="desc">
                                    Menu
                                </label>
                                <div>
                                    <?php 
                                        echo my_select(
                                            array(array('title' => 'Show', 'value' => 1), array('title' => 'Hide', 'value' => 0)), 
                                            $option = array('title' => 'title', 'value' => 'value'),
                                            $attributes = array('name' => 'module_menu', 'id' => 'lstStatus', 'class' => 'listbox lstStatus')
                                        );
                                    ?>
                                </div>
                            </li>
                            <li>
                                <label class="desc">
                                    Order
                                </label>
                                <input name="module_order" type="text" value="1" class="field text small">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
                    <div class="portlet-header ui-widget-header">
                        <span class="ui-icon ui-icon-circle-arrow-s"></span>Option
                    </div>
                    <div class="portlet-content">
                        <select size="4" name="module_option[]" multiple  id="lstCate" class="listbox lstCate">
                            <option value="all">-- Reset all --</option>
                            <option selected="selected" value="content">Content</option>
                            <option selected="selected" value="description">Description</option>
                            <option selected="selected" value="category">Category</option>
                            <option selected="selected" value="photo">Feature photo</option>
                            <option selected="selected" value="seo">SEO</option>
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
                <div class="fg-toolbar tableFooter">
                    <input type="submit" name="cmdAdd" value="Lưu" id="cmdAdd" class="button " />
                    <input type="submit" name="cmdAdd" value="Áp dụng" id="cmdAdd" class="button " />
                    <input type="submit" name="cmdDel" value="Hủy" id="cmdDel" class="button " />
                </div>
            </div>
            <div class="clearfix">
            </div>
        </div>
        <div class="clearfix">
        </div>
    </div>
    <div class="clearfix"></div>
    </form>
</div>