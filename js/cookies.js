// You can check whether cookies have been blocked
if (!navigator.cookieEnabled) {
    console.log("The browser does not support or is blocking cookies from being set.");
} else {
    console.log("The browser supports cookies and is not blocking cookies from being set.");
}

document.querySelector("#setcookie").addEventListener("click", function() {

    document.cookie = "username=" + document.myform.name.value + ";";
    document.cookie = "password=" + document.myform.password.value + ";";

    //The following reads the cookies that have just been set
    var allcookies = document.cookie;

    console.log ("All Cookies : " + allcookies );

    // Get all the cookies pairs in an array
    var cookiearray = allcookies.split(';');

    // Show each key value pair from this array
    for(var i=0; i<cookiearray.length; i++) {
        let name = cookiearray[i].split('=')[0];
        let value = cookiearray[i].split('=')[1];
        console.log("Key is : " + name + " and Value is : " + value);
    }

});


