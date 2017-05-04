

<?php
    include './includes/header.php';
?>

<title>Bash Cheat Sheet - World Of Linux</title>


</head>

<body>

<?php
    include './includes/nav.php';
?>

<div class="bodycontainer">
    <div class="contentsLanding">
    
        <h1 style="margin-top:50px; text-align:center;">Bash Cheat Sheet</h1>
        
        <?php
            include './includes/sharer.php';
        ?>   

        <table class="table table-hover">
            <thead>
                <th>Files</th>
            </thead>
                <tr>
                    <td>ls</td>
                    <td>List files</td>
                </tr>
                <tr>
                    <td>ls -a</td>
                    <td>List all files including hidden files</td>
                </tr>
                <tr>
                    <td>pwd</td>
                    <td>Print working directory</td>
                </tr>
                <tr>
                    <td>cd</td>
                    <td>Change directory</td>
                </tr>
                <tr>
                    <td>rm <i>file_name</i></td>
                    <td>Delete files</td>
                </tr>
                <tr>
                    <td>mkdir <i>dir_name</i></td>
                    <td>Create directories</td>
                </tr>
                <tr>
                    <td>rmdir <i>dir_name</i></td>
                    <td>Delete empty directories</td>
                </tr>
                <tr>
                    <td>cp <i>source destination</i></td>
                    <td>Copy files</td>
                </tr>
                <tr>
                    <td>mv <i>source destination</i></td>
                    <td>Move files</td>
                </tr>
                <tr>
                    <td>file <i>file_name</i></td>
                    <td>Determine file type</td>
                </tr>
                <tr>
                    <td>cat <i>file_name</i></td>
                    <td>Display file contents</td>
                </tr>
                <tr>
                    <td>touch <i>file_name</i></td>
                    <td>Create empty files</td>
                </tr>
                <tr>
                    <td>more <i>file_name</i></td>
                    <td>File pager</td>
                </tr>
                <tr>
                    <td>less <i>file_name</i></td>
                    <td>File pager</td>
                </tr>
            
            <thead>
                <th>System / Bash</th>
            </thead>
                <tr>
                    <td>man <i>command</i></td>
                    <td>Open command manual pages</td>
                </tr>
                <tr>
                    <td>sudo <i>command</i></td>
                    <td>Run command as root</td>
                </tr>
                <tr>
                    <td>uname -a</td>
                    <td>List kernel and system information</td>
                </tr>
                <tr>
                    <td>w</td>
                    <td>List active users</td>
                </tr>
                <tr>
                    <td>whoami</td>
                    <td>List your username</td>
                </tr>
                <tr>
                    <td>date</td>
                    <td>List today's date</td>
                </tr>
                <tr>
                    <td>shutdown</td>
                    <td>Shutdown the system</td>
                </tr>
                <tr>
                    <td>hostname</td>
                    <td>Lists computer name</td>
                </tr>
                <tr>
                    <td>env</td>
                    <td>List environment variables</td>
                </tr>
                <tr>
                    <td>export <i>variable_name</i></td>
                    <td>Create or modify environment variables</td>
                </tr>
            
            <thead>
                <th>Hardware</th>
            </thead>
                <tr>
                    <td>fdisk -l</td>
                    <td>List partition tables</td>
                </tr>
                <tr>
                    <td>mount <i>device mount_point</i></td>
                    <td>Mount filesystems</td>
                </tr>
                <tr>
                    <td>umount <i>mount_point</i></td>
                    <td>Unmount filesystems</td>
                </tr>
                <tr>
                    <td>lspci</td>
                    <td>List PCI devices</td>
                </tr>
                <tr>
                    <td>lsusb</td>
                    <td>List USB devices</td>
                </tr>
                <tr>
                    <td>df</td>
                    <td>Report disk space usage</td>
                </tr>
                <tr>
                    <td>free</td>
                    <td>Report memory usage</td>
                </tr>
            
            <thead>
                <th>Processes</th>
            </thead>
                <tr>
                    <td>ps -aux</td>
                    <td>List running processes</td>
                </tr>
                <tr>
                    <td>top</td>
                    <td>List running processes interactively</td>
                </tr>
                <tr>
                    <td>kill <i>process_id</i></td>
                    <td>Terminate a process</td>
                </tr>
            
            <thead>
                <th>File permissions</th>
            </thead>
                <tr>
                    <td>ls -l</td>
                    <td>List file permissions</td>
                </tr>
                <tr>
                    <td>chmod <i>permissions file_name</i></td>
                    <td>Change file permissions</td>
                </tr>
                <tr>
                    <td>chown <i>user_name file_name</i></td>
                    <td>Change file owner</td>
                </tr>
            
            <thead>
                <th>Miscellaneous</th>
            </thead>
                <tr>
                    <td>which <i>command</i></td>
                    <td>List command location</td>
                </tr>
                <tr>
                    <td>wc <i>file_name</i></td>
                    <td>List word count of text files</td>
                </tr>
                <tr>
                    <td>locate <i>file_name</i></td>
                    <td>Locate files on the filesystem</td>
                </tr>
                <tr>
                    <td>grep <i>pattern file_name</i></td>
                    <td>Print lines matching a pattern</td>
                </tr>
                
                
                
        </table>
        
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

    </div>
<div style="clear:both;"></div>
</div>
<script src="../scripts/backtop.js"></script>


<?php
    include './includes/footer.php';
?>

