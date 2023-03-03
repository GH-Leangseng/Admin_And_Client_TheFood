$(document).ready(function(){
       
       $("#sumbit_report").click(function(){
                var problem = $("#problem");
                var username = $("#username");
                var email = $("#email");
                var password = $("#password");
                if(problem.val() == ""){ 
                        problem.addClass("btn btn-danger");
                        problem.val("please input Problem...!");
                }
                problem.focus(function(){
                        $(this).removeClass("btn btn-danger"); 
                        $(this).val("");         
                })
                // check username
                if(username.val() == ""){ 
                        username.addClass("btn btn-danger");
                        username.val("please input username...!");
                }
                username.focus(function(){
                        $(this).removeClass("btn btn-danger"); 
                        $(this).val("");         
                })
                  // check email
                if(email.val() == ""){ 
                        email.addClass("btn btn-danger");
                        email.val("please input Email...!");
                }
                email.focus(function(){
                        $(this).removeClass("btn btn-danger"); 
                        $(this).val("");         
                })
                // check password
                if(password.val() == ""){ 
                        password.addClass("btn btn-danger");
                        password.val("");
                        password.css({
                                'color':'black'
                        })
                }
                password.focus(function(){
                        $(this).removeClass("btn btn-danger"); 
                        $(this).val("");         
                })

                if(problem.val() !== "" && username.val() !== "" && email.val() !== "" && password.val() !== ""){
                        alert("you input succesfully");
                }
               
                
       })

})