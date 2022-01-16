    const judul = document.querySelector('#judul')
    const slug = document.querySelector('#slug')
    judul.addEventListener('change',function(){
        fetch('/dashboard/posts/checkSlug?judul='+judul.value)
        .then(response=>response.json())
        .then(data=>slug.value=data.slug)
    })

document.addEventListener('trix-file-accept', function (e) {
    e.preventDefault();
})
function previewimg() {
const gambar = document.getElementById('gambar');
const imgPreview = document.querySelector(".img-review");

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
