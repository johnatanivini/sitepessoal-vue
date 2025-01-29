<template>
  <section id="contact">
    <div id="contato">
      <div class="row section-head">
        <div class="two columns header-col">
          <h6>
            <span
              class="mfp-hide"
              v-show="false"
            >Entre em contato</span>
          </h6>
        </div>
        <div class="ten columns">
          <p class="lead">
            Use o formulário abaixo para entrar em contato, tirar dúvidas ou solicitar algum
            serviço. Terei a maior satisfação em respondê-lo.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="twelve columns">
          <!-- form -->
          <form action method="post" id="contactForm" name="contactForm">
            <fieldset>
              <div>
                <label for="contactName">
                  Nome
                  <span class="required">*</span>
                </label>
                <input
                  value
                  size="35"
                  v-model="dados.name"
                  id="contactName"
                  name="contactName"
                  required
                  style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
                />
              </div>
              <div>
                <label for="contactEmail">
                  Email
                  <span class="required">*</span>
                </label>
                <input
                  type="email"
                  value
                  v-model="dados.email"
                  size="35"
                  id="contactEmail"
                  name="contactEmail"
                  required
                />
              </div>
              <div>
                <label for="contactSubject">Assunto</label>
                <input
                  value
                  size="35"
                  id="contactSubject"
                  v-model="dados.subject"
                  name="contactSubject"
                  required
                />
              </div>
              <div>
                <label for="contactMessage">
                  Mensagem
                  <span class="required">*</span>
                </label>
                <textarea
                  cols="50"
                  rows="5"
                  id="contactMessage"
                  v-model="dados.message"
                  name="contactMessage"
                  required
                ></textarea>
              </div>
              <div>
                <label for="contactSubject">
                  Quanto é {{numero1}}+{{numero2}}?
                  <span class="required">*</span>
                </label>
                <input
                  value
                  size="35"
                  @blur="resultado"
                  v-model="dados.captcha"
                  id="contactCaptcha"
                  name="contactCaptcha"
                  required
                />
                <small v-show="showMessage" :class="showMessageCss" class="alert">{{errorCaptcha}}</small>
              </div>
              <div>
                <button
                  class="submit"
                  type="button"
                  @click="enviarContato"
                  v-show="showButton"
                >Submit</button>
                <span id="image-loader">
                  <img alt="loader" src="/images/loader.gif" />
                </span>
              </div>
            </fieldset>
          </form>
          <!-- Form End -->
          <!-- contact-warning -->
          <div id="message-warning"  :style="errorEmail=== false ? 'display:block':'display:none'">
            <i class="fa fa-exclamation-triangle"></i> Ops, alguma coisa aconteceu!
          </div>
          <!-- contact-success -->
          <div id="message-success" :style="errorEmail===true ? 'display:block':'display:none'">
            <i class="fa fa-check"></i> Sua mensagem foi enviada, obrigado!
            <br />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  data() {
    return {
      numero1: 0,
      numero2: 0,
      showButton: false,
      showMessage: false,
      errorCaptcha: "Nenhum erro!",
      showMessageCss: "",
      errorEmail:'-',
      dados: {},
     urlApi:process.env.VUE_APP_API_URL || ''
    };
  },
  computed: {
    resposta: function() {
      return this.numero1 + this.numero2;
    }
  },
  mounted() {
    this.alteraValor();
  },
  methods: {
    alteraValor: function() {
      this.numero1 = Math.floor(9 * Math.random()) + 1;
      this.numero2 = Math.floor(7 * Math.random()) + 1;
    },
    resultado: function(e) {

      if (e.target.value == "") {
        return;
      }

      if (this.resposta === parseInt(e.target.value)) {
        this.showButton = true
        this.errorCaptcha = "Correto!"
        this.showMessage = true
        this.showMessageCss = "alert-success"
      } else {
        this.showButton = false;
        this.errorCaptcha = "Valor incorreto tente outro valor!"
        this.showMessage = true;
        this.showMessageCss = "alert-info"
        this.alteraValor()
    
      }
    
    },
    enviarContato: function() {

[]
        const form = new FormData(document.getElementById('contactForm'));

        form.append('numero1',this.numero1)

        form.append('numero2',this.numero2)

      fetch(this.urlApi+"/api/enviar-email", {
        method: "POST",
        body: form,
        mode:"no-cors"
      })
        .then(response => {
            if(response.status != 200){
                 this.alteraValor()
                 this.dados.captcha = ''
                throw 'ocorreu um erro'
            }
            response.json()
         })
        .then(() => {
          this.errorEmail = true 
          this.dados = {}
          this.alteraValor()
          this.errorEmail = true
        })
        .catch(() => {
          this.errorEmail = false
           this.alteraValor()
           this.dados.captcha = ''
        });
    }
  }
};
</script>