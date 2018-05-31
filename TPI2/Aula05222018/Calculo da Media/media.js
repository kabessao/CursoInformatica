function media(){
    var nota1 = document.getElementById("nota1").value, 
    nota2=document.getElementById("nota2").value,
    nota3=document.getElementById("nota3").value,
    media=(parseFloat(nota1) + parseFloat(nota2) + parseFloat(nota3)) / 3,
    nome=document.getElementById("nome").value;
    
    document.getElementById("media").innerHTML = nome + " ficou com média: " + media;

    if (media>7) {
        //alert("Aprovado");
        document.getElementById("situacao").innerHTML = "Aprovado:" ;
    }else{ 
        //alert("Reprovado")
        document.getElementById("situacao").innerHTML = "Reprovado:";
    }
}

function limpar() {
    document.getElementById("nome").value = "";
    document.getElementById("nota1").value = "";
    document.getElementById("nota2").value = "";
    document.getElementById("nota3").value = "";

}