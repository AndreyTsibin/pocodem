<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
  
  <title>POKODEM - инструменты для разработки веб-сайтов</title>
</head>

<body class="body">
  <div class="wrapper">

    <!-- Header -->
    <header class="header">
      <!-- Поиск -->
      <div class="header__search">
        <input class="header__search-input" id="searchInput" type="text" placeholder="поиск на странице...">
        <button class="header__search-btn" id="searchButton">
          <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10.0799 1.44C5.56867 1.44 1.91992 5.08875 1.91992 9.6C1.91992 14.1113 5.56867 17.76 10.0799 17.76C11.6905 17.76 13.1812 17.2875 14.4449 16.485L20.3399 22.38L22.3799 20.34L16.5599 14.535C17.6062 13.1625 18.2399 11.4619 18.2399 9.6C18.2399 5.08875 14.5912 1.44 10.0799 1.44ZM10.0799 3.36C13.5355 3.36 16.3199 6.14438 16.3199 9.6C16.3199 13.0556 13.5355 15.84 10.0799 15.84C6.6243 15.84 3.83992 13.0556 3.83992 9.6C3.83992 6.14438 6.6243 3.36 10.0799 3.36Z" />
          </svg>
        </button>
      </div>
      <!-- Результат поиска -->
      <div class="search__result" id="searchResults" style="display: none;"></div>
      <!-- Кнопка -->
      <button class="news-btn" onclick="window.location.href='<?php echo home_url( 'novosti' ); ?>'"><svg width="18" height="18"
          viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M8.99994 0C8.20541 0 7.55994 0.645469 7.55994 1.44C7.55994 2.23453 8.20541 2.88 8.99994 2.88C9.79447 2.88 10.4399 2.23453 10.4399 1.44C10.4399 0.645469 9.79447 0 8.99994 0ZM6.97494 2.19375C5.32963 2.89828 4.31994 4.48453 4.31994 6.48C4.31994 10.44 2.95166 11.4342 2.13744 12.0263C1.77604 12.2878 1.43994 12.5311 1.43994 12.96C1.43994 14.4745 3.70119 15.12 8.99994 15.12C14.2987 15.12 16.5599 14.4745 16.5599 12.96C16.5599 12.5311 16.2238 12.2878 15.8624 12.0263C15.0482 11.4342 13.6799 10.44 13.6799 6.48C13.6799 4.47891 12.6717 2.89688 11.0249 2.19375C10.717 3.01219 9.92385 3.6 8.99994 3.6C8.07604 3.6 7.28291 3.01078 6.97494 2.19375ZM6.83994 15.795C6.83994 15.8091 6.83994 15.8259 6.83994 15.84C6.83994 17.0311 7.80885 18 8.99994 18C10.191 18 11.1599 17.0311 11.1599 15.84C11.1599 15.8259 11.1599 15.8091 11.1599 15.795C10.4821 15.8231 9.76213 15.84 8.99994 15.84C8.23775 15.84 7.51775 15.8231 6.83994 15.795Z"
            fill="white" />
        </svg>Новости</button>
      <!-- Мобильное меню шапка-->
      <div class="header__mobile-menu">
        <!-- Логотип -->
        <div class="menu__logo">
          <a href="/">
            <svg width="126" height="24" viewBox="0 0 126 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_122_12)">
                <g clip-path="url(#clip1_122_12)">
                  <path
                    d="M1.87892 1.01979L1.87892 1.01978C1.90674 1.00816 1.93007 1.003 1.94961 1.00111C2.0209 0.994221 2.09418 1.01918 2.14837 1.07399L2.14837 1.07399L2.1496 1.07523L6.53382 5.49366L7.01479 5.97839L7.64133 5.70684C8.98029 5.12654 10.561 4.79017 12 4.79017C13.4086 4.79017 14.9006 5.1051 16.3531 5.72206L16.9767 5.98694L17.4539 5.506L21.8503 1.07523L21.8516 1.07399C21.9229 1.00188 22.0266 0.980628 22.1215 1.01999C22.2141 1.0589 22.28 1.15325 22.28 1.26394V13.8951C22.28 18.8138 17.7742 23 12 23C6.22571 23 1.71997 18.8138 1.71997 13.8951V1.26394C1.71997 1.15306 1.78605 1.05857 1.87892 1.01979ZM10.4933 12.0004C10.4933 10.4079 9.21023 9.10574 7.6133 9.10574C6.01637 9.10574 4.7333 10.4079 4.7333 12.0004C4.7333 13.5929 6.01638 14.8951 7.6133 14.8951C9.21023 14.8951 10.4933 13.5929 10.4933 12.0004ZM19.2666 12.0004C19.2666 10.4079 17.9836 9.10574 16.3866 9.10574C14.7897 9.10574 13.5066 10.4079 13.5066 12.0004C13.5066 13.5929 14.7897 14.8951 16.3866 14.8951C17.9836 14.8951 19.2666 13.5929 19.2666 12.0004Z"
                    fill="white" stroke="white" stroke-width="2" />
                  <circle cx="7.44005" cy="12" r="2.64" fill="#41BA66" />
                  <circle cx="16.5599" cy="12" r="2.64" fill="#41BA66" />
                  <path
                    d="M13.2111 18.27C12.7261 19.11 11.5137 19.11 11.0287 18.27C10.5437 17.43 11.1499 16.38 12.1199 16.38C13.0898 16.38 13.6961 17.43 13.2111 18.27Z"
                    fill="#121927" />
                </g>
                <path
                  d="M38.7773 14.0586H35.2031V11.5879H38.7773C39.3047 11.5879 39.7279 11.5 40.0469 11.3242C40.3724 11.1484 40.61 10.9076 40.7598 10.6016C40.916 10.2891 40.9941 9.9375 40.9941 9.54688C40.9941 9.14323 40.916 8.76888 40.7598 8.42383C40.61 8.07227 40.3724 7.78906 40.0469 7.57422C39.7279 7.35938 39.3047 7.25195 38.7773 7.25195H36.3555V19H33.1719V4.78125H38.7773C39.9102 4.78125 40.8802 4.98633 41.6875 5.39648C42.5013 5.80664 43.123 6.36979 43.5527 7.08594C43.9889 7.79557 44.207 8.60938 44.207 9.52734C44.207 10.4453 43.9889 11.2428 43.5527 11.9199C43.123 12.597 42.5013 13.1243 41.6875 13.502C40.8802 13.873 39.9102 14.0586 38.7773 14.0586Z"
                  fill="white" />
                <path
                  d="M57.9961 11.5781V12.2129C57.9961 13.2936 57.8464 14.2637 57.5469 15.123C57.2539 15.9824 56.834 16.7148 56.2871 17.3203C55.7467 17.9258 55.1022 18.3913 54.3535 18.7168C53.6113 19.0358 52.7878 19.1953 51.8828 19.1953C50.9779 19.1953 50.151 19.0358 49.4023 18.7168C48.6536 18.3913 48.0026 17.9258 47.4492 17.3203C46.9023 16.7148 46.4792 15.9824 46.1797 15.123C45.8802 14.2637 45.7305 13.2936 45.7305 12.2129V11.5781C45.7305 10.4974 45.8802 9.52734 46.1797 8.66797C46.4792 7.80208 46.8991 7.06641 47.4395 6.46094C47.9863 5.85547 48.6341 5.39323 49.3828 5.07422C50.1315 4.7487 50.9583 4.58594 51.8633 4.58594C52.7682 4.58594 53.5951 4.7487 54.3438 5.07422C55.0924 5.39323 55.737 5.85547 56.2773 6.46094C56.8242 7.06641 57.2474 7.80208 57.5469 8.66797C57.8464 9.52734 57.9961 10.4974 57.9961 11.5781ZM54.7832 12.2129V11.5586C54.7832 10.8359 54.7181 10.1979 54.5879 9.64453C54.4577 9.08464 54.2689 8.61589 54.0215 8.23828C53.7741 7.86068 53.4681 7.57747 53.1035 7.38867C52.7389 7.19336 52.3255 7.0957 51.8633 7.0957C51.3815 7.0957 50.9616 7.19336 50.6035 7.38867C50.2454 7.57747 49.9427 7.86068 49.6953 8.23828C49.4544 8.61589 49.2689 9.08464 49.1387 9.64453C49.015 10.1979 48.9531 10.8359 48.9531 11.5586V12.2129C48.9531 12.929 49.015 13.5671 49.1387 14.127C49.2689 14.6803 49.4577 15.1491 49.7051 15.5332C49.9525 15.9173 50.2552 16.207 50.6133 16.4023C50.9779 16.5977 51.401 16.6953 51.8828 16.6953C52.3451 16.6953 52.7552 16.5977 53.1133 16.4023C53.4779 16.207 53.7839 15.9173 54.0312 15.5332C54.2786 15.1491 54.4642 14.6803 54.5879 14.127C54.7181 13.5671 54.7832 12.929 54.7832 12.2129Z"
                  fill="white" />
                <path
                  d="M63.1328 4.78125V19H59.9492V4.78125H63.1328ZM71.6289 4.78125L66.0625 11.8906L62.8203 15.4062L62.2441 12.4473L64.3828 9.38086L67.7227 4.78125H71.6289ZM67.9375 19L64.0117 12.5059L66.4336 10.6211L71.707 19H67.9375Z"
                  fill="white" />
                <path
                  d="M84.2461 11.5781V12.2129C84.2461 13.2936 84.0964 14.2637 83.7969 15.123C83.5039 15.9824 83.084 16.7148 82.5371 17.3203C81.9967 17.9258 81.3522 18.3913 80.6035 18.7168C79.8613 19.0358 79.0378 19.1953 78.1328 19.1953C77.2279 19.1953 76.401 19.0358 75.6523 18.7168C74.9036 18.3913 74.2526 17.9258 73.6992 17.3203C73.1523 16.7148 72.7292 15.9824 72.4297 15.123C72.1302 14.2637 71.9805 13.2936 71.9805 12.2129V11.5781C71.9805 10.4974 72.1302 9.52734 72.4297 8.66797C72.7292 7.80208 73.1491 7.06641 73.6895 6.46094C74.2363 5.85547 74.8841 5.39323 75.6328 5.07422C76.3815 4.7487 77.2083 4.58594 78.1133 4.58594C79.0182 4.58594 79.8451 4.7487 80.5938 5.07422C81.3424 5.39323 81.987 5.85547 82.5273 6.46094C83.0742 7.06641 83.4974 7.80208 83.7969 8.66797C84.0964 9.52734 84.2461 10.4974 84.2461 11.5781ZM81.0332 12.2129V11.5586C81.0332 10.8359 80.9681 10.1979 80.8379 9.64453C80.7077 9.08464 80.5189 8.61589 80.2715 8.23828C80.0241 7.86068 79.7181 7.57747 79.3535 7.38867C78.9889 7.19336 78.5755 7.0957 78.1133 7.0957C77.6315 7.0957 77.2116 7.19336 76.8535 7.38867C76.4954 7.57747 76.1927 7.86068 75.9453 8.23828C75.7044 8.61589 75.5189 9.08464 75.3887 9.64453C75.265 10.1979 75.2031 10.8359 75.2031 11.5586V12.2129C75.2031 12.929 75.265 13.5671 75.3887 14.127C75.5189 14.6803 75.7077 15.1491 75.9551 15.5332C76.2025 15.9173 76.5052 16.207 76.8633 16.4023C77.2279 16.5977 77.651 16.6953 78.1328 16.6953C78.5951 16.6953 79.0052 16.5977 79.3633 16.4023C79.7279 16.207 80.0339 15.9173 80.2812 15.5332C80.5286 15.1491 80.7142 14.6803 80.8379 14.127C80.9681 13.5671 81.0332 12.929 81.0332 12.2129Z"
                  fill="white" />
                <path
                  d="M90.7012 19H87.5762L87.5957 16.5391H90.7012C91.4108 16.5391 92.0098 16.3763 92.498 16.0508C92.9863 15.7188 93.3574 15.2305 93.6113 14.5859C93.8652 13.9349 93.9922 13.1439 93.9922 12.2129V11.5586C93.9922 10.8555 93.9206 10.237 93.7773 9.70312C93.6341 9.16276 93.4225 8.71029 93.1426 8.3457C92.8626 7.98112 92.5143 7.70768 92.0977 7.52539C91.6875 7.3431 91.2155 7.25195 90.6816 7.25195H87.5176V4.78125H90.6816C91.6452 4.78125 92.5241 4.94401 93.3184 5.26953C94.1191 5.59505 94.8092 6.06055 95.3887 6.66602C95.9746 7.27148 96.4271 7.98763 96.7461 8.81445C97.0651 9.64128 97.2246 10.5625 97.2246 11.5781V12.2129C97.2246 13.222 97.0651 14.1432 96.7461 14.9766C96.4271 15.8034 95.9746 16.5195 95.3887 17.125C94.8092 17.724 94.1224 18.1862 93.3281 18.5117C92.5339 18.8372 91.6582 19 90.7012 19ZM89.3828 4.78125V19H86.1992V4.78125H89.3828Z"
                  fill="white" />
                <path
                  d="M108.836 16.5391V19H101.268V16.5391H108.836ZM102.352 4.78125V19H99.168V4.78125H102.352ZM107.859 10.5039V12.8867H101.268V10.5039H107.859ZM108.846 4.78125V7.25195H101.268V4.78125H108.846Z"
                  fill="white" />
                <path
                  d="M111.922 4.78125H114.559L117.977 14.9473L121.385 4.78125H124.021L119.041 19H116.902L111.922 4.78125ZM110.398 4.78125H113.084L113.582 15.3184V19H110.398V4.78125ZM122.859 4.78125H125.555V19H122.361V15.3184L122.859 4.78125Z"
                  fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_122_12">
                  <rect width="126" height="24" fill="white" />
                </clipPath>
                <clipPath id="clip1_122_12">
                  <rect width="24" height="24" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>
        <!-- Иконка меню -->
        <div class="mobile-menu-icon">
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
      <!-- Мобильное меню ссылки -->
      <nav class="mobile-menu">
        <a class="menu__link" href="<?php echo home_url( 'tilda' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_4)">
              <path d="M5.74121 19V4.26143H0V0H16.743V4.26143H11.0285V19H5.74121Z" fill="white" />
              <path d="M18.7127 19V0H24V19H18.7127Z" fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_4">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>Тильда</span>
        </a>
        <a class="menu__link" href="<?php echo home_url( 'javascript' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_7)">
              <path
                d="M4.84933 19C3.82492 19 2.89363 18.7738 2.05548 18.3214C1.23063 17.8516 0.545466 17.1818 0 16.3118L2.15526 12.9712C2.52777 13.5975 2.91359 14.076 3.31271 14.4066C3.71183 14.7198 4.13091 14.8764 4.56994 14.8764C5.7407 14.8764 6.32608 13.989 6.32608 12.2143V4.35852H1.49671V0.365385H10.2375V11.9011C10.2375 14.2848 9.77848 16.0682 8.8605 17.2514C7.94252 18.4171 6.60546 19 4.84933 19Z"
                fill="white" />
              <path
                d="M17.8136 19C16.6695 19 15.5652 18.8173 14.5009 18.4519C13.4499 18.0691 12.5918 17.582 11.9266 16.9904L13.2237 13.1799C13.849 13.7019 14.5674 14.1369 15.379 14.4849C16.2038 14.8155 17.022 14.9808 17.8336 14.9808C18.379 14.9808 18.8181 14.9199 19.1507 14.7981C19.4833 14.6589 19.7227 14.4849 19.8691 14.2761C20.0287 14.0499 20.1086 13.7889 20.1086 13.4931C20.1086 13.0756 19.9622 12.745 19.6695 12.5014C19.3768 12.2578 18.9977 12.0577 18.532 11.9011C18.0664 11.7445 17.5475 11.5879 16.9755 11.4313C16.4167 11.2747 15.8513 11.0746 15.2792 10.831C14.7204 10.5875 14.2082 10.2743 13.7426 9.89148C13.2769 9.4913 12.8978 8.97802 12.6051 8.35165C12.3124 7.70788 12.166 6.89881 12.166 5.92445C12.166 4.8283 12.3922 3.83654 12.8445 2.94918C13.3102 2.06181 14.002 1.34844 14.92 0.809066C15.838 0.269689 16.9821 0 18.3524 0C19.2704 0 20.1684 0.139194 21.0465 0.417583C21.9379 0.678572 22.7295 1.07006 23.4213 1.59203L22.204 5.42857C21.5388 4.95879 20.8802 4.61081 20.2283 4.38462C19.5764 4.14103 18.9445 4.01923 18.3325 4.01923C17.787 4.01923 17.348 4.09753 17.0154 4.25412C16.6828 4.39332 16.4433 4.58471 16.297 4.8283C16.1506 5.07189 16.0774 5.35028 16.0774 5.66346C16.0774 6.06365 16.2171 6.38553 16.4965 6.62912C16.7892 6.85531 17.1684 7.0467 17.634 7.2033C18.113 7.34249 18.6318 7.49039 19.1906 7.64698C19.7627 7.80357 20.3281 8.00366 20.8869 8.24725C21.4589 8.47344 21.9778 8.78663 22.4434 9.18681C22.9091 9.5696 23.2816 10.0829 23.561 10.7266C23.8537 11.353 24 12.1447 24 13.1016C24 14.163 23.7672 15.1461 23.3015 16.0508C22.8492 16.9382 22.164 17.6516 21.2461 18.1909C20.3414 18.7303 19.1972 19 17.8136 19Z"
                fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_7">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>JavaScript</span>
        </a>
        <a class="menu__link" href="<?php echo home_url( 'generatory' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_9)">
              <path
                d="M6.77425 19C5.80316 19 4.90226 18.7738 4.07157 18.3214C3.24088 17.8516 2.52133 17.1905 1.91294 16.3379C1.31624 15.4853 0.848244 14.4849 0.508946 13.3365C0.169649 12.1708 0 10.8919 0 9.5C0 8.10806 0.169649 6.83791 0.508946 5.68956C0.848244 4.52381 1.32209 3.51465 1.93049 2.66209C2.53888 1.80952 3.25843 1.15705 4.08912 0.704671C4.93151 0.23489 5.84996 0 6.84445 0C8.00274 0 9.03819 0.287088 9.95078 0.861264C10.8634 1.43544 11.618 2.26191 12.2147 3.34066L10.0034 6.31593C9.58223 5.63736 9.12593 5.13278 8.63454 4.8022C8.15484 4.45421 7.61665 4.28022 7.01995 4.28022C6.49345 4.28022 6.01376 4.40202 5.58086 4.6456C5.14796 4.88919 4.77942 5.24588 4.47522 5.71566C4.17102 6.16804 3.93117 6.71612 3.75567 7.35989C3.59187 7.98626 3.50997 8.69963 3.50997 9.5C3.50997 10.2656 3.59187 10.9702 3.75567 11.614C3.93117 12.2578 4.17102 12.8146 4.47522 13.2843C4.77942 13.7367 5.14211 14.0934 5.56331 14.3544C5.99621 14.598 6.47005 14.7198 6.98485 14.7198C7.49965 14.7198 8.00274 14.598 8.49414 14.3544C8.98554 14.0934 9.48278 13.6584 9.98588 13.0495L11.9339 16.6772C11.2319 17.4254 10.4188 17.9995 9.49448 18.3997C8.57019 18.7999 7.66344 19 6.77425 19ZM8.86269 15.9986V9.10852H11.9339V16.6772L8.86269 15.9986Z"
                fill="white" />
              <path
                d="M17.331 7.43819H23.0348V11.3008H17.331V7.43819ZM17.5767 14.6415H24V18.6346H14.137V0.365385H23.7719V4.35852H17.5767V14.6415Z"
                fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_9">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>Генератор</span></a>
        <a class="menu__link" href="<?php echo home_url( 'ssylki' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_11)">
              <path d="M0 19V0H5.87863V14.7386H15.7951V19H0Z" fill="white" />
              <path d="M18.1214 19V0H24V19H18.1214Z" fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_11">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg><span>Ссылки</span></a>

          <a class="menu__link" href="<?php echo home_url( 'novosti' ); ?>">
          <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22 0V19H17.8517L7.96906 7.0415H7.80269V19H3V0H7.21483L17.0198 11.9492H17.2195V0H22Z" fill="white"/>
</svg><span>Новости</span></a>

<a class="menu__link" href="<?php echo home_url( 'razrabotka' ); ?>">
<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.43725 0C6.32094 0 6.20987 0.0474859 6.1281 0.132533C6.04633 0.217581 6 0.332048 6 0.452381L6.00085 15.381C6.00085 15.6311 6.19631 15.8333 6.43811 15.8333H7.74901V0H6.43725ZM8.62351 0.257115V15.57L11.7483 12.4246C11.8511 12.321 11.9965 12.2759 12.1378 12.3044C12.2786 12.3334 12.3973 12.432 12.4546 12.5686L15.0542 18.7826L16.5923 18.0519C16.8118 17.9479 16.908 17.68 16.8075 17.4529L14.1455 11.4359L18.6009 11.04C18.7727 11.0251 18.9194 10.907 18.9758 10.7387C19.0322 10.5705 18.9881 10.3842 18.8631 10.2616L8.62351 0.257115ZM11.9038 13.5299L10.7637 14.6776L12.3948 18.7217C12.4626 18.8909 12.6217 19 12.7979 19H14.1916L11.9038 13.5299Z" fill="white"/>
</svg>
<span>Разработка</span></a>

<a class="menu__link" href="<?php echo home_url( 'kontakty' ); ?>">
<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.8692 1.07124C19.7642 0.988868 19.6207 0.976911 19.5025 1.04068L3.17568 9.88371C3.05743 9.94748 2.98834 10.0764 3.00163 10.2105C3.01358 10.3447 3.10393 10.459 3.23149 10.5002L7.87256 12.0147L7.42347 16.609C7.40885 16.7551 7.4899 16.8933 7.6241 16.9504C7.66662 16.9704 7.71312 16.9797 7.75829 16.9797C7.85263 16.9797 7.94564 16.9398 8.01074 16.8654L10.9378 13.5586L15.345 17.903C15.4088 17.9655 15.4939 18 15.5816 18C15.6121 18 15.6427 17.9947 15.6732 17.9867C15.7888 17.9548 15.8792 17.8618 15.9084 17.7449L19.9901 1.41933C20.022 1.28913 19.9755 1.15228 19.8692 1.07124ZM8.5555 11.9523L15.1923 6.58617L10.6694 12.8478L8.1941 15.6418L8.5555 11.9523Z" fill="white"/>
</svg>
<span>Контакты</span></a>

        <!-- <div class="menu__contact">
          <a class="menu__contact-link" href="<?php echo home_url( 'razrabotka' ); ?>">Разработка</a>
          <a class="menu__contact-link" href="<?php echo home_url( 'kontakty' ); ?>">Контакты</a>
        </div> -->
      </nav>
    </header>

    <!-- Menu -->
    <aside class="menu__container">
      <!-- Логотип -->
      <div class="menu__logo">
        <a href="/">
          <svg width="126" height="24" viewBox="0 0 126 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_122_12)">
              <g clip-path="url(#clip1_122_12)">
                <path
                  d="M1.87892 1.01979L1.87892 1.01978C1.90674 1.00816 1.93007 1.003 1.94961 1.00111C2.0209 0.994221 2.09418 1.01918 2.14837 1.07399L2.14837 1.07399L2.1496 1.07523L6.53382 5.49366L7.01479 5.97839L7.64133 5.70684C8.98029 5.12654 10.561 4.79017 12 4.79017C13.4086 4.79017 14.9006 5.1051 16.3531 5.72206L16.9767 5.98694L17.4539 5.506L21.8503 1.07523L21.8516 1.07399C21.9229 1.00188 22.0266 0.980628 22.1215 1.01999C22.2141 1.0589 22.28 1.15325 22.28 1.26394V13.8951C22.28 18.8138 17.7742 23 12 23C6.22571 23 1.71997 18.8138 1.71997 13.8951V1.26394C1.71997 1.15306 1.78605 1.05857 1.87892 1.01979ZM10.4933 12.0004C10.4933 10.4079 9.21023 9.10574 7.6133 9.10574C6.01637 9.10574 4.7333 10.4079 4.7333 12.0004C4.7333 13.5929 6.01638 14.8951 7.6133 14.8951C9.21023 14.8951 10.4933 13.5929 10.4933 12.0004ZM19.2666 12.0004C19.2666 10.4079 17.9836 9.10574 16.3866 9.10574C14.7897 9.10574 13.5066 10.4079 13.5066 12.0004C13.5066 13.5929 14.7897 14.8951 16.3866 14.8951C17.9836 14.8951 19.2666 13.5929 19.2666 12.0004Z"
                  fill="white" stroke="white" stroke-width="2" />
                <circle cx="7.44005" cy="12" r="2.64" fill="#41BA66" />
                <circle cx="16.5599" cy="12" r="2.64" fill="#41BA66" />
                <path
                  d="M13.2111 18.27C12.7261 19.11 11.5137 19.11 11.0287 18.27C10.5437 17.43 11.1499 16.38 12.1199 16.38C13.0898 16.38 13.6961 17.43 13.2111 18.27Z"
                  fill="#121927" />
              </g>
              <path
                d="M38.7773 14.0586H35.2031V11.5879H38.7773C39.3047 11.5879 39.7279 11.5 40.0469 11.3242C40.3724 11.1484 40.61 10.9076 40.7598 10.6016C40.916 10.2891 40.9941 9.9375 40.9941 9.54688C40.9941 9.14323 40.916 8.76888 40.7598 8.42383C40.61 8.07227 40.3724 7.78906 40.0469 7.57422C39.7279 7.35938 39.3047 7.25195 38.7773 7.25195H36.3555V19H33.1719V4.78125H38.7773C39.9102 4.78125 40.8802 4.98633 41.6875 5.39648C42.5013 5.80664 43.123 6.36979 43.5527 7.08594C43.9889 7.79557 44.207 8.60938 44.207 9.52734C44.207 10.4453 43.9889 11.2428 43.5527 11.9199C43.123 12.597 42.5013 13.1243 41.6875 13.502C40.8802 13.873 39.9102 14.0586 38.7773 14.0586Z"
                fill="white" />
              <path
                d="M57.9961 11.5781V12.2129C57.9961 13.2936 57.8464 14.2637 57.5469 15.123C57.2539 15.9824 56.834 16.7148 56.2871 17.3203C55.7467 17.9258 55.1022 18.3913 54.3535 18.7168C53.6113 19.0358 52.7878 19.1953 51.8828 19.1953C50.9779 19.1953 50.151 19.0358 49.4023 18.7168C48.6536 18.3913 48.0026 17.9258 47.4492 17.3203C46.9023 16.7148 46.4792 15.9824 46.1797 15.123C45.8802 14.2637 45.7305 13.2936 45.7305 12.2129V11.5781C45.7305 10.4974 45.8802 9.52734 46.1797 8.66797C46.4792 7.80208 46.8991 7.06641 47.4395 6.46094C47.9863 5.85547 48.6341 5.39323 49.3828 5.07422C50.1315 4.7487 50.9583 4.58594 51.8633 4.58594C52.7682 4.58594 53.5951 4.7487 54.3438 5.07422C55.0924 5.39323 55.737 5.85547 56.2773 6.46094C56.8242 7.06641 57.2474 7.80208 57.5469 8.66797C57.8464 9.52734 57.9961 10.4974 57.9961 11.5781ZM54.7832 12.2129V11.5586C54.7832 10.8359 54.7181 10.1979 54.5879 9.64453C54.4577 9.08464 54.2689 8.61589 54.0215 8.23828C53.7741 7.86068 53.4681 7.57747 53.1035 7.38867C52.7389 7.19336 52.3255 7.0957 51.8633 7.0957C51.3815 7.0957 50.9616 7.19336 50.6035 7.38867C50.2454 7.57747 49.9427 7.86068 49.6953 8.23828C49.4544 8.61589 49.2689 9.08464 49.1387 9.64453C49.015 10.1979 48.9531 10.8359 48.9531 11.5586V12.2129C48.9531 12.929 49.015 13.5671 49.1387 14.127C49.2689 14.6803 49.4577 15.1491 49.7051 15.5332C49.9525 15.9173 50.2552 16.207 50.6133 16.4023C50.9779 16.5977 51.401 16.6953 51.8828 16.6953C52.3451 16.6953 52.7552 16.5977 53.1133 16.4023C53.4779 16.207 53.7839 15.9173 54.0312 15.5332C54.2786 15.1491 54.4642 14.6803 54.5879 14.127C54.7181 13.5671 54.7832 12.929 54.7832 12.2129Z"
                fill="white" />
              <path
                d="M63.1328 4.78125V19H59.9492V4.78125H63.1328ZM71.6289 4.78125L66.0625 11.8906L62.8203 15.4062L62.2441 12.4473L64.3828 9.38086L67.7227 4.78125H71.6289ZM67.9375 19L64.0117 12.5059L66.4336 10.6211L71.707 19H67.9375Z"
                fill="white" />
              <path
                d="M84.2461 11.5781V12.2129C84.2461 13.2936 84.0964 14.2637 83.7969 15.123C83.5039 15.9824 83.084 16.7148 82.5371 17.3203C81.9967 17.9258 81.3522 18.3913 80.6035 18.7168C79.8613 19.0358 79.0378 19.1953 78.1328 19.1953C77.2279 19.1953 76.401 19.0358 75.6523 18.7168C74.9036 18.3913 74.2526 17.9258 73.6992 17.3203C73.1523 16.7148 72.7292 15.9824 72.4297 15.123C72.1302 14.2637 71.9805 13.2936 71.9805 12.2129V11.5781C71.9805 10.4974 72.1302 9.52734 72.4297 8.66797C72.7292 7.80208 73.1491 7.06641 73.6895 6.46094C74.2363 5.85547 74.8841 5.39323 75.6328 5.07422C76.3815 4.7487 77.2083 4.58594 78.1133 4.58594C79.0182 4.58594 79.8451 4.7487 80.5938 5.07422C81.3424 5.39323 81.987 5.85547 82.5273 6.46094C83.0742 7.06641 83.4974 7.80208 83.7969 8.66797C84.0964 9.52734 84.2461 10.4974 84.2461 11.5781ZM81.0332 12.2129V11.5586C81.0332 10.8359 80.9681 10.1979 80.8379 9.64453C80.7077 9.08464 80.5189 8.61589 80.2715 8.23828C80.0241 7.86068 79.7181 7.57747 79.3535 7.38867C78.9889 7.19336 78.5755 7.0957 78.1133 7.0957C77.6315 7.0957 77.2116 7.19336 76.8535 7.38867C76.4954 7.57747 76.1927 7.86068 75.9453 8.23828C75.7044 8.61589 75.5189 9.08464 75.3887 9.64453C75.265 10.1979 75.2031 10.8359 75.2031 11.5586V12.2129C75.2031 12.929 75.265 13.5671 75.3887 14.127C75.5189 14.6803 75.7077 15.1491 75.9551 15.5332C76.2025 15.9173 76.5052 16.207 76.8633 16.4023C77.2279 16.5977 77.651 16.6953 78.1328 16.6953C78.5951 16.6953 79.0052 16.5977 79.3633 16.4023C79.7279 16.207 80.0339 15.9173 80.2812 15.5332C80.5286 15.1491 80.7142 14.6803 80.8379 14.127C80.9681 13.5671 81.0332 12.929 81.0332 12.2129Z"
                fill="white" />
              <path
                d="M90.7012 19H87.5762L87.5957 16.5391H90.7012C91.4108 16.5391 92.0098 16.3763 92.498 16.0508C92.9863 15.7188 93.3574 15.2305 93.6113 14.5859C93.8652 13.9349 93.9922 13.1439 93.9922 12.2129V11.5586C93.9922 10.8555 93.9206 10.237 93.7773 9.70312C93.6341 9.16276 93.4225 8.71029 93.1426 8.3457C92.8626 7.98112 92.5143 7.70768 92.0977 7.52539C91.6875 7.3431 91.2155 7.25195 90.6816 7.25195H87.5176V4.78125H90.6816C91.6452 4.78125 92.5241 4.94401 93.3184 5.26953C94.1191 5.59505 94.8092 6.06055 95.3887 6.66602C95.9746 7.27148 96.4271 7.98763 96.7461 8.81445C97.0651 9.64128 97.2246 10.5625 97.2246 11.5781V12.2129C97.2246 13.222 97.0651 14.1432 96.7461 14.9766C96.4271 15.8034 95.9746 16.5195 95.3887 17.125C94.8092 17.724 94.1224 18.1862 93.3281 18.5117C92.5339 18.8372 91.6582 19 90.7012 19ZM89.3828 4.78125V19H86.1992V4.78125H89.3828Z"
                fill="white" />
              <path
                d="M108.836 16.5391V19H101.268V16.5391H108.836ZM102.352 4.78125V19H99.168V4.78125H102.352ZM107.859 10.5039V12.8867H101.268V10.5039H107.859ZM108.846 4.78125V7.25195H101.268V4.78125H108.846Z"
                fill="white" />
              <path
                d="M111.922 4.78125H114.559L117.977 14.9473L121.385 4.78125H124.021L119.041 19H116.902L111.922 4.78125ZM110.398 4.78125H113.084L113.582 15.3184V19H110.398V4.78125ZM122.859 4.78125H125.555V19H122.361V15.3184L122.859 4.78125Z"
                fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_122_12">
                <rect width="126" height="24" fill="white" />
              </clipPath>
              <clipPath id="clip1_122_12">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </a>
      </div>
      <!-- Ссылки -->
      <nav class="menu">
        <a class="menu__link" href="<?php echo home_url( 'tilda' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_4)">
              <path d="M5.74121 19V4.26143H0V0H16.743V4.26143H11.0285V19H5.74121Z" fill="white" />
              <path d="M18.7127 19V0H24V19H18.7127Z" fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_4">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>Тильда</span>
        </a>
        <a class="menu__link" href="<?php echo home_url( 'javascript' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_7)">
              <path
                d="M4.84933 19C3.82492 19 2.89363 18.7738 2.05548 18.3214C1.23063 17.8516 0.545466 17.1818 0 16.3118L2.15526 12.9712C2.52777 13.5975 2.91359 14.076 3.31271 14.4066C3.71183 14.7198 4.13091 14.8764 4.56994 14.8764C5.7407 14.8764 6.32608 13.989 6.32608 12.2143V4.35852H1.49671V0.365385H10.2375V11.9011C10.2375 14.2848 9.77848 16.0682 8.8605 17.2514C7.94252 18.4171 6.60546 19 4.84933 19Z"
                fill="white" />
              <path
                d="M17.8136 19C16.6695 19 15.5652 18.8173 14.5009 18.4519C13.4499 18.0691 12.5918 17.582 11.9266 16.9904L13.2237 13.1799C13.849 13.7019 14.5674 14.1369 15.379 14.4849C16.2038 14.8155 17.022 14.9808 17.8336 14.9808C18.379 14.9808 18.8181 14.9199 19.1507 14.7981C19.4833 14.6589 19.7227 14.4849 19.8691 14.2761C20.0287 14.0499 20.1086 13.7889 20.1086 13.4931C20.1086 13.0756 19.9622 12.745 19.6695 12.5014C19.3768 12.2578 18.9977 12.0577 18.532 11.9011C18.0664 11.7445 17.5475 11.5879 16.9755 11.4313C16.4167 11.2747 15.8513 11.0746 15.2792 10.831C14.7204 10.5875 14.2082 10.2743 13.7426 9.89148C13.2769 9.4913 12.8978 8.97802 12.6051 8.35165C12.3124 7.70788 12.166 6.89881 12.166 5.92445C12.166 4.8283 12.3922 3.83654 12.8445 2.94918C13.3102 2.06181 14.002 1.34844 14.92 0.809066C15.838 0.269689 16.9821 0 18.3524 0C19.2704 0 20.1684 0.139194 21.0465 0.417583C21.9379 0.678572 22.7295 1.07006 23.4213 1.59203L22.204 5.42857C21.5388 4.95879 20.8802 4.61081 20.2283 4.38462C19.5764 4.14103 18.9445 4.01923 18.3325 4.01923C17.787 4.01923 17.348 4.09753 17.0154 4.25412C16.6828 4.39332 16.4433 4.58471 16.297 4.8283C16.1506 5.07189 16.0774 5.35028 16.0774 5.66346C16.0774 6.06365 16.2171 6.38553 16.4965 6.62912C16.7892 6.85531 17.1684 7.0467 17.634 7.2033C18.113 7.34249 18.6318 7.49039 19.1906 7.64698C19.7627 7.80357 20.3281 8.00366 20.8869 8.24725C21.4589 8.47344 21.9778 8.78663 22.4434 9.18681C22.9091 9.5696 23.2816 10.0829 23.561 10.7266C23.8537 11.353 24 12.1447 24 13.1016C24 14.163 23.7672 15.1461 23.3015 16.0508C22.8492 16.9382 22.164 17.6516 21.2461 18.1909C20.3414 18.7303 19.1972 19 17.8136 19Z"
                fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_7">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>JavaScript</span>
        </a>
        <a class="menu__link" href="<?php echo home_url( 'generatory' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_9)">
              <path
                d="M6.77425 19C5.80316 19 4.90226 18.7738 4.07157 18.3214C3.24088 17.8516 2.52133 17.1905 1.91294 16.3379C1.31624 15.4853 0.848244 14.4849 0.508946 13.3365C0.169649 12.1708 0 10.8919 0 9.5C0 8.10806 0.169649 6.83791 0.508946 5.68956C0.848244 4.52381 1.32209 3.51465 1.93049 2.66209C2.53888 1.80952 3.25843 1.15705 4.08912 0.704671C4.93151 0.23489 5.84996 0 6.84445 0C8.00274 0 9.03819 0.287088 9.95078 0.861264C10.8634 1.43544 11.618 2.26191 12.2147 3.34066L10.0034 6.31593C9.58223 5.63736 9.12593 5.13278 8.63454 4.8022C8.15484 4.45421 7.61665 4.28022 7.01995 4.28022C6.49345 4.28022 6.01376 4.40202 5.58086 4.6456C5.14796 4.88919 4.77942 5.24588 4.47522 5.71566C4.17102 6.16804 3.93117 6.71612 3.75567 7.35989C3.59187 7.98626 3.50997 8.69963 3.50997 9.5C3.50997 10.2656 3.59187 10.9702 3.75567 11.614C3.93117 12.2578 4.17102 12.8146 4.47522 13.2843C4.77942 13.7367 5.14211 14.0934 5.56331 14.3544C5.99621 14.598 6.47005 14.7198 6.98485 14.7198C7.49965 14.7198 8.00274 14.598 8.49414 14.3544C8.98554 14.0934 9.48278 13.6584 9.98588 13.0495L11.9339 16.6772C11.2319 17.4254 10.4188 17.9995 9.49448 18.3997C8.57019 18.7999 7.66344 19 6.77425 19ZM8.86269 15.9986V9.10852H11.9339V16.6772L8.86269 15.9986Z"
                fill="white" />
              <path
                d="M17.331 7.43819H23.0348V11.3008H17.331V7.43819ZM17.5767 14.6415H24V18.6346H14.137V0.365385H23.7719V4.35852H17.5767V14.6415Z"
                fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_9">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>Генератор</span></a>
        <a class="menu__link" href="<?php echo home_url( 'ssylki' ); ?>">
          <svg width="24" height="16" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_143_11)">
              <path d="M0 19V0H5.87863V14.7386H15.7951V19H0Z" fill="white" />
              <path d="M18.1214 19V0H24V19H18.1214Z" fill="white" />
            </g>
            <defs>
              <clipPath id="clip0_143_11">
                <rect width="24" height="19" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>Ссылки</span></a>
      </nav>
      <!-- Контакты -->
      <div class="menu__contact">
        <a class="menu__contact-link" href="<?php echo home_url( 'razrabotka' ); ?>">Разработка</a>
        <a class="menu__contact-link" href="<?php echo home_url( 'kontakty' ); ?>">Контакты</a>
      </div>
    </aside>