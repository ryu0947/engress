<?php get_header(); ?>
<div class="mv-lower mv-lower--contact">
    <h1 class="mv-lower__title">お問い合わせ・資料請求</h1>
</div>
<?php get_template_part("contexts/template/breadcrumb"); ?>
<section class="contact">
    <div class="contact__inner">
        <p>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
        <div class="contact__item">
            <label>
                <div class="contact__title">会社名</div>
                <input class="contact__input" type="text" placeholder="Engress">
            </label>
        </div>
        <div class="contact__item">
            <label>
                <div class="contact__title">氏名</div>
                <input class="contact__input" type="text" placeholder="田中　太郎">
            </label>
        </div>
        <div class="contact__item">
            <label>
                <div class="contact__title">メールアドレス</div>
                <input class="contact__input" type="email" placeholder="example@example.com">
            </label>
        </div>
        <div class="contact__item contact__item--tel">
            <label>
                <div class="contact__title">電話番号</div>
                <input class="contact__input" type="tel" placeholder="01-2345-6789">
            </label>
        </div>
        <div class="contact__item contact__item--radio">
            <div class="contact__title contact__title--radio">お問い合わせの種類を選択してください（<span class="contact__text-bold">資料請求の方は資料請求を選択ください</span>）</div>
            <div class="contact__radio">
                <label>
                    <input class="radio" type="radio" name="type">
                    <span class="radio-name">商談のご相談</span>
                </label>
            </div>
            <div class="contact__radio">
                <label>
                    <input class="radio" type="radio" name="type">
                    <span class="radio-name">サービスに関するお問い合わせ</span>
                </label>
            </div>
            <div class="contact__radio">
                <label>
                    <input class="radio" type="radio" name="type">
                    <span class="radio-name">資料請求</span>
                </label>
            </div>
            <div class="contact__radio">
                <label>
                    <input class="radio" type="radio" name="type">
                    <span class="radio-name">その他</span>
                </label>
            </div>
        </div>
        <div class="contact__item contact__item--textarea">
            <label>
                <div class="contact__title">お問い合わせ内容</div>
                <textarea class="contact__input contact__input--textarea" name="message" cols="30" rows="10" placeholder="入力してください"></textarea>
            </label>
        </div>
        <p class="contact__privacy-text">
            <a class="contact__privacy-link" href="#" target="_blank">プライバシーポリシー</a>に同意の上、送信ください。
        </p>
        <p class="contact__check-text">
            <label>
                <input class="contact__check" type="checkbox" name="privacy">
                <span class="contact__check-area">プライバシーポリシーに同意する</span>
            </label>
        </p>
        <div class="contact__btn">
            <input class="submit-btn" type="button" value="送信する">
        </div>
    </div>
</section>
<?php get_footer(); ?>