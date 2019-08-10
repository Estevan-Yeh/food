import Vue from 'vue'
import App from './App'
import qs from 'qs'
var Fly = require('flyio/dist/npm/wx')
var fly = new Fly()
Vue.prototype.$http = fly
Vue.prototype.$qs = qs

var admin = 'http://192.168.0.189:80/'
Vue.prototype.$admin = admin

Vue.config.productionTip = false
App.mpType = 'app'

const app = new Vue(App)
app.$mount()
