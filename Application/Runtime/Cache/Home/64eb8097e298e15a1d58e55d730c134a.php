<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <!-- js引用文件添加 -->
  <!-- 页面底部统一引用jsInclude -->
  <!-- 引用静态页面标签 -->
   
  <script>var _hrefPath = '',_imagePath = '',_basePath = '';</script>
  <!--[if lt IE 7]>
  <script type="text/javascript" src="/object/Public/js/Scripts/unitpngfix.js"></script>
  <![endif]-->

    <link  type='text/css' href='/object/Public/css/Content/global.css' rel='stylesheet' />

    <script type='text/javascript' src='/object/Public/js/Scripts/generatesession.js'></script>
    
    <script type='text/javascript' src='/object/Public/js/Scripts/zxlib.js'></script>

    <script type='text/javascript' src='/object/Public/js/Scripts/template.js'></script>

  <link  type='text/css' href='/object/Public/css/Content/global.css' rel='stylesheet' />
                <link  type='text/css' href='/object/Public/css/Content/help.css' rel='stylesheet' />
            <link  type='text/css' href='/object/Public/css/Content/index.css' rel='stylesheet' />
            <script type='text/javascript' src='/object/Public/js/Scripts/generatesession.js'></script>
            <script type='text/javascript' src='/object/Public/js/Scripts/zxlib.js'></script>
            <script type='text/javascript' src='/object/Public/js/Scripts/template.js'></script>
  <link rel="icon" href="/object/Public/images/favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon"  href="/object/Public/images//favicon.ico" type="image/x-icon"/>

  <title><?php echo C('webTitle');?></title>
  <meta content="<?php echo C('keywords');?>" name="keywords">
  <meta content="<?php echo C('description');?>" name="description"></head>
<body>
  <div class="header"  style="text-align:center;background:#FFFFFF">
    <div class="top_link f8_bg">
      <div class="center">
          <ul class="left quick_links">
            <li>
              <a href="<?php echo U('Home/Appstore/index');?>"  target="_blank" webtrekkparam="{ct:'xbsy_dh1_Store'}" >
                <span class="pl15 pr15">LetvStore</span>
              </a>
              |
            </li>
            <li class="hd_list show_hide_block abroad" object="#abroad" type="slide" speed="fast" buffer="300">
              <a href="#" webtrekkparam="{ct:'xbsy_dh1_hw'}">
                <span class="pl15 pr25">海外版</span>
              </a>
              |
              <dl id="abroad">
                <dt>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_hw'}">海外版</a>
                </dt>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_HK'}">香港站</a>
                </dd>
              </dl>
            </li>
            <li class="mzhan show_hide_block" object="#mzhan" type="slide" speed="fast" buffer="300">
              <a href="#" webtrekkparam="{ct:'xbsy_dh1_sj'}">
                <span class="pl15 pr15">手机版</span>
              </a>
              |
              <div id="mzhan">
                <div class="left">
                  <img  alt=""  src="/object/Public/images/Picture/886616c005564ee398fad966d50e6a73.gif" style="width:95px;"/>
                </div>
                <div class="left pl5">
                  <span class="dark">
                    扫描下载客户端
                    <br/>
                    手机抢购更给力
                  </span>
                  <br/>
                  <span class="gray">iPhone | Android</span>
                  <br/>
                  <a href="/app/download.html" webtrekkparam="{ct:'xbsy_dh1_sj_download'}" class="block red_bt_s mt10">
                    <span class="font12 white">免费下载</span>
                  </a>
                </div>
              </div>
            </li>
            <li>
              <a href="http://bbs.letv.com" webtrekkparam="{ct:'xbsy_dh1_sq'}">
                <span class="pl15 pr15">社区</span>
              </a>
              |
            </li>
            <li>
              <a href="/dkh.html" webtrekkparam="{ct:'xbsy_dh1_dkh'}">
                <span class="pl15 pr15">大客户通道</span>
              </a>
            </li>
          </ul>
          <ul class="right log_order t_r">
            <?php  session_start(); if(!session('users')){ ?>
        <li id="loginMess" class="loginNew"><a id="login" rel="nofollow" href="<?php echo U('Login/index');?>"><span class="pl15 ">登录</span></a> | <a rel="nofollow" target="_blank" href="<?php echo U('Register/index');?>"><span class=" pr15">注册</span></a></li>

        <?php  }else{ ?>

       <li class="loginNew" id="loginMess"><span class="gray">Hi,</span><a title="" target="_blank" href="" rel="nofollow"><span class="pl5 pr5"><?php echo ($_SESSION['users']['username']); ?></span></a> <a id="logout"  href="<?php echo U('Login/logout');?>" rel="nofollow"><span class="pl5 pr15">[退出]</span></a></li>

      <?php  } ?>
            <li class="order">
              <a rel="nofollow" webtrekkparam="{ct:'xbsy_dh1_myorder'}"  href="<?php echo U("Account/order");?>">
                <span class="pl15 pr15">我的订单</span>
              </a>
            </li>
            <li class="hd_list show_hide_block" object="#help" type="slide" speed="fast" buffer="300">
              <a href="<?php echo U("helpself/index");?>" webtrekkparam="{ct:'xbsy_dh1_help'}" target="_blank">
                <span class="pl15 pr25">帮助中心</span>
              </a>
              <dl id="help">
                <dt>
                  <a href="<?php echo U("helpself/index");?>" target="_blank">帮助中心</a>
                </dt>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_help_psaz'}" target="_blank">配送安装</a>
                </dd>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_help_shfw'}" target="_blank">售后服务</a>
                </dd>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_help_yfbz'}" target="_blank">运费标准</a>
                </dd>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_help_lxkf'}" target="_blank">联系客服</a>
                </dd>
              </dl>
            </li>
            <li class="hd_list show_hide_block" object="#dao" type="slide" speed="fast" buffer="300">
              <a href="javascript:void(0)" webtrekkparam="{ct:'xbsy_dh1_stdh'}">
                <span class="pl15 pr25">生态导航</span>
              </a>
              <dl id="dao">
                <dt>生态导航</dt>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_stdh_lsw'}" target="_blank">乐视网</a>
                </dd>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_stdh_wjw'}" target="_blank">网酒网</a>
                </dd>
                <dd>
                  <a href="#" webtrekkparam="{ct:'xbsy_dh1_stdh_lsh'}" target="_blank">乐生活</a>
                </dd>
                <!--<dd>
                <a href="/zt/cp2c.html" target="_blank">CP2C</a>
              </dd>
              -->
            </dl>
          </li>
        </ul>
    </div>
  </div>
    <div class="center">
      <a class="block logo left " webtrekkparam="{ct:'xbsy_LOGO'}" href="<?php echo U('Index:index');?>"><img src="<?php echo C('HTTP_LOGO');?>"></a>
      <div class="logo_right left">
        <a href="<?php echo U('Index:index');?>" webtrekkparam="{ct:'xbsy_zexhr'}">
          <img src="/object/Public/images/Picture/321c7a0420674f369ccbf2c19f3d4467.gif"/>
        </a>
      </div>
      <a class="block head_cart" href="<?php echo U('cart/index');?>" webtrekkparam="{ct:'xbsy_gwc'}" target="_blank">
        <div class="had_num" id="productNumInCart"></div>
        <span class="pl20 white font14">购物车</span>
      </a>
      <div class="clear"></div>
    </div>

  <?php  $rNav = getNav(1); $lNav = getNav(0); ?>
    <div class="nav">
      <div class="center relative zindex299" >
        <ul class="main_nav left">
          <?php if(is_array($lNav)): foreach($lNav as $key=>$v): ?><li class="hadlist">
                <a href="<?php echo ($v['url']); ?>"> <?php echo ($v['title']); ?></a>
              </li><?php endforeach; endif; ?>

        </ul>
        <ul class="yinxiao right">
          <li>|</li>
          <?php if(is_array($rNav)): foreach($rNav as $key=>$v): ?><li>
              <a href="<?php echo ($v['url']); ?>" target="_blank" ><?php echo ($v['title']); ?></a>
            </li><?php endforeach; endif; ?>          
          <!--<li>
          <a target="_blank" webtrekkparam="{ct:'H_tyzx'}" href="http://shop.hdletv.com/#/Homepage">超级体验中心</a>
        </li>
        -->
      </ul>
  </div>
  </div>
  </div>
   
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <!-- 系统引用 勿动 -->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <!-- js引用文件添加 -->
    <!-- 页面底部统一引用jsInclude -->
    <!-- 引用静态页面标签 -->
    <script>var _hrefPath = '', _imagePath = 'http://img0.hdletv.com', _basePath = 'http://web_dev_service_group:80/';</script>
    <!--[if lt IE 7]>
    <script type="text/javascript" src="../Scripts/unitpngfix.js"></script>
    <![endif]-->


    <script type='text/javascript' src='/object/Public/Scripts/generatesession.js'></script>

    <script type='text/javascript' src='/object/Public/Scripts/zxlib.js'></script>

    <script type='text/javascript' src='/object/Public/Scripts/template.js'></script>

    <link type='text/css' href='/object/Public/CSS/proinfo.css' rel='stylesheet'/>

    <script type='text/javascript' src='/object/Public/Scripts/newag.js'></script>
    <div class="main_body">
        <div class="product_info">
            <div style="height:73px;width:100%;min-width:1200px;">
                <div id="piao"
                     style="width:100%;min-width:1200px;height:70px;position:absolute; z-index:200; padding:0; top:150px; background-color:#fff;">
                    <section class="pro_info_head">
                        <div class="center ">
                            <div class="pro_name left"><a href="/product/max70.html"
                                                          webtrekkparam="{ct:'Max70_p_dh_cpjs'}"><h1><?php echo ($res['name']); ?></h1>
                            </a></div>
                            <a target="_blank" class="block left bt_oline_service" href="/onlineservice.html"
                               webtrekkparam="{ct:'introduction_Max70_zxzx'}">
                                <span class="font12">在线咨询</span>
                            </a>

                            <div class="pro_button"><a class="red_bt_m block left t_c"
                                                       webtrekkparam="{ct:'Max70_topbuy'}"
                                                       href="/product/product-pid-GWGT701002-n-3.html" target="_blank">
                                <span class="white">立即购买</span></a></div>
                            <div class="pro_tab right">
                                <ul class="uptabSwitch right">
                                    <li><a class="" href="<?php echo U('Goods/headline',array('pid'=>$res['pid']));?>"
                                           webtrekkparam="{ct:'$res['name']_toptab1'}"><span>概述</span></a>|
                                    </li>
                                    <li><a class="" href="<?php echo U('Goods/capability',array('pid'=>$res['pid']));?>"
                                           webtrekkparam="{ct:'$res['name']_toptab2'}"> <span>性能</span></a>|
                                    </li>
                                    <li><a class="" href="<?php echo U('Goods/design',array('pid'=>$res['pid']));?>"
                                           webtrekkparam="{ct:'$res['name']_toptab3'}"> <span>设计与工艺</span></a>|
                                    </li>
                                    <li><a class="" href="<?php echo U('Goods/letvUI',array('pid'=>$res['pid']));?>"
                                           webtrekkparam="{ct:'$res['name']_toptab4'}"> <span>LetvUI</span></a>|
                                    </li>
                                    <li><a class="" href="<?php echo U('Goods/letvStore',array('pid'=>$res['pid']));?>"
                                           webtrekkparam="{ct:'$res['name']_toptab5'}"> <span>LetvStore</span></a>|
                                    </li>
                                    <li><a class="cur" href="<?php echo U('Goods/param',array('pid'=>$res['pid']));?>"
                                           webtrekkparam="{ct:'$res['name']_toptab6'}"> <span>规格参数</span></a>|
                                    </li>
                                    <li><a class="" href="<?php echo U('Goods/compare',array('pid'=>$res['pid']));?>"
                                           webtrekkparam="{ct:'$res['name']_toptab7'}"><span>评价晒单</span></a>|
                                    </li>
                                </ul>
                            </div>
                            <div class="clear line_b"></div>
                        </div>
                    </section>
                </div>
            </div>

            <!--参数开始-->
            <div class="chansu center tabSwichDiv5 tabSwichDiv">
                <a name="chansu"></a>

                <div class="center">
                    <div class="t_c"><img alt="" src="/object/Public/Picture/a4c4fb0676a5482d97b251aa5b485de1.gif"
                                          style=""/></div>
                    <div class="t_c" style="margin-top:-1px;"><img alt=""
                                                                   src="/object/Public/Picture/9459e038680a44baba5c1615c655dd54.gif"
                                                                   style=""/></div>
                    <div class="t_c" style="margin-top:-1px;"><img alt=""
                                                                   src="/object/Public/Picture/3cd8fdf7460d4970a5c698d69bf03dc5.gif"
                                                                   style=""/></div>
                    <div class="t_c" style="margin-top:-1px;"><img alt=""
                                                                   src="/object/Public/Picture/30787485f84e4fb292245b0e4468a1a1.gif"
                                                                   style=""/></div>
                    <div class="t_c" style="margin-top:-1px;"><img alt=""
                                                                   src="/object/Public/Picture/dbfcccf0052b4eca9f888ea1afb662b9.gif"
                                                                   style=""/></div>
                    <div class="t_c" style="margin-top:-1px;"><img alt=""
                                                                   src="/object/Public/Picture/f3c584f27c83420f864bb079ed3e0f6d.gif"
                                                                   style=""/></div>
                    <div class="t_c" style="margin-top:-1px;"><img alt=""
                                                                   src="/object/Public/Picture/18118f712fdd4405a62e8d8c19b71654.gif"
                                                                   style=""/></div>
                    <div class="t_c" style="margin-top:-1px;"><img alt=""
                                                                   src="/object/Public/Picture/7b747685a9034fd6b1b014d2a7d0da80.gif"
                                                                   style=""/></div>
                </div>
            </div>
            <!--参数结束-->

<!--主内容区part -->
<div class="clear"></div>
</div>

<script  type="text/javascript">
    $(function(){
        $(".tabs").find("li").bind("click",function(){
                var id=$(this).attr("id");
                $(".tabs").find("li").removeClass("curr");
                $(this).addClass("curr");
                
            $(".bd").hide();
            $("#c"+id).show();
        });
        
        //绷定事件
        $(".zzfw").live("click",function(){
            var url = $(this).attr("url");
            Js.login.hasLogin(function(){
                window.location.href=url;
                window.event.returnValue = false;
            }); 
        });                         
    }); 
</script>

<!--<a href="http://www.sojump.com/jq/3674687.aspx" target="_blank" class="diaocha block"></a>
-->

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
</div>
-->
</div>
</a>
<!-- 销量天王 -->
<a href="<?php echo U('index:index');?>" target="_blank">
<div class="is_king ie6-hover border hand handle  show2 " id="king_div" object="#tw_div">
<!--<div class="top_show" id="tw_div">
<div class="arrow absolute"></div>
<div class="red_bg absolute">销量天王</div>
</div>
-->
</div>
</a>
<!-- 下载APP -->
<div class="is_app ie6-hover border hand handle  show3 " id="app_div" object="#xz_div">
<div class="app_show" id="xz_div">
<div class="app_bg border absolute">
<p class="pt5 pb5">手机下单更快捷</p>
<p>
<a href="http://shop.letv.com/app/download.html?cps_id=yd_pc_yg_rk_pcfb_0_h" target="_blank">
<img  alt=""  src="/object/Public/images/Picture/ef1c1735afc74eba8cdebd310f456911.gif" style=""/>
</a>
</p>
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
</div>
-->
</div>
</div>

<div class="footer">
<div class="white_bg pt40 pb30">
<div class="center clearfix">
<ul class="icon_list line_b clear">
<li class="zheng">
<span class="font18 dark">正品保障</span>
<br />
所有产品都是原装正品
</li>
<li class="threeday">
<a webtrekkparam="{ct:'xbsy_fwpt_3RNSD'}">
<span class="font18 dark">3日内送达</span>
<br />
<span class="gray">24大核心城市</span>
</a>
</li>
<li class="returns">
<a webtrekkparam="{ct:'xbsy_fwpt_7RWLY'}">
<span class="font18 dark">7天无理由退换货</span>
<br />
<span class="gray">支持7天退货，30天换货</span>
</a>
</li>
<li class="delivery">
<a webtrekkparam="{ct:'xbsy_fwpt_616CSSD'}">
<span class="font18 dark">616城市送达</span>
<br />
<span class="gray">覆盖全国29个省</span>
</a>
</li>
<li class="policy">
<a webtrekkparam="{ct:'xbsy_fwpt_3BZC'}">
<span class="font18 dark">3包政策</span>
<br />
<span class="gray">享受国家质量保障政策</span>
</a>
</li>
</ul>
<div class="help_list  left pt50">
<dl>
<dt>新手入门</dt>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_xsrm_zcydl'}" href="#">
<span class="simsun">></span>
注册与登录
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_xsrm_zhaq'}" href="#" >
<span class="simsun">></span>
账户安全
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_xsrm_zhmm'}" href="#" >
<span class="simsun">></span>
如何找回密码
</a>
</dd>
<!--<dd>
<a webtrekkparam="{ct:'YW_xsrm_tab4'}" href="#" >
<span class="simsun">></span>
购物指南
</a>
</dd>
-->
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_xsrm_lmFAQ'}" href="#" >
<span class="simsun">></span>
乐码FAQ
</a>
</dd>
</dl>
<dl>
<dt>订单服务</dt>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_ddfw_wszf'}" href="#">
<span class="simsun">></span>
网上支付
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_ddfw_tksm'}" href="#" >
<span class="simsun">></span>
退款说明
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_ddfw_fpzd'}" href="#" >
<span class="simsun">></span>
发票制度
</a>
</dd>

</dl>
<dl>
<dt>物流服务</dt>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_psyaz_psaz'}" href="#" >
<span class="simsun">></span>
配送范围查询
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_psyaz_pscx'}" href="#">
<span class="simsun">></span>
配送费收取标准
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_psyaz_yhqs'}" href="#" >
<span class="simsun">></span>
自提与签收注意事项
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_psyaz_cjwt'}" href="#">
<span class="simsun">></span>
配送常见问题
</a>
</dd>
<!--<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_psyaz_yyaz'}" href="#">
<span class="simsun">></span>
预约安装
</a>
</dd>
-->
</dl>
<dl>
<dt>售后服务</dt>
<!--<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_fwyzc_gwts'}" href="#" >
<span class="simsun">></span>
购物提示
</a>
</dd>
-->
<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab1'}">
<span class="simsun">></span>
关于安装
</a>
</dd>
<!--<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab2'}">
<span class="simsun">></span>
国家三包政策
</a>
</dd>
-->
<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab3'}">
<span class="simsun">></span>
售后服务政策
</a>
</dd>
<!--<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab4'}">
<span class="simsun">></span>
配件、盒子三包政策
</a>
</dd>
-->
<!--<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab5'}">
<span class="simsun">></span>
超级电视售后说明
</a>
</dd>
-->
<!--<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab6'}">
<span class="simsun">></span>
配件、盒子售后说明
</a>
</dd>
-->
<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab7'}">
<span class="simsun">></span>
线下服务中心
</a>
</dd>
<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab8'}">
<span class="simsun">></span>
售后服务公示
</a>
</dd>
<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab9'}">
<span class="simsun">></span>
线下体验厅
</a>
</dd>
<dd>
<a href="#" webtrekkparam="{ct:'Help_fwzc_tab10'}">
<span class="simsun">></span>
TV版服务续费教程
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_fwyzc_hyj'}" href="#" >
<span class="simsun">></span>
电视合约机
</a>
</dd>
</dl>
<dl>
<dt>走进乐视TV</dt>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_gsjs'}"  href="#">
<span class="simsun">></span>
公司介绍
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_ppsp'}"  href="#" >
<span class="simsun">></span>
品牌视频
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_share'}"  href="#" >
<span class="simsun">></span>
分享邀请
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_shhyx'}"  href="#">
<span class="simsun">></span>
社会化营销
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_lxwm'}"  href="#">
<span class="simsun">></span>
联系我们
</a>
</dd>
<dd>
<a webtrekkparam="{ct:'xbsy_fwpt_zjlsTV_gzwm'}"  href="javascript:void(0)" onclick="javascript:pop('#guanzhuPOP')">
<span class="simsun">></span>
关注我们
</a>
</dd>
</dl>
</div>
<div class="service_online pt50 right">
<dl>
<dt>在线服务</dt>
<dd class="phone400">
<span class="font16 dark">1010-9000</span>
<br />
7*24小时客服电话
<br />
（仅收市话费）
</dd>
<dd class="kf_online">
<a webtrekkparam="{ct:'xbsy_fwpt_ZXFW'}" href="#">
<span class="font16 dark">在线客服</span>
<br />
<span class="gray">服务时段 8:00-20:00</span>
</a>
</dd>
<dd class="UE_center">
<a webtrekkparam="{ct:'xbsy_fwpt_YHTYZX'}" href="#">
<span class="font16 dark">用户体验中心</span>
<br />
<span class="gray">从用户的角度完善购物体验</span>
</a>
</dd>
<dd class="returns_oline">
<a webtrekkparam="{ct:'xbsy_fwpt_ZXTHH'}" href="#">
<span class="font16 dark">在线退换货</span>
</a>
</dd>
</dl>
</div>
<div class="clear"></div>
</div>
</div>
<div class="copyright">
<div class="center">
Copyright © <?php echo C('HTTP_COPY');?>
</div>
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
<a href="#" class="inline_block">
<img src="/object/Public/images/Picture/7200f79c65bb409d817e6eecf3b3a3d7.gif" alt="" />
</a>
</div>
<div class="pl90 pb30 pt15 weixin">
<div class="clearfix">
<div class="left pr40 line_r">
<span class="font16 dark">乐视TV 官方微信</span>
<br />
<img src="/object/Public/images/Picture/64c541ee81b04f7fa6903f351f0e25a0.gif" alt="" />
</div>
<div class="left pl40">
<span class="font16 dark">乐视商城 官方微信</span>
<br />
<img src="/object/Public/images/Picture/6ee62666a6e84788ae6e0899d0b76733.gif" alt="" />
</div>
</div>
<div class="mt15 gray font12">打开微信，点击右上角的“魔法棒”，选择“扫一扫”功能，对准下方二维码即可。</div>
</div>
</div>
</div>

<script type="text/javascript">
//右侧飘窗显示隐藏方法
$.fn.extend({showOrHide:function(){var _this=this;this.each(function(index,elem){var $handle=$(elem);var name=$handle.attr("object");var $content=$(name);var timer=null;$handle.mouseover(function(){show();}).mouseout(function(){hide();});$content.mouseover(function(){show();}).mouseout(function(){hide2();});function show(){clearTimeout(timer);$content.show();}
function hide(){var interval=300;timer=setTimeout(function(){ $content.hide();},interval);}
function hide2(){ $content.hide();}});}});

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

</body>
<!-- 底部系统引用 勿动 -->
<script type='text/javascript' src='/object/Public/js/Scripts/jquery.lazyload.js'></script>
<!--<script type='text/javascript' src='/object/Public/js/Scripts/zxvideo.js'></script>-->
</html>
<!-- 系统引用 勿动 -->