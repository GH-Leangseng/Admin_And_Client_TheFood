$(document).ready(function(){

        // $(".slide").click(function(){
        //      $(this).find("ul").slideToggle();
        // })  
        
        //hide reupdate
        $(".add_btn").click(function(){
                $(".btn_reupdate").hide();
                $(".submit").show();
                //set value with defualt " ";
                $("#username").val("");
                $("#Password").val("");
                $("#Email").val("");
                $("#problem").val("");
                $("#comment").val("");
        })
        //hide submit
        $(".update").click(function(){
               $(".btn_reupdate").show();
                $(".submit").hide();
        })

        // get values to form
        var id = "";
        var name1 = "";
        var password = "";
        var problem = "";
        var email = "";
        var comment = "";
        $(".c-update").click(function(){
                problem = $(this).parents("tr").find("td").eq(1).text();
                name1 = $(this).parents("tr").find("td").eq(2).text();
                password = $(this).parents("tr").find("td").eq(3).text();
                email = $(this).parents("tr").find("td").eq(4).text();
                comment = $(this).parents("tr").find("td").eq(5).text();
                $("#username").val(name1);
                $("#Password").val(password);
                $("#Email").val(email);
                $("#problem").val(problem);
                $("#comment").val(comment);
                //hide sumbit 
                $(".submit").hide();
                $(".btn_reupdate").show();
        })

        $(".search").click(function(){
                $(".result_auto").hide();
        })

        $(".delete_report").click(function(){
               var x = $(this).parents('tr').find('td').eq(0).text();
              $.ajax({
                url : "delete_report.php",
                data : { id_delete : x},
                method: 'POST',
                success: function(x){
                        location.reload();
                }
              })
        })
        $(".delete_contact").click(function(){
               var x = $(this).parents('tr').find('td').eq(0).text();
              $.ajax({
                url : "delete_contact.php",
                data : { id_delete : x},
                method: 'POST',
                success: function(x){
                        location.reload();
                }
              })
        })

        $(".update_contact").click(function(){
                var id = $(this).parents("tr").find("td").eq(0).text();
                var email = $(this).parents("tr").find("td").eq(1).text();
                var number = $(this).parents("tr").find("td").eq(2).text();
                var facebook = $(this).parents("tr").find("td").eq(3).text();
                var tele = $(this).parents("tr").find("td").eq(4).text();
                var chat = $(this).parents("tr").find("td").eq(5).text();
                $("#Email").val(email);
                $("#number").val(number);
                $("#Facebook").val(facebook);
                $("#telegram").val(tele);
                $("#chat").val(chat);
                $("#id").val(id);
                $(".submit").hide();
        })
        

        
        

    
})
