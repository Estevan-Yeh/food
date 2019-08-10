<template>
    <div>
        <div class="rank-list">
            <block
                v-for="(item,index) in rankList"
                :key="index"
            >
                <div class="rlist-item">
                    <img :src="item.thumb">
                    <div>{{item.name}}</div>
                </div>
            </block>
        </div>
    </div>
</template>

<script>
import store from '@/store/store'
export default {
    data: function () {
        return {
            rankList: this.getval
        }
    },
    computed: {
        getval () {
            return store.state.rankList.list
        }
    },
    watch: {
        getval (val) {
            this.rankList = val
        }
    },
    created: function () {
        var that = this
    },
    mounted: function () {
        var that = this
        that.$http.get(that.$admin + "/index.php/admin/index/rank_list").then((res) => {
            console.log('rankList', res.data)
            store.commit('changeRankList', res.data)
        })
    }
}
</script>

<style scoped>
.rank-list {
  border-top: #f0f0f0 4rpx solid;
}
.rlist-item {
  display: flex;
  box-sizing: border-box;
  align-items: center;
  padding: 20rpx;
  border-bottom: 1rpx solid #e5e5e5;
}
.rlist-item div {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  max-width: 520rpx;
}
.rlist-item img {
  width: 100rpx;
  height: 100rpx;
  margin-right: 20rpx;
  border-radius: 6rpx;
}
</style>
