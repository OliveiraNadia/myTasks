<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">My Tasks</a>
            </li>
            <li class="breadcrumb-item active">Edit Tasks</li>
        </ol>
       
        <form action="<?=base_url();?>Tasks/atualizarTarefa" method="post">
   <input type="hidden" id="idTarefa" name="idTarefa" value="<?= $tasks[0]->idTarefa;?>">
  <div class="col-md-8">     
  <div class="form-group">
    <label for="nomeTarefa">Nome</label>
    <input type="text" class="form-control" id="nomeTarefa" name="nomeTarefa" value="<?= $tasks[0]->nomeTarefa; ?>" aria-describedby="nomeTarefa">
    <small id="nomeTarefa" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="tituloTarefa">Titulo</label>
    <input type="text" class="form-control" id="tituloTarefa" name="tituloTarefa" value="<?= $tasks[0]->tituloTarefa; ?>"  aria-describedby="tituloTarefa" >
    <small id="tituloTarefa" class="form-text text-muted"></small>
  </div>
       
  <div class="form-group">
    <label for="dataInicialTarefa">Data Inicial</label>
    <input type="date" class="form-control" id="dataInicialTarefa" value="<?= $tasks[0]->dataInicialTarefa; ?>" name="dataInicialTarefa">
  </div>
       <div class="form-group">
    <label for="dataFinalTarefa">Data Final</label>
    <input type="date" class="form-control" id="dataFinalTarefa" value="<?= $tasks[0]->dataFinalTarefa; ?>" name="dataFinalTarefa">
  </div>
  
  <div class="form-group">
    <label for="descricaoTarefa">Descrição</label>
    <textarea class="form-control" id="descricaoTarefa" name="descricaoTarefa" value="<?= $tasks[0]->descricaoTarefa; ?>" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="anexosTarefas">Anexos</label>
    <input type="file" class="form-control-file" id="anexosTarefas" name="anexosTarefas" value="<?= $tasks[0]->anexosTarefas; ?>" aria-describedby="anexosTarefas">
    <small id="anexosTarefas" class="form-text text-muted"></small>
  </div>
  <fieldset class="form-group">
  </div> 
 
    
  </fieldset>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>