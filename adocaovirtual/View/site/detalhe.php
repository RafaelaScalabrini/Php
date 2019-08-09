<?php
	session_start();
	session_cache_expire(10);

	include_once("header.php");

	include_once ("../../Model/class.dao.php");
	include_once ("../../Model/class.animal.php");
	include_once ("../../Controller/class.animal.php");
	
	$animal = new AnimalController();
	
	if(isset($_GET["id_animal"]) && ($_GET["id_animal"] >0 )){
		$animal->setId_Animal($_GET["id_animal"]);
		$animal->consultarAnimal();
	}
	
?>

<div class="ossodetalheanimal"><img src="imagens/osso.png"></div> <div class="titulodetalheanimal">Detalhes</div>
<div class="clear"></div>	

<div class="boxdetalhe">
	<table class="tabeladetalhe">
	
		<tr>
			<td><img src="../admin/animalgrande/<?php echo $animal->getNome_imagem()?>"/></td>
		</tr>
	</table>
	
	<table class="tabeladetalhe">
		<tr>
			<td>Nome		    </td>
			<td>Data Nascimento </td>
			<td>Cor             </td>
			<td>Raça		    </td>
			<td>Sexo		    </td>
			<td>Tipo		    </td>
		</tr>	
		
		<tr>
			<td><?php echo $animal->getNome(); ?>            </td>
			<td><?php echo $animal->getDt_Nascimento();?>	 </td>
			<td><?php echo $animal->getCor();?>              </td>
			<td><?php echo $animal->getRaca();?>		     </td>
			<td><?php echo $animal->getSexo() == "M" ? "Masculino" : "Feminino";?>      		 </td>
			<td><?php echo $animal->getTipo();?>      		 </td>
		
			<td><a href="identificacao.php">
			    	Adotar
				</a>
			</td>
			
			<td><a href="listaanimal.php">
			    	Voltar
				</a>
			</td>
			
		</tr>
	</table>	
</div>	
<br>
<br>


<?php include_once("footer.php"); ?>