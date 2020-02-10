var form = document.querySelector('.js-image-form')
if(form != null){
  var preview = form.querySelector('.js-preview')
  var label = form.querySelector('label')
  var input = label.querySelector('input')
  var button = form.querySelector('button')
  input.addEventListener('change', updateImageDisplay);
}

function updateImageDisplay() {
  // 前回アップロードした情報を削除
  while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }

  var curFiles = input.files;

  // 画像ファイルがアップロードされてないとき
  if(curFiles.length === 0) {
    // labelを有効色にする
    label.classList.add('btn-primary')
    label.classList.remove('btn-secondary')

    // buttonを無効色にする
    button.classList.remove('btn-primary')
    button.classList.add('btn-secondary')
  // 画像ファイルがアップロードされたとき
  } else {
    // labelを無効色にする
    label.classList.add('btn-secondary')
    label.classList.remove('btn-primary')

    // buttonを有効色にする
    button.classList.add('btn-primary')
    button.classList.remove('btn-secondary')

    var list = document.createElement('ol');
    preview.appendChild(list);

    // 複数ファイル選択はできない
    if(validFileType(curFiles[0])) {
      var image = document.createElement('img');
      image.src = window.URL.createObjectURL(curFiles[0]);
      image.style.maxWidth = '50%'
      preview.appendChild(image);
    } else {
      var para = document.createElement('p');
      para.textContent = 'ファイル名 ' + curFiles[0].name + ' はファイル形式が有効ではありません。選択し直してください。';
      preview.appendChild(para);
    }
  }
}

var fileTypes = [
  'image/jpeg',
  'image/pjpeg',
  'image/png',
  'image/jpg' // 特定のIEでたまにこの値になるらしい
]

function validFileType(file) {
  for(var i = 0; i < fileTypes.length; i++) {
    if(file.type === fileTypes[i]) {
      return true;
    }
  }

  return false;
}