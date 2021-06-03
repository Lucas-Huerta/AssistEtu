var Matiere = Vue.component('Matiere',{
    template:`
    
    <div class="container-fluid">
        <div class="section-matieres">
            <div class="col-12">
                <div class="row">
                    <h2 class="titreMatiere centrer flex">
                        Voici les matières que vous pouvez revoir sur 
                        Assist'Etu:
                    </h2>
                </div>
                
                <!-- img premiere ligne -->
                
                <div class="row">
                    <div class="col-4 centrer flex imgMatiere">
                        <img src="img/Matieres/maths.jpg">             
                    </div>
                    <div class="col-4 centrer flex imgMatiere">
                        <img src="img/Matieres/francais1.jpeg">
                    
                    </div>
                    <div class="col-4 centrer flex imgMatiere">
                        <img src="img/Matieres/histoire.jpg">
                    </div>
                </div>
                
                <!-- texte premiere ligne -->
                
                <div class="row">
                    <div class="col-4 centrer flex">
                        <h4>
                            Mathématiques
                        </h4>             
                    </div>
                    <div class="col-4 centrer flex">
                        <h4>
                            Français                       
                        </h4>       
                    </div>
                    <div class="col-4 centrer flex">
                       <h4>
                            Histoire
                        </h4>
                    </div>
                </div>
                
                <!-- img deuxieme ligne -->
                
                <div class="row">
                    <div class="col-4 centrer flex imgMatiere">
                        <img src="img/Matieres/anglais.jpeg">
                    
                    </div>
                    <div class="col-4 centrer flex images imgMatiere">
                        <img src="img/Matieres/geographie.jpeg">
                    
                    </div>
                    <div class="col-4 centrer flex imgMatiere">
                        <img src="img/Matieres/Chimie.jpeg">
                    </div>
                </div>
                
                 <!-- texte deuxieme ligne -->
                
                <div class="row">
                    <div class="col-4 centrer flex">
                        <h4>
                            Anglais
                        </h4>             
                    </div>
                    <div class="col-4 centrer flex">
                        <h4>
                            Géographie                       
                        </h4>       
                    </div>
                    <div class="col-4 centrer flex">
                       <h4>
                            Physique-Chimie
                        </h4>
                    </div>
                </div>
            </div>
        </div>       
    </div>
      
        `,
    data(){
        return{
        }
    },
    mounted(){

    },
    methods:{

    }
})