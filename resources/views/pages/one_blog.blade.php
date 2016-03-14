@extends('ilyaskali')

@section('page_title')
    Блог | IlyasKali | Студия Архитектуры и Дизайна | Алматы
@stop

@section('content')

<section class="container">
 			<div class="one_blog clearfix">
 				<!-- Begin left blog -->
 				<div class="left-blog">
	 				<div class="b-content">
		 				<h1>{{ $blog->title }}</h1>
		 				
		 				<div class="image">
		 					<img src="{{ $blog->preview }}" alt="{{ $blog->title }}">
		 				</div>
		 				
		 				<div class="short">
			 				<p>
			 					{{ $blog->description }}
			 				</p>
		 				</div>

		 				<div class="full_descr">

                            {!! $blog->body !!}

		 				</div>
	 				</div>
 				</div>
 				<!-- End left blog -->
 			<!-- 	<div class="right-block">
	 				<div class="b-content">
	 					<div class="one-block">
	 						<h3>Дизайн гостиной</h3>
	 						<img src="http://static.wixstatic.com/media/5cb84e_ef858683378a4eb1bd9e3d4367822fff.jpg_srb_p_70_68_75_22_0.50_1.20_0.00_jpg_srb" alt="img">
	 					</div>
	 				</div>
 				</div> -->
 			</div>
 		</section>

@stop