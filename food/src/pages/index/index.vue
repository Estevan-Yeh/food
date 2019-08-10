<template>
  <div>
    <div class="index-header">
      <div class="index-title">
        <img src="/static/images/exm.png">
        <span>健康出品</span>
      </div>
      <div class="input-search">
        <icon
          class="searchcion"
          size='20'
          type='search'
        ></icon>
        <input
          type="text"
          confirm-type="search"
          placeholder="请输入食物名称"
          placeholder-style="color:#ccc"
          disabled="true"
          @tap="toSearchPage"
        >
      </div>
    </div>

    <div class="index-table">
      <block
        v-for="(item,index) in indexTable"
        :key="index"
      >
        <div @tap="toCategory(index)">
          <div class="table-img-box"><img src="/static/images/user.png"></div>
          <div class="table-txt">{{item}}</div>
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
      indexTable: []
    }
  },
  created: function () {
    var that = this
    that.$http.get(that.$admin + "/index.php/admin/index").then((res) => {
      that.indexTable = res.data
      console.log('filtrate', that.indexTable)
      // store.commit('changeFiltrateList', res.data)
    })
  },
  methods: {
    toCategory: function (index) {
      var that = this.indexTable
      wx.navigateTo({ url: '../category/main?category=' + that[index] });
    },
    toSearchPage: function () {
      wx.navigateTo({ url: '../searchPage/main' });
    }
  }
}
</script>

<style scoped>
.index-header {
  width: 100%;
  /* height: 288rpx; */
  background-color: #459b57;
  /* filter: blur(20rpx); */
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding-top: 80rpx;
  padding-bottom: 40rpx;
}
.index-title img {
  width: 36rpx;
  height: 36rpx;
}
.index-title span {
  color: #fff;
  position: relative;
  bottom: 8rpx;
  margin-left: 12rpx;
}
.input-search {
  display: flex;
  margin-top: 16rpx;
  background-color: #fff;
  padding: 10rpx 16rpx;
}
.input-search icon {
  margin-right: 10rpx;
}
.input-search input {
  width: 236rpx;
  color: #ccc;
}

.index-table {
  background-color: #fff;
  padding-top: 30rpx;
  display: flex;
  align-items: center;
  width: 100%;
  flex-wrap: wrap;
}
.index-table > div {
  text-align: center;
  min-width: 33.33%;
  margin-top: 30rpx;
}
.table-img-box {
  padding: 26rpx 0;
  border-radius: 100%;
  width: 138rpx;
  border: 1rpx solid #e5e5e5;
  margin: 0 auto;
  text-align: center;
  margin-bottom: 10rpx;
}
.table-img-box img {
  width: 72rpx;
  height: 72rpx;
}
.table-txt {
  font-size: 22rpx;
  padding-left: 6rpx;
}
</style>
