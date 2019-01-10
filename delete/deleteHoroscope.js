function deleteHoroscopeContent(url){

    var formInfo= $("#formInfo").serialize();
    $.ajax({
        type:'delete',
        dataType: 'json',
        url:'./delete/deleteHoroscope.php',
        formInfo: formInfo,
        success: function(deletedData){
            if(deletedData){

                  
                var div = document.querySelector("div");
                div.innerHTML= deletedData;
                content()

            }else{
                var div = document.querySelector("div");
                div.innerHTML= deletedData;
                content()
            }
        },
        error: function(userData, error) {
            console.log( userData +  error)
        }
    });

    return false;

}
