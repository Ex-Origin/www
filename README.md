# www
编程技术网站源码

### 模板来源：<http://www.cssmoban.com/cssthemes/8385.shtml>

## 引用库
1. Jquery
2. Bootstrap
3. showdown
4. font-awesome

## 模块简介

**绝大部分文章使用markdown写的，欢迎大家对文章进行填充和修正**

### 1. 全局配置文件：config.php
所有的网页都会引用这个文件，其中定义了`ROOT_DIR`全局根目录，一些数据库的信息，还有`relative(string $file)`函数，该函数依赖于`ROOT_DIR`，主要功能为根据`ROOT_DIR`全局根目录来计算其传入的文件路径的相对偏移。这样即使移动了某个Php文件，仅需修正开头的
``` php
include_once('./config.php');
```
即可让整个文件的引用目录自动校正。

**`relative(string $file)`**
要求`ROOT_DIR`全局根目录是以`/`结尾，所以在**config.php**中`ROOT_DIR`是下面这样引用的：
``` php
define('ROOT_DIR', dirname(__FILE__).'/');
```
在计算完相对路径之后，程序会定义全局宏`RELATIVE_PATH`，下次调用该程序的时候会先判断有无全局宏`RELATIVE_PATH`，若有的话直接返回。

### 2. 全局源： template/source_footer.php 和 template/source_header.php
这里面引用了我们需要的全局`js`，`css`文件，为了网页的速度，设计的时候是将`css`文件放在`template/source_footer.php`当中，`js`文件放在`template/source_header.php`当中。

### 3. 全局页眉： template/source_header.php  全局页脚： template/footer.php
每个网页的页眉和页脚都是一样的，而具体的内容就定义在文件里，通过修改这两个文件可以将整个站点的页眉和页脚的样式改变。

### 4. style-mod.css 和 global.js
除了这两个文件外，其它的都是模板原有的，很少经过修改，`style-mod.css` 主要对后面加的一些`html`内容进行修正，`global.js` 设计的是一些全局ajax和jq
的效果，还有`class`为`markdown`的文章转化为`html`，具体实现如下：
``` javascript
var converter = new showdown.Converter();

$("article.markdown").each(function(){
    var raw = $(this).html();
    var html = converter.makeHtml(raw);
    $(this).html(html);
});
```

### 5. 主要的动态网页
* book.php
* message.php
* news.php
* news_content.php

### 6. 编程入门模块： introduction
由`introduction/content.php`来显示其具体内容，其内容由下决定：
``` php
// 读取配置文件
$data = json_decode(file_get_contents('data.json'),true);
```
具体的配置文件格式如下：
``` json
{
    "c": {
        "description": "C语言入门",
        "keywords": "C语言入门",
        "title": "C语言入门",
        "name": "C语言",
        "markdown_file_path": "./c.md",
        "sidenav": [
            {
                "url": "https://www.bilibili.com/video/av2831981/?p=1",
                "title": "C语言视频教程"
            },
            {
                "url": "http://www.runoob.com/cprogramming/c-tutorial.html",
                "title": "推荐网页文档"
            }
        ]
    }
}
```

网页的内荣由md文件来编写

### 7. Ajax交互网页
* suggest.php
* contact_submit.php
* book_submit.php

以上文件仅用与`Ajax`交互提交数据，文件本身不会返回网页内容。

_下面的文件仅是为了缓解站点带宽压力而设计的Ajax交互网页_
* show_more.php
* introduction/show_more.php