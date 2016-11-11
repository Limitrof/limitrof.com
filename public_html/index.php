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
/* main container*/
.tabbable{
padding:30px;
background-color: #f1f3f7;
}
#container select{
	height: 50px;
	margin-top: -15px;
    width: 80%; 
	padding-left: 20px;
}
.stalicPrice{
	width:300px;
	height:500px;
	border:1px solid gray;
	position:fixed;
/* position:absolute; */
	right:40px;
	top:50px;
	border-radius:20px;
	padding:10px;
	background-color:white;
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

</style>
</head>
<body>
<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab10" data-toggle="tab">AGV</a></li>
		<li><a href="#tab20" data-toggle="tab">AGV lab</a></li>
	</ul>
	<div class="tab-content" style="background-color:#f1f3f7;padding:20px;">
		<div class="tab-pane active" id="tab10">
			<div id="container">
			</div>
		</div>
		<div class="tab-pane" id="tab20">
			<p>AGV lab...</p>
		</div>
	</div>
</div>


<div id="container">
    <!-- This element's contents will be replaced with your component. -->
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
    this.handleClickCheckbox = this.handleClickCheckbox.bind(this)  
    //this.handleClickAdditional = this.handleClickAdditional.bind(this)  
	this.state = {
		allAmount: 0,
		bannerquantity: 5,
vinnerquantity:500, //vinner quantity defoult
delivery_format:1, //two format delivery: 1 = to distributor, 2 = to address 
		resultPrices:[  
			  {unicname:'period', indexid:1,category: 'Вводные данные', baseprice: '0', price: '0', stocked: true, name: 'Укажите длительность Программы', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disributors_quantity',indexid:2,category: 'Вводные данные',  baseprice: '0', price: '0', stocked: false, name: 'IT консалтинг', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'region',indexid:3,category: 'Вводные данные',  baseprice: '0',price: '0', stocked: true, name: 'География программы', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'disr',indexid:10,category: 'Разработка программы: услуги агентства', baseprice: '550', price: '0', stocked: true, name: 'условия программые', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:11,category: 'Разработка программы: услуги агентства', baseprice: '200', price: '0', stocked: true, name: 'концепция со слоганом, название', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:12,category: 'Разработка программы: услуги агентства', baseprice: '150', price: '0', stocked: true, name: 'презентация для дистрибьюторов', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:13,category: 'Разработка программы: услуги агентства', baseprice: '100', price: '0', stocked: true, name: 'инструкция для дистрибьюторов', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'disr',indexid:21,category: 'Платформа для Программы',  baseprice: '7800',price: '0', stocked: false, name: 'Платформа для Программы (website)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:22,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Функционал регистрации участников', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:23,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Функционал загрузки оборотов', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:24,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Нотификация участников о результатах (e-mail)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:25,category: 'Платформа для Программы',  baseprice: '0',price: '0', stocked: false, name: 'Платформа для Программы (website)', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'disr',indexid:31,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '1500',price: '0', stocked: true, name: 'Дизайн для платформы (website)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:32,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '150',price: '0', stocked: true, name: 'Дизайн рекламного макета Программы', formula: 'multi',multinumber:1, needit: false},			  {unicname:'price_for_banner',indexid:33,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '300',price: '1800', stocked: true, name: 'Дизайн баннеров для дистрибьюторов', formula: 'multi',multinumber:5, needit: false},
			  {unicname:'count_for_banner',indexid:34,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '0',price: '0', stocked: true, name: 'Количество баннеров', formula: 'multi',multinumber:5, needit: false},
			  {unicname:'disr',indexid:35,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '150',price: '0', stocked: true, name: 'Дизайн рекламного макета Программы', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'disr',indexid:36,category: 'Дизайн key visual: информация о Key visual услуга',  baseprice: '200',price: '0', stocked: true, name: 'Дизайн сертификатов победителям (до 3 макетов)', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'users_quantity',indexid:41,category: 'Призовой фонд', baseprice: '', price: '0', stocked: true, name: 'Количество участников', formula: 'multi',multinumber:1600, needit: false},			  
			  {unicname:'vinners_quantity',indexid:42,category: 'Призовой фонд', baseprice: '', price: '0', stocked: true, name: 'Количество победителей', formula: 'multi',multinumber:500, needit: false},
			  
			  {unicname:'bonus_find',indexid:43,category: 'Призовой фонд', baseprice: '200', price: '0', stocked: true, name: 'Подбор поощрений призового фонда', formula: 'multi',multinumber:1, needit: false},			  
			  {unicname:'bonus_create',indexid:44,category: 'Призовой фонд', baseprice: '19000', price: '0', stocked: true, name: 'Закупка/изготовление поощрений', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'brending_goods',indexid:45,category: 'Призовой фонд', baseprice: '0.15', price: '0', stocked: true, name: 'Брендирование поощрений', formula: 'multi',multinumber:1, needit: false},			  
			  {unicname:'logistic',indexid:46,category: 'Призовой фонд', baseprice: '2850', price: '0', stocked: true, name: 'Логистика (хранение, упаковка)', formula: 'multi',multinumber:1, needit: false},
			  {unicname:'delivery',indexid:47,category: 'Призовой фонд', baseprice: '600', price: '0', stocked: true, name: 'Доставка', formula: 'multi',multinumber:1, needit: false},
			  
			  {unicname:'bonus_for_disr',indexid:49,category: 'Призовой фонд', baseprice: '300', price: '0', stocked: true, name: 'Поощрения сотрудников дистрибьюторов (супервайзеров)', formula: 'multi',multinumber:1, needit: false}	
			  ]
	}
  } 
	///////////
	// render
	render(content) { 
		//////////////
		// get it form db
		// Первый раздел - вводные данные
		var PRODUCTS = [
			{
				unicname:'period',
				indexid:1,
				usehiddencheckbox:true,
				category: 'Вводные данные: общая информация о программе лояльности', 
				showwordprefix:'', 
				showwordsuffix:'', 
				comment:'ориентировочное время проведения Программы', 
				price: '', 
				stocked: true, 
				name: 'Укажите длительность Программы', 
				arrOfVlue:[{valOf:1,strInfo:'1-3 месяца'},{valOf:2,strInfo:'4-6 месяцев'},{valOf:5,strInfo:'более 6 месяцев'}]
			},
	  {unicname:'disributors_quantity',indexid:2,usehiddencheckbox:true,category: 'Вводные данные: общая информация о программе лояльности', showwordprefix:'', showwordsuffix:'', comment:'кол-во дистрибьюторов', price: '', stocked: false, name: 'Укажите количество дистрибъюторов', arrOfVlue:1},
	  {unicname:'region',indexid:3,usehiddencheckbox:true,category: 'Вводные данные: общая информация о программе лояльности', showwordprefix:'', showwordsuffix:'', comment:'some comment text', price: '', stocked: true, name: 'География программы', arrOfVlue:[{valOf:1,strInfo:'Беларусь'},{valOf:2,strInfo:'Россия'},{valOf:2,strInfo:'Украина'},{valOf:3,strInfo:'Казахстан'},{valOf:4,strInfo:'Другие страны'},{valOf:4,strInfo:'Три страны Прим. Украина, Россия, Казахстан'}]},
	  
	  //ВТОРОЙ раздел - разработка программы
	  {unicname:'rooles',indexid:10,usehiddencheckbox:false,category: 'Разработка программы: услуги агентства', showwordprefix:'от', showwordsuffix:'€', comment:'условия программы', price: '550', stocked: true, name: 'Условия программы', arrOfVlue:'none'},
	  {unicname:'disr',indexid:11,usehiddencheckbox:false,category: 'Разработка программы: услуги агентства', showwordprefix:'от', showwordsuffix:'€', comment:'концепция со слоганом, название', price: '200', stocked: true, name: 'Концепция со слоганом, название', arrOfVlue:'none'},
	  {unicname:'disr',indexid:12,usehiddencheckbox:false,category: 'Разработка программы: услуги агентства', showwordprefix:'', showwordsuffix:'€', comment:'презентация для дистрибьюторов', price: '150', stocked: true, name: 'Презентация для дистрибьюторов', arrOfVlue:'none'},
	  {unicname:'disr',indexid:13,usehiddencheckbox:false,category: 'Разработка программы: услуги агентства', showwordprefix:'', showwordsuffix:'€', comment:'инструкция для дистрибьюторов', price: '100', stocked: true, name: 'Инструкция для дистрибьюторов', arrOfVlue:'none'},
	 
	//ТРЕТИЙ раздел 
	 {unicname:'disr',indexid:21,usehiddencheckbox:false,category: 'Платформа для Программы лояльности:', showwordprefix:'от', showwordsuffix:'€', comment:'функционал регистрации участников, функционал загрузки оборотов, нотификация участников о результатах (e-mail), техническая поддержка', price: '7800', stocked: false, name: 'Платформа для Программы (website)', arrOfVlue:'none'},	 
	 {unicname:'disr',indexid:22,usehiddencheckbox:true,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - функционал регистрации участников', arrOfVlue:'none'},
	 {unicname:'disr',indexid:23,usehiddencheckbox:true,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - функционал загрузки оборотов', arrOfVlue:'none'},
	 {unicname:'disr',indexid:24,usehiddencheckbox:true,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - нотификация участников о результатах (e-mail)', arrOfVlue:'none'},
	 {unicname:'disr',indexid:25,usehiddencheckbox:true,category: 'Платформа для Программы лояльности:', showwordprefix:'', showwordsuffix:'', comment:'', price: '', stocked: false, name: ' - функционал регистрации участников', arrOfVlue:'none'},
		 
	 //ЧЕТВЕРТЫЙ раздел
	  {unicname:'disr',indexid:31,usehiddencheckbox:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'дизайн для платформы', price: '1500', stocked: true, name: 'Дизайн для платформы (website)', arrOfVlue:'none'},
	  {unicname:'disr',indexid:32,usehiddencheckbox:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'Дизайн рекламного макета Программы', price: '150', stocked: true, name: 'Дизайн рекламного макета Программы', arrOfVlue:'none'},
	  {unicname:'price_for_banner',indexid:33,usehiddencheckbox:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'дизайн баннеров для дистрибьюторов', price: '1800', stocked: true, name: 'Дизайн баннеров для дистрибьюторов', arrOfVlue:'none'},
	  {unicname:'count_for_banner',indexid:34,usehiddencheckbox:true,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'', comment:'some comment text', price: '', stocked: true, name: 'Количество баннеров', arrOfVlue:5},
	  {unicname:'disr',indexid:35,usehiddencheckbox:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'some comment text', price: '1500', stocked: true, name: 'Дизайн рекламного макета Программы', arrOfVlue:'none'},
	  {unicname:'disr',indexid:36,usehiddencheckbox:false,category: 'Дизайн key visual: ', showwordprefix:'', showwordsuffix:'€', comment:'дизайн сертификатов победителям', price: '200', stocked: true, name: 'Дизайн сертификатов победителям (до 3 макетов)', arrOfVlue:'none'},  
		
	  //ПРИЗОВОЙ фонд
	   {unicname:'users_quatity',indexid:41,usehiddencheckbox:true,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'', comment:'укажите количество участников ИЛИ количество победителей', price: '', stocked: true, name: 'Количество участников', arrOfVlue:1600},
	   {unicname:'vinners_quantity',indexid:42,usehiddencheckbox:true,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'', comment:'укажите количество участников ИЛИ количество победителей', price: '', stocked: true, name: 'Количество победителей', arrOfVlue:500},
	   
	   {unicname:'bonus_find',indexid:43,usehiddencheckbox:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'€', comment:'подбор поощрений призового фонда', price: '200', stocked: true, name: 'Подбор поощрений призового фонда', arrOfVlue:'none'},
	   {unicname:'bonus_create',indexid:44,usehiddencheckbox:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'€', comment:'закупка/изготовление поощрений', price: '19000', stocked: true, name: 'Закупка/изготовление поощрений', arrOfVlue:'none'},	 
	   
	   {unicname:'brending_goods',indexid:45,usehiddencheckbox:false,category: 'Призовой фонд', showwordprefix:'', showwordsuffix:'€', comment:'брендирование поощрений', price: '2850', stocked: true, name: 'Брендирование поощрений', arrOfVlue:'none'},
	   {unicname:'logistic',indexid:46,usehiddencheckbox:false,category: 'Призовой фонд', showwordprefix:'от', showwordsuffix:'€', comment:'логистика (хранение, упаковка)', price: '2100', stocked: true, name: 'Логистика (хранение, упаковка)', arrOfVlue:'none'},
	   	  {unicname:'delivery',indexid:47,usehiddencheckbox:false,category: 'Призовой фонд', showwordprefix:'от', showwordsuffix:'€', comment:'доставка', price: '600', stocked: true, name: 'Доставка', arrOfVlue:[{valOf:1,strInfo:'Доставка дистрибьюторам'},{valOf:2,strInfo:'Адресная доставка победителям'}]},
	   
	  {unicname:'bonus_for_disr',indexid:49,usehiddencheckbox:false,category: 'Призовой фонд', showwordprefix:'от', showwordsuffix:'', comment:'Рассчет осуществляется на основе количества дистрибъюторов указаного во Вводном разделе', price: '300', stocked: true, name: 'Поощрения сотрудников дистрибьюторов (супервайзеров)', arrOfVlue:'none'}
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
					useOrNotCheckbox.push(<input className='checkboxforprice' type='checkbox' id={product.indexid}  onClick={this.handleClickCheckbox.bind(null, product.price,index)} value={product.price}  />);
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
				
				  buttonListElements.push(
				  <div  key={product.indexid} className="row" title={product.comment}>
					<div className="col-md-5 bcgray">
				{useOrNotCheckbox}
						<label   htmlFor={product.indexid}>{product.name}</label>
					</div>
					
					<div className="col-md-4 bcgray">{usersControlFormula}</div>
					
					<div className="col-md-3 bcgray"><SomeSum priceinrow={pricewithprefixandsuffix} key={product.price} /></div>

				</div>);
				  lastCategory = product.category;
				 // i++;
			}, this);		
			// child block
			////////////////
		return (<div  className="row" key="mainform">
					<div className="col-md-8">{buttonListElements}</div>
					<div className="col-md-4">
						<div className="stalicPrice">{this.state.allAmount}</div>
						<button type="button" className="btn btn-danger">Click me!{this.state.buttonNumber}</button>
					</div>
				</div>);
	}
	// render  
	///////////
	
	setUserQuantiy(indexinarray,event){
		var valueForUserQuantity = event.target.value;
		var newArrForFormula = this.state.resultPrices;
		newArrForFormula[indexinarray].multinumber = valueForUserQuantity;
	 alert(valueForUserQuantity);
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
		var newArrForFormula = this.state.resultPrices;
		newArrForFormula[indexinarray].multinumber = valueForVinnerQuantity;
		this.state.vinnerquantity = newArrForFormula[indexinarray].multinumber;
		  newArrForFormula.map(function(currentRow,index) {
			   if (currentRow.unicname == 'users_quantity') {
				   newArrForFormula[index].multinumber =parseInt(valueForVinnerQuantity*3);
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
		 // alert('newArrForFormula[indexinarray].price = ' + newArrForFormula[indexinarray].price);
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
		if(this.state.resultPrices[indexinarray].needit == false) {
			var newArr = this.state.resultPrices;
	
			newArr[indexinarray].price = someval;
			newArr[indexinarray].needit = true;
			this.setState({ resultPrices: newArr });

		} else {
			var newArr = this.state.resultPrices;
			newArr[indexinarray].needit = false;
				
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
			if (this.state.vinnerquantity*2 > 600) {
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
	
	}
}

ReactDOM.render(
  <DankButton />,
  document.getElementById('container')
);
</script>
</script>
</body>
</html>