<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en-us">
    <head>

        <title>WarCities</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Template">
        <meta name="author" content="BrainChild">    
        <link rel="icon" href="<?= base_url() ?>asset/image/icone/Fevicon.png" type="image/gif" />

        <link href="<?= base_url() ?>asset/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/subPageStyle.css" rel="stylesheet" type="text/css"/>
<!--        <script src="<?= base_url() ?>asset/js/jquery-3.1.1.min.js" type="text/javascript"></script>-->
      <script src="<?= base_url() ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
    </head>


    <body>
        <br> <br> <br>
        <div class="center-container reguserbackground">
            <div class="main">
                <h1 class="w3layouts_head">Request For Tournament Form  .................</h1>
                
                <?php if($this->session->flashdata('msg')): ?>
                    <p><?php echo $this->session->flashdata('msg'); ?></p>
                <?php endif; ?>

                <div class="w3layouts_main_grid">
                    <?php $attributes = array('class' => 'w3_form_post', 'id' => 'regform', 'name' => 'regform'); ?>
                            <?php echo form_open_multipart('Tournament_Validation_controller/requestForTour', $attributes); ?>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="game_name" placeholder="Enter Game Name" id="gameName"><span  class="text-center"></span>
                                    <!-- <input type="text" name="game_name" placeholder="Enter Game Name" id="gameName" required=""><span  class="text-center"></span> -->

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="game_mode" placeholder="Enter Game Mode" id="gameMode"><span  class="text-center"id=""></span>

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="team_and_player_name" placeholder="Enter Team / Player Name" id="tpName"><span  class="text-center"></span>

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="reg_date_start" placeholder="Enter Registration Start Date" id="rdStart"><span  class="text-center"></span></span>
                            </div>


                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="reg_date_end" placeholder="Enter Reagistration End Date" id="rdEnd"><span  class="text-center" ></span>

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="prize_pool" placeholder="Enter Prize Pool" id="prizePool"><span  class="text-center"></span>

                                </span>
                            </div>


                        </div>

                        <div class="col col-md-6">

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="entry_fee" placeholder="Enter Entry Fee" id="entryFee"><span  class="text-cente"></span>

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="rules" placeholder="Enter Rules" id="rule"><span  class="text-center"></span>

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="contact_no" placeholder="Enter Contact No." id="contactNo"><span  class="text-center"></span>

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="fixture" placeholder="Enter Fixture" id="fixture"><span  class="text-center"></span>
                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <input type="text" name="extra_info" placeholder="Enter Extra Info" id="rdEnd"><span  class="text-center"id="playerNameError"></span>

                                </span>
                            </div>

                            <div class="w3_agileits_main_grid w3l_main_grid">
                                <span class="agileits_grid">
                                    <label>  </label>
                                    <button id="myBtn"type="submit" name="fixture" placeholder="Enter Fixture" id="fixture" class="btn">Submit</button><span  class="text-center"></span>
                                </span>
                            </div>
                            
                            <input class="inputBox" type="hidden" name="table" value="reguser" >
                            <?php echo form_close(); ?>  

                        </div>
                    </div>      
                </div>
                <br>
            </div>
        </div>
        <!-- //footer -->
        <hr>
        
        
<script src="<?= base_url() ?>asset/js/cocRegValidation.js" type="text/javascript"></script>
         
<script>
    
    function Validate(){

        var gameName = document.getElementById('gameName').value;
        var gameMode = document.getElementById('gameMode');
        var tpName = document.getElementById('tpName').value;
        var rdStart = document.getElementById('rdStart').value;
        var rdEnd = document.getElementById('rdEnd').value;
        var prizePool = document.getElementById('prizePool').value;
        var entryFee = document.getElementById('entryFee').value;
        var rule = document.getElementById('rule').value;
        var contactNo = document.getElementById('contactNo').value;
        var fixture = document.getElementById('fixture').value;

        
        if (gameName === "" || gameMode === "" || tpName === "" || rdStart === "" || rdEnd === "" || prizePool === "" || entryFee === "" || rule === "" || contactNo === "" || fixture === "")
        {
            return false;
        }
      
       else
        {
            document.getElementById("myBtn").disabled = true;
            btn.value = 'Posting...'
            return true;
        }
    }
</script>
<script> 
        setTimeout(function() {
            $('#mydivs').hide('fast');
        }, 10000);
        $(function () {
             $('#datetimepicker1').datetimepicker();
         });
    </script>


</body>
<script type='text/javascript'>

    (function ()
    {
        if (window.localStorage)
        {
            if (!localStorage.getItem('firstLoad'))
            {
                localStorage[ 'firstLoad' ] = true;
                window.location.reload();
            }

            else
                localStorage.removeItem('firstLoad');
        }
    })();
</script>

</html>

