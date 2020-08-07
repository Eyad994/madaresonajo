@if(count($ads) > 0)
    @foreach($ads as $ad)
        <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;margin-top: 50px;">
            {{-- <img src="{{ env('IMAGE_URL') }}/Advertisement/{{ $ad->img }}" style="width: 100%;">--}}
            <img src="https://www.tenderjo.com/DataFiles/LOGO/AbuMoujehEngineeringandConstruction20160526100800Abu-Moujeh-Engineering-and-Construction.jpg" style="width: 100%;">
        </div>
    @endforeach
@endif