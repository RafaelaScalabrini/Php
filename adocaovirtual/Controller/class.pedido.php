<?php
class PedidoController extends PedidoModel {
	public function __construct(){}
	
	public function inserirDadosPedido(){
		$this->setId_Cliente(utf8_decode($_POST["id_cliente"]));
		$this->setDt_Adocao(utf8_decode($_POST["dt_adocao"]));
		$this->setTermo_Adocao(utf8_decode($_POST["termo_adocao"]));
		
		$resultado = $this->inserirPedido();
		
		return $resultado;
	}
	
	public function editarDadosPedido(){
		$this->setId_Pedido(utf8_decode($_POST["id_pedido"]));
		$this->setId_Cliente(utf8_decode($_POST["id_cliente"]));
		$this->setDt_Adocao(utf8_decode($_POST["dt_adocao"]));
		$this->setTermo_Adocao(utf8_decode($_POST["termo_adocao"]));
		
		$resultado = $this->editarPedido();
		
		return $resultado;
	}
	
	public function consultarDadosPedido(){
		$this->setId_Pedido(utf8_decode($_POST["id_pedido"]));
		return $this->consultarPedido();
	}
	
	public function listarDadosPedido(){
		$this->setId_Pedido(utf8_decode($_POST["id_pedido"]));
		return $this->listarPedido();
	}
	
	public function deletarDadosPedido(){
		$this->setId_Pedido(utf8_decode($_POST["id_pedido"]));
		return $this->deletarPedido();
	}

	public function get_post_action($name){
		$params = func_get_args();
	    foreach ($params as $name){
	       	if (isset($_POST[$name])){
	          	return $name;
	        }
	    }
	}
}
?>