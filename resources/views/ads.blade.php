@if(count($ads) > 0)
    @foreach($ads as $ad)

        <div style="box-shadow: 0 2px 2px rgba(0, 0, 0, 0.11);border-radius: 10px; margin-top: 50px;">
            <a href="{{ $ad->url }}">
                <img src="{{ env('IMAGE_URL') }}/images/Advertisement/{{ $ad->img }}"
                     style="width: 100%;border-radius: 10px;">
            </a>
        </div>
    @endforeach
@endif