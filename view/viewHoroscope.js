function content(){
    var div = document.querySelector("div");
    displayInformation(div)
    
}
function displayInformation(div){
    var h1 = document.createElement("h1");
    $.ajax({
        type:'get',
        dataType:'json',
        data: $(this).serialize(),
        url:'./view/viewHoroscope.php',
        success: function(session){
            if(session){
               h1.innerText = session;
               disapearAddButton()
               displayDeleteButton()
               displayUpdateButton()
            }else{
                h1.innerText = session
                displayAddButton()
                disapearDeleteButton()
                disapearUpdateButton()
            }
        },
        error: function(sessionAdded, error) {
            console.log( sessionAdded +  error)
        }
    });

    div.appendChild(h1)

}

function displayAddButton(){
    var addButton = document.querySelector("input#add");
    addButton.style.display = "block"
}
function disapearAddButton(){
    var addButton = document.querySelector("input#add");
    addButton.style.display = "none"
}
function disapearDeleteButton(){
    var addButton = document.querySelector("input#delete");
    addButton.style.display = "none"
}
function disapearUpdateButton(){
    var addButton = document.querySelector("input#update");
    addButton.style.display = "none"
}
function displayDeleteButton(){
    var addButton = document.querySelector("input#delete");
    addButton.style.display = "block"
}
function displayUpdateButton(){
    var addButton = document.querySelector("input#update");
    addButton.style.display = "block"
}