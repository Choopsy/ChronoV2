<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


/*if (isset($iframe)) {
  echo "<script>console.log('iframe set')</script>";
} else {
  $iframe = false;
  echo "<script>console.log('iframe not set')</script>";
}*/

?>

<?php if (isset($_SESSION['profil']) && ($_SESSION['profil'] === "1")) : ?>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/8.9.0/firebase-firestore.js"></script>
  <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->

  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyA_OzMsskSIE3H5PxAp6q70SBKnE4drEzI",
      authDomain: "notifs-icg.firebaseapp.com",
      projectId: "notifs-icg",
      storageBucket: "notifs-icg.appspot.com",
      messagingSenderId: "623933683899",
      appId: "1:623933683899:web:3102368b52e8d81eee119e"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    var firebaseDB = firebase.firestore();
  </script>

  <?php if (isset($_SESSION['profil']) && ($_SESSION['profil'] === "1" && $_SESSION['login'] === "EquipeDeDevICG")) : ?>
    <script>
      window.addEventListener('load', function() {
        Notification.requestPermission(function(status) {
          // Cela permet d'utiliser Notification.permission avec Chrome/Safari
          if (Notification.permission !== status) {
            Notification.permission = status;
          }
        });
      });
    </script>
    <script type="text/javascript" src="/js/centreNotifications.js?v=<?php echo time(); ?>"></script>

  <?php endif; ?>

  <script type="text/javascript" src="/js/signalementBug.js?v=<?php echo time(); ?>"></script>

<?php endif; ?>
<script>
  function disconnect(profil) {
    if (profil !== undefined) {
      $.ajax({
        url: "/php/disconnect.php",
        type: "POST",
        contentType: false,
        cache: false,
        processData: false,
        success: function() {

          if (profil === 15 || profil === 16) {
            document.location.href = '/ifc/login/';
          } else if (profil === 17 || profil === 18) {
            document.location.href = '/logista/login/';
          } else if (profil === 19 || profil === 20 || profil === 21) {
            document.location.href = '/aleda/login/';
          } else {
            document.location.href = '/';
          }
        }
      });
    }

  }

  var selDem = 0;

  function deplierDemarcheSelector() {
    if (selDem === 0) {
      $("#demarcheSelectorDropdown").show();
      selDem = 1;
    } else {
      $("#demarcheSelectorDropdown").hide();
      selDem = 0;
    }
  }

  function selectedCarte() {
    $("#demCG").show();
    $("#demPer").hide();
  }

  function selectedPermis() {
    $("#demCG").hide();
    $("#demPer").show();
  }

  window.onload = function() {

    if (getParam('b')) {
      // set cookie
      document.cookie = 'fromCGB=1; path=/';
      // change navbar
      setNavbarCarteGriseBrest()
    } else {
      if (getCookie('fromCGB')) {
        // change navbar
        setNavbarCarteGriseBrest()
      }
    }
  }


  function setNavbarCarteGriseBrest() {
    $('.navbar-brand').attr('href', 'https://carte-grise-brest.fr');
    $('.menuLienRose, .menuLienBlanc').hide();
  }

  function getParam(param) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(param);
  }

  function getCookie(name) {
    const value = '; ' + document.cookie;
    const parts = value.split('; ' + name + '=');

    if (parts.length === 2) return parts.pop().split(';').shift();
  }
</script>

<?php
if (isset($_GET['b'])) {
  $b = $_GET['b'];
} else {
  $b = false;
}
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (isset($_SESSION['profil']) && ($_SESSION['typeCommercant'] == 'logista')) {
  $logista = true;
} else {
  $logista = false;
}
if (isset($_SESSION['profil']) && ($_SESSION['typeCommercant'] == 'ifc')) {
  $ifc = true;
} else {
  $ifc = false;
}
if (isset($_SESSION['profil']) && ($_SESSION['typeCommercant'] == 'aleda') || (isset($_SESSION['profil']) && ($_SESSION['profil'] == 21))) {
  $aleda = true;
} else {
  $aleda = false;
}
?>
<?php $IFC = isset($_GET['ifc']); ?>
<nav id="navbarMain" class="navbar navbar-toggleable-md bg-faded fixed-top" onload="setNavbar()" style="<?php $iframe ? "display: none" : '' ?>">
  <button class="navbar-toggler navbar-toggler-right nav-hamburger" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fal fa-bars"></i>
  </button>
  <div class="container">
    <a class="navbar-brand" href="<?php
                                  // if ($b) {
                                  //   echo 'https://carte-grise-brest.fr/';
                                  // } elseif ($_SESSION['profil'] == 20 || $_SESSION['profil'] == 21) {
                                  //   echo '/demarche';
                                  // } elseif ($_SESSION['profil'] == 16 || $_SESSION['profil'] == 15 || $_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19) {
                                  //   echo '/backoffice';
                                  // } elseif ($IFC || $ifc) {
                                  //   echo '/ifc/login/';
                                  // } elseif ($logista) {
                                  //   echo '/logista/login/';
                                  // } elseif ($aleda) {
                                  //   echo '/aleda/login/';
                                  // } else {
                                  //   echo '/';
                                  // }
                                  if ($b) {
                                    echo 'https://carte-grise-brest.fr/';
                                  } else {
                                    echo '/';
                                  }
                                  ?>
                                  ">
      <?php
      if (isset($_SESSION['profil']) && ($_SESSION["profil"] == 20 || $_SESSION['profil'] == 21)) :
      ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1455.000000 382.000000" preserveAspectRatio="xMidYMid meet" style="height: 60px; width: 100%;">

          <g transform="translate(0.000000,382.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
            <path d="M10137 3793 c-3 -16 -42 -233 -87 -483 -45 -250 -83 -457 -85 -458
        -2 -2 -39 4 -82 13 -104 23 -364 31 -490 16 -829 -100 -1364 -770 -1400 -1755
        -15 -404 72 -693 266 -887 42 -42 108 -94 146 -117 201 -118 487 -151 743 -87
        123 32 296 117 382 190 106 89 99 92 93 -35 l-6 -110 319 0 320 0 22 277 22
        278 280 1575 c154 866 280 1583 280 1593 0 16 -24 17 -359 17 l-358 0 -6 -27z
        m-352 -1504 c51 -8 75 -16 75 -25 0 -8 -52 -313 -115 -679 -131 -760 -124
        -736 -239 -850 -113 -112 -244 -165 -413 -165 -110 0 -176 25 -236 89 -55 59
        -70 87 -99 188 -21 70 -23 99 -23 283 0 234 18 350 81 532 157 455 525 693
        969 627z" />
            <path d="M969 1913 c-530 -1043 -965 -1900 -967 -1905 -2 -4 188 -8 423 -8
        l426 0 178 129 c1002 728 1982 1189 2946 1386 88 18 163 31 166 29 3 -2 -16
        -124 -42 -271 -27 -147 -56 -317 -65 -378 -23 -146 -23 -376 0 -469 33 -138
        123 -267 228 -329 239 -140 728 -122 1056 39 l93 45 -7 37 c-4 20 -26 136 -49
        257 -32 170 -44 220 -56 218 -8 -1 -75 -23 -149 -49 -118 -41 -145 -47 -220
        -48 -108 -1 -141 15 -166 79 -13 34 -15 62 -11 113 5 59 510 2961 523 3005 5
        16 -17 17 -360 17 -201 0 -366 -1 -367 -2 0 -2 -87 -489 -192 -1083 l-192
        -1080 -115 5 c-175 8 -594 3 -695 -8 -49 -6 -91 -9 -92 -8 -3 3 -373 2153
        -373 2167 0 5 -193 9 -478 9 l-478 0 -965 -1897z m1364 1110 c3 -21 44 -357
        91 -748 47 -390 88 -724 91 -741 l5 -31 -104 -27 c-258 -64 -635 -190 -911
        -304 -66 -28 -121 -49 -123 -47 -4 3 202 441 523 1110 158 330 312 651 341
        713 57 120 77 138 87 75z" />
            <path d="M6890 2880 c-510 -70 -921 -380 -1165 -875 -221 -450 -270 -1031
        -119 -1412 135 -343 414 -538 831 -584 308 -33 699 40 996 187 82 40 227 134
        227 147 0 7 -218 487 -225 495 -2 2 -55 -28 -118 -66 -131 -79 -225 -121 -347
        -154 -70 -18 -111 -23 -225 -23 -123 0 -148 3 -207 24 -176 64 -274 214 -286
        437 l-5 91 146 6 c828 38 1359 332 1482 821 94 376 -21 674 -319 821 -137 67
        -228 86 -431 90 -93 2 -199 0 -235 -5z m191 -551 c62 -13 122 -64 140 -116 17
        -53 6 -149 -24 -209 -87 -172 -383 -296 -765 -322 l-104 -8 6 28 c21 104 125
        303 213 405 146 172 358 260 534 222z" />
            <path d="M12208 2875 c-745 -106 -1237 -624 -1363 -1433 -21 -139 -37 -391
        -29 -478 l7 -72 112 -56 c258 -128 509 -206 717 -222 l83 -6 -31 20 c-70 45
        -125 151 -149 286 -49 282 25 741 158 979 111 198 259 330 450 401 78 29 89
        30 237 31 141 0 245 -12 276 -33 16 -10 -215 -1339 -244 -1404 -42 -96 -144
        -216 -232 -274 -22 -15 -38 -29 -36 -32 9 -8 211 19 361 49 273 55 623 188
        843 320 262 156 455 353 553 563 17 36 29 71 27 77 -2 6 -50 -28 -108 -75 -57
        -47 -144 -115 -194 -151 -99 -71 -300 -175 -384 -199 -52 -15 -52 -15 -47 7
        28 128 263 1513 258 1518 -34 33 -366 126 -588 165 -187 33 -518 42 -677 19z" />
            <path d="M14093 2799 c-61 -24 -132 -89 -164 -150 -31 -60 -38 -187 -14 -258
        21 -64 92 -144 159 -179 44 -23 63 -27 141 -27 78 0 97 4 147 28 65 32 121 90
        152 156 16 35 21 65 21 131 0 66 -5 96 -21 131 -32 69 -91 128 -159 161 -76
        35 -180 38 -262 7z m244 -45 c211 -100 212 -398 2 -503 -112 -56 -225 -37
        -315 53 -111 112 -112 286 -2 393 96 92 200 111 315 57z" />
            <path d="M14120 2500 c0 -173 1 -180 20 -180 18 0 20 7 20 75 l0 75 28 0 c25
        0 34 -10 71 -75 35 -61 48 -75 68 -75 l24 0 -32 58 c-17 31 -36 61 -41 67 -14
        16 -9 31 16 44 63 34 60 143 -5 177 -17 8 -57 14 -99 14 l-70 0 0 -180z m160
        120 c26 -26 25 -58 -2 -87 -17 -18 -32 -23 -70 -23 l-48 0 0 65 0 65 50 0 c37
        0 55 -5 70 -20z" />
            <path d="M3205 1111 c-174 -75 -350 -169 -477 -253 -109 -73 -117 -81 -113
        -106 3 -15 23 -173 45 -352 22 -179 43 -342 46 -362 l6 -38 414 0 414 0 -5 23
        c-5 22 -195 1126 -195 1133 0 10 -34 -1 -135 -45z" />
            <path d="M13553 962 c-229 -170 -356 -242 -559 -318 -263 -97 -535 -172 -769
        -211 -162 -26 -414 -24 -615 6 -263 39 -559 125 -732 212 l-37 19 16 -53 c73
        -250 226 -436 436 -533 194 -88 538 -99 767 -23 116 38 270 127 325 189 47 52
        50 46 47 -66 l-4 -104 321 0 c299 0 321 1 321 18 0 9 7 98 15 197 12 152 17
        182 32 193 10 7 56 39 103 72 157 110 311 262 374 370 33 56 48 90 42 90 -3 0
        -40 -26 -83 -58z" />
          </g>
        </svg>
      <?php
      elseif (isset($_SESSION['profil']) && ($_SESSION["profil"] == 15 || $_SESSION['profil'] == 16 || $_SESSION['typeCommercant'] == "ifc")) :
      ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1032.000000 242.000000" preserveAspectRatio="xMidYMid meet" style="height: 60px; width: 100%;">

          <g transform="translate(0.000000,242.000000) scale(0.100000,-0.100000)" fill="#3d61ff" stroke="none">
            <path d="M178 2391 c-62 -25 -104 -56 -139 -104 l-29 -40 0 -1117 0 -1116 284
          285 c157 157 294 298 306 314 l21 27 4729 0 c4403 0 4731 1 4780 17 56 18 141
          87 165 134 13 24 15 135 15 737 l0 709 -30 45 c-17 25 -48 58 -69 72 -87 60
          311 56 -5060 56 -4743 -1 -4928 -2 -4973 -19z m6532 -541 c20 -36 116 -204
          214 -374 98 -170 180 -315 183 -322 4 -11 -7 -14 -49 -14 l-54 0 -59 105 -60
          105 -245 -3 -245 -2 -60 -107 -60 -108 -54 0 c-41 0 -52 3 -48 14 4 11 196
          356 388 699 42 75 45 78 77 75 31 -3 39 -10 72 -68z m2615 -75 c70 -80 128
          -145 130 -145 1 0 58 65 126 145 l124 145 102 0 103 0 0 -390 0 -390 -100 0
          -100 0 -2 252 -3 251 -125 -142 -125 -142 -40 45 c-22 25 -78 88 -125 140
          l-85 93 -3 -248 -2 -249 -100 0 -100 0 0 390 0 390 99 0 98 0 128 -145z
          m-8537 -257 l2 -388 -100 0 -100 0 0 390 0 391 98 -3 97 -3 3 -387z m529 237
          l188 -154 5 152 5 152 100 0 100 0 3 -387 2 -388 -105 0 -105 0 0 115 0 115
          -182 151 -183 151 -3 -266 -2 -267 -103 3 -102 3 -3 375 c-1 206 0 381 3 387
          3 9 32 13 99 13 l95 0 188 -155z m1283 65 l0 -90 -145 0 -145 0 0 -300 0 -300
          -100 0 -100 0 0 300 0 300 -150 0 -150 0 0 90 0 90 395 0 395 0 0 -90z m778
          -2 l3 -88 -241 0 -240 0 0 -60 0 -60 238 -2 237 -3 -3 -50 c-1 -27 -5 -67 -8
          -87 l-6 -38 -229 0 -229 0 0 -65 0 -65 255 0 255 0 0 -85 0 -85 -355 0 -355 0
          0 390 0 390 338 -2 337 -3 3 -87z m772 82 c67 -13 117 -50 142 -107 28 -64 23
          -268 -8 -328 -18 -34 -66 -71 -115 -87 -7 -2 27 -56 75 -120 47 -64 86 -119
          86 -122 0 -3 -49 -6 -109 -6 l-110 0 -83 125 -83 124 -102 1 -103 0 0 -125 0
          -125 -105 0 -105 0 0 383 c0 211 3 387 7 390 10 11 555 8 613 -3z m1028 -57
          l3 -63 -306 0 -305 0 0 -74 c0 -40 3 -88 7 -106 l6 -33 299 6 298 7 0 -43 c0
          -23 -3 -52 -6 -64 l-6 -23 -294 0 -294 0 0 -165 0 -165 -50 0 -50 0 0 390 0
          390 283 3 c155 1 311 3 347 2 l65 0 3 -62z m822 49 c24 -12 43 -33 60 -67 23
          -46 25 -61 25 -185 0 -125 -2 -138 -25 -180 -21 -37 -38 -51 -88 -77 -2 -1 24
          -55 57 -121 34 -65 61 -122 61 -125 0 -4 -25 -7 -56 -7 l-55 0 -59 125 -59
          125 -226 0 -225 0 0 -125 0 -125 -43 0 -44 0 -6 173 c-9 224 -9 592 0 600 3 4
          151 7 327 7 286 0 325 -2 356 -18z m1873 -15 c53 -31 86 -86 87 -143 0 -35 0
          -35 -137 -50 -59 -6 -63 -5 -63 14 0 11 -7 23 -16 26 -23 9 -327 7 -342 -2 -9
          -7 -12 -55 -10 -208 l3 -199 178 -3 177 -2 10 25 c10 25 12 26 72 19 124 -13
          133 -16 130 -49 -9 -84 -56 -144 -129 -164 -22 -6 -138 -11 -268 -11 -202 0
          -235 3 -270 19 -95 43 -104 75 -107 368 -3 231 -2 239 20 285 26 53 69 84 134
          98 24 5 142 8 263 7 l220 -2 48 -28z m910 3 c20 -13 46 -43 59 -65 22 -39 23
          -47 23 -296 l0 -255 -28 -43 c-49 -74 -86 -84 -327 -89 -237 -5 -298 3 -353
          49 -58 48 -67 94 -67 348 0 120 5 233 11 254 12 46 64 99 110 114 22 7 123 11
          285 10 249 -2 251 -2 287 -27z" />
            <path d="M6551 1626 c-45 -79 -81 -147 -81 -150 0 -3 77 -6 170 -6 94 0 170 2
          170 6 0 9 -162 284 -170 289 -5 3 -45 -60 -89 -139z" />
            <path d="M3740 1645 l0 -85 183 2 182 3 3 70 c2 57 0 72 -14 82 -13 9 -66 13
          -186 13 l-168 0 0 -85z" />
            <path d="M5508 1783 l-98 -4 0 -140 0 -140 276 3 c329 4 304 -8 304 143 0 147
          10 140 -207 141 -98 0 -222 -1 -275 -3z" />
            <path d="M8395 1731 l-100 -6 -3 -195 c-2 -174 -1 -196 15 -207 12 -9 64 -13
          174 -13 130 0 160 3 173 16 24 24 24 375 0 395 -19 16 -108 19 -259 10z" />
            <path d="M10056 419 c-18 -14 -26 -30 -26 -51 0 -21 -6 -31 -20 -35 -11 -3
          -20 -14 -20 -24 0 -12 7 -19 20 -19 19 0 20 -7 20 -95 l0 -95 30 0 30 0 0 95
          c0 88 1 95 20 95 13 0 20 7 20 20 0 14 -7 20 -21 20 -30 0 -23 54 9 58 16 3
          22 10 22 28 0 20 -5 24 -29 24 -15 0 -40 -9 -55 -21z" fill="#000000" />
            <path d="M7700 415 c-18 -21 -5 -45 25 -45 14 0 28 7 31 15 7 17 -12 45 -31
          45 -7 0 -18 -7 -25 -15z" fill="#000000" />
            <path d="M9290 415 c-18 -21 -5 -45 25 -45 14 0 28 7 31 15 7 17 -12 45 -31
          45 -7 0 -18 -7 -25 -15z" fill="#000000" />
            <path d="M6700 260 l0 -160 83 0 c92 0 126 13 145 54 16 33 9 68 -18 94 -20
          19 -20 19 0 37 11 10 20 30 20 44 0 62 -53 91 -167 91 l-63 0 0 -160z m161 88
          c22 -34 -6 -68 -57 -68 -34 0 -34 0 -34 46 l0 47 41 -6 c23 -3 46 -11 50 -19z
          m-3 -120 c17 -17 15 -65 -4 -72 -9 -3 -31 -6 -50 -6 -34 0 -34 0 -34 45 l0 45
          38 0 c21 0 43 -5 50 -12z" fill="#000000" />
            <path d="M7330 261 l0 -161 35 0 36 0 -3 158 -3 157 -32 3 -33 3 0 -160z" fill="#000000" />
            <path d="M8480 364 c0 -17 -6 -28 -20 -31 -11 -3 -20 -14 -20 -24 0 -12 7 -19
          20 -19 18 0 20 -7 20 -83 0 -95 7 -107 62 -107 31 0 38 4 38 19 0 10 -9 21
          -20 24 -18 5 -20 14 -20 76 0 64 2 71 20 71 13 0 20 7 20 20 0 13 -7 20 -20
          20 -16 0 -20 7 -20 30 0 27 -3 30 -30 30 -26 0 -30 -4 -30 -26z" fill="#000000" />
            <path d="M7505 327 c-38 -18 -55 -54 -55 -118 0 -42 5 -55 29 -80 40 -39 109
          -41 146 -4 14 13 25 31 25 40 0 22 -42 19 -63 -5 -37 -43 -77 -12 -77 59 0 26
          5 52 12 59 19 19 56 14 68 -8 13 -23 60 -28 60 -6 0 8 -10 27 -22 41 -28 31
          -81 41 -123 22z" fill="#000000" />
            <path d="M7863 330 c-48 -19 -74 -100 -53 -164 15 -47 44 -66 100 -66 48 0 78
          21 93 63 5 14 1 17 -23 17 -17 0 -30 -5 -30 -10 0 -6 -12 -16 -26 -22 -23 -11
          -29 -10 -45 11 -23 29 -25 93 -3 115 21 22 51 20 66 -4 8 -12 24 -20 40 -20
          26 0 26 1 16 30 -17 49 -80 72 -135 50z" fill="#000000" />
            <path d="M8091 328 c-13 -7 -31 -23 -39 -35 -14 -22 -13 -23 14 -23 16 0 37 7
          47 14 21 16 53 10 61 -11 10 -24 -3 -33 -43 -33 -53 0 -91 -31 -91 -74 0 -19
          8 -40 18 -49 22 -20 92 -23 110 -5 9 9 12 9 12 0 0 -7 14 -12 31 -12 l31 0 -4
          95 c-3 79 -7 99 -25 116 -25 25 -90 34 -122 17z m87 -145 c2 -16 -4 -26 -22
          -34 -31 -15 -56 -6 -56 20 0 42 72 54 78 14z" fill="#000000" />
            <path d="M8366 325 c-9 -9 -17 -11 -21 -5 -3 5 -17 10 -31 10 l-24 0 0 -115 0
          -115 30 0 30 0 0 78 c0 83 9 102 47 102 19 0 23 5 23 30 0 23 -5 30 -19 30
          -11 0 -26 -7 -35 -15z" fill="#000000" />
            <path d="M8674 330 c-41 -16 -64 -59 -64 -117 0 -47 4 -59 29 -84 25 -24 38
          -29 79 -29 61 0 105 28 84 53 -12 14 -16 14 -42 -1 -27 -15 -32 -16 -57 -2
          -15 9 -29 23 -31 33 -3 15 6 17 72 17 73 0 76 1 76 24 0 85 -70 137 -146 106z
          m74 -52 c25 -25 13 -38 -33 -38 -49 0 -50 1 -35 31 12 21 50 25 68 7z" fill="#000000" />
            <path d="M8903 328 c-54 -27 -68 -140 -25 -197 17 -22 27 -26 71 -26 43 1 51
          -2 51 -17 0 -29 -43 -43 -80 -28 -27 11 -33 11 -41 -1 -13 -21 -11 -25 16 -37
          45 -21 109 -15 139 13 26 24 26 26 26 160 l0 135 -37 0 c-21 -1 -51 1 -68 4
          -16 3 -40 0 -52 -6z m95 -107 c3 -64 -4 -80 -35 -81 -24 0 -53 39 -53 73 0 46
          25 79 58 75 26 -3 27 -6 30 -67z" fill="#000000" />
            <path d="M9192 324 c-12 -8 -22 -10 -22 -5 0 6 -11 11 -25 11 l-25 0 0 -115 0
          -115 30 0 30 0 0 84 c0 88 4 96 51 96 14 0 19 7 19 30 0 35 -21 40 -58 14z" fill="#000000" />
            <path d="M9450 333 c-30 -12 -50 -37 -50 -62 0 -39 13 -52 71 -71 39 -14 54
          -24 54 -37 0 -24 -62 -32 -71 -9 -7 18 -64 22 -64 6 0 -6 11 -22 25 -35 35
          -36 115 -36 150 0 47 46 28 86 -54 112 -62 21 -74 38 -37 54 22 10 29 9 45 -5
          11 -10 31 -16 47 -14 l28 3 -25 28 c-24 28 -85 44 -119 30z" fill="#000000" />
            <path d="M9684 326 c-63 -28 -77 -144 -25 -197 25 -24 38 -29 78 -29 61 0 98
          22 83 50 -10 18 -12 18 -40 2 -27 -15 -32 -16 -57 -2 -15 9 -29 23 -31 33 -3
          15 6 17 74 17 l77 0 -7 43 c-12 76 -82 115 -152 83z m86 -55 c15 -30 14 -31
          -35 -31 -30 0 -45 4 -45 13 0 37 62 51 80 18z" fill="#000000" />
            <path d="M10247 323 c-11 -11 -17 -13 -17 -5 0 7 -13 12 -30 12 l-30 0 0 -115
          0 -115 30 0 30 0 0 78 c0 83 9 102 47 102 19 0 23 5 23 30 0 35 -25 41 -53 13z" fill="#000000" />
            <path d="M6970 321 c0 -5 18 -59 39 -119 36 -100 38 -111 25 -131 -8 -11 -22
          -21 -30 -21 -10 0 -14 -8 -12 -22 2 -19 9 -23 32 -21 16 1 35 8 42 15 10 10
          114 289 114 305 0 2 -14 3 -32 1 -30 -3 -33 -7 -53 -73 l-22 -70 -22 73 c-21
          68 -23 72 -51 72 -17 0 -30 -4 -30 -9z" fill="#000000" />
            <path d="M7690 215 l0 -115 30 0 30 0 0 115 0 115 -30 0 -30 0 0 -115z" fill="#000000" />
            <path d="M9290 215 l0 -115 30 0 30 0 0 115 0 115 -30 0 -30 0 0 -115z" fill="#000000" />
            <path d="M9884 146 c-11 -28 4 -48 33 -44 22 2 28 8 28 28 0 20 -6 26 -28 28
          -18 2 -29 -2 -33 -12z" fill="#000000" />
          </g>
        </svg>
      <?php
      else :
      ?>

        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" id="svg10" style="height: 60px; width: 100%;" viewBox="0 0 1150 552" sodipodi:docname="logo_icg.svg" inkscape:version="1.0.2-2 (e86c870879, 2021-01-15)">
          <metadata id="metadata16">
            <rdf:RDF>
              <cc:Work rdf:about="">
                <dc:format>image/svg+xml</dc:format>
                <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                <dc:title></dc:title>
              </cc:Work>
            </rdf:RDF>
          </metadata>
          <defs id="defs14" />
          <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1920" inkscape:window-height="1017" id="namedview12" showgrid="false" inkscape:zoom="1.0773913" inkscape:cx="575" inkscape:cy="276" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="g18" />
          <g inkscape:groupmode="layer" inkscape:label="Image" id="g18">
            <image width="1150" height="552" preserveAspectRatio="none" xlink:href="data:image/png;base64,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" id="image20" />
          </g>
        </svg>

      <?php
      endif;
      ?>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div id="menuContact">
        <?php if ((!$IFC && !$ifc && !$logista && !$aleda) || isset($_SESSION['profil']) && ($_SESSION['profil'] != 15 && $_SESSION['profil'] != 16 && $_SESSION['profil'] != 17 && $_SESSION['profil'] != 18 && $_SESSION['profil'] != 19 && $_SESSION['profil'] != 20 && $_SESSION['profil'] != 21)) : ?>
          <span>0899 252 272</span> (0,30€ / min)
          <div id="menuContactMail"><a href="/contact<?php if ($b) echo '?b=1' ?>">&#9993; Contact</a></div>
        <?php elseif ($IFC || $ifc || isset($_SESSION['profil']) && ($_SESSION['profil'] == 16)) : ?>
          <span>Assistance téléphonique : 04 91 91 81 76</span>
        <?php elseif ($logista || $aleda || isset($_SESSION['profil']) && ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20  || $_SESSION['profil'] == 21 || $_SESSION['profil'] == 15)) : ?>
          <span>Assistance téléphonique : 02 56 02 82 51</span>
        <?php endif; ?>
        <?php
        if (isset($_SESSION['login']) && isset($_SESSION['autorizationLevel'])) {
          if ($_SESSION['autorizationLevel'] == "Buraliste") {
            $commercant = "Commercant";
          } else {
            $commercant = $_SESSION['autorizationLevel'];
          }
          echo '<div id="disconnectDiv" onclick="disconnect(' . $_SESSION['profil'] . ')">Bonjour ' . $_SESSION['login'] . ' (' . $commercant . ') | Déconnexion</div>';
        }
        ?>

      </div>
      <ul class='stroke ml-auto'>
        <li style="margin-top: 10px" <?php if (!$b) echo 'class="d-none"' ?> class="cgb">
          <a href="https://www.icicartegrise.fr/demarche?b=1">MA CARTE GRISE EN LIGNE</a>
        </li>
        <li style="margin-top: 10px" <?php if (!$b) echo 'class="d-none"' ?> class="cgb">
          <a href="https://carte-grise-brest.fr#nous-trouver">MA CARTE GRISE EN AGENCE</a>
        </li>
        <li <?php if ($b) echo 'class="d-none"' ?>>
          <?php if (isset($_SESSION['profil']) && ($_SESSION['profil'] != "16") || !isset($_SESSION['profil'])) : ?>
            <a href="/faq">FAQ</a>
          <?php endif; ?>
        </li>
        <li <?php if ($b) echo 'class="d-none"' ?>>
          <?php if (isset($_SESSION['profil']) && ($_SESSION['profil'] != "16") || !isset($_SESSION['profil'])) : ?>
            <a href="/doc">PIÈCES À FOURNIR</a>
          <?php endif; ?>
        </li>
        <li <?php if (!$b) echo 'class="d-none"' ?> style="margin-top:10px">
          <a href='https://carte-grise-brest.fr/doc'>PIÈCES À FOURNIR</a>
        </li>
        <?php if (!$logista && !$aleda && !$ifc && isset($_SESSION['profil']) && ($_SESSION['profil'] != 15 && $_SESSION['profil'] != 16 && $_SESSION['profil'] != 17 && $_SESSION['profil'] != 18 && $_SESSION['profil'] != 19 && $_SESSION['profil'] != 20) || !isset($_SESSION['profil'])) : ?>
          <br class="br__align">
          <li class="menuLienBlanc" <?php if ($b) echo 'class="d-none"' ?>>
            <a href="/suivreMaCarteGrise">Suivi carte grise</a>
          </li>
        <?php endif; ?>
        <?php
        if (!(isset($_SESSION['profil']) && ($_SESSION['profil'] == "1" || $_SESSION['profil'] == "2"))) {

          if (!$b) {
            echo '<li class="menuLienBlanc">';
          }
          if (isset($_SESSION['login']) && $_SESSION['login'] != "") {
            echo '<a href="/backoffice">Gestionnaire carte grise</a>';
          } else {
            if ($IFC || $ifc) {
              echo '<a href="/ifc/login/">Accès partenaires</a>';
            } else if ($logista) {
              echo '<a href="/logista/login/">Accès partenaires</a>';
            } else if ($aleda) {
              echo '<a href="/aleda/login/">Accès partenaires</a>';
            } else {
              echo '<a href="/login">Accès partenaires</a>';
            }

            echo '</li>';
          }
        }

        if (!$b && !$IFC && !$ifc && !$logista && !$aleda && isset($_SESSION['profil']) && ($_SESSION['profil'] != "24" && $_SESSION['profil'] != 18) || !isset($_SESSION['profil'])) {
          if (parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) == "/demarche/bleu/" || parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) == "/demarche/jaune/" || parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) == "/demarche/pro/") {
            echo "    <li class='menuLienRose'>
                            <a href='" . $_SERVER["REQUEST_URI"] . "' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire une carte grise</a>
                          </li>";
          } else if (isset($_SESSION['profil']) && ($_SESSION['profil'] == "18" || ($_SESSION['profil'] == "12" && $_SESSION['qrcode'] != 1) || ($_SESSION['profil'] == "14" && $_SESSION['qrcode'] != 1) || ($_SESSION['profil'] == "23" && $_SESSION['qrcode'] != 1))) {
            echo "    <li class='menuLienRose'>
                            <a href='/demarche' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire une carte grise</a>
                          </li>";
          } else if (isset($_SESSION['profil']) && ($_SESSION['profil'] == "15" || $_SESSION['profil'] == "17" || $_SESSION['profil'] == "19")) {
            echo '';
          } else if (isset($_SESSION['profil']) && ($_SESSION['profil'] == 12 || ($_SESSION['profil'] == "12" && $_SESSION['qrcode'] == 1))) {
            echo "  <li class='menuLienRose'>
                         <a href='/demarchePartenaires/bleu/' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire une carte grise</a>
                        </li>";
          } else if (isset($_SESSION['profil']) && ((($_SESSION['profil'] == 14) && $_SESSION['qrcode'] == 1) || ($_SESSION['profil'] == "11") || (($_SESSION['profil'] == "23") && $_SESSION['qrcode'] == 1))) {
            echo "  <li class='menuLienRose'>
                         <a href='/demarchePartenaires/jaune/' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire une carte grise</a>
                        </li>";
          } else {
            if (isset($_SESSION['profil']) && ($_SESSION['profil'] != "16" && $_SESSION['profil'] != "24") || !isset($_SESSION['profil'])) :
              if (isset($_SESSION['profil']) && ($_SESSION['profil'] == "22")) :

                echo "<li class='menuLienRose'>
                            <a href='/demarche/pro' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire ma carte grise</a>
                          </li>";
              elseif (!(isset($_SESSION['profil'])) || $_SESSION['profil'] == "1") :
                echo "<li class='menuLienRose'>
                        <a href='/demarcheCarteGrise' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire ma carte grise</a>
                      </li>";
              else :
                echo "<li class='menuLienRose'>
                        <a href='/demarche' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire ma carte grise</a>
                      </li>";
              endif;
            endif;
          }
        } else if (($IFC || $ifc) && !isset($_SESSION['profil'])) {
          echo "<li class='menuLienRose'>
                <a href='/ifc/login/' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire ma carte grise</a>
              </li>";
        } else if ($logista && !isset($_SESSION['profil'])) {
          echo "<li class='menuLienRose'>
                <a href='/logista/login/' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire une carte grise</a>
              </li>";
        } else if (($aleda) && !isset($_SESSION['profil'])) {
          echo "<li class='menuLienRose'>
                <a href='/aleda/login/' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire une carte grise</a>
              </li>";
        } else if (($logista || $aleda || $ifc) && isset($_SESSION['profil'])) {
          echo "<li class='menuLienRose'>
                  <a href='/demarche' id='aFaireMaCG'><i class='fal fa-shopping-cart'></i> Faire ma carte grise</a>
                </li>";
        }


        if (isset($_SESSION['profil']) && ($_SESSION['profil'] == "1" || $_SESSION['profil'] == "2"))
          echo '<li class="menuLienBlanc" id="menulienblanc__id"><a href="/backoffice">Back Office</a></li>';

        if (isset($_SESSION['profil']) && ($_SESSION['profil'] == 1 && $_SESSION['login'] == "EquipeDeDevICG"))
          echo '<li class="menuLienBlanc" id="menulienblanc__id"><a href="/backoffice/coinDesDevs">Coin des Devs</a></li>';
        ?>

      </ul>
      <div class="conteneurRowSignalement" style="display: none;">
        <link rel="stylesheet" href="/css/signalementBug.css?v=<?php echo time(); ?>" />
        <?php if (isset($_SESSION['profil']) && ($_SESSION['profil'] == 1)) : ?>
          <div>
            <svg onclick="if($('#signalementBug').is(':visible')){$('#signalementBug').hide()}else{$('#signalementBug').css('display','flex');if($('#centreNotifications').is(':visible')){$('#centreNotifications').hide();$('#divNotificationsSVGOuvert').hide();$('#divNotificationsSVGFerme').show()}}" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="curseur">
              <path d="M1.01272 11.9195L0.0190286 12.0317L1.01272 11.9195C1.02538 12.0317 1.04017 12.0984 1.10073 12.3524C2.75599 19.294 8.63623 21.9135 11.1562 22.7299C11.5879 22.8698 11.6901 22.9009 12 22.9009C12.3099 22.9009 12.4121 22.8698 12.8438 22.7299C15.3638 21.9135 21.244 19.294 22.8993 12.3524C22.9598 12.0984 22.9746 12.0317 22.9873 11.9195C22.9997 11.8098 23.0002 11.7239 22.9973 11.4102C22.9533 6.70449 22.3475 4.2723 20.9089 2.9142C19.4531 1.5397 16.8733 0.999999 12 0.999999C7.1267 0.999999 4.54693 1.53969 3.09106 2.9142C1.65255 4.2723 1.04666 6.70448 1.00268 11.4102C0.999753 11.7239 1.00034 11.8098 1.01272 11.9195Z" stroke="#212135" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M13 7C13 6.44772 12.5523 6 12 6C11.4477 6 11 6.44772 11 7V13C11 13.5523 11.4477 14 12 14C12.5523 14 13 13.5523 13 13V7ZM12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15Z" fill="#CF0B5D" />
            </svg>
          </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['profil']) && ($_SESSION['profil'] == 1 && $_SESSION['login'] == "EquipeDeDevICG")) : ?>
          <div id="divNotificationsSVGOuvert" style="display:none">
            <svg onclick="if($('#centreNotifications').is(':visible')){$('#centreNotifications').hide(); $('#divNotificationsSVGFerme').show(); $('#divNotificationsSVGOuvert').hide();}else{$('#centreNotifications').css('display','flex');if($('#signalementBug').is(':visible')){$('#signalementBug').hide()}}" width="35" height="35" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="curseur">
              <path d="M9 24.3191C11.0359 25.6304 14.0359 24.9708 15 23" stroke="#CF0B5D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M22.5132 11C22.5132 7.5 20.0132 5 16.5132 5" stroke="#CF0B5D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M26.5132 11C26.5132 5 22.5132 1 16.5132 1" stroke="#CF0B5D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.6374 4.16762C7.63379 4.15073 7.62973 4.13385 7.62521 4.11698C7.48226 3.58351 6.93393 3.26693 6.40046 3.40987C5.867 3.55281 5.55041 4.10115 5.69336 4.63462C5.69788 4.65149 5.7028 4.66815 5.70812 4.68458C2.5994 6.01706 0.531122 10.4689 2.09775 14.3979C2.67875 15.5729 2.07314 16.4402 1.4428 17.3429C0.847156 18.1959 0.229432 19.0806 0.56996 20.2864C1.02444 21.9825 2.23642 22.6429 3.77682 22.7188C3.77682 22.7188 6.64036 23.0158 11.3181 21.7624C15.9958 20.509 18.3272 18.82 18.3272 18.82C19.6233 17.9841 20.3304 16.7594 19.8882 15.1101C19.561 13.8895 18.5841 13.4319 17.6469 12.9928C16.6538 12.5276 15.7053 12.0832 15.6209 10.7744C15.0131 6.58843 10.9959 3.76711 7.6374 4.16762ZM4.1466 16.5282C4.42863 15.6233 4.41337 14.6232 3.93254 13.5985C3.34726 12.0801 3.48734 10.4221 4.12752 9.02924C4.78946 7.58908 5.87315 6.65697 6.90556 6.38034L7.44841 6.23488C8.48081 5.95825 9.88538 6.22364 11.1787 7.13988C12.4295 8.02599 13.3798 9.39183 13.6322 10.9994C13.7275 12.1211 14.2073 12.9937 14.9021 13.6381C15.505 14.1972 16.2334 14.5389 16.6796 14.7482L16.7134 14.7641C17.8349 15.2906 17.8961 15.4028 17.9564 15.628C18.0694 16.0492 18.0115 16.2842 17.9423 16.4348C17.859 16.6161 17.6658 16.8667 17.2432 17.1392L17.1977 17.1686L17.1603 17.1957L17.1575 17.1976C17.1498 17.203 17.1333 17.2144 17.1078 17.2314C17.0569 17.2654 16.9703 17.3216 16.8482 17.3961C16.6039 17.5452 16.2174 17.767 15.6883 18.0294C14.6305 18.5539 13.0021 19.2407 10.8004 19.8306C8.59884 20.4205 6.84523 20.6399 5.66684 20.7146C5.07748 20.752 4.63176 20.7531 4.34572 20.7462C4.2027 20.7427 4.09964 20.7372 4.03853 20.7333C4.00797 20.7313 3.98792 20.7297 3.97861 20.7289L3.97528 20.7286L3.92927 20.7238L3.87513 20.7212C3.34923 20.6953 3.06376 20.5772 2.91298 20.4717C2.79505 20.3891 2.62378 20.2239 2.50181 19.7688L2.49833 19.7558L2.49468 19.7429C2.44058 19.5513 2.41677 19.4432 3.13547 18.4122L3.15707 18.3812L3.15707 18.3812C3.4404 17.9751 3.90178 17.3137 4.1466 16.5282Z" fill="#212135" />
            </svg>
          </div>

          <div id="divNotificationsSVGFerme">
            <svg id="svgPasNotif" onclick="if($('#centreNotifications').is(':visible')){$('#centreNotifications').hide()}else{$('#centreNotifications').css('display','flex'); $('#divNotificationsSVGFerme').hide(); $('#divNotificationsSVGOuvert').show(); if($('#signalementBug').is(':visible')){$('#signalementBug').hide()}}" width="35" height="35" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="curseur">
              <path d="M7 21C8.5 22.3333 11.5 22.3333 13 21" stroke="#CF0B5D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9987 1.05208C10.9996 1.03483 11 1.01747 11 1C11 0.447715 10.5523 0 10 0C9.44771 0 9 0.447715 9 1C9 1.01748 9.00045 1.03486 9.00134 1.05212C5.65368 1.53463 2.50369 5.29948 3.00005 9.5C3.25713 10.7854 2.44768 11.4664 1.60517 12.1752C0.809054 12.845 -0.0165819 13.5396 0.000253188 14.7925C0.000253188 16.5484 1.00001 17.5 2.4683 17.9719C2.4683 17.9719 5.15739 19 10.0001 19C14.8429 19 17.532 17.9719 17.532 17.9719C19.0002 17.5 20.0002 16.5 20 14.7925C19.9998 13.5288 19.1747 12.8339 18.383 12.1672C17.5442 11.4609 16.743 10.7861 17.0002 9.5C17.4966 5.29938 14.3464 1.53444 10.9987 1.05208ZM4.42771 12.088C4.93433 11.287 5.17843 10.317 4.97921 9.20278C4.80686 7.5846 5.3713 6.0193 6.35016 4.83963C7.36228 3.61987 8.6503 3 9.71912 3H10.2811C11.35 3 12.638 3.61987 13.6501 4.83963C14.6289 6.01928 15.1934 7.58455 15.0211 9.2027C14.8228 10.3108 15.0604 11.2779 15.5647 12.0801C16.0023 12.7762 16.6175 13.2948 16.9944 13.6125L17.0229 13.6365C17.97 14.4354 18 14.5596 18 14.7927C18.0001 15.2288 17.8834 15.4409 17.7775 15.5684C17.6501 15.722 17.3987 15.914 16.92 16.0679L16.8684 16.0844L16.8252 16.1009L16.822 16.1021C16.8132 16.1053 16.7943 16.112 16.7653 16.1218C16.7073 16.1415 16.6091 16.1734 16.4719 16.2138C16.1974 16.2945 15.7666 16.4088 15.1876 16.5252C14.0301 16.7581 12.2794 17 10.0001 17C7.72086 17 5.97019 16.7581 4.81263 16.5252C4.23369 16.4088 3.80287 16.2945 3.52836 16.2138C3.39111 16.1734 3.29297 16.1415 3.23497 16.1218C3.20598 16.112 3.18702 16.1053 3.17823 16.1021L3.17509 16.101L3.13188 16.0844L3.08028 16.0678C2.57899 15.9067 2.33382 15.7188 2.21549 15.5778C2.12294 15.4676 2.00025 15.2637 2.00025 14.7925V14.779L2.00007 14.7656C1.9974 14.5665 2.00237 14.4559 2.96343 13.6461L2.9923 13.6218L2.99231 13.6218C3.3711 13.3028 3.98794 12.7834 4.42771 12.088Z" fill="#212135" />
            </svg>
            <svg style="display:none" id="svgNotif" onclick="if($('#centreNotifications').is(':visible')){$('#centreNotifications').hide()}else{$('#centreNotifications').css('display','flex'); $('#divNotificationsSVGFerme').hide(); $('#divNotificationsSVGOuvert').show(); if($('#signalementBug').is(':visible')){$('#signalementBug').hide()}}" width="35" height="35" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="curseur">
              <path d="M7 21C8.5 22.3333 11.5 22.3333 13 21" stroke="#CF0B5D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9987 1.05208C10.9996 1.03483 11 1.01747 11 1C11 0.447715 10.5523 0 10 0C9.44771 0 9 0.447715 9 1C9 1.01748 9.00045 1.03486 9.00134 1.05212C5.65368 1.53463 2.50369 5.29948 3.00005 9.5C3.25713 10.7854 2.44768 11.4664 1.60517 12.1752C0.809054 12.845 -0.0165819 13.5396 0.000253188 14.7925C0.000253188 16.5484 1.00001 17.5 2.4683 17.9719C2.4683 17.9719 5.15739 19 10.0001 19C14.8429 19 17.5319 17.9719 17.5319 17.9719C19.0002 17.5 20.0002 16.5 20 14.7925C19.9998 13.5288 19.1747 12.8339 18.383 12.1672C17.5442 11.4609 16.743 10.7861 17.0002 9.5C17.0894 8.74479 17.0608 8.00366 16.9344 7.29316C16.416 7.73083 15.7473 7.99597 15.0167 7.99995C15.0611 8.39404 15.0643 8.7967 15.0211 9.2027C14.8228 10.3108 15.0604 11.2779 15.5647 12.0801C16.0023 12.7762 16.6175 13.2948 16.9944 13.6125L17.0229 13.6365C17.97 14.4354 18 14.5596 18 14.7927C18.0001 15.2288 17.8833 15.4409 17.7775 15.5684C17.6501 15.722 17.3987 15.914 16.92 16.0679L16.8684 16.0844L16.8252 16.1009L16.822 16.1021C16.8132 16.1053 16.7943 16.112 16.7653 16.1218C16.7073 16.1415 16.6091 16.1734 16.4719 16.2138C16.1974 16.2945 15.7666 16.4088 15.1876 16.5252C14.0301 16.7581 12.2794 17 10.0001 17C7.72086 17 5.97019 16.7581 4.81263 16.5252C4.23369 16.4088 3.80287 16.2945 3.52836 16.2138C3.39111 16.1734 3.29297 16.1415 3.23497 16.1218C3.20598 16.112 3.18702 16.1053 3.17823 16.1021L3.17509 16.101L3.13188 16.0844L3.08028 16.0678C2.57899 15.9067 2.33382 15.7188 2.21549 15.5778C2.12294 15.4676 2.00025 15.2637 2.00025 14.7925V14.779L2.00007 14.7656C1.9974 14.5665 2.00237 14.4559 2.96343 13.6461L2.9923 13.6218L2.99231 13.6218C3.3711 13.3028 3.98794 12.7834 4.42771 12.088C4.93433 11.287 5.17843 10.317 4.97921 9.20278C4.80686 7.5846 5.3713 6.0193 6.35016 4.83963C7.36228 3.61987 8.6503 3 9.71912 3H10.2811C10.9172 3 11.6309 3.21955 12.3179 3.65443C12.6321 3.02945 13.1583 2.52941 13.8021 2.24871C12.9423 1.61603 11.979 1.19333 10.9987 1.05208Z" fill="#212135" />
              <circle cx="15" cy="5" r="2" fill="#CF0B5D" />
            </svg>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </div>

</nav>
<?php if (isset($_SESSION['profil']) && ($_SESSION['profil'] == 1)) : ?>

  <div id="signalementBug" class="conteneurColonneSignalement">
    <span class="couleurTitre">Signaler un Bug</span>
    <div class="conteneurRowSignalement gapBox">
      <div class="conteneurColonneSignalement tailleDivTexte">
        <div class="conteneurColonneSignalement">
          <label for="titreSignalement" class="taillePolice noMarginLabel">Titre du problème</label>
          <input id="titreSignalement" type="text" class="contourTexte">
        </div>
        <div class="conteneurColonneSignalement">
          <label for="descriptionSignalement" class="taillePolice noMarginLabel">Description du problème</label>
          <textarea id="descriptionSignalement" type="text" class="contourTexte" style="height:70px" maxlength="150"></textarea>
        </div>
      </div>
      <div id="divUrgence" class="conteneurColonneSignalement gapBouton tailleBox">
        <span class="taillePolice">Urgence</span>
        <div id="selectUrgenceSignalement" class="conteneurColonneSignalement">

          <div id="aSelectionner" class="conteneurRowSignalement alignementPoint">
            <div class="pointGris"></div><span class="taillePoliceNBold">Sélectionner</span>
          </div>
          <div id="urgentSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointRouge"></div><span class="taillePoliceNBold">Urgent</span>
          </div>
          <div id="attentionSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointJaune"></div><span class="taillePoliceNBold">Attention</span>
          </div>
          <div id="aSurveillerSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointBleu"></div><span class="taillePoliceNBold">À surveiller</span>
          </div>

          <div class="conteneurColonneSignalement curseur" id="choixUrgence">

            <div id="urgent" onclick="gestionUrgence(3)" class="conteneurRowSignalement alignementPoint">
              <div class="pointRouge"></div><span class="taillePoliceNBold">Urgent</span>
            </div>
            <div id="attention" onclick="gestionUrgence(2)" class="conteneurRowSignalement alignementPoint">
              <div class="pointJaune"></div><span class="taillePoliceNBold">Attention</span>
            </div>
            <div id="aSurveiller" onclick="gestionUrgence(1)" class="conteneurRowSignalement alignementPoint">
              <div class="pointBleu"></div><span class="taillePoliceNBold">À surveiller</span>
            </div>

          </div>
        </div>
      </div>
      <div class="conteneurColonneSignalement tailleBox ">
        <div id="selectOperateurSignalement" class="conteneurColonneSignalement">
          <span class="taillePolice">Opérateurs</span>
          <div id="clementSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointRouge"></div><span class="taillePoliceNBold">Clément</span>
          </div>
          <div id="jennaSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointRouge"></div><span class="taillePoliceNBold">Jenna</span>
          </div>
          <div id="amelieSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointRouge"></div><span class="taillePoliceNBold">Amélie</span>
          </div>
          <div id="axelSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointRouge"></div><span class="taillePoliceNBold">Axel</span>
          </div>
          <div id="maelleSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointRouge"></div><span class="taillePoliceNBold">Maëlle</span>
          </div>
          <div id="pierremarieSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointPierremarie"></div><span class="taillePoliceNBold">Pierre-Marie</span>
          </div>
          <div id="samySelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointSamy"></div><span class="taillePoliceNBold">Samy</span>
          </div>
          <div id="pierreSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointPierre"></div><span class="taillePoliceNBold">Pierre</span>
          </div>
          <div id="corentinSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointKyllian"></div><span class="taillePoliceNBold">Corentin</span>
          </div>
          <div id="lorenzoSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointLeo"></div><span class="taillePoliceNBold">Lorenzo</span>
          </div>
          <div id="kilianSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointKilian"></div><span class="taillePoliceNBold">Kilian</span>
          </div>
          <div id="cheunSelectionne" style="display:none" class="conteneurRowSignalement alignementPoint">
            <div class="pointCheun"></div><span class="taillePoliceNBold">Cheun</span>
          </div>

          <div id="Operateur" class="conteneurRowSignalement alignementPoint">
            <div class="pointGris"></div><span class="taillePoliceNBold">Sélectionner</span>
          </div>

          <div class="conteneurColonneSignalement curseur" id="choixOpérateur">
            <div id="Clement" onclick="gestionOperateur(1)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointRougeOperateur"></div><span class="tailleTextOperateur">Clément</span>
            </div>
            <div id="Jenna" onclick="gestionOperateur(3)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointRougeOperateur"></div><span class="tailleTextOperateur">Jenna</span>
            </div>
            <div id="Amelie" onclick="gestionOperateur(10)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointRougeOperateur"></div><span class="tailleTextOperateur">Amélie</span>
            </div>
            <div id="Axel" onclick="gestionOperateur(5)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointRougeOperateur"></div><span class="tailleTextOperateur">Axel</span>
            </div>
            <div id="Maelle" onclick="gestionOperateur(11)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointRougeOperateur"></div><span class="tailleTextOperateur">Maëlle</span>
            </div>
            <div id="Pierre" onclick="gestionOperateur(9)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointPierre"></div><span class="tailleTextOperateur">Pierre</span>
            </div>
            <div id="Pierremarie" onclick="gestionOperateur(6)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointPierremarie"></div><span class="tailleTextOperateur">Pierre-Marie</span>
            </div>
            <div id="Samy" onclick="gestionOperateur(6)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointSamy"></div><span class="tailleTextOperateur">Samy</span>
            </div>
            <div id="Corentin" onclick="gestionOperateur(7)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointCorentin"></div><span class="tailleTextOperateur">Corentin</span>
            </div>
            <div id="Lorenzo" onclick="gestionOperateur(8)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointLeo"></div><span class="tailleTextOperateur">Lorenzo</span>
            </div>
            <div id="Kilian" onclick="gestionOperateur(7)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointkilian"></div><span class="tailleTextOperateur">Kilian</span>
            </div>
            <div id="Cheun" onclick="gestionOperateur(8)" class="conteneurRowSignalement alignementPoint ">
              <div class="pointCheun"></div><span class="tailleTextOperateur">Cheun</span>
            </div>
          </div>
        </div>
      </div>
      <div class="conteneurColonneSignalement tailleBox gapBouton ">
        <div>
          <button type="button" class="bouton couleurRaz" onclick="remiseAZeroPopUp()">RAZ</button>
        </div>
        <div>
          <button type="button" class="bouton couleurSignaler" onclick="signalerBug()">SIGNALER</button>
        </div>
      </div>
    </div>
    <?php if ($_SESSION['profil'] === "1" && $_SESSION['login'] !== "EquipeDeDevICG") : ?>
      <hr>
      <span class="couleurTitre curseur" onclick="location.href='/backoffice/coinDesDevs/notifications.php'">Signalements</span>
      <div id="divInfoNotifSignalees" class="overflowCentreNotif">
      </div>
    <?php endif; ?>
  </div>

  <div id="centreNotifications" class="conteneurColonneSignalement centreNotifications">
    <span class="couleurTitre curseur" onclick="location.href='/backoffice/coinDesDevs/notifications.php'">Centre de notifications</span>
    <div id="divInfoNotif" class="overflowCentreNotif">
    </div>
  </div>

<?php endif; ?>

<!-- Cookies -->

<script type="text/javascript" src="/backoffice/coinDesDevs/cookie.js"></script>
<link rel="stylesheet" href="/backoffice/coinDesDevs/coinDesDevs.css?v=<?= time() ?>" />
<?php if (!$iframe) { ?>

  <div id="cookies" style="display: none;">

    <div id="croissantBox" class="wrapper" style="background-color: #fff;">

      <button id="buttonRefuser" class="buttonrefus" onclick="refuserCookies()" style="z-index: 19;">Continuer sans accepter</button>

      <div class="image">
        <img src="../../images/logo_accueil1cookie.png" alt="">

        <div class="content">

          <header>Gestion des cookies</header>

          <p id="titre">Ici Carte Grise</p>
        </div>
      </div>
      <p class="tex">Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site web.</p>
      <a id="poli" href="https://icicartegrise.fr/mentionsLegales/">Lire la politique de confidentialité</a>
      <div class="buttons">
        <button id="btn2" class="buttonGroup2" onclick="choixCookies()">Je choisis</button>
        <button id="buttonAccept" class="buttonGroup2" onclick="accepterCookies()">OK pour moi</button>
      </div>
    </div>

    <div id="croissantBox2" class="wrapper2">
      <img src="../../images/logo_accueil1cookie.png" alt="">
      <div class="content">
        <header></header>
        <div class="titre2">
          On vous présente nos cookies !
        </div>
        <p class="t">Sur ce site, nous utilisons des cookies pour mesurer notre audience, entretenir la relation avec vous
          et vous adresser de temps à autre du contenu qualitatif ainsi que de la publicité. Vous pouvez sélectionner ici
          ceux que vous autorisez à rester ici.
        </p>
        <div class="a0">
          <label onclick="AllowCookie(3)" for="tout">Tout cocher</label>
          <label class="switch" vue-toggle :toggled.sync="toggled_1">
            <input type="checkbox" id="tout" value="tout" name="tout">
            <span onclick="AllowCookie(3)" id="AllChecked" class="slider round checkAllowOff"></span>
          </label>
        </div>

        <div class="b2">
          <div class="l1" onclick="AllowCookie(1)">
            <div class="a1">
              <img src="../../images/googleAnalytics.png" alt="" style=" margin-right : 10px; margin-top : 0.2em; margin-bottom : auto; margin-left: 2em;">
              <label vue-toggle :toggled.sync="toggled_1"><a href="https://support.google.com/analytics/answer/6004245?hl=fr" target="blank">Google Analytics ?</a></label>
            </div>
            <label class="switch">
              <input type="checkbox" id="googleAnalytics">
              <span class="slider round checkAllowOff" id="gAnalytics" onclick="AllowCookie(1)"></span>
            </label>
          </div>

          <div class="l2">
            <div class="a2" onclick="AllowCookie(2)">
              <img src="../../images/inspectlet.png" alt="" style=" margin-right : 10px; margin-top : 0.2em; margin-bottom : auto; margin-left: 2em;">
              <label vue-toggle :toggled.sync="toggled_1"><a href="https://docs.inspectlet.com/hc/en-us/articles/212289268-What-cookies-does-Inspectlet-use-" target="blank">Inspectlet ?</a></label>
            </div>
            <label class="switch">
              <input type="checkbox" id="inspectlet">
              <span class="slider round checkAllowOff" id="inspectletC" onclick="AllowCookie(2)"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="butG">
        <button id="buttonretour" class="but" onclick="retourCookies()">Retour</button>
        <button id="buttonaccept2" class="but" onclick="acceptertoutCookies()">J'accepte tout</button>
        <button id="buttonterminer" class="but" onclick="terminerCookies()">Terminer</button>
      </div>

    </div>
  </div>
<?php
}
?>
<div id="maintenanceMode" style="display: none;">
  <div id="maintenanceModeTexte">
    <div id="maintenanceModeTitre">
      Mode Maintenance
    </div>
    <div id="maintenanceModePhrase">
      Nous sommes désolés pour le désagrément. <br>
      Notre site est actuellement en cours de maintenance, nous nous efforçons à faire de notre mieux pour revenir dans les plus brèves délais.
    </div>
    <div id="maintenanceModeRemerciements">
      Merci de votre compréhension et de votre confiance.
    </div>
  </div>
  <div id="maintenanceModeLogo">
    <img src="/images/maintenance_mode_ICG.png" alt="maintenanceMode Logo" id="logoMaintenanceMode">
  </div>
</div>
<script>
  var maintenanceMode = 0;

  // showOrHideMaintenanceMode();
  $(document).ready(function(e) {
    showOrHideCookie();
    showOrHideMaintenanceMode();
  });
  var clickHorsSignalementBug = 0;
  var clickHorsCentreNotifications = 0;
  $(document).click(function(event) {
    if (!$(event.target).closest('#signalementBug').length) {
      //Le clic s'est produit en dehors de l'élément monElement
      if ($('#signalementBug').is(':visible')) {
        if (clickHorsSignalementBug == 0) {
          clickHorsSignalementBug = 1;
        } else {
          $('#signalementBug').hide()
          clickHorsSignalementBug = 0;
        }
      }
    }


    if (!$(event.target).closest('#centreNotifications').length) {
      //Le clic s'est produit en dehors de l'élément monElement
      if ($('#centreNotifications').is(':visible')) {
        if (clickHorsCentreNotifications == 0) {
          clickHorsCentreNotifications = 1;
        } else {
          $('#centreNotifications').css('display', 'none')
          $('#divNotificationsSVGFerme').css('display', 'flex')
          $('#divNotificationsSVGOuvert').css('display', 'none')
          clickHorsCentreNotifications = 0;
        }
      }
    }
  });

  function showOrHideMaintenanceMode() {
    var dataTable = {
      "table": "evenements",
      "colonne": "description",
      "where": "WHERE idEvenement = 1",
    };

    formDataInfo = new FormData();

    formDataInfo.append('donneesRequete', JSON.stringify(dataTable));

    $.ajax({
      type: "POST",
      data: formDataInfo,
      url: "/php/GET/getChampDynamique.php",
      cache: false,
      contentType: false,
      processData: false,
      success: function(result) {
        if (result.trim() == 'true') {
          if (cookieFinder("maintenanceMode") === "adminMode") {
            // ADMIN MODE
            $('#maintenanceMode').css('display', 'none');
            $('html').css('overflow', 'visible');
          } else {
            // MAINTENANCE MODE ON
            $('#maintenanceMode').css('display', 'flex');
            $('html').css('overflow', 'hidden');
          }
        } else {
          // MAINTENANCE MODE OFF
          document.cookie = "maintenanceMode=false; expires= Tue, 31 Dec 2030 23:59:59 UTC; path=/";
          $('#maintenanceMode').css('display', 'none');
          $('html').css('overflow', 'visible');
        }
      },
      error: function(result) {}
    });
  }

  $('#maintenanceModeRemerciements').click(function() {
    maintenanceMode++;
  });

  $('#maintenanceModePhrase').click(function() {
    maintenanceMode = 0;
  });

  $('#maintenanceModeLogo').click(function() {
    maintenanceMode = 0;
  });

  $('#maintenanceModeTitre').click(function() {
    if (maintenanceMode === 3) {
      document.cookie = "maintenanceMode=adminMode; expires= Tue, 31 Dec 2030 23:59:59 UTC; path=/ ";
    } else {
      maintenanceMode = 0;
      document.cookie = "maintenanceMode=false; expires= Tue, 31 Dec 2030 23:59:59 UTC; path=/ ";
    }
    showOrHideMaintenanceMode();
  });

  function cookieFinder(name) {
    if (document.cookie.length > 0) {
      let tablecookie = document.cookie.split(';');
      let nomcookie = name + "=";
      let valeurcookie = "";
      for (i = 0; i < tablecookie.length; i++) {
        if (tablecookie[i].indexOf(nomcookie) != -1) {
          valeurcookie = tablecookie[i].substring(nomcookie.length + tablecookie[i].indexOf(nomcookie), tablecookie[i].length);
        }
      }
      return valeurcookie;
    }
  }
</script>