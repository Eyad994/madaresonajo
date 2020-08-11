@if(count($ads) > 0)
    @foreach($ads as $ad)
        <a href="{{ $ad->link }}" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;margin-top: 50px; !important;border-radius: 10px;">
             <img src="{{ env('IMAGE_URL') }}/images/Advertisement/{{ $ad->img }}" style="width: 100%;border-radius: 10px;">
        </a>
    @endforeach
@endif