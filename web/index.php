<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piesakies webināram!</h1>
    <br>
    <br>
    <br>
    <form action="" method="get" class="form">
        <div class="form">
            <label for="name">Ievadi savu vārdu:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form">
            <label for="email">Ievadi savu epastu:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <div class="form">
            <label for="level_select">Norādi kursa līmeni:</label>
            <select name="level" id="level_select">
                <option value="">--izvēlies savu līmeni--</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>
        <br>
        <div class="form">
            <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>
            <div>
                <label for="yes">Jā</label>
                <input type="radio" name="confim" id="yes" value="yes">
            </div>
            <div>
                <label for="no">Nē</label>
                <input type="radio" name="confirm" id="no" value="no">
            </div>
        </div>
        <br>
        <div class="form">
            <input type="submit" value="Iesniegt!">
        </div>
    </form>
    

</body>
</html>