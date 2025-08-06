<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="shortcut icon" href="images/logo.avif" type="image/x-icon">
</head>
<body>


    {{-- form  --}}
<form action="">
    <p>Name : <input type="text"></p>
    <p>Talephone :<input type="number"></p>
    <p>Email :<input type="email"></p>
    <fieldset>
        <legend>Select Why to meet?</legend>
        <p><label for="coffee"><input type="radio" NAME="one" ID="coffee">Coffee</p>
        <p><label for="cha"><input type="radio" NAME="one" ID="cha">Cha</p>
        <p><label for="lunch"><input type="radio" NAME="one" ID="lunch">Lunch</p>
        <p><label for="diner"><input type="radio" NAME="one" ID="diner">Diner</p>
        <p><label for="breakfast"><input type="radio" NAME="one" ID="breakfast">Breakfast</p>
    </fieldset>
    <fieldset>
        <legend>Choose a place</legend>
        <p><label for="home"><input type="radio" name="two" id="home">At Home</p>
        <p><label for="office"><input type="radio" name="two" id="office">Office</p>
        <p><label for="5star"><input type="radio" name="two" id="5star">5 star</p>p
        <p><label for="7star"><input type="radio" name="two" id="7star">7 star</p>
    </fieldset>
    <p><lebel for="">Anything special??<textarea name="" id="" cols=""></textarea></lebel></p>
    <button type="submit">Submit your request.</button>
<!--    <p>This is the end.</p>-->
</form>
</body>
</html>
