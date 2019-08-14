<template>
  <div>
    <div class="rank-list-category">
      <block
        v-for="(item,index) in rankListCategory"
        :key="index"
      >
        <div
          class="rlc-item"
          @tap="toDetail(index)"
        >
          <img :src="item.thumb">
          <div>
            <div>
              <div class="rlc-name">{{item.name}}</div>
              <div class="rlc-tip">
                <span>{{item.energy}}</span>{{item.unit}}/100克</div>
            </div>
            <img src="/static/images/exm.png">
          </div>
        </div>
      </block>
    </div>
  </div>
</template>

<script>
import store from '@/store/store'
export default {
  computed: {
    rankListCategory () {
      return store.state.rankListCategory
    }
  },
  watch: {
    rankListCategory (val) {
      this.rankListCategory = val
    }
  },
  mounted () {
    this.rankListCategory = store.state.rankListCategory
  },
  methods: {
    toDetail: function (index) {
      var that = this
      var foods_id = that.rankListCategory[index].foods_id

      that.$http.get(that.$admin + "/index.php/admin/food_details", {
        foods_id: foods_id
      }).then((res) => {
        store.commit('changeFoodDetails', res.data)
      })
      store.commit('changeTest', 1)
      wx.navigateTo({ url: '../detail/main' });
    }
  },
}
</script>

<style scoped>
.rank-list-category {
  border-top: #f0f0f0 4rpx solid;
}
.rlc-item {
  display: flex;
  box-sizing: border-box;
  align-items: center;
  padding: 20rpx;
  border-bottom: 1rpx solid #e5e5e5;
  font-size: 24rpx;
}
.rlc-item > img {
  width: 100rpx;
  height: 100rpx;
  margin-right: 20rpx;
  border-radius: 6rpx;
}
.rlc-item > div {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}
.rlc-name {
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  max-width: 520rpx;
}
.rlc-comment {
  position: relative;
  width: 0rpx;
  height: 0rpx;
}
.rlc-item > div img {
  width: 36rpx;
  height: 36rpx;
  margin: 0 20rpx;
}
.rlc-tip {
  color: #575757;
  margin-top: 20rpx;
}
.rlc-tip span {
  color: red;
}
</style>
