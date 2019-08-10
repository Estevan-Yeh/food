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
  right: 100rpx;
  bottom: 200rpx;
  border-radius: 100%;
  padding: 30rpx;
}
.tohome img {
  width: 60rpx;
  height: 60rpx;
}
</style>
