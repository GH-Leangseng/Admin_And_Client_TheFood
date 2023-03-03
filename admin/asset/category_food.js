$(document).ready(function(){
       $(".img_upload").click(function(){
            $("#open_file").click();    
       })

       $(".click_update").click(function(){
          
                $(".update_food").show();
                $(".view_food").hide(); 
                var id = $(this).parents("tr").find("td").eq(0).text();
                var title = $(this).parents("tr").find("td").eq(1).text();
                var category = ($(this).parents("tr").find("td").eq(2).text()).trim();
               var url_youtube = ($(this).parents("tr").find("td").eq(3).text()).trim();
               var type = $(this).parents("tr").find("td").eq(5).text();
               var image_food = $(this).parents("tr").find("td img").attr("alt");

               $("#get_id").val(id);
               $('#title').val(title);
               $('#category').val(category);
               $('#urlyoutube').val(url_youtube);
               $('#type_food').val(type);
               $('#file_name').val(image_food);
               // $("#open_file").change(function(){
               //      alert(1);
               // })
               $('#get_title').val(title);
               $('#get_urlyoutube').val(url_youtube);
               $('#get_type_food').val(type);
               $('#get_category').val(category);
   
     })      
       
       $(".add_food").click(function(){
                $(".update_food").hide();
                $(".view_food").show();    
      })

     //  catch id 
     $(".delete_category").click(function(){
          var id_category =parseInt($(this).parents("tr").find("td").eq(0).text());
          
          $.ajax({
               url:"delete_category.php",
               data : {
                    id : id_category
               },
               cache:    false,
               method: "POST",
               success: function(){
                    location.reload();
               }
          })
     })

   

     
})