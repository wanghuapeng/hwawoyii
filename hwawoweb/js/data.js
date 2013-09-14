DATA = {
    menu: [{//一级菜单
    //        menuid: 'm001',
    //        name: '账号管理',
    //        code: 'm001',
    //        icon: 'images/pcwxh.png'
}, {
//        menuid: 'm002',
//        name: '设备管理',
//        code: 'm002',
//        icon: 'images/pcwxh005.png'
}, {
//        menuid: 'm003',
//        name: '日志管理',
//        code: 'm003',
//        icon: 'images/pcwxh002.png'
}, {
//        menuid: 'm004',
//        name: '讯息管理',
//        code: 'm004',
//        icon: 'images/pcwxh003.png'
}, {
//        menuid: 'm005',
//        name: '在线帮助',
//        code: 'm005',
//        icon: 'images/internet.png'
}
//,{
//		menuid:'m006',
//		name:'备忘录',
//		code:'m006',
//		icon:'images/history.png'
//	},{
//		menuid:'m007',
//		name:'日历',
//		code:'m007',
//		icon:'images/calendar.png'
//	},{
//		menuid:'m008',
//		name:'RSS',
//		code:'m008',
//		icon:'images/rss.png'
//	}
    ],
app: {    //桌面1
    'readGod': {
        appid: '1',
        icon: 'friendgroup.png',
        name: '子帐号管理',
        url: 'Users/user_mgr.aspx',
        asc: 1
    },
    'sosomap': {
        appid: '2',
        icon: 'friendnear.png',
        name: '添加子帐号',
        url: 'Users/user_add.aspx',
        asc: 2
    },
    'jinshan': {
        appid: '3',
        icon: 'friendnear.png',
        name: '帐号管理',
        url: 'Users/Blog/Usercenter.aspx',
        sonMenu: "[]",
        asc: 3
    },
    'douban': {
        appid: '4',
        icon: 'friendnear.png',
        name: '修改密码',
        url: 'Users/set_acc.aspx',
        sonMenu: "[]",
        asc: 4
    },
    'Pixlr': {
        appid: '5',
        icon: '3.png',
        name: '设备管理',
        url: 'Users/Blog/Devs.aspx',
        asc: 5
    },
    'weather': {
        appid: '6',
        icon: '6.png',
        name: '多画面观看',
        url: 'Devs/mlocale2.aspx',
        asc: 6
    },
    'Clock': {
        appid: '7',
        icon: '4.png',
        name: '添加设备',
        url: 'Devs/dev_add.aspx',
        asc: 7
    },
    'yule': {
        appid: '8',
        icon: '2.png',
        name: '日志信息',
        url: 'Log/Log.aspx',
        sonMenu: "[]",
        asc: 8
    },
    'mangguo': {
        appid: '9',
        icon: '5.png',
        name: '历史信息',
        url: 'Listory/Listory.aspx',
        sonMenu: "[]",
        asc: 9
    },
    'tuanmap': {
        appid: '10',
        icon: 'internet.png',
        name: '在线帮助',
        url: 'help/help.html',
        sonMenu: "[]",
        asc: 10
    },
    'fastsearch': {
        appid: '10',
        icon: 'internet.png',
        name: '退出',
        url: 'Logout2.aspx',
        sonMenu: "[]",
        asc: 11
    },
    'bianqian': {
        appid: '10',
        sonMenu: "[]",
        asc: 2
    },
    'wangdesk': {
        appid: '13',
        sonMenu: "[]",
        asc: 3
    },
    'friend': {
        appid: '21',
        asc: 1
    },
    'friendnear': {
        appid: '31',
        sonMenu: "[]",
        asc: 2
    },
    'friendgroup': {
        appid: '32',
        sonMenu: "[]",
        asc: 3
    },
    'kaikai': {
        appid: '2250',
        sonMenu: "[]",
        asc: 4
    },
    'kxjy': {
        appid: '2535',
        sonMenu: "[]",
        asc: 5
    },
    'qidianzhongwen': {
        appid: '2528',
        asc: 1
    },
    'qqread': {
        appid: '45',
        sonMenu: "[]",
        asc: 2
    },
    'xiami': {
        appid: '2526',
        sonMenu: "[]",
        asc: 3
    },
    'musicbox': {
        appid: '56',
        sonMenu: "[]",
        asc: 4
    },
    'vadio': {
        appid: '15',
        sonMenu: "[]",
        asc: 5
    },
    'leshi': {
        appid: '3148',
        sonMenu: "[]",
        asc: 6
    },
    'doudizhi': {
        appid: '48',
        asc: 1
    },
    '3366': {
        appid: '49',
        sonMenu: "[]",
        asc: 2
    },
    'qqbaby': {
        appid: '26',
        sonMenu: "[]",
        asc: 3
    },
    'game': {
        appid: '1000',
        sonMenu: "[]",
        asc: 4
    }
},
sApp: {//侧边栏应用
    'appmarket': {
    //            //appid: '1',
    ////            icon: 'appmarket.png',
    ////            name: '账号管理',
    ////            url: 'http://www.jq-school.com/',
    ////            sonMenu: "[]",
    //asc: 1
},
'qq': {
//            //appid: '2',
////            icon: 'big.png',
////            name: '设备管理',
////            url: 'http://www.jq-school.com/',
////            sonMenu: "[]",
//asc: 2
},
'weibo': {
////            appid: '3',
////            icon: 'weibo.png',
////            name: '日志管理',
////            url: 'http://www.jq-school.com/',
////            sonMenu: "[]",
//            //asc: 3
},
'mail': {
//            //appid: '4',
////            icon: 'mail.png',
////            name: '新闻管理',
////            url: 'http://www.jq-school.com/',
////            sonMenu: "[]",
//asc: 4
},
'zone': {
//            //appid: '5',
////            icon: 'zone.png',
////            name: '在线帮助',
////            url: 'http://www.jq-school.com/',
////            sonMenu: "[]",
//asc: 5
},
'internet': {
//            //appid: '6',
//            //icon:'internet.png',
////            name: '浏览网页',
////            url: 'http://www.jq-school.com/',
////            sonMenu: "[]",
//asc: 6
}

}
};
ops = {//向桌面添加应用
    Icon1: ['jinshan','Pixlr', 'weather','mangguo']
}
//初始化左边快捷菜单
var leftMenu = new Array([]);


