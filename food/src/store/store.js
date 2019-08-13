import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    filtrate: {
      filtrateList: [],
      filtrateListIndex: -1
    },
    rankList: [],
    rankListCategory: [],
    foodDetails: [],
    detailMore: [],
    fenyeCategory: {
      category: '',
      nutrient: '',
      sort: ''
    },
    fenyeRank: {
      nutrient: ''
    }
  },
  mutations: {
    changeFiltrateListIndex(state, value) {
      state.filtrate.filtrateListIndex = value
    },
    changeFiltrateList(state, value) {
      state.filtrate.filtrateList = value
    },
    changeRankListCategory(state, value) {
      state.rankListCategory = value
    },
    changeRankList(state, value) {
      state.rankList = value
    },
    changeDetailMore(state, value) {
      state.detailMore = value
    },
    changeFoodDetails(state, value) {
      state.foodDetails = value
    },
    changeFenyeCategoryNutrient(state, value) {
      state.fenyeCategory.nutrient = value
    },
    changeFenyeCategoryCategory(state, value) {
      state.fenyeCategory.category = value
    },
    changeFenyeCategorySort(state, value) {
      state.fenyeCategory.sort = value
    },
    changeFenyeRankListCategory(state, value) {
      state.rankListCategory = state.rankListCategory.concat(value)
    },
    changeFenyeRankList(state, value) {
      state.rankList = state.rankList.concat(value)
    },
    changeFenyeRankNutrient(state, value) {
      state.fenyeCategory.nutrient = value
    }
  },
  getters: {
    rankList: state => {
      return state.rankList.list
    },
    filtrateList: state => {
      return state.filtrate.filtrateList
    }
  }
})
