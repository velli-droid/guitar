<?php
/*
Template Name: Главная
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package guitar
 */

get_header();
?>
    <section class="intro" style="background: url('img/intro_bg.jpg') no-repeat center; background-size: cover;">
        <div class="intro-frame">
            <img src="img/Frame.png" alt="">
        </div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="Guitarist.mp4" type="video/mp4">
        </video>
        <div class="intro-video-overlay"></div>
        <div class="container">
            <div class="intro-inner">
                <div class="intro-title">
                    <h1>Индивидуальное обучение игре на гитаре
                    онлайн с нуля от преподавателя со стажем больше 10 лет</h1>
                </div>
                <div class="intro-btn">
                    <a href="#" class="page-btn-link sign-up first-lesson">Записаться на первый бесплатный урок</a>
                </div>
            </div>
        </div>
        <div class="intro-advantages">
            <div class="container">
                <div class="advantages-swiper">
                    <div class="advantages-swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="advantages-list-item">
                                    <div class="advantages-item-icon">
                                        <img src="img/advantages1.png" alt="">
                                    </div>
                                    <div class="advantages-item-text">
                                        <p>Опыт преподавания <br> больше 10 лет</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="advantages-list-item">
                                    <div class="advantages-item-icon">
                                        <img src="img/advantages2.png" alt="">
                                    </div>
                                    <div class="advantages-item-text">
                                        <p>Опыт преподавания <br> больше 10 лет</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="advantages-list-item">
                                    <div class="advantages-item-icon">
                                        <img src="img/advantages3.png" alt="">
                                    </div>
                                    <div class="advantages-item-text">
                                        <p>Опыт преподавания <br> больше 10 лет</p> 
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>            
            </div>
        </div>
    </section>
    <section class="programs" id="programs">
        <div class="container">
            <div class="programs-inner">
                <div class="section-title">
                    <h2>Мы <span>подберем</span> программу обучения,которая даст эффективный и быстрый результат,
                        или Вы можете выбрать сами</h2>
                </div>
                <div class="programs-swiper">
                    <div class="programs-swiper-prev-btn">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8528 29.4264L2.71068 15.2843L16.8528 1.14212" stroke="#E25B30" stroke-width="3"/>
                        </svg>            
                    </div>
                    <div class="programs-swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="programs-swiper-slide-content" style="background: url('img/programs1.jpg') no-repeat center; background-size: cover;">
                                    <div class="programs-swiper-slide-title">
                                        с нуля
                                    </div>
                                    <div class="programs-swiper-slide-description">
                                        Для тех, кто никогда ранее не имел опыта игры на гитаре
                                    </div>
                                </div>
                                <div class="programs-swiper-slide-btn">
                                    <a href="#" class="programs-swiper-slide-btn-link sign-up choose-program" data-program-name="с нуля">Выбрать</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="programs-swiper-slide-content" style="background: url('img/programs2.jpg') no-repeat center; background-size: cover;">
                                    <div class="programs-swiper-slide-title">
                                        начинающий
                                    </div>
                                    <div class="programs-swiper-slide-description">
                                        Для тех, кто хочет подтянуть свои результаты
                                    </div>
                                </div>
                                <div class="programs-swiper-slide-btn">
                                    <a href="#" class="programs-swiper-slide-btn-link sign-up choose-program " data-program-name="начинающий">Выбрать</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="programs-swiper-slide-content" style="background: url('img/programs3.jpg') no-repeat center; background-size: cover;">
                                    <div class="programs-swiper-slide-title">
                                        профи
                                    </div>
                                    <div class="programs-swiper-slide-description">
                                        Для профессионалов, которым нужно стать еще лучше
                                    </div>
                                </div>
                                <div class="programs-swiper-slide-btn">
                                    <a href="#" class="programs-swiper-slide-btn-link sign-up choose-program" data-program-name="профи">Выбрать</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="programs-swiper-slide-content" style="background: url('img/programs4.jpg') no-repeat center; background-size: cover;">
                                    <div class="programs-swiper-slide-title">
                                        экспресс
                                    </div>
                                    <div class="programs-swiper-slide-description">
                                        Для тех, кому нужен результат в кратчайшие сроки
                                    </div>
                                </div>
                                <div class="programs-swiper-slide-btn">
                                    <a href="#" class="programs-swiper-slide-btn-link sign-up choose-program" data-program-name="экспресс">Выбрать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="programs-swiper-next-btn">
                        <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 29.4264L29.1421 15.2843L15 1.14212" stroke="#E25B30" stroke-width="3"/>
                        </svg>            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <div class="about-inner">
                <div class="section-title">
                    <h2>Как проходят занятия</h2>
                </div>
                <div class="about-list">
                    <div class="about-list-item">
                        <div class="about-list-item-title">
                            Где
                        </div>
                        <div class="about-list-item-pic">
                            <img src="img/about1.png" alt="">
                        </div>
                        <div class="about-list-item-text">
                            <p><span>Платформа ZOOM,</span> <br>
                            а также Скайп или любой другой <br>
                            мессенджер по желанию. <br>
                            Ездить никуда не нужно, <br>
                            все занятия проходят онлайн.</p>
                        </div>
                    </div>
                    <div class="about-list-item">
                        <div class="about-list-item-title">
                            Как долго
                        </div>
                        <div class="about-list-item-pic">
                            <img src="img/about2.png" alt="">
                        </div>
                        <div class="about-list-item-text">
                            <p><span>Продолжительность одного занятия <br>
                            - 60 минут.</span> <br>
                            Время может быть увеличенопо <br>
                            желанию.</p>
                        </div>
                    </div>
                    <div class="about-list-item">
                        <div class="about-list-item-title">
                            Сколько
                        </div>
                        <div class="about-list-item-pic">
                            <img src="img/about3.png" alt="">
                        </div>
                        <div class="about-list-item-text">
                            <p><span>Стоимость одного занятия <br>
                            -от 400 руб.</span> <br>
                            Она может варьироваться в <br>
                            зависимости от поставленных задач.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <div class="container">
            <div class="skills-inner">
                <div class="section-title">
                    <h2>Что Вы сможете делать после обучения</h2>
                </div>
                <div class="skills-list">
                    <div class="skills-list-item">
                        <div class="skills-list-item-pic">
                            <img src="img/skills1.png" alt="">
                        </div>
                        <div class="skills-list-item-text">
                            <p>Играть свои любимые песни на гитаре</p>
                        </div>
                    </div>
                    <div class="skills-list-item">
                        <div class="skills-list-item-pic">
                            <img src="img/skills2.png" alt="">
                        </div>
                        <div class="skills-list-item-text">
                            <p>Играть любые мелодии по табулатуре или нотам</p>
                        </div>
                    </div>
                    <div class="skills-list-item">
                        <div class="skills-list-item-pic">
                            <img src="img/skills3.png" alt="">
                        </div>
                        <div class="skills-list-item-text">
                            <p>Понимать нотную грамоту</p>
                        </div>
                    </div>
                    <div class="skills-list-item">
                        <div class="skills-list-item-pic">
                            <img src="img/skills4.png" alt="">
                        </div>
                        <div class="skills-list-item-text">
                            <p>Ставить аккорды</p>
                        </div>
                    </div>
                    <div class="skills-list-item">
                        <div class="skills-list-item-pic">
                            <img src="img/skills5.png" alt="">
                        </div>
                        <div class="skills-list-item-text">
                            <p>Научитесь правильной посадке и постановке рук</p>
                        </div>
                    </div>
                    <div class="skills-list-item">
                        <div class="skills-list-item-pic">
                            <img src="img/skills6.png" alt="">
                        </div>
                        <div class="skills-list-item-text">
                            <p>Научитесь различным видам аккомпанемента: бой, перебор, щипок и т.д.</p>
                        </div>
                    </div>
                </div>
                <div class="section-btn">
                    <a href="#" class="page-btn-link sign-up">Я хочу всему этому научиться!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="info" style="background: url('img/info_bg.jpg') no-repeat center; background-size: cover;">
        <div class="container"> 
            <div class="info-inner">
                <div class="section-title">
                    <h2>Через какое время Вы <br>
                    сможете увидеть результат обучения</h2>
                </div>
                <div class="section-subtitle">
                    <h3>На примере программы обучения «С нуля»</h3>
                </div>
                <table class="info-table">
                    <tr>
                        <th class="left-col">Срок обучения</th>
                        <th class="right-col">Ученик освоит</th>
                    </tr>
                    <tr>
                        <td class="left-col">
                            0-3 месяцев
                        </td>
                        <td class="right-col">
                            Правильную посадку и постановку рук, 
                            базовые аккорды, основные виды аккомпанемента, 
                            несложные песни  (например «Звезда по имени Солнце», 
                            «Алые паруса»)
                        </td>
                    </tr>
                    <tr>
                        <td class="left-col">
                            3-6 месяцев
                        </td>
                        <td class="right-col">
                            Различные виды аккордов: аккорды с приемом «Барре», 
                            септаккорды, секстаккорды и др., более сложные песни, 
                            несложные инструментальные композиции по табулатуре, 
                            различные виды аккомпанемента
                        </td>
                    </tr>
                    <tr>
                        <td class="left-col">
                            6-12 месяцев
                        </td>
                        <td class="right-col">
                            Нотную грамоту, более сложные композиции по табулатуре, 
                            игру по нотам, умение свободно ориентироваться на гифе гитары
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="about-me" id="about-me">
        <div class="container">
            <div class="about-me-inner">
                <div class="about-me-content">
                    <div class="about-me-pic">
                        <img src="img/about-me.jpg" alt="">
                    </div>
                    <div class="about-me-text">
                        <div class="about-me-text-title">
                            О себе
                        </div>
                        <div class="about-me-text-subtitle">
                            Александрова Александра Александровна
                        </div>
                        <div class="about-me-info-list">
                            <div class="about-me-info-list-item">
                                <span class="about-me-key">Закончила:</span>  
                                <span class="about-me-value">Республиканский музыкальный колледж г. Ижевска по классу гитара</span>
                            </div>
                            <div class="about-me-info-list-item">
                                <span class="about-me-key">Опыт преподавания:</span>
                                <span class="about-me-value">больше 10 лет, с 2010 года</span>
                            </div>
                            <div class="about-me-info-list-item">
                                <span class="about-me-key">Ученики:</span>
                                <span class="about-me-value">профессиональные музыканты, участники музыкальных фестивалей и т.д.</span>
                            </div>
                        </div>
                        <div class="about-me-frame">
                            <img src="img/about-me-frame.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="section-btn">
                    <a href="#" class="page-btn-link sign-up first-lesson">Записаться на первое бесплатное занятие!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="reviews-inner">
                <div class="section-title">
                    <h2>Отзывы</h2>
                </div>
                <div class="reviews-swiper">
                    <div class="reviews-swiper-prev-btn">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8528 29.4264L2.71068 15.2843L16.8528 1.14212" stroke="#E25B30" stroke-width="3"/>
                        </svg>            
                    </div>
                    <div class="reviews-swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="reviews-swiper-slide-content">
                                    <div class="swiper-reviews-pic">
                                        <img src="img/reviews1.jpg" alt="">
                                    </div>
                                    <div class="swiper-reviews-title">
                                        Илья, 23 года
                                    </div>
                                    <div class="swiper-reviews-text">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                        Vero voluptatibus corrupti doloremque et? Tempora, enim! 
                                        Dolores praesentium necessitatibus vel optio porro temporibus 
                                        explicabo dignissimos vitae ut! Aliquam atque laborum voluptatum, 
                                        iusto voluptatem aliquid delectus quasi, consequuntur ullam 
                                        fugit iure corporis.
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="reviews-swiper-slide-content">
                                    <div class="swiper-reviews-pic">
                                        <img src="img/reviews2.jpg" alt="">
                                    </div>
                                    <div class="swiper-reviews-title">
                                        Илья, 23 года
                                    </div>
                                    <div class="swiper-reviews-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Id reiciendis cupiditate dolorem, maxime temporibus ducimus 
                                        voluptatibus voluptates praesentium molestias harum, 
                                        et libero neque asperiores nihil quam quidem ipsa deserunt nisi?
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="reviews-swiper-slide-content">
                                    <div class="swiper-reviews-pic">
                                        <img src="img/reviews3.jpg" alt="">
                                    </div>
                                    <div class="swiper-reviews-title">
                                        Илья, 23 года
                                    </div>
                                    <div class="swiper-reviews-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Id reiciendis cupiditate dolorem, maxime temporibus ducimus 
                                        voluptatibus voluptates praesentium molestias harum, 
                                        et libero neque asperiores nihil quam quidem ipsa deserunt nisi?
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="reviews-swiper-slide-content">
                                    <div class="swiper-reviews-pic">
                                        <img src="img/reviews4.jpg" alt="">
                                    </div>
                                    <div class="swiper-reviews-title">
                                        Илья, 23 года
                                    </div>
                                    <div class="swiper-reviews-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Id reiciendis cupiditate dolorem, maxime temporibus ducimus 
                                        voluptatibus voluptates praesentium molestias harum, 
                                        et libero neque asperiores nihil quam quidem ipsa deserunt nisi?
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-swiper-next-btn">
                        <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 29.4264L29.1421 15.2843L15 1.14212" stroke="#E25B30" stroke-width="3"/>
                        </svg>            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <div class="video-inner">
                <div class="section-title">
                    <h2>Живые видео с занятий обучения игры на гитаре</h2>
                </div>
                <div class="video-list">
                    <div class="video-list-item">
                        <div class="video-list-item-frame">
                            <iframe src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&amp;hd=1" frameborder="0" width="360" height="260" allowfullscreen></iframe>
                        </div>
                        <div class="video-list-item-title">
                            Урок 1: перебор
                        </div>
                    </div>
                    <div class="video-list-item">
                        <div class="video-list-item-frame">
                            <iframe src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&amp;hd=1" frameborder="0" width="360" height="260" allowfullscreen></iframe>
                        </div>
                        <div class="video-list-item-title">
                            Урок 2: бой на гитаре
                        </div>
                    </div>
                    <div class="video-list-item">
                        <div class="video-list-item-frame">
                            <iframe src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&amp;hd=1" frameborder="0" width="360" height="260" allowfullscreen></iframe>
                        </div>
                        <div class="video-list-item-title">
                            Урок 3: учим песню
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();