$(document).ready(function(){
  
    $(".add").click(function(event){
      event.preventDefault();
      

        $.ajax({
            type:'post',
            dataType:'json',
            url:'./add/addHoroscope.php',
            data:$(this).serialize(),
            success: function(data){
        
                if(data){
                    console.log(data)
                }else{
                    console.log('ingen data')
                }
            },
            error: function(data, error) {
                console.log( data +  error)
            }
        });
        
        
    })
})
    