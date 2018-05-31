function soma() {
    var produto1 = new Produto(document.getElementById("Produto1Nome"),document.getElementById("Produto1Qtd"),document.getElementById("Produto1Valor")),
    produto2 = new Produto(document.getElementById("Produto2Nome"),document.getElementById("Produto2Qtd"),document.getElementById("Produto2Valor")),
    produto3 = new Produto(document.getElementById("Produto3Nome"), document.getElementById("Produto3Qtd"),document.getElementById("Produto3Valor"));


    document.getElementById("Soma").innerHTML = numero;

    
}

let numero = 0;

class Produto {
    constructor(nome, qtd, valor){
        this.nome = nome;
        this.Qtd = qtd;
        this.Valor = valor;
        numero++;
    }
}