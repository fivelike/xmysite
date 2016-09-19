# alidayu
阿里大鱼短信接口，python3

# 用法

与TOP（淘宝开放平台）提供的SDK用法差不多，实现代码大幅简化，不过只支持python3。

    # -*- coding: utf-8 -*-
    from alidayu import AlibabaAliqinFcSmsNumSendRequest

    # 其中appkey和secret是必须的参数
    # url可选，默认为沙箱的URL，正式应用请传入 https://eco.taobao.com/router/rest
    # partner_id为可选，其值为下载的TOP SDK中的top/api/base.py里的SYSTEM_GENERATE_VERSION
    req=AlibabaAliqinFcSmsNumSendRequest(appkey, secret, url, partner_id)
     
    req.extend="123456"
    req.sms_type="normal"
    req.sms_free_sign_name="注册验证"
    req.sms_param=json.dumps(params)
    req.rec_num="13000000000"
    req.sms_template_code="SMS_5410290"
    try:
        resp= req.getResponse()
        print(resp)
    except Exception,e:
        print(e)


# 依赖

需要 requests
