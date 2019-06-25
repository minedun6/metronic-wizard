<transition name="fade">
    <div class="row step1" v-if="currentStep == 3">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-paper-clip font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Visite</span>
                    </div>
                    <div class="actions">
                        <button class="btn btn-success" type="button" v-on:click="previous">
                            <i class="fa fa-arrow-left"></i> Précedent
                        </button>
                        <button class="btn btn-info" type="button" v-on:click="submit(currentStep)">
                            Enregistrer <i class="fa fa-upload"></i>
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control datepicker" id="dateVisite" placeholder="Date mission" v-model="stepsData[3]['visite'].dateVisite">
                                <label for="form_control_1">Date mission</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Lieu">
                                <label for="form_control_1">Lieu</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-info">
                                <select class="form-control" v-model="stepsData[3]['visite'].typeVisite">
                                    <option value="1">M</option>
                                    <option value="2">T</option>
                                    <option value="3">C</option>
                                </select>
                                <label for="form_control_1">Type Visite</label>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-15" >
                        <div class="col-md-12">
                            <div class="portlet box light">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-bolt"></i>Chocs défalqués
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-xs red-intense" data-toggle="modal" data-target="#addChocModal" data-backdrop="static" data-keyboard="false"><i class="fa fa-plus"></i> Ajouter un choc</a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="5%"> # </th>
                                                    <th width="20%"> Côté </th>
                                                    <th width="65%"> Pièce </th>
                                                    <th width="10%"> Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-if=" stepsData[3].visite.chocs.length == 0">
                                                    <td colspan="4" style="text-align:center">
                                                        Veuillez ajouter des chocs
                                                    </td>
                                                </tr>
                                                <tr v-for="(item, index) in stepsData[3].visite.chocs">
                                                    <td> @{{index + 1}} </td>
                                                    <td> @{{ item.cote }} </td>
                                                    <td> @{{ item.piece }} </td>
                                                    <td> <button class="btn btn-xs" style="color:red" v-on:click="removeChoc(item)"><i class="fa fa-trash"></i></button> </td>
                                                </tr>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-bottom-15">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <ul class="col-md-offset-4 nav nav-tabs ">
                                    <li class="active">
                                        <a href="#tab_15_1" data-toggle="tab"> Descriptif </a>
                                    </li>
                                    <li>
                                        <a href="#tab_15_2" data-toggle="tab"> Décision </a>
                                    </li>
                                    <li>
                                        <a href="#tab_15_3" data-toggle="tab"> Estimation </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_15_1">
                                        <textarea cols="4" class="form-control" v-model="stepsData[3]['visite'].decriptif"></textarea>
                                    </div>
                                    <div class="tab-pane" id="tab_15_2">
                                        <textarea cols="4" class="form-control" v-model="stepsData[3]['visite'].decision"> </textarea>
                                    </div>
                                    <div class="tab-pane" id="tab_15_3">
                                        <div class="col-md-3 col-md-offset-3">
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Dt</span>
                                                    <input type="number" max="4000" class="form-control" v-model="stepsData[3]['visite'].estimation" placeholder="">
                                                    <span class="input-group-addon">.00</span>
                                                    <label for="form_control_1">Estimation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal container fade in" data-width="85%" id="addChocModal" tabindex="-1" aria-hidden="false">

            <div class="modal-header">
                <div class="caption">
                    <i class=" icon-magnifier-add font-blue"></i>
                    <span class="caption-subject font-blue bold uppercase">Nouveau choc</span>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input has-info">
                            <input type="text" class="form-control" id="form_control_1" placeholder="Côté" v-model="newChoc.cote">
                            <label for="form_control_1">Côté</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input has-info">
                            <input type="text" class="form-control" id="form_control_1" placeholder="Pièce" v-model="newChoc.piece">
                            <label for="form_control_1">Pièce</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input has-info">
                            <input type="text" class="form-control" id="form_control_1" placeholder="Dégâts" v-model="newChoc.degat">
                            <label for="form_control_1">Dégâts</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input has-info">
                            <input type="text" class="form-control" id="form_control_1" placeholder="Décision" v-model="newChoc.decision">
                            <label for="form_control_1">Décision</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" style="float:right; margin-left:4px;" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-info" v-on:click="addChoc">Ajouter</button>
            </div>

        </div>
    </div>
</transition>
