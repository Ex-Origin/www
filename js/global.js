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
            url: "/suggest.php",
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
});