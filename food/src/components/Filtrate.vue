
<template>
  <div>
    <div
      class="filtrate"
      :class="unfold?'filtrate-unfold':'filtrate-shrink'"
    >
      <div class="filtrate-title">
        <div @tap="tapFiltrateTitle">
          {{filtrateTitle}}
          <img :src="unfold?'/static/images/shrink.png':'/static/images/unfold.png'">
        </div>
        <div
          v-if="arrange"
          @tap="tapArrange"
        >
          {{arrangeTxt?'由低到高':'由高到低'}}
          <img :src="arrangeTxt?'/static/images/shrink.png':'/static/images/unfold.png'">
        </div>
      </div>
      <div
        class="filtrate-list"
        v-if="unfold"
      >
        <div
          class="fl-title"
          v-if="flTitle"
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
    flTitle: {
      type: Boolean
    },
    filtrateTitle: {
      type: String,
      value: ''
    }
  },
  data: function () {
    return {
      unfold: false,
      flUnfold: true,
      filtrate: {
        filtrateList: this.filtrateList
      },
      arrange: false,
      arrangeTxt: true
    }
  },
  computed: {
    filtrateList () {
      return store.state.filtrate.filtrateList
    },
  },
  watch: {
    filtrateList (val) {
      this.filtrate.filtrateList = val
      // console.log('this.filtrate.filtrateList', this.filtrate.filtrateList)
    }
  },
  mounted () {
    this.filtrate.filtrateList = this.filtrateList
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
      that.unfold = false

      if (!that.flTitle) {
        that.arrange = true
      }

      var name = that.filtrate.filtrateList[index]
      that.filtrateTitle = name

      var fIndex = that.filtrate.filtrateListIndex
      if (fIndex != index) {
        that.filtrate.filtrateListIndex = index

        var pages = getCurrentPages() //获取加载的页面
        var currentPage = pages[pages.length - 1] //获取当前页面的对象
        var url = currentPage.route //当前页面url
        var category = currentPage.options.category //如果要获取url中所带的参数可以查看options
        that.category = category

        if (that.flTitle) { } else {
          that.$http.get(that.$admin + "/index.php/admin/nutrient_list/child", {
            name: name,
            category: category
          }).then((res) => {
            store.commit('changeRankListCategory', res.data)
          })
        }
      }
      // 接口获取数据：filtrateList, rankList
    },
    tapArrange: function () {
      var that = this
      that.unfold = false
      that.arrangeTxt = !that.arrangeTxt
      var name = that.filtrateTitle != "排列方式" ? that.filtrateTitle : "热量"
      var sort = that.arrangeTxt ? 1 : 0
      // 接口获取数据：rankListCategory
      if (that.flTitle) { } else {
        that.$http.get(that.$admin + "/index.php/admin/nutrient_list/sort", {
          name: name,
          category: that.category,
          sort: sort
        }).then((res) => {
          store.commit('changeRankListCategory', res.data)
        })
      }
    }
  }
}
</script>

<style scoped>
.filtrate .filtrate-title {
  color: #575757;
  font-size: 24rpx;
  padding: 20rpx;
  box-sizing: border-box;
  display: flex;
  justify-content: space-between;
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
