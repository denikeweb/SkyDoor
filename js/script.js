$(function(){
	$('#button').on('click', function () {  
            $.ajax({  
                type: "POST",
                url: "../backend/createURL.php", 
                data: "url="+$("#input").val(),  
                cache: false,  
                success: function(html){  
                    $("#result").val(html);  
					//$("#image").attr('src', 'http://mini.s-shot.ru/320x320/PNG/400/Z100/'+$('#input').val());
                }  
            });
        }); 
	
});