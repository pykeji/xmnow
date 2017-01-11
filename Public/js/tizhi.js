/**
 * Created by dark on 2017/1/10.
 */
//测试结果记录弹出
$(".tztitle").click(function(){
    if($(".tzstyle").css('left')<'0px'){
        $(".tzstyle").animate({left:'1px',opacity:'1'},1000);
    }else{
        $(".tzstyle").animate({left:'-400px',opacity:'0'},1000);
    }
})
//外部点击关闭
//$(".report").click(function(){
//    $(".tzstyle").animate({left:'-400px',opacity:'0'},1000);
//})
//点击题号变色
$("#myTiContent tr td").click(function(){
    $(this).attr('class','sty1');
    $("#myTiContent tr td").not(this).attr('class','');
})
//下一题
$("#xyt").click(function(){
    if($(this).attr("name")=="ban"){
        alert("不要频繁点击我哦！")
    }else{
        $(this).attr("name","ban");
        $(".sty1").next().children().trigger("click");
        setTimeout(function(){
            $("#xyt").removeAttr("name");
        },1000)
    }
})
//上一题
$("#syt").click(function(){
    if($(this).attr("name")=="ban"){
        alert("不要频繁点击我哦！")
    }else{
        $(this).attr("name","ban");
        $(".sty1").prev().children().trigger("click");
        setTimeout(function(){
            $("#syt").removeAttr("name");
        },1000)
    }1
})