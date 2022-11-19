$("#step-1").css("opacity", "1");
$("#step-2").css("opacity", "1");
$("#step-3").css("opacity", "1");
$("#step-4").css("opacity", "1");

function previewImg() {
  const foto = document.querySelector("#form_foto");

  const imgPreview = document.querySelector(".imgPreview");

  const fileFoto = new FileReader();

  fileFoto.readAsDataURL(foto.files[0]);

  fileFoto.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}
