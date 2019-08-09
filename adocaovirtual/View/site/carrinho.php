<?php
	session_start();
	
	include_once("../../Model/class.dao.php");
	include_once("../../Model/class.animal.php");
	include_once("../../Controller/class.animal.php");
	
	$animal = new AnimalController();
	
	if(!isset($_SESSION['carrinho'])){
		$_SESSION['carrinho'] = array();
	}
	
	//adiciona produto
	
	if(isset($_GET['acao'])){
		
		//ADICIONAR CARRINHO
		if($_GET['acao'] == 'add'){
			$id = intval($_GET['id_animal']);
			if(!isset($_SESSION['carrinho'][$id])){//se não existir o produto no carrinho
				$_SESSION['carrinho'][$id] = 1;
			}else{
				$_SESSION['carrinho'][$id] += 1; // se clicar de novo no link vai adicionar mais um produto 
			}
		}
		
		//REMOVER CARRINHO
		if($_GET['acao'] == 'del'){
			$id = intval($_GET['id_animal']);
			if(isset($_SESSION['carrinho'][$id])){
				unset($_SESSION['carrinho'][$id]);
			}
		}
	}
?>

<table>
	<caption>Carrinho de compras</caption>

	<thead>
		<tr>
			<th width="244">Animal</th>
			<th width="80">Remover</th>
		</tr>
  	</thead>
  
	  	<tfoot>	
	  		<tr>
	  		<td colspan="5"><a href="pedido.php">Continuar Adotando</a></td>
	  		</tr>
	  	</tfoot>
	  
	  	<tbody>
	  		<?php
				if(count($_SESSION['carrinho']) == 0){// se a pessoa entrou direto e nao selecionou nenhum animal
					echo '<td><td colspan="5">Não ha animais adotados</td>';
				}else{
					
					foreach($_SESSION['carrinho'] as $id){
						$listaAnimal = $animal->listarAnimalId($id);
						$linha = mysql_fetch_assoc($listaAnimal);
						
						$nome = $linha['nome'];
						
					    echo '<tr>
					    		<td>'.$nome.'</td>
					    		<td><a href="?acao=del&id='.$id.'">Remove</a></td>
					    	  </tr>';
					}
				}
	  		?>
	  	
	  	</tbody>
</table>




