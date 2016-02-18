<script type="text/javascript" src="<?= base_url()?>assets/js/serialize.js"></script>

<!-- FUNCIÓN MANEJADORA del ENVÍO DEL FORMULARIO -->
<script type="text/javascript">
var conexion;

function crearPersona() {
	var formulario = document.getElementById('idFormPersona');
	var datosSerializados = serialize(formulario);
	conexion = new XMLHttpRequest();
	conexion.open('POST', '<?= base_url() ?>persona/crearPost', true);
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

<h1>Nueva persona</h1>
<form id="idFormPersona">
<fieldset>
<legend>Datos Personales</legend>
	<label for="idNom">Nombre</label> 
	<input type="text" name="nombrePersona" id="idNom"> 
	<input type="button" value="Enviar" class="button" onclick="crearPersona()">
	<fieldset>
	<legend>Aficiones</legend>
	<form>

	</form>
	</fieldset>
</fieldset>	
</form>




