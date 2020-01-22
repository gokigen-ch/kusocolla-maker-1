    <div class="kusocolla">
        <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-01.jpg" alt="">
        <div class="kusocolla__face face-01">
            @for($i =0; $i<$image->face_num; $i++)
                <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
            @endfor
        </div>
        <div class="kusocolla__face face-02">
            @for($i =0; $i<$image->face_num; $i++)
                <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
            @endfor
        </div>
        <div class="kusocolla__face face-03">
            @for($i =0; $i<$image->face_num; $i++)
                <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
            @endfor
        </div>
        <div class="kusocolla__face face-05 move02">
            @for($i =0; $i<$image->face_num; $i++)
                <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
            @endfor
        </div>
        <div class="kusocolla__img-move move01">
            <div class="kusocolla__img__inner">
                <div class="kusocolla__face face-04">
                    @for($i =0; $i<$image->face_num; $i++)
                        <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                    @endfor
                </div>
                <img class="kusocolla__img-fixed" src="/images/kusocolla01/kusocolla01-02.png" alt="">
            </div>
        </div>
    </div>
