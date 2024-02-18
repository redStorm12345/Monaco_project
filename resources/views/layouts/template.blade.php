<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page d'Accueil 1</title>
    <link rel="stylesheet" href="{{ asset("assets/style1.1.css") }}">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<!--AUTO LAYAOUT PRINCIPALE-->
    <div class="lumiere1">
        <svg xmlns="http://www.w3.org/2000/svg" width="467" height="777" viewBox="0 0 467 777" fill="none">
            <g filter="url(#filter0_f_202_951)">
            <circle cx="78.5" cy="388.5" r="111.5" fill="#00FF38"/>
            </g>
            <defs>
            <filter id="filter0_f_202_951" x="-310" y="0" width="777" height="777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="138.5" result="effect1_foregroundBlur_202_951"/>
            </filter>
            </defs>
        </svg>
    </div>
    <div class="lumiere2">
        <svg xmlns="http://www.w3.org/2000/svg" width="560" height="590" viewBox="0 0 560 590" fill="none">
            <g filter="url(#filter0_f_202_952)">
              <circle cx="388.5" cy="201.5" r="111.5" fill="#00FF38"/>
            </g>
            <defs>
              <filter id="filter0_f_202_952" x="0" y="-187" width="777" height="777" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="138.5" result="effect1_foregroundBlur_202_952"/>
              </filter>
            </defs>
          </svg>
    </div>
    <!--NAV BAR-->
    <nav class="menu">
        <a href="" class="Logo">
            <img src="etic img.png" alt="">
        </a>
        <ul class="navbar_coplet">
            <li>
                <a href="{{ route('accueil') }}">
                    Accueil
                </a>
            </li>
            <li>
                <a href="{{ route('actu') }}">
                    Actualités
                </a>
            </li>
            <li>
                <a href="{{ route('etic-u') }}">
                    Etic University
                </a>
            </li>
            <li>
                <a href="{{ route('groupe-e') }}">
                    Groupe Etic
                </a>
            </li>
            <li>
                <a href="{{ route('n-formation') }}">
                    Nos Formation
                </a>
            </li>
            <li>
                <a href="{{ route('mon-cv') }}">
                    Mon CV
                </a>
            </li>
        </ul>
        <div class="navbar_Gauche">
                <button class="Connexion">
                    <a href="{{ route('ma-page') }}">
                        Connexion
                    </a>
                </button>
                <button class="Inscription">
                    <a href="{{ route('ma-page2') }}">
                        Inscription
                    </a>
                </button>
        </div>
    </nav>
    <div >
        @yield("corps")







    </div><!--FIN LYT_PRINCIPALE -->
    <footer class="pied">

        <div class="pied1">

            <div class="icone">

                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="64" viewBox="0 0 49 64" fill="none" id="i1">
                    <path d="M43.1863 9.24672C43.5342 9.63542 43.8956 10.015 44.2284 10.4158C45.1207 11.4912 45.9979 12.5787 46.8857 13.6585C47.3244 14.1924 47.7841 14.7097 48.2061 15.2572C48.312 15.3948 48.3483 15.6172 48.3498 15.8017C48.374 19.6085 48.3997 23.4139 48.4027 27.2207C48.4088 34.3353 48.3967 41.4499 48.4027 48.5644C48.4027 49.3887 48.1804 50.0633 47.5679 50.6713C46.9629 51.2702 46.4895 52.0037 45.9616 52.6813C45.759 52.9415 45.5261 53.188 45.3778 53.4769C44.5853 55.012 43.82 56.5608 43.0366 58.102C42.418 59.3195 41.7737 60.5234 41.1687 61.747C40.9025 62.2854 40.6802 62.8495 40.4881 63.4182C40.3928 63.698 40.2431 63.819 39.9723 63.8266C39.7152 63.8341 39.4581 63.8326 39.201 63.8326C26.9365 63.8326 14.672 63.8326 2.40755 63.8326C1.92356 63.8326 1.43806 63.8145 0.955592 63.8387C0.583529 63.8583 0.495806 63.7026 0.503369 63.3592C0.527568 62.2415 0.530593 61.1238 0.532105 60.0061C0.532105 41.1685 0.532105 22.3325 0.532105 3.49486C0.532105 2.60403 0.515468 1.71319 0.515468 0.820847C0.512443 0.178054 0.680326 0.0147095 1.31858 0.0147095C15.3209 0.0283215 29.3232 0.0419336 43.3254 0.0570581C43.9743 0.0570581 44.6216 0.0615955 45.2704 0.0691578C45.399 0.0706702 45.5276 0.103944 45.7166 0.132681C45.5866 0.518356 45.5049 0.869245 45.3567 1.18837C44.7502 2.49513 44.124 3.79282 43.5024 5.09352C42.7235 6.72244 41.9415 8.34832 41.1672 9.97875C40.9932 10.3448 40.8148 10.7123 40.6938 11.0964C40.5758 11.473 40.3429 11.5789 39.9829 11.5774C36.7916 11.5683 33.6019 11.5653 30.4106 11.5608C29.5001 11.5608 29.3549 11.6999 29.3564 12.6089C29.3655 17.0192 29.3731 21.431 29.3882 25.8413C29.3912 26.9606 29.4003 26.9636 30.5195 26.9802C31.2757 26.9923 32.032 26.9802 32.7867 27.0029C32.9304 27.0074 33.0695 27.1179 33.2117 27.1784C33.1376 27.2963 33.0544 27.4113 32.9908 27.5353C32.8154 27.8832 32.6369 28.2295 32.4781 28.5849C32.1968 29.2111 31.9412 29.8478 31.6493 30.4694C31.5238 30.7387 31.3166 30.9686 31.1774 31.2317C30.4908 32.5324 29.789 33.8256 29.1507 35.149C28.9345 35.5982 28.7847 36.129 28.7832 36.6236C28.756 41.8507 28.7635 47.0762 28.7635 52.3032C28.7635 52.9642 28.7666 52.9672 29.4109 52.9672C32.3299 52.9717 35.2474 52.9778 38.1665 52.9657C38.3646 52.9657 38.6066 52.8568 38.7518 52.7191C39.2811 52.2155 39.7802 51.6786 40.2884 51.1522C41.2171 50.1903 42.1533 49.2344 43.0638 48.2544C43.1863 48.1228 43.2135 47.8657 43.215 47.666C43.2302 46.1853 43.2317 44.7047 43.2317 43.2255C43.2317 37.7277 43.2528 32.2284 43.2256 26.7307C43.1969 21.2193 43.1197 15.7064 43.0653 10.195C43.0623 9.89556 43.0653 9.5961 43.0653 9.29663C43.1061 9.2815 43.147 9.26638 43.1893 9.25126L43.1863 9.24672ZM11.1556 32.2526C11.1556 38.1754 11.1556 44.0966 11.1556 50.0194C11.1556 50.7287 11.1662 51.4396 11.1888 52.1489C11.2085 52.7524 11.2796 52.8159 11.8921 52.8174C15.1288 52.819 18.3654 52.8174 21.6021 52.8144C22.2933 52.8144 22.4007 52.7176 22.4022 52.0325C22.4097 47.545 22.4112 43.0591 22.4112 38.5717C22.4112 38.0272 22.316 37.9395 21.7745 37.9379C20.4133 37.9334 19.0521 37.9334 17.6909 37.9349C16.7032 37.9349 16.7305 37.9379 16.738 36.9518C16.7577 33.8694 16.7607 30.7886 16.7562 27.7062C16.7562 27.0453 16.735 27.0407 17.396 27.0392C18.8479 27.0362 20.2983 27.0316 21.7503 27.0286C22.3008 27.0286 22.4128 26.9182 22.4128 26.3662C22.4128 21.6987 22.4097 17.0298 22.4052 12.3624C22.4052 11.4972 22.3175 11.4156 21.4403 11.3914C21.3193 11.3884 21.1983 11.3929 21.0773 11.3914C20.1395 11.3884 19.2018 11.3959 18.2656 11.3808C16.3161 11.3505 14.3665 11.2961 12.4154 11.2764C11.6819 11.2689 11.1919 11.8058 11.1858 12.5393C11.1798 13.3243 11.1586 14.1093 11.1571 14.8957C11.1541 20.6824 11.1571 26.4675 11.1571 32.2541L11.1556 32.2526Z" fill="#037112"/>
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="12" viewBox="0 0 72 12" fill="none" id="i2">
                    <path d="M5.58692 4.58949C5.36149 5.68377 5.284 5.75187 4.27425 5.76126C3.22459 5.76831 2.39096 7.11385 2.84887 8.09776C2.92401 8.25979 3.15179 8.46174 3.30913 8.45939C4.0723 8.45 4.83548 8.3772 5.59632 8.33259C5.74191 8.32319 5.92272 8.29267 6.0237 8.36312C6.09649 8.41478 6.12232 8.68248 6.05892 8.74119C5.75365 9.03707 5.43429 9.49732 5.08205 9.53254C3.99012 9.64291 2.88174 9.5983 1.77807 9.5936C1.12291 9.5936 0.883388 9.15447 0.998452 8.60498C1.20745 7.59524 1.56908 6.61368 1.74989 5.59923C1.94714 4.47912 2.1397 3.33083 2.09978 2.20367C2.05986 1.05773 2.15614 0.834642 3.31617 0.820552C4.13101 0.811159 4.9435 0.707837 5.75835 0.644434C5.82879 0.639738 5.89924 0.618602 5.96734 0.627995C8.224 0.912132 10.4783 0.496498 12.735 0.611562C14.3036 0.691403 14.4234 0.836992 14.1251 2.35631C13.7025 4.5026 13.1295 6.62776 13.1013 8.83981C13.0919 9.50671 12.789 9.657 11.9695 9.57951C11.2861 9.51376 11.3472 9.08168 11.4341 8.61203C11.7792 6.77335 12.1362 4.93938 12.4626 3.09835C12.6575 1.98998 12.317 1.56964 11.4176 1.79742C11.1687 1.86083 10.8611 2.10739 10.7765 2.33987C10.5816 2.87996 10.5018 3.46467 10.382 4.03295C10.3492 4.19263 10.382 4.3805 10.3092 4.51434C9.56485 5.88102 9.58129 7.39564 9.48501 8.87738C9.43335 9.68518 8.8909 9.58655 8.38603 9.59594C7.79193 9.60769 7.65808 9.18265 7.74261 8.73649C7.95395 7.61168 8.20757 6.49391 8.48231 5.38319C8.68896 4.54487 8.99423 3.73003 9.17269 2.88701C9.2361 2.58644 9.15626 2.13322 8.959 1.93832C8.80167 1.78334 8.3555 1.95006 8.04554 1.91249C7.68391 1.87022 7.27531 1.60957 6.98883 1.71993C6.64833 1.84909 6.48395 2.16844 5.97204 1.95006C5.46716 1.73637 4.82609 1.78568 4.24842 1.81856C3.81635 1.84439 3.40775 3.15236 3.63553 3.98364C3.69893 4.21142 4.17798 4.35466 4.49264 4.47442C4.67815 4.54487 4.91063 4.48147 5.12197 4.49791C5.27695 4.512 5.42959 4.55896 5.58223 4.58949H5.58692Z" fill="#037112"/>
                    <path d="M65.7348 7.82961C65.8523 8.43311 65.2206 9.34658 64.5513 9.54148C64.0277 9.69412 63.5205 9.72229 63.1541 9.10471C62.816 8.53408 62.7056 8.09027 63.0203 7.42806C63.3068 6.81987 63.2833 6.06608 63.3866 5.37335C63.5275 4.4317 63.7036 3.49475 63.7764 2.54841C63.8234 1.93552 64.2038 1.8909 64.6335 1.86976C65.122 1.84628 65.291 2.16094 65.2769 2.59537C65.2699 2.82785 65.183 3.06502 65.2088 3.29045C65.2417 3.58868 65.338 4.12408 65.4249 4.12877C65.7771 4.14286 66.1411 4.00901 66.4886 3.89395C66.6084 3.85403 66.6765 3.68731 66.7939 3.61921C67.6745 3.0885 68.4729 3.55346 68.5621 4.67592C68.6068 5.2348 68.534 5.80307 68.5856 6.35961C68.6185 6.72593 68.7782 7.08052 68.9402 7.6394C69.9335 6.47937 70.5863 5.44144 70.5581 4.09825C70.5488 3.67321 70.5229 3.26227 71.1217 3.27167C71.6736 3.28106 71.9929 3.63565 71.9295 4.12643C71.8544 4.71584 71.7135 5.34517 71.4129 5.84769C70.746 6.96311 70.011 8.05034 69.2126 9.07418C68.3649 10.1638 67.6322 11.4083 66.1951 11.8827C65.3897 12.148 64.9106 11.8921 65.0351 11.197C65.0726 10.981 65.3098 10.7532 65.5141 10.624C65.7231 10.4925 66.0025 10.4761 66.2515 10.4127C67.2753 10.1591 67.7074 9.52974 67.5547 8.48947C67.4021 7.43041 67.2307 6.3737 67.0898 5.31229C67.0217 4.80507 66.7798 4.64069 66.2773 4.71819C64.9388 4.92248 64.9294 4.90839 64.6335 6.31734C64.5255 6.83395 64.4269 7.35996 64.3987 7.88597C64.3893 8.06208 64.5795 8.35092 64.7392 8.40493C64.8707 8.44955 65.0961 8.22881 65.2793 8.11845C65.4225 8.03391 65.5611 7.93998 65.7325 7.83196L65.7348 7.82961Z" fill="#037112"/>
                    <path d="M39.6249 8.49418C40.0006 8.17951 40.2589 7.96582 40.5853 7.69343C40.752 8.23117 40.7661 8.66326 40.219 8.94739C39.7799 9.17517 39.3525 9.47105 38.8828 9.57202C38.641 9.62368 38.3286 9.29728 38.0328 9.17752C37.8285 9.09533 37.5843 9.0061 37.387 9.05072C37.1757 9.09768 37.0066 9.31372 36.8046 9.42878C35.9874 9.88434 35.2571 9.52271 35.2994 8.61629C35.337 7.83902 35.553 7.07115 35.6869 6.29857C35.755 5.91111 35.8841 5.51895 35.8606 5.13619C35.8348 4.73464 35.4708 4.67359 35.2759 4.96947C34.6442 5.93225 34.0642 6.93025 33.4913 7.9306C33.2846 8.29458 33.1649 8.70552 32.9911 9.09063C32.7797 9.56028 32.3406 9.68709 31.9391 9.52271C31.7653 9.44991 31.6361 8.97087 31.6808 8.71022C31.8733 7.60889 32.1504 6.52166 32.3735 5.42503C32.4557 5.01643 32.498 4.59609 32.5238 4.18045C32.559 3.61452 32.869 3.28108 33.4044 3.29752C33.9374 3.31161 34.0666 3.71315 34.0243 4.20394C34.0055 4.44111 34.076 4.68298 34.1323 5.15263C34.494 4.77221 34.6865 4.5233 34.9237 4.32839C35.3111 4.00668 35.6939 3.64975 36.1424 3.43371C36.814 3.112 37.4199 3.5112 37.3541 4.25325C37.286 5.03521 37.0512 5.80074 36.915 6.57801C36.8187 7.12515 36.7694 7.67934 36.6825 8.37207C37.8872 7.85311 38.2277 7.03358 38.3333 6.0567C38.4014 5.42972 38.4766 4.80509 38.54 4.17811C38.6034 3.53469 39.0942 3.58635 39.5356 3.55582C40.0452 3.51825 40.1509 3.8611 40.0851 4.23681C39.9771 4.86614 39.8597 5.50486 39.6437 6.10132C39.3642 6.86684 39.4652 7.58776 39.6225 8.49653L39.6249 8.49418Z" fill="#037112"/>
                    <path d="M24.6195 7.52198C24.8708 6.08486 25.1291 4.64773 25.3686 3.20826C25.4673 2.61415 25.5823 2.013 25.58 1.41654C25.58 0.674498 26.1318 0.672149 26.5827 0.608746C27.0688 0.540647 27.4093 0.796602 27.3529 1.34609C27.3106 1.76173 27.2355 2.17503 27.1509 2.58362C26.8128 4.22739 26.4418 5.86412 26.1318 7.51259C26.0543 7.93057 26.0801 8.35091 26.6578 8.58339C27.2472 8.82056 27.4727 8.48711 27.8531 8.20062C28.844 7.45857 29.1493 6.46996 29.2714 5.29584C29.3583 4.45282 29.7317 3.64268 29.9289 2.8067C30.051 2.29243 30.0651 1.75469 30.1637 1.23572C30.2647 0.709717 30.8353 0.399753 31.413 0.667453C31.6361 0.770775 31.8333 1.28504 31.7793 1.56213C31.6431 2.26426 31.3308 2.93116 31.1383 3.62624C31.0044 4.11703 30.9481 4.63129 30.8635 5.13381C30.7203 5.98623 30.5512 6.83864 30.4526 7.69575C30.4174 8.00102 30.5371 8.32978 30.6123 8.63975C30.7273 9.11175 30.7414 9.51799 30.1896 9.74342C29.6777 9.95241 29.4029 9.74577 29.201 9.28552C28.9685 8.75716 28.581 8.81821 28.1536 9.05538C27.7521 9.27847 27.3458 9.4992 26.9279 9.68941C25.9252 10.1473 24.7839 9.4405 24.6876 8.30629C24.6665 8.05034 24.6853 7.79203 24.6853 7.53372C24.6618 7.52902 24.6407 7.52668 24.6172 7.52198H24.6195Z" fill="#037112"/>
                    <path d="M19.9487 7.61362C20.099 8.60223 19.4861 9.33489 18.5656 9.56267C18.1851 9.6566 17.8071 9.76227 17.4314 9.87264C16.3653 10.1873 14.9469 9.22217 14.6463 8.16076C14.1603 6.44655 14.5688 4.88731 15.2851 3.37269C15.8181 2.24553 16.7316 1.31093 17.8024 0.82484C18.5585 0.481996 19.6481 0.648728 20.524 0.86007C21.2473 1.03384 21.2285 2.36529 20.5757 2.8138C20.16 3.10264 19.9769 2.75745 19.9181 2.4874C19.8007 1.94731 19.5612 1.66787 18.9742 1.67491C18.3519 1.68196 17.8493 1.71718 17.4008 2.32537C16.3324 3.77659 15.9989 5.38279 16.1938 7.10405C16.2502 7.59719 16.5437 8.2547 16.9335 8.47073C17.5582 8.82062 18.3378 8.78539 18.9835 8.26643C19.2536 8.04804 19.5589 7.87193 19.9487 7.61128V7.61362Z" fill="#037112"/>
                    <path d="M46.3006 7.55486C45.9061 6.59442 46.3734 5.79368 46.8736 5.12208C47.5522 4.21331 48.4258 3.39612 49.6609 3.37029C50.0789 3.3609 50.6073 3.63798 50.9008 3.95265C51.2178 4.29314 50.9126 5.53302 50.5063 5.82655C49.7948 6.33847 49.1796 7.01476 48.2121 7.12278C48.0125 7.14391 47.7096 7.58774 47.726 7.81552C47.7471 8.08322 48.0172 8.47772 48.2637 8.55521C48.8438 8.74072 49.459 8.72428 50.0061 8.32039C50.1376 8.22411 50.3772 8.27107 50.5674 8.25229C50.5274 8.44015 50.5439 8.67732 50.4359 8.80648C49.6163 9.7716 47.5029 9.96181 46.6247 9.06008C46.2912 8.71959 46.256 8.08791 46.0869 7.59009C46.1574 7.57834 46.2302 7.5666 46.3006 7.55721V7.55486ZM47.9679 5.65513C47.9749 5.99562 48.1816 6.32673 48.5479 6.04024C48.9259 5.74436 49.1561 5.25123 49.4097 4.81915C49.4379 4.76984 49.1936 4.45048 49.0645 4.44109C48.6911 4.41761 47.989 5.20426 47.9679 5.65513Z" fill="#037112"/>
                    <path d="M43.3889 7.49613C43.6942 7.14155 44.1451 6.83158 44.2766 6.42064C44.5325 5.61754 45.1853 4.93655 45.0351 3.99021C44.9975 3.75538 45.1642 3.37967 45.3591 3.25286C45.5188 3.14719 45.9744 3.22703 46.0894 3.38201C46.2726 3.62858 46.4182 4.03952 46.343 4.31662C46.0589 5.35219 45.4343 6.22574 44.9083 7.15329C44.4269 8.00101 43.8093 8.63269 43.0743 9.20096C42.8747 9.35595 42.6375 9.47806 42.3956 9.5532C42.0528 9.66122 41.879 9.50858 41.8555 9.13286C41.7898 8.01745 41.7334 6.89733 41.6019 5.78896C41.5479 5.33575 41.2732 4.91307 41.1839 4.45985C41.137 4.22503 41.2027 3.79765 41.3483 3.7272C41.7193 3.54639 42.25 3.10492 42.5459 3.76243C42.8089 4.34714 42.9451 4.99995 43.0531 5.63633C43.1541 6.23748 43.1424 6.85741 43.1823 7.46796C43.2504 7.47735 43.3185 7.48909 43.3866 7.49849L43.3889 7.49613Z" fill="#037112"/>
                    <path d="M56.5155 9.59074C55.8838 9.64944 55.3296 9.38174 55.0549 8.72658C54.968 8.51994 55.1113 8.21701 55.1465 7.9587C55.3531 8.06437 55.5926 8.13247 55.7617 8.28276C56.1046 8.58569 56.391 9.04829 56.9335 8.77589C57.382 8.55281 57.5323 8.11604 57.4078 7.63699C57.3585 7.45148 57.2012 7.28241 57.065 7.13212C56.3488 6.3572 56.114 5.223 56.5625 4.34006C57.0274 3.42189 57.8986 3.24578 58.8262 3.21525C59.2019 3.20351 59.5001 3.29509 59.4461 3.75769C59.3921 4.225 59.1221 4.11698 58.7816 4.05123C58.5702 4.00896 58.1287 4.19212 58.1029 4.33301C58.0348 4.69229 58.0043 5.19951 58.2039 5.44138C58.6829 6.01905 58.9107 6.59672 58.8849 7.35286C58.8403 8.7031 57.9456 9.62361 56.5155 9.59074Z" fill="#037112"/>
                    <path d="M52.3549 9.56729C51.6246 9.61191 51.472 9.4311 51.5659 8.90744C51.843 7.3529 52.0544 5.78662 52.3174 4.22738C52.3502 4.03718 52.5193 3.75304 52.6649 3.72721C52.9021 3.68494 53.2684 3.7366 53.4022 3.89628C53.7122 4.26496 53.8766 4.22034 54.2547 3.95734C54.5787 3.73191 55.0672 3.71781 55.4875 3.6685C55.5767 3.65911 55.8068 3.94324 55.7787 4.02543C55.6918 4.28844 55.518 4.72521 55.3654 4.72991C53.8202 4.78157 53.4304 5.87351 53.158 7.07581C53.003 7.7568 52.9302 8.45892 52.7494 9.13522C52.6907 9.35125 52.4113 9.50859 52.3549 9.56729Z" fill="#037112"/>
                    <path d="M61.7592 8.61628C61.8484 8.39554 61.8977 8.14428 62.041 7.97051C62.1185 7.87658 62.358 7.9165 62.5224 7.89537C62.5059 8.04331 62.5435 8.2429 62.4636 8.33214C62.102 8.72899 61.7498 9.16342 61.306 9.44521C61.0641 9.59785 60.4489 9.60019 60.3432 9.44521C60.0497 9.00374 59.7538 8.43312 59.789 7.93529C59.8571 6.99129 60.1577 6.06373 60.3502 5.12678C60.3972 4.899 60.4418 4.65949 60.4136 4.43405C60.3455 3.87752 60.531 3.62156 61.1251 3.60277C61.7099 3.58399 61.9916 3.80707 61.9048 4.373C61.7827 5.1714 61.5854 5.95806 61.4562 6.75411C61.3717 7.27777 61.3506 7.81083 61.2989 8.33918C61.4516 8.43311 61.6042 8.52469 61.7568 8.61862L61.7592 8.61628Z" fill="#037112"/>
                    <path d="M60.797 2.42397C60.7876 1.07372 61.4287 0.451438 62.4901 0.683915C62.6521 0.719138 62.9057 1.08076 62.8611 1.17235C62.5863 1.75236 62.2764 2.32533 61.8936 2.83725C61.7832 2.98284 61.3488 3.00163 61.1304 2.9124C60.9449 2.83725 60.858 2.52259 60.797 2.42161V2.42397Z" fill="#037112"/>
                    <path d="M39.1576 2.02C39.2328 0.735511 39.5592 0.399712 40.6112 0.662715C40.7779 0.704984 41.0339 1.05017 40.9916 1.15584C40.7873 1.69124 40.5478 2.22664 40.2167 2.6916C40.0828 2.87946 39.686 2.8818 39.4089 2.96869C39.3243 2.65402 39.2398 2.33701 39.1553 2.02234L39.1576 2.02Z" fill="#037112"/>
                    <path d="M22.8067 5.48375C22.8772 5.48375 22.9523 5.46496 23.0157 5.48609C23.2928 5.58472 23.5676 5.69508 23.8423 5.80075C23.5816 6.08724 23.3727 6.4794 23.0509 6.63673C22.6705 6.82224 22.1915 6.83868 21.7524 6.86217C21.534 6.87391 21.1348 6.75884 21.1207 6.66021C21.0878 6.41834 21.1512 6.01445 21.3179 5.92052C21.7618 5.66691 22.2784 5.5401 22.7645 5.36163C22.7786 5.40155 22.795 5.44383 22.8091 5.48375H22.8067Z" fill="#037112"/>
                    <path d="M47.9678 5.6551C47.9889 5.20424 48.691 4.41758 49.0644 4.44107C49.1936 4.45046 49.4378 4.76982 49.4096 4.81913C49.1583 5.25121 48.9259 5.74434 48.5478 6.04022C48.1791 6.32905 47.9725 5.9956 47.9678 5.6551Z" fill="#037112"/>
                  </svg>

            </div>

            <img src="publication/image 2.png" alt="picture" class="ic2">

        </div>

        <div class="pied2">

            <div class="pied201">

                <p class="fr5">Etic Deux plateaux, cocody</p>

                <p class="fr5">Etic Marcory</p>

                <p class="fr5">Etic Bondoukou</p>

                <p class="fr5">Etic Abobo</p>

            </div>

            <div class="pied202">

                <p class="fr5">Etic Korhogo</p>

                <p class="fr5">Etic Yopougon</p>

                <p class="fr5">Etic Odienné</p>

            </div>

            <div class="pied203">

                <p class="fr5">Découvrir le groupe Etic</p>

                <p class="fr5">Découvrir  Etic university</p>

                <p class="fr5">Nos politique</p>

            </div>

            <div class="pied204">

                <p class="fr5">Emplois du temp</p>

                <p class="fr5">Publication</p>

            </div>

        </div>

        <p class="line"></p>

        <div class="pied3">

            <div class="pied301">

                <p class="fr5">Suiver nous:</p>

                <div class="pied3011">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none" id="pied30111">
                        <path d="M25.2909 13.1838C25.2909 6.33607 19.7385 0.78833 12.8955 0.78833C6.04774 0.78833 0.5 6.33607 0.5 13.1838C0.5 19.3691 5.03131 24.4977 10.9587 25.4266V16.7676H7.81099V13.1846H10.9587V10.4521C10.9587 7.3463 12.8064 5.63108 15.6387 5.63108C16.9953 5.63108 18.4153 5.87279 18.4153 5.87279V8.92285H16.8496C15.3126 8.92285 14.8322 9.87962 14.8322 10.8596V13.1838H18.2697L17.7173 16.7668H14.8322V25.4258C20.7549 24.497 25.2909 19.3683 25.2909 13.183V13.1838Z" fill="#1200E5"/>
                      </svg>

                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none" id="*pied3012">
                        <path d="M0.291016 2.51845C0.291016 1.56281 1.08512 0.78833 2.06492 0.78833H22.6724C23.6522 0.78833 24.4463 1.56281 24.4463 2.51845V23.2135C24.4463 24.1691 23.6522 24.9436 22.6724 24.9436H2.06492C1.08512 24.9436 0.291016 24.1691 0.291016 23.2135V2.51845ZM7.75348 21.0093V10.1017H4.12868V21.0093H7.75348ZM5.94183 8.61161C7.20545 8.61161 7.99201 7.77523 7.99201 6.7275C7.96936 5.65712 7.20696 4.84339 5.96599 4.84339C4.72501 4.84339 3.9143 5.65863 3.9143 6.7275C3.9143 7.77523 4.70086 8.61161 5.91768 8.61161H5.94183ZM13.3515 21.0093V14.9176C13.3515 14.5915 13.3756 14.2654 13.4722 14.033C13.7334 13.3823 14.3297 12.7074 15.3322 12.7074C16.6441 12.7074 17.168 13.7069 17.168 15.1743V21.0093H20.7928V14.7531C20.7928 11.4015 19.0053 9.84353 16.62 9.84353C14.6966 9.84353 13.8346 10.9003 13.3515 11.6446V11.6823H13.3273C13.3353 11.6697 13.3434 11.6572 13.3515 11.6446V10.1017H9.72817C9.77346 11.1253 9.72817 21.0093 9.72817 21.0093H13.3515Z" fill="#0047B1"/>
                      </svg>
                </div>

            </div>

            <p class="fr6">@Copyright Etic University</p>

        </div>

    </footer>

</body>
