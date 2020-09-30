<?php
include "includes/Head.php";
?>


<body>
    <div class.form>

        <form action="Resultpage.php" method="post">
            <input class="Textbox" type="text" name="Username" placeholder="Username"><br>
            <input class="Textbox" type="text" name="Leeftijd" placeholder="Leeftijd"><br>
            <input class="Textbox" type="text" name="Gewicht" placeholder="Gewicht"><br>
            <input class="Textbox" type="text" name="lengte" placeholder="Lengte in cm"><br>
            <input class="Radio" type="radio"  name="Gender" value="Man"> <label>Man</label>
            <input class="Radio" type="radio"  name="Gender" value="Vrouw"><label>Vrouw</label><br>
            <input class="Button" type="submit" name="submit" placeholder=""><br>
        </form>
    </div>
</body>