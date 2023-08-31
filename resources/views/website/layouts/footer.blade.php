<!-- footer -->
<footer class="footer footer_bg_1">
   <div class="footer_top">
      <div class="container">
         <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4">
               <div class="footer_widget">
                  <div class="footer_logo">
                     <a href="#">
                     <img src="{{ get_company_logo() }}" alt="{{ settings('company_name')  }}">
                     </a>
                  </div>
                  <p>{!! nl2br(Purifier::clean(settings('company_about'))) !!}</p>
                  <div class="socail_links">
                     <ul>
                        @if($link = settings('facebook'))
                        <li>
                           <a href="{{ $link }}" target="_blank">
                           <i class="fab fa-facebook-square"></i>
                           </a>
                        </li>
                        @endif
                        @if($link = settings('twitter'))
                        <li>
                           <a href="{{ $link }}" target="_blank">
                           <i class="fab fa-twitter-square"></i>
                           </a>
                        </li>
                        @endif
                        @if($link = settings('instagram'))
                        <li>
                           <a href="{{ $link }}" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                        </li>
                        @endif
                        @if($link = settings('linkedin'))
                        <li>
                           <a href="{{ $link }}" target="_blank">
                           <i class="fab fa-linkedin"></i>
                           </a>
                        </li>
                        @endif
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
               <div class="footer_widget">
                  <h3 class="footer_title">
                     Main Menu
                  </h3>
                  <ul>
                     <li><a href="{{ route('homepage') }}">Home</a></li>
                     <li><a href="{{ route('pricing') }}">Pricing</a></li>
                     <li><a href="{{ route('how_it_works') }}">How it works</a></li>
                     <li><a href="{{ route('faq') }}">FAQ</a></li>
                     <li><a href="{{ route('contact') }}">Contact</a></li>
                     @if(!settings('disable_writer_application'))
                     <li><a href="{{ route('writer_application_page') }}">{{ settings('writer_application_page_link_title') }}</a></li>
                     @endif
                  </ul>
               </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-2">
               <div class="footer_widget">
                  <h3 class="footer_title">
                     Legal Info
                  </h3>
                  <ul>
                     <li><a href="{{ route('money_back_guarantee') }}">Money Back Guarantee</a></li>
                     <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                     <li><a href="{{ route('revision_policy') }}">Revision Policy</a></li>
                     <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                     <li><a href="{{ route('terms_and_conditions') }}">Terms & Condition</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
               <div class="footer_widget">
                  <h3 class="footer_title">
                     We accept
                  </h3>
                  <p class="font-24">
                     <i class="fab fa-cc-visa"></i>  
                     <i class="fab fa-cc-mastercard"></i>  
                     <i class="fab fa-cc-discover"></i> 
                     @if(settings('enable_paypal'))
                     <i class="fab fa-cc-paypal"></i>
                     @endif                                  
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copy-right_text">
      <div class="container">
         <div class="footer_border"></div>
         <div class="row">
            <div class="col-xl-12">
               <p class="copy_right text-center">
                  {{ date("Y") }}  {!! Purifier::clean(settings('footer_text')) !!}
               </p>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- footer -->