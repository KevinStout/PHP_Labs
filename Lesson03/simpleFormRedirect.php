<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/simpleFormRedirect.css">
    <title>Simple Form Redirect</title>
</head>
<body>
    <section>
        <?php

        

        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset id="addressBox" class="center">
                <legend>Ultimate Ski Vacation</legend>
                <p style="text-align:left;margin-top:-10px;"><span class="error">* required fields</span></p>

                <p><label for="name" id="labelFormat">Name:</label>
                <input class="formEntry" id="name" name="name" size="30" style="width:300px" value="<?php echo $name ?>"/>
                *<br><span class="error"><?php echo $nameErr;?></span><br></p>

                <p><label for="email" id="labelFormat">Email:</label>
                <input class="formEntry" id="email" name="email" size="30" style="width:300px" value="<?php echo $email ?>"/>
                *<br><span class="error"><?php echo $emailErr;?></span><br></p>

                <p><label for="website" id="labelFormat">website:</label>
                <input class="formEntry" id="website" name="website" size="30" style="width:300px" value="<?php echo $website ?>"/>
                *<br><span class="error"><?php echo $websiteErr;?></span><br></p>

                <p><label for="interest" id="labelFormat">Skiing Type</label>
                <select class="formEntry" name="interest" id="interest" style="text-align:left; width:300px;">
                    <option value="">Please Select A Type Of Skiing</option>
                    <option <?php if ($interest == "downhill" echo "selected";?> value="downhill">Downhill Skiing</option>
                    <option <?php if ($interest == "backcountry" echo "selected";?> value="backcountry">Backcountry Skiing</option>
                    <option <?php if ($interest == "freestyle" echo "selected";?> value="freestyle">Freestyle Skiing</option>
                    <option <?php if ($interest == "telemark" echo "selected";?> value="telemark">Telemark Skiing</option>
                </select>*<br><span class="error" style="margin-left:100px;"><?php echo $interestErr;?></span><br></p>

                <p><label for="state" id="labelFormat">Destinations To Ski</label></p>
                <div class="formEntry" style="flex-inline; margin-left:250px; width:300px;">
                    <input type="checkbox" name="state[]" id="alaska" value="alaska" <?php if ($alaskaSelect) echo "checked";?>>Alaska<br>
                    <input type="checkbox" name="state[]" id="california" value="california" <?php if ($californiaSelect) echo "checked";?>>California<br>
                    <input type="checkbox" name="state[]" id="colorado" value="colorado" <?php if ($coloradoSelect) echo "checked";?>>Colorado<br>
                    <input type="checkbox" name="state[]" id="maine" value="maine" <?php if ($maineSelect) echo "checked";?>>Maine<br>
                    <input type="checkbox" name="state[]" id="michigan" value="michigan" <?php if ($michiganSelect) echo "checked";?>>Michigan<br>
                    <input type="checkbox" name="state[]" id="montana" value="montana" <?php if ($montanaSelect) echo "checked";?>>Montana<br>
                    <input type="checkbox" name="state[]" id="utah" value="utah" <?php if ($utahSelect) echo "checked";?>>Utah<br>
                </div>

                <p><label for="comment" id="labelFormat">Comments:</label>
                    <textarea class="formEntry" id="comment" name="comment" style="width:340px; height:200px;"><?php echo $comment ?></textarea>
                </p>
                <p>&nbsp;</p>
                <div style="flex-inline;">
                    <p><span class="error"><?php echo $genderErr;?></span></p>
                    <p><label for="gender" id="labelFormat">Gender:</label></p>
                    <p style="text-align:left;"><label for="female">&nbsp;&nbsp;Female</label>
                        <input type="radio" name="gender"<?php if (isset($gender)&& $gender=="female") echo "checked";?> value="female">
                        <label for="male">&nbsp;&nbsp;Male</label>
                        <input type="radio" name="gender"<?php if (isset($gender)&& $gender=="male") echo "checked";?> value="male">&nbsp;
                    *</p>
                </div><br>

                <p style="flex-inline;"><input class="inputButton" type="submit" id="submit" style="clear:both; width:190px;">
                    <input class="inputButton" type="reset" name="reset" id="reset" style="clear:both; width:190px; margin-left:10px;"><br>
                </p>
            </fieldset>
        </form>
    </section>
</body>
</html>