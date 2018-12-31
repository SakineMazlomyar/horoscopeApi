$(document).ready(function(){
  
    $(".update").click(function(event){
      event.preventDefault();
      
        console.log("this is update")
        $.ajax({
            type:'post',
            dataType:'json',
            url:'index.php',
            data:$(this).serialize(),
            success: function(data){
        
                    console.log(data)
                /* if(data.success){
                    console.log(data.success)
                }else{
                    console.log('no mail')
                } */
            },
            error: function(data, error) {
                console.log( data +  error)
            }
        });
        
        
    })
})