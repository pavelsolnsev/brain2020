<?php

$lander       = "https://syn.su/lander.php?r=land/index";
$title        = '';
$land         = 'brain_2020';
$unit         = 'sbs';
$type         = 'brain_2020';
$phone           = _t('phone');
$phone_desctop = _t('phone_desctop');
$phone_link   = _t('phone__link');
$phone_link_desctop = _t('phone__link_desctop');
$email        = '';
$titlePage    = 'BRAIN 2020 | Конференция о мозге и мышлении';
$descriptionPage = 'Brain 2020 – международная конференция о мозге и мышлении, главной темой которой является управление способностями мозга и мышления.';
$version = $version ? $version : 'brain2023';
//$quote_id     = '4140';
$date         = _t('date');
$price        = '';
$shopid       = '';
$speaker      = '';
$program      = '';
$grcampaign   = '';
$graccount    = '';
$cost         = '';
$groups_enkod = 'brain_2023';
$value        = true;
$header_speakers_link = '#speakers';
$main_class = 'outro';
$logo_organizer = 'img/organizer/logo.svg';
$vtbDate = '30&nbsp;января';


$titlePage           = 'BRAIN 2023 | Конференция о мозге и мышлении';
$descriptionPage    = 'Brain 2023 – международная конференция о&nbsp;мозге и&nbsp;мышлении, которая в&nbsp;четвертый раз соберет в&nbsp;Москве ведущих экспертов России и&nbsp;Мира.';
$land               = 'brain_2021';
$type               = 'brain_2021';
$date               = 'г. Москва, Волгоградский проспект, д.&nbsp;42&nbsp;корп.&nbsp;5, Конгресс-центр &laquo;Технополис Москва&raquo;';
$subdate             = '16&nbsp;марта 2023';
$_['ru']['main__title']                 = 'BRAIN<br>2023';
$_['ru']['description__about-title']    = 'Что такое Brain 2023';
$_['ru']['description__about-desc']     = 'международная конференция о&nbsp;мозге и&nbsp;мышлении, которая в&nbsp;четвертый раз соберет в&nbsp;Москве ведущих экспертов России и&nbsp;Мира.';
$_['ru']['description__brain-desc-3']   = '<span class="description__brain-desc_part">&laquo;Ваш потрясающий мозг</span> может поднять вас из&nbsp;нищеты до&nbsp;богатства, превратить вас из&nbsp;одиночки во&nbsp;всеобщего любимца, вывести из&nbsp;депрессии, сделав счастливым и&nbsp;радостным,&nbsp;&mdash; если вы&nbsp;правильно воспользуетесь&nbsp;им.&raquo;&nbsp;&mdash; Брайн Трейси';
$_['ru']['description__about-year']     = '2023';
$_['ru']['speakers__title']             = 'Спикеры';
$_['ru']['headliners__title'] = 'Хедлайнеры';

// $partner_array = json_decode(file_get_contents("https://franch.sbs.edu.ru/global__FR-partners.json"), true);
// if (isset($partner_array[$partner])) {
//     $value  = $partner_array[$partner];
//     $phone = $value["phone"];
//     $email = $value["email"];
// }

switch ($version) {
    case 'brain2023':
        $phone = '+7 926 921 05 88';
    break;
    case 'fullprice':
        $phone = '+7 926 921 05 88';
        $version = 'fullprice';
    break;
    case 'vologda':
        $partner = 'franchising_vologda';
        $phone = '+7 8172 569 700';
    break;

    case 'izhevsk':
        $partner = 'franchising_izhevsk';
        $phone = '+7 3412 330 220';
    break;

    case 'vladivostok':
        $partner = 'franchising_vladivostok';
        $phone = '8 914 079 25 51';
    break;

    case 'sochi':
        $partner = 'franchising_sochi';
        $phone = '+7 912 020 49 99';
    break;
}

switch ($partner) {
}

// switch ($version) {

//     case 'brain2021':
//         $titlePage           = 'BRAIN 2021 | Конференция о мозге и мышлении';
//         $descriptionPage    = 'Brain 2021 – международная конференция о мозге и мышлении, главной темой которой является управление способностями мозга и мышления.';
//         $land               = 'brain_2021';
//         $type               = 'brain_2021';
//         $date               = '19-20 ноября 2021&nbsp;| Москва | MUSIC&nbsp;MEDIA DOME (MMD)';
//         $_['ru']['main__title']                 = 'BRAIN 2021';
//         $_['ru']['description__about-title']    = 'Что такое Brain 2021';
//         $_['ru']['description__about-desc']     = 'Brain 2021 — международная конференция о мозге и мышлении, которая во второй раз соберет в Москве ведущих экспертов России и мира.';
//         $_['ru']['description__brain-desc-3']   = '<span class="description__brain-desc_part">Есть версия, что счастье&nbsp;&mdash;</span> это прямое следствие гармонии ума, эмоций и&nbsp;физического состояния, BRAIN 2021 даст возможность каждому проверить это на&nbsp;себе.';
//         $_['ru']['description__about-year']     = '2021';
//         $_['ru']['speakers__title']             = 'Спикеры';
//         $_['ru']['headliners__title'] = 'Хедлайнеры';
//     break;
// }

switch ($lang) {

    case 'en':
        $value = 'false';
        $header_speakers_link = '#speakers';
        $main_class = 'intro';
        $logo_organizer = 'img/organizer/logo-en.svg';
        break;
}

$action = $lander . '&unit=' . $unit . '&land=' . $land . '&type=' . $type . '&version=' . $version . '&partner=' . $partner . '&graccount=' . $graccount . '&grcampaign=' . $grcampaign . '&dater=' . $date . '&cost=' . $cost . '&shop_id=' . $shopid . '&speaker=' . $speaker . '&program=' . $program . '&groups_enkod=' . $groups_enkod . '&link=' . $link . '&ignore-thanksall=1';

$action_ticketless = $lander . '&land=' . $land . '&version=' . $version . '&partner=' . $partner . '&graccount=' . $graccount . '&grcampaign=' . $grcampaign . '&dater=' . $date . '&cost=' . $cost . '&shop_id=' . $shopid . '&speaker=' . $speaker . '&program=' . $program . '&groups_enkod=' . $groups_enkod . '&link=' . $link . '&ignore-thanksall=1';

$action_franchise = implode(array(
    'https://syn.su/lander.php?r=land/index',
    '&unit=', $unit,
    '&type=', $type,
    '&land=', $land,
    '&version=', $version,
    '&partner=', $partner,
    '&graccount=', $graccount,
    '&grcampaign=', $grcampaign,
    '&groups_enkod=', $groups_enkod,
    '&quote_id=3644'
));

/* Functions */
function get_phone_link($phone, $text = '', $class = '', $protocol = '')
{
    if (!$phone) return;

    if (strpos($protocol, 'whatsapp') !== false) {
        $protocol = 'whatsapp://send?phone=';
        $phone = str_replace('+', '', $phone);
    }

    return preg_replace('/[^\\d\\+]/m', '', $phone);
}
