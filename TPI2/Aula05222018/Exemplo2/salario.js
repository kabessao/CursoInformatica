function Calcular() {
    salario=document.getElementById("sa").value;
    nome=document.getElementById("nome").value;


    if (salario>=1000) {
        novosal = (parseFloat(salario) * 1.10) ,document.getElementById("ns").innerHTML = nome + " " + novosal;
    }else{
        novosal = (parseFloat(salario) * 1.05) , document.getElementById("ns").innerHTML = nome + " " + novosal;
    }
}