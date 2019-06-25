<transition name="fade">
    <div class="row step1" v-show="currentStep == 4">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-wrench font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Réparation</span>
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
                        <div class="col-md-12" style="text-align:center">
                            <div class="col-md-3"></div>
                            <label class="col-md-3 control-label" style="text-align: right">Epave?</label>
                            <div class="col-md-3" style="text-align:left">
                                <input type="checkbox" class="make-switch" id="test" data-size="mini" v-model="stepsData[4]['reparation'].toggle" data-on-text="Oui" data-off-text="Non">
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <transition name="fade">
                                <div class="portlet light" v-if="stepsData[4]['reparation'].epave">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-briefcase font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Gestion épave</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body" style="margin-top:0px;">
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" id="form_control" v-model="stepsData[4]['reparation'].epaveDetail.type">
                                                    <option value="technique">Technique</option>
                                                    <option value="economique">Economique</option>
                                                </select>
                                                <label for="form_control_1">Type Epave</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Dt</span>
                                                    <input type="number" class="form-control" id="" v-model="stepsData[4]['reparation'].epaveDetail.valeur" placeholder="">
                                                    <span class="input-group-addon">.00</span>
                                                    <label for="form_control_1">Valeur</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input has-info">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Dt</span>
                                                    <input type="number" class="form-control" id="" v-model="stepsData[4]['reparation'].epaveDetail.prejudice" readonly>
                                                    <span class="input-group-addon">.00</span>
                                                    <label for="form_control_1">Préjudice</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <transition name="fade">
                            <div class="portlet light" v-if="!stepsData[4]['reparation'].toggle">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" fa fa-money font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Gestion de facturation</span>
                                    </div>
                                </div>
                                <div class="portlet-body" style="margin-top:0px;">
                                    <div class="row">
                                        <div class="col-md-6" style="text-align:center">
                                            <button class="btn btn-success center-align" data-toggle="modal" data-target="#addDevisModal" data-backdrop="static" data-keyboard="false">
                                                <i class="fa fa-plus"></i> Nouveau Devis
                                            </button>
                                            <div class="table-responsive margin-top-15">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="20%"> N° Facture </th>
                                                            <th width="30%"> Date Facture</th>
                                                            <th width="20%"> Total T.T.C </th>
                                                            <th width="10%"> Conv</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-if=" stepsData[4].reparation.sommaireDevis.length == 0">
                                                            <td colspan="4" style="text-align:center">
                                                                Veuillez ajouter des Devis
                                                            </td>
                                                        </tr>
                                                        <tr v-for="(item, index) in stepsData[4].reparation.sommaireDevis">
                                                            <td> @{{ item.codeDevis}} </td>
                                                            <td> @{{ item.dateDevis }} </td>
                                                            <td> @{{ item.totalTTC}} </td>
                                                            <td> <button class="btn btn-xs" style="color:red" v-on:click="convertDevisFacture(item)"><i class="fa fa-trash"></i></button> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="text-align:center">
                                            <button class="btn btn-info center-align"><i class="fa fa-plus"></i> Nouvelle facture</button>
                                            <div class="table-responsive margin-top-15">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="20%"> N° Facture </th>
                                                            <th width="30%"> Date Facture</th>
                                                            <th width="20%"> Total T.T.C </th>
                                                            <th width="20%"> Preview</th>
                                                            <th width="10%"> Conv</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2017-01</td>
                                                            <td>1250.00</td>
                                                            <td>1250.00</td>
                                                            <td><button class="btn btn-danger btn-xs"><i class="fa fa-eye"></i></button></td>
                                                            <td><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </transition>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal Devis-->
        <div class="modal container fade in" data-width="85%" id="addDevisModal" tabindex="-1" aria-hidden="false">

            <div class="modal-header">
                <div class="caption">
                    <i class=" icon-magnifier-add font-blue"></i>
                    <span class="caption-subject font-blue bold uppercase">Nouvelle Devis</span>
                </div>
            </div>
            <div class="modal-body">
                <!--Debut Devis Pieces-->
                <!-- BEGIN PORTLET-->
                <div class="portlet light  bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-magnifier-add font-blue"></i>
                            <span class="caption-subject font-blue bold uppercase">Devis: Pieces</span>
                        </div>
                        <div class="actions">
                            <button type="button" class="btn btn-succes default" style="float:right; margin-left:4px;" v-on:click="addDevisPiece">Confirmer</button>
                        </div>
                    </div>
                    <div class="portlet-body row">
                        <!-- BEGIN FORM-->
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Nom Pièce" v-model="newDevis.devisPieces.nomPiece">
                                <label for="">Nom Pièce</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Prix Unitaire" v-model="newDevis.devisPieces.prixUnitaire">
                                <label for="">Prix Unitaire</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Quantité" v-model="newDevis.devisPieces.quantite">
                                <label for="">Quantité</label>
                            </div>
                        </div>
                        <!-- END FORM-->
                    </div>
                </div>
                <!--Fin Devis Pieces-->
                <!--Devis Main D'Oeuvre-->
                <div class="portlet light  bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-magnifier-add font-blue"></i>
                            <span class="caption-subject font-blue bold uppercase">Devis: Main d'Oeuvre</span>
                        </div>
                        <div class="actions">
                            <button type="button" class="btn default" style="float:right; margin-left:4px;" data-dismiss="modal" v-on:click="addDevisMainOeuvre">Confirmer</button>
                        </div>
                    </div>
                    <div class="portlet-body row">
                        <!-- BEGIN FORM-->
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Type" v-model="newDevis.devisMainOeuvre.typeMainOeuvre">
                                <label for="">Type</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Nombre Heure" v-model="newDevis.devisMainOeuvre.nombreHeure">
                                <label for="">Nombre Heure</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-info">
                                <input type="text" class="form-control" id="" placeholder="Prix Unitaire" v-model="newDevis.devisMainOeuvre.prixUnitaire">
                                <label for="">Prix Unitaire</label>
                            </div>
                        </div>
                        <!-- END FORM-->
                    </div>
                </div>
                <!--Fin Devis Main D'oeuvre-->
                <!--Debut Sommaire Devis-->
                <div class="portlet light  bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-magnifier-add font-blue"></i>
                            <span class="caption-subject font-blue bold uppercase">Sommaire de Devis</span>
                        </div>
                        <div class="actions">
                            <button type="button" class="btn default" style="float:right; margin-left:4px;" data-dismiss="modal">Confirmer</button>
                        </div>
                    </div>
                    <div class="portlet-body row">
                        <!-- BEGIN FORM-->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <label>Quantite</label>
                                        <div class="input-group">
                                            <input type="number" id="" placeholder="" class="form-control" v-model="newDevis.nombrePiece">
                                            <span class="input-group-addon">Elements</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <label>Sous Total</label>
                                        <div class="input-group">
                                            <input type="number" id="" placeholder="" class="form-control" v-model="newDevis.sousTotal">
                                            <span class="input-group-addon">Dt</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <label>Total Remise</label>
                                        <div class="input-group">
                                            <input type="number" id="" placeholder="" class="form-control" v-model="newDevis.totalRemise">
                                            <span class="input-group-addon">Dt</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <label>Total HT</label>
                                        <div class="input-group">
                                            <input type="number" id="" placeholder="" class="form-control" v-model="newDevis.totalHT">
                                            <span class="input-group-addon">Dt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <label>Total TVA</label>
                                        <div class="input-group">
                                            <input type="number" id="" placeholder="" class="form-control" v-model="newDevis.totalTaxes">
                                            <span class="input-group-addon">Dt</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input has-info">
                                        <label>FODEC</label>
                                        <div class="input-group">
                                            <input type="number" id="" placeholder="" class="form-control" v-model="newDevis.fodec">
                                            <span class="input-group-addon">Dt</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END PORTLET-->
                <!--Fin Sommaire Devis-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" style="float:right; margin-left:4px;" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-info" v-on:click="addDevis">Confirmer Devis</button>
            </div>

        </div>

    </div>
    <!--Fin Modal Devis-->
</transition>