<template>
    <div>
        <div
            class="tohome"
            @tap.stop="toHome"
        >
            <img src="/static/images/home.png">
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        toHome: function () {
            wx.reLaunch({ url: '../index/main' });
        }
    },
}
</script>

<style scoped>
.tohome {
  background-color: #f86f5a;
  position: fixed;
  right: 62rpx;
  bottom: 258rpx;
  border-radius: 100%;
  padding-bottom: 22rpx;
  padding-left: 28rpx;
  padding-top: 30rpx;
  padding-right: 28rpx;
}
.tohome img {
  width: 60rpx;
  height: 60rpx;
}
</style>
