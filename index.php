<?php
  include_once './Assets/PHP/database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Netmatter Site Remake</title>
    <link rel="stylesheet" href="Assets/CSS/main.css">
    <script src="https://kit.fontawesome.com/52d68163f3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body id="body">
    <div id="container">
      <div class="main">
        <div class="main-scrollbar">
          <div class="main-scrollbar-cont">
            <dialog id="cookies-pop-up" class="cookie">
              <div class="cookie-content">
              <div class="cookie-content-header">
                <h3 class="cookie-content-header_title">Cookies Policy</h3>
              </div>
              <div class="cookie-content-body">
                <p class="cookie-content-body_text">
                  Our website uses cookies. This helps us provide you with a good experience on our website. 
                  To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". 
                  For a detailed explanation, click on "<a>Privacy Policy</a>" otherwise click "Accept Cookies" to enter.
                </p>
              </div>
              <div class="cookie-content-footer">
                <div class="cookie-content-footer-row">
                  <div class="cookie-content-footer-row_item-1">
                    <a class="btn btn-default">Change Settings</a>
                  </div>
                  <div class="cookie-content-footer-row_item-2">
                    <a class="btn btn-default accept-cookies">Accept Cookies</a>
                  </div>
                </div>
              </div>
              </div>
            </dialog>
            <?php include 'Assets/PHP/header.php' ?>
            <div id="banner">
              <div class="banner-container">
                <div class="banner-img-container">
                  <img src="Assets/Images/home-oaVs.jpg" class="banner-img" alt="The East Of England's Leading Technology Company">
                </div>  
                <div class="banner-content">
                  <div class="container">
                    <div class="banner-text">
                      <div class="banner-title">
                        The East Of England's Leading Technology Company
                      </div>
                      <p class="banner-par">
                        Performance-driven digital and technology services <br>
                        with complete transparency.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-content">
              <div class="container section services-container">
                <div class="empty-block">
                  <div class="services-list">
                  <div class="row">
                    <div class="services-title-container">
                      <h2 class="services-title">
                        <strong>Our Services</strong>
                      </h2>
                    </div>
                    <div class="services-r1">
                      <a href="#" class="block software">
                        <span class="services-icon">
                          <i class="fa-solid fa-table-cells icon"></i>
                        </span>
                        <span class="h2">
                          Bespoke Software
                        </span>
                        <span class="p">
                          Tailored software solutions to improve business productivity and online profits.
                        </span>
                        <br>
                        <span class="btn-container">
                          <span class="btn btn-software">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="services-r1">
                      <a href="#" class="block it">
                        <span class="services-icon">
                          <i class="fa-solid fa-display icon"></i>
                        </span>
                        <span class="h2">
                          IT Support
                        </span>
                        <span class="p">
                          Remotely managed IT services that is catered to your businesses needs, adds value & reduces costs.
                        </span>
                        <span class="btn-container">
                          <span class="btn btn-it">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="services-r1">
                      <a href="#" class="block digital">
                        <span class="services-icon">
                          <i class="fa-solid fa-signal icon"></i>
                        </span>
                        <span class="h2">
                          Digital Marketing
                        </span>
                        <span class="p">
                          Driven brand awareness & ROI through creative digital marketing campaigns.
                        </span>
                        <br>
                        <span class="btn-container">
                          <span class="btn btn-digital">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="services-r2">
                      <a href="#" class="block telecoms">
                        <span class="services-icon">
                          <i class="fa-solid fa-phone-volume icon"></i>
                        </span>
                        <span class="h2">
                          Telecoms Services
                        </span>
                        <span class="p">
                          Stay connected with bespoke telecoms solutions when you need it most.
                        </span>
                        <br>
                        <span class="btn-container">
                          <span class="btn btn-telecoms">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="services-r2">
                      <a href="#" class="block web">
                        <span class="services-icon">
                          <i class="fa-solid fa-code icon"></i>
                        </span>
                        <span class="h2">
                          Web Design
                        </span>
                        <span class="p">
                          User-centric design for businesses looking to make a lasting impression.
                        </span>
                        <br>
                        <span class="btn-container">
                          <span class="btn btn-web">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="services-r2">
                      <a href="#" class="block security">
                        <span class="services-icon">
                          <i class="fa-solid fa-shield-halved icon"></i>
                        </span>
                        <span class="h2">
                          Cyber Security
                        </span>
                        <span class="p">
                          Ensuring your online business stays secure 24/7 365 days of the year.
                        </span>
                        <br>
                        <span class="btn-container">
                          <span class="btn btn-security">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                    <div class="services-r2">
                      <a href="#" class="block developer-course">
                        <span class="services-icon">
                          <i class="fa-solid fa-graduation-cap icon"></i>
                        </span>
                        <span class="h2">
                          Developer Training
                        </span>
                        <span class="p">
                          Have you considered a career in web development but you aren’t sure where to start?
                        </span>
                        <br>
                        <span class="btn-container">
                          <span class="btn btn-developer-course">
                            Read More
                          </span>
                        </span>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="partnerships section">
                <div class="owl-carousel owl-theme">
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/google-partner.jpg" alt="Google Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/future-50.jpg" alt="Future 50 Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/investing-in-future-growth.jpg" alt="Investing In Future Growth Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/norfolk-carbon-charter.jpg" alt="Norfolk Carbon Charter Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/PPC_logo.jpg" alt="PPC Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/princess-royal-training.jpg" alt="Princess Royal Training Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/qms.jpg" alt="QMS Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/iso_27001.jpg" alt="ISO Partnership"></div>
                  <div class="item"><img class="partnership" src="Assets/Images/Partnerships/skills-of-tomorrow.jpg" alt="Skills Of Tomorrow Partnership"></div>
                </div>
              </div>
              <div class="welcome-container">
                <div class="welcome-background">
                  <div class="container section">
                    <div class="row">
                      <div class="col">
                        <h2 class="h1"><strong>Welcome To Netmatters</strong></h2>
                        <p>
                          <strong>
                            Netmatters is a leading <a href="#">Bespoke Software</a>, <a href="#">IT Support</a>, and <a href="#">Digital Marketing</a> company based in the East of England with offices in <a href="#">Cambridge</a>, <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.
                          </strong>
                        </p>
                        <p>
                          We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.
                        </p>
                        <p>
                          We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.
                        </p>
                        <div>
                          <a href="#" class="btn btn-norm-dark">
                            Read More
                            <i class="fa-solid fa-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                      <div class="col">
                        <h2 class="h1">
                          <strong>What Our Clients Think</strong>
                        </h2>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <p>
                          <span class="review">
                            Great service. Took the reigns and did all the leg work for us. Ensured we were happy with our website and made all changes necessary as and when asked to do so.
                          </span>
                        </p>
                        <p>
                          <span class="review-author">
                            Oliver King - SEA Scaffolding
                          </span>
                        </p>
                        <div>
                          <a href="#" class="btn btn-norm btn-google">
                            Google Reviews
                            <i class="fa-solid fa-arrow-right"></i>
                          </a>
                          <a href="#" class="btn btn-norm btn-trustpilot">
                            TrustPilot Reviews 
                            <i class="fa-solid fa-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="latest-news">
                <div class="news">
                  <div class="container">
                    <div class="news-title-container">
                      <h2 class="h1 news-title">
                        <strong>Latest News</strong>
                      </h2>
                      <h3 class="news-view-all-top">
                        <a href="#">
                          View all 
                          <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="container section">
                  <div class="news-articles">
                    <div class="row">
                      <div class="col-2">
                        <div class="news-block c-1">
                          <a href="#" class="article-link"></a>
                          <div class="news-banner-container">
                            <a href="#" class="category">Careers</a>
                            <a href="#" class="news-img-container">
                              <img src="Assets/Images/business-development-account-zUub.jpg" alt="Buisness Development Acount Manager" class="img">
                            </a>
                          </div>
                          <div class="block">
                            <h3>
                              <a href="#">Business Development Account Manager</a>
                            </h3>
                            <p>Salary Range £35k+ per annum + Bonus + Benefits Hours 40 hours per week, Mon – Fri Location Wymondha...</p>
                            <a class="btn btn-support">Read More</a>
                            <div class="user">
                              <div class="avatar">
                                <img src="Assets/Images/elliott-peacock-w8vu.jpg" alt="Elliott Peacock">
                              </div>
                              <div class="details">
                                <strong class="primary-text">Posted by Elliott Peacock</strong>
                                <br>
                                  9th August 2022
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="news-block c-2">
                          <a href="#" class="article-link"></a>
                          <div class="news-banner-container">
                            <a href="#" class="category">News</a>
                            <a href="#" class="news-img-container">
                              <img src="Assets/Images/the-risks-of-kEsp.jpg" alt="Netmatters Road To Net Zero" class="img">
                            </a>
                          </div>
                          <div class="block">
                            <h3>
                              <a href="#">The Risks Of Not Being Cookie Compliant</a>
                            </h3>
                            <p>Are You Cookie Compliant? We’ve all heard of website cookies. Most people understand the premise of...</p>
                            <a class="btn btn-support">Read More</a>
                            <div class="user">
                              <div class="avatar">
                                <img src="Assets/Images/netmatters-ltd-VXAv.png" alt="Netmatters">
                              </div>
                              <div class="details">
                                <strong class="primary-text">Posted by Netmatters</strong>
                                <br>
                                  4th August 2022
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="news-block c-2">
                          <a href="#" class="article-link"></a>
                          <div class="news-banner-container">
                            <a href="#" class="category">Environmental News</a>
                            <a href="#" class="news-img-container">
                              <img src="Assets/Images/netmatters-road-to-MEcu.jpg" alt="Netmatters Road To Net Zero" class="img">
                            </a>
                          </div>
                          <div class="block">
                            <h3>
                              <a href="#">Netmatters Road To Net Zero</a>
                            </h3>
                            <p>Driving through our 'Road to Net Zero' We have some fantastic news to share regarding our latest add...</p>
                            <a class="btn btn-support">Read More</a>
                            <div class="user">
                              <div class="avatar">
                                <img src="Assets/Images/netmatters-ltd-VXAv.png" alt="Netmatters">
                              </div>
                              <div class="details">
                                <strong class="primary-text">Posted by Netmatters</strong>
                                <br>
                                  3rd August 2022
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="news-view-all container">
                  <h3>
                    <a href="#">
                      View all 
                      <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </h3>
                </div>
              </div>
              <div class="clients-section">
                <div class="container section">
                  <div class="client-list">
                    <div class="client">
                      <div class="description">
                        <div class="box">
                          <h3> Busseys </h3>
                          <p>One of the UK's leading Ford dealerships.</p>
                          <div class="arrow"></div>
                        </div>
                      </div>
                      <img src="Assets/Images/home-gZQR.png" alt="Busseys Logo">
                    </div>
                    <div class="client">
                      <div class="description">
                        <div class="box">
                          <h3> Crane Garden Builders </h3>
                          <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                          <div class="arrow"></div>
                        </div>
                      </div>
                      <img src="Assets/Images/home-MjHw.png" alt="Crane Garden Building Logo">
                    </div>
                    <div class="client">
                      <div class="description">
                        <div class="box">
                          <h3> Beat </h3>
                          <p>The UK's eating disorder charity founded in 1989.</p>
                          <div class="arrow"></div>
                        </div>
                      </div>
                      <img src="Assets/Images/home-ukEL.png" alt="Beat Logo">
                    </div>
                    <div class="client">
                      <div class="description">
                        <div class="box">
                          <h3> Northern Diver </h3>
                          <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                          <div class="arrow"></div>
                        </div>
                      </div>
                      <img src="Assets/Images/home-kGn4.png" alt="Northern Diver Logo">
                    </div>
                  </div>
                </div>
              </div>
              <?php include 'Assets/PHP/newsletter.php' ?>
            </div>
            <?php include 'Assets/PHP/footer.php' ?>
          </div>
        </div>
      </div>
      <?php include 'Assets/PHP/sidebar.php' ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="Assets/JS/main.js"></script>
  </body>
</html>
