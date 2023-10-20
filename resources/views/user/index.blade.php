@extends('user_kit/app')
@section('konten_u')
		<!-- Page Wrapper -->
			<div id="page-wrapper">
                @foreach ($data as $item)
				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">{{$item->judul}}</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				


				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-gem"></span></div>
							<h2> {{$item -> judul}}</h2>
							<p>Bienvenue, nous vous aimons tous</p>
						</div>
					</section>


				<!-- Wrapper -->
					<section id="wrapper">
						<!-- One -->
							<section id="one" class="wrapper spotlight style1">

								<div class="inner">

									<a href="#" class="image"><img src="{{asset('logo/'.$item->logo)}}" alt="{{$item->logo}}" sizes="100px" srcset="">
                                    </a>
									<div class="content">
										<h2 class="major">{{$item->judul}}</h2>
										<p>{{$item->paragraph}}</p>
										<a href="#" class="special">Learn more</a>
									</div>
								</div>
							</section>



						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">I T E M</h2>
									<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
									<!-- Di dalam tampilan blade Anda (tampilan_menu.blade.php) -->
									<form method="POST" action="{{ route('user.option') }}">
                                        @csrf
                                        <label for="kategori">Sélectionnez la catégorie :</label>
                                        <button type="submit" name="kategori" value="all" >All Items</button>

                                        @foreach ($ckategori as $kategori)
                                            <button type="submit" name="kategori" value="{{ $kategori }}">{{ $kategori }}</button>
                                        @endforeach
                                    </form>




                                    <section class="features">
                                        @foreach ($menu as $menu_u)
										<article >
                                            <h2 class="major">{{$menu_u->kategori}}</h2>
											<h3 class="major">{{$menu_u -> menu}}</h3>
                                            <img src="{{asset('gambar/'.$menu_u->gambar)}}" alt="{{$menu_u->gambar}}" width="200" srcset="">
											<p>{{$menu_u -> detail_menu}}</p>
                                            <h3>USD : {{$menu_u->harga}}</h3>

										</article>
                                        @endforeach

									</section>
                                    <div class="pagination button" style="font-size: 1em">
                                        {{$menu->appends(['kategori' => $selectedCategory])->links("pagination::bootstrap-4")}}
                                    </div>

								</div>
							</section>



					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Contactez-nous</h2>
							<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="icon solid fa-home">
									{{$item->alamat}}
								</li>
								<li class="icon solid fa-phone">{{$item->kontak}}</li>
								<li class="icon solid fa-envelope"><a href="#"></a></li>
								<li class="icon brands fa-youtube"><a href="#">{{$item->youtube}}</a></li>
								<li class="icon brands fa-facebook-f"><a href="#">{{$item->facebook}}</a></li>
								<li class="icon brands fa-instagram"><a href="#" >{{$item->instagram}}</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Made with &#128151; By   {{$item->judul}}</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>
            @endforeach

			<script>
				// Function to update the default value based on user's selection
				function updateDefaultValue(select) {
					// Get the selected option's value
					var selectedValue = select.value;

					// Update the value of the first option
					var defaultOption = select.querySelector('option[value="Option1"]');
					defaultOption.value = selectedValue;
				}
			</script>


@endsection
