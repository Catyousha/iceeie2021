<body>
   <header>
      <div class="header-area ">
         <div id="sticky-header" class="main-header-area ">
            <div class="container-fluid p-0">
               <div class="row align-items-center justify-content-between no-gutters">
                  <div class="col-xl-1 col-lg-1">
                      <!------LOGO-------->
                     <div class="logo-img">
                        <a href="<?=site_url('')?>">
                        <img src="assets/img/logoiceeie.png" width="300px" height="100px" alt="">
                        </a>
                     </div>
                     <!------./LOGO-------->
                  </div>
                  <div class="col-xl-9 col-lg-9">
                     <div class="main-menu d-none d-lg-block">
                        <nav>
                           <ul id="navigation">
                              <li><a class="active" href="<?=site_url('/main-page');?>">Home</a></li>
                              <li><a href="<?=site_url('/paper-status');?>">Paper Status</a></li>
                              <li><a href="<?=site_url('/comittee');?>">Comittee</a></li>
                              <li><a href="<?=site_url('/topics');?>">Topics</a></li>
                              <li>
                                 <a href="#">Conference Programs<i class="ti-angle-down"></i></a>
                                 <ul class="submenu">
                                    <li><a href="<?=site_url('/conference/venue');?>">Conference Venue</a></li>
                                    <li><a href="<?=site_url('/conference/fee');?>">Conference Fee</a></li>
                                    <li><a href="<?=site_url('/conference/schedule');?>">Program Schedule</a></li>
                                 </ul>
                              </li>
                              <li><a href="<?=site_url('/travel');?>">Travel</a></li>
                              <li>
                                 <a href="#">For Authors<i class="ti-angle-down"></i></a>
                                 <ul class="submenu">
                                    <li><a href="<?=site_url('/paper/submission');?>">Paper Submission</a></li>
                                    <li><a href="<?=site_url('/paper/dates');?>">Important Dates</a></li>
                                    <li><a href="<?=site_url('/paper/template');?>">Template</a></li>
                                 </ul>
                              </li>
                              <li><a href="<?=site_url('/contacts');?>">Contacts</a></li>
                           </ul>
                        </nav>
                    </div>
                  </div>
                  <div class="col-12">
                     <div class="mobile_menu d-block d-lg-none"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-end -->