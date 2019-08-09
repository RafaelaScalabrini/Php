<?php
	include_once("header.php");

	include_once ("../../Model/class.dao.php");
	include_once ("../../Model/class.animal.php");
	include_once ("../../Controller/class.animal.php");
	
	$animal = new AnimalController();
	
	$paginaatual = (isset($_GET["pagina"])) ? $_GET["pagina"] : 1;
	
	$totalregistrospg = 9; 
	
	$listaAnimal = $animal->listarAnimalPaginacao($paginaatual, $totalregistrospg);
	
	$totalregistros = $animal->totalAnimal();
	
	$quantidaderegistros = mysql_num_rows($listaAnimal);	
    	
  	$quantidadepaginas = ceil($totalregistros/$totalregistrospg);
	

?>

<div class="ossolistaanimal"><img src="imagens/osso.png"></div> <div class="titulolistaanimal">Animais</div>
<div class="clear"></div>	

<div class="boxanimal">
	<ul>
		<?php 
			while($linha = mysql_fetch_assoc($listaAnimal)){ 
		?>	
		
			<li class="itemlista">
				<div class="conteudo">
					<h2><?php echo $linha['nome']?></h2>
				  	<img src="../admin/animalpequeno/<?php echo $linha['nome_imagem']?>"/>
				  	<a href="detalhe.php?id_animal=<?php echo $linha['id_animal']?>">Detalhes</a>
				</div>
			</li>
			
			
			
		<?php } ?>	
	</ul>	
	
	<div class="paginacao">
		<div class="boxpg">
			<?php
				for($i_pg=1;$i_pg<=$quantidadepaginas;$i_pg++) { 
				    if ($paginaatual == $i_pg) { 
				   		echo "<span class=pgoff>[$i_pg]</span>";
						} else {
				 	  		echo '<a href="'.$PHP_SELF.'?pagina='.$i_pg.'" class="pg"<b>'." ".''.$i_pg.'</b></a>';
				    	}
				}
			?>
		</div>
	</div>
</div>

<br>
<br>


<?php include_once("footer.php");?>

