Webcam.set({

  width: 330,
  height: 330,

  dest_width: 330,
  dest_height: 330,

  image_format: 'jpeg',
  jpeg_quality: 90,
  force_flash: false
});

Webcam.attach("#previewFoto");

function tirarFoto() {
  Webcam.snap((data) => {

    document.getElementById('fotoCapturada').innerHTML =
      '<img class="imagemCamera img-circle img-fluid elevation-2 img-fluid" src="' + data +
      '"><input type="hidden" name="foto" value="' + data + '">';
  });
}