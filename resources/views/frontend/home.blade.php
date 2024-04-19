@extends('layouts.app')

@section('content')

<!-- WRAPPER ALL -->
<div class="iknow_tm_all_wrap" data-magic-cursor="show"> <!-- If you want disable magic cursor change value to "hide" -->

	<!-- MODALBOX -->
	<div class="iknow_tm_modalbox">
		<div class="box_inner">
			<div class="close">
				<a href="#"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/cancel.svg" alt="" /></a>
			</div>
			<div class="description_wrap"></div>
		</div>
	</div>
	<!-- /MODALBOX -->

	<!-- TOPBAR -->
	<div class="iknow_tm_topbar" data-position="absolute">
		<div class="container">
			<div class="topbar_inner">
				<div class="logo">
					<a href="{{ route('Home') }}"><img src="{{ asset('uploads/images') }}/{{ $sitesettings->logo }}" alt="" /></a>
				</div>
				<div class="right">
					<div class="social">
						<ul>
							<li><a href="{{ $sitesettings->facebook_url }}"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/facebook.svg" alt="" /></a></li>
							<li><a href="{{ $sitesettings->twitter_url }}"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/twitter.svg" alt="" /></a></li>
							<li><a href="{{ $sitesettings->youtube_url }}"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/youtube.svg" alt="" /></a></li>
							<li><a href="{{ $sitesettings->instagram_url }}"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/instagram.svg" alt="" /></a></li>
						</ul>
					</div>
					<div class="iknow_tm_button">
						<a href="{{ asset('uploads/pdf/cv.pdf') }}" download>Download CV</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /TOPBAR -->

	<!-- HERO -->
	<div class="iknow_tm_hero">
		<div class="background_shape"></div>
		<div class="hero_content">
			<div class="container">
				<div class="content_inner">
					<div class="main_info">
						<div class="left">
							<span class="subtitle">I'm</span>
							<h3 class="name">{{ $mydetails->name }}</h3>
							<p class="text">{{ $mydetails->current_jobtitle }}</p>
							<div class="iknow_tm_video">
								<div class="video_inner">
									<div class="circle"></div>
									<h3 class="play">Play Video</h3>
									<a class="iknow_tm_full_link popup-youtube" href="{{ $mydetails->intro_video }}"></a>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="image">
								<img src="{{ asset('uploads/images') }}/{{ $mydetails->profile_picture }}" alt="" />
								<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $mydetails->profile_picture }}"></div>
							</div>
						</div>
					</div>
					<div class="main_menu">
						<ul>
							<li>
								<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/archive.svg" alt="" />
								<span>About Me</span>
								<a class="iknow_tm_full_link" href="#about"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/contacs.svg" alt="" />
								<span>Resume</span>
								<a class="iknow_tm_full_link" href="#resume"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/briefcase.svg" alt="" />
								<span>Portfolio</span>
								<a class="iknow_tm_full_link" href="#portfolio"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/gear.svg" alt="" />
								<span>Service</span>
								<a class="iknow_tm_full_link" href="#service"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/message.svg" alt="" />
								<span>Testimonial</span>
								<a class="iknow_tm_full_link" href="#testimonials"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/writing.svg" alt="" />
								<span>Blog</span>
								<a class="iknow_tm_full_link" href="#news"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/letter.svg" alt="" />
								<span>Contact</span>
								<a class="iknow_tm_full_link" href="#contact"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Hero Shapes -->
		<div class="simple_shapes">
			<span class="one anim_scale"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/9.svg" alt="" /></span>
			<span class="two anim_moveLeft"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/dot.svg" alt="" /></span>
			<span class="three anim_moveTop"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/dot-2.svg" alt="" /></span>
			<span class="four anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/1.svg" alt="" /></span>
			<span class="five anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/8.svg" alt="" /></span>
			<span class="six anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/3.svg" alt="" /></span>
			<span class="seven anim_right"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/4.svg" alt="" /></span>
			<span class="eight anim_scale"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/9.svg" alt="" /></span>
			<span class="nine anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/3.svg" alt="" /></span>
			<span class="ten anim_moveLeft"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/4.svg" alt="" /></span>
			<span class="eleven anim_scale"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/9.svg" alt="" /></span>
			<span class="twelve anim_extra"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/2.svg" alt="" /></span>
			<span class="thirteen anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/5.svg" alt="" /></span>
			<span class="fourteen anim_scale"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/9.svg" alt="" /></span>
			<span class="fifteen anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/3.svg" alt="" /></span>
			<span class="sixteen anim_scale"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/9.svg" alt="" /></span>
			<span class="seventeen anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/5.svg" alt="" /></span>
			<span class="eighteen anim_scale"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/9.svg" alt="" /></span>
			<span class="nineteen anim_scale"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/9.svg" alt="" /></span>
			<span class="twenty anim_circle"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/shapes/1.svg" alt="" /></span>
		</div>
		<!-- /Hero Shapes -->

	</div>
	<!-- /HERO -->

	<!-- MAINPART -->
	<div class="container">
		<div class="iknow_tm_mainpart">

			<!-- ABOUT -->
			<div id="about" class="iknow_tm_main_section">
				<div class="iknow_tm_about">
					<div class="left">
						<div class="left_inner">
							<div class="image">
								<img src="{{ asset('uploads/images') }}/{{ $mydetails->profile_picture }}" alt="" />
								<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $mydetails->profile_picture }}"></div>
							</div>
							<div class="details">
								<ul>
									<li>
										<h3>Name</h3>
										<span>{{ $mydetails->name }}</span>
									</li>
									<li>
										<h3>Birthday</h3>
										<span>{{ $mydetails->birth_date }}</span>
									</li>
									<li>
										<h3>Mail</h3>
										<span>{{ $mydetails->email }}</span>
									</li>
									<li>
										<h3>Phone</h3>
										<span>{{ $mydetails->phone }}</span>
									</li>
									<li>
										<h3>Address</h3>
										<span>{{ $mydetails->address }}</span>
									</li>
									<li>
										<h3>Nationality</h3>
										<span>{{ $mydetails->nationality }}</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="right">
						<div class="iknow_tm_main_title">
							<span>About Me</span>
							<h3>{{ $sitesettings->about_title }}</h3>
						</div>
						<div class="bigger_text">
							<p>{{ $sitesettings->about_subtitle }}</p>
						</div>
						<div class="text">
							<p>{{ $mydetails->big_desp }}</p>
						</div>
						<div class="iknow_tm_button">
							<a href="{{ asset('uploads/pdf/cv.pdf') }}" download>Download CV</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /ABOUT -->

			<!-- RESUME -->
			<div id="resume" class="iknow_tm_main_section">
				<div class="iknow_tm_resume">
					<div class="iknow_tm_main_title">
						<span>Resume</span>
						<h3>{{ $sitesettings->resume_title }}</h3>
					</div>
					<div class="resume_inner">
						<div class="left">
							<div class="info_list">
								<div class="iknow_tm_resume_title">
									<h3>Education</h3>
									<span class="shape"></span>
								</div>
								<ul>

                                    @foreach($educations as $education)
                                    <li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>{{ $education->course_outline }}</h3>
													<span>{{ $education->university_name }}</span>
												</div>
												<div class="year">
													<span>{{ $education->time_period }}</span>
												</div>
											</div>
											<div class="text">
											<p>{{ $education->course_desp }}</p>

                                            </div>
										</div>
									</li>
                                    @endforeach


								</ul>
							</div>
							<div class="info_list">
								<div class="iknow_tm_resume_title">
									<h3>Experience</h3>
									<span class="shape"></span>
								</div>
								<ul>
								@foreach ($experiences as $experience)
                                <li>
                                    <div class="list_inner">
                                        <div class="short">
                                            <div class="job">
                                                <h3>{{ $experience->job_role }}</h3>
                                                <span>{{ $experience->job_place }}</span>
                                            </div>
                                            <div class="year">
                                                <span>{{ $experience->time_period }}</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                       <p>{{ $experience->exp_desp }}</p>
                                        </div>
                                    </div>
                                </li>

                                @endforeach

								</ul>
							</div>
						</div>
						<div class="right">
							<div class="skills_list">
								<div class="iknow_tm_resume_title">
									<h3>Personal Skills</h3>
									<span class="shape"></span>
								</div>
								<div class="personal">
									<div class="dodo_progress">

                                         @foreach($personalskills as $personalskill)
                                         <div class="progress_inner" data-value="{{ $personalskill->per_skill_percentage }}">
											<span><span class="label">{{ $personalskill->per_skill_name }}</span><span class="number">{{ $personalskill->per_skill_percentage }}%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
                                         @endforeach

									</div>
								</div>
							</div>
							<div class="skills_list">
								<div class="iknow_tm_resume_title">
									<h3>Software Skills</h3>
									<span class="shape"></span>
								</div>
								<div class="software">
									<div class="circular_progress_bar">
										<ul>
                                            @foreach($softwareskills as $softwareskill)
                                            <li>
												<div class="list_inner">
													<div class="myCircle" data-value="{{ $softwareskill->soft_skill_percentage }}"></div>
													<div class="title"><h3>{{ $softwareskill->soft_skill_name }}</h3></div>
												</div>
											</li>
                                            @endforeach


										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /RESUME -->

			<!-- PORTFOLIO -->
			<div id="portfolio" class="iknow_tm_main_section">
				<div class="iknow_tm_portfolio">
					<div class="iknow_tm_main_title">
						<span>Portfolio</span>
						<h3>{{ $sitesettings->portfolio_title }}</h3>
					</div>
					<div class="portfolio_filter">
						<ul>
							<li><a href="#" class="current" data-filter="*">All</a></li>
							<li><a href="#" data-filter=".vimeo">Vimeo</a></li>
							<li><a href="#" data-filter=".youtube">Youtube</a></li>
							<li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
							<li><a href="#" data-filter=".detail">Detail</a></li>
						</ul>
					</div>
					<div class="portfolio_list">
						<ul class="gallery_zoom">
                            @foreach(App\Models\Portfolio::where('online_platform','vimeo')->get() as $portfolio)
                            <li class="vimeo">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('uploads/images') }}/{{ $portfolio->portfolio_img }}" alt="" />
										<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $portfolio->portfolio_img }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/vimeo.svg" alt="" />
									<div class="details">
										<span>Vimeo</span>
										<h3>{{ $portfolio->title }}</h3>
									</div>
									<a class="iknow_tm_full_link popup-vimeo" href="{{ $portfolio->online_url }}"></a>
								</div>
							</li>
                            @endforeach
                            @foreach(App\Models\Portfolio::where('online_platform','youtube')->get() as $portfolio)
							<li class="youtube">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('uploads/images') }}/{{ $portfolio->portfolio_img }}" alt="" />
										<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $portfolio->portfolio_img }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/youtube-2.svg" alt="" />
									<div class="details">
										<span>Youtube</span>
										<h3>{{ $portfolio->title }}</h3>
									</div>
									<a class="iknow_tm_full_link popup-youtube" href="{{ $portfolio->online_url }}"></a>
								</div>
							</li>
                            @endforeach
                            @foreach(App\Models\Portfolio::where('online_platform','soundcloud')->get() as $portfolio)
							<li class="soundcloud">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('uploads/images') }}/{{ $portfolio->portfolio_img }}" alt="" />
										<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $portfolio->portfolio_img }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/soundcloud.svg" alt="" />
									<div class="details">
										<span>Soundcloud</span>
										<h3>{{ $portfolio->title }}</h3>
									</div>
									<a class="iknow_tm_full_link soundcloude_link mfp-iframe audio" href="{{ $portfolio->online_url }}"></a>
								</div>
							</li>
                            @endforeach

                            <!- portfolio detail start--->
							<li class="detail">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img1 }}" alt="" />
										<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img1 }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('frontend_assets') }}/img/svg/text.svg" alt="" />
									<div class="details">
										<span>Detail</span>
										<h3>{{ $portfoliodetails->title }}</h3>
									</div>
									<a class="iknow_tm_full_link portfolio_popup" href="#"></a>

									<div class="hidden_content">
										<div class="popup_details">
											<div class="main_details">
												<div class="textbox">
                                                    {{ $portfoliodetails->desp }}
                                                </div>
												<div class="detailbox">
													<ul>
														<li>
															<span class="first">Client</span>
															<span>{{ $portfoliodetails->client_name }}</span>
														</li>
														<li>
															<span class="first">Category</span>
															<span><a href="#">Detail</a></span>
														</li>
														<li>
															<span class="first">Date</span>
															<span>{{ $portfoliodetails->date }}</span>
														</li>
														<li>
															<span class="first">Share</span>
															<ul class="share">
																<li><a href="#"><img class="svg" src="{{ asset('frontent_assets') }}/img/svg/social/facebook.svg" alt="" /></a></li>
																<li><a href="#"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/twitter.svg" alt="" /></a></li>
																<li><a href="#"><img class="svg" src="{{ asset('frontend_assets') }}img/svg/social/instagram.svg" alt="" /></a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
											<div class="additional_images">
												<ul>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="i{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img2 }}" alt="" />
																<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img2 }}"></div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img3 }}" alt="" />
																<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img3 }}"></div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img4 }}" alt="" />
																<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $portfoliodetails->detail_img4 }}"></div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
                            <!--portfolio detail end---->

						</ul>
					</div>
				</div>
			</div>
			<!-- /PORTFOLIO -->

			<!-- SERVICES -->
			<div id="service" class="iknow_tm_main_section">
				<div class="iknow_tm_services">
					<div class="iknow_tm_main_title">
						<span>Service</span>
						<h3>{{ $sitesettings->service_title }}</h3>
					</div>
					<div class="service_list">
						<ul>
                            @foreach($services as $service)
                            <li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="{{ asset('uploads/images') }}/{{ $service->service_icon }}" alt="" /></span>
									<h3 class="title">{{ $service->service_title }}</h3>
									<p class="text">{{ $service->service_subtitle }}</p>
									<a class="iknow_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="{{ asset('uploads/images') }}/{{ $service->service_img }}" alt="" />
												<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $service->service_img }}"></div>
											</div>
											<div class="description">
											<p>{{ $service->service_desp }}</p>

                                            </div>
										</div>
									</div>
								</div>
							</li>
                            @endforeach


						</ul>
					</div>
				</div>
			</div>
			<!-- /SERVICES -->

			<!-- TESTIMONIALS -->
			<div id="testimonials" class="iknow_tm_main_section">
				<div class="iknow_tm_testimonials">
					<div class="iknow_tm_main_title">
						<span>Testimonials</span>
						<h3>{{ $sitesettings->testimonial_title }}</h3>
					</div>
					<div class="testimonials_list owl-carousel owl-theme">
				@foreach ($testimonials as $testimonial)
                <div class="list_inner">
                    <div class="in">
                        <div class="text">
                       <p>{{ $testimonial->customer_message }}</p>
                        </div>
                        <div class="details">
                            <div class="left">
                                <div class="avatar">
                                    <div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $testimonial->customer_img }}"></div>
                                </div>
                                <div class="info">
                                    <h3>{{ $testimonial->customer_name }}</h3>
                                    <span>{{ $testimonial->customer_profession }}</span>
                                </div>
                            </div>
                            <div class="right">
                                <img class="svg" src="{{ asset('frontend_assets') }}/img/svg/left-quote.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


					</div>
				</div>
			</div>
			<!-- /TESTIMONIALS -->

			<!-- NEWS -->
			<div id="news" class="iknow_tm_main_section">
				<div class="iknow_tm_news">
					<div class="iknow_tm_main_title">
						<span>Blog</span>
						<h3>{{ $sitesettings->blog_title }}</h3>
					</div>
					<div class="news_list">
						<ul>
                            @foreach ($blogs as $blog)


							<li>
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('uploads/images') }}/{{ $blog->blog_img }}" alt="" />
										<div class="main" data-img-url="{{ asset('uploads/images') }}/{{ $blog->blog_img }}"></div>
										<a class="iknow_tm_full_link" href="#"></a>
									</div>
									<div class="details">
										<span class="category"><a href="#">{{ $blog->blog_category_name }}</a></span>
										<h3 class="title"><a href="#">{{ $blog->blog_title }}</a></h3>
									</div>

									<div class="hidden_content">
										<div class="news_informations">
											<div class="text">
										   {{ $blog->blog_desp }}
                                            </div>
										</div>
									</div>

								</div>
							</li>
                            @endforeach

						</ul>
					</div>
				</div>
			</div>
			<!-- /NEWS -->

			<!-- CONTACT -->
			<div id="contact" class="iknow_tm_main_section">
				<div class="iknow_tm_contact">
					<div class="iknow_tm_main_title">
						<span>Contact Me</span>
						<h3>{{ $sitesettings->contact_title }}</h3>
					</div>
					<div class="wrapper">
						<div class="left">
							<ul>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="{{ asset('frontend_assets/') }}/img/svg/smartphone.svg" alt="" /></span>
										<div class="short">
											<h3>Call Me</h3>
											<span>{{ $mydetails->phone }}</span>
										</div>
									</div>
								</li>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="{{ asset('frontend_assets/') }}/img/svg/letter.svg" alt="" /></span>
										<div class="short">
											<h3>Email Us</h3>
											<span><a href="#">{{ $mydetails->email }}</a></span>
										</div>
									</div>
								</li>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="{{ asset('frontend_assets/') }}/img/svg/placeholder.svg" alt="" /></span>
										<div class="short">
											<h3>Address</h3>
											<span>{{ $mydetails->address }}</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="right">
							<div class="fields">
								<form action="{{ route('message') }}" method="post">
									@csrf
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
									<div class="empty_notice"><span>Please Fill Required Fields</span></div>
									<div class="input_list">
										<ul>
											<li><input name="name" id="name" type="text" placeholder="Your Name" /></li>
											<li><input name="email" id="email" type="text" placeholder="Your Email" /></li>
											<li><input name="phone" id="phone" type="number" placeholder="Your Phone" /></li>
											<li><input name="subject" id="subject" type="text" placeholder="Subject" /></li>
										</ul>
									</div>
									<div class="message_area">
										<textarea id="message" name="message" placeholder="Your message here"></textarea>
									</div>
									<div class="iknow_tm_button">
										<button id="send_message" type="submit">Submit Now</button>
									</div>

									<!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /CONTACT -->

		</div>
	</div>
	<!-- /MAINPART -->

	<!-- COPYRIGHT -->
	<div class="iknow_tm_copyright hidden">
		<div class="container">
			<div class="inner">
				<div class="left">
					<p>Designed with love &copy; <a href="https://themeforest.net/user/marketify" target="_blank">Marketify</a></p>
				</div>
				<div class="right">
					<ul>
						<li><a href="#">Terms &amp; Condition</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /COPYRIGHT -->

	<!-- MAGIC CURSOR -->
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>
	<!-- /MAGIC CURSOR -->

</div>
<!-- / WRAPPER ALL -->
@endsection
