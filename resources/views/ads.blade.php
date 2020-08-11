@if(count($ads) > 0)
    @foreach($ads as $ad)

        <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important; !important;border-radius: 10px; margin-top: 50px;">
            <a href="{{ $ad->url }}">
                <img src="{{ env('IMAGE_URL') }}/images/Advertisement/{{ $ad->img }}"
                     style="width: 100%;border-radius: 10px;">
            </a>
        </div>
    @endforeach
@endif