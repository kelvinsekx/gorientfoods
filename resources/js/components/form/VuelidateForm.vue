<template>
   <div id="app" class="container py-4">    
     <div class="row">      
       <div class="col-12">        
         <form @submit.prevent="onSubmit">          
           <BaseInput 
           label="Full Name"
           v-model="$v.form.firstName.$model"
           :validator="$v.form.firstName"
           /> 

          <BaseInput 
            label="Email"
            type="email"
            v-model="$v.form.email.$model"
            :validator="$v.form.email"
          />
            
          <BaseInput     
            label="Telephone"    
            type="text"     
            v-model="$v.form.telephone.$model"    
            v-mask="'(###)###-####'"
            :validator="$v.form.telephone"  
          /> 

          <div class="form-group">            
            <button 
            :disabled="$v.$error"
            @click.prevent="onSubmit"
            type="submit" 
            class="btn btn-primary">Submit</button>          
          </div>        
        </form>      
      </div>    
    </div>  
  </div> 
</template>
<script>
import axios from 'axios';
import BaseInput from './BaseInput'
import { url, alpha, email, required } from 'vuelidate/lib/validators'; 



//vue mask
import VueMask from 'v-mask'
Vue.use(VueMask)

//Vuelidate
import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)



export default {
  name:"app",
  validations:{
     form:{
       firstName: { alpha, required },
       lastName: { alpha },
       email: { email, required },
       telephone: {      
         validPhone: phone => phone.match(/((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}/) !== null    
        }, 
       website:{
         url//validate that it is a valid url
       },
       love: { required }
     }
  },
  data(){
    return{
      form:{
        firstName: '',
        lastName: '',
        email:'',
        telephone:'',
        website: ""
      },
      loveOptions:[
        {label: 'Fun to use', value:'fun'},
        {label: 'Friendly learing curve', value:'curve'},
        {label: 'Amazing documentation', value:'docs'},
        {label: 'Fantasy community', value:'community'}
      ]
    }
  },
  components:{
    BaseInput,
    BaseSelect
  },
  methods:{
    onSubmit(){
      this.$v.$touch();
      if (!this.$v.$invalid) return;
      axios.post('http://localhost:3000/dolphins', {params: this.form}).then(
        response=>{
          console.log('Form has been posted', response)
        }
      ).catch(err=>{
        console.log("An error occured", err)
      });
    }
  }
}
</script>