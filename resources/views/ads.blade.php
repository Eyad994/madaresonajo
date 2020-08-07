@if(count($ads) > 0)
    @foreach($ads as $ad)
        <div style="border: 1px solid #bebebe;margin-top: 50px">
            <img src="{{ env('IMAGE_URL') }}/Advertisement/{{ $ad->img }}" style="width: 100%;">
        </div>
    @endforeach
@endif