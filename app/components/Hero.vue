<template>
  <section ref="heroTrackRef" class="hero-scroll-track">
    <div class="hero-sticky-container">
      <!-- Fundo de Desconstrução Renderizado via Keyframes em Canvas -->
      <div class="hero-video-wrapper">
        <canvas ref="canvasRef" class="hero-video-canvas"></canvas>
        <div class="hero-video-overlay"></div>
        <div class="hero-bottom-fade"></div>
      </div>

      <!-- Conteúdo Hero Interativo -->
      <div class="hero-content-inner">
        <div class="badge">
          <span class="status-pulse"></span>
          <span>Desenvolvedor Full Stack Sênior & Soluções Corporativas</span>
        </div>

        <h1>
          Engenharia de Software <span class="hero-highlight-text">de Alta Performance</span> & Sustentação de Legados.
        </h1>

        <p>
          Especialista no ecossistema <strong>PHP (Laravel) & Vue/Nuxt</strong>, migrações críticas sem downtime e arquitetura robusta para negócios exigentes.
        </p>

        <div class="hero-actions">
          <a :href="whatsappUrl" target="_blank" rel="noopener noreferrer" class="btn-cta btn-hero-primary">
            <span>Falar com Especialista</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
          <a href="#servicos" class="btn-cta-secondary">
            Ver Soluções
          </a>
        </div>

        <div class="hero-trust-bar">
          <div class="trust-item">
            <span class="trust-icon">⚡</span>
            <span>Zero Downtime</span>
          </div>
          <div class="trust-divider">•</div>
          <div class="trust-item">
            <span class="trust-icon">🛡️</span>
            <span>Código Limpo & Seguro</span>
          </div>
          <div class="trust-divider">•</div>
          <div class="trust-item">
            <span class="trust-icon">🚀</span>
            <span>Alta Escalabilidade</span>
          </div>
        </div>

        <!-- Indicador Interativo de Keyframes -->
        <div class="hero-scroll-cue" :class="{ 'cue-completed': scrollProgress >= 0.95 }">
          <span class="cue-label">{{ scrollProgress < 0.95 ? 'ROLE PARA DESCONSTRUIR A INTERNET' : 'EXPLORAR SERVIÇOS E SOLUÇÕES' }}</span>
          <div class="cue-progress-bar">
            <div class="cue-progress-fill" :style="{ transform: `scaleX(${scrollProgress})` }"></div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cue-arrow"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const whatsappUrl = 'https://wa.me/5585991179809?text=Ol%C3%A1%20Ivini!%20Vi%20seu%20site%20e%20gostaria%20de%20conversar%20sobre%20um%20projeto.'

const heroTrackRef = ref(null)
const canvasRef = ref(null)
const scrollProgress = ref(0)

const START_FRAME = 120 // Começa nos 2.0s da animação (60fps) para preencher a tela instantaneamente
const END_FRAME = 600
const images = []
let currentFrameIndex = 0
let targetFrameIndex = 0
let animFrameId = null
let handleScroll = null

// Precarrega a sequência a partir dos 2.0s (frame 120 ao 600)
function preloadKeyframes() {
  for (let i = START_FRAME; i <= END_FRAME; i++) {
    const img = new Image()
    const frameNum = String(i).padStart(3, '0')
    img.src = `/frames/frame_${frameNum}.jpg`
    images.push(img)
  }
}

function drawFrame(ctx, canvas, img) {
  if (!img || !img.complete || !img.naturalWidth) return
  
  const dpr = window.devicePixelRatio || 1
  const cw = canvas.width / dpr
  const ch = canvas.height / dpr
  const iw = img.naturalWidth
  const ih = img.naturalHeight

  const scale = Math.max(cw / iw, ch / ih)
  const nw = iw * scale
  const nh = ih * scale
  const cx = (cw - nw) / 2
  const cy = (ch - nh) / 2

  ctx.save()
  ctx.scale(dpr, dpr)
  ctx.imageSmoothingEnabled = true
  ctx.imageSmoothingQuality = 'high'
  ctx.clearRect(0, 0, cw, ch)
  ctx.drawImage(img, cx, cy, nw, nh)
  ctx.restore()
}

onMounted(() => {
  preloadKeyframes()

  const canvas = canvasRef.value
  const track = heroTrackRef.value
  if (!canvas || !track) return
  const ctx = canvas.getContext('2d')
  if (!ctx) return

  const handleResize = () => {
    const dpr = window.devicePixelRatio || 1
    canvas.width = window.innerWidth * dpr
    canvas.height = window.innerHeight * dpr
    canvas.style.width = window.innerWidth + 'px'
    canvas.style.height = window.innerHeight + 'px'

    const rounded = Math.min(images.length - 1, Math.max(0, Math.round(currentFrameIndex)))
    if (images[rounded]) {
      drawFrame(ctx, canvas, images[rounded])
    }
  }
  window.addEventListener('resize', handleResize)
  handleResize()

  // Loop de renderização 60fps com lerp suave de keyframe
  function renderLoop() {
    const diff = targetFrameIndex - currentFrameIndex
    if (Math.abs(diff) > 0.005) {
      currentFrameIndex += diff * 0.14
      const roundedIndex = Math.min(images.length - 1, Math.max(0, Math.round(currentFrameIndex)))
      const img = images[roundedIndex]
      if (img) {
        drawFrame(ctx, canvas, img)
      }
    }
    animFrameId = requestAnimationFrame(renderLoop)
  }
  animFrameId = requestAnimationFrame(renderLoop)

  // Cálculo da posição de scroll na trilha do Hero
  handleScroll = () => {
    const rect = track.getBoundingClientRect()
    const totalScrollable = rect.height - window.innerHeight
    if (totalScrollable <= 0) return

    const currentScroll = -rect.top
    const rawProgress = currentScroll / totalScrollable
    const clampedProgress = Math.max(0, Math.min(1, rawProgress))

    scrollProgress.value = clampedProgress
    targetFrameIndex = Math.round(clampedProgress * (images.length - 1))
  }

  window.addEventListener('scroll', handleScroll, { passive: true })
  handleScroll()

  onUnmounted(() => {
    if (animFrameId) cancelAnimationFrame(animFrameId)
    if (handleScroll) window.removeEventListener('scroll', handleScroll)
    window.removeEventListener('resize', handleResize)
  })
})
</script>
