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
import store from '@/store/store'

export default {
  components: { Filtrate, RankList },
  data: function () {
    return {
      sum: 1
    }
  },
  onHide: function () {
    this.sum = 1
  },
  onReachBottom: function () {
    var that = this
    that.sum++
    var fenyeRank = store.state.fenyeRank
    that.$http.get(that.$admin + "/index.php/admin/rank_list", {
      sum: that.sum,
      nutrient: fenyeRank.nutrient
    }).then((res) => {
      console.log('rankList_' + that.sum, res.data)
      store.commit('changeFenyeRankList', res.data)
    })
  },
  created: function () {
    // var that = this
    // that.filtrate = store.state.filtrate
  },
}
</script>

<style scoped>
</style>
