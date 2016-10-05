# -*- coding: utf-8 -*-

import xmytools
import os

band = 'xx'
date = 'xxxx-xx-xx'
start_time = '12:00'
end_time = '13:00'

params = {
    'time':"10月8日晚19:30",
}

with open("list.txt","r+") as f:
    pool = f.readlines()
    for i in pool:
        name = i[:3]
        tel = i[-12:-1]
        print("sending:",name,tel)
        params["name"] = name
        xmytools.sms_send(tel=tel,appkey='0',secret='aced7f27c',params=params,templete_id='225',)
