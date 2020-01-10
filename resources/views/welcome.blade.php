<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       <header>
           <div>
               <div>
                    <div>
                        OlaOla
                    </div>
                    <div>
                        OlaOla
                    </div>
               </div>
           </div>
           <nav>
        <div  class="mainNav">
            <div id="icon" class="non" >
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navnav d-flex justify-content-end"> 
                <ul>
                    <a href=""><li>About Rixona</li></a>
                    <a href=""><li>Product</li></a>
                    <a href=""><li>Quality</li></a>
                </ul>
                <a href="" class="pl-2 brand">OLAOLA</a>
            </div>
        </div>
        <div>
        <div class="magic">
            <p>About our company:</p>
            <p>What we do</p>
            <hr>
            <br>
            <p>Know more about us here</p>
            <p>Life is good with poundo yam</p>
        </div>
        </div>
    </nav>
       </header>
       <div id="slider">
           <!-- <img src=images/fire.png alt="logo" srcset=""> -->
       </div>

       <main id="siteContent ">
         <div class="main_wrapper">
             <section class="mt-3 WEriut3">
                 <div class="stmg">
                    <header class="main_area_title">
                        <h3 class="type">Foodservice</h3>                     
                    </header>
                    <p>
                        Rixona offers a wide variety of potato flakes and potato granules that are tasty, healthy 
                        and quick and easy to prepare.
                    </p>
                    <a class="read-more" href="http://rixona.aviko.accept.axendo.net/en/products/foodservice" 
                    target="_self">Read more
                    </a>
                 </div>
             </section>

             <section class="mt-3 WEriut3">
             <div class="stmg">
                    <header class="main_area_title">
                        <h3 class="type">Coldservice</h3>                     
                    </header>
                    <p>
                        Rixona offers a wide variety of potato flakes and potato granules that are tasty, healthy 
                        and quick and easy to prepare.
                    </p>
                    <a class="read-more" href="http://rixona.aviko.accept.axendo.net/en/products/foodservice" 
                    target="_self">Read more
                    </a>
                 </div>
             </section>

             <section class="mt-3 WEriut3">
             <div class="stmg">
                    <header class="main_area_title">
                        <h3 class="type">Eatservice</h3>                     
                    </header>
                    <p>
                        Rixona offers a wide variety of potato flakes and potato granules that are tasty, healthy 
                        and quick and easy to prepare.
                    </p>
                    <a class="read-more" href="http://rixona.aviko.accept.axendo.net/en/products/foodservice" 
                    target="_self">Read more
                    </a>
                 </div>
             </section>
         </div>
       </main>

       <footer class="mt-4">
           <section>
            <div class="footer_flex">
               <div>
                    <h5>Follow us</h5>
                    <ul class="nav inline-nav icon-list">
                        <li>
                            <a href="https://www.linkedin.com/company/aviko/" class="linkedin" target="_blank">
                            linkedin
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCtEHjoTVbS9D92WcP1WhTRw" class="youtube" target="_blank">
                            youtube
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="">
                    <ul class="nav footer-bottom-links">
                        <li class="footer-bottom-link"><a href="/privacy" target="_self">Privacy</a></li>
                        <li class="footer-bottom-link"><a href="/disclaimer" target="_self">Disclaimer</a></li>
                        <li class="footer-bottom-link"><a href="/special-pages/sitemap" target="_self">Sitemap</a></li>
                    </ul>
                </div>
            </div>

           <div class="footer_flex">
                <div>
                <h5>Rixona</h5>
                <p><a href="http://www.rixona.com/about-rixona" title="About Rixona">About
                Rixona</a><br />
                    <a href="http://www.rixona.com/potato-procurement" title="Potato purchase">Potato
                purchase</a><br />
                    <a href="http://www.rixona.com/products" title="Products">Products &amp;
                Markets</a><br />
                    <a href="http://www.rixona.com/quality" title="Quality">Quality &amp;
                Certificates</a><br />
                    <a href="http://www.rixona.com/csr" title="CSR">CSR</a><br />
                    <a href="http://www.rixona.com/contact" title="Contact">Contact</a></p>
                </div>
            </div>

            <div class="footer_flex">
                <div>
                <h5>Directly to: </h5>  
                    <p>
                        <a href="http://www.rixona.com/products/foodservice"
                        title="Foodservice"><span>Foodservice</span></a><br />
                        <a href="http://www.rixona.com/products/industry"
                        title="B2B"><span>Industry</span></a><br />
                        <a href="http://www.rixona.com/products/retail"
                        title="Retail"><span>Retail</span></a><br />
                        <span>How it's made</span><br />
                        <span>Harvest information</span>
                        <span><br /></span>
                    </p>
                </div>
            </div>

            <div class="footer_flex">
                <div>
                    <h5>Websites:</h5> 
                    <p>
                        <a href="http://www.rixona.com/working-at" title="Working at">Working at Aviko
                        Rixona</a><br />
                        <a href="http://www.cosun.com/home.aspx" target="_blank">Royal
                        Cosun</a>
                    </p>   
                </div>
            </div>    
           </section>
       </footer>
       <script src="{{asset('js/app.js')}}"></script>
       <script src="{{asset('js/navstyle.js')}}"></script>
    </body>
</html>
