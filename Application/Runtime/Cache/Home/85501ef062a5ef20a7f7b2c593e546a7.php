<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <!-- js引用文件添加 -->
  <!-- 页面底部统一引用jsInclude -->
  <!-- 引用静态页面标签 -->
   
<script>var _hrefPath = '',_imagePath = 'http://img0.hdletv.com',_basePath = 'http://web_dev_service_group:80/';</script>
<link  type='text/css' href='/object/Public/CSS/global.css' rel='stylesheet' />
<script type='text/javascript' src='/object/Public/Scripts/generatesession.js'></script>
<script type='text/javascript' src='/object/Public/Scripts/template.js'></script>
<link  type='text/css' href='/object/Public/CSS/sppj.css' rel='stylesheet' />
<link  type='text/css' href='/object/Public/CSS/products.css' rel='stylesheet' />
<!-- // <script type='text/javascript' src='/object/Public/Scripts/zxlib.js'></script> -->
<link  type='text/css' href='/object/Public/CSS/jquery.jqzoom.css' rel='stylesheet' />
<link rel="stylesheet" href="/object/Public/css/base.css" />
<script type="text/javascript" src='/object/Public/js/zoom/base.js'></script>
<script type="text/javascript" src='/object/Public/js/zoom/jquery-1.4.2.min.js'></script>
<script type="text/javascript" src='/object/Public/js/zoom/jquery.jqzoom.js'></script>
<link rel="icon" href="http://www.letv.com/favicon.ico" type="image/x-icon"/> 
<link rel="shortcut icon"  href="http://www.letv.com/favicon.ico" type="image/x-icon"/>    

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
   
<div class="main_body">
<input type="hidden" id="productid" value="408200000978"/>
<input type="hidden" name="bmprolist" pid="408200000978" num="1"/>
<div class="pro_top center font14 clearfix ">
   <div class="left"><a href="/object"><span class="font16 dark">首页</span></a>
  > <span class="dark"><a href="/product/parts.html">订单详情</a></span> > <span class="dark">发表评价</span>  
  </div>
  <div class="pro_info clear TV center" style="width:600px;float:left;">
  <div class="pro_pic left" style="float:left;">
     <div class="right-extra" style="margin:0px;width:600px;">
      <!--产品参数开始-->
      <div style="width:550px;">
        <div style="width:100%;height:450px;overflow:hidden;"> <span><img  src="/object<?php echo ($res["img"]); ?>" width="100%"/></span> </div>
      </div>
    </div>
     <div id="foot" class="right next"></div>
    </div>
  
    <div style="line-height:24px;float:left;" class="clear t_c pt10 pl100">
       <a class="block left pl20 pr20 border  hidden" target="_blank" href="/biyibi/index.html">电视对比</a>
        <div class="left pro_share pl20">
           <div class="left">分享到：</div>
           <div data="{'url':'http://shop.letv.com/','pic':'http://img3.hdletv.com/parts/20141105/51589385737180234_XL','desc':'乐视Letv 云底座LeTV Yun60A','text':'乐视Letv 云底座LeTV Yun60A'}" class="bdshare_t bds_tools get-codes-bdshare" id="bdshare">
        <a class="bds_qzone" title="分享到QQ空间" href="#"></a>
        <a class="bds_tsina" title="分享到新浪微博" href="#"></a>
        <a class="bds_tqq" title="分享到腾讯微博" href="#"></a>
        <a class="bds_tsohu" title="分享到搜狐微博" href="#"></a>
        <a class="bds_renren" title="分享到人人网" href="#"></a>
        <a class="bds_douban" title="分享到豆瓣网" href="#"></a>          
      </div>
      </div>
    </div>
   </div>
<div class="right pro_text" style="margin-top:250px;width:600px;line-height:30px;float:right;margin-right;30px;margin-top:0px;">
    <div class="line_b pb15 title">
      <div class="font20 black"><?php echo ($res["name"]); ?></div>
      <div></div>
     <!-- <dd>商品编号：408200000978</dd>-->
    </div>  
    <div class="line_b pb10 font14">
  
    <dl>
      <dt>售价：</dt>
      <dd><span class="font14 red">￥</span>
      <span class="font18 red"><?php echo ($info["unit_price"]); ?></span>
      </dd>
    </dl>
       
        <dl class="">
      <dt><span class="font14">商品简介：</span></dt>
      <dd><span class="gray_2">
      <p>
  <?php echo ($res["headline"]); ?></p>
      </span></dd>
    </dl>
    
      <dl>
        <dt><span class="font14">适用机型：</span></dt>
        <dd>
          <a style="cursor:default"><?php echo ($res["fit"]); ?></a>
        </dd>
      </dl>
    <dl>
         <div class="left pr20" >
  商品评价:<em class="star firststar" grade="<?php echo ($res["grade"]); ?>">
      <i class="" ></i><i class=""></i><i class=""></i><i class=""></i><i class=""></i>
    </em>
  <span><a href="javascript:void(0)" onclick="return false;" id="gopj">已有<?php echo ($num['p_num']); ?>人评价 ></a></span>                                
         </div>
          <a target="_blank" class="block left bt_oline_service" href="/onlineservice.html"  webtrekkparam="{ct:'CJDS_zxzx'}"><span class="font12">在线咨询</span> </a>
         <div class="clear"></div>
    </dl>
     </div>

  
  <div class="pt10 pb10 hidden">
    <input type="checkbox" checked="checked" id="agreeCheckBox"/> 我已阅读并同意<a id="agreePop"><span class="skyblue">乐视TV·超级电视预购协议</span></a>
  </div>
  <div >
   <div class="pt20">
   <a class='red_bt_m block addToCart addToCart_TV'style="width:480px"><span class='white' style="width:500px">现在查看的是 
于<?php echo ($time); ?>下单<span id="ordernum" style="font-weight:bold;"><?php echo ($ordernum); ?></span>购买了的此商品</span></a>
   </div>
   <div class="pt20 stopbuy" style="display:none;"><span>暂停预定</span></div>
   <!-- <a class="pl10 inline_block pt25  hidden"><span class="">定制我自己的电视></span></a> -->
  <!-- <div style="text-align:left;" class="loading_img"><img src="/object/Public/Picture/loading.gif"></div> -->
    

  <div class="clear"></div>
</div>

<div class="clear"></div>
         </div>
<!-- 推荐配件开始 -->
<!-- 推荐配件结束 -->

<div class="neirong clear  pt10">
    <div class=" line_b clear tab_title" id="piao">
      <div  class="center">
      <ul class="left">
    <li onclick="return false;" cid="pingjia"><span class="font16 ">发表评价晒单</span></li>
      <!-- <li onclick="return false;" cid="pangzhu"><span class="font16 ">帮助中心</span></li> -->
        
      </ul>
      <div class="quickBuyNameZH hidden right pt10" style="width:100px;"><a href='javascript:void(0)' class='red_bt_s block addToCart addToCart_TV' onclick='return false;' parabola='true' levelid='1' ctags='0|1' onclick='return false;'><span class='white'>加入购物车</span></a></div>
  
  </div>
</div>
<!-- <div class="tab_content center " id="jieshao">
    <?php echo ($res["desc"]); ?>
</div>
<div class="tab_content pb50 product_tab center hidden" id="canshu">
    <?php echo ($res["param"]); ?>
</div> -->
<div class="tab_content pb50 center hidden" id="shouhou">
    <div class="">
<br><br>
 

<div class="t_c font24">乐视超级电视售后服务政策</div>
<div class="font14" style="line-height:25px;">
一、  三包政策<br><br>
1、退换机政策<br><br>
  <table border="1px" cellspacing="0" cellpadding="0" style="width:100%;">
  <tr>
    <td width="135"><p align="center"><strong>产品 </strong></p></td>
    <td width="106"><p align="center"><strong>服务内容 </strong></p></td>
    <td width="113"><p align="center"><strong>期限 </strong></p></td>
    <td width="135"><p align="center"><strong>服务类型 </strong></p></td>
    <td width="198"><p align="center"><strong>备注 </strong></p></td>
  </tr>
  <tr>
    <td width="135" rowspan="2"><p align="center">乐视超级电视系列 </p></td>
    <td width="106"><p align="center">退机/换机/维修 </p></td>
    <td width="113"><p align="center">7天 </p></td>
    <td width="135"><p align="center">上门服务 </p></td>
    <td width="198"><p align="center">以实际收货日期为准 </p></td>
  </tr>
  <tr>
    <td width="106"><p align="center">换机/维修 </p></td>
    <td width="113"><p align="center">30天 </p></td>
    <td width="135"><p align="center">上门服务 </p></td>
    <td width="198"><p align="center">以实际收货日期为准 </p></td>
  </tr>
</table><br>
退换货原因：<br>
A：商品安装前，顾客与配送人员共同开箱验机发现外观不良、原装配件缺失、发票型号与实物不符，安装前售后安装人员试机发现性能故障。<br>
B：商品安装后，顾客使用过程中发现性能故障，经售后鉴定人员鉴定，并经工作人员确认鉴定结果，出具相应的鉴定报告。<br> 
以下情况不予退换货：<br> 
A：商品安装前顾客需与配送人员当场开箱验机，开箱后如产品无质量问题，不予退换货。<br>
B：未经授权的修理、误用、疏忽、滥用、事故、改动、不正确的安装，或因个人使用不当造成的商品损坏的。<br>
C：假性故障或因顾客家中环境影响使用效果，经鉴定无故障的，不予退换货。<br><br>
2、保修政策<br><br>
<table border="1" cellspacing="0" cellpadding="0" style="width:100%;" >
  <tr>
    <td width="54"><p align="center"><strong>产品 </strong></p></td>
    <td width="67"><p align="center"><strong>保修范围 </strong></p></td>
    <td width="220"><p align="center"><strong>部件名称 </strong></p></td>
    <td width="71"><p align="center"><strong>保修期(月） </strong></p></td>
    <td width="71"><p align="center"><strong>服务类型 </strong></p></td>
    <td width="220"><p align="center"><strong>备注 </strong></p></td>
  </tr>
  <tr>
    <td width="54" rowspan="4"><p align="center">乐视超级电视系列 </p></td>
    <td width="67"><p align="center">整机 </p></td>
    <td width="220"><p align="center">主板、电源板、智能板、除主要部件外的其它机内电性能部件、遥控器等 </p></td>
    <td width="71"><p align="center">12</p></td>
    <td width="71"><p align="center">上门服务 </p></td>
    <td width="220"><p align="center">　 </p></td>
  </tr>
  <tr>
    <td width="67"><p align="center">主要部件 </p></td>
    <td width="220"><p align="center">显示屏、背光组件、逻辑组件、高频调谐器 </p></td>
    <td width="71"><p align="center">36</p></td>
    <td width="71"><p align="center">上门服务 </p></td>
    <td width="220"><p align="center">高频调谐器发生故障的免费更换主板 </p></td>
  </tr>
  <tr>
    <td width="67"><p align="center">软件 </p></td>
    <td width="220"><p align="center">UI操作系统 </p></td>
    <td width="71"><p align="center">12</p></td>
    <td width="71"><p align="center">上门服务 </p></td>
    <td width="220"><p align="left">1、仅针对因UI操作系统原因导致的电视性能故障（如开机定屏、无法进入系统等） <br>
      2、仅指将电视操作系统恢复到出厂状态 </p></td>
  </tr>
  <tr>
    <td width="67"><p align="center">其他材料　 </p></td>
    <td width="220"><p align="center">随机资料(如说明书、随机光盘等)、包装 </p></td>
    <td width="71"><p align="center">0</p></td>
    <td width="71"><p align="center">无　 </p></td>
    <td width="220"><p align="center">　 </p></td>
  </tr>
</table><br>
备注：以下情况不属于免费维修的范围<br>
     A：消费者因使用、维护或保管不当造成损坏的；<br>
     B：非乐视电视特约服务商安装或拆动原因造成损坏的；<br>
     C：三包凭证及有效发票超过包修期的；<br>
     D：三包凭证型号与维修产品型号不符或者涂改的；<br>
     E：因病毒感染、黑客袭击或其他恶意侵害行为造成的故障或损坏；<br>
     F：因消费者自行安装或下载非乐视指定软件导致的故障或损坏；<br>
     G：因自然灾害等不可抗拒因素造成损坏的；<br><br>
二、服务政策<br><br>
<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
  <tr>
    <td width="107"><p align="center"><strong>产品 </strong></p></td>
    <td width="78"><p align="center"><strong>服务内容 </strong></p></td>
    <td width="85"><p align="center"><strong>服务类型 </strong></p></td>
    <td width="340"><p align="center"><strong>备注 </strong></p></td>
  </tr>
  <tr>
    <td width="107" rowspan="3"><p align="center">乐视超级电视系列 </p></td>
    <td width="78"><p align="center">座架安装 </p></td>
    <td width="85"><p align="center">上门服务 </p></td>
    <td width="340"><p align="center">首次安装免费 </p></td>
  </tr>
  <tr>
    <td width="78"><p align="center">挂架安装 </p></td>
    <td width="85"><p align="center">上门服务 </p></td>
    <td width="340"><p align="center">首次安装免费 </p></td>
  </tr>
  <tr>
    <td width="78"><p align="center">功能调试 </p></td>
    <td width="85"><p align="center">上门服务 </p></td>
    <td width="340"><p>收货之日起三个月内免费调试1次，用户再次要求上门调试的需收取上门调试费。 </p></td>
  </tr>
</table><br>
备注：用户从非乐视渠道购买的挂架不提供上门安装服务；特殊墙体（瓷砖、大理石、玻璃等）收费100元/次，并签署免责协议。<br>
</div>
    </div>
</div>

<div class="tab_content pb20 center hidden" id="pangzhu">
    <link rel="stylesheet" href="../CSS/help.css" type="text/css">


     <!--右侧栏区part -->
    <!--右侧栏区part -->
   <div class="main content pt10 pb10">
    <div class="tab01 font14">
      <a class="yjfk " href="/help/kffeedback.html" target="_blank">意见反馈>></a>
    <ul class="tabs">
      <li><span class=" hand" >自助服务</span></li>
     
    </ul>
    </div>
    <div class="zysever bd ">
    <div class="">
    <ul>
    <li><a target="_blank" href="/help/fwwd.html"  webtrekkparam="{ct:'HELP_zzfw1'}"><i class="icon-1"></i><br/>线下服务中心</a></li>
  <li><a target="_blank" href="javascript:void(0)" url="/user/center/refundOrderList.html" onclick="return false;" webtrekkparam="{ct:'HELP_zzfw2'}" class="zzfw"><i class="icon-2"></i><br/>退换货查询 </a></li>
    <li><a target="_blank" href="javascript:void(0)"  webtrekkparam="{ct:'HELP_zzfw3'}" onclick="return false;" class="zzfw" url="/user/center/fixAndMaintain.html"><i class="icon-3"></i><br/>预约安装/报修  </a></li>
    <li class=""><a target="_blank" href="javascript:void(0)"  webtrekkparam="{ct:'HELP_zzfw4'}" onclick="return false;" class="zzfw" url="/user/center/address.html"><i class="icon-4"></i><br/>修改收货人信息  </a></li>
    <li class=""><a target="_blank" href="javascript:void(0)"  webtrekkparam="{ct:'HELP_zzfw5'}" onclick="return false;" class="zzfw" url="/user/center/orderList.html"><i class="icon-5"></i><br/>取消订单  </a></li>
    <li class="last"><a target="_blank" href="/help/wlps/ddps.html"  webtrekkparam="{ct:'HELP_zzfw6'}"><i class="icon-6"></i><br/>物流查询  </a></li>
      <li class="borderno"><a target="_blank" href="/help/psfwcx.html" webtrekkparam="{ct:'HELP_zzfw7'}"><img  alt=""  src="Picture/f352a7188bd643a0a27b611930bb9dd2.gif" style="margin-bottom:5px;"/><br/>超级电视配送范围查询  </a></li>
    <li class="borderno"><a target="_blank" href="http://sso.letv.com/user/backpwd"  webtrekkparam="{ct:'HELP_zzfw8'}"><i class="icon-7"></i><br/>找回注册密码  </a></li>
    <li class="borderno "><a target="_blank" href="/LetvStore.html"  webtrekkparam="{ct:'HELP_zzfw9'}"><i class="icon-8" ></i><br/>资源下载  </a></li>
        </ul>    
    </div>
    </div>
     
        <div class="tab01 font14 mt10">
   
    <ul class="tabs">
     
      <li><span class=" hand" >联系客服</span></li>
  
    </ul>
    </div>
    <div class="lxkf  bd " id="c02">
    <div class="pl10 pr10 pt50 pb50">
      <ul style='overflow:hidden;zoom:1;'>
        <li style="border-right:1px solid #e1e1e1;"><a class="block icon-1" href="/onlineservice.html" target="_blank"></a><br/>在线客服通过在线解答的方式为您提供咨询服务<br/>工作时间：<span class="red">8:00-20:00(周一至周日)</span></li>
    <li><i class="icon-2"></i><br/>电话客服：仅收取市话费<br/>工作时间：<span class="red">7x24小时</span></li>
        </ul>    
    </div>
    </div>
         <div class="tab01 font14 mt10">
     
    <ul class="tabs">
     
  <li><span class=" hand" >帮助分类</span></li>
  
    </ul>
    </div>
    <div class="zysever  bd" id="c03">
    <div class="pt30 pb30 pl30 pr30 ">
    <dl><dt>· 新手入门</dt>
    <dd>
        <a target="_blank" href="/help/xsrm/zczh.html">注册与登录</a><span>|</span>
        <a target="_blank" href="/help/zczh/dlzh.html">账户安全</a><span>|</span>
        <a target="_blank" href="/help/xsrm/zhmm.html">如何找回密码</a><span>|</span>
        <a target="_blank" href="/help/gwlc.html">购物指南</a><span>|</span>
        <a target="_blank" href="/help/lema_faq.html">乐码FAQ</a></dd>
      </dl><dl>
     <dt>· 订单服务</dt>
    <dd> 
        <a target="_blank" href="/help/zxzf.html">网上支付</a><span>|</span>
        <a target="_blank" href="/help/ddfw/tksm.html">退款说明</a><span>|</span>
        <a target="_blank" href="/help/fpzd.html">发票制度</a>
    </dd></dl><dl>
      <dt>· 物流服务</dt> 
      <dd> 
          <a target="_blank" href="/help/wlps/cjdsps.html">配送范围查询</a><span>|</span>
        <!--<a target="_blank" href="/help/psfwcx.html">超级电视配送范围查询</a><span>|</span>-->
          <a target="_blank" href="/help/wlps/ddps.html">配送费收取标准</a><span>|</span>
              <a target="_blank" href="/help/yhqs.html">自提与签收注意事项</a><span>|</span>
          <a target="_blank" href="/help/pswt/cjds.html">配送常见问题</a>
          
      </dd></dl><dl>
       <dt>· 售后服务</dt>
       <dd> 
            <!--<a target="_blank" href="/help/gwts.html">购物提示</a><span>|</span>-->
           <a target="_blank" href="/help/fwzc/gyaz.html" webtrekkparam="{ct:'Help_fwzc_tab1'}">关于安装<span>|</span></a>
               <!--<a target="_blank" href="/help/fwzc/gjsb.html" webtrekkparam="{ct:'Help_fwzc_tab2'}">国家三包政策</a>-->
               <a target="_blank" href="/help/bxzc/cjds.html" webtrekkparam="{ct:'Help_fwzc_tab3'}">售后服务政策<span>|</span></a>
  <!--<a target="_blank" href="/help/bxzc/lshz.html" webtrekkparam="{ct:'Help_fwzc_tab4'}">配件、盒子三包政策</a>-->
  <!--<a target="_blank" href="/help/thhzc/cjds.html" webtrekkparam="{ct:'Help_fwzc_tab5'}">超级电视售后说明</a>-->
  <!--<a target="_blank" href="/help/thhzc/lshz.html" webtrekkparam="{ct:'Help_fwzc_tab6'}">配件、盒子售后说明</a>-->
  <a target="_blank" href="/help/fwwd.html" webtrekkparam="{ct:'Help_fwzc_tab7'}">线下服务中心<span>|</span></a>
  <a target="_blank" href="/help/fwzc/fwgs.html" webtrekkparam="{ct:'Help_fwzc_tab8'}">售后服务公示<span>|</span></a>
  <a target="_blank" href="/help/xxtyt.html" webtrekkparam="{ct:'Help_fwzc_tab9'}">线下体验厅<span>|</span></a>
  <a target="_blank" href="/help/xufei.html" webtrekkparam="{ct:'Help_fwzc_tab10'}">TV版服务续费教程</a>
       </dd></dl><dl>
        <dt>· 下载中心</dt>
         <dd> 
             <a target="_blank" href="http://ui.letv.com/website/downloads/">超级电视固件下载</a>
             <!--<a target="_blank" href="/help/gjxz.html">乐视盒子固件下载</a>-->
         </dd></dl><dl>
         <dt>· 产品FAQ</dt>
        <dd>
            <a target="_blank" href="/help/cpfaq.html">乐视网TV版</a><span>|</span>
            <a target="_blank" href="/help/cpsz/c1s.html">乐视盒子</a><span>|</span>
            <a target="_blank" href="/help/cpsz/X60.html">超级电视</a><span>|</span>
            <a target="_blank" href="/help/lmxt.html">乐迷学堂</a>
        </dd></dl>
      <div class='clear'></div>       
    </div>
    </div>
        <div class="tab01 font14 mt10">
     
    <ul class="tabs">

  <li><span class=" hand" >乐迷学堂</span></li> 
    </ul>
    </div>
    <div class="news list border bd" >
        <div  class="pt30 pb30 pl30 pr30 ">
          <ul style="line-height:30px;">
        <li><a target="_blank" href="http://bbs.letv.com/thread-130599-1.html">熟练使用互联网电视 高清、3D大片任你看<i class="hot"></i></a></li>
    <li><a target="_blank" href="http://bbs.letv.com/thread-130599-1.html">如何使用乐视盒子观看本地视频<i class="new"></i></a></li>
    <li><a target="_blank" href=" http://bbs.letv.com/thread-118902-1.html">手把手教你用盒子链接WIFI</a></li>
    <li><a target="_blank" href="http://bbs.letv.com/thread-136092-1.html">使用截图工具进行抓取 反馈、评测轻松写</a></li>
    <li><a target="_blank" href="http://bbs.letv.com/thread-139089-1.html">乐视盒子也能玩win8？是的，你没看错！！！</a></li>
    <li><a target="_blank" href="http://bbs.letv.com/thread-137982-1.html">发帖编辑器使用教学 让你的帖子更具有吸引力</a></li>
    <li><a target="_blank" href="http://bbs.letv.com/thread-136593-1.html">掌握ADB简单命令 让你使用盒子更方便</a></li>
            </ul>
          <div class="more" style='font-size:14px;'><a target="_blank" href="http://bbs.letv.com/forum-184-1.html"> 去【乐迷学堂】知识库了解更多>></a></div>      
        </div>
        </div>

  <div class="wentilist inforlist mt10">
      <div style="border-bottom:1px solid #d5d5d5;margin:0 10px;border-radius: 0px;" class="hd pr20"><a href="#" class="right pr20 pt5 hidden">更多>></a><span class="font18">常见问题</span></div>
      <div class="pt20 pl50 pr50 pb20" style='zoom:1;'>
    <ul>
    <li><a target="_blank" href="/help/xsrm/zhmm.html">如何找回密码?  </a></li>
    <li><a target="_blank" href="/help/ddfw/tksm.html">退款说明 </a></li>
    <li><a target="_blank" href="/help/fpzd.html">开增值税发票需提供什么资料？ </a></li>
    <li><a target="_blank" href="/help/fpzd.html">换开发票</a></li>
    <li><a target="_blank" href="/help/psfwcx.html">超级电视配送范围查询</a></li>
    <li><a target="_blank" href="/help/wlps/cjdsps.html">超级电视安装说明 </a></li>
    <li><a target="_blank" href="/help/pswt/cjds.html">购买超级电视后何时可以配送？ </a></li>
    <li><a target="_blank" href="/help/bxzc/cjds.html">退换机政策</a></li>
    <li><a target="_blank" href="/help/bxzc/cjds.html">保修政策 </a></li>
    <li><a target="_blank" href="/help/bxzc/cjds.html">安装政策</a></li>
    <li><a target="_blank" href="/help/xxtyt.html">线下体验厅</a></li>
    <li><a target="_blank" href="/help/fwwd.html">线下服务中心</a></li>
      </ul>  
      <div class="clear"></div>
    </div>
    </div>
</div>
</div>
<!-- 评价部分 -->
<div class="tab_content ape_pj" id="pingjia" >
  <div class="center ">
  <div class="dcomment">
      <div class="comments_list pt20">
          <div class="mb20 pt20 clearfix">
              <div class="left comments_rate">
                  <div class="comments_rate_tb">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                              <td width="37%" rowspan="3" align="center" valign="middle">
                                <span class="Arial red inline_block clearfix"><em class="font48 left"><?php echo ($per['g_per']); ?> </em><em class="left font24">%</em></span><br />
                  <span class="font14 gray">好评度</span>
                              </td>
                              <td width="18%" align="center" valign="middle">
                                  <span class="font14 gray">好评</span>
                              </td>
                              <td width="45%" align="left" valign="middle">
                                  <div class="rate">
                                          <div class="rate_theme" style="width:<?php echo ($per['g_per']); ?>%;"></div>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td align="center" valign="middle">
                                  <span class="font14 gray">中评</span>
                              </td>
                              <td align="left" valign="middle">
                                  <div class="rate">
                                          <div class="rate_theme" style="width:<?php echo ($per['m_per']); ?>%;"></div>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                              <td align="center" valign="middle">
                                  <span class="font14 gray">差评</span>
                              </td>
                              <td align="left" valign="middle">
                                  <div class="rate">
                                          <div class="rate_theme" style="width:<?php echo ($per['l_per']); ?>%;"></div>
                                  </div>
                              </td>
                          </tr>
                      </table>
                  </div>
              </div>
              <div class="left comments_subject">
                  <dl>
                      <dt><span class="font14 mb10">大家认为</span></dt>
                         
                        <dd class="mt5 clearfix" after="0">
                            <?php if(is_array($tags)): foreach($tags as $k=>$vo): ?><span value="<?php echo ($vo["id"]); ?>" name="<?php echo ($k); ?>" style="cursor:pointer"><?php echo ($vo["tag"]); ?>(
                            <em class="gray"><?php echo ($vo["tag_amount"]); ?></em>
                            )</span><?php endforeach; endif; ?>
                        </dd>
                       
                  </dl>
              </div>
              <div class="left t_c comments_btn" id="op_button_a">
                  <a id="mypj" href="<?php echo U('Fit/rebuy','id='.$orderid);?>" class="red_bt_m block mb15"><span class="white">再次购买</span></a>
                  <a id="mysd" href="javascript:void(0)"><span class="blue font14">发表晒单</span><br/><img src="/object/public/images/remindinfo.jpg" alt="" style="width:30px;height:30px;position: relative;top: 8px;"/><span style="font-size:12px;padding-top:10px;">成功发表评价后才可以晒单</span></a>
              </div>
          </div>
          <div class="addComment" style="height:350px;border-top:1px solid #dfdfdf;border-bottom:1px solid #dfdfdf;letter-spacing:0.1em;">
            <div class="remind" style="font-size:14px;float:right;margin-right:110px;"><img src="/object/Public/images/remind.gif" alt="remind" style="width:20px;height:20px;"/><span>&nbsp;&nbsp;认真写评价,有机会成为我们的幸运买家,赢取优先购买权</span></div>
            <div class="need" style="margin-top:20px;letter-spacing:0.1em"><span style="font-size:16px;letter-spacing:0.1em;"><img src="/object/Public/images/love.jpg" alt="亲头像" style="width:20px;height:20px;"/>亲,其他买家需要您的建议哦~</span></div>
          <div class="left pr20" style="margin-left:30px;float:left;">
            商品评价:<em class="star addstar">
           <i class="" name="1"></i><i class="" name="2"></i><i class="" name="3"></i><i class="" name="4"></i><i class="" name="5"></i>
           </em>  
             <div class="reply_div" style="border:1px solid #DFDFDF;margin-bottom:15px;">
                <div class="f8_bg pt15 pl20 pr20 pb10">
                  <div class="comment_box_inner c_content">
                    <textarea maxlength="500" value="" id="replyContent_1" class="text2" style="height:120px;width:700px;"></textarea>
                  </div>
                  <div class="comment_box_tips" >
                    <input type="button" commentid="40484" reusername="1355xxx1230" reuserid="242097549" id="replyButton_1" class="white_bt_m mr15" value="发表评价" reid="<?php echo ($orderid); ?>">
                    您已输入<span class="red" >0</span>字，最多输入500字
                  </div>
                </div>
            </div>  
           </div>
           <div id="addpic" class="mws-form-row" style="float:left;display:none">
                    <label class="mws-form-label">晒单图</label>
                    <div class="mws-form-item" style="border:1px solid #dfdfdf;padding-left:12px;padding-top:4px;padding-right:95px;back-groundcolor:#F8F8F8;">
                    <form action="<?php echo U('Fit/addpic');?>" class="mws-form" method="post" enctype="multipart/form-data">
                        <!-- <span>※</span> -->
<!-- ****************************晒单图引用地址************************* -->
                        <!-- <img src="/object<?php echo ($img['0']); ?>" alt="" width="250px" height="150px" border="1px solid red" name="img0"> -->
                        <input type="file" class="small" name='img0'>
                        <br>
                        <!-- <img src="/object<?php echo ($img['1']); ?>" alt="" width="250px" height="150px" border="1px solid red" name="img1"> -->
                        <input type="file" class="small" name='img1'>
                        <br>
                        <!-- <img src="/object<?php echo ($img['2']); ?>" alt="" width="250px" height="150px" border="1px solid red" name="img2"> -->
                        <input type="file" class="small" name='img2'>
                        <br>
                        <!-- <input type="button" id="addpic" class="white_bt_m mr15" value="发表晒图" reid="<?php echo ($orderid); ?>" style="margin-left:50px;"> -->
                        <input type="submit" value="发表晒图" class="white_bt_m mr15" /><span style="font-size:12px;">晒图不超过三张</span>
                        <input type="hidden" name="goods_id" value="<?php echo ($orderid); ?>" />
                        <input type="hidden" name="order_num" value="<?php echo ($ordernum); ?>" />
                    </form>
<!-- ****************************晒单图引用地址************************* -->
                    </div>
              </div>  
          </div>
         
          <script type="text/javascript">
                //获取star的值

                var f_grade = $('.firststar').attr('grade');
                // 循环加星
                for(var g=0;g<f_grade;g++){
                  $('.firststar').find('i').eq(g).attr('class','on');
                }
                //点击发表晒单按钮,触发事件...
                $('#mysd').click(function(){
                  $('.mws-form-row').show(500);
                })
               //星星设置评价
                //获取商品id
                var id = $('#replyButton_1').attr('reid');
                //获取订单号
                var num = $('#ordernum').html();
                $('.addstar').find('i').mousemove(function(){
                  var v = $(this).attr('name');
                    for(var i=0;i<v;i++){
                     $('.addstar i').eq(i).addClass('on');
                       for (var j=i+1; j<=v-i;j++){
                        $('.addstar i').eq(j).removeClass('on');
                        } 
                    }
                })
               $('.text2').keyup(function(){
                  var len = $(this).val().length;
                    if(len >= 500){
                      alert('最多输入500字');
                      // $(this).val($(this).val().substring(0,50));
                    }
                  // var num = 50 - len;//还可输入多少字的值
                  $(this).parents('.reply_div').find('.red').text(len);
                })  
               //获取对评价回复的内容,将内容ajax传到后台
               var c_content = $('.c_content');

               $("#replyButton_1").click(function(){
                  // var v = $(this).attr("reid");
                  var c = $(this).parents('.reply_div').find('textarea').val();
                  //获取星级评价的值
                  var grade =$('.addstar .on').last().attr('name');

                  if(typeof(grade)=="undefined"){
                    alert('请先选择商品评价星级,再发表评价');
                    return false;
                  }
                  if(c == ''){
                    alert('回复内容不能为空');

                  }else{

                    //获取回复内容
                    var con = $('#replyContent_1').val();
                    $.get("<?php echo U('Fit/updatecomment');?>",{goods_id:id,order_num:num,grade:grade,con:con},function(msg){
                      if(msg!==''){
                        $('.reply_div').hide(500);
                        alert('发表评价成功');

                      }else{
                        $('.reply_div').hide(500);
                        alert('本次评价已经发表成功,不可以重复发表');
                        // window.location.href="<?php echo U('Fit/FitList');?>";
                      }
                    })
                  }
               })

            $('.mt5 span').click(function(){

              var v = $(this).attr('value');
              var k = $(this).attr('name');
              //定义判断变量av
              var av = $('.mt5 span').parent().attr('after');
              // if(av==0){
                  $.get("<?php echo U('Fit/addtag');?>",{tag_id:v,goods_id:id,order_num:num},function(msg){
                  if(msg!=='0'){
                    $('.mt5 em').eq(k).html(msg); 
                  }else{
                    alert('您已经选过了标签');return false;
                  }
                })
            })
          </script>
<div style="display:none">
  <script type="text/javascript">
  var myTongJi={
    wk_contentId:"",//webtrek用到的contentId
    zp_pageId:"",//晶赞用到的_setPageID
    zp_pageType:"",//晶赞用到的_setPageType
    zp_params:[],//晶赞用到的_setParams
    zp_need:"1"
  }
  if(typeof(globalTongJi)!='undefined'){
    if(globalTongJi.wk_contentId){
            myTongJi.wk_contentId=globalTongJi.wk_contentId;
    }
        var zpqUrlPath = window.location.pathname;
        var zpqTitle = document.title;
        if(zpqUrlPath.indexOf("/help/")!=-1 && !globalTongJi.wk_contentId){
        myTongJi.zp_pageId="helpPage";
        }else{
          myTongJi.zp_pageId=globalTongJi.wk_contentId;
        }
    if(globalTongJi.zp_pageId){
      myTongJi.zp_pageId=globalTongJi.zp_pageId;
    }
    if(globalTongJi.zp_pageType){
      myTongJi.zp_pageType=globalTongJi.zp_pageType;
    }
    if(globalTongJi.zp_params){
      myTongJi.zp_params=globalTongJi.zp_params;
    }
    if(globalTongJi.zp_need){
      myTongJi.zp_need = globalTongJi.zp_need;
    }
    }else{        
        var zpqUrlPath = window.location.pathname;
        var zpqTitle = document.title;
      if(zpqUrlPath.indexOf("/help/")!=-1){
        myTongJi.zp_pageType="helpPage";
            myTongJi.zp_params = [$(document).attr("title")];
        }
    }
  </script>
    <!-- 百度统计 start-->
  <script type="text/javascript" src="/object/Public/Scripts/bdtj.js"></script>
  <!-- 百度统计 end-->
  
  <!-- webtrek统计 start-->
  <script type="text/javascript">
  var webtrekk_params = {
    contentId:myTongJi.wk_contentId
  };
  </script>
  <script type="text/javascript" src="/object/Public/Scripts/webtrekk_v3.js"></script>
  <!-- webtrek统计 end-->
  
    <!-- pv统计 start-->
  // <script type="text/javascript">
  //   var __INFO__ = {};

  //   var _siteid = '1';var _chlid = '16';var _clickTracker = false;
  //   (function (D){
  //          window.Stat = {P1: 4, P2: 41};
  //          var h = D.getElementsByTagName('head')[0],
  //          s = D.createElement('script');
  //          s.type = 'text/javascript';
  //          s.charset = 'utf-8';
  //          s.src = 'http://js.letvcdn.com/js/201409/16/leStats.js';
  //          h.firstChild ? h.insertBefore(s, h.firstChild) : h.appendChild(s);
  //       })(document);
      
  //     $(function(){
  //       var pvstatsTime = null;
      
  //       if(pvstatsTime){
  //           pvstatsTime = null;
  //       }else{
  //           pvstatsTime = setTimeout(hidePVStatsDiv,1000);
  //       }
        
  //       function hidePVStatsDiv(){
  //           if($("#rookieswf") && $("#rookieswf").length>0){
  //               $("#rookieswf").parent().hide();
  //           }else{
  //               pvstatsTime = setTimeout(hidePVStatsDiv,1000);
  //           }
  //       }
  //     }); 
  // </script>
  <!-- pv统计 end-->
  
  <!-- 晶赞统计代码  begin  -->
  <script type='text/javascript'>
        var _sparam=['_setParams'].concat(myTongJi.zp_params);
    var _zpq = _zpq || [];
    _zpq.push(['_setPageID',myTongJi.zp_pageId]);
    _zpq.push(['_setPageType', myTongJi.zp_pageType]);
    _zpq.push(_sparam);
    _zpq.push(['_setAccount','104']);
    (function() {
    if(myTongJi.zp_need && (myTongJi.zp_need == "1")){
      var zp = document.createElement('script'); zp.type = 'text/javascript'; zp.async = true;
      zp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.zampda.net/s.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(zp, s);
    }
    })();
  </script>
  <!-- 晶赞统计代码  end  -->
</div>
<!-- 统计代码end--><script type="text/javascript">
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
</script>
 
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
<div id="flyitem" style="position: absolute; display: none; width: 40px; height: 40px;">
    <img style="width: 40px; height: 40px; border:3px solid #d80c18;" src="/object/Public/Picture/59fd699ed7494603b64701553ab9d4b5.gif">
</div>
</body>
<!-- 底部系统引用 勿动 -->
            <script type='text/javascript' src='/object/Public/Scripts/jquery.lazyload.js'></script>

            <script type='text/javascript' src='/object/Public/Scripts/zxvideo.js'></script>

            <script type='text/javascript' src='/object/Public/Scripts/enlarge_pic.js'></script>

            <script type='text/javascript' src='/object/Public/Scripts/jquery.jqzoom-core.js'></script>

            <script type='text/javascript' src='/object/Public/Scripts/sxf_scroll_pic.js'></script>

</html>
<!-- 系统引用 勿动 -->
<script type="text/javascript" id="bdshare_js" data="type=tools&uid=71" src="/object/Public/Scripts/bds_s_v2.js"></script>
<script type="text/javascript" id="bdshell_js" src="/object/Public/Scripts/shell_v2.js"></script>
 
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