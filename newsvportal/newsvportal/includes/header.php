   
   <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
            <div class="site-logo">
              News V-Portal
            </div>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

          </div>

          <div class="col-12 col-lg-6 ml-auto d-flex">
            <div class="ml-md-auto top-social d-none d-lg-inline-block">
              <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
            </div>


<div class="card mb-4" style="border-style: none;">
         <form name="search" action="search.php" method="post">
    <div class="input-group">
 
<input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
      <span class="input-group-btn" style="padding-top: 15px;">
        <button class="btn btn-secondary" type="submit">Go</button>
      </span>
    </form>
    </div>
  </div>
</div>
          </div>
          <div class="col-6 d-block d-lg-none text-right">
            
          </div>
        </div>
      </div>

      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mr-auto" style="margin-left: 39px;">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                <li class="active" >
                <li>
                  <a href="index.php" class="nav-link text-left">Lajmet</a>
                </li>
                <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                while($row=mysqli_fetch_array($query))
                {
                ?>
                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>" class="nav-link text-left"> <?php echo htmlentities($row['CategoryName']);?> </a>
                    </li>
                <?php } ?>
                <li>
                  <a href="about-us.php" class="nav-link text-left">Rreth nesh</a>
                </li>
                
                </li>
                </li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>
          </div>
         
        </div>
      </div>

    </div>
</div>
  
 
 <style>
.header-top > .container {
    padding-top: 20px;
    padding-bottom: 15px;
}
     
 @media (min-width: 1200px){
.container {
    max-width: 1140px;
}
}
.btn {
    border-radius: 30px;
    background: #373e42;
    padding-left: 20px;
    padding-right: 20px;
    border-color: #373e42;
    color: #fff;
}
.btn {
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: .2rem;
    font-family: "Cabin", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
.search-form .form-control:active, .search-form .form-control:focus {
    border-bottom: 1px solid #ccc;
}
.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d;
}
[class^="icon-"], [class*=" icon-"] {
    font-family: 'icomoon' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 0.8rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}
.icon-search:before {
    content: "\f002";
}
.sticky-wrapper .site-navbar .site-menu > li.active > a {
    color: #000;
}
.site-navbar .site-navigation .site-menu > li:first-child > a {
    padding-left: 0;
}
.sticky-wrapper .site-navbar .site-menu > li {
    display: inline-block;
}
.site-navbar .site-navigation .site-menu > li {
    display: inline-block;
    font-size: 14.8px;
}
.site-navbar .site-navigation .site-menu {
    margin-left: 0;
    padding-left: 0;
    margin-bottom: 0;
}
.mr-auto, .mx-auto {
    margin-right: auto!important;
}
.mr-auto, .mx-auto {
    margin-right: auto!important;
}
.pl-0, .px-0 {
    padding-left: 0!important;
}
@media (min-width: 992px){
.d-lg-block {
    display: block!important;
}}
.d-none {
    display: none!important;
}
dl, ol, ul {
    margin-top: 0;
    margin-bottom: 1rem;
}
.site-navbar .site-navigation .site-menu .active > a {
    color: #000;
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
}
.site-navbar .site-navigation .site-menu > li > a {
    text-transform: uppercase;

    font-weight: 400;
    display: inline-block;
    text-decoration: none !important;
    color: #484848;
}
.site-navbar .site-navigation .site-menu a {
    text-decoration: none !important;
    display: inline-block;
}
.text-left {
    text-align: left!important;
}
.nav-link {
    display: block;
    padding: 0.5rem 1rem;
}
a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
}
a {
    color: #8bc34a;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
*, :after, :before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.btn {
    border-radius: 30px;
    background: #000;
    padding-left: 20px;
    padding-right: 20px;
    border-color: #000;
    color: #fff;
}
.search-form .form-control {
    margin-right: 10px;
    height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 30px;
    border: none;
    background: #fff;
    border-bottom: 1px solid transparent;
    border-bottom: 1px solid #ccc;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.search-form .btn {
    border-radius: 30px;
    background: #4c4c4c;
    padding-left: 20px;
    padding-right: 20px;
    border-color: #4c4c4c;
}
.form-control {
    margin-right: 10px;
    height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 30px;
    border: none;
    background: #fff;
    border-bottom: 1px solid transparent;
    border-bottom: 1px solid #ccc;
}
.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}

.align-items-center {
  -webkit-box-align: center!important;
  -ms-flex-align: center!important;
  align-items: center!important;
}

.site-navbar .site-navigation .site-menu {
    margin-left: 0;
    padding-left: 0;
    margin-bottom: 0;
}
.site-navbar {
    margin-bottom: 0px;
    z-index: 1999;
    width: 100%;
    background: #fff;
    font-family: "B612 Mono", monospace;
}
.site-navbar {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    border-bottom: 1px solid #efefef;
}
@media (min-width: 768px){
.ml-md-auto, .mx-md-auto {
    margin-left: auto!important;
}}
@media (min-width: 992px){
.d-lg-inline-block {
    display: inline-block!important;
}}
.site-logo {
    font-size: 1.5rem;
    color: #000;
}
a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
}
a {
    color: #8bc34a;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
.mr-auto, .mx-auto {
    margin-right: auto!important;
}
.pl-0, .px-0 {
    padding-left: 0!important;
}
@media (min-width: 992px){
.d-lg-block {
    display: block!important;
}}

.sticky-wrapper .site-navbar .site-menu > li {
    display: inline-block;
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.align-items-center {
    -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important;
}
.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}
.mr-auto, .mx-auto {
    margin-right: auto!important;
}
.text-right {
    text-align: right!important;
}
.position-relative {
    position: relative!important;
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}

.sticky-wrapper {
    position: absolute;
    z-index: 100;
    width: 100%;
    background: #fff;
}
.sticky-wrapper .site-navbar {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    border-bottom: 1px solid #efefef;
}
.site-navbar {
    margin-bottom: 0px;
    z-index: 1999;
    width: 100%;
    background: #fff;
    font-family: "B612 Mono", monospace;
}
.pb-2, .py-2 {
    padding-bottom: 0.5rem!important;
}
.pt-2, .py-2 {
    padding-top: 0.5rem!important;
}
.pl-0, .px-0 {
    padding-left: 0!important;
}
@media (min-width: 992px){
.d-lg-block {
    display: block!important;
}}

.align-items-center {
    -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}
@media (min-width: 992px){
.col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}}
.col-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
}

.ml-auto, .mx-auto {
    margin-left: auto!important;
}
.d-flex {
    display: -webkit-box!important;
    display: -ms-flexbox!important;
    display: flex!important;
}
@media (min-width: 992px){
.col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}}

.text-right {
    text-align: right!important;
}
@media (min-width: 992px){
.d-lg-none {
    display: none!important;
}}
.d-block {
    display: block!important;
}
.col-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
 
@media (min-width: 1200px){
.container {
    max-width: 1140px;
}}
.d-inline-block {
    display: inline-block!important;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.col, .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col-auto, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-auto, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md-auto, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

user agent stylesheet
div {
    display: block;
}
 </style>
 





