<script>
function myFunction() {
    
    if (confirm("Esta seguro que desea salir de la sesion?") == true) {
        location.href="eliminar_cliente.php"
        return true;
    } else {
        return false;
    }
    document.getElementById("demo").innerHTML = x;
}
</script>