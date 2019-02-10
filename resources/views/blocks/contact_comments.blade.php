@extends('layouts.base')

@section('title', 'Вопросы по кооперативу "Локомотив"')

@section('navigation')
    @parent
@endsection

@section('content')
<div class="box-in-1">			
				<h2>Вопросы и комментарии</h2>				
				<p>На этой странице Вы можете задать вопросы или написать предложения к работе садоводческого кооператива.</p>	
			 
	</div><br/>
	<div class="wrap_result"></div> 
<div id="comments"> 
  <h6 class="com">5 Комментариев</h6>     
   
		
 <ul id="commentRoot">
 
		<li id="li-comment59">
     <div id="comment59">
	  <div class="commentContent">
        <h6>Лена<span class="date">{{ $date }}</span> </h6>
        <div class="commentNumber">#</div>
		<div class="comment-body">
            Спасибо председателю за объявления
        </div>
		<a id="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment59&quot;, &quot;59&quot;, &quot;respond&quot;)"><span class="date">Ответить</span></a>
	</div>
      </div> 
  </li>

 	

	 <li id="li-comment60">
     <div id="comment60">
	  <div class="commentContent">
        <h6>Катерина<span class="date">{{ $date }}</span> </h6>
        <div class="commentNumber">#</div>
		<div class="comment-body">
            Добрый день. Когда будет следующее собрание в кооперативе?
        </div>
		<a id="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment60&quot;, &quot;60&quot;, &quot;respond&quot;)"><span class="date">Ответить</span></a>
	</div>
      </div> 
 
	  		<ul class="children">
	<li id="li-comment61">
     <div id="comment61">
	  <div class="commentContent">
        <h6>Председатель<span class="date">{{ $date }}</span> </h6>
        <div class="commentNumber">#</div>
		<div class="comment-body">
            Здравствуйте Катерина. Собрание будет в следующую субботу 9 февраля в 11 часов.
        </div>
		<a id="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment61&quot;, &quot;61&quot;, &quot;respond&quot;)"><span class="date">Ответить</span></a>
	</div>
      </div> 

	  		<ul class="children">
	<li id="li-comment99">
     <div id="comment99">
	  <div class="commentContent">
        <h6>Лариса Шакина<span class="date">{{ $date }}</span> </h6>
        <div class="commentNumber">#</div>
		<div class="comment-body">
           Председатель, подскажите, когда приедит казначей?
        </div>
		<a id="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment99&quot;, &quot;99&quot;, &quot;respond&quot;)"><span class="date">Ответить</span></a>
	</div>
      </div>
	 </li>
		</ul>
		 </li>
		</ul>
	 	 </li>
		  <li id="li-comment63">
     <div id="comment63">
	  <div class="commentContent">
        <h6>Ани<span class="date">30 : 01, 2019</span> </h6>
        <div class="commentNumber">#</div>
		<div class="comment-body">
            Председатель скажите, а вы можете сделать так, чтобы страница Устав была закрыта от посторонних?
        </div>
		<a id="comment-reply-link" href="#respond" onclick="return addComment.moveForm(&quot;comment63&quot;, &quot;63&quot;, &quot;respond&quot;)"><span class="date">Ответить</span></a>
	</div>
  </div> 
 	 </li>
	  </ul>
	    <div id="respond">      
	  <h4>Добавить комментарий<a rel="nofoliow" id="comment-reply" href="#respond" style="display:none;">X</a></h4>

			<form action="{{asset('/')}}/comments" method="post" id="commentform">
	           <h6>Ваше имя: <input id="name" type="text" name="name"></h6>
	           <div class="comment"><h6>Комментарий:
              <textarea id="comment" name="text" ></textarea></h6>

			   </div>
            	 <p class="form-submit">
				{{--<input type="hidden" name="_token" value="l4EESFRwSW4kimIzHHB50LXGch10GJHxxVQi55QI">--}}
				<input id="comment_post_ID" type="hidden" name="comment_post_ID" value="1" /> 
				<input id="comment_parent" type="hidden" name="comment_parent" value="0" />
				<input id="submit" type="submit" name="submit" value="Сохранить" />
		</p>
		</form>
      </div>	                                   
 </div>
<hr/>
@endsection