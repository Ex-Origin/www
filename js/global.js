$(document).ready(function(){
    var converter = new showdown.Converter();

    $("article.markdown").each(function(){
        var raw = $(this).html();
        var html = converter.makeHtml(raw);
        $(this).html(html);
    });

    // 修复 markdown 对 > 和 < 的不支持
    $("article.markdown pre code").each(function(){
        var content = $(this).html();

        content = content.replace(/&amp;lt;/g,'&lt;');
        content = content.replace(/&amp;gt;/g,'&gt;');
        
        $(this).html(content);
    });

    // 要等markdown转化完之后，再进行highlightjs
    $("pre code").each(function(i, block) {
        hljs.highlightBlock(block);
    });

    // 为了实现markdown的引用效果
    $("article.markdown p").each(function(){
        var content = $(this).text();
        
        if(content.slice(0,2) == '> '){
            content = content.slice(2);
            var txt=document.createElement("blockquote");
            txt.innerHTML = content;
            $(this).after(txt);
            $(this).remove();
        }
    });

    $("#suggest button[type=button]").click(function(){
        var content = $("#suggest input[type=text]").val();
        if(content == ''){
            $('#empty-content').modal('show');
            return;
        }
        jQuery.ajax({
            // 这里只能用绝对路径了
            url: "/submit/suggest.php",
            type: "post",
            dataType: "json",
            data: {
                'suggest':content
            },
            success: function(msg) {
                $('#success200').modal('show');
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                if(XMLHttpRequest.status == 403){
                    $('#error403').modal('show');
                }else if(XMLHttpRequest.status == 404){
                    $('#error404').modal('show');
                }else if(XMLHttpRequest.status == 500){
                    $('#error500').modal('show');
                }else if(XMLHttpRequest.status == 200){
                    $('#success200').modal('show');
                }else{
                    alert("未知错误：" + XMLHttpRequest.status);
                }
            },
            complete: function(XMLHttpRequest, textStatus) {
                this; // 调用本次AJAX请求时传递的options参数
            }
        });
    });

    // 通过该方法来为每次弹出的模态框设置最新的zIndex值，从而使最新的modal显示在最前面
    $(document).on('show.bs.modal', '.modal', function (event) {
        var zIndex = 1050 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        // setTimeout(function() {
        //     $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        // }, 0);
    });

    /* Scroll To Top */
    var scrolltotop = {
        setting: {
            startline: 100,
            scrollto: 0,
            scrollduration: 1e3,
            fadeduration: [500, 100]
        },
        controlHTML: '<img style="width:50px" src="/images/scroll_to_top.png" />',
        // The offset from the bottom right corner
        // 相对于右下角的偏移
        controlattrs: {
            offsetx: 10,
            offsety: 20
        },
        anchorkeyword: "#top",
        state: {
            isvisible: !1,
            shouldvisible: !1
        },
        scrollup: function() {
            this.cssfixedsupport || this.$control.css({
                opacity: 0
            });
            var t = isNaN(this.setting.scrollto) ? this.setting.scrollto: parseInt(this.setting.scrollto);
            t = "string" == typeof t && 1 == jQuery("#" + t).length ? jQuery("#" + t).offset().top: 0,
            this.$body.animate({
                scrollTop: t
            },
            this.setting.scrollduration)
        },
        keepfixed: function() {
            var t = jQuery(window),
            o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
            s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
            this.$control.css({
                left: o + "px",
                top: s + "px"
            })
        },
        togglecontrol: function() {
            var t = jQuery(window).scrollTop();
            this.cssfixedsupport || this.keepfixed(),
            this.state.shouldvisible = t >= this.setting.startline ? !0 : !1,
            this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({
                // 透明度 opacity
                opacity: 0.7
            },
            this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({
                opacity: 0
            },
            this.setting.fadeduration[1]), this.state.isvisible = !1)
        },
        init: function() {
            jQuery(document).ready(function(t) {
                var o = scrolltotop,
                s = document.all;
                o.cssfixedsupport = !s || s && "CSS1Compat" == document.compatMode && window.XMLHttpRequest,
                o.$body = t(window.opera ? "CSS1Compat" == document.compatMode ? "html": "body": "html,body"),
                o.$control = t('<div id="topcontrol">' + o.controlHTML + "</div>").css({
                    position: o.cssfixedsupport ? "fixed": "absolute",
                    bottom: o.controlattrs.offsety,
                    right: o.controlattrs.offsetx,
                    opacity: 0,
                    cursor: "pointer"
                }).attr({
                    title: "Scroll to Top"
                }).click(function() {
                    return o.scrollup(),
                    !1
                }).appendTo("body"),
                document.all && !window.XMLHttpRequest && "" != o.$control.text() && o.$control.css({
                    width: o.$control.width()
                }),
                o.togglecontrol(),
                t('a[href="' + o.anchorkeyword + '"]').click(function() {
                    return o.scrollup(),
                    !1
                }),
                t(window).bind("scroll resize",
                function(t) {
                    o.togglecontrol()
                })
            })
        }
    };
    scrolltotop.init();
});
