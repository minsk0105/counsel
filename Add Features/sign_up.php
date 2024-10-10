<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>구매상담 신청 폼</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/user.css">
    <link rel="icon" type="image/png" sizes="32x32" href="https://static.interiorteacher.com/general/favicon_white_32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .sign_container {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            padding: 130px 20px 0 20px;
        }

        .register_form {
            width: 400px;
            overflow: hidden;
        }

        .register_form h2 {
            text-align: center;
        }

        #sign_form label {
            margin-top: 15px;
            font-size: 14px;
            color: rgb(30, 30, 30);
        }

        #sign_form input {
            margin-top: 8px;
            border: 1px solid rgb(196, 196, 196);
            font-size: 16px;
            padding: 10px 15px;
            border-radius: 8px;
            height: 55px;
        }

        #sign_form input::placeholder {
            font-size: 14px;
        }

        .push_register {
            margin-top: 30px;
            width: 100%;
            height: 55px;
            padding: 10px 15px;
            border: none;
            background-color: #1e1e1e;
            color: #eee;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- 헤더 메뉴 -->
    <header id="header">
        <div class="header-left_menu">
            <div class="logo">
                <a href="home.php">
                    <svg width="8.5em" height="1em" viewBox="0 0 136 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.336 4V1.336C9.336 0.981671 9.19524 0.641854 8.94469 0.391305C8.69415 0.140757 8.35433 0 8 0L1.336 0C0.981671 0 0.641854 0.140757 0.391305 0.391305C0.140757 0.641854 0 0.981671 0 1.336L0 8C0 8.35433 0.140757 8.69415 0.391305 8.94469C0.641854 9.19524 0.981671 9.336 1.336 9.336H4C4.70654 9.336 5.38414 9.61667 5.88373 10.1163C6.38333 10.6159 6.664 11.2935 6.664 12V14.664C6.664 15.0183 6.80476 15.3581 7.05531 15.6087C7.30585 15.8592 7.64567 16 8 16H14.664C15.0183 16 15.3581 15.8592 15.6087 15.6087C15.8592 15.3581 16 15.0183 16 14.664V8C16 7.64567 15.8592 7.30585 15.6087 7.05531C15.3581 6.80476 15.0183 6.664 14.664 6.664H12C11.2935 6.664 10.6159 6.38333 10.1163 5.88373C9.61667 5.38414 9.336 4.70654 9.336 4Z" fill="currentColor"></path>
                        <path d="M24.7282 5.14453H22.7842V13.1925H24.7282V5.14453Z" fill="currentColor"></path>
                        <path d="M23.752 3.70583C23.5927 3.71175 23.4339 3.685 23.2853 3.62722C23.1367 3.56943 23.0015 3.48183 22.888 3.36983C22.779 3.26757 22.6927 3.14348 22.6348 3.00563C22.5769 2.86779 22.5487 2.7193 22.552 2.56983C22.5539 2.42041 22.5853 2.27283 22.6443 2.13555C22.7034 1.99828 22.7889 1.87399 22.896 1.76983C23.0084 1.6559 23.1423 1.56544 23.2899 1.5037C23.4376 1.44195 23.596 1.41016 23.756 1.41016C23.916 1.41016 24.0745 1.44195 24.2221 1.5037C24.3697 1.56544 24.5036 1.6559 24.616 1.76983C24.7232 1.87399 24.8087 1.99828 24.8677 2.13555C24.9268 2.27283 24.9581 2.42041 24.96 2.56983C24.9618 2.71982 24.9322 2.86853 24.8729 3.00633C24.8137 3.14413 24.7261 3.26797 24.616 3.36983C24.502 3.48107 24.3667 3.56817 24.2183 3.6259C24.0698 3.68364 23.9112 3.71082 23.752 3.70583Z" fill="currentColor"></path>
                        <path d="M32.3841 13.1937V8.7297C32.4114 8.18792 32.2376 7.65515 31.8961 7.2337C31.7341 7.04602 31.5322 6.8969 31.3052 6.79725C31.0782 6.69759 30.8318 6.64991 30.5841 6.6577C29.1361 6.6577 28.4001 7.6657 28.4001 9.6417V13.1937H26.4561V5.1377H28.4001V6.0657L28.6081 5.8577C28.9422 5.53444 29.3386 5.28261 29.7733 5.11756C30.2079 4.95252 30.6716 4.87771 31.1361 4.8977C31.567 4.8802 31.9968 4.95461 32.3968 5.11599C32.7968 5.27737 33.1579 5.52203 33.4561 5.8337C34.0489 6.48966 34.3644 7.34996 34.3361 8.2337V13.1617L32.3841 13.1937Z" fill="currentColor"></path>
                        <path d="M37 13.1927V6.68869H35.168V5.14469H37V2.30469H38.952V5.14469H40.784V6.68869H38.952V13.1927H37Z" fill="currentColor"></path>
                        <path d="M59.2799 5.14453H57.3359V13.1925H59.2799V5.14453Z" fill="currentColor"></path>
                        <path d="M58.3038 3.70366C58.1445 3.70958 57.9856 3.68283 57.837 3.62505C57.6884 3.56726 57.5532 3.47967 57.4398 3.36766C57.3297 3.2658 57.2421 3.14197 57.1829 3.00416C57.1236 2.86636 57.094 2.71765 57.0958 2.56766C57.1026 2.26491 57.2292 1.97723 57.4478 1.76766C57.5571 1.65074 57.6898 1.55824 57.8373 1.4962C57.9848 1.43416 58.1438 1.40398 58.3038 1.40766C58.4661 1.39201 58.63 1.41102 58.7844 1.46342C58.9389 1.51583 59.0805 1.60044 59.1998 1.71166C59.3069 1.81583 59.3925 1.94011 59.4515 2.07739C59.5105 2.21466 59.5419 2.36224 59.5438 2.51166C59.5456 2.66165 59.5159 2.81036 59.4567 2.94816C59.3974 3.08597 59.3099 3.2098 59.1998 3.31166C59.087 3.43705 58.9487 3.53689 58.7941 3.60449C58.6396 3.6721 58.4724 3.70591 58.3038 3.70366Z" fill="currentColor"></path>
                        <path d="M65.008 13.4104C63.8498 13.4364 62.7273 13.0086 61.88 12.2184C61.4643 11.8311 61.1358 11.3597 60.9164 10.8355C60.6971 10.3113 60.592 9.74642 60.608 9.17843C60.592 8.61044 60.6971 8.04554 60.9164 7.52135C61.1358 6.99717 61.4643 6.52573 61.88 6.13843C62.7273 5.34822 63.8498 4.92045 65.008 4.94643C66.1515 4.92364 67.2579 5.35184 68.088 6.13843C68.5024 6.52645 68.8294 6.99821 69.0473 7.52236C69.2652 8.0465 69.3691 8.61104 69.352 9.17843C69.3691 9.74582 69.2652 10.3104 69.0473 10.8345C68.8294 11.3587 68.5024 11.8304 68.088 12.2184C67.2579 13.005 66.1515 13.4332 65.008 13.4104ZM65.008 6.57843C64.67 6.57715 64.3351 6.64412 64.0235 6.77535C63.7119 6.90658 63.43 7.09935 63.1947 7.34213C62.9594 7.5849 62.7755 7.87268 62.6541 8.18821C62.5327 8.50375 62.4762 8.84055 62.488 9.17843C62.4762 9.51632 62.5327 9.85312 62.6541 10.1686C62.7755 10.4842 62.9594 10.772 63.1947 11.0147C63.43 11.2575 63.7119 11.4503 64.0235 11.5815C64.3351 11.7127 64.67 11.7797 65.008 11.7784C65.3269 11.7782 65.6426 11.7144 65.9365 11.5907C66.2305 11.4671 66.4968 11.2862 66.72 11.0584C66.9678 10.8135 67.1624 10.5202 67.2918 10.1967C67.4212 9.87328 67.4825 9.52664 67.472 9.17843C67.4834 8.83131 67.4224 8.48562 67.2929 8.16335C67.1634 7.84107 66.9684 7.54925 66.72 7.30643C66.4975 7.07725 66.2314 6.89481 65.9375 6.7698C65.6435 6.64479 65.3275 6.57973 65.008 6.57843Z" fill="currentColor"></path>
                        <path d="M70.6963 13.1909V5.13495H72.6483V6.92695L72.8723 6.60695C73.1733 6.11603 73.5956 5.71091 74.0987 5.43067C74.6017 5.15042 75.1685 5.00449 75.7443 5.00695C75.8959 4.99248 76.0486 4.99248 76.2003 5.00695L76.0963 6.90295H75.7283C73.6803 6.90295 72.6483 8.14295 72.6483 10.5829V13.1349L70.6963 13.1909Z" fill="currentColor"></path>
                        <path d="M96.4398 13.4404C95.6378 13.4804 94.8491 13.2242 94.2238 12.7204C93.9575 12.4909 93.7471 12.2038 93.6085 11.8808C93.4698 11.5578 93.4067 11.2074 93.4238 10.8564C93.4062 10.5087 93.4692 10.1617 93.608 9.84254C93.7468 9.52333 93.9575 9.24057 94.2238 9.01637C94.8991 8.51615 95.729 8.26974 96.5678 8.32037H99.0798V8.06437C99.0879 7.8612 99.0544 7.65851 98.9815 7.46869C98.9086 7.27888 98.7978 7.10591 98.6558 6.96037C98.5078 6.81997 98.3331 6.71078 98.1421 6.63931C97.9511 6.56784 97.7476 6.53555 97.5438 6.54437C97.1468 6.48703 96.7425 6.57646 96.4067 6.79591C96.0709 7.01535 95.8267 7.34973 95.7198 7.73637L93.8718 7.36837C94.0291 6.65496 94.4489 6.02675 95.0478 5.60837C95.751 5.12036 96.5922 4.8708 97.4478 4.89637C98.377 4.84587 99.2937 5.12965 100.032 5.69637C100.346 5.96879 100.593 6.30933 100.755 6.692C100.918 7.07467 100.99 7.48935 100.968 7.90437V13.2004H99.1198V12.3364L98.9118 12.5364C98.5808 12.8442 98.1916 13.0827 97.7671 13.2379C97.3425 13.3932 96.8913 13.462 96.4398 13.4404ZM96.5358 9.73637C96.209 9.72463 95.8877 9.82326 95.6238 10.0164C95.5092 10.1184 95.4188 10.2447 95.3592 10.386C95.2996 10.5274 95.2722 10.6802 95.2791 10.8335C95.286 10.9868 95.327 11.1365 95.3991 11.272C95.4712 11.4074 95.5725 11.5251 95.6958 11.6164C96.0225 11.8242 96.4049 11.9274 96.7918 11.9124C97.3755 11.9179 97.9422 11.7167 98.3918 11.3444C98.6063 11.1759 98.7796 10.9609 98.8988 10.7156C99.018 10.4703 99.0799 10.2011 99.0798 9.92837V9.70437L96.5358 9.73637Z" fill="currentColor"></path>
                        <path d="M106.4 13.4393C105.261 13.464 104.159 13.0352 103.336 12.2473C102.925 11.8506 102.602 11.3723 102.387 10.8433C102.172 10.3142 102.07 9.7461 102.088 9.17534C102.072 8.60357 102.174 8.03463 102.389 7.50449C102.604 6.97434 102.926 6.49452 103.336 6.09534C104.158 5.30529 105.26 4.87371 106.4 4.89534C107.308 4.87735 108.196 5.15847 108.928 5.69534C109.627 6.20141 110.143 6.9198 110.4 7.74334L108.536 8.27934C108.431 7.80056 108.158 7.37539 107.766 7.0816C107.374 6.7878 106.889 6.64501 106.4 6.67934C106.074 6.67105 105.75 6.72919 105.447 6.85022C105.145 6.97126 104.87 7.15265 104.64 7.38334C104.414 7.62678 104.238 7.91256 104.123 8.22422C104.007 8.53589 103.955 8.86729 103.968 9.19934C103.955 9.53017 104.007 9.8603 104.123 10.1706C104.238 10.481 104.414 10.7654 104.64 11.0073C104.871 11.2366 105.146 11.4165 105.448 11.5362C105.751 11.6558 106.075 11.7127 106.4 11.7033C106.895 11.7252 107.382 11.579 107.783 11.2885C108.184 10.9979 108.475 10.5802 108.608 10.1033L110.408 10.5593C110.183 11.3921 109.681 12.1232 108.984 12.6313C108.232 13.1711 107.326 13.4544 106.4 13.4393Z" fill="currentColor"></path>
                        <path d="M117.648 13.1926V8.72862C117.675 8.18685 117.501 7.65407 117.16 7.23262C116.998 7.0445 116.796 6.89507 116.569 6.79538C116.342 6.69568 116.096 6.64826 115.848 6.65662C114.4 6.65662 113.664 7.66462 113.664 9.64062V13.1926H111.72V0.640625H113.664V6.06462L113.872 5.85662C114.206 5.53337 114.602 5.28154 115.037 5.11649C115.472 4.95144 115.935 4.87663 116.4 4.89662C116.831 4.87912 117.26 4.95354 117.66 5.11492C118.06 5.2763 118.422 5.52095 118.72 5.83262C119.313 6.48859 119.628 7.34888 119.6 8.23262V13.1606L117.648 13.1926Z" fill="currentColor"></path>
                        <path d="M80.1518 13.1927V6.68869H78.3198V5.14469H80.1518V2.30469H82.1038V5.14469H83.9358V6.68869H82.1038V13.1927H80.1518Z" fill="currentColor"></path>
                        <path d="M88.4962 13.4398C87.9581 13.4462 87.4243 13.3439 86.9267 13.139C86.4291 12.9342 85.9779 12.6311 85.6002 12.2478C85.2035 11.8434 84.8933 11.3625 84.6884 10.8344C84.4834 10.3063 84.3881 9.74197 84.4082 9.17584C84.387 8.60838 84.4818 8.04257 84.6868 7.51299C84.8917 6.98342 85.2025 6.50121 85.6002 6.09584C85.9847 5.70322 86.4459 5.39404 86.9552 5.18757C87.4645 4.98111 88.0108 4.8818 88.5602 4.89584C89.0854 4.88789 89.6068 4.9858 90.0934 5.18372C90.5799 5.38164 91.0216 5.67552 91.3922 6.04784C92.1874 6.83179 92.6391 7.89921 92.6482 9.01584V9.63184H86.3042V9.78384C86.4039 10.3483 86.6848 10.865 87.1042 11.2558C87.4875 11.6153 87.9947 11.8131 88.5202 11.8078C88.9332 11.8307 89.3448 11.7435 89.7131 11.5552C90.0813 11.3668 90.393 11.0841 90.6162 10.7358L92.3442 11.1038C92.04 11.8091 91.5297 12.4059 90.8802 12.8158C90.1606 13.2454 89.3339 13.4618 88.4962 13.4398ZM88.4962 6.55984C88.018 6.56159 87.5518 6.70954 87.1602 6.98384C86.7507 7.26762 86.4646 7.6967 86.3602 8.18384V8.33584H90.6882L90.6402 8.18384C90.5293 7.69509 90.2451 7.26308 89.8402 6.96784C89.4589 6.69266 88.9983 6.54941 88.5282 6.55984H88.4962Z" fill="currentColor"></path>
                        <path d="M45.3681 13.4398C44.818 13.456 44.2705 13.3585 43.7598 13.1534C43.2491 12.9483 42.7862 12.64 42.4001 12.2478C42.002 11.8441 41.6903 11.3635 41.484 10.8353C41.2777 10.3072 41.1811 9.74253 41.2001 9.17584C41.1857 8.60501 41.2883 8.03727 41.5015 7.50757C41.7148 6.97787 42.0342 6.49744 42.4401 6.09584C42.8246 5.70322 43.2859 5.39404 43.7951 5.18757C44.3044 4.98111 44.8508 4.8818 45.4001 4.89584C45.9252 4.8888 46.4464 4.98713 46.9328 5.185C47.4192 5.38286 47.861 5.67626 48.2321 6.04784C48.6255 6.43589 48.9382 6.89788 49.1524 7.40724C49.3666 7.9166 49.478 8.46328 49.4801 9.01584V9.63184H43.1441V9.78384C43.2399 10.3497 43.5214 10.8676 43.9441 11.2558C44.3303 11.6158 44.8402 11.8135 45.3681 11.8078C45.785 11.8351 46.2017 11.75 46.5745 11.5614C46.9474 11.3729 47.2629 11.0878 47.4881 10.7358L49.2161 11.1038C48.9064 11.8081 48.394 12.4041 47.7441 12.8158C47.0279 13.2464 46.2034 13.463 45.3681 13.4398ZM45.3681 6.55984C44.8878 6.56349 44.4196 6.71119 44.0241 6.98384C43.614 7.26705 43.3278 7.69638 43.2241 8.18384L43.2001 8.33584H47.5201V8.18384C47.4113 7.69422 47.1267 7.26153 46.7201 6.96784C46.3361 6.69205 45.8727 6.54883 45.4001 6.55984H45.3681Z" fill="currentColor"></path>
                        <path d="M50.8242 13.1909V5.13495H52.8002V6.92695L53.0242 6.60695C53.3222 6.11333 53.744 5.70606 54.2477 5.42544C54.7514 5.14482 55.3196 5.00056 55.8962 5.00695C56.0479 4.99248 56.2006 4.99248 56.3522 5.00695L56.2482 6.90295H55.8802C53.8322 6.90295 52.8002 8.14295 52.8002 10.5829V13.1349L50.8242 13.1909Z" fill="currentColor"></path>
                        <path d="M124.936 13.4398C124.391 13.4516 123.85 13.3519 123.345 13.147C122.84 12.942 122.382 12.636 122 12.2478C121.602 11.8441 121.29 11.3635 121.084 10.8353C120.878 10.3072 120.781 9.74253 120.8 9.17584C120.78 8.60781 120.876 8.04166 121.082 7.51205C121.289 6.98244 121.601 6.50053 122 6.09584C122.384 5.70322 122.846 5.39404 123.355 5.18757C123.864 4.98111 124.411 4.8818 124.96 4.89584C125.485 4.88789 126.007 4.9858 126.493 5.18372C126.98 5.38164 127.421 5.67552 127.792 6.04784C128.185 6.43589 128.498 6.89788 128.712 7.40724C128.926 7.9166 129.038 8.46328 129.04 9.01584V9.63184H122.704V9.78384C122.8 10.3495 123.082 10.8673 123.504 11.2558C123.887 11.6153 124.394 11.8131 124.92 11.8078C125.34 11.838 125.759 11.7544 126.135 11.5657C126.511 11.377 126.829 11.0903 127.056 10.7358L128.784 11.1038C128.477 11.8097 127.964 12.4063 127.312 12.8158C126.596 13.2464 125.771 13.463 124.936 13.4398ZM124.936 6.55984C124.458 6.56004 123.991 6.70814 123.6 6.98384C123.188 7.26528 122.901 7.6954 122.8 8.18384V8.33584H127.12L127.08 8.18384C126.971 7.69422 126.687 7.26153 126.28 6.96784C125.898 6.69371 125.438 6.55057 124.968 6.55984H124.936Z" fill="currentColor"></path>
                        <path d="M130.4 13.1913V5.13529H132.344V6.92729L132.568 6.60729C132.867 6.11421 133.288 5.70738 133.792 5.42683C134.296 5.14629 134.863 5.0017 135.44 5.00729C135.592 4.99236 135.744 4.99236 135.896 5.00729L135.792 6.90329H135.424C133.384 6.90329 132.344 8.14329 132.344 10.5833V13.1353L130.4 13.1913Z" fill="currentColor"></path>
                    </svg>
                </a>
            </div>

            <ul class="nav_menu">
                <li><a href="#">서비스 소개</a></li>
                <li><a href="#">가구 쇼핑</a></li>
                <li>
                    <a href="#">구매 컨설팅</a>
                    <ul class="nav_submenu">
                        <li><a href="#">나만의 가구 만들기</a></li>
                        <li><a href="consult.php">구매상담 신청하기</a></li>
                        <li><a href="#">컨설팅 사례</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="header-right_menu">
            <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2803 15.5035L22.0001 21.2234L21.2234 22.0001L15.5035 16.2803L16.2803 15.5035Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3759 3.09847C6.35667 3.09847 3.09847 6.35667 3.09847 10.3759C3.09847 14.395 6.35667 17.6532 10.3759 17.6532C14.395 17.6532 17.6532 14.395 17.6532 10.3759C17.6532 6.35667 14.395 3.09847 10.3759 3.09847ZM2 10.3759C2 5.75 5.75 2 10.3759 2C15.0017 2 18.7517 5.75 18.7517 10.3759C18.7517 15.0017 15.0017 18.7517 10.3759 18.7517C5.75 18.7517 2 15.0017 2 10.3759Z" fill="currentColor"></path>
            </svg>
            <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3299 3.5H2V2.5H4.3299C4.91923 2.5 5.45394 2.84508 5.69671 3.38208L9.59698 12.0092C9.6779 12.1882 9.85614 12.3033 10.0526 12.3033H17.674C17.8657 12.3033 18.0406 12.1937 18.1241 12.0211L21.339 5.38003H22.45L19.0242 12.4568C18.7736 12.9745 18.2491 13.3033 17.674 13.3033H10.0526C9.46326 13.3033 8.92854 12.9582 8.68577 12.4212L4.78551 3.79403C4.70458 3.61503 4.52635 3.5 4.3299 3.5ZM7.28568 15.3098L8.31988 13.5L9.18591 14L8.15392 15.806C7.96345 16.1393 8.20413 16.5541 8.58804 16.5541H21.4595V17.5541H8.58804C7.43631 17.5541 6.71426 16.3098 7.28568 15.3098Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.48574 19.7159C8.16482 19.7159 7.90466 19.9761 7.90466 20.297C7.90466 20.6179 8.16482 20.8781 8.48574 20.8781C8.80667 20.8781 9.06683 20.6179 9.06683 20.297C9.06683 19.9761 8.80667 19.7159 8.48574 19.7159ZM6.90466 20.297C6.90466 19.4238 7.61254 18.7159 8.48574 18.7159C9.35895 18.7159 10.0668 19.4238 10.0668 20.297C10.0668 21.1702 9.35895 21.8781 8.48574 21.8781C7.61254 21.8781 6.90466 21.1702 6.90466 20.297Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.297 19.7159C18.9761 19.7159 18.7159 19.9761 18.7159 20.297C18.7159 20.6179 18.9761 20.8781 19.297 20.8781C19.6179 20.8781 19.8781 20.6179 19.8781 20.297C19.8781 19.9761 19.6179 19.7159 19.297 19.7159ZM17.7159 20.297C17.7159 19.4238 18.4238 18.7159 19.297 18.7159C20.1702 18.7159 20.8781 19.4238 20.8781 20.297C20.8781 21.1702 20.1702 21.8781 19.297 21.8781C18.4238 21.8781 17.7159 21.1702 17.7159 20.297Z" fill="currentColor"></path>
            </svg>
            <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <g><path fill="none" stroke="currentColor" d="M11.6,5.1L12,5.5l0.4-0.4c0.4-0.4,0.9-0.8,1.4-1.1c0.8-0.4,1.7-0.6,2.6-0.6c1.5,0.1,3,0.8,4,1.9   c1,1.1,1.6,2.6,1.5,4.1l0,0v0c0,1.8-0.8,3.1-1.8,4.3c-2.1,2.4-5,5-7.8,6.7L12,20.6l-0.3-0.2C9,18.7,6.1,16.2,4,13.7   c-1-1.1-1.8-2.5-1.8-4.3l0,0l0,0c-0.1-1.5,0.5-3,1.5-4.1c1-1.1,2.5-1.8,4-1.9c0.9,0,1.8,0.2,2.6,0.6C10.8,4.4,11.2,4.7,11.6,5.1z"></path></g>
            </svg>
            <a href="user.php">
                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.5C10.8274 2.5 9.83605 2.91168 8.99887 3.74887C8.16168 4.58605 7.75 5.57741 7.75 6.75C7.75 7.92259 8.16168 8.91395 8.99887 9.75113C9.83605 10.5883 10.8274 11 12 11C13.1726 11 14.1639 10.5883 15.0011 9.75113C15.8383 8.91395 16.25 7.92259 16.25 6.75C16.25 5.57741 15.8383 4.58605 15.0011 3.74887C14.1639 2.91168 13.1726 2.5 12 2.5ZM8.29176 3.04176C9.31499 2.01853 10.5601 1.5 12 1.5C13.4399 1.5 14.685 2.01853 15.7082 3.04176C16.7315 4.06499 17.25 5.31009 17.25 6.75C17.25 8.18991 16.7315 9.43501 15.7082 10.4582C14.685 11.4815 13.4399 12 12 12C10.5601 12 9.31499 11.4815 8.29176 10.4582C7.26853 9.43501 6.75 8.18991 6.75 6.75C6.75 5.31009 7.26853 4.06499 8.29176 3.04176ZM12 14.2431C10.7333 14.2431 9.48636 14.3917 8.25832 14.6892C7.03125 14.9863 5.82085 15.4326 4.62674 16.0293C4.13706 16.2833 3.74496 16.6492 3.44562 17.1367C3.14843 17.6207 3 18.1484 3 18.7306V21.5556H21V18.7306C21 18.1484 20.8516 17.6207 20.5544 17.1367C20.255 16.6492 19.8629 16.2833 19.3732 16.0293C18.1791 15.4325 16.9687 14.9863 15.7417 14.6892C14.5136 14.3917 13.2667 14.2431 12 14.2431ZM8.02293 13.7173C9.32822 13.4011 10.6542 13.2431 12 13.2431C13.3458 13.2431 14.6718 13.4011 15.9771 13.7173C17.2823 14.0334 18.5646 14.5069 19.8236 15.1365L19.8297 15.1395C20.4866 15.4793 21.0138 15.9738 21.4066 16.6135C21.8021 17.2576 22 17.9669 22 18.7306V22.5556H2V18.7306C2 17.9669 2.19792 17.2576 2.59345 16.6135C2.98621 15.9738 3.51344 15.4793 4.17029 15.1396L4.17637 15.1364C5.43542 14.5069 6.71774 14.0334 8.02293 13.7173Z" fill="currentColor"></path>
                </svg>
            </a>
            <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21 6.5H3V5.5H21V6.5ZM21 12.5H3V11.5H21V12.5ZM21 18.5H3V17.5H21V18.5Z" fill="currentColor"></path>
            </svg>
        </div>
    </header>

    <!-- 회원가입 메인 화면 -->
    <section class="main sign_container">
        <div class="register_form">
            <h2>회원가입</h2>

            <form action="" method="post" name="register_form" id="sign_form">
            
                <label><span style="color: #0072BB;">*</span> 이름</label>
                <input type="text" name="name" placeholder="실명을 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 핸드폰 번호</label>
                <input type="text" name="phone" placeholder="-를 빼고 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 이메일</label>
                <input type="text" name="email" placeholder="이메일을 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 아이디</label>
                <input type="text" name="user_id" placeholder="4자리 이상의 영문 + 숫자">

                <label><span style="color: #0072BB;">*</span> 비밀번호</label>
                <input type="password" name="pass" placeholder="6-20자 사이의 숫자 + 영문">

                <label><span style="color: #0072BB;">*</span> 비밀번호 확인</label>
                <input type="password" name="pass_check" placeholder="비밀번호를 다시 입력해 주세요.">

                <label><span style="color: #0072BB;">*</span> 배송지</label>
                <input type="text" name="user_address" placeholder="주소를 입력해 주세요. (충선로-105 2012동 1203호)">

                <button type="submit" class="push_register">회원가입</button>

            </form>
        </div>
    </section>

    <!-- 푸터 메뉴 -->
    <footer>
        <div class="footer-top">
            <div class="inquiry_button">
                <button type="button">카카오톡 상담</button>
                <button type="button">입점 및 제휴 문의</button>
                <button type="button">B2B 대량 구매 문의</button>
            </div>

            <div class="category">
                <div class="customer">
                    <p>고객센터</p>
                    <span class="call">02-1234-5678</span>
                    <span>평일 오전 9시 ~ 오후 6시</span>
                    <span>주말 및 공휴일 휴무</span>
                </div>

                <div class="guide">
                    <p id="guide_btn">이용안내</p>
                    <div class="guide-menu">
                        <a href="#">자주 묻는 질문</a>
                        <a href="#">취소 & 환불약관</a>
                        <a href="#">이용약관</a>
                        <a href="#">개인정보처리방침</a>
                    </div>
                    <i class="fa-solid fa-plus" id="plus"></i>
                    <i class="fa-solid fa-minus" id="minus"></i>
                </div>
            </div>

            <div class="social_icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-square-facebook"></i>
            </div>
        </div>

        <div class="footer-bottom">
            <p>
                <span class="footer-company_info">주식회사 인테리어티쳐</span>
                <span class="footer-company_info">대표: 텍스트</span>
                <span class="footer-company_info">주소: 서울특별시 서초구 방배중앙로 24 4-5층</span>
                <span class="footer-company_info">사업자등록번호: 000-00-00000</span>
                <span class="footer-company_info">통신판매업신고번호: 2021-서울서초-3345</span>
                <span class="footer-company_info">이메일: info@example.com</span><br>
                <span>&copy;2024 LoremCompany. All Rights Reserved.</span>
            </p>
        </div>
    </footer>

    <!-- top 버튼 -->
    <a href="#" class="top">
        <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-black-950">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7936 11.5L11.6535 3.35343L12.3609 2.64661L21.7068 12L12.3609 21.3534L11.6536 20.6466L19.7936 12.5L3 12.5V11.5L19.7936 11.5Z" fill="current"></path>
        </svg>
    </a>

    <script src="Script/counsel.js"></script>

</body>
</html>