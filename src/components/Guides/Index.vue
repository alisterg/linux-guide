<template>
  <div class="container">

    <h1 style="text-align:center">Linux Tutorials</h1>

    <div class="index_header"><h2>The Basics</h2></div>

    <div class="flex-distro">
      <router-link to="/learnlinux/installlinux" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_gui_small.png"/>
          <h5>1. Install Linux</h5>
          <ul>
            <li>Virtual Machines</li>
            <li>Boot from USB</li>
            <li>Dualboot</li>
            <li>Wipe everything</li>
          </ul>
        </div>
      </router-link>

      <router-link to="/learnlinux/gettingstarted" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_gui_small.png"/>
          <h5>2. Getting Started</h5>
          <ul>
            <li>User Interfaces</li>
            <li>Shell and terminal</li>
            <li>Entering commands</li>
            <li>Root user</li>
          </ul>
        </div>
      </router-link>

      <router-link to="/learnlinux/filesystem" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_gui_small.png"/>
          <h5>3. Filesystem</h5>
          <ul>
            <li>Files</li>
            <li>Important locations</li>
            <li>Pathnames</li>
          </ul>
        </div>
      </router-link>

      <div class="index_header"><h2>Bash</h2></div>

      <router-link to="/learnlinux/navigation" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_prompt_small.png"/>
          <h5>4. Navigating the System</h5>
          <ul>
            <li>Navigating with commands</li>
            <li>Arguments and options</li>
            <li>Tab completion</li>
          </ul>
        </div>
      </router-link>

      <router-link to="/learnlinux/permissions" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_prompt_small.png"/>
          <h5>5. Permissions</h5>
          <ul>
            <li>Finding information</li>
            <li>Permissions</li>
            <li>Privileges</li>
            <li>Sudo</li>
          </ul>
        </div>
      </router-link>

      <router-link to="/learnlinux/filemanipulation" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_prompt_small.png"/>
          <h5>6. Manipulating Files</h5>
          <ul>
            <li>Moving files around</li>
            <li>Deleting things</li>
            <li>Display text files</li>
            <li>Wildcards/Globbing</li>
          </ul>
        </div>
      </router-link>

      <router-link to="/learnlinux/diskssystem" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_prompt_small.png"/>
          <h5>7. Disks and System</h5>
          <ul>
            <li>Disks and devices</li>
            <li>Partitions</li>
            <li>System information</li>
          </ul>
        </div>
      </router-link>

      <router-link to="/learnlinux/processes" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_prompt_small.png"/>
          <h5>8. Processes and I/O</h5>
          <ul>
            <li>Processes</li>
            <li>Input/Output</li>
            <li>Redirection and piping</li>
            <li>Environment Variables</li>
          </ul>
        </div>
      </router-link>

      <router-link to="/learnlinux/scripting" class="distrolink">
        <div class="distro_item">
          <img src="@/assets/img/cartoon_prompt_small.png"/>
          <h5>9. Bash Scripting</h5>
          <ul>
            <li>Creating scripts</li>
            <li>Variables</li>
            <li>User input</li>
            <li>Control structures</li>
          </ul>
        </div>
      </router-link>
    </div>
    

  </div>
</template>

<script>
    export default {
        name: "Index"
    }
</script>

<style scoped>

</style>
