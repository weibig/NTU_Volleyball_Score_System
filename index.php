<?php ob_start();session_start();?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>NTU Volleyball</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" font-family="Microsoft JhengHei">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold">NTU Volleyball</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-primary"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="#solution" class="nav-link js-scroll-trigger">Introduction</a></li>
                  <li class="nav-item"><a href="#import" class="nav-link js-scroll-trigger">Let's Schedule!</a></li>

                  <?php
                    if($_SESSION["login_session"] == false){
                  ?>
                  <li class="active"><a href="login.php" class="nav-link js-scroll-trigger" >Login</a></li>
                  
                  <?php 
                    }else{ 
                  ?>
                  <li class="active"><a href="logout.php" >Logout</a></li>
                  <?php 
                    } 
                  ?>

                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover half-bg">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-8">
              <h1 class="mb-5 text-primary font-weight-bold"  data-aos="fade-up">2020 Spring <span class="typed-words">NTU Volleyball Championship</span>.</h1>
              <p data-aos="fade-up" data-aos-delay="100"><a href="#services" class="more-29291 js-scroll-trigger">View Our Services</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="services">
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-92912">
                <span class="wrap-icon flaticon-debt"></span>
                <h2 class="heading">裁判</h2>
                <p>如果你是裁判，請點這裡看使用說明。</p>
                <p><a href="#s-1" class="more-92913 js-scroll-trigger">View Our Services</a></p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-92912">
                <span class="wrap-icon flaticon-growth"></span>
                <h2 class="heading">球員</h2>
                <p>如果你是球員，請點這裡看使用說明。</p>
                <p><a href="#s-2" class="more-92913 js-scroll-trigger">View Our Services</a></p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-92912">
                <span class="wrap-icon flaticon-business-plan"></span>
                <h2 class="heading">系統管理者</h2>
                <p>如果你是系統管理者，請點這裡看使用說明。</p>
                <p><a href="#s-3" class="more-92913 js-scroll-trigger">View Our Services</a></p>
              
              </div>
            </div>
          </div>
        </div>

      </div>         
    </section>

    <!-- introduction for three groups -->

    <section id="s-1">
      <div class="site-section" data-aos="fade-up">
        <div class="container" >
        <div class="row justify-content-center">
          <div class="col-md-8">
            
            <h2 class="text-primary mb-5 font-weight-bold">裁判專區</h2>

            <div class="owl-carousel slide-one-item">

              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image" style="background-image: url('images/referee.jpg');"></div>
                <div class="text">
                  <blockquote>
                    
                    <p>由於裁判⼈⼒安排包含諸多考量，如：「需錯開裁判⼈人員所屬系隊之比賽時間」、「不能擔任該隊所屬循環賽程之裁判」等，因此須由裁判上傳裁判安排限制，本系統將會透過資訊化排程系統滿足裁判需求的限制式。</p>
                  </blockquote>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>


    <section id="s-2">
      <div class="site-section" data-aos="fade-up">
        <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            
            <h2 class="text-primary mb-5 font-weight-bold">球員專區</h2>

            <div class="owl-carousel slide-one-item">

              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image" style="background-image: url('images/player1.jpg');"></div>
                <div class="text">
                  <blockquote>
                    <p>
                    由於賽程規劃包含諸多考量，如：各隊不便便時間、各組循環比賽進度需統一、「一週最多四場⽐比賽」、「每隊每週最多一場」等，因此須由球員上傳賽程安排限制，本系統將會透過資訊化排程系統滿足賽程需求的限制式。
                    </p>
                  </blockquote>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="s-3">
      <div class="site-section" data-aos="fade-up">
        <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            
            <h2 class="text-primary mb-5 font-weight-bold">系統管理者專區</h2>

            <div class="owl-carousel slide-one-item">

              <div class="d-md-flex testimony-29101 align-items-stretch">
                <div class="image" style="background-image: url('images/programmer.jpg');"></div>
                <div class="text">
                  <blockquote>
                    <p>1. 可登入、修改⾃己的會員資料<br><br>
                    2. 可選擇要參與的比賽，並選擇⾃己的身份（參參賽隊伍 or 裁判）<br><br>
                    3. 可查看及修改會員 / 比賽 / 賽程資料
                    </p>
                  </blockquote>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

    <section id="solution">
      <div class="site-section">
        <div class="container block-13" data-aos="fade-up">
          
          <h2 class="text-primary mb-5 font-weight-bold">Our Solutions</h2>

        <div class="owl-carousel nonloop-block-13">
          <div class="media-29101">
            <a href="#s4"><img src="images/input.jpg" alt="Image" class="img-fluid" ></a>
            <h3><a href="#s4">Data Input</a></h3>
          </div>
          <div class="media-29101">
            <a href="#s4"><img src="images/algorithm.jpg" alt="Image" class="img-fluid"></a>
            <h3><a href="#s4">Algorithm</h3></a>
          </div>
          <div class="media-29101">
            <a href="#s4"><img src="images/output.jpg" alt="Image" class="img-fluid"></a>
            <h3><a href="#s4">Data Output</h3></a>
          </div>

        </div>
      </div>
    </section>

  <section id="s4">
    <div class="site-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col">
            <h2 class="text-primary mb-5 font-weight-bold float-left">Solution Details</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">       
                <img src="images/img_1.jpg" alt="Image"
                 class="img-fluid">
              <div class="post-entry-1-contents">
                
                <h2>Input</h2>
                <span class="meta d-inline-block mb-3">資料輸入 <span class="mx-2">by</span>使用者</span>
                <p>使用者上傳賽程規劃限制、裁判安排限制等資訊。</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              <div class="post-entry-1-contents">
                
                <h2>Algorithm</h2>
                <span class="meta d-inline-block mb-3">演算法執行<span class="mx-2">by</span>系統</span>
                <p>根據某個比賽所有的裁判、隊伍的時間、比賽限制等資料來來⾃自動規劃賽程</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              <div class="post-entry-1-contents">
                
                <h2>Output</h2>
                <span class="meta d-inline-block mb-3">資料輸出<span class="mx-2">by</span>使用者</span>
                <p>使用者下載賽程表。</p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="import">
    <div class="site-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-8">
            
            <?php
            if($_SESSION["login_session"] == false)
            {

            ?>

            <h2 class="text-primary mb-5 font-weight-bold">Import Team Data</h2>

            <h6>Please upload team data before Fri. 23:59</h6>
            <br>

            <script type="text/javascript">
              function Upload() {
                  var fileUpload = document.getElementById("fileUpload");
                  var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
                  if (regex.test(fileUpload.value.toLowerCase())) {
                      if (typeof (FileReader) != "undefined") {
                          var reader = new FileReader();
                          reader.onload = function (e) {
                              var table = document.createElement("table");
                              var rows = e.target.result.split("\n");
                              for (var i = 0; i < rows.length; i++) {
                                  var cells = rows[i].split(",");
                                  if (cells.length > 1) {
                                      var row = table.insertRow(-1);
                                      for (var j = 0; j < cells.length; j++) {
                                          var cell = row.insertCell(-1);
                                          cell.innerHTML = cells[j];
                                      }
                                  }
                              }
                              var dvCSV = document.getElementById("dvCSV");
                              dvCSV.innerHTML = "";
                              dvCSV.appendChild(table);
                          }
                          reader.readAsText(fileUpload.files[0]);
                      } else {
                          alert("This browser does not support HTML5.");
                      }
                  } else {
                      alert("Please upload a valid CSV file.");
                  }
              }
            </script>
            <input type="file" id="fileUpload" />
            <input type="button" id="upload" value="Upload" onclick="Upload()" />
            <hr />
            <div id="dvCSV">
            </div>
            <hr />
            <h2 class="text-primary mb-5 font-weight-bold">The input file is correct?</h2>

            <input type="button" id='script' name="scriptbutton" value=" Submit " onclick="alert('Submited!');">
            <?php
            }else{
            ?>
            <h2 class="text-primary mb-5 font-weight-bold">Schedule by imported data</h2>

            <input type="button" id='script' name="scriptbutton" value=" Run Scheduling Script " onclick="goPython()">

            <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

            <script>
              function goPython(){
                  $.ajax({
                    url: "runpython.php",
                   context: document.body
                  }).done(function(data) {
                   alert(data);;
                  });
              }
            </script>

            <?php
            }
            ?>
            <hr />
              <h2 class="text-primary mb-5 font-weight-bold">Result</h2>

              <h6>The result will be posted at Sun. 12:00</h6>
              <br>

              <input type="button" id='script' name="scriptbutton" value=" Get Result " onclick="demoResult()">
              <table id="demoresult" class="table" style="margin-top: 5px;"></table>

            <hr />
              <h2 class="text-primary mb-5 font-weight-bold">Download</h2>
              <input type="button" id='script' name="scriptbutton" value=" Download " onclick="downloadResult()">
              <script type="text/javascript">
                  function downloadResult(){
                      $.ajax({
                        url: "download.php",
                        success: function(data) {
                          var a = document.createElement('a');
                          var filename = data;
                          a.href = filename;
                          a.download = "final.csv";
                          // a.setAttributeNode(document.createAttribute('download'));
                          a.click();
                          a.remove();
                        }
                      });
                  }
                  function demoResult(){
                      $.ajax({
                        url: "result.php",
                        success: function(data) {
                          var res_table = document.getElementById('demoresult');
                          res_table.innerHTML = data;
                        }
                      });
                  }                  
              </script>

            
            
          </div>
        </div>
      </div>
    </div>
</section>



    <div class="site-section bg-tertiary">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h2 class="text-primary mb-5 font-weight-bold">Let's work together to save your time!</h2>
            <p><a href="#services" class="more-29291 js-scroll-trigger">View Our Services</a></p>    
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row mt-5 justify-content-center">
          <div class="col-md-7 text-center">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> NTU Volleyball Championship </a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>

    

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
  

    <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Scheduler"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>


    <script src="js/main.js"></script>

  </body>

</html>

