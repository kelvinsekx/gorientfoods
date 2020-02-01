@extends('app')
@section('content')

 <div id="slider">
     <images-carousel ></images-carousel>
     <div v-if="loading">Loading...</div>
 </div>
       <main id="siteContent">
           <div class="company_details">
               <article>
                   <h2>vision</h2>
                   <div>
                       <p>
                           The vision of our company is to produce a highly rated product 
                           among other brands of poundo yam. Best quality at affordable price.
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
            </div>

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
                        Ade-Bisi Poundo Yam is also known as iyan, a product made from selected yam tubers for our clientele with a gourmet quality instant iyan for the whole family.Our iyan can be ready to serve within 5 minutes.
                    </p>
                    <p>
                        As a family owned company, we know how busy our lives are today. With that in mind, we wanted to make a product that would accomodate the modern family, and still provide the dame quality delicious iyan many of us grew up eating.
                    </p>
                   
                 </div>
             </section>

             <section class="mt-5 WEriut3_1">
              <div class="product_img"><picture>
                <source media="(max-width: 799px)" srcset="{{asset('/images/smallproduct1.JPG')}}" >
                <source media="(min-width: 800px)" srcset="{{asset('/images/product2.jpg')}}">
                <img src="{{asset('/images/product2.jpg')}}" alt="Adebisi Poundo yam flour">
             </picture></div>
             <div class="stmg">
                        <h3 class="type">Our plantain flour</h3>
                        <p>
                        Ade-Bisi Plaintain flour is one of the major products of G-Orient Foods. It is a product made 100% from unriped plaintain. And It is highly consumed now due to the peculiar health benefit irrespective of the age group.
                        </p>
                    <p>
                        Plaintain flour is a staple food in the tropical region of the world. It is rich in iron, Ascorbic acid(Vitamin C), carotene and other vitamins. Plaintain flour is lower in calories than the regular all-purpose flour.
                    </p>
                    <p>
                        Plaintain flour is a hielthier substitute for wheat flour and the all-purpose flour because it does not contain gluten which is the main protien found in wheat and barley.
                    </p>
                    
                 </div>
             </section>
         </div>
         @include('BODY.contact')
       </main>

@endsection('content')
