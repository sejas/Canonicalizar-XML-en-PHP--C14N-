<?php
/* Author: Antonio Sejas
   URI: http://antonio.sejas.es
   date: FEB-2012
   License: Chttp://creativecommons.org/licenses/by-nc-sa/3.0/
*/

include ("c14n.php");
if(isset($_POST['texto'])){
	$jsonSha1["cano"]=base64_encode(sha1( C14N::canonicalizar($_POST['texto']),true));
	$jsonSha1["nocano"]=base64_encode(sha1( $_POST['texto'],true));
	echo json_encode($jsonSha1);

	echo C14N::canonicalizar($_POST['texto']);	
}else{
	mostrar_form();
}//end if

function mostrar_form(){ ?>
<h1>Pega el XML</h1>
<form method="post" accept-charset="UTF-8">
	<div>
		<textarea name="texto" style="height:90%;width:90%;" ></textarea>
	</div>
	<input type="submit" />
</form>
<?php 
}
?>
