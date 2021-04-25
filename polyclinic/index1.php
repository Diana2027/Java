<?php
session_start();
?>

<?php
if ($_SESSION['user']['priv']=='1'){
    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <base href="https://med-idea.ru/funktsional/modul-setki-raspisaniya">
    <title>АРМ Регистратуры Поликлиники</title>
    <link href="/templates/yootheme/css/theme.9.css?v=1588019014" rel="stylesheet" id="theme-style-css">
    <script src="/templates/yootheme/vendor/assets/uikit/dist/js/uikit.min.js?v=1.22.6"></script>

</head>

<body class="" style="--envybox-btn-background-color:rgba(129,31,82,0.8);">
    <div class="tm-header uk-visible@l" uk-header="">
        <div>
            <div class="uk-navbar-container">
                <div class="uk-container">
                    <nav class="uk-navbar" uk-navbar="{&quot;align&quot;:&quot;center&quot;,&quot;boundary&quot;:&quot;!.uk-navbar-container&quot;,&quot;dropbar&quot;:true,&quot;dropbar-anchor&quot;:&quot;!.uk-navbar-container&quot;,&quot;dropbar-mode&quot;:&quot;slide&quot;}">
                        <div class="uk-navbar-left"><a href="http://localhost/polyclinic/index1.php">АРМ Регистратуры Поликлиники</a></div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li><a>Функционал</a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-3 uk-grid" uk-grid="">
                                            <div>
                                                <ul class="uk-navbar-right uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="http://localhost/polyclinic/funktsional/module-diagnoz-lech.php">Модуль диагноза и лечения пациентов</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-spisanie-med.php">Модуль учета списания медикаментов</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-setka-rasp.php">Модуль сетки расписания</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-zapis-na-priem.php">Модуль записи на прием по телефону</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-otcheti.php">Модуль отчетов</a></li></ul></div><div><ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-sertifikat-abonement.php">Модуль сертификатов и абонементов</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-skidki.php">Модуль скидок</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-zarplati.php">Модуль зарплат</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="uk-active uk-parent"><a class="" tabindex="0" aria-expanded="false" href="http://localhost/polyclinic/index1.php">О компании</a></li>
                                <li><a href="http://localhost/polyclinic/coms.php">Контакты</a></li>
                                <li><a href="http://localhost/polyclinic/editUser.php">Пользователи</a></li>
                                <li><a href="http://localhost/polyclinic/profile.php">Личный кабинет</a></li>
                            </ul>
                            <div class="uk-navbar-item" id="module-98">
                                <div class="uk-panel custom"><p>
                                        <a class="el-link uk-button uk-button-small uk-button-primary contactus phone-click" href="tel:88006667776">8-800-666-77-76</a>
                                    </p></div>
                            </div>
                            <div class="uk-navbar-item" id="module-100">
                                <div class="uk-panel custom">
                                    <p>
                                        <a class="el-content uk-button uk-button-small uk-button-primary contactus" href="http://localhost/polyclinic/">Выход из аккаунта</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="uk-sticky-placeholder" style="height: 0px; margin: 0px;"></div>
    </div>
    <div id="system-message-container" data-messages="[]"></div>
    <div class="uk-section-primary">
        <div data-sizes="(min-width: 200px) 200px" uk-img="" class="uk-background-norepeat uk-background-center-right uk-background-image@m uk-section uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;" style="background-image: url(&quot;https://i.pinimg.com/originals/f7/42/d0/f742d02c2c773495aad401d6bcfa08e8.png&quot;); min-height: calc(100vh - 51px);">
            <div class="uk-width-1-1">
                <div class="uk-container"><div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-flex-auto uk-width-1-1@m uk-first-column">
                            <h1 class="uk-margin-small">АРМ Регистратуры Поликлиники</h1>
                            <hr class="uk-divider-small">
                            <div class="uk-h6 uk-text-primary uk-margin-small">Основная информация о портале</div>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-grid-item-match uk-width-expand@m uk-first-column">
                            <div class="uk-tile-secondary uk-tile uk-padding-remove uk-flex uk-flex-middle">
                                <div class="uk-panel uk-width-1-1">
                                    <div class="uk-margin">
                                        <p>АРМ Регистратуры Поликлиники - это Автоматизированное Рабочее Место регистратуры лечебно-профилактического учреждения позволяет вести персонифицированный учет обратившихся за помощью пациентов. Предоставляет быстрый доступ к медицинским картам пациентов, заведенных, в программе и дает возможность записать обратившегося пациента на прием к выбранному врачу.</p>
                                        <p>Для сотрудников нашей компании мы создали данный портал для упрощения их работы. Мы предоставляем подробное описание всех модулей, с которыми наши сотрудники могут работать. И прилагаем ссылки на рабочие документы, которые находятся в общем доступе работников.</p>
                                    </div>
                                    <div class="uk-h5">Модули для работы регистратуры:</div>
                                    <ul class="uk-list">
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Диагноз и лечение пациентов</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon></svg></span></div>
                                                <div><div class="el-content uk-panel">Учет списания медикаментов</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Сетка расписания</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Запись на прием по телефону</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Отчеты</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Сертификаты и абонементы</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Скидки</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Зарплаты</div></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand@m"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-default uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-flex-auto uk-width-1-1@m uk-first-column">
                    <div><span style="font-size: 24pt;">Все модули</span></div><hr class="uk-divider-small">
                    <div class="uk-margin">
                        <div class="uk-child-width-1-1 uk-child-width-1-4@m uk-grid-row-small uk-grid-match uk-grid uk-grid-stack" uk-grid="">
                            <div class="uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-spisanie-med.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="35" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/666.jpg" src="http://localhost/polyclinic/img/666.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль учета списания медикаментов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-setka-rasp.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="37" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/777.jpg" src="http://localhost/polyclinic/img/777.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль сетки расписания</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/module-diagnoz-lech.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="30" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/555.jpg" src="http://localhost/polyclinic/img/555.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль диагноза и лечения пациентов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-zapis-na-priem.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="38" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/888.jpg" src="http://localhost/polyclinic/img/888.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль записи на прием по телефону</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-otcheti.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="36" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/999.jpg" src="http://localhost/polyclinic/img/999.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль отчетов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-sertifikat-abonement.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="40" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/444.jpg" src="http://localhost/polyclinic/img/444.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль сертификатов и абонементов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-skidki.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="33" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/333.jpg" src="http://localhost/polyclinic/img/333.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль скидок</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-zarplati.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="36" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/222.jpg" src="http://localhost/polyclinic/img/222.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль зарплат</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>
    <div class="uk-section-primary uk-section uk-section-xsmall uk-padding-remove-bottom"><br><br><br><br><br><br></div>
    <div class="uk-section-muted uk-section uk-section-xsmall">
        <div class="uk-container">
            <div class="uk-margin-medium uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-flex-auto uk-width-1-1@m uk-first-column"><hr></div>
            </div>
            <div class="uk-grid-margin uk-grid" uk-grid="">
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s uk-first-column">
                    <div class="text-center uk-margin">
                        <div class="text-center uk-6"><a href="http://localhost/polyclinic/index1.php">АРМ Регистратуры Поликлиники</a></div>
                    </div>
                    <div class="text-center uk-text-small uk-margin"><p>АРМ Регистратуры Поликлиники - медицинская информационная система для клиники нашей компании!</p></div>
                </div>
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s">
                    <div class="text-center uk-h6">Контакты</div>
                    <ul class="text-center uk-list">
                        <li class="el-item">
                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <span class="el-image uk-icon" uk-icon="icon: phone;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="phone">
                                            <path fill="none" stroke="#000" d="M15.5,17 C15.5,17.8 14.8,18.5 14,18.5 L7,18.5 C6.2,18.5 5.5,17.8 5.5,17 L5.5,3 C5.5,2.2 6.2,1.5 7,1.5 L14,1.5 C14.8,1.5 15.5,2.2 15.5,3 L15.5,17 L15.5,17 L15.5,17 Z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <div class="el-content uk-panel">
                                        <p><span style="font-size: 12pt;"><a class="el-content uk-link-text phone-click" href="tel:8806667776">Номер телефона: 8-800-666-77-76</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="el-item">
                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <span class="el-image uk-icon" uk-icon="icon: mail;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="mail">
                                            <polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"></polyline>
                                            <path d="M 1,4 1,16 19,16 19,4 1,4 Z M 18,15 2,15 2,5 18,5 18,15 Z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <div class="el-content uk-panel">
                                        <p><span style="font-size: 12pt;"><a href="mailto:babochkapink@gmail.com">Почта: babochkapink@gmail.com</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s uk-grid-margin uk-first-column">
                    <div class="text-center uk-h6">Юридический адрес</div>
                    <ul class="uk-list">
                        <li class="el-item">
                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <span class="el-image uk-icon" uk-icon="icon: location;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="location">
                                            <path fill="none" stroke="#000" stroke-width="1.01" d="M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z"></path>
                                            <circle fill="none" stroke="#000" cx="10" cy="6.8" r="2.3"></circle>
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <div class="el-content uk-panel">
                                        <p>
                                            <span style="font-size: 12pt;">Тверская область, город Ступино,</span>
                                            <span style="font-size: 12pt;">ул. бульвар Чехова, д. 76, оф. 2</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s uk-grid-margin">
                    <div class="text-center uk-h6">Мы рады,<br><br>что Вы пользуетесь нашим порталом!<br><br>Ждем Вас в нашей компании!</div>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>';}else{
    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <base href="https://med-idea.ru/funktsional/modul-setki-raspisaniya">
    <title>АРМ Регистратуры Поликлиники</title>
    <link href="/templates/yootheme/css/theme.9.css?v=1588019014" rel="stylesheet" id="theme-style-css">
    <script src="/templates/yootheme/vendor/assets/uikit/dist/js/uikit.min.js?v=1.22.6"></script>

</head>

<body class="" style="--envybox-btn-background-color:rgba(129,31,82,0.8);">
    <div class="tm-header uk-visible@l" uk-header="">
        <div>
            <div class="uk-navbar-container">
                <div class="uk-container">
                    <nav class="uk-navbar" uk-navbar="{&quot;align&quot;:&quot;center&quot;,&quot;boundary&quot;:&quot;!.uk-navbar-container&quot;,&quot;dropbar&quot;:true,&quot;dropbar-anchor&quot;:&quot;!.uk-navbar-container&quot;,&quot;dropbar-mode&quot;:&quot;slide&quot;}">
                        <div class="uk-navbar-left"><a href="http://localhost/polyclinic/index1.php">АРМ Регистратуры Поликлиники</a></div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav">
                                <li><a>Функционал</a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-3 uk-grid" uk-grid="">
                                            <div>
                                                <ul class="uk-navbar-right uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="http://localhost/polyclinic/funktsional/module-diagnoz-lech.php">Модуль диагноза и лечения пациентов</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-spisanie-med.php">Модуль учета списания медикаментов</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-setka-rasp.php">Модуль сетки расписания</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-zapis-na-priem.php">Модуль записи на прием по телефону</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-otcheti.php">Модуль отчетов</a></li></ul></div><div><ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-sertifikat-abonement.php">Модуль сертификатов и абонементов</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-skidki.php">Модуль скидок</a></li>
                                                    <li><a href="http://localhost/polyclinic/funktsional/modul-zarplati.php">Модуль зарплат</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="uk-active uk-parent"><a class="" tabindex="0" aria-expanded="false" href="http://localhost/polyclinic/index1.php">О компании</a></li>
                                <li><a href="http://localhost/polyclinic/coms.php">Контакты</a></li>
                                <li><a href="http://localhost/polyclinic/profile.php">Личный кабинет</a></li>
                            </ul>
                            <div class="uk-navbar-item" id="module-98">
                                <div class="uk-panel custom"><p>
                                        <a class="el-link uk-button uk-button-small uk-button-primary contactus phone-click" href="tel:88006667776">8-800-666-77-76</a>
                                    </p></div>
                            </div>
                            <div class="uk-navbar-item" id="module-100">
                                <div class="uk-panel custom">
                                    <p>
                                        <a class="el-content uk-button uk-button-small uk-button-primary contactus" href="http://localhost/polyclinic/">Выход из аккаунта</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="uk-sticky-placeholder" style="height: 0px; margin: 0px;"></div>
    </div>
    <div id="system-message-container" data-messages="[]"></div>
    <div class="uk-section-primary">
        <div data-sizes="(min-width: 200px) 200px" uk-img="" class="uk-background-norepeat uk-background-center-right uk-background-image@m uk-section uk-flex uk-flex-middle" uk-height-viewport="offset-top: true;" style="background-image: url(&quot;https://i.pinimg.com/originals/f7/42/d0/f742d02c2c773495aad401d6bcfa08e8.png&quot;); min-height: calc(100vh - 51px);">
            <div class="uk-width-1-1">
                <div class="uk-container"><div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-flex-auto uk-width-1-1@m uk-first-column">
                            <h1 class="uk-margin-small">АРМ Регистратуры Поликлиники</h1>
                            <hr class="uk-divider-small">
                            <div class="uk-h6 uk-text-primary uk-margin-small">Основная информация о портале</div>
                        </div>
                    </div>
                    <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                        <div class="uk-grid-item-match uk-width-expand@m uk-first-column">
                            <div class="uk-tile-secondary uk-tile uk-padding-remove uk-flex uk-flex-middle">
                                <div class="uk-panel uk-width-1-1">
                                    <div class="uk-margin">
                                        <p>АРМ Регистратуры Поликлиники - это Автоматизированное Рабочее Место регистратуры лечебно-профилактического учреждения позволяет вести персонифицированный учет обратившихся за помощью пациентов. Предоставляет быстрый доступ к медицинским картам пациентов, заведенных, в программе и дает возможность записать обратившегося пациента на прием к выбранному врачу.</p>
                                        <p>Для сотрудников нашей компании мы создали данный портал для упрощения их работы. Мы предоставляем подробное описание всех модулей, с которыми наши сотрудники могут работать. И прилагаем ссылки на рабочие документы, которые находятся в общем доступе работников.</p>
                                    </div>
                                    <div class="uk-h5">Модули для работы регистратуры:</div>
                                    <ul class="uk-list">
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Диагноз и лечение пациентов</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon></svg></span></div>
                                                <div><div class="el-content uk-panel">Учет списания медикаментов</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Сетка расписания</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Запись на прием по телефону</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Отчеты</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Сертификаты и абонементы</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Скидки</div></div>
                                            </div>
                                        </li>
                                        <li class="el-item">
                                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <span class="el-image uk-text-danger uk-icon" uk-icon="icon: triangle-right;">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="triangle-right">
                                                            <polygon points="8 5 13 10 8 15"></polygon>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div><div class="el-content uk-panel">Зарплаты</div></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand@m"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-default uk-section uk-section-small">
        <div class="uk-container">
            <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-flex-auto uk-width-1-1@m uk-first-column">
                    <div><span style="font-size: 24pt;">Все модули</span></div><hr class="uk-divider-small">
                    <div class="uk-margin">
                        <div class="uk-child-width-1-1 uk-child-width-1-4@m uk-grid-row-small uk-grid-match uk-grid uk-grid-stack" uk-grid="">
                            <div class="uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-spisanie-med.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="35" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/666.jpg" src="http://localhost/polyclinic/img/666.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль учета списания медикаментов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-setka-rasp.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="37" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/777.jpg" src="http://localhost/polyclinic/img/777.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль сетки расписания</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/module-diagnoz-lech.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="30" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/555.jpg" src="http://localhost/polyclinic/img/555.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль диагноза и лечения пациентов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-zapis-na-priem.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="38" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/888.jpg" src="http://localhost/polyclinic/img/888.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль записи на прием по телефону</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-otcheti.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="36" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/999.jpg" src="http://localhost/polyclinic/img/999.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль отчетов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-sertifikat-abonement.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="40" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/444.jpg" src="http://localhost/polyclinic/img/444.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль сертификатов и абонементов</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-skidki.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="33" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/333.jpg" src="http://localhost/polyclinic/img/333.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль скидок</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-grid-margin uk-first-column">
                                <a class="el-item uk-card uk-card-primary uk-card-small uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle" href="http://localhost/polyclinic/funktsional/modul-zarplati.php" uk-scrollspy="target: [uk-scrollspy-class];">
                                    <div class="uk-child-width-expand uk-grid-column-small uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                                        <div class="uk-width-auto@m uk-first-column">
                                            <img width="36" class="el-image uk-text-primary" alt="" uk-svg="" uk-img="http://localhost/polyclinic/img/222.jpg" src="http://localhost/polyclinic/img/222.jpg">
                                        </div>
                                        <div class="uk-margin-remove-first-child uk-grid-margin uk-first-column">
                                            <h3 class="el-title uk-h6 uk-margin-top uk-margin-remove-bottom">Модуль зарплат</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>
    <div class="uk-section-primary uk-section uk-section-xsmall uk-padding-remove-bottom"><br><br><br><br><br><br></div>
    <div class="uk-section-muted uk-section uk-section-xsmall">
        <div class="uk-container">
            <div class="uk-margin-medium uk-grid uk-grid-stack" uk-grid="">
                <div class="uk-flex-auto uk-width-1-1@m uk-first-column"><hr></div>
            </div>
            <div class="uk-grid-margin uk-grid" uk-grid="">
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s uk-first-column">
                    <div class="text-center uk-margin">
                        <div class="text-center uk-6"><a href="http://localhost/polyclinic/index1.php">АРМ Регистратуры Поликлиники</a></div>
                    </div>
                    <div class="text-center uk-text-small uk-margin"><p>АРМ Регистратуры Поликлиники - медицинская информационная система для клиники нашей компании!</p></div>
                </div>
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s">
                    <div class="text-center uk-h6">Контакты</div>
                    <ul class="text-center uk-list">
                        <li class="el-item">
                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <span class="el-image uk-icon" uk-icon="icon: phone;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="phone">
                                            <path fill="none" stroke="#000" d="M15.5,17 C15.5,17.8 14.8,18.5 14,18.5 L7,18.5 C6.2,18.5 5.5,17.8 5.5,17 L5.5,3 C5.5,2.2 6.2,1.5 7,1.5 L14,1.5 C14.8,1.5 15.5,2.2 15.5,3 L15.5,17 L15.5,17 L15.5,17 Z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <div class="el-content uk-panel">
                                        <p><span style="font-size: 12pt;"><a class="el-content uk-link-text phone-click" href="tel:8806667776">Номер телефона: 8-800-666-77-76</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="el-item">
                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <span class="el-image uk-icon" uk-icon="icon: mail;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="mail">
                                            <polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"></polyline>
                                            <path d="M 1,4 1,16 19,16 19,4 1,4 Z M 18,15 2,15 2,5 18,5 18,15 Z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <div class="el-content uk-panel">
                                        <p><span style="font-size: 12pt;"><a href="mailto:babochkapink@gmail.com">Почта: babochkapink@gmail.com</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s uk-grid-margin uk-first-column">
                    <div class="text-center uk-h6">Юридический адрес</div>
                    <ul class="uk-list">
                        <li class="el-item">
                            <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-grid" uk-grid="">
                                <div class="uk-width-auto uk-first-column">
                                    <span class="el-image uk-icon" uk-icon="icon: location;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="location">
                                            <path fill="none" stroke="#000" stroke-width="1.01" d="M10,0.5 C6.41,0.5 3.5,3.39 3.5,6.98 C3.5,11.83 10,19 10,19 C10,19 16.5,11.83 16.5,6.98 C16.5,3.39 13.59,0.5 10,0.5 L10,0.5 Z"></path>
                                            <circle fill="none" stroke="#000" cx="10" cy="6.8" r="2.3"></circle>
                                        </svg>
                                    </span>
                                </div>
                                <div>
                                    <div class="el-content uk-panel">
                                        <p>
                                            <span style="font-size: 12pt;">Тверская область, город Ступино,</span>
                                            <span style="font-size: 12pt;">ул. бульвар Чехова, д. 76, оф. 2</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-flex-auto uk-width-1-4@m uk-width-1-2@s uk-grid-margin">
                    <div class="text-center uk-h6">Мы рады,<br><br>что Вы пользуетесь нашим порталом!<br><br>Ждем Вас в нашей компании!</div>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>';
}
?>