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
          :value="searchText"
          confirm-type="search"
          @confirm="confirm"
          @input="getValue"
        >
      </div>
      <div
        class="qingkong"
        @tap="clearInput"
      >清空</div>
    </div>

    <search-list></search-list>
  </div>
</template>

<script>
import store from '@/store/store'
import SearchList from '@/components/searchList'

export default {
  data () {
    return {
      searchText: '',
      sum: 1
    }
  },
  components: {
    SearchList
  },
  mounted () {
    this.sum = 1
  },
  methods: {
    confirm () {
      var that = this
      that.$http.get(that.$admin + "/index.php/admin/search", {
        search: that.searchText
      }).then((res) => {
        if (res.data == 0) {
          wx.showToast({
            title: '搜索不到呢......',
            icon: "none",
            duration: 1000
          })
        } else
          store.commit('changeSearchList', res.data)
      })
    },
    getValue (e) {
      var that = this
      that.searchText = e.mp.detail.value
    },
    clearInput () {
      this.searchText = ''
      store.commit('changeSearchList', [])
    }
  },
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
