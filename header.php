<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
define("THEME_URL",str_replace('//usr','/usr',str_replace($this->options->siteUrl,$this->options->rootUrl.'/',$this->options->themeUrl)));if(!empty(Helper::options()->CDNURL)){$theurl = Helper::options()->CDNURL.'/YoDuCDN/';}else{$theurl = THEME_URL.'/';}define("theurl",$theurl); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="<?php $this->options->charset(); ?>"/>
<meta name="author" content="jrotty,bssf@qq.com">
 <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="x-dns-prefetch-control" content="on"> 
<link rel="dns-prefetch" href="<?php echo theurl; ?>" />
<link rel="dns-prefetch" href="//cdn.v2ex.com" />
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<?php if($this->is('post')||$this->is('page')): ?>
<meta property="og:type" content="blog"/>
<meta property="og:image" content="<?php showThumbnail($this); ?>"/>
<meta property="og:release_date" content="<?php $this->date('Y-m-j'); ?>"/>
<meta property="og:title" content="<?php $this->title(); ?>"/>
<meta property="og:description" content="<?php $this->description() ?>" />
<meta property="og:author" content="<?php $this->author(); ?>"/>
<?php endif; ?>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="theme-color" content="<?php if($this->options->skin && 'red'==$this->options->skin)echo '#F1587E';elseif($this->options->skin && 'purple'==$this->options->skin)echo '#800080';elseif($this->options->skin && 'black'==$this->options->skin)echo '#000000';elseif($this->options->skin && 'blue'==$this->options->skin)echo '#00BDFF';elseif($this->options->skin && 'tea'==$this->options->skin)echo '#795548';else echo '#fff';?>">
<?php if (!empty($this->options->sidebarBlock) && in_array('ucqq', $this->options->sidebarBlock)): ?><meta name="full-screen" content="yes"><meta name="x5-fullscreen" content="true"><?php endif;?>
  <link rel="icon" href="/favicon.ico">
   <?php if(!empty($this->options->CDNURL)): ?><link rel="apple-touch-icon" href="<?php $this->options->CDNURL() ?>/YoDuCDN/images/favicon.png"><?php else: ?>
<link rel="apple-touch-icon" href="<?php echo theurl; ?>images/favicon.png">
<?php endif; ?>
 <!--[if lt IE 9]><style>body{overflow-y: hidden; }</style>
<div class="browsehappy" role="dialog"><a href="http://browsehappy.com/"><img  src="<?php echo theurl; ?>images/hj.png"><br>您的浏览器很滑稽，建议点击滑稽升级您的浏览器！</a></div>
<![endif]-->
<title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')||$this->is('front')): ?>-<?php $this->options->description() ?>
<?php endif; ?></title> 

 <?php 
echo '<link rel="stylesheet" href="'.theurl.'style.css?v='.Yodu_Version.'">';
if (!empty($this->options->jrottytool) && in_array('highlight', $this->options->jrottytool)){ echo'<link rel="stylesheet" href="'.theurl.'js/highlight.css?v='.Yodu_Version.'">';}
if($this->options->skin &&  'hei'==$this->options->skin  || 'tea'==$this->options->skin || 'bai'==$this->options->skin || 'old'==$this->options->skin){echo'<link rel="stylesheet" href="'.theurl.'style-'.$this->options->skin.'.css?v='.Yodu_Version.'">';}
if (!empty($this->options->sidebarBlock) && in_array('card', $this->options->sidebarBlock)){echo'<link rel="stylesheet" href="'.theurl.'style-card.css?v='.Yodu_Version.'">';}
 ?>

<?php if($this->options->skin && 'red'==$this->options->skin): ?> <style>#instantclick-bar{background:#E295A8;}.intro{background-color: #F1587E; }.tx {background: #F1587E;}.header { border: 1px solid #F1587E;background-color: #F1587E;}</style><?php endif; ?><?php if($this->options->skin && 'purple'==$this->options->skin): ?> <style>#instantclick-bar{background:#AF2DAF;}.intro{background-color: #800080; }.tx {background: #800080;}.header { border: 1px solid #800080;background-color: #800080;}</style><?php endif; ?><?php if($this->options->skin && 'black'==$this->options->skin): ?> <style>#instantclick-bar{background:#252525;}.intro{background-color: #000000;}.tx {background: #000000;}.header { border: 1px solid #000000;background-color: #000000;}</style><?php endif; ?>
<?php if ($this->options->diycss): ?><style><?php $this->options->diycss(); ?></style><?php endif; ?>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?><?php $this->options->tongji(); ?>
</head>
<!--                                                                      
                                                                           
     ...             ...                            ...                    
    5MMMh           XMMM;                          XMMM:                   
    3@@@5           A@@@;                          A@@@;                   
    ,;8@MHr       9H@@1;                           &@@@;                   
      ,iX@MAi   3A@@5i      ,AAHHHHA3        SAHHHH#@@@;   ,AAA9   iAAAS   
        ,rA@B&&&@@Sr      ,&A@Msss3@#&S    5&#@3sssB@@@;   :@@@H   s@@@X   
          ;sA@@@9s        ;@@@&   i@@@X    G@@@i   &@@@;   :@@@A   r@@@G   
            8@@@r         :@@@A   r@@@G    8@@@r   A@@@;   :@@@A   r@@@G   
            G@@@s         :@@@A   r@@@G    8@@@r   A@@@;   :@@@A   r@@@G   
            G@@@s         ;@@@&   i@@@X    G@@@i   &@@@;   :@@@&   i@@@G   
            X@@@s         ,9G@#333X@M91    19M@X333#@@@;   ,9G@#333X@@@X   
            h888;            88XXXG8h        18GXXX8888,      88XXXG888h   
                                                                        
-->                                                                    
<body id="menu">