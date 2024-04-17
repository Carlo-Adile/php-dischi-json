const { createApp } = Vue

createApp({
  data(){
    return {
      albums: []
    }
  },
  methods: {

  },
  mounted(){
    // get request to api.php
    axios.get('api.php')
    .then(response => {
      // assign response to array
      this.albums = response.data;
    })
    .catch(error => {
      console.error('Errore nella richiesta API:', error);
    });
  }
}).mount('#app')