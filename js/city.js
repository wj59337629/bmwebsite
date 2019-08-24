var arr = [
		[ "----请选择城市----" ],
		[ '东城区', '西城区', '崇文区', '宣武区', '朝阳区', '丰台区', '石景山区', '海淀区', '门头沟区',
				'房山区', '通州区', '顺义区', '昌平区', '大兴区', '怀柔区', '平谷区', '密云县', '延庆县' ],
		[ '和平区', '河东区', '河西区', '南开区', '河北区', '红桥区', '塘沽区', '汉沽区', '大港区', '东丽区',
				'西青区', '津南区', '北辰区', '武清区', '宝坻区', '宁河县', '静海县', '蓟县' ],
		[ '黄浦区', '卢湾区', '徐汇区', '长宁区', '静安区', '普陀区', '闸北区', '虹口区', '杨浦区', '闵行区',
				'宝山区', '嘉定区', '浦东新区', '金山区', '松江区', '青浦区', '南汇区', '奉贤区', '崇明县' ],
		[ '万州区', '涪陵区', '渝中区', '大渡口区', '江北区', '沙坪坝区', '九龙坡区', '南岸区', '北碚区',
				'万盛区', '双桥区', '渝北区', '巴南区', '黔江区', '长寿区', '江津区', '合川区', '永川区',
				'南川区', '綦江县', '潼南县', '铜梁县', '大足县', '荣昌县', '璧山县', '梁平县', '城口县',
				'丰都县', '垫江县', '武隆县', '忠县', '开县', '云阳县', '奉节县', '巫山县', '巫溪县',
				'石柱土家族自治县', '秀山土家族苗族自治县', '酉阳土家族苗族自治县', '彭水苗族土家族自治县' ],
		[ '武汉市', '黄石市', '十堰市', '宜昌市', '襄樊市', '鄂州市', '荆门市', '孝感市', '荆州市', '黄冈市',
				'咸宁市', '随州市', '恩施土家族苗族自治州', '仙桃市', '潜江市', '天门市', '神农架林区' ],
		[ '石家庄市', '唐山市', '秦皇岛市', '邯郸市', '邢台市', '保定市', '张家口市', '承德市', '沧州市',
				'廊坊市', '衡水市' ],
		['郑州市','开封市','洛阳市','平顶山市','焦作市','鹤壁市','新乡市','安阳市','濮阳市','许昌市','漯河市','三门峡市','南阳市','商丘市','信阳市','周口市','驻马店市','济源市'],		
		[ '福州市', '厦门市', '莆田市', '三明市', '泉州市', '漳州市', '南平市', '龙岩市', '宁德市' ],
		[ "广州市", "韶关市", "珠海市", "深圳市", "汕头市", "佛山市", "肇庆市", "揭阳市", "中山市", "云浮市",
				"江门市", "湛江市", "茂名市", "惠州市", "东莞市", "阳江市", "清远市", "梅州市", "汕尾市",
				"河源市", "潮州市" ],
		[ '海口市', '三亚市', '五指山市', '琼海市', '儋州市', '文昌市', '万宁市', '东方市', '定安县',
				'屯昌县', '澄迈县', '临高县', '白沙黎族自治县', '昌江黎族自治县', '乐东黎族自治县',
				'陵水黎族自治县', '保亭黎族苗族自治县', '琼中黎族苗族自治县' ],
		[ '台北市', '高雄市', '基隆市', '台中市', '台南市', '新竹市', '嘉义市' ],
		[ '成都市', '自贡市', '攀枝花市', '泸州市', '德阳市', '绵阳市', '广元市', '遂宁市', '内江市',
				'乐山市', '南充市', '眉山市', '宜宾市', '广安市', '达州市', '雅安市', '巴中市', '资阳市',
				'阿坝藏族羌族自治州', '甘孜藏族自治州', '凉山彝族自治州' ],
		[ '长沙市', '株洲市', '湘潭市', '衡阳市', '邵阳市', '岳阳市', '常德市', '张家界市', '益阳市',
				'郴州市', '永州市', '怀化市', '娄底市', '湘西土家族苗族自治州' ],
		[ '合肥市', '芜湖市', '蚌埠市', '淮南市', '马鞍山市', '淮北市', '铜陵市', '安庆市', '黄山市',
				'滁州市', '阜阳市', '宿州市', '巢湖市', '六安市', '亳州市', '池州', '宣城市' ],
		[ '南京市', '无锡市', '徐州市', '常州市', '苏州市', '南通市', '连云港市', '淮安市', '盐城市',
				'扬州市', '镇江市', '泰州市', '宿迁市' ],
		[ '昆明市', ' 曲靖市', '玉溪市', '保山市', '昭通市', '丽江市', '思茅市', '临沧市', '楚雄彝族自治州',
				'红河哈尼族彝族自治州', '文山壮族苗族自治州', '西双版纳傣族自治州', '大理白族自治州',
				'德宏傣族景颇族自治州', '怒江傈僳族自治州', '迪庆藏族自治州' ],
		[ '乌鲁木齐市', '克拉玛依市', '吐鲁番地区', '哈密地区', '昌吉回族自治州 ', '博尔塔拉蒙古自治州 ',
				'巴音郭楞蒙古自治州 ', '阿克苏地区', '克孜勒苏柯尔克孜自治州 ', '喀什地区', '和田地区',
				'伊犁哈萨克自治州', '塔城地区', '阿勒泰地区', '石河子市', '阿拉尔市', '图木舒克市', '五家渠市' ],
		[ '呼和浩特市', '包头市', '乌海市', '赤峰市', '通辽市', '鄂尔多斯市', '呼伦贝尔市', '巴彦淖尔市',
				'乌兰察布市', '兴安盟', '锡林郭勒盟', '阿拉善盟' ],
		[ '兰州市', '嘉峪关市', '金昌市', '白银市', '天水市', '武威市', '张掖市', '平凉市', '酒泉市',
				'庆阳市', '定西市', '陇南市', '临夏回族自治州', '甘南藏族自治州' ],
		[ '南宁市', '柳州市', '桂林市', '梧州市', '北海市', '防城港市', '钦州市', '贵港市', '玉林市',
				'百色市', '贺州市', '河池市', '来宾市', '崇左市' ],
		[ '银川市', '石嘴山市', '吴忠市', '固原市', '中卫市' ],
		[ '中西区', '湾仔区', '东区', '南区', '油尖旺区', '深水埗区', '九龙城区', '黄大仙区', '观塘区',
				'荃湾区', '葵青区', '沙田区', '西贡区', '大埔区', '北区', '元朗区', '屯门区', '离岛区' ],
		[ '澳门' ],
		[ '杭州市', '宁波市', '温州市', '嘉兴市', '湖州市', '绍兴市', '金华市', '衢州市', '舟山市', '台州市',
				'丽水市' ],
		[ '沈阳市', '大连市', '鞍山市', '抚顺市', '本溪市', '丹东市', '锦州市', '营口市', '阜新市', '辽阳市',
				'盘锦市', '铁岭市', '朝阳市', '葫芦岛市' ],
		[ '哈尔滨市', '齐齐哈尔市', '鸡西市', '鹤岗市', '双鸭山市', '大庆市', '伊春市', '佳木斯市', '七台河市',
				'牡丹江市', '黑河市', '绥化市', '大兴安岭地区' ],
		[ '济南市', '青岛市', '淄博市', '枣庄市', '东营市', '烟台市', '潍坊市', '济宁市', '泰安市', '威海市',
				'日照市', '莱芜市', '临沂市', '德州市', '聊城市', '滨州市', '菏泽市' ],
		[ '南昌市', '景德镇市', '萍乡市', '九江市', '新余市', '鹰潭市', '赣州市', '吉安市', '宜春市',
				'抚州市', '上饶市' ],
		[ '太原市', '大同市', '阳泉市', '长治市', '晋城市', '朔州市', '晋中市', '运城市', '忻州市', '临汾市',
				'吕梁市' ],
		[ '西安市', '铜川市', '宝鸡市', '咸阳市', '渭南市', '延安市', '汉中市', '榆林市', '安康市', '商洛市' ],
		[ '长春市', '吉林市', '四平市', '辽源市', '通化市', '白山市', '松原市', '白城市', '延边朝鲜族自治州' ],
		[ '贵阳市', '六盘水市', '遵义市', '安顺市', '铜仁地区', '黔西南布依族苗族自治州', '毕节地区',
				'黔东南苗族侗族自治州', '黔南布依族苗族自治州' ],
		[ '西宁市', '海东地区', '海北藏族自治州', '黄南藏族自治州', '海南藏族自治州', '果洛藏族自治州', '玉树藏族自治州',
				'海西蒙古族藏族自治州' ],
		[ '拉萨市', '昌都地区', '山南地区', '日喀则地市', '那曲地区', '阿里地区', '林芝地区' ]];

var saiqucity = [ [ "----请选择城市----" ], [ '-潮州', '-汕头', '-汕尾', '-揭阳' ],
		[ '-阳江', '-云浮', '-茂名', '-湛江' ], [ '-清远', '-梅州', '-河源', '-韶关' ],
		[ '-佛山', '-中山', '-珠海', '-广州', '-东莞', '-深圳', '-惠州', '-江门', '-肇庆' ] ];

/*2017年科技赛赛区*/
/*var kjsaiqu = [ [ "----请选择城市----" ], [ '广州', '佛山', '肇庆' ],
		[ '深圳', '东莞', '惠州' ], [ '珠海', '中山', '江门' ],
		[ '汕头', '河源', '梅州', '汕尾', '潮州', '揭阳' ],
		[ '清远', '韶关', '阳江', '湛江', '茂名', '云浮' ] ];*/

var kjsaiqu = [ [ "----请选择城市----" ], 
	[ '郑州']];

var ncsaiqu = [ [ "----请选择城市----" ],
		[ '-广州市', '-深圳市', '-珠海市', '-佛山市', '-惠州市', '-东莞市', '-中山市' ],
		 [ '-汕头市', '-汕尾市', '-潮州市', '-揭阳市' ],
		[ '-韶关市', '-清远市' ], [ '-河源市', '-梅州市' ], [ '-湛江市', '-茂名市' ],
		[ '-江门市', '-阳江市' ], [ '-肇庆市', '-云浮市' ] ];

var shixian = [
		[ "----请选择县市----" ],
		[ '', '荔湾区', '越秀区', '海珠区', '白云区', '番禺区', '南沙区', '天河区', '萝岗区', '花都区', '从化区',
				'增城区' ],
		[ '', '武江区', '浈江区', '曲江区', '始兴县', '仁化县', '翁源县', '乳源瑶族自治县', '新丰县', '乐昌市',
				'南雄市' ], [ '罗湖区', '福田区', '南山区', '宝安区', '龙岗区', '盐田区' ],
		[ '', '香洲区', '斗门区', '金湾区' ],
		[ '', '龙湖区', '金平区', '濠江区', '潮阳区', '潮南区', '澄海区', '南澳县' ],
		[ '', '禅城区', '南海区', '顺德区', '三水区', '高明区' ],
		[ '', '蓬江区', '江海区', '新会区', '台山市', '开平市', '鹤山市', '恩平市' ],
		[ '', '赤坎区', '霞山区', '坡头区', '麻章区', '遂溪县', '徐闻县', '廉江市', '雷州市', '吴川市' ],
		[ '', '茂南区', '电白区', '高州市', '化州市', '信宜市' ],
		[ '', '端州区', '鼎湖区', '广宁县', '怀集县', '封开县', '德庆县', '高要区', '四会市' ],
		[ '', '惠城区', '惠阳区', '博罗县', '惠东县', '龙门县' ],
		[ '', '梅江区', '梅县区', '大埔县', '丰顺县', '五华县', '平远县', '蕉岭县', '兴宁市' ],
		[ '', '城区', '海丰县', '陆河县', '陆丰市' ],
		[ '', '源城区', '紫金县', '龙川县', '连平县', '和平县', '东源县' ],
		[ '', '江城区', '阳东区', '阳西县', '阳春市' ],
		[ '', '清城区', '清新区', '佛冈县', '阳山县', '连山壮族瑶族自治县', '连南瑶族自治县', '英德市', '连州市' ],
		[ '', '东城街道','南城街道','万江街道','莞城街道','石碣镇','石龙镇','茶山镇','石排镇','企石镇','横沥镇','桥头镇','谢岗镇','东坑镇','常平镇','寮步镇','樟木头镇','大朗镇','黄江镇','清溪镇','塘厦镇','凤岗镇','大岭山镇','长安镇','虎门镇','厚街镇','沙田镇','道滘镇','洪梅镇','麻涌镇'
		              ,'望牛墩镇','中堂镇','高埗镇','松山湖管委会','虎门港管委会','东莞生态园' ],['石岐区街道','东区街道','火炬开发区街道','西区街道','南区街道','五桂山街道','小榄镇','黄圃镇','民众镇','东凤镇','东升镇','古镇镇','沙溪镇','坦洲镇','港口镇','三角镇','横栏镇','南头镇','阜沙镇','南朗镇','三乡镇','板芙镇','大涌镇','神湾镇'], [ '湘桥区', '潮安区', '饶平县' ],
		[ '', '榕城区', '揭东区', '揭西县', '惠来县', '普宁市' ],
		[ '', '云城区', '云安区', '新兴县', '郁南县', '罗定市' ] ];

/*科技赛*/
function getMatch() {
	/* 拿到省份的索引 */
	var index = document.getElementById("saiqu").selectedIndex;
	/* 拿到省份数组中对应的城市 */
	var citys = kjsaiqu[index];
	/* 拿到子菜单节点 */
	var subselNode = document.getElementById("saiquchengshi");
	/*
	 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
	 */
	subselNode.options.length = 0;
	for ( var i = 0; i < citys.length; i++) {
		if(index==0){
			subselNode.options.add(new Option(citys[i], ""));
		}else{
		subselNode.options.add(new Option(citys[i], citys[i]));
		}
	}
}

function getncMatch() {
	/* 拿到省份的索引 */
	var index = document.getElementById("ncsaiqu").selectedIndex;
	/* 拿到省份数组中对应的城市 */
	var citys = ncsaiqu[index];
	/* 拿到子菜单节点 */
	var subselNode = document.getElementById("ncsaiqucs");
	/*
	 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
	 */
	subselNode.options.length = 0;
	for ( var i = 0; i < citys.length; i++) {
		if(index==0){
			subselNode.options.add(new Option(citys[i], ""));
		}else{
		subselNode.options.add(new Option(citys[i], citys[i]));
		}
	}
}

function getCSXS() {
	/* 拿到省份的索引 */
	var index = document.getElementById("chengshi").selectedIndex;
	/* 拿到省份数组中对应的城市 */
	var citys = shixian[index];
	/* 拿到子菜单节点 */
	var subselNode = document.getElementById("xianshi");
	/*
	 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
	 */
	subselNode.options.length = 0;
	for ( var i = 0; i < citys.length; i++) {
		if(index==0){
			subselNode.options.add(new Option(citys[i], ""));
		}else{
		subselNode.options.add(new Option(citys[i], citys[i]));
		}
	}
}

function selCity(name1, name2) {
	/* 拿到省份的索引 */
	var index = document.getElementById(name1).selectedIndex;
	/* 拿到省份数组中对应的城市 */
	var citys = arr[index];
	/* 拿到子菜单节点 */
	var subselNode = document.getElementById(name2);
	/*
	 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
	 */
	subselNode.options.length = 0;
	for ( var i = 0; i < citys.length; i++) {
		if(index==0){
			subselNode.options.add(new Option(citys[i], ""));
		}else{
		subselNode.options.add(new Option(citys[i], citys[i]));
		}
	}
}

function selectcity(name1, name2, name3) {
	var index = document.getElementById(name1).selectedIndex;
	var name = '#' + name3;
	var city = $(name).val();
	var citys = arr[index];
	/* 拿到子菜单节点 */
	var subselNode = document.getElementById(name2);
	/*
	 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
	 */
	subselNode.options.length = 0;
	for ( var i = 0; i < citys.length; i++) {
		if(index==0){
			subselNode.options.add(new Option(citys[i], ""));
		}else{
		subselNode.options.add(new Option(citys[i], citys[i]));
		}
	}
	$("#" + name2 + " option[value='" + city + "']").attr("selected", true);
}

function selecsaiqu(saiqu, chengshi, name) {
	var name = '#' + name;
	var city = $(name).val();
	if (city !== null || city !== undefined || city !== '') {
		var index = document.getElementById(saiqu).selectedIndex;
		var citys = kjsaiqu[index];
		/* 拿到子菜单节点 */
		var subselNode = document.getElementById(chengshi);
		/*
		 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
		 */
		subselNode.options.length = 0;
		for ( var i = 0; i < citys.length; i++) {
			if(index==0){
				subselNode.options.add(new Option(citys[i], ""));
			}else{
			subselNode.options.add(new Option(citys[i], citys[i]));
			}
		}
		$("#" + chengshi + " option[value='" + city + "']").attr("selected",
				true);
	}
}

function selectncsaiqu(saiqu, chengshi, name) {
	var name = '#' + name;
	var city = $(name).val();
	if (city !== null || city !== undefined || city !== '') {
		var index = document.getElementById(saiqu).selectedIndex;
		var citys = ncsaiqu[index];
		/* 拿到子菜单节点 */
		var subselNode = document.getElementById(chengshi);
		/*
		 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
		 */
		subselNode.options.length = 0;
		for ( var i = 0; i < citys.length; i++) {
			if(index==0){
				subselNode.options.add(new Option(citys[i], ""));
			}else{
			subselNode.options.add(new Option(citys[i], citys[i]));
			}
		}
		$("#" + chengshi + " option[value='" + city + "']").attr("selected",
				true);
	}
}

function selectTjdanwei(saiqu, chengshi, name) {
	var name = '#' + name;
	var city = $(name).val();
	if (city !== null || city !== undefined || city !== '') {
		var index = document.getElementById(saiqu).selectedIndex;
		var citys = shixian[index];
		/* 拿到子菜单节点 */
		var subselNode = document.getElementById(chengshi);
		/*
		 * 移除子菜单中的城市 注意：循环时不要“i++”,因为循环条件在递减，若在进行i++，会产生删除不干净的错误
		 */
		subselNode.options.length = 0;
		for ( var i = 0; i < citys.length; i++) {
			if(index==0){
				subselNode.options.add(new Option(citys[i], ""));
			}else{
			subselNode.options.add(new Option(citys[i], citys[i]));
			}
		}
		$("#" + chengshi + " option[value='" + city + "']").attr("selected",
				true);
	}
}
