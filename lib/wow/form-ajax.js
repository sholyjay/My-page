document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); //prevent default form submission

    var formData = new FormData(this);

    // Ajax request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true)
    xhr.onload = function(){
        if (xhr.status == 200){
            alert("Form submitted successfully");
        } else{
            alert("Error: " + xhr.statusText);
        }
    };
    xhr.send(formData);
});




