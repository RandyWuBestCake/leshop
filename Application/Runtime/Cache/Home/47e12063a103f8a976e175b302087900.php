<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
                      <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<!-- js引用文件添加 -->
<!-- 页面底部统一引用jsInclude -->
<!-- 引用静态页面标签 -->
        <script>var _hrefPath = '',_imagePath = 'http://img0.hdletv.com',_basePath = 'http://web_dev_service_group:80/';</script>
        <!--[if lt IE 7]>
                <script type="text/javascript" src="Scripts/unitpngfix.js"></script>
        <![endif]-->
            <link  type='text/css' href='/object/Public/cart/Content/global.css' rel='stylesheet' />

            <script type='text/javascript' src='/object/Public/cart/Scripts/generatesession.js'></script>

            <script type='text/javascript' src='/object/Public/cart/Scripts/zxlib.js'></script>

            <script type='text/javascript' src='/object/Public/cart/Scripts/template.js'></script>

            <link  type='text/css' href='/object/Public/cart/Content/cart.css' rel='stylesheet' />

            <link  type='text/css' href='/object/Public/cart/Content/qp.css' rel='stylesheet' />

            


        <link rel="icon" href="http://www.letv.com/favicon.ico" type="image/x-icon"/> 
        <link rel="shortcut icon"  href="http://www.letv.com/favicon.ico" type="image/x-icon"/>     <title>支付信息确认 - 乐视</title>
</head>
<body>

<div class="header">
  <div class="top_link f8_bg">
    <div class="center">
        <ul class="left quick_links">
            <li><a href="/LetvTV.html" webtrekkparam="{ct:'H_letv'}" target="_blank" ><span class="pr15">乐视网TV版</span></a>|</li>
            <li><a href="http://ui.letv.com/index.html" webtrekkparam="{ct:'H_letvui'}" target="_blank" ><span class="pl15 pr15">LetvUI</span></a>|</li>
            <li><a href="http://www.letvstore.com/" webtrekkparam="{ct:'H_letvstroe'}" target="_blank" ><span class="pl15 pr15">LetvStore </span></a>|</li>
            <li class="hd_list show_hide_block abroad" object="#abroad" type="slide" speed="fast" buffer="300">
                <a href="http://hk.shop.letv.com/" target="_blank"><span class="pl15 pr25">海外版</span></a>|
                <dl id="abroad">
                    <dt><a href="http://hk.shop.letv.com/" target="_blank">海外版</a></dt>
                    <dd><a href="http://hk.shop.letv.com/" target="_blank">香港站</a></dd>

                </dl>
            </li>
            <li class="mzhan show_hide_block" object="#mzhan" type="slide" speed="fast" buffer="300">
                <a href="/app/download.html" target="_blank"><span class="pl15 pr15">手机版</span></a>|
                <div id="mzhan">
                    <div class="left"><img  alt=""  src="Picture/959087ad79f64d5ca252bffe2c447002.gif" style="width:95px;"/></div>
                    <div class="left pl5">
                        <span class="dark">扫描下载客户端<br/>手机抢购更给力</span><br/>
                        <span class="gray">iPhone | Android</span><br/>
                        <a href="/app/download.html" class="block red_bt_s mt10" target="_blank"><span class="font12 white">免费下载</span></a>
                    </div>
                </div>
            </li>
            <li><a href="http://bbs.letv.com" target="_blank"><span class="pl15 pr15">社区</span></a>|</li>
            <li><a href="/dkh.html" target="_blank"><span class="pl15 pr15">大客户通道</span></a></li>
        </ul>
        <ul class="right log_order t_r">

             <?php  session_start(); if(!session('users')){ ?>
              <li id="loginMess" class="loginNew"><a id="login" rel="nofollow" href="<?php echo U('Login/index');?>"><span class="pl15 ">登录</span></a> | <a rel="nofollow" target="_blank" href="<?php echo U('Register/index');?>"><span class=" pr15">注册</span></a></li>

              <?php  }else{ ?>

             <li class="loginNew" id="loginMess"><span class="gray">Hi,</span><a title="" target="_blank" href="" rel="nofollow"><span class="pl5 pr5"><?php echo ($_SESSION['users']['username']); ?></span></a> <a id="logout"  href="<?php echo U('Login/logout');?>" rel="nofollow"><span class="pl5 pr15">[退出]</span></a></li>

            <?php  } ?>  


            <li class="order"><a rel="nofollow"  href="<?php echo U('Account/order');?>"><span class="pl15 pr15">我的订单</span></a></li>
            <li class="hd_list show_hide_block" object="#help" type="slide" speed="fast" buffer="300">

                <a href="/helpself.html" target="_blank"><span class="pl15 pr25">帮助中心</span></a>
                <dl id="help">
                    <dt><a href="/helpself.html" target="_blank">帮助中心</a></dt>
                    <dd><a href="/help/wlps/cjdsps.html" target="_blank">配送安装</a></dd>
                    <dd><a href="/help/bxzc/cjds.html" target="_blank">售后服务</a></dd>
                    <dd><a href="/help/pswt/yfbz.html" target="_blank">运费标准</a></dd>
                    <dd><a href="/onlineservice.html" target="_blank">联系客服</a></dd>
                </dl>
            </li>
            <li class="hd_list show_hide_block" object="#dao" type="slide" speed="fast" buffer="300">

                <a href="javascript:void(0)"><span class="pl15 pr25">生态导航</span></a>
                <dl id="dao">
                    <dt>生态导航</dt>
                    <dd><a href="http://www.letv.com" target="_blank">乐视网</a></dd>
                    <dd><a href="http://www.wangjiu.com" target="_blank">网酒网</a></dd>
                    <dd><a href="http://www.lelife.com" target="_blank">乐生活</a></dd>
                    <!--<dd><a href="/zt/cp2c.html" target="_blank">CP2C</a></dd>-->
                </dl>
            </li>
        </ul>
    </div>
</div>
  <div class="center">
      <a class="block logo left " href="<?php echo U('index/index');?>"></a>

      <div class="clear"></div>
  </div>
  <div class="cart_top_border"></div>
</div>  
<script type="text/javascript">
    var timeOutList = {};
    $(document).ready(function () {
        $.each($(".show_hide_block"), function () {
            showHideBlock(this, $(this).attr("object"), $(this).attr("type"), $(this).attr("buffer"), $(this).attr("speed"), $(this).attr("effect"))
        });
        $.each($(".show_children"), function () {
            showChildren(this, $(this).attr("buffer"), $(this).attr("speed"))
        });
        $.each($('[status="toggle"]'), function () {
            $($(this).attr("object")).hide()
        })
    });
    function showHideBlock(a, b, g, d, f, c, h) {
        var e = null;
        "undefined" == typeof c && (c = "");
        e = "slide" == g ? ["slideDown", "slideUp"] : "fade" == g ? ["fadeIn", "fadeOut"] : ["show", "hide"];
        $(a).unbind("mouseenter").mouseenter(function () {
            clearTimeout(timeOutList[b]);
            $(a).addClass(c);
            $(a).siblings().removeClass(c);
            $(b)[e[0]](f, function () {
                $(this).css("overflow", "visible")
            })
        });
        $(b).unbind("mouseenter").mouseenter(function () {
            $(a).addClass(c);
            clearTimeout(timeOutList[b]);
        });
        $(b).unbind("mouseleave").mouseleave(function () {
            timeOutList[b] = setTimeout(function () {
                $(b)[e[1]](f, function () {
                    $(a).removeClass(c)
                });
                !!h ? h() : null;
            }, d || 1E3)
        });
        $(a).unbind("mouseleave").mouseleave(function () {
            timeOutList[b] = setTimeout(function () {
                $(b)[e[1]](f, function () {
                    $(a).removeClass(c)
                });
                !!h ? h() : null;
            }, d || 1E3)
        })
    }
    function showChildren(a, b) {
        $(a).mouseenter(function () {
            clearTimeout(timeOutList[$(this).text()]);
            $("ul", $(this)).show();
            $(this).siblings().find("ul").hide()
        });
        $(a).unbind("mouseleave").mouseleave(function () {
            var a = $(this).text(), d = this;
            clearTimeout(timeOutList[a]);
            timeOutList[a] = setTimeout(function () {
                $("ul", d).hide()
            }, b || 1E3)
        })
    }
    $(function () {
        try {
            $("img.lz").lazyload({data_attribute: "url", skip_invisible: !1, threshold: 10});
        } catch (e) {
        }
        ;
        refreshHeader()
    });
    function refreshHeader() {
        if (Js.login.getAuth()) {
            var a = getCookie("COOKIE_NICKNAME"), a = 10 < a.length ? a.substring(0, 10) + "..." : a;
            $("#loginMess").html('<a rel="nofollow" href="' + _hrefPath + '/user/center/orderList.html" target="_blank" title="' + getCookie("COOKIE_NICKNAME") + '"><span class="pl15 pr15">' + a + '</span></a> <a rel="nofollow" id="logout"><span class="pl15 pr15">[退出]</span></a>');
            $("#logout").click(function () {
                Js.login.logout(function () {
                    window.location.href = "/"
                })
            })
        } else $("#login").click(function () {
            Js.login.hasLogin(function () {
                location.reload()
            })
        })
    }
    ;
</script>


<body>

<div class="main_body center pay-status pb20 pt10">
<!-- 订单信息展示模块 begin-->
<div id="orderInfoBlock"><div class="d_submit pt15 pb15">

 
    <div class="sub_h1 font18">恭喜您，订单已成功提交！</div>
  
  <div class="sub_h2 font14">(请您在24小时内尽快支付，以免逾期订单被自动取消)</div>
  
  
 
  
  
  <div class="sub_h3 font14 dark">
      订单：<?php echo ($data); ?><a webtrekkparam="{ct:'shop_generateorders_success_ckddxq'}" style="_color:#3f73ae;" target="_blank" href="<?php echo U('Home/Account/order');?>" class="pl5 underline"><span class="blue">[查看订单详情]</span></a>
       
    <span class="pl15 pr15">丨</span> 应付金额： <span class="red"><?php echo ($total); ?>.00元</span>
    
    <span class="pl15 pr15">丨</span>发票： 普通发票 / 个人
    
    </div>
  
    <div class="sub_h4 font14 dark">配送： <?php echo ($address["name"]); ?>/ <?php echo ($address["mobile_phone"]); ?> /<?php $arr = explode(',',$address['addressid']); echo (getaddress($arr[0])); echo (getaddress($arr[1])); echo (getaddress($arr[2])); ?>，<?php echo ($address["address"]); ?></div> 
<!-- 
    <div class="sub_h4 font14 dark">配送： 张三 /  138****1111 / 湖北，武汉市，武昌区，光谷广场</div>  -->
   
</div></div>

 

  

 


 

  
<!-- 支付方式选择模板  begin --> 
  

<div id="allBankInfo"><div class="pt20 unbound t_l">
  <div id="selectPayMethod" class="title"><span class="font16 dark">请选择支付方式</span></div>
     <div id="payTypeSelect" class="mt10">
  
   <div class="line_tsub light_bg">
    <div class="right pt25 pb25 rbox">
     <ul>

  
  <li class="pay-mode">
       <a class="cur" title="支付宝" id="ON-LEZF-ALIPAY-BALANCE-ALP" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/alp.jpg"></span>
        <span class="left pt10"><input type="radio" checked="checked" class="selectRadio" value="PLATFORM|ON-LEZF-ALIPAY-BALANCE-ALP|支付宝" paytype="PLATFORM" name="radio" id="ON-LEZF-ALIPAY-BALANCE-ALP"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="财付通" id="ON-LEZF-TENPAY-BALANCE-DEFAULT" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/tp.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="PLATFORM|ON-LEZF-TENPAY-BALANCE-DEFAULT|财付通" paytype="PLATFORM" name="radio" id="ON-LEZF-TENPAY-BALANCE-DEFAULT"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="拉卡拉支付" id="ON-LEZF-LAKALA-BALANCE" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/lakala.png"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="PLATFORM|ON-LEZF-LAKALA-BALANCE|拉卡拉支付" paytype="PLATFORM" name="radio" id="ON-LEZF-LAKALA-BALANCE"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
    <div class="arrow"></div>
    
        <div class="product_tab block_center w355">
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">
      <tbody><tr>
        <th align="center" width="30%">单笔限额（元）</th>
        <th align="center" width="30%">每日限额（元）</th>
        <th align="center" width="40%">备注</th>
      </tr> 
      
      
       <tr>
        <td align="center">单笔2万元</td>
        <td align="center">单月5万元</td>
        <td align="center">信用卡</td>
      </tr>       
      
       <tr>
        <td align="center">无</td>
        <td align="center">无</td>
        <!-- <td align="center">储蓄卡</td> -->
      </tr>       
             
    </tbody></table>
    
        
        </div>
       </div>
       </a>
      </li>


      <div class="clear"></div>
     </ul>
    </div>
    <div class="pl20 pt30 pb30 left lbox"><span class="font16 dark">支付平台</span><br>
  
    大额支付，建议选择支付宝
    
  </div>
    <div class="clear"></div>
   </div>

   <div class="line_tsub light_bg">
    <div class="right pt25 pb25 rbox">
     <ul>

  
  <li class="pay-mode">
       <a class="" title="工商银行" id="ON-LEZF-YEEPAY-FAST-ICBC" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/icbc.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-ICBC|工商银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-ICBC"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="建设银行" id="ON-LEZF-YEEPAY-FAST-CCB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/ccb.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-CCB|建设银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-CCB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="招商银行" id="ON-LEZF-YEEPAY-FAST-CMB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/zhaohang.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-CMB|招商银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-CMB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="浦发银行" id="ON-LEZF-YEEPAY-FAST-SPDB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/spdb.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-SPDB|浦发银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-SPDB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="民生银行" id="ON-LEZF-YEEPAY-FAST-CMBC" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/cmbc.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-CMBC|民生银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-CMBC"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="深圳发展银行" id="ON-LEZF-YEEPAY-FAST-SDB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/shenfa.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-SDB|深圳发展银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-SDB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="中信银行" id="ON-LEZF-YEEPAY-FAST-CITIC" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/zhongxin.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-CITIC|中信银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-CITIC"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="光大银行" id="ON-LEZF-YEEPAY-FAST-CEB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/ceb.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-CEB|光大银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-CEB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="邮政储蓄" id="ON-LEZF-YEEPAY-FAST-PSBC" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/youzheng.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-PSBC|邮政储蓄" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-PSBC"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="上海银行" id="ON-LEZF-YEEPAY-FAST-SHBANK" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/shbank.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-SHBANK|上海银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-SHBANK"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="兴业银行" id="ON-LEZF-YEEPAY-FAST-CIB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/xingye.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-CIB|兴业银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-CIB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="华夏银行" id="ON-LEZF-YEEPAY-FAST-HXBANK" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/huaxia.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-HXBANK|华夏银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-HXBANK"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="中国银行" id="ON-LEZF-YEEPAY-FAST-BOC" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/boc.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-BOC|中国银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-BOC"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="广发银行" id="ON-LEZF-YEEPAY-FAST-GDB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/guangfa.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-GDB|广发银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-GDB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="平安银行" id="ON-LEZF-YEEPAY-FAST-SPABANK" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/spabank.jpg"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-SPABANK|平安银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-SPABANK"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>

  
  <li class="pay-mode">
       <a class="" title="北京银行" id="ON-LEZF-YEEPAY-FAST-BCCB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/beijing.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="FASTPLATFORM|ON-LEZF-YEEPAY-FAST-BCCB|北京银行" paytype="FASTPLATFORM" name="radio" id="ON-LEZF-YEEPAY-FAST-BCCB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
        
    
        <div class="product_tab block_center w355">
    
        
        </div>
       </div>
       </a>
      </li>


      <div class="clear"></div>
     </ul>
    </div>
    <div class="pl20 pt30 pb30 left lbox"><span class="font16 dark">信用卡快捷支付</span><br>
  
      无需开通网银的信用卡快捷支付，支持多种信用卡。<br><a webtrekkparam="{ct:'shop_generateorders_payment_xykkjzf_ckyhjxe'}" target="_blank" href="/help/zxzf.html"><span class="skyblue">查看银行及限额</span></a>
      
  </div>
    <div class="clear"></div>
   </div>
    
<div class="line_tsub light_bg">
    <div class="right pt20 pb20 rbox">
     <div class="pl10">
   <div class="coupon_tit"><a class="cur" id="CREDITBankInfo">信用卡</a></div>
   <div class="coupon_box">

<div id="CREDIT">
<div class="bank_list">
     <ul>

    
      <li class="pay-mode">
       <a title="中国工商银行" id="ON-LEZF-ALIPAY-CREDIT-ICBC301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/gongshang.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-ICBC301|中国工商银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-ICBC301"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">300</td>
        <td align="center">300</td>
        <td align="center">柜面注册存量静态密码用户</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">500</td>
        <td align="center">1000</td>
        <td align="center">办理电子银行口令卡(无需开通短信认证) </td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">2000</td>
        <td align="center">5000</td>
        <td align="center">办理电子银行口令卡，开通短信认证</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">信用卡本身透支额度</td>
        <td align="center">信用卡本身透支额度</td>
        <td align="center">办理U盾</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

    
      <li class="pay-mode">
       <a title="招商银行" id="ON-LEZF-ALIPAY-CREDIT-CMB301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/zhaohang.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-CMB301|招商银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-CMB301"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">信用卡本身透支额度</td>
        <td align="center">信用卡本身透支额度 </td>
        <td align="center">开通网上支付功能</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

    
      <li class="pay-mode">
       <a title="中国银行" id="ON-LEZF-ALIPAY-CREDIT-BOC301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/zhongguo.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-BOC301|中国银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-BOC301"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">开通网上支付功能</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

    
      <li class="pay-mode">
       <a title="广东发展银行" id="ON-LEZF-ALIPAY-CREDIT-GDB301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/guangfa.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-GDB301|广东发展银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-GDB301"></span>
        <div class="clear"></div>
       <div style="left:-250px;" class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div style="left:260px;" class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">1万</td>
        <td align="center">1万</td>
        <td align="center">手机动态验证码</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">KEY盾</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

    
      <li class="pay-mode">
       <a title="兴业银行" id="ON-LEZF-ALIPAY-CREDIT-CIB301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/xingye.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-CIB301|兴业银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-CIB301"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">1万</td>
        <td align="center">开通网上支付功能</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

    
      <li class="pay-mode">
       <a title="信用卡交通银行" id="ON-LEZF-YEEPAY-COMM-CREDIT" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/jiaotong.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-YEEPAY-COMM-CREDIT|信用卡交通银行" name="radio" paytype="CREDIT" id="ON-LEZF-YEEPAY-COMM-CREDIT"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5万与本身信用卡孰低</td>
        <td align="center">5万与本身信用卡孰低</td>
        <td align="center">手机短信密码验证</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">5万与本身信用卡孰低</td>
        <td align="center">5万与本身信用卡孰低</td>
        <td align="center">USBKey证书认证</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

    
      <li class="pay-mode">
       <a title="中国光大银行" id="ON-LEZF-ALIPAY-CREDIT-CEB301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/guangda.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-CEB301|中国光大银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-CEB301"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">办理手机动态密码</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">办理阳光网盾</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

    
      <li class="pay-mode">
       <a title="平安银行" id="ON-LEZF-ALIPAY-CREDIT-SPABANK301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/object/Public/cart/images/bankimg/pingan.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-SPABANK301|平安银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-SPABANK301"></span>
        <div class="clear"></div>
       <div style="left:-250px;" class="up_box pl5 pr5 pb5 pt10">
       
    
    
     <div style="left:260px;" class="arrow"></div>
    
        <div class="product_tab block_center w405">
    
    
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">2万</td>
        <td align="center">2万</td>
        <td align="center">开通网上支付功能</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
    
        </div>
       </div>
       </a>
      </li>
     

  <div class="CREDITMore hidden">
   <li class="pay-mode">
       <a title="上海浦东发展银行" id="ON-LEZF-ALIPAY-CREDIT-SPDB301" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/shangpufa.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="CREDIT|ON-LEZF-ALIPAY-CREDIT-SPDB301|上海浦东发展银行" name="radio" paytype="CREDIT" id="ON-LEZF-ALIPAY-CREDIT-SPDB301"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">1万</td>
        <td align="center">1万</td>
        <td align="center">办理动态密码或数字证书</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>

<div class="clear"></div>
</ul>
    </div>
  
  <div id="CREDITShowAll" class="t_c pt5"><a href="javascript:void(0);" class="more_banks">更多银行</a></div>
  <!--<div class="t_c pt5 hidden" id="CREDITHideAll"><a ><span class="red">收起 ↑</span></a></div>-->
  
</div>
  
<div class="hidden" id="SAVINGS">
<div class="bank_list">
     <ul>

    
      <li class="pay-mode">
       <a title="农业银行" id="ON-LEZF-YEEPAY-HVPS-ABC-NET" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/nongye.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-ABC-NET|农业银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-ABC-NET"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">动态口令卡/短信口令卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">文件证书+动态口令卡/短信口令卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">二代网银盾</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">二代网银盾+动态口令卡/短信口令卡</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>

    
      <li class="pay-mode">
       <a title="招商银行" id="ON-LEZF-YEEPAY-HVPS-CMBCHINA-NET" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/zhaohang.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-CMBCHINA-NET|招商银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-CMBCHINA-NET"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">500</td>
        <td align="center">500</td>
        <td align="center">大众版</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">无限额</td>
        <td align="center">无限额</td>
        <td align="center">专业版USBKey</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>

    
      <li class="pay-mode">
       <a title="交通银行" id="ON-LEZF-YEEPAY-HVPS-COMM-NET" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/jiaotong.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-COMM-NET|交通银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-COMM-NET"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5万</td>
        <td align="center">5万</td>
        <td align="center">手机短信密码验证</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">100万</td>
        <td align="center">100万</td>
        <td align="center">USBKey证书认证</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>

    
      <li class="pay-mode">
       <a title="工商银行" id="ON-LEZF-YEEPAY-HVPS-ICBC-NET" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/gongshang.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-ICBC-NET|工商银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-ICBC-NET"></span>
        <div class="clear"></div>
       <div style="left:-250px;" class="up_box pl5 pr5 pb5 pt10">
    
     <div style="left:260px;" class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">300</td>
        <td align="center">300</td>
        <td align="center">申请口令卡和USBKEY的</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">1000</td>
        <td align="center">1000</td>
        <td align="center">E支付</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">2000</td>
        <td align="center">5000</td>
        <td align="center">手机短信认证网上银行口令卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">500</td>
        <td align="center">1000</td>
        <td align="center">未认证的网上银行口令卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">100万</td>
        <td align="center">电子密码器</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">100万</td>
        <td align="center">一代U盾（无手机验证）</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">100万</td>
        <td align="center">100万</td>
        <td align="center">一代U盾（手机验证）</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">100万</td>
        <td align="center">100万</td>
        <td align="center">二代U盾</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>

    
      <li class="pay-mode">
       <a title="建设银行" id="ON-LEZF-YEEPAY-HVPS-CCB-NET" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/jianshe.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-CCB-NET|建设银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-CCB-NET"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">动态口令卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">短信口令卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">5万</td>
        <td align="center">10万</td>
        <td align="center">一代网银盾</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">二代网银盾</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">1000</td>
        <td align="center">1000</td>
        <td align="center">账号支付</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>

    
      <li class="pay-mode">
       <a title="中信银行" id="ON-LEZF-YEEPAY-HVPS-ECITIC-NET" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/zhongxin.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-ECITIC-NET|中信银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-ECITIC-NET"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
        <div class="product_tab block_center w405">
        
        </div>
       </div>
       </a>
      </li>

    
      <li class="pay-mode">
       <a title="广东发展银行" id="ON-LEZF-ALIPAY-HVPS-GDB-DEBIT" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/guangfa.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-GDB-DEBIT|广东发展银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-GDB-DEBIT"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">1万</td>
        <td align="center">1万</td>
        <td align="center">手机动态验证码</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">KEY盾</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>

    
      <li class="pay-mode">
       <a title="上海浦东发展银行" id="ON-LEZF-ALIPAY-HVPS-SPDB-DEBIT" href="javascript:void(0)">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/shangpufa.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-SPDB-DEBIT|上海浦东发展银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-SPDB-DEBIT"></span>
        <div class="clear"></div>
       <div style="left:-250px;" class="up_box pl5 pr5 pb5 pt10">
    
     <div style="left:260px;" class="arrow"></div>
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">6000</td>
        <td align="center">1万</td>
        <td align="center">办理动态密码（含文件证书）</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">100万</td>
        <td align="center">办理E盾证书</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>

<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="中国银行" id="ON-LEZF-YEEPAY-HVPS-BOC-NET" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/zhongguo.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-BOC-NET|中国银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-BOC-NET"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5万</td>
        <td align="center">10万</td>
        <td align="center">口令卡</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="北京银行" id="ON-LEZF-ALIPAY-HVPS-BJBANK" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/beijing.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-BJBANK|北京银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-BJBANK"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">1000</td>
        <td align="center">5000</td>
        <td align="center">开通动态密码版网上支付功能</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">100万</td>
        <td align="center">100万</td>
        <td align="center">开通证书版网上支付功能</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="上海农商银行" id="ON-LEZF-ALIPAY-HVPS-SHRCB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/shangnongshang.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-SHRCB|上海农商银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-SHRCB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">100万</td>
        <td align="center">500万</td>
        <td align="center">个人网银</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="兴业银行" id="ON-LEZF-ALIPAY-HVPS-CIB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/xingye.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-CIB|兴业银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-CIB"></span>
        <div class="clear"></div>
       <div style="left:-250px;" class="up_box pl5 pr5 pb5 pt10">
    
     <div style="left:260px;" class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">仅支持开通短信口令的用户（且只针对在网上开通的）或者开通动态令牌的保护的银行卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">100万</td>
        <td align="center">100万</td>
        <td align="center">开通证书保护，或通过柜面开通短信口令保护的用户</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">5000</td>
        <td align="center">1万</td>
        <td align="center">开通网上支付功能</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">2000</td>
        <td align="center">账期内：2000</td>
        <td align="center">开通网上支付功能</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="中国民生银行" id="ON-LEZF-ALIPAY-HVPS-CMBC" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/minsheng.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-CMBC|中国民生银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-CMBC"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">办理短信验证码或者浏览器证书</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">办理otp或者u宝</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="平安银行" id="ON-LEZF-ALIPAY-HVPS-SPABANK" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/pingan.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-SPABANK|平安银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-SPABANK"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">2万</td>
        <td align="center">2万</td>
        <td align="center">开通网上支付功能</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="北京农村商业银行" id="ON-LEZF-ALIPAY-HVPS-BJRCB" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/nongcunshangye.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-ALIPAY-HVPS-BJRCB|北京农村商业银行" name="radio" paytype="SAVINGS" id="ON-LEZF-ALIPAY-HVPS-BJRCB"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">10万</td>
        <td align="center">50万</td>
        <td align="center">办理手机认证</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">20万</td>
        <td align="center">100万</td>
        <td align="center">办理证书客户</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="光大银行" id="ON-LEZF-YEEPAY-HVPS-CEB-NET" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/guangda.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-CEB-NET|光大银行" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-CEB-NET"></span>
        <div class="clear"></div>
       <div style="left:-250px;" class="up_box pl5 pr5 pb5 pt10">
    
     <div style="left:260px;" class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">银行卡直接支付（手机动态密码）</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">银行卡直接支付（令牌动态密码）</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">5000</td>
        <td align="center">5000</td>
        <td align="center">网银专业版支付（手机动态密码）</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">网银专业版支付（令牌动态密码）</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">50万</td>
        <td align="center">50万</td>
        <td align="center">网银专业版支付（阳光网盾）</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="SAVINGSMore hidden">
<li class="pay-mode">
       <a title="中国邮政" id="ON-LEZF-YEEPAY-HVPS-POST-NET" href="javascript:void(0);">
        <span class="right pr15"><img width="120" height="35" src="/htmlResource/images/bankimg/youzheng.gif"></span>
        <span class="left pt10"><input type="radio" class="selectRadio" value="SAVINGS|ON-LEZF-YEEPAY-HVPS-POST-NET|中国邮政" name="radio" paytype="SAVINGS" id="ON-LEZF-YEEPAY-HVPS-POST-NET"></span>
        <div class="clear"></div>
       <div class="up_box pl5 pr5 pb5 pt10">
    
     <div class="arrow"></div>
    
    
        <div class="product_tab block_center w405">
        
    <table width="100%" cellspacing="1" cellpadding="0" border="0">   
      <tbody><tr>
        <th align="center" width="24%">单笔限额（元）</th>
        <th align="center" width="24%">每日限额（元）</th>
        <th align="center" width="18%">满足条件</th>
        <th align="center" width="34%">备注</th>
      </tr>
    
      
       <tr>
        <td align="center">1万</td>
        <td align="center">1万</td>
        <td align="center">手机动码</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">10万</td>
        <td align="center">10万</td>
        <td align="center">动态口令卡</td>
        <td align="center">无</td>
        </tr>     
      
       <tr>
        <td align="center">100万</td>
        <td align="center">100万</td>
        <td align="center">UKEY+手机动码</td>
        <td align="center">无</td>
        </tr>     
             
    </tbody></table>
    
        </div>
       </div>
       </a>
      </li>
    </div>


<div class="clear"></div>
</ul>
    </div>

  <div id="SAVINGSShowAll" class="t_c pt5"><a href="javascript:void(0);" class="more_banks">更多银行</a></div>

  <!--<div class="t_c pt5 hidden" id="SAVINGSHideAll"><a ><span class="red">收起 ↑</span></a></div>-->
  
</div>
  
  
    
   </div>
  </div>
    </div>
    <div class="pl20 pt50 pb50 left lbox"><div class="pt20 pb20"><span class="font16 dark">网上银行</span><br>需登录网上银行，支持多种银行储蓄卡及信用卡。<br><a webtrekkparam="{ct:'shop_generateorders_payment_wsyh_ckyhjxe'}" target="_blank" href="/help/zxzf.html"><span class="skyblue">查看银行及限额</span></a></div></div>
    <div class="clear"></div>
   </div></div>

  <div class="pt20">
   <div class="write_jumpWrap">
  <a data-index="1" id="goPay"  class="red_bt_l right mt15 mr20 white font16" webtrekkparam="{ct:'shop_generateorders_payment'}" href="<?php echo U('Orderinfo/pays');?>">去支付</a>
</div>
   <div class="clear"></div>
  </div>
 </div></div>
  
  
 
  

 
 
<script type='text/javascript'>
  //全局统计变量
var globalTongJi={
  wk_contentId:"process.pay"
}
</script>
  
  
  
  
  
  
<!--右侧飘窗-->
<div class="sidebar_float">
  <!-- 百度分享 -->
  <div class="is_share ie6-hover border hand handle  hidden " object="#bd_share">
    <div class="share_show" id="bd_share">
      <div class="share_bg absolute bdsharebuttonbox">
        <a title="分享到QQ空间" href="javascript:void(0);" class="bds_qzone" data-cmd="qzone"></a>
        <a title="分享到新浪微博" href="javascript:void(0);" class="bds_tsina" data-cmd="tsina"></a>
        <a title="分享到微信" href="javascript:void(0);" class="bds_weixin" data-cmd="weixin"></a>
        <a title="分享到腾讯微博" href="javascript:void(0);" class="bds_tqq" data-cmd="tqq"></a>
        <a title="分享到搜狐微博" href="javascript:void(0);" class="bds_tsohu" data-cmd="tsohu"></a>
        <a title="分享到人人网" href="javascript:void(0);" class="bds_renren" data-cmd="renren"></a>
        <a title="分享到豆瓣网" href="javascript:void(0);" class="bds_douban" data-cmd="douban"></a>
      </div>
    </div>
  </div>
  <!-- 有奖调查 -->
    <a href="http://www.sojump.com/jq/3881495.aspx" target="_blank">
  <div class="is_survey ie6-hover border hand handle  show1 " id="diaocha_div" object="#dc_div">
    <!--<div class="top_show" id="dc_div">
      <div class="arrow absolute"></div>
      <div class="red_bg absolute">有奖调查</div>
    </div>-->
  </div>
  </a>
  <!-- 销量天王 -->
    <a href="http://bbs.letv.com/thread-458916-1.html" target="_blank">
    <div class="is_king ie6-hover border hand handle  show2 " id="king_div" object="#tw_div">
    <!--<div class="top_show" id="tw_div">
      <div class="arrow absolute"></div>
      <div class="red_bg absolute">销量天王</div>
    </div>-->
  </div>
  </a>
  <!-- 下载APP -->
    <div class="is_app ie6-hover border hand handle  show3 " id="app_div" object="#xz_div">
    <div class="app_show" id="xz_div">
      <div class="app_bg border absolute">
              <p class="pt5 pb5">手机下单更快捷</p>
              <p><a href="http://shop.letv.com/app/download.html?cps_id=yd_pc_yg_rk_pcfb_0_h" target="_blank"><img  alt=""  src="Picture/5efaf3fb8227446eadd7f3ba8b8fba6c.gif" style=""/></a></p>
      </div>
    </div>
  </div>
</div>

<!--返回顶部-->
<div class="top_float ">
  <div class="is_top ie6-hover border hand handle" id="backTop" object="#bt_div">
    <!--<div class="top_show" id="bt_div">
      <div class="arrow absolute"></div>
      <div class="red_bg absolute">返回顶部</div>
    </div>-->
  </div>
</div>

<div class="footer">
  <div class="white_bg pt40 pb30">
    <div class="center clearfix">
      <ul class="icon_list line_b clear">
        <li class="zheng"><span class="font18 dark">正品保障</span><br />所有产品都是原装正品</li>
        <li class="threeday"><a webtrekkparam="{ct:'xbsy_fwpt_3RNSD'}" href="/xinwen/zixunDetail-aid-78.html" target="_blank"><span class="font18 dark">3日内送达</span><br /><span class="gray">24大核心城市</span></a></li>
        <li class="returns"><a webtrekkparam="{ct:'xbsy_fwpt_7RWLY'}" href="/help/bxzc/cjds.html"  target="_blank"><span class="font18 dark">7天无理由退换货</span><br /><span class="gray">支持7天退货，30天换货</span></a></li>
        <li class="delivery"><a webtrekkparam="{ct:'xbsy_fwpt_616CSSD'}" href="/help/wlps/cjdsps.html" target="_blank"><span class="font18 dark">616城市送达</span><br /><span class="gray">覆盖全国29个省</span></a></li>
        <li class="policy"><a webtrekkparam="{ct:'xbsy_fwpt_3BZC'}" href="/help/fwzc/gjsb.html" target="_blank"><span class="font18 dark">3包政策</span><br /><span class="gray">享受国家质量保障政策</span></a></li>
      </ul>
      <div class="help_list  left pt50">
        <dl>
          <dt>新手入门</dt>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_xsrm_zcydl'}" href="/help/xsrm/zczh.html"><span class="simsun">> </span>注册与登录</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_xsrm_zhaq'}" href="/help/zczh/dlzh.html" ><span class="simsun">> </span>账户安全</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_xsrm_zhmm'}" href="/help/xsrm/zhmm.html" ><span class="simsun">> </span>如何找回密码</a></dd>
          <!--<dd><a target="_blank" webtrekkparam="{ct:'YW_xsrm_tab4'}" href="/help/gwlc.html" ><span class="simsun">> </span>购物指南</a></dd>-->
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_xsrm_lmFAQ'}" href="/help/lema_faq.html" ><span class="simsun">> </span>乐码FAQ</a></dd>
        </dl>
        <dl>
          <dt>订单服务</dt>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_ddfw_wszf'}" href="/help/zxzf.html"><span class="simsun">> </span>网上支付</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_ddfw_tksm'}" href="/help/ddfw/tksm.html" ><span class="simsun">> </span>退款说明</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_ddfw_fpzd'}" href="/help/fpzd.html" ><span class="simsun">> </span>发票制度</a></dd>
          
        </dl>
        <dl>
          <dt>物流服务</dt>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_psyaz_psaz'}" href="/help/wlps/cjdsps.html" ><span class="simsun">> </span>配送范围查询</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_psyaz_pscx'}" href="/help/wlps/ddps.html"><span class="simsun">> </span>配送费收取标准</a></dd>
                    <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_psyaz_yhqs'}" href="/help/yhqs.html" ><span class="simsun">> </span>自提与签收注意事项</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_psyaz_cjwt'}" href="/help/pswt/cjds.html"><span class="simsun">> </span>配送常见问题</a></dd>
          <!--<dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_psyaz_yyaz'}" href="/user/center/fixAndMaintain.html"><span class="simsun">> </span>预约安装</a></dd>-->
         
        </dl>
        <dl>
          <dt>售后服务</dt>
          <!--<dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_fwyzc_gwts'}" href="/help/gwts.html" ><span class="simsun">> </span>购物提示</a></dd>-->
                    <dd><a href="/help/fwzc/gyaz.html" webtrekkparam="{ct:'Help_fwzc_tab1'}" target="_blank"><span class="simsun">> </span>关于安装</a></dd>
          <!--<dd><a href="/help/fwzc/gjsb.html" webtrekkparam="{ct:'Help_fwzc_tab2'}" target="_blank"><span class="simsun">> </span>国家三包政策</a></dd>-->
  <dd><a href="/help/bxzc/cjds.html" webtrekkparam="{ct:'Help_fwzc_tab3'}" target="_blank"><span class="simsun">> </span>售后服务政策</a></dd>
  <!--<dd><a href="/help/bxzc/lshz.html" webtrekkparam="{ct:'Help_fwzc_tab4'}" target="_blank"><span class="simsun">> </span>配件、盒子三包政策</a></dd>-->
  <!--<dd><a href="/help/thhzc/cjds.html" webtrekkparam="{ct:'Help_fwzc_tab5'}" target="_blank"><span class="simsun">> </span>超级电视售后说明</a></dd>-->
  <!--<dd><a href="/help/thhzc/lshz.html" webtrekkparam="{ct:'Help_fwzc_tab6'}" target="_blank"><span class="simsun">> </span>配件、盒子售后说明</a></dd>-->
  <dd><a href="/help/fwwd.html" webtrekkparam="{ct:'Help_fwzc_tab7'}" target="_blank"><span class="simsun">> </span>线下服务中心</a></dd>
  <dd><a href="/help/fwzc/fwgs.html" webtrekkparam="{ct:'Help_fwzc_tab8'}" target="_blank"><span class="simsun">> </span>售后服务公示</a></dd>
  <dd><a href="/help/xxtyt.html" webtrekkparam="{ct:'Help_fwzc_tab9'}" target="_blank"><span class="simsun">> </span>线下体验厅</a></dd>
  <dd><a href="/help/xufei.html" webtrekkparam="{ct:'Help_fwzc_tab10'}" target="_blank"><span class="simsun">> </span>TV版服务续费教程</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_fwyzc_hyj'}" href="/ott/yys.html" ><span class="simsun">> </span>电视合约机</a></dd>
        </dl>
        <dl>
          <dt>走进乐视TV</dt>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_gsjs'}"  href="/gywm-zjid-zj01.html"><span class="simsun">> </span>公司介绍</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_ppsp'}"  href="/zt/ppTv.html" ><span class="simsun">> </span>品牌视频</a></dd> 
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_share'}"  href="/cps/index.html" ><span class="simsun">> </span>分享邀请</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_shhyx'}"  href="/gywm-zjid-zj05.html"><span class="simsun">> </span>社会化营销</a></dd>
          <dd><a target="_blank" webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_lxwm'}"  href="/gywm-zjid-zj06.html"><span class="simsun">> </span>联系我们</a></dd>
          <dd><a webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_gzwm'}"  href="javascript:void(0)" onclick="javascript:pop('#guanzhuPOP')"><span class="simsun">> </span>关注我们</a></dd>
        </dl>
      </div>
      <div class="service_online pt50 right">
        <dl>
          <dt>在线服务</dt>
          <dd class="phone400"><span class="font16 dark">1010-9000</span><br />7*24小时客服电话<br />（仅收市话费）</dd>
          <dd class="kf_online"><a webtrekkparam="{ct:'xbsy_fwpt_ZXFW'}" href="/onlineservice.html" target="_blank"><span class="font16 dark">在线客服</span><br /><span class="gray">服务时段 8:00-20:00</span></a></dd>
          <dd class="UE_center"><a webtrekkparam="{ct:'xbsy_fwpt_YHTYZX'}" href="/help/tiyan/index.html" target="_blank"><span class="font16 dark">用户体验中心</span><br /><span class="gray">从用户的角度完善购物体验</span></a></dd>
          <dd class="returns_oline"><a webtrekkparam="{ct:'xbsy_fwpt_ZXTHH'}" href="/user/center/refundOrderList.html" target="_blank"><span class="font16 dark">在线退换货</span></a></dd>
        </dl>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="copyright">
    <div class="center">Copyright © 2004-2014 乐视网 All rights reserved. 备案/许可证编号为：京ICP备09045969 不良信息举报中心 网络文化经营许可证文网文[2009]221号</div>
  </div>

</div>
<!--关注我们 弹框-->
<div id="guanzhuPOP" class="hidden" style="width:640px">
  <div class="f8_bg title pl10 line_b relative">
    <span class="font14 dark">关注我们</span>
    <a href="javascript:void(0)" class="absolute" id="wjPop-close">×</a>
  </div>
  <div class="pl30 pr30 pt20 white_bg careus border">
    <div class="pl90 pb30 pt15 line_b sina">
      <span class="font16 dark mr15">乐视TV 官方微博</span>
      <a href="#" class="inline_block"><img src="Picture/78da4b16c0914e47b8bbc69d64ab5e17.gif" alt="" /></a>
    </div>
    <div class="pl90 pb30 pt15 weixin">
      <div class="clearfix">
        <div class="left pr40 line_r">
          <span class="font16 dark">乐视TV 官方微信</span><br />
          <img src="Picture/6d8161fb07d14e9daaff78aabf0165a7.gif" alt="" />
        </div>
        <div class="left pl40">
          <span class="font16 dark">乐视商城 官方微信</span><br />
          <img src="Picture/29e9bc2d1a58493696e1c41dda755e2a.gif" alt="" />
        </div>
      </div>
      <div class="mt15 gray font12">打开微信，点击右上角的“魔法棒”，选择“扫一扫”功能，对准下方二维码即可。</div>
    </div>
  </div>
</div>

    
  
  
 <script type="text/javascript">
/**
 *pc转到m站的跳转
 */
if((typeof(globalVar) != "undefined") && globalVar.m_url!=""){
var browser={versions:function(){var a=navigator.userAgent;return{mobile:!!a.match(/AppleWebKit.*Mobile.*/),ios:!!a.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),android:-1<a.indexOf("Android"),iPhone:-1<a.indexOf("iPhone"),iPad:-1<a.indexOf("iPad"),webApp:-1==a.indexOf("Safari")}}()};if(document.cookie.indexOf("COOKIE_USER_ID_FORWARD_WAP")==-1&&!browser.versions.iPad&&(browser.versions.iPhone||browser.versions.mobile||browser.versions.android)){window.location.href=globalVar.m_url+location.search};
}
  
//右侧飘窗显示隐藏方法
$.fn.extend({showOrHide:function(){var _this=this;this.each(function(index,elem){var $handle=$(elem);var name=$handle.attr("object");var $content=$(name);var timer=null;$handle.mouseover(function(){show();}).mouseout(function(){hide();});$content.mouseover(function(){show();}).mouseout(function(){hide2();});function show(){clearTimeout(timer);$content.show();}
function hide(){var interval=300;timer=setTimeout(function()<?php echo ($content["hide();"]); ?>,interval);}
function hide2()<?php echo ($content["hide();"]); ?>});}});

/**
 *百度分享
 */  
  window._bd_share_config={
  "common": {
    "bdSnsKey": { 
    },
    "bdText" : "",  
    "bdDesc" : "",  
    "bdUrl" : "",   
    "bdPic" : "",
    "bdMini": "2",
    "bdMiniList": false,
    "bdStyle": "0",
    "bdSize": "32"  
  },
  "share": {  
  }
};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

var is_hidden="1";//返回顶部
var is_share_show="0";//是否分享

$(function(){
    //右侧飘窗显示隐藏
  $(".handle").showOrHide();
    //返回顶部
  if(is_hidden=="1"){
    initBackTop();
  }
    
  $(".ie6-hover").mouseover(function () {
    $(this).addClass("hover");
  });
  
  $(".ie6-hover").mouseout(function () {
    $(this).removeClass("hover");
  });
});

//初始化返回顶部按钮事件
function initBackTop(){
  window.onscroll=function(){
    if(document.body.scrollTop==0?document.documentElement.scrollTop:document.body.scrollTop > 50){
      $("#backTop").show();
    }else{
      $("#backTop").hide();
    }
  }

  $("#backTop").unbind("click").bind("click",function(){
      pageScroll();
  });
}
//鼠标滚动事件  
function pageScroll(){
    window.scrollBy(0,-50);
    scrolldelay = setTimeout('pageScroll()',1);
    var sTop=document.documentElement.scrollTop+document.body.scrollTop;
    if(sTop==0){
    clearTimeout(scrolldelay);
  }
}
</script>
            <script type='text/javascript' src='/object/Public/cart/Scripts/jquery.lazyload.js'></script>

            <script type='text/javascript' src='/object/Public/cart/Scripts/zxvideo.js'></script>

<script type="text/javascript" src="/object/Public/cart/Scripts/mediav_order.js"></script>
</body>
</html>