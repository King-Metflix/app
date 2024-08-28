

<html>
 <head></head>
 <body>
  <!--  Fullscreen Video CSS -->
  <style>
  #player {
    position: absolute;
    width: 100% !important;
    height: 100% !important;
  }
  /*

Skin Netflix v2.0.5
Created by: Gabriel Almeida

Ocean Skin For JW Player8
https://bit.ly/3kVPdo9

changelog:
  v2.0.7
  Fix - JWPlayer 8.27.1

  v2.0.6
  Added - Forward 10 Seconds

  v2.0.5
  New - Netflix Buffer .jw-svg-icon-buffer
  New - Background Color .jw-tooltip-sharing
  New - Background Color .jw-tooltip-audioTracks
  New - SVG Icon .jw-svg-icon-audio-tracks
  New - SVG Icon .jw-svg-icon-pip-on
  New - SVG Icon .jw-svg-icon-pip-off
  Added - ADBlock Modal
  Test - JWPlayer8 JavaScript API
*/

@import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap");
:root {
  --bg-green: #00FF1E;
  --bg-white: #f7f7f7;
  --bg-black: #181919;
  overflow: hidden;
}
/* RESET CSS */
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: 62.5%;
}
.jw-rightclick { display: none !important; }
/* ADBlock Modal */
.modal {
  display: none;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.85);
  z-index: 999;
  font-family: "Rubik", Arial, sans-serif;
}

.modal .modal-container {
  width: 60rem;
  padding-bottom: 10rem;
  background-color: var(--bg-black);
  color: var(--bg-white);
  border-radius: 0.3rem;
}

.modal .modal-container .modal-header {
  position: relative;
  border-radius: 0.3rem;
  height: 30rem;
}

.modal .modal-container .modal-header strong {
  position: absolute;
  text-align: center;
  top: 12rem;
  bottom: 0;
  left: 0;
  right: 0;
  font-weight: 700;
  font-size: 2rem;
  color: var(--bg-white);
}

.modal .modal-container .modal-header::before {
  top: 0;
  left: 0;
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  background: linear-gradient(
    0deg,
    var(--bg-black),
    rgba(24, 25, 25, 0.3) 150%
  );
  border-radius: 0.3rem 0.3rem 0 0;
}

.modal .modal-container .modal-header::after {
  top: 0;
  left: 0;
  content: "";
  width: 100%;
  height: 100%;
  position: absolute;
  background: linear-gradient(
    0deg,
    var(--bg-black),
    rgba(24, 25, 25, 0.3) 100%
  );
  border-radius: 0.3rem 0.3rem 0 0;
}

.modal .modal-container .modal-header .backdrop {
  width: 100%;
  height: 30rem;
  border-radius: 0.3rem 0.3rem 0 0;
}

.modal .modal-container .modal-header button {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 15px;
  right: 15px;
  width: 3.6rem;
  height: 3.6rem;
  background: var(--bg-black);
  border: 0;
  border-radius: 100%;
  cursor: pointer;
  transition: opacity 0.2s ease-in-out;
  z-index: 999;
}

.modal .modal-container .modal-header button:hover {
  opacity: 0.75;
}

.modal .modal-container .modal-header button img {
  display: block;
  width: 2.7rem;
}

.modal .modal-container .modal-body {
  max-width: 50rem;
  margin: 0 auto;
  border-radius: 0 0 0.3rem 0.3rem;
}

.modal .modal-container .modal-body span {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 1.7rem;
}

/* Skin Netflix CSS */
.jwplayer.jw-skin-netflix .jw-title-primary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  color: var(--bg-white);
  margin: 5rem 0 0 5rem;
  font-family: "Rubik", Arial, sans-serif;
  font-weight: 700;
  text-transform: uppercase;
}

.jwplayer.jw-skin-netflix .jw-title-secondary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  color: var(--bg-white);
  margin: -6rem 0 0 5rem;
  font-family: "Rubik", Arial, sans-serif;
  font-weight: 500;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-1 .jw-title-primary,
.jwplayer.jw-skin-netflix.jw-breakpoint-0 .jw-title-primary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: 3rem 0 0 2.5rem;
  font-size: 1.2rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-1 .jw-title-secondary,
.jwplayer.jw-skin-netflix.jw-breakpoint-0 .jw-title-secondary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: -2.6rem 0 0 2.5rem;
  font-size: 0.8rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-3 .jw-title-primary,
.jwplayer.jw-skin-netflix.jw-breakpoint-2 .jw-title-primary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: 4rem 0 0 2.5rem;
  font-size: 2rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-3 .jw-title-secondary,
.jwplayer.jw-skin-netflix.jw-breakpoint-2 .jw-title-secondary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: -5rem 0 0 2.5rem;
  font-size: 1.5rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-5 .jw-title-primary,
.jwplayer.jw-skin-netflix.jw-breakpoint-4 .jw-title-primary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: 5rem 0 0 2.5rem;
  font-size: 2.5rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-5 .jw-title-secondary,
.jwplayer.jw-skin-netflix.jw-breakpoint-4 .jw-title-secondary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: -6rem 0 0 2.5rem;
  font-size: 1.5rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-7 .jw-title-primary,
.jwplayer.jw-skin-netflix.jw-breakpoint-6 .jw-title-primary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: 5rem 0 0 2.5rem;
  font-size: 3rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-7 .jw-title-secondary,
.jwplayer.jw-skin-netflix.jw-breakpoint-6 .jw-title-secondary {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  margin: -7rem 0 0 2.5rem;
  font-size: 2rem;
}

.jwplayer.jw-skin-netflix.jw-state-idle
  .jw-display-icon-container
  .jw-svg-icon-play
  path {
  display: none;
}

.jwplayer.jw-skin-netflix.jw-state-idle
  .jw-display-icon-container
  .jw-svg-icon-play {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTE5LjM3NiAxMi40MTZMOC43NzcgMTkuNDgyQS41LjUgMCAwIDEgOCAxOS4wNjZWNC45MzRhLjUuNSAwIDAgMSAuNzc3LS40MTZsMTAuNTk5IDcuMDY2YS41LjUgMCAwIDEgMCAuODMyeiIgZmlsbD0icmdiYSgyNDcsMjQ2LDI0NywxKSIvPjwvc3ZnPg==");
  background-repeat: no-repeat;
  background-position: center;
  -webkit-transition: 0.2s;
  transition: 0.2s;
}

.jwplayer.jw-skin-netflix.jw-state-idle
  .jw-display-icon-container:hover
  .jw-svg-icon-play {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTE5LjM3NiAxMi40MTZMOC43NzcgMTkuNDgyQS41LjUgMCAwIDEgOCAxOS4wNjZWNC45MzRhLjUuNSAwIDAgMSAuNzc3LS40MTZsMTAuNTk5IDcuMDY2YS41LjUgMCAwIDEgMCAuODMyeiIgZmlsbD0icmdiYSgyMjksOSwyMCwxKSIvPjwvc3ZnPg==");
  background-repeat: no-repeat;
  background-position: center;
  -webkit-transition: 0.2s;
  transition: 0.2s;
}

.jwplayer.jw-skin-netflix.jw-state-idle
  .jw-display-icon-container
  .jw-svg-icon-play {
  background-color: rgba(255, 255, 255, 0.25);
  border-radius: 100%;
}

.jwplayer.jw-skin-netflix.jw-state-idle
  .jw-display-controls
  .jw-display-icon-container
  .jw-icon {
  display: flex;
  justify-content: center;
  align-items: center;
}

.jwplayer.jw-skin-netflix.jw-state-idle .jw-preview,
.jwplayer.jw-skin-netflix.jw-state-complete .jw-preview {
  width: calc(100% + 5rem);
  background-size: calc(100% + 6rem);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  transition: opacity 0.35s, transform 0.35s, -webkit-transform 0.35s;
  -webkit-transform: translate3d(-4rem, 0, 0);
  transform: translate3d(-4rem, 0, 0);
  background-repeat: no-repeat;
  background-size: cover;
}

.jwplayer.jw-skin-netflix.jw-state-idle:hover .jw-preview,
.jwplayer.jw-skin-netflix.jw-state-complete:hover .jw-preview {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.jwplayer.jw-skin-netflix.jw-state-paused .jw-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
}

.jwplayer.jw-skin-netflix.jw-state-paused .jw-controls,
.jwplayer.jw-skin-netflix.jw-state-complete .jw-controls,
.jwplayer.jw-skin-netflix.jw-state-buffering .jw-controls {
  background-color: rgba(0, 0, 0, 0.35);
  transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -webkit-transition: all 0.2s linear;
}

.jwplayer.jw-skin-netflix
  .jw-display-controls
  .jw-display-icon-container
  .jw-icon:hover {
  color: var(--bg-green);
}

/*
Amplia a imagem e adiciona transições.
*/
.jwplayer.jw-skin-netflix .jw-preview {
  width: calc(100% + 5rem);
  background-size: calc(100% + 6rem);
  transition: opacity 0.35s, transform 0.35s;
  transform: translate3d(-4rem, 0, 0);
}

.jwplayer.jw-skin-netflix:hover .jw-preview {
  transform: translate3d(0, 0, 0);
}

/*
Deslizar a imagem em -4rem.
*/
.jwplayer.jw-skin-netflix.jw-state-complete:hover .jw-preview {
  transform: translate3d(-4rem, 0, 0);
}

/*
Mudar a cor da barra de controle e alterar a cor do ícone em idle.
*/
.jwplayer.jw-skin-netflix .jw-display {
  padding-bottom: 4.5rem;
}

.jwplayer.jw-skin-netflix .jw-controls::after {
  background: none;
}

.jwplayer.jw-skin-netflix .jw-controlbar .jw-button-container .jw-button-color {
  color: var(--bg-white);
}

.jwplayer.jw-skin-netflix.jw-state-paused
  .jw-controlbar
  .jw-button-container
  .jw-button-color {
  color: var(--bg-white);
}

.jwplayer.jw-skin-netflix
  .jw-controlbar
  .jw-button-container
  .jw-button-color:hover {
  color: var(--bg-green);
}

/*
Toltips mais perto da barra, alterar cores e remover sombras.
*/
.jwplayer.jw-skin-netflix .jw-controlbar .jw-tooltip {
  box-shadow: none;
}

.jwplayer.jw-skin-netflix .jw-controlbar .jw-tooltip.jw-open {
  border-radius: 0.3rem;
  color: var(--bg-black);
}

.jwplayer.jw-skin-netflix .jw-controlbar .jw-tooltip .jw-text {
  background-color: var(--bg-black);
  border-radius: 0.3rem;
}

.jwplayer.jw-skin-netflix .jw-controlbar .jw-text {
  color: var(--bg-white);
}

.jwplayer.jw-skin-netflix .jw-time-tip .jw-text {
  color: var(--bg-black);
}

.jwplayer.jw-skin-netflix .jw-volume-tip {
  margin-bottom: -4rem;
}

/*
Tooltip timeslider e botões de qualidade e legenda.
*/
.jwplayer.jw-skin-netflix .jw-settings-topbar-buttons .jw-tooltip-captions,
.jwplayer.jw-skin-netflix .jw-settings-topbar-buttons .jw-tooltip-quality,
.jwplayer.jw-skin-netflix .jw-settings-topbar-buttons .jw-tooltip-audioTracks,
.jwplayer.jw-skin-netflix .jw-settings-topbar-buttons .jw-tooltip-sharing {
  color: var(--bg-black);
}

.jwplayer.jw-skin-netflix
  .jw-settings-topbar-buttons
  .jw-tooltip-captions
  .jw-text,
.jwplayer.jw-skin-netflix
  .jw-settings-topbar-buttons
  .jw-tooltip-quality
  .jw-text,
.jwplayer.jw-skin-netflix
  .jw-settings-topbar-buttons
  .jw-tooltip-audioTracks
  .jw-text,
.jwplayer.jw-skin-netflix
  .jw-settings-topbar-buttons
  .jw-tooltip-sharing
  .jw-text
/* .jwplayer.jw-skin-netflix .jw-time-tip .jw-reset */ {
  border-radius: 0.3rem;
  background-color: var(--bg-black);
  color: var(--bg-white);
}

.jwplayer.jw-skin-netflix .jw-time-thumb {
  border-radius: 0.3rem 0.3rem 0 0 !important;
}

.jwplayer.jw-skin-netflix .jw-time-tip .jw-reset {
  border-radius: 0 0 0.3rem 0.3rem;
  background-color: var(--bg-black);
  color: var(--bg-white);
}

.jwplayer.jw-skin-netflix .jw-time-tip {
  color: var(--bg-black);
}

/* 
Tooltip copia
*/
.jwplayer.jw-skin-netflix .jw-settings-submenu-items .jw-tooltip-sharing-Link {
  color: var(--bg-black);
}

.jwplayer.jw-skin-netflix
  .jw-settings-submenu-items
  .jw-tooltip-sharing-Link
  .jw-text {
  color: var(--bg-white);
  background-color: var(--bg-black);
}

/*
Controle de volume.
*/
.jwplayer.jw-skin-netflix
  .jw-overlay
  .jw-slider-volume
  .jw-slider-container
  .jw-knob {
  background-color: var(--bg-green);
}

.jwplayer.jw-skin-netflix
  .jw-overlay
  .jw-slider-volume
  .jw-slider-container
  .jw-buffer,
.jwplayer.jw-skin-netflix
  .jw-overlay
  .jw-slider-volume
  .jw-slider-container
  .jw-rail {
  background-color: var(--bg-black);
  width: 0.2rem;
}

.jwplayer.jw-skin-netflix
  .jw-overlay
  .jw-slider-volume
  .jw-slider-container
  .jw-progress {
  background-color: var(--bg-green);
  width: 0.2rem;
}

/*
Tamanho e cor da slider.
*/
.jwplayer.jw-skin-netflix
  .jw-controlbar
  .jw-slider-time
  .jw-slider-container
  .jw-rail {
  background-color: var(--bg-black);
}
.jwplayer.jw-skin-netflix
  .jw-controlbar
  .jw-slider-time
  .jw-slider-container
  .jw-buffer {
  background-color: #222323;
}

.jwplayer.jw-skin-netflix
  .jw-controlbar
  .jw-slider-time
  .jw-slider-container
  .jw-knob,
.jwplayer.jw-skin-netflix
  .jw-controlbar
  .jw-slider-time
  .jw-slider-container
  .jw-progress {
  background-color: var(--bg-green);
}

.jw-skin-netflix .jw-slider-horizontal .jw-rail,
.jw-skin-netflix .jw-slider-horizontal .jw-buffer,
.jw-skin-netflix .jw-slider-horizontal .jw-progress {
  height: 0.3rem;
}

/*
Cor do menu de configurações.
*/
.jwplayer.jw-skin-netflix .jw-settings-menu {
  background-color: var(--bg-black);
  border-radius: 0.3rem;
  width: 23rem;
}

.jwplayer.jw-skin-netflix .jw-settings-topbar {
  border-radius: 0.3rem 0.3rem 0 0;
}

.jwplayer.jw-skin-netflix
  .jw-settings-menu
  .jw-settings-topbar:not(.jw-nested-menu-open)
  .jw-icon-inline {
  height: 5rem;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-7 .jw-settings-menu {
  margin: 0 -4.4rem -4.7rem 0;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-6 .jw-settings-menu,
.jwplayer.jw-skin-netflix.jw-breakpoint-5 .jw-settings-menu,
.jwplayer.jw-skin-netflix.jw-breakpoint-4 .jw-settings-menu,
.jwplayer.jw-skin-netflix.jw-breakpoint-3 .jw-settings-menu,
.jwplayer.jw-skin-netflix.jw-breakpoint-2 .jw-settings-menu {
  margin: 0 0.4rem 0.8rem 0;
}

.jwplayer.jw-skin-netflix.jw-breakpoint-1 .jw-settings-menu,
.jwplayer.jw-skin-netflix.jw-breakpoint-0 .jw-settings-menu {
  width: 100%;
  border-radius: 0;
}

/*
Ícone Taxas de Reprodução e configurações de legendas.
*/

.jw-svg-icon-playback-rate path {
  color: var(--bg-white);
}

.jwplayer.jw-skin-netflix .jw-settings-menu .jw-submenu-topbar {
  display: none;
}

/*
Player responsivo jw8.
*/
.jwplayer.jw-skin-netflix.jw-breakpoint-6 .jw-volume-tip,
.jwplayer.jw-skin-netflix.jw-breakpoint-5 .jw-volume-tip,
.jwplayer.jw-skin-netflix.jw-breakpoint-4 .jw-volume-tip,
.jwplayer.jw-skin-netflix.jw-breakpoint-3 .jw-volume-tip,
.jwplayer.jw-skin-netflix.jw-breakpoint-2 .jw-volume-tip,
.jwplayer.jw-skin-netflix.jw-breakpoint-1 .jw-volume-tip,
.jwplayer.jw-skin-netflix.jw-breakpoint-0 .jw-volume-tip {
  margin-bottom: -2rem;
}

/*
Animações do botão.
 */
@keyframes scaling {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(1.1);
  }
}

/*
ícones do player.
 */
.jw-svg-icon-buffer {
  color: var(--bg-green);
}

/*
ícone de Play
 */
.jw-state-paused .jw-svg-icon-play path {
  display: none;
}

.jw-state-paused .jw-svg-icon-play {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTE5LjM3NiAxMi40MTZMOC43NzcgMTkuNDgyQS41LjUgMCAwIDEgOCAxOS4wNjZWNC45MzRhLjUuNSAwIDAgMSAuNzc3LS40MTZsMTAuNTk5IDcuMDY2YS41LjUgMCAwIDEgMCAuODMyeiIgZmlsbD0icmdiYSgyNDcsMjQ2LDI0NywxKSIvPjwvc3ZnPg==");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-state-paused .jw-icon-playback:hover .jw-svg-icon-play {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTE5LjM3NiAxMi40MTZMOC43NzcgMTkuNDgyQS41LjUgMCAwIDEgOCAxOS4wNjZWNC45MzRhLjUuNSAwIDAgMSAuNzc3LS40MTZsMTAuNTk5IDcuMDY2YS41LjUgMCAwIDEgMCAuODMyeiIgZmlsbD0icmdiYSgyMjksOSwyMCwxKSIvPjwvc3ZnPg==");
}

/*
ícone de Puase.
 */
.jw-svg-icon-pause path {
  display: none;
}

.jw-svg-icon-pause {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTYgNWgydjE0SDZWNXptMTAgMGgydjE0aC0yVjV6IiBmaWxsPSJyZ2JhKDI0NywyNDYsMjQ3LDEpIi8+PC9zdmc+");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-playback:hover .jw-svg-icon-pause {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTYgNWgydjE0SDZWNXptMTAgMGgydjE0aC0yVjV6IiBmaWxsPSJyZ2JhKDIyOSw5LDIwLDEpIi8+PC9zdmc+");
}

/*
Ícone de Configuração.
 */
.jw-svg-icon-settings path {
  display: none;
}

.jw-svg-icon-settings {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIgMTJjMC0uODY1LjExLTEuNzAzLjMxNi0yLjUwNEEzIDMgMCAwIDAgNC45OSA0Ljg2N2E5Ljk5IDkuOTkgMCAwIDEgNC4zMzUtMi41MDUgMyAzIDAgMCAwIDUuMzQ4IDAgOS45OSA5Ljk5IDAgMCAxIDQuMzM1IDIuNTA1IDMgMyAwIDAgMCAyLjY3NSA0LjYzYy4yMDYuOC4zMTYgMS42MzguMzE2IDIuNTAzIDAgLjg2NS0uMTEgMS43MDMtLjMxNiAyLjUwNGEzIDMgMCAwIDAtMi42NzUgNC42MjkgOS45OSA5Ljk5IDAgMCAxLTQuMzM1IDIuNTA1IDMgMyAwIDAgMC01LjM0OCAwIDkuOTkgOS45OSAwIDAgMS00LjMzNS0yLjUwNSAzIDMgMCAwIDAtMi42NzUtNC42M0MyLjExIDEzLjcwNCAyIDEyLjg2NiAyIDEyem00LjgwNCAzYy42MyAxLjA5MS44MSAyLjM0Ni41NjQgMy41MjQuNDA4LjI5Ljg0Mi41NDEgMS4yOTcuNzVBNC45OTMgNC45OTMgMCAwIDEgMTIgMThjMS4yNiAwIDIuNDM4LjQ3MSAzLjMzNSAxLjI3NC40NTUtLjIwOS44ODktLjQ2IDEuMjk3LS43NUE0Ljk5MyA0Ljk5MyAwIDAgMSAxNy4xOTYgMTVhNC45OTMgNC45OTMgMCAwIDEgMi43Ny0yLjI1IDguMTI2IDguMTI2IDAgMCAwIDAtMS41QTQuOTkzIDQuOTkzIDAgMCAxIDE3LjE5NSA5YTQuOTkzIDQuOTkzIDAgMCAxLS41NjQtMy41MjQgNy45ODkgNy45ODkgMCAwIDAtMS4yOTctLjc1QTQuOTkzIDQuOTkzIDAgMCAxIDEyIDZhNC45OTMgNC45OTMgMCAwIDEtMy4zMzUtMS4yNzQgNy45OSA3Ljk5IDAgMCAwLTEuMjk3Ljc1QTQuOTkzIDQuOTkzIDAgMCAxIDYuODA0IDlhNC45OTMgNC45OTMgMCAwIDEtMi43NyAyLjI1IDguMTI2IDguMTI2IDAgMCAwIDAgMS41QTQuOTkzIDQuOTkzIDAgMCAxIDYuODA1IDE1ek0xMiAxNWEzIDMgMCAxIDEgMC02IDMgMyAwIDAgMSAwIDZ6bTAtMmExIDEgMCAxIDAgMC0yIDEgMSAwIDAgMCAwIDJ6IiBmaWxsPSJyZ2JhKDI0NywyNDYsMjQ3LDEpIi8+PC9zdmc+");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-settings:hover .jw-svg-icon-settings {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIgMTJjMC0uODY1LjExLTEuNzAzLjMxNi0yLjUwNEEzIDMgMCAwIDAgNC45OSA0Ljg2N2E5Ljk5IDkuOTkgMCAwIDEgNC4zMzUtMi41MDUgMyAzIDAgMCAwIDUuMzQ4IDAgOS45OSA5Ljk5IDAgMCAxIDQuMzM1IDIuNTA1IDMgMyAwIDAgMCAyLjY3NSA0LjYzYy4yMDYuOC4zMTYgMS42MzguMzE2IDIuNTAzIDAgLjg2NS0uMTEgMS43MDMtLjMxNiAyLjUwNGEzIDMgMCAwIDAtMi42NzUgNC42MjkgOS45OSA5Ljk5IDAgMCAxLTQuMzM1IDIuNTA1IDMgMyAwIDAgMC01LjM0OCAwIDkuOTkgOS45OSAwIDAgMS00LjMzNS0yLjUwNSAzIDMgMCAwIDAtMi42NzUtNC42M0MyLjExIDEzLjcwNCAyIDEyLjg2NiAyIDEyem00LjgwNCAzYy42MyAxLjA5MS44MSAyLjM0Ni41NjQgMy41MjQuNDA4LjI5Ljg0Mi41NDEgMS4yOTcuNzVBNC45OTMgNC45OTMgMCAwIDEgMTIgMThjMS4yNiAwIDIuNDM4LjQ3MSAzLjMzNSAxLjI3NC40NTUtLjIwOS44ODktLjQ2IDEuMjk3LS43NUE0Ljk5MyA0Ljk5MyAwIDAgMSAxNy4xOTYgMTVhNC45OTMgNC45OTMgMCAwIDEgMi43Ny0yLjI1IDguMTI2IDguMTI2IDAgMCAwIDAtMS41QTQuOTkzIDQuOTkzIDAgMCAxIDE3LjE5NSA5YTQuOTkzIDQuOTkzIDAgMCAxLS41NjQtMy41MjQgNy45ODkgNy45ODkgMCAwIDAtMS4yOTctLjc1QTQuOTkzIDQuOTkzIDAgMCAxIDEyIDZhNC45OTMgNC45OTMgMCAwIDEtMy4zMzUtMS4yNzQgNy45OSA3Ljk5IDAgMCAwLTEuMjk3Ljc1QTQuOTkzIDQuOTkzIDAgMCAxIDYuODA0IDlhNC45OTMgNC45OTMgMCAwIDEtMi43NyAyLjI1IDguMTI2IDguMTI2IDAgMCAwIDAgMS41QTQuOTkzIDQuOTkzIDAgMCAxIDYuODA1IDE1ek0xMiAxNWEzIDMgMCAxIDEgMC02IDMgMyAwIDAgMSAwIDZ6bTAtMmExIDEgMCAxIDAgMC0yIDEgMSAwIDAgMCAwIDJ6IiBmaWxsPSJyZ2JhKDIyOSw5LDIwLDEpIi8+PC9zdmc+");
}

/*
Ícone de Qualidade.
 */
.jw-svg-icon-quality-100 path {
  display: none;
}

.jw-svg-icon-quality-100 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTYuMTcgMThhMy4wMDEgMy4wMDEgMCAwIDEgNS42NiAwSDIydjJIMTEuODNhMy4wMDEgMy4wMDEgMCAwIDEtNS42NiAwSDJ2LTJoNC4xN3ptNi03YTMuMDAxIDMuMDAxIDAgMCAxIDUuNjYgMEgyMnYyaC00LjE3YTMuMDAxIDMuMDAxIDAgMCAxLTUuNjYgMEgydi0yaDEwLjE3em0tNi03YTMuMDAxIDMuMDAxIDAgMCAxIDUuNjYgMEgyMnYySDExLjgzYTMuMDAxIDMuMDAxIDAgMCAxLTUuNjYgMEgyVjRoNC4xN3pNOSA2YTEgMSAwIDEgMCAwLTIgMSAxIDAgMCAwIDAgMnptNiA3YTEgMSAwIDEgMCAwLTIgMSAxIDAgMCAwIDAgMnptLTYgN2ExIDEgMCAxIDAgMC0yIDEgMSAwIDAgMCAwIDJ6IiBmaWxsPSJyZ2JhKDI0NywyNDcsMjQ3LDEpIi8+PC9zdmc+");
  background-size: contain;
  background-repeat: no-repeat;
}

.jwplayer.jw-skin-netflix .jw-submenu-quality:hover .jw-svg-icon-quality-100 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTYuMTcgMThhMy4wMDEgMy4wMDEgMCAwIDEgNS42NiAwSDIydjJIMTEuODNhMy4wMDEgMy4wMDEgMCAwIDEtNS42NiAwSDJ2LTJoNC4xN3ptNi03YTMuMDAxIDMuMDAxIDAgMCAxIDUuNjYgMEgyMnYyaC00LjE3YTMuMDAxIDMuMDAxIDAgMCAxLTUuNjYgMEgydi0yaDEwLjE3em0tNi03YTMuMDAxIDMuMDAxIDAgMCAxIDUuNjYgMEgyMnYySDExLjgzYTMuMDAxIDMuMDAxIDAgMCAxLTUuNjYgMEgyVjRoNC4xN3pNOSA2YTEgMSAwIDEgMCAwLTIgMSAxIDAgMCAwIDAgMnptNiA3YTEgMSAwIDEgMCAwLTIgMSAxIDAgMCAwIDAgMnptLTYgN2ExIDEgMCAxIDAgMC0yIDEgMSAwIDAgMCAwIDJ6IiBmaWxsPSJyZ2JhKDIyOSw5LDIwLDEpIi8+PC9zdmc+");
}

/*
Ícone de Fechar.
 */
.jw-svg-icon-close path {
  display: none;
}

.jw-svg-icon-close {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEyIDEwLjU4Nmw0Ljk1LTQuOTUgMS40MTQgMS40MTQtNC45NSA0Ljk1IDQuOTUgNC45NS0xLjQxNCAxLjQxNC00Ljk1LTQuOTUtNC45NSA0Ljk1LTEuNDE0LTEuNDE0IDQuOTUtNC45NS00Ljk1LTQuOTVMNy4wNSA1LjYzNnoiIGZpbGw9InJnYmEoMjQ3LDI0NiwyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-settings-close:hover .jw-svg-icon-close {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEyIDEwLjU4Nmw0Ljk1LTQuOTUgMS40MTQgMS40MTQtNC45NSA0Ljk1IDQuOTUgNC45NS0xLjQxNCAxLjQxNC00Ljk1LTQuOTUtNC45NSA0Ljk1LTEuNDE0LTEuNDE0IDQuOTUtNC45NS00Ljk1LTQuOTVMNy4wNSA1LjYzNnoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

/*
Ícone de Legenda.
 */
.jw-svg-icon-cc-off path {
  display: none;
}

.jw-svg-icon-cc-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwSDI0VjI0SDB6Ii8+PHBhdGggZD0iTTIxIDNjLjU1MiAwIDEgLjQ0OCAxIDF2MTZjMCAuNTUyLS40NDggMS0xIDFIM2MtLjU1MiAwLTEtLjQ0OC0xLTFWNGMwLS41NTIuNDQ4LTEgMS0xaDE4em0tMSAySDR2MTRoMTZWNXpNOSA4YzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxMC4wNTMgMTAuMjI0IDkuNTUzIDEwIDkgMTBjLTEuMTA1IDAtMiAuODk1LTIgMnMuODk1IDIgMiAyYy41NTMgMCAxLjA1My0uMjI0IDEuNDE0LS41ODZsMS40MTQgMS40MTRDMTEuMTA0IDE1LjU1MiAxMC4xMDQgMTYgOSAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHptNyAwYzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxNy4wNTMgMTAuMjI0IDE2LjU1MyAxMCAxNiAxMGMtMS4xMDUgMC0yIC44OTUtMiAycy44OTUgMiAyIDJjLjU1MiAwIDEuMDUyLS4yMjQgMS40MTQtLjU4NmwxLjQxNCAxLjQxNEMxOC4xMDQgMTUuNTUyIDE3LjEwNCAxNiAxNiAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHoiIGZpbGw9InJnYmEoMjQ3LDI0NiwyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jwplayer.jw-skin-netflix .jw-submenu-captions:hover .jw-svg-icon-cc-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwSDI0VjI0SDB6Ii8+PHBhdGggZD0iTTIxIDNjLjU1MiAwIDEgLjQ0OCAxIDF2MTZjMCAuNTUyLS40NDggMS0xIDFIM2MtLjU1MiAwLTEtLjQ0OC0xLTFWNGMwLS41NTIuNDQ4LTEgMS0xaDE4em0tMSAySDR2MTRoMTZWNXpNOSA4YzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxMC4wNTMgMTAuMjI0IDkuNTUzIDEwIDkgMTBjLTEuMTA1IDAtMiAuODk1LTIgMnMuODk1IDIgMiAyYy41NTMgMCAxLjA1My0uMjI0IDEuNDE0LS41ODZsMS40MTQgMS40MTRDMTEuMTA0IDE1LjU1MiAxMC4xMDQgMTYgOSAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHptNyAwYzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxNy4wNTMgMTAuMjI0IDE2LjU1MyAxMCAxNiAxMGMtMS4xMDUgMC0yIC44OTUtMiAycy44OTUgMiAyIDJjLjU1MiAwIDEuMDUyLS4yMjQgMS40MTQtLjU4NmwxLjQxNCAxLjQxNEMxOC4xMDQgMTUuNTUyIDE3LjEwNCAxNiAxNiAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

.jw-icon-cc .jw-svg-icon-cc-off path {
  display: none;
}

.jw-icon-cc .jw-svg-icon-cc-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwSDI0VjI0SDB6Ii8+PHBhdGggZD0iTTIxIDNjLjU1MiAwIDEgLjQ0OCAxIDF2MTZjMCAuNTUyLS40NDggMS0xIDFIM2MtLjU1MiAwLTEtLjQ0OC0xLTFWNGMwLS41NTIuNDQ4LTEgMS0xaDE4em0tMSAySDR2MTRoMTZWNXpNOSA4YzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxMC4wNTMgMTAuMjI0IDkuNTUzIDEwIDkgMTBjLTEuMTA1IDAtMiAuODk1LTIgMnMuODk1IDIgMiAyYy41NTMgMCAxLjA1My0uMjI0IDEuNDE0LS41ODZsMS40MTQgMS40MTRDMTEuMTA0IDE1LjU1MiAxMC4xMDQgMTYgOSAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHptNyAwYzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxNy4wNTMgMTAuMjI0IDE2LjU1MyAxMCAxNiAxMGMtMS4xMDUgMC0yIC44OTUtMiAycy44OTUgMiAyIDJjLjU1MiAwIDEuMDUyLS4yMjQgMS40MTQtLjU4NmwxLjQxNCAxLjQxNEMxOC4xMDQgMTUuNTUyIDE3LjEwNCAxNiAxNiAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHoiIGZpbGw9InJnYmEoMjQ3LDI0NiwyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-cc:hover .jw-svg-icon-cc-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwSDI0VjI0SDB6Ii8+PHBhdGggZD0iTTIxIDNjLjU1MiAwIDEgLjQ0OCAxIDF2MTZjMCAuNTUyLS40NDggMS0xIDFIM2MtLjU1MiAwLTEtLjQ0OC0xLTFWNGMwLS41NTIuNDQ4LTEgMS0xaDE4em0tMSAySDR2MTRoMTZWNXpNOSA4YzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxMC4wNTMgMTAuMjI0IDkuNTUzIDEwIDkgMTBjLTEuMTA1IDAtMiAuODk1LTIgMnMuODk1IDIgMiAyYy41NTMgMCAxLjA1My0uMjI0IDEuNDE0LS41ODZsMS40MTQgMS40MTRDMTEuMTA0IDE1LjU1MiAxMC4xMDQgMTYgOSAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHptNyAwYzEuMTA1IDAgMi4xMDUuNDQ4IDIuODI5IDEuMTczbC0xLjQxNCAxLjQxNEMxNy4wNTMgMTAuMjI0IDE2LjU1MyAxMCAxNiAxMGMtMS4xMDUgMC0yIC44OTUtMiAycy44OTUgMiAyIDJjLjU1MiAwIDEuMDUyLS4yMjQgMS40MTQtLjU4NmwxLjQxNCAxLjQxNEMxOC4xMDQgMTUuNTUyIDE3LjEwNCAxNiAxNiAxNmMtMi4yMDggMC00LTEuNzkyLTQtNHMxLjc5Mi00IDQtNHoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

.jw-icon-cc .jw-svg-icon-cc-on path {
  display: none;
}

.jw-icon-cc .jw-svg-icon-cc-on {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwSDI0VjI0SDB6Ii8+PHBhdGggZD0iTTIxIDNjLjU1MiAwIDEgLjQ0OCAxIDF2MTZjMCAuNTUyLS40NDggMS0xIDFIM2MtLjU1MiAwLTEtLjQ0OC0xLTFWNGMwLS41NTIuNDQ4LTEgMS0xaDE4ek05IDhjLTIuMjA4IDAtNCAxLjc5Mi00IDRzMS43OTIgNCA0IDRjMS4xIDAgMi4xLS40NSAyLjgyOC0xLjE3MmwtMS40MTQtMS40MTRDMTAuMDUzIDEzLjc3NiA5LjU1MyAxNCA5IDE0Yy0xLjEwNSAwLTItLjg5NS0yLTJzLjg5NS0yIDItMmMuNTUgMCAxLjA0OC4yMiAxLjQxNS41ODdsMS40MTQtMS40MTRDMTEuMTA1IDguNDQ4IDEwLjEwNSA4IDkgOHptNyAwYy0yLjIwOCAwLTQgMS43OTItNCA0czEuNzkyIDQgNCA0YzEuMTA0IDAgMi4xMDQtLjQ0OCAyLjgyOC0xLjE3MmwtMS40MTQtMS40MTRjLS4zNjIuMzYyLS44NjIuNTg2LTEuNDE0LjU4Ni0xLjEwNSAwLTItLjg5NS0yLTJzLjg5NS0yIDItMmMuNTUzIDAgMS4wNTMuMjI0IDEuNDE1LjU4N2wxLjQxNC0xLjQxNEMxOC4xMDUgOC40NDggMTcuMTA1IDggMTYgOHoiIGZpbGw9InJnYmEoMjQ3LDI0NiwyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-cc:hover .jw-svg-icon-cc-on {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwSDI0VjI0SDB6Ii8+PHBhdGggZD0iTTIxIDNjLjU1MiAwIDEgLjQ0OCAxIDF2MTZjMCAuNTUyLS40NDggMS0xIDFIM2MtLjU1MiAwLTEtLjQ0OC0xLTFWNGMwLS41NTIuNDQ4LTEgMS0xaDE4ek05IDhjLTIuMjA4IDAtNCAxLjc5Mi00IDRzMS43OTIgNCA0IDRjMS4xIDAgMi4xLS40NSAyLjgyOC0xLjE3MmwtMS40MTQtMS40MTRDMTAuMDUzIDEzLjc3NiA5LjU1MyAxNCA5IDE0Yy0xLjEwNSAwLTItLjg5NS0yLTJzLjg5NS0yIDItMmMuNTUgMCAxLjA0OC4yMiAxLjQxNS41ODdsMS40MTQtMS40MTRDMTEuMTA1IDguNDQ4IDEwLjEwNSA4IDkgOHptNyAwYy0yLjIwOCAwLTQgMS43OTItNCA0czEuNzkyIDQgNCA0YzEuMTA0IDAgMi4xMDQtLjQ0OCAyLjgyOC0xLjE3MmwtMS40MTQtMS40MTRjLS4zNjIuMzYyLS44NjIuNTg2LTEuNDE0LjU4Ni0xLjEwNSAwLTItLjg5NS0yLTJzLjg5NS0yIDItMmMuNTUzIDAgMS4wNTMuMjI0IDEuNDE1LjU4N2wxLjQxNC0xLjQxNEMxOC4xMDUgOC40NDggMTcuMTA1IDggMTYgOHoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

/*
Ícone de Volume.
 */
.jw-svg-icon-volume-100 path {
  display: none;
}

.jw-svg-icon-volume-100 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEwIDcuMjJMNi42MDMgMTBIM3Y0aDMuNjAzTDEwIDE2Ljc4VjcuMjJ6TTUuODg5IDE2SDJhMSAxIDAgMCAxLTEtMVY5YTEgMSAwIDAgMSAxLTFoMy44ODlsNS4yOTQtNC4zMzJhLjUuNSAwIDAgMSAuODE3LjM4N3YxNS44OWEuNS41IDAgMCAxLS44MTcuMzg3TDUuODkgMTZ6bTEzLjUxNyA0LjEzNGwtMS40MTYtMS40MTZBOC45NzggOC45NzggMCAwIDAgMjEgMTJhOC45ODIgOC45ODIgMCAwIDAtMy4zMDQtNi45NjhsMS40Mi0xLjQyQTEwLjk3NiAxMC45NzYgMCAwIDEgMjMgMTJjMCAzLjIyMy0xLjM4NiA2LjEyMi0zLjU5NCA4LjEzNHptLTMuNTQzLTMuNTQzbC0xLjQyMi0xLjQyMkEzLjk5MyAzLjk5MyAwIDAgMCAxNiAxMmMwLTEuNDMtLjc1LTIuNjg1LTEuODgtMy4zOTJsMS40MzktMS40MzlBNS45OTEgNS45OTEgMCAwIDEgMTggMTJjMCAxLjg0Mi0uODMgMy40OS0yLjEzNyA0LjU5MXoiIGZpbGw9InJnYmEoMjQ3LDI0NiwyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-volume:hover .jw-svg-icon-volume-100 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEwIDcuMjJMNi42MDMgMTBIM3Y0aDMuNjAzTDEwIDE2Ljc4VjcuMjJ6TTUuODg5IDE2SDJhMSAxIDAgMCAxLTEtMVY5YTEgMSAwIDAgMSAxLTFoMy44ODlsNS4yOTQtNC4zMzJhLjUuNSAwIDAgMSAuODE3LjM4N3YxNS44OWEuNS41IDAgMCAxLS44MTcuMzg3TDUuODkgMTZ6bTEzLjUxNyA0LjEzNGwtMS40MTYtMS40MTZBOC45NzggOC45NzggMCAwIDAgMjEgMTJhOC45ODIgOC45ODIgMCAwIDAtMy4zMDQtNi45NjhsMS40Mi0xLjQyQTEwLjk3NiAxMC45NzYgMCAwIDEgMjMgMTJjMCAzLjIyMy0xLjM4NiA2LjEyMi0zLjU5NCA4LjEzNHptLTMuNTQzLTMuNTQzbC0xLjQyMi0xLjQyMkEzLjk5MyAzLjk5MyAwIDAgMCAxNiAxMmMwLTEuNDMtLjc1LTIuNjg1LTEuODgtMy4zOTJsMS40MzktMS40MzlBNS45OTEgNS45OTEgMCAwIDEgMTggMTJjMCAxLjg0Mi0uODMgMy40OS0yLjEzNyA0LjU5MXoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

.jw-svg-icon-volume-50 path {
  display: none;
}

.jw-svg-icon-volume-50 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEzIDcuMjJMOS42MDMgMTBINnY0aDMuNjAzTDEzIDE2Ljc4VjcuMjJ6TTguODg5IDE2SDVhMSAxIDAgMCAxLTEtMVY5YTEgMSAwIDAgMSAxLTFoMy44ODlsNS4yOTQtNC4zMzJhLjUuNSAwIDAgMSAuODE3LjM4N3YxNS44OWEuNS41IDAgMCAxLS44MTcuMzg3TDguODkgMTZ6bTkuOTc0LjU5MWwtMS40MjItMS40MjJBMy45OTMgMy45OTMgMCAwIDAgMTkgMTJjMC0xLjQzLS43NS0yLjY4NS0xLjg4LTMuMzkybDEuNDM5LTEuNDM5QTUuOTkxIDUuOTkxIDAgMCAxIDIxIDEyYzAgMS44NDItLjgzIDMuNDktMi4xMzcgNC41OTF6IiBmaWxsPSJyZ2JhKDI0NywyNDYsMjQ3LDEpIi8+PC9zdmc+");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-volume:hover .jw-svg-icon-volume-50 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEzIDcuMjJMOS42MDMgMTBINnY0aDMuNjAzTDEzIDE2Ljc4VjcuMjJ6TTguODg5IDE2SDVhMSAxIDAgMCAxLTEtMVY5YTEgMSAwIDAgMSAxLTFoMy44ODlsNS4yOTQtNC4zMzJhLjUuNSAwIDAgMSAuODE3LjM4N3YxNS44OWEuNS41IDAgMCAxLS44MTcuMzg3TDguODkgMTZ6bTkuOTc0LjU5MWwtMS40MjItMS40MjJBMy45OTMgMy45OTMgMCAwIDAgMTkgMTJjMC0xLjQzLS43NS0yLjY4NS0xLjg4LTMuMzkybDEuNDM5LTEuNDM5QTUuOTkxIDUuOTkxIDAgMCAxIDIxIDEyYzAgMS44NDItLjgzIDMuNDktMi4xMzcgNC41OTF6IiBmaWxsPSJyZ2JhKDIyOSw5LDIwLDEpIi8+PC9zdmc+");
}

.jw-svg-icon-volume-0 path {
  display: none;
}

.jw-svg-icon-volume-0 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEwIDcuMjJMNi42MDMgMTBIM3Y0aDMuNjAzTDEwIDE2Ljc4VjcuMjJ6TTUuODg5IDE2SDJhMSAxIDAgMCAxLTEtMVY5YTEgMSAwIDAgMSAxLTFoMy44ODlsNS4yOTQtNC4zMzJhLjUuNSAwIDAgMSAuODE3LjM4N3YxNS44OWEuNS41IDAgMCAxLS44MTcuMzg3TDUuODkgMTZ6bTE0LjUyNS00bDMuNTM2IDMuNTM2LTEuNDE0IDEuNDE0TDE5IDEzLjQxNGwtMy41MzYgMy41MzYtMS40MTQtMS40MTRMMTcuNTg2IDEyIDE0LjA1IDguNDY0bDEuNDE0LTEuNDE0TDE5IDEwLjU4NmwzLjUzNi0zLjUzNiAxLjQxNCAxLjQxNEwyMC40MTQgMTJ6IiBmaWxsPSJyZ2JhKDI0NywyNDYsMjQ3LDEpIi8+PC9zdmc+");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-volume:hover .jw-svg-icon-volume-0 {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEwIDcuMjJMNi42MDMgMTBIM3Y0aDMuNjAzTDEwIDE2Ljc4VjcuMjJ6TTUuODg5IDE2SDJhMSAxIDAgMCAxLTEtMVY5YTEgMSAwIDAgMSAxLTFoMy44ODlsNS4yOTQtNC4zMzJhLjUuNSAwIDAgMSAuODE3LjM4N3YxNS44OWEuNS41IDAgMCAxLS44MTcuMzg3TDUuODkgMTZ6bTE0LjUyNS00bDMuNTM2IDMuNTM2LTEuNDE0IDEuNDE0TDE5IDEzLjQxNGwtMy41MzYgMy41MzYtMS40MTQtMS40MTRMMTcuNTg2IDEyIDE0LjA1IDguNDY0bDEuNDE0LTEuNDE0TDE5IDEwLjU4NmwzLjUzNi0zLjUzNiAxLjQxNCAxLjQxNEwyMC40MTQgMTJ6IiBmaWxsPSJyZ2JhKDIyOSw5LDIwLDEpIi8+PC9zdmc+");
}

/*
Ícone de Tela Cheia.
 */
.jw-svg-icon-fullscreen-on path {
  display: none;
}

.jw-svg-icon-fullscreen-on {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIwIDNoMnY2aC0yVjVoLTRWM2g0ek00IDNoNHYySDR2NEgyVjNoMnptMTYgMTZ2LTRoMnY2aC02di0yaDR6TTQgMTloNHYySDJ2LTZoMnY0eiIgZmlsbD0icmdiYSgyNDcsMjQ2LDI0NywxKSIvPjwvc3ZnPg==");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-fullscreen:hover .jw-svg-icon-fullscreen-on {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIwIDNoMnY2aC0yVjVoLTRWM2g0ek00IDNoNHYySDR2NEgyVjNoMnptMTYgMTZ2LTRoMnY2aC02di0yaDR6TTQgMTloNHYySDJ2LTZoMnY0eiIgZmlsbD0icmdiYSgyMjksOSwyMCwxKSIvPjwvc3ZnPg==");
}

.jw-svg-icon-fullscreen-off path {
  display: none;
}

.jw-svg-icon-fullscreen-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTE4IDdoNHYyaC02VjNoMnY0ek04IDlIMlY3aDRWM2gydjZ6bTEwIDh2NGgtMnYtNmg2djJoLTR6TTggMTV2Nkg2di00SDJ2LTJoNnoiIGZpbGw9InJnYmEoMjQ3LDI0NiwyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jw-icon-fullscreen:hover .jw-svg-icon-fullscreen-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTE4IDdoNHYyaC02VjNoMnY0ek04IDlIMlY3aDRWM2gydjZ6bTEwIDh2NGgtMnYtNmg2djJoLTR6TTggMTV2Nkg2di00SDJ2LTJoNnoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

/* Added New Icons - 06-26-22 */

/* 
Icone de Share.
*/
.jwplayer.jw-skin-netflix .jw-settings-sharing .jw-svg-icon-sharing path {
  display: none;
}

.jwplayer.jw-skin-netflix .jw-settings-sharing .jw-svg-icon-sharing {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEzLjEyIDE3LjAyM2wtNC4xOTktMi4yOWE0IDQgMCAxIDEgMC01LjQ2NWw0LjItMi4yOWE0IDQgMCAxIDEgLjk1OSAxLjc1NWwtNC4yIDIuMjlhNC4wMDggNC4wMDggMCAwIDEgMCAxLjk1NGw0LjE5OSAyLjI5YTQgNCAwIDEgMS0uOTU5IDEuNzU1ek02IDE0YTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHptMTEtNmEyIDIgMCAxIDAgMC00IDIgMiAwIDAgMCAwIDR6bTAgMTJhMiAyIDAgMSAwIDAtNCAyIDIgMCAwIDAgMCA0eiIgZmlsbD0icmdiYSgyNDcsMjQ2LDI0NywxKSIvPjwvc3ZnPg==");
  background-repeat: no-repeat;
  background-position: center;
  -webkit-transition: 0.2s;
  transition: 0.2s;
  background-size: 100%;
}

.jwplayer.jw-skin-netflix .jw-settings-sharing:hover .jw-svg-icon-sharing {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEzLjEyIDE3LjAyM2wtNC4xOTktMi4yOWE0IDQgMCAxIDEgMC01LjQ2NWw0LjItMi4yOWE0IDQgMCAxIDEgLjk1OSAxLjc1NWwtNC4yIDIuMjlhNC4wMDggNC4wMDggMCAwIDEgMCAxLjk1NGw0LjE5OSAyLjI5YTQgNCAwIDEgMS0uOTU5IDEuNzU1ek02IDE0YTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHptMTEtNmEyIDIgMCAxIDAgMC00IDIgMiAwIDAgMCAwIDR6bTAgMTJhMiAyIDAgMSAwIDAtNCAyIDIgMCAwIDAgMCA0eiIgZmlsbD0icmdiYSgyMjksOSwyMCwxKSIvPjwvc3ZnPg==");
  background-repeat: no-repeat;
  background-position: center;
  -webkit-transition: 0.2s;
  transition: 0.2s;
  background-size: 100%;
}

/* 
ícone de áudio.
*/
.jwplayer.jw-skin-netflix .jw-svg-icon-audio-tracks path {
  display: none;
}

.jwplayer.jw-skin-netflix .jw-svg-icon-audio-tracks {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIgMThoMTB2Mkgydi0yem0wLTdoMTR2Mkgydi0yem0wLTdoMjB2MkgyVjR6bTE3IDExLjE3VjloNXYyaC0zdjdhMyAzIDAgMSAxLTItMi44M3pNMTggMTlhMSAxIDAgMSAwIDAtMiAxIDEgMCAwIDAgMCAyeiIgZmlsbD0icmdiYSgyNDcsMjQ3LDI0NywxKSIvPjwvc3ZnPg==");
  background-size: contain;
  background-repeat: no-repeat;
}

.jwplayer.jw-skin-netflix
  .jwplayer.jw-skin-netflix
  .jw-submenu-audioTracks:hover
  .jw-svg-icon-audio-tracks {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIgMThoMTB2Mkgydi0yem0wLTdoMTR2Mkgydi0yem0wLTdoMjB2MkgyVjR6bTE3IDExLjE3VjloNXYyaC0zdjdhMyAzIDAgMSAxLTItMi44M3pNMTggMTlhMSAxIDAgMSAwIDAtMiAxIDEgMCAwIDAgMCAyeiIgZmlsbD0icmdiYSgyMjksOSwyMCwxKSIvPjwvc3ZnPg==");
}

/*
Ícone de picture in picture.
*/
.jw-svg-icon-pip-on path {
  display: none;
}

.jwplayer.jw-skin-netflix .jw-svg-icon-pip-on {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIxIDNhMSAxIDAgMCAxIDEgMXY3aC0yVjVINHYxNGg2djJIM2ExIDEgMCAwIDEtMS0xVjRhMSAxIDAgMCAxIDEtMWgxOHptMCAxMGExIDEgMCAwIDEgMSAxdjZhMSAxIDAgMCAxLTEgMWgtOGExIDEgMCAwIDEtMS0xdi02YTEgMSAwIDAgMSAxLTFoOHptLTEgMmgtNnY0aDZ2LTR6TTYuNzA3IDYuMjkzbDIuMjUgMi4yNUwxMSA2LjVWMTJINS41bDIuMDQzLTIuMDQzLTIuMjUtMi4yNSAxLjQxNC0xLjQxNHoiIGZpbGw9InJnYmEoMjQ3LDI0NywyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jwplayer.jw-skin-netflix .jw-icon-pip:hover .jw-svg-icon-pip-on {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIxIDNhMSAxIDAgMCAxIDEgMXY3aC0yVjVINHYxNGg2djJIM2ExIDEgMCAwIDEtMS0xVjRhMSAxIDAgMCAxIDEtMWgxOHptMCAxMGExIDEgMCAwIDEgMSAxdjZhMSAxIDAgMCAxLTEgMWgtOGExIDEgMCAwIDEtMS0xdi02YTEgMSAwIDAgMSAxLTFoOHptLTEgMmgtNnY0aDZ2LTR6TTYuNzA3IDYuMjkzbDIuMjUgMi4yNUwxMSA2LjVWMTJINS41bDIuMDQzLTIuMDQzLTIuMjUtMi4yNSAxLjQxNC0xLjQxNHoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

.jwplayer.jw-skin-netflix .jw-svg-icon-pip-off path {
  display: none;
}

.jwplayer.jw-skin-netflix .jw-svg-icon-pip-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIxIDNhMSAxIDAgMCAxIDEgMXY3aC0yVjVINHYxNGg2djJIM2ExIDEgMCAwIDEtMS0xVjRhMSAxIDAgMCAxIDEtMWgxOHptMCAxMGExIDEgMCAwIDEgMSAxdjZhMSAxIDAgMCAxLTEgMWgtOGExIDEgMCAwIDEtMS0xdi02YTEgMSAwIDAgMSAxLTFoOHptLTEgMmgtNnY0aDZ2LTR6bS04LjUtOEw5LjQ1NyA5LjA0M2wyLjI1IDIuMjUtMS40MTQgMS40MTQtMi4yNS0yLjI1TDYgMTIuNVY3aDUuNXoiIGZpbGw9InJnYmEoMjQ3LDI0NywyNDcsMSkiLz48L3N2Zz4=");
  background-size: contain;
  background-repeat: no-repeat;
}

.jwplayer.jw-skin-netflix .jw-icon-pip:hover .jw-svg-icon-pip-off {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTIxIDNhMSAxIDAgMCAxIDEgMXY3aC0yVjVINHYxNGg2djJIM2ExIDEgMCAwIDEtMS0xVjRhMSAxIDAgMCAxIDEtMWgxOHptMCAxMGExIDEgMCAwIDEgMSAxdjZhMSAxIDAgMCAxLTEgMWgtOGExIDEgMCAwIDEtMS0xdi02YTEgMSAwIDAgMSAxLTFoOHptLTEgMmgtNnY0aDZ2LTR6bS04LjUtOEw5LjQ1NyA5LjA0M2wyLjI1IDIuMjUtMS40MTQgMS40MTQtMi4yNS0yLjI1TDYgMTIuNVY3aDUuNXoiIGZpbGw9InJnYmEoMjI5LDksMjAsMSkiLz48L3N2Zz4=");
}

/* Buffer Netflix */
.jwplayer.jw-skin-netflix .jw-svg-icon-buffer path {
  display: none;
}

.jwplayer.jw-skin-netflix .jw-svg-icon-buffer {
  background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACWCAMAAAAL34HQAAACfFBMVEUAAAAAAAC/AADlCBPlCBTlCBPkCBTlCBPVAADkCROqAADiABThAA/bAADkCRPlCBPiBxLkCBTcAAzkCBTfAADkCBPjAADkBxPkCBPMAADkBxHkCBTkCRPjCRPkCRPkCBTlCRPlCBPlCBTRAADlCRPkCRPkBRLkCBPjBhHlCBTlCBTgAArhBxLlCBTkCBPkCRLkCBPfBhPlCBTkCBPkCRTfCBDlCRTlCRLhCRHlCRHkCBTlBxTlCBPbABLjCBTlCBTfABDlCRTkBRCAAADkABLlCRPlCRLkCRLhCA/lBRDkCBPjCBLlCBPiBhHkBxLkCBPjCRTkCRPkCRPlCRTbAAzjCBPlCBTkCBTkCBTkCRTjCRPhBhLlCBPlCRTlCBPlCRPdABHjBxPkCBPiBw/jBhPlCRTkCRPlBxTlCBPjCBLkCRPkCRTlCBTkCBTkCRPkCRPlCBLkCBTlCBPkCBTgCA/kCBPjCBPeAAvkCBTjCBTlCBPkBxLkCRLkCBPkCBPkCRTlCBPkCRPlCRPkCRPlCBPiBRPiBhPkCBPkBxTjBxLjCRPfAAvZAA3kCRTjBw7lCRTlCBPlCRPkCRPkCBPlCBPkBw3jCBTkCBPjCRPlCBPjBxPYABTjBhLkCBPjBxLlCBPjBxLkCBLkBhLjBRPkCRPkCBPjBw7lCRTkCBPlCBPlCBTlCBTgBhPkCRPjABPkCBPkCBTlCRTiCBDlBxPlCBTlCBLlCBPkCBPkCBPiBRTkCBPhBhLlCBPlBxPjCBDlBxPkCRTkCRTlCBLkBxLkBxTkCBTeCBDkCBPjCBTkBxHlCBTkCRPkCRTkBRDjBRPiBhPkBxTlCBLkCBPlCRTfMlk/AAAA03RSTlMAAQT+wvH4/QbwAxoRB+O4RsAW2wj6CWn5Ckz2snbK967fxAuvlTjGLfP0GUW3fFbTKKaXtCDNOjtYqE37DkD1EM4vAhywHXIiMcVl4CxwelrHyOgVncPcmY93K0TpupMPboYjUerlTodj0rOcp5arYbW5giG8XBdmW6WMVdhD0IiQkuTWNVCgaIuUGBTPJefUkbGj4SaAeXikbA1TX4r8b31UNuy7JHV718GbKckbotrMPmvefvKEYDShKtVqP4mOc2JxjUEfXoFLmu/RMDdPZ3+9Zu7L6QAABANJREFUeF7t2FVzXFcQBOC+y2JmZrLFaBKD2ZLMHDtmihliZnaYmZmZmbn/UM7d3bJkWZWHPOT2Q75fMHXqzPTU4N9a9sRdwxEJt0FI6iMLTjEk34KG7vhDlRwxBwr2V8fyBovgvJZD6RyrAw7b0Myb+ZPhqPhcjicXTvpsIcflXg7n3DuR48vbB8dkrEnneHyeuYlwzNEC3qwiO6c1Bs55uMHNsdYtjg/AUaUFHMO3Y7ILzrJypvBGd6RFw2nRYxvQkymQzK8kcTR3cSkE/OjlaHFdUPC2n6PUHoWEdznKe/0uKLBOcpTGKEiwtnJEhMzCvoojZvRBxOe8zv2YCyLu53XeTKioGcnmWbOhojSPYRxMhIqmFQzjrlSoiGlmGHsDkFHCMG5zQcZhhjFbqKq1XoYlJEOG5WFY81ToeIhh66OgY08lQ/KehpC9DNsHITUMWwUhybMYsjkZQuYyJOtjCKmqYEgalGxnyEsWhET5GJReByVLGHIflMxvZ9AbMVCyhiFPQUnMMwx6FVLmMWQapCQwKA5S6jQf63YGvQkt4ZBug5TpDLrHBSm7GfQktGymzb0HUgYYtBBaNjHoALR8RNuUaGgpoC0BWvoYlAPJmC6HYvLEQkwcbecgJpa289CymkHToaWFtiwXtDxKWyHEPEBbCcTcSdvXELODtkyIKaStDmKSaPgDEHOKxjDUrKPxItRE0CiDmiwaO6HmcRp3Q42PxlaouUbjdag5TWMS1JTRyIeanTS2QM2DNFZCzQnJLRAv0OiEmg9orICaD2krgpgMP43ZkNwDJ0NNMY1boGY3je1Qs4GGB2oSaURYmn++HGou0vgUajJp1ENNkU/xSAk8S+M5qOmn8TzUvOYnOQQ5u0i6e6BmnmYspnol7xB4WXPQd0medYGVJL1FUDOBxkzIuUKy1oKagzTOQk3kaZK5kHOWRjzkDEqu9HiLxq2Q00jynWSoaaokWQ05c0i290BN9xDJbMiZnaIZQUtJVqyFGmsLybJIqIkuIPk+5JxJJ92CQ/UAyYplkHOcZFIH1Fj1JPcGoCaQQLLegproYySXQM7lWpI5kJP4CcmlkHPpCMmNkLM/l2SJBTUZxSQnxUBN9xckC+dDTloKGVsKOS3ryZQvLai53EtyYiLkbPKSw/GQ0xdHuhd3QM5XEeS1w5BTdc5NNl6FnDMzyJSLVZDTdoTMO3EJaiIPHiOzvumBnOVx5JRJ31pQU97gJRfNjYKajLZeH/2eOd9BzdTv8yPIzuMTUiHG1fqDp50+z4Wapn9oEpcjpU1P+2nGz6z8Jf/C+QkDqyMRBmvqwLTWX69GFcE5Vb/9/sefDcWDnVeG/sretuDkxur+mZO7AvgP/e9vtgtrs8pPMe8AAAAASUVORK5CYII=");
  background-size: contain;
  background-repeat: no-repeat;
}

</style><!-- Player -->
  <div id="player"></div><!-- ADBlock Modal -->
  <div class="modal">
   <div class="modal-container">
    <div class="modal-header">
     <img src="https://studio.blender.org/static-studio/films/images/sprite-fright/story.22d84f0a3410.png" alt="backdrop" class="backdrop"> <strong>🛑 ADBlock Detected! 🛑</strong> <button type="button" aria-label="Close" id="close"> <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEyIDEwLjU4Nmw0Ljk1LTQuOTUgMS40MTQgMS40MTQtNC45NSA0Ljk1IDQuOTUgNC45NS0xLjQxNCAxLjQxNC00Ljk1LTQuOTUtNC45NSA0Ljk1LTEuNDE0LTEuNDE0IDQuOTUtNC45NS00Ljk1LTQuOTVMNy4wNSA1LjYzNnoiIGZpbGw9InJnYmEoMjQ3LDI0NywyNDcsMSkiLz48L3N2Zz4=" alt="close"> </button>
    </div>
    <div class="modal-body">
     <span>Ads do help us to keep website running, so please support us by whitelisting our site in your Adblocking software. Apart from your browser adblocker, you may have to whitelist us in your VPN/Security software's adblockers as well. Once done, just refresh this web page.</span>
    </div>
   </div>
  </div>
  <script src="https://content.jwplatform.com/libraries/KB5zFt7A.js"></script>
  <script>
          function getParameterByName(name) {
              name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
              var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                  results = regex.exec(location.search);
              return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
          }
              var getURL  = getParameterByName('get');
              var getIMG  = getParameterByName('img');
              var getTITU  = getParameterByName('titu');
              var getLang = getParameterByName('lang');

        if (getURL == "#") {alert('Vuelve a la pÃƒÆ’Ã‚Â¡gina anterior');}
        if (getIMG == "#") {alert('Vuelve a la pÃƒÆ’Ã‚Â¡gina anterior');}

      </script>
  <script>
const playerInstance = jwplayer("player").setup({
  controls: true,
  autostart: false,
  playbackRateControls: true,
  sharing: false,
  rightclick: true,
  displaytitle: true,
  displaydescription: true,


  skin: {
    name: "netflix"
  },

  

  captions: {
    color: "#FFF",
    fontSize: 14,
    backgroundOpacity: 0,
    edgeStyle: "raised"
  },

  playlist: [
    {
      title: (getTITU),
      description: "Estas viendo en darkplus",
      image: (getIMG),
      sources: [
        {
          file:
            "",
          label: "default",
          stretching : "exactfit",
          default: true
        }
      ],
      captions: [
        {
          file:
            "",
          label: "default",
          kind: "captions"
        }
      ]
    }
  ],
  advertising: {
    client: "vast",
    schedule: [
      {
        offset: "pre",
        tag:
          ""
      }
    ]
  }
});

playerInstance.on("ready", function () {
  

  // Move the timeslider in-line with other controls
  const playerContainer = playerInstance.getContainer();
  const buttonContainer = playerContainer.querySelector(".jw-button-container");
  const spacer = buttonContainer.querySelector(".jw-spacer");
  const timeSlider = playerContainer.querySelector(".jw-slider-time");
  buttonContainer.replaceChild(timeSlider, spacer);

  // Detect adblock
  playerInstance.on("adBlock", () => {
    const modal = document.querySelector("div.modal");
    modal.style.display = "flex";

    document
      .getElementById("close")
      .addEventListener("click", () => location.reload());
  });

  // Forward 10 seconds
  const rewindContainer = playerContainer.querySelector(
    ".jw-display-icon-rewind"
  );
  const forwardContainer = rewindContainer.cloneNode(true);
  const forwardDisplayButton = forwardContainer.querySelector(
    ".jw-icon-rewind"
  );
  forwardDisplayButton.style.transform = "scaleX(-1)";
  forwardDisplayButton.ariaLabel = "Forward 10 Seconds";
  const nextContainer = playerContainer.querySelector(".jw-display-icon-next");
  nextContainer.parentNode.insertBefore(forwardContainer, nextContainer);

  // control bar icon
  playerContainer.querySelector(".jw-display-icon-next").style.display = "none"; // hide next button
  const rewindControlBarButton = buttonContainer.querySelector(
    ".jw-icon-rewind"
  );
  const forwardControlBarButton = rewindControlBarButton.cloneNode(true);
  forwardControlBarButton.style.transform = "scaleX(-1)";
  forwardControlBarButton.ariaLabel = "Forward 10 Seconds";
  rewindControlBarButton.parentNode.insertBefore(
    forwardControlBarButton,
    rewindControlBarButton.nextElementSibling
  );

  // add onclick handlers
  [forwardDisplayButton, forwardControlBarButton].forEach((button) => {
    button.onclick = () => {
      playerInstance.seek(playerInstance.getPosition() + 10);
    };
  });
});

</script><!-- JAVASCRIPT -->
  <script>
      document.addEventListener("contextmenu", (e) => {
        e.preventDefault();
      });
      document.addEventListener("keydown", (e) => {
        e.preventDefault();
        if (e.keyCode == 123) {
          return false;
        }
      });
    </script>
 <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4772667&101" alt="estadisticas web" border="0"></a></noscript>
<!-- Histats.com  END  -->
