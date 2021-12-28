<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>take home exam</title>
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
        <link href="http://fonts.cdnfonts.com/css/harry-potter" rel="stylesheet">
    </head>
    <body>
        <div class="site">
            <div class="title">
                <h1>Create account</h1>
            </div>
            <div class="form padding">
                <form action="post">
                    <div class="padding">
                        <label for="Fname">First name</label><br>
                        <input type="text" id="Fname" name="Fname" required placeholder="John"><br>
                    </div>
                    
                    <div class="padding">
                        <label for="Lname">Last name</label><br>
                        <input type="text" id="Lname" name="Lname" required placeholder="Doe"><br>
                    </div>

                    <div class="padding">
                        <label for="Gender">Gender</label><br>
                        <select name="Gender" id="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select><br>
                    </div>

                    <div class="padding">
                        <label for="Discription">Discription</label><br>
                        <textarea type="text" id="Discription" name="Discription" required rows="4" cols="50" placeholder="Hi, I'm John Doe and i like soup"></textarea><br>
                    </div>
                </form>
                <div class="submit">
                    <input type="submit" value="Create account" id="submitbutton">
                </div>

                <div class="buttons">
                    <a href="./index.php" class="button">Home</a>
                </div>
            </div>

        </div>
        <script src="./assets/js/add_person.js"></script>
    </body>
</html>