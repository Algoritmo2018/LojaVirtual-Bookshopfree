

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

/*Script para abrir Janela de notificação de encerrar conta*/

function AbrirMsgConf(){
 
    if(document.getElementById("article_msg_conf").style.display== "none"){
        document.getElementById("article_msg_conf").style.display="flex"; 
    }
    else{
        document.getElementById("article_msg_conf").style.display="none"; 

    }
}

function FecharMsgConf(){
 
    if(document.getElementById("article_msg_conf").style.display== "flex"){
        document.getElementById("article_msg_conf").style.display="none"; 
    }
}
/*fim  Script para abrir Janela de notificação de encerrar conta*/


 /*Mostrar e ocultar senha*/
 
 var btn_mo_senha = document.getElementById("btn_mo_senha");
var senha= document.getElementById("senha");
function mostrarOcultarSenha(){
   
    if(senha.type == "password"){
        senha.type = "text";
        btn_mo_senha.innerHTML="Ocultar";
    }
    else{
        senha.type="password";
        btn_mo_senha.innerHTML="Mostrar";} 
}