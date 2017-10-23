<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;$this->need('header.php'); ?> 

  <?php $this->need('sidebar.php');?>
            
        
   <article>
<div id="post" class="post">
<h1 class="title">404Page Not Found</h1><div class="content">
<p>页面不存在或被管理员删除， <span id="totalSecond">3</span>秒后自动返回首页</p>
<script language="javascript" type="text/javascript">
<!--
    var second = document.getElementById('totalSecond').textContent;
    if (navigator.appName.indexOf("Explorer") > -1)  //判断是IE浏览器还是Firefox浏览器，采用相应措施取得秒数
    {
        second = document.getElementById('totalSecond').innerText;
    } else
    {
        second = document.getElementById('totalSecond').textContent;
    }
    setInterval("redirect()", 1000);  //每1秒钟调用redirect()方法一次
    function redirect()
    {
        if (second < 0)
        {
            location.href = '<?php $this->options->siteUrl(); ?>';
        } else
        {
            if (navigator.appName.indexOf("Explorer") > -1)
            {
                document.getElementById('totalSecond').innerText = second--;
            } else
            {
                document.getElementById('totalSecond').textContent = second--;
            }
        }
    }
-->
</script>
</div>
</div>
</article> 
<?php $this->need('footer.php');?>