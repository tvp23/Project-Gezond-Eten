<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="Functions.js"></script>
</head>
<body>

    <form name="Form" action="" onsubmit="return validateForm()" method="post">
        <input type="text" name="txt_1">
        <label for="textbox">Type something to pass the check.</label><br><br>
        <input type="submit" value="Click me">
        <label for="textbox">To Submit the form. (input type="submit")</label><br><br>
        <button onclick="validateForm2()">Click me</button>
        <label for="textbox">To Submit the form. (input type="button" Alert pops up twice because of onsubmit="return validateForm()".</label><br><br>
        <button onclick="Hello()">Click me</button>
        <label for="textbox">To Rewrite the page.</label><br><br>
    </form>

</body>
</html>
