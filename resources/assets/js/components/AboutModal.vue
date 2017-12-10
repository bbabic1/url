<template>
    <div class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Projekat pripremili</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <ul>
      <li>Adi Kadić</li>
      <li>Amer Biber</li>
      <li>Faruk Varnica</li>
      <li>Samir Mirvić</li>
    </ul>
    </section>
    <footer class="modal-card-foot">
      <button class="button">Close</button>
    </footer>
  </div>
</div>

</template>

<script>
export default {
  mounted() {
    console.log("Component ready.");
  },
  data() {
    return {
      showAboutModal: false
    };
  },
  methods: {
    handleAboutClick: function() {
      alert("hehehe");
    }
  }
};
</script>
