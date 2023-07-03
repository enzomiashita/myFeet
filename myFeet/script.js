function menuShow() {
	let menu = document.querySelector('.menu_login');
	if (menu.classList.contains('open')) {
		menu.classList.remove('open');
	} else {
		menu.classList.add('open');
	}
}



function verificarSenhas() {
	const senhaInput = document.getElementById('senha');
	const confirmarSenhaInput = document.getElementById('confirmarSenha');
	const mensagemValidacao = document.getElementById('mensagemValidacao');	

  	const senha = senhaInput.value;
  	const confirmarSenha = confirmarSenhaInput.value;

  	if (senha === confirmarSenha) {
    	mensagemValidacao.textContent = 'Senhas coincidem';
  	} else {
    	mensagemValidacao.textContent = 'Senhas não coincidem';
  	}

  	senhaInput.addEventListener('input', verificarSenhas);
	confirmarSenhaInput.addEventListener('input', verificarSenhas);
}

