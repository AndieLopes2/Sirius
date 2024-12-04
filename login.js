const container = document.getElementById('container');
const overlayCon = document.getElementById('overlayCon');
const overlayBtn = document.getElementById('overlayBtn');

overlayBtn.addEventListener('click', ()=> {
    container.classList.toggle('right-panel-active');

    overlayBtn.classList.remove('btnScaled');
    window.requestAnimationFrame( ()=> {
        overlayBtn.classList.add('btnScaled');
    })

}); 


// Registro 

function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = field.nextElementSibling;

    if (field.type === "password") {
        field.type = "text";
        icon.textContent = "🙈";  // ícone de "esconder"
    } else {
        field.type = "password";
        icon.textContent = "👁️";  // ícone de "mostrar"
    }
}


function validateAge() {
    const nome = document.getElementById('nome').value.trim();
    const sobrenome = document.getElementById('sobrenome').value.trim();
    const email = document.getElementById('email').value.trim();
    const dataNascimento = document.getElementById('data_nascimento').value;
    const errorMessage = document.getElementById('errorMessage');
    const senha = document.getElementById('senha').value;
    const confirmSenha = document.getElementById('confirm_senha').value;

    if (!nome || !sobrenome || !email || !senha || !confirmSenha || !dataNascimento) {
        errorMessage.textContent = "Todos os campos devem ser preenchidos.";
        return;
    }

    if (dataNascimento) {
        const today = new Date();
        const birthDate = new Date(dataNascimento);
        let age = today.getFullYear() - birthDate.getFullYear();
        const monthDifference = today.getMonth() - birthDate.getMonth();
        const dayDifference = today.getDate() - birthDate.getDate();
        

        // Ajuste de idade considerando o mês e o dia
        if (monthDifference < 0 || (monthDifference === 0 && dayDifference === 0)) {
            age--;
        }

        if (age < 14) {
            errorMessage.textContent = "Você deve ter pelo menos 14 anos para se registrar.";
            return;
        }

        if (senha !== confirmSenha) {
            errorMessage.textContent = "As senhas não coincidem.";
            return;
        }

        const senhaRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[\W_]).{1,50}$/;

        if (!senhaRegex.test(senha)) {
            errorMessage.textContent = "A senha deve conter ao menos um caractere especial, uma letra maiúscula e um número.";
            return;
        }


        errorMessage.textContent = "";
        alert("Registro bem-sucedido!");
        // Aqui você pode enviar o formulário para o servidor
    } else {
        errorMessage.textContent = "Por favor, insira sua data de nascimento.";
    }

    
}