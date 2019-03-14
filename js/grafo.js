

function valida_tipo(){

		var qtde_v_field =document.getElementById('qtde_v');
		var graph_type_field = document.getElementById('graph_type');
		var qtde_a_field = document.getElementById('qtde_a');
		var max_a;
		var qtde_a = qtde_a_field.value;
		var qtde_v = qtde_v_field.value;
		var graph_type= graph_type_field.value;
		

		if(graph_type == "1"){
			
				console.log('chegou');
				swal({
					title: "Erro",
					text: "quantidade de vértices elevado",
					icon: "error",
				},
				
				
		  		 );
		document.getElementById('div_inputs').innerHTML ="";
		}

}
			

	

		function clearDiv(element_id){
			document.getElementById(element_id).innerHTML ="";
		}

		function verifica_ori_des(){
			var qtde_v_field =document.getElementById('qtde_v');
			var graph_type_field = document.getElementById('graph_type');
			var qtde_a_field = document.getElementById('qtde_a');
			var max_a;
			var qtde_a = qtde_a_field.value;
			var qtde_v = qtde_v_field.value;
			var graph_type= graph_type_field.value;

			for (var i= 0; i <qtde_a; i++){
				var origin_field =document.getElementById('origin'+i);
				var destiny_field = document.getElementById('graph_type'+i);
				
			}

		}

function geraInputs(){
	var qtde_v_field =document.getElementById('qtde_v');
		var graph_type_field = document.getElementById('graph_type');
		var qtde_a_field = document.getElementById('qtde_a');
		var max_a;
		var qtde_a = qtde_a_field.value;
		var qtde_v = qtde_v_field.value;
		var graph_type= graph_type_field.value;
	for (var i = 0; i < qtde_a; i++) {
		var OriginBox = document.createElement("input");
		var DestinyBox = document.createElement("input");
		var LabelDesBox = document.createElement("label");
		var LabelOriBox = document.createElement("label");
		var div = document.createElement("div");
		var OriginTxt = document.createTextNode("Origem da aresta "+(i+1)+" :");
		var DestinyTxt = document.createTextNode("Destino da aresta "+(i+1)+" :");
		var aresta = document.createTextNode("ARESTA Nº "+(i+1)+"");

		OriginBox.setAttribute("type", "number");
		DestinyBox.setAttribute("type", "number");
		LabelDesBox.setAttribute("class", "form-control");
		LabelOriBox.setAttribute("class", "form-control");
		div.setAttribute("class","col-sm-3");


		OriginBox.setAttribute("id", "origin"+i);
		DestinyBox.setAttribute("id", "destiny"+i);
		LabelDesBox.setAttribute("id", "LabelDesBox"+i);
		LabelDesBox.setAttribute("text", "Destino: ");
		LabelOriBox.setAttribute("id", "LabelOriBox"+i);
		div.setAttribute("id","div"+i);


		OriginBox.setAttribute("name", "origin"+i);
		DestinyBox.setAttribute("name", "destiny"+i);

		OriginBox.setAttribute("title","origin"+i);
		DestinyBox.setAttribute("title","destiny"+i);

		OriginBox.setAttribute("class", "form-control");
		DestinyBox.setAttribute("class", "form-control");

		OriginBox.setAttribute("value", "");
		DestinyBox.setAttribute("value", "");
		document.getElementById("div_inputs").appendChild(div);
		div.appendChild(aresta);
		div.appendChild(LabelOriBox);
		div.appendChild(LabelDesBox);
		LabelOriBox.appendChild(OriginTxt);
		LabelDesBox.appendChild(DestinyTxt);
		LabelOriBox.appendChild(OriginBox); 
		LabelDesBox.appendChild(DestinyBox); 
		
		
}
	}
