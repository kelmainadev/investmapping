<template>
<div>
<form>
  <div class="row">
    <div class="medium-6 columns">
      <label>Input Label
        <input type="text" placeholder=".medium-6.columns">
      </label>
    </div>
    <div class="medium-6 columns">
      <label>Input Label
        <input type="text" placeholder=".medium-6.columns">
      </label>
    </div>
  </div>
</form>
<test :msg="message"></test>
</div>
</template>

<script>
import TestComponent from './Example.vue';

export default {
    components: {
        test: TestComponent
    },
    data(){
        return {
            message: 'This is a new message'
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>