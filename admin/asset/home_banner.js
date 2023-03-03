$(document).ready(function(){
        $(".click_upload").click(function(){
                $(".file_image").click();
        })
        $(".add-btn").click(function(){
                $(".update").hide();
                $(".submit").show();
        })

        $(".btn-update").click(function(){
                $(".update").show();
                $(".submit").hide();
                var file_name = $(this).parents("tr").find("td").eq(1).text();
                var id = $(this).parents("tr").find("td").eq(0).text();
                $("#file_name").val(file_name);
                $("#id").val(id);
        })

        $(".delete").click(function(){
                var id = $(this).parents("tr").find("td").eq(0).text();
                $.ajax({
                        url: "delete.php",
                        data : {
                                id : id
                        },
                        method:'POST',
                        success: function(get){
                                location.reload();
                        }
                })
        });
       

        
})