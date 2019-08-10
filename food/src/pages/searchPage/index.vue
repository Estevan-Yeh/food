<template>
  <div>
    <div class="search-header">
      <div class="input">
        <icon
          class="searchcion"
          size='14'
          type='search'
        ></icon>
        <input
          type="text"
          focus="true"
          confirm-type="search"
        >
      </div>
      <div class="qingkong">清空</div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.search-header {
  display: flex;
  width: 100%;
  align-items: center;
  font-size: 28rpx;
  padding-top: 20rpx;
  padding-bottom: 10rpx;
  border-bottom: 2rpx solid #f0f0f0;
}
.search-header .input {
  background-color: #f0f0f0;
  display: flex;
  align-items: center;
  flex-basis: 100%;
  padding: 6rpx 20rpx;
  margin-left: 30rpx;
}
.search-header input {
  flex-basis: 100%;
}
.qingkong {
  color: #575757;
  min-width: 62rpx;
  padding: 0 20rpx;
}
</style>
