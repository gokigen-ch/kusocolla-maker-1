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
