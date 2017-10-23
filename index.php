<?php
/**
 * <font color="#c3d825">有毒，优读，有读，</font><font color="#83ccd2">有毒是因为这是一个代码全是我自己弄的模板，可能会有很大的问题；</font><font color="#e198b4">优读是想让自己能够更好的阅读别人的一些优秀文章；</font><font color="#aacf53">有读是希望更多的人能够阅读更多的书籍作品来积累内含。</font>
 * 
 * @package <font color="red">Yodu</font>
 * @author T01oey'
 * @version 3.6.2 
 * @link https://aicey.net
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
  <?php $this->need('header.php'); ?> <?php $this->need('sidebar.php');?>

<?php if($this->is('index')||$this->is('front')): ?><?php if ($this->options->goga): ?><div class="intro" id="intro">公告<br><span><?php $this->options->goga(); ?></span></div><?php endif; ?> <?php else: ?> 
<div class="intro" id="intro"><?php $this->archiveTitle(array(
'category'=>_t(' %s '),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ''); ?>
<?php if($this->is('category')){echo '<br><span>'.$this->getDescription().'</span>';} ?>
</div>
<?php endif; ?>
<article><?php if ($this->have()): ?><?php while($this->next()): ?>
<div class="post">
<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?><a href="<?php $this->permalink() ?>" >
<div class="index-img">
<div class="tutu">
<img class="b-lazy"
	 src="<?php echo theurl; ?>images/load.gif"
	 data-src="<?php showThumbnail($this); ?>" alt="<?php $this->excerpt(90, '...'); ?>" itemprop="image" data-no-instant/>
                </div></div></a>

        <?php endif; ?>
        <?php endif; ?>

<h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title(); ?></a>
</h1>
<?php if (!empty($this->options->sidebarBlock) && !in_array('card', $this->options->sidebarBlock)): ?> 
<div class="meta">
 <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i'); ?>"> <?php $this->date(); ?> 	
    </time><span>in </span>
   <a class="category-link"><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a>
 <?php if (!empty($this->options->sidebarBlock) && in_array('readnum', $this->options->sidebarBlock)): ?><span>read (<?php get_post_view($this) ?>)</span><?php endif;?> 
   <?php if (!empty($this->options->sidebarBlock) && in_array('zishu', $this->options->sidebarBlock)): ?><span><?php echo art_count($this->cid); ?>汉字</span><?php endif;?><?php if (!empty($this->options->sidebarBlock) && in_array('bianjii', $this->options->sidebarBlock)): ?><span style="margin-left: 6px;font-size: 12px;color: #fff;background: pink;border-radius: 2px;padding: 0 3px;box-shadow: 0 0 8px pink;opacity: .8;display: inline-block;margin: 0 5px;"><?php switch ($this->author->group) {case 'administrator':_e('站长');break;case 'editor': _e('特约编辑');break; default: break;} ?><?php $this->author(); ?></span><?php endif;?>

<?php if($this->user->hasLogin()):?>
<code class="notebook">
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">编辑</a></code>
<?php endif;?>
</div>
<?php endif;?>
<div class="content">
<?php if ($this->fields->lock): ?>文章已加密，请打开文章输入密码观看内容。
 <?php else: ?><?php $this->excerpt(140, '...'); ?>
<?php endif; ?>
<p class="more"> <a  href="<?php $this->permalink() ?>" >阅读全文</a></p>
</div>

<?php if (!empty($this->options->sidebarBlock) && in_array('card', $this->options->sidebarBlock)): ?> 
<div class="meta"><span class="icon-calendar"></span>
 <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i'); ?>"><?php $this->date(); ?></time>

<span class="icon-tags"></span>
   <a class="category-link"><?php $this->category(',', true, '木有分类或者该分类已被删除'); ?></a>

 <?php if (!empty($this->options->sidebarBlock) && in_array('readnum', $this->options->sidebarBlock)): ?>
<span class="icon-xin"></span>&nbsp;<span>read (<?php get_post_view($this) ?>)</span><?php endif;?> 
<span class="xuyin">
   <?php if (!empty($this->options->sidebarBlock) && in_array('zishu', $this->options->sidebarBlock)): ?><span class="icon-xie"></span>&nbsp;<span><?php echo art_count($this->cid); ?>汉字</span><?php endif;?><?php if (!empty($this->options->sidebarBlock) && in_array('bianjii', $this->options->sidebarBlock)): ?><span style="margin-left: 6px;font-size: 12px;color: #fff;background: pink;border-radius: 2px;padding: 0 3px;box-shadow: 0 0 8px pink;opacity: .8;display: inline-block;margin: 0 5px;"><?php switch ($this->author->group) {case 'administrator':_e('站长');break;case 'editor': _e('特约编辑');break; default: break;} ?><?php $this->author(); ?></span><?php endif;?>

<?php if($this->user->hasLogin()):?>
<code class="notebook">
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">编辑</a></code>
<?php endif;?>
</span>
</div>

<?php endif;?>
</div>

<?php endwhile; ?>
<nav class="page">
<?php if (!empty($this->options->jrottytool) && in_array('cnhan', $this->options->jrottytool)): ?>

 <?php $this->pageLink('<xt class="btn--two"><i class="iconfont icon-zuo text-base mr"></i><span>上一页</span></xt>'); ?>
<?php $this->pageLink('<xt class="btn--two"><span>下一页</span><i class="iconfont icon-you text-base ml"></i></xt>','next'); ?><div class="page-right">页码
<?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> <span <?php if (!empty($this->options->jrottytool) && in_array('caidan', $this->options->jrottytool)): ?> onclick="$.Eggs()"<?php endif; ?>>/</span> <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></div>

<?php else: ?>
 <?php $this->pageLink('<xt class="btn--two"><i class="iconfont icon-zuo text-base mr"></i><span>NEWER</span></xt>'); ?>
<?php $this->pageLink('<xt class="btn--two"><span>OLDER</span><i class="iconfont icon-you text-base ml"></i></xt>','next'); ?>
<?php if($this->_currentPage>1): ?>
<div class="page-right">PAGE
<?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> <span <?php if (!empty($this->options->jrottytool) && in_array('caidan', $this->options->jrottytool)): ?> onclick="$.Eggs()"<?php endif; ?>>OF</span> <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></div>
<?php endif; ?>
<?php endif; ?>
</nav>
 <?php else: ?>
<?php if ($this->is('category')) : ?>该分类下没有任何文章。<?php else: ?><?php if ($this->is('tag')) : ?>该标签下没有任何文章。<?php else: ?>暂无与之相关文章<?php endif; ?><?php endif; ?><?php endif; ?>
</article>


<?php $this->need('footer.php');?>