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
   
<!DOCTYPE html >
<html>
<head>
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
    <link type='text/css' href='/object/Public/CSS/global.css' rel='stylesheet'/>

    <script type='text/javascript' src='/object/Public/Scripts/generatesession.js'></script>

    <script type='text/javascript' src='/object/Public/Scripts/zxlib.js'></script>

    <script type='text/javascript' src='/object/Public/Scripts/template.js'></script>

    <link type='text/css' href='/object/Public/CSS/proinfo.css' rel='stylesheet'/>

    <script type='text/javascript' src='/object/Public/Scripts/newag.js'></script>


    <link rel="icon" href="http://www.letv.com/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="http://www.letv.com/favicon.ico" type="image/x-icon"/>
    <title>乐视电视Max70 70吋私家智能影院 - 乐视商城</title>
            <div id="allProduct" class="all_product absolute zindex999">
                <ul class="product_list product_tabs">
                    <li><img alt="超级电视" src="/object/Public/Picture/7b8be35ae45d483e8a0ca3f57e600af6.gif" style=""/><br/>
                        超级电视
                    </li>
                    <li><img alt="乐视盒子" src="/object/Public/Picture/b0aa8615177841f486e8f288861720c4.gif" style=""/><br/>
                        乐视盒子
                    </li>
                    <li><img alt="leme" src="/object/Public/Picture/e4f05e17f4fb4a10ab5caa201f46f391.gif" style=""/><br/>
                        Leme
                    </li>
                    <li><img alt="配件" src="/object/Public/Picture/f52c6723c74848dbaaa7038fb90b623f.gif" style=""/><br/>
                        配件
                    </li>


                </ul>
                <div class="tab_detail_box hidden">
                    <ul>
                        <li class="product_show clearfix tab_detail" id="p01">
                            <dl class="line_r">
                                <dt>70吋电视</dt>
                                <dd><a href="<?php echo U('Goods/headline',array('pid'=>18));?>"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_Max70'}" target="_blank">· Max70</a></dd>
                            </dl>
                            <dl class="line_r">
                                <dt>60吋电视</dt>
                                <dd><a href="/product/x60s.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_X60S_gsd'}"
                                       target="_blank">· X60S 敢死队·硬汉版</a></dd>
                                <dd><a href="/product/x60sqp.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_X60S_qp'}"
                                       target="_blank">· X60S 全配版</a></dd>
                            </dl>
                            <dl class="line_r">
                                <dt>50吋电视</dt>
                                <dd><a href="/product/x50airysb.html"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_X50Air_gl'}" target="_blank">· X50 Air
                                    张艺谋《归来》艺术版</a></dd>
                                <!--<dd><a href="/product/x50airclb.html" webtrekkparam="{ct:''}" target="_blank">·  X50 Air C罗·足球版</a></dd>-->
                                <dd><a href="/product/x50air.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_X50Air_qp'}"
                                       target="_blank">· X50 Air 全配版</a></dd>
                                <dd><a href="/product/s50airclb.html"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_S50Air_Cl'}" target="_blank">· S50 Air
                                    C罗·足球版</a></dd>
                                <dd><a href="/product/s50airqpb.html"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_S50Air_qp'}" target="_blank">· S50 Air
                                    全配版</a></dd>
                                <!--<dd><a href="/zt/cp2c_2.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_X50Air_DIY'}" target="_blank">·  DIY X50 Air</a></dd>-->
                            </dl>
                            <dl>
                                <dt>40吋电视</dt>
                                <dd><a href="/product/s40airlxsd.html"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_S40AirL_xsd'}" target="_blank">· S40 Air L
                                    郭敬明·小时代版</a></dd>
                                <dd><a href="/product/s40airl.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_cjds_S40AirL_qp'}"
                                       target="_blank">· S40 Air L 全配版</a></dd>
                                <!--<dd><a href="/product/s40airxsd.html" webtrekkparam="{ct:''}" target="_blank">·  S40 Air 郭敬明·小时代版</a></dd>
                                    <dd><a href="/product/s40airqpb.html" webtrekkparam="{ct:''}" target="_blank">·  S40 Air 全配版</a></dd>-->

                            </dl>
                        </li>
                        <li class="product_show clearfix tab_detail" id="p02">
                            <dl>
                                <dd><a href="/product/New_C1S.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_lshz_NewC1S'}"
                                       target="_blank">· New C1S</a></dd>
                            </dl>
                            <dl>
                                <dd><a href="/product/box.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_lshz_C1S'}"
                                       target="_blank">· C1S</a></dd>
                            </dl>
                        </li>
                        <li class="product_show clearfix tab_detail" id="p03">
                            <dl>
                                <dd><a href="/product/lexiaobao.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_LeMe_lxb'}"
                                       target="_blank">· 乐小宝</a></dd>
                            </dl>
                            <dl>
                                <dd><a href="/product/lemexl.html" webtrekkparam="{ct:'xbsy_dh2_qbsp_LeMe_lyej'}"
                                       target="_blank">· 蓝牙耳机</a></dd>
                            </dl>
                        </li>
                        <li class="product_show clearfix tab_detail" id="p04">
                            <dl class="line_r">
                                <dt><a href="/product/parts.html?t=7" webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_yyyl'}"
                                       target="_blank">影音娱乐</a></dt>
                                <dd><a href="/product/parts.html?t=7&z=39"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_yyyl_ej'}" target="_blank">· 耳机/耳麦</a></dd>
                                <dd><a href="/product/parts.html?t=7&z=40"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_yyyl_Kg'}" target="_blank">· 家庭K歌</a></dd>
                                <dd><a href="/product/parts.html?t=7&z=43"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_yyyl_yx'}" target="_blank">· 音箱/音响</a></dd>
                                <dd><a href="/product/parts.html?t=7&z=44"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_yyyl_yxsb'}" target="_blank">· 游戏设备</a></dd>
                            </dl>
                            <dl class="line_r">
                                <dt><a href="/product/parts.html?t=34" webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_wssp'}"
                                       target="_blank">外设商品</a></dt>
                                <dd><a href="/product/parts.html?t=34&z=35"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_wssp_js'}" target="_blank">· 键鼠</a></dd>
                                <dd><a href="/product/parts.html?t=34&z=36"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_wssp_ccsb'}" target="_blank">· 存储设备</a></dd>
                                <dd><a href="/product/parts.html?t=34&z=37"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_wssp_xl'}" target="_blank">· 线缆</a></dd>
                                <dd><a href="/product/parts.html?t=34&z=38"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_wssp_cz'}" target="_blank">· 插座</a></dd>
                            </dl>
                            <dl class="line_r">
                                <dt><a href="/product/parts.html?t=29" webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_dspj'}"
                                       target="_blank">电视配件</a></dt>
                                <dd><a href="/product/parts.html?t=29&z=30"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_dspj_cksb'}" target="_blank">· 操控设备</a></dd>
                                <dd><a href="/product/parts.html?t=29&z=31"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_dspj_dsdz'}" target="_blank">· 电视底座</a></dd>
                                <dd><a href="/product/parts.html?t=29&z=32"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_dspj_dsgj'}" target="_blank">· 电视挂架</a></dd>
                                <dd><a href="/product/parts.html?t=29&z=33"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_dspj_dszj'}" target="_blank">· 电视支架</a></dd>
                                <dd><a href="/product/parts.html?t=29&z=50"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_dspj_sxt'}" target="_blank">· 摄像头</a></dd>
                                <dd><a href="/product/parts.html?t=29&z=51"
                                       webtrekkparam="{ct:'xbsy_dh2_qbsp_pj_dspj_3Dyj'}" target="_blank">· 3D眼镜</a></dd>
                            </dl>
                        </li>

                    </ul>
                </div>
            </div>
            <div id="allTV" class="all_tv absolute ">
                <ul class="product_list product_tabs">
                    <li><a href="/product/max70.html" webtrekkparam="{ct:'xbsy_dh2_cjds_Max70'}"><img alt="Max70"
                                                                                                      src="/object/Public/Picture/7b8be35ae45d483e8a0ca3f57e600af6.gif"
                                                                                                      style=""/><br/>
                        Max70</a></li>
                    <li><a href="/product/x60s.html" webtrekkparam="{ct:'xbsy_dh2_cjds_X60S'}"><img alt="X60S"
                                                                                                    src="/object/Public/Picture/2c0af17b7b1148c4825158a335e64cc8.gif"
                                                                                                    style=""/><br/>
                        X60S</a></li>
                    <li><a href="/product/x50airysb.html" webtrekkparam="{ct:'xbsy_dh2_cjds_X50Air'}"><img
                            alt="4K X50 Air" src="/object/Public/Picture/b82e6a255b484887a4639d95fec6cbe2.gif"
                            style=""/><br/>
                        4K X50 Air</a></li>
                    <li><a href="/product/s50airclb.html" webtrekkparam="{ct:'xbsy_dh2_cjds_S50Air'}"><img alt="S50 Air"
                                                                                                           src="/object/Public/Picture/535e2dd7c7b044679a504215efc4d6b7.gif"
                                                                                                           style=""/><br/>
                        S50 Air</a></li>
                    <!--<li><a href="/product/s40airqpb.html" webtrekkparam="{ct:''}"><img  alt="S40 Air"  src="../Picture/189c43ce28ee4b3c959491246c7ee907.gif" style=""/><br />S40 Air</a></li>-->
                    <li><a href="/product/s40airlxsd.html" webtrekkparam="{ct:'xbsy_dh2_cjds_S40AirL'}"><img
                            alt="S40 Air L" src="/object/Public/Picture/c8044a984fe1438595941f1bcc69f4f4.gif"
                            style=""/><br/>
                        S40 Air L</a></li>
                </ul>
                <div class="tab_detail_box clearfix hidden">
                    <ul>
                        <li class="product_show tab_detail" id="t01">
                            <div class="pb20 pt25 pl100 pr100">
                                <div class="pro_text pl20 left " style="width:430px;">
                                    <div class="pb20 pt20"><a href="/product/max70.html" webtrekkparam="{ct:''}"><img
                                            alt="Max70" src="/object/Public/Picture/dbc524054d314083a16167fc2dc033a8.gif"
                                            style=""/></a></div>
                                    <div class="gray font14 pb20"> 乐视TV·超级电视Max70，你的私家智能影院，双倍性能，1/3价格。
                                        采用70吋原装进口SDP面板，十代线UV2A技术，不闪式3D，画质纯净自然。
                                        高通四核1.7GHz处理器，由富士康精心打造的精湛工艺。
                                        乐视网TV版，享受全网络视频，LetvUI 3.0最好用的智能电视UI系统。
                                        LetvStore拥有最全的应用、视频、游戏。
                                    </div>
                                    <a href="/product/max70.html" webtrekkparam="{ct:'xbsy_dh2_cjds_Max70_ckgd'}"
                                       class="block red_bt_m"><span class="white">查看更多</span></a></div>
                                <div class="right pro_pic pr20 t_l" style="width:400px；"><a href="/product/max70.html"
                                                                                            webtrekkparam="{ct:'xbsy_dh2_cjds_Max70_TP'}"><img
                                        alt="" src="/object/Public/Picture/fedee5f3a7aa43a88ed5f620d126490e.gif" style=""/></a>
                                </div>
                                <div clsdd="clear"></div>
                            </div>
                        </li>
                        <li class="product_show tab_detail" id="t02">
                            <div class="pb20 pl35 pr35">
                                <div class="pb20 t_c pt30"><img alt="X60S"
                                                                src="/object/Public/Picture/256afa9ea1c3437ea78db5c9804c65df.gif"
                                                                style=""/></div>
                                <div class="inline_block pr10" style="width:540px;">
                                    <div class="left pro_pic"><a href="/product/x60s.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_X60S_gsd_TP'}"><img
                                            alt="敢死队·硬汉版" src="/object/Public/Picture/c526f57be2894fa49448b4e447ea7a6a.gif"
                                            style=""/></a></div>
                                    <div class="pro_text left pl20">
                                        <div class=" pb20"><a href="/product/x60s.html" webtrekkparam="{ct:''}"><span
                                                class="dark font18 block pb10">敢死队·硬汉版</span></a> <span
                                                class="gray font12">·  60吋液晶面板；1.7GHz高通四核处理器；<br/>
                      ·  2GB内存，32GB闪存；2.4G&5G双频Wi-Fi；<br/>
                      ·  蓝牙4.0，专属证书、彩色包装；<br/>
                      </span></div>
                                        <a href="/product/x60s.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_X60S_gsd_ckgd'}"><span
                                                class="white">查看更多</span></a></div>
                                </div>
                                <div class="inline_block pl10" style="width:540px;">
                                    <div class="left pro_pic"><a href="/product/x60sqp.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_X60S_qp_TP'}"><img
                                            alt="全配版" src="/object/Public/Picture/1306f969bc15463eb39a21e1ad07e907.gif"
                                            style=""/></a></div>
                                    <div class="pro_text left pl20">
                                        <div class=" pb20"><a href="/product/x60sqp.html"><span
                                                class="dark font18 block pb10">全配版</span></a> <span class="gray font12">·  60吋液晶面板，1.7GHz高通四核处理器；<br/>
                      ·  2GB内存，8GB闪存；2.4G&5G双频Wi-Fi；<br/>
                      ·  蓝牙4.0，全铝无缝机身，富士康完美打造；<br/>
                      </span></div>
                                        <a href="/product/x60sqp.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_X60S_qp_ckgd'}"><span
                                                class="white">查看更多</span></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="product_show tab_detail" id="t03">
                            <div class="pb20 pl35 pr35">
                                <div class="pb20 t_c pt30"><img alt="X50 Air"
                                                                src="/object/Public/Picture/bb610c75a48e4e9ca49ea136dc66c65f.gif"
                                                                style=""/></div>
                                <div class="inline_block pr10" style="width:540px;">
                                    <div class="left pro_pic"><a href="/product/x50airysb.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_X50Air_gl_TP'}"><img
                                            alt="张艺谋《归来》艺术版"
                                            src="/object/Public/Picture/5dd7063270c54967a0ded9cfcfb00714.gif" style=""/></a>
                                    </div>
                                    <div class="pro_text left pl20">
                                        <div class=" pb20"><a href="/product/x50airysb.html"
                                                              webtrekkparam="{ct:''}"><span
                                                class="dark font18 block pb10">张艺谋《归来》艺术版</span></a> <span
                                                class="gray font12">·  InnoLux液晶面板/4000:1对比度；<br/>
                      ·  2G 内存/16G闪存/内置蓝牙4.0/快门式3D；<br/>
                      ·  Mstar6A918四核CPU/Mali450四核GPU；<br/>
                      </span></div>
                                        <a href="/product/x50airysb.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_X50Air_gl_ckgd'}"><span
                                                class="white">查看更多</span></a></div>
                                </div>
                                <div class="inline_block pl10" style="width:540px;">
                                    <div class="left pro_pic"><a href="/product/x50air.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_X50Air_qp_TP'}"><img
                                            alt="全配版" src="/object/Public/Picture/bdb7677b0d4746af9418b8e55d08b34f.gif"
                                            style=""/></a></div>
                                    <div class="pro_text left pl20">
                                        <div class=" pb20"><a href="/product/x50air.html" webtrekkparam="{ct:''}"><span
                                                class="dark font18 block pb10">全配版</span></a> <span class="gray font12">·  InnoLux液晶面板 快门式3D；<br/>
                      ·  第三代魔音系统  2G 内存/8G闪存；<br/>
                      ·  Mstar6A918四核CPU/Mali450四核GPU；<br/>
                      </span></div>
                                        <a href="/product/x50air.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_X50Air_qp_ckgd'}"><span
                                                class="white">查看更多</span></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="product_show tab_detail" id="t04">
                            <div class="pb20 pl35 pr35">
                                <div class="pb20 t_c pt30"><img alt="S50 Air"
                                                                src="/object/Public/Picture/2242139600484550a355f5ba3c8302d6.gif"
                                                                style=""/></div>
                                <div class="inline_block pr10" style="width:540px;">
                                    <div class="left pro_pic"><a href="/product/s50airclb.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_S50Air_Cl_TP'}"><img
                                            alt="C罗·足球版" src="/object/Public/Picture/a160ba58266d4a11bcfa568bf4da0f9e.gif"
                                            style=""/></a></div>
                                    <div class="pro_text left pl20 ply">
                                        <div class=" pb20"><a href="/product/s50airclb.html"
                                                              webtrekkparam="{ct:''}"><span
                                                class="dark font18 block pb10">C罗·足球版</span></a> <span
                                                class="gray font12">·  50吋LG/InnouLux FHD面板<br/>
                      ·  2G内存/16G 闪存/5.9mm金属极窄边框<br/>
                      ·  蓝牙4.0/20W独立低音炮/体感操控<br/>
                      </span></div>
                                        <a href="/product/s50airclb.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_S50Air_Cl_ckgd'}"><span
                                                class="white">查看更多</span></a></div>
                                </div>
                                <div class="inline_block pl10" style="width:540px;">
                                    <div class="left pro_pic"><a href="/product/s50airqpb.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_S50Air_qp_TP'}"><img
                                            alt="全配版" src="/object/Public/Picture/1879d327236447d8b303ac782779dc98.gif"
                                            style=""/></a></div>
                                    <div class="pro_text left pl20 ply">
                                        <div class=" pb20"><a href="/product/s50airqpb.html"
                                                              webtrekkparam="{ct:''}"><span
                                                class="dark font18 block pb10">全配版</span></a> <span class="gray font12">·  50吋LG/InnouLux FHD面板<br/>
                      ·  2G内存/8G闪存/6.9mm 极窄塑胶边框 <br/>
                      ·  4核CPU+4核GPU/体感操控<br/>
                      </span></div>
                                        <a href="/product/s50airqpb.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_S50Air_qp_ckgd'}"><span
                                                class="white">查看更多</span></a></div>
                                </div>
                            </div>
                        </li>
                        <!--<li class="product_show tab_detail" id="t05">
                          <div class="pb20 pl35 pr35">
                            <div class="pb20 t_c pt30"><img  alt="S40 Air"  src="../Picture/d10460f8d96e4232bb37f91b11f84c8e.gif" style=""/></div>
                            <div class="inline_block pr10" style="width:540px;">
                              <div class="left pro_pic"><a href="/product/s40airxsd.html" ><img alt="郭敬明·小时代版" src="../Picture/d338f4521ada479da3a32f23d062822e.gif" style=""></a></div>
                              <div class="pro_text left pl20 ply">
                                <div class=" pb20"> <a href="/product/s40airxsd.html" ><span class="dark font18 block pb10">郭敬明·小时代版</span></a> <span class="gray font12">·  39.5吋 InnoLux  FHD面板/5000:1对比度<br />
                                  ·  2G内存/16G 闪存/蓝牙4.0/USB3.0/ <br />
                                  ·  5.9mm 金属纤薄机身/透明背板<br />
                                  </span> </div>
                                <a href="/product/s40airxsd.html" class="block red_bt_m"><span class="white">查看更多</span></a> </div>
                            </div>
                            <div class="inline_block pl10" style="width:540px;">
                              <div class="left pro_pic"><a href="/product/s40airqpb.html"><img alt="全配版" src="../Picture/b56ae0d6216b4d7fa91c38c710e3dd5e.gif" style=""></a></div>
                              <div class="pro_text left pl20 ply">
                                <div class=" pb20"> <a href="/product/s40airqpb.html"><span class="dark font18 block pb10">全配版</span></a> <span class="gray font12">·  39.5吋 InnoLux  FHD面板/5000:1对比度<br />
                                  ·  4核CPU+4核GPU/2G内存/8G闪存<br />
                                  ·  透明背板/USB3.0<br />
                                  </span> </div>
                                <a href="/product/s40airqpb.html" class="block red_bt_m"><span class="white">查看更多</span></a> </div>
                            </div>
                          </div>
                        </li>-->
                        <li class="product_show tab_detail" id="t06">
                            <div class="pb20 pl35 pr35">
                                <div class="pb20 t_c pt30"><img alt="S40 Air L"
                                                                src="/object/Public/Picture/6ce805e4bcb84eccbbcfd4375277c303.gif"
                                                                style=""></div>
                                <div class="inline_block pr5" style="width:545px;">
                                    <div class="left pro_pic"><a href="/product/s40airlxsd.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_S40AirL_xsd_TP'}"><img
                                            alt="郭敬明·小时代版" src="/object/Public/Picture/7274750e912240d1ba308dfe4b7f1a9c.gif"
                                            style=""/></a></div>
                                    <div class="pro_text left pl20">
                                        <div class=" pb5"><a href="/product/s40airlxsd.html"
                                                             webtrekkparam="{ct:''}"><span
                                                class="dark font18 block pb10">郭敬明·小时代版</span></a> <span
                                                class="gray font12">·  SAMSUNG原装进口40吋高清LED屏幕<br>
                      ·  5000:1对比度，1.5GHz4核CPU， 4核GPU。<br>
                      ·  2G内存，16 G闪存。蓝牙4.0，<br>
                      ·  内置wifi，双收双发双天线。<br>
                      </span></div>
                                        <a href="/product/s40airlxsd.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_S40AirL_xsd_ckgd'}"><span class="white">查看更多</span></a>
                                    </div>
                                </div>
                                <div class="inline_block pl5" style="width:570px;">
                                    <div class="left pro_pic"><a href="/product/s40airl.html"
                                                                 webtrekkparam="{ct:'xbsy_dh2_cjds_S40AirL_qp_TP'}"><img
                                            alt="全配版" src="/object/Public/Picture/d2160a03b817449db047743e4d7b175c.gif"
                                            style=""/></a></div>
                                    <div class="pro_text left pl20 ply">
                                        <div class=" pb5"><a href="/product/s40airl.html" webtrekkparam="{ct:''}"><span
                                                class="dark font18 block pb10">全配版</span></a> <span class="gray font12">·  SAMSUNG原装进口40吋高清LED屏幕<br>
                      ·  1920*1080高分辨率，<br>
                      ·  1.5GHz4核CPU， 4核GPU。2G内存，8 G闪存。<br>
                      ·  内置wifi，双收双发双天线。<br>
                      </span></div>
                                        <a href="/product/s40airl.html" class="block red_bt_m"
                                           webtrekkparam="{ct:'xbsy_dh2_cjds_S40AirL_qp_ckgd'}"><span
                                                class="white">查看更多</span></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="allLeMe" class="all_leme absolute ">
                <ul class="product_list product_tabs">
                    <li><a href="/product/lexiaobao.html" webtrekkparam="{ct:'xbsy_dh2_LeMe_lxb'}"><img alt="乐小宝"
                                                                                                        src="/object/Public/Picture/e4f05e17f4fb4a10ab5caa201f46f391.gif"
                                                                                                        style=""/><br/>
                        乐小宝</a></li>
                    <li><a href="/product/lemexl.html" webtrekkparam="{ct:'xbsy_dh2_LeMe_lyej'}"><img alt="蓝牙耳机"
                                                                                                      src="/object/Public/Picture/78c522573f3249c3aaf5478cbf651bc3.gif"
                                                                                                      style=""/><br/>
                        蓝牙耳机</a></li>

                </ul>
                <div class="tab_detail_box clearfix hidden">
                    <ul>
                        <li class="product_show tab_detail" id="t01">
                            <div class="pb20 pt25 pl100 pr100">
                                <div class="pro_text pl20 left " style="width:430px;">
                                    <div class="pb20 pt20"><a href="/product/lexiaobao.html"
                                                              webtrekkparam="{ct:''}"><img alt="乐小宝"
                                                                                           src="/object/Public/Picture/02bf8829d755437e86834847c6eb25ce.gif"
                                                                                           style=""/></a></div>
                                    <div class="gray font14 pb20">
                                        乐小宝是一款儿童故事光机，能够让父母给家里的孩子讲故事、进行语音对讲、推送乐视亲子的视频，并拥有一支完整的专家团队对内容进行整理推荐，还不伤害孩子的眼睛。帮助父母与孩子回归真正的交流，是全球首款真正的智能亲子硬件。
                                    </div>
                                    <a href="/product/lexiaobao.html" webtrekkparam="{ct:'xbsy_dh2_LeMe_lxb_ckgd'}"
                                       class="block red_bt_m"><span class="white">查看更多</span></a></div>
                                <div class="right pro_pic pr20 t_l" style="width:400px；"><a
                                        href="/product/lexiaobao.html" webtrekkparam="{ct:'xbsy_dh2_LeMe_lxb_pic'}"><img
                                        alt="" src="/object/Public/Picture/5f061db39f6644d39d3f16cd7386f84d.gif" style=""/></a>
                                </div>
                                <div clsdd="clear"></div>
                            </div>
                        </li>
                        <li class="product_show tab_detail" id="t02">
                            <div class="pb20 pt25 pl100 pr100">
                                <div class="pro_text pl20 left " style="width:430px;">
                                    <div class="pb20 pt20"><a href="/product/lemexl.html" webtrekkparam="{ct:''}"><img
                                            alt="蓝牙耳机" src="/object/Public/Picture/c859c5f5e5ab4da8b71b0da3e966efa2.gif"
                                            style=""/></a></div>
                                    <div class="gray font14 pb20">
                                        头带最舒适的“神兽级”蓝牙耳机，能让你深夜看球、玩游戏不打扰家人；与手机连接，降噪技术让通话更清晰；40mm大动圈单元，开放式音腔，音质更出色；更支持26天超长待机。
                                    </div>
                                    <a href="/product/lemexl.html" webtrekkparam="{ct:'xbsy_dh2_LeMe_lyej_ckgd'}"
                                       class="block red_bt_m"><span class="white">查看更多</span></a></div>
                                <div class="right pro_pic pr20 t_l" style="width:400px；"><a href="/product/lemexl.html"
                                                                                            webtrekkparam="{ct:'xbsy_dh2_LeMe_lyej_pic'}"><img
                                        alt="" src="/object/Public/Picture/8aca1671831f4cc991904e0c02a71d6d.gif" style=""/></a>
                                </div>
                                <div clsdd="clear"></div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
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
    function showHideBlock(a, b, g, d, f, c, h, i) {
        var e = null;
        "undefined" == typeof c && (c = "");
        e = "slide" == g ? ["slideDown", "slideUp"] : "fade" == g ? ["fadeIn", "fadeOut"] : ["show", "hide"];
        i = i || 0;
        $(a).unbind("mouseenter").mouseenter(function () {
            clearTimeout(timeOutList[b]);
            timeOutList[a] = setTimeout(function () {
                $(a).addClass(c);
                $(a).siblings().removeClass(c);
                $(b)[e[0]](f, function () {
                    $(this).css("overflow", "visible")
                });
            }, i);
        });
        $(b).unbind("mouseenter").mouseenter(function () {
            $(a).addClass(c);
            clearTimeout(timeOutList[b]);
        });
        $(b).unbind("mouseleave").mouseleave(function () {
            timeOutList[b] = setTimeout(function () {
                $(b)[e[1]](f, function () {
                    $(a).removeClass(c);
                    !!h ? h() : null;
                });
            }, d || 1E3);
        });
        $(a).unbind("mouseleave").mouseleave(function () {
            clearTimeout(timeOutList[a], i);
            timeOutList[b] = setTimeout(function () {
                $(b)[e[1]](f, function () {
                    $(a).removeClass(c);
                    !!h ? h() : null;
                });
            }, d || 1E3);
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
            $("#loginMess").html('<span class="gray">Hi,</span><a rel="nofollow" href="' + _hrefPath + '/user/center/orderList.html" target="_blank" title="' + getCookie("COOKIE_NICKNAME") + '"><span class="pl5 pr5">' + a + '</span></a> <a rel="nofollow" id="logout"><span class="pl5 pr15">[退出]</span></a>');
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
<script type="text/javascript">
    function SlideTabs(opt) {
        this.opt = $.extend({}, this.oriOpt, opt); //合并默认参数与传递参数
        this.container = $("#" + this.opt.id); //最外层容器
        this.curTabIndex = 1; //当前标签
        this.isAnimating = false; //是否有动画方法正在进行中
        this.tabList = this.container.find("ul.product_tabs li"); //标签列表
        this.tabDetails = this.container.find(".tab_detail"); //标签详情列表
        this.init();
    }

    SlideTabs.prototype = {
        oriOpt: {},
        /**
         * 初始化方法
         */
        init: function () {
            var tabfocus = this.slideTab();
            //初始化所有标签和详情的下标
            for (var i = 0; i < this.tabList.length; i++) {
                var tab = $(this.tabList[i]), detail = $(this.tabDetails[i]);

                tab.attr("tab_index", i);
                detail.attr("detail_index", i);
            }
            //标签附上鼠标移入时间
            this.tabList.mouseenter(tabfocus);
        },
        /**
         * 根据鼠标指向移动
         */
        slideTab: function () {
            var _this = this;
            return function () {
                var prevTabWidth = 0, prevTabs;

                $(this).siblings().removeClass("hover");
                $(this).addClass("hover");

                //改变当前标签下标
                _this.curTabIndex = $(this).attr("tab_index");
                prevTabs = _this.container.find(".tab_detail[detail_index=" + _this.curTabIndex + "]").prevAll();

                for (var i = 0; i < prevTabs.length; i++) {
                    prevTabWidth += $(prevTabs[i]).outerWidth();
                }

                if (_this.container.find(".tab_detail_box").css('display') == 'none') {
                    _this.container.find(".tab_detail_box").fadeIn();
                    _this.container.find(".tab_detail_box ul").css('margin-left', -prevTabWidth + "px");
                    return;
                }

                _this.container.find(".tab_detail_box ul").clearQueue().animate({'margin-left': -prevTabWidth + "px"}, 600);
            }
        },
    　　　 　　　　　　
    hideDetail : function () {
        this.container.find(".tab_detail_box").hide();
        this.container.find("ul.product_tabs li").removeClass("hover");
    }
    }

    $(document).ready(function () {
        var allProduct = new SlideTabs({id: "allProduct"});
        showHideBlock("#allProductTab", "#allProduct", "fade", 100, "fast", "hover", function () {
            allProduct.hideDetail();
        }, 200);

        var allTV = new SlideTabs({id: "allTV"});
        showHideBlock("#allTVTab", "#allTV", "fade", 100, "fast", "hover", function () {
            allTV.hideDetail();
        }, 200);

        var allLeMe = new SlideTabs({id: "allLeMe"});
        showHideBlock("#allLeMeTab", "#allLeMe", "fade", 100, "fast", "hover", function () {
            allLeMe.hideDetail();
        }, 200);
        showProductNumInCart();
    });

    function showProductNumInCart() {
        $("#productNumInCart").hide();
        var arrivalId = getCookie("COOKIE_SELECT_PROVINCE_ID") || 1;

        Js.sendData(sendLink.cart + "api/web/query/viewCart.jsonp", "cartType=0&TO_PAY=0&arrivalId=" + arrivalId, function (data) {
            if (data.status == "1") {
                if (data.result && data.result[0] && data.result[0].itemCount) {
                    $("#productNumInCart").html(data.result[0].itemCount).show();
                }
            }
        });
    }
</script>
<block name="main">
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
                                    <li><a class="cur" href="<?php echo U('Goods/headline',array('pid'=>$res['pid']));?>"
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
                                    <li><a class="" href="<?php echo U('Goods/param',array('pid'=>$res['pid']));?>"
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
            <!--概述-->
            <div class="gaishu tabSwichDiv0 tabSwichDiv">
                <section class="max70_head white_bg">
                    <div class="center relative">
                        <div class="right pt5"><a href="/zt/chaoji.html" webtrekkparam="{ct:'Max70_p_tt_cjdscjzc'}"
                                                  target="_blank"><span class="red font14">超级电视的超级之处 >></span></a></div>
                        <div class="clear"></div>
                        <div class="absolute" style="top:50px; left:5px;"><a
                                href="http://bbs.letv.com/thread-458916-1.html"
                                webtrekkparam="{ct:'introduction_max70_king'}" target="_blank"><img alt=""
                                                                                                    src="/object/Public/Picture/e46919b9e90a4f3ab43ceea2e90c1bbe.gif"
                                                                                                    style=""/></a></div>
                        <div class="absolute" style="top:50px; left:128px;"><a href="/zt/singer3.html"
                                                                               webtrekkparam="{ct:'introduction_max70_wsgs'}"
                                                                               target="_blank"><img alt=""
                                                                                                    src="/object/Public/Picture/1a397a5661fd482db959982f6f79560e.gif"
                                                                                                    style=""/></a></div>
                        <div class="section_text left">
                            <div class="title">Max70</div>
                            <div class="slogan">你的私家智能影院 <br/>双倍性能，1/3价格<br/>
                                <span class="font24 gray">全行业同尺寸 销量第一</span> <span class="font14 gray">（中怡康6月份数据）</span>
                            </div>
                            <div class="content pt50">
                                <div class="left icon_dfj">颠覆价</div>
                                <div class="device_price left relative"><span class="rmb">￥</span>8999
                                    <div class="price_intro">硬件全配价格</div>
                                </div>
                                <div class="red font20 left">+</div>
                                <div class="service_price left relative"><span class="rmb">￥</span>980
                                    <div class="price_intro">乐视网TV版 <br/>
                                        24个月服务费
                                    </div>
                                </div>
                                <div class="clear "></div>
                            </div>
                            <div class="pt30 clear">
                                <a class="red_bt_l block " webtrekkparam="{ct:'Max70_gs_buy1'}"
                                   href="/product/product-pid-GWGT701002-n-3.html" target="_blank"><span>立即购买</span></a>
                            </div>
                        </div>
                        <div class="section_pic absolute"><span class="block right font14 pt5 absolute"
                                                                style="left:0px; top:40px;">*摄像头为选购配件</span><img alt=""
                                                                                                                 src="/object/Public/Picture/95c1585d1b484dddac1b4f23887e3ad2.gif"
                                                                                                                 style=""/>
                        </div>
                    </div>
                </section>
                <section class="pro_videos">
                    <ul class="videos_list">
                        <li><a class="txs" video-info="{'vid':'2239114',playType:'pop'}" href="javascript:void(0);"
                               webtrekkparam="{ct:'Max70_gs_sp1'}"> <img alt=""
                                                                         src="/object/Public/Picture/7303566d50b449b0967ebf47afb382ea.gif"
                                                                         style=""/><span class="play_bt"></span><br>

                            <div class="font14">Max 70外观篇</div>
                        </a></li>
                        <li><a class="txs" video-info="{'vid':'20212721',playType:'pop'}" href="javascript:void(0);"
                               webtrekkparam="{ct:'Max70_gs_sp2'}"><img alt=""
                                                                        src="/object/Public/Picture/ab6c5e3b034442e1b249b22f2d078144.gif"
                                                                        style=""/><span class="play_bt"></span><br>

                            <div class="font14">CP2C 2.0 重新定义制造概念篇</div>
                        </a></li>
                        <li><a class="txs" video-info="{'vid':'2239109',playType:'pop'}" href="javascript:void(0);"
                               webtrekkparam="{ct:'Max70_gs_sp3'}"><img alt=""
                                                                        src="/object/Public/Picture/092d771c6634451e8c9ca7427eaba51b.gif"
                                                                        style=""/><span class="play_bt"></span><br>

                            <div class="font14">LetvUI 3.0</div>
                        </a></li>
                        <li><a class="txs" video-info="{'vid':'2205156',playType:'pop'}" href="javascript:void(0);"
                               webtrekkparam="{ct:'Max70_gs_sp4'}"><img alt=""
                                                                        src="/object/Public/Picture/8fc2147681324e8b92386a447acbbd6a.gif"
                                                                        style=""/><span class="play_bt"></span><br>

                            <div class="font14">乐视生态</div>
                        </a></li>
                    </ul>
                </section>
                <section class="fahuo mb50">
                    <div class="center t_c pt65 pb50">
                        <div class="title">发货周期说明</div>
                        <div class="pic pt30">
                            <!--送货周期开始-->
                            <img src="/object/Public/Picture/6c7ef9fabb584f758660cde91281eeec.gif"/>
                            <!--<img  alt=""  src="../Picture/d1302433a4d548b69b80fbd1b1503566.gif" style=""/>-->
                        </div>
                    </div>
                </section>
                <section class="max70_moyin black_bg">
                    <div class="center">
                        <div class="section_text  white right">
                            <div class="title">定制你的私家影院</div>
                            <div class="slogan pt10">无边视野，澎湃低音</div>
                            <div class="content pt30 pb20"><span class="font14 light">
                          采用魔音2.1系统，整体音质强劲出色，<br/>
                          左右声道6个喇叭两组式设计，外加一个4吋低音喇叭，<br/>
                          搭配超大屏幕的24帧影院模式，足不出户，体验私人影院盛宴。<br/></span>
                            </div>
                            <div class="icons pt30">
                                <ul>
                                    <li>
                                        <div class="icon_pic"><img alt=""
                                                                   src="/object/Public/Picture/7804171c5feb402389befb84be6a744d.gif"
                                                                   style=""/></div>
                                        <div class="icon_text"><span class="light">数字影院系统</span></div>
                                    </li>
                                    <li>
                                        <div class="icon_pic"><img alt=""
                                                                   src="/object/Public/Picture/02893283845b4ecfa45157a84d8db2bc.gif"
                                                                   style=""/></div>
                                        <div class="icon_text"><span class="light">杜比音效</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
                <section class="max70_screen white_bg">
                    <div class="center relative">
                        <div class="section_text">
                            <div class="title">70吋超大屏幕<br/>震撼你的双眼</div>
                            <div class="slogan pt20">比60吋面积大30%以上，私家影院体验</div>
                            <div class="content pt30 pb20">
                                采用原装SDP面板，十代线UV²A技术，高穿透率，有效<br>降低电力消耗，绿色节能。不闪式3D和超高清静态对比度，<br>画质纯净自然。
                                极低的响应时间和120Hz倍频技术，画面<br>平滑流畅，并且支持只有在IMAX才能体验到的1080P 24<br>帧影院模式，动态视频无残影。
                            </div>
                            <!--<a href="#" webtrekkparam="{ct:'Max70_gs_pm'}" target="_blank"><span class="red font14">屏幕好在哪 >></span></a>-->
                            <div class="icons pt30">
                                <ul>
                                    <li>
                                        <div class="icon_pic"><img alt=""
                                                                   src="/object/Public/Picture/95832c43380d4970acb77493d2308c67.gif"
                                                                   style=""/></div>
                                        <div class="icon_text">十代线面板</div>
                                    </li>
                                    <!--<li><div class="icon_pic"><img  alt=""  src="../Picture/9ae1596416a8457485c28593cbfdc183.gif" style=""/></div><div class="icon_text">IPS硬屏</div></li>-->
                                    <li>
                                        <div class="icon_pic"><img alt=""
                                                                   src="/object/Public/Picture/748437a81ae849d58ba227775effe0e3.gif"
                                                                   style=""/></div>
                                        <div class="icon_text">176°可视角度</div>
                                    </li>
                                    <li>
                                        <div class="icon_pic"><img alt=""
                                                                   src="/object/Public/Picture/6798e747bb0e46548d0d5d2adc66b192.gif"
                                                                   style=""/></div>
                                        <div class="icon_text">全高清FULL HD</div>
                                    </li>
                                    <div class="clear"></div>

                                    <li>
                                        <div class="icon_pic"><img alt=""
                                                                   src="/object/Public/Picture/0c4e62f6fa64487a8bf5137112dbd4f0.gif"
                                                                   style=""/></div>
                                        <div class="icon_text">LED背光</div>
                                    </li>
                                    <li>
                                        <div class="icon_pic"><img alt=""
                                                                   src="/object/Public/Picture/f7b4c885393b4a579d6ae55dfb8de259.gif"
                                                                   style=""/></div>
                                        <div class="icon_text">超高背频刷新</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="section_pic absolute pt55"><img alt=""
                                                                    src="/object/Public/Picture/bfc169b0b37c4afd8e4826f6596f9982.gif"
                                                                    style=""/></div>
                    </div>
                </section>
                <section class="max70_cpu black_bg">
                    <div class="center">
                        <div class="section_text  white">
                            <div class="title ">极速体验，由芯掌控</div>
                            <div class="slogan pt20">高通骁龙600,四核处理器</div>
                            <div class="content pt20 pb20">
                                智能体验源于内芯，超级电视Max70采用高通骁龙600<br/>
                                (原S4 Prime)1.7GHz处理器，Adreno320 GPU，带您<br/>
                                体验超级电视的速度的超快感，上网、看视频、<br/>
                                玩游戏由您掌控。<br/>
                            </div>
                            <!--<a href="" webtrekkparam="{ct:'Max70_gs_xpxn'}" target="_blank"><span class="red font14">查看强大芯片性能></span></a>-->
                        </div>
                    </div>
                </section>
                <section class="max70_tiyu white_bg">
                    <div class="center t_c">
                        <div class="section_text line_b pb30" style="width:800px; margin:0px auto;">
                            <div class="title pt80 pb30">中国最全的版权影视及体育赛事</div>
                            <div class="content pb30">没有片源的智能电视，就是个显示器。<br>
                                乐视网拥有国内最全的影视版权库及体育赛事播放权，<br>
                                你买的绝非一台电视，而是我们积累10年且不断更新的中国最大互联网电视片源。<br></div>
                            <a href="/zt/chaoji.html" webtrekkparam="{ct:'Max70_gs_letvnr'}" target="_blank"><span
                                    class="red font14">看看超级电视的超级之处 >></span></a>
                        </div>
                        <div class="section_pic pt60 pb40"><img alt=""
                                                                src="/object/Public/Picture/29af2523d2364b259cccea18d6ef2546.gif"
                                                                style=""/></div>
                        <!--图片轮播 开始-->
                        <div class="S50qp_tiyu_lunbo white_bg">
                            <div id="S50qp_gs3">
                                <div class="slide"
                                     style="background:url(/object/Public/images/0fa809897f4c426d9dd635f3a0341dc6.gif) no-repeat top center; height:114px;">
                                    <ul>
                                        <li style="background:url(/object/Public/images/e80b304edb1b443f987954c8f718de7a.gif) no-repeat top center;">
                                            <div class="center"></div>
                                        </li>
                                        <li style="background:url(/object/Public/images/3f2e571709084364824557ec4fe29fcf.gif) no-repeat top center;">
                                            <div class="center"></div>
                                        </li>
                                        <li style="background:url(/object/Public/images/e51318fbe6034dc7b7fa8065e1df5f92.gif) no-repeat top center;">
                                            <div class="center"></div>
                                        </li>
                                    </ul>
                                    <div class="slide_cotrl2" style="display:block;">
                                        <div id="prevBtn" class="pre"></div>
                                        <div id="nextBtn" class="next"></div>
                                    </div>

                                    <div class="slide_cotrl_button slide_cotrl" style="display:none;">
                                        <div class="center"><a class="cur btn_l" webtrekkparam="{ct:''}"
                                                               href="javascript:void(0)">边框</a><a class="btn_m"
                                                                                                  href="javascript:void(0)"
                                                                                                  webtrekkparam="{ct:''}">底座</a><a
                                                class="btn_r" href="javascript:void(0)" webtrekkparam="{ct:''}">呼吸灯</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--图片轮播 结束-->
                        <div class="content pt30">CBA、中超唯一互联网直播商<br>
                            覆盖欧洲四大足球联赛，欧洲篮球、网球、高尔夫等多项体育赛事。
                        </div>
                    </div>
                </section>
                <section class="max70_dizhuo black_bg">
                    <div class="center">
                        <div class="section_text  ">
                            <div class="title ">专属设计,完美缔造</div>
                            <div class="slogan pt20">新云底座,缔造超级电视艺术之美
                            </div>
                            <div class="content pt20 pb20">
                                结合中国传统的剪纸艺术，加入了镂空设计，加强底座稳固的同时，<br/>
                                给予超级电视Max70艺术之美感，使之成为私人空间的艺术品。<br/>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="max70_letvUI white_bg">
                    <div class="center t_c relative">
                        <div class="section_text pt80">
                            <div class="title pt30">最好用的智能电视操作系统<br/><img alt=""
                                                                          src="/object/Public/Picture/08096581929a4eb8835469794d749214.gif"
                                                                          style=""/>LetvUI 3.0 一用就爱上
                            </div>
                            <div class="content pt30">最符合中国用户看电视习惯、基于Android 4.3深度定制的LetvUI智能电视操作系统，<br>
                                吸纳百万用户意见，每周一更新，为超级电视量身定制每一处细节，全心打造中国第一的智能电视体验。<br></div>
                            <!-- <a href="#" webtrekkparam="{ct:'Max70_gs_letvUI3.0'}" target="_blank"><span class="red font14">了解更多 >></span></a>-->
                        </div>
                        <div class="section_pic t_c pt55"><img alt=""
                                                               src="/object/Public/Picture/20e09c2b1e1b406da71333ae369865fa.gif"
                                                               style=""/></div>
                    </div>
                </section>
                <section class="max70_foot white_bg">
                    <div class="center relative">
                        <div class="section_pic absolute pt90"><img alt=""
                                                                    src="/object/Public/Picture/2d6f9237423b4ee686d7e922e1ff9aa8.gif"
                                                                    style=""/></div>
                        <div class="section_text absolute">
                            <div class="title">Max70</div>
                            <div class="slogan">你的私家智能影院<br/>双倍性能，1/3价格</div>
                            <div class="content pt80">
                                <div class="left icon_dfj">颠覆价</div>
                                <div class="device_price left relative"><span class="rmb">￥</span>8999
                                    <div class="price_intro">硬件全配价格</div>
                                </div>
                                <div class="red font20 left">+</div>
                                <div class="service_price left relative"><span class="rmb">￥</span>980
                                    <div class="price_intro">乐视网TV版 <br/>
                                        24个月服务费
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear pt20"><a class="block red_bt_l" webtrekkparam="{ct:'Max70_gs_buy2'}"
                                                       href="/product/product-pid-GWGT701002-n-3.html"
                                                       target="_blank"><span class="white">立即购买</span></a></div>
                        </div>
                    </div>
                </section>
                <section class="max70_user white_bg">
                    <div class="center pt80">
                        <div class="left pl100" style="width:500px;">
                            <div class="section_pic left pr20"><img alt=""
                                                                    src="/object/Public/Picture/7a382279fd1c4c1280aa2056ce781bd7.gif"
                                                                    style=""/></div>
                            <div class="section_text left pb50">
                                <div class="slogan pb10">两倍性能</div>
                                <div class="content">硬件配置、性能是市场主流产品的两倍。<br/>完整生态系统、综合服务性能是市场主流产品<br/>的两倍。</div>
                            </div>
                        </div>
                        <div class="left pl50" style="width:500px;">
                            <div class="section_pic left pr20"><img alt=""
                                                                    src="/object/Public/Picture/976a819bdf1643d1b44f405864dfd920.gif"
                                                                    style=""/></div>
                            <div class="section_text left pb50">
                                <div class="slogan pb10">一半价格</div>
                                <div class="content">按照初期BOM成本定价，不再靠硬件盈利。<br/>无营销成本CP2C去渠道化，全流程直达用户。</div>
                            </div>
                        </div>
                        <div class="clear line_b"></div>
                        <div class="left pt60 pl50 pr50  t_c" style="width:500px;">
                            <div class="section_text pb50 ">
                                <div class="slogan"><span class="red">我不是一台电视 <br/>而是一套完整的大屏互联网生态系统</span></div>
                            </div>
                            <div class="section_pic pb20"><img alt=""
                                                               src="/object/Public/Picture/c8da8e0f211040a9b40656c8ca65ea21.gif"
                                                               style=""/></div>

                        </div>
                        <div class="left pt60 pl50 t_c" style="width:500px;">
                            <div class="section_text pb50">
                                <div class="slogan"><span class="red">开启“CP2C”营销模式 <br/>直达用户</span></div>
                            </div>
                            <div class="section_pic pb20"><img alt=""
                                                               src="/object/Public/Picture/64152cf1fdcb440b974af1481930e9c6.gif"
                                                               style=""/></div>

                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
                <div class="center t_c line_t pt30 pb30"><a webtrekkparam="{ct:'Max70_gs_next'}"
                                                            onclick="$('.uptabSwitch').find('li:eq(1)').trigger('click');"
                                                            href="/product/max70/performance.html"><span
                        class="red font18">继续了解 Max70 超级电视 性能 ></span></a></div>
            </div>

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