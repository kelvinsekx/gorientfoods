<template>
    <aside class="smsret">
        <h1>Break the </h1><h1 class="reverse">pounding stress </h1>
        <span>with Ade-bisi Poundo yam flour</span>
        <ul>
            <li 
            v-for="list in lists" 
            :key="list">{{list}}</li>
        </ul>
        <span class="bonus">BONUS &#95; it get ready in 5 minutes</span>
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
    span.bonus{
        border: 0.04em solid rgb(203, 236, 203);
    background-color:rgb(46, 233, 46) ;
    color: #fff;
    border-radius: 0.3em;
    padding: 0.2em 0.5em;
    text-decoration: none;
    font-size: 1.5em;
    display: block;
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
         width: 95vw;
         margin: 1rem auto;
         padding: 1rem;
         text-align: left;
        span{
        width: 100%;
        }
     }
      h1{
     font-size: 2.4rem;
    }
    h1.reverse{
        margin-top: -0.3em;
    }
 }
</style>