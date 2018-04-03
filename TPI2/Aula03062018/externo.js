alert("O nome informado é\n"+ nome);
var datanascimento = prompt("Qual ano você nasceu?");
var anoatual = prompt("Qual o ano atual?");
idade = anoatual - datanascimento;
alert("Sua idade é: " + idade + "anos de idade");

var suaidade = prompt("Digite a sua idade:");

if (suaidade >= 18){
	alert("Maior de idade");
} else {
	alert("Menor de idade");
}
