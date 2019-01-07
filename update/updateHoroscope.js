
function updateHoroscopeContent(url){
    var data= $("#formInfo").serialize();
    console.log(data)
    $.ajax({
        type:'put',
        dataType:'json',
        url:'./update/updateHoroscope.php',
        data: data,
        success: function(dat){
    
            if (dat) {
                content()
                var div = document.querySelector("div");
                div.innerHTML= dat;

            } else {
                console.log('there is no such date');
            }
        },
        error: function(dat, error) {
            console.log( dat +  error)
        }
    });
    return false;
}
 