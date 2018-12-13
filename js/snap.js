
 let width = 500,
     height = 0,
     streaming = false;

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const photos = document.getElementById('photos');
const photoButton = document.getElementById('capture');
const photoFilter = document.getElementById('filter');


if (window.File && window.FileReader && window.FileList && window.Blob) {
  document.getElementById('files').addEventListener('change', handleFileSelect, false);
} else {
  alert('The File APIs are not fully supported in this browser.');
}

function handleFileSelect(evt) {
  var arr = (document.getElementById('files').value).split(".");
  var ext = arr[arr.length - 1];
  var f = evt.target.files[0];
  var reader = new FileReader();
  reader.onload = (function(theFile) {
    return function(e) {
      var binaryData = e.target.result;
      var base64String = (window.btoa(binaryData));
      document.getElementById('upload').value = base64String;
    };
  })(f);
  reader.readAsBinaryString(f);
}

navigator.getUserMedia = navigator.getUserMedia ||navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUsermedia || navigator.oGetUserMedia;
if(navigator.getUserMedia){
    navigator.mediaDevices.getUserMedia({video: true, audio: false})
        .then(function (stream) { video.srcObject = stream; video.play(); })
        .catch(function (err) { console.log(`error: ${$err} `); } )
}


video.addEventListener('canplay', function (e) { if(!streaming) { height = video.videoHeight / (video.videoWidth / width); video.setAttribute('width', width); video.setAttribute('height', height); canvas.setAttribute('width', width); canvas.setAttribute('height', height); streaming = true;}}, false);

photoButton.addEventListener('click', function(e) { takePicture(); e.preventDefault(); } , false);


photoFilter.addEventListener('change', function(e) {
    filter =  e.target.value;
    document.getElementById("overlay").src = filter;
    document.getElementById("overlaysend").value = document.getElementById("filter").value;
}
);


function takePicture () { const context = canvas.getContext('2d');  if (width && height) { canvas.width = width; canvas.height = height; } context.drawImage(video, 0, 0, width, height);

const imgURL = canvas.toDataURL('image/png');

toString(imgURL);

img = imgURL.split(",")[1];
document.getElementById("upload").value = img;
}