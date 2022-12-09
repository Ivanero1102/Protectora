function cambiaClase(num){
    var cambClase = document.querySelectorAll("p > input");
    for (let i = 0; i<cambClase.length; i++) {
    cambClase[i].classList.replace("active", "cell_menu");
    }
    cambClase[num].classList.add("active");
}