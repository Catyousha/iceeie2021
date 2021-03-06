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
                        <img src="<?=base_url('assets/img/logoiceeie.png');?>" class="img-fluid" alt="">
                        </a>
                     </div>
                     <!------./LOGO-------->
                  </div>
                  <div class="col-xl-10 col-lg-10">
                     <div class="main-menu d-none d-lg-block">
                        <nav>
                           <ul id="navigation">
                              <li><a class="<?= current_url(true)->getSegment(1) == '' ? 'active': '' ?>" href="/">Home</a></li>
                              <li><a class="<?= current_url(true)->getSegment(1) == 'committee' ? 'active': '' ?>" href="<?=site_url('/committee');?>">Committee</a></li>
                              <li><a class="<?= current_url(true)->getSegment(1) == 'topics' ? 'active': '' ?>" href="<?=site_url('/topics');?>">Topics</a></li>
                              <li>
                                 <a class="<?= current_url(true)->getSegment(1) == 'conference' ? 'active': '' ?>" href="#">Conference Programs<i class="ti-angle-down ml-1"></i></a>
                                 <ul class="submenu">
                                    <li><a href="<?=site_url('/conference/venue');?>">Conference Venue</a></li>
                                    <li><a href="<?=site_url('/conference/fee');?>">Conference Fee</a></li>
                                    <li><a href="<?=site_url('/conference/schedule');?>">Program Schedule</a></li>
                                 </ul>
                              </li>
                              <li><a class="<?= current_url(true)->getSegment(1) == 'travel' ? 'active': '' ?>" href="<?=site_url('/travel');?>">Travel</a></li>
                              <li>
                                 <a class="<?= current_url(true)->getSegment(1) == 'paper' ? 'active': '' ?>" href="#">For Authors<i class="ti-angle-down ml-1"></i></a>
                                 <ul class="submenu">
                                     <li><a href="<?=site_url('/for-author/submission-guideline');?>">Submission Guideline</a></li>
                                     <li><a href="<?=site_url('/for-author/paper-submission');?>">Paper Submission</a></li>
                                    <li><a href="<?=site_url('/for-author/important-dates');?>">Important Dates</a></li>
                                    <li><a href="<?=site_url('/for-author/paper-template');?>">Template</a></li>
                                 </ul>
                              </li>
                              <li><a href="<?=site_url('/contacts');?>">Contacts</a></li>
                           </ul>
                        </nav>
                    </div>
                  </div>
                  <div class="col-12 align-content-center">
                     <div class="mobile_menu d-block d-lg-none" style="margin-top: -10px;"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- header-end -->
