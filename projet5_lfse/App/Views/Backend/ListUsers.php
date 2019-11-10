<?php ob_start(); ?>


<div class="container">




    <div class="row">


        <div class="col-md-12">
            <!-- <h4>Liste Utilisateurs</h4> -->
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">

                    <thead>


                        <th>Pseudo</th>
                        <th>Email</th>
                        <th>Département</th>


                        <th>Supprimer</th>
                    </thead>
                    <?php

                    foreach ($list as $data) {


                        ?>
                        <tbody>

                            <tr>

                                <td><?= htmlspecialchars($data['username']) ?></td>
                                <td><?= htmlspecialchars($data['email']) ?></td>
                                <td><?= htmlspecialchars($data['region']) ?></td>


                                <!-- <td>
                                    <p data-placement="top" href="index.php?action=deleteUser&userId=<?= $data['userId'] ?>" data-toggle="tooltip" title="delete"><button class="btn btn-danger btn-xs" data-title="delete" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td> -->
                            <?php
                            }
                            // $list->closeCursor();


                            ?>

                            <?php
                            for ($i = 1; $i <= $totalPages; $i++) {

                                if ($i == $currentPage) {
                                    echo $i . ' ';
                                } else {
                                    echo '<a href="index.php?action=adminListUsers&page=' . $i . '">' . $i . '</a> ';
                                }
                            }
                            ?>

                            </tr>








            </div>
            <?php $content = ob_get_clean(); ?>
            <?php require('AdminTemplate.php'); ?>