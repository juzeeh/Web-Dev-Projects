<!DOCTYPE html>
<html lang="en">

<head>
  <title>frontendheader</title>  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="dating/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="dating/bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="dating/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <style type="text/css">
    .working_paragraph{
  max-width: 80%;
  padding-left: 0;
  text-align: center;
}

.stories1{
    width: 100%;
    height: 100%;
    background: linear-gradient(to left, #ff66cc 0%, #ffffff 100%)
}
.stories2{
    
    height: 100%;
    background: linear-gradient(to right, #33ccff 0%, #ffffff 100%)
}
  </style>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img src="dating/image/koko.png" class="img-fluid" width="70" height="70">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <div> -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register|Login</a>
            </li>


          </ul>
        </div>
      </div>
  </nav>
  @yield('content')
  <footer class="py-3 bg-dark">
    <div class="container">
      <center>
        <a class="footer-link small" href="#" data-toggle="modal" data-target="#terms">Terms</a>
        <span class="m-0 text-center text-white small">.</span>
        <a class="footer-link small" href="#" data-toggle="modal" data-target="#privacy">Privacy</a>
        <span class="m-0 text-center text-white small">.</span>
        <a class="footer-link small" href="#" data-toggle="modal" data-target="#cookie">Cookie Policy</a>
        <br>
        <span class="social">
          <a href="https://www.facebook.com/kaung.myat.9081323" target="blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/" target="blank"><i class="fab fa-instagram"></i></a>

          <a href="https://www.instagram.com/" target="blank"><i class="fab fa-twitter-square"></i></a>
        </span>

        <span class="m-0 text-center text-white small">Copyright &copy; AstroDate 2020</span>
      </center>
      <!-- modal -->
      <div class="modal fade" id="terms" role="form">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Terms And Conditions</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
              <p class="text-justify">Last updated April, 2019<br><br>

                This Terms of Use Agreement (this «Agreement») is made between Astro Online Dating located at MIC Bootcamp 13, Hlaing, Yangon. "The Company", or the "Website", or the "Application (including applications for tablets and other smart devices)) and the user of astro.com and its affiliate services («You» or «Member») with respect to communications with other members and other online services provided by astro.com (the «Service»). By clicking «Sign Up» or «Take a Chance» on the registration forms, You indicate Your acceptance of all the terms and conditions of this Agreement and your registration on astro.com.<br>

              IF YOU DO NOT AGREE WITH THE TERMS AND CONDITIONS OF THIS AGREEMENT, DO NOT CLICK ON «SIGN UP» OR «TAKE A CHANCE» BUTTON, ONCE THE BUTTON IS CLICKED YOU ARE BOUND BY THE TERMS OF THIS AGREEMENT REGARDLESS OF WHETHER OR NOT YOU REGISTER FOR OR PURCHASE THE SERVICE. THE TERMS AND CONDITIONS OF THIS AGREEMENT ARE SUBJECT TO CHANGE BY astro.com AT ANY TIME, EFFECTIVE UPON NOTICE TO YOU, WHICH NOTICE SHALL BE DEEMED TO HAVE BEEN PROVIDED UPON OUR POSTING OF THE CURRENT VERSION OF THIS AGREEMENT ON THE WEBSITE/ UPON OUR UPDATING THE APPLICATION WITH THE CURRENT VERSION OF THIS AGREEMENT.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <div id="privacy" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Astrodate.com:Privacy</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body ">
              <p>The privacy of all of our users and has established this Privacy Policy to show commitment to these rights and to safeguard your privacy. If you use our website or application or services, then we urge you to read this Privacy Policy and become fully informed about how it affects to your personal privacy. Please refer to this Privacy Policy to find out how to contact us if you have any questions about the contents herein. By using our website you consent to the contents of this Privacy Policy.</p>
              <b>I. Privacy Policy</b>
              <p>When you visit any website, you are providing a range of personal information about your visit to the operators of the website, depending on the actions you take. This is also the case with Datemyage.com. You should always understand the privacy policies on any website when supplying information during your use of the website. You should always ask for a copy of the privacy policy if the website does not make the information available to you.</p>
              <b>II. Types of personal data collected</b>
              <p>When you use or register on the datemyage.com website, we only collect personal data that you provide of your own accord. It is possible to browse our website without registering, but you will need to register for the purpose of using certain features and services that we offer. By registering on our website you will provide and share your personal data with the public and with other users. Something that is public can be seen by anyone. For example, the personal data you provide in section «About Me», your name,gender, username, user ID, profile picture, photos and videos. This personal data is made available to the public to help connect you with other website users.</p>
              <b>III. The use and share of the collected personal data</b>
              <p>We may share personal data internally within our family of companies or with third parties for purposes described in this Privacy Policy. Personal data collected within the European Economic Area («EEA») may, for example, be transferred to countries outside of the EEA for the purposes as described in this Privacy Policy. We utilize standard contract clauses approved by the European Commission, adopt other means under European Union law, and obtain your consent to legitimize data transfers from the EEA to the United States and other countries.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <div class="modal fade" id="cookie" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cookie</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
              <p>To make this site work properly, we sometimes place small data files called cookies on your device. Most big websites do this too.</p>
              <b>What are cookies?</b>
              <p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. It enables the website to remember your actions and preferences (such as login, language, font size and other display preferences) over a period of time, so you don’t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p>
              <b>How do we use cookies?</b>
              <p>Adjust this part of the page according to your needs. Explain which cookies you usein plain, jargon-free language. In particular:</p>
              <ul class="small">
                <li>their purpose and the reason why they are being used, (e.g. to remember users' actions, to identify the user, for online behavioural advertising)</li>
                <li>if they are essential for the website or a given functionality to work or if they aim to enhance the performance of the website</li>
                <li>the types of cookies used (e.g. session or permanent, first or third-party)</li>
                <li>who controls/accesses the cookie-related information (website or third party)</li>
                <li>that the cookie will not be used for any purpose other than the one stated</li>
                <li>how consent can be withdrawn.</li>
              </ul>
              <b>How to control cookies</b>
              <p>You can control and/or delete cookies as you wish – for details, see <a href="http://www.whatarecookies.com/" target=" ">www.whatarecookies.com</a>. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
</body>
</html>
