
<!DOCTYPE html>
    <html lang="en">
     
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link href="{{asset('/assets/css/app.css')}}" rel="stylesheet">
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <link href="{{asset('/assets/css/navbar.css')}}" rel="stylesheet">
        <!-- Scripts -->
      
</head>

    <body>
  
        <!--=============== HEADER ===============-->
        <header class="header">
         <!-- Announcement Banner -->
<div id="ab-full-width-with-dismiss-button-on-blue-bg" class="hs-removing:-translate-y-full bg-blue-600 hidden-mobile">
  <div class="max-w-[85rem] px-4 py-0 sm:px-4 lg:px-8 mx-auto">
    <!-- Nav -->
    <nav class="nav container mx-auto px-4 sm:px-6 lg:px-8 ">
      <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">

        <!-- Social Brands -->
        <div>
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path></svg>
          </a>
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"></path></svg>
          </a>
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3.06364 7.50914C4.70909 4.24092 8.09084 2 12 2C14.6954 2 16.959 2.99095 18.6909 4.60455L15.8227 7.47274C14.7864 6.48185 13.4681 5.97727 12 5.97727C9.39542 5.97727 7.19084 7.73637 6.40455 10.1C6.2045 10.7 6.09086 11.3409 6.09086 12C6.09086 12.6591 6.2045 13.3 6.40455 13.9C7.19084 16.2636 9.39542 18.0227 12 18.0227C13.3454 18.0227 14.4909 17.6682 15.3864 17.0682C16.4454 16.3591 17.15 15.3 17.3818 14.05H12V10.1818H21.4181C21.5364 10.8363 21.6 11.5182 21.6 12.2273C21.6 15.2727 20.5091 17.8363 18.6181 19.5773C16.9636 21.1046 14.7 22 12 22C8.09084 22 4.70909 19.7591 3.06364 16.4909C2.38638 15.1409 2 13.6136 2 12C2 10.3864 2.38638 8.85911 3.06364 7.50914Z"></path></svg>
          </a>
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z"></path></svg>
          </a>
          
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19.6069 6.99482C19.5307 6.69695 19.3152 6.47221 19.0684 6.40288C18.6299 6.28062 16.501 6 12.001 6C7.50098 6 5.37252 6.28073 4.93225 6.40323C4.68776 6.47123 4.4723 6.69593 4.3951 6.99482C4.2863 7.41923 4.00098 9.19595 4.00098 12C4.00098 14.804 4.2863 16.5808 4.3954 17.0064C4.47126 17.3031 4.68676 17.5278 4.93251 17.5968C5.37252 17.7193 7.50098 18 12.001 18C16.501 18 18.6299 17.7194 19.0697 17.5968C19.3142 17.5288 19.5297 17.3041 19.6069 17.0052C19.7157 16.5808 20.001 14.8 20.001 12C20.001 9.2 19.7157 7.41923 19.6069 6.99482ZM21.5442 6.49818C22.001 8.28 22.001 12 22.001 12C22.001 12 22.001 15.72 21.5442 17.5018C21.2897 18.4873 20.547 19.2618 19.6056 19.5236C17.8971 20 12.001 20 12.001 20C12.001 20 6.10837 20 4.39637 19.5236C3.45146 19.2582 2.70879 18.4836 2.45774 17.5018C2.00098 15.72 2.00098 12 2.00098 12C2.00098 12 2.00098 8.28 2.45774 6.49818C2.71227 5.51273 3.45495 4.73818 4.39637 4.47636C6.10837 4 12.001 4 12.001 4C12.001 4 17.8971 4 19.6056 4.47636C20.5505 4.74182 21.2932 5.51636 21.5442 6.49818ZM10.001 15.5V8.5L16.001 12L10.001 15.5Z"></path></svg>
          </a>
          {{-- <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M8 2H1L9.26086 13.0145L1.44995 21.9999H4.09998L10.4883 14.651L16 22H23L14.3917 10.5223L21.8001 2H19.1501L13.1643 8.88578L8 2ZM17 20L5 4H7L19 20H17Z"></path></svg>
          </a> --}}
        </div>
        <!-- End Social Brands -->
      </nav>

  <div id="secondary-nav-toggle" class=" hs-collapse hidden overflow-hidden transition-all duration-300 absolute top-16 end-0 w-full rounded-lg bg-blue-600 sm:block sm:static sm:top-0 sm:w-full sm:max-h-full sm:bg-transparent sm:overflow-visible">
    
    <div class="flex flex-col py-2 sm:flex-row sm:justify-end sm:gap-y-0 sm:gap-x-6 sm:py-0">
      
      <a class="text-sm font-medium text-blue-500 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-300 dark:hover:text-white" href="/pages/downloads">DOWNLOADS</a>
      
      <span class="inline-block border-e border-white/30 w-px h-auto mx-2"></span>
      <a class="text-sm font-medium text-blue-500 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-300 dark:hover:text-white" href="#">CARRERS</a>
      <span class="inline-block border-e border-white/30 w-px h-auto mx-2"></span>
      <a class="text-sm font-medium text-blue-500 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-300 dark:hover:text-white" href="#">CONTACT US</a>
      <span class="inline-block border-e border-white/30 w-px h-auto mx-2"></span>
      <a class="text-sm font-medium text-blue-500 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-300 dark:hover:text-white" href="#">BOOK AN APPOINTMENT</a>
      <span class="inline-block border-e border-white/30 w-px h-auto mx-2"></span>
    
      <a class="text-sm font-medium text-blue-500 hover:text-blue-600 sm:border-b-2 border-b-transparent py-2 sm:py-3.5 dark:text-neutral-300 dark:hover:text-white" href="#">FIND A DOCTOR</a>
        </div>
  </div>
</nav>
<!-- End Nav -->
    
  </div>
</div>
<!-- End Announcement Banner -->

            <nav class="nav container">
              
                <div class="nav__data  ">
                  
                    <a href="/" class="nav__logo">
                      <a href="/"><img src="https://i.ibb.co/YtbgKbg/removal-ai-66fb6cd1-2698-4f31-b079-62acab8ac461-images-1.png" alt="removal-ai-66fb6cd1-2698-4f31-b079-62acab8ac461-images-1" width="90px" height="90px"></a>
                    </a>
                    
    
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line nav__toggle-menu"></i>
                        <i class="ri-close-line nav__toggle-close"></i>
                    </div>
                </div>
                
                <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                  

                <!--=============== NAV MENU ===============-->
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                 
                        <li>
                            <a href="/" class="nav__link   hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">HOME</a>
                        </li>

                        <!--=============== DROPDOWN 1 ===============-->
                        <li class="dropdown__item">                      
                            <div href="/pages/about"class="nav__link dropdown__button  hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                ABOUT SOGH <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                          <i class="ri-hospital-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Shahab Orthopaedic & General Hospital.</span>
    
                                        {{-- <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">HTML for beginners</a>
                                            </li>
                                            
                                            <li>
                                                <a href="#" class="dropdown__link">Advanced CSS</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">JavaScript OOP</a>
                                            </li>
                                        </ul> --}}
                                        <ul class="mt-3 text-[15px] dropdown__list">
                                          <li>
                                            <a  href="/pages/about"
                                              class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                              About Us
                                              <p class="text-gray-500 font-normal">Shahab Orthopaedic</p>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="/pages/founder"
                                              class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                              Founders Profile
                                              <p class="text-gray-500 font-normal">The Founder</p>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="/pages/about#vision"
                                              class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                              Vision & Mission
                                              <p class="text-gray-500 font-normal">Our Vision And Goal</p>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="/pages/governance"
                                              class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                              Governance
                                              <p class="text-gray-500 font-normal">Head Members</p>
                                            </a>
                                          </li>
                                         
                                        </ul>
                                    </div>

                                    <div class="dropdown__group">
                                      <div class="dropdown__icon">
                                        <i class="ri-map-pin-line"></i>
                                      </div>
  
                                      <span class="dropdown__title">Location</span>
  
                                      <ul class="dropdown__list">
                                        <li>
                                          <a href="/pages/peshawar"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                            About Peshawar
                                            <p class="text-gray-500 font-normal">State of the art</p>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="/pages/location"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                            Location
                                            <p class="text-gray-500 font-normal">Map</p>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="/pages/director"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                           Directors Message
                                            <p class="text-gray-500 font-normal">Directors Message</p>
                                          </a>
                                        </li>
                                      </ul>
                                  </div> 
                                  <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                      <i class="ri-phone-line"></i>
                                    </div>

                                    <span class="dropdown__title" href="/pages/contact">Contact Us</span>

                                    <ul class="dropdown__list">
                                      <li>
                                        <a href="/pages/contact"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                          Email
                                          <p class="text-gray-500 font-normal">sogh@gmail.com</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="/pages/contact"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                          Phone
                                          <p class="text-gray-500 font-normal">+92</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="/pages/contact"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                          Fax
                                          <p class="text-gray-500 font-normal">+92</p>
                                        </a>
                                      </li>
                                    </ul>
                                </div> 
{{--     
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-heart-3-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Popular courses</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Development with Flutter</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Web development with React</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Backend development expert</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-book-mark-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Careers</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Web development</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Applications development</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">UI/UX design</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Informatic security</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i class="ri-file-paper-2-line"></i>
                                        </div>
    
                                        <span class="dropdown__title">Certifications</span>
    
                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="#" class="dropdown__link">Course certificates</a>
                                            </li>
                                            <li>
                                                <a href="#" class="dropdown__link">Free certifications</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </li>

                        <!--=============== DROPDOWN 2 ===============-->
                        <li class="dropdown__item">
                            <div class="nav__link dropdown__button  hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600"" >
                                SERVICES & SPECIALITIES <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                            </div>

                         
                            <div class="dropdown__container">
                              <div class="dropdown__content">
                                  <div class="dropdown__group">
                                      <div class="dropdown__icon">
                                        <i class="ri-hospital-line"></i>
                                      </div>
  
                                      <span class="dropdown__title">We Provide Orthopaedic Services.</span>
  
                                      {{-- <ul class="dropdown__list">
                                          <li>
                                              <a href="#" class="dropdown__link">HTML for beginners</a>
                                          </li>
                                          
                                          <li>
                                              <a href="#" class="dropdown__link">Advanced CSS</a>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown__link">JavaScript OOP</a>
                                          </li>
                                      </ul> --}}
                                      <ul class="mt-3 text-[15px] dropdown__list">
                                        <li>
                                          <a href="#"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                            Outpatient Department
                                            <p class="text-gray-500 font-normal">Shahab Orthopaedic</p>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                            Cardiology (Adult)
                                            <p class="text-gray-500 font-normal">The Founder</p>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                            Paeds Cardiology
                                            <p class="text-gray-500 font-normal">Our Vision And Goal</p>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                            Cardio Surgery (Adult)
                                            <p class="text-gray-500 font-normal">Head Members</p>
                                          </a>
                                        </li>
                                       
                                        <li>
                                          <a href="#"
                                            class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                           Anesthesia
                                            <p class="text-gray-500 font-normal">State of the art</p>
                                          </a>
                                        </li>
                                      </ul>
                                  </div>

                                  <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                      <i class="ri-home-heart-fill"></i>
                                    </div>

                                    <span class="dropdown__title">SPECIALITIES</span>

                                    <ul class="dropdown__list">
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                         Clinical Departments
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                          Home Health Services
                                          <p class="text-gray-500 font-normal">Map</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                         Diagnostic Services
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                         Center of Excellence
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                    </ul>
                                </div> 
                                  <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                      <i class="ri-service-line"></i>
                                    </div>

                                    <span class="dropdown__title">SERVICES</span>

                                    <ul class="dropdown__list">
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                         Emergency Cardiac Services
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                          Laboratory
                                          <p class="text-gray-500 font-normal">Map</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                         Radiology
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                         Executive Health Clinic
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                    </ul>
                                </div> 
{{--     
                                  <div class="dropdown__group">
                                      <div class="dropdown__icon">
                                          <i class="ri-heart-3-line"></i>
                                      </div>
  
                                      <span class="dropdown__title">Popular courses</span>
  
                                      <ul class="dropdown__list">
                                          <li>
                                              <a href="#" class="dropdown__link">Development with Flutter</a>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown__link">Web development with React</a>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown__link">Backend development expert</a>
                                          </li>
                                      </ul>
                                  </div>
  
                                  <div class="dropdown__group">
                                      <div class="dropdown__icon">
                                          <i class="ri-book-mark-line"></i>
                                      </div>
  
                                      <span class="dropdown__title">Careers</span>
  
                                      <ul class="dropdown__list">
                                          <li>
                                              <a href="#" class="dropdown__link">Web development</a>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown__link">Applications development</a>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown__link">UI/UX design</a>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown__link">Informatic security</a>
                                          </li>
                                      </ul>
                                  </div>
  
                                  <div class="dropdown__group">
                                      <div class="dropdown__icon">
                                          <i class="ri-file-paper-2-line"></i>
                                      </div>
  
                                      <span class="dropdown__title">Certifications</span>
  
                                      <ul class="dropdown__list">
                                          <li>
                                              <a href="#" class="dropdown__link">Course certificates</a>
                                          </li>
                                          <li>
                                              <a href="#" class="dropdown__link">Free certifications</a>
                                          </li>
                                      </ul>
                                  </div> --}}
                              </div>
                          </div>
                      </li>
                      
                      <li class="dropdown__item  hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600"">                        
                        <div class="nav__link dropdown__button  hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600"">
                            MANAGEMENT <i class="ri-arrow-down-s-line dropdown__arrow "></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i class="ri-community-line"></i>
                                    </div>

                                    <span class="dropdown__title">MANAGEMENT</span>

                                    <ul class="dropdown__list">
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                        Human Resources
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>

                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                       Finance
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                        Information And Technology (IoT)
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                        
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                          Material Management
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#"
                                          class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                          Nursing
                                          <p class="text-gray-500 font-normal">State of the art</p>
                                        </a>
                                      </li>
                                    </ul>
                                </div>
                                <div class="dropdown__group">
                                  <div class="dropdown__icon">
                                    <i class="ri-file-download-line"></i>
                                  </div>

                                  <span class="dropdown__title">Downloads & Carrers</span>

                                  <ul class="dropdown__list">
                                    <li>
                                      <a href="/pages/peshawar"
                                        class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                        About Peshawar
                                        <p class="text-gray-500 font-normal">State of the art</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="/pages/location"
                                        class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                        Location
                                        <p class="text-gray-500 font-normal">Map</p>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="/pages/director"
                                        class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                       Directors Message
                                        <p class="text-gray-500 font-normal">Directors Message</p>
                                      </a>
                                    </li>
                                  </ul>
                              </div> 
                              <div class="dropdown__group">
                                <div class="dropdown__icon">
                                  <i class="ri-building-line"></i>
                                </div>

                                <span class="dropdown__title">Departments</span>

                                <ul class="dropdown__list">
                                  <li>
                                    <a href="/pages/peshawar"
                                      class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                      About Peshawar
                                      <p class="text-gray-500 font-normal">State of the art</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="/pages/location"
                                      class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                      Location
                                      <p class="text-gray-500 font-normal">Map</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="/pages/director"
                                      class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                     Directors Message
                                      <p class="text-gray-500 font-normal">Directors Message</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#"
                                      class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                     Directors Message
                                      <p class="text-gray-500 font-normal">Directors Message</p>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#"
                                      class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                     Directors Message
                                      <p class="text-gray-500 font-normal">Directors Message</p>
                                    </a>
                                  </li>
                                </ul>
                            </div> 
                            <div class="dropdown__group">
                              <div class="dropdown__icon">
                                <i class="ri-building-line"></i>
                              </div>

                              <span class="dropdown__title">  </span>

                              <ul class="dropdown__list">
                                <li>
                                  <a href="#"
                                    class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                    About Peshawar
                                    <p class="text-gray-500 font-normal">State of the art</p>
                                  </a>
                                </li>
                                <li>
                                  <a href="#"
                                    class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                    Location
                                    <p class="text-gray-500 font-normal">Map</p>
                                  </a>
                                </li>
                                <li>
                                  <a href="#"
                                    class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                   Directors Message
                                    <p class="text-gray-500 font-normal">Directors Message</p>
                                  </a>
                                </li>
                                <li>
                                  <a href="#"
                                    class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                   Directors Message
                                    <p class="text-gray-500 font-normal">Directors Message</p>
                                  </a>
                                </li>
                                <li>
                                  <a href="#"
                                    class="block p-2 -mx-2 rounded-lg hover:bg-gradient-to-br hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">
                                   Directors Message
                                    <p class="text-gray-500 font-normal">Directors Message</p>
                                  </a>
                                </li>
                              </ul>
                          </div> 
                            </div>
                        </div>
                    </li>

                        <li>
                            <a href="#" class="nav__link  hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">ONLINE LAB REPORTS</a>
                        </li>
                      <li>
                        <a href="#" class="nav__link  hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">REQUEST AN APPOINTMENT</a>
                      </li>
                      <li>
                        <a href="#" class="nav__link  hover:from-blue-50 hover:to-pink-50 hover:via-blue-50 transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-blue-600">NEWS & EVENTS</a>
                      </li>


                        <!--=============== DROPDOWN 3 ===============-->
                       
                    </ul>
                </div>
            </nav>
          </nav>
            
        </header>
        
        <!--=============== MAIN JS ===============-->
        <script>
        /*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       // Add show-menu class to nav menu
       nav.classList.toggle('show-menu')
       // Add show-icon to show and hide menu icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown__item')

// 1. Select each dropdown item
dropdownItems.forEach((item) =>{
    const dropdownButton = item.querySelector('.dropdown__button') 

    // 2. Select each button click
    dropdownButton.addEventListener('click', () =>{
        // 7. Select the current show-dropdown class
        const showDropdown = document.querySelector('.show-dropdown')
        
        // 5. Call the toggleItem function
        toggleItem(item)

        // 8. Remove the show-dropdown class from other items
        if(showDropdown && showDropdown!== item){
            toggleItem(showDropdown)
        }
    })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) =>{
    // 3.1. Select each dropdown content
    const dropdownContainer = item.querySelector('.dropdown__container')

    // 6. If the same item contains the show-dropdown class, remove
    if(item.classList.contains('show-dropdown')){
        dropdownContainer.removeAttribute('style')
        item.classList.remove('show-dropdown')
    } else{
        // 4. Add the maximum height to the dropdown content and add the show-dropdown class
        dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
        item.classList.add('show-dropdown')
    }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 980px)'),
      dropdownContainer = document.querySelectorAll('.dropdown__container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () =>{
    // Validate if the media query reaches 1118px
    if(mediaQuery.matches){
        // Remove the dropdown container height style
        dropdownContainer.forEach((e) =>{
            e.removeAttribute('style')
        })

        // Remove the show-dropdown class from dropdown item
        dropdownItems.forEach((e) =>{
            e.classList.remove('show-dropdown')
        })
    }
}

addEventListener('resize', removeStyle)</script>

    </body>
</html>