function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "fred" && password == "chisaka") {
        window.location.assign("C:\Users\FRED\Desktop\SYSTEM\KEFRAM\fields.html");
        alert("Login Successful!!");
    } else {
        alert("Login Failed!!");
        return;
    }
}