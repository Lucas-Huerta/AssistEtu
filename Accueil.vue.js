var Accueil = Vue.component('Accueil',{
    template:`
    
        <div class="container-fluid">
        
            <div class="section-1 col-12">
                <div class="row">
                    <div class="centrer flex logo">
                        <img src="img/Logo/Logo2.png" alt="Logo d'Assist'Etu">
                    </div>
                </div>
                <div class="row">
                    <div class="centrer flex">
                        <p>
                            Entrez votre catégorie dès maintenant !
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="centrer flex">
                        <div id="fleche">
                            <a href="#" >
                                <img src="img/flechePetite.png" alt="image de fleche">
                            </a>   
                        </div>            
                    </div>
                </div>
            </div>
            
            <div class="section-2 col-12">
                <div class="row">
                    <div class="col-6 centrer flex">
                        <img src="img/Icones/iconeDiplomer.png" alt="icone Etudiant">
                
                    </div>
                    <div class="col-6 centrer flex ">
                        <img src="img/Icones/iconeProf.png" alt="icone Réunion">
                    </div>                    
                </div>
                
                <div class="row">
                    <div class="col-6 centrer flex">
                         <a href="/Pages/pageConnexion.php">
                            <h3>
                                Étudiant
                            </h3>
                         </a>
                    </div>
                     <div class="col-6 centrer flex">
                         <a href="/Pages/pageConnexion.php">
                            <h3>
                                Professeur
                            </h3>
                         </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 centrer flex centrerTexte">
                        <p>
                            Vous êtes étudiant et vous recherchez de l'aide dans
                            certaines matières ? Nous sommes la pour vous aider !
                        </p>
                    </div>
                    <div class="col-6 centrer flex centrerTexte">
                        <p>
                            Enseignant et envie de transmettre toujours plus de savoir
                            à ces nouvelles générations ? Rejoignez nous dès maintenant !
                        </p>
                    </div>
                
                </div>
                                  
            </div>
            
            <div class="section-3 col-12">
            
                <div class="row pagesIndex">
                    <div class="col-3">                    
                        <img class="images" src="img/livres.jpg" alt="image de matières">
                    </div>
                    <div class="col-9 indexMatieres">                    
                        <div>
                            <h3>
                                <a>
                                    Les matières
                                </a>
                            </h3>
                        </div>
                        <div>
                            <p>
                                Afin de trouvez l'aide qu'il vous faut, la page matière est là
                                pour vous guider dans les matières, leurs programmes et les échanges dedans !
                            </p>
                        </div>
                    </div>                 
                </div>        
                 <div class="row">
                    <div class="col-8 indexLocalisation">
                        <div>
                            <h3>
                                Rassemblons nous !
                            </h3>
                        </div>
                        <div>
                            <p>
                                Vous préférez avoir de vrais échanges que rester chez vous devant votre écran ?
                                Organiser dès maintenant une réunion dans une bibliothèque ou un lieu
                                calme près de chez vous !
                            </p>
                        </div>
                    </div>
                    <div class="col-3 ">                    
                      
                        <img class="images" src="img/rassemblement.jpg" alt="image fonctionnalité étudier a plusieurs">
                 
                    </div>                 
                </div>            
            </div>   
            
            <div class="section-2 col-12">
                <div class="row">
                    <div class="col-4 centrer flex">
                        <img src="img/Icones/iconeSolution.png" alt="icone d'aide au etudes">
                    </div>
                    <div class="col-4 centrer flex">
                        <img src="img/Icones/iconeSchool.png" alt="icone pour la facilité">
                    </div>
                    <div class="col-4 centrer flex">
                        <img src="img/Icones/iconeEnsemble.png" alt="icone ensemble">
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col-4 centrer flex">
                         <p class="centrerTexte textesPartie4">
                            En utilisant Assist'Etu nous vous offrons de l'aide afin de vous en sortir
                            et de pouvoir décrocher l'école ou les études que vous désirer.
                            Tout cela gratuitement
                        </p>
                    </div>
                    <div class="col-4 centrer flex">
                        <p class="centrerTexte textesPartie4">
                            L'école sera plus facile, fini le stress et de ne pas avoir vraiment compris
                            votre leçon.
                        </p>                
                    </div>
                    <div class="col-4 centrer flex">
                        <p class="centrerTexte textesPartie4">
                            Vous avez aussi surtout fini d'être seul, ici il y a des personnes de bonnes
                            volontés pour vous aider. Autant entre étudiants qu'entre professeurs.
                        </p>
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