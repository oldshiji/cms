$(function () {

    $("#search").on("click",function(e){

        var keyword  = $(":input[name=keyword]").val();
        window.location.href = "/doctors.html?keyword="+keyword;

    });

    //跳转到详情页面
    $("div.ysxq-gr").click(function(){
        if($(this).attr("data-id")){
            window.location.href = "doctor/detail/"+$(this).attr("data-id")+".html";
        }

    });


});