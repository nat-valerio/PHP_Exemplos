<?php
    if($resultado->num_rows > 0){
        while($linha = $resultado-> fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $linha['nome'] ."</td>";
                echo "<td>" . $linha['email'] ."</td>";
                echo "<td>" . $linha['imagem'] ."</td>";
                echo "<td><a href='formulario.php?id= ".$linha['id']. "'>Editar </a> | ";
                echo "<a href='delete.php?id=" . $linha['id'] . "'>Apagar</a></td>";
            echo "</tr>";
            echo "<br>";
        }
    }else{
        echo "Nenhum resultado.";
    }
?>