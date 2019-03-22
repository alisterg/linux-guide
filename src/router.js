import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/views/Home.vue'
import LearnLinux from '@/views/LearnLinux.vue'
import DisksSystem from "@/components/Guides/DisksSystem.vue";
import FileManipulation from "@/components/Guides/FileManipulation.vue";
import Filesystem from "@/components/Guides/Filesystem.vue";
import GettingStarted from "@/components/Guides/GettingStarted.vue";
import Index from "@/components/Guides/Index.vue";
import InstallLinux from "@/components/Guides/InstallLinux.vue";
import Navigation from "@/components/Guides/Navigation.vue";
import Permissions from "@/components/Guides/Permissions.vue";
import Processes from "@/components/Guides/Processes.vue";
import Scripting from "@/components/Guides/Scripting.vue";
import Privacy from "@/views/Privacy.vue";
import CheatSheet from "@/views/CheatSheet.vue";
import GetLinux from "@/views/GetLinux.vue";

Vue.use(Router)

export default new Router({
  base: '/',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/licensing',
      name: 'licensing',
      component: Privacy
    },
    {
      path: '/cheatsheet',
      name: 'cheatsheet',
      component: CheatSheet
    },
    {
      path: '/getlinux',
      name: 'getlinux',
      component: GetLinux
    },
    {
      path: '/learnlinux',
      name: 'learnlinux',
      // route level code-splitting
      // this generates a separate chunk (about.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: LearnLinux,
      children: [
        {
          path: '',
          component: Index
        },
        {
          path: 'diskssystem',
          component: DisksSystem
        },
        {
          path: 'filemanipulation',
          component: FileManipulation
        },
        {
          path: 'filesystem',
          component: Filesystem
        },
        {
          path: 'gettingstarted',
          component: GettingStarted
        },
        {
          path: 'installlinux',
          component: InstallLinux
        },
        {
          path: 'navigation',
          component: Navigation
        },
        {
          path: 'permissions',
          component: Permissions
        },
        {
          path: 'processes',
          component: Processes
        },
        {
          path: 'scripting',
          component: Scripting
        }
      ]
    }
  ]
})
