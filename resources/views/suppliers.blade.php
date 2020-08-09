<style>
    .mordon_part:hover{
        background: #d6d8dc;
        cursor: pointer;
    }
</style>
@if(count($specialSuppliers) > 0)
    <div style=" box-shadow: 0 2px 4px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important; background: #fff;border-radius: 10px">
        <div class="search-results-titlehome " style="text-align: center;float: right;width: 100%;">الموردون</div>
        @foreach($specialSuppliers as $supplier)
            <div class="input-group mordon_part" style="direction: rtl;width: 100%;padding: 10px;border-bottom: 1px solid #bebebe;">
                <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}" style="width: 25px;height: 25px;float: right">
                <span style="float: right;padding-right: 15px;padding-top: 5px;">{{ app()->getLocale() == 'ar' ? $supplier->name_ar : $supplier->name_en }}</span>
            </div>
        @endforeach
    </div>
@endif