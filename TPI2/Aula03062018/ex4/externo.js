var usuario = prompt("Digite seu nome de usuario:");
senha = prompt("Digite sua senha:");
if ((usuario == "henrique") &&(senha = "1234")){
	location.replace("https://google.com");
}else{
	alert("sai fora mano");
	document.write("Sua senha esta errada<br>");
		document.writeln("Isso pode significar duas coisas<br>");
		document.writeln("1). voce e burro e errou sua propria senha errada<br>");
		document.writeln("2). Voce e um viadinho tentando me invadir");
}
