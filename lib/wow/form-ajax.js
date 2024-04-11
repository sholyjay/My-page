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

//This is bassically for downloadable form.

document.getElementById("downloadForm").addEventListener("click", function() {
    var htmlCode = document.getElementById("contactForm").outerHTML;
    var blob = new Blob([htmlCode], {type: "text/html"});
    var url = URL.createObjectURL(blob);
    var a = document.createElement("a");
    a.href = url;
    a.download = "contactForm.html";
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
});




