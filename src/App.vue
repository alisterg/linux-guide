<template>
  <div id="app">
    <div id="nav" class="header">
      <div class="logo">
        <span class="world">World</span>
        <span class="worldof">Of</span>
        <span class="worldlinux">Linux</span>
      </div>
      <router-link class="navlink" to="/">Home</router-link>
      <router-link class="navlink" to="/learnlinux">Learn Linux</router-link>
      <router-link class="navlink" to="/getlinux">Get Linux</router-link>
      <router-link class="navlink" to="/cheatsheet">Cheat Sheet</router-link>
    </div>

    <router-view/>

    <div class="footer">
      <p class="disclaimer">
        <router-link to="/">WorldOfLinux</router-link> - a comprehensive Linux resource for beginners.
        <br>
        <router-link to="/licensing">licensing</router-link>
      </p>
    </div>
  </div>
</template>

<style lang="scss">
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /*text-align: center;*/
  color: #2c3e50;
}
  .logo {
    float:left;
    margin: 0 5%;
    line-height: 59px;
    font-size: 1.5em;
    font-family: 'Titillium Web','Open Sans', sans-serif;
  }
  .world {
    color:white;
  }
  .worldof {
    color:white;
  }
  .worldlinux {
    color:#eb1946;
  }
</style>
