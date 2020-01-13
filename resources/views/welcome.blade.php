<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GorientFoods/welcome...</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       <header>
           <section id="RV445FFfe">
               <div id="RVsdgt445FFfe">
                    <div class="ERV445FFfe">
                        <strong>
                            G-ORIENT FOODS (NIG) LTD
                        </strong>
                    </div>

                    <div class="ERV445FFfe">
                        <address>
                            22, ADEOLA STREET, BOLA EXTENSION,
                            <small>OJOO, IBADAN, OYO STATE.</small>
                        </address>
                    </div>

                    <div class="ERV445FFfe">
                        <input type="number" name="phone contact" value="08066417337" readonly>
                        <input type="number" name="phone contact" value="07038281375" readonly>
                        <label for="">Customer care</label>
                    </div>
               </div>
            </section>
           <nav>
        <div  class="mainNav">
            <div id="icon" class="non" >
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navnav d-flex justify-content-end"> 
                <ul>
                    <a href=""><li>About Us</li></a>
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
           <section class="company_details">
               <article>
                   <h2>vision</h2>
                   <div>
                       <p>
                           The vision of our company is to produce a highly rated product among other brands of poundo yam. Best quality at affordable price is our watchword.
                       </p>
                   </div>
               </article>
               <article>
                   <h2>mission</h2>
                   <div>
                       <p>The mission of every organization is to make profit and our company is not left out. At the same time, it will create avenue for others (distributor and other middlemen) to make profit, create employment opportunity for the teeming populace, and utilize our yam tuber, thereby patronizing our local farmers and increasing their turnover to produce a product of high quality at a lower price that everyone will be able to afford and be willing to buy.</p>
                   </div>
               </article>
               <article>
                   <h2>objective</h2>
                   <div>
                       <p>The primary objective is to put smile on people's face especially our mothers who go through the rigor of pounding the yam whenever they think of eating pounded yam. We want to greatly bridge the stress they will pass through in preparing pounded yam - a meal that cuts across the country as a special dish, which make them avoid this desired meal.</p>
                   </div>
               </article>
           </section>
         <div class="main_wrapper">
             <section class="mt-3 WEriut3">
                 <div class="stmg">
                        <h3 class="type">Foodservice</h3>                     
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy 
                        and quick and easy to prepare.
                    </p>
                    <a class="read-more" href="http://" 
                    target="_self">Read more
                    </a>
                 </div>
             </section>

             <section class="mt-3 WEriut3">
             <div class="stmg">
                        <h3 class="type">Coldservice</h3>                     
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy 
                        and quick and easy to prepare.
                    </p>
                    <a class="read-more" href="http://" 
                    target="_self">Read more
                    </a>
                 </div>
             </section>

             <section class="mt-3 WEriut3">
             <div class="stmg">
                        <h3 class="type">Eatservice</h3>                     
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy 
                        and quick and easy to prepare.
                    </p>
                    <a class="read-more" href="http://" 
                    target="_self">Read more
                    </a>
                 </div>
             </section>
         </div>
       </main>

       @include('BODY.footer')
       <script src="{{asset('js/app.js')}}"></script>
       <script src="{{asset('js/navstyle.js')}}"></script>
    </body>
</html>
