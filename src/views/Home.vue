<template>
  <div class="contentsLanding" style="margin-left:auto;margin-right:auto;">

    <div class="container">

      <div class="left">
        <h4>What is Linux?</h4>
        <p>Linux is an operating system<sup>1</sup> just like Windows or OS X.
          You can use it
          to browse the web, play games, and much more. </p><br/>
        <p>Linux comes in many different versions, called distributions.
          Distributions come in all
          shapes and sizes and most are free of charge.</p>
      </div>

      <div class="right">
        <div id="tux"></div>
        <router-link to="getlinux" class="link">Get Linux</router-link>
      </div>

      <div class="right">
        <h4>Why Linux?</h4>
        <p>Linux is highly customizable due to its modular design. There are
          many tools available
          to make your system your own.</p><br/>
        <p>Windows viruses do not work on Linux.</p><br/>
        <p>Linux powers a large portion of the Internet's Web Servers. You may find yourself maintaining one some day!</p>
      </div>

      <div class="left">
        <div id="prompt"></div>
        <router-link to="learnlinux" class="link">Learn Linux</router-link>
      </div>

    </div>

    <p id="note1">
      <sup>1</sup>Technically Linux is the kernel - the
      core of the operating system which provides an interface between user
      applications and hardware.
      Linux distributions consist of the Linux kernel with other software
      packaged: most notably the
      GNU system.</p>

  </div>
</template>

<script>
    // @ is an alias to /src
    export default {
        name: 'home',
        components: {

        }
    }
</script>
