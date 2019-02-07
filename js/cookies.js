document.querySelector("#run").addEventListener("click", function(){

    document.cookie = "username=smith";   // setting two cookies
    document.cookie = "password=12345";
    document.cookie = "age=29; expires=Thu, 01-Jan-1970 00:00:01 GMT";  // deleting a cookie...

    var allCookies = document.cookie.split(";"); // ["username=smith", "password=12345"]
    for (var i = 0; i < allCookies.length; i++) {
        var eachCookie = allCookies[i].split("=");// ["username", "smith"]
        var cookieName = eachCookie[0]; // "username"
        var cookieValue = eachCookie[1]; // "smith"
        console.log("Print all cookies: ");
        console.log(eachCookie);
        console.log("Cookie name: " + cookieName);
        console.log("Cookie value: " + cookieValue);
    }
});


