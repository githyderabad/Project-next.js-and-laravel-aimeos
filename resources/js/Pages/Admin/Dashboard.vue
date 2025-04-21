<template>
  <div>
    <h1>Admin Dashboard</h1>
    <p>Vendors: {{ vendorCount }}</p>
  </div>
</template>

<script setup>
defineProps(['vendorCount']);
</script>
