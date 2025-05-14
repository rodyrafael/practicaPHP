<?php
    $nombre = $_GET['txtNombre'];
    $nota = $_GET['txtNota'];
    $curso = $_GET['cbxCurso'];
?>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Nota</th>
            <th>Curso</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$nombre?></td>
            <td><?=$nota?></td>
            <td>
                <?php
                    $nombreCurso=($curso=='1'?"JAVA ORACLE":($curso=='2'?"ING DE SOFTWARE":'BACKEND'));
                    echo $nombreCurso;
                ?>
            </td>
            <td>
                <?php
                    $estado=($nota>=12 && $nota<=20?"BIEN":($nota>=10 && $nota<=11?"REGULAR":"ERROR"));
                    echo $estado;
                ?>
            </td>
        </tr>
    </tbody>
</table>