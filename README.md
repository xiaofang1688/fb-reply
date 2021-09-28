<strong>下载地址在原文下方！</strong>

最近自己手下了两个版本的插件，一个是评论后存储到数据库通过读取数据库的原理。另外一个是通过wordpress函数wp_insert_comment评论后的钩子触发动作的原理。

&nbsp;

本插件<strong>（fb-reply）</strong>，支持将文章页面下方的评论区被访客评论后，显示作者的隐藏内容。作者可以吧自己分享的百度网盘链接放到隐藏内容这里，提高网站与粉丝粘度以及互动程度！

&nbsp;

<strong>使用教程：</strong>

很简单，安装后插件后，在写文章页面添加  <strong>短代码         [reply]您要隐藏的内容[/replay] </strong>   即可!

<img src="https://www.fang1688.cn/wp-content/uploads/2021/09/b9afb743e7d3e5765bf4a7ad1bc62760.png" />

&nbsp;

发布文章后显示下图：

<img src="https://www.fang1688.cn/wp-content/uploads/2021/09/6e561a6b12b84c4259b1db2608dab17d.png" />

&nbsp;

评论后显示如下图：

<img src="https://www.fang1688.cn/wp-content/uploads/2021/09/81be446157b88b9ec55e8d4ded72f6a9.png" />

&nbsp;

<img src="https://www.fang1688.cn/wp-content/uploads/2021/09/96af87814d691fa27c9d2f2e22138c8a.png" />

&nbsp;

评论后，之前您隐藏的内容显示出来了！你可以放入你的蓝奏云，网盘地址作为评论后可见内容！

&nbsp;

<img src="https://www.fang1688.cn/wp-content/uploads/2021/09/2cd3bf88d92ffa04e0a7d24e8485d450.png" />

关于如何修改上图的提示文字。请在依次打开    wordpress根目录-&gt;wp-content-&gt;plugins-&gt;fb-reply-&gt;fb-reply.php

打开fb-reply.php  这个文件修改以下代码即可：
<pre>extract(shortcode_atts(array("notice" =&gt; '&lt;div class="reply-to-read"&gt;&lt;p&gt;温馨提示：此处内容需要&lt;a href="#respond" title="评论本文"&gt;评论本文&lt;/a&gt;后刷新页面才能查看。&lt;/p&gt;&lt;/div&gt;'), $atts));</pre>
&nbsp;

提示如果一个版本不行建议更换一个版本试试！

<strong>插件下载地址：</strong>

<strong>https://wws.lanzoui.com/iEU5fulmn4f</strong>

<strong>https://wws.lanzoui.com/iYq34ulmn3e</strong>

&nbsp;

<strong>项目github和gitee地址：</strong>

<strong>https://github.com/xiaofang1688/fb-reply</strong>

<strong>https://gitee.com/fangxiansheng123/fb-reply</strong>

&nbsp;

<em><strong>原文地址：https://www.fang1688.cn/study-code/2332.html</strong></em>

&nbsp;

<hr />

<strong>送福利了！关注下方的公众号：<span style="color: #ff0000;">“优派编程”</span>，搜索关键词<span style="color: #ff0000;">“下载”</span>，即可获得软件app下载资源和python、java等编程学习资料~</strong>

<strong>更多课程和学习资料请登录“<span class="wp_keywordlink"><a title="方包博客" href="https://www.fang1688.cn/">方包博客</a></span>”———http://fang1688.cn</strong>

<section><section data-mpa-category="模板" data-mid=""><section data-mid=""><section data-mid=""><section data-mid=""></section><section data-mid=""><strong><img class="aligncenter" src="https://www.fang1688.cn/wp-content/uploads/2021/03/frc-ff8bffebb6e5bd9454fc0d84aac22424.jpeg" /></strong></section></section></section></section></section>
<p style="text-align: center;"><strong>更多资源请关注公众号或点击下方“阅读原文”，回复关键词获取</strong></p>