<?php

//setting cookies
setcookie("username", "martay");
setcookie("favoritecolor", "blue");


//check if cookie set and access values
if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
    echo "Welcome back, $username <br>";
} else {
    echo "Never heard of you.<br>";
}

echo "All cookies received: <br>";
echo print_r($_COOKIE)."<br>";


//expiration
$expireTime = time() + 60*60*24*7;   # 1 week from now
setcookie("CouponNumber", "389752", $expireTime);
setcookie("CouponValue", "100.00", $expireTime);
echo "Coupon number: " .$_COOKIE["CouponNumber"] . "<br>";
echo "Coupon value: " . $_COOKIE["CouponValue"] . "<br>";

//immdediately expire a cookies
setcookie("CouponNumber", "", time() - 1);
echo isset($_COOKIE["CouponNumber"])."<br>";
