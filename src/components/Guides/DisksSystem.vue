<template>
  <div class="contents">

    <h1>Disks and System</h1>

    <h2>Disks</h2>
    <p>In Linux, disks are represented by device <router-link to="/filesystem#files" class="bodylink">files</router-link>.
      Device files act as an interface between the device driver and the user.
    </p>
    <p>Device files are found in /dev. Entire disks are represented by files
      named sda, sdb, sdc etc.
      For example /dev/sda would be the first disk, /dev/sdb would be the second
      disk, and so on.</p>

    <h3 id="fdisk">Partitions</h3>
    <p>Disk partitions are created to logically split a disk into sections. A
      formatted disk
      will contain at least one partition with a filesystem prepared.</p>
    <p>Like the whole disk, partitions are represented by device files. These
      files are named
      sda1, sda2, sda3 etc. For example /dev/sda1 would be the first partition
      on the first disk,
      /dev/sdb3 would be the third partition on the second disk, and so on.</p>
    <p class="code">$ sudo fdisk -l</p>
    <p>You can list your partitions with fdisk -l. Note this command requires
      root privileges.</p>

    <h3 id="mount">mount: Mount a filesystem</h3>
    <p class="code">$ mount -t <em>type /dev/device /mount/point</em></p>
    <p>Mounting a filesystem attaches it to the specified mount point so it can
      be accessed
      via the standard filesystem. The standard mount points are /mnt (for
      manually mounted devices)
      and /media (for removable media such as USB drives).</p>
    <p>The -t type option represents the type of filesystem on the partition.
      Most commonly
      the filesystem will be ext4, FAT32 or NTFS.</p>

    <h3 id="umount">umount: Unmount a filesystem</h3>
    <p class="code">$ umount <em>/dev/device</em></p>
    <p>OR</p>
    <p class="code">$ umount <em>/mount/point</em></p>
    <p>Unmounting a filesystem is very straightforward. Note that you should
      only use the first
      command if you know that it was mounted at one mount point.</p>

    <h2>System Information</h2>

    <h3 id="df">df: List filesystem disk space usage</h3>
    <p class="code">$ df -h</p>
    <p>Df lists all the mounted filesystems and their usage. Note that the -h
      option makes df
      list sizes in MB and GB to make it readable.</p>
    <figure>
      <img src="@/assets/img/dfh.png" width="724" height="306"/>
      <figcaption>Listing filesystem space</figcaption>
    </figure>

    <h3 id="free">free: Display memory usage</h3>
    <p class="code">$ free -h</p>
    <p>Free lists memory usage. As with <a class="bodylink" href="#df">df</a>,
      the -h option makes the output
      more readable.</p>

    <h3 id="uname">uname: List system information</h3>
    <p class="code">$ uname <em>options</em></p>
    <p>Uname has access to a wealth of information including hostname and kernel
      version. Read
      the manual page for full details.</p>

    <h3 id="w">w: Show who is logged on and what they are doing</h3>
    <p class="code"> $ w</p>
    <p>W lists all active users, their location and what activity they are
      currently performing.</p>

    <h2>Summary</h2>
    <p>Commands used:</p>
    <table>
      <tr>
        <td><a class="bodylink" href="#fdisk">fdisk -l</a></td>
        <td>List partitions</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#mount">mount</a></td>
        <td>Mount filesystems</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#umount">umount</a></td>
        <td>Unmount filesystems</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#df">df</a></td>
        <td>List filesystem usage</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#free">free</a></td>
        <td>List memory usage</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#uname">uname</a></td>
        <td>List system information</td>
      </tr>
      <tr>
        <td><a class="bodylink" href="#w">w</a></td>
        <td>List active users</td>
      </tr>
    </table>
    <p>Make sure to read the manual pages to learn the different options for
      commands.</p>

    <div class="chapter">
      <div class="previous"><router-link to="/learnlinux/filemanipulation">Previous Tutorial</router-link></div>
      <div class="index"><router-link to="/learnlinux">Index</router-link></div>
      <div class="next"><router-link to="/learnlinux/processes">Next Tutorial</router-link></div>
    </div>

  </div>
</template>

<script>
    export default {
        name: "DisksSystem"
    }
</script>

<style scoped>

</style>
