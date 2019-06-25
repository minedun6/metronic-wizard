<transition name="fade">
    <div class="row step1" v-if="currentStep == 2">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-users font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Parties de La Mission</span>
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
                    <div class="portlet ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-users font-blue-chambray"></i>
                                <span class="caption-subject font-blue-chambray bold uppercase">Individus</span>


                            </div>
                            <div class="actions">
                                <button class="btn btn-info" data-toggle="collapse" data-target="#personnes">Formulaire</button>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div id="personnes" class="collapse">
                                <br />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['assureA'].nomPrenom" placeholder="Nom Prénom assuré">
                                            <label for="form_control_1">Nom Prénom assuré A</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['assureB'].nomPrenom" placeholder="">
                                            <label for="form_control_1">Nom Prénom assuré B</label>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['assureA'].adressePersonne" placeholder="">
                                            <label for="form_control_1">Adresse Assuré A</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['assureB'].adressePersonne" placeholder="">
                                            <label for="form_control_1">Télephone Assuré A</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['assureA'].telephonePersonne" placeholder="">
                                            <label for="form_control_1">Adresse Assuré A</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['assureB'].bbbtelephonePersonneplaceholder=" ">
                                            <label for="form_control_1">Télephone Assuré B</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-users font-blue-chambray"></i>
                                            <span class="caption-subject font-blue-chambray bold uppercase">Conducteurs</span>
                                        </div>
                                        <div class="actions">
                                            Ajouter les Conducteurs<button class="btn btn-circle" data-toggle="collapse" data-target="#conducteurs"><i class="glyphicon glyphicon-link"></i></button>
                                        </div>

                                    </div>
                                    <div class="portlet-body">
                                        <div id="conducteurs" class="collapse">
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurA'].nomPrenom" placeholder="">
                                                        <label for="conducteur">Nom Prénom Conducteur A</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurB'].nomPrenom" placeholder="">
                                                        <label for="">Nom Prénom Conducteur B</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurA'].adressePersonne" placeholder="">
                                                        <label for="">Adresse Conducteur A</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurA'].telephonePersonne" placeholder="">
                                                        <label for="">Télephone Conducteur A</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurB'].adressePersonne" placeholder="">
                                                        <label for="">Adresse Conducteur B</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurB'].telephonePersonne" placeholder="">
                                                        <label for="">Télephone Conducteur B</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurA'].NumPermis" placeholder="">
                                                        <label for="">Permis Conducteur A</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control datepicker" v-model="stepsData[2]['parties']['conducteurA'].DatePermis" placeholder="">
                                                        <label for="">Date Permis Conducteur A</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control" v-model="stepsData[2]['parties']['conducteurB'].NumPermis" placeholder="">
                                                        <label for="">Adresse Conducteur B</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-md-line-input has-info">
                                                        <input type="text" class="form-control datepicker" v-model="stepsData[2]['parties']['conducteurB'].DatePermis" placeholder="">
                                                        <label for="">Date Permis Conducteur B</label>
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
                <div class="portlet-body">
                    <div class="portlet lightgrey">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-car font-blue-chambray"></i>
                                <span class="caption-subject font-blue-chambray bold uppercase">Vehicule Mandant</span>


                            </div>
                            <div class="actions">
                                <button class="btn btn-info" data-toggle="collapse" data-target="#vehiculeMandant">Formulaire</button>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div id="vehiculeMandant" class="collapse">
                                <br />
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].CIN_MatFisc" placeholder="CIN ou Matricule Fiscal">
                                            <label for="form_control_1">Identifiant Propriétaire</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].matriculeVehicule" placeholder="111 TU 1111">
                                            <label for="form_control_1">Matricule</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].numChassis" placeholder="99NC999CR999">
                                            <label for="form_control_1">Numéro Chassis</label>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].marqueID">
                                                    <option>BMW</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                        <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Constructeur</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].constructeurID">
                                                    <option>M-Series</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                        <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Marque</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].typeVehiculeID">
                                                    <option>M-3</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                            <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Type</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].genreVehiculeID">
                                                    <option>M-3</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                            <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Genre</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].dateMiseCirculation" placeholder="">
                                            <label for="form_control_1">Date Mise en Circulation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-addon">Dt</span>
                                                <input type="number" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].prixNeuf" placeholder="">
                                                <span class="input-group-addon">.00</span>
                                                <label for="form_control_1">Valeur à Neuf</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-addon">Dt</span>
                                                <input type="number" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].valeurVenale" placeholder="">
                                                <span class="input-group-addon">.00</span>
                                                <label for="form_control_1">Valeur Venal</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].energie" placeholder="">
                                                <span class="input-group-addon">Wut?</span>
                                                <label for="form_control_1">Energie</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].puissance" placeholder="">
                                                <span class="input-group-addon">CV</span>
                                                <label for="form_control_1">Puissance</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].numPlaces" placeholder="">
                                            <label for="form_control_1">Nombre de Places</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-addon">Tn</span>
                                                <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeMandant'].tonnage" placeholder="">
                                                <label for="form_control_1">Tonnage</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet lightgrey">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-car font-blue-chambray"></i>
                                <span class="caption-subject font-blue-chambray bold uppercase">Vehicule Tiers</span>


                            </div>
                            <div class="actions">
                                <button class="btn btn-info" data-toggle="collapse" data-target="#vehiculeTiers">Formulaire</button>
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div id="vehiculeTiers" class="collapse">
                                <br />
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].CIN_MatFisc" placeholder="CIN ou Matricule Fiscal">
                                            <label for="form_control_1">Identifiant Propriétaire</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].matriculeVehicule" placeholder="111 TU 1111">
                                            <label for="form_control_1">Matricule</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].numChassis" placeholder="99NC999CR999">
                                            <label for="form_control_1">Numéro Chassis</label>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].marqueID">
                                                    <option>BMW</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                        <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Constructeur</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].constructeurID">
                                                    <option>M-Series</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                        <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Marque</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].typeVehiculeID">
                                                    <option>M-3</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                            <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Type</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="form-group form-md-line-input has-info">
                                                <select class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].genreVehiculeID">
                                                    <option>M-3</option>
                                                    @*foreach (TypeGarantie item in ViewBag.Garanties)
                                                        {
                                                            <option value="@item.TypeGarantieID">@item.LibelleTypeGarantie</option>

                                                        }*@
                                                </select>
                                                <label for="form_control_1">Genre</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].dateMiseCirculation" placeholder="">
                                            <label for="form_control_1">Date Mise en Circulation</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-addon">Dt</span>
                                                <input type="number" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].prixNeuf" placeholder="">
                                                <span class="input-group-addon">.00</span>
                                                <label for="form_control_1">Valeur à Neuf</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-addon">Dt</span>
                                                <input type="number" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].valeurVenale" placeholder="">
                                                <span class="input-group-addon">.00</span>
                                                <label for="form_control_1">Valeur Venal</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].energie" placeholder="">
                                                <span class="input-group-addon">Wut?</span>
                                                <label for="form_control_1">Energie</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].puissance" placeholder="">
                                                <span class="input-group-addon">CV</span>
                                                <label for="form_control_1">Puissance</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].numPlaces" placeholder="">
                                            <label for="form_control_1">Nombre de Places</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-info">
                                            <div class="input-group">
                                                <span class="input-group-addon">Tn</span>
                                                <input type="text" class="form-control" v-model="stepsData[2]['parties']['vehiculeTiers'].tonnage" placeholder="">
                                                <label for="form_control_1">Tonnage</label>
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
</transition>