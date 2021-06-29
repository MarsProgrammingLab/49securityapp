$(document).ready(function(){
    $("#form2").on('submit', function(){
        
        submit_form();
        $('.output').text('Loading..')
        var form = $(this);
        function submit_form(){
            var name = $("#name");
            var email = $("#email");
            var message = $("#message2");
            var submission = $("#submit");

            $.ajax({
                type: "POST",
                url: "data.php",
                data: "name=" + name + "&email=" + email + "&message2=" + message + "&submit" + submission,
                dataType: "json",
                success: function(text){
                    if(text == "success"){
                        $('.output').text('Message Sent!');  
                    } else {
                        $('.output').text('Error Sending email!');
                    
                    }
                } 
            });
        }
        // Will reveal text 
        function form_successful(){
            alert("Form submission successful.")
        }
        });
        
    
});
   
    
