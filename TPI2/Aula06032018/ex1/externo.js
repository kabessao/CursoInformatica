var valor1 = parseInt(prompt("Digite o primeiro numero:"));
opcao = prompt("Opção: (1)+, (2)-, (3)/, (4)-");
valor2 = parseInt(prompt("Digite o segundo numero:"));
switch(opcao){
	case "1":
		var resultado = valor1 + valor2;
		break;
	case "2":
		var resultado = valor1 - valor2;
		break;
	case "3":
		var resultado = valor1 / valor2;
		break;
	case "4":
		var resultado = valor1 * valor2;
		break;
	default:
		alert("Se é burro cara!");
		var resultado = 0;
		break;
}
alert("Resultado \n" + resultado);
