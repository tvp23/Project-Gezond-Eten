<?php
include "includes/Head.php";
?>


<body>
    <h2>BMI Calculator</h2>
    <div class.form>

        <form action="Resultpage.php" method="post">
            <input class="Textbox" id="Username" type="text" name="Username" placeholder="Username"><br>
            <input class="Textbox" id="Leeftijd" type="text" name="Leeftijd" placeholder="Leeftijd"><br>
            <input class="Textbox" id="Gewicht" type="text" name="Gewicht" placeholder="Gewicht"><br>
            <input class="Textbox" id="lengte" type="text" name="lengte" placeholder="Lengte in cm"><br>
            <input class="Radio" id="Man" type="radio"  name="Gender" value="Man"> <label>Man</label>
            <input class="Radio" id="Vrouw"type="radio"  name="Gender" value="Vrouw"><label>Vrouw</label><br>
            <input class="Button" id="Submit" type="submit" name="submit" placeholder=""><br>
        </form>
    </div>
</body>