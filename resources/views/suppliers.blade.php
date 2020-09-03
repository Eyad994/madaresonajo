<style>
    .mordon_part:hover{
        background: #d6d8dc;
        cursor: pointer;
    }
</style>
@if(count($specialSuppliers) > 0)
    <div style=" box-shadow: 0 2px 2px rgba(0, 0, 0, 0.11); border-radius: 5px">
        <div class="search-results-titlehome " style="text-align: center;float: right;width: 100%;">{{__('index.suppliers')}}</div>
        @foreach($specialSuppliers as $supplier)
            <a  href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}" class="input-group mordon_part"
                @if((app()->getLocale() == 'ar'))
                style="width: 100%;padding:10px;border-bottom: 1px solid #bebebe; direction: rtl; text-align: right"
                @else
                style="width: 100%;padding:10px;border-bottom: 1px solid #bebebe; direction:ltr; text-align:left"
                @endif>


                <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}" style="width: 25px;height: 25px;">
                <span style="padding-right: 15px; padding-left:15px;padding-top: 5px;">{{ app()->getLocale() == 'ar' ? $supplier->name_ar : $supplier->name_en }}</span>

            </a>
        @endforeach
    </div>
@endif