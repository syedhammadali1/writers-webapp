<header>
   <div class="header-area">
      <div id="sticky-header" class="main-header-area">
         <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">
               <div class="col">
                  <div class="logo-img">
                     <a  href="{{ route('homepage') }}">                    
                     <img src="{{ get_company_logo() }}" alt="{{ settings('company_name') }}" >
                     </a>
                  </div>
               </div>
               <div class="col-md-auto">
                  <div class="main-menu  d-none d-lg-block">
                     <nav>
                        <ul id="navigation">
                           <li><a class="{{ is_active_menu('homepage') }}" href="{{ route('homepage') }}">Home</a></li>
                           <li><a  class="{{ is_active_menu('pricing') }}" href="{{ route('pricing') }}">Pricing</a></li>
                           <li><a class="{{ is_active_menu('how_it_works') }}" href="{{ route('how_it_works') }}">How it works</a></li>
                           <li><a class="{{ is_active_menu('faq') }}" href="{{ route('faq') }}">FAQ</a></li>
                           <li><a class="{{ is_active_menu('contact') }}" href="{{ route('contact') }}">Contact</a></li>
                           @if(!settings('disable_writer_application') && settings('show_writer_application_link_website_top_menu'))
                           <li><a href="{{ route('writer_application_page') }}">{{ settings('writer_application_page_link_title') }}</a></li>
                           @endif
                           <li><a class="{{ is_active_menu('order_page') }}" href="{{ route('order_page') }}">Order Now</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col d-none d-lg-block">
                  <div class="log_chat_area d-flex align-items-center">
                     @auth
                     <a href="{{ route(get_default_route_by_user(auth()->user())) }}" class="login">
                     <i class="flaticon-user"></i>
                     <span>My Account</span>
                     </a>
                     @endauth
                     @guest
                     <a href="{{ route('login') }}" class="login">
                     <i class="flaticon-user"></i>
                     <span>log in</span>
                     </a>
                     @endguest
                     <div class="live_chat_btn">
                        <a class="boxed_btn_orange" href="#">
                        <i class="fa fa-phone"></i>
                        <span>{!! Purifier::clean(settings('company_phone')) !!}</span>
                        </a>
                     </div>
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