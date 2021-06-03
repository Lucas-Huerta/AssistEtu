var Conseils = Vue.component('Conseils',{
    template:`
    
    <div class="container-fluid"> 
   
        <div class="section-conseils">
            <div class="row">
                <h2 class="titreMatiere centrer flex">
                    Retrouvez les conseils de nos utilisateur ci-dessous : 
                </h2>
            </div>
            <div class="row">
                <div class="col-12 flex">
                    <div class="col-4">
                        <div v-for="Utilisateur in listeUtilisateurs" :key="Utilisateur.id">
                             <div class="nomUtilisateur flex">
                                <div id="cercle">
                                
                                </div>
                                <h4>
                                    {{Utilisateur.Prenom}}
                                    {{Utilisateur.Nom}}
                                </h4> 
                            </div>                                                 
                        </div>                 
                    </div>
                    <div class="col-8">
                        <div v-for="Conseils in listeConseils" :key="Conseils.id">                            
                            <div>
                                <div class="flex contenuConseil">
                                    <br>
                                    <div class="conseilDonner">
                                        <p>                                    
                                            {{Conseils.contenuConseil}}                                    
                                        </p>
                                    </div>
                                </div>   
                            </div>                   
                        </div>                 
                    </div>
                </div>       
            </div>
        </div>
    </div>

        `,
    data(){
        return{
            listeUtilisateurs:[],
            listeConseils:[]
        }
    },
    mounted(){

        // Appel Ajax via axios liste des villageois
        axios.get('https://assistetu.lucashuerta.fr/BackEndAssistEtu/Listes/listeUtilisateur.php')
            .then((response) => {
                this.listeUtilisateurs = response.data;
                console.log(this.listeUtilisateurs);
            })
            .catch(error =>{
                console.log("Erreur : ", error);
            })

        // Appel Ajax via axios liste des villageois
        axios.get('https://assistetu.lucashuerta.fr/BackEndAssistEtu/Listes/listConseils.php')
            .then((response) => {
                this.listeConseils = response.data;
                console.log(this.listeConseils);
            })
            .catch(error =>{
                console.log("Erreur : ", error);
            })
    },
    methods:{

    }
})