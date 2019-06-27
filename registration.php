<?php include "header.php"; ?>
        
    <section class="content">


        <h1>REGISTRATION
        </h1>




        <div class="registration">
            <div class="register-feedback-form">

                <div class="line">
                    <div class="left">
                        <label>
                            Name *:
                        </label>
                        <p>
                            (You can add your nickname as well.)
                        </p>
                    </div>
                    <div class="right">
                        <input name="txtfirst" type="text" id="txtfirst" />
                    </div>
                </div>
                <div class="line">
                    <div class="left">
                        <label>
                            E-mail *:
                        </label>
                        <p>
                            (for example, <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5f5c5d7e464744105d5153">[email&#160;protected]</a>)
                        </p>
                    </div>
                    <div class="right">
                        <input name="ctl00$main$Email" type="email" id="Email" onblur="validate()" /><span id="result"></span>
                    </div>
                    <br />
                    <p>
                        <div class="form-attention">
                            ATTENTION! <b style="color: red">Use your existing e-mail address only (!!!)</b>; otherwise, malicious users may access your account and withdraw all available funds! If you have lost access to your account, immediately inform us and your guider through CONTACTS section of the web-site.

                        </div>
                    </p>
                </div>

                <div class="line">
                    <div class="left">
                        <label>
                            Currency:
                        </label>
                        <p>
                            (According choose your Currency to fiexed currency of PO)
                        </p>
                    </div>

                    <div class="right">
                        <select name="Currency" id="Currency">
                        </select>

                    </div>
                </div>
                <div class="line">
                    <div class="left">
                        <label>
                            Invite:
                        </label>
                        <p>
                            (It’s optional. Fill this field if someone invited you. You can opt to leave this field empty)
                        </p>
                    </div>
                    <div class="right">
                        <input name="txtref" readonly value="invite@mmmcoperation.com" type="text" id="txtref" class="form-control" required="required">
                    </div>
                </div>
                <div class="line">
                    <div class="left">
                        <label>
                            Mobile *:
                        </label>
                        <p>
                            (Entering Valid Mobile number is mandatory)
                        </p>
                    </div>
                    <div class="right">
                        <input name="ctl00$main$mobile" type="text" id="mobile" />
                    </div>
                    <div class="line">
                        <div class="left">
                            <label>
                                Password* :
                            </label>
                            <p>
                                (enter your password)
                            </p>
                        </div>
                        <div class="right">

                            <input name="txtpassword" type="password" id="txtpassword" />

                        </div>
                    </div>



                    <div class="line">
                        <div class="left">
                            <label>
                                Confirm Password* :
                            </label>
                            <p>
                                (re-enter your password)
                            </p>
                        </div>
                        <div class="right">

                            <input name="txtconfirm" type="password" id="txtconfirm" />

                        </div>
                    </div>

                    <div class="line how_find_us_other hide" style="display: none;">
                        <div class="left"></div>
                        <div class="right">
                            <textarea name="how_find_us_other" id="Textarea1" cols="90" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="line">
                        <div class="left">
                            <label>
                                How did you learn about us?
                            </label>

                        </div>
                        <div class="right">

                            <select id="knowUs" class="form-control" required="required">
                                <option value="">Select</option>
                                <option value="friend">from friends</option>
                                <option value="sms">sms</option>
                                <option value="anothersite">another site</option>
                                <option value="videoadvertising">video advertising</option>
                                <option value="banners">banners</option>
                                <option value="searchengines">search engines</option>
                                <option value="scialnetwork">scial network</option>
                                <option value="forurms">forurms</option>
                            </select>

                        </div>
                    </div>
                    <div class="line" id="Div1">
                        <div class="left">
                            <label>
                                Image code *:
                            </label>
                            <p>
                                Enter the code from the picture
                            </p>
                        </div>
                        <div class="right">
                            <input name="" type="text" id="cap_ch" />
                        </div>
                    </div>
                    <div class="line">
                        <div class="left"></div>
                        <div class="right">
                            <div id="">
                                <img id="captchaImg" src="https://www.mmmcooperation.com/services/captcha.ashx" style="height: 60px; color: black; width: 240px; margin-right: 10px; float: left" />
                                <p>
                                    <a onclick="refreshCap()" href="javascript:void(0)" style="float: right; width: 50px;">refresh</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="line">
                        <div class="left"></div>
                        <div class="right">
                        </div>
                    </div>
                    <div class="line">
                        <div class="left"></div>
                        <div class="right" data-form-errors-container="">
                        </div>
                    </div>
                    <div class="line">
                        <div class="left"></div>
                        <div class="right">
                            <p>
                                <span required="required" name="agree">
                                    <input id="mainpage_agree" checked="checked" disabled="disabled" type="checkbox" name="ctl00$ContentPlaceHolder_mainpage$agree"></span>
                                I have read the scheme related documents & <a href="warning.php">WARNING</a> carefully & well aware of risk involved. Being Sound mind I have decided to become a member of MMM.
                            </p>
                        </div>
                    </div>
                    <div class="line">
                        <div class="left"></div>
                        <span id="ctl00_ContentPlaceHolder_mainpage_lb" style="color: Maroon; font-weight: bold; margin-top: 10px"></span>
                        <center>
						 <button type="submit"  id="login_submit" onclick="submitForm()"  style="350px"    class="btn-submit">REGISTER IN MMM</button>

  
                        <br />                      
                        <span id="loading"></span>
</center>
                    </div>
                </div>
            </div>


            <div id="myModal1" class="modal">

                <!-- Modal content -->
                <div class="modal-content alt" style="background: #fff; border: 4px solid #CC8822; border-radius: 10px;">

                    <p style="text-align: center;">
                        <img src="/site/img/ajax-loader.gif" style="width: 200px; height: 200px" />Creating account ...
                    </p>

                </div>

            </div>
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content" style="background: #fff; border: 4px solid #CC8822; border-radius: 10px;">
                    <span onclick="als()" class="close">&times;</span>
                    <div style="margin: 20px 0 30px 0" id="infobox">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>