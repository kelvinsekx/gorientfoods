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
                       <img src="{{asset('/images/brand.jpg')}}" alt="company brand" width="192" height="90">
                    </div>

                    <div class="ERV445FFfe">
                        <address>
                            22, ADEOLA STREET, BOLA EXTENSION,
                            <small>OJOO, IBADAN, OYO STATE.</small>
                        </address>
                    </div>

                    <div class="ERV445FFfe">
                        <span id="phone contact">07038281375,</span>
                        <span id="phone contact">07038281375</span>
                        <label for="">Customer care</label>
                    </div>
               </div>
            </section>
            @include('PARTS.navbarsample')
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
             <section class="mt-5 WEriut3_2">
             <div>
             <picture>
                <source media="(max-width: 799px)" srcset="{{asset('/images/smallproduct2.jpg')}}" >
                <source media="(min-width: 800px)" srcset="{{asset('/images/product1.jpg')}}">
                <img src="{{asset('/images/product1.jpg')}}" alt="Adebisi Poundo yam flour">
             </picture>
            </div>
                 <div class="stmg">
                        <h3 class="type">Our poundo yam</h3>                     
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy .
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos provident voluptate quos ullam? Esse tempore excepturi corporis recusandae illum in, aperiam suscipit. Exercitationem dignissimos aliquid libero magnam molestias itaque?
                        and quick and easy to prepare.
                    </p>
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy .
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos provident voluptate quos ullam? Esse tempore excepturi corporis recusandae illum in, aperiam suscipit. Exercitationem dignissimos aliquid libero magnam molestias itaque?
                        and quick and easy to prepare.
                    </p>
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy .
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos provident voluptate quos ullam? Esse tempore excepturi corporis recusandae illum in, aperiam suscipit. Exercitationem dignissimos aliquid libero magnam molestias itaque?
                        and quick and easy to prepare.
                    </p>
                    <a class="read-more" href="http://" 
                    target="_self">Read more
                    </a>
                 </div>
             </section>

             <section class="mt-5 WEriut3_1">
              <div class="product_img"><picture>
                <source media="(max-width: 799px)" srcset="{{asset('/images/smallproduct1.jpg')}}" width="400" height="200">
                <source media="(min-width: 800px)" srcset="{{asset('/images/product2.jpg')}}" width="600" height="400">
                <img src="{{asset('/images/product2.jpg')}}" alt="Adebisi Poundo yam flour">
             </picture></div>
             <div class="stmg">
                        <h3 class="type">Our plantain flour</h3>
                        <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy .
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos provident voluptate quos ullam? Esse tempore excepturi corporis recusandae illum in, aperiam suscipit. Exercitationem dignissimos aliquid libero magnam molestias itaque?
                        and quick and easy to prepare.
                    </p>
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy .
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos provident voluptate quos ullam? Esse tempore excepturi corporis recusandae illum in, aperiam suscipit. Exercitationem dignissimos aliquid libero magnam molestias itaque?
                        and quick and easy to prepare.
                    </p>
                    <p>
                        Gorient offers a wide variety of potato flakes and potato granules that are tasty, healthy .
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos provident voluptate quos ullam? Esse tempore excepturi corporis recusandae illum in, aperiam suscipit. Exercitationem dignissimos aliquid libero magnam molestias itaque?
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