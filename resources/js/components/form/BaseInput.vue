<template>
    <div class="form-group">            
        <label>{{label}}</label>            
        <input 
            :type="type" 
            class="form-control"
            :value="value"
            @input="$emit('input', $event.target.value)"
            :class="{  
            'is-valid': validator && !validator.$error && validator.$dirty,  
            'is-invalid': validator && validator.$error 
            }"         
        /> 
    </div>
</template>
<script>
export default {
    props:{
        validator:{
          type:Object,
          required: false,
          validator($v){
              return $v.hasOwnProperty('$model');
          }
        },
        value:{
            type: String,
            required: true
        },
        label:{
            type: String,
            required: true
        },
        type:{
            type: String,
            default: 'text',
            validator(value){
                return ['text', 'email', 'password'].includes(value);
            }
        },
        mask:{
            type: String,
            required: false
        }
    }
}
</script>