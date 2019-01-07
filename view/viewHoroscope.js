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
        success: function(sessionAdded){
            if(sessionAdded){
              
               h4.innerText = sessionAdded;
            }else{
                h4.innerText = sessionAdded
            }
        },
        error: function(sessionAdded, error) {
            console.log( sessionAdded +  error)
        }
    });

    div.appendChild(h4)

}