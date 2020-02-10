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
@section('kusocola')
    <div class="kusocolla">

        <div class="kusocolla__img-move move01">
            <div class="kusocolla__img__inner">
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-01.jpg" alt="">
            </div>
        </div>
        <div class="kusocolla__img-move move02">
            <div class="kusocolla__img__inner">
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-02.png" alt="">
            </div>
        </div>
        <div class="kusocolla__img-move move03">
            <div class="kusocolla__img__inner">
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-03.png" alt="">
            </div>
        </div>
        <div class="kusocolla__img-move move04">
            <div class="kusocolla__img__inner">
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-04.png" alt="">
            </div>
        </div>
        <div class="kusocolla__img-move move05">
            <div class="kusocolla__img__inner">
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-05.png" alt="">
            </div>
        </div>
        <div class="kusocolla__img-move move06">
            <div class="kusocolla__img__inner">
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-06.png" alt="">
            </div>
        </div>
        <div class="kusocolla__img-move move07">
            <div class="kusocolla__img__inner">
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-07.png" alt="">
            </div>
        </div>
    </div>
@endsection