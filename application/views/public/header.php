<div class="top"> 
   <div class="top-box"> 
    <div class="web-value">
     欢迎访问音响安装网站！
    </div> 
    <div class="top-search">
     <form action="/search" method="post"> 
      <input name="searchkey" size="18" value="搜索关键词" onclick="this.value=''" id="searchquery" /> 
      <button type="submit" value="搜索" class="formbutton pointer" id="searchbutton"><i class="fa fa-search"></i></button>
      <input type="hidden" name="formToken" value="6666cd76f96956469e7be39d750cc7d9_a6852d417edd910684694d89e6952dd3" />
     </form> 
    </div> 
   </div> 
  </div> 
  <div class="header-bg"> 
   <div id="header">
    <div id="logo">
     <a href="/" title="深圳音响有限公司网站模板"> <img src="http://demo15-3.kd200.com/i2880004158/Upload/cn/logo/201707/BfEzvFEkbMHSNPDPznU268ciCbL7UnWh.png" alt="深圳音响有限公司网站模板" /></a> 
    </div> 
    <div class="clear"></div> 
   </div>
   <div id="nav"> 
    <ul class="menu"> 
     <li class="m m1"><a href="/sound">首页</a></li> 
     <li class=" m m2"><a href="<?php echo site_url('about') ?>" class="has_submenu">关于我们</a> 
      <ul class="menu-sub">
       <i class="fa fa-caret-up"></i>
       <li><a href="/about/" title="公司介绍">公司介绍</a></li>
       <li><a href="/qi-ye-wen-hua/" title="企业文化">企业文化</a></li>
       <li><a href="/rong-yu-zi-zhi/" title="荣誉资质">荣誉资质</a></li>
      </ul></li>
     <li class=" m m3"><a href="<?php echo site_url('product') ?>" class="has_submenu">产品展示</a>
      <ul class="menu-sub">
       <i class="fa fa-caret-up"></i>
       <li><a href="/chan-pin-zhan-shi/mi-ni-yin-xiang/" title="迷你音响">迷你音响</a></li>
       <li><a href="/chan-pin-zhan-shi/jia-ting-ying-yuan/" title="家庭影院">家庭影院</a></li>
       <li><a href="/chan-pin-zhan-shi/hui-yin-bi-soundbar/" title="回音壁/Soundbar">回音壁/Soundbar</a></li>
       <li><a href="/chan-pin-zhan-shi/hifi-zhuan-qu/" title="Hi-Fi专区">Hi-Fi专区</a></li>
       <li><a href="/chan-pin-zhan-shi/gong-fang/" title="功放">功放</a></li>
      </ul></li>
     <li class=" m m4"><a href="<?php echo site_url('news') ?>" class="has_submenu">新闻中心</a>
      <ul class="menu-sub">
       <i class="fa fa-caret-up"></i>
       <li><a href="/xin-wen-zhong-xin/gong-si-xin-wen/" title="公司新闻">公司新闻</a></li>
       <li><a href="/xin-wen-zhong-xin/xing-ye-xin-wen/" title="行业新闻">行业新闻</a></li>
      </ul></li>
     <li class=" m m5"><a href="<?php echo site_url('cases') ?>" class="has_submenu">工程案例</a>
      <ul class="menu-sub">
       <i class="fa fa-caret-up"></i>
       <li><a href="/gong-cheng-an-li/qiao-liang-led-deng/" title="视频监控工程案例">视频监控工程案例</a></li>
       <li><a href="/gong-cheng-an-li/da-xia-da-ting-led-an-li/" title="周界电子围栏工程案例">周界电子围栏工程案例</a></li>
       <li><a href="/gong-cheng-an-li/gong-si-qian-tai-led-an-li/" title="智能门禁系统工程案例">智能门禁系统工程案例</a></li>
      </ul></li>
     <li class=" m m6"><a href="<?php echo site_url('contact') ?>">联系我们</a></li>
    </ul>
    <div class="clear"></div>
   </div>
  </div>
  <div id="banner">
   <div id="banner_slide1" class="cwin_class cwin_class_banner" style="margin:0 auto;width:100%;height:480px; "> 
    <div id="banner_cwin_box1"> 
     <ul id="banner_cwin_content1">
      <li style="width:100%;height:480px; background:url(http://demo15-3.kd200.com/i2880004158/Upload/cn/slice/201707/FRQHZotHxTb0dvLxoaK5rubjDJXxvSRm.jpg) center top no-repeat;background-size:cover;"></li>
      <li style="width:100%;height:480px; background:url(http://demo15-3.kd200.com/i2880004158/Upload/cn/slice/201707/StShc7fMUqdCqdPhJj0CUyVICQQKtJNG.jpg) center top no-repeat;background-size:cover;"></li>
     </ul>
     <div class="clear"></div>
    </div>
    <div class="cwin_tab_page" id="banner_cwin_tab_page1">
     <a href="javascript:;">1</a>
     <a href="javascript:;">2</a>
    </div>
    <div class="cwin_triggers" id="banner_cwin_triggers1"> 
     <a class="prev" id="banner_cwin_prev1" href="javascript:void(0);"><b class="corner"></b><span>&lt;</span><b class="corner"></b></a> 
     <a class="next" id="banner_cwin_next1" href="javascript:void(0);"><b class="corner"></b><span>&gt;</span><b class="corner"></b></a> 
    </div>
   </div>
   <script>
   $(function(){var object1 = {effect:"left",titCell:"#banner_cwin_tab_page1 a",prevCell:"#banner_cwin_prev1",nextCell:"#banner_cwin_next1",trigger:"click",mainCell:"#banner_cwin_content1",interTime:5000,delayTime:500,autoPlay:true};var object2 = window.banner_slide1Option;if(typeof(object2) === "object"){$.extend(true, object1, object2);};$("#banner_slide1").slide(object1);

    //选中
    var url=window.location.href;
    var str=url.substring(url.lastIndexOf('/')+1);
    switch(str.split('.')[0]) {
      case 'about':
        $('.m2').addClass('selected on').siblings().removeClass('selected on');
        break;
      case 'product':
       $('.m3').addClass('selected on').siblings().removeClass('selected on');
       break;
      case 'news':
       $('.m4').addClass('selected on').siblings().removeClass('selected on');
       break;
      case 'cases':
       $('.m5').addClass('selected on').siblings().removeClass('selected on');
       break;
      case 'contact':
       $('.m6').addClass('selected on').siblings().removeClass('selected on');
       break;
      default :
      
        $('.m1').addClass('selected on').siblings().removeClass('selected on');
        break;
    }

   });</script>
  </div>