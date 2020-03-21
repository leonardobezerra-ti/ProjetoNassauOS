<?php
  require 'conexao.php';  
  
?>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>
  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>
<body>

<form class="form-horizontal" action="adiciona_cliente.php" accept_charset="utf8" method="POST">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro de Cliente</div>
    
    <div class="panel-body">
<div class="form-group">

<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="nome" name="nome" placeholder="Nome Completo" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
  </div>
  
  <label class="col-md-1 control-label" for="Nome">Data Cadastro<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>


</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
  <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
  
</div> 

<!-- Email com validação no pattern-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  >
    </div>
  </div>
</div>


<!-- Search input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-2">
    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
  </div>
  <div class="col-md-2">
      <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
    </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Rua</span>
      <input id="endereco" name="endereco" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
    <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Nº <h11>*</h11></span>
      <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
  
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon">Bairro</span>
      <input id="bairro" name="bairro" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Cidade</span>
      <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text">
    </div>
    
  </div>
  
   <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon">Estado</span>
     <!-- <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">-->
     <select required id="estado" name="estado" class="form-control">
      <option value=""></option>
      <option value="Acre">Acre</option>
      <option value="Amapá">Amapá</option>
      <option value="Amazonas">Amazonas</option>
      <option value="Bahia">Bahia</option>
      <option value="Ceará">Ceará</option>
      <option value="Distrito Federal">Distrito Federal</option>
      <option value="Espírito Santo">Espírito Santo</option>
      <option value="Goiás">Goiás</option>
      <option value="Maranhão">Maranhão</option>
      <option value="Mato Grosso">Mato Grosso</option>
      <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
      <option value="Minas Gerais">Minas Gerais</option>
      <option value="Pará">Pará</option>
      <option value="Paraíba">Paraíba</option>
      <option value="Paraná">Paraná</option>
      <option value="Pernambuco">Pernambuco</option>
      <option value="Piauí">Piauí</option>
      <option value="Rio de Janeiro">Rio de Janeiro</option>
      <option value="Rio Grande do Norte">Rio Grande do Norte</option>
      <option value="Rio Grande do Sul">Rio Grande do Sul</option>
      <option value="Rondônia ">Rondônia</option>
      <option value="Roraima">Roraima</option>
      <option value="Santa Catarina">Santa Catarina</option>
      <option value="São Paulo">São Paulo</option>
      <option value="Sergipe">Sergipe</option>
      <option value="Tocatins">Tocatins</option>

    </select>
    </div>
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success";  type="Submit">Cadastrar</button>
    <a href="index.php"><button type="button" id="Cancelar"name="Cancelar" class="btn btn-danger" href="cadastro_cliente.php">Cancelar</button>
     
   
   
  </div>
</div>
  
   
</div>
</div>


</fieldset>
</form>

</body>
</html>