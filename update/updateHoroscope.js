

function updateHoroscopeContent(url){
    var formInfo= $("#formInfo").serialize();
    console.log(formInfo)
    $.ajax({
        type:'put',
        dataType:'json',
        url:'./update/updateHoroscope.php',
        formInfo: formInfo,
        success: function(userData){
    
            if(userData){
                console.log(userData)
            }else{
                console.log('ingen data')
            }
        },
        error: function(userData, error) {
            console.log( userData +  error)
        }
    });

}