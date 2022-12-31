    <footer>
        <div class="container">
        <div class="top-footer">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo-white.svg" class="logo" alt="">
            <div class="socials">
            <span>Acompanhe nas redes</span>
            <ul>
                <li>
                <a href="" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/youtube-play.svg" alt="">
                </a>
                </li>
                <li>
                <a href="" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg" alt="">
                </a>
                </li>
                <li>
                <a href="" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/faceboojk.svg" alt="">
                </a>
                </li>
                <li>
                <a href="" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/instagram.svg" alt="">
                </a>
                </li>
                <li>
                <a href="" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/twitter.svg" alt="">
                </a>
                </li>
            </ul>
            </div>
        </div>
        <div class="main-area">
            <nav>
            <div class="item">
                <strong>Produtos Neon</strong>
                <ul>
                <li><a href="">Cartão de crédito</a></li>
                <li><a href="">Cartão pré-pago</a></li>
                <li><a href="">Neon Mais</a></li>
                <li><a href="">Neon Mais</a></li>
                <li><a href="">Empréstimo</a></li>
                </ul>
            </div>
            <div class="item">
                <strong>Conta digital PJ</strong>
                <ul>
                <li><a href="">Sou MEI</a></li>
                <li><a href="">Sou ME</a></li>
                </ul>
            </div>
            <div class="item">
                <strong>Blog</strong>
                <ul>
                <li><a href="">#focanodinheiro</a></li>
                <li><a href="">O poder da comunidade</a></li>
                <li><a href="">Desafio das 52 semanas</a></li>
                <li><a href="">Planilha de gastos</a></li>
                </ul>
            </div>
            <div class="item">
                <strong>Institucional</strong>
                <ul>
                <li><a href="">Conheça a Neon</a></li>
                <li><a href="">Trabalhe conosco</a></li>
                <li><a href="">Termos de uso</a></li>
                <li><a href="">Políticas de privacidade</a></li>
                </ul>
            </div>
            <div class="item">
                <strong>Ajuda</strong>
                <ul>
                <li><a href="">Ouvidoria</a></li>
                <li><a href="">Fale conosco</a></li>
                </ul>
            </div>
            </nav>
            <div class="contact">
            <a href="">
                <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/envelope.svg" alt="">
                </div>
                <div class="info">
                <strong>Atendimento:</strong>
                <p>oi@neon.com.br (24 horas)</p>
                </div>
            </a>
            <a href="">
                <div class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/img/chat.svg" alt="">
                </div>
                <div class="info">
                <strong>Imprensa:</strong>
                <p>imprensa@neon.com.br</p>
                </div>
            </a>
            </div>
        </div>
        <div class="msg">
            <div>
            😀
            </div>
            <p>Oi! Leu até aqui? Você se preocupa com os mínimos detalhes, mesmo. A gente também. Por isso o time Neon está
            sempre trabalhando para fazer a conta digital perfeita para você ; )</p>
        </div>
        </div>
    </footer>

    <button class="btn-chat">
        <img src="<?php echo get_template_directory_uri() ?>/img/icon-chat-white.svg" alt="">
        <span>Chat</span>
    </button>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript">
        var swiper = new Swiper(".slide-deposition", {
        slidesPerView: 3,
        spaceBetween: 32,
        autoplay: {
            delay: 5000
        },
        speed: 700,
        pagination: {
            el: ".s-depositions .top .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
            slidesPerView: 1.2,
            spaceBetween: 16,
            },
            768: {
            slidesPerView: 1.9,
            spaceBetween: 20,
            },
            1050: {
            slidesPerView: 3,
            spaceBetween: 32,
            }
        }
        });

        AOS.init({
        duration: 1000,
        once: true,
        disabled: 'mobile'
        });
    </script>
</body>

</html>