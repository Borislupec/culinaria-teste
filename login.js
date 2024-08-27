document.getElementById('registrar').addEventListener('click', function() {
    var user = document.getElementById('user').value;
    var senha = document.getElementById('senha').value;
 
    if (!user || !senha) {
        alert('Preencha ambos os campos para registrar');
        return;
    }
 
    var usuarioExistente = usuarios.some(u => u.usuario === user);
 
    if (usuarioExistente) {
        alert('Usuário já registrado');
    } else {
       
        usuarios.push({ usuario: user, senha: senha });
        alert('Usuário registrado com sucesso');
    }
});