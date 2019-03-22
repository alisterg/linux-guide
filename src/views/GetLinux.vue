<template>
  <div class="contentsLanding" style="margin-left:auto;margin-right:auto;">

    <div class="bodycontainer">
      <h1 style="text-align:center">Popular Distributions</h1>

      <p style="margin:30px auto 60px auto">The following distributions are free
        to download and use.
        For an installation guide, check the <router-link to="/learnlinux/installlinux">tutorials</router-link>.

      </p>

      <a class="distrolink" href="http://ubuntu.com">
        <div class="distro_item">
          <img src="@/assets/img/ubuntu_logo.png"/>
          <h5>Ubuntu</h5>
          <p>Ubuntu is easy to use and has a modern, intuitive interface.</p>&nbsp;
          <p>Recommended for beginners.</p>
        </div>
      </a>

      <a class="distrolink" href="http://kubuntu.org/">
        <div class="distro_item">
          <img src="@/assets/img/kubuntu_logo.png"/>
          <h5>Kubuntu</h5>
          <p>An official flavor of Ubuntu, Kubuntu comes with the KDE desktop
            which is highly customizable.</p>&nbsp;
          <p>Not recommended for older hardware.</p>
        </div>
      </a>

      <a class="distrolink" href="https://manjaro.github.io/">
        <div class="distro_item">
          <img src="@/assets/img/manjaro_logo.png"/>
          <h5>Manjaro</h5>
          <p>Manjaro (XFCE version) is based on Arch, an advanced
            distribution.</p>&nbsp;
          <p>Manjaro is recommended for beginners and runs great on older
            hardware.</p>
        </div>
      </a>

      <a class="distrolink" href="https://linuxmint.com">
        <div class="distro_item">
          <img src="@/assets/img/mint_logo.png"/>
          <h5>Linux Mint</h5>
          <p>Linux Mint uses the Ubuntu base, but has its own release cycle and
            custom interface.</p>&nbsp;
          <p>Mint is very easy to use if coming from other popular operating
            systems.</p>
        </div>
      </a>

      <a class="distrolink" href="https://getfedora.org/">
        <div class="distro_item">
          <img src="@/assets/img/fedora_logo.png"/>
          <h5>Fedora</h5>
          <p>Fedora is considered to be a cutting-edge distribution.</p>&nbsp;
          <p>Although it uses newer and possibly untested software, it is very
            accessible for beginners and advanced users alike.</p>
        </div>
      </a>

      <a class="distrolink" href="https://www.debian.org/">
        <div class="distro_item">
          <img src="@/assets/img/debian_logo.png"/>
          <h5>Debian</h5>
          <p>Debian is one of the oldest and most well-known distributions.</p>&nbsp;
          <p>Debian (stable branch) is worth considering if you are setting up a
            server, but is not recommended
            for beginners.</p>
        </div>
      </a>

    </div>

  </div>
</template>

<script>
    export default {
        name: "GetLinux"
    }
</script>

<style scoped>

</style>
