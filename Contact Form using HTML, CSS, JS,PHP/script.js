const form = document.querySelector("form"),
statusText = form.querySelector(".buttons span");

form.onsubmit = (e) =>{
    e.preventDefault(); //prevent the form from submiting
    statusText.style.display = "block";

    // we want to use ajax to send form data of html to php
    let xml = new XMLHttpRequest();
    xml.open("POST", "message.php", true); //sending post request to message.php
    xml.onload = () =>{ //once ajax loaded
       if(xml.readyState == 4 && xml.status == 200){ //it means if there is no error
            let response = xml.response;
            console.log(response); 
       } 
    }
    //create new formData obj. This obj is used to send form data.
    let formData = new FormData(form); 
    xml.send(formData); //send the formData obj
}