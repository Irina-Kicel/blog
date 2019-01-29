@extends('layouts.base')

@section('title', 'Объявления по кооперативу "Локомотив"')

@section('navigation')
    @include('blocks.navigation')
@endsection

@section('content')
<div id="on-top" onclick="to_top()">На верх</div>
 
	<div class="box-in">
						
				<h3>Объявления по электроэнергии</h3>
				
				<p>14 февраля 2019 года в 12 часов будет осуществляться пломбирование электросчетчиков работниками КРЭС.</p><br/>
			<p class="date">30 января 2019 года</p>
			<br/>
			<p>Председатель</p>
	</div>
	        <br />
			<hr />

@endsection

{{--
@section('content')
<div id="on-top" onclick="to_top()">На верх</div>
 
	<div class="box-in">
						
				<h3>Объявления по воде</h3>
				
				<p>Подача воды на участки кооператива планируется 15 апреля в 16 часов.  Всем проверить свои соединения на утечку воды. После подачи будет собрание по результатам пуска воды.</p><br/>
			<p class="date">30 января 2019 года</p>
			<br/>
			<p>Председатель</p>
	</div>
	        <br />
			<hr />

@endsection

@section('content')
<div id="on-top" onclick="to_top()">На верх</div>
 
	<div class="box-in">
						
				<h3>Объявления по взносам</h3>
				
				<p>25 мая состоится общее собрание по вопросу о размере членских взносов на текущий год.</p><br/>
			<p class="date">30 января 2019 года</p>
			<br/>
			<p>Председатель</p>
	</div>
	        <br />
			<hr />

@endsection--}}
