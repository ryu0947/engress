<?php get_header(); ?>
<div class="mv-lower mv-lower--contact">
    <h1 class="mv-lower__title">お問い合わせ・資料請求</h1>
</div>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<section class="contact">
    <div class="contact__inner">
        <p>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
        <?php echo do_shortcode('[mwform_formkey key="2171"]'); ?>
    </div>
</section>
<?php get_footer(); ?>