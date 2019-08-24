<!DOCTYPE html>
<html>
<head>
    <base href="http://ggfw.gdhrss.gov.cn:80/zcb-bmxt-front/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=8"/>
    <title>企业项目信息详情</title>
    <link type="text/css" rel="stylesheet" href="assets/css/common.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/main.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/form.css"/>
</head>
<body>
<div class="form-hd cf">
		<span><i class="ilookinfo"></i>报名信息
        </span>
    <div class="fr fixright">
        
            <a onclick="window.parent.document.getElementById('addmember').click();"><i class="icon icon9"></i>团队成员</a>
            
            <a href="zcb/admin.php?do=edit"><i class="icon icon9"></i>填写报名信息</a>
        
            <a onclick="deleteInfo();"><i class="icon icon4"></i>删除报名信息</a>
        
        
            <a onclick="preSubmitInfo();"><i class="icon icon7"></i>提交报名信息</a>
        
    </div>
</div>
<div class="form-statue">
    <span>资格审核：<i class="reason">未提交</i></span>
    <br>
    
    
    
    
    
</div>
<div class="form-bd">
    <div class="tab">
        <ul class="tab-hd">
            <li class="on">基本资料</li><li>创业项目基本信息</li><li>商业计划书（可行性分析报告）</li>
        </ul>
        
<div class="tab-bd">
    <div class="tab-content" style="display: block">
        <div class="box">
            <div class="box-hd">（一）企业负责人信息</div>
            <div class="box-bd">
                <table class="table-two-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>是否有推荐单位：</label>
                                
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>推荐单位：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>姓名：</label>
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>国籍：</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>性别：</label>
                                
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>出生日期：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>毕业时间：</label>
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>证件类型：</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>证件号码：</label>
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>证件扫描件：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>毕业/就读学校：</label>
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>所读专业：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>学历：</label>
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>手机号码：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>电子邮箱：</label>
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>QQ号码：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>所属群体：</label>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>所属群体证明：</label>
                                
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="prodetailCont">
                    <span class="title">个人简历及创业经历（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"></textarea>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-hd">（二）企业基本信息</div>
            <div class="box-bd">
                <table class="table-two-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>企业名称：</label>
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>注册成立时间：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>企业性质：</label>
                                
                            </div>
                        </td>
                        <td>
                            <div class="group">
                                <label>带动就业人数：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>营业执照：</label>
                                
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="prodetailCont">
                    <span class="title">主要经营范围（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"></textarea>
                </div>
                <div class="COMPANYnum-desc">
                    成员或股东数量：<span class="num"> 0</span>
                </div>
                <table class="table-list">
                    <thead>
                    <tr>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>学历</th>
                        <th>出生日期</th>
                        <th>毕业时间</th>
                        <th>手机号码</th>
                        <th>所属群体身份证明</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td colspan="7">尚未添加企业成员</td>
                        </tr>
                    
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="box">
            <div class="box-bd">
                <table class="table-one-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>赛事名称：</label> 大学生启航赛
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>所属赛区：</label>
                                
                            </div>
                        </td>
                    </tr>
                  
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目形象照：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目名称：</label>
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>行业：</label>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目地址：</label> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="group">
                                <label>项目具体地址：</label>
                                
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="prodetailCont">
                    <span class="title">项目摘要（限制2000字以内）</span>
                    <p>
                        <textarea readonly="readonly" class="read-textarea"></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">获得国家专利/知识产权情况（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"></textarea>
                </div>
                <div class="prodetailCont">
                    <span class="title">项目主要获奖情况（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="box">
            <div class="box-bd">
                <div class="prodetailCont">
                    <span class="title">项目概述（限制2000字以内）</span>
                    <textarea readonly="readonly" class="read-textarea"></textarea>
                </div>
                <table class="table-one-column">
                    <tr>
                        <td>
                            <div class="group">
                                <label>商业计划书文件：</label>
                                
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

    </div>
    
        <div id="submitDialog" class="submitDialog">
            <h1>
                <span>提供材料真实性承诺</span>
            </h1>
            <div class="bd">
                <label><input type="checkbox" id="promiseBox"/>（本人承诺，此次报名参加2019年广东"众创杯"创业创新大赛，所提交的申请材料和所附资料均真实合法，如有不实之处，本人愿意承担相应的法律责任，并承担由此产生的一切后果。）</label>
            </div>
            <div class="fd">
                <button id="submitBtn" onclick="submitInfo();" disabled="disabled" class="btn btn-blue">提交</button>
            </div>
        </div>
    
    <script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/layer-v3.0.1/layer/layer.js"></script>
    <script type="text/javascript" src="assets/js/iframe.js"></script>
    <script type="text/javascript" src="assets/js/function/loading.js"></script>
    <script type="text/javascript">
        $(function () {
            $('.tab-hd li').click(function () {
                $(this).addClass('on').siblings().removeClass('on');
                $('.tab-bd').find('.tab-content').eq($(this).index()).show();
                $('.tab-bd').find('.tab-content').eq($(this).index()).siblings().hide();
                setIframeHeight();
            });
            $('.alook').click(function () {
                //调用示例
                layer.photos({
                    photos: '#layer-photos-demo',
                    anim: 5
                    //0-6的选择，指定弹出图片动画类型，默认随机（请注意，3.0之前的版本用shift参数）
                });
            });
            $("#promiseBox").change(function () {
                if ($(this).is(':checked')) {
                    $("#submitBtn").removeAttr("disabled");
                } else {
                    $("#submitBtn").attr("disabled", "disabled");
                }
            });
        });

        var submitDialog = null;
        function preSubmitInfo() {
            submitDialog = layer.open({
                offset: '0px',
                type: 1,
                title: '提交报名信息',
                content: $('#submitDialog')
            });
        }

        function submitInfo() {
            ajaxRequest({
                url: 'registration/company/submit.sjson',
                data: {
                    promise: 1
                },
                success: function (result) {
                    layer.alert(result.message, {
                        offset: '0px',
                        cancel: function (index) {
                            layer.close(index);
                            if (result.success) {
                                submitDialog && layer.close(submitDialog);
                                location.reload();
                            }
                        }
                    }, function (index) {
                        layer.close(index);
                        if (result.success) {
                            submitDialog && layer.close(submitDialog);
                            location.reload();
                        }
                    });
                }
            });
        }

        function deleteInfo() {
            layer.confirm('该操作将删除报名信息，不会删除参赛者账号', {
                offset: '0px',
                icon: 7
            }, function () {
                ajaxRequest({
                    url: 'registration/company/delete.sjson',
                    success: function (result) {
                        layer.alert(result.message, {
                            offset: '0px',
                            cancel: function (index) {
                                layer.close(index);
                                if (result.success) {
                                    if (parent.location.reload) {
                                        parent.location.reload();
                                    } else {
                                        location.reload();
                                    }
                                }
                            }
                        }, function (index) {
                            layer.close(index);
                            if (result.success) {
                                if (parent.location.reload) {
                                    parent.location.reload();
                                } else {
                                    location.reload();
                                }
                            }
                        });
                    }
                });
            });
        }
        function cancelSubmitInfo() {
            layer.confirm('取消提交?', {offset: '0px', icon: 7}, function () {
                ajaxRequest({
                    url: 'registration/company/cancelSubmit.sjson',
                    data: {
                        id:14103
                    },
                    success: function (result) {
                        layer.alert(result.message, {
                            offset: '0px',
                            cancel: function (index) {
                                layer.close(index);
                                if (result.success) location.reload();
                            }
                        }, function (index) {
                            layer.close(index);
                            if (result.success) location.reload();
                        });
                    }
                });
            });
        }

    </script>
</div>

</body>
</html>