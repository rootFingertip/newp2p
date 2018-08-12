//初始化echarts实例
		 var myChart = echarts.init(document.getElementById('echartsMain'));
		 
		 //指定图表的配置项和数据
		 var option = {
			    title : {
//			        text: '用户学历情况统计',
			        subtext: '蓝源p2p平台',
			        x:'center'
			    },
			    tooltip : {
			        trigger: 'item',
			        formatter: "{a} <br/>{b} : {c} ({d}%)"
			    },
			    legend: {
			        orient : 'vertical',
			        x : 'left',
			        data:['博士', '硕士', '本科', '大专', '高中/中专','初中','小学']
			    },
			    toolbox: {
			        show : true,
			        feature : {
			            mark : {show: false},
			            dataView : {show: false, readOnly: false},
			            magicType : {
			                show: false, 
			                type: ['pie', 'funnel'],
			                option: {
			                    funnel: {
			                        x: '25%',
			                        width: '50%',
			                        funnelAlign: 'left',
			                        max: 1548
			                    }
			                }
			            },
			            restore : {show: true},
			            saveAsImage : {show: true}
			        }
			    },
			    calculable : false,
			    series : [
			        {
			            name:'访问来源',
			            type:'pie',
			            radius : '55%',
			            center: ['50%', '60%'],
			            data:[ ]
			        }
			    ]
};

   $.get("API/getUserEdu.php",function(eduData){
   	
   		console.log("后端返回的的数据：",eduData);
   		
   		//把后端提供的数据动态设置到配置对象中
   		option.series[0].data=eduData;
   		
   	
		//使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
            
   		 //隐藏默认的loading动画
            myChart.hideLoading();
   	
   },'json');
		