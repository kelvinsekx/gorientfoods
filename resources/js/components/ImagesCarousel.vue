<template>
<div>
    <div class="image-carousel">
        
        <img :src="image" width="100em" height="400em"/>
        
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
                    '/images/product2.jpg',
                    '/images/product3.jpg',
                    '/images/adv.jpg'
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
               },4000)
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

<style lang="scss">
    
.image-carousel	{		
  height:	100%;		
  position:	relative;		
  display:	flex;		
  align-items:	center;	
  justify-content:	center; 
  transition: background-color 0.6s ease;
  margin-top: -1em;
} 
.image-carousel	.controls	{		
  position:	absolute;		
  width:	100%;		
  display:	flex;		
  justify-content:	space-between; 
}
.image-carousel	img	{				
    width:	80%;		
}
@media only screen and (max-width: 600px) {
    
.image-carousel	{
    height: 19.5rem;	
    img	{				
         width: 98%;
        height: 100%;
    }
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
  background-color: #717171;
  transition: background-color 0.6s ease;
  align-items: center
}
.dotes{
text-align: center;
}

.active, .dot:hover {
  background-color: #bbb;
}

</style>