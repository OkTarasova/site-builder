<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/includes/cookie/styles.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/includes/cookie/script.js");
?>

<div id="cookie-consent-banner">
  <div class="container">
    <p>
      Продолжая пользоваться сайтом, Вы соглашаетесь с <a href="/policy/" target="_blank">политикой использования файлов cookie</a>.
    </p>
    <button id="cookie-consent-button" class="main-btn">Хорошо</button>
  </div>
</div>