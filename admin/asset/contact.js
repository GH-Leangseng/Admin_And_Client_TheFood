$(document).ready(function(){
        var url_fb = "";
        var url_tele = "";
        var url_chart = "";
        var phone_number = "";
        var email = "";


       $(".add-contract").click(function(){
                $(".reupdate").hide();
                $(".submit").show();
                $("#Email").val("");
                $("#number").val("");
                $("#Facebook").val("");
                $("#telegram").val("");
                $("#chat").val("");
       })
       $(".update").click(function(){
                 $(".submit").hide();
                 $(".reupdate").show();
                 var email = $(this).parents("tr").find("td").eq(1).text();
                 var phone_number = $(this).parents("tr").find("td").eq(2).text();
                 var url_fb = $(this).parents("tr").find("td").eq(3).text();
                 var url_tele = $(this).parents("tr").find("td").eq(4).text();
                 var url_chart = $(this).parents("tr").find("td").eq(5).text();
                var id = $(this).parents("tr").find("td").eq(0).text();
                $("#Email").val(email);
                $("#number").val(phone_number);
                $("#Facebook").val(url_fb);
                $("#telegram").val(url_tele);
                $("#chat").val(url_chart);
                $('.submit').hide();
                $("#id").val(id);
       })

       //contact delete
       $("body").on("click","#delete",function(){
               var id = $(this).parents("tr").find("td").eq(0).text();
               
               $.ajax({
                        url:'delete_contact.php',
                        data:{
                                id : id
                        },
                        method: 'POST',
                        success: function(e){
                                location.reload();
                        }

               })
       })

       
       
})