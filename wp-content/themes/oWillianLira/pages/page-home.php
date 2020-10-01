<?php 
// Template Name: Home
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
<div id="banner_owl" class="banner_owl" style="background-image: url(<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/bg_cover.jpg);">
    <div class="container">
        <div class="greeting">
            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/eumoji1.png" alt="EuMoji">
            <h1>
                Olá, <span>boa noite</span>! <br>
                Eu sou o Willian Lira
            </h1>
        </div>
        <div class="links">
            <a class="dark" href="mailto:owillianlira@gmail.com" title="Meu Gmail" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" height="512px" viewBox="0 0 64 64" width="512px"><g id="Email"><path d="m10 29.054 16.729 12.69 4.671-3.544a1 1 0 0 1 1.208 0l4.667 3.54 16.725-12.686v-19.054h-44zm22-14.054a9.01 9.01 0 0 1 9 9v2a2.994 2.994 0 0 1 -5.534 1.59 4.99 4.99 0 1 1 1.534-3.59v2a1 1 0 0 0 2 0v-2a7 7 0 1 0 -7 7h3a1 1 0 0 1 0 2h-3a9 9 0 0 1 0-18z" fill="#EDF8FF"/><circle cx="32" cy="24" r="3" fill="#EDF8FF"/><path d="m4.655 25 3.345 2.537v-5.074z" fill="#EDF8FF"/><path d="m4 58.986 21.074-15.987-21.074-15.985z" fill="#EDF8FF"/><path d="m56 27.537 3.345-2.537-3.345-2.536z" fill="#EDF8FF"/><path d="m60 27.014-21.074 15.985 21.074 15.987z" fill="#EDF8FF"/><path d="m32 40.255-26.027 19.745h52.054z" fill="#EDF8FF"/><path d="m27.063 8h9.874l-4.937-3.745z" fill="#EDF8FF"/></g></svg>
            </a>
            <a href="https://linkedin.com/in/owillianlira" title="Meu LinkedIn" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" id="Bold" enable-background="new 0 0 24 24" height="512px" viewBox="0 0 24 24" width="512px"><path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z" fill="#EDF8FF"/><path d="m.396 7.977h4.976v16.023h-4.976z" fill="#EDF8FF"/><path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z" fill="#EDF8FF"/></svg>
            </a>
            <a href="https://github.com/oWillianLira" title="Meu GitHub" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 478.613 478.613" style="enable-background:new 0 0 478.613 478.613;" xml:space="preserve" width="512px" height="512px">
                    <g id="XMLID_122_">
                        <g>
                            <path d="M427.501,200.695c1.776-11.238,2.884-23.56,3.163-37.377c-0.107-59.246-28.468-80.21-33.925-90.038    c8.037-44.89-1.331-65.309-5.688-72.299c-16.07-5.704-55.91,14.722-77.678,29.101c-35.491-10.389-110.494-9.375-138.621,2.689    C122.856-4.389,95.408,1.277,95.408,1.277s-17.745,31.82-4.691,78.371c-17.075,21.759-29.802,37.143-29.802,77.949    c0,9.773,0.607,19.008,1.637,27.893c14.705,77.318,75.97,110.674,136.15,116.426c-9.056,6.881-19.928,19.903-21.432,34.992    c-11.379,7.357-34.268,9.789-52.067,4.193c-24.939-7.88-34.486-57.266-71.833-50.221c-8.081,1.512-6.475,6.842,0.523,11.386    c11.378,7.38,22.094,16.554,30.354,36.185c6.344,15.072,19.687,41.982,61.873,41.982c16.747,0,28.477-1.979,28.477-1.979    s0.319,38.406,0.319,53.385c0,17.238-23.264,22.078-23.264,30.348c0,3.289,7.7,3.601,13.888,3.601    c12.229,0,37.673-10.186,37.673-28.103c0-14.237,0.227-62.081,0.227-70.46c0-18.307,9.811-24.136,9.811-24.136    s1.201,97.727-2.361,110.829c-4.177,15.408-11.744,13.219-11.744,20.076c0,10.233,30.589,2.502,40.735-19.897    c7.849-17.495,4.334-113.331,4.334-113.331l8.183-0.178c0,0,0.094,43.892-0.188,63.944c-0.295,20.769-2.438,47.025,9.898,59.417    c8.097,8.15,32.903,22.451,32.903,9.382c0-7.574-17.371-13.833-17.371-34.353V344.45c10.553,0,12.734,31.072,12.734,31.072    l3.804,57.727c0,0-2.526,21.065,22.756,29.856c8.925,3.126,28.018,3.976,28.913-1.271c0.897-5.26-22.99-13.038-23.217-29.342    c-0.123-9.93,0.445-15.742,0.445-58.934c0-43.168-5.799-59.137-26.007-71.863C355.669,295.681,416.536,269.51,427.501,200.695z" fill="#EDF8FF"/>
                        </g>
                    </g>
                </svg>
            </a>
            <a href="https://instagram.com/owillianlira" title="Meu Instagram" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" height="512px" viewBox="0 0 511 511.9" width="512px"><path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0" fill="#EDF8FF"/><path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0" fill="#EDF8FF"/><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0" fill="#EDF8FF"/></svg>
            </a>
        </div>
    </div>
</div>

<section class="sects" id="bio1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="txtBio">
                    <h3>Mas quem é Willian Lira</h3>

                    <p>
                        Sou um jovem brasileiro, nascido em janeiro de 1998 na cidade de Guarulhos/SP, onde continuo até hoje. 
                    </p>
                    <p class="padd_bt_991">
                        Formado em Ciência da Computação pela universidade da cidade (UNG), o que me garante o honrado título de "menino dos computer".
                    </p>
                </div>
            </div>
            <div class="col"></div>
            <div class="col-lg-4 col-md-5">
                <div class="imgBio">
                    <img class="floating" id="graduation" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/graduation-cap.png" alt="Graduação">
                    <img class="floating" id="location" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/location.png" alt="Localização">
                    <img class="floating" id="baby" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/baby.png" alt="Infância">
                    <img id="eumoji2" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/EuMOJI2.png" alt="Eu">
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

<section class="sects" id="bio2">
    <div class="container">
        <div class="row invert-md align-items-center justify-content-between">
            <div class="col-lg-5 col-md-6">
                <div class="imgBio">
                    <img class="floating" id="eumoji3" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/EuMOJI-3.png" alt="Eu" title="Eu">
                    <img class="floating" id="git" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/git.png" alt="git" title="git">
                    <img class="floating" id="react" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/react.png" alt="react" title="ReactJS">
                    <img class="floating" id="js" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/js.png" alt="javascript" title="JavaScript">
                    <img class="floating" id="css" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/css.png" alt="css" title="css3">
                    <img class="floating" id="html" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/html.png" alt="html" title="html5">
                    <img class="floating" id="wordpress" src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/wordpress.png" alt="wordpress" title="WordPress">
                </div>
            </div>
            <div class="col-md-6">
                <div class="txtBio">
                    <h3>E o que o Willian faz?</h3>

                    <p>
                        Minha profissão é Desenvolvedor Web Front-End, do latim: "Aquele que faz sites e aplicações para a internet". 
                    </p>
                    <p class="padd_bt_991">
                        Atuo na área desde meados de 2019, e sou privilegiado em poder dizer que trabalho com o que amo fazer!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sects" id="bio3">
    <div class="container">
        <h3>E qual o motivo de ter feito esse site?</h3>
        <div class="row  justify-content-between">
            <div class="col-lg-5">
                <div class="txtBio">
                    <p>
                        Eu fiz esse site por alguns motivos... <br>
                        Aqui eu disponibilizo em um formato intuitivo e moderno o meu currículo e também o meu portfólio!
                    </p>
                    <p>
                        Outro motivo que me levou a desenvolver esse projeto foi ter mais um meio de por em prática minhas habilidades e conhecimentos. <br>
                        Pude aplicar e aprimorar meus conhecimentos enquanto desenvolvia todas as etapas desse site, desde domínio e hospedagem, tipografia e cores, desenho do layout e lógica de negócio, até o desenvolvimento e colocá-lo no ar.
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="txtBio">
                    <p class="padd_bt_991">
                        E também, é por aqui que eu te ofereço a oportunidade de ter um site feito, assim como esse, 100% à mão por mim para você ou sua empresa! <br>
                        Clique no botão abaixo para descobrir o que torna um site feito à mão a melhor escolha para você, e também para ver as opções de sites que eu ofereço.
                    </p>

                    <a href="#" class="btn_brown">Quero um site</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; else: ?>
    <section class="sects">
        <div class="container">
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>