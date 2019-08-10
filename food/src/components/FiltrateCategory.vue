<template>
    <div>
        <div
            class="filtrate"
            :class="unfold?'filtrate-unfold':'filtrate-shrink'"
        >
            <div
                class="filtrate-title"
                @tap="tapFiltrateTitle"
            >
                {{filtrate.filtrateTitle}}
                <img :src="unfold?'/static/images/shrink.png':'/static/images/unfold.png'">
            </div>
            <div
                class="filtrate-list"
                v-if="unfold"
            >
                <div
                    class="fl-title"
                    :class="fl-title?'fl-title-show':'fl-title-hide'"
                    @tap="tapFlTitle"
                >
                    <div>按营养素</div>
                    <img :src="flUnfold?'/static/images/shrink.png':'/static/images/unfold.png'">
                </div>
                <div
                    class="fl-box"
                    v-if="flUnfold"
                >
                    <block
                        v-for="(item,index) in filtrate.filtrateList"
                        :key="index"
                    >
                        <div
                            :class="filtrate.filtrateListIndex==index?'filtrate-clicked':''"
                            @tap="tapFiltrateItem(index)"
                        >{{item}}</div>
                    </block>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import store from '@/store/store'
export default {
    props: {
    },
    data: function () {
        return {
            unfold: false,
            flUnfold: true,
            filtrate: {}
        }
    },
    created: function () {
        var that = this
        that.filtrate = store.state.filtrate
    },
    methods: {
        tapFlTitle: function () {
            var that = this
            that.flUnfold = !that.flUnfold
        },
        tapFiltrateTitle: function () {
            var that = this
            that.unfold = !that.unfold
        },
        tapFiltrateItem: function (index) {
            var that = this
            that.unfold = true

            store.commit('changeFiltrateListIndex', index)
            var value = store.state.filtrate.filtrateList[index]
            store.commit('changeFiltrateTitle', value)
            // 接口获取数据：filtrateList, rankList
        }
    }
}
</script>

<style scoped>
.filtrate .filtrate-title {
  color: #575757;
  font-size: 24rpx;
  padding: 20rpx;
}
.filtrate img {
  width: 22rpx;
  height: 22rpx;
  margin-left: 14rpx;
}

.filtrate-list {
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.filtrate-list > div {
  background-color: #fff;
}
.fl-title {
  display: flex;
  box-sizing: border-box;
  padding: 20rpx 30rpx;
  justify-content: space-between;
  align-items: center;
  font-size: 24rpx;
}
.fl-box {
  display: flex;
  width: 100%;
  flex-wrap: wrap;
  align-items: center;
  /* flex-grow: 3; */
}
.fl-box > div {
  padding: 20rpx 0;
  text-align: center;
  font-size: 24rpx;
  color: #575757;
  flex-grow: 1;
  min-width: 33.33%;
  max-width: 33.33%;
}
.fl-box > .filtrate-clicked {
  padding: 10rpx 0;
  border: #ffe300 solid 1rpx;
  box-sizing: border-box;
  color: #ffe300;
  border-radius: 50rpx;
}
</style>