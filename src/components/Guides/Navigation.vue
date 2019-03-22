<template>
  <div class="contents">

    <h1>Navigation</h1>

    <h2>Navigating the command line</h2>
    <p>This tutorial contains fundamental Bash commands, which are essential for
      basic tasks and scripting.</p>
    <p>The following commands, and most commands in Linux, may be used with
      absolute or relative
      <router-link to="/learnlinux/filesystem#pathnames" class="bodylink">pathnames</router-link>.
    </p>

    <h3 id="ls">ls: List files and directories</h3>
    <p class="code">$ ls</p>
    <p>Ls lists the contents of the current working directory. When you first
      login, the working directory is your
      <router-link to="/learnlinux/filesystem#homedir" class="bodylink">home directory</router-link>.
    </p>
    <p>By itself, ls omits hidden files and directories. To display all files
      and
      directories, use:</p>
    <p class="code">$ ls -a</p>
    <p>Hidden files and directories begin with a dot.</p>
    <p>You may also notice two entries that seem out of place. Every directory
      on a Linux system
      contains at least two directory entries. These are ./ (current directory)
      and ../ (parent directory).</p>

    <h3 id="pwd">pwd: Print Working Directory</h3>
    <p class="code">$ pwd</p>
    <p>Pwd returns the absolute <router-link to="/learnlinux/filesystem#pathnames" class="bodylink">pathname</router-link>
      of the working
      directory. This can be useful to find
      where you are currently located when navigating the filesystem.</p>

    <h3 id="mkdir">mkdir: Make a new directory</h3>
    <p class="code">$ mkdir <em>dir_name</em></p>
    <p>Mkdir is used to create new directories. Remember absolute or relative <router-link to="/learnlinux/filesystem#pathnames">pathnames</router-link> may be
      used;
      simply typing a directory name will create it in the working directory.
    </p>
    <p>The <a class="bodylink" href="#ls">ls</a> command may be used to check
      the command worked.</p>

    <h3 id="cd">cd: Change directory</h3>
    <p class="code">$ cd <em>directory</em></p>
    <p>To change to a different working directory, use the cd command. <a
        class="bodylink" href="#pwd">Pwd</a> can be used to
      check the command worked.</p>
    <p>Cd can be used with <a class="bodylink" href="#ls">../</a> to go 'up' the
      filesystem tree.</p>
    <p class="code">$ cd ../</p>

    <h2>Arguments and Options</h2>
    <p>Command-line arguments are the words or characters that follow the
      original command.
      Some arguments are also options; which are arguments that alter the
      behavior of the
      command. Options usually begin with a dash.</p>
    <p class="code">Example: $ ls -a /home/worldoflinux/Documents</p>
    <p>In the example, we have three words:</p>
    <ul>
      <li>ls : the command used</li>
      <li>-a : the option which tells ls to display all files and directories
      </li>
      <li>/home/worldoflinux/Documents : the argument which tells ls the
        directory to list
      </li>
    </ul>

    <h2>Tab completion</h2>
    <p>Tab completion is an extremely valuable tool for navigating directories
      or completing commands. If you partially enter a command or <router-link to="/learnlinux/filesystem#pathnames" class="bodylink">pathname</router-link> then
      press
      <strong>TAB</strong>, Bash will complete the command for you, or display a
      possible
      list of completions.</p>
    <figure>
      <img src="@/assets/img/tab1.png" width="724" height="164"/>
      <figcaption>Tab completion displaying possible completions</figcaption>
    </figure>

    <h2>Summary</h2>
    <p>Commands used:</p>
    <table>
      <tr>
        <td><a class="bodylink" href="#ls">ls</a></td>
        <td> List directory contents</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#pwd">pwd</a></td>
        <td> Print working directory</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#mkdir">mkdir</a></td>
        <td>Create directories</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#cd">cd</a></td>
        <td>Change working directory</td>
      </tr>
    </table>


    <div class="chapter">
      <div class="previous"><router-link to="/learnlinux/filesystem">Previous Tutorial</router-link></div>
      <div class="index"><router-link to="/learnlinux">Index</router-link></div>
      <div class="next"><router-link to="/learnlinux/permissions">Next Tutorial</router-link></div>
    </div>

  </div>
</template>

<script>
    export default {
        name: "Navigation"
    }
</script>

<style scoped>

</style>
