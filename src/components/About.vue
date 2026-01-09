<template>
  <section id="sobre-mim">
    <div id="about">
      <div class="row">
        <div class="three columns">
          <img
            class="profile-pic"
            src="https://avatars0.githubusercontent.com/u/2191326?v=3&amp;s=460"
            alt="Johnatan Í - Desenvolvimento de Software"
          />
        </div>
        <div class="nine columns main-col">
          <p>Sou <b>Johnatan Ívini</b>, desenvolvedor de software com uma trajetória sólida iniciada em 2009. Graduado em Gestão de Tecnologia da Informação pela FATENE e Pós-Graduado em Análise, Projeto e Gerência de Sistemas pela Estácio, combino conhecimento técnico com visão estratégica de negócios.</p>

          <p>Minha carreira é marcada pela versatilidade. Além de atuar em projetos privados de grande escala, dedico-me ao desenvolvimento de soluções web independentes, gerenciando portais como o Segunda Opinião e o Ler.digital. Minha história profissional é pautada pela resiliência: iniciei minha jornada na indústria, no setor de expedição da Jangadeiro Têxtil, experiência que forjou minha ética de trabalho antes de migrar definitivamente para a tecnologia.</p>

          <p>Movido por desafios, busco constantemente projetos que exijam inovação e crescimento mútuo. Fora dos códigos, mantenho a disciplina e o equilíbrio através do esporte — seja no Cross Training, na musculação ou nas artes marciais (Capoeira e Jiu-Jitsu) — e valorizo o tempo de qualidade em família</p>
           
        </div>
        <div class="nine columns download text-right">
          <p>
            <a
              href="https://docs.google.com/document/d/1lt85CQ1tD_bhAi-luZX-09gaRrQf22Y94kIqIFA9xL8/edit?usp=sharing"
              class="button"
              target="_blank"
            >
              <i class="fa fa-download"></i>Baixar CV
            </a>
          </p>
        </div>
        <!-- end row -->
      </div>
      <!-- end .main-col -->
    </div>
    <section id="whatsapp">
      <div class="circle-section cor-marron"></div>
      <div class="row">
        <div class="centered columns align-center">
          <h1>Tem um desafio para mim? </h1>
          <h2>Vamos conversar sobre seu projeto e transformar sua idéia em código!</h2>
          <WhatsAppCta label="Solicitar Orçamento" />
        </div>
      </div>
    </section>
  </section>
</template>

<script>
  import WhatsAppCta from './WhatsAppCta.vue';
  export default {
    name: 'About',
    components: {
      WhatsAppCta
    }
  };
</script>