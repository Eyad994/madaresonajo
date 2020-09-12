<div class="modal fade" id="schoolModal" role="dialog" aria-labelledby="schoolModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true" onsubmit="false" >
    <div class="modal-dialog landing-modal" style="" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> </h5>
                <a href="#" class="far fa-times-circle" data-dismiss="modal" style="font-size: 20px;"></a>

            </div>
            <div class="modal-body">
                <div>
                    <img src="{{env('IMAGE_URL').'/mainAdv.jpg' }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .landing-modal{
        margin: 0 auto !important;
        margin-top: 14% !important;
        width: 40% !important;
    }
    @media(max-width: 775px)
    {
        .landing-modal{
            margin-top: 50% !important;
            height: 45% !important;;
        }
    }

</style>