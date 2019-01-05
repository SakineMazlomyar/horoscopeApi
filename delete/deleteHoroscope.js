function deleteHoroscopeContent(url){
    
  
    var formInfo= $("#formInfo").serialize();
   
  
    $.ajax({
        type:'delete',
        dataType: 'json',
        url:'./delete/deleteHoroscope.php',
        formInfo: formInfo,
        success: function(deletedData){
            if(deletedData){

                  
                content()
                var div = document.querySelector("div");
                div.innerHTML= deletedData;

            }
        },
        error: function(userData, error) {
            console.log( userData +  error)
        }
    });

}
