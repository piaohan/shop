{{-- 这个文件是共粘贴用的 弹出提示文件--}}
<button class="btn btn-info btn-sm" id="sa-basic">Click me</button>
<button class="btn btn-info btn-sm" id="sa-title">Click me</button>
<button class="btn btn-info btn-sm" id="sa-success">Click me</button>
<button class="btn btn-info btn-sm" id="sa-warning">Click me</button>
<button class="btn btn-info btn-sm" id="sa-params">Click me</button>
<button class="btn btn-info btn-sm" id="sa-image">Click me</button>
<button class="btn btn-info btn-sm" id="sa-close">Click me</button>
@section('script')
    <script src="http://cdn.rooyun.com/js/sweet-alert.min.js"></script>
    <script>
        !function($) {
            "use strict";
            var SweetAlert = function() {};
            //examples
            SweetAlert.prototype.init = function() {
                //Basic
                $('#sa-basic').click(function(){
                    swal("操作成功!");
                });
                //A title with a text under
                $('#sa-title').click(function(){
                    swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
                });
                //Success Message
                $('#sa-success').click(function(){
                    swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
                });
                //Warning Message
                $('#sa-warning').click(function(){
                    swal({
                        title: "你确定吗?",
                        text: "操作后无法取消!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "是的, 确认这么干!",
                        closeOnConfirm: false
                    }, function(){
                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    });
                });

                //Parameter
                $('#sa-params').click(function(){
                    swal({
                        title: "你确定吗?",
                        text: "操作后无法取消!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "是的, 确认这么干!",
                        cancelButtonText: "我在想想!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    }, function(isConfirm){
                        if (isConfirm) {
                            swal("操作成功!", "成功处理一条数据.", "success");
                        } else {
                            swal("操作取消", "操作取消:)", "error");
                        }
                    });
                });

                //Custom Image
                $('#sa-image').click(function(){
                    swal({
                        title: "Sweet!",
                        text: "Here's a custom image.",
                        imageUrl: "assets/sweet-alert/thumbs-up.jpg"
                    });
                });
                //Auto Close Timer
                $('#sa-close').click(function(){
                    swal({
                        title: "Auto close alert!",
                        text: "I will close in 2 seconds.",
                        timer: 2000,
                        showConfirmButton: false
                    });
                });
            },
                    //init
                    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
        }(window.jQuery),
                function($) {
                    "use strict";
                    $.SweetAlert.init()
                }(window.jQuery);

    </script>
@endsection