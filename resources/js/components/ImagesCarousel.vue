<template>
<div>
    <div class="image-carousel mt-2">
        
        <img :src="image" width="200" height="350"/>
        
         <div class="controls">				
            <carousel-control 
            dir="left"
            @change-image="changeImage"
            ></carousel-control>								
            <carousel-control 
            dir="right"
            @change-image="changeImage"
            ></carousel-control>						
        </div>
       
    </div>
    <div class="dotes">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</div>
</template>

<script>
import CarouselControl from './CarouselControl.vue'
    export default{
        data(){
            return{
                images:[
                    '/images/product1.jpg',
                    '/images/product2.jpg'
                 ],
                index:0,
            }
        },
        computed:{
            image(){
                return this.images[this.index];
            }
        },
         methods:{
            changeImage(val)	{						
                let	newVal	=	this.index	+	parseInt(val);						
                if	(newVal	<	0)	{								
                    this.index	=	this.images.length	-1;						
                }	else	if	(newVal	===	this.images.length)	{	
                    	this.index	=	0;						
                }	else	{								
                    this.index	=	newVal;						
                }				
            },
            startSlide:function(){
                setInterval(()=>{
                    this.index = this.index+1
                    if	(this.index	===	this.images.length)	{	
                        this.index = 0
                    }
               },2500)
               }
        },
        mounted: function(){
            this.startSlide()
        },
    components:{
       CarouselControl 
    }
}

</script>
<style>
    
.image-carousel	{		
  height:	100%;		
  position:	relative;		
  display:	flex;		
  align-items:	center;	
  justify-content:	center; 
} 
.image-carousel	.controls	{		
  position:	absolute;		
  width:	100%;		
  display:	flex;		
  justify-content:	space-between; 
}
.image-carousel	img	{				
    width:	70%;		
}
@media only screen and (max-width: 600px) {
    .image-carousel	img	{				
    width:	80%;		
}
}
.image-carousel	.controls	{		
  position:	absolute;		
  width:	100%;		
  display:	flex;		
  justify-content:	space-between; 
} 
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  background-color: #bbb;
  border-radius: 50%;
  
  transition: background-color 0.6s ease;
  align-items: center
}
.dotes{
text-align: center;
justify-items: center;
}

.active, .dot:hover {
  background-color: #717171;
}

</style>