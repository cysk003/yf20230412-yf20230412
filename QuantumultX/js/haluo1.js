
/**********************************
脚本名称:哈啰单车会员破解
脚本作者: 🍭风言锋语🍎
软件版本：
更新时间：2023.05.03
QQ反馈群:🌺75929916
TG反馈: 🌺https://t.me/china_yf
使用说明:此脚本仅供学习与交流,请勿转载与贩卖！
[rewrite_local]
^https?:\/\/a\.hellobike\.com url script-response-body https://raw.githubusercontent.com/yf20230412/master/main/QuantumultX/js/haluo1.js

[mitm]
hostname = a.hellobike.com
*****************************************/

var body = $response.body;
var url = $request.url;
var obj = JSON.parse(body);
const tt = '/evehicle/api';
if (url.indexOf(tt) != -1) {
    obj.data.cardLevel=20,
    obj.data.cardExpireTime="2999.06.20",
    obj.data.expireType=1,
    obj.data.expireDate="2999.06.20",
    obj.data.cardEndTime="2999-06-20T23:59:59",
    obj.data.overdueDays=99999,
    obj.data.remainingDays=356248,
    body = JSON.stringify(obj);
  }
$done({body});
