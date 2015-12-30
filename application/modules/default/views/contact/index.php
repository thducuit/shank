<!-- main start -->
    <div id="main" class="clearfix">
        <!-- content start -->
        <div id="content" class="con">
            <h3><?php echo $this->lang->line('txt_contact');?></h3>
            <div class="section">
                <?php echo $contact['post_content']?>
            <!-- <table summary="お問い合わせ" class="th_left">
<tr>
    <th class="w25">会社名</th>
    <td>Sanko Mold Vietnam Co., Ltd.</td>
</tr>
<tr>
    <th>住所</th>
    <td>Amata Industrial Park<br />
116/1 Amata Rd., Bien Hoa City, Dong Nai Province, Viet Nam</td>
</tr>
<tr>
    <th>電話</th>
    <td>(+84)61 393 6635 / 393 6636</td>
</tr>
<tr>
    <th>Fax</th>
    <td>(+84)61 393 6637</td>
</tr>
<tr>
    <th>Email</th>
    <td><a href="mailto:sale@sankomold.com">sale@sankomold.com</a></td>
</tr>

            </table> -->
                
                <div class="ctMap">
                    <?php echo $contact['post_description']?>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3917.3532310267246!2d106.88847!3d10.9366675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174de6cbff5bf79%3A0x21c412885fbc1a4b!2sC%C3%B4ng+Ty+TNHH+Sanko+Mold+Vi%E1%BB%87t+Nam!5e0!3m2!1svi!2s!4v1449462005687" width="100%" height="400" frameborder="0" style="border:0"></iframe> -->
                </div>
            </div>
            <h4><?php echo $this->lang->line('txt_note');?></h4>
            <div class="section">
                <p class="red pl10"><?php echo $this->lang->line('txt_required');?> </p>
                <form action='' id="submitform" method="post">
                    <dl class="dl_form">
                        <dt>
                            <label for="txtFullname"><?php echo $this->lang->line('txt_name');?></label>
                        </dt>
                        <dd>
                            <input type="text" class="sizeTxt" size="150" value="" id="txtFullname" name="txtFullname" />
                            <span class="must">*</span> </dd>
                        <dt>
                            <label for="txtEmail">Email</label>
                        </dt>
                        <dd>
                            <input type="text" class="sizeTxt" size="150" value="" id="txtEmail" name="txtEmail" />
                            <span class="must">*</span> </dd>
                        <dt>
                            <label for="txtTel"><?php echo $this->lang->line('txt_tel');?></label>
                        </dt>
                        <dd>
                            <input type="text" class="sizeTxt" size="150" value="" id="txtTel" name="txtTel" />
                        </dd>
                        <dt>
                            <label for="txtCompany"><?php echo $this->lang->line('txt_company');?></label>
                        </dt>
                        <dd>
                            <input type="text" class="sizeTxt" size="150" value="" id="txtCompany" name="txtCompany" />
                        </dd>
                        <dt>
                            <label for="txtContent"><?php echo $this->lang->line('txt_content');?></label>
                        </dt>
                        <dd>
                            <textarea rows="3" cols="35" id="txtContent" name="txtContent"></textarea>
                            <span class="must">*</span></dd>
                            <dt>&nbsp;</dt>
                            <dd class="center">
                                <input type="submit" value=<?php echo $this->lang->line('txt_send');?> class="btnSubmit" name="send" />
                            </dd>
                    </dl>
                    <p class="buttonC">
                        
                    </p>
                </form>
            </div>
        </div>
        <!-- content end -->

        <script>
    $(document).ready(function(){
        $('#submitform').validate({
            rules: {
                txtFullname: {
                    required: true
                },                
                txtEmail: {
                    required: true,
                    email: true
                },
                txtContent: {
                    required: true
                }
               
            },
            messages: {
                txtFullname: {
                    required: VALIDATE_REQUIRED
                },                
                txtEmail: {
                    required: VALIDATE_REQUIRED,
                    email: VALIDATE_EMAIL
                },
               txtContent: {
                    required: VALIDATE_REQUIRED
                } 
            },
            submitHandler: function(form) {
                // some other code
                // maybe disabling submit button
                // then:
                $('*[type=submit]').append('<div class=\'loading\'></div>').hide();
                $(form).submit();
            }
        });
    });
</script>
        