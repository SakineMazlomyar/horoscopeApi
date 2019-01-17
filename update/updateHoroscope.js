
function updateHoroscopeContent(url){
    var data= $("#formInfo").serialize();
    //console.log(data)
    $.ajax({
        type:'put',
        dataType:'json',
        url:'./update/updateHoroscope.php',
        data: data,
        success: (dat) => {
            if (dat) {
                var div = document.querySelector("div#content");
                div.innerHTML= dat;
                content()

            } else {
                var div = document.querySelector("div#content");
                div.innerHTML= dat;
                content() 
            }
        },
        error:(dat, error) => {console.log( dat +  error)}
    });
    //To stop form from submitting
    return false;
}
 