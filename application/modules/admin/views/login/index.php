<body class="loginpage">
	    <div class="login">
			<div class="widget_header">
				<img src="<?php echo ADMIN_IMAGE_PATH ?>/logo.png" alt="logo" />
			</div>
			<div class="widget_contents lgNoPadding">
			    
			    <?php
			    $notice = $this->session->flashdata('notice');
                if( isset( $notice ) && $notice ) {
                    echo "<span class=\"error\">" . $notice['message'] . "</span>";
                }
			    ?>
                
                
				<form action="" method="post" id="wl-form" name="wl-form">
                        <label for="wl-username">Username</label>
                        <input type="text" id="wl-username" name="wl-username" value="admin">
                        <label for="wl-password">Password</label>
                        <input type="password" id="wl-password" name="wl-password" value="demo">
                        <br />
                        <input type="submit" value="Đăng nhập" id="wl-btn" name="login" class="fright">
                </form>
                <div class="clearfix"></div>
			</div>
            <div class="widget_footer">
				 Copyright © 2012 - TQDesign
			</div>
		</div>
</body>