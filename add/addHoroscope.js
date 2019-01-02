
function saveHoroscope(url){
    var data= $("#formInfo").serialize();
    console.log(data)
    $.ajax({
        type:'post',
        dataType:'json',
        url:'./add/addHoroscope.php',
        data: data,
        success: function(dat){
    
            if(dat){
                console.log(dat)
            }else{
                console.log('ingen data')
            }
        },
        error: function(dat, error) {
            console.log( dat +  error)
        }
    });

}

    