
<?php  @session_start(); //on demarr la session ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- include css personnel -->
     <link rel="stylesheet" href="../view/css/style_form_applicant.css">
    <link rel="stylesheet" href="../view/css/styledasboards.css">
    <!--Includes Cdn Css -->
    <?php require_once ("../view/include/links.php") ?>
    <title>Appointment-System</title>
</head>
    <body>




<?php                                      
    require_once "../model/read_rv.php";

    // $numero=0;
    $compt=0;
    $compt2=0;
            $id=$_GET['rv'];
        $stmt = $db->query("SHOW COLUMNS FROM rv_$id");     
?>
                                
                <!-- debut fromulaire pour les demandeur de rendez-vous  -->
                <div class="containers ">  
                    <form id="contact" action="../model/insert_applicant.php" method="post">
                        <h3>Bienvenu sur le Portail de  <span> <?= $_GET['name'];?></span></h3>
                        <h4>Pour réserver un rendez-vous,veuillez fournir des informations précises.
                            <br> Assurez-vous de lire attentivement les instructions et de fournir toutes les informations demandées pour éviter toute erreur.
                        </h4>

                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <?php   $col=$row['Field'];
                            $type='text';
                            if ($row['Field']!= 'id' && $row['Field']!= 'code' && $row['Field']!= "fk_from_table_infos_$id" ) {
                                if ($col=='_prenom') {
                                    $col= 'prenom';
                                }
                                if ($col=='_nom') {
                                    $col= 'nom';
                                }
                                if ($col=='_mail') {
                                    $col= 'Email';
                                    $type='email';
                                }
                                if ($col=='_dateNaissance') {
                                    $col= 'Date de Naissance';
                                    $type='date';
                                }
                                if ($col=='_lieuNaissance') {
                                    $col= 'Lieu de naissance';
                                }
                                if ($col=='_cni') {
                                    $col= 'Carte d\'identite';
                                }
                                if ($col=='_genre') { ?>
                                <fieldset class="input-group mt-3  ">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Genre</label>
                                    </div>
                                    <select name="<?=$row['Field']?>" class="custom-select" id="inputGroupSelect01" required>
                                        <option selected>choisir</option>
                                        <option value="M">Maculin</option>
                                        <option value="F">Feminin</option>
                                    </select>
                                </fiedset>
                                <?php    }else if($col=='_pays') { ?>
                                    <fieldset class="input-group mt-3 ">
                                    <div class="input-group-prepend ml-0">
                                        <label class="input-group-text" for="inputGroupSelect01">Pays</label>
                                    </div>
                                    <select name="<?=$row['Field']?>" class="custom-select" id="inputGroupSelect01" >
                                        <option value="Afghanistan">Afghanistan </option>
                                        <option value="Afrique_Centrale">Afrique_Centrale </option>
                                        <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                        <option value="Albanie">Albanie </option>
                                        <option value="Algerie">Algerie </option>
                                        <option value="Allemagne">Allemagne </option>
                                        <option value="Andorre">Andorre </option>
                                        <option value="Angola">Angola </option>
                                        <option value="Anguilla">Anguilla </option>
                                        <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                        <option value="Argentine">Argentine </option>
                                        <option value="Armenie">Armenie </option>
                                        <option value="Australie">Australie </option>
                                        <option value="Autriche">Autriche </option>
                                        <option value="Azerbaidjan">Azerbaidjan </option>

                                        <option value="Bahamas">Bahamas </option>
                                        <option value="Bangladesh">Bangladesh </option>
                                        <option value="Barbade">Barbade </option>
                                        <option value="Bahrein">Bahrein </option>
                                        <option value="Belgique">Belgique </option>
                                        <option value="Belize">Belize </option>
                                        <option value="Benin">Benin </option>
                                        <option value="Bermudes">Bermudes </option>
                                        <option value="Bielorussie">Bielorussie </option>
                                        <option value="Bolivie">Bolivie </option>
                                        <option value="Botswana">Botswana </option>
                                        <option value="Bhoutan">Bhoutan </option>
                                        <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                        <option value="Bresil">Bresil </option>
                                        <option value="Brunei">Brunei </option>
                                        <option value="Bulgarie">Bulgarie </option>
                                        <option value="Burkina_Faso">Burkina_Faso </option>
                                        <option value="Burundi">Burundi </option>

                                        <option value="Caiman">Caiman </option>
                                        <option value="Cambodge">Cambodge </option>
                                        <option value="Cameroun">Cameroun </option>
                                        <option value="Canada">Canada </option>
                                        <option value="Canaries">Canaries </option>
                                        <option value="Cap_vert">Cap_Vert </option>
                                        <option value="Chili">Chili </option>
                                        <option value="Chine">Chine </option>
                                        <option value="Chypre">Chypre </option>
                                        <option value="Colombie">Colombie </option>
                                        <option value="Comores">Colombie </option>
                                        <option value="Congo">Congo </option>
                                        <option value="Congo_democratique">Congo_democratique </option>
                                        <option value="Cook">Cook </option>
                                        <option value="Coree_du_Nord">Coree_du_Nord </option>
                                        <option value="Coree_du_Sud">Coree_du_Sud </option>
                                        <option value="Costa_Rica">Costa_Rica </option>
                                        <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                        <option value="Croatie">Croatie </option>
                                        <option value="Cuba">Cuba </option>

                                        <option value="Danemark">Danemark </option>
                                        <option value="Djibouti">Djibouti </option>
                                        <option value="Dominique">Dominique </option>

                                        <option value="Egypte">Egypte </option>
                                        <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                        <option value="Equateur">Equateur </option>
                                        <option value="Erythree">Erythree </option>
                                        <option value="Espagne">Espagne </option>
                                        <option value="Estonie">Estonie </option>
                                        <option value="Etats_Unis">Etats_Unis </option>
                                        <option value="Ethiopie">Ethiopie </option>

                                        <option value="Falkland">Falkland </option>
                                        <option value="Feroe">Feroe </option>
                                        <option value="Fidji">Fidji </option>
                                        <option value="Finlande">Finlande </option>
                                        <option value="France">France </option>

                                        <option value="Gabon">Gabon </option>
                                        <option value="Gambie">Gambie </option>
                                        <option value="Georgie">Georgie </option>
                                        <option value="Ghana">Ghana </option>
                                        <option value="Gibraltar">Gibraltar </option>
                                        <option value="Grece">Grece </option>
                                        <option value="Grenade">Grenade </option>
                                        <option value="Groenland">Groenland </option>
                                        <option value="Guadeloupe">Guadeloupe </option>
                                        <option value="Guam">Guam </option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernesey">Guernesey </option>
                                        <option value="Guinee">Guinee </option>
                                        <option value="Guinee_Bissau">Guinee_Bissau </option>
                                        <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                        <option value="Guyana">Guyana </option>
                                        <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                        <option value="Haiti">Haiti </option>
                                        <option value="Hawaii">Hawaii </option>
                                        <option value="Honduras">Honduras </option>
                                        <option value="Hong_Kong">Hong_Kong </option>
                                        <option value="Hongrie">Hongrie </option>

                                        <option value="Inde">Inde </option>
                                        <option value="Indonesie">Indonesie </option>
                                        <option value="Iran">Iran </option>
                                        <option value="Iraq">Iraq </option>
                                        <option value="Irlande">Irlande </option>
                                        <option value="Islande">Islande </option>
                                        <option value="Israel">Israel </option>
                                        <option value="Italie">italie </option>

                                        <option value="Jamaique">Jamaique </option>
                                        <option value="Jan Mayen">Jan Mayen </option>
                                        <option value="Japon">Japon </option>
                                        <option value="Jersey">Jersey </option>
                                        <option value="Jordanie">Jordanie </option>

                                        <option value="Kazakhstan">Kazakhstan </option>
                                        <option value="Kenya">Kenya </option>
                                        <option value="Kirghizstan">Kirghizistan </option>
                                        <option value="Kiribati">Kiribati </option>
                                        <option value="Koweit">Koweit </option>

                                        <option value="Laos">Laos </option>
                                        <option value="Lesotho">Lesotho </option>
                                        <option value="Lettonie">Lettonie </option>
                                        <option value="Liban">Liban </option>
                                        <option value="Liberia">Liberia </option>
                                        <option value="Liechtenstein">Liechtenstein </option>
                                        <option value="Lituanie">Lituanie </option>
                                        <option value="Luxembourg">Luxembourg </option>
                                        <option value="Lybie">Lybie </option>

                                        <option value="Macao">Macao </option>
                                        <option value="Macedoine">Macedoine </option>
                                        <option value="Madagascar">Madagascar </option>
                                        <option value="Madère">Madère </option>
                                        <option value="Malaisie">Malaisie </option>
                                        <option value="Malawi">Malawi </option>
                                        <option value="Maldives">Maldives </option>
                                        <option value="Mali">Mali </option>
                                        <option value="Malte">Malte </option>
                                        <option value="Man">Man </option>
                                        <option value="Mariannes du Nord">Mariannes du Nord </option>
                                        <option value="Maroc">Maroc </option>
                                        <option value="Marshall">Marshall </option>
                                        <option value="Martinique">Martinique </option>
                                        <option value="Maurice">Maurice </option>
                                        <option value="Mauritanie">Mauritanie </option>
                                        <option value="Mayotte">Mayotte </option>
                                        <option value="Mexique">Mexique </option>
                                        <option value="Micronesie">Micronesie </option>
                                        <option value="Midway">Midway </option>
                                        <option value="Moldavie">Moldavie </option>
                                        <option value="Monaco">Monaco </option>
                                        <option value="Mongolie">Mongolie </option>
                                        <option value="Montserrat">Montserrat </option>
                                        <option value="Mozambique">Mozambique </option>

                                        <option value="Namibie">Namibie </option>
                                        <option value="Nauru">Nauru </option>
                                        <option value="Nepal">Nepal </option>
                                        <option value="Nicaragua">Nicaragua </option>
                                        <option value="Niger">Niger </option>
                                        <option value="Nigeria">Nigeria </option>
                                        <option value="Niue">Niue </option>
                                        <option value="Norfolk">Norfolk </option>
                                        <option value="Norvege">Norvege </option>
                                        <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                        <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                        <option value="Oman">Oman </option>
                                        <option value="Ouganda">Ouganda </option>
                                        <option value="Ouzbekistan">Ouzbekistan </option>

                                        <option value="Pakistan">Pakistan </option>
                                        <option value="Palau">Palau </option>
                                        <option value="Palestine">Palestine </option>
                                        <option value="Panama">Panama </option>
                                        <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                        <option value="Paraguay">Paraguay </option>
                                        <option value="Pays_Bas">Pays_Bas </option>
                                        <option value="Perou">Perou </option>
                                        <option value="Philippines">Philippines </option>
                                        <option value="Pologne">Pologne </option>
                                        <option value="Polynesie">Polynesie </option>
                                        <option value="Porto_Rico">Porto_Rico </option>
                                        <option value="Portugal">Portugal </option>

                                        <option value="Qatar">Qatar </option>

                                        <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                        <option value="Republique_Tcheque">Republique_Tcheque </option>
                                        <option value="Reunion">Reunion </option>
                                        <option value="Roumanie">Roumanie </option>
                                        <option value="Royaume_Uni">Royaume_Uni </option>
                                        <option value="Russie">Russie </option>
                                        <option value="Rwanda">Rwanda </option>

                                        <option value="Sahara Occidental">Sahara Occidental </option>
                                        <option value="Sainte_Lucie">Sainte_Lucie </option>
                                        <option value="Saint_Marin">Saint_Marin </option>
                                        <option value="Salomon">Salomon </option>
                                        <option value="Salvador">Salvador </option>
                                        <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                        <option value="Samoa_Americaine">Samoa_Americaine </option>
                                        <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                        <option value="Senegal" selected="selected">Senegal </option>
                                        <option value="Seychelles">Seychelles </option>
                                        <option value="Sierra Leone">Sierra Leone </option>
                                        <option value="Singapour">Singapour </option>
                                        <option value="Slovaquie">Slovaquie </option>
                                        <option value="Slovenie">Slovenie</option>
                                        <option value="Somalie">Somalie </option>
                                        <option value="Soudan">Soudan </option>
                                        <option value="Sri_Lanka">Sri_Lanka </option>
                                        <option value="Suede">Suede </option>
                                        <option value="Suisse">Suisse </option>
                                        <option value="Surinam">Surinam </option>
                                        <option value="Swaziland">Swaziland </option>
                                        <option value="Syrie">Syrie </option>

                                        <option value="Tadjikistan">Tadjikistan </option>
                                        <option value="Taiwan">Taiwan </option>
                                        <option value="Tonga">Tonga </option>
                                        <option value="Tanzanie">Tanzanie </option>
                                        <option value="Tchad">Tchad </option>
                                        <option value="Thailande">Thailande </option>
                                        <option value="Tibet">Tibet </option>
                                        <option value="Timor_Oriental">Timor_Oriental </option>
                                        <option value="Togo">Togo </option>
                                        <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                        <option value="Tristan da cunha">Tristan de cuncha </option>
                                        <option value="Tunisie">Tunisie </option>
                                        <option value="Turkmenistan">Turmenistan </option>
                                        <option value="Turquie">Turquie </option>

                                        <option value="Ukraine">Ukraine </option>
                                        <option value="Uruguay">Uruguay </option>

                                        <option value="Vanuatu">Vanuatu </option>
                                        <option value="Vatican">Vatican </option>
                                        <option value="Venezuela">Venezuela </option>
                                        <option value="Vierges_Americaines">Vierges_Americaines </option>
                                        <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                        <option value="Vietnam">Vietnam </option>

                                        <option value="Wake">Wake </option>
                                        <option value="Wallis et Futuma">Wallis et Futuma </option>

                                        <option value="Yemen">Yemen </option>
                                        <option value="Yougoslavie">Yougoslavie </option>

                                        <option value="Zambie">Zambie </option>
                                        <option value="Zimbabwe">Zimbabwe </option>

                                    </select>
                                </fiedset>
                                <?php    } else if ($row['Field'] !='_prenom' and $row['Field'] !='_nom' and $row['Field'] !='_dateNaissance' and $row['Field'] !='_lieuNaissance' 
                                                 and $row['Field'] !='_genre' and $row['Field'] !='_pays'  and $row['Field'] !='_cni'  and $row['Field'] !='_mail') { ?>
                                    <fieldset class="input-group mb-0 mt-2 ml-0 ">
                                     <div id="input_group" class="input-group-prepend w-100 mt-1  ">
                                        <label class="input-group-text" ><?= str_replace("_"," ",$col) ?></label>
                                        <input   id="inputs" type="<?=$type?>" name="info<?=$compt+=1;?>" placeholder="Votre <?= str_replace("_"," ",$col) ?> ici..."  tabindex="1" required autofocus>
                                       <!-- recuperer le de la colonne actuelle -->
                                        <input type="hidden" value="<?= $row['Field'] ?>" name="col<?=$compt2+=1;?>" >
                                    </div>
                                    </fiedset>
                                
                                <?php   }  else {  ?>
                                <fieldset class="input-group mb-0 mt-3 ml-0 ">
                                     <div id="input_group" class="input-group-prepend w-100 mt-1  ">
                                        <label class="input-group-text" ><?= str_replace("_"," ",$col) ?></label>
                                        <input   id="inputs" type="<?=$type?>" name="<?=$row['Field']?>" placeholder="Votre  <?= str_replace("_"," ",$col) ?> ici..."  tabindex="1" required autofocus>
                                    </div>
                                    </fiedset>
                        <?php }} } ?>
                        <input type="hidden" value="<?=$_GET['id_rv_get'] ?>" name="id_rv" >
                        <input type="hidden" value="<?=$_GET['name'] ?>" name="nameStruct" >
                        <input type="hidden" value="<?=$_GET['rv']?>" name="idd" >
                        <fieldset class="mt-4">
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
                        </fieldset>
                    </form>
                </div>
<?php   ?>
