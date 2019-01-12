function deleteHoroscopeContent(url){
    var formInfo= $("#formInfo").serialize();
    $.ajax({
        type:'delete',
        dataType: 'json',
        url:'./delete/deleteHoroscope.php',
        formInfo: formInfo,
        success: (deletedData) => {
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
        error: (userData, error) => {console.log( userData +  error)}
    });

    //To stop form from submitting
    return false;

}

