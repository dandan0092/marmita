<!DOCTYPE htlm>
<html>
  <head>
     <title>Casa das Marmitas</title>
	 <meta charset="UTF-8" />
	 <link rel="stylesheet" type="text/css" href="01 css.css">
     <!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  
  <body>
     
     <div id="topo">
	     <div id="logo"> <img src="img/figura1.png" width="110%"/> </div>
	     <div id="login"><img src="img/div2.png" width="300px"/></div>
	 </div>  
     
	 <div id="menu">
	     <b>
	     <a data-toggle="modal" data-target="#modalpedidos" href="#">PEDIDOS</a>
	     <a data-toggle="modal" data-target="#modalclientes" href="#">CLIENTES</a>
	     <a data-toggle="modal" data-target="#modalprodutos" href="#">PRODUTOS</a>
	     <a data-toggle="modal" data-target="#modalentregadores" href="#">ENTREGADORES</a>
	     <a data-toggle="modal" data-target="#modaltercerizadas" href="#">TERCERIZADAS</a>
	     </b>
		 
	 </div> 
	 
	 <div id="menu2">
	     <a  data-toggle="modal" data-target="#modal1" href="#"><img src="img/pd.png" width="66px" height="60px"/> </a>
	     <a  data-toggle="modal" data-target="#modal2" href="#"><img src="img/cliente.png" width="66px" height="60px"/> </a>
	     <a  data-toggle="modal" data-target="#modal3" href="#"><img src="img/pedi.png" width="60px" height="60px"/> </a>
	     <a  data-toggle="modal" data-target="#modal4" href="#"><img src="img/sentre.png" width="66px" height="60px"/> </a>
	     <a  data-toggle="modal" data-target="#modal5" href="#"><img src="img/terce.png" width="66px" height="60px"/> </a> 

     </div>
	 
	 <!-- Modal -->
	 <div class="modal fade" id="modalpedidos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/pd.png" width="66px" height="60px" /><b>  PEDIDOS</b></h4>
					</div>
				<div class="modal-body">
					<p><input size="60" value="Cliente"></p>
					<table> 
                      <tr><td><p> <b>Marmita 1 - 18,00</b> <input max="99" min="0" step="0.0" type="number"></td> <th width="110px"></td> <td><b>Entrega:</b><input size="3" value="4,50"></td></tr></p>          
                      <tr><td><p> <b>Marmita 2 - 15,00</b> <input max="99" min="0" step="0.0" type="number"></td> <th width="110px"></td> <td><b>Recebido:</b><input size="3" value="50,00"></td></tr></p>     
                      <tr><td><p> <b>Marmita 3 - 14,00</b> <input max="99" min="0" step="0.0" type="number"></td> <th width="110px"></td> <td><b>Total:</b><input size="3" value="22,50"></td></tr></p>
                      <tr><td><p> <b>Marmita 4 - 10,00</b> <input max="99" min="0" step="0.0" type="number"></td> <th width="110px"></td> <td><b>Troco:</b><input size="3" value="23,50"></td></tr></p>
                    </table>
					<br><h6><a><p aling="center">Clique aqui para saber o que há em cada marmita</p> </a></h6>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->
	
	
	
	 <!-- Modal 2 -->
	 <div class="modal fade" id="modalclientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/cliente.png" width="60px" height="60px" /> CLIENTES</h4>
					</div>
				<div class="modal-body">
					<p><input size="60" value="Nome"></p>
					<p><input size="60" value="Telefone"></p>
					<p><input size="60" value="Endereço""></p>
					<p><input size="60" value="Ponto de referência"></p>
					<p><b>Data de nascimento:</b> <input name="" size="8" value="16/03/1996"> <img src="img/cale.png" width="30px" height="30px" /></p>
				
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->	

	
	<!-- Modal 3 -->
	 <div class="modal fade" id="modalprodutos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/pedi.png" width="60px" height="60px" /> PRODUTOS </h4>
					</div>
				<div class="modal-body">
					<p><input size="60" value="Nome do produto"></p>
					<p><input size="60" value="Descrição do produto"></p>
					<table>
					<tr><td><p><input size="15" value="Tamanho"></td> <td width="95px"></td> <td><input size="20" value="Preço"></p></td></tr>
					</table>
					<br><p>Diponivel</p>
					<br><h6>Marcando o produto como disponivel ele aparecerá na tela de pedidos</h6>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->	
	
	
	
	<!-- Modal 4 -->
	 <div class="modal fade" id="modalentregadores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/entre.png" width="66px" height="60px" />  ENTREGADORES</h4>
					</div>
				<div class="modal-body">
					
					<p><input size="60" value="Nome do entregador"></p>					
					<p><input size="26" value="CPF"> <input size="28" value="RG"></p>				
					<p><input size="26" value="Telefone"></p>
					<p><input size="26" value="Empresa"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->

	
	
	<!-- Modal 5 -->
	 <div class="modal fade" id="modaltercerizadas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/terce.png" width="66px" height="60px" />  TERCERIZADAS</h4>
					</div>
				<div class="modal-body">
					
					<p><input size="60" value="Nome da empresa"></p>
					<p><input size="60" value="Endereço"></p>
					<p><input size="30" value="CNPJ"></p>
					<p><input size="25" value="Telefone"> <input name="" size="30" value="Email"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->



	<!-- Modal 6 -->
	 <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"> <img src="img/pd.png" width="66px" height="60px"/> PEDIDOS  </h4>
					</div>
				<div class="modal-body">
					<p><input size="60" value="Buscar Clientes"></p>
					<p><input size="40" value="Fulano dos Santos"></p>
					<p><input size="40" value="Bertano Baldoino"></p>
					<p><input size="40" value="Bertano Silva"></p>
					<img src="img/rela.png" width="55px" height="55px"/> <button type="button" class="btn btn-primary">Relatorio</button>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->		
	
	
	<!-- Modal 7 -->
	 <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/cliente.png" width="60px" height="60px" /> CLIENTES </h4>
					</div>
				<div class="modal-body">
				<p><input size="60" value="Buscar cliente"></p>
				<p><input size="60" value="Nome"></p>
				<p><input size="30" value="Telefone"></p>
				<p><input size="60" value="Endereço"></p>
				<p><input size="40" value="Ponto de referência"></p>
				<p>Data de nascimento: <input name="" size="8" value="16/03/1996"> <img src="img/cale.png" width="30px" height="30px" /></p>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->	
	
	
	
	<!-- Modal 8 -->
	 <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/pedi.png" width="66px" height="60px" />  PRODUTOS </h4>
					</div>
				<div class="modal-body">
					
					<p><input size="60" value="Buscar produto"></p>
					<p><input size="60" value="Nome do produto"></p>
					<p><input size="60" value="Descrição do produto"></p>
					<table>
					<tr><td><p><input size="15" value="Tamanho"></td> <td width="135px" ></td> <td><input size="15" value="Preço"></p></td>
					</table>
					<br><p>Diponivel</p>
					<br><h6>Marcando o produto como disponivel ele aparecerá na tela de pedidos</h6>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->
	
	<!-- Modal 8 -->
	 <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/entre.png" width="66px" height="60px" />  ENTREGADORES</h4>
					</div>
				<div class="modal-body">
					
					<p><input size="60" value="Buscar entregador"></p>
					<p><input size="60" value="Nome do entregador"></p>
					<p><input size="26" value="CPF"> <input size="28" value="RG"></p>				
					<p><input size="26" value="Telefone"></p>
					<p><input size="26" value="Empresa"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->
	
	<!-- Modal 9 -->
	 <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><img src="img/terce.png" width="66px" height="60px" />  TERCERIZADAS </h4>
					</div>
				<div class="modal-body">
					
					<div id="fds"> <p><input name="" size="60" border-radius="7px" value="Buscar empresa"></p> </div>
					<p><input size="60" value="Nome da empresa"></p>
					<p><input size="60" value="Endereço"></p>
					<p><input size="30" value="CNPJ"></p>
					<p><input size="25" value="Telefone"> <input name="" size="30" value="Email"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary">Salvar</button>
				</div>
			</div> <!-- fim do conteudo do modal -->
		</div> <!-- fim do dialog -->
	</div> <!-- fim da div myModal -->
	
	 


<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
  
  </html>