import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    filtrate: {
      filtrateList: [
        'tip_0',
        'tip_1',
        'tip_2',
        'tip_3',
        'tip_4',
        'tip_5',
        'tip_6',
        'tip_7',
        'tip_8'
      ],
      filtrateListIndex: -1
    },
    rankList: {
      type: '',
      list: [
        {
          img: '/static/images/user.png',
          name:
            '低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类低GI-主食类',
          energy: 112
        },
        {
          img: '/static/images/user.png',
          name: '低GI-主食类',
          energy: 112
        },
        {
          img: '/static/images/user.png',
          name: '低GI-主食类',
          energy: 112
        },
        {
          img: '/static/images/user.png',
          name: '低GI-主食类',
          energy: 112
        },
        {
          img: '/static/images/user.png',
          name: '低GI-主食类',
          energy: 112
        }
      ]
    },
    rankListCategory: [],
    detailMore: []
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
      state.rankList.list = value
    },
    changeDetailMore(state, value) {
      state.detailMore = value
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
