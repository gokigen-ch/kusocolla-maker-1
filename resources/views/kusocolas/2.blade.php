@extends('layouts.kusocola')
@section('ogp')
<meta name="twitter:card" content="summary_large_image" />
<!-- TODO: クソコラをTwitterシェアするときの文言、ハッシュタグ、アカウントをちゃんと考えたい #23 -->
<meta name="twitter:site" content="@daisuke7924" />
<meta name="twitter:creator" content="@daisuke7924" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:title" content="クソコラメーカー" />
<meta property="og:description" content="さぁみんなで、ごきげんになろう！" />
<!-- TODO: クソコラをSNSシェアするときのOGPを考え直したい #23 -->
<meta property="og:image" content="{{url("/")}}/storage/image/{{$image->getFolder()}}/add.{{$image->getExtension()}}" />
@endsection
@section('preload')
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-01.jpg" as="image">
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-02.jpg" as="image">
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-03.jpg" as="image">
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-04.jpg" as="image">
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-05.jpg" as="image">
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-06.jpg" as="image">
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-07.jpg" as="image">
<link rel="preload" href="{{url("/")}}/images/kusocolla02/kusocolla02-08.jpg" as="image">
@endsection
@section('kusocola')
    <div class="kusocolla02">
        <div class="kusocolla02__img__inner">
            <div class="kusocolla02__face face-01">
                @for($i =0; $i<$image->face_num; $i++)
                    <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                @endfor
            </div>
            <div class="kusocolla02__face face-02">
                @for($i =0; $i<$image->face_num; $i++)
                    <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                @endfor
            </div>
            <div class="kusocolla02__face face-03">
                @for($i =0; $i<$image->face_num; $i++)
                    <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                @endfor
            </div>
            <div class="kusocolla02__face face-04">
                @for($i =0; $i<$image->face_num; $i++)
                    <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                @endfor
            </div>
        <i class="fas fa-heart kusocolla02__heart"></i>
        <p class="kusocolla02__text">何か言葉を入れたい</p>
        </div>
    </div>
@endsection