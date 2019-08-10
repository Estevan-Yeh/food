<template>
  <div>
    <div class="dm-table-title dm-flex">
      <div class="dti-name">营养素</div>
      <div class="dm-flex_2">
        <div>每100克</div>
        <div>备注</div>
      </div>
    </div>
    <div class="dm-table-list">
      <block
        v-for="(item,index) in list"
        :key="index"
      >
        <div class="dm-table-item dm-flex">
          <div class="dti-name">{{item.name}}</div>
          <div class="dm-flex_2">
            <div>{{item.energy}}</div>
            <div class="dm-table-tip">{{item.tip}}</div>
          </div>
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
      list: [
      ]
    }
  },
  onShow: function () {
    this.list = store.state.detailMore
  },
  created () {
    console.log('tag', '2')
  }
}
</script>

<style scoped>
.dm-flex {
  display: flex;
  box-sizing: border-box;
}
.dm-flex_2 {
  width: 58%;
  display: flex;
  justify-content: space-between;
}
.dti-name {
  width: 42%;
}
.dm-table-title {
  padding: 24rpx 30rpx;
  padding-right: 30rpx;
  color: #575757;
}
.dm-table-item {
  color: #292828;
  padding: 34rpx 30rpx;
  padding-right: 50rpx;
  border-bottom: 1rpx solid #e5e5e5;
  background-color: #fff;
}
.dm-table-tip {
  color: #d77656;
  text-align: right;
}
</style>


<style lang="wxss">
page {
  background-color: #f0f0f0;
  font-size: 26rpx;
}
</style>