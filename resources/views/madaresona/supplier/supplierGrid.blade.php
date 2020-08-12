@foreach($suppliers as $supplier)
    <article class="box">
        <figure class="col-xs-3">
            <a title="Abu Moujeh Engineering and Construction"
               href="SuppliersDetails.aspx?opc_id=465 ">
                <img src="{{ env('IMAGE_URL') }}/images/{{ $supplier->name_en }}/{{ $supplier->supplier_logo }}"
                     style="height: 115px;width: 160px;">
            </a>
        </figure>
        <div class="details col-xs-9 clearfix">
            <div class="col-sm-8">
                <div class="clearfix">
                    <h4 class="box-title">
                        <a title="{{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}"
                           href="# ">{{(app()->getLocale() == 'ar') ?$supplier->name_ar :$supplier->name_en }}</a>
                        <small style=" {{(app()->getLocale() == 'ar') ? 'text-align: right;':''}}">{{(app()->getLocale() == 'en')? $supplier->city->city_name_en :$supplier->city->city_name_ar}}
                            &nbsp;- {{(app()->getLocale() == 'en')? 'Jordan' :'اﻷردن'}}</small>
                    </h4>

                </div>
                <div class="amenities" style="text-align: right ">
                    <ul>
                        <li>
                            <a href="tel:{{ $supplier->phone }}" target="_blank">
                                <i style="cursor: pointer;padding: 6px"
                                   class="soap-icon-phone circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}#Suppliers-Contacts-Tab"
                               target="_blank">
                                <i style="cursor: pointer;padding: 6px"
                                   class="soap-icon-message circle"></i>
                            </a>

                        </li>
                        <li>
                            <a href="{{ $supplier->website }}" target="_blank">
                                <i style="cursor: pointer;padding: 6px"
                                   class="soap-icon-globe circle"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}#Suppliers-Contacts-Tab" target="_blank">
                                <i style="cursor: pointer;padding: 6px"
                                   class="soap-icon-departure circle"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 character">
                <dl class="" style="text-align: right;">
                    {{--<dt class="skin-color">الشخص المسؤول</dt>
                    <dd>م. مهند ابوموجة</dd>--}}
                    <dt class="skin-color">الهاتف</dt>
                    <dd>{{$supplier->phone}}</dd>
                    <dt class="skin-color">المنطقة</dt>
                    <dd>{{(app()->getLocale() == 'en') ?$supplier->region->area_name_en:$supplier->region->area_name_ar }}</dd>
                    <dt class="skin-color" style="font-size: 9px;">البريد الالكتروني</dt>
                    <dd>{{ $supplier->email }}</dd>
                </dl>
            </div>
            <div class="action col-xs-6 col-sm-2">
                <a href="/{{ app()->getLocale() }}/supplier/data/{{$supplier->id}}/{{ preg_replace('/[ ]+/', '-', app()->getLocale() == 'en' ? trim($supplier->name_en) : trim($supplier->name_ar)) }}"
                   class="button btn-small yellow full-width"> اقرأ المزيد </a>
            </div>
        </div>
    </article>
@endforeach