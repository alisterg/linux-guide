<?php
    include './includes/header.php';
?>

<title>Bash Scripting</title>


</head>

<body>

<?php
    include './includes/nav.php';
?>

    <div class="bodycontainer">

        <div class="contents">
            
            <h1>Bash Scripting</h1>
            
            <?php
            include './includes/sharer.php';
        ?>   

            <h2 id="createrun">What is a Bash Script?</h2>
            <p>A Bash script is simply a text file which can be executed by Bash. Bash scripts can be used
            to automate tasks that you perform regularly, perform advanced logic, or simply run a single command.</p> 
            <p>Any commands we have covered in previous tutorials can be used in a script, and any 
            commands we use in a script can be entered straight into the terminal.</p>

                <h3>Creating a script</h3>
                <p>We can create a script using our preferred text editor. A convention is to save scripts
                with the extension <b>.sh</b>, but it isn't necessary in Linux. Bash scripts always begin
                 with a specific line, which looks like this:</p>
                <p class="code">#!/bin/bash</p>
                <p>Which is the shebang (#!) followed by the path to the shell we are writing the script for. </p>
                <p>Here is an example script:</p>
                <p class="code">#!/bin/bash<br/>
                <br/>
                cd /home/<br/>
                echo "changed to /home"<br/>
                <p>Each command goes on a separate line, or is separated with a semicolon - unless using 
                <a class="bodylink" href="./processes.php#io">piping or redirection</a>.</p>
                
                <h3>Running a script</h3>
                <p>Before we can run a script, it must be made <b>executable</b> with <a class="bodylink" href="./permissions.php#chmod">chmod</a>.</p>
                <p class="code">$ chmod u+x example.sh</p>
                <p>To run a script, use the following syntax, while located in the directory of the script:</p>
                <p class="code">$ ./example.sh</p>
                
                <h3>Why the ./</h3>
                <p>When we enter a command or script name, Bash looks for it in a few directories. These directory names
                are stored in the PATH <a class="bodylink" href="./processes.php#envvar">environment variable</a>.</p>
                <p>When we prefix our script with ./ (current directory), we are explicitly telling Bash the location
                of our script.</p>
                
            <h2 id="variables">Variables</h2>
            <p>Variables are entities which store data that we can use in our script. We can name variables how we like,
            but remember that Bash is case-sensitive. To create a variable, use:</p>
            <p class="code"><i>variable_name</i>=<i>variable_value</i></p>
            <p>Note that we don't use spaces on either side of the equals sign.</p>
            <p>To use a variable after we have created it, simply prefix the variable name with a dollar sign. Here
            is an example of creating and using a variable:</p>
            <p class="code">#!/bin/bash<br/>
            <br/>playerScore=10<br/>
            echo $playerScore</p>
            <p>If we want to use whitespace in a variable - for example, a sentence - we must enclose it in quotation
            marks.</p>
            
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
                
            <h2 id="input">User Input</h2>
            <p>Sometimes we will need to get keyboard input from the user. We do this by using the <b>read</b> command
            and storing the result in a variable.</p>
            <p class="code">#!/bin/bash<br/><br/>
            read keyInput<br/>
            echo $keyInput</p>           
             
            <h2 id="control">Control Structures</h2>
                <h3>If</h3>
                <b>If</b> is a conditional statement where the programmer can perform different tasks depending on the 
                test condition.</p>
                <p class="code">#!/bin/bash<br/><br/>
                if [ <i>test_condition</i> ]; then<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<i>commands</i><br/>
                fi</p>
                <p>If the test condition is proven to be true, then all the commands inside <b>then</b> and <b>fi</b>
                will be executed.</p>
                <p>If the test condition is proven to be false, then it will simply skip the whole block of code.</p>
                
                <h3>If-else</h3>
                <p>When using <b>if</b>, it will skip the entire block of code if the test condition is false. But what 
                if you want to execute some other code? Use an <b>else</b> statement.</p>
                <p class="code">#!/bin/bash<br/><br/>
                if [ <i>test_condition</i> ]; then<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<i>commands</i><br/>
                else<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<i>other_commands</i><br/>
                fi</p>
                
            <h2>Example Script</h2>
                <p>Let's create a script that, when run, gives the user two options:
                <ul><li>Create a new directory in the current location</li>
                    <li>Exit program</li>
                </ul>
                Read the comments to fully understand the script. Comment lines begin with # and end with a new line.
                </p>
                <p class="code">
                #!/bin/bash<br/><br/>
                <span style="color:green"># Write the options to the terminal screen</span><br/>
                echo "Please select an option:"<br/>
                echo "1 - Make a new directory"<br/>
                echo "2 - Exit program"<br/><br/>
                <span style="color:green"># Read user input and store in a variable called 'selection'</span><br/>
                read selection<br/><br/>
                <span style="color:green"># If the user entered '1', prompt them for a directory name <br/># and create 
                a new directory using mkdir, using the <br/># name that they provide</span><br/>
                if [ "$selection" == "1" ]; then<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;echo "Enter directory name:"<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;read dirName<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;mkdir $dirName<br/>
                else<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:green"># If the user entered '2', exit the program with message.</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;if [ "$selection" == "2" ]; then<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Program exit"<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:green"># If the user entered anything other than 
                '1' or '2', <br/>&nbsp;&nbsp;&nbsp;&nbsp;# exit the program with error message.</span><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;else<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Invalid option!"<br/>
                &nbsp;&nbsp;&nbsp;&nbsp;fi<br/>
                fi</p>

            
                  
            <h2>Summary</h2>
            <p>Concepts Learned:</p>
            <ul><li><a class="bodylink" href="#createrun">Creating and running scripts</a></li>
                <li><a class="bodylink" href="#variables">Variables</a></li>
                <li><a class="bodylink" href="#input">User input</a></li>
                <li><a class="bodylink" href="#control">Control structures</a></li>
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


            <div class="chapter">
                <div class="previous"><a href="./processes.php">Previous Tutorial</a></div>
                <div class="index"><a href="./learn-linux.php">Index</a></div>
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


