<?php
    include './includes/header.php';
?>

<title>File Manipulation</title>


</head>

<body>

<?php
    include './includes/nav.php';
?>

<div class="bodycontainer">
    <div class="contents">
    
        <h1>File Manipulation</h1>
        
        <?php
            include './includes/sharer.php';
        ?>   

        <h2>Moving files around</h2>
        <p>Often we want to move files around the filesystem, either to organize them or because they
        need to be in a specific location. We can do this in a graphical program or via the shell.</p>
        <p>Remember you can use relative or absolute <a class="bodylink" href="./navigation.php#pathnames">
        pathnames</a> with all these commands.</p>

            <h3 id="cp">cp: Copy files</h3>
            <p class="code">$ cp <em>source_file destination_filename</em></p>
            <p>Cp creates a duplicate of the original file.</p>

            <h3 id="mv">mv: Move files</h3>
            <p class="code">$ mv <em>source_file destination_filename</em></p>
            <p>Mv moves the original file.</p>
            <p>Mv works by simply changing the pathname of a file. Therefore, we can use mv to
            rename files.</p>
            <p class="code">Example: $ mv game1 game2</p>
            <p>The example changes the filename from game1 to game2.</p>
            
            <h3 id="touch">touch: Create files</h3>
            <p class="code">$ touch <em>filename</em></p>
            <p>Touch can be used to create empty files.</p>

        <h2>Deleting things</h2>
        <p>Sometimes you will want to delete unwanted files or directories. The process to remove
        regular files is different from removing directories.</p>
        <p style="color:red">Warning! Using the following methods permanently deletes files and
        does not ask for confirmation! Use at your own risk.</p>

            <h3 id="rm">rm: Delete regular files</h3>
            <p class="code">$ rm <em>filename</em></p>

            <h3 id="rmdir">rmdir: Delete directories</h3>
            <p class="code">$ rmdir <em>directory</em></p>
            <p>Rmdir will not allow you to delete a populated directory- make sure it is empty.
            To delete a populated directory, you need to use rm -r.</p>

        <h2>Display text files</h2>
        <p>There are multiple ways to display text files in the terminal window. The most common ways
        are explained below.</p>

            <h3 id="cat">cat: Manipulate files</h3>
            <p class="code">$ cat <em>filename</em></p>
            <p>Cat, in its simplest form, displays the contents of a file in the terminal window.
            Cat has other uses, which we will discuss in a future tutorial.</p>

            <h3 id="more">more: A simple pager</h3>
            <p class="code">$ more <em>filename</em></p>
            <p>More is a pager, a shell program which displays files, page by page.</p>
            <p>Press <b>SPACE</b> to scroll down a page and <b>ENTER</b> to scroll down one line.</p>

            <h3 id="less">less: A less simple pager</h3>
            <p class="code">$ more <em>filename</em></p>
            <p>Less is a more sophisticated pager, and is the default pager used by
            <a class="bodylink" href="./permissions.php#man">man</a>.</p>
            
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
            

        <h2>Wildcards and Globbing</h2>
        <p>A notable technique in Linux and other environments is globbing.</p>
        <p>Globbing is the process of using special characters (wildcard characters) in commands
        to specify filenames. These wildcard characters can represent multiple characters or sets of characters; this
        is extremely useful if:</p>
        <ol><li>You do not know the exact filename</li>
            <li>You want the command to execute on multiple files</li></ol>
        <p>While wildcards could take up a tutorial of their own, the only two that you need to know
        about are * and ?</p>

            <h3>* : Any and all characters</h3>
            <p>The asterisk character represents any number of characters, including zero characters, in
            a filename.</p>
            <p class="code">Example: $ rm *</p>
            <p>The example command will delete all files in the current directory.</p>
            <p class="code">Example: $ rm *.pdf</p>
            <p>The example command will delete all files in the current directory with the .pdf extension.</p>

            <h3>? : Any single character</h3>
            <p>The question mark represents any single character in a filename.</p>
            <p class="code">Example: $ rm june?report.txt</p>
            <p>Some example filenames that the example will delete: june1report.txt, june_report.txt,
            juneAreport.txt.</p>

            <h3>Combinations</h3>
            <p>You can use any combination of wildcard characters.</p>
            <p class="code">Example: $ rm *.aaa?</p>
            <p>Some example filenames that the example will delete: hello.aaab, linux.aaaz, 123.aaa4.</p>

        <h2>Summary</h2>
        <p>Commands used:</p>
        <table>
            <tr>
                <td><a class="bodylink" href="#cp">cp</a></td>
                <td>Copy files</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#mv">mv</a></td>
                <td>Move (rename) files</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#touch">touch</a></td>
                <td>Create empty files</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#rm">rm</a></td>
                <td>Delete files</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#rmdir">rmdir</a></td>
                <td>Delete directories</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#cat">cat</a></td>
                <td>Manipulate files</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#more">more</a></td>
                <td>Display files</td>
            </tr>
            <tr>
                <td><a class="bodylink" href="#less">less</a></td>
                <td>Display files</td>
            </tr>
        </table>
        <p>Globbing is extremely useful in many applications including moving multiple files, deleting
        multiple files, and more.</p>
        
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
            <div class="previous"><a href="./permissions.php">Previous Tutorial</a></div>
            <div class="index"><a href="./learn-linux.php">Index</a></div>
            <div class="next"><a href="./disks-and-system.php">Next Tutorial</a></div>
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


