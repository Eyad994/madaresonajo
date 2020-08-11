<style>
    .mordon_part:hover{
        background: #d6d8dc;
        cursor: pointer;
    }
</style>
@if(count($specialSuppliers) > 0)
    <div style=" box-shadow: 0 2px 2px rgba(0, 0, 0, 0.11); border-radius: 5px">
        <div class="search-results-titlehome " style="text-align: center;float: right;width: 100%;">الموردون</div>
        @foreach($specialSuppliers as $supplier)
            <a  href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}" class="input-group mordon_part" style="direction: rtl;width: 100%;padding:10px;border-bottom: 1px solid #bebebe;">
                <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}" style="width: 25px;height: 25px;float: right">
                <span style="float: right;padding-right: 15px;padding-top: 5px;">{{ app()->getLocale() == 'ar' ? $supplier->name_ar : $supplier->name_en }}</span>

            </a>
        @endforeach
    </div>
@endif