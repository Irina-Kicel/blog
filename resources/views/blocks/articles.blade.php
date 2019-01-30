@extends('layouts.base')

@section('title', 'Объявления по кооперативу "Локомотив"')

@section('navigation')
    @parent
@endsection

@section('content')
    <div id="on-top" onclick="to_top()">На верх</div>
 
	<div class="box-in">
						
				<h3><a href="/articles/cat/electric">Объявления по электроэнергии</a></h3>
				<p><img src="{{ asset('/')}}/images/articles/1.png"/></p>
				<p>Объявления по электроенергии 2019 года. </p>
			
			 <p><a href="/articles/cat/electric">Читать далее</a></p>
	</div>
	<div class="box-in">
						
				<h3><a href="/articles/cat/water">Объявления по воде</a></h3>
				<p><img src="{{ asset('/')}}/images/articles/2.png"/></p>
				<p>Объявления по воде 2019 года. </p>
			
			 <p><a href="/articles/cat/water">Читать далее</a></p>
	</div>
	<div class="box-in">
						
				<h3><a href="/articles/cat/due">Объявления по членским взносам</a></h3>
				<p><img src="{{ asset('/')}}/images/articles/3.png"/></p>
				<p>Объявление по членским взносам 2019 года. </p>
			
			 <p><a href="/articles/cat/due">Читать далее</a></p>
	</div>
	        <br />
			<hr />

@endsection

