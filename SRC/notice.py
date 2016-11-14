# -*- coding: utf-8 -*-

import xmytools

band = 'xx'
date = 'xxxx-xx-xx'
start_time = '12:00'
end_time = '13:00'

params = {
    'band':band,
    'date':date,
    'start_time':start_time,
    'end_time':end_time

}

xmytools.sms_send(appkey='',secret='',params=params,templete_id='',)
