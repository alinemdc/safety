

(function () {
  'use strict';
  window.addEventListener('load', function () {
    // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
    var forms = document.getElementsByClassName('cadastro-form');
    // Faz um loop neles e evita o envio
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


function enviarForm() {
  var form = document.getElementById('cadastro');
  var data = {};

  var radios = document.getElementsByName("categoria");
  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      var radio = radios[i].value;
    }
  }

  data['nome'] = form.nome.value;
  data['razaoSocial'] = form.razaoSocial.value;
  data['cnpj'] = form.cnpj.value;
  data['email'] = form.email.value;
  data['telefone'] = form.telefone.value;
  data['celular'] = form.celular.value;
  data['endereco'] = form.endereco.value;
  data['numero'] = form.numero.value;
  data['complemento'] = form.complemento.value;
  data['bairro'] = form.bairro.value;
  data['id_cidade'] = form.cidade.value;
  data['id_categoria'] = radio;

  // console.log(JSON.stringify(data));
  fetch('http://localhost/PhpBackEnd/cliente', {
    method: 'POST',
    body: JSON.stringify(data)
  })
    .then((response) => {
      if (response.ok) {
        document.getElementById("enviado").style.display = "block";
        return response.json()
      } else {
        document.getElementById("erro").style.display = "block";
        return Promise.reject({ status: res.status, statusText: res.statusText });
      }

    })
    .then((data) => console.log(data))
    .catch(err => console.log('Error message:', err.statusText));

}

