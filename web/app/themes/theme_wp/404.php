<?php
    /**
     * 404 ошибка
    */
    get_header();
?>
    <div class="er404">
        <div class="er404__inner">
            <img src="/app/themes/theme_wp/images/Noski_404_stranica2.gif" alt="Где носки 404 ошибка">
            <div class="er404__content">
                <h1 class="er404__text">Возможно, запрашиваемая Вами страница была перенесена или удалена.<br/> Также возможно, Вы допустили небольшую опечатку при вводе адреса – такое случается даже с нами, поэтому еще раз внимательно проверьте.</h1>
                <a href="/" class="er404__button button">Перейти на главную страницу </a>
            </div>
        </div>
    </div>
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        header {
            background-color: #B2CAEB;
        }
        .er404 {
            background-color: #B2CAEB;
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            margin-top: -100px;
            padding-bottom: 40px;
        }
        h1 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .er404__content {
            margin-top: -200px;
        }
        .er404__inner {
            text-align: center;
            width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        .er404__button {
            margin-top: 20px;
            margin-bottom: 20px;
            color: #fff;
            font-weight: 700;
            background-color: #CE4F50;
        }
        @media screen and (max-width: 767px) {
            .er404 {
                min-height: calc(100vh - 117px);
                margin-top: 0;
            }
            .er404__inner {
                width: auto;
            }
            .er404__inner img {
                max-width: 100%;
            }
            .er404__content {
                margin-top: -120px;
            }
            h1 {
                font-size: 14px;
                padding-left: 15px;
                padding-right: 15px;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 1023px) {
            .er404 {
                min-height: calc(100vh - 67px);
                margin-top: -110px;
            }
            .er404__inner {
                width: auto;
            }
            .er404__inner img {
                max-width: 100%;
            }
            .er404__content {
                margin-top: -120px;
            }
            h1 {
                font-size: 17px;
                padding-left: 15px;
                padding-right: 15px;
            }
            .header__inner {
                width: auto;
                padding-left: 15px;
                padding-right: 15px;
            }
            .header__search {
                width: 45%;
                text-align: center;
                margin-left: 100px;
            }
        }
        @media screen and (min-width: 1023px) and (max-width: 1230px) {
            .er404 {
                min-height: calc(100vh - 117px);
                margin-top: -60px;
            }
            .er404__inner {
                width: auto;
            }
            .er404__inner img {
                max-width: 100%;
            }
            .er404__content {
                margin-top: -240px;
            }
            h1 {
                font-size: 17px;
                padding-left: 15px;
                padding-right: 15px;
            }
            .header__inner {
                width: auto;
                padding-left: 15px;
                padding-right: 15px;
            }
            .header__search {
                width: 45%;
                text-align: center;
                margin-left: 100px;
            }
        }
    </style>
</body>
</html>
