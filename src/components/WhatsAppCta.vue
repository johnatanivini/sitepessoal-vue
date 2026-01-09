<template>
  <a 
    :href="generatedLink" 
    target="_blank" 
    rel="noopener noreferrer"
    class="whatsapp-btn"
    :class="{ 'is-floating': floating }"
    @click="$emit('click')"
  >
    <svg 
      width="24" 
      height="24" 
      viewBox="0 0 24 24" 
      fill="none" 
      xmlns="http://www.w3.org/2000/svg"
      class="icon"
    >
      <path d="M17.472 14.382C17.112 14.202 15.344 13.332 15.013 13.218C14.682 13.104 14.441 13.044 14.2 13.404C13.96 13.764 13.269 14.574 13.059 14.814C12.848 15.054 12.638 15.084 12.278 14.904C11.918 14.724 10.757 14.344 9.38204 13.118C8.28104 12.137 7.53804 10.925 7.32804 10.565C7.11804 10.205 7.30604 10.01 7.48604 9.83C7.64704 9.669 7.84404 9.412 8.02404 9.202C8.20404 8.992 8.26404 8.842 8.38404 8.602C8.50404 8.362 8.44404 8.152 8.35404 7.972C8.26404 7.792 7.54404 6.022 7.24404 5.302C6.95204 4.603 6.65704 4.698 6.43204 4.698C6.22204 4.698 5.98204 4.698 5.74204 4.698C5.50204 4.698 5.11204 4.788 4.78204 5.148C4.45204 5.508 3.52204 6.378 3.52204 8.148C3.52204 9.918 4.81204 11.628 5.02204 11.898C5.23204 12.168 7.60904 15.823 11.249 17.394C13.923 18.548 14.467 18.318 14.947 18.273C15.86 18.188 16.92 17.623 17.22 16.783C17.52 15.943 17.52 15.223 17.43 15.073C17.34 14.923 17.1 14.833 16.74 14.653H17.472V14.382ZM10.522 20.538C8.59904 20.538 6.78504 20.021 5.20204 19.083L5.09004 19.017L3.08904 19.542L3.62304 17.589L3.55104 17.475C2.55104 15.887 2.02304 14.041 2.02304 12.138C2.02304 7.452 5.83504 3.638 10.526 3.638C12.798 3.638 14.933 4.523 16.538 6.13C18.143 7.737 19.026 9.873 19.026 12.144C19.026 16.83 15.213 20.643 10.521 20.643L10.522 20.538Z" fill="white"/>
    </svg>
    
    <span v-if="!iconOnly">{{ label }}</span>
  </a>
</template>

<script>
export default {
  name: 'WhatsAppCta',
  props: {
    label: {
      type: String,
      default: 'Fale comigo no WhatsApp'
    },
    message: {
      type: String,
      default: 'Olá Johnatan! Vi seu portfólio e gostaria de conversar sobre um projeto.'
    },
    floating: {
      type: Boolean,
      default: false
    },
    iconOnly: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      phoneNumber: '5585991179809'
    };
  },
  computed: {
    generatedLink() {
      const encodedMessage = encodeURIComponent(this.message);
      return `https://wa.me/${this.phoneNumber}?text=${encodedMessage}`;
    }
  }
};
</script>