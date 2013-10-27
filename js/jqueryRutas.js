function rutas(id){

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
		var nocacheurl = "queryruta.php?id="+id;

		// The code...

		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				document.getElementById("iframe").innerHTML=xmlHttp.responseText;
				//setTimeout('refreshdiv()',seconds*1000);
			}
		}
		xmlHttp.open("GET",nocacheurl,false);
		xmlHttp.send(null);
	}

