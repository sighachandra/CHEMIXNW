<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from bytesed.com/tf/indurance/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 17:40:20 GMT -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chemix - Chemical & Factory HTML Template</title>
    <link rel=icon href=favicon.png sizes="20x20" type="image/png">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
  </head>
  <body>
    <div class="preloader" id="preloader">
      <div class="preloader-inner">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
      <form action="https://bytesed.com/tf/indurance/index.html" class="search-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Here'" required>
        </div>
        <button type="submit" class="submit-btn">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
    <?php $page='contact';?>
    <?php require_once('_header.php');?>
    <section class="breadcrumb-area" style="background-image: url('assets/images/home-03/projects-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="title">contact us</h2>
            <ul>
              <li>home</li>
              <li>
                <i class="fa fa-angle-right"></i>
              </li>
              <li class="page-name">contact us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-area padding-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-title">
              <h2 class="title">drop us a message</h2>
              <p class="title-paragraph margin-top-20">we're happy to discuss your project and answer any question</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="indurance-form-02">
              <form action="#">
                <div>
                  <input type="text" placeholder="Name" id="nameField">
                  <span class="dis-for-d" id="name-error">The Name field is required</span>
                </div>
                <div>
                  <input type="email" placeholder="Email" id="emailField">
                  <span class="dis-for-d" id="email-error">Email is not valid</span>
                </div>
                <div>
                  <input type="text" placeholder="Phone" id="phoneField">
                  <span class="dis-for-d" id="phone-error">Phone Number is not valid</span>
                </div>
                <div>
                  <textarea name="message" placeholder="Your Message"></textarea>
                </div>
                <div>
                  <button type="button" class="template-btn" onclick="onClickSendMessage()">send message</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-widget-area">
              <div class="widget-nav-menu">
                <ul>
                  <li>
                    <div class="address-part">
                      <div class="address-icon">
                        <i class="la la-map-marker"></i>
                      </div>
                      <div class="address-text">
                        <span>address (HO)</span> CHEMIX ConCare Systems No. 5, West Periyar Pathai Arumbakkam, Chennai 600 106
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="call-us-part">
                      <div class="call-us-icon">
                        <i class="la la-phone-volume"></i>
                      </div>
                      <div class="call-us-text">
                        <span>call us</span> +91 9445700927
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mail-part">
                      <div class="mail-us-icon">
                        <i class="la la-envelope-open"></i>
                      </div>
                      <div class="mail-us-text">
                        <span>send us mail</span>
                            <a href="mailto:">contact@chemix-cc.com</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

             <div class="contact-widget-area">
              <div class="widget-nav-menu">
                <ul>
                  <li>
                    <div class="address-part">
                      <div class="address-icon">
                        <i class="la la-map-marker"></i>
                      </div>
                      <div class="address-text">
                        <span>address</span>Chemix Structural Services, D.No.3-6-58, Nethaji Street, Raghavaiahpeta, Sullurpeta, SPSR Nellore Dist., AP-524 121
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="call-us-part">
                      <div class="call-us-icon">
                        <i class="la la-phone-volume"></i>
                      </div>
                      <div class="call-us-text">
                        <span>call us</span> +91 9445700927/ +91 6369220958
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mail-part">
                      <div class="mail-us-icon">
                        <i class="la la-envelope-open"></i>
                      </div>
                      <div class="mail-us-text">
                        <span>send us mail</span>
                            <a href="mailto:">contact@chemix-cc.com</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <footer class="footer-area">
      <div class="footer-top">
        <div class="footer-info">
          <div class="info-bar-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <div class="logo-area">
                    <a href="index.html">
                      <img src="assets/images/logo/logo-white.png" alt="logo">
                    </a>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="info-bottom-right">
                    <li class="call-us-part white">
                      <div class="icon">
                        <i class="la la-phone-volume"></i>
                      </div>
                      <div class="content">
                        <h4 class="title">call us</h4>
                        <span class="detials">+91 9445700927</span>
                      </div>
                    </li>
                    <li class="mail-part white">
                      <div class="icon">
                        <i class="la la-envelope-open"></i>
                      </div>
                      <div class="content">
                        <h4 class="title">send us mail</h4>
                        <span class="details">
                           <a href="mailto:">contact@chemix-cc.com</a>
                        </span>
                      </div>
                    </li>
                    <li class="office-time-part white">
                      <div class="icon">
                        <i class="la la-clock"></i>
                      </div>
                      <div class="content">
                        <h4 class="title">office time</h4>
                        <span class="details">10:00 Am - 06:00 Pm</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-widget-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="footer-widget widget about_us_widget">
                  <h5 class="widget-title">about us</h5>
                  <p>We are able to guarantee a very high level of satisfaction for our clients. Pharetra libero non facilisis imperdiet, mi augue feugiat nisl sit amet mollis enim velit Vestibulum fringilla nulla ultricies.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="footer-widget widget widget_nav_menu">
                  <h5 class="widget-title">useful links</h5>
                  <ul>
                    <li>
                      <a href="#">home</a>
                    </li>
                    <li>
                      <a href="#">about us</a>
                    </li>
                    <li>
                      <a href="#">services</a>
                    </li>
                    <li>
                      <a href="#">blog</a>
                    </li>
                    <li>
                      <a href="#">contact</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="footer-widget widget widget_nav_menu">
                  <h5 class="widget-title">our services</h5>
                  <ul>
                    <li>
                      <a href="#">water proofing</a>
                    </li>
                    <li>
                      <a href="#">protective coatings</a>
                    </li>
                    <li>
                      <a href="#">joint treatment</a>
                    </li>
                    <li>
                      <a href="#">rehabilation works</a>
                    </li>
                    <li>
                      <a href="#">other services</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="footer-widget widget widget_nav_menu">
                  <h5 class="widget-title">support</h5>
                  <ul>
                    <li>
                      <a href="#">support center</a>
                    </li>
                    <li>
                      <a href="#">terms of use</a>
                    </li>
                    <li>
                      <a href="#">privacy policy</a>
                    </li>
                    <li>
                      <a href="#">FAQS</a>
                    </li>
                    <li>
                      <a href="#">help</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright-area">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="copyright-left">
                <span>Designed & Developed By Love</span>
              </div>
            </div>
            <div class="col-md-7">
              <div class="copyright-right">
                <span>&copy; copyright 2020 indurance all rights reserved.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="back-to-top">
      <i class="la la-chevron-circle-up"></i>
    </div>
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/easing.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
  <!-- Mirrored from bytesed.com/tf/indurance/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 17:40:20 GMT -->
</html>