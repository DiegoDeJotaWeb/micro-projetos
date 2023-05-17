<ul>



    <ul>
        <?php
        if (
            $_SESSION['nivel_admin'] == 1 || $_SESSION['nivel_admin'] == 2 || $_SESSION['nivel_admin'] == 3
        ) {
        ?>
            <li>Dashboard</li>
            <li>Cadastros</li>
        <?php } ?>
        <ul>
            <?php
            if (
                $_SESSION['nivel_admin'] == 2 || $_SESSION['nivel_admin'] == 3
            ) {
            ?>
                <li>Produtos</li>
                <li>Ofertar</li>
            <?php } ?>

            <?php
            if (
                $_SESSION['nivel_admin'] == 3
            ) {
            ?>
                <li>Cupom</li>
            <?php } ?>

            <?php
            if (
                $_SESSION['nivel_admin'] == 1 || $_SESSION['nivel_admin'] == 2 || $_SESSION['nivel_admin'] == 3
            ) {
            ?>
                <li>Contato</li>
                <li>Informações</li>
            <?php } ?>
        </ul>
        <li>Produtos</li>
        <li>Cupom</li>
        <li>Comentarios</li>
        <li>Mensagens</li>
        <li> Troca de pacote</li>
        <li>Suporte</li>
        <ul>
            <li>Pagamentos</li>
            <li>Mensagens</li>
        </ul>

    </ul>


</ul>