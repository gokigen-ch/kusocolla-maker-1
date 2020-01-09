@extends('layouts.app')
@section('ogp')
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@daisuke7924" />
<meta name="twitter:creator" content="@daisuke7924" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:title" content="クソコラメーカー" />
<meta property="og:description" content="さぁみんなで、ごきげんになろう！" />
<meta property="og:image" content="{{url("/")}}/storage/image/{{$image->getFolder()}}/add.{{$image->getExtension()}}" />
@endsection

@section('content')
<div class="app-top">
    <div class="container">
        <div class="row justify-content-center">
            <!-- TODO: #15: ちゃんとレスポンシブ対応する -->
            <div class="col-md-8 justify-content-center text-center font-weight-bold">
                @if ($image != null)
                <p>合成した画像</p>
                <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/add.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                <p>顔だけ切り出した画像</p>
                @for($i =0; $i<$image->face_num; $i++)
                    <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                @endfor
                <p>アップロードした画像</p>
                <img src="{{url("/")}}/storage/image/{{$image->name}}" alt="image" style="max-width:100%">
                @endif

                <p class="font-weight-bold mb-1">URLをシェア</p>
                <!-- URLをちゃんと発行する -->
                <p class="font-weight-bold">https://kusocolla-maker.gokigen-ch.com/?img=tekitounamojiretsu12345678</p>
                
                
                    <div class="row d-flex justify-content-center my-3">
                        <!-- TODO: Twitter色にする -->
                        <button class="col-md-5 btn btn-twitter btn-lg btn-block py-3 text-white">
                            <i class="fab fa-twitter twitter-icon-size px-1"></i>Twitterでシェアする
                        </button>
                    </div>
                    <div class="row d-flex justify-content-center my-3">
                        <!-- TODO: LINE色にする -->
                        <button class="col-md-5 btn btn-line btn-lg btn-block py-3">
                            <i class="fab fa-line line-icon-size px-1"></i>LINEでシェアする
                        </button>
                    </div>

                    <div class="row d-flex justify-content-center my-3">
                        <button type=“button” onclick="location.href='{{ url('/') }}'" class="col-md-5 btn btn-primary btn-lg btn-block py-3">
                            ＼新しいクソコラを作る／
                        </button>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection