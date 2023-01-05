<?php 
    // Template name: Home
?>
<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="s-hero">
    <div class="container">
        <div class="left-area" data-aos="fade-right">
            <h3><?php the_field('subtitulo_section_hero') ?></h3>
            <h1><?php the_field('titulo_section_hero') ?></h1>
            <a href="" class="btn-primary"><?php the_field('texto_do_botao_abra_sua_conta_digital') ?></a>
            <ul>
                <?php if( have_rows('cadastrar_itens_da_section_hero') ): while ( have_rows('cadastrar_itens_da_section_hero') ) : the_row(); ?>
                    <li>
                        <div class="icon">
                            <img src="<?php the_sub_field('icone_item') ?>" alt="Icone de cartão">
                        </div>
                        <span><?php the_sub_field('texto_item') ?></span>
                    </li>
                <?php endwhile; else : endif;?>
            </ul>
        </div>
        <div class="right-area">
            <h2 data-aos="fade-left"><?php the_field('texto_do_banco_100_digital') ?></h2>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() ?>/img/card-neon-front.png" alt="Cartão NEON - frente" class="front-card">
                <img src="<?php echo get_template_directory_uri() ?>/img/card-neon-back.png" alt="Cartão NEON - back" class="back-card">
                <img src="<?php echo get_template_directory_uri() ?>/img/marca-neon.svg" data-aos="fade-up" alt="Marca NEON" class="marca">
            </div>
        </div>
    </div>
</section>

<section class="s-app">
    <div class="container">
        <div class="left-area">
        <div class="mockup">
            <img src="<?php echo get_template_directory_uri() ?>/img/circle-mockup.svg" alt="Efeito do mockup" class="circle" data-aos="fade-left">
            <img src="<?php echo get_template_directory_uri() ?>/img/mockuo.svg" class="phone" alt="Mockup App Neon" data-aos="flip-left">
        </div>
        <div class="text" data-aos="fade-up">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-neon-xs.svg" class="icon" alt="Icon Neon">
            <div class="info">
                <h3><?php the_field('titulo_baixe_nosso_app'); ?></h3>
                <p><?php the_field('descricao_baixe_nosso_app'); ?></p>
                <ul>
                    <li>
                    <a href="" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/img/apple-store.svg" alt="">
                    </a>
                    </li>
                    <li>
                    <a href="" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/img/google-play.svg" alt="">
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <div class="right-area">
        <div class="text-app">
            <h2 data-aos="fade-left"><?php the_field('titulo_section_app_neon') ?></h2>
            <ul>
                <?php if( have_rows('cadastrar_beneficios_app_neon') ): while ( have_rows('cadastrar_beneficios_app_neon') ) : the_row(); ?>
                    <li data-aos="fade-left" data-aos-delay="200">
                        <div>
                            <img src="<?php the_sub_field('icone_beneficio') ?>" alt="Icone cartão de crédito" class="icon">
                            <div class="info">
                                <h3><?php the_sub_field('titulo_beneficio') ?></h3>
                                <p><?php the_sub_field('descricao_beneficio') ?></p>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri() ?>/img/arrow-left.svg" class="arrow" alt="Arrow">
                    </li>
                <?php endwhile; else : endif;?>
            </ul>
            <a href="" class="btn" data-aos="fade-left"><?php the_field('botao_conheca_outros_produtos'); ?></a>
        </div>
        <div class="box" data-aos="fade-left">
            <div class="text">
            <h2><?php the_field('titulo_pj') ?></h2>
            <h3><?php the_field('subtitulo_pj') ?></h3>
            <p><?php the_field('descricao_pj') ?></p>
            <div class="btns">
                <a href="" class="btn-primary">Sou <strong><?php the_field('texto_botao_mei') ?></strong></a>
                <a href="" class="btn-primary">Sou <strong><?php the_field('texto_botao_me') ?></strong></a>
            </div>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/cartao-neon.png" alt="Cartão NEON" class="image">
        </div>
        </div>
    </div>
</section>

<section class="s-depositions">
    <div class="container">
        <div class="top" data-aos="fade-right">
            <h2><span><?php the_field('titulo_principal_depoimentos'); ?></span> <?php the_field('titulo_secundario_depoimentos'); ?></h2>
            <div class="swiper-pagination"></div>
        </div>
        <div class="slide-deposition" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php if( have_rows('cadastrar_depoimentos') ): while ( have_rows('cadastrar_depoimentos') ) : the_row(); ?>
                    <div class="swiper-slide">
                        <div class="card-deposition">
                            <div class="user">
                                <strong><?php the_sub_field('usuario_depoimento'); ?></strong>
                                <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.svg" alt="">
                            </div>
                            <p><?php the_sub_field('texto_depoimento'); ?></p>
                        </div>
                    </div>
                <?php endwhile; else : endif;?>
            </div>
        </div>
    </div>
</section>

<section class="s-digital-cash">
    <div class="container">
        <div class="text" data-aos="fade-right">
        <h2><span>Aproveite</span> Domine o seu dinheiro com uma conta 100% digital</h2>
        <ul>
            <li>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-card-white.svg" alt="">
            </div>
            <div class="info">
                <h4>Cartão visa internacional</h4>
                <p>Tenha facilidades e benefícios para o seu dia a dia.</p>
            </div>
            </li>
            <li>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-taxas-white.svg" alt="">
            </div>
            <div class="info">
                <h4>Zero mensalidade e anuidade</h4>
                <p>Não gaste grana pagando taxas desnecessárias. </p>
            </div>
            </li>
            <li>
            <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-investimento-white.svg" alt="">
            </div>
            <div class="info">
                <h4>Investimento que rende mais que a poupança</h4>
                <p>Invista o seu dinheiro de maneira mais rentável.</p>
            </div>
            </li>
        </ul>
        <a href="" class="btn-primary">Abra sua conta digital</a>
        </div>
        <div class="image">
        <img src="<?php echo get_template_directory_uri() ?>/img/mockup-01.png" data-aos="fade-up" class="mk-01" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/mockup-02.png" data-aos="fade-down" class="mk-02" alt="">
        <img src="<?php echo get_template_directory_uri() ?>/img/circle-ilustra-cash-digital.svg" data-aos="zoom-in" alt="" class="circle">
        </div>
    </div>
</section>

<?php endwhile; else: endif; ?>

<?php get_footer() ?>