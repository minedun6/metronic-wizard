<transition name="fade">
    <div class="row step1" v-if="currentStep == 0">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-paper-clip font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Ordre de mission</span>
                    </div>
                    <div class="actions">
                        <button class="btn btn-info" type="button" v-on:click="submit(currentStep)">
                            Enregistrer <i class="fa fa-upload"></i>
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <br />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control datepicker" id="dateMission" placeholder="Date mission" v-model="stepsData[0]['ordre'].dateMission">
                                <label for="form_control_1">Date mission</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control datepicker" id="dateExamen" placeholder="Date Examen" v-model="stepsData[0]['ordre'].dateExamen">
                                <label for="form_control_1">Date Examen</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-info">
                                <select class="form-control" v-model="stepsData[0].assuranceAID">
                                    
                                </select>
                                <label for="form_control_1">Assurance</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-info">
                                <select class="form-control" v-model="stepsData[0].agenceAID">
                                    
                                    <option value="1">value1</option>
                                    <option value="2">value2</option>
                                </select>
                                <label for="form_control_1">Agence</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Matricule" v-model="stepsData[0]['ordre'].matriculeVehicule">
                                <label for="form_control_1">Matricule</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Numéro sinistre" v-model="stepsData[0]['ordre'].numSinistre">
                                <label for="form_control_1">Numéro sinistre</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-info">
                                <select class="form-control" v-model="stepsData[0]['ordre'].typeGarantie">
                                    
                                </select>
                                <label for="form_control_1">Type garantie</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Nom Prénom assuré" v-model="stepsData[0]['ordre'].nomAssure">
                                <label for="form_control_1">Nom Prénom assuré</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Lieu visite" v-model="stepsData[0]['ordre'].lieuVisite">
                                <label for="form_control_1">Lieu visite</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="form_control_1" placeholder="Distance de déplacement" v-model="stepsData[0]['ordre'].distance">
                                <label for="form_control_1">Distance de déplacement</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</transition>