<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Create Task</a>
            </li>
            <li class="breadcrumb-item active">My Tasks</li>
        </ol>
        <div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            My Tasks
                        </div>
                      
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Titulo</th>
                                        <th>Data Inicial</th>
                                        <th>Data Final</th>
                                        <th>Descrição</th>
                                        <th>anexos</th>
                                        <th>Status</th>

                                    </tr>
                                <tbody>
                                    <?php foreach ($tasks as $tarefa) { ?>
                                        <tr>
                                            
                                           <td><?= $tarefa->idTarefa; ?></td>
                                            <td><?= $tarefa->email; ?></td>
                                            <td><?= $tarefa->tituloTarefa; ?></td>           
                                            <td><?= date( 'd/m/Y', strtotime( $tarefa->dataInicialTarefa ) ); ?></td>
                                            <td><?= date( 'd/m/Y', strtotime( $tarefa->dataFinalTarefa ) ); ?></td>
                                            <td><?= $tarefa->descricaoTarefa; ?></td>
                                            <td><?= $tarefa->anexosTarefa; ?></td>
                                            <td><?= $tarefa->idStatus ==1?'Done':'Aberto'; ?></td>
                                           
                                            
                                            <td><a href="<?= base_url('tasks/atualizar/' . $tarefa->idTarefa) ?>"
                                                   class="btn btn-primary btn-sm dropdown-toggle btn-group">Atualizar</a></td>                             
                        <td><a href="<?php echo base_url('tasks/excluir/'.$tarefa->idTarefa) ?>" 
						class="btn btn-danger btn-group" onclick="return confirm('Deseja mesmo excluir o usuário?');">Excluir</a></td>


                                        <?php } ?>
                                    </tr>


                                </tbody>
                            </table>

                        </div>


                    </div>
