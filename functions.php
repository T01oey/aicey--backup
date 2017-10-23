<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
define("Yodu_name", "Yodu");
define("Yodu_Version", "3.6.2");
function themeConfig($form) { 
 echo '<style>.row{margin:0}#use-intro{margin:8px;margin-bottom:30px;padding:8px;padding-left:20px;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}.message{color:#20af42}.success{color:#20af42}.typecho-head-nav .operate a{padding-top:8px;padding-bottom:8px;border:none;color:#fff}.typecho-head-nav .operate a:hover{background-color:rgba(0,0,0,.05);color:#fff}ul.typecho-option-tabs.fix-tabs.clearfix{background:#1F1F1F;}.col-mb-12{padding:0!important}.typecho-page-title{margin:0;padding:30px;height:70px;background:#292D33;background-size:cover}.typecho-page-title h2{margin:0;color:#fff;font-size:3.28571em}.typecho-option-tabs{padding:0;background:#fff}.typecho-option-tabs a:hover{background-color:rgba(0,0,0,.05);color:rgba(255,255,255,.8)}.typecho-option-tabs a{padding:15px;height:auto;border:none;color:rgba(255,255,255,.6)}li.current{bottom:0;padding:0!important;height:4px;background-color:#FFF}.typecho-option-tabs li.active a,.typecho-option-tabs li.current a{background:0 0}.container{margin:0;padding:0}.body.container{padding:0;min-width:100%!important}.typecho-option-tabs{margin:0}.typecho-option-submit button{float:right;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;background:#00BCD4;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);color:#FFF}.typecho-option{padding:12px 16px;border-radius:3px;background:#fff}.col-mb-12{padding-left:0!important}.typecho-option-submit{background:0 0!important}.typecho-option{float:left}.typecho-option span{margin-right:0}.typecho-option label.typecho-label{margin-top:10px;margin-bottom:20px;padding-bottom:5px;border-bottom:1px solid rgba(0,0,0,.2);font-weight:500;font-size:16px}.typecho-page-main .typecho-option input.text{width:100%}input[type=text],textarea{outline:0;border:none;border-bottom:1px solid rgba(0,0,0,.6);border-radius:0}.typecho-option-submit{position:fixed;right:32px;bottom:32px}@media screen and (max-width:1300px){.typecho-option{margin-bottom:20px!important;width:94%!important}}#typecho-option-item-Github-2,#typecho-option-item-logoUrl-0,#typecho-option-item-weibo-1{margin:8px 1%;padding:8px 2%;width:27.333%;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}#typecho-option-item-skin-3,#typecho-option-item-gravatars-10{margin:8px 1%;padding:8px 2%;width:19%;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}#typecho-option-item-slnum-4{margin:8px 1%;padding:8px 2%;width:18%;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}#typecho-option-item-slimg-5,#typecho-option-item-motx-11{margin:8px 1%;padding:8px 2%;width:45%;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}#typecho-option-item-motx-11{width:69%}

#slimg-0-5{width:100%}#typecho-option-item-InstantClick-6,#typecho-option-item-pinglun-7,#typecho-option-item-ads-13,#typecho-option-item-time-12,#typecho-option-item-tongji-16,#typecho-option-item-goga-17,#typecho-option-item-footerwen-18,#typecho-option-item-diycss-19,#typecho-option-item-CDNURL-20,#typecho-option-item-Enhance-21{margin:8px 1%;padding:8px 2%;width:94%;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}#typecho-option-item-shappid-8,#typecho-option-item-src_add-22,#typecho-option-item-cdn_add-23,#typecho-option-item-shconf-9,#typecho-option-item-sidebarBlock-14,#typecho-option-item-jrottytool-15{margin:8px 1%;padding:8px 2%;width:44%;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}.mini {height: 28px;width:100%;}
select{width:100%}</style>';
echo '<p style="font-size:14px;" id="use-intro">
    <span style="display: block;    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 16px;">感谢您使用 <span style="font-size: 25px;color: #F00;">'.Yodu_name.'</span> 主题  <font color="green">付费版 </font>'.Yodu_Version.'</span>
    <span style="margin-bottom:10px;display:block"><a href="https://qqdie.com/archives/yodu.html#_label3" target="_blank" style="font-weight:bold;">更新历史</a> 
    <a href="http://qqdie.com/archives/yodu-template-strategy.html" style="font-weight:bold;">帮助&支持</a> &nbsp;
  实用插件推荐： <a href="https://plugins.typecho.me/plugins/sticky.html" style="font-weight:bold;">文章置顶</a>，<a href="http://qqdie.com/archives/typecho-yoduplayer.html" style="font-weight:bold;">背景音乐插件</a>    </span>
    </p>';
 //网站LOGO
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('头像地址'), _t('头像地址，不填写默认gravatar邮箱头像'));
    $form->addInput($logoUrl);

    $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL,'http://weibo.com/QQdie', _t('新浪微博地址'), _t('填写你的新浪微博主页地址到菜单目录中'));
    $form->addInput($weibo);

    $Github = new Typecho_Widget_Helper_Form_Element_Text('Github', NULL,'https://github.com/jrotty', _t('Github地址'), _t('Github主页地址'));
    $form->addInput($Github);

 $skin = new Typecho_Widget_Helper_Form_Element_Select('skin', array(
        'blue'=>'胖次蓝',
        'red'=>'姨妈红',
         'purple'=>'基佬紫',
        'black'=>'高冷黑',
        'tea'=>'韵味茶',
         'hei'=>'透明-黑',
        'bai'=>'透明-白',   
        'old' => '初版Yodu皮肤'
    ), 'blue',
    _t('主题皮肤设置'), _t('“透明-白”皮肤手机端不显示'));
    $form->addInput($skin->multiMode());

    $slnum = new Typecho_Widget_Helper_Form_Element_Text('slnum', NULL,'99', _t('随机缩略图数量'), _t('留空默认99'));
    $slnum->input->setAttribute('class', 'mini');
    $form->addInput($slnum->addRule('isInteger', '请填数字'));

 $slimg = new Typecho_Widget_Helper_Form_Element_Select('slimg', array(
        'showon'=>'有图文章显示缩略图，无图文章随机显示缩略图',
        'Showimg' => '有图文章显示缩略图，无图文章只显示一张固定的缩略图',      
        'showoff' => '有图文章显示缩略图，无图文章则不显示缩略图',
        'allsj' => '所有文章一律显示随机缩略图',
        'guanbi' => '关闭所有缩略图显示'
    ), 'showon',
    _t('缩略图设置'), _t('默认选择“有图文章显示缩略图，无图文章随机显示缩略图”'));
    $form->addInput($slimg->multiMode());

 //预加载设置
    $InstantClick = new Typecho_Widget_Helper_Form_Element_Radio('InstantClick',array('1' => _t('默认模式'),'2' => _t('加速模式'),'3' => _t('急速模式'),'4' => _t('关闭预加载')),'1',_t('预加载设置'),_t("<b>默认模式：</b>鼠标点击后开始预加载，优点节省服务器资源，兼容性加好;【推荐】<br><b>加速模式：</b>同加速模式一样，区别就是搜索功能流畅但不支持背景音乐;【推荐】<br><b>急速模式：</b>鼠标移动到某个链接就会进行预加载，优点就是前所未有的快，缺点就是比加速模式还浪费资源，同样不支持背景音乐<br><b>关闭预加载：</b>关闭后，所有与pjax不兼容的代码都可以兼容了，不支持背景音乐"));
    $form->addInput($InstantClick); 

    $pinglun = new Typecho_Widget_Helper_Form_Element_Radio('pinglun',array('1' => _t('原生评论'),'4' => _t('原生评论ajax版'),'3' => _t('使用畅言'),'2' => _t('自定义其他第三方评论')),'1',_t('评论设置'),_t("默认原生评论，如使用畅言，请在下方填写参数，如使用其他第三方评论需要手动往模板disanfang.php里添加第三方评论代码<br><b>【ajax评论】请去模板评论设置处设置将较新的评论显示在前面，如果启用分页，请将第一页作为默认显示，这样显示起来才会没有违和感</b>"));
    $form->addInput($pinglun); 


  $shappid = new Typecho_Widget_Helper_Form_Element_Text('shappid',NULL, NULL,'填写畅言appid', '填写你的畅言appid');
    $form->addInput($shappid);

  $shconf = new Typecho_Widget_Helper_Form_Element_Text('shconf',NULL, NULL,'填写畅言conf', '请在这里填写您的畅言conf参数');
    $form->addInput($shconf);


 $gravatars = new Typecho_Widget_Helper_Form_Element_Select('gravatars', array(
'www.gravatar.com/avatar' => _t('gravatar的www源'),'cn.gravatar.com/avatar' => _t('gravatar的cn源'),'secure.gravatar.com/avatar' => _t('gravatar的secure源'),'sdn.geekzu.org/avatar/' => _t('极客族'),'gravatar.proxy.ustclug.org/avatar/' => _t('中科大[不建议]'),'cdn.v2ex.com/gravatar' => _t('v2ex源'),'dn-qiniu-avatar.qbox.me/avatar' => _t('七牛源[不建议]'),'gravatar.cat.net/avatar' => _t('cat.net源'),
    ), 'cn.gravatar.com/avatar',
    _t('gravatar头像源'), _t('默认https://cn.gravatar.com/avatar'));
    $form->addInput($gravatars->multiMode());


 //评论默认头像
    $motx = new Typecho_Widget_Helper_Form_Element_Text('motx', NULL, '', _t('自定义默认评论头像【非必填】'), _t(' 神秘人物【mm】,小透明【blank】，抽象图形【identicon】，wavatar【wavatar】，小怪物【monsteri】，可以添加【】中的代码设置头像，也可添加自己的图片超链接'));
    $form->addInput($motx);


 //建站时间
    $time = new Typecho_Widget_Helper_Form_Element_Text('time', NULL, '2015/06/06', _t('博客成立时间'), _t('在这里填入博客的成立时间,格式要求，完整如填入“2015/06/06 00:00:00”或者只填写年月日“2015/06/06”。不填则不显示建站时间'));
    $form->addInput($time);
//广告位
$ads = new Typecho_Widget_Helper_Form_Element_Textarea('ads', NULL,NULL,'文章底部显示', _t('可填入html形式广告代码（支持HTML格式，但是js代码可能与预加载冲突，所以最好关闭预加载）'));
$form->addInput($ads);

  //显示设置
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array(
'card' => _t('模板整体风格改为卡片式风格(即加载style-card.css)'),
'fenlei' => _t('侧边栏导航条显示“分类”项'),'guidang' => _t('侧边栏导航条显示“归档”项'),'tags' => _t('侧边栏导航条显示“标签”项'),'topb' => _t('网站底部显示至顶至底按钮'),'bianji' => _t('文章页面显示作者编辑时间'),'readnum' => _t('显示文章/页面阅读次数'),
'zishu' => _t('显示文章/页面字数'),
'bianjii' => _t('显示文章作者身份(编辑等)'),
'qrcode' => _t('文章页面隐藏文章二维码和打赏二维码'),
'ucqq' => _t('移动端uc浏览器和QQ浏览器强制全屏'),
'guantool' => _t('隐藏文章悬浮工具条'),
'gdso' => _t('隐藏时间归档页面搜索功能'),
),
    array('fenlei','guidang','tags','topb'), _t('显示设置'));
    $form->addInput($sidebarBlock->multiMode());
//扩展组件
    $jrottytool = new Typecho_Widget_Helper_Form_Element_Checkbox('jrottytool', 
    array('postml' => _t('开启文章目录树'),
'compress' => _t('HTML压缩功能(代码来自<a href="https://www.linpx.com/p/pinghsu-subject-integration-code-compression.html" target="_blank">linpx</a>，可能导致某插件不兼容)'),
'smjs' => _t('开启平滑滚动(启动后代码处滚动条将消失)'),
'yiyan' => _t('开启一言，文章底部将显示一言(<a href="https://tool.qqdie.com/" target="_blank">近泽酱</a>)'),
'loadsound' => _t('页面每次加载完成发出提示音(images/ls.mp3)'),
'caidan' => _t('开启彩蛋功能[页码OF处]'),
'hjtitle' => _t('开启动态改变title(滑稽images/hj.png)'),
'cnhan' => _t('界面语言全部改为中文'),
'biaoqing' => _t('开启原生评论表情功能'),
'uapd' => _t('开启评论列表浏览器及系统识别功能'),
'highlight' => _t('开启主题默认的highlight代码高亮组件'),
'Prismjs' => _t('兼容群内的Prismjs代码高亮插件[先启动插件再启动该项]'),
'apy' => _t('兼容群内的APlayer音乐播放器插件'),
),
    array('caidan','highlight'), _t('拓展设置'));
    $form->addInput($jrottytool->multiMode());
   //统计代码
$tongji = new Typecho_Widget_Helper_Form_Element_Textarea('tongji', NULL,NULL, _t('统计代码'), _t('填入百度或者谷歌统计代码，只能填写那种不显示文字的统计代码<head>部分
'));
$form->addInput($tongji);

   //首页公告
$goga = new Typecho_Widget_Helper_Form_Element_Textarea('goga', NULL,NULL, _t('公告内容'), _t('这里可以填写首页公告内容，不填则会默认不显示'));
$form->addInput($goga);

   //底部文字
$footerwen = new Typecho_Widget_Helper_Form_Element_Textarea('footerwen', NULL,NULL, _t('底部文字'), _t('这里可以自定义站点底部文字，支持简单的html标签，可以写些备案信息什么的，不填则会默认显示内置的'));
$form->addInput($footerwen);

   //css
$diycss = new Typecho_Widget_Helper_Form_Element_Textarea('diycss', NULL,NULL, _t('自定义css'), _t('这里可以添加自定义css，自定义css可以改变网站样式'));
$form->addInput($diycss);

    $CDNURL = new Typecho_Widget_Helper_Form_Element_Text('CDNURL', NULL, NULL, _t('CDN 地址'), _t("
    新建一个'YoDuCDN' 文件夹,把yodu模板文件夹下的所有子文件夹放进去，然后再把js和css文件放进去, 最后把'YoDuCDN' 上传到到你的 CDN 储存空间根目录下<br />
    填入你的 CDN 地址, 如 <b>http://qqdie.upaiyun.com</b>"));
    $form->addInput($CDNURL);


    $Enhance = new Typecho_Widget_Helper_Form_Element_Text('Enhance', NULL, NULL, _t('高级输入框'), _t("可以使用一些特殊字母或者数字来开启隐藏的某些功能，或者处于测试阶段的功能"));
    $form->addInput($Enhance);



 try{
  $fujian = Typecho_Widget::widget('Widget_Options')->Enhance;
        }catch(Exception $e){
            $fujian = '';
        }


   if(strpos($fujian,'fujian') !== false){
//附件源地址
$src_address = new Typecho_Widget_Helper_Form_Element_Text('src_add', NULL, NULL, _t('替换前地址'), _t('即你的附件存放地址，如http://www.yourblog.com/usr/uploads/'));
$form->addInput($src_address);
//替换后地址
$cdn_address = new Typecho_Widget_Helper_Form_Element_Text('cdn_add', NULL, NULL, _t('替换后'), _t('即你的七牛云存储域名，如http://yourblog.qiniudn.com/'));
$form->addInput($cdn_address);
        
        }

}


// 自定义关键字
function themeFields($layout) {
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('自定义缩略图'), _t('输入缩略图地址(仅文章有效)'));
    $layout->addItem($thumb);
}

/** 输出文章缩略图 */
function showThumbnail($widget)
{ 
   
    // 随机99张缩略图
 if(!empty($widget->widget('Widget_Options')->slnum)){
$n=$widget->widget('Widget_Options')->slnum;}else{$n=99;}
 $rand = rand(1,$n); 
  if(!empty($widget->widget('Widget_Options')->CDNURL)){
    $random = $widget->widget('Widget_Options')->CDNURL. '/YoDuCDN/img/sj/' . $rand . '.jpg'; // 随机缩略图路径
if(Typecho_Widget::widget('Widget_Options')->slimg && 'Showimg'==Typecho_Widget::widget('Widget_Options')->slimg
){
  $random = $widget->widget('Widget_Options')->CDNURL. '/YoDuCDN/img/mr.jpg'; //无图时只显示固定一张缩略图
}


}else{
    $random = $widget->widget('Widget_Options')->themeUrl . '/img/sj/' . $rand . '.jpg'; // 随机缩略图路径
if(Typecho_Widget::widget('Widget_Options')->slimg && 'Showimg'==Typecho_Widget::widget('Widget_Options')->slimg
){
  $random = $widget->widget('Widget_Options')->themeUrl . '/img/mr.jpg'; //无图时只显示固定一张缩略图
}
}

$cai = '';//这里可以添加图片后缀，例如七牛的缩略图裁剪规则，这里默认为空
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
  $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

//如果是内联式markdown格式的图片
  else   if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

 else
if ($attach && $attach->isImage) {

$ctu = $attach->url.$cai;
    } 
else 

if ($widget->tags) {
foreach ($widget->tags as $tag) {

    $ctu = './usr/themes/yodu/img/tag/' . $tag['slug'] . '.jpg';

    if(is_file($ctu))
    {
  if(!empty($widget->widget('Widget_Options')->CDNURL)){
$ctu = $widget->widget('Widget_Options')->CDNURL. '/YoDu/img/tag/' . $tag['slug'] . '.jpg';
	}else{
$ctu = $widget->widget('Widget_Options')->themeUrl . '/img/tag/' . $tag['slug'] . '.jpg';
}
    }
    else
 {
       $ctu = $random;
    }
break;
}
}
else {
$ctu = $random;
}
if(Typecho_Widget::widget('Widget_Options')->slimg && 'showoff'==Typecho_Widget::widget('Widget_Options')->slimg
){
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
if($ctu== $random)
echo '';
else
if($widget->is('post')||$widget->is('page')){
echo $ctu;
}else{
if(!empty($widget->widget('Widget_Options')->CDNURL)){
echo '<div class="index-img"><div class="tutu"><img class="b-lazy" src="'
.$widget->widget('Widget_Options')->CDNURL.
'/YoDuCDN/images/load.gif" data-src="'
.$ctu.
'" itemprop="image" data-no-instant/></div></div>';
	}else{
echo '<div class="index-img"><div class="tutu"><img class="b-lazy" src="'
.$widget->widget('Widget_Options')->themeUrl .
'/images/load.gif" data-src="'
.$ctu.
'" itemprop="image" data-no-instant/></div></div>';
}
}
}else{
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
  if(!$widget->is('post')&&!$widget->is('page')){
if(Typecho_Widget::widget('Widget_Options')->slimg && 'allsj'==Typecho_Widget::widget('Widget_Options')->slimg
){$ctu = $random;}
}
$options = Typecho_Widget::widget('Widget_Options');
$fujian = $options->Enhance;
if(!empty($options->src_add) && !empty($options->cdn_add) && strpos($fujian,'fujian') !== false){
$ctu = str_ireplace($options->src_add,$options->cdn_add,$ctu);
}
echo $ctu;
}
}

/*文章阅读次数含cookie*/
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}

function themeInit($archive)
{
 Helper::options()->commentsMaxNestingLevels = 999;
 Helper::options()->commentsAntiSpam = false;

    if ($archive->is('author')) {
       $archive->parameter->pageSize = 50; // 自定义条数
}
    if ($archive->is('single')&&!$archive->is('page', 'links'))
    {
        $archive->content = image_class_replace($archive->content);
    }
}

function image_class_replace($content)
{

 
  $content = preg_replace('#<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>#',
        '<a$1 href="$2$3"$5 target="_blank">', $content);


$content = preg_replace('#\s+<\/code><\/pre>#',
        '</code></pre>', $content);  // 代码高亮行号显示兼容typecho1.0版本


$content = preg_replace('#{(.*?)\|(.*?)}#',
        '<ruby>$1<rp> (</rp><rt>$2</rt><rp>) </rp></ruby>', $content);

preg_match_all('/\<img.*?src\=\"(.*?)\"[^>]*>/i',$content,$mat);

$cnt = count( $mat[1] );

$content = preg_replace('#<img(.*?)src="([^"]*/)?(([^"/]*)\.[^"]*)"([^>]*?)>#',
        '<div class="figure nocaption fig-100" data-no-instant><a class="fancybox" href="$2$3" $5 rel="external" ><img$1 class="fig-img" src="$2$3" $5>
</a></div>', $content);

 $content = preg_replace('#<p><a(.*?) href="http(s)?\:\/\/www.bilibili.com\/video\/av(.*?)(\/)?(index\_(.*?)\.html)?"(.*?)><\/p>#',
        '<div id="yodu-tv"><iframe src="https://www.bilibili.com/blackboard/player.html?aid=$3&page=$6" scrolling="no" border="0" frameborder="no" framespacing="0"></iframe></div>', $content);


$options = Typecho_Widget::widget('Widget_Options');
$fujian = $options->Enhance;
if(!empty($options->src_add) && !empty($options->cdn_add) && strtolower(md5($fujian))=='f881766500f28ea95a10bb2673bb32db'){
$content = str_ireplace($options->src_add,$options->cdn_add,$content);
}

    return $content;
}



function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);
if (!empty(Typecho_Widget::widget('Widget_Options')->jrottytool) && in_array('cnhan', Typecho_Widget::widget('Widget_Options')->jrottytool)){
$next = '后篇';
}else{
$next = 'NEXT';
}
if ($content) {
$content = $widget->filter($content);
$link = '<a class="btn--one fenx nextright" href="' . $content['permalink'] . '"   data-tooltip="' . $content['title'] . '"> <span class="hide-xs hide-sm text-small mr">' . $next . '</span><i class="iconfont icon-you"></i></a> ';
echo $link;
} else {
$link = '<a class="btn--one fenx nextright disabled" > <span class="hide-xs hide-sm text-small mr">' . $next . '</span><i class="iconfont icon-you"></i></a>';
echo $link;
}
}
 
/**
* 显示上一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql);
 if (!empty(Typecho_Widget::widget('Widget_Options')->jrottytool) && in_array('cnhan', Typecho_Widget::widget('Widget_Options')->jrottytool)){
$previous = '前篇';
}else{
$previous = 'PREVIOUS';
}
if ($content) {
$content = $widget->filter($content);
$link = '<a class="btn--one fenx" href="' . $content['permalink'] . '"  data-tooltip="' . $content['title'] . '"><i class="iconfont icon-zuo"></i> <span class="hide-xs hide-sm text-small ml">' .$previous. '</span></a> ';
echo $link;
} else {
$link = '<a class="btn--one fenx disabled" ><i class="iconfont icon-zuo"></i> <span class="hide-xs hide-sm text-small ml">' .$previous. '</span></a> ';
echo $link;
}
}

//获取评论的锚点链接
function get_comment_at($coid)
{
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
                                     ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href   = '<a href="#comment-' . $parent . '">@' . $author . '</a>';
        echo $href;
    } else {
        echo '';
    }
}
//输出评论内容
function get_filtered_comment($coid){
    $db   = Typecho_Db::get();
    $rs=$db->fetchRow($db->select('text')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $content=$rs['text'];
    echo $content;
}

function  art_count ($cid){
    $db=Typecho_Db::get ();
    $rs=$db->fetchRow ($db->select ('table.contents.text')->from ('table.contents')->where ('table.contents.cid=?',$cid)->order ('table.contents.cid',Typecho_Db::SORT_ASC)->limit (1));
    $text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
    echo mb_strlen($text,'UTF-8');
}

function timesince($older_date,$comment_date = false) {
$chunks = array(
array(86400 , '天'),
array(3600 , '小时'),
array(60 , '分'),
array(1 , '秒'),
);
$newer_date = time();
$since = abs($newer_date - $older_date);

for ($i = 0, $j = count($chunks); $i < $j; $i++){
$seconds = $chunks[$i][0];
$name = $chunks[$i][1];
if (($count = floor($since / $seconds)) != 0) break;
}
$output = $count.$name.'前';

return $output;
}

function compress_html($html_source) {
    $chunks = preg_split('/(<!--<nocompress>-->.*?<!--<\/nocompress>-->|<nocompress>.*?<\/nocompress>|<pre.*?\/pre>|<textarea.*?\/textarea>|<script.*?\/script>)/msi', $html_source, -1, PREG_SPLIT_DELIM_CAPTURE);
    $compress = '';
    foreach ($chunks as $c) {
        if (strtolower(substr($c, 0, 19)) == '<!--<nocompress>-->') {
            $c = substr($c, 19, strlen($c) - 19 - 20);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 12)) == '<nocompress>') {
            $c = substr($c, 12, strlen($c) - 12 - 13);
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 4)) == '<pre' || strtolower(substr($c, 0, 9)) == '<textarea') {
            $compress .= $c;
            continue;
        } else if (strtolower(substr($c, 0, 7)) == '<script' && strpos($c, '//') != false && (strpos($c, "\r") !== false || strpos($c, "\n") !== false)) {
            $tmps = preg_split('/(\r|\n)/ms', $c, -1, PREG_SPLIT_NO_EMPTY);
            $c = '';
            foreach ($tmps as $tmp) {
                if (strpos($tmp, '//') !== false) {
                    if (substr(trim($tmp), 0, 2) == '//') {
                        continue;
                    }
                    $chars = preg_split('//', $tmp, -1, PREG_SPLIT_NO_EMPTY);
                    $is_quot = $is_apos = false;
                    foreach ($chars as $key => $char) {
                        if ($char == '"' && $chars[$key - 1] != '\\' && !$is_apos) {
                            $is_quot = !$is_quot;
                        } else if ($char == '\'' && $chars[$key - 1] != '\\' && !$is_quot) {
                            $is_apos = !$is_apos;
                        } else if ($char == '/' && $chars[$key + 1] == '/' && !$is_quot && !$is_apos) {
                            $tmp = substr($tmp, 0, $key);
                            break;
                        }
                    }
                }
                $c .= $tmp;
            }
        }
        $c = preg_replace('/[\\n\\r\\t]+/', ' ', $c);
        $c = preg_replace('/\\s{2,}/', ' ', $c);
        $c = preg_replace('/>\\s</', '> <', $c);
        $c = preg_replace('/\\/\\*.*?\\*\\//i', '', $c);
        $c = preg_replace('/<!--[^!]*-->/', '', $c);
        $compress .= $c;
    }
    return $compress;
}
/** 获取浏览器信息 */
function getBrowser($agent)
{
    if (preg_match('/MSIE\s([^\s|;]+)/i', $agent, $regs)) {
        $outputer = 'IE浏览器';
    } else if (preg_match('/FireFox\/([^\s]+)/i', $agent, $regs)) {
        $outputer = '火狐浏览器';
    } else if (preg_match('/Maxthon([\d]*)\/([^\s]+)/i', $agent, $regs)) {
        $outputer = '傲游浏览器';
    } else if (preg_match('#SE 2([a-zA-Z0-9.]+)#i', $agent, $regs)) {
        $outputer = '搜狗浏览器';
    } else if (preg_match('#360([a-zA-Z0-9.]+)#i', $agent, $regs)) {
$outputer = '360浏览器';
    } else if (preg_match('/Edge([\d]*)\/([^\s]+)/i', $agent, $regs)) {
        $outputer = 'Edge浏览器';
    } else if (preg_match('/UC/i', $agent)) {
        $outputer = 'UC浏览器';
    } else if (preg_match('/MicroMesseng/i', $agent, $regs)) {
        $outputer = '微信内嵌浏览器';
    }  else if (preg_match('/WeiBo/i', $agent, $regs)) {
        $outputer = '微博内嵌浏览器';
    }  else if (preg_match('/QQ/i', $agent, $regs)||preg_match('/QQBrowser\/([^\s]+)/i', $agent, $regs)) {
        $outputer = 'QQ浏览器';
    } else if (preg_match('/BIDU/i', $agent, $regs)) {
        $outputer = '百度浏览器';
    } else if (preg_match('/LBBROWSER/i', $agent, $regs)) {
        $outputer = '猎豹浏览器';
    } else if (preg_match('/TheWorld/i', $agent, $regs)) {
        $outputer = '世界之窗浏览器';
    } else if (preg_match('/XiaoMi/i', $agent, $regs)) {
        $outputer = '小米浏览器';
    } else if (preg_match('/UBrowser/i', $agent, $regs)) {
        $outputer = 'UC浏览器';
    } else if (preg_match('/mailapp/i', $agent, $regs)) {
        $outputer = 'email内嵌浏览器';
    } else if (preg_match('/2345Explorer/i', $agent, $regs)) {
        $outputer = '2345浏览器';
    } else if (preg_match('/Sleipnir/i', $agent, $regs)) {
        $outputer = '神马浏览器';
    } else if (preg_match('/YaBrowser/i', $agent, $regs)) {
        $outputer = 'Yandex浏览器';
    }  else if (preg_match('/Opera[\s|\/]([^\s]+)/i', $agent, $regs)) {
        $outputer = 'Opera浏览器';
    } else if (preg_match('/MZBrowser/i', $agent, $regs)) {
        $outputer = '魅族浏览器';
    } else if (preg_match('/VivoBrowser/i', $agent, $regs)) {
        $outputer = 'vivo浏览器';
    } else if (preg_match('/Quark/i', $agent, $regs)) {
        $outputer = '夸克浏览器';
    } else if (preg_match('/mixia/i', $agent, $regs)) {
        $outputer = '米侠浏览器';
    } else if (preg_match('/CoolMarket/i', $agent, $regs)) {
        $outputer = '基安内置浏览器';
    } else if (preg_match('/Thunder/i', $agent, $regs)) {
        $outputer = '迅雷内置浏览器';
    } else if (preg_match('/Chrome([\d]*)\/([^\s]+)/i', $agent, $regs)) {
        $outputer = '谷歌浏览器';
    } else if (preg_match('/safari\/([^\s]+)/i', $agent, $regs)) {
        $outputer = 'Safari浏览器';
    } else{
        $outputer = '未知浏览器';
    }
    echo $outputer;
}

/** 获取操作系统信息 */
function getOs($agent)
{
    $os = false;
 
    if (preg_match('/win/i', $agent)) {
        if (preg_match('/nt 6.0/i', $agent)) {
            $os = 'Windows Vista';
        } else if (preg_match('/nt 6.1/i', $agent)) {
            $os = 'Windows 7';
        } else if (preg_match('/nt 6.2/i', $agent)) {
            $os = 'Windows 8';
        } else if(preg_match('/nt 6.3/i', $agent)) {
            $os = 'Windows 8.1';
        } else if(preg_match('/nt 5.1/i', $agent)) {
            $os = 'Windows XP';
        } else if (preg_match('/nt 10.0/i', $agent)) {
            $os = 'Windows 10';
        } else{
            $os = 'Windows';
        }
    } else if (preg_match('/android/i', $agent)) {
if (preg_match('/android 8/i', $agent)) {
        $os = 'Android O';
    }
else if (preg_match('/android 7/i', $agent)) {
        $os = 'Android N';
    }
else if (preg_match('/android 6/i', $agent)) {
        $os = 'Android M';
    }
else if (preg_match('/android 5/i', $agent)) {
        $os = 'Android L';
    }
else{
        $os = 'Android';
}
    }
 else if (preg_match('/ubuntu/i', $agent)) {
        $os = 'Ubuntu';
    } else if (preg_match('/linux/i', $agent)) {
        $os = 'Linux';
    } else if (preg_match('/iPhone/i', $agent)) {
        $os = 'iPhone OS';
    } else if (preg_match('/mac/i', $agent)) {
        $os = 'Mac OS X';
    } else if (preg_match('/unix/i', $agent)) {
        $os = 'Unix';
    } else if (preg_match('/symbian/i', $agent)) {
        $os = 'Nokia SymbianOS';
    } else {
        $os = '未知系统';
    }
    echo $os;
}
?>