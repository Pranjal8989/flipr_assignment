  <!-- Main Content Start -->


  <!--Contact Form Section -->
  <div class="content" id="contact-form">
      <h5 style="color:white;font-weight:bold;font-size: 80px;line-height: 1.2">Consultation,<br>Design,<br> &
          Marketing</h5>
      <div class="contact-form">
          <h3 style="color:white;text-align: center;margin-bottom: 2rem;">Get a Free Consultation</h3>
          <form action="<?php echo base_url('ContactC/insert_contact'); ?>" method="post">
              <div class="form-group">
                  <input type="text" style="color:white;" class="form-control" id="name" name="name" placeholder=" "
                      required>
                  <label for="name">Full Name</label>
              </div>
              <div class="form-group">
                  <input type="email" style="color:white" class="form-control" id="email" name="email" placeholder=" "
                      required>
                  <label for="email">Email</label>
              </div>
              <div class="form-group">
                  <input type="number" style="color:white" class="form-control" id="mobile" name="mobile"
                      placeholder=" " required>
                  <label for="mobile">Mobile Number</label>
              </div>
              <div class="form-group">
                  <input type="text" style="color:white" class="form-control" id="message" name="city" placeholder=" "
                      required>
                  <label for="address">Area, City</label>
              </div>
              <button type="submit" class="btn btn-orange">Get Quick Quote</button>
          </form>
      </div>
  </div>

  <div class='container1' style=" position: relative;width:100%; height: 100%;overflow: hidden; ">
      <div class='background-container'>
          <div class="background-image-1">
              <div class="image-center image-1"></div>
              <div class="image-center image-2"></div>
              <div class="image-center image-3"></div>
              <div class="image-border image-4"></div>
              <div class="image-border image-5"></div>
              <div class="image-border image-6"></div>
          </div>
          <div class="background-image-2">
              <div class="m1">
                  <h3>Not Your Average Realtor</h3>
                  <p>Message</p>
              </div>
          </div>
          <div class="background-image-3">
              <div class="image-center image-7">
              </div>
              <div class="m2">
                  <h3>Why Choose Us?</h3>
                  <div class="column-container">
                      <div class="column">
                          <div class="icon-circle"><img src="<?php echo base_url('assets/icon/home.svg') ?>"
                                  alt="Potential Icon" />
                          </div>
                          <h5 style="background-color: #c3d3ea7e; margin:12px">Potential ROI</h5>
                          <p>Maximize your returns<br>Optimize resource allocation<br>Track growth effectively</p>
                      </div>
                      <div class="column">
                          <div class="icon-circle">
                              <img src="<?php echo base_url('assets/icon/paintbrush-2.svg') ?>" alt="Potential Icon" />
                          </div>
                          <h5 style="background-color: #c3d3ea7e;margin:12px">Design</h5>
                          <p>Creative and innovative<br>Enhanced user experience<br>Tailored to your needs</p>
                      </div>
                      <div class="column">
                          <div class="icon-circle">
                              <img src="<?php echo base_url('assets/icon/circle-dollar-sign.svg')?>"
                                  alt="Potential Icon" />
                          </div>
                          <h5 style="background-color: #c3d3ea7e;margin:12px">Marketing</h5>
                          <p>Reach your target audience<br>Boost your brand visibility<br>Drive higher engagement
                          </p>
                      </div>
                  </div>
              </div>
              <img src="<?php echo base_url('assets/shapes/Subtract-1.svg')?>" alt="Potential Icon" align="right" />
          </div>
      </div>
  </div>
  <div class='container2' id="services">
      <div class="partition left">
          <div class="bg-shape1"></div>
          <div class="bg-shape2"> </div>
          <div class="bg-shape4">
              <div class="bg-shape3"></div>
          </div>
      </div>
      <div class="partition center">
          <div class="bg-center-image1">
              <div class="bg-shape5"></div>
              <div class="bg-shape6"></div>
              <div class="bg-shape7"> </div>
          </div>


          <div class="bg-center-image2">
              <div class="bg-shape8"> </div>
              <div class="bg-shape9"> </div>
          </div>

          <div class="bg-center-image3">
              <div class="bg-shape10"></div>
          </div>

      </div>

      <div class="partition right">
          <div class="bg-shape11"></div>
          <div class="bg-shape12">
              <div class="bg-shape13"></div>
          </div>
          <div class="bg-shape14"></div>
      </div>
  </div>
  <!--About Section -->
  <div class="container3">
      <div class="about-us-header">
          <h3>About Us</h3>
          <img src="<?php echo base_url('assets/shapes/Rectangle%2058.svg')?>" alt="Shape">
      </div>

      <div class="about-description">
          <p>We are a team of passionate professionals dedicated to creating solutions that enhance value and impact
              businesses worldwide.</p>
      </div>

      <div class="top-right-shape">
          <img src="<?php echo base_url('assets/shapes/Subtract-3.svg')?>" alt="Shape">
      </div>

      <div class="learn-more-btn-container">
          <button class="learn-more-btn">Learn More</button>
      </div>
      <br>

  </div>

  <div class="container4">
      <div class="bottom-left-shape">
          <img src="<?php echo base_url('assets/shapes/Subtract-3.svg')?>" alt="Shape">
      </div>
  </div>
  <!--Project Section -->
  <div class="container5" id="project">
      <div class="project-us-header">
          <h3>Our Projects</h3>
      </div>
      <div class="project-description">
          <p>We Know what buyers are looking for and suggest projects that will being clients top dollar for the sale of
              their homes.</p>
      </div>
      <div class="project-cards-scroll">
          <?php foreach($projects as $pro) { ?>
          <div class="project-card">
              <div class="project-image">
                  <img src="<?php echo base_url($pro['image']); ?>" alt="<?php echo $pro['name']; ?>">
              </div>
              <div class="project-details">
                  <h4><?php echo $pro['name']; ?></h4>
                  <p><?php echo $pro['description']; ?></p>
                  <button class="show-more-btn">Show More</button>
              </div>
          </div>
          <?php } ?>
      </div>
  </div>

  <div class="overlapping-shapes">
      <img src="<?php echo base_url('assets/shapes/Ellipse%2025-1.svg'); ?>" class="shape-left-top" alt="Top Shape 1">
      <img src="<?php echo base_url('assets/shapes/Ellipse%2026.svg'); ?>" class="shape-left-middle" alt="Top Shape 2">
      <img src="<?php echo base_url('assets/shapes/Ellipse%207-1.svg'); ?>" class="shape-left" alt="Left Shape">
      <img src="<?php echo base_url('assets/shapes/Group%201000001645.svg'); ?>" class="shape-right" alt="Right Shape">
      <img src="<?php echo base_url('assets/shapes/Ellipse%2018.svg'); ?>" class="shape-right-under" alt="Bottom Shape">
  </div>
  <div class="container6" id="testimonials">
      <div class="client-us-header">
          <h3>Happy Clients</h3>
      </div>
      <div class="client-cards-scroll">
          <?php foreach($clients as $cli) { ?>
          <div class="client-card">
              <div class="client-image">
                  <img src="<?php echo base_url($cli['image']); ?>" alt="<?php echo $cli['name']; ?>">
              </div>
              <div class="client-details">
                  <p><?php echo $cli['description']; ?></p>
                  <h4><?php echo $cli['name']; ?></h4>
                  <h5><?php echo $cli['designation']; ?></h5>
                  <button class="show-more-btn-client">Show More</button>
              </div>
          </div>
          <?php } ?>
      </div>
  </div>

  <div class="container7">
      <div class="last-us-header">
          <h5>Learn more about our listing process, as well as our <br>additional staging and design work.</h5>
      </div>

      <div class="learn-more-btn-container7">
          <button class="learn-more-btn-container7">Learn More</button>
      </div>

  </div>
  <!--Newsletter Subscription Section -->
  <div class="bottom-container">
      <div class="bottom-left">
          <a class="nav-btn" href="#home">Home</a>
          <a class="nav-btn " href="#services">Services</a>
          <a class="nav-btn" href="#project">Projects</a>
          <a class="nav-btn" href="#testimonials">Testimonials</a>
          <a class="nav-btn" href="#contact-form">Contact</a>
      </div>
      <div class="bottom-right">
          <h6 style="color: white;font-size: 18px; margin-right: 10px;">Subscribe Us</h6>
          <form action="<?php echo base_url('SubscribeC/insert_subscribe_email'); ?>" method="post">
              <input type="email" placeholder="Enter Email Address" class="email-input" name="email" required>
              <button type="submit" class="subscribe-btn">Subscribe</button>
          </form>
      </div>
  </div>
  <!-- Main Content End -->