window.onload = function (e){

    let nome = document.getElementById("nome");
    let razaoSocial = document.getElementById("razaoSocial");
    let cnpj = document.getElementById("cnpj");
    let email = document.getElementById("email");
    let telefone = document.getElementById("telefone");
    let celular = document.getElementById("celular");
    let endereco = document.getElementById("endereco");

    fetch('http://localhost/PhpBackEnd/cliente/59')
    .then(
        response => response.json()
    )
    .then(data => {
        console.log(data);
       nome.innerHTML = data.nome;
       razaoSocial.innerHTML =data.razaoSocial;
       cnpj.innerHTML = "CNPJ: " + data.cnpj;
       email.innerHTML = "E-mail: " + data.email;
       telefone.innerHTML = "Telefone: " + data.telefone;
       celular.innerHTML = "Celular: " + data.celular;
       endereco.innerHTML = "Endereço: " + data.endereco + ', ' + data.numero + ', ' + data.bairro;
        }
    )
    .catch(error => console.error(error))
}


