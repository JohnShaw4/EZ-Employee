<?php

include_once 'includes/dbh.inc.php';
session_start();

?>

<!DOCTYPE html>
<html>
   <head>
      <title>EZ Employee</title>
     <link rel="stylesheet" type="text/css" href="CSS2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="JSLASTONE.js"></script>
      <link rel="icon" type="image/png" href="favicon.png">
   </head>
   <body>
      <div class="header">
         <img src="capture.png" alt="logo">
      </div>
      <br>
      <div class="socials">
         <a href="#" class="fa fa-facebook" onclick="openFB()"></a>
         <a href="#" class="fa fa-twitter" onclick="openTwit()"></a>
         <a href="#" class="fa fa-instagram" onclick="openInst()"></a>
      </div>
      <div class="menu">
         <a id="Home" onclick="showHomeTab();">Home</a>
         <a id="Register" onclick="showRegisterTab();"><strong>Register</strong></a>
         <a id="Login" onclick="showLoginTab();">Login</a>
         <a id="Profile" onclick="showProfileTab();">Profile</a>
      </div>
         <hr />
      <div id="RegisterSection">
         <section>
            <div>
               <h2>Registration Form - Part 2</h2>
                  <?php
                      if (isset($_GET['signup'])){
                        echo '<div class="a">There were some invalid fields:<ul>';
                       if (strpos($_GET['signup'], 'test') !== false){
                        echo '<li>No suburb option was selected';
                       }
                       if (strpos($_GET['signup'], 'workfield') !== false){
                        echo '<li>No field of work option selected';
                       }
                      echo '</ul></div><br>';
                    }
                  ?>
                  <form class="signup-form" action="includes/signup2.inc.php" method="POST" enctype="multipart/form-data">
                  <p>In this section you will select what sububrs of work you desire to work. Businesses in these areas will potentially contact you, however there is still a small chance that businesses not included in these areas will make contact with you.
                    You can be as specific as you want, however we reccommend you try and be as broad as possible, to heighten your chance of employment. 
                  Simply click on the links below to show the suburbs of different areas, and select the ones you desire!<br></p>
                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'test') !== false){
                        echo '<span style="color: red">  <strong>Must select an option</strong><br><br></span>';
                       }
                    }
                    ?>
                  <a onclick="showNorthShore()">North Shore Subrubs</a><br>
                  <nav id="NorthShore" style="display: none;">
                    <table>
                      <tr>
                    <td><input type="checkbox" id="cbgroup1_master" onchange="togglecheckboxes(this,'cbgroup1')"><strong>Select All</strong></td>
                    <td><input type="checkbox" id="cb1_1" name="test[]" value="Albany" class="cbgroup1"> Albany</td>
                    <td><input type="checkbox" id="cb1_2" name="test[]" value="Bayswater" class="cbgroup1"> Bayswater</td>                    
                    <td><input type="checkbox" id="cb1_3" name="test[]" value="Bayview" class="cbgroup1"> Bayview</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_4" name="test[]" value="Beach Haven" class="cbgroup1"> Beach Haven</td>
                    <td><input type="checkbox" id="cb1_5" name="test[]" value="Belmont" class="cbgroup1"> Belmont</td>
                    <td><input type="checkbox" id="cb1_6" name="test[]" value="Birkdale" class="cbgroup1"> Birkdale</td>
                    <td><input type="checkbox" id="cb1_7" name="test[]" value="Birkenhead" class="cbgroup1"> Birkenhead</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_8" name="test[]" value="Browns Bay" class="cbgroup1"> Browns Bay</td>
                    <td><input type="checkbox" id="cb1_9" name="test[]" value="Campbells Bay" class="cbgroup1"> Campbells Bay</td>
                    <td><input type="checkbox" id="cb1_10" name="test[]" value="Chatswood" class="cbgroup1"> Chatswood</td>
                    <td><input type="checkbox" id="cb1_11" name="test[]" value="Devenport" class="cbgroup1"> Devenport</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_12" name="test[]" value="Fairview Heights" class="cbgroup1"> Fairview Heights</td>
                    <td><input type="checkbox" id="cb1_13" name="test[]" value="Forrest Hill" class="cbgroup1"> Forrest Hill</td>
                    <td><input type="checkbox" id="cb1_14" name="test[]" value="Glenfield" class="cbgroup1"> Glenfield</td>
                    <td><input type="checkbox" id="cb1_15" name="test[]" value="Greenhithe" class="cbgroup1"> Greenhithe</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_16" name="test[]" value="Hauraki" class="cbgroup1"> Hauraki</td>
                    <td><input type="checkbox" id="cb1_17" name="test[]" value="Hillcrest" class="cbgroup1"> Hillcrest</td>
                    <td><input type="checkbox" id="cb1_18" name="test[]" value="Long Bay" class="cbgroup1"> Long Bay</td>
                    <td><input type="checkbox" id="cb1_19" name="test[]" value="Lucas Heights" class="cbgroup1"> Lucas Heights</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_20" name="test[]" value="Mairangi Bay" class="cbgroup1"> Mairangi Bay</td>
                    <td><input type="checkbox" id="cb1_21" name="test[]" value="Milford" class="cbgroup1"> Milford</td>
                    <td><input type="checkbox" id="cb1_22" name="test[]" value="Murrays Bay" class="cbgroup1"> Murrays Bay</td>
                    <td><input type="checkbox" id="cb1_23" name="test[]" value="Narrow Neck" class="cbgroup1"> Narrow Neck</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_24" name="test[]" value="Northcote" class="cbgroup1"> Northcote</td>
                    <td><input type="checkbox" id="cb1_25" name="test[]" value="Northcote Point" class="cbgroup1"> Northcote Point</td>
                    <td><input type="checkbox" id="cb1_26" name="test[]" value="Northcoss" class="cbgroup1"> Northcoss</td>
                    <td><input type="checkbox" id="cb1_27" name="test[]" value="Okura" class="cbgroup1"> Okura</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_28" name="test[]" value="Oteha" class="cbgroup1"> Oteha</td>
                    <td><input type="checkbox" id="cb1_29" name="test[]" value="Paremoremo" class="cbgroup1"> Paremoremo</td>
                    <td><input type="checkbox" id="cb1_30" name="test[]" value="Pinehill" class="cbgroup1"> Pinehill</td>
                    <td><input type="checkbox" id="cb1_31" name="test[]" value="Rosedale" class="cbgroup1"> Rosedale</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_32" name="test[]" value="Rothesay Bay" class="cbgroup1"> Rothesay Bay</td>
                    <td><input type="checkbox" id="cb1_33" name="test[]" value="Schnapper Rock" class="cbgroup1"> Schnapper Rock</td>
                    <td><input type="checkbox" id="cb1_34" name="test[]" value="Stanley Point" class="cbgroup1"> Stanley Point</td>
                    <td><input type="checkbox" id="cb1_35" name="test[]" value="Sunnynook" class="cbgroup1"> Sunnynook</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_36" name="test[]" value="Takapuna" class="cbgroup1"> Takapuna</td>
                    <td><input type="checkbox" id="cb1_37" name="test[]" value="Torbay" class="cbgroup1"> Torbay</td>
                    <td><input type="checkbox" id="cb1_38" name="test[]" value="Totara Vale" class="cbgroup1"> Totara Vale</td>
                    <td><input type="checkbox" id="cb1_39" name="test[]" value="Unsworth Heights" class="cbgroup1"> Unsworth Heights</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_40" name="test[]" value="Waiake" class="cbgroup1"> Waiake</td>
                    <td><input type="checkbox" id="cb1_41" name="test[]" value="Wairau Valley" class="cbgroup1"> Wairau Valley</td>
                    <td><input type="checkbox" id="cb1_42" name="test[]" value="Windsor Park" class="cbgroup1"> Windsor Park</td>
                  </tr>
                </table>
                  </nav>


                  <br><a onclick="showWaitakere()">Waitakere Subrubs</a><br>
                  <nav id="Waitakere" style="display: none;">
                    <table>
                      <tr>
                    <td><input type="checkbox" id="cbgroup2_master" onchange="togglecheckboxes(this,'cbgroup2')"> <strong>Select All</strong></td>
                    <td><input type="checkbox" id="cb1_43" name="test[]" value="Bethells Beach" class="cbgroup2"> Bethells Beach</td>
                    <td><input type="checkbox" id="cb1_44" name="test[]" value="Cornwallis" class="cbgroup2"> Cornwallis</td>
                    <td><input type="checkbox" id="cb1_45" name="test[]" value="Glen Eden" class="cbgroup2"> Glen Eden</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_46" name="test[]" value="Glendene" class="cbgroup2"> Glendene</td>
                    <td><input type="checkbox" id="cb1_47" name="test[]" value="Green Bay" class="cbgroup2"> Green Bay</td>
                    <td><input type="checkbox" id="cb1_48" name="test[]" value="Henderson" class="cbgroup2"> Henderson</td>
                    <td><input type="checkbox" id="cb1_49" name="test[]" value="Henderson Valley" class="cbgroup2"> Henderson Valley</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_50" name="test[]" value="Herald Island" class="cbgroup2"> Herald Island</td>
                    <td><input type="checkbox" id="cb1_51" name="test[]" value="Hobsonville" class="cbgroup2"> Hobsonville</td>
                    <td><input type="checkbox" id="cb1_52" name="test[]" value="Huia" class="cbgroup2"> Huia</td>
                    <td><input type="checkbox" id="cb1_53" name="test[]" value="Karekare" class="cbgroup2"> Karekare</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_54" name="test[]" value="Kelston" class="cbgroup2"> Kelston</td>
                    <td><input type="checkbox" id="cb1_55" name="test[]" value="Laingholm" class="cbgroup2"> Laingholm</td>
                    <td><input type="checkbox" id="cb1_56" name="test[]" value="Massey" class="cbgroup2"> Massey</td>
                    <td><input type="checkbox" id="cb1_57" name="test[]" value="New Lynn" class="cbgroup2"> New Lynn</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_58" name="test[]" value="Oratia" class="cbgroup2"> Oratia</td>
                    <td><input type="checkbox" id="cb1_59" name="test[]" value="Parau" class="cbgroup2"> Parau</td>
                    <td><input type="checkbox" id="cb1_60" name="test[]" value="Piha" class="cbgroup2"> Piha</td>
                    <td><input type="checkbox" id="cb1_61" name="test[]" value="Ranui" class="cbgroup2"> Ranui</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_62" name="test[]" value="Sunnyvale" class="cbgroup2"> Sunnyvale</td>
                    <td><input type="checkbox" id="cb1_63" name="test[]" value="Swanson" class="cbgroup2"> Swanson</td>
                    <td><input type="checkbox" id="cb1_64" name="test[]" value="Te Atatu Peninsula" class="cbgroup2"> Te Atatu Peninsula</td>
                    <td><input type="checkbox" id="cb1_65" name="test[]" value="Te Atatu South" class="cbgroup2"> Te Atatu South</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_66" name="test[]" value="Titirangi" class="cbgroup2"> Titirangi</td>
                    <td><input type="checkbox" id="cb1_67" name="test[]" value="Waiatarua" class="cbgroup2"> Waiatarua</td>
                    <td><input type="checkbox" id="cb1_68" name="test[]" value="Waitakere" class="cbgroup2"> Waitakere</td>
                    <td><input type="checkbox" id="cb1_69" name="test[]" value="West Harbour" class="cbgroup2"> West Harbour</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_70" name="test[]" value="Westgate" class="cbgroup2"> Westgate</td>
                    <td><input type="checkbox" id="cb1_71" name="test[]" value="Whenuapai" class="cbgroup2"> Whenuapai</td>
                  </tr>
                </table>
                  </nav>


                  <br><a onclick="showWaiheke()">Waiheke Subrubs</a><br>
                  <nav id="Waiheke" style="display: none;">
                      <table>
                      <tr>
                    <td><input type="checkbox" id="cbgroup3_master" onchange="togglecheckboxes(this,'cbgroup3')"> <strong>Select All</strong></td>
                    <td><input type="checkbox" id="cb1_72" name="test[]" value="Omiha" class="cbgroup3"> Omiha</td>
                    <td><input type="checkbox" id="cb1_72" name="test[]" value="Omiha" class="cbgroup3"> Omiha</td>
                    <td><input type="checkbox" id="cb1_73" name="test[]" value="Oneroa" class="cbgroup3"> Oneroa</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_74" name="test[]" value="Onetangi" class="cbgroup3"> Onetangi</td>
                    <td><input type="checkbox" id="cb1_75" name="test[]" value="Ostend" class="cbgroup3"> Ostend</td>
                    <td><input type="checkbox" id="cb1_76" name="test[]" value="Palm Beach" class="cbgroup3"> Palm Beach</td>
                    <td><input type="checkbox" id="cb1_77" name="test[]" value="Surfdale" class="cbgroup3"> Surfdale</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" id="cb1_78" name="test[]" value="Waiheke Island" class="cbgroup3"> Waiheke Island</td>
                    </tr>
                  </table>
                  </nav>

                  <br><a onclick="showHauraki()">Hauraki Gulf Islands</a><br>
                  <nav id="Hauraki" style="display: none;">
                    <table>
                      <tr>
                    <td><input type="checkbox" id="cbgroup4_master" onchange="togglecheckboxes(this,'cbgroup4')"> <strong>Select All</strong></td>
                    <td><input type="checkbox" id="cb1_79" name="test[]" value="Great Barrier Island" class="cbgroup4"> Great Barrier Island</td>
                    <td><input type="checkbox" id="cb1_80" name="test[]" value="Kawau Island" class="cbgroup4"> Kawau Island</td>
                    <td><input type="checkbox" id="cb1_81" name="test[]" value="Other Islands" class="cbgroup4"> Other Islands</td>
                      </tr>
                      <tr>
                    <td><input type="checkbox" id="cb1_82" name="test[]" value="Rakino Island" class="cbgroup4"> Rakino Island</td>
                    </tr>
                  </table>
                </nav>


                  <br><a onclick="showPapakura()">Papukura Suburbs</a><br>
                  <nav id="Papakura" style="display: none;">
                  <table>
                  <tr>
                  <td><input type="checkbox" id="cbgroup5_master" onchange="togglecheckboxes(this,'cbgroup5')"> <strong>Select All</strong></td>
                  <td><input type="checkbox" id="cb1_83" name="test[]" value="Ardmore" class="cbgroup5"> Great Barrier Island</td>
                  <td><input type="checkbox" id="cb1_84" name="test[]" value="Conifer Grove" class="cbgroup5"> Kawau Island</td>
                  <td><input type="checkbox" id="cb1_85" name="test[]" value="Drury" class="cbgroup5"> Drury</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_86" name="test[]" value="Hingaia" class="cbgroup5"> Hingaia</td>
                 <td><input type="checkbox" id="cb1_87" name="test[]" value="Opaheke" class="cbgroup5"> Opaheke</td>
                  <td><input type="checkbox" id="cb1_88" name="test[]" value="Pahurehure" class="cbgroup5"> Pahurehure</td>
                  <td><input type="checkbox" id="cb1_89" name="test[]" value="Papakura" class="cbgroup5"> Papakura</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_90" name="test[]" value="Red Hill" class="cbgroup5"> Red Hill</td>
                  <td><input type="checkbox" id="cb1_91" name="test[]" value="Rosehill" class="cbgroup5"> Rosehill</td>
                  <td><input type="checkbox" id="cb1_92" name="test[]" value="Takanini" class="cbgroup5"> Takanini</td>
                  </tr>
                </table>
              </nav>

                  <br><a onclick="showAuklandCity()">Auckland City Suburbs</a><br>
                  <nav id="AucklandCity" style="display: none;">
                  <table>
                  <tr>
                  <td><input type="checkbox" id="cbgroup10_master" onchange="togglecheckboxes(this,'cbgroup10')"> <strong>Select All</strong></td>
                  <td><input type="checkbox" id="cb1_93" name="test[]" value="Auckland Central" class="cbgroup10"> Auckland Central</td>
                  <td><input type="checkbox" id="cb1_94" name="test[]" value="Avondale" class="cbgroup10"> Avondale</td>
                  <td><input type="checkbox" id="cb1_95" name="test[]" value="Blockhouse Bay" class="cbgroup10"> Blockhouse Bay</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_96" name="test[]" value="Eden Terrace" class="cbgroup10"> Eden Terrace</td>
                 <td><input type="checkbox" id="cb1_97" name="test[]" value="Ellerslie" class="cbgroup10"> Ellerslie</td>
                  <td><input type="checkbox" id="cb1_98" name="test[]" value="Epsom" class="cbgroup10"> Epsom</td>
                  <td><input type="checkbox" id="cb1_99" name="test[]" value="Freemans Bay" class="cbgroup10"> Freemans Bay</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_100" name="test[]" value="Glen Innes" class="cbgroup10"> Glen Innes</td>
                  <td><input type="checkbox" id="cb1_101" name="test[]" value="Glendowie" class="cbgroup10"> Glendowie</td>
                  <td><input type="checkbox" id="cb1_102" name="test[]" value="Grafton" class="cbgroup10"> Grafton</td>
                  <td><input type="checkbox" id="cb1_103" name="test[]" value="Greenlane" class="cbgroup10"> Greenlane</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_104" name="test[]" value="Grey Lynn" class="cbgroup10"> Grey Lynn</td>
                  <td><input type="checkbox" id="cb1_105" name="test[]" value="Herne Bay" class="cbgroup10"> Herne Bay</td>
                  <td><input type="checkbox" id="cb1_106" name="test[]" value="Hillsborough" class="cbgroup10"> Hillsborough</td>
                 <td><input type="checkbox" id="cb1_107" name="test[]" value="Kingsland" class="cbgroup10"> Kingsland</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_108" name="test[]" value="Kohimarama" class="cbgroup10"> Kohimarama</td>
                  <td><input type="checkbox" id="cb1_109" name="test[]" value="Lynfield" class="cbgroup10"> Lynfield</td>
                  <td><input type="checkbox" id="cb1_110" name="test[]" value="Meadowbank" class="cbgroup10"> Meadowbank</td>
                  <td><input type="checkbox" id="cb1_111" name="test[]" value="Mission Bay" class="cbgroup10"> Mission Bay</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_112" name="test[]" value="Morningside" class="cbgroup10"> Morningside</td>
                  <td><input type="checkbox" id="cb1_113" name="test[]" value="Mount Albert" class="cbgroup10"> Mount Albert</td>
                  <td><input type="checkbox" id="cb1_114" name="test[]" value="Mount Eden" class="cbgroup10"> Mount Eden</td>
                  <td><input type="checkbox" id="cb1_115" name="test[]" value="Mount Roskill" class="cbgroup10"> Mount Roskill</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_116" name="test[]" value="Mount Wellington" class="cbgroup10"> Mount Wellington</td>
                 <td><input type="checkbox" id="cb1_117" name="test[]" value="New Windsor" class="cbgroup10"> New Windsor</td>
                  <td><input type="checkbox" id="cb1_118" name="test[]" value="Newmarket" class="cbgroup10"> Newmarket</td>
                  <td><input type="checkbox" id="cb1_119" name="test[]" value="Newton" class="cbgroup10"> Newton</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_120" name="test[]" value="One Tree Hill" class="cbgroup10"> One Tree Hill</td>
                  <td><input type="checkbox" id="cb1_121" name="test[]" value="Onehunga" class="cbgroup10"> Onehunga</td>
                  <td><input type="checkbox" id="cb1_122" name="test[]" value="Orakei" class="cbgroup10"> Orakei</td>
                  <td><input type="checkbox" id="cb1_123" name="test[]" value="Otahuhu" class="cbgroup10"> Otahuhu</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_124" name="test[]" value="Panmure" class="cbgroup10"> Panmure</td>
                  <td><input type="checkbox" id="cb1_125" name="test[]" value="Parnell" class="cbgroup10"> Parnell</td>
                  <td><input type="checkbox" id="cb1_126" name="test[]" value="Penrose" class="cbgroup10"> Penrose</td>
                  <td><input type="checkbox" id="cb1_127" name="test[]" value="Point Chevalier" class="cbgroup10"> Point Chevalier</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_128" name="test[]" value="Point England" class="cbgroup10"> Point England</td>
                  <td><input type="checkbox" id="cb1_129" name="test[]" value="Ponsonby" class="cbgroup10"> Ponsonby</td>
                 <td><input type="checkbox" id="cb1_130" name="test[]" value="Remuera" class="cbgroup10"> Remuera</td>                  
                 <td><input type="checkbox" id="cb1_131" name="test[]" value="Royal Oak" class="cbgroup10"> Royal Oak</td>
               </tr>
               <tr>
                  <td><input type="checkbox" id="cb1_132" name="test[]" value="Saint Heliers" class="cbgroup10"> Saint Heliers</td>
                  <td><input type="checkbox" id="cb1_133" name="test[]" value="Saint Johns" class="cbgroup10"> Saint Johns</td>
                  <td><input type="checkbox" id="cb1_134" name="test[]" value="Saint Marys Bay" class="cbgroup10"> Saint Marys Bay</td>
                  <td><input type="checkbox" id="cb1_135" name="test[]" value="Sandringham" class="cbgroup10"> Sandringham</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_136" name="test[]" value="Stonefields" class="cbgroup10"> Stonefields</td>
                 <td><input type="checkbox" id="cb1_137" name="test[]" value="Three Kings" class="cbgroup10"> Three Kings</td>
                  <td><input type="checkbox" id="cb1_138" name="test[]" value="Waiotaiki Bay" class="cbgroup10"> Waiotaiki Bay</td>
                  <td><input type="checkbox" id="cb1_139" name="test[]" value="Waterview" class="cbgroup10"> Waterview</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_140" name="test[]" value="Western Springs" class="cbgroup10"> Western Springs</td>
                  <td><input type="checkbox" id="cb1_141" name="test[]" value="Westmere" class="cbgroup10"> Westmere</td>
                  <td><input type="checkbox" id="cb1_142" name="test[]" value="Wynyard Qaurter" class="cbgroup10"> Wynyard Qaurter</td>
              </tr>
            </table>
          </nav>


                  <br><a onclick="showFranklin()">Franklin Suburbs</a><br>
                  <nav id="Franklin" style="display: none;">
                  <table>
                  <tr>
                  <td><input type="checkbox" id="cbgroup6_master" onchange="togglecheckboxes(this,'cbgroup6')"> <strong>Select All</strong></td>
                  <td><input type="checkbox" id="cb1_143" name="test[]" value="Aka Aka" class="cbgroup6"> Aka Aka</td>
                  <td><input type="checkbox" id="cb1_144" name="test[]" value="Ararimu" class="cbgroup6"> Ararimu</td>
                  <td><input type="checkbox" id="cb1_145" name="test[]" value="Awhitu" class="cbgroup6"> Awhitu</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_146" name="test[]" value="Bombay" class="cbgroup6"> Bombay</td>
                  <td><input type="checkbox" id="cb1_147" name="test[]" value="Buckland" class="cbgroup6"> Buckland</td>
                  <td><input type="checkbox" id="cb1_148" name="test[]" value="Clarks Beach" class="cbgroup6"> Clarks Beach</td>
                  <td><input type="checkbox" id="cb1_149" name="test[]" value="Glen Murray" class="cbgroup6"> Glen Murray</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_150" name="test[]" value="Glenbrook" class="cbgroup6"> Glenbrook</td>
                  <td><input type="checkbox" id="cb1_151" name="test[]" value="Hunua" class="cbgroup6"> Hunua</td>
                  <td><input type="checkbox" id="cb1_152" name="test[]" value="Kaiaua" class="cbgroup6"> Kaiaua</td>
                  <td><input type="checkbox" id="cb1_153 name="test[]" value="Karaka" class="cbgroup6"> Karaka</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_154" name="test[]" value="Kingseat" class="cbgroup6"> Kingseat</td>
                  <td><input type="checkbox" id="cb1_155" name="test[]" value="Mangatangi" class="cbgroup6"> Mangatangi</td>
                  <td><input type="checkbox" id="cb1_156" name="test[]" value="Mangatawhiri" class="cbgroup6"> Mangatawhiri</td>
                  <td><input type="checkbox" id="cb1_157" name="test[]" value="Manukau Heads" class="cbgroup6"> Manukau Heads</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_158" name="test[]" value="Mauku" class="cbgroup6"> Mauku</td>
                  <td><input type="checkbox" id="cb1_159" name="test[]" value="Mercer" class="cbgroup6"> Mercer</td>
                  <td><input type="checkbox" id="cb1_160" name="test[]" value="Miranda" class="cbgroup6"> Miranda</td>
                  <td><input type="checkbox" id="cb1_161" name="test[]" value="Onewhero" class="cbgroup6"> Onewhero</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_162" name="test[]" value="Otaua" class="cbgroup6"> Otaua</td>
                  <td><input type="checkbox" id="cb1_163" name="test[]" value="Paerata" class="cbgroup6"> Paerata</td>
                  <td><input type="checkbox" id="cb1_164" name="test[]" value="Patumahoe" class="cbgroup6"> Patumahoe</td>
                  <td><input type="checkbox" id="cb1_165" name="test[]" value="Pokeno" class="cbgroup6"> Pokeno</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_166" name="test[]" value="Pollok" class="cbgroup6"> Pollok</td>
                  <td><input type="checkbox" id="cb1_167" name="test[]" value="Port Waikato" class="cbgroup6"> Port Waikato</td>
                  <td><input type="checkbox" id="cb1_168" name="test[]" value="Pukekawa" class="cbgroup6"> Pukekawa</td>
                  <td><input type="checkbox" id="cb1_169" name="test[]" value="Pukekohe" class="cbgroup6"> Pukekohe</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_170" name="test[]" value="Pukekohe East" class="cbgroup6"> Pukekohe East</td>
                  <td><input type="checkbox" id="cb1_171" name="test[]" value="Puni" class="cbgroup6"> Puni</td>
                  <td><input type="checkbox" id="cb1_172" name="test[]" value="Ramarama" class="cbgroup6"> Ramarama</td>
                  <td><input type="checkbox" id="cb1_173" name="test[]" value="Runciman" class="cbgroup6"> Runciman</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_174" name="test[]" value="Te Kohanga" class="cbgroup6"> Te Kohanga</td>
                  <td><input type="checkbox" id="cb1_175" name="test[]" value="Tuakau" class="cbgroup6"> Tuakau</td>
                  <td><input type="checkbox" id="cb1_176" name="test[]" value="Waiau Pa" class="cbgroup6"> Waiau Pa</td>
                  <td><input type="checkbox" id="cb1_177" name="test[]" value="Waiuku" class="cbgroup6"> Waiuku</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_178" name="test[]" value="Whakatiwai" class="cbgroup6"> Whakatiwai</td>
                  <td><input type="checkbox" id="cb1_179" name="test[]" value="Whangape" class="cbgroup6"> Whangape</td>
                  </tr>
                  </table>
                </nav>


                  <br><a onclick="showManukau()">Manukau Suburbs</a><br>
                  <nav id="Manukau" style="display: none;">
                  <table>
                  <tr>
                  <td><input type="checkbox" id="cbgroup7_master" onchange="togglecheckboxes(this,'cbgroup7')"> <strong>Select All</strong></td>
                  <td><input type="checkbox" id="cb1_180" name="test[]" value="Ararimu" class="cbgroup7"> Alfriston</td>
                  <td><input type="checkbox" id="cb1_181" name="test[]" value="Auckland Airport" class="cbgroup7"> Auckland Airport</td>
                  <td><input type="checkbox" id="cb1_182" name="test[]" value="Beachlands" class="cbgroup7"> Beachlands</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_183" name="test[]" value="Botany Downs" class="cbgroup7"> Botany Downs</td>
                  <td><input type="checkbox" id="cb1_184" name="test[]" value="Brookby" class="cbgroup7"> Brookby</td>
                  <td><input type="checkbox" id="cb1_185" name="test[]" value="Bucklands Beach" class="cbgroup7"> Bucklands Beach</td>
                  <td><input type="checkbox" id="cb1_186" name="test[]" value="Burswood" class="cbgroup7"> Burswood</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_187" name="test[]" value="Clendon Park" class="cbgroup7"> Clendon Park</td>
                  <td><input type="checkbox" id="cb1_188" name="test[]" value="Clevedon" class="cbgroup7"> Clevedon</td>
                  <td><input type="checkbox" id="cb1_189" name="test[]" value="Clover Park" class="cbgroup7"> Clover Park</td>
                  <td><input type="checkbox" id="cb1_190" name="test[]" value="Cockle Bay" class="cbgroup7"> Cockle Bay</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_191" name="test[]" value="Dannemora" class="cbgroup7"> Dannemora</td>
                  <td><input type="checkbox" id="cb1_192" name="test[]" value="East Tamaki" class="cbgroup7"> East Tamaki</td>
                  <td><input type="checkbox" id="cb1_193" name="test[]" value="East Tamaki Heights" class="cbgroup7"> East Tamaki Heights</td>
                  <td><input type="checkbox" id="cb1_194" name="test[]" value="Eastern Beach" class="cbgroup7"> Eastern Beach</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_195" name="test[]" value="Farm Cove" class="cbgroup7"> Farm Cove</td>
                  <td><input type="checkbox" id="cb1_196" name="test[]" value="Favona" class="cbgroup7"> Favona</td>
                  <td><input type="checkbox" id="cb1_197" name="test[]" value="Flat Bush" class="cbgroup7"> Flat Bush</td>
                  <td><input type="checkbox" id="cb1_198" name="test[]" value="Golfands" class="cbgroup7"> Golfands</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_199" name="test[]" value="Goodwood Heights" class="cbgroup7"> Goodwood Heights</td>
                  <td><input type="checkbox" id="cb1_200" name="test[]" value="Half Moon Bay" class="cbgroup7"> Half Moon Bay</td>
                  <td><input type="checkbox" id="cb1_201" name="test[]" value="Highland Park" class="cbgroup7"> Highland Park</td>
                  <td><input type="checkbox" id="cb1_202" name="test[]" value="Hillpark" class="cbgroup7"> Hillpark</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_203" name="test[]" value="Howick" class="cbgroup7"> Howick</td>
                  <td><input type="checkbox" id="cb1_204" name="test[]" value="Huntington Park" class="cbgroup7"> Huntington Park</td>
                  <td><input type="checkbox" id="cb1_205" name="test[]" value="Kawakawa Bay" class="cbgroup7"> Kawakawa Bay</td>
                  <td><input type="checkbox" id="cb1_206" name="test[]" value="Mangere" class="cbgroup7"> Mangere</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_207" name="test[]" value="Mangere Bridge" class="cbgroup7"> Mangere Bridge</td>
                  <td><input type="checkbox" id="cb1_208" name="test[]" value="Mangere East" class="cbgroup7"> Mangere East</td>
                  <td><input type="checkbox" id="cb1_209" name="test[]" value="Manukau" class="cbgroup7"> Manukau</td>
                  <td><input type="checkbox" id="cb1_210" name="test[]" value="Manukau Heights" class="cbgroup7"> Manukau Heights</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_211" name="test[]" value="Manurewa" class="cbgroup7"> Manurewa</td>
                  <td><input type="checkbox" id="cb1_212" name="test[]" value="Manurewa East" class="cbgroup7"> Manurewa East</td>
                  <td><input type="checkbox" id="cb1_213" name="test[]" value="Maraetai" class="cbgroup7"> Maraetai</td>
                  <td><input type="checkbox" id="cb1_214" name="test[]" value="Mellons Bay" class="cbgroup7"> Mellons Bay</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_215" name="test[]" value="Middlemore Hospital" class="cbgroup7"> Middlemore Hospital</td>
                  <td><input type="checkbox" id="cb1_216" name="test[]" value="Mission Heights" class="cbgroup7"> Mission Heights</td>
                  <td><input type="checkbox" id="cb1_217" name="test[]" value="Ness Valley" class="cbgroup7"> Ness Valley</td>
                  <td><input type="checkbox" id="cb1_218" name="test[]" value="Northpark" class="cbgroup7"> Northpark</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_219" name="test[]" value="Orere point" class="cbgroup7"> Orere point</td>
                  <td><input type="checkbox" id="cb1_220" name="test[]" value="Otara" class="cbgroup7"> Otara</td>
                  <td><input type="checkbox" id="cb1_221" name="test[]" value="Pakuranga" class="cbgroup7"> Pakuranga</td>
                  <td><input type="checkbox" id="cb1_222" name="test[]" value="Pakuranga Heights" class="cbgroup7"> Pakuranga Heights</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_223" name="test[]" value="Papatoetoe" class="cbgroup7"> Papatoetoe</td>
                  <td><input type="checkbox" id="cb1_224" name="test[]" value="Randwick Park" class="cbgroup7"> Randwick Park</td>
                  <td><input type="checkbox" id="cb1_225" name="test[]" value="Shamrock Park" class="cbgroup7"> Shamrock Park</td>
                  <td><input type="checkbox" id="cb1_226" name="test[]" value="Shelly Park" class="cbgroup7"> Shelly Park</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_227" name="test[]" value="Somerville" class="cbgroup7"> Somerville</td>
                  <td><input type="checkbox" id="cb1_228" name="test[]" value="Sunnyhills" class="cbgroup7"> Sunnyhills</td>
                  <td><input type="checkbox" id="cb1_229" name="test[]" value="The Gardens" class="cbgroup7"> The Gardens</td>
                  <td><input type="checkbox" id="cb1_230" name="test[]" value="Totara Heights" class="cbgroup7"> Totara Heights</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_240" name="test[]" value="Totara Park" class="cbgroup7"> Totara Park</td>
                  <td><input type="checkbox" id="cb1_241" name="test[]" value="Wattle Downs" class="cbgroup7"> Wattle Downs</td>
                  <td><input type="checkbox" id="cb1_242" name="test[]" value="Weymouth" class="cbgroup7"> Weymouth</td>
                  <td><input type="checkbox" id="cb1_243" name="test[]" value="Whitford" class="cbgroup7"> Whitford</td>
                </tr>
                <tr>
                  <td><input type="checkbox" id="cb1_244" name="test[]" value="Wiri" class="cbgroup7"> Wiri</td>
                  </tr>
                </table>
              </nav>

                  <p><br>In this section you will select what ares of work you desire to work in. It is important you chose wisely and once again we encorouge you to be as broad as possible to heighten your chances!<br><br></p>

                    <?php
                      if (isset($_GET['signup'])){
                       if (strpos($_GET['signup'], 'workfield') !== false){
                        echo '<span style="color: red">   <strong>Must select an option</strong><br></span>';
                       }
                    }
                    ?>
                  <br>
                  <input type="checkbox" name="workfield[]" value="Fast Food"> Fast Food<br>
                  <input type="checkbox" name="workfield[]" value="Bar"> Bar<br>
                  <input type="checkbox" name="workfield[]" value="Retail"> Retail<br>
                  <input type="checkbox" name="workfield[]" value="Sports"> Sports<br>
                  <input type="checkbox" name="workfield[]" value="Labour"> Labour<br><br>
                  <button type="submit" name="submit">Next</button>
                  </form>
            </div>
         </section>
      </div>
   </body>
</html>