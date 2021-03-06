@extends('layouts.default', ['title' => 'About'])
@section('content')
    <div class="container">
        <h2>What is {{ config('app.name') }}</h2>
        <p>Laracarte is a clone app of Laramap</p>
        <div class="alert alert-warning col-md-6" role="alert">
            A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <p>Feel free to help to improve the <a target="_blank" href="https://github.com/dioux/Laracarte-learning">source code</a>.</p>

		<hr>

		<h2>What is Laramap?</h2>
		<p>Laramap is the website by which Laracarte was inspired :).</p>
		<p>More info <a target="_blank" href="https://laramap.com/p/about">here</a>.</p>

		<hr>

		<h2>Which tools and services are used in Laracarte?</h2>
		<p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazon S3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Antony Martin's Geolocation Package</li>
			<li>Michel Fortin's Markdown Parser Package</li>
			<li>Heroku</li>
		</ul>
    </div>
    
@endsection