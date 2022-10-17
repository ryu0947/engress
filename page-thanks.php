<?php get_header(); ?>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<div class="thanks">
    <p>
        お問い合わせいただきありがとうございます。<br>
        内容を確認した後、担当者よりご連絡いたします。
    </p>
    <a class="thanks__link" href="<?php echo esc_url(home_url()); ?>">ホームへ戻る</a>
</div>
<?php get_footer(); ?>