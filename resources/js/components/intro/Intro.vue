<template>
    <aside class="smsret">
        <h1>Break the </h1><h1 class="reverse">pounding stress </h1>
        <span>with Ade-bisi Poundo yam flour</span>
        <ul>
            <li 
            v-for="list in lists" 
            :key="list">{{list}}</li>
        </ul>
        <span id="phone">BONUS &#95; it get ready in 5 minutes</span>
    </aside>
</template>
<script>
export default {
    data(){
        return{
            lists:[
            'product with high quality',
            'cheap &amp; Affordable',
            'Nafdac Certified'
            ]
        }
    }
}
</script>

<style lang="scss">
aside.smsret{
    width: 30rem;
    span{
        display:block;
        margin: 1rem 0;
        font-size:1.3rem;
        width: 70%;
    }
}
 h1{
     font-size: 3.3rem;
 }
 h1.reverse{
     margin-top: -0.6em;
 }
 @media only screen and (max-width: 600px) {
     aside.smsret{
         width: 90vw;
         margin: 1rem auto;
         padding: 1rem;
         text-align: left;
        span{
        width: 90%;
        }
     }
      h1{
     font-size: 2.3rem;
    }
    h1.reverse{
        margin-top: -0.3em;
    }
 }
</style>