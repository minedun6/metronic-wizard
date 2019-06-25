<transition name="fade">
    <div class="row step1" v-if="currentStep == 5">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-paper-clip font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Constat</span>
                    </div>
                    <div class="actions">
                        <button class="btn btn-success" type="button" v-on:click="previous">
                            <i class="fa fa-arrow-left"></i> Précedent
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</transition>