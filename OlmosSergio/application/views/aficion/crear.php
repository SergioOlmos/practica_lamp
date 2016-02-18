<script type="text/javascript" src="<?= base_url()?>assets/js/serialize.js"></script>

<!-- FUNCIÓN MANEJADORA del ENVÍO DEL FORMULARIO -->
<script type="text/javascript">
var conexion;

function crearAficion() {
	var formulario = document.getElementById('idFormAficion');
	var datosSerializados = serialize(formulario);
	conexion = new XMLHttpRequest();
	conexion.open('POST', '<?= base_url() ?>aficion/crearPost', true);
	conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	conexion.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	conexion.send(datosSerializados);
	conexion.onreadystatechange = function() {
		if (conexion.readyState==4 && conexion.status==200) {
			accionAJAX();
		}
	}
}

		
function accionAJAX() {
	textoRecibido = conexion.responseText;
	document.getElementById("idFooter").innerHTML=textoRecibido;
}	

</script>

<!--------------------------------------------->

<h1>Nueva afición</h1>
<form id="idFormAficion">
	<label for="idNom">Nombre afición</label> 
	<input type="text" name="nombreAficion" id="idNom"> 
	<input type="button" value="Enviar" class="button" onclick="crearAficion()">
</form>



