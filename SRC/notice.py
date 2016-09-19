
# -*- coding: utf-8 -*-
from aliapi.alidayu import AlibabaAliqinFcSmsNumSendRequest
import json

# 其中appkey和secret是必须的参数
# url可选，默认为沙箱的URL，正式应用请传入 https://eco.taobao.com/router/rest
# partner_id为可选，其值为下载的TOP SDK中的top/api/base.py里的SYSTEM_GENERATE_VERSION

appkey = ''
secret = ''
url = 'https://eco.taobao.com/router/rest'
partner_id = 'taobao-sdk-python-20160607'

#这里是模板变量
tel_of_bro_quan = '18292037047'     #全哥的电话号码
band = 'jgk'                        #申请者名称
date = '1111-11-11'                 #日期（年月日）
start_time = '11:00'                #开始时间
end_time = '12:00'                  #结束时间



req=AlibabaAliqinFcSmsNumSendRequest(appkey, secret, url,partner_id)

req.extend=''
req.sms_type="normal"
req.sms_free_sign_name="小觅音"
params = {}
params['band'] = band
params['date'] = date
params['start_time'] = start_time
params['end_time'] = end_time

req.sms_param=json.dumps(params)
print(req.sms_param)
req.rec_num= tel_of_bro_quan
req.sms_template_code="SMS_14910844"  #短信模板名称
try:
    resp= req.getResponse()
    print(resp)
except Exception as e:
    print(e)
