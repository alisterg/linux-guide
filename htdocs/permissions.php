<?php
    include './includes/header.php';
?>

<title>Permissions</title>


</head>

<body>

<?php
    include './includes/nav.php';
?>

<div class="bodycontainer">
    <div class="contents">        
        
        <h1>Permissions and Privileges</h1>
        
        <?php
            include './includes/sharer.php';
        ?>   

        <h2>Finding information</h2>
            <h3 id="man">man: The manual</h3>
            <p class="code">$ man <em>command</em></p>
            <p>Man is the single most useful command you will learn in Linux. Man provides the manual
            pages for commands, which include all the information you need about the command.</p>
            <p>To scroll down, use the arrow keys or your mouse scroll wheel. PageUp/PageDown, Home, and End
            work as expected. To quit, press q.</p>
            <p>Try the following command:</p>
            <p class="code">$ man man</p>

            <h3 id="apropos">apropos: Find commands</h3>
            <p class="code">$ apropos <em>keywords</em></p>
            <p>Often you will need a command but not know the name of it. Apropos searches the name and
            description sections of the manual pages for the specified keywords.</p>
            <p>Note that if you have more than one keyword you must place them between single or
            double quotes.</p>

        <h2 id="permissions">Permissions</h2>
        <p>Each file in Linux has its own set of permissions. These rules determine who may access or
        modify the file.</p>
        <p>There are three types of permissions: read, write, and execute.</p>
        <ul><li>Read means the user can open or copy the file</li>
                - If the file is a directory, read gives you permission to list directory contents.
            <li>Write means the user can modify the file</li>
                - If the file is a directory, write permission lets you copy or move files to/from
                the directory.
            <li>Execute means the user can execute the file</li>
                - If the file is a directory, execute permission gives you access to the files in
                the directory.
        </ul>

            <h3 id="ls-l">ls -l: List permissions</h3>
            <p class="code">$ ls -l</p>
            <p>This listing provides lots of information about each file, but all we need to focus on
            are the first 10 characters of each line.</p>
            <figure>
            <img src="./res/ls-l.png" width="724" height="184"/>
            </figure>
            <p>You may have correctly guessed that r, w, and x stand for read, write, and execute. But why
            are there three sets? Note that the first character will be d if it is a directory.</p>
            <p>The three sets of permissions are for three different types of user:
            <ul><li>The first set is for the file <b>owner</b></li>
                <li>The second set is for the <b>group</b> the file belongs to</li>
                <li>The third set is for all <b>other users</b></li>
            </ul></p>
            <p class="code">Example:<br/>
                -rwxrw-r--<br/><br/>
                Not a directory because the first character is not d<br/><br/>
                Break it up into three sections: rwx rw- r--<br/><br/>
                - The owner has read, write, and execute permissions<br/>
                - The group has read and write permissions<br/>
                - All other users have read only permissions
            </p>            

            <h3 id="chmod">chmod: Change permissions</h3>
            <p class="code">$ chmod <em>options</em> <em>file</em></p>
            <p>It is best to explain chmod with examples:</p>
            <p class="code">Example:<br/>
            $ chmod u+x <em>filename</em><br/>Adds execute permissions for the file owner<br/><br/>
            $ chmod g-x <em>filename</em><br/>Removes execute permissions for the file group<br/><br/>
            $ chmod u+rwx <em>filename</em><br/>Adds read, write, and execute permissions
            for the file owner<br/><br/>
            </p>
            <ul><li>+ adds specified permissions</li>
                <li>- removes specified permissions</li>
                <li>u represents the file owner</li>
                <li>g represents the group</li>
                <li>o represents all other users</li>
            </ul>
            
        <div class="leaderboard" align="center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- leaderboard -->
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:728px;height:90px"
                        data-ad-client="ca-pub-2259531071904269"
                        data-ad-slot="5180385834"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
            </div>
            

        <h2>Privileges</h2>
        <p>An important concept in Linux is user privileges. Privileges are relevant if you don't have
        the correct <a class="bodylink" href="#permissions">permissions</a> on a file you need to access.</p>
        <p>Example:</p>
        <figure>
        <img src="./res/noprivilege.png" width="724" height="151"/>
        </figure>
        <p>This returns an error because we do not have execute permissions for the /etc directory.</p>
        <p>We do not need to change the file permissions to fix this! We can temporarily escalate our
        privileges with <a class="bodylink" href="#sudo">sudo</a>.</p>

            <h3 id="sudo">sudo: Rootly powers</h3>
            <p class="code">$ sudo <em>command</em></p>
            <p>Sudo is a command that allows you to execute another command as a different user. By
            default, sudo executes the command as <a class="bodylink" href="./getting-started.php#rootuser">root</a>.
            Running a command with sudo will require your password.</p>
            <p>If we use sudo with the previous example the command will succeed:</p>
            <p class="code">$ sudo mkdir /etc/ERROR<br/>[sudo] password for worldoflinux:</p>
            <p>It is a common mistake to enter a command without sudo. You then need to re-type the
            command with sudo. Luckily Bash provides an easy shortcut to do this.</p>
            <p class="code">$ sudo !!</p>
            <p>Also known as sudo bang bang, this command uses sudo on the previous command.</p>


        <h2>Summary</h2>
        <p>Commands used:</p>
        <table>
            <tr>
                <td><a class="bodylink" href="#man">man</a></td>
                <td>Bash manual pages</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#apropos">apropos</a></td>
                <td>Search for commands</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#ls-l">ls -l</a></td>
                <td>List permissions</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#chmod">chmod</a></td>
                <td>Change permissions</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#sudo">sudo</a></td>
                <td>Execute a command as root</td>
            </tr>
        </table>
        <p>Manual pages are an essential source of information when learning bash.</p>
        <p>Permissions and privileges are an important part of why Linux is such a secure operating system
        and it is wise to understand the basics.</p>
        
        <div class="leaderboard" align="center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- leaderboard -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:728px;height:90px"
                    data-ad-client="ca-pub-2259531071904269"
                    data-ad-slot="5180385834"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
        </div>
        

        <div class="chapter">
            <div class="previous"><a href="./navigation.php">Previous Tutorial</a></div>
            <div class="index"><a href="./learn-linux.php">Index</a></div>
            <div class="next"><a href="./file-manipulation.php">Next Tutorial</a></div>
        </div>

    </div>
    
    <div class="skyscraper">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- tutorial_ad -->
            <ins class="adsbygoogle"
                style="display:inline-block;width:160px;height:600px"
                data-ad-client="ca-pub-2259531071904269"
                data-ad-slot="3284850237"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    
<div style="clear:both;"></div>
</div>
<script src="../scripts/backtop.js"></script>

<?php
    include './includes/footer.php';
?>

