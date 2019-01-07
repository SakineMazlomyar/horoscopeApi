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
                content()
            }else{
                console.log('there is no such date')
            }
        },
        error: function(dat, error) {
            console.log( dat +  error)
        }
    });

    return false;

}


   