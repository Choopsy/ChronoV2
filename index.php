<!doctype html>
<?php
session_start();
if($_SESSION['profil'] == 16):
    header("Location: /backoffice", true, 303);
    die();
endif;

  if($_SESSION['profil'] == '' || $_SESSION['profil'] == null || $_SESSION['profil'] == 0 || $_SESSION['profil'] == 'undefined') {
    header('Location: /demarcheCarteGrise');
  };

?>
<html lang="fr">

<head>
    <title>Faire ma carte grise</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/radioButton.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/radio.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/accordeon.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/label_flottants.css?v=<?php echo time(); ?>" />
    <meta name="description" content="Faites votre carte grise en 2 min en ligne à partir de 19.90€">
    <meta property="og:description" content="Faites votre carte grise en 2 min en ligne à partir de 19.90€" />
    <link rel="stylesheet" href="../css/icicartegrise.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../css/demarche.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="/css/checkoutPopUp.css?v=<?php echo time(); ?>" />
    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url,'icg-dev') == false):
    if (strpos($url,'.digitics.fr') == false):
        ?>
        <script src="https://api.systempay.fr/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js" kr-public-key="47843500:publickey_vhiW2HuxPaen82DSOoKmYpy9lrLYuDQwl32nRUUUPrZfZ"> </script>

    <?php else:?>
        <script src="https://api.systempay.fr/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js" kr-public-key="47843500:testpublickey_onu4XXJTtzDQaV7u4Mxgs3E1wWcADAvASKRMvwr5Hpiul"> </script>
    <?php endif;?>
        <script src="https://api.systempay.fr/static/js/krypton-client/V4.0/ext/classic.js"></script>

    <?php endif;?>
</head>

<body id="demarche">
<div id="hideOtherContent" style="width:100vw;height:100vh;background:rgba(0,0,0,0.7);display:none;position:fixed;z-index:999"></div>
<?php

require_once('../templates/header.php');
require_once('../php/connexion.php');
require_once('../templates/navbar.php');
  if (isset($_COOKIE['aa9d42ff062eebe985d9b61c6aa03aa8338b5bfb'])) :
    setcookie('aa9d42ff062eebe985d9b61c6aa03aa8338b5bfb', "", time() - 1, '/', null, false, true);
  endif;
  if (isset($_COOKIE['0ed650fdbe3e47d8e77995ee1a9cdcdd8c1adb05'])) :
    setcookie('0ed650fdbe3e47d8e77995ee1a9cdcdd8c1adb05', "", time() - 1, '/', null, false, true);
  endif;
  if (isset($_COOKIE['eb22c3e25e5c46f04bebc580551d450b5974f8de'])) :
    setcookie('eb22c3e25e5c46f04bebc580551d450b5974f8de', "", time() - 1, '/', null, false, true);
  endif;
  if (isset($_COOKIE['105a54be3dd33429d250baf0ff08ffa1cd9016c1'])) :
    setcookie('105a54be3dd33429d250baf0ff08ffa1cd9016c1', "", time() - 1, '/', null, false, true);
  endif;
  if (isset($_COOKIE['fdf733a527913ddcea3e365902f7f2b2382e137c'])) :
    setcookie('fdf733a527913ddcea3e365902f7f2b2382e137c', "", time() - 1, '/', null, false, true);
  endif;
  if (isset($_COOKIE['fea1a04146ffe00c0acbe2cbc0d0b47cb2d8c3a9'])) :
    setcookie('fea1a04146ffe00c0acbe2cbc0d0b47cb2d8c3a9', "", time() - 1, '/', null, false, true);
  endif;
  if (isset($_COOKIE['a9ede8cf2dbde07432692d72187483bada4867da'])) :
    setcookie('a9ede8cf2dbde07432692d72187483bada4867da', "", time() - 1, '/', null, false, true);
  endif;
  ?>
  <script type="text/javascript" src="demarche.js?v=<?php echo time(); ?>"></script>
  <!-- <script type="text/javascript" src="newDemarche.js?v=<?php echo time(); ?>"></script> -->
  <div id="fondBloquant" class="popUp2">
      <div id="spinnerFondBloquant" ><img src="loading.svg" height="50px"width="50px" /></div>
  </div>


  <div id="popUpPaiementPlaqueImmatriculation" class="popUp">
      <div class="containerPopUpPaiement">
          <div id="bandeauDescriptionPaiement">
              <h3 id="titreDescriptionPaiement">
                  Votre transaction
              </h3>

              <div class="containerInformationsTransaction">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #aaaaaa"><path d="M19.148 2.971A2.008 2.008 0 0 0 17.434 2H6.566c-.698 0-1.355.372-1.714.971L2.143 7.485A.995.995 0 0 0 2 8a3.97 3.97 0 0 0 1 2.618V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.382A3.97 3.97 0 0 0 22 8a.995.995 0 0 0-.143-.515l-2.709-4.514zm.836 5.28A2.003 2.003 0 0 1 18 10c-1.103 0-2-.897-2-2 0-.068-.025-.128-.039-.192l.02-.004L15.22 4h2.214l2.55 4.251zM10.819 4h2.361l.813 4.065C13.958 9.137 13.08 10 12 10s-1.958-.863-1.993-1.935L10.819 4zM6.566 4H8.78l-.76 3.804.02.004C8.025 7.872 8 7.932 8 8c0 1.103-.897 2-2 2a2.003 2.003 0 0 1-1.984-1.749L6.566 4zM10 19v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.142c.321.083.652.142 1 .142a3.99 3.99 0 0 0 3-1.357c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357A3.99 3.99 0 0 0 18 12c.348 0 .679-.059 1-.142V19h-3z"></path></svg>
                  <div class="informationsTransaction">
                      <h4 class="titreInformationsTransaction">
                          Marchand
                      </h4>
                      <span class="contenuInformationsTransaction" id="nomMarchand">
                Ici Carte Grise
              </span>
                  </div>
              </div>

              <div class="containerInformationsTransaction">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #aaaaaa"><path d="M12 22c3.976 0 8-1.374 8-4V6c0-2.626-4.024-4-8-4S4 3.374 4 6v12c0 2.626 4.024 4 8 4zm0-2c-3.722 0-6-1.295-6-2v-1.268C7.541 17.57 9.777 18 12 18s4.459-.43 6-1.268V18c0 .705-2.278 2-6 2zm0-16c3.722 0 6 1.295 6 2s-2.278 2-6 2-6-1.295-6-2 2.278-2 6-2zM6 8.732C7.541 9.57 9.777 10 12 10s4.459-.43 6-1.268V10c0 .705-2.278 2-6 2s-6-1.295-6-2V8.732zm0 4C7.541 13.57 9.777 14 12 14s4.459-.43 6-1.268V14c0 .705-2.278 2-6 2s-6-1.295-6-2v-1.268z"></path></svg>            <div class="informationsTransaction">
                      <h4 class="titreInformationsTransaction">
                          Montant
                      </h4>
                      <span class="contenuInformationsTransaction" id="prixPlaqueSupplementaire">
              </span>
                  </div>
              </div>

              <div class="containerInformationsTransaction" id="blocIdTransaction">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #aaaaaa"><path d="M13.707 3.293A.996.996 0 0 0 13 3H4a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l8 8a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-8-8zM12 19.586l-7-7V5h7.586l7 7L12 19.586z"></path><circle cx="8.496" cy="8.495" r="1.505"></circle></svg>
                  <div class="informationsTransaction">
                      <h4 class="titreInformationsTransaction">
                          N° de transaction
                      </h4>
                      <span class="contenuInformationsTransaction" id="transactionIdUnique">
              </span>
                  </div>
              </div>

              <hr style="margin-top: 2rem;">

              <div id="containerBlocSecurite">
            <span id="titreBlocSecurite">
              100% Sécurisé
            </span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--rose-color)"><path d="M12 2C9.243 2 7 4.243 7 7v2H6c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v2H9V7zm9.002 13H13v-2.278c.595-.347 1-.985 1-1.722 0-1.103-.897-2-2-2s-2 .897-2 2c0 .736.405 1.375 1 1.722V20H6v-9h12l.002 9z"></path></svg>
              </div>

              <p id="paragrapheSecurite">
                  Nous vous garantissons une sécurité maximale grâce à la solution de cryptage la plus aboutie du marché. Dans le cadre de la lutte anti-fraude, nous utilisons le paiement 3D Secure sur les commandes passés par CB, VISA et MASTER CARD.
              </p>

              <img src="/images/systempay.png" alt="Logo de la société Systempay" id="logoSystempay" />

          </div>
          <div id="containerSaisieCb">
              <i id="croix" onclick="$('#popUpPaiementPlaqueImmatriculation').hide();$('body').css('overflow','');" class="fas fa-times boutonFermerPopUp croix"></i>
              <img src="/images/logo2.png" alt="Logo de la société Icicartegrise" id="logoICG">

              <hr style="margin: 2rem 0;">
              <img id="iconeChargement" src="/demarche/loading.svg" alt="Icone de chargement...">
              <div id="containerPaiementSystempay" class="chargementInputPaiement">

                  <div id="trucOuOnAuraLeToken" class='kr-embedded' kr-form-token="" style="position:absolute;left:100rem;">

                      <div class='containerCarteBancaire'>
                          <div id='topSaisieNumCb'>
                    <span class='titreChampCb'>
                        Votre carte
                    </span>
                              <div id='iconeMoyenPaiement'>
                                  <!-- <svg width='33' height='23' viewBox='0 0 70 48' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                  <rect x='0.5' y='0.5' width='69' height='47' rx='5.5' fill='white' stroke='#D9D9D9'/>
                                  <path fill-rule='evenodd' clip-rule='evenodd' d='M21.2505 32.5165H17.0099L13.8299 20.3847C13.679 19.8267 13.3585 19.3333 12.8871 19.1008C11.7106 18.5165 10.4142 18.0514 9 17.8169V17.3498H15.8313C16.7742 17.3498 17.4813 18.0514 17.5991 18.8663L19.2491 27.6173L23.4877 17.3498H27.6104L21.2505 32.5165ZM29.9675 32.5165H25.9626L29.2604 17.3498H33.2653L29.9675 32.5165ZM38.4467 21.5514C38.5646 20.7346 39.2717 20.2675 40.0967 20.2675C41.3931 20.1502 42.8052 20.3848 43.9838 20.9671L44.6909 17.7016C43.5123 17.2345 42.216 17 41.0395 17C37.1524 17 34.3239 19.1008 34.3239 22.0165C34.3239 24.2346 36.3274 25.3992 37.7417 26.1008C39.2717 26.8004 39.861 27.2675 39.7431 27.9671C39.7431 29.0165 38.5646 29.4836 37.3881 29.4836C35.9739 29.4836 34.5596 29.1338 33.2653 28.5494L32.5582 31.8169C33.9724 32.3992 35.5025 32.6338 36.9167 32.6338C41.2752 32.749 43.9838 30.6502 43.9838 27.5C43.9838 23.5329 38.4467 23.3004 38.4467 21.5514ZM58 32.5165L54.82 17.3498H51.4044C50.6972 17.3498 49.9901 17.8169 49.7544 18.5165L43.8659 32.5165H47.9887L48.8116 30.3004H53.8772L54.3486 32.5165H58ZM51.9936 21.4342L53.1701 27.1502H49.8723L51.9936 21.4342Z' fill='#172B85'/>
                                  </svg> -->
                                  <!-- <img src='/images/iconeCarteBancaire.png' alt='Icone d'une carte bancaire'> -->
                                  <!-- <svg width='33' height='23' viewBox='0 0 70 48' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                  <rect x='0.5' y='0.5' width='69' height='47' rx='5.5' fill='white' stroke='#D9D9D9'/>
                                  <path fill-rule='evenodd' clip-rule='evenodd' d='M35.3948 34.7618C33.0116 36.8184 29.9203 38.0599 26.5423 38.0599C19.005 38.0599 12.8948 31.8787 12.8948 24.2539C12.8948 16.6291 19.005 10.4479 26.5423 10.4479C29.9203 10.4479 33.0116 11.6894 35.3948 13.746C37.7779 11.6894 40.8693 10.4479 44.2472 10.4479C51.7846 10.4479 57.8948 16.6291 57.8948 24.2539C57.8948 31.8787 51.7846 38.0599 44.2472 38.0599C40.8693 38.0599 37.7779 36.8184 35.3948 34.7618Z' fill='#ED0006'/>
                                  <path fill-rule='evenodd' clip-rule='evenodd' d='M35.3948 34.7618C38.3292 32.2295 40.1899 28.4615 40.1899 24.2539C40.1899 20.0463 38.3292 16.2783 35.3948 13.746C37.7779 11.6894 40.8693 10.4479 44.2472 10.4479C51.7846 10.4479 57.8948 16.6291 57.8948 24.2539C57.8948 31.8787 51.7846 38.0599 44.2472 38.0599C40.8693 38.0599 37.7779 36.8184 35.3948 34.7618Z' fill='#F9A000'/>
                                  <path fill-rule='evenodd' clip-rule='evenodd' d='M35.3948 13.7461C38.3292 16.2783 40.1898 20.0463 40.1898 24.2539C40.1898 28.4615 38.3292 32.2295 35.3948 34.7618C32.4605 32.2295 30.5998 28.4615 30.5998 24.2539C30.5998 20.0463 32.4605 16.2783 35.3948 13.7461Z' fill='#FF5E00'/>
                                  </svg> -->
                              </div>
                          </div>
                          <div class='inputSaisieBancaire'>
                              <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: #aaaaaa'><path d='M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM4 6h16v2H4V6zm0 12v-6h16.001l.001 6H4z'></path><path d='M6 14h6v2H6z'></path></svg>
                              <div class='kr-pan' id='nombreCarteField'></div>
                              <!-- <input class='inputCbSaisie' id='nombreCarteFieldCb' type='text' autocomplete='off' pattern='.{0}|.{19,}' minlength='19' maxlength='19' required placeholder='Numéro de carte'> -->
                          </div>
                      </div>

                      <div id='blockExpirationCVV'>

                          <div class='containerCarteBancaire'>
                    <span class='titreChampCb'>
                        Date d'expiration
                    </span>
                              <div class='inputSaisieBancaire'>
                                  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: #aaaaaa'><path d='M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z'></path><path d='M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z'></path></svg>
                                  <div class='kr-expiry'></div>
                                  <!-- <input class='inputCbSaisie' id='expirationField' minlength='5' maxlength='5' required onkeypress='validate(event)' type='text' placeholder='MM / AA'> -->
                              </div>
                          </div>

                          <div class='containerCarteBancaire'>
                              <div id='topCVVcontainer'>
                        <span class='titreChampCb'>
                            CVV
                        </span>
                                  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: #aaaaaa'><path d='M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm1 16h-2v-2h2v2zm.976-4.885c-.196.158-.385.309-.535.459-.408.407-.44.777-.441.793v.133h-2v-.167c0-.118.029-1.177 1.026-2.174.195-.195.437-.393.691-.599.734-.595 1.216-1.029 1.216-1.627a1.934 1.934 0 0 0-3.867.001h-2C8.066 7.765 9.831 6 12 6s3.934 1.765 3.934 3.934c0 1.597-1.179 2.55-1.958 3.181z'></path></svg>
                              </div>
                              <div class='inputSaisieBancaire'>
                                  <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: #aaaaaa'><path d='M12 2C9.243 2 7 4.243 7 7v2H6c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v2H9V7zm9.002 13H13v-2.278c.595-.347 1-.985 1-1.722 0-1.103-.897-2-2-2s-2 .897-2 2c0 .736.405 1.375 1 1.722V20H6v-9h12l.002 9z'></path></svg>
                                  <div class='kr-security-code'></div>
                                  <!-- <input class='inputCbSaisie' id='cvvField' minlength='3' maxlength='3' required type='text' placeholder='123'> -->
                              </div>
                          </div>
                      </div>

                      <div id='containerBoutonPayerTransaction'>
                          <button class='kr-payment-button'></button>
                          <!-- <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' style='fill: #fff'><path d='M11.488 21.754c.294.157.663.156.957-.001 8.012-4.304 8.581-12.713 8.574-15.104a.988.988 0 0 0-.596-.903l-8.05-3.566a1.005 1.005 0 0 0-.813.001L3.566 5.747a.99.99 0 0 0-.592.892c-.034 2.379.445 10.806 8.514 15.115zM8.674 10.293l2.293 2.293 4.293-4.293 1.414 1.414-5.707 5.707-3.707-3.707 1.414-1.414z'></path></svg> -->

                          <!-- <input type='button' id='boutonPayerTransaction' value='    Payer'> -->
                      </div>

                      <div class='kr-form-error'></div>
                  </div>
              </div>


              <hr style="margin: 2rem 0;">

              <img id="logoSecuritePaiement" src="/images/logoSecure.png" alt="Plusieurs logo indiquant les moyens de paiement ainsi qu'un logo de cadena">
          </div>
      </div>
  </div>

  <div id="popUpCheckout" style="display:none;" class="popUp">
    <div id="spinnerPopUpCheckout" style="position: absolute"><img src="loading.svg" height="50px"width="50px" /></div>

    <!-- <div class="containerPopUpCheckout popupFinDemarcheCheckout" id="popUpCheckoutFinDemarche">
      <div id="titreContainerCheckout">
          <h3 id="titreCheckout">
              Commande enregistrée <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M40.7833 21.5874C40.884 21.1631 40.9344 20.9509 40.9694 20.6393C41.0045 20.3277 41.0021 20.0709 40.9973 19.5572C40.8477 3.48552 37.0366 0 20.5 0C3.96344 0 0.152302 3.48552 0.00271366 19.5572C-0.00206651 20.0708 -0.00445739 20.3277 0.0305624 20.6393C0.0655766 20.9509 0.115962 21.163 0.216718 21.5873C3.25758 34.3913 14.0541 39.1665 18.5318 40.6231C19.3042 40.8744 19.6904 41 20.5 41C21.3096 41 21.6958 40.8744 22.4681 40.6231C26.9459 39.1665 37.7424 34.3914 40.7833 21.5874ZM37.5804 19.5892C37.505 11.4806 36.4248 8.02549 34.548 6.24639C32.6119 4.41105 28.8837 3.43083 20.5 3.43083C12.1163 3.43083 8.38814 4.41105 6.45199 6.24639C4.57516 8.02549 3.49503 11.4806 3.41956 19.5892C3.41433 20.1507 3.4187 20.1896 3.42596 20.2542C3.43118 20.3006 3.43586 20.3305 3.44656 20.383C3.46278 20.4625 3.48613 20.5625 3.54054 20.7916C6.15569 31.8031 15.452 36.0149 19.585 37.3593C19.788 37.4254 19.9161 37.4668 20.0271 37.5C20.1297 37.5307 20.1826 37.5436 20.2125 37.5499L20.2155 37.5506C20.2411 37.5561 20.3013 37.5692 20.5 37.5692C20.6987 37.5692 20.7589 37.5561 20.7845 37.5506L20.7875 37.5499C20.8174 37.5436 20.8703 37.5307 20.9729 37.5C21.0839 37.4668 21.212 37.4254 21.415 37.3593C25.548 36.0149 34.8443 31.8031 37.4595 20.7916C37.5139 20.5625 37.5372 20.4625 37.5534 20.383C37.5641 20.3305 37.5688 20.301 37.574 20.2546C37.5813 20.1899 37.5857 20.1507 37.5804 19.5892Z" fill="#4C4C4C"/><path d="M28.5419 16.6518C29.2091 15.9819 29.2091 14.8957 28.5419 14.2258C27.8747 13.5559 26.7929 13.5559 26.1257 14.2258L18.7913 21.5899L16.5824 19.3721C15.9152 18.7022 14.8334 18.7022 14.1662 19.3721C13.499 20.042 13.499 21.1281 14.1662 21.798L17.5832 25.2289C18.2504 25.8988 19.3322 25.8988 19.9994 25.2289L28.5419 16.6518Z" fill="#4C4C4C"/></svg>
          </h3>

      </div>
      <div class="detailContainerCheckout popUpFinDemarcheBleu" style="display:none">
          <h5 class="titreDetailCheckout">
              Félicitations
          </h5>
          <span class="infosDetailCheckout" id="detailPlaque" style="margin-bottom: 34px;">
              Vous venez de terminer votre commande. Celle-ci sera traitée lorsque nous aurons réceptionné les documents demandés et le justificatif de règlement.
          </span>
      </div>

      <div class="detailContainerCheckout popUpFinDemarcheBleu" style="display:none">
          <h5 class="titreDetailCheckout">
              Envoi des documents
          </h5>
          <span class="infosDetailCheckout" id="plaqueImmat">
              Rassemblez et remplissez les documents nécessaires à votre démarche, puis transmettez-les nous par courrier à :
          </span>
          <ul class="ulCheckout" style="flex-direction: column;width: 100%;padding: 0;">
              <li>Vends ma voiture</li>
              <li>220 rue Van Gogh</li>
              <li>BP12</li>
              <li>29470 Plougastel-Daouslas</li>
          </ul>
      </div>
      <div class="detailContainerCheckout popUpFinDemarcheBleu">
          <h5 class="titreDetailCheckout" style="margin-top: 14px;">
              A réception de vos documents
          </h5>
          <div>
            <span class="infosDetailCheckout">
                Si votre dossier est complet, vous recevrez un accusé d'enregistrement sous 48h ouvrées par e-mail puis votre carte grise mise à jour directement à votre domicile.
            </span>
            <br/>
            <span class="infosDetailCheckout">
                Si votre dossier est incomplet ou comporte une particularité, vous serez contacté par sms et/ou e-mail.
            </span>
          </div>
      </div>
      <div id="boutonContainerCheckout">
          <input type="button" value="Fermer" id="boutonFermerCheckout" onclick="window.location.href='/demarche/'">
      </div>
    </div> -->

    <div class="containerPopUpCheckout popupFinDemarche" id="popUpCheckoutFinDemarche">
      <div id="titreContainerCheckout">
        <h3 id="titreCheckout">
          Commande enregistrée <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.7833 21.5874C40.884 21.1631 40.9344 20.9509 40.9694 20.6393C41.0045 20.3277 41.0021 20.0709 40.9973 19.5572C40.8477 3.48552 37.0366 0 20.5 0C3.96344 0 0.152302 3.48552 0.00271366 19.5572C-0.00206651 20.0708 -0.00445739 20.3277 0.0305624 20.6393C0.0655766 20.9509 0.115962 21.163 0.216718 21.5873C3.25758 34.3913 14.0541 39.1665 18.5318 40.6231C19.3042 40.8744 19.6904 41 20.5 41C21.3096 41 21.6958 40.8744 22.4681 40.6231C26.9459 39.1665 37.7424 34.3914 40.7833 21.5874ZM37.5804 19.5892C37.505 11.4806 36.4248 8.02549 34.548 6.24639C32.6119 4.41105 28.8837 3.43083 20.5 3.43083C12.1163 3.43083 8.38814 4.41105 6.45199 6.24639C4.57516 8.02549 3.49503 11.4806 3.41956 19.5892C3.41433 20.1507 3.4187 20.1896 3.42596 20.2542C3.43118 20.3006 3.43586 20.3305 3.44656 20.383C3.46278 20.4625 3.48613 20.5625 3.54054 20.7916C6.15569 31.8031 15.452 36.0149 19.585 37.3593C19.788 37.4254 19.9161 37.4668 20.0271 37.5C20.1297 37.5307 20.1826 37.5436 20.2125 37.5499L20.2155 37.5506C20.2411 37.5561 20.3013 37.5692 20.5 37.5692C20.6987 37.5692 20.7589 37.5561 20.7845 37.5506L20.7875 37.5499C20.8174 37.5436 20.8703 37.5307 20.9729 37.5C21.0839 37.4668 21.212 37.4254 21.415 37.3593C25.548 36.0149 34.8443 31.8031 37.4595 20.7916C37.5139 20.5625 37.5372 20.4625 37.5534 20.383C37.5641 20.3305 37.5688 20.301 37.574 20.2546C37.5813 20.1899 37.5857 20.1507 37.5804 19.5892Z" fill="#4C4C4C" />
            <path d="M28.5419 16.6518C29.2091 15.9819 29.2091 14.8957 28.5419 14.2258C27.8747 13.5559 26.7929 13.5559 26.1257 14.2258L18.7913 21.5899L16.5824 19.3721C15.9152 18.7022 14.8334 18.7022 14.1662 19.3721C13.499 20.042 13.499 21.1281 14.1662 21.798L17.5832 25.2289C18.2504 25.8988 19.3322 25.8988 19.9994 25.2289L28.5419 16.6518Z" fill="#4C4C4C" />
          </svg>
        </h3>
      </div>

      <div class="detailContainerCheckout popUpAlign">
        <h5 class="titreDetailCheckout">
          A réception de vos documents
        </h5>
        <span class="infosDetailCheckout">
          Si votre dossier est complet, vous recevrez un accusé d'enregistrement sous 48h ouvrées par e-mail puis votre carte grise mise à jour directement à votre domicile.
        </span>
        <span class="infosDetailCheckout">
          Si votre dossier est incomplet ou comporte une particularité, vous serez contacté par sms et/ou e-mail.
        </span>
      </div>

      <div id="boutonContainerCheckout">
        <input type="button" value="Fermer" id="boutonFermerCheckout" onclick="window.location.href='/demarche/'">
      </div>

    </div>

    <div class="containerPopUpCheckout popupFinDemarche popUp" id="popUpCheckoutPaiementIntermediaire">
        <i id="croix" class="fas fa-times boutonFermerPopUp croix"></i>

        <div class="detailContainerCheckout popUpAlign">
            <h2 class="titreDetailCheckout">
                Êtes-vous sûr de valider la commande ?
            </h2>
            <div>
              <span class="infosDetailCheckout" id="detailPlaque">
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireCB1Fois">
                  Après avoir cliqué sur le bouton "Oui, je valide", vous allez être redirigé vers notre interface de paiement afin de procéder au règlement de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireCB3Fois">
                  Après avoir cliqué sur le bouton "Oui, je valide", vous allez être redirigé vers l'interface de paiement en 3x d'Oney afin de procéder au règlement de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireCB4Fois">
                  Après avoir cliqué sur le bouton "Oui, je valide", vous allez être redirigé vers l'interface de paiement en 4x d'Oney afin de procéder au règlement de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireCBTelephone">
                  Veuillez appeler le 02 56 02 82 51 afin de procéder au règlement de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireLienSMSMail1">
                  Afin de procéder au paiement de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireVirement1">
                  Afin de procéder au paiement de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireRappelle1">
                  Afin de procéder au paiement de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireEncaissementPDV1">
                  Veuillez encaisser dans votre point de vente le montant de
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireCheque1">
                  Veuiller insérer à votre dossier, un chèque de
              </span>
              <span style="font-size: 20px; color: var(--rose-color)"><span id="prixTotalPopUpCheckout"></span> €</span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireVirement2">, vous pouvez télécharger nos informations bancaires en cliquant ici : <a href="/pdf/INFORMATIONS_BANCAIRES_ICICARTEGRISE.pdf" download>Télécharger</a></span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireRappelle2">
                  , nous vous rappellerons au numéro suivant :
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireCheque2">
                  à l'ordre de ICICARTEGRISE.
              </span>
              <span class="infosDetailCheckout" id="detailCheckoutIntermediaireLienSMSMail2">
                  , vous recevrez un lien par<span id="complementPaiementMail1"> Mail</span><span id="complementPaiementSMSMail"> et </span><span id="complementPaiementSMS1"> SMS</span>
              </span>
              <span id="complementPaiementMail2" class="infosDetailCheckout">
                  <br/>
                  Adresse mail : <input id="mailClientFinDemarche">
              </span>
              <span id="complementPaiementSMS2" class="infosDetailCheckout">
                  <br/>
                  <br/>
                  Téléphone : <input id="SMSClientFinDemarche">
              </span>
            </div>
        </div>

        <div id="boutonContainerCheckout">
            <div id="boutonFermerCheckout" onclick="$('body').css('overflow', 'auto');$('#popUpCheckout').css('display', 'none');">Non, j'annule</div>
            <div id="boutonRecuCheckout" onclick="$('#popUpCheckoutPaiementIntermediaire').hide();ajouterPaiementBleuJaune();">Oui, je valide</div>
        </div>
    </div>

  </div>

  <main>
    <div style="background-color: white">
      <div>
        <center>
          <div id="fullAcc1_title" class="hiddenOnMobile">
            <h1 style="font-size:40px;font-family: poppins, sans-serif;" id="fullAcc1_title_sub">Votre démarche en 2 minutes.</h1>
          </div>
        </center>
        <div id="main_kontainer">
          <div id="scroll_spy_kontainer" <?php if ($_SESSION['profil'] == 15 || $_SESSION['profil'] == 16 || $_SESSION['profil'] == 21) : ?> style="top: 62px!important;" <?php endif; ?>>
            <div id="scroll_spy_sub_kontainer">
              <div id="scroll_spy_sub_sub_kontainer" style="padding-top: 0px;">
                <span onclick="testData()" id="sp1" class="sp_item sp_item_actif hiddenOnMobile" style="display: block"><span class="sp_nb">1<svg id="tdr1" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></span> Informations véhicule</span>
                <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>
                  <span id="sp2" class="sp_item sp_item_inactif_mobile" style="display: block"><span class="sp_nb">2<svg id="tdr1" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                      </svg></span>Démarche Carte grise</span>
                <?php endif; ?>
                <?php if ($_SESSION['profil'] != 17 && $_SESSION['profil'] != 18 && $_SESSION['profil'] != 19 && $_SESSION['profil'] != 20) : ?>
                  <span id="sp2" class="sp_item sp_item_inactif_mobile" style="display: block"><span class="sp_nb">2<svg id="tdr2" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                      </svg></span><?php if ($_SESSION['profil'] != 15 && $_SESSION['profil'] != 16 && $_SESSION['profil'] != 21) {
                                      echo 'Votre démarche';
                                    } else {
                                      echo 'Démarche';
                                    } ?></span>

                  <?php if ($_SESSION['profil'] != 21) { ?>
                    <?php if (($_SESSION['profil'] != 14 && $_SESSION['profil'] != 12 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) || (($_SESSION['profil'] == 14 || $_SESSION['profil'] == 12 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)) { ?> <span id="sp3" class="sp_item sp_item_inactif_mobile" style="display: block"><span class="sp_nb">3<svg id="tdr3" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span><?php if ($_SESSION['profil'] != 15 && $_SESSION['profil'] != 16 && $_SESSION['profil'] != 21) {
                                        echo 'Vos options';
                                      } else {
                                        echo 'Options';
                                      } ?></span> <?php } ?>
                    <span id="sp4" class="sp_item sp_item_inactif_mobile" style="display: block"><span class="sp_nb"><?php if (($_SESSION['profil'] != 14 && $_SESSION['profil'] != 12 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) || (($_SESSION['profil'] == 14 || $_SESSION['profil'] == 12 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)) {echo '4';}else{echo '3';}?><svg id="tdr4" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span><?php if ($_SESSION['profil'] != 15 && $_SESSION['profil'] != 16 && $_SESSION['profil'] != 21) {
                                        echo 'Vos coordonnées';
                                      } else {
                                        echo 'Coordonnées client';
                                      } ?></span>
                    <span id="sp5" class="sp_item sp_item_inactif_mobile" style="display: block"><span class="sp_nb"><?php if (($_SESSION['profil'] != 14 && $_SESSION['profil'] != 12 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) || (($_SESSION['profil'] == 14  || $_SESSION['profil'] == 12 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)) {echo '5';}else{echo '4';}?><svg id="tdr5" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>Récap / Paiement</span>
                  <?php } else { ?>
                    <span id="sp4" class="sp_item sp_item_inactif_mobile" style="display: block"><span class="sp_nb">3<svg id="tdr4" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span><?php if ($_SESSION['profil'] != 15 && $_SESSION['profil'] != 16 && $_SESSION['profil'] != 21) {
                                        echo 'Vos coordonnées';
                                      } else {
                                        echo 'Coordonnées client';
                                      } ?></span>
                    <span id="sp5" class="sp_item sp_item_inactif_mobile" style="display: block"><span class="sp_nb">4<svg id="tdr5" class="text__draw" width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1.32647 4.19722C2.50352 3.24225 3.82742 2.51128 5.0053 1.57334C5.25815 1.372 5.94607 0.779806 5.84386 1.08644C5.80587 1.20039 1.11983 5.59848 2.17855 5.83375C3.61999 6.15407 6.51138 3.95023 7.8591 3.48039C9.33917 2.9644 10.8644 2.52842 12.39 2.16845C12.567 2.12668 14.7226 1.50479 13.5802 2.3578C9.8802 5.12048 -0.586181 14.1708 2.67898 10.9057C4.99128 8.59337 7.76829 6.98053 10.7264 5.63088C11.6684 5.20109 13.5245 4.14719 14.6893 4.06196C15.7771 3.98237 13.1313 5.59069 12.3089 6.30713C9.59174 8.67411 6.87843 11.0613 4.32904 13.6107C4.01389 13.9258 5.01987 13.0473 5.37048 12.7721C8.20659 10.5463 11.2552 8.62544 14.3647 6.80756C15.8381 5.94615 17.34 5.14013 18.828 4.30542C19.43 3.96768 17.6888 5.08551 17.1238 5.4821C12.1289 8.98811 7.33047 12.6464 2.76013 16.6944C2.6525 16.7897 2.55881 16.9045 2.43553 16.9784C2.10475 17.1769 2.9777 16.4292 3.26056 16.1669C4.64295 14.8851 6.1482 13.7379 7.65622 12.6098C10.7401 10.3028 13.8831 8.08412 17.1373 6.02311C17.6935 5.67087 21.2288 3.07506 19.0038 5.6444C14.5014 10.8436 9.07963 15.1117 3.63926 19.2777C1.97159 20.5548 2.62253 19.9103 3.49049 19.0748C5.79163 16.8598 8.22903 14.8284 10.9022 13.0697C14.3942 10.7724 18.1354 8.84328 21.9387 7.11864C24.8937 5.77869 22.2873 7.54329 21.5736 8.10597C15.3743 12.993 8.77393 17.6548 1.73222 21.2659C-1.65547 23.0032 7.62455 16.3726 10.9563 14.5304C13.3042 13.2322 15.911 11.7578 18.5034 10.9733C18.6415 10.9315 19.0086 10.862 18.9362 10.9868C18.7294 11.343 18.3356 11.5516 18.0165 11.8119C17.2325 12.4512 13.9905 14.8975 13.4855 15.2878C10.7745 17.3833 8.10012 19.5298 5.4922 21.7528C5.02548 22.1506 4.55281 22.543 4.11264 22.9701C3.33765 23.7219 3.66024 23.6045 4.53192 23.2541C7.70286 21.9795 10.7713 20.3271 13.8507 18.8584C15.0422 18.2902 20.662 15.6283 22.1281 14.8821C22.6499 14.6164 23.2128 14.3985 23.6564 14.0164C23.7967 13.8957 23.2791 13.99 23.1019 14.0435C16.9124 15.912 10.9422 19.2501 5.5463 22.7537C5.03764 23.0839 4.54101 23.4325 4.04502 23.7816C3.61726 24.0826 2.90468 24.5418 3.74746 24.1468C7.24303 22.5082 10.7315 20.9398 14.3376 19.5482C15.9164 18.939 20.55 16.9843 19.1526 17.9387C17.3819 19.148 15.3092 19.9922 13.4855 21.1307C11.9922 22.0629 10.0384 23.1789 8.90053 24.5931C8.44121 25.164 13.0179 23.7933 13.0663 23.7816C15.1481 23.2782 17.4014 22.7388 19.5583 22.7131C19.7696 22.7106 20.2277 22.6288 20.1805 22.8348C20.1109 23.1383 19.684 23.2152 19.4095 23.3623C18.807 23.6853 18.1782 23.9568 17.5566 24.2414C15.5094 25.179 13.4028 26.016 11.4297 27.1088C10.2676 27.7524 14.5265 26.1467 14.6081 26.1214C16.3789 25.5727 18.1926 25.1338 20.0182 24.8095C20.6317 24.7005 20.8901 24.6008 20.5457 25.0529C19.749 26.0985 20.6149 26.1079 21.533 26.1079" stroke="#CF0B5D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg></span>Récap / Paiement</span>
                  <?php } ?>
                <?php endif; ?>
              </div>
              <div <?php if($_SESSION["profil"] == 16) { ?> style="visibility:hidden;" <?php } ?> id="totalSidebar"><span style="font-weight:900">TOTAL</span><span id="span_acc_1_prixTotal">--.-- </span></div>
              <img <?php if($_SESSION["profil"] == 16) { ?> style="visibility:hidden;" <?php } ?> src="../images/ICICG-PERSO.png" alt="Illustration Personnage Icicartegrise" id="logoSidebar">
            </div>
          </div>
          <div class="acc-kontainer">
            <div class="navbar__top title__hide" style="gap:15px" id="title__demarche">
              Démarche carte grise
            </div>


            <!-- Etape 1 -->

            <div id="fullAcc1">
              <input class="acc" type="radio" name="acc" id="acc1" onclick="deplierAcc();" checked>
              <div class="acc-body ">
                <div class="row">
                  <div class="col-lg-4">
                    <div>
                      <label for="div_acc_1_immatriculation" id="labelImmat1" class="input_label" <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>style="font-size:14px;" <?php endif; ?>>Immatriculation<?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?> de votre client<?php endif; ?></label>
                      <div id="div_acc_1_immatriculation">
                        <div class="blue-box" style="float:left;">
                          <img id="drapeau_eu" src="../images/drapeau_eu.svg" alt="Drapeau Union Européene" />
                          F
                        </div>
                        <input type="text" id="input_acc_1_immatriculation" name="immatriculation" onblur="verificationFormatImmatriculation()" aria-describedby="immatriculationHelp" maxlength="10" placeholder="AA-123-BB" autocomplete="off" value="" required>
                        <div class="blue-box" style="float:right;"></div>

                      </div>
                    </div>
                      <span id="alertMessageIsValidImmatriculation" class="alertMessageIsValid" style="position: initial; color: red"></span>

                    <span style="display:flex;align-items:center;padding-top: 16px; width: 100%; flex-flow: nowrap;" class="row">
                      <!-- <p id="span_acc_1_manuelle" class="cpointer" onclick="acc1_valider('manuelle');">Je ne connais pas mon numéro</p><span class="example flr cpointer" onclick="showInfoAcc1()"><i class="saisieManuelle fal fa-info-circle"></i></span> -->
                      <input type="checkbox" id="span_acc_1_manuelle" style="margin-left:5px;min-width: 15px;"><label id="label_acc_1_manuelle" for="span_acc_1_manuelle" class="col-9 <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>col-md-10<?php else : ?>col-md-9<?php endif; ?>" style="font-size: 14px;padding-left:8px;padding-right:0;overflow-wrap: break-word;"><?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>Le client n'a <?php else : ?>Je n'ai <?php endif; ?>pas d'immatriculation française</label><span class="example flr cpointer col-1 col-md-1" style="padding-left:0"><i class="saisieManuelle fal fa-info-circle" onclick="showInfoAcc1()"></i></span>
                    </span>
                  </div>
                  <div class="col-lg-4 ">
                    <label for="ddl_acc_1_departement" id="labelDep1" class="input_label" <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>style="font-size:14px;" <?php endif; ?>><?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>Département de votre client<?php else : ?>Votre département<?php endif; ?></label>
                    <select class="option_select " name="departement" id="ddl_acc_1_departement" onchange="majAccordeonData('departement_valeur', this.value); majAccordeonData('departement', this.options[this.selectedIndex].innerHTML)" value="" required>
                      
                    <option disabled selected>Choisir département</option>
                    <option data-departement="01" value="43+100">01 - Ain</option>
                      <option value="34.5+50">02 - Aisne</option>
                      <option value="43+100">03 - Allier</option>
                      <option value="51.2+100">04 - Alpes de Haute Provence</option>
                      <option value="51.2+100">05 - Hautes Alpes</option>
                      <option value="51.2+100">06 - Alpes Maritimes</option>
                      <option value="43+100">07 - Ard&egrave;che</option>
                      <option value="48+0">08 - Ardennes</option>
                      <option value="44+0">09 - Ari&egrave;ge</option>
                      <option value="48+0">10 - Aube</option>
                      <option value="44+0">11 - Aude</option>
                      <option value="44+0">12 - Aveyron</option>
                      <option value="51.2+100">13 - Bouches du Rh&ocirc;ne</option>
                      <option value="35+100">14 - Calvados</option>
                      <option value="43+100">15 - Cantal</option>
                      <option value="45+0">16 - Charente</option>
                      <option value="45+0">17 - Charente Maritime</option>
                      <option value="49.8+50">18 - Cher</option>
                      <option value="45+0">19 - Corr&egrave;ze</option>
                      <option value="27+100">2A - Corse du Sud</option>
                      <option value="27+100">2B - Haute Corse</option>
                      <option value="51+100">21 - C&ocirc;te d&acute;Or</option>
                      <option value="55+0">22 - C&ocirc;tes d&acute;Armor</option>
                      <option value="45+0">23 - Creuse</option>
                      <option value="45+0">24 - Dordogne</option>
                      <option value="51+100">25 - Doubs</option>
                      <option value="43+100">26 - Dr&ocirc;me</option>
                      <option value="35+100">27 - Eure</option>
                      <option value="49.8+50">28 - Eure et Loir</option>
                      <option value="55+0">29 - Finist&egrave;re</option>
                      <option value="44+0">30 - Gard</option>
                      <option value="44+0">31 - Haute Garonne</option>
                      <option value="44+0">32 - Gers</option>
                      <option value="45+0">33 - Gironde</option>
                      <option value="44+0">34 - H&eacute;rault</option>
                      <option value="55+0">35 - Ille et Vilaine</option>
                      <option value="49.8+50">36 - Indre</option>
                      <option value="49.8+50">37 - Indre et Loire</option>
                      <option value="43+100">38 - Is&egrave;re</option>
                      <option value="51+100">39 - Jura</option>
                      <option value="45+0">40 - Landes</option>
                      <option value="49.8+50">41 - Loir et Cher</option>
                      <option value="43+100">42 - Loire</option>
                      <option value="43+100">43 - Haute Loire</option>
                      <option value="51+0">44 - Loire Atlantique</option>
                      <option value="49.8+50">45 - Loiret</option>
                      <option value="44+0">46 - Lot</option>
                      <option value="45+0">47 - Lot et Garonne</option>
                      <option value="44+0">48 - Loz&egrave;re</option>
                      <option value="51+0">49 - Maine et Loire</option>
                      <option value="35+100">50 - Manche</option>
                      <option value="48+0">51 - Marne</option>
                      <option value="48+0">52 - Haute Marne</option>
                      <option value="51+0">53 - Mayenne</option>
                      <option value="48+0">54 - Meurthe et Moselle</option>
                      <option value="48+0">55 - Meuse</option>
                      <option value="55+0">56 - Morbihan</option>
                      <option value="48+0">57 - Moselle</option>
                      <option value="51+100">58 - Ni&egrave;vre</option>
                      <option value="34.5+50">59 - Nord</option>
                      <option value="34.5+50">60 - Oise</option>
                      <option value="35+100">61 - Orne</option>
                      <option value="34.5+100">62 - Pas de Calais</option>
                      <option value="43+100">63 - Puy de D&ocirc;me</option>
                      <option value="45+0">64 - Pyr&eacute;n&eacute;es Atlantiques</option>
                      <option value="44+0">65 - Hautes Pyr&eacute;n&eacute;es</option>
                      <option value="44+0">66 - Pyr&eacute;n&eacute;es Orientales</option>
                      <option value="48+0">67 - Bas Rhin</option>
                      <option value="48+0">68 - Haut Rhin</option>
                      <option value="43+100">69 - Rh&ocirc;ne</option>
                      <option value="51+100">70 - Haute Sa&ocirc;ne</option>
                      <option value="51+100">71 - Sa&ocirc;ne et Loire</option>
                      <option value="51+0">72 - Sarthe</option>
                      <option value="43+100">73 - Savoie</option>
                      <option value="43+100">74 - Haute Savoie</option>
                      <option value="46.15+100">75 - Paris</option>
                      <option value="35+100">76 - Seine Maritime</option>
                      <option value="46.15+100">77 - Seine et Marne</option>
                      <option value="46.15+100">78 - Yvelines</option>
                      <option value="45+0">79 - Deux S&egrave;vres</option>
                      <option value="35+50">80 - Somme</option>
                      <option value="44+0">81 - Tarn</option>
                      <option value="44+0">82 - Tarn et Garonne</option>
                      <option value="51.2+100">83 - Var</option>
                      <option value="51.2+100">84 - Vaucluse</option>
                      <option value="51+0">85 - Vend&eacute;e</option>
                      <option value="45+0">86 - Vienne</option>
                      <option value="45+0">87 - Haute Vienne</option>
                      <option value="48+0">88 - Vosges</option>
                      <option value="51+100">89 - Yonne</option>
                      <option value="51+100">90 - Territoire de Belfort</option>
                      <option value="46.15+100">91 - Essonne</option>
                      <option value="46.15+100">92 - Hauts de Seine</option>
                      <option value="46.15+100">93 - Seine Saint Denis</option>
                      <option value="46.15+100">94 - Val de Marne</option>
                      <option value="46.15+100">95 - Val d&acute;Oise</option>
                      <option value="41+0">971 - Guadeloupe</option>
                      <option value="51+0">972 - Martinique</option>
                      <option value="42.5+0">973 - Guyane</option>
                      <option value="51+0">974 - R&eacute;union</option>
                      <option value="30+0">976 - Mayotte</option>
                    </select>
                  </div>
                  <div class="col-lg-4" style="display: flex; flex-direction: column; align-items: center;">
                    <label id="label_btn_acc_1_calcul" for="btn_acc_1_calcul" class="input_label">Valider</label>
                      <div id="spinnerCalculPrix" style="display:none"><img src="loading.svg" height="50px"width="50px" /></div>

                      <button id="btn_acc_1_calcul" onclick="<?php if(isset($_SESSION['profil']) && $_SESSION['profil'] != 0 && $_SESSION['nouvelleDemarche'] != 1):?>acc1_valider();<?php else:?>gestionInformationsImmatriculation();<?php endif;?>" class="mb-3 next"><span>Calculer le prix</span><i class="far fa-angle-right"></i></button>
<!--                      <button id="btn_acc_1_calcul" onclick="acc1_valider();" class="mb-3 next"><span>Calculer le prix</span><i class="far fa-angle-right"></i></button>-->
                  </div>


                  <!--  <div class="col-md-4">
                    <button id="btn_acc_1_calcul" onclick="acc1_valider();" class="btn btn-vmv mb-3">Calculer le prix</button>
                  </div> -->
                  <!-- <div class="col-md-4 offset-md-4">
                    <button id="btn_acc_1_saisie" onclick="acc1_valider('manuelle');" class="btn btn-vmv mb-3">Saisie manuelle</button>
                  </div> -->
                </div>
              </div>
              <!-- Modal -->

              <div class="modal modalAjoutICG" id="modalSelectionAutreDemarche" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="displayModalEdgeIE(0)" style="background:none;border:none; color: black;">&times;</button>
                      <h4 class="modal-title">Choisir une autre démarche</h4>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <div class="modalDoc">
                          <div class="divDemarcheContainer" id="btn_ficheIdentification_Popup" onclick="majAccordeonData('actionAutreDemarche', 'ficheIdentification');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-file-edit fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_ficheIdentification">Fiche<br>d'identification<br></span>
                                <span class="alignementTexte">Fiche<br>d'identification</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br> </span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">20 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_vehiculeLoue_Popup" onclick="majAccordeonData('actionAutreDemarche', 'vehiculeLoue');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-home fa-2x"></i></div>
                              <div class="col-7 texteDemarche " style="text-align: left"><span id="span_acc_2_vehiculeLoue">Changement d'adresse d'un<br>véhicule loué</span>
                                <span class="alignementTexte">Changement d'adresse véhicule loué</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br> </span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">20 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_vehiculeNeuf_Popup" onclick="majAccordeonData('actionAutreDemarche', 'vehiculeNeuf');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-car fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_vehiculeNeuf">Véhicule<br>neuf</span>
                                <span class="alignementTexte">Véhicule<br>neuf</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">20 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_vehiculeCollection_Popup" onclick="majAccordeonData('actionAutreDemarche', 'vehiculeCollection');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-archive fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_vehiculeCollection">Véhicule<br>de collection</span>
                                <span class="alignementTexte">Véhicule<br>de collection</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">30 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_firstImmatriculation_Popup" onclick="majAccordeonData('actionAutreDemarche', 'firstImmatriculation');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-motorcycle fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_firstImmatriculation">1<sup>ère</sup> Immat. d'un véhicule<br>inf. à 50cm<sup>3</sup></span>
                                <span class="alignementTexte">1<sup>ère</sup> Immat. cyclo</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">30 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_changementDeNomDDM_Popup" onclick="majAccordeonData('actionAutreDemarche', 'changementDeNomDDM');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-book-reader fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_changementDeNomDDM">Changement de nom<br>décès, divorce ou mariage</span>
                                <span class="alignementTexte"> Changement de nom décès, divorce ou mariage</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">30 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_changementCaracteristiquesTechniques_Popup" onclick="majAccordeonData('actionAutreDemarche', 'changementCaracteristiquesTechniques');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-text-width fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_changementCaracteristiquesTechniques">Modification technique<br>d'un véhicule</span></div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">30 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_vehiculesImmatriculesAvant1990_Popup" onclick="majAccordeonData('actionAutreDemarche', 'vehiculesImmatriculesAvant1990');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-tractor fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_vehiculesImmatriculesAvant1990">Véhicule immatriculé<br>avant 1990</span>
                                <span class="alignementTexte"> Véhicule Immat. avant 1990</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">30 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_vehiculeImporteUE_Popup" onclick="majAccordeonData('actionAutreDemarche', 'vehiculeImporteUE');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-globe-europe fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_vehiculeImporteUE">Véhicule importé<br>de l'UE</span>
                                <span class="alignementTexte">Véhicule importé<br>de l'UE</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">50 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_immatriculationTemporaireWW_Popup" onclick="majAccordeonData('actionAutreDemarche', 'immatriculationTemporaireWW');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-file-word fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_immatriculationTemporaireWW">Immatriculation<br>temporaire WW</span>
                                <span class="alignementTexte">Immatriculation<br>temporaire</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">20 €</span>
                              </div>
                            </div>
                          </div>
                          <div class="divDemarcheContainer" id="btn_declarationDachat_Popup" onclick="majAccordeonData('actionAutreDemarche', 'declarationDachat');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-clipboard-user fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_declarationDachat">Déclaration<br>d'achat</span>
                                <span class="alignementTexte">Déclaration<br>d'achat</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">0 €</span>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="divDemarcheContainer" id="btn_duplicata_Popup" onclick="majAccordeonData('actionAutreDemarche', 'duplicata');updateCGPriceAcc2(); updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 col-md-3 pictoDemarche"><i class="fal fa-file-check fa-2x"></i></div>
                              <div class="col-10 col-md-9 texteDemarche" style="text-align: left"><span id="span_acc_2_duplicata">Demande de<br>duplicata</span></div>
                            </div>
                          </div> -->
                          <div class="divDemarcheContainer" id="btn_duplicata_Popup" onclick="majAccordeonData('actionAutreDemarche', 'duplicata');updateCGPriceAcc2();updateDemarcheSimulation()">
                            <div class="row align-items-center divDemarche">
                              <div class="col-2 pictoDemarche"><i class="fal fa-file-check fa-2x"></i></div>
                              <div class="col-7 texteDemarche" style="text-align: left"><span id="span_acc_2_duplicata">Demande de<br>duplicata</span>
                                <span class="alignementTexte">Demande de<br>duplicata</span>
                              </div>
                              <div class="col-3">
                                <span class="texteSupplement">SUPPLÉMENT <br></span>
                                <span class="alignementSupplement"> + <br></span><span class="priceSupplement">20 €</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <button id="btnCloseModalAutresDemarches" data-dismiss="modal" class="back" type="button" onclick="displayModalEdgeIE(0)">Retour</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Etape 2 -->

              <div id="fullAcc2">
                <input class="acc" type="radio" name="acc" onclick="deplierAcc();" id="acc2">
                <div class="acc-body">
                  <div id="acc_2_containerDemarches" class="col-md-12">
                    <div class="type_demarche">
                      <div class="divDemarcheContainer">
                        <div class="divDemarche row h100 align-items-center divDemarcheActif relative" id="div_acc2_titulaire" onclick="majAccordeonData('actionTitulaireOuDomicile', 'titulaire');updateCGPriceAcc2();updateDemarcheSimulation()">
                          <div class="col-4 pictoDemarche"><i class="fal fa-id-badge fa-2x"></i></div>
                          <div class="col-6 texteDemarche" style="text-align: left"><span>Changement<br>de titulaire<i id="checkDemarche1" style="font-size: 20px;right: 0px;top: 50%;position: absolute;transform: translateY(-50%);" class="fas fa-check checkBox"></i></span></div>
                          <!-- <div class="col-4"><div class="texteSupplement">SUPPLÉMENT <br><span class="priceSupplement">0 €</span></div></div> -->
                        </div>
                      </div>
                      <div class="divDemarcheContainer">
                        <div class="divDemarche row h100 align-items-center  relative" id="div_acc2_domicile" onclick="majAccordeonData('actionTitulaireOuDomicile', 'domicile');updateCGPriceAcc2();updateDemarcheSimulation()">
                          <div class="col-4 pictoDemarche"><i class="fal fa-home-lg-alt fa-2x"></i></div>
                          <div class="col-6 texteDemarche" style="text-align: left"><span>Changement<br>de domicile<i id="checkDemarche2" style="font-size: 20px;right: 0px;top: 50%;position: absolute;transform: translateY(-50%);display:none" class="fas fa-check checkBox"></i></span></div>
                          <!-- <div class="col-4"><div class="texteSupplement">SUPPLÉMENT <br><span class="priceSupplement">0 €</span></div></div> -->
                        </div>
                      </div>
                      <!-- <div class="divDemarcheContainer">
                        <div class="divDemarche" id="div_acc2_enregistrementActeSession" style="padding:8px" onclick="majAccordeonData('actionTitulaireOuDomicile', 'enregistrementActeSession');updateCGPriceAcc2();updateDemarcheSimulation()">
                          <div class="pictoDemarche"><i class="fal fa-file-check fa-3x"></i></div>
                          <div class="texteDemarche"><span>Enreg. acte<br>de cession</span></div>
                        </div>
                      </div> -->
                      <div class="divDemarcheContainer">
                        <div class="divDemarche row h100 align-items-center  relative" id="div_acc2_enregistrementActeSession" onclick="majAccordeonData('actionTitulaireOuDomicile', 'enregistrementActeSession');updateCGPriceAcc2(); updateDemarcheSimulation()">
                          <div class="col-4 pictoDemarche"><i class="fal fa-file-check fa-2x"></i></div>
                          <div class="col-6 texteDemarche" style="text-align: left"><span>Enregistrement <br>acte de cession<i id="checkDemarche3" style="font-size: 20px;right: 0px;top: 50%;position: absolute;transform: translateY(-50%);display:none" class="fas fa-check checkBox"></i></span></div>
                          <!-- <div class="col-4"><div class="texteSupplement">SUPPLÉMENT <br><span class="priceSupplement">20 €</span></div></div> -->
                        </div>
                      </div>
                      <div class="divDemarcheContainer" onclick="displayModalEdgeIE(1)">
                        <div class="divDemarche h100 relative" id="div_acc2_autre">
                          <a id="acc_2_autresDemarches" href="#modalSelectionAutreDemarche" data-toggle="modal" class="row h100 align-items-center">
                            <div class="col-4 pictoDemarche"><i class="fal fa-clipboard-list fa-2x"></i></div>
                            <div class="col-6 texteDemarche" style="text-align: left"><span id="span_acc_2_autresDemarches">Autres<br>démarches</span></div>
                            <div class="col-2">
                              <div><i class="fas fa-arrow-down"></i></div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Alert lorsque la plaque n'est pas reconnue -->
                  <!-- <div id="alertPlaqueInconnue" class="alert alert-danger text-white" role="alert" style="display: none; margin-top:25px;margin-bottom:25px;background-color: #CF0B5D;">
                    <i class="fas fa-exclamation-triangle"></i> Votre immatriculation n'a pas été reconnue, veuillez saisir manuellement les informations de votre véhicule.
                  </div> -->

                  <!-- <br class="hiddenOnMobile"> -->
                  <div id="titulaireSpecificAreaStep2">
                    <div class="row">
                      <div class="col-md-6 hiddenOnMobile" id="divImmat" style="margin-top: 8px;">
                        <div class="txtRes">
                          <label for="input_acc_2_immatriculation" class="input_label" id="id_label_immat">Immatriculation<span class="example flr" id="immatriculation_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_immatriculation"></span>
                        </div>
                      </div>
                      <div class="col-md-6 hiddenOnMobile" id="divDPT" style="margin-top: 8px;">
                        <div class="txtRes">
                          <label for="input_acc_2_departement" class="input_label" id="id_label_dep">Département<span class="example flr" id="departement_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_departement"></span>
                        </div>
                      </div>
                      <div class="col-md-6" id="div_acc_2_marque">
                        <div class="txtRes divSaisieManuelle">
                          <label for="input_acc_2_marque" class="input_label">Marque<span class="example flr" id="marque_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_marque"></span>
                          <input type="text" class="saisieManuelle text_input" id="input_acc_2_marque" style="display: none;" autocomplete="on" placeholder="" />
                        </div>
                      </div>
                      <div class="col-md-6" id="div_acc_2_modele">
                        <div class="txtRes divSaisieManuelle">
                          <!-- <label id="label_acc_2_modele"  for="input_acc_2_modele" class="input_label">Modèle<span class="example flr" id="modele_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label> -->
                          <label for="input_acc_2_modele" class="input_label">Modèle<span class="example flr" id="modele_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_modele"></span>
                          <input type="text" class="saisieManuelle text_input" id="input_acc_2_modele" style="display: none;" autocomplete="on" placeholder="" />
                        </div>
                      </div>
                      <!--<div class="col-md-6" id="div_acc_2_serie">
                        <div class="txtRes divSaisieManuelle">
                          <label for="input_acc_2_serie" class="input_label">Numéro de série<span class="example flr" id="modele_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_serie"></span>
                          <input type="text" onchange="onChangeSaisieManuelle();" class="saisieManuelle text_input" id="input_acc_2_serie" style="display: none;" autocomplete="on" />
                        </div>
                      </div>-->
                      <div class="col-md-6">
                        <div class="txtRes divSaisieManuelle">
                          <label for="input_acc_2_circulation" class="input_label">Date Mise en Circulation<span class="example flr" id="circulation_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_circulation"></span>
                          <input type="tel" class="saisieManuelle text_input date_field" id="input_acc_2_circulation" onselect="patternInputDate(event, this, this.value)" onkeydown="patternInputDate(event, this, this.value)" onkeypress="patternInputDate(event, this, this.value)" onkeyup="patternInputDate(event, this, this.value)" style="display: none;" autocomplete="on" placeholder="" onchange="remiseAZero();" /> <!--  onfocus="this.type='date';" -->
                          <script>
                            // Restricts input for the given textbox to the given inputFilter.
                            /*function setInputMECFilter(textbox, inputFilter) {
                              ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                                textbox.addEventListener(event, function() {
                                  if (inputFilter(this.value)) {
                                    this.oldValue = this.value;
                                    this.oldSelectionStart = this.selectionStart;
                                    this.oldSelectionEnd = this.selectionEnd;
                                  } else if (this.hasOwnProperty("oldValue")) {
                                    this.value = this.oldValue;
                                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                                  } else {
                                    this.value = "";
                                  }
                                });
                              });
                            }

                            setInputMECFilter(document.getElementById("input_acc_2_circulation"), function(value) {
                              return /^\d*\/?\d*\/?\d*$/.test(value); });*/
                          </script>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="txtRes divSaisieManuelle">
                          <label for="select_acc_2_type" class="input_label">Type<span class="example flr" id="type_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_type"></span>
                          <select class="option_select saisieManuelle" id="select_acc_2_type" style="display: none;" onchange="if(this.value == 'CL' || this.value == 'TRA' || this.value == 'REM' || this.value == 'CYCL'){document.getElementById('number_acc_2_puissance_fiscale').value=0;document.getElementById('select_acc_2_carburant').value='ESS+GAZO';$('.cvCarburant').hide();}else {document.getElementById('number_acc_2_puissance_fiscale').value='';document.getElementById('select_acc_2_carburant').value='selected_acc_2_carburant';$('.cvCarburant').show();}remiseAZero()">
                            <option disabled value="selected_acc_2_type">Choisir type</option>
                            <option value="VP">Véhicule particulier(VP)</option>
                            <option value="CTTE">Véhicule utilitaire (CTTE)</option>
                            <option value="CAM_4">Camion d'un PTAC sup. 3,5t et inf. 6t (CAM)</option>
                            <option value="CAM_7">Camion d'un PTAC sup. 6t et inf. 11t (CAM)</option>
                            <option value="CAM_12">Camion d'un PTAC sup. 11t (CAM, TCP, TRR)</option>
                            <option value="VASP">Véhicule spécialisé (VASP)</option>
                            <option value="TRA">Tracteur (TRA, MAGA)</option>
                            <option value="MTL">Motocyclette (MTL, MTT1, MTT2, MTTE)</option>
                            <option value="CL">Cyclomoteur inf. 50cm3 (CL)</option>
                            <option value="TM">Tricycles à moteur (TM)</option>
                            <option value="CYCL">Cyclomoteur carrossé à 3 roues (CYCL)</option>
                            <option value="QM">Quad, voiturette (QM)</option>
                            <option value="REM">Remorque, caravane (REM, SREM, RESP)</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 cvCarburant">
                        <div class="txtRes divSaisieManuelle cvCarburant">
                          <label for="number_acc_2_puissance_fiscale" class="input_label">CV<span class="example flr" id="puissance_fiscale_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_puissance_fiscale"></span>
                          <script>

                          </script>
                          <input type="tel" class="saisieManuelle text_input" id="number_acc_2_puissance_fiscale" name="number_acc_2_puissance_fiscale" placeholder="" maxlength="2" min="1" max="99" autocomplete="on" onchange="remiseAZero();">
                          <script>
                            // Restricts input for the given textbox to the given inputFilter.
                            function setInputCVFilter(textbox, inputFilter) {
                              ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                                textbox.addEventListener(event, function() {
                                  if (inputFilter(this.value)) {
                                    this.oldValue = this.value;
                                    this.oldSelectionStart = this.selectionStart;
                                    this.oldSelectionEnd = this.selectionEnd;
                                  } else if (this.hasOwnProperty("oldValue")) {
                                    this.value = this.oldValue;
                                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                                  } else {
                                    this.value = "";
                                  }
                                });
                              });
                            }

                            setInputCVFilter(document.getElementById("number_acc_2_puissance_fiscale"), function(value) {
                              return /^\d*$/.test(value);
                            });
                          </script>
                        </div>
                      </div>
                      <div class="col-md-6 cvCarburant">
                        <div class="txtRes divSaisieManuelle cvCarburant">
                          <label for="select_acc_2_carburant" class="input_label">Carburant<span class="example flr" id="carburant_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span></label>
                          <span class="resultRechercheField" id="span_acc_2_carburant"></span>
                          <select class="option_select saisieManuelle" id="select_acc_2_carburant" style="display: none;" onchange="remiseAZero();">
                            <option disabled value="selected_acc_2_carburant">Choisir carburant</option>
                            <option value="ESS+GAZO">Diesel (GO) / Essence (ES)</option>
                            <option value="G.P.L.">GPL (GP) / GNV (GN)</option>
                            <option value="ELECTRIC">Electricité (EL)</option>
                            <option value="ELEC+ESSENC">Hybride (EE, EH, GL, OL, PE, NE, FL)</option>
                            <option value="SUPERETHANOL">Superéthanol E85 (FE)</option>
                            <option value="BIOCARBUR">Bicarburation (EG, EN, FG, FN)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <?php
                    if ($_SESSION['profil'] == 19 || $_SESSION['profil'] == 20 || $_SESSION['profil'] == 21) {
                    ?>
                      <!-- <div class="col-md-12">
                          <div style="border-bottom: 1px solid #d10667; margin-top:40px;margin-bottom:40px"></div>
                        </div> -->
                    <?php } ?>
                    <style>
                      .content-mobile {
                        display: block;
                      }

                      @media screen and (max-width: 1000px) {

                        .content-mobile {
                          display: none;
                        }

                        .content-mobile-text {
                          white-space: pre;
                        }

                      }
                    </style>
                    <div class="row">
                      <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>
                        <div class="col-md-3 espaceResponsive" style="padding-right: 4%;">
                          <div class="">
                            <label for="select_acc_2_civilite" class="input_label ">Civilité*</label>
                            <span class="" id="span_acc_2_civilite"></span>
                            <select class="option_select" id="select_acc_2_civilite" onchange="sexeTrigger();">
                              <option value="1" selected>Monsieur</option>
                              <option value="0">Madame</option>
                              <option value="2">Société</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-3" style="padding-left:0;">
                          <div class="text-left p0 nomClientTailleTablet ">
                            <label for="input_acc_2_nom" class="input_label ">Nom <span class="content-mobile">&nbsp;du&nbsp;</span>client*</label>
                            <input id="input_acc_2_nom" autocomplete="on" class="text_input" type="text" onchange="majAccordeonData('nom', this.value)" placeholder="" />
                          </div>
                        </div>
                        <div class="col-md-3 espaceResponsive " id="div2Prenom">
                          <div class="text-left p0 ">
                            <label for="input_acc_2_prenom" class="input_label ">Prénom*</label>
                            <input id="input_acc_2_prenom" autocomplete="on" class="text_input" type="text" onchange="majAccordeonData('prenom', this.value)" placeholder="" />
                          </div>
                        </div>
                        <div class="col-md-3" id="div2Date">
                          <div class="text-left p0">
                            <label for="input_acc_2_date_naissance" class="input_label content-mobile-text">Date <span class="content-mobile">&nbsp;de&nbsp;</span>naissance*</label>

                            <input id="input_acc_2_date_naissance" name="input_acc_2_date_naissance" autocomplete="on" class="text_input date_field" type="tel" onchange="majAccordeonData('dateNaissance', this.value)" placeholder="" />

                            <!-- <input id="input_acc_2_date_naissance" autocomplete="on" class="text_input date_field" type="tel" onchange="majAccordeonData('dateNaissance', this.value)" placeholder="" />

                            <input id="input_acc_2_date_naissance" name="input_acc_2_date_naissance" autocomplete="on" class="text_input date_field" type="tel" onchange="majAccordeonData('dateNaissance', this.value)" placeholder="" />
                          

                            <input id="input_acc_2_date_naissance" name="input_acc_2_date_naissance" autocomplete="on" class="text_input date_field" type="tel" onchange="majAccordeonData('dateNaissance', this.value)" placeholder="" /> -->

                          </div>
                        </div>
                        <div class="col-md-6" id="div2Siret" style="display: none">
                          <div class="text-left p0">
                            <label for="input_acc_2_siret" class="input_label">N° SIRET*</label>
                            <input id="input_acc_2_siret" maxlength="14" autocomplete="on" class="text_input" type="text" onchange="majAccordeonData('siret', this.value)" placeholder="" />
                          </div>
                        </div>
                        <script>
                          // Restricts input for the given textbox to the given inputFilter.
                          function setInputFilterSiret2(textbox, inputFilter) {
                            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                              textbox.addEventListener(event, function() {
                                if (inputFilter(this.value)) {
                                  this.oldValue = this.value;
                                  this.oldSelectionStart = this.selectionStart;
                                  this.oldSelectionEnd = this.selectionEnd;
                                } else if (this.hasOwnProperty("oldValue")) {
                                  this.value = this.oldValue;
                                  this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                                } else {
                                  this.value = "";
                                }
                              });
                            });
                          }

                          setInputFilterSiret2(document.getElementById("input_acc_2_siret"), function(value) {
                            return /^\d*$/.test(value);
                          });
                        </script>
                      <?php endif; ?>
                      <?php if(($_SESSION['profil'] != 16 &&  $_SESSION['profil'] != 12 && $_SESSION['profil'] != 14 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) ||(($_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)){ ?>
                      <div class="col-md-6">
                        <div class="text-left p0">
                          <label for="acc_2_mailContact" class="input_label">E-Mail</label>
                          <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) { ?>
                            <div class="row"><input id="acc_2_mailContact1" autocomplete="on" class="text_input col-md-5 col-5" type="text" onchange="majAccordeonData('email', this.value)" placeholder="" />
                              <div class="col-md-1 col-1">
                                <center>@</center>
                              </div><input id="acc_2_mailContact2" autocomplete="on" class="text_input col-md-6 col-6" type="text" onchange="majAccordeonData('email', this.value)" placeholder="" />
                            </div>
                          <?php } else { ?>
                            <input id="acc_2_mailContact" autocomplete="on" class="text_input" type="text" onchange="majAccordeonData('email', this.value)" placeholder="" />
                          <?php } ?>
                        </div>
                      </div>
                      <?php } ?>
                    <?php if(($_SESSION['profil'] != 16 &&  $_SESSION['profil'] != 12 && $_SESSION['profil'] != 14 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) ||(($_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)){ ?>
                    <div class="col-md-6">
                      <label for="acc_2_telContact" class="input_label">Téléphone<?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>*<?php endif; ?></label>
                        <div class="text-left p0 d-flex">
                           


                              <!-- <ul id="listePrefixeNum">
                                <li class="prefixeNum" data-valeurPrefixe="+32" data-img='<img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAUBAMAAACUkLs9AAAAElBMVEXtKTkAAAD64ELyZTtUTBZVTRYE41wOAAAAG0lEQVQY02MQFBQUVVJSUmYAASBHZMRw4N4GAFi9EENfoBrcAAAAAElFTkSuQmCC" />' onclick="changerPaysPrefixe(this)">
                                  <div>
                                    <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAUBAMAAACUkLs9AAAAElBMVEXtKTkAAAD64ELyZTtUTBZVTRYE41wOAAAAG0lEQVQY02MQFBQUVVJSUmYAASBHZMRw4N4GAFi9EENfoBrcAAAAAElFTkSuQmCC" />
                                  </div>
                                  <span id="valeurPrefixeNum">+32</span>
                                </li>
                                  <li class="prefixeNum" data-valeurPrefixe="+41" data-img='<img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUBAMAAAB/pwA+AAAAElBMVEX/AAD/////wMD/QED/MDD/7+9GsWXZAAAAKklEQVQI12NgIAY4G8OZioJEMlmUlAIFlZQcgExmQTAwwMkkxVxU5+ADAGCgBXaKknqMAAAAAElFTkSuQmCC" />' onclick="changerPaysPrefixe(this)">
                                      <div>
                                          <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUBAMAAAB/pwA+AAAAElBMVEX/AAD/////wMD/QED/MDD/7+9GsWXZAAAAKklEQVQI12NgIAY4G8OZioJEMlmUlAIFlZQcgExmQTAwwMkkxVxU5+ADAGCgBXaKknqMAAAAAElFTkSuQmCC" />
                                      </div>
                                      <span id="valeurPrefixeNum">+32</span>
                                  </li>
                                  <li class="prefixeNum" data-valeurPrefixe="+49" data-img='<img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAUBAMAAADxfUlCAAAAD1BMVEXdAAAAAAD/zgD0igBKAABdJSNsAAAAIUlEQVQY02MQRAMCDLQTcUEDDgz0BMZowIBBCQ0o0E4EAL4AHCF2rs9hAAAAAElFTkSuQmCC" />' onclick="changerPaysPrefixe(this)">
                                      <div>
                                          <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAUBAMAAADxfUlCAAAAD1BMVEXdAAAAAAD/zgD0igBKAABdJSNsAAAAIUlEQVQY02MQRAMCDLQTcUEDDgz0BMZowIBBCQ0o0E4EAL4AHCF2rs9hAAAAAElFTkSuQmCC" />
                                      </div>
                                      <span id="valeurPrefixeNum">+49</span>
                                  </li>
                              </ul> -->

                          
                          <!-- <select style="padding-left: 5px; width: 55%" class="text_input"><option value="33">FR (+33)</option><option>+34</option></select> -->
                          
                          <input id="acc_2_telContact" onkeydown="patternInputTel(event, this, this.value)" onkeypress="patternInputTel(event, this, this.value)" onkeyup="patternInputTel(event, this, this.value)" autocomplete="on" class="text_input" type="text" onchange="majAccordeonData('telephone', this.value)" placeholder="" maxlength="20" />
                        </div>
                      </div>
                      <?php } ?>


                      <!--<div id="">
                          <label for="chkSMS">Être informé par SMS du suivi de mon dossier <span class="resultRechercheField">(+ 2€)</span></label>
                        </div>-->
                      <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>

                        <!-- <div class="col-md-12" style="margin-top: 30px;"><span style="font-size:16px; vertical-align: -webkit-baseline-middle;">SUIVI DOSSIER PAR SMS (2.00€) ?</span>
                      <table class="tableWrapper">
                        <tr>
                          <td class="tableCell pr8" style="width:15%;"><div id="ouiSMS" style="width:auto;" class="OuiNonPlaque container-check" onclick="switchSMS(1)">Oui<img class="checkLogo" style="display:none;" src="../images/check.svg" alt="Check logo"/></div></td>
                          <td class="tableCell pl8" style="width:15%;"><div id="nonSMS" style="width:auto;" class="OuiNonPlaqueActif OuiNonPlaque container-check" onclick="switchSMS(0)">Non<img class="checkLogo" src="../images/check.svg" alt="Check logo"/></div></td>
                        </tr>

                      </table>
                      </div> -->


                        <div class="col-md-12" style="padding:8px 8px 0px 8px !important;margin-top:20px;">
                          <div id="total_acc2" style="width: 100%">
                            <div id="total_prix" class="row" style="display:flex;align-items:flex-end;width: 100%;">
                              <div class="col-md-12" style="display:flex; justify-content: space-between">
                                <span class="input_label " style="font-weight: 400; ">Montant de la carte grise</span>
                                <div id="div_acc_2_prix">
                                  <span id="span_acc_2_prixTotal">--,-- </span> <span style="color: #cf0b5d;">€</span>
                                </div>
                                <!--<span class="example flr" id="montant_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span>-->
                                <input type="hidden" name="prix" value="1">
                                <!-- <p class="saisieManuelle tac">Le montant simulé peut être différent du prix réel de votre carte grise, vous serez recontacté par l'un de nos conseillers si c'est le cas</p> -->
                              </div>
                            </div>
                          </div>
                          <?php
                          if ($_SESSION['profil'] == 19 || $_SESSION['profil'] == 20 || $_SESSION['profil'] == 21) {
                          ?>
                            <hr>
                          <?php } ?>
                        </div>

                        <!-- <div class="col-md-6" style="line-height: 1;">
                          <div class="div_acc_5_sms" id="div_acc_5_4" onclick="checkSMS()" style="border: 1px solid #dedede;background-color:white;color:black;">
                            <div><i class="far fa-circle" id="div_acc_5_4_radio_off" style="display:inline-block"></i><i class="far fa-dot-circle" id="div_acc_5_4_radio_on" style="display:none"></i></div>
                            <div>
                              <div style="display:flex;justify-content:space-between;align-items:center">
                                <span style="padding-top: 0; ">ACTIVER SUIVI SMS DE LA CARTE GRISE (2.00€)</span>
                                <input type="checkbox" class="input_acc_5" id="checkSMS" onchange="majAccordeanData('sms', this.checked);" />
                              </div>
                            </div>
                          </div>
                        </div> -->

                        <input type="checkbox" style="display: none" name="chkSMS" id="chkSMS" onchange="majAccordeonData('chkSMS', this.checked)" />
                      <?php endif; ?>

                      <div id="div_acc_2_passReduction" class="col-md-6">
                        <div>
                          <div class="">
                            <label for="span_acc_2_box" class="input_label">Numéro PASS / Code réduction <span class="example flr" id="numeroPass_trigger"><i class="fal fa-exclamation-circle fa-1x" style="margin-left:4px;"></i></span></label>
                          </div>
                          <div class="" style="display:flex;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex">
                            <input id="span_acc_2_box" onblur="checkPassReduction(); cacherPopover('webuiPopover6');" type="text" class="text_input" />
                            <button id="span_acc_2_okPassReduction" onclick="checkPassReduction()">OK</button>

                          </div>
                        </div>
                      </div>
                      <div id="div_acc_2_prixCG" class="row" style="width: 100%">
                        <div class="col-md-6" style="display: flex; justify-content: space-between">
                          <span>CARTE GRISE</span>
                          <span id="span_acc_2_cg" style="font-size: 20px; font-weight: bold; position: relative; right: 38px;"><span id="span_acc_2_cgPrix"></span> €</span>
                        </div>
                        <div class="col-md-6" style="display: flex; justify-content: space-between">
                          <span>SUPPLÉMENT DÉMARCHE</span>
                          <span id="span_acc_2_supplement" style="font-size: 20px; font-weight: bold;"><span id="span_acc_2_supplementPrix"></span> €</span>
                        </div>
                      </div>
                      <div id="div_acc_2_prixService" class="row" style="width: 100%">
                        <div class="col-md-6" style="width: 100%">
                          <div class="flex-sb">
                            <span>SERVICE</span>
                            <div style="margin-left:16px">
                              <button class="btnChangeValue" onclick="subQuantityCom()" id="subQuantityCom">-</button>
                              <span style="margin: 0px 8px"><input type="text" onchange="convertToDecimal(this.value);" id="acc_2_qteCom" name="acc_2_qteCom" value="20" min="20" max="95" class="tar" readonly><span style="margin-left: -5px; font-weight: bold; font-size: 20px">.00 €</span></span>
                              <button class="btnChangeValue" onclick="addQuantityCom()" id="addQuantityCom">+</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" style="width: 100%">
                          <div class="flex-sb">
                            <span>C.C.<span class="example flr cpointer" onclick="showInfoAcc2()"><i class="fal fa-info-circle"></i></span></span>
                            <span id="span_acc_2_qteCom" style="font-size: 20px; font-weight: bold">0.00 €</span>
                          </div>
                        </div>
                      </div>
                      <?php if ($_SESSION['profil'] != 17 && $_SESSION['profil'] != 18 && $_SESSION['profil'] != 19 && $_SESSION['profil'] != 20) : ?>
                        <div id="total_acc2" style="width: 100%">
                          <div id="total_prix" class="row" style="display:flex;align-items:flex-end;width: 100%;">
                            <div class="col-md-6" style="display:flex; justify-content: space-between;flex-direction:column;">
                              <div style="display: flex;justify-content: space-between;">
                                <span class="input_label" <?php if($_SESSION["profil"] == 16) { echo 'style="text-transform:none;display:flex;align-items:center;"';} ?>><?php if($_SESSION["profil"] == 16){echo '<span id="prixCarteGrise">Prix carte grise</span> <span id="infoPrixCarteGrise"><i class="fal fa-info-circle" style="margin-left:10px;color:#cf0b5d"></i></span>';}else{echo "Total";} ?></span>
                                <div id="div_acc_2_prix" style="font-size:16px;font-weight:lighter">
                                  <span id="span_acc_2_prixTotal"  style="<?php if($_SESSION["profil"] == 16){echo "color:#292b2c";}else{echo "font-weight:bold; color: #cf0b5d";} ?>">--,--</span> <span style="<?php if($_SESSION["profil"] == 16){echo "color:#292b2c";}else{echo "font-weight:bold; color: #cf0b5d";} ?>">€</span>
                                </div>
                              </div>
                            <?php if($_SESSION["profil"] == 16) { ?>
                            <div style="display: flex;justify-content: space-between;">
                              <span class="input_label" style="text-transform:none;display:flex;align-items:center;">Prestation commerçant <span id="infoServiceCommercant" ><i class="fal fa-info-circle" style="margin-left:10px;color:#cf0b5d"></i></span></span>
                              <div id="div_acc_2_prix" style="font-size:16px;font-weight:lighter">
                                <span id="prixService" style="color:#292b2c">29.90</span> <span>€</span>
                              </div>
                            </div>
                            <hr style="border: none;border-bottom: 2px solid #292b2c;width: 100%;opacity:.1;">
                            <div style="display: flex;justify-content: space-between;">
                              <span class="input_label" style="text-transform:none;font-weight:bold;">Total</span>
                              <div id="div_acc_2_prix" style="font-size:16px;">
                                <span id="sommeTotal" style="font-weight: bold;color: #cf0b5d;">--,--</span> <span style="color: #cf0b5d;font-weight:bold;">€</span>
                              </div>
                            </div>
                            <?php } ?>
                              <!--<span class="example flr" id="montant_trigger"><i class="saisieManuelle fal fa-info-circle"></i></span>-->
                              <input type="hidden" name="prix" value="1">
                              <!-- <p class="saisieManuelle tac">Le montant simulé peut être différent du prix réel de votre carte grise, vous serez recontacté par l'un de nos conseillers si c'est le cas</p> -->
                            </div>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>

                  </div>
                  <?php
                  if ($_SESSION['profil'] == 20) { ?>
                    <div id="divOuiNonPaiement">
                      <div style="font-size:18px" class="divOuiNonPaiementProfil20">Avez-vous encaissé la prestation de <span style="font-weight:bold; color: #cf0b5d;" id="span_acc_5b_prixTotal">29.90 €</span> auprès de votre client ?<span class="example flr" id="encaissementTrigger"><i class="fas fa-info-circle"></i></span></div>
                      <table class="tableWrapper">
                        <tr>
                          <td class="tableCell pr8">
                            <div id="ouiPaiement" class="OuiNonPlaque container-check " onclick="switchPaiement(1)" style="border-color:#D4D4D4">Oui<i id="checkPaiementOui" style="font-size: 20px; right:25px;top:10px;position:absolute;display:none; border-color:#D4D4D4" class="fas fa-check checkBox"></i></div>
                          </td>
                          <td class="tableCell pl8">
                            <div id="nonPaiement" class="OuiNonPlaque container-check divDemarcheActif " onclick="switchPaiement(0)" style=border-color:#D4D4D4>Non<i id="checkPaiementNon" style="font-size: 20px; right:25px;top:10px;position:absolute; border-color:#D4D4D4" class="fas fa-check checkBox"></i></div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  <?php } ?>
                  <div id="navBarreBleuDemarche" class="row nav-buttons">
                    <button id="retourSimulationBtn" style="margin: 4px 0px !important;" class="previous" onclick="retourAccueil();"><i class="far fa-angle-left"></i><span>Retour</span></button>
                    <!--<button id="modifierSimulationBtn" class="previous" onclick="modifierPrixSimule();"  ><i class="far fa-angle-left"></i><span>Modifier</span></button>-->
                      <div id="spinnerCalculerSimulation" style="display:none"><img src="loading.svg" height="50px"width="50px" /></div>
                    <button id="calculerSimulationBtn" class="next" onclick="enregistrementDonneesVehicule()" style="display:none; margin: 4px 0px !important;"><span>Calculer le prix</span></button>
                    <div id="spinner"><img src="loading.svg" height="50px"width="50px" /></div>
                    <?php if(($_SESSION['profil'] != 12 && $_SESSION['profil'] != 14 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) || (($_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)){?><button id="validerSimulationBtn" class="next" onclick="<?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) {
                                                                              echo 'checkInfosClientsSimulation()';
                                                                            } else {
                                                                              echo 'afficherMessageSimule();updateClientSimulation()';
                                                                            } ?>" style="display:none; margin: 4px 0px !important;"><span id="btn_acc_2_valider_simulation_span" style="text-align: right;">Valider la simulation</span></button><?php } ?>
                    <?php if ($_SESSION['profil'] == 17 || $_SESSION['profil'] == 18 || $_SESSION['profil'] == 19 || $_SESSION['profil'] == 20) : ?>
                      <!-- <h1 id=" 	font-family: 'icomoon'; src:url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.eot?-9haulc'); src:url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.eot?#iefix-9haulc') format('embedded-opentype'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.woff?-9haulc') format('woff'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.ttf?-9haulc') format('truetype'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.svg?-9haulc#icomoon') format('svg'); font-weight: normal; font-style: normal ; font-family: 'icomoon'; speak: none; ; font-style: normal; ; font-weight: normal; ; font-variant: normal; ; text-transform: none; ; line-height: 1; ; -webkit-font-smoothing: antialiased; ; -moz-osx-font-smoothing: grayscale; content: 'e004'; transform: rotate(0); transform: rotate(360deg); display: inline-block; font-size:4em; height: 1em; line-height: 1; margin: .5em; animation: anim-rotate 2s infinite linear; color: #444; text-shadow: 0 0 .25em rgba(255,255,255, .3); animation: anim-rotate 1s infinite steps(8); animation: anim-rotate 1s infinite steps(12); font-family: sans-serif; color: #ccc; line-height: 1.5; font-size: 1em; background: #181818; text-align: center; text-decoration: none; color: #444; text-shadow: 0 1px 2px rgba(0,0,0, .3); transition: color .3s; color: #ccc; margin-top: 2em;  "><i class="fa fa-spinner fa-spin"></i></h1> -->
                      <!-- <div id="fin_loading_popup" style="display:none" class="spinner icon-spinner-5" aria-hidden="true"></div> -->
                      <img src="/demarche/loading.svg" alt="" id="continuer_loading_logista" style="display:none; position: relative; ">
                    <?php endif; ?>
                      <div id="spinnerAcc2Valider" style="display:none"><img src="loading.svg" height="50px"width="50px" /></div>

                      <button class="next" id="btn_acc_2_valider" style="margin: 4px 0px !important;" onclick="acc2_valider();"><span id="btn_acc_2_valider_span">Continuer</span><i class="far fa-angle-right"></i></button>
                    <button class="next" onclick="window.location.href='/backoffice/suivicommandeburaliste'" id="gestionnaire_cg_logista" style="margin: 4px 0px !important; display:none;"><span id="btn_acc_2_valider_span">Gestionnaire carte grise</span><i class="far fa-angle-right"></i></button>
                  </div>
                </div>
              </div>
              <div id="fullAcc2b" style="display:none">
                <input class="acc" type="radio" name="acc" onclick="deplierAcc();" id="acc2b">
                <div class="acc-body">
                  <div>
                    <div id="acc_2_containerDemarches">
                      <div class="row">
                        <div class="col-sm-12 col-md-3 divDemarche divDemarcheActif" id="div_acc2b_titulaire" onclick="majAccordeonData('actionTitulaireOuDomicile', 'titulaire'); updateDemarcheSimulation()">
                          <div class="row align-items-center" style="height:100%;">
                            <div class="col-2 col-md-3 pictoDemarche">
                              <i class="fal fa-id-badge"></i>
                            </div>
                            <div class="col-10 col-md-9 texteDemarche" style="text-align: left" style="text-align: left !important;">
                              <span>Changement de titulaire</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-3 divDemarche" id="div_acc2b_domicile" onclick="majAccordeonData('actionTitulaireOuDomicile', 'domicile'); updateDemarcheSimulation()">
                          <div class="row align-items-center" style="height:100%;">
                            <div class="col-2 col-md-3 pictoDemarche">
                              <i class="fal fa-home-lg-alt"></i>
                            </div>
                            <div class="col-10 col-md-9 texteDemarche" style="text-align: left" style="text-align: left !important;">
                              <span>Changement de domicile</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-3 divDemarche" id="div_acc2b_enregistrementActeSession" onclick="majAccordeonData('actionTitulaireOuDomicile', 'enregistrementActeSession'); updateDemarcheSimulation()">
                          <div class="row align-items-center" style="height:100%;">
                            <div class="col-2 col-md-3 pictoDemarche">
                              <i class="fal fa-file-check"></i>
                            </div>
                            <div class="col-10 col-md-9 texteDemarche" style="text-align: left" style="text-align: left !important;">
                              <span>Enr. acte de cession</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-3 divDemarche" id="div_acc2b_autre">
                          <a id="acc_2_autresDemarches" href="#modalSelectionAutreDemarche" data-toggle="modal">
                            <div class="row align-items-center" style="height:100%;">
                              <div class="col-2 col-md-3 pictoDemarche">
                                <i class="fal fa-clipboard-list"></i>
                              </div>
                              <div class="col-10 col-md-9 texteDemarche" style="text-align: left" style="text-align: left !important; text-decoration: none;">
                                <span id="span_acc_2b_autresDemarches">Autres démarches</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div>
                        <div id="titulaireSpecificAreaStep2b">
                          <br>
                          <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="alert alert-vmv text-center">
                                Marque : <span class="resultRechercheField" id="span_acc_2b_marque"></span>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="alert alert-vmv text-center">
                                Date Mise en Circulation : <br class="hiddenOnDesktop"><span class="resultRechercheField" id="span_acc_2b_circulation"></span>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="alert alert-vmv text-center">
                                Type : <span class="resultRechercheField" id="span_acc_2b_type"></span>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="alert alert-vmv text-center">
                                Numéro de série : <span class="resultRechercheField" id="span_acc_2b_serie"></span>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="alert alert-vmv text-center">
                                Puissance fiscale : <span class="resultRechercheField" id="span_acc_2b_puissance_fiscale"></span>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                              <div class="alert alert-vmv text-center">
                                Carburant : <span class="resultRechercheField" id="span_acc_2b_carburant"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-12 col-xs-12">
                            <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-12" style="margin: auto;">
                                <div class="alert alert-vmv prix text-center">
                                  <strong>Coût de la carte grise :<br><span id="span_acc_2b_prixTotal">--,--</span> €</strong>
                                </div>
                              </div>
                              <input type="hidden" name="prix" value="413.9">
                            </div>
                            <div class="row">
                              <div class="col-md-4 col-sm-4 col-xs-12" style="margin: auto;">
                                <div class="text-center">
                                  <button class="btn btn-vmv grey" onclick="acc2b_retour();">Retour</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
              </div>
              <div id="fullAcc3">
                <input class="acc" type="radio" name="acc" onclick="deplierAcc();" id="acc3" onload="afficherChoixPlaque(1)">
                <div class="acc-body">
                  <div>
                    <div id="divOuiNonPlaque" style="padding:8px;">
                      <div style="font-size:18px">Commander des plaques pour le véhicule <span class="colorRose numImmat" id="numImmatBis4"></span> ?</div>
                      <table class="tableWrapper">
                        <tr>
                          <td class="tableCell pr8">
                            <div id="ouiPlaque" class="OuiNonPlaque container-check" onclick="switchPlaque(1)" style="border-color:#D4D4D4">Oui<i id="checkPlaqueOui" style="font-size: 20px; right:40px;top:10px;position:absolute; border-color:#D4D4D4;" class="fas fa-check checkBox"></i></div>
                          </td>
                          <td class="tableCell pl8">
                            <div id="nonPlaque" class="OuiNonPlaque container-check" onclick="switchPlaque(0)" style="border-color:#D4D4D4">Non<i id="checkPlaqueNon" style="font-size: 20px; right:40px;top:10px;position:absolute;display:none; border-color:#D4D4D4;" class="fas fa-check checkBox"></i></div>
                          </td>
                        </tr>

                      </table>
                    </div>

                    <div id="divPasDePlaque" class="acc-bodyTitleContainer bgGris">
                      <div class="col-md-12">
                        L'achat de plaque pour ce type de véhicule n'est pas disponible pour le moment.
                        <br class="hiddenOnMobile">
                        Veuillez cliquer sur "Continuer" pour passer à l'étape suivante.
                      </div>
                    </div>
                    <div class="col-md-12 break-line">
                      <hr>
                    </div>
                    <div id="selectTypePlaque" style="padding:8px;">
                      <div style="font-size:18px">Choisissez un matériau pour les plaques du véhicule <span class="colorRose numImmat" id="numImmatBis4"></span> :</div>
                      <table class="tableWrapper">
                        <tr>
                          <td class="tableCell pr8">
                            <div id="ouiAluminium" class="OuiNonPlaque container-check" onclick="changerTypePlaque(2)" style="border-color:#D4D4D4">Aluminium<i id="checkAlu" style="font-size: 20px; right:25px;top:10px;position:absolute;display:none; border-color:#D4D4D4" class="fas fa-check checkBox"></i></div>
                          </td>
                          <td class="tableCell pl8">
                            <div id="ouiPlexiglass" class="OuiNonPlaque container-check" onclick="changerTypePlaque(1)" style="border-color:#D4D4D4">Plexiglass<i id="checkPlexi" style="font-size: 20px; right:25px;top:10px;position:absolute; border-color:#D4D4D4" class="fas fa-check checkBox"></i></div>
                          </td>
                        </tr>

                      </table>
                    </div>
                    <!--<div class="row" id="selectTypePlaque">
                        <div class="col-md-6">
                          <input type="radio" id="plaqueAlu" name="selectPlaque" onclick="changerTypePlaque(2)" checked><label for="plaqueAlu" class="selectPlaque container-check">Aluminium<img class="checkLogo" src="../images/check.svg" alt="Check logo" id="checkLogoAlu"/></label>
                        </div>
                        <div class="col-md-6">
                          <input type="radio" id="plaquePlexi" name="selectPlaque" onclick="changerTypePlaque(1)" checked><label for="plaquePlexi" class="selectPlaque container-check">Plexiglass<img class="checkLogo" src="../images/check.svg" alt="Check logo" id="checkLogoPlexi"/></label>
                        </div>
                      </div>-->
                    <div id="divChoixPlaque" style="padding:8px;" class="row">
                      <div id="div_acc_3_plaques" class="col-md-6">
                        <img id="imgPlaqueAlu" class="imgPlaque" src="../images/plaque_alu.png" alt="Plaque aluminium" />
                        <img id="imgPlaquePlexi" class="imgPlaque" src="../images/plaque_plexi.png" alt="Plaque plexiglass" style="display:none" />
                      </div>
                      <div class="col-md-6">
                        <div id="descPlaque">
                          Plaques homologuées et fabriquées en France. <br>
                          Expédition sous 3 jours ouvrés après réalisation de votre carte grise. <br>
                          Les rivets sont offerts.
                          <div id="div_acc_3_qtePlaque" class="row nav-buttons">
                            <div>Quantité</div>
                            <div>
                              <button class="btnChangeValue" onclick="subQuantityPlaque()" id="subQuantityPlaque">-</button>
                              <input type="number" id="acc_3_qtePlaqueEtape3" name="acc_3_qtePlaqueEtape3" value="2" min="0" max="99" class="tar" readonly>
                              <button class="btnChangeValue" onclick="addQuantityPlaque()" id="addQuantityPlaque">+</button>
                            </div>
                          </div>
                          <div id="div_acc_3_prixPlaque" class="row nav-buttons">
                            <div id="div_acc_3_montantTotal">
                              <span class="input_label" id="span_acc_3_montantTotal">Montant des plaques</span>
                            </div>
                            <div id="div_acc_3_prixTotal" style="font-size: 20px; font-weight: 900;">
                              <span id="span_acc_3_prixTotalPlaque">--,--</span> €
                              <input type="hidden" name="prix" value="1">
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>


                  <div>
                    <div id="recapPrixPlaqueContainer">
                      <div class=''>
                      </div>
                      <input type="hidden" name="prix" value="">
                    </div>
                    <div id="acc_3_div_continuer" class="row nav-buttons">
                      <button class="previous" id="acc3_retour" onclick="acc3_retour();"><i class="far fa-angle-left"></i><span>Retour</span></button>
                      <button class="next" id="acc3_valider" onclick="acc3_valider();"><span>Continuer</span><i class="far fa-angle-right"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="fullAcc4" style="border-top: 4px solid rgb(207, 11, 93);">
              <input class="acc" type="radio" name="acc" onclick="deplierAcc();" id="acc4">
              <div class="acc-body">
              <?php if(($_SESSION['profil'] === "14" || $_SESSION['profil'] === "12") || $_SESSION['profil'] === 23 && $_SESSION['nouvelleDemarche'] == 1){ ?>
                <div class="row">
                  <div style="width: 100%">
                    <div class="acc-bodyTitleContainer">
                      <div id="acc-bodyTitleContainer_coordonnees">
                        <section id="section-1">
                          <h3 id="titreCoordonnees">Informations</h3>
                          <p id="descriptionCoordonnees">Ces informations permettront de remplir automatiquement les documents cerfas.</p>
                            <div class="sousTitresDemarche"><span>Identité du titulaire</span></div>
                            <div id="div-identiteClient" class="gridDemarche">
                            <div class="containerDropdown width100">
                              <label class="labelDropdown" for="civilite">Civilité</label>
                              <select class="selectDropdown noselect width100" name="civilite" id="civilite" onchange="changeInputCivilite(this.value, this.id); updateInfoClient()">
                                <option class="noselect" value="homme">Homme</option>
                                <option class="noselect" value="femme">Femme</option>
                                <option class="noselect" value="entreprise">Entreprise</option>
                              </select>
                              <div class="flecheDropdown" >
                                <svg class="svgDropdown" width="11" height="9" viewBox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.12946 6.7984C4.17075 6.86057 4.22599 6.91141 4.29043 6.94653C4.35488 6.98165 4.42659 7 4.49939 7C4.57219 7 4.6439 6.98165 4.70835 6.94653C4.77279 6.91141 4.82803 6.86057 4.86932 6.7984L8.91964 0.73215C8.96652 0.662181 8.99401 0.580228 8.99913 0.495195C9.00424 0.410163 8.98679 0.325302 8.94866 0.249833C8.91053 0.174365 8.85318 0.111175 8.78284 0.0671292C8.71251 0.0230835 8.63187 -0.000133618 8.54971 5.78465e-07H0.449073C0.367096 0.000351679 0.286762 0.0238674 0.216711 0.0680186C0.14666 0.11217 0.089541 0.175286 0.0514976 0.25058C0.0134543 0.325874 -0.00407424 0.410497 0.000796921 0.495348C0.00566808 0.580199 0.0327547 0.662067 0.0791438 0.73215L4.12946 6.7984Z" fill="#4C4C4C"/>
                                </svg>
                              </div>
                            </div>
                            <div class="containerInput" id="blocNom">
                              <input class="inputInput width100" value="" id="inputNom" onchange="updateInfoClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                              <label class="labelInput colorPlaceHolder" for="inputNom">Nom *</label>
                            </div>
                            <div class="containerInput" id="blocPrenom">
                              <input class="inputInput width100" value="" id="inputPrenom" onchange="updateInfoClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                              <label class="labelInput colorPlaceHolder" for="inputPrenom">Prénom *</label>
                            </div>
                            <div class="containerInput blocNomUsage" id="blocNomUsage">
                              <input class="inputInput width100" value="" id="inputNomUsage" onchange="updateInfoClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                              <label class="labelInput colorPlaceHolder" for="inputNomUsage">Nom d'usage</label>
                            </div>
                            <div class="containerInput" id="blocSIRENEntreprise">
                                <input class="inputInput width100" value="" id="inputSIRENEntreprise" onchange="updateInfoClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputSIRENEntreprise">SIREN *</label>
                            </div>
                            <div class="containerInput deuxColDroite" id="blocRaisonSocialeEntreprise">
                                <input class="inputInput width100" value="" id="inputRaisonSocialeEntreprise" onchange="updateInfoClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputRaisonSocialeEntreprise">Raison Sociale *</label>
                            </div>
                            <div class="containerInput" style="position: relative;" id="blocDateNaissance">
                              <input class="inputInput width100" value="" id="inputDateNaissance" onkeypress="patternInputDate(event, this, this.value);" onkeyup="this.setAttribute('value', this.value); isValidDate(this.value)" onchange="updateInfoClient()" maxlength="10" type="text" onkeyup="this.setAttribute('value', this.value);">
                              <label class="labelInput colorPlaceHolder" for="inputDateNaissance">Date de naissance *</label>
                              <span id="alertMessageIsValidDate" style="color: red; position: absolute; width: 100%; top: 65px; left: 0px; z-index: 10;"></span>
                            </div>
                            

                            <div class="containerInput" id="blocCommuneNaissance">
                              <input class="inputInput width100" value="" id="inputCommuneNaissance" onchange="updateInfoClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                              <label class="labelInput colorPlaceHolder" for="inputCommuneNaissance">Commune de naissance *</label>
                            </div>

                            <div class="containerDropdown width100" id="blocPays">
                              <label class="labelDropdown" for="paysNaissance">Pays de naissance</label>
                              <select class="selectDropdown noselect width100" name="paysNaissance" id="paysNaissance" onchange="changeInputLieuNaissance(this.value); updateInfoClient()">
                                <option class="noselect" value="france">France</option>
                                <option class="noselect" value="etranger">Etranger</option>
                              </select>
                              <div class="flecheDropdown">
                                <svg class="svgDropdown" width="11" height="9" viewBox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4.12946 6.7984C4.17075 6.86057 4.22599 6.91141 4.29043 6.94653C4.35488 6.98165 4.42659 7 4.49939 7C4.57219 7 4.6439 6.98165 4.70835 6.94653C4.77279 6.91141 4.82803 6.86057 4.86932 6.7984L8.91964 0.73215C8.96652 0.662181 8.99401 0.580228 8.99913 0.495195C9.00424 0.410163 8.98679 0.325302 8.94866 0.249833C8.91053 0.174365 8.85318 0.111175 8.78284 0.0671292C8.71251 0.0230835 8.63187 -0.000133618 8.54971 5.78465e-07H0.449073C0.367096 0.000351679 0.286762 0.0238674 0.216711 0.0680186C0.14666 0.11217 0.089541 0.175286 0.0514976 0.25058C0.0134543 0.325874 -0.00407424 0.410497 0.000796921 0.495348C0.00566808 0.580199 0.0327547 0.662067 0.0791438 0.73215L4.12946 6.7984Z" fill="#4C4C4C"/>
                                </svg>
                              </div>
                            </div>
                            <div class="containerDropdown width100" id="blocDepartement">
                                    <label class="labelDropdown" for="inputDepartement">Département de naissance *</label>
                                    <select class="selectDropdown noselect width100" name="inputDepartement" id="inputDepartement" onchange="updateInfoClient()">
                                        <option class="noselect" disabled selected></option>
                                        <option class="noselect" value="1">01 - Ain</option>
                                        <option class="noselect" value="2">02 - Aisne</option>
                                        <option class="noselect" value="3">03 - Allier</option>
                                        <option class="noselect" value="4">04 - Alpes de Haute Provence</option>
                                        <option class="noselect" value="5">05 - Hautes Alpes</option>
                                        <option class="noselect" value="6">06 - Alpes Maritimes</option>
                                        <option class="noselect" value="7">07 - Ard&egrave;che</option>
                                        <option class="noselect" value="8">08 - Ardennes</option>
                                        <option class="noselect" value="9">09 - Ari&egrave;ge</option>
                                        <option class="noselect" value="10">10 - Aube</option>
                                        <option class="noselect" value="11">11 - Aude</option>
                                        <option class="noselect" value="12">12 - Aveyron</option>
                                        <option class="noselect" value="13">13 - Bouches du Rh&ocirc;ne</option>
                                        <option class="noselect" value="14">14 - Calvados</option>
                                        <option class="noselect" value="15">15 - Cantal</option>
                                        <option class="noselect" value="16">16 - Charente</option>
                                        <option class="noselect" value="17">17 - Charente Maritime</option>
                                        <option class="noselect" value="18">18 - Cher</option>
                                        <option class="noselect" value="19">19 - Corr&egrave;ze</option>
                                        <option class="noselect" value="2A">2A - Corse du Sud</option>
                                        <option class="noselect" value="2B">2B - Haute Corse</option>
                                        <option class="noselect" value="21">21 - C&ocirc;te d&acute;Or</option>
                                        <option class="noselect" value="22">22 - C&ocirc;tes d&acute;Armor</option>
                                        <option class="noselect" value="23">23 - Creuse</option>
                                        <option class="noselect" value="24">24 - Dordogne</option>
                                        <option class="noselect" value="25">25 - Doubs</option>
                                        <option class="noselect" value="26">26 - Dr&ocirc;me</option>
                                        <option class="noselect" value="27">27 - Eure</option>
                                        <option class="noselect" value="28">28 - Eure et Loir</option>
                                        <option class="noselect" value="29">29 - Finist&egrave;re</option>
                                        <option class="noselect" value="30">30 - Gard</option>
                                        <option class="noselect" value="31">31 - Haute Garonne</option>
                                        <option class="noselect" value="32">32 - Gers</option>
                                        <option class="noselect" value="33">33 - Gironde</option>
                                        <option class="noselect" value="34">34 - H&eacute;rault</option>
                                        <option class="noselect" value="35">35 - Ille et Vilaine</option>
                                        <option class="noselect" value="36">36 - Indre</option>
                                        <option class="noselect" value="37">37 - Indre et Loire</option>
                                        <option class="noselect" value="38">38 - Is&egrave;re</option>
                                        <option class="noselect" value="39">39 - Jura</option>
                                        <option class="noselect" value="40">40 - Landes</option>
                                        <option class="noselect" value="41">41 - Loir et Cher</option>
                                        <option class="noselect" value="42">42 - Loire</option>
                                        <option class="noselect" value="43">43 - Haute Loire</option>
                                        <option class="noselect" value="44">44 - Loire Atlantique</option>
                                        <option class="noselect" value="45">45 - Loiret</option>
                                        <option class="noselect" value="46">46 - Lot</option>
                                        <option class="noselect" value="47">47 - Lot et Garonne</option>
                                        <option class="noselect" value="48">48 - Loz&egrave;re</option>
                                        <option class="noselect" value="49">49 - Maine et Loire</option>
                                        <option class="noselect" value="50">50 - Manche</option>
                                        <option class="noselect" value="51">51 - Marne</option>
                                        <option class="noselect" value="52">52 - Haute Marne</option>
                                        <option class="noselect" value="53">53 - Mayenne</option>
                                        <option class="noselect" value="54">54 - Meurthe et Moselle</option>
                                        <option class="noselect" value="55">55 - Meuse</option>
                                        <option class="noselect" value="56">56 - Morbihan</option>
                                        <option class="noselect" value="57">57 - Moselle</option>
                                        <option class="noselect" value="58">58 - Ni&egrave;vre</option>
                                        <option class="noselect" value="59">59 - Nord</option>
                                        <option class="noselect" value="60">60 - Oise</option>
                                        <option class="noselect" value="61">61 - Orne</option>
                                        <option class="noselect" value="62">62 - Pas de Calais</option>
                                        <option class="noselect" value="63">63 - Puy de D&ocirc;me</option>
                                        <option class="noselect" value="64">64 - Pyr&eacute;n&eacute;es Atlantiques</option>
                                        <option class="noselect" value="65">65 - Hautes Pyr&eacute;n&eacute;es</option>
                                        <option class="noselect" value="66">66 - Pyr&eacute;n&eacute;es Orientales</option>
                                        <option class="noselect" value="67">67 - Bas Rhin</option>
                                        <option class="noselect" value="68">68 - Haut Rhin</option>
                                        <option class="noselect" value="69">69 - Rh&ocirc;ne</option>
                                        <option class="noselect" value="70">70 - Haute Sa&ocirc;ne</option>
                                        <option class="noselect" value="71">71 - Sa&ocirc;ne et Loire</option>
                                        <option class="noselect" value="72">72 - Sarthe</option>
                                        <option class="noselect" value="73">73 - Savoie</option>
                                        <option class="noselect" value="74">74 - Haute Savoie</option>
                                        <option class="noselect" value="75">75 - Paris</option>
                                        <option class="noselect" value="76">76 - Seine Maritime</option>
                                        <option class="noselect" value="77">77 - Seine et Marne</option>
                                        <option class="noselect" value="78">78 - Yvelines</option>
                                        <option class="noselect" value="79">79 - Deux S&egrave;vres</option>
                                        <option class="noselect" value="80">80 - Somme</option>
                                        <option class="noselect" value="81">81 - Tarn</option>
                                        <option class="noselect" value="82">82 - Tarn et Garonne</option>
                                        <option class="noselect" value="83">83 - Var</option>
                                        <option class="noselect" value="84">84 - Vaucluse</option>
                                        <option class="noselect" value="85">85 - Vend&eacute;e</option>
                                        <option class="noselect" value="86">86 - Vienne</option>
                                        <option class="noselect" value="87">87 - Haute Vienne</option>
                                        <option class="noselect" value="88">88 - Vosges</option>
                                        <option class="noselect" value="89">89 - Yonne</option>
                                        <option class="noselect" value="90">90 - Territoire de Belfort</option>
                                        <option class="noselect" value="91">91 - Essonne</option>
                                        <option class="noselect" value="92">92 - Hauts de Seine</option>
                                        <option class="noselect" value="93">93 - Seine Saint Denis</option>
                                        <option class="noselect" value="94">94 - Val de Marne</option>
                                        <option class="noselect" value="95">95 - Val d&acute;Oise</option>
                                        <option class="noselect" value="971">971 - Guadeloupe</option>
                                        <option class="noselect" value="972">972 - Martinique</option>
                                        <option class="noselect" value="973">973 - Guyane</option>
                                        <option class="noselect" value="974">974 - R&eacute;union</option>
                                        <option class="noselect" value="976">976 - Mayotte</option>
                                    </select>
                                    <div class="flecheDropdown">
                                        <svg class="svgDropdown" width="11" height="9" viewBox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.12946 6.7984C4.17075 6.86057 4.22599 6.91141 4.29043 6.94653C4.35488 6.98165 4.42659 7 4.49939 7C4.57219 7 4.6439 6.98165 4.70835 6.94653C4.77279 6.91141 4.82803 6.86057 4.86932 6.7984L8.91964 0.73215C8.96652 0.662181 8.99401 0.580228 8.99913 0.495195C9.00424 0.410163 8.98679 0.325302 8.94866 0.249833C8.91053 0.174365 8.85318 0.111175 8.78284 0.0671292C8.71251 0.0230835 8.63187 -0.000133618 8.54971 5.78465e-07H0.449073C0.367096 0.000351679 0.286762 0.0238674 0.216711 0.0680186C0.14666 0.11217 0.089541 0.175286 0.0514976 0.25058C0.0134543 0.325874 -0.00407424 0.410497 0.000796921 0.495348C0.00566808 0.580199 0.0327547 0.662067 0.0791438 0.73215L4.12946 6.7984Z" fill="#4C4C4C"/>
                                        </svg>
                                    </div>
                                </div>
                            <div class="containerInput" id="blocPaysDeNaissance">
                              <input class="inputInput width100" value="" onchange="updateInfoClient()" id="inputPaysDeNaissance" type="text" onkeyup="this.setAttribute('value', this.value);">
                              <label class="labelInput colorPlaceHolder" for="inputPaysDeNaissance">Pays *</label>
                            </div>
                          </div>
                        </section>


                        <div class="sousTitresDemarche">
                            <span>Adresse postale</span>
                        </div>

                        <div id="div-adresse" class="gridDemarche">

                            <div class="containerInput deuxColGauche">
                                <input class="inputInput width100" value="" id="inputAdresse" onchange="updateAdressePostaleClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputAdresse">Adresse *</label>
                            </div>

                            <div class="containerInput deuxColDroite">
                                <input class="inputInput width100" value="" id="inputComplementAdresse" type="text" onchange="updateAdressePostaleClient()" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputComplementAdresse">Complément d'adresse</label>
                            </div>

                            <div class="containerInput">
                                <input class="inputInput width100" maxlength="5" value="" id="inputCodePostal" onkeypress="patternInputCP(event, this, this.value);" onchange="updateAdressePostaleClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputCodePostal">Code Postal *</label>
                            </div>

                            <div class="containerInput troisColGauche">
                                <input class="inputInput width100" value="" id="inputVille" onchange="updateAdressePostaleClient()" type="text" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputVille">Ville *</label>
                            </div>

                        </div>
                        <div class="sousTitresDemarche"><span>Coordonnées</span><span id="coordonees_popup"><span class="infoBullePopUp" aria-label="Veuillez saisir au moins l'un des deux champs (email / téléphone) afin de pouvoir continuer la démarche."><svg class="svg-inline--fa fa-info-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-36 344h12V232h-12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v140h12c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12h-72c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12zm36-240c-17.673 0-32 14.327-32 32s14.327 32 32 32 32-14.327 32-32-14.327-32-32-32z"></path></svg></span></span></div>
                        <div id="div-coordonnees" class="gridDemarche">
                            <div class="containerInput">
                                <input class="inputInput width100" value="" id="inputMail" type="text" onchange="updateCoordonneesClient()" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputMail">Email *</label>
                            </div>
                            <div class="containerInput">
                                <input class="inputInput width100" value="" id="inputTelephone" type="text" maxlength="10" onkeypress="patternInputTel(event, this, this.value);" onchange="updateCoordonneesClient()" onkeyup="this.setAttribute('value', this.value);">
                                <label class="labelInput colorPlaceHolder" for="inputTelephone">Téléphone *</label>
                            </div>
                        </div>
                            <hr style="margin-top: 40px"/>
                          <div class="divAjoutCoTitulaire">
                              <span class="ajoutCoTitulaire" onclick="ajouterCoTitulaire()">+ Ajouter un co-titulaire</span>

                          </div>
                          <div class="row nav-buttons">
                              <button id="btn_acc_4_retour" class="previous" onclick="<?php if(($_SESSION['profil'] != 12 && $_SESSION['profil'] != 14 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) || (($_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)): ?>acc4_retour()<?php else:?>acc3_retour()<?php endif;?>"><i class="far fa-angle-left"></i><span>Retour</span></button>
                              <div id="spinnerAcc4Valider" style="display:none"><img src="loading.svg" height="50px"width="50px" /></div>
                              <button id="btn_acc_4_valider" class="next" onclick="continuerEtapeFinale();"><span id="btn_continuer_demarche_bleu">Continuer</span><i class="far fa-angle-right"></i></button>
                          </div>
                          <div id="blocPhraseErreurBJ">
                              <p>Certaines informations sont manquantes ou comportent une erreur. Cliquez de nouveau sur "Continuer" pour confirmer votre choix.</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } else { ?> <!-- Fin -->
                <div class="row">
                  <div style="width: 100%">
                    <div class="acc-bodyTitleContainer">
                      <div id="acc-bodyTitleContainer_coordonnees">
                        <!-- <section id="section-choix">
                          <div class="row" id="div_acc_4_type_client">
                            <div class="col-md-6 w100">
                              <div onclick="changerTypeClient(0)" id="div_acc_4_particulier" class="divTypeClient divTypeClientActif container-check">
                                <span>Particulier</span>
                                <img class="checkLogo" src="../images/check.svg" alt="Check logo" id="checkLogoPart"/>
                              </div>
                            </div>
                            <div class="col-md-6 w100">
                              <div onclick="changerTypeClient(1)" id="div_acc_4_societe" class="divTypeClient container-check">
                                <span>Société</span>
                                <img class="checkLogo" src="../images/check.svg" alt="Check logo" id="checkLogoSoc"/>
                              </div>
                            </div>
                          </div>
                        </section> -->
                        <section id="section-1">

                          <div class="row" id="div_acc_4_type_client" style="flex-wrap: nowrap;">
                            <div class="col-md-6 w100">
                              <div onclick="changerTypeClient(0)" id="div_acc_4_particulier" class="divTypeClient divTypeClientActif divDemarcheActif container-check">
                                <span>Particulier<i id="checkParticulier" style="font-size: 20px; right:40px;top:10px;position:absolute;" class="fas fa-check checkBox"></i></span>
                              </div>
                            </div>
                            <div class="col-md-6 w100">
                              <div onclick="changerTypeClient(1)" id="div_acc_4_societe" class="divTypeClient container-check">
                                <span>Entreprise</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6" id="div_acc_4_nom">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_nom" name="acc_4_nom" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_nom" class="input_label label_flottant" style="font-family: inherit;">Nom de naissance *</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_nom_usage">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_nom_usage" name="acc_4_nom_usage" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_nom_usage" class="input_label label_flottant" style="font-family: inherit;">Nom d'usage</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_prenom">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_prenom" name="acc_4_prenom" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_prenom" class="input_label label_flottant" style="font-family: inherit;">Prénom *</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_sexe"><br />
                              <table class="w100" style="margin-top: 3px;">
                                <tr>
                                  <td class="w50 pr8"><label for="acc_4_sexe_h" id="label_acc_4_sexe_h" class="radio_select divDemarcheActif container-check" style="border-radius:4px; border-color:#D4D4D4" onclick="toggleRadio('label_acc_4_sexe_h', 'label_acc_4_sexe_f')"><input type="radio" name="acc_4_sexe" id="acc_4_sexe_h" default checked>Homme <i id="check_label_acc_4_sexe_h" style="font-size: 20px; right:40px;top:10px;position:absolute; border-color:#D4D4D4" class="fas fa-check checkBox"></i></label></td>
                                  <td class="w50 pl8"><label for="acc_4_sexe_f" id="label_acc_4_sexe_f" class="radio_select container-check" style="border-radius:4px; border-color:#D4D4D4" onclick="toggleRadio('label_acc_4_sexe_f', 'label_acc_4_sexe_h')"><input type="radio" name="acc_4_sexe" id="acc_4_sexe_f">Femme<i id="check_label_acc_4_sexe_f" style="font-size: 20px; right:40px;top:10px;position:absolute;display:none; border-color:#D4D4D4" class="fas fa-check checkBox"></i></label></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          <div class="row nav-buttons">
                            <button id="btn_acc_4_retour" class="previous" <?php if($_SESSION['profil'] == 14 || $_SESSION['profil'] == 12 || $_SESSION['profil'] == 23){echo 'onclick="acc3_retour();"';}else{echo 'onclick="acc4_retour();"';} ?>><i class="far fa-angle-left"></i><span>Retour</span></button><!-- Léo -->
                            <button id="btn_acc_4_suivant" class="next" onclick="acc4_suivant(1);"><span id="btn_acc_4_suivant_span">Suivant</span><i class="far fa-angle-right"></i></button>
                          </div>
                        </section>
                        <section id="section-1-societe">
                          <div class="row" id="div_acc_4_type_client" style="flex-wrap: nowrap;">
                            <div class="col-md-6 w100">
                              <div onclick="changerTypeClient(0)" id="div_acc_4_particulier" class="divTypeClient container-check">
                                <span>Particulier</span>
                              </div>
                            </div>
                            <div class="col-md-6 w100">
                              <div onclick="changerTypeClient(1)" id="div_acc_4_societe" class="divTypeClient divTypeClientActif divDemarcheActif container-check">
                                <span>Entreprise <i id="checkEntreprise" style="font-size: 20px; right:40px;top:10px;position:absolute;" class="fas fa-check checkBox"></i></span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6" id="div_acc_4_siret">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" maxlength="14" class="label_flottant form-control" id="input_acc_4_siret" name="input_acc_4_siret" onchange="majAccordeonData('siret', this.value)" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="input_acc_4_siret" class="input_label label_flottant" style="font-family: inherit;">N° SIRET (14 chiffres) *</label>
                              </div>
                            </div>
                            <script>
                              // Restricts input for the given textbox to the given inputFilter.
                              function setInputFilter(textbox, inputFilter) {
                                ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                                  textbox.addEventListener(event, function() {
                                    if (inputFilter(this.value)) {
                                      this.oldValue = this.value;
                                      this.oldSelectionStart = this.selectionStart;
                                      this.oldSelectionEnd = this.selectionEnd;
                                    } else if (this.hasOwnProperty("oldValue")) {
                                      this.value = this.oldValue;
                                      this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                                    } else {
                                      this.value = "";
                                    }
                                  });
                                });
                              }

                              setInputFilter(document.getElementById("input_acc_4_siret"), function(value) {
                                return /^\d*$/.test(value);
                              });
                            </script>
                            <div class="col-md-6" id="div_input_acc_4_siret_nom">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="input_acc_4_siret_nom" name="acc_4_siret_nom" onchange="majAccordeonData('siret_nom', this.value);" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="input_acc_4_siret_nom" class="input_label label_flottant" style="font-family: inherit;">Nom de l'entreprise *</label>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6" id="div_input_acc_4_siret_email">
                              <div class="form-group input-groupe">
                                <input style="font-family: inherit;" type="text" class="label_flottant form-control emailTel mailPro" id="input_acc_4_email" name="acc_4_email" onchange="majAccordeonData('email', this.value); recupMail(this.value);" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="input_acc_4_email_pro" class="input_label label_flottant" style="font-family: inherit;">E-mail</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_input_acc_4_siret_telephone">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" onkeydown="patternInputTel(event, this, this.value)" onkeypress="patternInputTel(event, this, this.value)" onkeyup="patternInputTel(event, this, this.value)" type="text" maxlength="20" class="label_flottant form-control emailTel telBorder telPro" id="input_acc_4_telephone" name="acc_4_telephone" onchange="majAccordeonData('telephone', this.value);recupTel(this.value);" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="input_acc_4_telephone" class="input_label label_flottant" style="font-family: inherit;">Téléphone *</label>
                              </div>
                            </div>
                          </div>
                          <div class="row nav-buttons">
                            <button id="btn_acc_4_retour" class="previous" <?php if($_SESSION['profil'] == 14 || $_SESSION['profil'] == 12 || $_SESSION['profil'] == 23){echo 'onclick="acc3_retour();"';}else{echo 'onclick="acc4_retour();"';} ?>><i class="far fa-angle-left"></i><span>Retour</span></button>
                            <!-- <div class="hiddenOnPasEncaissementCheque" style="display:none;"> -->
                            <button style="display:none" id="btn_acc_4_siret_valider1" class="next" onclick="acc4_valider(1);<?php if ($_SESSION['profil'] == 12) : ?>envoiMailConfirmationBleuDeux();<?php elseif ($_SESSION['profil'] == 14 || $_SESSION['profil'] == 23) : ?>envoiMailConfirmationJauneDeux();<?php endif; ?>"><span>J'envoie un chèque</span><i class="far fa-angle-right"></i></button>
                            <!-- </div> -->
                            <!-- <div class="hiddenOnPasEncaissementTel" style="display:none;"> -->
                            <button style="display:none" id="btn_acc_4_siret_valider2" class="next" onclick="acc4_valider(2);<?php if ($_SESSION['profil'] == 12) : ?>envoiMailConfirmationBleuDeux();<?php elseif ($_SESSION['profil'] == 14 || $_SESSION['profil'] == 23) : ?>envoiMailConfirmationJauneDeux();<?php endif; ?>"><span>Je paie par téléphone</span><i class="far fa-angle-right"></i></button>
                            <!-- </div> -->
                            <!-- <div class="hiddenOnPasEncaissementPDV" style="display:none;"> -->
                            <button style="display:none" id="btn_acc_4_siret_valider3" class="next" onclick="acc4_valider(3);<?php if ($_SESSION['profil'] == 12) : ?>envoiMailConfirmationBleuDeux();<?php elseif ($_SESSION['profil'] == 14 || $_SESSION['profil'] == 23) : ?>envoiMailConfirmationJauneDeux();<?php endif; ?>"><span>Encaissement P.D.V</span><i class="far fa-angle-right"></i></button>
                            <!-- </div> -->
                            <button id="btn_acc_4_valider" class="next" onclick="acc4_valider();"><span id="btn_acc_4_valider_span">Continuer</span><i class="far fa-angle-right"></i></button>
                          </div>
                        </section>
                        <section id="section-2">
                          <div class="row">
                            <!-- <div class="col-md-12 break-line"><hr></div> -->
                            <div class="col-md-6" id="div_acc_4_date_naissance">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" onkeydown="patternInputTel(event, this, this.value)" onkeypress="patternInputTel(event, this, this.value)" onkeyup="patternInputTel(event, this, this.value)" type="tel" class="label_flottant form-control date_field" id="acc_4_date_naissance" name="acc_4_date_naissance" maxlength="10" autocomplete="on" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_date_naissance" class="input_label label_flottant" style="font-family: inherit;">Date de naissance *</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_commune_naissance">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_commune_naissance" name="acc_4_commune_naissance" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_commune_naissance" class="input_label label_flottant" style="font-family: inherit;">Commune de naissance *</label>
                              </div>
                            </div>

                            <div class="col-md-6" id="div_acc_4_lieu_naissance">
                              <div class="form-group input-groupe">
                                <table class="w100" style="margin-top: 3px;">
                                  <tr>
                                    <td class="w50 pr8"><label for="acc_4_france" id="label_acc_4_france" class="radio_select divDemarcheActif container-check" style="border-radius:4px; border-color:#D4D4D4" onclick="franceEtranger(1);"><input type="radio" name="acc_4_france" id="acc_4_france" default checked>France<i id="checkFrance" style="font-size: 20px; right:40px;top:10px;position:absolute;" class="fas fa-check checkBox"></i></label></td>
                                    <td class="w50 pl8"><label for="acc_4_etranger" id="label_acc_4_etranger" class="radio_select container-check" style="border-radius:4px;border-color:#D4D4D4" onclick="franceEtranger(0);"><input type="radio" name="acc_4_etranger" id="acc_4_etranger">Étranger<i id="checkEtranger" style="font-size: 20px; right:40px;top:10px;position:absolute;display:none" class="fas fa-check checkBox"></i></label></td>
                                  </tr>
                                </table>

                                <!-- <select class="label_flottant option_select" name="acc_4_lieu_naissance" id="acc_4_lieu_naissance" onChange="toggleLieuNaissance(this)" required>
                                  <option disabled selected></option>
                                  <option value="1">France</option>
                                  <option value="0">Étranger</option>
                                </select> -->

                              </div>
                            </div>

                            <div class="col-md-6" id="div_acc_4_departement_naissance">
                              <div class="form-group input-groupe">
                                <select class="label_flottant option_select" name="acc_4_departement_naissance" id="acc_4_departement_naissance" required>
                                  <option disabled selected></option>
                                  <option value="01">01 - Ain</option>
                                  <option value="02">02 - Aisne</option>
                                  <option value="03">03 - Allier</option>
                                  <option value="04">04 - Alpes de Haute Provence</option>
                                  <option value="05">05 - Hautes Alpes</option>
                                  <option value="06">06 - Alpes Maritimes</option>
                                  <option value="07">07 - Ard&egrave;che</option>
                                  <option value="08">08 - Ardennes</option>
                                  <option value="09">09 - Ari&egrave;ge</option>
                                  <option value="10">10 - Aube</option>
                                  <option value="11">11 - Aude</option>
                                  <option value="12">12 - Aveyron</option>
                                  <option value="13">13 - Bouches du Rh&ocirc;ne</option>
                                  <option value="14">14 - Calvados</option>
                                  <option value="15">15 - Cantal</option>
                                  <option value="16">16 - Charente</option>
                                  <option value="17">17 - Charente Maritime</option>
                                  <option value="18">18 - Cher</option>
                                  <option value="19">19 - Corr&egrave;ze</option>
                                  <option value="2A">2A - Corse du Sud</option>
                                  <option value="2B">2B - Haute Corse</option>
                                  <option value="21">21 - C&ocirc;te d&acute;Or</option>
                                  <option value="22">22 - C&ocirc;tes d&acute;Armor</option>
                                  <option value="23">23 - Creuse</option>
                                  <option value="24">24 - Dordogne</option>
                                  <option value="25">25 - Doubs</option>
                                  <option value="26">26 - Dr&ocirc;me</option>
                                  <option value="27">27 - Eure</option>
                                  <option value="28">28 - Eure et Loir</option>
                                  <option value="29">29 - Finist&egrave;re</option>
                                  <option value="30">30 - Gard</option>
                                  <option value="31">31 - Haute Garonne</option>
                                  <option value="32">32 - Gers</option>
                                  <option value="33">33 - Gironde</option>
                                  <option value="34">34 - H&eacute;rault</option>
                                  <option value="35">35 - Ille et Vilaine</option>
                                  <option value="36">36 - Indre</option>
                                  <option value="37">37 - Indre et Loire</option>
                                  <option value="38">38 - Is&egrave;re</option>
                                  <option value="39">39 - Jura</option>
                                  <option value="40">40 - Landes</option>
                                  <option value="41">41 - Loir et Cher</option>
                                  <option value="42">42 - Loire</option>
                                  <option value="43">43 - Haute Loire</option>
                                  <option value="44">44 - Loire Atlantique</option>
                                  <option value="45">45 - Loiret</option>
                                  <option value="46">46 - Lot</option>
                                  <option value="47">47 - Lot et Garonne</option>
                                  <option value="48">48 - Loz&egrave;re</option>
                                  <option value="49">49 - Maine et Loire</option>
                                  <option value="50">50 - Manche</option>
                                  <option value="51">51 - Marne</option>
                                  <option value="52">52 - Haute Marne</option>
                                  <option value="53">53 - Mayenne</option>
                                  <option value="54">54 - Meurthe et Moselle</option>
                                  <option value="55">55 - Meuse</option>
                                  <option value="56">56 - Morbihan</option>
                                  <option value="57">57 - Moselle</option>
                                  <option value="58">58 - Ni&egrave;vre</option>
                                  <option value="59">59 - Nord</option>
                                  <option value="60">60 - Oise</option>
                                  <option value="61">61 - Orne</option>
                                  <option value="62">62 - Pas de Calais</option>
                                  <option value="63">63 - Puy de D&ocirc;me</option>
                                  <option value="64">64 - Pyr&eacute;n&eacute;es Atlantiques</option>
                                  <option value="65">65 - Hautes Pyr&eacute;n&eacute;es</option>
                                  <option value="66">66 - Pyr&eacute;n&eacute;es Orientales</option>
                                  <option value="67">67 - Bas Rhin</option>
                                  <option value="68">68 - Haut Rhin</option>
                                  <option value="69">69 - Rh&ocirc;ne</option>
                                  <option value="70">70 - Haute Sa&ocirc;ne</option>
                                  <option value="71">71 - Sa&ocirc;ne et Loire</option>
                                  <option value="72">72 - Sarthe</option>
                                  <option value="73">73 - Savoie</option>
                                  <option value="74">74 - Haute Savoie</option>
                                  <option value="75">75 - Paris</option>
                                  <option value="76">76 - Seine Maritime</option>
                                  <option value="77">77 - Seine et Marne</option>
                                  <option value="78">78 - Yvelines</option>
                                  <option value="79">79 - Deux S&egrave;vres</option>
                                  <option value="80">80 - Somme</option>
                                  <option value="81">81 - Tarn</option>
                                  <option value="82">82 - Tarn et Garonne</option>
                                  <option value="83">83 - Var</option>
                                  <option value="84">84 - Vaucluse</option>
                                  <option value="85">85 - Vend&eacute;e</option>
                                  <option value="86">86 - Vienne</option>
                                  <option value="87">87 - Haute Vienne</option>
                                  <option value="88">88 - Vosges</option>
                                  <option value="89">89 - Yonne</option>
                                  <option value="90">90 - Territoire de Belfort</option>
                                  <option value="91">91 - Essonne</option>
                                  <option value="92">92 - Hauts de Seine</option>
                                  <option value="93">93 - Seine Saint Denis</option>
                                  <option value="94">94 - Val de Marne</option>
                                  <option value="95">95 - Val d&acute;Oise</option>
                                  <option value="971">971 - Guadeloupe</option>
                                  <option value="972">972 - Martinique</option>
                                  <option value="973">973 - Guyane</option>
                                  <option value="974">974 - R&eacute;union</option>
                                  <option value="976">976 - Mayotte</option>
                                </select>


                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_departement_naissance" class="input_label label_flottant" style="font-family: inherit;">Département de naissance *</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_pays_naissance" style="display:none">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_pays_naissance" name="acc_4_pays_naissance" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_pays_naissance" class="input_label label_flottant" style="font-family: inherit;">Pays de naissance *</label>
                              </div>
                            </div>
                          </div>
                          <div class="row nav-buttons">
                            <button id="btn_acc_4_precedent" class="previous" onclick="acc4_precedent(2);"><i class="far fa-angle-left"></i><span>Précédent</span></button>
                            <button id="btn_acc_4_suivant2" class="next" onclick="acc4_suivant(2);"><span id="btn_acc_4_suivant_span">Suivant</span><i class="far fa-angle-right"></i></button>
                          </div>
                        </section>
                        <section id="section-3">
                          <div class="row">
                            <!-- <div class="col-md-12 break-line"><hr></div> -->
                            <div class="col-md-6" id="div_acc_4_etage_escalier_appartement labelResponsive">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_etage_escalier_appartement" name="acc_4_etage_escalier_appartement" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_etage_escalier_appartement" class="input_label label_flottant texteSupplement" style="font-family: inherit;">Etage / Escalier / Appartement</label>
                                <label for="acc_4_etage_escalier_appartement" class="input_label label_flottant alignementSupplement" style="font-family: inherit;">Etage / Esc / Appartement</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_immeuble_residence_batiment labelResponsive">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_immeuble_residence_batiment" name="acc_4_immeuble_residence_batiment" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_immeuble_residence_batiment" class="input_label label_flottant texteSupplement" style="font-family: inherit;">Immeuble / Résidence / Bâtiment</label>
                                <label for="acc_4_immeuble_residence_batiment" class="input_label label_flottant alignementSupplement" style="font-family: inherit;">Immeuble / Résidence / Bât</label>
                              </div>
                            </div>
                            <div class="col-md-12" id="div_acc_4_adresse" style=" padding: 0 8px;">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_adresse" name="acc_4_adresse" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_adresse" class="input_label label_flottant" style="font-family: inherit;">Adresse *</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_cp">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="tel" class="label_flottant form-control" onkeydown="patternInputCP(event, this, this.value)" onkeypress="patternInputCP(event, this, this.value)" onkeyup="patternInputCP(event, this, this.value)" id="acc_4_cp" name="acc_4_cp" maxlength="5" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_cp" class="input_label label_flottant" style="font-family: inherit;">Code Postal *</label>

                                <script>
                                  // Restricts input for the given textbox to the given inputFilter.
                                  function setInputCPFilter(textbox, inputFilter) {
                                    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                                      textbox.addEventListener(event, function() {
                                        if (inputFilter(this.value)) {
                                          this.oldValue = this.value;
                                          this.oldSelectionStart = this.selectionStart;
                                          this.oldSelectionEnd = this.selectionEnd;
                                        } else if (this.hasOwnProperty("oldValue")) {
                                          this.value = this.oldValue;
                                          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                                        } else {
                                          this.value = "";
                                        }
                                      });
                                    });
                                  }

                                  setInputCPFilter(document.getElementById("acc_4_cp"), function(value) {
                                    return /^\d*$/.test(value);
                                  });
                                </script>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_acc_4_ville">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" class="label_flottant form-control" id="acc_4_ville" name="acc_4_ville" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="acc_4_ville" class="input_label label_flottant" style="font-family: inherit;">Ville *</label>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6" id="div_input_acc_4_siret_email">
                              <div class="form-group input-groupe">
                                <input style="font-family: inherit;" type="mail" class="label_flottant form-control emailTel emailParticulier" id="input_acc_4_email" name="acc_4_email" onchange="majAccordeonData('email', this.value); recupMail(this.value);" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="input_acc_4_email" class="input_label label_flottant" style="font-family: inherit;">E-mail</label>
                              </div>
                            </div>
                            <div class="col-md-6" id="div_input_acc_4_siret_telephone">
                              <div class="form-group input-groupe">
                                <input style="text-transform: uppercase; font-family: inherit;" type="text" maxlength="10" class="label_flottant form-control emailTel telBorder telParticulier" id="input_acc_4_telephone" name="acc_4_telephone" onchange="majAccordeonData('telephone', this.value);recupTel(this.value);" placeholder="" required>
                                <span class="highlight-input-label"></span>
                                <span class="bar-input-label"></span>
                                <label for="input_acc_4_telephone" class="input_label label_flottant" style="font-family: inherit;">Téléphone *</label>
                              </div>
                            </div>
                          </div>
                          <div id="navBarreBleuCoordonnee" class="row nav-buttons">
                            <button id="btn_acc_4_precedent" class="previous" onclick="acc4_precedent(3);"><i class="far fa-angle-left"></i><span>Précédent</span></button>
                            <button style="display:none" id="btn_acc_4_valider1" class="next" onclick="acc4_valider(1);envoiMailConfirmationJauneDeux();"><span>J'envoie un chèque</span><i class="far fa-angle-right"></i></button>
                            <button style="display:none" id="btn_acc_4_valider2" class="next" onclick="acc4_valider(2);envoiMailConfirmationJauneDeux();"><span>Je paie par téléphone</span><i class="far fa-angle-right"></i></button>
                            <button style="display:none" id="btn_acc_4_valider3" class="next" onclick="acc4_valider(3);envoiMailConfirmationJauneDeux();"><span>Encaissement P.D.V</span><i class="far fa-angle-right"></i></button>
                            <button id="btn_acc_4_valider4" class="next" onclick="acc4_suivant(3);<?php 
                            if ($_SESSION['profil'] == 12) : ?>
                              if(document.getElementById('btn_acc_4_valider_span').innerHTML != 'Payer en ligne'){
                              envoiMailConfirmationBleuDeux();
                            } <?php elseif($_SESSION['profil'] == 14 || $_SESSION['profil'] == 23  || $_SESSION['profil'] == 11) : ?>
                              if(document.getElementById('btn_acc_4_valider_span').innerHTML != 'Payer en ligne'){
                              envoiMailConfirmationJauneDeux();
                            } <?php endif; ?>"><span id="btn_acc_4_valider_span">Continuer</span><i class="far fa-angle-right"></i></button>
                          </div>
                      </div>

                      </section>

                    </div>
                  </div>
                </div>
              <?php } ?>
                <div class="row">
                  <div id="result"></div>
                  <!-- TODO -->
                  <!-- <div class="row tobeHiddenInPartenaireMode">
                  <div class="col-md-4 col-xs-12">
                    <div class="form-group">
                      <select class=" alert alert-vmv text-center" onchange="majAccordeonData('civilite', this.options[this.selectedIndex].innerHTML)" id="ddl_acc_3_civilite" name="civilite" required style="height: auto">
                        <option value="">Civilité</option>
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Société">Société</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" class=" alert alert-vmv text-center" id="input_acc_3_nom" onchange="majAccordeonData('nom', this.value)" placeholder="Nom" required>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" class=" alert alert-vmv text-center" id="input_acc_3_prenom" onchange="majAccordeonData('prenom', this.value)" placeholder="Prénom" required>
                    </div>
                  </div>
                </div>
                <div class="row tobeHiddenInPartenaireMode">
                  <div class="col-md-4 col-xs-12">
                  </div>
                  <div class="col-md-4 col-xs-12">
                    <div class="form-group">
                      <input type="text" class=" alert alert-vmv text-center" id="input_acc_3_telephone" onchange="majAccordeonData('telephone', this.value)" name="phone" placeholder="Téléphone" required>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-12">
                    <div class="form-group">
                      <input type="email" class=" alert alert-vmv text-center" id="input_acc_3_email" onchange="majAccordeonData('email', this.value)" name="email" placeholder="Adresse mail" required>
                    </div>
                  </div>
                </div> -->
                  <!-- FIN TODO -->

                  <!--  <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="alert alert-vmv text-center">
                    Nom : <span class="resultRechercheField" id="span_acc_4_nom"></span>                        
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="alert alert-vmv text-center">
                    Prénom : <span class="resultRechercheField" id="span_acc_4_prenom"></span>                        
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="alert alert-vmv text-center">
                    Email : <span class="resultRechercheField" id="span_acc_4_email"></span>                        
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="alert alert-vmv text-center">
                    Téléphone : <span class="resultRechercheField" id="span_acc_4_telephone"></span>                        
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="alert alert-vmv text-center">
                    Département : <span class="resultRechercheField" id="span_acc_4_departement"></span>                        
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="alert alert-vmv text-center">
                    Immatriculation : <span class="resultRechercheField" id="span_acc_4_immatriculation"></span>
                  </div>
                </div>
              </div> -->
                  <!--  <div id="titulaireSpecificAreaStep4">
                <div class="row">
                  <div id="result"></div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv text-center">
                      Marque : <span id="span_acc_4_marque" class="resultRechercheField" ></span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv text-center">
                      Mise en circulation : <span id="span_acc_4_circulation" class="resultRechercheField" ></span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv text-center">
                      Type : <span id="span_acc_4_type" class="resultRechercheField" ></span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv text-center">
                      Modèle : <span id="span_acc_4_modele" class="resultRechercheField" ></span>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv text-center">
                      Puissance fiscale : 
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="alert alert-vmv text-center">
                      Carburant : <span id="span_acc_4_carburant" class="resultRechercheField" ></span>
                    </div>
                  </div>
                </div>
              </div> -->
                  <!--  <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12" style="margin: auto;">
                      
                    </div>
                    <input type="hidden" name="prix" value="89">
                  </div>
                  <div class="row">
                    <div class='col-md-4 col-sm-4 col-xs-12' style="margin: auto;">
                      <div class="text-center">
                        <button class="btn btn-vmv grey" onclick="acc4_retour();">Retour</button>
                      </div>
                    </div>
                    <div class='col-md-4 col-sm-4 col-xs-12' style="margin: auto;"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12" style="margin: auto;">
                      <div class="text-center">
                        <button id="btnFinalAcc" onclick="
                        ();" class="btn btn-vmv">Payer <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                      </div>
                  </div>
                </div>
              </div>
            </div> -->
                </div>
              </div>
              <!--  <form id="vadsCompletedForm" action="https://paiement.systempay.fr/vads-payment/" method="post" style="visibility: hidden;">
            <button type="submit" onclick="disableBox();" class="btn btn-vmv"></button>
          </form> -->

            </div>

            <?php
            // if(!isset($_SESSION['profil']) || $_SESSION['profil'] != 4) {
            ?>




            <div id="fullAcc5" class="tobeHiddenInPartenaireMode" style="border-top: 4px solid rgb(207, 11, 93);">
              <input class="acc" type="radio" name="acc" onclick="deplierAcc();" id="acc5">
              <div class="acc-body">
                <div class="acc-bodyTitleContainer">
                </div>

                <div style="padding:0px 8px;">
                    <?php if(($_SESSION['profil'] != 12 && $_SESSION['profil'] != 14 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23) || (($_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 11 || $_SESSION['profil'] == 23) && $_SESSION['nouvelleDemarche'] != 1)): ?>
                  <?php if (/*$_SESSION['profil'] != 16 && */$_SESSION['profil'] != 21) : //999
                  ?>
                    <div id="divPaiement">
                      <span class="input_label">Paiement</span>
                      <hr>
                    </div>

                    <div id="div_acc_5_paiement_choix" class="tobeHiddenInAdminMode">
                      <div class="acc-bodyTitleContainer" id="cont_acc_5" <?php //if($_SESSION["profil"] == 16){echo "style='display: flex;justify-content: space-between;gap: 10px;'";} ?>>
                        <div style="width:100%;" class="div_acc_5 div_acc_5_actif" id="div_acc_5_1" onclick="setAcc5Bg(1); majAccordeonData('moyenPaiement', 'VISA')">
                          <div>
                            <i class="far fa-circle" id="div_acc_5_1_radio_off" style="display:none;"></i><i class="far fa-dot-circle" id="div_acc_5_1_radio_on" style="display:inline-block;"></i>
                          </div>
                          <div>
                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                              <label class="boxTitle"><input type="radio" class="input_acc_5" name="radMoyenPaiement" checked="true" id="radCB" />Carte bancaire</label>
                              <div class="row">
                                <div>
                                  <img class="imgMoyenPaiement" src="/images/logo_cb.jpg">
                                  <img class="imgMoyenPaiement" src="/images/logo_visa.png">
                                  <img class="imgMoyenPaiement" src="/images/logo_mastercard.png">
                                </div>
                              </div>
                            </div>
                            <!-- <div>Paiement disponible</div> -->
                          </div>
                        </div>
                        <!-- <div style="width:100%;" class="div_acc_5" id="div_acc_5_2" onclick="setAcc5Bg(2); majAccordeonData('moyenPaiement', 'EPNF_3X')">
                          <div><i class="far fa-circle" id="div_acc_5_2_radio_off" style="display:inline-block"></i><i class="far fa-dot-circle" id="div_acc_5_2_radio_on" style="display:none"></i></div>
                          <div>
                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                              <label class="boxTitle"><input type="radio" class="input_acc_5" name="radMoyenPaiement" id="radCB3" />Carte bancaire x3</label>
                              <div class="row">
                                <div>
                                  <img class="imgMoyenPaiement" src="/images/logo_cb.jpg" alt="Logo Carte Bancaire">
                                  <img class="imgMoyenPaiement" src="/images/logo_visa.png" alt="Logo Visa">
                                  <img class="imgMoyenPaiement" src="/images/logo_mastercard.png" alt="Logo Mastercard">
                                </div>
                              </div>
                            </div>
                            <div style="display:flex; justify-content:flex-end;align-items:center;">
                              <div style="text-align:right">
                                + 9.90€ par paiement
                              </div>
                            </div>
                          </div>
                        </div>
                        <div style="width:100%;" class="div_acc_5" id="div_acc_5_3" onclick="setAcc5Bg(3); majAccordeonData('moyenPaiement', 'EPNF_4X')">
                          <div><i class="far fa-circle" id="div_acc_5_3_radio_off" style="display:inline-block"></i><i class="far fa-dot-circle" id="div_acc_5_3_radio_on" style="display:none"></i></div>
                          <div>
                            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                              <label class="boxTitle"><input type="radio" class="input_acc_5" name="radMoyenPaiement" id="radCB4" />Carte bancaire x4</label>
                              <div class="row">
                                <div>
                                  <img class="imgMoyenPaiement" src="/images/logo_cb.jpg" alt="Logo Carte Bancaire">
                                  <img class="imgMoyenPaiement" src="/images/logo_visa.png" alt="Logo Visa">
                                  <img class="imgMoyenPaiement" src="/images/logo_mastercard.png" alt="Logo Mastercard">
                                </div>
                              </div>
                            </div>
                            <div style="display:flex; justify-content:flex-end;align-items:center;">
                              <div style="text-align:right">
                                + 9.90€ par paiement
                              </div>
                            </div>
                          </div>
                        </div> -->


                      </div>
                      <?php if($_SESSION["profil"] == 16){
                        echo "<br/>";
                      } ?>
                    </div>
                    <?php if($_SESSION["profil"] != 16) { ?>
                    <br class="brOptions">
                    <br class="brOptions">
                    <span class="input_label">Options</span>
                    <hr>
                    <div class="div_acc_5_sms" id="div_acc_5_4" onclick="checkSMS()">
                      <div><i class="far fa-circle" id="div_acc_5_4_radio_off" style="display:inline-block"></i><i class="far fa-dot-circle" id="div_acc_5_4_radio_on" style="display:none"></i></div>
                      <div>
                        <div style="display:flex;justify-content:space-between;align-items:center">
                          Je souhaite recevoir le suivi de ma carte grise par SMS(2€)
                          <input type="checkbox" class="input_acc_5" id="checkSMS" onchange="majAccordeanData('sms', this.checked);" />
                          <span>RECOMMANDÉ</span>
                        </div>
                      </div>
                    </div>
                    <?php } ?>

                    <!-- SI ON EST ADMIN -->

                    <div class="col-sm-8 col-md-8 bgGris tobeHiddenInNonAdminMode" style="padding-top: 30px;">
                      <div class="acc-bodyTitleContainer">
                        <div class="row">
                          <div class="col-md-8 alignLeft">
                            <label class="boxTitle">
                              <input type="radio" onchange="majAccordeonData('moyenPaiement', 'VISA')" name="radMoyenPaiement" id="radCB1" />
                              Carte bancaire
                            </label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 alignLeft">
                            <label class="boxTitle">
                              <input type="radio" onchange="majAccordeonData('moyenPaiement', 'cheque')" name="radMoyenPaiement" id="radCheque" />
                              Chèque
                            </label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 alignLeft">
                            <label class="boxTitle">
                              <input type="radio" onchange="majAccordeonData('moyenPaiement', 'tel')" name="radMoyenPaiement" id="radTel" />
                              Téléphone
                            </label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-8 alignLeft">
                            <label class="boxTitle">
                              <input type="radio" onchange="majAccordeonData('moyenPaiement', 'gratuit')" name="radMoyenPaiement" id="radGratuit" />
                              Aucun (gratuit)
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>


                  <?php elseif (/*$_SESSION['profil'] == 16 ||*/$_SESSION['profil'] == 21) : //999
                  ?>


                    <div class="div_acc_5_sms" id="div_acc_5_4" onclick="checkSMS()">
                      <div><i class="far fa-circle" id="div_acc_5_4_radio_off" style="display:inline-block"></i><i class="far fa-dot-circle" id="div_acc_5_4_radio_on" style="display:none"></i></div>
                      <div>
                        <div style="display:flex;justify-content:space-between;align-items:center">
                          Je souhaite recevoir le suivi de ma carte grise par SMS (2€)
                          <input type="checkbox" class="input_acc_5" id="checkSMS" onchange="majAccordeanData('sms', this.checked);" />
                          <span>RECOMMANDÉ</span>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                    <?php else:?>
                        <div id="divPaiement">
                            <span class="input_label">Paiement</span>
                            <hr>
                        </div>

                        <div id="div_acc_5_paiement_choix" class="tobeHiddenInAdminMode">
                            <div class="blocChoixOptionPaiement" id="blocChoixOptionPaiement">

                                <!-- paiement CB -->

                                <div id="div_acc_5_PaiementEnLigne" class="div-blocDemarche optionNonSelectionnee optionSelectionnee"  onclick="changerTypePaiementNEW(1);">
                                  <input style="margin: 7px 10px 0 0" type="radio" id="radio-cb" name="radioBoutton-CB" checked>
                                  <div class="flex flex-direction-column">
                                    <div class="titre-demarche"><span>Carte bancaire</span></div>
                                    <div class="text-demarche"><span>Payez par CB sur notre site internet.</span></div>
                                  </div>
                                </div>
                                
                                <!-- paiement cheque -->

                                <div id="div_acc_5_DescriptifCheque" class="div-blocDemarche optionNonSelectionnee"  onclick="changerTypePaiementNEW(2);">
                                  <input style="margin: 7px 10px 0 0" type="radio" id="radio-cheque" name="radioBoutton-cheque">
                                  <div class="flex flex-direction-column">
                                    <div class="titre-demarche"><span>Chèque à joindre</span></div>
                                    <div class="text-demarche"><span>Envoyer un chèque à l'ordre d'ICICARTEGRISE.</span></div>
                                  </div>
                                </div>

                                <!-- paiement appel -->

                                <div id="div_acc_5_PaiementTelephone" class="div-blocDemarche optionNonSelectionnee"  onclick="changerTypePaiementNEW(3);">
                                  <input style="margin: 7px 10px 0 0" type="radio" id="radio-paiementAppelICG" name="radioBoutton-appelICG">
                                  <div class="flex flex-direction-column">
                                    <div class="titre-demarche"><span>Paiement par téléphone</span></div>
                                    <div class="text-demarche"><span>Appelez le 02 56 02 82 51 pour effectuer le paiement.</span></div>
                                  </div>
                                </div>

                                <!-- paiement demander a etre appeler -->

                                <div id="div_acc_5_Rappelle" class="div-blocDemarche optionNonSelectionnee"  onclick="changerTypePaiementNEW(4);">
                                  <input style="margin: 7px 10px 0 0" type="radio" id="radio-rappelle" name="radioBoutton-rappelle">
                                  <div class="flex flex-direction-column">
                                    <div class="titre-demarche"><span>Demander à être rappelé</span></div>
                                    <div class="text-demarche"><span>Un conseiller appellera pour effectuer le paiement.</span></div>
                                  </div>
                                </div>

                                <!-- paiement encaissement PDV -->

                                <div id="div_acc_5_EncaissementPDV" class="div-blocDemarche optionNonSelectionnee"  onclick="changerTypePaiementNEW(5);">
                                  <input style="margin: 7px 10px 0 0" type="radio" id="radio-PDV" name="radioBoutton-PDV">
                                  <div class="flex flex-direction-column">
                                    <div class="titre-demarche"><span>Encaissement point de vente</span></div>
                                    <div class="text-demarche"><span><?=$_SESSION['profil'] == 14 || $_SESSION['profil'] == 23 ? 'Encaissez le montant dans votre point de vente' : 'Prochainement indisponible.'?></span></div>
                                  </div>
                                </div>

                            </div>
                        </div>

                    <?php endif;?>
                  <!-- FIN SI ON EST ADMIN -->

                  <div>
                    <div class="acc-bodyTitleContainer">
                    <?php if($_SESSION["profil"] != 16){ ?>
                      <br>
                      <br>
                      <span class="input_label" style="font-weight: bold;">Résumé du panier</span>
                      <hr>
                      <div class="panier_item resumePanierResponsive"><span class="panier_label ">Type de démarche</span><span id="p_acc_5_actionEffectuee" style="font-weight:900; text-align:right;"></span></div>
                      <div class="panier_item resumePanierResponsive"><span class="panier_label ">Immatriculation</span><span class="numImmat" id="numImmatBis3" style="font-weight:900"></span></div>
                        <?php if($_SESSION['profil'] != 14 && $_SESSION['profil'] != 12 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23):?>
                      <div class="panier_item resumePanierResponsive"><span class="panier_label ">Plaques commandées</span><span id="span_acc_5_recapPlaque" style="font-weight:900"></span></div>
                            <?php endif;?>
                      <?php 
                      }
                      if ($_SESSION['profil'] == 16 || $_SESSION['profil'] == 21 || $_SESSION['profil'] == 0 || $_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 23 || $_SESSION['profil'] == 11) : ?>
                        <?php if($_SESSION["profil"] != 16){ ?> <br> <?php } ?>
                        <span class="input_label" style="font-weight: bold;<?php if($_SESSION["profil"] == 16){echo "display: flex;justify-content: space-between;";} ?>"><?php if($_SESSION["profil"] == 16){echo '<div>à régler sur le site <span id="infoReglementSite"><i class="fal fa-info-circle" style="margin-left:10px;color:#cf0b5d"></i></span></div><span style="font-size:20px; font-weight:900;"><br class="hiddenOnDesktop"><span id="span_acc_5_prixTotal">--,--</span> <span id="text__pink">€</span></span>';}else{echo "Détail";} ?></span>
                        <hr>
                        <div class="panier_item"><span class="panier_label" id="prixFinalCg">Taxe Carte Grise</span><span id="span_acc_5_taxeCG" style="font-weight:900"></span></div>
                        <?php if ($_SESSION['profil'] != 16) { ?>
                              <?php if($_SESSION['profil'] != 12):?>
                                <div class="panier_item"><span class="panier_label">Service Carte Grise</span><span id="span_acc_5_serviceTTC" style="font-weight:900"></span></div>
                              <?php endif;?>
                            <div class="panier_item"><span class="panier_label">Supplément (autre démarche)</span><span id="span_acc_5_autreDemarche" style="font-weight:900"></span></div>
                        <?php } ?>
                        <?php if($_SESSION['profil'] != 14 && $_SESSION['profil'] != 12 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23):?>
                            <div class="panier_item" id="divOptions"><span class="panier_label" id="optionsIfcStatut">Options</span><span id="span_acc_5_optionsTTC" style="font-weight:900"></span></div>
                        <?php endif;?>
                        <?php if($_SESSION["profil"] == 16) {echo "<hr/>";} ?>
                        <?php if($_SESSION['profil'] != 14 && $_SESSION['profil'] != 12 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23):?>
                            <div class="panier_item" id="item_panier_reduction"><span class="panier_label">Réduction</span><span id="span_acc_5_reduction" style="font-weight:900"></span></div>
                        <?php endif;?>
                      <?php endif; 
                      
                      if($_SESSION["profil"] != 16){ ?>
                        <br>
                      <?php }?>
                      <!-- <hr>
                      <div class="panier_item"><span class="panier_label">Frais de service</span><span id="" style="font-weight:900; text-align:right;">20 €</span></div>
                      <div class="panier_item"><span class="panier_label">Frais de service</span><span id="" style="font-weight:900; text-align:right;"></span></div> -->
                      
                      <br>
                      <?php if($_SESSION["profil"] != 16) { ?>
                      <div class="panier_item">
                      <?php if($_SESSION['profil'] == 16){?>
                        <span class="input_label" style="text-transform:uppercase;">Total</span>
                        <?php }else{ ?>
                        <span class="input_label">TOTAL</span>
                        <?php } ?>
                        <div style="font-size:20px; font-weight:900;"><br class="hiddenOnDesktop"><span id="span_acc_5_prixTotal">--,--</span> <span id="text__pink">€</span></div>
                      </div>
                      <?php } if($_SESSION["profil"] == 16){?>
                      <br/>
                        <span class="input_label" style="text-transform:uppercase;font-weight:bold;display:flex;justify-content:space-between;">à encaisser dans votre point de vente <span style="font-size:20px; font-weight:900;"><br class="hiddenOnDesktop"><span id="text__pink">29.90 €</span></span></span>
                      <?php } ?>
                      <hr>
                      <?php if (/*$_SESSION['profil'] == 16 ||*/$_SESSION['profil'] == 16) : //999
                      ?>

                        <div id="divOuiNonPaiement">
                          <div style="font-size:18px">Avez-vous encaissé la prestation de <span style="font-weight:bold; color: #cf0b5d;" id="span_acc_5b_prixTotal">29.90 €</span> auprès de votre client ?</div>
                          <table class="tableWrapper">
                            <tr>
                              <td class="tableCell pr8 positionOuiNon">
                                <div id="ouiPaiement" class="OuiNonPlaque container-check " onclick="switchPaiement(1)" style="border-color:#D4D4D4">Oui<i id="checkPaiementOui" style="font-size: 20px; right:25px;top:10px;position:absolute;display:none; border-color:#D4D4D4" class="fas fa-check checkBox"></i></div>
                              </td>
                              <td class="tableCell pl8 positionOuiNon">
                                <div id="nonPaiement" class="OuiNonPlaque container-check divDemarcheActif " onclick="switchPaiement(0)" style=border-color:#D4D4D4>Non<i id="checkPaiementNon" style="font-size: 20px; right:25px;top:10px;position:absolute; border-color:#D4D4D4" class="fas fa-check checkBox"></i></div>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <hr/>
                        <br/><br/>

                      <?php endif; ?>
                        <?php if(!(($_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 23 || $_SESSION['profil'] == 11) && $_SESSION['nouvelleDemarche'] == 1)):?>
                        <div>
                          <div style="display: flex;"><input style="margin-right: 8px; margin-top: 6px;min-width: 20px;" type="checkbox" name="readCGV" id="readCGV">
                            <label for="readCGV" id="labelCGV">J'ai lu et j'accepte les <a href="/cgv" target='_blank'>Conditions Générales de Vente</a>. Je souhaite que ma commande débute avant la fin du délai légal de rétractation de 14 jours.</label>
                          </div>
                        </div>
                        <?php endif;?>
                    </div>
                  </div>
                </div>
                <div class="row nav-buttons">
                  <button id="boutonRetour" class="previous" onclick="acc5_retour();"><i class="far fa-angle-left"></i><span>Retour</span></button>
                  <?php if (/*$_SESSION['profil'] == 16 ||*/$_SESSION['profil'] == 21) : //999
                  ?>
                    <button class="next tobeHiddenInAdminMode" id="btn_valider_Partenaire" onclick="acc5_valider()"><span id="acc_5_valider_span">Continuer</span><i class="far fa-angle-right"></i></button>
                    <!-- <h1 id="continuer_loading" style="margin-right: 10px; display: none; color: #CF0B5D;"><i class="fa fa-spinner fa-spin"></i></h1> -->
                    <img src="/demarche/loading.svg" alt="" id="continuer_loading" style="display: none; position: relative;">
                  <?php elseif(($_SESSION['profil'] == 12 || $_SESSION['profil'] == 14 || $_SESSION['profil'] == 23 || $_SESSION['profil'] == 11) && $_SESSION['nouvelleDemarche'] == 1):?>
                      <div id="spinnerFinDemarcheBleuJaune" style="display:none"><img src="loading.svg" height="50px"width="50px" /></div>

                      <button class="next tobeHiddenInAdminMode" id="btn_valider_Partenaire" onclick="finDemarcheBleuJaune();"><span id="acc_5_valider_span">Continuer</span><i class="far fa-angle-right"></i></button>
                  <?php else : ?>
                    <button id="boutonPayer" class="next tobeHiddenInAdminMode" onclick="acc5_valider();"><span id="acc_5_valider_span">Payer</span><i class="far fa-angle-right"></i></button>
                    <!-- <h1 id="continuer_bj" style="  	font-family: 'icomoon'; src:url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.eot?-9haulc'); src:url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.eot?#iefix-9haulc') format('embedded-opentype'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.woff?-9haulc') format('woff'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.ttf?-9haulc') format('truetype'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.svg?-9haulc#icomoon') format('svg'); font-weight: normal; font-style: normal ; font-family: 'icomoon'; speak: none; font-style: normal;  font-weight: normal; font-variant: normal;  text-transform: none; ; line-height: 1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; content:'e004'; transform: rotate(0); transform: rotate(360deg); display: inline-block; font-size:4em; height: 1em; line-height: 1; margin: .5em; animation: anim-rotate 2s infinite linear; color: #444; text-shadow: 0 0 .25em rgba(255,255,255, .3); animation: anim-rotate 1s infinite steps(8); animation: anim-rotate 1s infinite steps(12); text-align: center; text-decoration: none; color: #444; text-shadow: 0 1px 2px rgba(0,0,0, .3); transition: color .3s; color: #444; margin-top: 2em;"><i class="fa fa-spinner fa-spin"></i></h1> -->
                    <!--! <div id="fin_loading_popup" style="display:none" class="spinner icon-spinner-5" aria-hidden="true"></div> -->
                    <!-- <img src="/demarche/loading.png" alt="" id="fin_loading_popup" class="spinner icon-spinner-5"> -->



                    <!--TODO brub -->
                    <img src="/demarche/loading.svg" alt="" id="continuer_loading" style="display: none; position: relative;">




                    <img src="/demarche/loading.svg" alt="" id="continuer_bj" style="display: none; position: relative; ">

                  <?php endif; ?>
                    <?php if($_SESSION['profil'] != 12 && $_SESSION['profil'] != 14 && $_SESSION['profil'] != 11 && $_SESSION['profil'] != 23):?>
                  <button class="next tobeHiddenInNonAdminMode" onclick="acc5_valider();">Enregistrer la commande <i class="fas fa-angle-right"></i></button>
                    <?php endif;?>
                </div>
              </div>
              <form id="vadsCompletedForm" action="https://paiement.systempay.fr/vads-payment/" method="post" style="visibility: hidden;height:0px">
                <button type="submit" onclick="disableBox();" class="btn btn-vmv"></button>
              </form>
              <form id="vadsCompletedFormPartenaire" action="/envoidoc/" method="post" style="visibility: hidden;height:0px">
                <button type="submit" onclick="disableBox();" class="btn btn-vmv"></button>
              </form>
            </div>
            <!--<hr>-->
            <?php if ($_SESSION['profil'] != 16 && $_SESSION['profil'] != 21 && $_SESSION['profil'] != 17 && $_SESSION['profil'] != 18 && $_SESSION['profil'] != 19 && $_SESSION['profil'] != 20) { ?>
              <div id="description_etapes">
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <i class="fal fa-landmark fa-2x"></i>
                  </div>
                  <div class="description_etapes_wrapper2">
                    <h5>Habilitation et agrément</h5>
                  </div>
                  <div></div>
                  <div>
                    <p>ICICARTEGRISE est habilité et agréé par le ministère de l’intérieur et le trésor public pour effectuer toutes les démarches de cartes grises.</p>
                  </div>
                </div>
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <i class="fal fa-tachometer-alt-fastest fa-2x"></i>
                  </div>
                  <div class="description_etapes_wrapper2">
                    <h5>86 000 démarches effectuées</h5>
                  </div>
                  <div></div>
                  <div>
                    <p>Notre expérience et notre rigueur vous garantit un traitement de qualité. À réception de vos documents, ICICARTEGRISE assure un traitement de votre dossier sous 24H.</p>
                  </div>
                </div>
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <i class="fal fa-credit-card fa-2x"></i>
                  </div>
                  <div class="description_etapes_wrapper2">
                    <h5>Paiement 3D Secure</h5>
                  </div>
                  <div></div>
                  <div>
                    <p>Nous vous garantissons une sécurité et une fiabilité maximale pour tous vos paiements grâce au protocole 3D Secure VISA.</p>
                  </div>
                </div>
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <i class="fal fa-paper-plane fa-2x"></i>
                  </div>
                  <div class="description_etapes_wrapper2">
                    <h5>Envoi postal en toute sécurité</h5>
                  </div>
                  <div></div>
                  <div>
                    <p>Avec l’envoi par lettre recommandée avec accusé de réception, recevez votre carte grise en toute sérénité.</p>
                  </div>
                </div>
              </div>
              <?php } else if ($_SESSION['profil'] == 16) { ?>
                <div id="description_etapes">
                  <div class="description_etapes_item">
                    <div class="description_etapes_wrapper1">
                      <h1>1.</h1>
                    </div>
                    <div class="description_etapes_wrapper2">
                      <h5>Simulation</h5>
                    </div>
                    <div></div>
                    <div>
                      <p>Saisissez l'immatriculation et le département de votre client, puis cliquez sur "Calculer le prix".</p>
                    </div>
                  </div>
                  <div class="description_etapes_item">
                    <div class="description_etapes_wrapper1">
                      <h1>2.</h1>
                    </div>
                    <div class="description_etapes_wrapper2">
                      <h5>Sélection et informations client</h5>
                    </div>
                    <div></div>
                    <div>
                      <p>Sélectionnez la démarche, saisissez les informations de votre client, puis continuez votre commande.</p>
                    </div>
                  </div>
                  <div class="description_etapes_item">
                    <div class="description_etapes_wrapper1">
                      <h1>3.</h1>
                    </div>
                    <div class="description_etapes_wrapper2">
                      <h5>Encaissement</h5>
                    </div>
                    <div></div>
                    <div>
                      <p>Encaissez la prestation de 29.90€ directement en point de vente, puis réalisez le paiement de la taxe carte grise sur notre site internet.</p>
                    </div>
                  </div>
                  <div class="description_etapes_item">
                    <div class="description_etapes_wrapper1">
                      <h1>4.</h1>
                    </div>
                    <div class="description_etapes_wrapper2">
                      <h5>Envoi des documents</h5>
                    </div>
                    <div></div>
                    <div>
                      <p>Répondez aux questions et envoyez-nous l'ensemble des documents de votre client.</p>
                  </div>
                </div>
              </div>
            <?php } else { ?>
              <div id="description_etapes">
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <h1>1.</h1>
                  </div>
                  <div class="description_etapes_wrapper2">
                    <h5>Simulation</h5>
                  </div>
                  <div></div>
                  <div>
                    <p>Saisissez l'immatriculation et le département de votre client puis cliquez sur "Calculer le prix".</p>
                  </div>
                </div>
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <h1>2.</h1>
                  </div>
                  <div class="description_etapes_wrapper2">
                    <h5>Informations client </h5>
                  </div>
                  <div></div>
                  <div>
                    <p>Saisissez les informations de votre client puis validez la commande </p>
                  </div>
                </div>
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <h1>3.</h1>
                  </div>
                  <div class="description_etapes_wrapper2">
                    <h5>Encaissement</h5>
                  </div>
                  <div></div>
                  <div>
                    <p>Encaissez le montant de la taxe carte grise et du service indiqué.</p>
                  </div>
                </div>
                <div class="description_etapes_item">
                  <div class="description_etapes_wrapper1">
                    <h1>4.</h1>
                  </div>
                  <?php if ($_SESSION['profil'] == 20 || $_SESSION['profil'] == 21) : ?>
                    <div class="description_etapes_wrapper2">
                      <h5>Envoi des documents</h5>
                    </div>
                    <div></div>
                    <div>
                      <p> Transmettez les documents de votre client par scan ou courrier. </p>
                    </div>
                  <?php else : ?>
                    <div class="description_etapes_wrapper2">
                      <h5>Kit carte grise </h5>
                    </div>
                    <div></div>
                    <div>
                      <p> Agrafez le ticket de caisse au kit carte grise et remettez ce dernier à votre client. </p>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php } ?>
            <?php
            // }
            ?>

          </div>
        </div>
  </main>
  <footer>
    <?php require_once('../templates/bottom-footer.php'); ?>
  </footer>
  <?php require_once('../templates/footer-js.php'); ?>            
  <script>
    checkBeginningData();
  </script>


  <?php if ($_SESSION['profil'] != 20) { ?>
    <a class="messagePopupButtonRenvoiHomePage" href="#messagePopupRenvoiHomePage" id="messagePopupButtonRenvoiHomePage"></a>
    <a class="messagePopupButton" href="#messagePopup" id="messagePopupButton"></a>

    <form id="messagePopup" class="white-popup-block mfp-hide">
      <div id="popupWrapper1">
        <img style="display:none" src="../images/perso_coupe.png" alt="Personnage IciCarteGrise" id="imgPopup" class="imgPopupCoupe">
        <img style="display:none" src="../images/perso_info.png" alt="Personnage IciCarteGrise" id="imgPopup" class="imgPopupInfo">
        <img src="../images/perso_panneau.png" alt="Personnage IciCarteGrise" id="imgPopup" class="imgPopup">
      </div>
      <div id="popupWrapper2">
        <h1 id="titrePopupAcc">Titre</h1>
        <p id="messagePopupAcc">Message</p>
        <div class="nav-buttons" id="bouttons_reglement" style="padding: 8px 0px !important;">
          <div id="messagePopup_fermer" style="margin: 4px 0px !important;" onclick="closeMessagePopup();" class="previous"><i class="far fa-angle-left"></i><span>Retour</span></div>
          <!--<div id="messagePopup_fermerDemarche" style="margin: 4px 0px !important;display:flex;" onclick="closeMessagePopupDemarche();" class="previous"><i class="far fa-angle-left"></i><span>Fermer la démarche</span></div>-->
          <div id="messagePopup_continuerDemarche" onclick="updateEncaissementCommande(3)" class="next" style="display:none;margin: 4px 0px !important;justify-content: right!important;"><span onclick="updateEncaissementCommande(3)">Continuer</span><i class="far fa-angle-right"></i></div>
          <div style="display:none;padding: 0px 4px !important;margin: 4px 0px !important;" id="btn_popup_valider3" class="next" onclick="updateEncaissementCommande(3);<?php if ($_SESSION['profil'] == 12) : ?>envoiMailConfirmationBleu();<?php elseif ($_SESSION['profil'] == 14 || $_SESSION['profil'] == 23 || $_SESSION['profil'] == 11) : ?>envoiMailConfirmationJaune();<?php endif; ?>"><span>Encaissement P.D.V</span></div>
          <div style="display:none;padding: 0px 4px !important;margin: 4px 0px !important;" id="btn_popup_valider1" class="next" onclick="updateEncaissementCommande(1);<?php if ($_SESSION['profil'] == 12) : ?>envoiMailConfirmationBleu();<?php elseif ($_SESSION['profil'] == 14 || $_SESSION['profil'] == 23 || $_SESSION['profil'] == 11) : ?>envoiMailConfirmationJaune();<?php endif; ?>"><span>J'envoie un chèque</span></div>
          <div style="display:none;padding: 0px 4px !important;margin: 4px 0px !important;" id="btn_popup_valider2" class="next" onclick="updateEncaissementCommande(2);<?php if ($_SESSION['profil'] == 12) : ?>envoiMailConfirmationBleu();<?php elseif ($_SESSION['profil'] == 14 || $_SESSION['profil'] == 23 || $_SESSION['profil'] == 11) : ?>envoiMailConfirmationJaune();<?php endif; ?>"><span>Je paie par téléphone</span></div>
          <!-- <h1 id="fin_loading_popup" style=  " 	font-family: 'icomoon'; src:url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.eot?-9haulc'); src:url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.eot?#iefix-9haulc') format('embedded-opentype'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.woff?-9haulc') format('woff'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.ttf?-9haulc') format('truetype'), url('https://s3.amazonaws.com/icomoon.io/4/Loading/icomoon.svg?-9haulc#icomoon') format('svg'); font-weight: normal; font-style: normal ; font-family: 'icomoon'; speak: none; ; font-style: normal; ; font-weight: normal; ; font-variant: normal; ; text-transform: none; ; line-height: 1; ; -webkit-font-smoothing: antialiased; ; -moz-osx-font-smoothing: grayscale; content: 'e004'; transform: rotate(0); transform: rotate(360deg); display: inline-block; font-size:4em; height: 1em; line-height: 1; margin: .5em; animation: anim-rotate 2s infinite linear; color: #444; text-shadow: 0 0 .25em rgba(255,255,255, .3); animation: anim-rotate 1s infinite steps(8); animation: anim-rotate 1s infinite steps(12); font-family: sans-serif; color: #ccc; line-height: 1.5; font-size: 1em; background: #181818; text-align: center; text-decoration: none; color: #444; text-shadow: 0 1px 2px rgba(0,0,0, .3); transition: color .3s; color: #ccc; margin-top: 2em; "><i class="spinner icon-spinner-5" aria-hidden="true"></i></h1> -->
          <!-- <img src="131-spinner3.png" id="fin_loading_popup"   alt="" style="position: absolute;"> -->

          <div id="messagePopup_fermerMobile" style="margin: 4px 0px !important;" onclick="closeMessagePopup();" class="previous"><i class="far fa-angle-left"></i><span>Retour</span></div>
          <div id="messagePopup_next" onclick="closeMessagePopup();goToBackoffice();" class="next" style="display:none;margin: 4px 0px !important;"><span onclick="goToBackoffice()">Gestionnaire carte grise</span><i class="far fa-angle-right"></i></div>
          <!-- <img src="/demarche/loading.svg" alt="" id="fin_loading_popup" style="display: none; justify-content: flex-end ;"> -->
          <div style="display: none;margin: 4px 0px !important;" id="acc1_valider_manuel" class="next" onclick="acc1_valider('manuelle'); closeMessagePopup();"><span>Saisir manuellement</span><i class="far fa-angle-right"></i></div>
          <!-- <input id="acc1_valider_manuel" type='button' class='next' onclick='acc1_valider("manuelle"); closeMessagePopup();' value='Continuer' style="display:none"/> -->
        </div>
      </div>
    </form>
  <?php } ?>



  <form id="messagePopupRenvoiHomePage" class="white-popup-block mfp-hide">
    <h1 id="titrePopupAccRenvoiHomePage" style="text-align: center;">TITRE</h1>
    <fieldset>
      <div id="message_contenuFormulaireRenvoiHomePage">
        <p id="messagePopupAccRenvoiHomePage">MESSAGE</p>
        <div id="messagePopup_fermerRenvoiHomePage" onclick="closeMessagePopupRenvoiHomePage();" class="previous"><i class="far fa-angle-left"></i><span>Retour</span></div>
        <div id="messagePopup_next" onclick="closeMessagePopup();" class="next" style="display:none;"><span onclick='pageTitle()'>Gestionnaire carte grise</span><i class="far fa-angle-right"></i></div>
      </div>
    </fieldset>
  </form>
  <?php if (isset($_POST['helpAreaInputDepartement']) && !empty($_POST['helpAreaInputDepartement'])) {
    $helpAreaInputDepartement = $_POST['helpAreaInputDepartement'];
    if (isset($_POST['helpAreaInputPlaque']) && !empty($_POST['helpAreaInputPlaque'])) {
      $helpAreaInputPlaque = $_POST['helpAreaInputPlaque'];
    } else {
      $helpAreaInputPlaque = "";
    }
  ?>
    <input type="hidden" id="acc_1_helpAreaInputPlaque" value="<?php echo $helpAreaInputPlaque ?>" />
    <input type="hidden" id="acc_1_helpAreaInputDepartement" value="<?php echo $helpAreaInputDepartement ?>" />
    <script>
      $(document).ready(function() {
        recupValueHelper();
      });
    </script>
  <?php
  } ?>

  <script>

  </script>


  <div class="popoverDocument" id="marque_info" style="display:none">
    <span>Colonne D.1 de votre carte grise</span>
  </div>
  <div class="popoverDocument" id="circulation_info" style="display:none">
    <span>Colonne B de votre carte grise</span>
  </div>
  <div class="popoverDocument" id="type_info" style="display:none">
    <span>Colonne J.1 de votre carte grise</span>
  </div>
  <div class="popoverDocument" id="modele_info" style="display:none">
    <span>Colonne D.3 de votre carte grise</span>
  </div>
  <div class="popoverDocument" id="puissance_fiscale_info" style="display:none">
    <span>Colonne P.6 de votre carte grise</span>
  </div>
  <div class="popoverDocument" id="carburant_info" style="display:none">
    <span>Colonne P.3 de votre carte grise</span>
  </div>
  <div class="popoverDocument" id="plaque_info" style="display:none">
    <span>Homologuées et fabriquées en France.<br>Expédition sous 3 jours ouvrés après réalisation de votre carte grise</span>
  </div>
  <div class="popoverDocument" id="materiau_info" style="display:none">
    <span>Le format de la plaque sera adapté au véhicule concerné</span>
  </div>
  <div class="popoverDocument" id="numeroPass_info" style="display:none">
    <span>Facultatif</span>
  </div>
  <div class="popoverDocument" id="montant_info" style="display:none">
    <span>Le montant simulé peut être différent du prix réel de votre carte grise,<br> vous serez recontacté par l'un de nos conseillers si c'est le cas.</span>
  </div>
  <div class="popoverDocument" id="montant_cg_info" style="display:none">
    <span>Pas de TVA sur montant encaissé</span>
  </div>
  <div class="popoverDocument" id="montant_plaque_info" style="display:none">
    <span>Pas de TVA sur montant encaissé</span>
  </div>

  <div class="popoverDocument" id="aledaInfo" style="display:none">
    <span>Le montant de la carte grise sera encaissé directement par Icicartegrise</span>
  </div>


  <script type="text/javascript">
    var prixService = parseFloat($('#prixService').text());
    var prixCarteGrise = parseFloat($('#span_acc_2_prixTotal').text());
    $('#sommeTotal').html((prixService + prixCarteGrise).toFixed(2));
    $('#infoPrixCarteGrise').webuiPopover({
      content:'A régler sur notre site internet',
      trigger:'hover',
      animation:'pop',
      delay: {
        show: null,
        hide: 100
      },
      placement:'right'
    });

    $('#infoReglementSite').webuiPopover({
      content:'Pour procéder au paiement, cliquer sur "Payer"',
      trigger:'hover',
      animation:'pop',
      delay: {
        show: null,
        hide: 100
      },
      placement:'right'
    });

    $('#infoServiceCommercant').webuiPopover({
      content:'A encaisser dans votre point de vente',
      trigger:'hover',
      animation:'pop',
      delay: {
        show: null,
        hide: 100
      },
      placement:'right'
    });

    $('#numInconnu_trigger').webuiPopover({
      url: '#numInconnu_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#marque_trigger').webuiPopover({
      url: '#marque_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#circulation_trigger').webuiPopover({
      url: '#circulation_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#type_trigger').webuiPopover({
      url: '#type_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#modele_trigger').webuiPopover({
      url: '#modele_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#puissance_fiscale_trigger').webuiPopover({
      url: '#puissance_fiscale_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#carburant_trigger').webuiPopover({
      url: '#carburant_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    /*$('#span_acc_2_box').webuiPopover({
      url: '#pass_box_info',
      placement: 'bottom',
      trigger: 'hover'
    });*/
    $('#plaque_trigger').webuiPopover({
      url: '#plaque_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#materiau_trigger').webuiPopover({
      url: '#materiau_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#numeroPass_trigger').webuiPopover({
      url: '#numeroPass_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#montant_trigger').webuiPopover({
      url: '#montant_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#montant_cg_trigger').webuiPopover({
      url: '#montant_cg_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#montant_plaque_trigger').webuiPopover({
      url: '#montant_plaque_info',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
    $('#encaissementTrigger').webuiPopover({
      url: '#aledaInfo',
      placement: 'right',
      trigger: 'hover',
      style: 'acc2'
    });
  </script>

  <!-- Ce site fait confiance à LeadFox pour convertir ses visiteurs en clients - https://leadfox.co/fr/ -->
  <!-- <script async src="//app.leadfox.co/js/api/leadfox.js" data-key="5272b50c3ea1eb882b2ef6fc5f7e1ee0"></script> -->
  <!-- LeadFox -->

  <!-- Tracker Leadfox -->

  <lf-lifecycle data-lifecycle="5" />

  <!-- Fin tracker leadfox -->

</body>

</html>