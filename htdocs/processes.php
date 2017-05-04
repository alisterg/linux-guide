<?php
    include './includes/header.php';
?>

<title>Processes</title>


</head>

<body>

<?php
    include './includes/nav.php';
?>

    <div class="bodycontainer">

        <div class="contents">
            
            <h1>Processes and I/O</h1>
            
            <?php
            include './includes/sharer.php';
        ?>   

            <h2>Processes</h2>
            <p>The two objects on a Linux system are <a class="bodylink" href="./filesystem.php#files">files</a>
            and processes. Processes have various attributes which determine the state and
            behavior of the process. All we need to remember is that each process has its own Process ID
            or PID.</p>

                <h3 id="ps">ps: List processes</h3>
                <p class="code">$ ps -aux</p>
                <p>There are many options for ps, but -aux usually provides all the required
                information.</p>

                <h3 id="kill">kill: End processes</h3>
                <p class="code">$ kill <em>PID</em></p>
                <p>Technically kill is used to send a signal to a process to change its state; but simply
                using the above syntax will end a process.</p>
                <p>To end a process running in your terminal window, use the <b>CTRL-C</b> key combination.</p>


            <h2 id="io">Input / Output</h2>
                
                <h3>Streams</h3>
                <p>By default, there are three special stream files which provide I/O in Bash:</p>
                <ul><li>0: Standard Input - comes from the keyboard</li>
                    <li>1: Standard Output - is sent to the shell and displayed in the terminal</li>
                    <li>2: Standard Error - is sent to the shell and displayed in the terminal</li>
                </ul>
                
                <h3>Redirection</h3>
                <p>As a Bash programmer, you can <b>redirect</b> the stream files to point to another file.</p>
                <ul><li><b>command &gt;filename</b></li>
                        Redirect Standard Output to overwrite a file
                    <li><b>command &gt;&gt;filename</b></li>
                        Redirect Standard Output to append to a file
                    <li><b>command 2&gt;filename</b></li>
                        Redirect Standard Error to overwrite a file.
                    <li><b>command 2&gt;&gt;filename</b></li>
                        Redirect Standard Error to append to the file.
                    <li><b>command &lt;filename</b></li>
                        Redirect Standard Input to read from a file.
                </ul>
                <p>This is best explained with an example. Remember how you can send a text file to Standard Output with <b>cat</b>?
                Let's redirect the output to a different text file:</p>
                <p class="code">$ cat hello.txt<br/>I'm going to send this text to another text file!<br/><br/>
                $ cat hello.txt >second.txt<br/>$ cat second.txt<br/>I'm going to send this text to another text file!<br/>&nbsp;</p>
                
                <h3>Pipes</h3>
                <p>Bash allows you to <b>pipe</b> the output of one command to the input of another.</p>
                <p class="code">$ <i>command1 &lt;inputfile | command2 | command3 &gt;outputfile</i></p>
                <p>This code uses the contents of <i>inputfile</i> as the argument for <i>command1</i>, sends that result to the input
                of <i>command2</i>, which sends its output to <i>command3</i>, which sends its output to <i>outputfile</i>.</p>
                
                
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
                
                
            <h2 id="envvar">Environment Variables</h2>
            <p>A term you may come across occasionally is environment variables. Environment variables are simply name-value pairs (variables)
            that make up your shell <b>environment</b>.</p>
            <p>For example, there is an environment variable called SHELL - which specifies your shell. There is an environment variable called
            HOME - which specifies your home directory.</p>
            
                <h3 id="env">env: List environment variables</h3>
                <p class="code">$ env</p>
                
                <h3 id="export">export: Add or change environment variables</h3>
                <p class="code">$ export <i>variable_name=variable_value</i></p>
                <p>If you want to add information to an existing environment variable, for example the PATH environment variable, use the following syntax:
                <p class="code">$ export PATH=$PATH:<i>/add/new/path</i></p>
                <p>Note to use the value of a variable in code, we need to put a dollar sign in front.</p>
                <p>Try creating your own environment variable (don't worry - it will be deleted when you exit the terminal).</p>
                
                
            <h2>Summary</h2>
            <p>Commands used:</p>
            <table>
                <tr>
                    <td><a class="bodylink" href="#ps">ps</a></td>
                    <td>List processes</td>
                </tr>
                <tr>
                    <td><a class="bodylink" href="#kill">kill</a></td>
                    <td>End processes</td>
                </tr>
                <tr>
                    <td><a class="bodylink" href="#env">env</a></td>
                    <td>List environment variables</td>
                <tr>
                    <td><a class="bodylink" href="#export">export</a></td>
                    <td>Add or change environment variables</td>
                </tr>
            </table>
            <p>Piping and redirection is one of the reasons Bash is so useful because many small utilities can be combined to
            perform advanced functions.</p>
            
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
                <div class="previous"><a href="./disks-and-system.php">Previous Tutorial</a></div>
                <div class="index"><a href="./learn-linux.php">Index</a></div>
                <div class="next"><a href="./scripting.php">Next Tutorial</a></div>
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


