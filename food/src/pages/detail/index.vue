<template>
  <div>
    <to-home></to-home>

    <div class="detail-bg">
      <div class="detail-calling-card">
        <div class="dcc-flex">
          <img :src="detail.img">
          <div>
            <div>{{detail.name}}</div>
            <div class="dcc-energy">
              <span>{{switchover?detail.energy_1:detail.energy_0}}{{switchover?"千焦":"千卡"}}</span> / 每100克
            </div>
          </div>
          <img
            class="icon"
            src="/static/images/user.png"
          >
        </div>
        <div class="dcc-tip">
          <block
            v-for="(item,index) in detail.tip"
            :key="index"
          >
            <span>{{item}}</span>
          </block>
        </div>
      </div>

      <div class="detail-tabBar">
        <block
          v-for="(item,index) in detail.tab"
          :key="index"
        >
          <div
            :class="tabIndex==index?'detail-tabBar-active':''"
            @tap="tapIndex(index)"
          >
            <div class="dta-title">{{item.title}}</div>
            <div class="dta-underline"></div>
          </div>
        </block>
      </div>
    </div>

    <div class="detail-energy">
      <div class="suibian">
        <div style="width:23%"></div>
        <div class="reliang">热量</div>
        <div
          class="de-switchover"
          @tap="switchoverChange"
        >{{switchover?"切换为千卡":"转换为千焦"}}</div>
      </div>
      <div class="suibian2">
        <span>{{switchover?detail.energy_1:detail.energy_0}}</span>{{switchover?"千焦":"千卡"}}
      </div>
      <div class="canvas">
        <canvas canvas-id="runCanvas"></canvas>
        <canvas canvas-id="runCanvas2"></canvas>
        <canvas canvas-id="runCanvas3"></canvas>
      </div>

      <div
        class="de-more"
        @tap="toDetailMore"
      >
        更多营养素
      </div>
    </div>

    <div class="detail-exercise">
      <img src="/static/images/user.png">
      <div>
        <div class="detail-exercise_1">消耗 <span>{{tab.title}}</span>{{detail.name}}的热量</div>
        <div>需要 <span>{{tab.exercise}}</span></div>
      </div>
    </div>

    <div class="detail-evaluate">
      <div class="detail-evaluate-title">评价：</div>
      <div>{{detail.evaluate}}</div>
    </div>

  </div>
</template>

<script>
import ToHome from '@/components/ToHome'
import store from '@/store/store'

export default {
  components: {
    ToHome,
  },
  data: function () {
    return {
      tabIndex: 0,
      switchover: false,
      detail: {
        img: '/static/images/user.png',
        name: '玉米',
        energy_0: 112,
        energy_1: 1,
        tip: ['低能量', '低钙'],
        tab: [
          {
            title: '每100克',
            energy_0: 84,
            energy_1: 8,
            protein: {
              percentage: 60,
              weight: 60
            },
            fat: {
              percentage: 10,
              weight: 10
            },
            carbohydrate: {
              percentage: 40,
              weight: 40
            },
            exercise: '遛狗45分钟'
          },
          {
            title: '每10克',
            energy_0: 8.4,
            energy_1: 0.8,
            protein: {
              percentage: 60,
              weight: 6
            },
            fat: {
              percentage: 10,
              weight: 1
            },
            carbohydrate: {
              percentage: 40,
              weight: 4
            },
            exercise: '遛狗4.5分钟'
          }
        ],
        detailMore: [
          {
            name: '能量',
            energy: '1.0千卡',
            tip: '低能量'
          },
          {
            name: '能量',
            energy: '1.0千卡'
          },
          {
            name: '能量',
            energy: '1.0千卡'
          }
        ],
        evaluate: '该食物提供较多的蛋白质、膳食纤维，推荐食用。'
      },
      tab: {},
      energy: 0
    }
  },
  created () {
    this.tab = this.detail.tab[this.tabIndex]
  },
  mounted () {
    this.setCanvas()
  },
  methods: {
    tapIndex: function (index) {
      var that = this
      if (that.tabIndex == index)
        return
      else {
        that.tabIndex = index
        that.tab = that.detail.tab[that.tabIndex]
        that.setCanvas()
      }
    },
    toDetailMore: function () {
      var that = this
      store.commit('changeDetailMore', that.detail.detailMore)
      wx.navigateTo({ url: '../detailMore/main' })
    },
    switchoverChange: function () {
      this.switchover = !this.switchover
    },
    setCanvas: function () {
      var that = this.tab.protein
      ctx("runCanvas", "蛋白质", that.percentage, that.weight, "#8cceed")

      that = this.tab.fat
      ctx("runCanvas2", "脂肪", that.percentage, that.weight, "#fcd376")

      that = this.tab.carbohydrate
      ctx("runCanvas3", "碳水化合物", that.percentage, that.weight, "#ffa492")

      // 画布初始化
      function ctx (canvas, text, percentage, weight, color) {
        var pi = Math.PI
        var engle = pi * 2 * percentage / 100
        var start = pi * 3 / 2
        var end = start + engle
        var x = 60
        var y = 60
        var r = 44
        percentage += '%'

        var ctx = wx.createCanvasContext()
        ctx_circle_stroke(ctx, x, y, r, start, end, color, 6)
        ctx_circle_stroke(ctx, x, y, r, end, start, '#ebebeb', 6)
        ctx_circle_fill(ctx, x + r * Math.cos(start), y + r * Math.sin(start), 3, 0, 2 * pi, color)
        ctx_circle_fill(ctx, x + r * Math.cos(end), y + r * Math.sin(end), 3, 0, 2 * pi, color)
        ctx_text(ctx, text, 60, 50, 14, '#575757', 'center', 'middle')
        ctx_text(ctx, percentage, 60, 70, 14, color, 'center', 'middle')
        ctx_text(ctx, weight, 66, 120, 17, '#000', 'right', 'middle')
        ctx_text(ctx, '克', 66, 120, 15, '#575757', 'left', 'middle')
        wx.drawCanvas({
          canvasId: canvas,
          actions: ctx.getActions()
        })
      }

      function ctx_circle_stroke (ctx, x, y, r, start, end, color, lineWidth) {
        ctx.beginPath()
        ctx.arc(x, y, r, start, end)
        ctx.setStrokeStyle(color)
        ctx.setLineWidth(lineWidth)
        ctx.stroke()
      }
      function ctx_circle_fill (ctx, x, y, r, start, end, color) {
        ctx.beginPath()
        ctx.arc(x, y, r, start, end)
        ctx.setFillStyle(color)
        ctx.fill()
      }
      function ctx_text (ctx, text, x, y, size, color, align, baseline) {
        ctx.beginPath()
        ctx.setFontSize(size)
        ctx.setFillStyle(color)
        ctx.setTextAlign(align)
        ctx.setTextBaseline(baseline)
        ctx.fillText(text, x, y)
      }
    }
  },

}
</script>

<style scoped>
.suibian {
  display: flex;
  justify-content: space-between;
  padding-top: 40rpx;
}
.reliang {
  color: #575757;
}
.de-switchover {
  background-color: #fc9e67;
  color: #fff;
  border-radius: 20rpx 0 0 20rpx;
  padding: 6rpx 22rpx;
  font-size: 28rpx;
}
.suibian2 {
  text-align: center;
  color: #575757;
  font-size: 30rpx;
}
.suibian2 span {
  color: #000;
  font-size: 38rpx;
  margin-right: 4rpx;
}
.de-more {
  color: #ffb070;
  text-align: center;
  padding-bottom: 40rpx;
}
.canvas {
  background-color: #fff;
  display: flex;
  justify-content: space-around;
}
canvas {
  width: 300px;
  height: 150px;
}
.detail-bg {
  background-color: #fff;
  padding-top: 20rpx;
  margin-bottom: 20rpx;
}
.dcc-flex {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.detail-calling-card {
  background: linear-gradient(to right, #ffb070, #f8715d);
  border-radius: 20rpx;
  margin: 0 30rpx 20rpx;
  box-sizing: border-box;
  padding-top: 40rpx;
  padding-right: 44rpx;
  padding-bottom: 22rpx;
  padding-left: 30rpx;
}
.dcc-flex img {
  width: 130rpx;
  height: 130rpx;
  border-radius: 6rpx;
}
.dcc-flex > div {
  color: #fff;
  flex-basis: 63%;
  font-size: 36rpx;
}
.dcc-flex > div span {
  font-weight: bold;
  font-size: 38rpx;
}
.dcc-energy {
  margin-top: 14rpx;
}
.dcc-flex img.icon {
  width: 40rpx;
  height: 40rpx;
  align-self: flex-start;
}
.dcc-tip {
  margin-top: 30rpx;
}
.dcc-tip span {
  background-color: #fff;
  color: #d77656;
  font-size: 26rpx;
  padding: 4rpx 20rpx;
  border-radius: 20rpx;
  margin-right: 20rpx;
}

.detail-tabBar {
  display: flex;
}
.detail-tabBar > div {
  margin-left: 38rpx;
  font-size: 26rpx;
  color: #575757;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.dta-underline {
  width: 50rpx;
  height: 4rpx;
  background-color: #f8715d;
  visibility: hidden;
  margin-bottom: 4rpx;
}
.detail-tabBar .detail-tabBar-active {
  font-size: 32rpx;
  color: #f8715d;
  font-weight: bold;
}
.detail-tabBar-active .dta-underline {
  visibility: visible;
}

.detail-energy {
  background-color: #fff;
  margin-bottom: 20rpx;
}

.detail-exercise {
  background-color: #fff;
  margin-bottom: 20rpx;
  display: flex;
  align-items: center;
  box-sizing: border-box;
  padding-right: 38rpx;
}
.detail-exercise img {
  width: 160rpx;
  height: 160rpx;
}
.detail-exercise_1 {
  margin-bottom: 14rpx;
}
.detail-exercise > div {
  font-size: 26rpx;
  color: #575757;
  letter-spacing: 4rpx;
}
.detail-exercise div span {
  color: #000;
  font-size: 32rpx;
}

.detail-evaluate {
  margin-bottom: 20rpx;
  background-color: #fff;
  font-size: 26rpx;
  padding: 50rpx;
}
.detail-evaluate-title {
  color: #575757;
  margin-bottom: 10rpx;
}
</style>

<style lang="wxss">
page {
  background-color: #f0f0f0;
  width: 100%;
  height: 100%;
}
</style>