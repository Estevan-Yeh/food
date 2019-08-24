# food

> A Mpvue project

## Build Setup

``` bash
# 初始化项目
vue init mpvue/mpvue-quickstart myproject
cd myproject

# 安装依赖
npm install

# 引入 vuex
npm install vuex --save

# 引入 fly
npm install flyio --save

# 开发时构建
npm run dev

# 打包构建
npm run build

# api 接口
'http://127.0.0.1:80/'，可在 /src/main.js 中修改 admin

# 指定平台的开发时构建(微信、百度、头条、支付宝)
npm dev:wx
npm dev:swan
npm dev:tt
npm dev:my

# 指定平台的打包构建
npm build:wx
npm build:swan
npm build:tt
npm build:my

# 生成 bundle 分析报告
npm run build --report
```

## 相关基础知识

``` bash
# 小程序目录结构、全局配置及页面配置

# Vue: 
    a. 基础语法及目录结构
    b. 数据绑定及渲染
    c. 事件绑定及参数传递
    d. 生命周期、计算属性（computed）、侦听属性（watch）
    e. 组件的引用
   
# mpvue: 
    a. 目录结构
    b. 与 Vue 及小程序的关系

# Vuex:
    a. 可以简单当成 LocalStorage
    b. 简单使用 state 和 mutations

# fly: 
    简单使用 get 请求
```
