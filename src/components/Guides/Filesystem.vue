<template>
  <div class="contents">

    <h1>The Filesystem</h1>

    <h2>The Filesystem</h2>
    <p>The filesystem is the structure on a disk used to keep track of files.
      All modern operating systems use a filesystem structure that can be
      represented by a tree:
      it starts at the root, optionally followed by branches, and ending in
      leaves.</p>
    <figure>
      <img src="@/assets/img/tree1.png" width="529" height="314"/>
    </figure>
    <p>In our analogy, the root is the <a class="bodylink" href="#rootdir">root
      directory</a>, branches
      are <a class="bodylink" href="#files">directories</a>, and leaves are <a
          class="bodylink" href="#files">regular files</a>.</p>

    <h2 id="files">Files</h2>
    <p>Everything in Linux is a <b>file</b> or a <b>process</b>.</p>
    <p>A process is an executing program in memory actively managed by the
      operating system.</p>
    <p>A file is a passive object which exists on disk. A file could be a
      regular file: such as a text
      document, a binary file, or a movie; or it could be a directory, which is
      a file containing other files. </p>
    <p>Even devices are treated as files in Linux. Device files will be
      explained in a future
      tutorial.</p>

    <h2>Important locations</h2>
    <p>Important directories in Linux include:</p>
    <table>
      <tr>
        <td>/</td>
        <td> The root directory</td>
      </tr>
      <tr>
        <td>/home</td>
        <td>User home directories</td>
      </tr>
      <tr>
        <td>/boot</td>
        <td>Contains the boot loader and the kernel</td>
      </tr>
      <tr>
        <td>/etc</td>
        <td> Configuration files</td>
      </tr>
      <tr>
        <td>/dev</td>
        <td>Device files</td>
      </tr>
      <tr>
        <td>/bin</td>
        <td>Important system programs</td>
      </tr>
      <tr>
        <td>/usr/bin</td>
        <td>Where most executables are stored</td>
      </tr>
    </table>
    <p>The only two locations that you need to remember at this point are
      <a class="bodylink" href="#rootdir">/</a> and <a class="bodylink"
                                                       href="#homedir">/home</a>.
    </p>

    <h3 id="rootdir">The root directory</h3>
    <p>The root directory - not to be confused with the root user - is the top
      level
      directory which contains <b>all</b> other files. The root directory is
      denoted by a forward
      slash.</p>
    <p>Think of the root directory as the equivalent of the C:\ drive on
      Windows.</p>

    <h3 id="homedir">Your home directory</h3>
    <p>For each user account, a directory exists at
      /home/<em>username</em>. This directory is owned by the user and is where
      personal files should be stored.</p>

    <h2 id="pathnames">Pathnames</h2>
    <p>A pathname represents the location of a resource in the filesystem.
      There are two types of pathname: relative and absolute.</p>
    <p>Linux, Mac OS X, and websites always use forward slashes '/' to represent
      pathnames.
      Microsoft Windows always uses backslashes '\'.</p>

    <h3>Absolute pathnames</h3>
    <p>An absolute pathname always starts from the root directory; therefore
      absolute pathnames always start with a forward slash. Starting at the
      root, it lists all directories
      in the hierarchy until it reaches the name of the resource.</p>

    <p class="code">
      Example:<br/>
      /home/worldoflinux/Documents/doc1.txt<br/>
      /home/worldoflinux/Documents/games/sudoku</p>

    <h3>Relative pathnames</h3>
    <p>A relative pathname starts relative from the current location. Relative
      pathnames never start with a slash.</p>
    <p class="code">
      Example:<br/>
      Documents/doc1.txt<br/>
      Documents/games/sudoku</p>


    <h2>Summary</h2>
    <ul>
      <li>The root directory and the root user are different.</li>
      <li>All operating systems share a filesystem structure which can be
        represented by a tree.
      </li>
      <li>Make sure you understand relative and absolute pathnames.</li>
    </ul>

    <div class="chapter">
      <div class="previous"><router-link to="/learnlinux/gettingstarted">Previous Tutorial</router-link></div>
      <div class="index"><router-link to="/learnlinux">Index</router-link></div>
      <div class="next"><router-link to="/learnlinux/navigation">Next Tutorial</router-link></div>
    </div>

  </div>
</template>

<script>
    export default {
        name: "Filesystem"
    }
</script>

<style scoped>

</style>
