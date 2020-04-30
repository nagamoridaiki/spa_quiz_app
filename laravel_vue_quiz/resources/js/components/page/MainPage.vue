<template>
  <div>
    <the-header />
      <router-view/>
    <the-footer />
  </div>
</template>

<script>
import TheHeader from '../layout/TheHeader'
import TheFooter from '../layout/TheFooter'

export default {
  name: 'app',
  components : {
    TheHeader,
    TheFooter
  },
}
</script>