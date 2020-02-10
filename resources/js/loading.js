// loadingのdivを取得
let loading = document.getElementById('js-loading-wait');
// contentsのdivを取得
let contents = document.getElementById('js-loading-contents');

if((loading != null) && (contents != null)){
    // 読み込みが完了したら
    window.addEventListener('load', function () {
        console.log('画面読み込み完了');
        // loadingのdivを非表示に
        loading.style.display = 'none';
        // contentsのdivを表示
        contents.classList.remove('js-loading-hidden');
    });
}