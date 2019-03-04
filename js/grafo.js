function valida_tipo(){

		var qtde_v_field =document.getElementById('qtde_v');
		var graph_type_field = document.getElementById('graph_type');
		var qtde_a_field = document.getElementById('qtde_a');
		var max_a;
		var qtde_a = qtde_a_field.value;
		var qtde_v = qtde_v_field.value;
		var graph_type= graph_type_field.value;

		if(graph_type == "Grafo"){
			if(qtde_a > qtde_v*qtde_v){
				console.log('chegou');
				swal({
					title: "Erro",
					text: "quantidade de vértices elevado",
					icon: "error",
				});
				qtde_a_field.focus();
				}
			}

		}

		
	
