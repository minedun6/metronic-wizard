<transition name="fade">
    <div class="row step1" v-if="currentStep == 1">
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
                        <button class="btn btn-info" type="button" v-on:click="submit(currentStep)">
                            Enregistrer <i class="fa fa-upload"></i>
                        </button>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="form-group form-md-line-input has-info">
                                <input v-model="stepsData[1]['constat'].dateAccident" type="text" class="form-control datepicker" placeholder="Date mission">
                                <label for="form_control_1">Date Accident</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group form-md-line-input has-info">
                                <input v-model="stepsData[1]['constat'].lieuAccident" type="text" class="form-control" placeholder="Date Examen">
                                <label for="form_control_1">Lieu Accident</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="md-checkbox has-error">
                                <input v-model="stepsData[1]['constat'].blessures" type="checkbox" id="blessures" class="md-check">
                                <label for="blessures" class="font-grey-mint">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Blessures
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-checkbox has-error">
                                <input v-model="stepsData[1]['constat'].autresDegats" type="checkbox" id="degats" class="md-check">
                                <label for="degats" class="font-grey-mint">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    Autres Dégats
                                </label>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <select v-model="stepsData[1]['constat']['partieA'].assurance" class="form-control">
                                        
                                    </select>
                                    <label for="form_control_1">Assurance: A</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <select v-model="stepsData[1]['constat']['partieB'].assurance" class="form-control">
                                        
                                    </select>
                                    <label for="form_control_1">Assurance: B</label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <select v-model="stepsData[1]['constat']['partieA'].agence" class="form-control">
                                        
                                        <option value="1">value1</option>
                                        <option value="2" >value2</option>
                                    </select>
                                    <label for="form_control_1">Agence: A</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <select v-model="stepsData[1]['constat']['partieB'].agence" class="form-control">
                                    </select>
                                    <label for="form_control_1">Agence: B</label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieA'].contratAssurance" type="text" class="form-control" placeholder="Contrat Assurance">
                                    <label for="form_control_1">Contrat Assurance A</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieB'].contratAssurance" type="text" class="form-control" placeholder="CA-111-888">
                                    <label for="form_control_1">Contrat Assurance B</label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieA'].debutValidite" type="text" class="form-control datepicker" placeholder="Début Validité">
                                    <label for="form_control_1">Début Validité</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieA'].finValidite" type="text" class="form-control datepicker" placeholder="Fin Validité">
                                    <label for="form_control_1">Fin Validité</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieB'].debutValidite" type="text" class="form-control datepicker" placeholder="Début Validité">
                                    <label for="form_control_1">Début Validité</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieB'].finValidite" type="text" class="form-control datepicker" placeholder="Fin Validité">
                                    <label for="form_control_1">Fin Validité</label>
                                </div>
                            </div>

                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieA'].matricule" type="text" class="form-control" placeholder="Matricule A">
                                    <label for="form_control_1">Matricule A</label>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieB'].matricule" type="text" class="form-control" placeholder="111 TU 1111">
                                    <label for="form_control_1">Matricule B</label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieA'].sensVenant" type="text" class="form-control" placeholder="Sens d'ou vient A">
                                    <label for="form_control_1">A: Venant de</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieA'].sensAllant" type="text" class="form-control" placeholder="Sens d'ou vient B">
                                    <label for="form_control_1">A: Allant à</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieB'].sensVenant" type="text" class="form-control" placeholder="Direction de A">
                                    <label for="form_control_1">B: Venant de</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-md-line-input has-info">
                                    <input v-model="stepsData[1]['constat']['partieB'].sensAllant" type="text" class="form-control" placeholder="Direction de B">
                                    <label for="form_control_1">B: Allant à</label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <textarea v-model="stepsData[1]['constat']['partieA'].degatsApparants" class="form-control" placeholder="Décrivez l'état"></textarea>
                                    <label for="form_control_1">Dégats Apparants pour A</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <textarea v-model="stepsData[1]['constat']['partieB'].degatsApparants" class="form-control" placeholder="Décrivez l'état"></textarea>
                                    <label for="form_control_1">Dégats Apparants pour B </label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <textarea v-model="stepsData[1]['constat']['partieA'].observations" class="form-control" placeholder="Notes et Observations ..."></textarea>
                                    <label for="form_control_1">Observations pour A</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <textarea v-model="stepsData[1]['constat']['partieB'].observations" class="form-control" placeholder="Notes et Observations ..."></textarea>
                                    <label for="form_control_1">Observations</label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</transition>