window.onload = function()  {
    
    $("#registration").submit(function(event){
        event.preventDefault();
        if(checkForm()) sendAjax();
        
    });
}
function checkForm() {
    return checkPass();
}
function sendAjax() {
     var formData = $("#registration").serialize();     
        
        $.ajax({
        url: "php/reg.php", 
        type: "POST",
        data: formData,
        dataType: "text",
        success: printData(formData)
        });  
}
function printData(data) {
    var counter = 0;
    var arr = [];
    for(var i = 0; i < data.length; i++) {
        if(data[i] == "&") {
            arr.push(data.slice(counter, i));
            counter = i + 1;
        }
    }
    arr.push(data.slice(counter));
    document.getElementById("reg").innerHTML = "";
    for (var i = 0; i < arr.length; i++) {
        //alert(arr[i]);
        document.getElementById("reg").innerHTML += "<p>" + arr[i];
    }  
}

function checkPass() {
    if(document.getElementById("pass1").value != document.getElementById("pass2").value) {
         document.getElementById("pass").innerHTML = "Passwords are not equal";
         
         return false;
    }
    document.getElementById("pass").innerHTML = "";
    return true;
}

