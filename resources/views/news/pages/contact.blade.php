@extends('news.layout.single')

@section('content')
<section class="row">
	<article class="post column">
	<h1 class="post-title">Nhóm 10</h1>
	<p>Khuất Huy Kiên</p>
	<p>Nguyễn Thành Trung</p>
	<p>Nguyễn Hải Long</p>
	<p>Nguyễn Văn Trượng</p>
	<p>Đỗ Nguyên Phương</p>
	<!-- Map -->
	<div id="map" class="row flex-video widescreen"></div>
	<!-- End Map -->
</article>
</section>
@endsection
@section('js')
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
@endsection