<?php
if ($_GET['action'] == 'save') {
	$db = mysql_connect("localhost", "root", "123456") or die("fail");

	mysql_select_db('emailtest');


    if($_POST['myEmail']!='' && preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$_POST['myEmail'])==true){


    	$myemail=mysql_real_escape_string($_POST['myEmail']);
		$sql = "select entity_id from customer_email_entity where customer_email='$myemail'";
		$result = mysql_query($sql);
		if (mysql_num_rows($result)!= 0) {
			$errormassage="已经存在email";
		}
		else {

			$sql2 = "insert into customer_email_entity (customer_email,created_at) values('$myemail',NOW()) ";
			$result2 = mysql_query($sql2);
			for($i=1;$i<4;$i++)
			{


				if($_POST["friendEmail$i"]!='' && preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$_POST["friendEmail$i"])==true)
				{
					$friendEmail=mysql_real_escape_string($_POST["friendEmail$i"]);
					$sql3="select entity_id from customer_email_entity where customer_email='$friendEmail'";
					$result3=mysql_query($sql3);
					if(mysql_num_rows==0)
					{
						$sql4="insert into customer_email_entity (customer_email,created_at) values ('$friendEmail',NOW())";
						$result4=mysql_query($sql4);
					}
				}

			}

		$errormassage="申请成功";

		}
    }
    else
    {
		$errormassage="请输入正确email格式";

    }
	mysql_close($db);

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>
<title>魅力惠 亚洲顶尖奢侈品会员制购物社区  600个国际品牌官方合作伙伴</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="魅力惠 亚洲顶尖奢侈品会员制购物社区  600个国际品牌官方合作伙伴" />
<meta name="keywords" content="glamour sales china, glamour sales, glamoursales, glamoursales china, meilihui， online outlet, outlet china, luxury discount, private sales, private sales china, online luxury, online luxury china,魅力惠，魅力会，奢侈品会员制购物，线上特卖，品牌折扣，奢侈品特卖，名品折扣，限时特卖" />
<meta name="robots" content="INDEX,FOLLOW" />
<link rel="icon" href="http://media2.glamour-sales.com.cn/skin/frontend/glamour/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://media2.glamour-sales.com.cn/skin/frontend/glamour/default/favicon.ico" type="image/x-icon" />
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'http://media2.glamour-sales.com.cn/js/blank.html';
    var BLANK_IMG = 'http://media2.glamour-sales.com.cn/js/spacer.gif';
    var SKIN_URL = 'http://media2.glamour-sales.com.cn/skin/frontend/glamour/default/';
    
    var _gaq = _gaq || [];
    
//]]>
</script>
<link rel="stylesheet" type="text/css" href="http://media2.glamour-sales.com.cn/media/fileversioner/css/e5769d605a57a647abf3aeb61ff371c21.0.css" media="print" />
<link rel="stylesheet" type="text/css" href="http://media2.glamour-sales.com.cn/media/fileversioner/css/2321aa7ee160c4f8edc71d96635a59ce1.0.css" media="all" />
<link rel="stylesheet" type="text/css" href="http://media2.glamour-sales.com.cn/media/fileversioner/css/4ce1b44a89e8bf4c28d3b09f59e8a8441.0.css" media="screen" />
<script type="text/javascript" src="http://media2.glamour-sales.com.cn/media/fileversioner/js/d3657f41b0c183d2c755dd37951dd4fe1.0.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://media2.glamour-sales.com.cn/media/fileversioner/js/dcd6a88dde6bb9054b87a58da86a56371.0.js"></script>
<![endif]-->

<script type="text/javascript">
//<![CDATA[
Mage.Cookies.path     = '/';
Mage.Cookies.domain   = '.glamour-sales.com.cn';
//]]>
</script>
<script type="text/javascript">var Translator = new Translate({"This is a required field.":"\u4fe1\u606f\u4e0d\u80fd\u4e3a\u7a7a","Please enter a valid email address. For example johndoe@domain.com.":"\u8bf7\u8f93\u5165\u6709\u6548\u7684\u90ae\u7bb1\u5730\u5740\uff0c\u4f8b\u5982johndoe@domain.com","Please make sure your passwords match.":"\u8bf7\u786e\u8ba4\u60a8\u7684\u5bc6\u7801\u662f\u6709\u6548\u7684","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"\u8bf7\u8f93\u51656\u4f4d\u6216\u4ee5\u4e0a\u7684\u5b57\u7b26\uff0c\u9996\u5c3e\u4e0d\u80fd\u662f\u7a7a\u683c","Please enter a valid credit card number.":"\u8bf7\u8f93\u5165\u6709\u6548\u7684\u4fe1\u7528\u5361\u5361\u53f7.","Please wait, loading...":"\u63d0\u4ea4\u4e2d\uff0c\u8bf7\u7a0d\u5019...","Please specify shipping method.":"\u8bf7\u9009\u62e9\u914d\u9001\u65b9\u5f0f.","Please specify payment method.":"\u8bf7\u9009\u62e9\u4e00\u79cd\u652f\u4ed8\u65b9\u5f0f.","Please use only letters (a-z or A-Z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Please use only letters (a-z or A-Z), numbers (0-9) or underscores (_) in this field, first character must be a letter."});</script></head>
<style>
body {background:url(http://media2.glamour-sales.com.cn/media/cmsimages/nm20120423/nm-teaser-bg2.jpg) center top no-repeat; margin:0 }

.nm-main {height:1042px; position:relative; width:960px; margin:auto;overflow:hidden}
#video-container{ width:580px; height:324px; float:left; overflow:hidden}
#video-nav { margin-top:202px; padding-left:207px; width:864px; position:relative; height:320px}
#video-nav a {width:247px; height:139px; display:block; float:left; text-indent:-999em; background:url(http://media2.glamour-sales.com.cn/media/cmsimages/nm20120423/button.jpg) 0 -139px no-repeat}
#video-nav #video1:hover{background-position:0 0;}
#video-nav #video2{background-position: -247px -139px; margin-left:50px; _margin-left:25px;}
#video-nav #video2:hover{background-position: -247px 0}
#TB_title #TB_closeWindowButton{background:url(http://media2.glamour-sales.com.cn/skin/frontend/glamour/v2/images/common/popup/close-icon.png) no-repeat;width:25px;height:25px;right:-2px;top:0;
	_background-image:url(http://media2.glamour-sales.com.cn/skin/frontend/glamour/v2/images/common/popup/close-icon.gif)}
.popflvplayer {background:#111;  padding:10px; margin:10px}	
.teaserbox { width:1000px; margin:0 auto; position:relative;}
.snsnav { position:absolute; right:2px; width:160px; height:26px;}
.snsnav a { display:block; float:left; width:60px; height:26px;}
.snsnav a.kaixin { padding-left:40px;}
.nmteaserform { width:620px; height:auto; margin:0 auto; background:#232323; position:relative; padding:8px 0 0 0; }
.submitbox { width:90px; height:30px; background:#ca403e; position:absolute; right:8px; bottom:8px; }
.formline { background:url(http://media2.glamour-sales.com.cn/media/cmsimages/nm20120423/nm-formline-bg.gif) 0 0 no-repeat #232323; height:34px; line-height:34px; display:block; padding:4px 0 0 8px; }


.formline input {
    background: none repeat scroll 0 0 #FFF;
    border: medium none;
    color: #666;
    cursor: text;
    display: block;
    height: 17px;
    line-height: 18px;
    font-size:14px;
    margin: 0;
    padding: 0 0 3px;
    vertical-align: middle;
    width:500px;
    }

a.submit {  background:url(http://media2.glamour-sales.com.cn/media/cmsimages/nm20120423//nm-teaser-form-bg.gif) -523px -8px no-repeat; width:90px; height:30px; display:block; float:left;text-indent:-999em; }
a.addmore { background:url(http://media2.glamour-sales.com.cn/media/cmsimages/nm20120423//nm-teaser-form-bg.gif) 0 -48px no-repeat; width:90px; height:30px; display:block; float:left;text-indent:-999em;}

.hide { display:none;}
</style>


<body class="page-empty  cms-page-view cms-teaser2-html">
<div class="teaserbox">
	<div class="snsnav">
		<a href="#" class="kaixin">kaixin</a>
		<a href="#" class="weibo">weibo</a>
	</div>
	<div class="nm-main">

		<div id="video-container1" style="display:none">

						<div class="popflvplayer">
							<a
								 href="http://media2.glamour-sales.com.cn/media/catalog/category/01_NeimanMarcus_SUBTITLE_V4_H264.f4v"
								 style="display:block;width:580px;height:324px"
								 id="gls_flash_video1">
							</a>

						</div>
					
		</div>	
		<div id="video-container2" style="display:none">
			
						<div class="popflvplayer">
							<a
								 href="http://admin.glamour-sales.com.cn/media/catalog/category/02_BergdorfGoodman_SUBTITLE_V4_H264.f4v"
								 style="display:block;width:580px;height:324px"
								 id="gls_flash_video2">
							</a>

						</div>

		</div>
		<div id="video-nav">
			<a class="thickbox" id="video1" href="#TB_inline?width=620&height=370&inlineId=video-container1&keepThis=true">PLAY</a>
			<a class="thickbox" id="video2" href="#TB_inline?width=620&height=370&inlineId=video-container2&keepThis=true">PLAY</a>
		</div>
		<div class="nmteaserform">
			<form  name="fm" action="?action=save" method="post">
			<div class="formbox">
				<p id="line1" class="formline"><input name="myEmail" type=”text“ id="email_1" title="Email" value="" class="required-entry  validate-email" type="text" size="64"  maxlength="64" placeholder="请输入e-mail地址" /></p>
				<p id="line1" class="formline hide"><input name="friendEmail1" type=”text“ id="email_2" title="Email" value="" class="required-entry  validate-email" type="text" size="64"  maxlength="64" placeholder="请输入e-mail地址" /></p>
				<p id="line3" class="formline hide"><input name="friendEmail2" type=”text“ id="email_3" title="Email" value="" class="required-entry  validate-email" type="text" size="64"  maxlength="64" placeholder="请输入e-mail地址"/></p>
				<p id="line4" class="formline hide"><input name="friendEmail3" type=”text“ id="email_4" title="Email" value="" class="required-entry  validate-email" type="text" size="64"  maxlength="64" placeholder="请输入e-mail地址" /></p>
				<p id="line5" class="formline hide"><input name="friendEmail4" type=”text“ id="email_5" title="Email" value="" class="required-entry  validate-email" type="text" size="64"  maxlength="64" placeholder="请输入e-mail地址" /></p>
			</div>
			</form >
			<div class="submitbox"><a href="#" class="submit">submit</a></div>
			<div class="addmorebox"><a href="#" class="addmore">addmore</a></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="http://media2.glamour-sales.com.cn/skin/frontend/glamour/default/js/flowplayer-3.2.6.min.js"></script>
<script type="text/javascript">
//<![CDATA[

jQuery(document).ready(function(){
	
	emailPattern 	 	= /^\s*[\w-]+(\.[\w-]+)*@([\w-]+\.)+[A-Za-z]{2,7}\s*$/;

	flowplayer("gls_flash_video1", {src:"http://media2.glamour-sales.com.cn/skin/frontend/glamour/default/images/product/flowplayer-3.2.7.swf", wmode: 'transparent'});
	flowplayer("gls_flash_video2", {src:"http://media2.glamour-sales.com.cn/skin/frontend/glamour/default/images/product/flowplayer-3.2.7.swf", wmode: 'transparent'});
	jQuery('#TB_closeWindowButton').click(function(){
		$f("*").each(function() {
			this.stop();
		});
	});
	jQuery("a.addmore").click(function(){
		var inputNb = jQuery(".formline").size()
		, activeNb = jQuery("p.formline:visible").size();
		//alert('all:'+ inputNb+',active:' + activeNb);
		jQuery(".formline").eq(activeNb).slideDown();
		if ( inputNb <= activeNb +1){
			jQuery("div.addmorebox").addClass("hide");
		}
		return false;
	});
	jQuery("a.submit").click(function(){
		var email1 =  jQuery.trim( jQuery("#email_1").val())
		, email2 =  jQuery.trim( jQuery("#email_2").val())
		, email3 =  jQuery.trim( jQuery("#email_3").val())
		, email4 =  jQuery.trim( jQuery("#email_4").val())
		, email5 =  jQuery.trim( jQuery("#email_5").val())
		, activeNb = jQuery("p.formline:visible").size();
		if (email1 =="") { alert("请输入您的邮件地址"); return ;}
		if( !emailPattern.test( email1 ) ){ alert("邮件地址格式不正确");return ;}
		if ( activeNb > 1 ){
			if (email2 =="") { alert("请输入您的邮件地址"); return ;}
			if( !emailPattern.test( email2 ) ){ alert("邮件地址格式不正确");return ;}
		}
		if ( activeNb > 2 ){
			if (email3 =="") { alert("请输入您的邮件地址"); return ;}
			if( !emailPattern.test( email3 ) ){ alert("邮件地址格式不正确");return ;}
		}
		if ( activeNb > 3 ){
			if (email4 =="") { alert("请输入您的邮件地址"); return ;}
			if( !emailPattern.test( email4 ) ){ alert("邮件地址格式不正确");return ;}
		}
		if ( activeNb > 4 ){
			if (email5 =="") { alert("请输入您的邮件地址"); return ;}
			if( !emailPattern.test( email5 ) ){ alert("邮件地址格式不正确");return ;}
		}
		alert("submit!");
		jQuery("form").submit( function () {
			return false;
		});
		return false;
	});
	
});
<?php  echo $errormassage; ?>

//]]>
</script>  
</form>

</html>
