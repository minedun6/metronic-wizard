@extends('master')

@section('after-styles')
    <style>
        .portlet {
            box-shadow: none !important;
        }
    </style>
    <style>
        .fade-enter-active {
            transition: opacity .5s
        }

        .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
            opacity: 0
        }
    </style>
@stop

@section('content')

<div class="portlet light" id="standard" v-invoke>
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-green"></i>
            <span class="caption-subject font-green bold uppercase">Mission standard</span>
        </div>
    </div>
    <div class="portlet-body" style="padding-top:0;">
        <div style="text-align:center" v-if="showCover">
            <img src="~/assets/global/img/balls.gif" />
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="mt-element-step">
                    <div class="row step-line">
                        <div v-for="step in steps">
                            <div class="col-xs-2 mt-step-col" :class="{ done: step.done == true, active : step.index == currentStep, first : step.index == 0, last : step.index == 5}">
                                <div class="mt-step-number bg-white">@{{ step.index + 1}}</div>
                                <div class="mt-step-title uppercase font-grey-cascade">@{{ step.title }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- calling steps components --}}
        @include('includes.wizard.order')
        @include('includes.wizard.constat')
        @include('includes.wizard.parties')
        @include('includes.wizard.visites')
        @include('includes.wizard.reparations')
        @include('includes.wizard.honoraires')
        {{-- end calling steps components --}}
    </div>
</div>

@stop

@section('after-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.js"></script>
    <script>

        $(function () {
            var standard = new Vue({
                el: '#standard',
                data() {
                    return {
                        currentStep: 0,
                        newChoc: { cote: '', piece: '', degat: '', decision: '' },
                        newDevis: {codeDevis: '',dateDevis: '',nombrePieces: '',sousTotal: '',totalRemise: '',
                            totalHT: '', fodec: '', totalTaxes: '', timbreFiscal: '', totalTTC: '',
                            devisPieces: [],devisMainOeuvre: []
                        },
                        devisPieces: {nomPiece: '',quantite: '',prixUnitaire: '',tva:''},
                        devisMainOeuvre: {libelleMainOeuvre: '',nombreHeure: '',prixUnitarie: ''},


                        showCover: false,
                        steps: [
                            { index: 0, title: 'Ordre', done: false },
                            { index: 1, title: 'Constat', done: false },
                            { index: 2, title: 'Parties', done: false },
                            { index: 3, title: 'Visites', done: false },
                            { index: 4, title: 'Réparation', done: false },
                            { index: 5, title: 'Honoraires', done: false },
                        ],
                        stepsData: [
                            {
                                index: 0,
                                ordre:
                                {
                                    dateMission: '',
                                    dateExamen: '',
                                    matriculeVehicule: '',
                                    numSinistre: '',
                                    typeGarantieID: '',
                                    nomAssure: '',
                                    lieuVisite: '',
                                    distance: ''

                                },
                                agenceAID: 1,
                                assuranceAID: ''
                            },
                            {
                                index: 1,
                                constat: {
                                    dateAccident: '',
                                    lieuAccident: '',
                                    blessures: true,
                                    autresDegats: '',

                                    partieA: {
                                        assurance: '',
                                        agence:1,
                                        contratAssurance: '',
                                        debutValidite: '',
                                        finValidite: '',
                                        matricule: '',
                                        sensVenant: '',
                                        sensAllant: '',
                                        degatsApparants: '',
                                        observations: ''
                                    },
                                    partieB: {
                                        assurance: '',
                                        agence: '',
                                        contratAssurance: '',
                                        debutValidite: '',
                                        finValidite: '',
                                        matricule: '',
                                        sensVenant: '',
                                        sensAllant: '',
                                        degatsApparants: '',
                                        observations: ''
                                    }
                                }
                            },
                            {
                                index: 2,
                                parties: {
                                    assureA: {
                                        nomPrenom: '',
                                        adressePersonne: '',
                                        telephonePersonne: ''
                                    },
                                    assureB: {
                                        nomPrenom: '',
                                        adressePersonne: '',
                                        telephonePersonne: ''
                                    },
                                    conducteurA: {
                                        nomPrenom: '',
                                        adressePersonne: '',
                                        telephonePersonne: '',
                                        NumPermis: '',
                                        DatePermis: '',
                                    },
                                    conducteurB: {
                                        nomPrenom: '',
                                        adressePersonne: '',
                                        telephonePersonne: '',
                                        NumPermis: '',
                                        DatePermis: '',
                                    },
                                    vehiculeMandant: {
                                        CIN_MatFisc: '',
                                        matriculeVehicule: '',
                                        numChassis: '',
                                        marqueID: '',
                                        constructeurID: '',
                                        typeVehiculeID: '',
                                        genreVehiculeID: '',
                                        dateMiseCirculation: '',
                                        prixNeuf: '',
                                        valeurVenale: '',
                                        energie: '',
                                        puissance: '',
                                        numPlaces: '',
                                        tonnage: ''
                                    },
                                    vehiculeTiers: {
                                        CIN_MatFisc: '',
                                        matriculeVehicule: '',
                                        numChassis: '',
                                        marqueID: '',
                                        constructeurID: '',
                                        typeVehiculeID: '',
                                        genreVehiculeID: '',
                                        dateMiseCirculation: '',
                                        prixNeuf: '',
                                        valeurVenale: '',
                                        energie: '',
                                        puissance: '',
                                        numPlaces: '',
                                        tonnage: ''
                                    }

                                }

                            },
                            {
                                index: 3,
                                visite: {
                                    dateVisite: '',
                                    lieuVisite: '',
                                    typeVisite: '',
                                    chocs: [],
                                    descriptif: '',
                                    decision: '',
                                    estimation: ''

                                }

                            },
                            {
                                index: 4,
                                reparation: {
                                    vehiculeEpave: false,
                                    typeEpave: '',
                                    immobilisation: '',
                                    valeurEpave: '',
                                    prejudice: '',
                                    sommaireDevis: [],
                                    sommaireFacture: [],
                                }
                            }
                        ]
                    }

                }
                ,
                mounted() {
                    $this = this;
                    $('#dateMission').on('change', function (e) {
                        $this.stepsData[0]['ordre'].dateMission = e.currentTarget.value
                    })
                    $('#dateExamen').on('change', function (e) {
                        $this.stepsData[0]['ordre'].dateExamen = e.currentTarget.value
                    })


                },
                computed: {
                    active: function () {
                        self = this;
                        return self.step == self.currentStep;

                    }
                },
                methods: {
                    getStepData(i) {
                        var self = this;
                        $this.stepsData.forEach(function (el) {
                        })

                    },
                    next() {
                        var self = this;
                        self.currentStep++;

                    },
                    previous() {
                        var self = this;
                        self.currentStep--;
                        self.steps[ordre].done = false;

                    },
                    convertDevisFacture() {
                    }
                    ,//Methods for Choc
                    addChoc() {
                        var self = this;
                        self.stepsData[3].visite.chocs.push(self.newChoc);
                        self.newChoc = { cote: '', piece: '', degat: '', decision: '' }
                        $('.modal').modal('toggle')

                    },
                    removeChoc(element) {
                        this.stepsData[3].visite.chocs.splice(this.stepsData[3].visite.chocs.indexOf(element), 1)
                    },
                    //Methods for Devis
                    addDevis() {
                        var self = this;
                        self.stepsData[4].reparation.sommaireDevis.push(self.newDevis);
                        self.newDevis = {
                            codeDevis: '',
                            dateDevis: '',
                            nombrePieces: '',
                            sousTotal: '',
                            totalRemise: '',
                            totalHT: '',
                            fodec: '',
                            totalTaxes: '',
                            timbreFiscal: '',
                            totalTTC: '',
                            devisPieces: [],
                            devisMainOeuvre: [],
                        }
                        afficherDevis();

                    },
                    addDevisPiece() {
                        var self = this;
                        self.stepsData[4].reparation.sommaireDevis.newDevis.push(self.devisPieces);
                        self.devisPieces = {
                            nomPiece: '',
                            quantite: '',
                            prixUnitaire: '',
                            tva: ''
                        }
                        /*transition */

                    },
                    addDevisMainOeuvre() {
                        var self = this;
                        self.stepsData[4].reparation.sommaireDevis.newDevis.push(self.devisMainOeuvre);
                        self.devisPieces = {
                            libelleMainOeuvre: '',
                            nombreHeure: '',
                            prixUnitarie: ''
                        }


                    },
                    removeDevis(element) {
                        this.stepsData[4].reparation.sommaireDevis.splice(this.stepsData[4].reparation.sommaireDevis.indexOf(element), 1)
                    },
                    afficherDevis() {
                    },
                    //globbal submit type
                    submit(ordre) {
                        var self = this;
                        self.showCover = true
                        setTimeout(function () {
                            self.showCover = false
                            self.steps[ordre].done = true
                            self.next()
                        },
                            50);
                    }
                }
            })
        })

    </script>
@stop