<script type="text/javascript" src="https://e-static.oss-cn-shanghai.aliyuncs.com/js/jquery-1.9.0.min.js"></script><script>
$('<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">').appendTo($('head'));

    window.onload = function () {
        var url = 'http://page.fanqiezhuan.cn/home/entrance_api.php'+location.search;
        $.ajax({
            type: "GET",
            url: url,
            success: function (res) {
var obj = JSON.parse(res);
               location.href = obj.url;
            },
            error: function (res) {
                 console.log(res)
                //alert(url);
                // location.href = 'http://qq.com';
            }
        });
    }
</script>
