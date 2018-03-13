var nota1 = parseInt(prompt("Digite sua primeira nota:"));
nota2 = parseInt(prompt("Digite sua segunda nota:"));
nota3 = parseInt(prompt("Digite sua terceira nota:"));
media = (nota1 + nota2 + nota3)/3;
alert("sua nota e: "+ media);

document.write("sua nota e: "+ media);

if (media >= 5 ){
	document.bgColor="blue";
	alert("acerto!");
}else{
	document.bgColor="red";
	alert("como vc e burro cara!");
}
