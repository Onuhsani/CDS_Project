<!DOCTYPE html>
<html lang="en">

    @include('layouts.user.user_header')

<body>

  @include('layouts.user.user_property_search')

  @include('layouts.user.user_nav')

  <main id="main">
    <section class="section-services section-t8">
      @yield('contents')
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">CDSProject</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                This Site is aimed at connecting agents to corpers to ease the renting of houses within Lafia. The site will also allow corpers to post their old house old items for the new corpers to buy
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> dob_cds_project@example.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +234 700 0000 000
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Quick Links</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Contact Us</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">About</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Blog</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Follow Us</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-facebook"></i> <a href="#">Facebook</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-instagram"></i> <a href="#">Instagram</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-twitter"></i> <a href="#">Twitter(X)</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-linkedin"></i> <a href="#">LinkedIn</a>
                </li><br>
                <li class="item-list-a">
                  <form method="post">
                    <div class="w-header-a">
                      <h3 class="w-title-a text-brand">Subscribe</h3>
                    </div>
                    <input type="text" name="sub" placeholder="Enter email" />
                    <input type="button" id="submit" value="Submit"/>
                  </form>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">DOB_CDS Lafia.</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by DOB Hackaton team 2023</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.user.user_scripts')

</body>

</html>