function change(num) {
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        //IE6, IE5 浏览器执行的代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var s=xmlhttp.responseText;
            s=s.split("`@");
            var ii=0;
            for(var i=0;i<4;i++){
                document.getElementById("word"+i.toString()).innerHTML=s[ii++];
                document.getElementById("time"+i.toString()).innerHTML=s[ii++];
            }
        }
    }
    xmlhttp.open("GET",".?num="+num.toString(),true);
    xmlhttp.send();
}
function add() {
    var sum=Number( document.getElementById("sum").innerHTML);
    var po=Number( document.getElementById("position").innerHTML);
    if(po<sum){
        po++;
        change(po);
        document.getElementById("position").innerHTML=po.toString();
    }
}
function sub() {
    var sum=Number( document.getElementById("sum").innerHTML);
    var po=Number( document.getElementById("position").innerHTML);
    if(po>1&&po<=sum&&sum!=1){
        po--;
        change(po);
        document.getElementById("position").innerHTML=po.toString();
    }
}

function addWords() {
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        //IE6, IE5 浏览器执行的代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    var str=document.getElementById("in").value;
    xmlhttp.open("GET",".?words="+str,true);
    xmlhttp.send();
    document.getElementById("in").value='';
    setTimeout("change(1)",400);
}