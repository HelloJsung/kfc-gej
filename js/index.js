FastClick.attach(document.body);
$('form').on('submit',function(e){
    console.log('123',$(this).serialize())
    e.preventDefault();
    var _this = $(this)
    $.ajax({
        url:'./fs/fswrite.php',
        data:_this.serialize(),
        type:"get",
        success:function(data){
            console.log(data)
            if(data != null){
                $(".mask").show();
                $(".submitSuccess").fadeIn();
                //实现图片长按效果
                //如果代码不运行，直接改用单击事件
                // var star = 0;
                // $(".submitSuccess img").on("touchstart",function(e){
                //     e.preventDefault();
                //     start = new Date();
                //     var tId = setTimeout(function() {
                //         var end = new Date();
                //         var time = end - start;
                //         (end - start < 2000) && setTimeout(arguments.callee, 10);
                //     }, 10);
                // },false);
                $(".submitSuccess img").on("click",function(e){
                    // e.preventDefault();
                    // if(new Date() - start > 2000){
                        window.location = "./poto.html";
                    // }
                })
            }
        }
    })
    
})