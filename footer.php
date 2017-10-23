<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?> 
<footer id="footer" class="footer">
 <?php if ($this->options->time){ ?><span>博客已萌萌哒运行</span><span id=span_dt_dt></span><?php };?>
<br>© <?php echo date('Y'); ?>&nbsp;由&nbsp;<a target="_blank" href="http://typecho.org">Typecho</a> 强力驱动.Theme by <a target="_blank" id="cpy" href="https://aicey.net"><?php echo Yodu_name; ?></a><?php if ($this->options->footerwen): ?><?php $this->options->footerwen(); ?><?php endif; ?> 
</footer>
</div>
<?php if (!empty($this->options->sidebarBlock) && !in_array('guantool', $this->options->sidebarBlock)): ?><?php if($this->is('post')||$this->is('page')&&!$this->is('page', 'archives')&&!$this->is('page', 'categories')&&!$this->is('page', 'tags')): ?>
<div id="bottom-bar" class="bottom-post-bar" >
<?php thePrev($this); ?>   <?php theNext($this); ?>
<div class="page-right fenxiang bar-two" id="fenxiang">
<a id="google" class="btn--one two" href="#comments" data-no-instant><i class="iconfont icon-comment"></i></a>
<a id="qqkj" class="btn--one two" target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&site=<?php $this->options->title(); ?>/&pics=<?php showThumbnail($this); ?>" data-tooltip="分享至QQ空间"><i class="iconfont icon-qqkj"></i></a>
<a id="sina" class="btn--one two" target="_blank" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>/&appkey=<?php $this->options->title(); ?>/&title=<?php $this->title() ?>&pic=<?php showThumbnail($this); ?>" data-tooltip="分享至新浪微博"><i class="iconfont icon-weibo"></i></a>
<a id="qq" class="btn--one two" target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ?>" data-tooltip="分享至谷歌"><i class="iconfont icon-guge"></i></a>
</div>
 </div> 
<?php endif; ?><?php endif; ?> 
<?php if (!empty($this->options->jrottytool) && in_array('caidan', $this->options->jrottytool)): ?><div id="lala" style="display: none;"><div class="anan" onclick="$.Egg()">&#x7AD9;&#x5185;&#x2510;(´-&#xFF40;)&#x250C;&#x7EDF;&#x8BA1;<br>&#x535A;&#x5BA2;&#xFF1A;&#x5206;&#x7C7B;<strong><?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?><?php $stat->categoriesNum() ?></strong>&#x4E2A;&#xFF0C;&#x9875;&#x9762;<strong><?php $stat->publishedPagesNum() ?></strong>&#x4E2A;&#xFF0C;&#x6587;&#x7AE0;<strong><?php $stat->publishedPostsNum() ?></strong>&#x7BC7;&#x3002;&#x6A21;&#x677F;&#xFF1A;&#x5F53;&#x524D;&#x6A21;&#x677F;<?php echo Yodu_name; ?>&#xFF0C;&#x7248;&#x672C;<?php echo Yodu_Version; ?></div></div><?php endif; ?>
</div></div>


  <?php 
if (!empty($this->options->sidebarBlock) && in_array('topb', $this->options->sidebarBlock)){echo ' <div id="leimu"><img src="'.theurl.'images/a.png" alt="雷姆" onmouseover="this.src=\''.theurl.'images/b.png\'" onmouseout="this.src=\''.theurl.'images/a.png\'" id="audioBtn">
</div><div id="lamu"><img src="'.theurl.'images/c.png" alt="拉姆" onmouseover="this.src=\''.theurl.'images/d.png\'" onmouseout="this.src=\''.theurl.'images/c.png\'" id="audioBtn">
</div>';
}

echo '<script src="'.theurl.'js/jquery.js?v='.Yodu_Version.'" data-no-instant></script><script src="'.theurl.'js/jquery.fancybox.js?v='.Yodu_Version.'" type="text/javascript"></script><script src="'.theurl.'js/jquery.fancybox-thumbs.js?v='.Yodu_Version.'" type="text/javascript"></script><script src="'.theurl.'load.js?v='.Yodu_Version.'"></script>';

if (!empty($this->options->jrottytool) && in_array('highlight', $this->options->jrottytool)){echo '<script src="'.theurl.'js/highlight.js?v='.Yodu_Version.'"></script>';}

if (!empty($this->options->jrottytool) && in_array('yiyan', $this->options->jrottytool)){echo '<script src="'.theurl.'js/yiyan.js?v='.Yodu_Version.'"></script>';}

$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
if(!strpos($agent, 'iphone') && !strpos($agent, 'ipad') && !strpos($agent, 'mac') && !empty($this->options->jrottytool) && in_array('smjs', $this->options->jrottytool)){echo '<script src="'.theurl.'js/sm.js?v='.Yodu_Version.'" data-no-instant></script><style>article pre {max-height: none;}</style>';}

if (!empty($this->options->jrottytool) && in_array('hjtitle', $this->options->jrottytool)){echo '<script src="'.theurl.'js/hj.js?v='.Yodu_Version.'"></script>';}

if ($this->options->pinglun == '4'){
echo '<script src="'.theurl.'ajax.js?v='.Yodu_Version.'"></script>';}

if ($this->options->InstantClick != '4'){
echo '<script src="'.theurl.'js/instantclick.min.js?v='.Yodu_Version.'" data-no-instant></script>';
}
 ?>

<script data-no-instant>
 <?php if ($this->options->time){ ?>
function show_date_time(){window.setTimeout("show_date_time()",1e3);var BirthDay=new Date("<?php $this->options->time();?>"),today=new Date,timeold=today.getTime()-BirthDay.getTime(),msPerDay=864e5,e_daysold=timeold/msPerDay,daysold=Math.floor(e_daysold),e_hrsold=24*(e_daysold-daysold),hrsold=Math.floor(e_hrsold),e_minsold=60*(e_hrsold-hrsold),minsold=Math.floor(60*(e_hrsold-hrsold)),seconds=Math.floor(60*(e_minsold-minsold));span_dt_dt.innerHTML=daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";}
show_date_time();<?php };?>
</script><?php if ($this->options->InstantClick == '4'): ?><?php else: ?>
<script data-no-instant><?php if (!empty($this->options->jrottytool) && in_array('apy', $this->options->jrottytool)): ?> if (!window.audios) {audios = [];for (var i = 0; i < APlayers.length; i++) {audios[i] = APlayers[i].audio;}}<?php endif; ?>
InstantClick.on('change', function(isInitialLoad) {
 if (isInitialLoad === false) {
<?php if (!empty($this->options->jrottytool) && in_array('apy', $this->options->jrottytool)): ?>var len = APlayerOptions.length;for(var i=0;i<len;i++){if(document.getElementById('player' + APlayerOptions[i]['id'])) {APlayers[i] = new APlayer({element: document.getElementById('player' + APlayerOptions[i]['id']),narrow: false,preload: APlayerOptions[i]['preload'],mutex: APlayerOptions[i]['mutex'],autoplay: APlayerOptions[i]['autoplay'],showlrc: APlayerOptions[i]['showlrc'],music: APlayerOptions[i]['music'],theme: APlayerOptions[i]['theme']});}} for (var i = 0; i < APlayers.length; i++) {audios.push(APlayers[i].audio);}for(var i = 0; i < audios.length; i++) {if(audios[i]){audios[i].pause()}};<?php endif; ?>
    if (typeof MathJax !== 'undefined'){MathJax.Hub.Queue(["Typeset",MathJax.Hub]);}
    if (typeof prettyPrint !== 'undefined'){prettyPrint();}
    if (typeof _hmt !== 'undefined'){_hmt.push(['_trackPageview', location.pathname + location.search]);}  
    if (typeof ga !== 'undefined'){ga('send', 'pageview', location.pathname + location.search);}  
<?php if (!empty($this->options->jrottytool) && in_array('Prismjs', $this->options->jrottytool)): ?>    if (typeof Prism !== 'undefined') {<?php  if (Helper::options()->plugin('Prismjs')->showln): ?>
var pres = document.getElementsByTagName('pre');
                for (var i = 0; i < pres.length; i++){
                    if (pres[i].getElementsByTagName('code').length > 0)
                        pres[i].className  = 'line-numbers';}<?php endif; ?>
Prism.highlightAll(true,null);
}<?php endif; ?>
<?php if ($this->options->pinglun == '3'): ?>if($("#SOHUCS").length==1){window.changyan = undefined;window.cyan = undefined;
$.getScript("https://changyan.sohu.com/upload/changyan.js", function(){window.changyan.api.config({appid: "<?php $this->options->shappid();?>",conf: "<?php $this->options->shconf();?>"});});}<?php endif; ?>
<?php if (!empty($this->options->jrottytool) && in_array('loadsound', $this->options->jrottytool)): ?>var audio = new Audio("<?php echo theurl; ?>images/ls.mp3");audio.volume = 0.2;audio.play();<?php endif; ?>
  }
});
<?php if ($this->options->InstantClick == '2'): ?>InstantClick.init(100);<?php else: ?>
<?php if ($this->options->InstantClick == '3'): ?>InstantClick.init();<?php else: ?>
InstantClick.init('mousedown');<?php endif; ?><?php endif; ?>
</script><?php endif; ?>
<?php if(strpos(Typecho_Widget::widget('Widget_Options')->Enhance,'-w') !== false){$this->need('js/welcome.php');} ?>
<?php $this->footer(); ?>
</body>
</html>
<?php if (!empty($this->options->jrottytool) && in_array('compress', $this->options->jrottytool)): ?><?php $html_source = ob_get_contents(); ob_clean(); print compress_html($html_source); ob_end_flush(); ?><?php endif;?>