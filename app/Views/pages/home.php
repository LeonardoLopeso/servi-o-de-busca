<section class="container">
    <div class="content">
        <div class="pessoas-info">
            
            <div class="pessoa-wraper">
                <?php                        
                    
                ?>
                <?php foreach($arr['consulta'] as $negocio) { ?>
                    
                    <div class="pessoa-single">
                        <div class="pessoa-foto">
                            <img src="<?php echo INCLUDE_PATH_FULL.'uploads/'.$negocio['imagem']; ?>">
                        </div>
                        <div class="pessoa-desc">
                            <div class="pessoa-desc-nome">
                                <h3><i class="fa fa-cog"></i> <?php echo $negocio['nome_negocio']; ?></h3>
                                <h5><i class="fa fa-user"></i> <?php echo $negocio['nome_pessoa']; ?></h5>
                            </div>
                            <div class="pessoa-desc-descricao">
                                <p><?php
                                    $desc = substr($negocio['descricao'],0,125)."...";
                                    echo $desc;
                                ?></p>
                            </div>
                            <div class="pessoa-desc-contato">
                                <span>
                                    <?php
                                        if($negocio['whatsapp'] == 'possui') 
                                            echo '<a href="https://api.whatsapp.com/send?phone=55'.$negocio['telefone'].'&text='.$arr['msgWhats'].'"><i id="whatsapp" class="fa fa-whatsapp"></i></a>';
                                        if($negocio['instagram'] != 'não tem') 
                                            echo '<a href=""><i id="instagram"  class="fa fa-instagram"></i></a>';
                                        if($negocio['facebook'] != 'não tem') 
                                            echo '<a href="https://www.facebook.com/'.$negocio['facebook'].'"><i id="facebook" class="fa fa-facebook"></i></a>';
                                    ?>
                                </span>
                                <div id="pessoa-desc-contato-fone"><i class="fa fa-phone"></i> <?php echo $negocio['telefone']; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } if(empty($negocio['nome_negocio'])) echo '<h4 style="color:#666;"><i class="fa fa-warning"></i> Serviço não encontrado!</h4>'; ?>

            </div>
        </div>
    </div>
</section>