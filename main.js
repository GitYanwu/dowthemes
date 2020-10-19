jQuery(document).ready(function($){
    // 下载完整视频点击事件
    $("#postDetailMoreBtn").click(function(){
        console.log("JS加载完毕");  
        $("#postDownload").attr("checked",true);
        $(document).scrollTop(200);
    });  
});