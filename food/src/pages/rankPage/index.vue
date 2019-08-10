<template>
  <div>
    <filtrate
      filtrateTitle='筛选'
      flTitle="true"
    ></filtrate>
    <rank-list></rank-list>
  </div>
</template>

<script>
import Filtrate from '@/components/Filtrate'
import RankList from '@/components/RankList'

export default {
  components: { Filtrate, RankList },
  data: function () {
    return {
    }
  },
  created: function () {
    // var that = this
    // that.filtrate = store.state.filtrate
  },
}
</script>

<style scoped>
</style>
