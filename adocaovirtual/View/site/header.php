<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml; charset=utf-8" />
<title>Adoção Virtual</title>

<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="css/pagina.css" />
<link rel="stylesheet" type="text/css" href="css/login.css" />

<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/mascara.js"></script>
<script language="javascript" type="text/javascript" src="js/cidades-estados.js"></script>
<script language="javascript" type="text/javascript" src="js/cidades-estados-auxiliar.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery-validate.js"></script>
<script language="javascript" type="text/javascript" src="js/validador.js"></script>
<script language="javascript" type="text/javascript" src="js/pstrength.js"></script>
<script language="javascript" type="text/javascript" src="js/alphanumeric.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
</head>

<body>
	<div id="header">
    	<div id="box_header">    
            <div class="logotipo">
                <a href="index.php"><img src="imagens/logotipo.png" width="185" height="146" /></a>
            </div>
    		<div class="slogan">
            	"A grandeza de uma nação pode ser julgada pelo<br />modo que seus animais são tratados."<br />(Mahatma Gandhi)
            </div>      
            <div class="saudacao">Olá <strong><?php echo $_SESSION["ciente_nome"] ?></strong>, seja bem vindo</div>
            <div class="buscar">
            	<p class="frase_1"><strong>Todos estão esperando por um lar.</strong></p>
                <p class="frase_2"><strong>Pra qual você vai dar uma chance hoje?</strong></p>
            	<ul class="selecionar_tipo_animal">
                	<li><a href="#" title="Selecionar Cachorros" class="cachorro_ativo"></a></li>
                    <li><a href="#" title="Selecionar Gatos" class="gato_inativo"></a></li>
                    <li><a href="#" title="Selecionar Outros" class="outros_inativo"></a></li>
                </ul>
                <div class="clear"></div>
                <div class="formulario_busca">
                	<form name="form_pesquisa" id="form_pesquisa" method="get" action="#">
                    <input type="hidden" name="tipo_animal" value="1" />
                    <select name="estados" id="estados" class="select_busca">
                    	<option value="0">Selecione sua Busca</option>
                    	<option value="AC">Acre </option>
                    	<option value="AL">Alagoas </option>
                    	<option value="AP">Amapá </option>
                    	<option value="AM">Amazonas </option>
                    	<option value="BA">Bahia  </option>
                    	<option value="CE">Ceará </option>
                    	<option value="DF">Distrito Federal </option>
                    	<option value="ES">Espírito Santo </option>
                    	<option value="GO">Goiás </option>
                    	<option value="MA">Maranhão</option>
                    	<option value="MT">Mato Grosso </option>
                    	<option value="MS">Mato Grosso do Sul </option>
                    	<option value="MG">Minas Gerais </option>
                    	<option value="PA">Pará </option>
                    	<option value="PB">Paraíba </option>
                    	<option value="PR">Paraná </option>
                    	<option value="PE">Pernambuco </option>
                    	<option value="PI">Piauí </option>
                    	<option value="RJ">Rio de Janeiro </option>
                    	<option value="RN">Rio Grande do Norte </option>
                    	<option value="RS">Rio Grande do Sul </option>
                    	<option value="RO">Rondônia </option>
                    	<option value="RR">Roraima </option>
                    	<option value="SC">Santa Catarina </option>
                    	<option value="SP">São Paulo </option>
                    	<option value="SE">Sergipe </option>
                    	<option value="TO">Tocantins </option>
                    </select>
                    <input type="image" name="buscar" src="imagens/btn_buscar.png" />
                    </form>
                </div>                  
            </div>      
            <div class="clear"></div>
            <nav id="menu_esquerdo">
            	<ul>
            		<li><a href="">HOME</a></li>
            		<li><a href="listaanimal.php">animais</a></li>
            		<li><a href="">finais felizes</a></li>
            		<li><a href="quemsomos.php">quem somos</a></li>
            		<li><a href="evento.php">eventos</a></li>
            		<li><a href="">parceiros</a></li>
            		<li><a href="">doações</a></li>
            	</ul>
            </nav>
    	</div>
    </div>
<div class="clear"></div>