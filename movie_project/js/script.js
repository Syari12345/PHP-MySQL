const user=localStorage.getItem("user");

<<<<<<< HEAD
fetch("dashboard.php",{
    method:"POST",
    headers:{"Content-Type":"application/x-www-form-urlencoded"},
    body:'user='+encodeURIComponent(user)
});
=======
fetch("dashboard.php")
>>>>>>> a4d08df2028dcfdb713be86a0b08ad414a1c14aa
