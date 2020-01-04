<?php get_header(); ?>
<div class="modal-shadow">
</div>
    <div class="modal-window">
        <div class="modal-head">
            <div class="delite" onclick="closer(this)"></div>
        </div>
       
        <img src="<?php echo get_template_directory_uri()?>/img/logo-ok.png" class="super" alt="">
        <p class="good-job">Объявление размещено!</p>
        <a href="" id="post_link">
        <p class="done">Посмотреть</p>
        </a>
    </div>
<div class="modal-fiasco">
    <div class="modal-head">
        <div class="delite" onclick="closer(this)"></div>
    </div>

    <img src="<?php echo get_template_directory_uri()?>/img/fiasco.png" class="super" alt="">
    <p class="good-job">Заполните обязательные поля!</p>
    <p class="star-description">Обязательные поля помечены <span class="red-star">*</span></p>
</div>
<div class="center-wrap">
    <div class="main-wrap">
        <p class="big mini-title hover-black">Свежачок:</p>
        <div class="center-wrap">
        <ul class="slider-wrap">
            <li class="arrow arrow-left" onclick="slider('left', this, 'count')"></li>
            <?php get_fresh();?>
            <li class="arrow arrow-right" onclick="slider('right', this, 'count')" ></li>
        </ul>
        </div>
        
        <a href="<?php get_category_link_by_slug('penza'); ?>">
            <p class="big mini-title">Пенза:</p>
        </a>
        <div class="center-wrap">
        <ul class="slider-wrap">
            <li class="arrow arrow-left" onclick="slider('left', this, 'count_2')"></li>
            <?php get_city('penza');?>
            <li class="arrow arrow-right" onclick="slider('right', this, 'count_2')" ></li>
        </ul>
        </div>
        <a href="<?php get_category_link_by_slug('miami'); ?>">
            <p class="big mini-title">Майами:</p>
        </a>
        <div class="center-wrap">
            <ul class="slider-wrap">
                <li class="arrow arrow-left" onclick="slider('left', this, 'count_3')"></li>
                <?php get_city('miami');?>
                <li class="arrow arrow-right" onclick="slider('right', this, 'count_3')" ></li>
            </ul>
        </div>
        <p class="ultra-big">Разместить своё объявление</p>
        <div class="center-wrap">
    
        <?php 
        acf_form_head();
        get_header();
        ?>

        <?php

        acf_form(array(
            'post_id'		=> 'new_post',
            'post_content'	=> false,
            'new_post'		=> array(
                'post_type'		=> 'post',
                'post_status'	=> 'publish'
            ),
            'html_submit_button' => '<input type="button" class="acf-button send button button-primary button-large" onclick="send_form()" value="%s" />',
            'submit_value'	=> 'Опубликовать'
        ));
        
        ?>
        </div>
        
    </div>
</div>
       
<?php get_footer(); ?>
