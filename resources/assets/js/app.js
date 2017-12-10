import "./bootstrap";

Vue.component("aboutmodal", require("./components/AboutModal.vue"));

const app = new Vue({
  el: "#app",
  components: {
    aboutmodal: require("./components/AboutModal.vue")
  },
  methods: {
    handleAboutClick: function() {
      alert("heehe");
    }
  }
});
