/*
* Parametros mandatorios
*/
   // var seconds = 2; // el tiempo en que se refresca
	var divid = "info"; // el div que quieres actualizar!
	var url = "const.php"; // el archivo que ira en el div

	function rutas(){

		// The XMLHttpRequest objec

	/*	var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}*/

		// Timestamp for preventing IE caching the GET request
	//	var timestamp = parseInt(new Date().getTime().toString().substring(0, 10));
		var ru = document.getElementById("rut").value;
		var cad = "";
		
if(ru=="ruta1"){		
cad ='<iframe src="http://mapsengine.google.com/map/embed?mid=zqbNufijL67U.kBhO5AuEmRPI" width="640" height="480"></iframe>';			
}else{
	if(ru=="ruta2"){		
cad ='<iframe src="http://mapsengine.google.com/map/embed?mid=zqbNufijL67U.kswbRYJcK2Rw" width="640" height="480"></iframe>';			
}else{
	if(ru=="ruta3"){		
cad ='<iframe src="http://mapsengine.google.com/map/embed?mid=zqbNufijL67U.kvMvu_noodq8" width="640" height="480"></iframe>';			
}
}
}

document.getElementById("ruta").innerHTML= cad;
		// The code...

	/*	xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				//document.getElementById(divid).innerHTML=xmlHttp.responseText;
				//setTimeout('refreshdiv()',seconds*1000);
			}
		}
		//xmlHttp.open("GET",nocacheurl,false);
		//xmlHttp.send(null);
/*/	}

	/*// Empieza la función de consul

	function consulta(){

		// The XMLHttpRequest object

		var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

		// Timestamp for preventing IE caching the GET request
	//	var timestamp = parseInt(new Date().getTime().toString().substring(0, 10));
		var visi=document.getElementById("resi").value;
		var val = document.getElementById("val").value;
		var nocacheurl = "consul.php?recidente="+visi+"&valor="+val+"";

		// The code...

		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				document.getElementById("sonido").innerHTML=xmlHttp.responseText;
				document.getElementById("player").play();
				//setTimeout('refreshdiv()',seconds*1000);
			}
		}
		xmlHttp.open("GET",nocacheurl,false);
		xmlHttp.send(null);
	}


	
*/