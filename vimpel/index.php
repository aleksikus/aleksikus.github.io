<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>"ОП "ВЫМПЕЛ-ГРАД"</title>
</head>

<body>
    <!-- Шапка -->
    <header class="header">
        <div class="container">
            <div class="header__item">
                <img src="img/logo.png" alt="logo" width="90" height="90">
                <nav>
                    <a href="#">главная</a>
                    <a href="#">распряжения</a>
                    <a href="#">клиенты</a>
                    <a href="#">лицензии</a>
                    <a href="#">команда</a>
                    <a href="#">связь</a>
                </nav>
            </div>
        </div>
    </header>
    <!-- главная -->
    <section class="main">
        <div class="container">
            <div class="line"></div>
            <div class="main__item">
                <div class="main__item1">
                    <div class="main__title">ООО «ОП «ВЫМПЕЛ-ГРАД»</div>
                    <div class="main__text1">КРУГЛОСУТОЧНАЯ ЛИЦЕНЗИРОВАННАЯ <br>
                        ВООРУЖЕННАЯ ОХРАНА И ЛИЧНАЯ <br>
                        БЕЗОПАСНОСТЬ</div>
                    <div class="main__text2">АДРЕС: 400075, Г. ВОЛГОГРАД, <br>
                        Ш. АВИАТОРОВ, Д. 9А, ОФ. 9В</div>
                    <div class="main__phone">+7 962-759-90-22 <br>
                        8(8442) 60-90-66</div>
                    <button class="main_bp"><img src="img/phone-call.png" alt="phone" width="27" height="27"> ОБРАТНЫЙ
                        ЗВОНОК</button>
                </div>
                <div class="main__img">
                    <img src="img/logo.png" alt="logo" width="353" height="353">
                </div>
            </div>
        </div>
    </section>
    <!-- распоряжения -->
    <section class="orders">
        <div class="container">
            <div class="line"></div>
            <div class="orders__title">распоряжения</div>
            <div class="orders__item">
                <div class="orders__icon">
                    <img src="img/group.png" alt="group">
                    <div class="item__text">группа реагирования</div>
                </div>
                <div class="orders__icon">
                    <img src="img/monitor.png" alt="monitor">
                    <div class="item__text">центральная станция <br>
                        мониторинга</div>
                </div>
                <div class="orders__icon">
                    <img src="img/wrench.png" alt="wrench">
                    <div class="item__text">Инженерная служба</div>
                </div>
            </div>
            <div class="orders__item1">
                <div class="orders__icon1">
                    <img src="img/like.png" alt="like">
                    <div class="item__text">профессиональные <br>
                        сотрудники</div>
                </div>
                <div class="orders__icon1">
                    <img src="img/treasure-chest.png" alt="chest">
                    <div class="item__text">комната хранения <br>
                        оружия</div>
                </div>
            </div>
        </div>
    </section>
    <!-- постоянные клиены -->
    <section class="clients">
        <div class="container">
            <div class="line"></div>
            <div class="clents__title">постоянные клиенты</div>
            <div class="clients__text">1. ЗАО «Банк Русский Стандарт» <br>
                2. ЗАО «НОКССБАНК» <br>
                3. АО КБ «Пойдем!» <br>
                4. Дилерские центры компании «АРКОНТ»:
                KIA, Mitsubishi, Renault, Nissan, Subaru,Volkswagen. <br>
                5. Страховая компания «РОСГОССТРАХ» <br>
                6. Страховая компания «СОГАЗ» <br>
                7. Сеть многопрофильных клиник «ДИАЛАЙН» <br>
                8. ГАУ ВО «Центр водных видов спорта «Спартак — Волгоград» <br>
                9. АО «Многопрофильный Медицинский Центр» Клиника «Сова» <br>
                10. АО «Корпорация развития Волгоградской области»</div>
        </div>
    </section>
    <!-- ЛИЦЕЗИЯ -->
    <section class="lic">
        <div class="container">
            <div class="line"></div>
            <div class="lic__title">лицензии</div>
        </div>
        <div class="container__lic">
            <div class="lic__item">
                <div class="line"></div>
                <div class="line1"></div>
                <img class="lic__img" src="img/lic/11.png" alt="11">
                <img class="lic__img" src="img/lic/12.png" alt="12">
            </div>
            <div class="lic__item">
                <div class="line"></div>
                <div class="line1"></div>
                <img class="lic__img" src="img/lic/21.png" alt="21">
                <img class="lic__img" src="img/lic/22.png" alt="22">
            </div>
        </div>
    </section>
    <!-- команда -->
    <section class="commands">
        <div class="container">
            <div class="line"></div>
            <div class="commands__title">наша команда</div>
            <div class="commands__item">
                <img class="lic__img" src="img/comands/1.png" alt="1">
                <img class="lic__img" src="img/comands/2.png" alt="2">
                <img class="lic__img" src="img/comands/3.png" alt="3">
                <img class="lic__img" src="img/comands/4.png" alt="4">
            </div>
        </div>
    </section>
    <!-- форма обратной связи -->
    <form action="send.php" method="post">
    <input type="text" name="text">
    <input type="email" name="email">
    <input type="submit" value="Отправить">
    </form>
</body>

</html>