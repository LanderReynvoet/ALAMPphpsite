<?php
    $PATH = "/home/USER/PROJECTNAME";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/screen.css">
    <title>Welcome on your new site</title>
</head>
<body>
    <header>
        <h1>This is your new site!</h1>
    </header>
    <main>
        <article>
            <h2>You did great!</h2>
            <p>
                You've followed the steps of our tutorial perfectly if you read this. Let's go over what you've learned.
            </p>
        </article>
        <article>
            <h2>Debian</h2>
            <p>
                Let's start at the beginning you have installed Debian which was needed to set up your webserver.
            </p>
        </article>
        <article>
            <h2>Script</h2>
            <p>
                Afterwards you've made a directory and navigated to it using the <b>mkdir</b> and <b>cd</b> commands. This is not all you did on this part. You've also installed version control in the form of git using <b>apt install git</b> the apt install command can be used for installing many more packages! At the end you learned how to clone/download something from git using the <b>git clone</b> command.
            </p>
        </article>
        <article>
            <h2>What we did for you</h2>
            <p>
                Running the script did a couple of things. We started of by updating and upgrading the packages you had using <b>apt update and apt upgrade</b>, we recommend you run these commands before installing any new packages.
                When the updates and upgrades were done we started installing the necessary packages ( see footer for more information ).
                Afterwards we made a user for you with the credentials you gave us.
                We then set up a ssl certificate and disabled the default conf for security reasons. To finnish it up we did some editing of the apache config files so you can connect to your site.

            </p>
        </article>
        <article>
            <h2>Site</h2>
            <p>
                Next you have learned how to open the site you just made using the script. You now know you need to use the <b>ip a</b> command to get your ip address on which your server is running. Afterwards you learned that its possible to browse to this ip address using the https:// prefix
            </p>
        </article>
        <article>
            <h2>This is only the beginning of your journey</h2>
            <p>
                Ofcourse this is not the site you want. You may want to adjust it to your own needs. <br>
                To do this you can change the files in the <b><?php echo $PATH ?></b>folder the script made for you. You will see a couple of files in there already. These files are just this site to get you started. You can delete these at any point.
                We also recommend changing your password of MySQL & PHPMyAdmin since it went through the entire script. To do this you can go to your site ( http://YOUR_IP/phpmyadmin ) and login with the default or chosen password.
            </p>
        </article>

    </main>
    <footer>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="packages.html">Packages installed</a></li>
            <li><a href="authors.html">Authors</a></li>
        </ul>
    </footer>
</body>
</html>
