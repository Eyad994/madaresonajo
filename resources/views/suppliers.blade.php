@if(count($specialSuppliers) > 0)
    <div style="border: 1px solid #bebebe;margin-top: 50px">
        <div class="search-results-titlehome " style="text-align: center;float: right;width: 100%;">الموردون</div>
        @foreach($specialSuppliers as $supplier)
            <div class="input-group mordon_part" style="direction: rtl;width: 100%;padding: 10px;border-bottom: 1px solid #bebebe;">
                <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}" style="width: 25px;height: 25px;float: right">
                <span style="float: right;padding-right: 15px;padding-top: 5px;">{{ app()->getLocale() == 'ar' ? $supplier->name_ar : $supplier->name_en }}</span>
            </div>
        @endforeach
    </div>
@endif