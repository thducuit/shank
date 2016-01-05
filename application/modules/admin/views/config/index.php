<div id="page-wrapper">
  <form method='post'>
    <div id="main-wrapper">
        <div id="main-header">
            <div class="block-left">
                <img src="<?php echo ADMIN_IMAGE_PATH ?>/icons/icon_list.png" alt="" />
                <h1 class='title'>
                    Cấu hình website
                </h1>
            </div>
            <div class="block-right">
                <input type="submit" name="add" value="Lưu" id="cmdAdd" class="button " />
                <input type="submit" name="cancel" value="Hủy" id="cmdDel" class="button " />
            </div>
        </div>
        <div id="main-content">
			<div class="divTab">
                            <div class="tab-item">
							                  <a class="atab tab-icon email" title="tab0">Email</a>
                                <a class="atab tab-icon ga" title="tab1">Ga</a>
                                <a class="atab tab-icon seo" title="tab2">Config</a>
                            </div>
                    
                            <div class="tab0 tabcontent ui-corner-all">
                                <label class="desc">
                                    SMTP
                                </label>
                                   <input name='config[_smtp_]' type="text" class="full" />
                                <label class="desc" >
                                    Cổng
                                </label>
                                   <input type="text" class="full" />
                                 <label class="desc" >
                                    Chứng thực
                                </label>
                                    <select name='config[_auth_]' class="select">
                                    <option value="0">Có</option>
                                    <option value="0">Không</option>
                                </select>
                                 <label class="desc" >
                                    SSL
                                </label>
                                   <select name='config[_ssl_]' class="select">
                                    <option value="0">Có</option>
                                    <option value="0">Không</option>
                                </select>
                                 <label class="desc" >
                                    Tài khoản SMTP
                                </label>
                                   <input name='config[_smtp_account_]' type="text" class="full" />
                                <label class="desc" >
                                    Mật khẩu SMTP
                                </label>
                                   <input name='config[_smtp_password_]' type="text" class="full" />
                                <label class="desc" >
                                    Người gửi
                                </label>
                                   <input name='config[_smtp_sender_]' type="text" class="full" />
                                <label class="desc" >
                                    Người nhận
                                </label>
                                   <input name='config[_smtp_receiver_]' type="text" class="full" />
                            </div>
                            <div class="tab1 tabcontent ui-corner-all">
                                 <label class="desc">Gmail</label>
                                   <input name='config[_gmail_]' type="text" class="full" />
                                <label class="desc" >Password</label>
                                   <input name='config[_password_]' type="text" class="full" />
                                <label class="desc">Profile ID</label>
                                   <input name='config[_profileID_]' type="text" class="full" />
                                <label class="desc" >Tracking Code</label>
                                   <textarea name='config[_tracking_code_]' class="full" rows="10"></textarea>
                            </div>
                            <div class="tab2 tabcontent ui-corner-all">
                                <label class="desc">Google Map</label>
                                   <textarea name='config[_google_map_]' class="full" rows="10"></textarea>
                                <label class="desc" >Dia chi</label>
                                   <textarea name='config[_address_]' class="full" rows="7"></textarea>
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
                    <input type="submit" name="cmdAdd" value="Áp dụng" id="cmdAdd" class="button " />
                    <input type="submit" name="cmdDel" value="Hủy" id="cmdDel" class="button " />
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </form>
</div>
<div class="clearfix"></div>