<template>
  <div>
    <div class="index-header">
      <div class="index-bg">
        <image
          src="/static/images/bg.jpg"
          mode="widthFix"
        />
      </div>
      <div class="index-title">
        <img src="/static/images/eat.png">
        <span>吃哇</span>
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
          <div class="table-img-box"><img :src="img[index]"></div>
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
      indexTable: [],
      img: [
        "/static/images/crop.png",
        "/static/images/meat.png",
        "/static/images/milk.png",
        "/static/images/greens.png",
        "/static/images/nut.png",
        "/static/images/drinks.png",
        "/static/images/oil.png",
        "/static/images/condiment.png",
        "/static/images/snack.png",
        "/static/images/others.png"
      ]
    }
  },
  created: function () {
    var that = this
    that.$http.get(that.$admin + "/index.php/admin/index").then((res) => {
      that.indexTable = res.data
      console.log('filtrate', that.indexTable)
      // store.commit('changeFiltrateList', res.data)
    })
    that.$http.get(that.$admin + "/index.php/admin/nutrient_list").then((res) => {
      console.log('nutrientList', res.data)
      store.commit('changeFiltrateList', res.data)
    })
  },
  methods: {
    toCategory: function (index) {
      var that = this.indexTable
      store.commit('changeTest', 0)
      wx.navigateTo({ url: '../category/main?category=' + that[index] });
    },
    toSearchPage: function () {
      wx.navigateTo({ url: '../searchPage/main' });
    }
  }
}
</script>

<style scoped>
.index-bg {
  position: absolute;
  z-index: -1;
  width: 100%;
}
.index-bg image {
  width: 100%;
  height: 300rpx;
}
.index-header {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding-top: 188rpx;
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
  margin-top: 20rpx;
  background-color: #fff;
  padding: 10rpx 16rpx;
  opacity: 0.83;
  border-radius: 40rpx;
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
  margin-top: 54rpx;
}
.table-img-box {
  padding: 34rpx 0;
  border-radius: 100%;
  width: 138rpx;
  border: 1rpx solid #eee8e8;
  margin: 0 auto;
  text-align: center;
  margin-bottom: 10rpx;
}
.table-img-box img {
  width: 56rpx;
  height: 56rpx;
}
.table-txt {
  font-size: 24rpx;
  padding-left: 2rpx;
}
</style>
