<template>
  <Link
    class="text-black-500 hover:underline"
    :class="{'font-bold underline': active }"
  >
    <slot />
  </Link>
</template>

<script>
export default {
  props: {
    active: Boolean
  }
};
</script>