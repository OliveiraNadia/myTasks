<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">My Tasks</a>
            </li>
            <li class="breadcrumb-item active">Edit Tasks</li>
        </ol>

        <form action="<?= base_url(); ?>Tasks/atualizarTarefa" method="post">
            <input type="hidden" id="idTarefa" name="idTarefa" value="<?= $tasks[0]->idTarefa; ?>">
            <div class="col-md-8">     
                <div class="form-group">
                    <label for="email">Responsavel</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $tasks[0]->email; ?>" aria-describedby="nomeTarefa">
                    <small id="email" class="form-text text-muted"></small>
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
                    <label for="anexosTarefa">Anexos</label>
                    <input type="file" class="form-control-file" id="anexosTarefa" name="anexosTarefa" value="<?= $tasks[0]->anexosTarefa; ?>" aria-describedby="anexosTarefa">
                    <small id="anexosTarefas" class="form-text text-muted"></small>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="idStatus">Status:</label>
                        <select class="form-control" id="status" name="idStatus" required>
                            <option value="0">---</option>
                            <?php foreach ($tri as $linha) {
                                if ($linha->idStatus == $tasks[0]->status) {
                                    ?>
                                    <option value="<?= $linha->idStatus ?>"selected><?= $linha->Status; ?></option>

                                <?php } else { ?>
                                    <option value="<?= $linha->idStatus?>"><?= $linha->Status; ?></option>
                                <?php } ?>
<?php } ?>

                        </select>
                        <fieldset class="form-group">
                    </div> 


                    </fieldset>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>