window.onload = function() {
    document.getElementById("botonMenu").addEventListener("click",funcionBoton);
    function funcionBoton(){
        document.getElementById("IDsidebar").classList.toggle("hidden")
        console.log("click")
    }
}