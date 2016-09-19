# -*- coding: utf-8 -*-

from aliapi.alidayu import AlibabaAliqinFcSmsNumSendRequest
import json

# 其中appkey和secret是必须的参数
# url可选，默认为沙箱的URL，正式应用请传入 https://eco.taobao.com/router/rest
# partner_id为可选，其值为下载的TOP SDK中的top/api/base.py里的SYSTEM_GENERATE_VERSION


def sms_send(appkey:str,secret:str,params:dict,templete_id:str,partner_id = 'taobao-sdk-python-20160607'):
    url = 'https://eco.taobao.com/router/rest'
    req=AlibabaAliqinFcSmsNumSendRequest(appkey, secret, url,partner_id)
    req.extend=''
    req.sms_type="normal"
    req.sms_free_sign_name="小觅音"
    params = params

    req.sms_param=json.dumps(params)
    print(req.sms_param)
    req.rec_num= '18292037047'
    req.sms_template_code = templete_id  #短信模板名称
    try:
        resp= req.getResponse()
        print(resp)
    except Exception as e:
        print(e)
