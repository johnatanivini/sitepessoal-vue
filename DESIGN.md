# Design System: Ivini.dev (Personal Portfolio & Enterprise Solutions)

## 1. Visual Theme & Atmosphere
- **Mood & Vibe:** Executive Cyberpunk Dark Mode — sophisticated, high-performance, and tech-forward.
- **Aesthetic Philosophy:** The interface combines a deep carbon black background with interactive **Scroll-Driven Internet Deconstruction Video Scrubbing** (`/video/hero-deconstruction.mp4`), subtle glassmorphism surface layers, and premium metallic accents (Olive Green and Gold). It balances high-density information architecture with generous whitespace to convey authority in senior full-stack development and enterprise legacy modernization.
- **Interactive Scrollytelling Experience:** As the user scrolls down through the Hero section track (`.hero-scroll-track`), the scroll position directly controls/scrubs the frame playback of the deconstruction video in real-time (`0% -> 100%`). Scrolling back up smoothly reverses the video frames. Once the deconstruction sequence finishes, the page seamlessly transitions down into the services and portfolio sections.

---

## 2. Color Palette & Functional Roles

### Background & Surface Layers
- **Deep Carbon Black (`#111315` / `--bg-main`):** Base canvas color providing ultra-dark depth and high contrast.
- **Dark Graphite (`#181b1f` / `--bg-secondary`):** Secondary background used for full-bleed section bands and alternating content areas.
- **Elevated Slate Card (`#202429` / `--bg-card`):** Glassmorphic card surface background (`rgba(32, 36, 41, 0.7)` with `backdrop-filter: blur(5px)`).
- **Subtle Charcoal Border (`#2e343b` / `--border-color`):** Structural borders and subtle divider lines.

### Brand Accents & Status Colors
- **Olive Primary (`#556B2F` / `--olive-primary`):** Main brand accent color. Used for CTA button gradients, icon box borders, and active status indicators.
- **Olive Dark (`#3b4d1e` / `--olive-dark`):** Shadow tone for CTA button gradients.
- **Olive Light (`#7e9f48` / `--olive-light`):** Accent tone for logo text highlights, link hover states, and card hover borders.
- **Olive Glow (`#a3cc5a` / `--olive-glow`):** High-visibility highlight color for badge text and technology tag text.
- **Gold Accent (`#D4AF37` / `--gold-accent`):** Premium secondary accent used for major statistic numbers, icon graphics, and subtle hover glows.
- **Gold Glow (`#f3cf55` / `--gold-glow`):** Warm hover halo color for interactive elements.

### Typography & Content Colors
- **Pure White (`#FFFFFF` / `--text-main`):** Primary text color for titles, headlines, and high-priority labels.
- **Muted Steel Gray (`#9BA3AB` / `--text-muted`):** Secondary text color for body paragraphs, subtitles, metadata, and nav links.

---

## 3. Typography Rules

- **Font Family:** Native Modern System UI Stack (`-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif`).
- **Hero Title (`h1`):** Size `clamp(2.6rem, 5.5vw, 4.2rem)`, ultra-bold weight `900`, tight line-height `1.12`, negative letter-spacing (`-0.02em`). Features high-impact multi-tone gradient highlight (`.hero-gradient-text`: `#FFFFFF` -> `#D4AF37` -> `#a3cc5a`).
- **Section Headers (`h2`):** Size `2.5rem`, font weight `700`, centered with muted subtitle text underneath.
- **Card Titles (`h3`):** Size `1.3rem` – `1.4rem`, font weight `600`–`700`, crisp Pure White (`#FFFFFF`).
- **Body Text (`p`):** Size `0.95rem` – `1.3rem`, line height `1.65`, Muted Steel Gray (`#C4CBD4`) with `strong` tags in Pure White (`#FFFFFF`).
- **Badges & Tags:** Uppercase, semibold/bold, font sizes `0.75rem` – `0.85rem`, with letter spacing (`1.2px`), live pulse dots, and glowing container halos.

---

## 4. Component Stylings

### Buttons & Call-to-Actions (`.btn-cta`)
- **Shape:** Subtly rounded corners (`border-radius: 4px`).
- **Fill:** Dual-tone gradient from Olive Primary (`#556B2F`) to Olive Dark (`#3b4d1e`).
- **Border:** `1px solid #7e9f48` (Olive Light).
- **Behavior:** On hover, shifts gradient to (`#7e9f48` -> `#556B2F`), updates border to Gold Accent (`#D4AF37`), lifts slightly (`transform: translateY(-2px)`), and casts a gold/olive glow shadow (`box-shadow: 0 0 20px rgba(212, 175, 55, 0.3)`).

### Cards & Feature Containers (`.card`, `.project-card`)
- **Shape:** Rounded corners (`12px` for service cards, `10px` for project cards).
- **Surface:** Translucent glassmorphism (`rgba(32, 36, 41, 0.65)` with `backdrop-filter: blur(10px)`). Includes a top gradient halo line (`.card-glow-accent`).
- **Animations & Micro-interactions:** Staggered entrance fade-in-up cubic-bezier animation (`@keyframes fadeInUp`). Smooth hover elevation (`translateY(-8px) scale(1.015)`), border glow illumination (`rgba(126, 159, 72, 0.7)`), and deep 3D drop shadow (`box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6), 0 0 25px rgba(85, 107, 47, 0.25)`).

### Icon Containers & Numbers (`.card-icon-wrapper`, `.card-number`)
- **Shape:** Square `52px x 52px` rounded container (`border-radius: 10px`).
- **Icon Style:** SVG vector graphics with gold stroke accent (`#D4AF37`). Smooth scale & tilt on card hover (`scale(1.1) rotate(3deg)`).
- **Card Numbers:** Monospaced 900-weight index numbers (`01` - `04`) in translucent white (`rgba(255, 255, 255, 0.12)`), shifting to gold tint on hover.

### Technology Chips & Badges (`.tag`, `.badge`)
- **Badges:** Pill-shaped (`border-radius: 50px`), semi-transparent olive background, uppercase, centered above section headlines.
- **Tech Tags:** Compact chips (`border-radius: 4px`), dark background (`rgba(255, 255, 255, 0.05)`), text in Olive Glow (`#a3cc5a`), surrounded by a subtle olive outline (`1px solid rgba(85, 107, 47, 0.3)`).

### Header Navigation (`header`)
- **Position:** Fixed top header (`z-index: 100`) spanning full width.
- **Surface:** Dark translucent glass (`rgba(17, 19, 21, 0.85)`) with blur (`backdrop-filter: blur(10px)`).
- **Border:** Hairline divider (`1px solid rgba(255, 255, 255, 0.05)`).

---

## 5. Layout Principles

- **Max Container Widths:** `1200px` for standard sections, `900px` for hero content, `1000px` for stats banner.
- **Whitespace Strategy:** Ample vertical breathing room (`padding: 6rem 5%`), creating structured section rhythm.
- **Grid Layouts:**
  - Feature Cards: 4-column responsive grid (`grid-template-columns: repeat(4, 1fr)`), wrapping to 2 columns on tablets and 1 column on mobile screens.
  - Projects Grid: Auto-fit responsive cards (`minmax(340px, 1fr)`).
  - Tech Stack & Stats: Flexible auto-fit grid (`minmax(200px, 1fr)`).
- **Interactive Background Layer:** Fixed full-screen canvas (`NetworkCanvas.vue`) at `z-index: 0` rendering interactive fiber-optic particle nodes without blocking user pointer events.
