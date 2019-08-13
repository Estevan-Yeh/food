<template>
    <div>
        <filtrate filtrateTitle='排列方式'></filtrate>
        <rank-list-category :v-if="change"></rank-list-category>
    </div>
</template>

<script>
import store from '@/store/store'
import Filtrate from '@/components/Filtrate'
import RankListCategory from '@/components/RankListCategory'

export default {
    data () {
        return {
            change: false,
            sum: 1
        }
    },
    components: {
        Filtrate,
        RankListCategory
    },
    onHide: function () {
        this.sum = 1
    },
    onReachBottom: function () {
        var that = this
        that.sum++
        var fenyeCategory = store.state.fenyeCategory
        that.$http.get(that.$admin + "/index.php/admin/nutrient_list", {
            sum: that.sum,
            category: fenyeCategory.category,
            nutrient: fenyeCategory.nutrient,
            sort: fenyeCategory.sort
        }).then((res) => {
            console.log('rankList_' + that.sum, res.data)
            store.commit('changeFenyeRankListCategory', res.data)
        })
    },
    mounted: function () {
        var pages = getCurrentPages() //获取加载的页面
        var currentPage = pages[pages.length - 1] //获取当前页面的对象
        var url = currentPage.route //当前页面url
        var category = currentPage.options.category //如果要获取url中所带的参数可以查看options
        store.commit('changeFenyeCategoryCategory', category)
        console.log('category', category)
        // category = { category: category }

        var that = this
        // that.$http.post(that.$admin + "/index.php/admin/index/category", that.$qs.stringify({ 'category': category })).then((res) => {
        //     console.log('res', res.data)
        // })

        // that.$http.get(that.$admin + "/index.php/admin/nutrient_list").then((res) => {
        //     console.log('nutrientList', res.data)
        //     store.commit('changeFiltrateList', res.data)
        // })


        that.$http.get(that.$admin + "/index.php/admin/nutrient_list", { category: category }).then((res) => {
            console.log('rankListCategory', res.data)
            store.commit('changeRankListCategory', res.data)
            that.change = true
        })
    }
}
</script>

<style scoped>
</style>
