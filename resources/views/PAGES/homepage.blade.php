@extends('app')
@section('content')
<!-- <div class="slideshow-container">
            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="{{asset('/images/product1.jpg')}}" alt="Adebisi Poundo yam flour">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="{{asset('/images/product1.jpg')}}" alt="Adebisi Poundo yam flour">
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="{{asset('/images/product1.jpg')}}" alt="Adebisi Poundo yam flour">
            <div class="text">Caption Three</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->
 <div id="slider">
     @{{hey}}
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
                <source media="(max-width: 799px)" srcset="{{asset('/images/smallproduct2.JPG')}}" >
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
                <source media="(max-width: 799px)" srcset="{{asset('/images/smallproduct1.JPG')}}" width="400" height="200">
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

@endsection('content')
