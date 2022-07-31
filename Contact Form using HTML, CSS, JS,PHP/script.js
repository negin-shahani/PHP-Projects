const form = document.querySelector("form"),
statusText = form.querySelector(".buttons span");

form.onsubmit = (e) =>{
    e.preventDefault(); //prevent the form from submiting
    statusText.style.display = "block";
    statusText.style.color = "#957DAD";

    // we want to use ajax to send form data of html to php
    let xml = new XMLHttpRequest();
    xml.open("POST", "message.php", true); //sending post request to message.php
    xml.onload = () =>{ //once ajax loaded
       if(xml.readyState == 4 && xml.status == 200){ //it means if there is no error
            let response = xml.response;

            if(response.indexOf("Sorry, failed to send your message!") !=-1 
            || response.indexOf("Enter a valid Email address!") !=-1 
            || response.indexOf("Email and password feild is required!") !=-1){
                statusText.style.color = "red";
            }else{
                form.reset(); //if the message is sent reset the input of form
                setTimeout(() => { //after 3 seconds stop showing the sent message
                    statusText.style.display = "none";
                }, 3000);
            }

            statusText.innerHTML = response;
       } 
    }
    //create new formData obj. This obj is used to send form data.
    let formData = new FormData(form); 
    xml.send(formData); //send the formData obj
}