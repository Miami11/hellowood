(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-9ac8be58"],{7469:function(t,i,s){"use strict";var o=s("de30"),e=s.n(o);e.a},de30:function(t,i,s){},fff9:function(t,i,s){"use strict";s.r(i);var o=function(){var t=this,i=t.$createElement,o=t._self._c||i;return o("div",{staticClass:"movies"},[t._m(0),o("div",{staticClass:"search"},[o("h3",[t._v("WATCH MOVIES ONLINE")]),o("el-row",[o("el-col",{attrs:{xs:24,sm:10}},[o("input",{staticClass:"movie-input",attrs:{type:"text",placeholder:"Find Movies..."}})]),o("el-col",{attrs:{xs:24,sm:6}},[o("div",{staticClass:"selectors"},[o("span",{staticClass:"selected",on:{click:function(i){t.toggleSelect=!0}}},[t._v(t._s(t.category))]),o("div",{directives:[{name:"show",rawName:"v-show",value:t.toggleSelect,expression:"toggleSelect"}],staticClass:"options-box"},[o("div",{staticClass:"option",on:{click:function(i){return t.switchCategory("All Categories")}}},[t._v("All Categories")]),o("div",{staticClass:"option",on:{click:function(i){return t.switchCategory("Action")}}},[t._v("Action")]),o("div",{staticClass:"option",on:{click:function(i){return t.switchCategory("Comedy")}}},[t._v("Comedy")]),o("div",{staticClass:"option",on:{click:function(i){return t.switchCategory("Love")}}},[t._v("Love")]),o("div",{staticClass:"option",on:{click:function(i){return t.switchCategory("Drama")}}},[t._v("Drama")])]),t.toggleSelect?o("div",{staticClass:"option-mask",on:{click:function(i){t.toggleSelect=!1}}}):t._e()])]),o("el-col",{attrs:{xs:24,sm:8}},[o("div",{staticClass:"search-btn"},[t._v("SEARCH")])])],1)],1),o("div",{staticClass:"movie-list"},[o("el-row",{attrs:{gutter:20}},t._l(6,function(i){return o("el-col",{key:i,attrs:{xs:12,sm:6,md:6}},[o("el-card",{attrs:{"body-style":{padding:"0px 0px 15px"},shadow:"hover"}},[o("img",{attrs:{src:s("bd02")}}),o("h4",[t._v("Ant-Man and the Wasp")]),o("p",{staticClass:"info"},[t._v("2018, USA, Action")]),o("i",{staticClass:"iconfont icon-collection_fill fill"}),o("i",{staticClass:"iconfont icon-collection_fill fill"}),o("i",{staticClass:"iconfont icon-collection_fill fill"}),o("i",{staticClass:"iconfont icon-collection_fill fill"}),o("i",{staticClass:"iconfont icon-collection_fill"})])],1)}),1)],1)])},e=[function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",{staticClass:"banner"},[s("p",{staticClass:"slogan"},[t._v("BROWSE OUR MOVIES")]),s("h2",[t._v("CATALOG")])])}],c=s("b775");function n(t){return Object(c["a"])({url:"/api/movie",method:"get",data:t})}var l={name:"Movies",data:function(){return{toggleSelect:!1,category:"All Categories"}},mounted:function(){n().then(function(t){console.log(t)})},methods:{switchCategory:function(t){this.category=t,this.toggleSelect=!1}}},a=l,r=(s("7469"),s("2877")),v=Object(r["a"])(a,o,e,!1,null,"6062f53a",null);i["default"]=v.exports}}]);
//# sourceMappingURL=chunk-9ac8be58.73ae1cae.js.map