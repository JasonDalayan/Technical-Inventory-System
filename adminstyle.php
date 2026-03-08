<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap');
	*{
		padding: 0;
		margin: 0;
		font-family: 'poppins', sans-serif;
	}
	body{
		background-color: #f2f2f2;
		display: flex;
	}
/*******************     header design      ******************/
	.head{	
		padding-bottom: 1%;
		color: #fff;
		background-color: rgba(201, 0, 0, 1.0);
		width: 100%;
		height: 6%;
		position: absolute;
	}
	.cclogo {
		margin-left: 95rem;
		margin-bottom: 20px;
	}
	
/*******************     this is for sidebar design      ******************/
	.slide{
		height: 100%;
		width: 280px;
		position: absolute;
		display: ;
		background-color: #fff;
		transition: 0.5s ease;
		margin: 0;
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
		/*transform: translateX(-280px);*/
	}
	h1{
		color: #ba091b;
		font-weight: 800;
		text-align: center;
		padding: 20px 0;
		padding-left: 25px;
		padding-right: 30px;
		pointer-events: none;
	}
	ul li{
		list-style: none;

	}
	ul li a{
		color: #011a41;
		font-weight: 500;
		padding: 5px 0;
		display: block;
		text-transform: capitalize;
		text-decoration: none;
		transition: 0.2s ease-out;
	}
	ul li:hover a{
		color: #ffff;
		background-color: #ba091b;
	}

	ul li a i{
		width: 40px;
		text-align: center;
	}

	#checks{
		display: none;
		visibility: hidden;
		-webkit-appearance: none;
	}
	.toggle{
		position: absolute;
		height: 30px;
		width: 30px;
		top: 20px;
		left: 15px;
		z-index: 1;
		cursor: pointer;
		border-radius: 2px;
		background-color: #fff;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	}
	.toggle .common{
		position: absolute;
		height: 2px;
		width: 20px;
		background-color: #ba091b;
		border-radius: 50px;
		transition: 0.3s ease;
	}
	.toggle .top_line{
		top : 30%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.toggle .middle_line{
		top : 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.toggle .bottom_line{
		top : 70%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	input:checked ~ .toggle .top_line{
		left: 2px;
		top: 14px;
		width: 25px;
		transform: rotate(45deg);
	}
	input:checked ~ .toggle .bottom_line{
		left: 2px;
		top: 14px;
		width: 25px;
		transform: rotate(-45deg);
	}
	input:checked ~ .toggle .middle_line{
		opacity: 0;
		transform: translateX(20px);
	}
	input:checked ~ .slide{
		transform: translateX(0);
		box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);		
	}
	.logout_container{
		padding: 25rem 5rem;
	}
	.logout_btn{
		background-color: #c90000;
		color: #fff;
		border: none;
		border-radius: 5px;
		padding: 10px 20px 10px 20px;
		letter-spacing: 0.2rem;
		cursor: pointer;
		transition: 0.3s;
	}
	.logout_btn:hover{
		background-color: rgb(51, 51, 51, 1.0);
		color: rgb(255, 255, 255);
	}

	/*******************     Dashboard design     ******************/

	.main-container{
		margin-left: 20em;
  		margin-top: 5em;
		grid-area: main;
		overflow-y: auto;
		padding: 20px 20px;
		color: rgba(255, 255, 255, 0.95); 
	}
	.main-title{
		display: flex;
		/*justify-content: space-between;*/
	}
	.dashboard{
		color: black;
	}
	.texture{
		color: #fff;
		text-align: left;
	}
	.main-cards{
		display: grid;
		grid-template-columns: 1fr 1fr 1fr 1fr;
		gap: 20px;
		margin: 20px 0;
		margin-left: 30px;
	}
	.card{
		display: flex;
		flex-direction: column;
		justify-content: space-around;
		width: 15rem;
		padding: 10px;
		border-radius: 5px;
	}
	.card:first-child{
		background-color: #2962ff;
	}
	.card:nth-child(2){
		background-color: #2e7d32;
	}
	.card:nth-child(3){
		background-color: #ff6d00;
	}
	.card:nth-child(4){
		background-color: #d50000;
	}
	.card-inner{
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.card-inner > .material-icons-outlined{
		font-size: 40px;
	}


/*******************      table design      ***********************/
	}
	.container{
  		margin: 0;
  		margin-left: 18em;
  		padding: 0;
  		height: 100vh;
  		width: 10px;
  		display: flex;
  		align-items: center;
  		justify-content:center;	
	}
	/*.container h2{
		padding: 2rem 1rem;
		font-size: 2.5rem;
		text-align: center;
	}*/

	.tb_container{
		margin-left: 20em;
		margin-right: 18em;
		margin-top: 5em;
	}
	.tbl{
		width: 100%;
		border-collapse: collapse;
	}
	

	.tbl thead{
		background: #bd0404;
		color: #fff;
		
	}
	.tbl thead tr th{
		font-size: 0.9rem;
		padding: 0.8rem;
		/*letter-spacing: 0.2rem;*/
		vertical-align: top;
		border: 1px solid #aab7b8;
	}
	
	.tbl tbody tr td{
		padding: 10px 20px;
		font-size: 1rem;
		/*letter-spacing: 0.2rem;*/
		font-weight: normal;
		text-align: center;
		border: 1px solid #aab7b8;
	}
	.tbl tr:nth-child(even){
		background: #ffc4c4;
		
	}
	/*.tbl tr:hover td{
		background: #ff7a7a;
		transition: all 0.3s ease-in;
		
	}*/
	/*.tbl button{
		display: inline-block;
		border: none;
		margin: 0 auto;
		padding: 0.4rem;
		border-radius: 1px;
		outline: none;
		cursor: pointer;
	}*/

	.edititems{
		padding: 10px;
		background: #5e5b5b;
		color: #fff;
		border: none;
		border-radius: 3px;
		cursor: pointer;
		transition: 0.5s;
	}
	.edititems:hover{
		background-color: rgb(51, 51, 51, 1.0);
		color: rgb(255, 255, 255); 		
 		border: none;
	}


	.tbl {
		max-height: 600px;
		overflow-y: scroll;
		display: block;
	}

	/********************        add form design        ***********************/
	.devicead{
		margin: 0;
  		margin-left: 30em;
  		margin-top: 5em;
  		mart
  		padding: 0;
  		/*display: flex;*/
	}
	textarea {
  		width: 700px;
  		height: 300px;
  		resize: none;
	}
	
	/********************        view report        ***********************/
	.container_report{
  		margin: 0;
  		margin-left: 12em;
  		padding: 0;
  		/*height: 100vh;
  		width: 10px;
  		display: flex;
  		align-items: center;
  		justify-content:center;*/	
	}
	.container_report h2{
		padding: 2rem 1rem;
		font-size: 2.5rem;
		text-align: center;
	}
	.tb_report{
		margin-left: 18em;
		margin-right: 18em;
		margin-top: 5em;
	}

/*******************     two actcion buttons (view report, view useradmin and admin archived )      ***********************/
	.editfix{
		padding: 10px;
		background: #0952ed;
		margin-right: 9px;
		color: #fff;
		border: none;
		border-radius: 3px;
		cursor: pointer;
		transition: 0.5s;
	}
	.editdispose{
		padding: 10px;
		background: #b52b2b;
		margin-right: 9px;
		color: #fff;
		border: none;
		border-radius: 3px;
		cursor: pointer;
		transition: 0.5s;
	}
/*******************     buttons for export excel      ***********************/
	.export{
		margin-top: 10px;
		padding: 10px;
		background: #5e5b5b;
		color: #fff;
		border: none;
		text-decoration: none;
		border-radius: 3px;
		cursor: pointer;
		transition: 0.5s;
	}
	.export:hover{
		background-color: rgb(51, 51, 51, 1.0);
		color: rgb(255, 255, 255); 		
 		border: none;
	}
	.excels{
		text-decoration: none;
		color: #fff;
	}


</style>