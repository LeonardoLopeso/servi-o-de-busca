<div class="container">
    <div class="content">
        <div class="cadastro">
            <?php
                if(isset($_SESSION['cadastro'])) {
                    $result_cad = !empty($_SESSION['cadastro']) ? $_SESSION['cadastro'] : [];
                    switch ($result_cad) {
                        case @$result_cad['cadastro'] == 'sucesso':
                            echo '<div id="infoCadsuccess" class="alert alert-success">'.@$result_cad['desc'].'</div>';
                            session_destroy();
                            break;
                        case @$result_cad['cadastro'] == 'vazio':
                            echo '<div id="infoCadCampoVazio" class="alert alert-primary">'.@$result_cad['desc'].'</div>';
                            session_destroy();
                            break;
                        case @$result_cad['cadastro'] == 'erro':
                            echo '<div id="infoCadErro" class="alert alert-danger">'.@$result_cad['desc'].'</div>';
                            session_destroy();
                            break;
                    }
                }
            ?>
            <form method="post" enctype="multipart/form-data">
                <div class="cadastro-form">
                    <h3>Preencha o formulário de cadastro</h3>
                    <h5>Os campos com <span style="color:red;">*</span> são obrigatórios</h5>
                    <input type="text" name="nome_negocio" placeholder="Nome do seu negócio ou serviço *">
                    <input type="text" name="nome_pessoa" placeholder="Nome completo *">
                    <input type="email" name="email" placeholder="E-mail *">
                    <input type="text" name="telefone" placeholder="(00)00000-0000 *">
                    <input type="checkbox" name="whatsapp"><span id="checkWhatsInfo">Se não tiver WhatsApp marque esta opção</span>
                    <input type="file" name="foto">
                    <span>Escolha uma foto para o perfil</span>
                    <textarea name="desc" placeholder="Descreva seu negócio ou serviço"></textarea>
                </div>
                <div class="cadastro-medias">
                    <div class="cadastro-medias-socais">
                        <h3>Redes sociais profissional</h3>
                        <h5>Adicione as redes sociais que possuir</h5>
                        <div class="cadastro-medias-icon">
                            <i class="fa fa-instagram"></i><input type="text" name="instagram" placeholder="Instagram">
                        </div>
                        <div class="cadastro-medias-icon">
                            <i class="fa fa-facebook"></i><input type="text" name="facebook" placeholder="Facebook">
                        </div>
                        <div class="cadastro-medias-icon">
                            <i class="fa fa-linkedin"></i><input type="text" name="linkedin" placeholder="Linkedin">
                        </div>
                    </div>
                    <div class="cadastro-img">
                        <div class="">
                            <img src="<?php echo INCLUDE_PATH_FULL ?>img/medias.png">
                        </div>
                    </div>
                </div>
                <div class="cadastro-form-btn">
                    <input type="submit" name="acao" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>
<section class="informe">
    
</section>