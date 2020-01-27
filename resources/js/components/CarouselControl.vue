<template>
 <i 
    :class="classes" 	
    @click="clicked"></i>
</template>

<script>
export default{
    props:['dir'],
    computed:{
        classes(){
            return 	'carousel-control fas fa-angle-'+this.dir;	
        }
    },
    methods:	{						
        clicked()	
        {								
            this.$emit('change-image',	this.dir === 'prev'	?-1	:1);
        }				
    }	
}
</script>
<style>
.carousel-control	{		
  padding:	1rem;		
  color:	#811313;		
  opacity:	0.85 
}  
.fa-angle-right:hover, .fa-angle-left:hover {
  background-color: rgba(0,0,0,0.8);
  border-radius: 0 3px 3px 0
}

@media	(min-width:	744px)	{		
  .carousel-control	{						
    font-size:	3rem;		
  } 
}
</style>