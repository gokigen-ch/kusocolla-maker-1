    <div class="kusocolla02">
        <div class="kusocolla02__img-move move01">
            <div class="kusocolla02__img__inner">
                <div class="kusocolla02__face face-01">
                    @for($i =0; $i<$image->face_num; $i++)
                        <img src="{{url("/")}}/storage/image/{{$image->getFolder()}}/{{$i}}.{{$image->getExtension()}}" alt="image" style="max-width:100%">
                    @endfor
                </div>
            </div>
        </div>
    </div>
