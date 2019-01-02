function content(){
    var div = document.querySelector("div");
    displayInformation(div)
    
}
function displayInformation(div){
    var h4= document.createElement("h1");
    $.ajax({
        type:'get',
        dataType:'json',
        data: $(this).serialize(),
        url:'./view/viewHoroscope.php',
        success: function(dat){
            
            if(dat){
              
               h4.innerText = dat;
            }else{
                h4.innerText = dat
            }
        },
        error: function(dat, error) {
            console.log( dat +  error)
        }
    });

    div.appendChild(h4)

}