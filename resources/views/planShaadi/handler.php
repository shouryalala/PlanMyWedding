
<!-- Created by Shourya Lala
    15-7-2016-->

<html>
<head>
    <title>Tabbed Content</title>
    <script src="data/bootstrap/js/planShaadi/tabcontent.js" type="text/javascript"></script>
    <script src="data/bootstrap/js/planShaadi/category_transitions.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="data/bootstrap/css/planShaadi/tabcontent.css" rel="stylesheet" type="text/css" />
    <link href="data/bootstrap/css/planShaadi/filedesign.css" rel="stylesheet" type="text/css" />    
    <link rel = "stylesheet" href = "data/bootstrap/css/planShaadi/animate.css" /> 
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> 
    <link href="data/bootstrap/css/planShaadi/hover.css" rel="stylesheet" type="text/css" />
    <style type="text/css" media="all">
    #bggg {
   position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    opacity: 0.8;
      filter:brightness(60%);
    -webkit-filter:brightness(60%);

     transform:scale(1.1);
    -ms-transform:scale(1.1); /* IE 9 */
    -moz-transform:scale(1.1); /* Firefox */
    -webkit-transform:scale(1.1); /* Safari and Chrome */
    -o-transform:scale(1.1); 

    z-index: -20;    

    background: url(<?php echo "$bg"?>); no-repeat center center fixed;


    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
    #bg_cover{
   position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    opacity: 0.6;
    background: #581427;    
    z-index: -10;    

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}


    </style>
</head>


<div class="main">
    <a href="#contact" class="contact_button"><div id="contact_us" class="hvr-underline-from-center" align="center"> Contact Us</div></a><br>
        <div id="contact"> <a href="#" style="position:fixed;font-size:80px;color:white;right:20px;text-decoration:none;padding-right:1%;" class="cancel">&times;<br></a>
           <p style="color:white; font-size:1.1em;text-align:center;padding-top:20px;">Call us at +919811791095 | 011-64549945 or leave your name and mobile number and we will contact you within 24 hours with the best deals and offers!</p>
            <div id="form_box">                     
                <form id="form_contact" name="form_contact" method="get" action="http://localhost/Laravel/public/mailme">
                    <p><input class = "container flipInX animated" type="text" name="name_id" id="name_id" placeholder="NAME"
                    style="position:relative;left:20px;top:30px;background-color: rgba(255, 255, 255, 0.8); border:none; width:350px; height:30px;"/></p>  
                    <div class = "animated flipInX delay"><p>    
                        <input type="text" name="mobile_id" id="mobile_id" placeholder="MOBILE NUMBER" 
                        style="position:relative;left:20px;top:23px;background-color: rgba(255, 255, 255, 0.9); border:none; width:350px; height:30px;"/></p>
                    </div>
                    <div class = "animated flipInX delay"><p>    
                        <input type="text" name="email_id" id="email_id" placeholder="EMAIL ID" 
                        style="position:relative;left:20px;top:19px;background-color: rgba(255, 255, 255, 1.0); border:none; width:350px; height:30px;"/></p>
                    </div>
                    <input type="submit" name="submit_contact" id="submit_button" onclick="return sendemail();" style="font-size:1.2em;position:relative;left:20px;top:15px;background-color: rgba(255, 255, 255, 0.5); border:none; width:350px; height:30px;" value="submit"/>
            </div>
        </div>

<body style="font-family:Arial;">    
    <div id = "tabss" class="fadeInLeft animated">
        <ul class="tabs" data-persist="true">
            <?php if($venue!=-1){ ?>
            <li><a href="#view1">VENUE</a></li>
            <?php } ?>
            <?php if($decor!=5){ ?>
            <li><a href="#view2">DECOR</a></li>
            <?php } ?>
            <?php if($cater_up!=5){ ?>
            <li><a href="#view3">CATERING</a></li>
            <?php } ?>
            <?php if($photoz!=5){ ?>
            <li><a href="#view4">PHOTOGRAPHY</a></li>
            <?php } ?>
            <?php if($invites!=5){ ?>
            <li><a href="#view5">INVITES</a></li>
            <?php } ?>
            <?php if($wedding_band!=5){ ?>
            <li><a href="#view6">WEDDING BAND</a></li>
            <?php } ?>
            <?php if($ent_package!=5){ ?>
            <li><a href="#view7">ENTERTAINMENT</a></li>
            <?php } ?>
            <?php if($makeup!=-1){ ?>
            <li><a href="#view8">MAKEUP</a></li>
            <?php } ?>
        </ul>    
        <div class="tabcontents" id="tabcont" style="position:relative;height:540px;">
            <?php if($venue!=-1){ ?>
            <div id="view1">
                <div id="label_venue" style="float:right; word-wrap: break-word; overflow: hidden; width:550;">
                    <p id="ven_bud"><?php if($venue_flag!=1){echo "The best option for your venue<br>";if($venue>100000){$b = round($venue,-5);$b/=100000;echo "Budget for venue: Rs.$b lakh";}else if($venue>1000){$b = round($venue,-3);$b/=1000;echo "The best option for your venue<br>Budget for venue: Rs.$b thousand";}} ?></p>
                    <p id="ven_name"><?php if($venue_flag==1){echo "No venue available at this budget";}else{echo "$venue_nm->venue_name";} ?></p>
                    <h6 id="ven_add"><?php if($venue_des!=0){foreach($venue_des as $key)echo "$key->address";}?></h6>
                     <p id="ven_desc"><?php if($venue_des==0){echo "contact us for further helping you with the budget";}else{foreach($venue_des as $key)echo "$key->description";} ?></p>                        
                </div>
            
                <div class="decor_images animated fadeIn">
                 <?php   
                 if($venue_des!=0){
                foreach ($venue_des as $venu) {
                    $temp= str_replace(' ', '', $venu->name); 
                    $na = '../public/data/images/venue/'.$temp.'/';
                    $m = glob($na.'*jpg');
                    for ($i=0; $i <count($m) ; $i++){ ?>                                    
                    <img class= "decor_img animated fadeIn" src=<?php echo "$m[$i]"; ?> style="float:left;border-style: solid;border-width: 10px;border-color: #ffffff;" width="500" height="500" alt="broken" id="img"/>
                    <?php }}} ?>                
                </div>                
            </div>
            <?php } ?>

            <?php if($decor!=5){ ?>
            <div id="view2">
                <div id="decor_text">                
                <p><?php if($bud_decor>100000){$c = round($bud_decor,-5);$c/=100000;echo "Budget for Decor: Rs.$c lakh<br>";}else if($bud_decor>1000){$c = round($bud_decor,-3);$c/=1000;echo "Budget for Decor: Rs.$c thousand<br>";}?></p>                
                <p>Corresponding Package and their samples: <?php if($decor==0) echo"Standard";else if($decor==1)echo"Premium";else if($decor==2)echo"Luxury";?></p>
                <?php if($decor==4){  ?>
                <p id="decor_unavailable">No package available at this budget. Please contact us at +919811791095 and we can help you further options</p>
                 <?php } ?>   
             </div>
                <div id=decor_img style="padding-top:-5px;">
                    <?php if($decor!=4)foreach ($data as $key){ ?>
                    <img class= "decor_img1 fadeIn animated" src=<?php echo "..$key->image_path" ?> style="float:left;border-style: solid;border-width: 5px;
                    border-color: #ffffff;" width="380" height="400" alt="broken" id="decor_img_1"/>
                    <?php }?>
                    <?php if($decor!=4)foreach ($data as $key){ ?>
                    <img class= "decor_img2 fadeIn animated" src=<?php echo "..$key->image_path" ?> style="float:left;border-style: solid;border-width: 5px;
                    border-color: #ffffff;" width="380" height="400" alt="broken" id="decor_img_2"/>
                    <?php }?>
                    <?php if($decor!=4)foreach ($data as $key){ ?>
                    <img class= "decor_img3 fadeIn animated" src=<?php echo "..$key->image_path" ?> style="float:left;border-style: solid;border-width: 5px;
                    border-color: #ffffff;" width="380" height="400" alt="broken" id="decor_img_3"/>
                    <?php } ?>                
                </div>                              
            </div>
            <?php } ?>

            <?php if($cater_up!=5){ ?>
            <div id="view3">
                <div id="img1" style="overflow:hidden;width:360;height:500;float:left;border-style:solid;border-color:white;border-width:10px;">         
                <img src="../public/data/images/planShaadi/catering/img1.jpg" alt="helllo" id="catering_img1" width:"360px" class="animated fadeIn"/>   
            </div>
                <div id="catering_header"><?php if($bud_cater>100000){$a = round($bud_cater,-5);$a/=100000;echo "Budget for Catering: Rs.$a lakh<br>Corresponding Menu:";}else if($bud_cater>1000){$a = round($bud_cater,-3);$a/=1000;echo "Budget for Catering: Rs.$a thousand<br>Corresponding Menu:";}?></div>
                 <div id="text_catering" >
                    <?php if($cater_up==4){ ?>
                    <p id="menu_unavailable">No catering menu available at this budget. Contact us at +919811791095. We can work out a package</p>
                        <?php } ?>                        
                    <p><?php if($cater_up!=4)echo "$cater_up$cater_down"?> </p>   
                </div>
                <div id="img2" style="overflow:hidden;width:370;height:500;float:right;border-style:solid;border-color:white;border-width:10px;margin-left:10px;" class="animated fadeIn">         
                <img src="../public/data/images/planShaadi/catering/img2.jpg" style="float:right;" alt="helllo" id="catering_img2"/>                
            </div>
            </div>    
            <?php } ?>        
            <?php if($photo_package!=5){ ?>
            <div id="view4">                
                <div id="photo_images" style="float:left;">
                    <?php if($photo_package!=3)foreach ($photoz as $key1): ?>
                        <img class="photo_under animated fadeIn" src=<?php echo "..$key1->image_path" ?> style="float:left;" width="420" height="420" alt="broken"/>
                    <?php endforeach ?>
                    <?php if($photo_package!=3)foreach ($photoz as $key2): ?>
                        <img class="photo_over animated fadeIn" src=<?php echo "..$key2->image_path" ?> style="float:left;" width="420" height="420" alt="broken"/>
                    <?php endforeach ?>        
                </div>
                <div id="photography_text" style="float:right;width:300;">
                    <p><?php 
                        if($photo_package==3)echo "<br>Budget for Photography: $bud_photo<br><br> No package is available at this budget.<br> Contact us. We're sure we can figure out a package";
                        else {if($bud_photo>100000){$d = round($bud_photo,-5);$d/=100000;echo "Budget for Photography: Rs.$d lakh<br>";}else if($bud_photo>1000){$d= round($bud_photo,-3);$d/=1000;echo "Budget for Photography: Rs.$d thousand<br>";}$e=round($no_camera,0);$f=round($no_albums,0);
                            echo "No of cameras provided: $e<br>No of albums: $f<br>";
                                if($photo_package==0)echo "Package: Standard";else if($photo_package==1)echo "Package: Premium";else if($photo_package==2)echo "Package: Luxury";
                            } 
                        ?>                    
                    </p>
                </div>
            </div>
            <?php } ?>
            <?php if($invites!=5){ ?>
            <div id="view5">

                <div id="invite_text">                
                <p><?php if($bud_invite>100000){$i = round($bud_invite,-5);$i/=100000;echo "Budget for Invites: Rs.$i lakh<br>";}else if($bud_invite>1000){$i = round($bud_invite,-3);$i/=1000;echo "Budget for Invites: Rs.$i thousand<br>";}$j=round($no_of_invites,0);echo "Approximate number of Invites:$j";?></p>                
                <p>Corresponding Invite type and their samples: <?php if($invites==0) echo"Standard";else if($invites==1)echo"Premium";else if($invites==2)echo"Luxury";?></p>
                <?php if($invites==4){  ?>
                <p id="decor_unavailable">No package available at this budget. Please contact us at +919811791095 and we can help you with further options</p>
                 <?php } ?>   
             </div>
                
                <div id="invites_images" style="float:left;">
                    <?php if($invites!=4)foreach ($img_invite as $key1){ ?>
                        <img src=<?php echo "..$key1->image_path" ?> style="float:left;" width="300" height="370" class="invite_1 animated fadeIn" alt="broken"/>
                    <?php } ?>
                    
                    <?php if($invites!=4) { ?>                  
                    <video style="position:fixed;z-index:100;border:none;width:440;height:400;margin-top:-40;margin-left:20px;" class="invite_3" controls>
                      <source src="../public/data/images/planShaadi/invites/invite.mp4" type="video/mp4">                      
                      Your browser does not support the video tag.
                    </video>
                    <?php } ?>
                    <?php if($invites!=4)foreach ($img_invite as $key3){ ?>
                        <img src=<?php echo "..$key3->image_path" ?> style="position:fixed;top:70px;float:right;" width="400" height="500" class="invite_4 animated fadeIn" alt="broken"/>
                    <?php } ?>                                 
                </div>
            </div>
            <?php } ?>
            <?php if($wedding_band!=5){ ?> 

            <div id="view6">
                <div class="wb_images">
                 <?php  
                 if($wedding_band!=3){
                foreach ($wb_photo as $key) {  ?>                  
                    <img class= "wb_img fadeIn animated" src=<?php echo "..$key->image_path" ?> style="float:right;border-style: solid;margin-right:30px;border-width: 10px;border-color: #ffffff;" width="550" height="500" alt="broken" id="img"/>
                    <?php }} ?>                
                </div>
                <div id="label_wb" style="float:left; word-wrap: break-word; overflow: hidden; width:550;">                    
                    <p id= "bud_wedding"><?php if($wb_budget>100000){$g = round($wb_budget,-5);$g/=100000;echo "Budget for Wedding Band: Rs.$g lakh";}else if($wb_budget>1000){$g = round($wb_budget,-3);$g/=1000;echo "Budget for Wedding Band: Rs.$g thoussand";} ?></p>
                    <p id= "wb_package"><?php if($wedding_band==0)echo "Package: Standard<br>Includes:";else if($wedding_band==1)echo "Package: Premium<br>Includes:";else if($wedding_band==2)echo "Package: Luxury<br>Includes:";?></p>
                    <p id="wedding_text"><?php echo "$wb_text<br>among several other options.."; ?></p>                    
                </div>              
            </div>
            <?php } ?>
             <?php if($ent_package!=5){ ?>
            <div id="view7">
                <div id="ent_text">
                <p><?php if($bud_enter>100000){$z = round($bud_enter,-5);$z/=100000;echo "Budget for Entertainment: Rs.$z lakh<br>";}else if($bud_enter>1000){$z = round($bud_enter,-3);$z/=1000;echo "Budget for Entertainment: Rs.$z thousand<br>";}?></p>                
                <p>Corresponding Package and their samples: <?php if($ent_package==0) echo"Standard";else if($ent_package==1)echo"Premium";else if($ent_package==2)echo"Luxury";?></p>
                <?php if($ent_package==4){  ?>
                <p id="decor_unavailable">No package available at this budget. Please contact us at +919811791095 and we can work out a package</p>
                 <?php } ?> 
                 </div>  
                <div id=decor_img style="padding-top:10px;">
                    <?php if($ent_package!=4)foreach ($ent_img as $key){ ?>
                    <img class= "ent_img1 fadeIn animated" src=<?php echo "..$key->image_path" ?> style="float:left;border-style: solid;border-width: 5px;
                    border-color: #ffffff;" width="370" height="400" alt="broken" id="decor_img_1"/>
                    <?php }?>
                    <?php if($ent_package!=4)foreach ($ent_img as $key){ ?>
                    <img class= "ent_img2 fadeIn animated" src=<?php echo "..$key->image_path" ?> style="float:left;border-style: solid;border-width: 5px;
                    border-color: #ffffff;" width="370" height="400" alt="broken" id="decor_img_2"/>
                    <?php }?>
                    <?php if($ent_package!=4)foreach ($ent_img as $key){ ?>
                    <img class= "ent_img3 fadeIn animated" src=<?php echo "..$key->image_path" ?> style="float:left;border-style: solid;border-width: 5px;
                    border-color: #ffffff;" width="370" height="400" alt="broken" id="decor_img_3"/>
                    <?php } ?>                
                </div>                              
            </div>
            <?php } ?>
            <?php if($makeup!=-1){ ?>
            <div id="view8">
                <div id="makeup_text" style="float:left;width:300px;">
                <p><?php if($makeup>100000){$h=round($makeup,-5);$h/=100000;echo "<br><br>Budget for Makeup: Rs.$h lakh<br>";}else if($makeup>1000){$h=round($makeup,-3);$h/=1000;echo "<br><br>Budget for Makeup: Rs.$h thousand<br>";} ?></p>
                <p>Memorable Shaadi offers several packages for bridal, mehendi and Party MakeUp. Contact us for more information and best offers!</p>                
                </div>
                <div class="w3-content" style="float:right;max-width:800px;position:relative;border-style: solid;border-width: 10px;
                    border-color: #ffffff;overflow:hidden;">

                <img class="makeup fadeIn animated" src="../public/data/images/planShaadi/Makeup/makeup1.jpg" style="width:700px;height:470px;">
                <img class="makeup fadeIn animated" src="../public/data/images/planShaadi/Makeup/makeup2.jpg" style="width:700px;height:470px;">
                <img class="makeup fadeIn animated" src="../public/data/images/planShaadi/Makeup/makeup3.jpg" style="width:700px;height:470px;">
                <img class="makeup fadeIn animated" src="../public/data/images/planShaadi/Makeup/makeup4.jpg" style="width:700px;height:470px;">
                <img class="makeup fadeIn animated" src="../public/data/images/planShaadi/Makeup/makeup5.jpg" style="width:700px;height:470px;">
  
                <a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
                <a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

                </div>               
            </div>
            <?php } ?>  
        </div>          
    </div>
    <div id="interested" style="float:right;">
        <a href="#contact" class="contact_button_2"> Yes I'm interested</a>
    </div>
    <div id="bggg"></div>
    <div id="bg_cover"></div>
<script>

<?php if($makeup!=-1){ ?>
slide_makeup(muIndex);
<?php } ?>
<?php if($venue!=-1 && $venue_flag!=1){ ?>
slide_decor();
<?php } ?>
<?php if($photo_package!=5 && $photo_package!=3){ ?>
slide_photo_under();
slide_photo_over();
<?php } ?>
<?php if($decor!=5 && $decor!=4){ ?>
slide_decor_img1();
slide_decor_img2();
slide_decor_img3();
<?php } ?>
<?php if($invites!=5 && $invites!=4){ ?>
slide_invite_img1();

slide_invite_img3();
<?php } ?>
<?php if($ent_package!=5 && $ent_package!=4){ ?>
 slide_ent_img1();
 slide_ent_img2();
 slide_ent_img3();
 <?php } ?>   
<?php if($wedding_band!=5 && $wedding_band!= 3){ ?>
slide_wedding();
<?php } ?>


</script>
</body>
</div>
</html>

