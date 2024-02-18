@extends("layouts.template")

@section("corps")
<!--HEADER(HAUT DE PAGE)-->
<header class="hautde_page">
            <div class="title_soustitle">
                <h1>L'excellence académique au service de l'innovation.</h1>
                <p class="sous_titre">Engagés dans l'excellence académique, notre université d'ingénierie se distingue par sa mission de former des esprits innovants et compétents, prêts à relever les défis technologiques du monde en constante évolution.</p>
            </div>
            <span class="img_header">
                <img src="img_titre.png" alt="">
            </span>
        </header>
<!--ZONE D'ENGAGEMENT-->
        <section class="Engagement">
            <div class="eng_droite">
                <h1 class="h1_white">Notre engagement envers l'excellence académique.</h1>
                <p class="sousTitre_white">Nous sommes fiers de partager ces statistiques qui illustrent l'engagement continu de notre université envers l'excellence et l'impact positif que nous avons sur la formation des ingénieurs de demain.</p>
                <button class="Inscription">Préinscription</button>
            </div>
            <div class="eng_gauche">
                <div class="case_icon">
                    <p class="Diplome">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                        <path d="M51.1918 0.590424H2.23871C1.39736 0.590424 0.715271 1.27252 0.715271 2.11386V41.2765C0.715271 42.1178 1.39736 42.7999 2.23871 42.7999H30.087V51.067C30.0871 51.3427 30.1619 51.6133 30.3036 51.8499C30.4453 52.0864 30.6485 52.2801 30.8916 52.4103C31.1347 52.5403 31.4086 52.602 31.684 52.5887C31.9594 52.5754 32.226 52.4876 32.4555 52.3347L36.5059 49.6346L40.5561 52.3347C40.7855 52.4877 41.0521 52.5756 41.3276 52.5889C41.603 52.6022 41.8769 52.5405 42.12 52.4104C42.3631 52.2802 42.5663 52.0865 42.708 51.85C42.8497 51.6134 42.9245 51.3428 42.9245 51.0671V42.8H51.1918C52.0332 42.8 52.7153 42.1179 52.7153 41.2766V2.11386C52.7152 1.27252 52.0332 0.590424 51.1918 0.590424ZM21.8199 33.0092H12.0293C11.188 33.0092 10.5059 32.3271 10.5059 31.4857C10.5059 30.6444 11.188 29.9623 12.0293 29.9623H21.8198C22.6611 29.9623 23.3432 30.6444 23.3432 31.4857C23.3432 32.3271 22.6612 33.0092 21.8199 33.0092ZM12.0293 23.2186C11.188 23.2186 10.5059 22.5365 10.5059 21.6951C10.5059 20.8538 11.188 20.1717 12.0293 20.1717H31.6105C32.4518 20.1717 33.1339 20.8538 33.1339 21.6951C33.1339 22.5365 32.4518 23.2186 31.6105 23.2186H12.0293ZM36.506 41.1681C32.9665 41.1681 30.0871 38.2886 30.0871 34.7495C30.0871 31.21 32.9666 28.3306 36.506 28.3306C40.0454 28.3306 42.9246 31.2101 42.9246 34.7495C42.9248 38.2887 40.0454 41.1681 36.506 41.1681ZM41.4012 13.4279H12.0293C11.188 13.4279 10.5059 12.7458 10.5059 11.9045C10.5059 11.0631 11.188 10.3811 12.0293 10.3811H41.4012C42.2426 10.3811 42.9246 11.0631 42.9246 11.9045C42.9246 12.7458 42.2426 13.4279 41.4012 13.4279Z" fill="white"/>
                        </svg>
                        +2250 Diplôme
                    </p>
                    <p class="partenaire">
                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="87" viewBox="0 0 86 87" fill="none">
                        <path d="M44.0581 58.1935L41.7503 61.4733V61.4744L41.4827 61.8562C41.142 62.3422 40.6627 62.6462 40.0556 62.5852C39.7462 62.5541 39.4226 62.424 39.1684 62.2449C38.9141 62.0658 38.6833 61.8063 38.5494 61.5258C38.3006 61.0037 38.4007 60.4738 38.704 60.0069V60.0028L42.2449 54.97L42.2467 54.9682C42.5871 54.4943 43.062 54.1984 43.6609 54.2582C43.9701 54.2891 44.2925 54.419 44.5468 54.5981C44.8011 54.7773 45.0323 55.0372 45.1658 55.318C45.4275 55.8679 45.3033 56.4235 44.9624 56.9081L44.0581 58.1935ZM41.131 53.6872C41.4713 53.2026 41.5953 52.6471 41.334 52.0974C41.2005 51.8168 40.9694 51.5564 40.7152 51.3777C40.4607 51.1989 40.1381 51.0691 39.8288 51.0382C39.2219 50.9776 38.7425 51.2816 38.4012 51.767L37.488 53.0657H37.3614V53.2437L34.9167 56.7196L34.1784 57.77C33.8364 58.2564 33.7193 58.8025 33.9747 59.3538C34.2405 59.9273 34.857 60.3613 35.4866 60.4173C36.0914 60.4711 36.5655 60.1768 36.9074 59.6908L37.4024 58.9875L40.885 54.0371L41.131 53.6872ZM32.2081 30.5375L27.4116 27.7679C27.2118 27.6523 26.985 27.5915 26.7541 27.5914C26.6357 27.5914 26.5191 27.6071 26.4048 27.6376C26.062 27.729 25.7735 27.9471 25.5958 28.2545L17.1776 42.8346C16.8118 43.4683 17.0316 44.2845 17.6649 44.6503L22.4614 47.4199C22.6126 47.5071 22.7796 47.5635 22.9527 47.5858C23.1259 47.6082 23.3017 47.596 23.4701 47.5501C23.8112 47.4581 24.1003 47.2394 24.2772 46.9333L32.6954 32.3532C33.0618 31.7185 32.8425 30.9038 32.2081 30.5375ZM36.1093 52.2633V52.157C36.4122 51.6899 36.5113 51.1604 36.2621 50.6388C36.1283 50.3587 35.897 50.0988 35.6428 49.9202C35.3884 49.7415 35.0657 49.6121 34.7566 49.5813C34.15 49.5208 33.6706 49.8244 33.3295 50.3095L30.8388 53.8511C30.4981 54.3356 30.3736 54.891 30.6354 55.4409C30.7694 55.7221 30.9997 55.9805 31.2541 56.1601C31.5073 56.3392 31.8314 56.469 32.1395 56.4999C32.7377 56.5599 33.2125 56.2657 33.5531 55.7923L33.5549 55.7905L36.0126 52.2968L36.1093 52.2633ZM76.188 42.8346L67.7698 28.2545C67.5924 27.9474 67.3034 27.7294 66.961 27.6376C66.847 27.607 66.7295 27.5914 66.6115 27.5912C66.3797 27.5912 66.1547 27.6519 65.9539 27.7678L61.1568 30.5374C61.0057 30.6246 60.8734 30.7408 60.7675 30.8793C60.6615 31.0178 60.584 31.1759 60.5393 31.3445C60.4936 31.5129 60.4816 31.6887 60.504 31.8618C60.5264 32.0349 60.5829 32.2018 60.67 32.353L69.0876 46.9332C69.2649 47.2403 69.5536 47.4584 69.8956 47.5501C70.0639 47.5958 70.2395 47.6078 70.4124 47.5855C70.5853 47.5631 70.7521 47.5069 70.9032 47.4199L75.7003 44.6508C76.3345 44.285 76.5539 43.4686 76.188 42.8346ZM45.3707 59.2485L45.3106 59.2779L43.1481 62.3547L43.1407 62.4206C43.0584 63.1432 43.5599 63.8027 44.1926 64.0961C44.9727 64.4578 45.7049 64.2335 46.2001 63.5294L47.4494 61.7534C47.9449 61.0489 47.9071 60.2866 47.3036 59.6749C46.812 59.1769 46.0266 58.9271 45.3707 59.2485ZM59.5422 34.089C57.5185 34.6599 55.4431 34.9034 53.3427 34.8385C51.7244 34.7884 50.1475 34.5555 48.5687 34.2079C47.4022 33.9512 46.1573 33.7639 44.9852 34.0914C44.089 34.3418 43.3238 34.8615 42.612 35.4455C42.1478 35.8263 41.7041 36.236 41.269 36.6494C40.7191 37.172 40.1792 37.706 39.6387 38.2382C39.2184 38.6527 38.797 39.066 38.3745 39.4782L38.3011 39.5498L38.0287 45.2698C38.0163 45.5293 38.0332 45.9771 38.2825 46.1345C38.497 46.2698 38.8503 46.2382 39.0874 46.1945C39.539 46.1114 39.9966 45.9151 40.3986 45.6979C41.2812 45.2212 42.0127 43.5444 42.4282 42.6565C42.6271 42.2317 42.8257 41.8049 43.0456 41.3904C43.1304 41.231 43.2652 41.1038 43.4292 41.0283C43.6266 40.9369 43.8236 40.8444 44.02 40.7508C45.008 40.2821 46.0476 39.7861 47.1373 39.615C48.1744 39.4522 49.1243 39.6135 50.0366 40.1416L63.0631 47.6828L66.5805 45.8869L59.7367 34.0342L59.5422 34.089ZM62.6228 49.3322L49.2112 41.5685C48.9154 41.3972 48.6006 41.2816 48.2616 41.2326C47.708 41.1526 47.1516 41.2616 46.6256 41.4327C45.9793 41.6429 45.3408 41.9483 44.7273 42.2398C44.6377 42.2823 44.5482 42.3249 44.4585 42.367L44.3762 42.4057L44.3358 42.487C44.1941 42.7748 44.0558 43.0642 43.9209 43.3552C43.3028 44.6758 42.5102 46.4322 41.182 47.1493C40.0996 47.7336 38.5485 48.2498 37.4052 47.5304C37.1213 47.3518 36.8875 47.1029 36.7199 46.8129C36.4367 46.3231 36.3563 45.7498 36.3829 45.1917L36.67 39.1466C36.6796 38.9372 36.7686 38.7393 36.919 38.5932C37.4424 38.0863 37.9622 37.5757 38.4811 37.0641C38.6972 36.851 38.914 36.6387 39.1304 36.4257L39.426 36.1346L33.6137 34.0585L26.6336 46.1506L30.6814 51.2078L31.9808 49.3612C32.7693 48.2406 33.9848 47.6982 35.3362 48.0095C35.548 48.0582 35.755 48.1271 35.9541 48.2138C36.178 48.3115 36.3915 48.4314 36.5913 48.5719C37.0319 48.8816 37.4052 49.2914 37.6648 49.7639L37.7989 50.008L38.0333 49.8576C39.1646 49.1324 40.5931 49.2764 41.6639 50.0299C42.438 50.5745 43.0003 51.4237 43.1092 52.3735L43.1367 52.6136L43.3782 52.604C44.1305 52.5739 44.882 52.8189 45.4953 53.2506C46.7747 54.1515 47.3395 55.7329 46.6806 57.2098L46.5558 57.4896L46.8521 57.5676C47.4709 57.7304 48.0292 58.0634 48.4777 58.5184C49.5126 59.5682 49.7373 61.0035 49.0386 62.3051L48.9197 62.5266L52.0127 64.3274C52.525 64.6256 53.0874 64.7021 53.6134 64.3942C53.8815 64.2373 54.1209 63.9848 54.2772 63.7162C54.4336 63.4475 54.5352 63.1149 54.5399 62.8041C54.5487 62.195 54.2062 61.7431 53.6944 61.4442L53.6335 61.4086H53.632L50.0805 59.3415C49.6875 59.1127 49.5561 58.6069 49.7844 58.2144C49.8388 58.1209 49.911 58.039 49.997 57.9735C50.083 57.9079 50.181 57.8599 50.2856 57.8322C50.3901 57.8046 50.4991 57.7978 50.6062 57.8122C50.7134 57.8266 50.8167 57.862 50.9101 57.9164L54.5163 60.0158C54.5214 60.0191 54.5267 60.0222 54.5321 60.0251L55.6539 60.6779C56.1665 60.9763 56.7293 61.0526 57.2556 60.7446C57.5233 60.588 57.7636 60.3349 57.9194 60.0663C58.0755 59.797 58.177 59.4655 58.1814 59.1545C58.1898 58.5569 57.8598 58.111 57.364 57.8121L57.3619 57.8101L52.9065 55.2155C52.514 54.9871 52.382 54.4799 52.6103 54.0879C52.8392 53.6952 53.3435 53.5632 53.7361 53.7918L58.2249 56.4043H58.226L59.5834 57.1961C60.0959 57.495 60.6531 57.5643 61.1793 57.2633C61.7282 56.9493 62.1066 56.2975 62.1091 55.6652C62.1114 55.0577 61.7773 54.6109 61.2637 54.3115L60.1169 53.6431L55.7333 51.0907C55.3406 50.862 55.2064 50.3567 55.4352 49.9636C55.6641 49.5709 56.1699 49.4366 56.563 49.6655L60.9465 52.2184C61.4591 52.517 62.0212 52.5924 62.5469 52.2832C62.8152 52.1256 63.0523 51.8738 63.2096 51.6052C63.3667 51.3369 63.4687 51.0019 63.4729 50.6913C63.4811 50.0812 63.1366 49.6297 62.6228 49.3322Z" fill="white"/>
                        </svg>06 Partenaire
                    </p>
                    <p class="etudiant">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <g clip-path="url(#clip0_103_1292)">
                            <path d="M35.3934 16.3049C35.4595 18.0856 38.015 18.0843 38.0804 16.3049V10.7657L35.3934 11.7478V16.3049ZM8.6453 8.22711L22.4558 13.2783C22.7537 13.3873 23.0805 13.3874 23.3785 13.2785L37.1982 8.22729C38.3671 7.8014 38.3666 6.12915 37.1983 5.70352L23.3832 0.652494C23.0853 0.543488 22.7584 0.543488 22.4605 0.652494L8.64548 5.70352C7.47679 6.12933 7.47724 7.80149 8.6453 8.22711ZM13.6641 29.8799C13.6641 27.3671 11.6197 25.3227 9.10685 25.3227C3.06931 25.5518 3.07101 34.2089 9.10694 34.4372C11.6197 34.4372 13.6641 32.3928 13.6641 29.8799ZM41.2942 29.8799C41.2942 27.3671 39.2498 25.3227 36.737 25.3227C30.6995 25.5518 30.7012 34.2089 36.7371 34.4372C39.2498 34.4372 41.2942 32.3928 41.2942 29.8799ZM18.3646 29.8799C18.3646 32.3928 20.409 34.4372 22.9219 34.4372C28.9594 34.208 28.9578 25.5509 22.9218 25.3227C20.409 25.3227 18.3646 27.3671 18.3646 29.8799ZM36.7369 34.4372C34.9376 34.4372 33.2584 34.9614 31.844 35.865C33.6319 37.9315 34.7142 40.6181 34.7142 43.5515V46.4297H44.5079C45.2498 46.4297 45.8514 45.8282 45.8514 45.0862V43.5515C45.8514 38.5259 41.7627 34.4372 36.7369 34.4372Z" fill="white"/>
                            <path d="M22.8455 34.4371C17.7827 34.4371 13.6638 38.5258 13.6638 43.5516V46.4297H32.0272V43.5515C32.0271 38.5258 27.9082 34.4371 22.8455 34.4371ZM9.10685 34.4371C4.08108 34.4371 -0.00762939 38.5258 -0.00762939 43.5515V45.0862C-0.00762939 45.8282 0.593912 46.4297 1.3359 46.4297H10.9768V43.5515C10.9768 40.5888 12.0808 37.8777 13.9008 35.803C12.5072 34.9377 10.8645 34.4371 9.10685 34.4371ZM31.4607 17.9909V13.1852L24.301 15.8022C23.4139 16.1286 22.4181 16.1286 21.5318 15.8014L14.3831 13.1868V17.9923C14.3831 18.2676 14.4677 18.5364 14.6254 18.762C14.7832 18.9877 15.0065 19.1595 15.2651 19.254L22.4559 21.8839C22.7538 21.9928 23.0806 21.9929 23.3785 21.884L30.5784 19.2528C30.837 19.1582 31.0604 18.9865 31.2182 18.7607C31.3761 18.535 31.4607 18.2663 31.4607 17.9909Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_103_1292">
                                <rect width="45.859" height="45.859" fill="white" transform="translate(-0.00762939 0.57074)"/>
                            </clipPath>
                            </defs>
                        </svg>+4000
                        Etudiant
                    </p>
                    <p class="Insertion">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87" height="87" viewBox="0 0 87 87" fill="none">
                            <path d="M50.2147 30.9781C49.64 30.9781 49.0889 30.7462 48.6826 30.3333C48.2763 29.9204 48.048 29.3604 48.048 28.7765V25.4741H39.3813V28.7765C39.3813 29.3604 39.1531 29.9204 38.7467 30.3333C38.3404 30.7462 37.7893 30.9781 37.2147 30.9781C36.64 30.9781 36.0889 30.7462 35.6826 30.3333C35.2763 29.9204 35.048 29.3604 35.048 28.7765V25.4741C35.048 23.0457 36.9915 21.0709 39.3813 21.0709H48.048C50.4378 21.0709 52.3813 23.0457 52.3813 25.4741V28.7765C52.3813 29.3604 52.1531 29.9204 51.7467 30.3333C51.3404 30.7462 50.7893 30.9781 50.2147 30.9781ZM45.253 50.5284C44.2114 50.8922 43.0778 50.8766 42.0463 50.4844L17.7147 42.2504V59.0487C17.7147 62.3951 20.3797 65.1031 23.673 65.1031H63.7563C67.0497 65.1031 69.7147 62.3951 69.7147 59.0487V42.2504L45.253 50.5284Z" fill="white"/>
                            <path d="M69.7147 33.7301V38.7718L44.2347 47.4021C44.0613 47.4682 43.888 47.4902 43.7147 47.4902C43.5413 47.4902 43.368 47.4682 43.1947 47.4021L17.7147 38.7718V33.7301C17.7147 30.3836 20.3797 27.6757 23.673 27.6757H63.7563C67.0497 27.6757 69.7147 30.3836 69.7147 33.7301Z" fill="white"/>
                        </svg>61%
                        Insertion
                    </p>
                    <p class="ecole">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53" height="53" viewBox="0 0 53 53" fill="none">
                            <g clip-path="url(#clip0_103_1285)">
                            <path d="M12.0123 25.9133H1.5745L8.6788 20.9008H16.7518L12.0123 25.9133ZM40.9876 25.9133H51.4254L44.3211 20.9008H36.248L40.9876 25.9133ZM20.8881 52.9296H25.4259V37.9912H20.8881V52.9296ZM27.1033 52.9296H31.6411V37.9912H27.1033V52.9296ZM52.3168 27.5907V52.9296H33.3186V36.3138H19.2107V52.9296H0.68309V27.5907H12.7348L19.6174 20.3118L25.6613 13.9198V0.929565H36.5347L36.1027 1.21089L31.2484 4.37182L36.1027 7.53285L36.5347 7.81408H27.3387V13.9197L33.3825 20.3117L40.2651 27.5906H52.3168V27.5907ZM8.71495 44.6108H3.9341V49.3916H8.71495V44.6108ZM8.71495 37.1525H3.9341V41.9334H8.71495V37.1525ZM16.3644 44.6108H11.5836V49.3916H16.3644V44.6108ZM16.3644 37.1525H11.5836V41.9334H16.3644V37.1525ZM30.4203 28.1644C30.4203 25.9993 28.6651 24.244 26.5 24.244C24.3349 24.244 22.5797 25.9993 22.5797 28.1644C22.5797 30.3295 24.3349 32.0848 26.5 32.0848C28.6651 32.0848 30.4203 30.3296 30.4203 28.1644ZM41.4163 44.6108H36.6355V49.3916H41.4163V44.6108ZM41.4163 37.1525H36.6355V41.9334H41.4163V37.1525ZM49.0658 44.6108H44.285V49.3916H49.0658V44.6108ZM49.0658 37.1525H44.285V41.9334H49.0658V37.1525Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_103_1285">
                                <rect width="52" height="52" fill="white" transform="translate(0.5 0.929565)"/>
                            </clipPath>
                            </defs>
                        </svg>08
                        Ecole
                    </p>
                    <p class="sepcialite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
                            <path d="M37.1546 23.8597L35.1687 27.8836L30.7281 28.5288L33.9413 31.661L33.1828 36.0836L37.1546 33.9955L41.1263 36.0836L40.3678 31.661L43.581 28.5288L39.1404 27.8836L37.1546 23.8597Z" fill="white"/>
                            <path d="M37.1546 16.9343C29.6776 16.9343 23.6164 22.9956 23.6164 30.4725C23.6164 37.9495 29.6776 44.0107 37.1546 44.0107C44.6315 44.0107 50.6928 37.9495 50.6928 30.4725C50.6928 22.9956 44.6315 16.9343 37.1546 16.9343ZM45.3953 30.1747L42.9949 32.5145L43.5615 35.8185C43.7152 36.7144 43.3538 37.6029 42.6184 38.1372C42.2029 38.4392 41.7167 38.5926 41.2272 38.5926C40.8418 38.5921 40.4624 38.4977 40.1217 38.3177L37.1546 36.7578L34.1875 38.3177C33.3829 38.7407 32.4262 38.6715 31.6907 38.1372C30.9554 37.6029 30.5939 36.7144 30.7476 35.8185L31.3143 32.5145L28.9138 30.1747C28.2629 29.5402 28.033 28.609 28.3139 27.7445C28.5948 26.88 29.3282 26.2617 30.2278 26.131L33.5451 25.6489L35.0286 22.6429C35.431 21.8278 36.2456 21.3214 37.1546 21.3214C38.0636 21.3214 38.8782 21.8278 39.2806 22.6429L40.7641 25.6489L44.0814 26.131C44.981 26.2617 45.7143 26.88 45.9953 27.7445C46.2762 28.609 46.0463 29.5402 45.3953 30.1747ZM43.3767 45.1986C41.7533 45.8852 40.0476 46.2925 38.2922 46.4153L41.2947 58.6617L44.6473 55.2764L48.8862 56.8005L45.7378 43.9588C44.9868 44.4372 44.197 44.852 43.3767 45.1986ZM30.9325 45.1986C30.1133 44.8524 29.3244 44.4382 28.5742 43.9606L25.4263 56.8005L29.6653 55.2764L33.0179 58.6617L36.0202 46.4156C34.2637 46.293 32.5568 45.8857 30.9325 45.1986Z" fill="white"/>
                        </svg>40
                        Spécialité
                    </p>
                </div>
                
            </div>
        </section>
<!--ZONE A propos de nous-->
        <section class="A_propos">
            <div class="apropos_droit">
                <img class="img1" src="femme  etic.png" alt="etudiante">
                <img class="img2" src="groupe etud.png" alt="etudiants">
                <img class="img3" src="un etudiant.png" alt="etudiant">
            </div>
            <div class="apropos_gauche">
                <h1 class="title_vert">A propos de Etic University</h1>
                <p class="sous_titre">Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque. Ut diam quam, semper iaculis condimentum ac, vestibulum eu nisl.</p>
                <button class="Inscription">Lire la suite</button>
            </div>
        </section>
<!--ZONE notre parcours-->
        <section class="Nos_parcours">
            <h2>Nos Parcours</h2>
            <p class="sous_titre">
                Vorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur neque.
            </p>
            <div class="layaout_filiere">
                <div class="case_filiere1">
                    <img src="economie.png" alt="Economie-filere">
                    <svg class="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Economique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>

                <div class="case_filiere2">
                    <img src="scienceinformatique.png" alt="Economie-filere">
                    <svg id="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Informatique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>

                <div class="case_filiere3">
                    <img src="science juridique.png" alt="Economie-filere">
                    <svg id="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Juridique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>

                <div class="case_filiere4">
                    <img src="science biologique.png" alt="Economie-filere">
                    <svg id="deco" xmlns="http://www.w3.org/2000/svg" width="79" height="162" viewBox="0 0 79 162"    fill="none">
                        <path opacity="0.5" d="M0.333984 0C43.4122 0 78.334 34.9218 78.334 78V84C78.334 127.078 43.4122 162 0.333984 162L0.333984 0Z" fill="#32B54F"/>
                    </svg>
                    <p class="nm_filiere">Licence Science-Biologique</p>
                    <p class="sous_titre_fliere">L'informatique est l'étude des moyens de traitement automatique de l'information, au sens large. L'un des principaux buts de l'informatique est la conception et la réalisation de systèmes opérationnels (ordinateurs, logiciels, programmes d'application).</p>
                </div>
            </div>
            <div class="point">
                <span class="point1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <path d="M0.5 8.0122C0.5 3.58718 4.08718 0 8.5122 0C12.9372 0 16.5244 3.58718 16.5244 8.0122C16.5244 12.4372 12.9372 16.0244 8.5122 16.0244C4.08718 16.0244 0.5 12.4372 0.5 8.0122Z" fill="#0246AC"/>
                      </svg>
                </span>
                <span class="point2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                        <path d="M0.987808 8.0122C0.987808 3.58718 4.57499 0 9 0C13.425 0 17.0122 3.58718 17.0122 8.0122C17.0122 12.4372 13.425 16.0244 9 16.0244C4.57499 16.0244 0.987808 12.4372 0.987808 8.0122Z" fill="#D9D9D9"/>
                    </svg>
                </span>
                <span class="point3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                        <path d="M0.987808 8.0122C0.987808 3.58718 4.57499 0 9 0C13.425 0 17.0122 3.58718 17.0122 8.0122C17.0122 12.4372 13.425 16.0244 9 16.0244C4.57499 16.0244 0.987808 12.4372 0.987808 8.0122Z" fill="#D9D9D9"/>
                    </svg>
                </span>
            </div>
        </section>
<!--ZONE nos actualite-->
        <section class="Nos_actualite">
            <div class="ActualitesEtplusInfo">
                <h2>Nos Actualité</h2>
                <button class="VoirPlus">
                    <a href="{{ route('detailact') }}">
                        Plus d'actualités
                    </a>
                </button>
            </div>
            <div class="LayaoutCase">
                <div class="Case1">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte">
                        <p class="date">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case2">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte">
                        <p class="date">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case3">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte">
                        <p class="date">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
            </div>
        </section>
<!--ZONE nos Evenement-->
        <section class="Nos_evenment">
            <div class="ActualitesEtplusInfo">
                <h2>Nos Evenement</h2>
                <button class="VoirPlus1">Vois Plus</button>
            </div>
            <div class="LayaoutCase1">
                <div class="Case11">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte1">
                        <p class="date1">29/12/2023</p>
                        <p class="Titre1">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre1">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case12">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte1">
                        <p class="date1">29/12/2023</p>
                        <p class="Titre">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
                <div class="Case13">
                    <img src="actu_1.png" alt="etudiant actu">
                    <div class="Frame_Texte1">
                        <p class="date1">29/12/2023</p>
                        <p class="Titre1">SOUTENANCE DE MÉMOIRE LICENCE ET MASTER SESSION</p>
                        <p class="sous_titre1">Ce samedi 13 mai 2023 à partir de 07h30 sur son campus de Cocody 2plateaux, le groupe ETIC organise sa 6ème édition de soutenance groupée des niveaux licence et Master Professionnel.</p>
                    </div>
                </div>
            </div>
        </section>
<!--ZONE DE TEMOIGNAGE -->
        <section class="Nos_temoignage">
            <h2 class="tmg">Nos Témoignages</h2>
            <div class="frame_temoignage">
                <p class="txt">Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
                <div class="profile_client">
                    <img class="img_t" src="wade.png" alt="ancient etudiant">
                    <p class="nom">Wade Warren</p>
                </div>

            </div>
            <div class="frame_temoignage">
                <p class="txt">Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
                <div class="profile_client">
                    <img class="img_t" src="wade.png" alt="ancient etudiant">
                    <p class="nom">Wade Warren</p>
                </div>

            </div>
            <div class="frame_temoignage">
                <p class="txt">Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis.</p>
                <div class="profile_client">
                    <img id="img_t" src="wade.png" alt="ancient etudiant">
                    <p class="nom">Wade Warren</p>
                </div>
            </div>
        </section>
<!--ZONE DE PARTENAIRE -->
        <section class="Partenaire">
            <h2>Nos Partenaire</h2>
            <div class="Logo_container">
                <img src="NGA.png" alt="">
                <img src="IPFMP.png" alt="">
                <img src="UPGC.png" alt="">
                <img src="UN4.png" alt="">
                <img src="UN5.png" alt="">
                <img src="UN6.png" alt="">
            </div>
        </section>
@endsection