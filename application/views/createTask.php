<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Create Task</a>
            </li>
            <li class="breadcrumb-item active">My Tasks</li>
        </ol>

        <form action="<?= base_url(); ?>Tasks/cadastrarTarefa" method="post">
            <div class="col-md-8">     
                <div class="form-group">
                    <label for="email">Responsável</label>
                    <input type="text" class="form-control" id="nomeTarefa" name="email" aria-describedby="email">
                    <small id="email" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="tituloTarefa">Titulo</label>
                    <input type="text" class="form-control" id="tituloTarefa" name="tituloTarefa" aria-describedby="tituloTarefa" >
                    <small id="tituloTarefa" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="dataInicialTarefa">Data Inicial</label>
                    <input type="date" class="form-control" id="dataInicialTarefa" name="dataInicialTarefa">
                </div>
                <div class="form-group">
                    <label for="dataFinalTarefa">Data Final</label>
                    <input type="date" class="form-control" id="dataFinalTarefa" name="dataFinalTarefa">
                </div>

                <div class="form-group">
                    <label for="descricaoTarefa">Descrição</label>
                    <textarea class="form-control" id="descricaoTarefa" name="descricaoTarefa" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="anexosTarefas">Anexos</label>
                    <input type="file" class="form-control-file" id="anexosTarefas" name="anexosTarefas" aria-describedby="anexosTarefas">
                    <small id="anexosTarefas" class="form-text text-muted"></small>
                </div>
                <fieldset class="form-group">
            </div>  

           <div class="row">                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="idStatus">Status:</label>
                            <select id="status" class="form-control" name="idStatus" required>
                                <option value="0">----</option>
                                <option value="1">Done</option>
                                <option value="2">Processada</option>
                                <option value="3">Aberto</option> 
                            </select>
                        </div>
                    </div>
                </div>
                </div>
                </fieldset>

                <button type="submit" class="btn btn-primary">Enviar</button>
        </form>