window.onload = function(e) {
	fetch(
		'http://localhost/PhpBackEnd/visita', {		
    }).then(response => response.json())	
    			
	.then(data => { 
        console.log(data);
		data.forEach(visita => {  
            var table = document.getElementById("tabelaVisita");
            
			var row = table.insertRow(-1);
			var dataColuna = row.insertCell(0);
			var avaliacaoColuna = row.insertCell(1); 
			var responsavelColuna = row.insertCell(2); 
			var relatorioColuna = row.insertCell(3); 
			var planoColuna = row.insertCell(4); 
			dataColuna.innerHTML = visita.data;
			avaliacaoColuna.innerHTML = "<img src='" + visita.avaliacao + "'></img>" ;
			responsavelColuna.innerHTML = visita.responsavel;
			relatorioColuna.innerHTML = "<a  href='" + visita.relatorio + "' target='_blank'><i class='fa fa-file-pdf-o' aria-hidden='true'></i>";
			planoColuna.innerHTML = "<a  href='" + visita.plano + "' target='_blank'><i class='fa fa-file-word-o' aria-hidden='true'></i>";
		})
	}).catch(error => console.error(error))
}
