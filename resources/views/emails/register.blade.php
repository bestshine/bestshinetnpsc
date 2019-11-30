<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>User Registration</title>
</head>
<style>
body {
    padding: 0;
    margin: 0;
}

html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
    *[class="table_width_100"] {
        width: 96% !important;
    }
    *[class="border-right_mob"] {
        border-right: 1px solid #dddddd;
    }
    *[class="mob_100"] {
        width: 100% !important;
    }
    *[class="mob_center"] {
        text-align: center !important;
    }
    *[class="mob_center_bl"] {
        float: none !important;
        display: block !important;
        margin: 0px auto;
    }   
    .iage_footer a {
        text-decoration: none;
        color: #929ca8;
    }
    img.mob_display_none {
        width: 0px !important;
        height: 0px !important;
        display: none !important;
    }
    img.mob_width_50 {
        width: 40% !important;
        height: auto !important;
    }
}
.table_width_100 {
    width: 680px;
}

.mail-btn, .mail-btn:link, .mail-btn:visited {
    color: #FFFFFF;
    background-color: #337ab7;
}

.mail-bar a, .mail-button, .mail-btn {
    text-decoration: none !important;
}

.mail-margin-top {
    margin-top: 10px!important;
}

.mail-btn, .mail-button {
    border: none;
    display: inline-block;
    outline: 0;
    padding: 8px 16px;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    background-color: inherit;
    text-align: center;
    cursor: pointer;
    white-space: nowrap;
}

</style>
<body>

<div id="mailsub" class="notification" align="center">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;">
        <tr>
            <td align="center" bgcolor="#eff3f8">

                <table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
                    <tr>
                        <td>
                            <div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                    <!--header -->
                    <tr>
                        <td align="center" bgcolor="#fbfcfd">
                            <div style="height: 5px; line-height: 30px; font-size: 10px;"> </div>
                            <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="left">
                                        <div class="mob_center_bl" style="float: left; display: inline-block; width: 88px;">
                                            <table width="88" border="0" cellspacing="0" cellpadding="0" align="right" style="border-collapse: collapse;">
                                                <tr>
                                                    <td align="right" valign="middle">
                                                        <div style="height: 20px; line-height: 20px; font-size: 10px;"> </div>
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                                            <tr>
                                                                <td align="right">
                                                                    <div class="mob_center_bl" style="width: 88px;">
                                                                        <table border="0" cellspacing="0" cellpadding="0">
                                                                            <tr>
                                                                                <td width="100%" align="right" style="line-height: 19px;">
                                                                                    <a href="http://bestshineeducationcampus.com" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
                                                                                        <img src="http://bestshineeducationcampus.com/images/home/logo-BEC-NEET.png" alt="bestshinee-learning" style="width:215px;height: 50px;" />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div style="height: 10px; line-height: 50px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                    <!--header END-->

                    <!--content -->
                    <tr>
                        <td align="center" bgcolor="#ffffff">
                        <table width="90%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center">
                                    <div style="height: 30px; line-height: 60px; font-size: 10px;"> </div>
                                    <div style="line-height: 44px;">
                                        <font face="Arial, Helvetica, sans-serif" size="5" color="#57697e" style="font-size: 34px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: #57697e;text-transform: uppercase;">
                                            Welcome To E-LEARNING
                                            </span>
                                        </font>
                                    </div>
                                    <div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                Thank you for registering with us.You can login to your account with following credentials,
                                            </span>
                                        </font>
                                    </div>
                                    <!-- changes done by Parthiban 03-10-2017 -->
                                    <!-- User details -->   
                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;font-weight: bold;">
                                                User Login Details :
                                            </span>
                                        </font>
                                    </div>                                    

                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                Email : <?php echo $email?>
                                            </span>
                                        </font>
                                    </div>

                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                Password : <?php echo $password?>
                                            </span>
                                        </font>
                                    </div>

                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                <a target="_blank" href="http://bestshineeducationcampus.com/login" class="mail-btn mail-margin-top">LOGIN</a>
                                            </span>
                                        </font>
                                    </div>

                                    <div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
                                </td>
                            </tr>                            
                            <tr>
                                <td align="center">
                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                In case you have any questions, feel free to reach out to us at help@e-learning.com
                                            </span>
                                        </font>
                                    </div>
                                    <div style="height: 20px; line-height: 40px; font-size: 10px;"> </div>
                                </td>
                            </tr>

                            <tr>
                                <td align="left">
                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                Thanks,
                                            </span>
                                        </font>
                                    </div>

                                    <div style="line-height: 24px;">
                                        <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;text-transform: uppercase;">
                                                THE E-LEARNING TEAM
                                            </span>
                                        </font>
                                    </div>
                                    <div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
                                </td>
                            </tr>
                        </table>        
                        </td>
                    </tr>
                    <!--content END-->

                    <!--footer -->
                    <tr>
                        <td class="iage_footer" align="center" bgcolor="#fbfcfd">
                            <div style="height: 10px; line-height: 80px; font-size: 10px;"> </div>  
                            
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center">
                                        <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                                            2017 © E-Learning Campus. ALL Rights Reserved.
                                            </span>
                                        </font>              
                                    </td>
                                </tr> 
                                <tr>
                                    <td align="center">
                                        <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                                                <a href="http://bestshineeducationcampus.com/privacy-policy" target="_blank" style="color: #96a5b5;">Privacy Policy</a> | <a href="http://bestshineeducationcampus.com/terms-condition" target="_blank" style="color: #96a5b5;">Terms and Conditions</a> 
                                            </span>
                                        </font>              
                                    </td>                                    
                                </tr>  
                                <tr>
                                    <td align="center">
                                        <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                                                <a href="" style="color: #96a5b5;"><img src="http://bestshineeducationcampus.com/images/social-icon/fb.jpg"></a>
                                                <a href="" style="color: #96a5b5;"><img src="http://bestshineeducationcampus.com/images/social-icon/in.jpg"></a>
                                                <a href="" style="color: #96a5b5;"><img src="http://bestshineeducationcampus.com/images/social-icon/tw.jpg"></a>
                                            </span>
                                        </font>              
                                    </td>                                    
                                </tr>
                                <tr>
                                    <td align="center">
                                        <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5" style="font-size: 13px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                                                <a href="" style="color: #96a5b5;"><img src="http://bestshineeducationcampus.com/images/social-icon/android.png" style="width: 4%;"></a>
                                            </span>
                                        </font>              
                                    </td>                                    
                                </tr>                                         
                            </table>
                            
                            <div style="height: 10px; line-height: 10px; font-size: 10px;"> </div>  
                        </td>
                    </tr>
                    <!--footer END-->
                    <tr>
                        <td>
                            <div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>      
</div> 
</body>
</html>
