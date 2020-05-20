var pass1 = document.getElementById("txtpassword").innerHTML;
var pass2 = document.getElementById("txtrpassword1").innerHTML;
if(pass1 != pass2){
    alert("Las contraseñas deben ser iguales");
    window.location.href="clienteA.php";
}