$(document).ready(function(){
      $(".box_food").click(function(){
                var get_view = parseInt($(this).find(".text #view").val());
                var id = parseInt($(this).find(".text #id").val());
                 get_view += 1;
                $.ajax({
                        url: "update_view.php",
                        data : {
                            count1 : get_view ,
                            id1 : id
                        },
                       
                        method: 'POST',
                        success : function(){
                                
                        }
                })
                        
      })

      
})