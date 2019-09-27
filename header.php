<?php
    // variáveis
    $arrayMenu = [
        ['nome' => 'Perfil', 'link' => '#perfil'],
        ['nome' => 'Meus Endereços', 'link' => '#enderecos'],
        ['nome' => 'Minhas Compras', 'link' => '#compras'],
        ['nome' => 'Sair', 'link' => '#sair'] 
    ];

    function criarMenu($array){
        echo '<ul>';
        foreach($array as $obj){
                echo '<li><a>'. $obj['nome'] . '</a></li>';
        }
        echo '</ul>';
       
    }
?>

<div class="fixed-header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#">Puzzle</a>
        </div>
            <nav class="main-menu">
            <?php
                echo '<ul>';
                criarMenu($arrayMenu);
                echo '</ul>';
            ?>
            </nav>
    </div>
</div>
       