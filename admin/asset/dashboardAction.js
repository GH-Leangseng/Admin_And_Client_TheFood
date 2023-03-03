$(document).ready(function(){
        $('.delete').click(function(){
           var id =  $(this).parents('.result_auto').find('td').eq(0).text();
        //    alert($id);
            $.ajax({
                url:'delete.php',
                data: {
                        id_picture : id
                },
                // cache:  false,
                method: 'POST',
                success : function(x){
                        // alert(x);
                }
            })
        })



})
