<a href="@if(isset($Advertisement)){{$Advertisement->url}}@endif ">
    <img href="" class="img" src="{{ env('IMAGE_URL') }}/images/{{$Advertisement->img}}" alt="" style=" width:100%; object-fit: cover;">
</a>