$(document).ready(function()
{
	$('#f1').validate(
	{
	rules:
		{
			nome:
			{ 
				required: true,minlength: 3
			},
			idade:
			{
				required: true,number: true
			},
			cpf:
			{
				required: true,minlength: 3 
			},
		},
		messages:
		{
			nome:
			{ 
				required: " <span class=erro> O campo nome é obrigatorio.</span>",
				inlength : "<span class=erro> O campo nome deve conter no minimo 3 caracteres.</span>"
			},
			idade:
			{ 
				required: "<span class=erro> O campo idade é obrigatorio.</span>",
				number: "<span class=erro> O campo idade deve ser numérico.</span>"
			},
			cpf:
			{ 
				required: "<span class=erro> O campo cpf é obrigarotio.</span>",
				minlength: "<span class=erro>O campo nome deve conter no minimo 3 caracteres.</span>"
			},
		}
	});
});

