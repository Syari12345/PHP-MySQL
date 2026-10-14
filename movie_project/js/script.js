const user=localStorage.getItem("user");

fetch("dashboard.php",{
    method:"POST",
    headers:{"Content-Type":"application/x-www-form-urlencoded"},
    body:'user='+encodeURIComponent(user)
});