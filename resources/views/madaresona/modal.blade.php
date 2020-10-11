
<div class="modal fade" id="schoolModal" role="dialog" aria-labelledby="schoolModalLabel" data-backdrop="static"
     data-keyboard="false" aria-hidden="true" onsubmit="false">
    <div class="modal-dialog landing-modal" style="" role="document">
        <div class="modal-content">
            <div class="btn_close_modal btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow "
                 style="color: #262673 !important; padding: 5px  10px!important;">
                <div style="color: white"> close</div>
            </div>
            <div id="data">
            </div>

        </div>
    </div>
</div>
<style>
    .modal-content {
        background: #fff0 !important;
        box-shadow: none !important;
    }

    .landing-modal {
        margin: 0 auto !important;
        margin-top: 14% !important;
        width: 700px !important;
    }

    .btn_close_modal {
        background: #303030;
        position: absolute;
        font-weight: bold !important;
        left: 1px;
        top: 1px;
    }

    .btn_close_modal:hover {
        background: #747171 !important;
        outline-color: #fff !important;
        border: none !important;
    }

    @media (max-width: 1400px) {
        .landing-modal, modal-content {
            margin-top: 20% !important;
        }
    }
    @media (max-width: 900px) {
        .landing-modal, modal-content {
            margin-top: 20% !important;
        }
    }

    @media (max-width: 768px) {
        .landing-modal, modal-content {
            margin: 0px auto !important;
            width: 80% !important;
            margin-top: 50% !important;
        }
        .modal-content
        {
            right:0 !important;
        }

    }

</style>