<?= $header; ?> <!-- Header -->

<a href="<?= base_url('insert') ?>" class="btn btn-primary mb-1"> Insert a footballer </a>

            <table class="table table-light table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Altura</th>
                        <th>Pie Hábil</th>
                        <th>Nacionalidad</th>
                        <th>Posición</th>
                        <th>Club</th>
                        <th>Selección</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>

                        <?php
                            foreach($futbolista as $value):
                        ?>
                        <tr>
                            <td> <?= $value['idFutbolista']; ?> </td>
                            <td> <?= $value['nombreFutbolista']; ?> </td>
                            <td> <?= $value['edad']; ?> </td>
                            <td> <?= $value['altura']; ?> </td>
                            <td> <?= $value['pieHabil']; ?> </td>
                            <td> <?= $value['nacionalidad']; ?> </td>
                            <td> <?= $value['posicion']; ?> </td>
                            <td> <?= $value['idClub']; ?> </td>
                            <td> <?= $value['idSeleccion']; ?> </td>
                            <td>
                                <a href="<?= base_url('edit/' . $value['idFutbolista']);  ?>" type="button" class="btn btn-dark">Edit</a>
                                <a href="<?= base_url('delete/' . $value['idFutbolista']);  ?>" type="button" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <?php
                            endforeach;
                        ?>

                    </tbody>
            </table>

<?= $footer; ?> <!-- Footer -->