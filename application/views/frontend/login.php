<div class="pxn_login_main">
    <div class="pxn_login_box">
        <div class="pxn_login_box_inner">
            <div class="pxn_logo">
                <img src="<?php echo base_url();?>uploads/site_data/FullLogo_Transparent_NoBuffer.png" class="img-fluid">
            </div>
            <div class="pxn_login_data">
                <h4><?php echo html_escape($this->common->languageTranslator('ltr_p_login_continue'));?></h4>
                <form class="form" method="post" action="<?php echo base_url().'front_ajax/login'; ?>" data-redirect="yes">
                    <div class="edu_field_holder">
                        <input type="text"  class="edu_form_field require"  id="email" name="email" placeholder="<?php echo html_escape($this->common->languageTranslator('ltr_p_email'));?>" autocomplete="off" value="<?php echo(isset($_COOKIE['UML'])) ? base64_decode(urldecode(base64_decode($_COOKIE['UML']))) : ''; ?>">
                    </div>
                    <div class="edu_field_holder">
                        <input type="password" id="password_show"  name="password" class="require edu_form_field" placeholder="<?php echo html_escape($this->common->languageTranslator('ltr_password'));?>" value="<?php echo(isset($_COOKIE['SSD'])) ? base64_decode(urldecode(base64_decode($_COOKIE['SSD']))) : ''; ?>">
                     <i class="fas fa-eye-slash hide_show" onclick="myFunction()" style="transform: translate(500px, -38px);"></i>
                    </div>
                    </i><i class="fa-solid fa-acorn"></i>
                    <!--<div class="form-group">-->
                    <!--    <div class="g-recaptcha" data-sitekey="6LePAccfAAAAAHlT0kDWIaiUMp5xnyrGiwLkuC5y"></div>-->
                    <!--</div>-->
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="loginLinks checkbox_holder">
                                    <input type="checkbox" id="auth_remember" name="remember_me" <?php echo(isset($_COOKIE['UML'])) ? 'checked':''; ?>> 
                                    <label for="auth_remember"><?php echo html_escape($this->common->languageTranslator('ltr_remember_me'));?></label>
                                </div>
                            </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-md-right">
                            <div class="loginLinks">
                                <a class="form_link" href="<?php echo base_url('forgot-password');?>"><?php echo html_escape($this->common->languageTranslator('ltr_forgot_p'));?></a>
                            </div>
                        </div>
                    </div>
                    <div class="login_btn_wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12" >
                                <div class="login_submit_btn">
                                    <div class="backToHome"><a class="edu_btn" href="<?php echo base_url();?>"><?php echo html_escape($this->common->languageTranslator('ltr_back_to_home'));?></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 text-md-right">
                                <button class="edu_btn edu_btn_black" id="auth_login" type="button" data-action="submitThisForm"><?php echo html_escape($this->common->languageTranslator('ltr_login'));?></button>
                            </div>
                            <div class="edu_field_holder verification_otp">
                       
                            </div>
                            <div class="col-12">
                                <p class="edu-register-account"><?php echo html_escape($this->common->languageTranslator('ltr_dont_account'));?><span><a href="<?php echo base_url().'register';?>"> <?php echo html_escape($this->common->languageTranslator('ltr_register_now'));?></a></span></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    