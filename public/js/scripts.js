

function FecharMenuPesquisar(){
    document.getElementById("section3").style.display="none";
}

function AbrirMenuPesquisar(){
    document.getElementById("section3").style.display="flex";
}

function AbrirFecharFiltro(){
 
    if(document.getElementById("section_filtro").style.display== "none"){
        document.getElementById("section_filtro").style.display="flex";
        document.getElementById("icone_filtro").className="fa-solid fa-chevron-down";
    }
    else{
        document.getElementById("section_filtro").style.display="none";
        document.getElementById("icone_filtro").className="fa-solid fa-greater-than";

    }
}

/*script do botão de subir ao topo*/
const btn = document.getElementById("btnTop")

btn.addEventListener("click", function(){
    window.scrollTo(0,0)
})


document.addEventListener('scroll', ocultar)

function ocultar(){
    if(window.scrollY > 10){
        btn.style.display = "flex";
    }
    else{
        btn.style.display = "none";
    }
}

ocultar() 
 