document.getElementById('activarAnimacion').addEventListener('click', function () {
    var progress = document.querySelector('.progress-line');
    var elemento = document.getElementById('activarAnimacion')
    var video = document.getElementById('video');
    var duracionVideoSegundos = video.duration; // Duración del video en segundos
    var duracionAnimacion = duracionVideoSegundos * 1000; // Convertir a milisegundos
  
  
    if (video.paused) {
        video.play(); // Iniciar el video al hacer clic si está pausado
        progress.style.transition = 'width ' + duracionAnimacion + 'ms';
        progress.style.width = '100%';
      } else {
        video.pause(); // Pausar el video si ya está reproduciéndose
        var progresoVideo = (video.currentTime / video.duration) * 100;
        progress.style.transition = 'none'; // Detener la animación de la barra de progreso
        progress.style.width = progresoVideo + '%'; // Establecer el ancho en la posición actual
    }
    
    // Iniciar la animación del botón al hacer clic
    setTimeout(function () {
      elemento.classList.remove('animacion-activa');
      void elemento.offsetWidth; // Reiniciar la animación
      elemento.classList.add('animacion-activa');
    }, duracionAnimacion);
  
    // Actualizar el botón según el progreso del video
    video.addEventListener('timeupdate', function () {
        if (!video.paused) {
          var progresoVideo = (1 - (video.currentTime / video.duration)) * 100;
          progress.style.left = progresoVideo + '%';
        }
      });
});
  
