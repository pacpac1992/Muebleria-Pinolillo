<?php  
include "../lib/lib.php";
$obj=new Lib();
$query="";

$data=array('id','idusuario','status','fechainicio');
$arrayName = array('verpedido','','',5 );
?>
<table class="table table-striped table-condensed table-hover">
	<tr>
		<th>ID</th>
		<th>Id usuario</th>
		<th>Status</th>
		<th>Fecha inicio</th>
		<th>Numero de muebles</th>
		<th>Coste total</th>
		<th colspan="3">Opciones</th>
	</tr>
	<?php echo $obj->paginarListadoRegistros("pedido",$data,"where status='terminado'",$arrayName,"true","0","100");  ?>
</table>