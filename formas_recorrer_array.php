<body>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Genero</th>
                <th scope="col">Correo</th>
            </tr>
        </thead>
        <tbody>

        <?php

        //FORMA 1
            for ($record = 0; $record < sizeof($usuarios); $record++) {
                ?>
                <tr>
                    <td><?php echo $usuarios[$record]['nombre'] ?></td>
                    <td><?php echo $usuarios[$record]['apellido'] ?></td>
                    <td><?php echo $usuarios[$record]['genero'] ?></td>
                    <td><?php echo $usuarios[$record]['correo'] ?></td>
                    <td><?php echo $usuarios[$record]['fec_nac'] ?></td>
                </tr>
                <?php
            }

            ?>

            <?php

            //FORMA 2
                foreach($usuarios as $key_asociativa){
                    ?>
                    <tr>
                    <td><?php echo $key_asociativa['nombre'] ?></td>
                    <td><?php echo $key_asociativa['apellido'] ?></td>
                    <td><?php echo $key_asociativa['genero'] ?></td>
                    <td><?php echo $key_asociativa['correo'] ?></td>
                    <td><?php echo $key_asociativa['fec_nac'] ?></td>
                </tr>
                    
                    <?php
                }

            ?>


            <?php

            //FORMA 3
            foreach ($usuarios as $key) {
            ?>
                <tr>
                    <?php
                    foreach ($key as $key2 => $valor) {
                    ?>
                        <td> <?php echo $valor ?> </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>


            <?php
            //FORMA 3.1
            foreach ($usuarios as $key) {
                echo "<tr>";
                foreach ($key as $key2 => $valor) {
                    echo "<td>$valor</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>