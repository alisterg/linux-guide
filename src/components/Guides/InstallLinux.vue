<template>
  <div class="contents">

    <h1>Installing Linux</h1>

    <p>This tutorial guides you through installing Ubuntu. Other distributions
      follow a similar installation process,
      but they can vary.</p>

    <h2>Before Installing</h2>

    <h3>Download Software</h3>
    <p>Before doing anything you need to download the Ubuntu ISO. This free
      download can
      be found <a class="bodylink" href="http://ubuntu.com/download">here</a>
      (~1GB download).</p>

    <h3>Make your choice</h3>
    <p>There are four ways to try Linux, you can:
    <ul>
      <li>Install Linux in a <a class="bodylink" href="#virtual">virtual
        machine</a></li>
      <li>Install Linux on a <a class="bodylink" href="#liveusb">USB drive</a>
        and boot from that
      </li>
      <li>Install Linux alongside an existing OS (<a class="bodylink"
                                                     href="#dualboot">dualboot</a>)
      </li>
      <li><a class="bodylink" href="#standalone">Delete everything</a> and
        install Linux
      </li>
    </ul>
    <p>Note that for the last three options, you will require a spare USB drive
      greater than 2GB.</p>

    <h2 id="virtual">Virtual Machine</h2>

    <h3>Download Software</h3>
    <p>Downlad <strong>VirtualBox</strong>, which is entirely free software. It
      is available
      <a class="bodylink"
         href="https://www.virtualbox.org/wiki/Downloads">here</a> (~100MB
      download).</p>
    <p>Install VirtualBox by opening the installer file and following the
      prompts.</p>

    <h3>Create Virtual Machine</h3>
    <p style="color:red">Note: when creating a virtual machine, keep in mind
      that it uses actual system resources. Only allocate
      an amount of RAM and drive space that your physical computer can
      handle.</p>

    <p>
    <ol>
      <li>Open VirtualBox and click the <b>New</b> button</li>
      <li>Enter a name for your new virtual computer
        and choose <b>Linux</b> for the Type and <b>Ubuntu(64bit)</b> for the
        Version
      </li>
      <li>Next, choose how much RAM the system will need - I chose the default
        768MB
      </li>
      <li>Select <b>Create a virtual hard disk now</b> and click <b>Create</b>
      </li>
      <li>Select <b>VDI (VirtualBox Disk Image)</b> then click next</li>
      <li>Select <b>Dynamically allocated</b> hard disk, then click next</li>
      <li>Choose the maximum size of the virtual disk, then click <b>Create</b>
      </li>
    </ol>
    </p>

    <p>You should have a screen similar to this:</p>

    <img src="@/assets/img/empty_vm.png" width="724" height="549"/>


    <h3>Install Ubuntu</h3>
    <p>
    <ol>
      <li>Open the virtual machine by clicking <strong>Start</strong></li>
      <li>At the prompt, select the Ubuntu ISO that you downloaded earlier and
        click <b>start</b></li>
      <li>Click <b>Install Ubuntu</b> after it has booted</li>
      <li>Continue following the prompts, selecting the default options at <b>Installation
        Type</b> and
        <b>Keyboard Layout</b></li>
      <li>Restart the system when prompted and Ubuntu will start with this
        screen:
      </li>
    </ol>
    </p>

    <img src="@/assets/img/login_vm.png" width="642" height="554"/>

    <h2 id="liveusb">Live USB</h2>
    <h3>Download Software</h3>
    <p>To begin, download <a class="bodylink"
                             href="https://unetbootin.github.io/">UNetbootin</a>,
      which will extract the ISO to your
      USB drive and make it bootable, which you should do once it has downloaded
      by following the prompts, ensuring to
      manually specify the ISO.</p>
    <p>Here you can also specify the amount of storage you require (in MB) to
      persist across reboots:</p>

    <img src="@/assets/img/unetbootin.jpg" width="549" height="402"
         style="margin-left:40px;"/>


    <h3>Boot from USB</h3>
    <p>
    <ol>
      <li>Restart your computer with the USB drive plugged in</li>
      <li>Just after the hardware check screen, press your computer's boot
        device key, which is usually <b>F12</b></li>
      <li>Select your USB drive from the list</li>
      <li>Select 'Try Ubuntu without installing'</li>
    </ol>
    Ubuntu will start and you can begin using Linux!
    </p>

    <h2 id="dualboot">Dualboot</h2>
    <p>Dualbooting is common and simple to accomplish. When your computer
      starts, you will be given a choice
      of which operating system you want to use. </p>
    <p>You first need to follow the instructions to <a class="bodylink"
                                                       href="#liveusb">boot from
      USB</a>.

    <h3>Install Ubuntu</h3>
    <p>
    <ol>
      <li>Open 'Install Ubuntu' in the dash or from the menu</li>
      <li>When you get to the <b>Installation Type</b> screen, choose 'Install
        Ubuntu alongside...'
      </li>
      <li>Select the amount of disk space you want for your Ubuntu
        installation:
      </li>


      <img src="@/assets/img/dualboot.png" width="550" height="346"/>


      <li>Choose the default option at <b>Keyboard Layout</b></li>
      <li>Restart the system when prompted and Ubuntu will start!</li>
    </ol>
    </p>

    <h2 id="standalone">Delete everything and install Linux</h2>
    <p>The steps here are the same as <a class="bodylink" href="#dualboot">dualbooting</a>,
      except at step 2, choose
      'Replace <i>OS</i> with Ubuntu'.</p>
    <p style="color:red;">Warning! This will delete all your files.</p><br/>

    <img src="@/assets/img/standalone.png" width="550" height="349"
         style="margin-left:50px;"/>

    <div class="chapter">
      <div class="index"><router-link to="/learnlinux">Index</router-link></div>
      <div class="next"><router-link to="/learnlinux/gettingstarted">Next Tutorial</router-link></div>
    </div>

  </div>
</template>

<script>
    export default {
        name: "InstallLinux"
    }
</script>

<style scoped>

</style>
