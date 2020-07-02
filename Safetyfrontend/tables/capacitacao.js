window.onload = function(e) {
	fetch(
		'http://localhost/PhpBackEnd/capacitacao', {		
    }).then(response => response.json())	
    			
	.then(data => { 
        console.log(data);
		data.forEach(capacitacao => {  
            var table = document.getElementById("tabelaCapacitacao");
            
			var row = table.insertRow(-1);
			var dataColuna = row.insertCell(0);
			var assuntoColuna = row.insertCell(1); 
			var listaColuna = row.insertCell(2); 
			var proximaColuna = row.insertCell(3); 
			dataColuna.innerHTML = capacitacao.data;
			assuntoColuna.innerHTML = capacitacao.assunto;
			listaColuna.innerHTML = "<a  href='" + capacitacao.lista + "' target='_blank'><i class='fa fa-file-pdf-o' aria-hidden='true'></i>";
			proximaColuna.innerHTML = capacitacao.proxima;
		})
	}).catch(error => console.error(error))
}
