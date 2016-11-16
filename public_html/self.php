<!DOCTYPE html>
<html>
<head>
<script src="react.js"></script>
<script src="react-dom.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
body{
	background-color: #f1f3f7;
}
/* main container*/
.tabbablefirst{
padding:30px;
width:1280px;
margin:0 auto;
}
/* create buttons on tabs*/
/* .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover { */
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover { 
    background-color: #033860;	
    cursor: default;	
color: white;
}
.second-level .nav-tabs>li>a, .second-level .nav-tabs>li>a:focus, .second-level .nav-tabs>li>a:hover {
   /*  color: #555; */
	color:gray;
    background-color: #fff;
    border: 1px solid #ddd;
/*     border-bottom-color: transparent; */
}
.nav-tabs>li>a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
  /*   border-radius: 4px 4px 0 0; */
    border-radius: 4px;
}

.nav-tabs {
    /* border-bottom: 1px solid #ddd; */
		 border-bottom:none;
}
.second-level {
height:90px;
    margin-left: -30px;
	    padding-top: 30px;
background-color:#dfe2e5;
}
.third-level{
	margin-top:30px;
	margin-left:-32px;
}
.second-level .nav-tabs>li {
width:20%;
height:80px;
}
.tabbablefirst>.nav{
	margin-left: -32px;
}
#container select{
	height: 50px;
	margin-top: -15px;
    width: 80%; 
	padding-left: 20px;
}
#reactroot{
margin-left:-30px;
}
#logoImg{
margin:20px 0 0 60px;
display:block;
float: left;
}
#staticPrice{
	width:100%;
	height:300px;
	margin-top:80px;
	/*position:absolute;
	border:1px solid gray;
	 position:fixed;
	border-radius:20px;
	right:40px;
	 */
	
	padding:10px;
	background-color:white;
}
#staticPrice .col-md{
	top:80px;
}
.bcwhite{
	background-color:white;
}
.bcgray{
	background-color:#e8e9ee;
	color:#8d90a3;
	height:70px;
    padding-top: 25px;	border-bottom:1px solid #b6b6bb;
}
.price_sell{
	background-color:#448bd9;
	color:white;
	width:120px;
	margin-top: -15px;
	height:50px;
	border-radius:7px;
	font-size:18px;
	font-weight:bold;
	text-align: center;
	padding-top:13px;
}
label{
display:flex;
}
.checkboxforprice{
display:block;
margin-right:20px !important;
float:left;
}
.hiddencheckbox{
display:none;
}
.width20{
width: 20px;
text-align: center;
}
.width70{
width: 70px;
text-align: center;
}
.blueColor_h80_pt5{
color:#438bd5;
height:80px;
padding-top: 5px;
}
.margintop80{
margin-top:80px;
}
#longBlueRow{
background-color:#033860;
height:65px;
width:1280px;
margin:0 auto;
}
#longBlueRowBottom{
background-color:#033860;
height:210px;
width:1280px;
margin:0 auto;
}
#longImg{
background-image:url('calc.png');
width:1280px;
height:431px;
margin:0 auto;
}
#link1{
    float: left;
    margin: 20px 0 0 140px;
    font-size: 18px;
}
#link1 a,#linkBottom a{
    color: white;
}
#linkBottom{
    float: left;
    margin: 140px 0 0 140px;
    font-size: 18px;
}
#link1 a{
    color: white;
}
.textalignright{
text-indent:50px;
font-weight:bold;
}
.colorblue{
color:#448bd8;
}
.mleft100{
margin-left:70px;
margin-right:-100px;
}
</style>
<script>

$(document).ready(function() {
function moveBillContainer(){
	if($('#staticPrice').offset().left > 100)
	{
		$('#staticPrice').css("height","300px");
			var basePosition = $('#container').offset().top;
			var startPosition = $('#staticPrice').offset().top;
			var bottomPosition = $('#longBlueRowBottom').offset().top;
			console.log("bottomPosition="+bottomPosition);
			
			var staticPositionPlusHeight = $('#staticPrice').offset().top +  410;
			console.log("bottomPositionPlusHeight="+staticPositionPlusHeight);
				console.log ($('#staticPrice').offset().top);
				console.log ($(window).scrollTop());
			//if position smaller then current top & currentPos + Height < than longBlueRowBottom
			var currStaticIfNotMove = $('#staticPrice').offset().top - $(window).scrollTop();
			if ( currStaticIfNotMove < 100 && staticPositionPlusHeight < bottomPosition){
			//if ( currStaticIfNotMove < 100){
				//console.log('bzzz '+ currStaticIfNotMove);
				var forNewPos =  $(window).scrollTop() + 100;
				//console.log("forNewPos="+forNewPos);
				$('#staticPrice').offset({"top":forNewPos});	
			}
			$('#staticPrice').offset().top
			if ( ( $('#staticPrice').offset().top >(basePosition +100) ) && currStaticIfNotMove > 100 ){
				console.log("left buttom position");
				var forNewPos =  $(window).scrollTop() + 100;
				//console.log("forNewPos="+forNewPos);
				$('#staticPrice').offset({"top":forNewPos});	
			}
			} else { 
$('#staticPrice').css({"margin-top":"10px","top":"0px","height":"470px"});
			}
}
	$( window ).resize(moveBillContainer);
	$( window ).scroll(moveBillContainer);
	
});
</script>
</head>
<body>
<div id="longBlueRow" class="row">
	<div class="col-md-12">
		<img id="logoImg" src="logo.png"/>
		<div id="link1">
			<a href="http://agv-aftermarket.com/">AGV Aftermarket</a>
		</div>
	</div>
</div>
<div id="longImg"></div>
<div class="tabbable tabbablefirst">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab10" data-toggle="tab">AGV</a></li>
		<li><a href="#tab20" data-toggle="tab">AGV lab</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab10">
				<!-----------------------------------second tab START------------------------>												
																			<div class="tabbable">
																		<ul class="nav nav-tabs second-level">
																			<li><a href="#tab100" data-toggle="tab">Marketing</a></li>
																			<li class="active"><a href="#tab200" data-toggle="tab">Sales Push Campaignes</a></li>
																			<li><a href="#tab300" data-toggle="tab">Direct Research</a></li>
																			<li><a href="#tab400" data-toggle="tab">POS Products 1</a></li>
																			<li><a href="#tab500" data-toggle="tab">POS Products 2</a></li>
																		</ul>
																		<div class="tab-content">
																			<div class="tab-pane" id="tab100">
																				Marketing
																			</div>
																			<div class="tab-pane active" id="tab200">
																																				<!--------------------------------third tab START-------------------->
																																				<div class="tabbable">
																																					<ul class="nav nav-tabs third-level">
																																						<li><a href="/index.php#tab1000" data-toggle="tablink">Самостоятельный расчет</a></li>
																																						<li class="active"><a href="#tab2000" data-toggle="tab">Расчет от бюджета</a></li>
																																					</ul>
																																					<div class="tab-content">
																																						<div class="tab-pane" id="tab1000">
																																							<p>Самостоятельный расчет</p>
																																						</div>
																																						<div class="tab-pane active" id="tab2000">
																																							<p style="margin-top:20px;">Расчет от бюджета</p>
																																							<div id="container">
																																							</div>
																																						</div>
																																					</div>
																																				</div>
																																<!--------------------------------third tab FINISH-------------------->
																			</div>
																			<div class="tab-pane" id="tab300">
																				Direct Research
																			</div>
																			<div class="tab-pane" id="tab400">
																				POS Products 1
																			</div>
																			<div class="tab-pane" id="tab500">
																				POS Products 2
																			</div>
																		</div>
																	</div>
			<!-----------------------------------second tab START------------------------>
		</div>
		<div class="tab-pane" id="tab20">
			<!--AGV lab START-->
			<p>AGV lab...</p>
			<!--AGV lab FINISH-->
		</div>
	</div>
</div>


<div id="container">
    <!-- This element's contents will be replaced with your component. -->
</div>
<!-- bottom-->
<div id="longBlueRowBottom" class="row">
	<div class="col-md-12">
		<!--img id="logoImgBottom" src="logo.png"/-->
		<div id="linkBottom">
			<a href="http://agv-aftermarket.com/">Copyright © 2016. AGV Aftermarket.</a>
		</div>
	</div>
</div>
<script type="text/babel">
class SomeSum extends React.Component{
	
	
	  render() {
		  //to do - сюда таскать значение из резалт-таблицы
		   if(this.props.priceinrow){ 
			/*  alert(this.props.priceinrow); */
				return <div className="price_sell">{this.props.priceinrow}</div>;
		   }
		   return <span></span>;
	  }
}
class ProductSelect extends React.Component {

	
  constructor(props, context) {
    super(props, context)
	 this.state = {
	/* 	value: 1 */
	} 
} 

 
 render() {
/* 	 if (this.props.category=='input') {
		 return <div><input type="text"  onChange={this.props.onClick}  value={this.state.value}/></div>;
	 } else { */
		 var arrOfOptions =[];
		 this.props.category.map(function(currOption,index){
		 arrOfOptions.push(<option key={index}  value={currOption.valOf}  >{currOption.strInfo}</option>);
		});
		return <div><select onChange={this.props.onClick}  value={this.state.value}>{arrOfOptions}</select></div>;
	 /* } */
 }
/*   
 handleClickSelect(){
	 this.setState({ value:  e.target.value });
	 this.props.onClick();
  }  */

}

class DankButton extends React.Component {

	
  constructor(props, context) {
    super(props, context)
    // Good Solution: Bind it in here!
    this.handleClickCheckbox = this.handleClickCheckbox.bind(this) ; 
    this.setBudget = this.setBudget.bind(this) ; 
    //this.handleClickAdditional = this.handleClickAdditional.bind(this)  
	this.state = {
		allAmount: 0,
		bannerquantity: 5,
		billDev:0,
		billPlatform:0,
		billDesign:0,
		billBonus:0,
budget:50000,
participant:1600,
coverage:"высокое",
quanticont:1000,
		vinnerquantity:500, //vinner quantity default
		delivery_format:1, //two format delivery: 1 = to distributor, 2 = to address 
		resultPrices:[ 
		//1
			  {
				unicname:'period',
				indexid:1,
				usehiddencheckbox:true,
				ischecked:false,
				category: 'Вводные данные: общая информация о программе лояльности', 
				baseprice: '0', 
				price: '0', 
				stocked: true, 
				showwordprefix:'', 
				showwordsuffix:'', 
				comment:'ориентировочное время проведения Программы', 
				name: 'Укажите длительность Программы', 
			  	arrOfVlue:[{valOf:1,strInfo:'1-3 месяца'},{valOf:2,strInfo:'4-6 месяцев'},{valOf:5,strInfo:'более 6 месяцев'}],
				formula: 'select',
				multinumber:1, 
				needit: false
				},
		//2
			  {
				unicname:'disributors_quantity',
				indexid:2,
				usehiddencheckbox:true,
				ischecked:false,
				category: 'Вводные данные: общая информация о программе лояльности',
				baseprice: '0', 
				price: '0',
				showwordprefix:'',
				showwordsuffix:'', 
				comment:'кол-во дистрибьюторов',
				stocked: false, 
				name: 'Укажите количество дистрибъюторов', 
				formula: 'set_distributor_number',
				multinumber:1, 
				needit: false
			  },
			//3
			  {
				  unicname:'budget',
				  indexid:3,
				  usehiddencheckbox:true,
				  ischecked:false,
				  category: 'Вводные данные: общая информация о программе лояльности',
				  showwordprefix:'', 
				  showwordsuffix:'', 
				  comment:'ориентировочный бюджет Программы',
				  baseprice: '0', 
				  price: '0', 
				  stocked: false, 
				  name: 'Ориентировочный бюджет Программы', 
				  arrOfVlue:50000, 
				  formula: 'set_distributor_number',
				  multinumber:50000,
				  needit: false
				  },
			//4
			  {
				  unicname:'region',
				  indexid:4,
				  usehiddencheckbox:true,
				  ischecked:false,
				  category: 'Вводные данные: общая информация о программе лояльности',
				  showwordprefix:'', 
				  showwordsuffix:'', 
				  comment:'some comment text', 
				  baseprice: '0',
				  price: '0', 
				  stocked: true,
				  name: 'География программы',	  arrOfVlue:[{valOf:1,strInfo:'Беларусь'},{valOf:2,strInfo:'Россия'},{valOf:2,strInfo:'Украина'},{valOf:3,strInfo:'Казахстан'},{valOf:4,strInfo:'Другие страны'},{valOf:4,strInfo:'Три страны Прим. Украина, Россия, Казахстан'}], 
				  formula: 'set_geo',
				  multinumber:1, 
				  needit: false
				  },
				  
	  //ВТОРОЙ раздел - разработка программы				  
			  
				{
				  unicname:'rooles',
				  indexid:10,
				  usehiddencheckbox:false,
				  ischecked:false,
				  category: 'Разработка программы: услуги агентства', 
				  showwordprefix:'от', 
				  showwordsuffix:'€', 
				  comment:'условия программы', 
				  baseprice: '550', 
				  price: '550', 
				  stocked: true, 
				  name: 'условия программы',
				  arrOfVlue:'none',
				  formula: 'multi',
				  multinumber:1, 
				  needit: false
				  },
				  
			  {
				  unicname:'programmdiv',
				  indexid:11,
				  usehiddencheckbox:false,
				  ischecked:false,
				  category: 'Разработка программы: услуги агентства',
				  showwordprefix:'от', 
				  showwordsuffix:'€',	
				  comment:'концепция со слоганом, название',
				  baseprice: '200', 
				  price: '200', 
				  stocked: true, 
				  name: 'концепция со слоганом, название',
				  arrOfVlue:'none',
				  formula: 'multi',
				  multinumber:1, 
				  needit: false
				  },
				  
			  {
				  unicname:'presentation',
				  indexid:12,
				  usehiddencheckbox:false,
				  ischecked:false,
				  category: 'Разработка программы: услуги агентства', 
				  showwordprefix:'', 
				  showwordsuffix:'€', 
				  baseprice: '150', 
				  comment:'презентация для дистрибьюторов',
				  price: '150', 
				  stocked: true, 
				  name: 'Презентация для дистрибьюторов',
				  arrOfVlue:'none',
				  formula: 'multi',
				  multinumber:1, 
				  needit: false
				  },
				  
			  {
				  unicname:'agency',
				  indexid:13,
				  usehiddencheckbox:false,
				  ischecked:false,
				  category: 'Разработка программы: услуги агентства', 
				  showwordprefix:'', 
				  showwordsuffix:'€',
				  comment:'инструкция для дистрибьюторов', 
				  baseprice: '100', 
				  price: '100', 
				  stocked: true, 
				  name: 'инструкция для дистрибьюторов', 
				  arrOfVlue:'none',
				  formula: 'multi',
				  multinumber:1, 
				  needit: false},
			
			//ТРЕТИЙ раздел  
			  {unicname:'dis5r',indexid:21,ischecked:false,category: 'Платформа для Программы',  baseprice: '7800',price: '0', stocked: false, name: 'Платформа для Программы (website)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'dis6r',indexid:22,ischecked:false,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Функционал регистрации участников', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'dis7r',indexid:23,ischecked:false,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Функционал загрузки оборотов', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'dis8r',indexid:24,ischecked:false,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Нотификация участников о результатах (e-mail)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'dis9r',indexid:25,ischecked:false,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Платформа для Программы (website)', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'dis11r',indexid:31,ischecked:false,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '1500',price: '0', stocked: true, name: 'Дизайн для платформы (website)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'dis12r',indexid:32,ischecked:false,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '150',price: '0', stocked: true, name: 'Дизайн рекламного макета Программы', formula: 'multi',multinumber:1, needit: false},			  {unicname:'price_for_banner',indexid:33,ischecked:false,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '300',price: '1800', stocked: true, name: 'Дизайн баннеров для дистрибьюторов', formula: 'multi',multinumber:5, needit: false},
			  {unicname:'count_for_banner',indexid:34,ischecked:false,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '0',price: '0', stocked: true, name: 'Количество баннеров', formula: 'multi',multinumber:5, needit: false},
			  {unicname:'dis13r',indexid:35,ischecked:false,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '150',price: '0', stocked: true, name: 'Дизайн рекламного макета Программы', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'dis14r',indexid:36,ischecked:false,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '200',price: '0', stocked: true, name: 'Дизайн сертификатов победителям (до 3 макетов)', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'users_quantity',indexid:41,ischecked:false,category: 'Призовой фонд', baseprice: '', price: '0', stocked: true, name: 'Количество участников', formula: 'multi',multinumber:1600, needit: false},			  
			  {unicname:'vinners_quantity',indexid:42,ischecked:false,category: 'Призовой фонд', baseprice: '', price: '0', stocked: true, name: 'Количество победителей', formula: 'multi',multinumber:500, needit: false},
			  
			  {unicname:'bonus_find',indexid:43,ischecked:false,category: 'Призовой фонд', baseprice: '200', price: '0', stocked: true, name: 'Подбор поощрений призового фонда', formula: 'multi',multinumber:1, needit: false},			  
			  {unicname:'bonus_create',indexid:44,ischecked:false,category: 'Призовой фонд', baseprice: '19000', price: '0', stocked: true, name: 'Закупка/изготовление поощрений', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'brending_goods',indexid:45,ischecked:false,category: 'Призовой фонд', baseprice: '0.15', price: '0', stocked: true, name: 'Брендирование поощрений', formula: 'multi',multinumber:1, needit: false},			  
			  {unicname:'logistic',indexid:46,ischecked:false,category: 'Призовой фонд', baseprice: '2850', price: '0', stocked: true, name: 'Логистика (хранение, упаковка)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'delivery',indexid:47,ischecked:false,category: 'Призовой фонд', baseprice: '600', price: '0', stocked: true, name: 'Доставка', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'bonus_for_disr',indexid:49,ischecked:false,category: 'Призовой фонд', baseprice: '300', price: '0', stocked: true, name: 'Поощрения сотрудников дистрибьюторов (супервайзеров)', formula: 'multi',multinumber:1, needit: false}	
			  ]
	}
  } 
  
  //////////////////click jQuery execute first BUT...
/*   
	// componentDidMount: function() {
   componentDidMount() {
		// when attaching with jquery this event handler is run before other handlers
        //$('body').bind('click', this.bodyClickHandler);
        document.addEventListener('click', this.bodyClickHandler);
  } */
  
  
	///////////
	// render
	render(content) { 
		//////////////
		// get it form db
		// Первый раздел - вводные данные
		var PRODUCTS = [
			
			//1
			{
				unicname:'period',
				indexid:1,
				usehiddencheckbox:true,
				ischecked:false,
				category: 'Вводные данные: общая информация о программе лояльности', 
				showwordprefix:'', 
				showwordsuffix:'', 
				comment:'ориентировочное время проведения Программы', 
				price: '', 
				stocked: true, 
				name: 'Укажите длительность Программы', 
				arrOfVlue:[{valOf:1,strInfo:'1-3 месяца'},{valOf:2,strInfo:'4-6 месяцев'},{valOf:5,strInfo:'более 6 месяцев'}],
				formula: 'select',
				multinumber:1
			},
			
			//2
	  {unicname:'disributors_quantity',indexid:2,
	  usehiddencheckbox:true,ischecked:false,category: 'Вводные данные: общая информация о программе лояльности', 
	  showwordprefix:'', showwordsuffix:'', comment:'кол-во дистрибьюторов', price: '', stocked: false, name: 'Укажите количество дистрибъюторов', arrOfVlue:1, formula: 'set_distributor_number',multinumber:1},			
	  
	  //3
	  {unicname:'budget',indexid:3,usehiddencheckbox:true,ischecked:false,category: 'Вводные данные: общая информация о программе лояльности', showwordprefix:'', showwordsuffix:'', comment:'ориентировочный бюджет Программы', price: '', stocked: false, name: 'Ориентировочный бюджет Программы', arrOfVlue:50000, formula: 'set_distributor_number',multinumber:50000},

	  //4
		  
		  
		  
		  
	  {
		  unicname:'region',indexid:4,
	  usehiddencheckbox:true,
	  ischecked:false,category: 'Вводные данные: общая информация о программе лояльности', showwordprefix:'', showwordsuffix:'', comment:'some comment text', price: '', stocked: true, name: 'География программы', arrOfVlue:[{valOf:1,strInfo:'Беларусь'},{valOf:2,strInfo:'Россия'},{valOf:2,strInfo:'Украина'},{valOf:3,strInfo:'Казахстан'},{valOf:4,strInfo:'Другие страны'},{valOf:4,strInfo:'Три страны Прим. Украина, Россия, Казахстан'}], formula: 'set_geo',multinumber:1},
	  
	  //ВТОРОЙ раздел - разработка программы
		  
		//  
	  {
unicname:'rooles',indexid:10,usehiddencheckbox:false,ischecked:false,category: 'Разработка программы: услуги агентства', showwordprefix:'от', showwordsuffix:'€', comment:'условия программы', price: '550', stocked: true, name: 'Условия программы', arrOfVlue:'none', formula: 'none',multinumber:1},
	  
	  //4
	  {unicname:'programmdiv',indexid:11,usehiddencheckbox:false,ischecked:false,category: 'Разработка программы: услуги агентства', showwordprefix:'от', showwordsuffix:'€', comment:'концепция со слоганом, название', price: '200', stocked: true, name: 'Концепция со слоганом, название', arrOfVlue:'none', formula: 'none',multinumber:1},
	  
	  //5
	  {unicname:'presentation',indexid:12,usehiddencheckbox:false,ischecked:false,category: 'Разработка программы: услуги агентства', showwordprefix:'', showwordsuffix:'€', comment:'презентация для дистрибьюторов', price: '150', stocked: true, name: 'Презентация для дистрибьюторов', arrOfVlue:'none', formula: 'none',multinumber:1},
	  
	  //6
	  {unicname:'agency',indexid:13,usehiddencheckbox:false,ischecked:false,category: 'Разработка программы: услуги агентства', showwordprefix:'', showwordsuffix:'€', comment:'инструкция для дистрибьюторов', price: '100', stocked: true, name: 'Инструкция для дистрибьюторов', arrOfVlue:'none', formula: 'none',multinumber:1},
	 
	//ТРЕТИЙ раздел 
	 {unicname:'funcplat',indexid:21,usehiddencheckbox:false,ischecked:false,category: 'Платформа для Программы лояльности:', showwordprefix:'от', showwordsuffix:'€', comment:'функционал регистрации участников, функционал загрузки оборотов, нотификация участников о результатах (e-mail), техническая поддержка', price: '7800', stocked: false, name: 'Платформа для Программы (website)', arrOfVlue:'none', formula: 'none',multinumber:1},	 
	 {unicname:'plat',indexid:22,usehiddencheckbox:true,ischecked:false,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - функционал регистрации участников', arrOfVlue:'none', formula: 'none',multinumber:1},
	 {unicname:'turn',indexid:23,usehiddencheckbox:true,ischecked:false,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - функционал загрузки оборотов', arrOfVlue:'none', formula: 'none',multinumber:1},
	 {unicname:'usersnotification',indexid:24,usehiddencheckbox:true,ischecked:false,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - нотификация участников о результатах (e-mail)', arrOfVlue:'none', formula: 'none',multinumber:1},
	 {unicname:'regfuncional',indexid:25,usehiddencheckbox:true,ischecked:false,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - функционал регистрации участников', arrOfVlue:'none', formula: 'none',multinumber:1},
		 
	 //ЧЕТВЕРТЫЙ раздел
	  {unicname:'gisignweb',indexid:31,usehiddencheckbox:false,ischecked:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'дизайн для платформы', price: '1500', stocked: true, name: 'Дизайн для платформы (website)', arrOfVlue:'none', formula: 'none',multinumber:1},
	  {unicname:'disignadvert',indexid:32,usehiddencheckbox:false,ischecked:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'Дизайн рекламного макета Программы', price: '150', stocked: true, name: 'Дизайн рекламного макета Программы', arrOfVlue:'none', formula: 'none',multinumber:1},
	  {unicname:'price_for_banner',indexid:33,usehiddencheckbox:false,ischecked:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'дизайн баннеров для дистрибьюторов', price: '1800', stocked: true, name: 'Дизайн баннеров для дистрибьюторов', arrOfVlue:'none', formula: 'none',multinumber:5},
	  {unicname:'count_for_banner',indexid:34,usehiddencheckbox:true,ischecked:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'', comment:'some comment text', price: '', stocked: true, name: 'Количество баннеров', arrOfVlue:5, formula: 'none',multinumber:5},
	  {unicname:'gesignmaket',indexid:35,usehiddencheckbox:false,ischecked:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'some comment text', price: '1500', stocked: true, name: 'Дизайн рекламного макета Программы', arrOfVlue:'none', formula: 'none',multinumber:1},
	  {unicname:'disignsetificats',indexid:36,usehiddencheckbox:false,ischecked:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'дизайн сертификатов победителям', price: '200', stocked: true, name: 'Дизайн сертификатов победителям (до 3 макетов)', arrOfVlue:'none', formula: 'none',multinumber:1},  
		
	  //ПРИЗОВОЙ фонд
	   {unicname:'users_quatity',indexid:41,usehiddencheckbox:true,ischecked:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'', comment:'укажите количество участников ИЛИ количество победителей', price: '', stocked: true, name: 'Количество участников', arrOfVlue:1600, formula: 'multi',multinumber:1},
	   {unicname:'vinners_quantity',indexid:42,usehiddencheckbox:true,ischecked:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'', comment:'укажите количество участников ИЛИ количество победителей', price: '', stocked: true, name: 'Количество победителей', arrOfVlue:500, formula: 'multi',multinumber:1},
	   
	   {unicname:'bonus_find',indexid:43,usehiddencheckbox:false,ischecked:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'€', comment:'подбор поощрений призового фонда', price: '200', stocked: true, name: 'Подбор поощрений призового фонда', arrOfVlue:'none', formula: 'none',multinumber:1},
	   {unicname:'bonus_create',indexid:44,usehiddencheckbox:false,ischecked:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'€', comment:'закупка/изготовление поощрений', price: '19000', stocked: true, name: 'Закупка/изготовление поощрений', arrOfVlue:'none', formula: 'none',multinumber:1},	 
	   
	   {unicname:'brending_goods',indexid:45,usehiddencheckbox:false,ischecked:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'€', comment:'брендирование поощрений', price: '2850', stocked: true, name: 'Брендирование поощрений', arrOfVlue:'none', formula: 'none',multinumber:1},
	   {unicname:'logistic',indexid:46,usehiddencheckbox:false,ischecked:false,category: 'Призовой фонд', showwordprefix:'от', showwordsuffix:'€', comment:'логистика (хранение, упаковка)', price: '2100', stocked: true, name: 'Логистика (хранение, упаковка)', arrOfVlue:'none', formula: 'none',multinumber:1},
	   	  {unicname:'delivery',indexid:47,usehiddencheckbox:false,ischecked:false,category: 'Призовой фонд', showwordprefix:'от', showwordsuffix:'€', comment:'доставка', price: '600', stocked: true, name: 'Доставка', arrOfVlue:[{valOf:1,strInfo:'Доставка дистрибьюторам'},{valOf:2,strInfo:'Адресная доставка победителям'}], formula: 'multi',multinumber:1},
	   
	  {unicname:'bonus_for_disr',indexid:49,usehiddencheckbox:false,ischecked:false,category: 'Призовой фонд', showwordprefix:'от', showwordsuffix:'', comment:'Рассчет осуществляется на основе количества дистрибъюторов указаного во Вводном разделе', price: '300', stocked: true, name: 'Поощрения сотрудников дистрибьюторов (супервайзеров)', arrOfVlue:'none', formula: 'none',multinumber:1}
		];
		var buttonListElements = [];
		var lastCategory = null;
		//var i = 1;
	
			////////////////
			// child block
			PRODUCTS.map(function(product,index) {
				//UNIC FORMULA
				var usersControlFormula = [];
				if (product.unicname=='disributors_quantity') {
					this.state.value = this.state.resultPrices[index].multinumber;
					usersControlFormula.push(<div><input className="width20" type="text"  onChange={this.setDistributorQuantiy.bind(this,index)}  value={this.state.value}/></div>);
				} else if  (product.unicname=='budget') {
					//  var somres = React.findDOMNode(this.refs.logistic.).value.trim();
					//alert('somres=');
					
					this.state.value = this.state.resultPrices[index].multinumber;
					usersControlFormula.push(<div><input className="width70" type="text"  onChange={this.setBudget.bind(this,index)}  value={this.state.budget}/><button  className="mleft100"  onClick={this.setBudget.bind(this,index)} value={this.state.budget}>Рассчитать</button></div>);
				} else if (product.unicname=='count_for_banner') {
					usersControlFormula.push(<div><input className="width20" type="text"  onChange={this.setBannerQuantiy.bind(this,index)}  value={this.state.resultPrices[index].multinumber}/></div>);				
				} else if (product.unicname=='users_quatity') {
					usersControlFormula.push(<div><input className="width70" type="text"  onChange={this.setUserQuantiy.bind(this,index)}  value={this.state.resultPrices[index].multinumber}/></div>);				
				} else if (product.unicname=='vinners_quantity') {
					//usersControlFormula.push(<div><input className="width70 noforc" readonly onChange={this.setVinnerQuantiy.bind(this,index)}  value={this.state.resultPrices[index].multinumber}/></div>);
					usersControlFormula.push(<div><input className="width70 noforc"  onChange={this.setVinnerQuantiy.bind(this,index)}  value={this.state.resultPrices[index].multinumber}/></div>);
				} else if (product.unicname=='delivery') {
					usersControlFormula.push(<ProductSelect onClick={this.changeDeliveryPriceMulti.bind(this,index)} category={product.arrOfVlue} key={product.indexid} />);
				} else if (product.arrOfVlue=='none') {
					usersControlFormula.push(<div></div>);//for comment and so on
				} else {		
					usersControlFormula.push(<ProductSelect onClick={this.changeItemPriceMulti.bind(this,index)} category={product.arrOfVlue} key={product.indexid} />);
				}
				
				//USE OR NOT checkbox
				var useOrNotCheckbox = []
				if (product.usehiddencheckbox) {
					useOrNotCheckbox.push(<input className='checkboxforprice hiddencheckbox' type='checkbox' id={product.indexid}  onClick={this.handleClickCheckbox.bind(null, product.price,index)} value={product.price} checked/>);
				} else {
					useOrNotCheckbox.push(<input className='checkboxforprice' type='checkbox' id={product.indexid}   onClick={this.handleClickCheckbox.bind(null, product.price,index)} onChange={this.onChange} value={product.price} checked={this.state.resultPrices[index].ischecked} />);
				}
				
				  if (product.category !== lastCategory) {
					buttonListElements.push(<div className="row bcwhite margintop80"><div className="col-md-12 blueColor_h80_pt5"><h3>{product.category}</h3></div></div>);
				 }
				//check prefix and set if exist
				if (product.showwordprefix != '') {	
					var pricewithprefix = product.showwordprefix + ' ' + product.price;
				} else {
					pricewithprefix = product.price;
				}				
				//check suffix and set if exist
				if (product.showwordsuffix != '') {	
					var pricewithprefixandsuffix = pricewithprefix + ' ' + product.showwordsuffix ;
				} else {
					pricewithprefixandsuffix = pricewithprefix;
				}
				//show or hide select or input
				var hideinputonphone = "col-md-4 bcgray";
				if (product.formula == 'none') {
					hideinputonphone = "col-md-4 bcgray hidden-sm hidden-xs";
				}		
				//show or hide price
				var hidepriceonphone = "col-md-3 bcgray";
				if (product.price == '') {
					hidepriceonphone = "col-md-3 bcgray hidden-sm hidden-xs";
				}
				
				
				  buttonListElements.push(
				  <div  key={product.indexid} className="row" title={product.comment}>
					<div className="col-md-5 bcgray">
				{useOrNotCheckbox}
						<label   htmlFor={product.indexid}>{product.name}</label>
					</div>
					
					<div className={hideinputonphone}>{usersControlFormula}</div>
					
					<div className={hidepriceonphone}><SomeSum priceinrow={pricewithprefixandsuffix} key={product.price} /></div>

				</div>);
				  lastCategory = product.category;
				 // i++;
			}, this);		
			// child block
			////////////////
		return (<div  className="row" key="mainform" id="reactroot">
					<div className="col-md-8">{buttonListElements}</div>
					<div className="col-md-4">
						<div id="staticPrice">
						
						<div className="row">
							<div className="col-md-9 colorblue">Результаты</div>

						</div>
						
						
						<div className="row">
							<div className="col-md-9">Разработка программы: услуги агентства</div>
							<div className="col-md-3">{this.state.billDev} €</div>
						</div>
						
						<div className="row">
							<div className="col-md-9">Платформа для Программы лояльности</div>
							<div className="col-md-3">{this.state.billPlatform} €</div>
						</div>
						
						<div className="row">
							<div className="col-md-9">Дизайн key visual</div>
							<div className="col-md-3">{this.state.billDesign} €</div>
						</div>
						
						<div className="row">
							<div className="col-md-9"> Призовой фонд</div>
							<div className="col-md-3">{this.state.billBonus} €</div>
						</div>
						
						<hr/>
						<div className="row colorblue">
							<div className="col-md-9">Охват (кол-во участников)</div>
							<div className="col-md-3">{this.state.participant}</div>
						</div>
						<div className="row colorblue">
							<div className="col-md-9">Качество контакта</div>
							<div className="col-md-3">{this.state.coverage}</div>
						</div>
						<div className="row colorblue">
							<div className="col-md-9">Среднее количество контактов за Программу</div>
							<div className="col-md-3">{this.state.quanticont}</div>
						</div>					
						
						
						<hr/>
						<div className="row colorblue">
							<div className="col-md-9"><span className="textalignright">Итого:</span></div>
							<div className="col-md-3">{this.state.allAmount} €</div>
						</div>
						
						</div>
						
					</div>
				</div>);
	}
	// render  
	///////////
	//<!--button type="button" className="btn btn-danger">Click me!{this.state.buttonNumber}</button-->
	setUserQuantiy(indexinarray,event){
		var valueForUserQuantity = event.target.value;
		var newArrForFormula = this.state.resultPrices;
		newArrForFormula[indexinarray].multinumber = valueForUserQuantity;
	 this.setState({participant : valueForUserQuantity});
		   newArrForFormula.map(function(currentRow,index) {
			   if (currentRow.unicname == 'vinners_quantity') {
				   newArrForFormula[index].multinumber = parseInt(valueForUserQuantity*0.3);
				   this.state.vinnerquantity = newArrForFormula[index].multinumber;
			   }
		   });    
		  this.setState({ resultPrices: newArrForFormula });

		  this.recountIt();
	}	
	setVinnerQuantiy(indexinarray,event){
		var valueForVinnerQuantity = event.target.value;
		var participantQuantity = valueForVinnerQuantity*3;
		this.setState({participant : participantQuantity});
		var newArrForFormula = this.state.resultPrices;
		newArrForFormula[indexinarray].multinumber = valueForVinnerQuantity;
		this.state.vinnerquantity = newArrForFormula[indexinarray].multinumber;
		  newArrForFormula.map(function(currentRow,index) {
			   if (currentRow.unicname == 'users_quantity') {
				   newArrForFormula[index].multinumber = participantQuantity;

			   }
		   }); 
		   
		   
		  this.setState({ resultPrices: newArrForFormula });

		  this.recountIt();
	}	
	setBannerQuantiy(indexinarray,event){
		 var valueForBannerQuantity = event.target.value;
		 var newArrForFormula = this.state.resultPrices;
		 newArrForFormula[indexinarray].multinumber = valueForBannerQuantity;
	 
		 newArrForFormula.map(function(currentRow,index) {
			   if (currentRow.unicname == 'price_for_banner') {
				   newArrForFormula[index].multinumber = valueForBannerQuantity;
			   }
		   });   
		  this.setState({ resultPrices: newArrForFormula });

		  this.recountIt();
	}
	
	setBudget(indexinarray,event){
		  var valueForBudget = event.target.value;
		  var newArrForFormula = this.state.resultPrices;
		   this.state.budget = valueForBudget;
		   newArrForFormula[indexinarray].multinumber = valueForBudget;
		 
		 newArrForFormula.map(function(currentRow,index) {
					if (currentRow.needit != true ){
						switch (currentRow.category) {
							   case "Разработка программы: услуги агентства":
								  newArrForFormula[index].needit = true;
								  newArrForFormula[index].ischecked = true;
								  break;
							  
								  
							}
					}
				});
		   
		   
		  this.setState({ resultPrices: newArrForFormula });

		  this.recountIt();
	}	
	
	setDistributorQuantiy(indexinarray,event){
		  var valueForDistributorPrice = event.target.value;
		  var newArrForFormula = this.state.resultPrices;
		   newArrForFormula[indexinarray].multinumber = valueForDistributorPrice;
		   //alert(newArrForFormula[indexinarray].multinumber);//количество дистрибъюторов
		   
	   newArrForFormula.map(function(currentRow,index) {
			   if (currentRow.unicname == 'bonus_for_disr') {
				   //alert('about change');
				   newArrForFormula[index].multinumber = valueForDistributorPrice;
			   }
		   });
		  this.setState({ resultPrices: newArrForFormula });
		  
		  this.recountIt();
	}
		/***
		set new value for multinumber in state array (resultPrices) by indexinarray
		arg1 indexinarray - element index
		arg2 event - get value from event
		*/
		 changeDeliveryPriceMulti(indexinarray,event){
			this.state.delivery_format = event.target.value;
			this.recountIt();
		}
		
	  changeItemPriceMulti(indexinarray,event){
		  var valueForMulti = event.target.value;
		  var newArrForFormula = this.state.resultPrices;
		  var basePrice = newArrForFormula[indexinarray].baseprice;
		  newArrForFormula[indexinarray].multinumber = valueForMulti;
		  newArrForFormula[indexinarray].price = parseFloat(valueForMulti) * parseFloat(basePrice);
		  this.setState({ resultPrices: newArrForFormula });
		  
		  this.recountIt();
	  }
	/***
	set new value for 1) checked\anchecked info and 2) price (someval) value in state array with prices (resultPrices) by index (indexinarray)
	arg1 someval - new value from user control
	arg2 indexinarray - index of array for current price change
	*/
	handleClickCheckbox(someval,indexinarray) {
		//alert(this.state.resultPrices[indexinarray].needit == false);
		if(this.state.resultPrices[indexinarray].needit == false && this.state.resultPrices[indexinarray].ischecked == false) {
			var newArr = this.state.resultPrices;
	
			newArr[indexinarray].price = someval;
			newArr[indexinarray].needit = true;
			newArr[indexinarray].ischecked = true;
			this.setState({ resultPrices: newArr });

		} else {
			var newArr = this.state.resultPrices;
			newArr[indexinarray].needit = false;
			newArr[indexinarray].ischecked = false;
				
			this.setState({ resultPrices: newArr });

		}
			this.recountIt();
	} 
	/***
	set new AMOUNT value on state prices recalculation (resultPrices)
	*/
	recountIt() {
		console.log('set it at last');
		var forAmount = 0;
		var bonus_for_vinners = this.state.vinnerquantity*38;
		var brending_goods_price = bonus_for_vinners*0.15;
		var logistic_price = this.state.vinnerquantity*5;
		if (logistic_price < 2100) {
			logistic_price = 2100;
		}
		//delivery format
		var delivery_price = 600;
		if (this.state.delivery_format == 1) {
			if (this.state.vinnerquantity * 2 > 600) {
				delivery_price = this.state.vinnerquantity*2;//delivery only to destributors
			}
		} else {
			delivery_price = this.state.vinnerquantity*40;//delivery to vinners address 
		}
		var onUpdateAmountArr = this.state.resultPrices;
		onUpdateAmountArr.map(function(currentRow,index) {
		//only Price-generation stirngs must be used here
		if (currentRow.baseprice != 0 && currentRow.needit == true ){
			//price of banner 
			if (currentRow.unicname == 'price_for_banner') {
				forAmount =  parseFloat(forAmount) + (60 + (30*(parseInt(currentRow.multinumber)-1)));
				currentRow.price = (60 + (30*(parseInt(currentRow.multinumber)-1)));
			} else if (currentRow.unicname == 'bonus_create') {
				forAmount =  parseFloat(forAmount) + bonus_for_vinners; 
				currentRow.price = bonus_for_vinners;
			} else if (currentRow.unicname == 'brending_goods') {
				forAmount =  parseFloat(forAmount) + brending_goods_price; 
				currentRow.price = brending_goods_price;
			} else if (currentRow.unicname == 'logistic') {
				forAmount =  parseFloat(forAmount) + logistic_price; 
				currentRow.price = logistic_price;
			} else if (currentRow.unicname == 'delivery') {
				forAmount =  parseFloat(forAmount) + delivery_price; 
				currentRow.price = delivery_price;
			} else { 
				forAmount = (parseFloat(forAmount) + parseFloat(currentRow.baseprice)*parseFloat(currentRow.multinumber)).toFixed(2);
			}
		}
	});
		
		this.setState({allAmount: forAmount});
		this.setState({ resultPrices: onUpdateAmountArr });
	this.makeBill();
	}
		//////////////
	// rows in Bill
			makeBill(){
				var billDev=0;
				var billPlatform=0;
				var billBonus=0;
				var billDesign=0;
				//one by one all array
				 this.state.resultPrices.map(function(currentRow,index) {
					//count if checked!
					if (currentRow.needit == true ){
						switch (currentRow.category) {
							   case "Разработка программы: услуги агентства":
								  billDev += parseFloat(currentRow.price);
									break
							   case "Платформа для Программы лояльности:":
								    billPlatform += parseFloat(currentRow.price);
								  break							  
							   case "Дизайн key visual:":
								    billDesign += parseFloat(currentRow.price);
								  break
								case "Призовой фонд":
								    billBonus += parseFloat(currentRow.price);
								  break
							}
					}
				});
				this.setState({billDev:billDev});
				this.setState({billPlatform:billPlatform});
				this.setState({billDesign:billDesign});
				this.setState({billBonus:billBonus});
			}
	// rows in Bill
	//////////////

}

ReactDOM.render(
  <DankButton />,
  document.getElementById('container')
);
</script>
</body>
</html>