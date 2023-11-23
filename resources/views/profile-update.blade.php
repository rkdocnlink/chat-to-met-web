@extends('layouts.front')
@section('content')

	<!-- Main Wrapper -->
	<div class="main-wrapper">
	
		<!-- content -->
		<div class="content main_content">
		<!-- sidebar group -->
			<div class="sidebar-group left-sidebar chat_sidebar">
				<!-- Chats sidebar -->
				<div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
					<div class="slimscroll">
					
						<!-- Left Chat Title -->
						<div class="left-chat-title d-flex justify-content-between align-items-center">
							<div class="chat-title">
								<h4>PROFILE</h4>
							</div>
							<div class="btn-section">
								<a href="{{route('logout')}}" class="btn logout-btn">Sign out</a>
							</div>
						</div>
						<!-- /Left Chat Title -->
						
						<div class="search_chat has-search">
							<span class="fas fa-search form-control-feedback"></span>
							<input class="form-control chat_input" id="search-contacts" type="text" placeholder="Search Contacts">
						</div>

						<!-- Settings Option For Mobile -->
						<div class="settings-option">
							<a href="#" class="user-list-item">Edit Settings</a>
						</div>
						<!-- Settings Option For Mobile -->

						<div class="profile-card">
							<div class="profile-cover text-center mb-3">
								<label class="profile-cover-avatar" for="avatar_upload">
									@if(isset(Auth::user()->profile_pic) && !empty(Auth::user()->profile_pic))
									<img class="avatar-img" src="{{URL::asset('uploads/user/profile_pic/')}}/{{Auth::user()->profile_pic}}" alt="Profile Image">
									@endif
									<input type="file" id="avatar_upload">
									<span class="avatar-edit">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 avatar-uploader-icon shadow-soft">
											<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
										</svg>
									</span>
								</label>
								<h5 class="mt-3 profile-name mb-1">@if(isset(Auth::user()->name)){{Auth::user()->name}}@endif</h5>
								<p class="profile-email mb-1"><a href="" class="__cf_email__" >@if(isset(Auth::user()->email)){{Auth::user()->email}}@endif</a></p>
								<h5 class="profile-country mb-0">USA</h5>
							</div>
							<div class="profile-info">
								<div class="text-center mb-4">
									<p class="info-title mb-0">Phone</p>
									<span class="info-text">@if(isset(Auth::user()->mobile)){{Auth::user()->mobile}}@endif</span>
								</div>
								<!-- <div class="text-center mb-4">
									<p class="info-title mb-0">Nick Name</p>
									<span class="info-text">Alberywo</span>
								</div> -->
								<!-- <div class="text-center mb-4">
									<p class="info-title mb-0">Email</p>
									<span class="info-text"><a href="https://dreamschat.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17767b7572656e607857707a767e7b3974787a">[email&#160;protected]</a></span>
								</div> -->
								<ul class="social-nav p-0 mb-0 text-center">
									<li>
										<a href="@if(isset(Auth::user()->facebook)){{Auth::user()->facebook}}@endif"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="@if(isset(Auth::user()->instagram)){{Auth::user()->instagram}}@endif"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="@if(isset(Auth::user()->linkedin)){{Auth::user()->linkedin}}@endif"><i class="fab fa-linkedin-in"></i></a>
									</li>
									<li>
										<a href="@if(isset(Auth::user()->twitter)){{Auth::user()->twitter}}@endif"><i class="fab fa-twitter"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="settings-card">
							<div class="settings-control">
								<ul>
									<li class="d-flex align-items-center">
										<div>
											<span>Desktop Notification</span>
										</div>
										<label class="switch ms-auto">
										<input type="checkbox" checked="">
										<span class="slider round"></span>
										</label>
									</li>
									<li class="d-flex align-items-center">
										<div>
											<span>Sound Notification</span>
										</div>
										<label class="switch ms-auto">
										<input type="checkbox">
										<span class="slider round"></span>
										</label>
									</li>
									<li class="d-flex align-items-center">
										<div>
											<span>Profile privacy</span>
										</div>
										<label class="switch ms-auto">
										<input type="checkbox">
										<span class="slider round"></span>
										</label>
									</li>
									<li class="d-flex align-items-center">
										<div>
											<span>Two-step security verification</span>
										</div>
										<label class="switch ms-auto">
										<input type="checkbox">
										<span class="slider round"></span>
										</label>
									</li>
								</ul>
							</div>
							<div class="settings-footer">
								<ul class="p-0 mb-0">
									<!-- <li>
										<a href="#"><i class="fas fa-chevron-right"></i>  Need Help? Let's chat</a>
									</li>
									<li>
										<a href="#"><i class="fas fa-chevron-right"></i>  English (united States)</a>
									</li> -->
								</ul>
								<div class="profile-update text-center py-4">
									<button type="button" class="btn btn-update mb-0">
									Update Profile
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- / Chats sidebar -->
				
			</div>
			<!-- /Sidebar group -->
			
			<!-- Right sidebar -->
			<div class="chat settings-main pt-2" id="middle">
				<div class="slimscroll">
						
					<div class="page-header d-flex align-items-center">
						<div class="me-3 d-md-block d-lg-none">
							<a class="text-muted px-0 left_side" href="#">
                            	<i class="fas fa-arrow-left"></i>
                        	</a>
						</div>
						<div>
							<h5>SETTINGS</h5>
							<p>Last Update your profile:@if(isset(Auth::user()->updated_at)){{date('m  D Y ',strtotime(Auth::user()->updated_at))}}@endif</p>
						</div>
					</div>
					
					<!-- Tabs Section -->
					<div class="settings-tab my-4">
						<nav>
							<div class="nav nav-tabs" id="nav-tab">
								<a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#general">General Settings</a>
								<a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#notifications" >Notification</a>
								<a class="nav-item nav-link" id="nav-profile-tab1" data-bs-toggle="tab" href="#history" >Device History</a>
								<a class="nav-item nav-link" id="nav-profile-tab2" data-bs-toggle="tab" href="#security" >Security</a>
							</div>
						</nav>
						<div class="tab-content settings-form">
						
							<!-- Tab Contents -->
							<div class="tab-pane fade show active" id="general">
								<div class="settings-header">
									<h5>Account Settings</h5>
									<p>Update your account details</p>
								</div>
								<div class="settings-control p-3">
								<form enctype="multipart/form-data" action="{{route('update-profile')}}" method="POST">
										
									<div class="form-col form-body">
											@csrf
											<div class="row">
												<div class="col-md-6 col-xl-4">
													<div class="form-group">
														<label>Full Name</label>
														<input class="form-control form-control-lg " value="{{Auth::user()->name}}" name="full_name" type="text">
													</div>
												</div>
												<!-- <div class="col-md-6 col-xl-4">
													<div class="form-group">
														<label>Last Name</label>
														<input class="form-control form-control-lg group_formcontrol" name="last-name" type="text">
													</div>
												</div> -->
												<div class="col-md-6 col-xl-4">
													<div class="form-group">
														<label>Mobile Number</label>
														<input class="form-control form-control-lg " value="{{Auth::user()->mobile}}" name="mobile_number" type="text">
													</div>
												</div>
												<div class="col-md-6 col-xl-4">
													<div class="form-group">
														<label>Email</label>
														<input disabled class="form-control form-control-lg " value="{{Auth::user()->email}}" name="email" type="text">
													</div>
												</div>
												<div class="col-md-6 col-xl-4">
													<div class="form-group">
														<label>User name</label>
														<input disabled class="form-control form-control-lg " value="{{Auth::user()->user_name}}" name="user_name" type="text">
													</div>
												</div>
												<div class="col-md-6 col-xl-4">
													<div class="form-group">
														<label>Choose profile picture</label>
														<div class="custom-input-file form-control form-control-lg ">
															<input name="profile_pic" type="file" class="">
															<span class="browse-btn">Browse File</span>
														</div>
													</div>
												</div>
												<div class="col-md-6 col-xl-4">
													<div class="form-group">
														<label>Location</label>
														<input class="form-control form-control-lg "  value="{{Auth::user()->location}}" name="location" type="text">
													</div>
												</div>
												<div class="col-md-12 col-xl-12">
													<div class="form-group">
														<label>Bio</label>
														<textarea class="form-control form-control-lg " name="bio">{{Auth::user()->bio}}</textarea>
													</div>
												</div>
											</div>
									</div>
									<hr>
									<div class="social-settings">
										<h4>Social Links</h4>
										<div class="form-col form-body">
												<div class="row">
													<div class="col-md-6 col-xl-4">
														<div class="form-group">
															<input class="form-control form-control-lg " name="facebook" type="text" placeholder="Facebook Link">
														</div>
													</div>
													<div class="col-md-6 col-xl-4">
														<div class="form-group">
															<input class="form-control form-control-lg " value="{{Auth::user()->twitter}}" name="twitter" type="text" placeholder="Twitter Link">
														</div>
													</div>
													<div class="col-md-6 col-xl-4">
														<div class="form-group">
															<input class="form-control form-control-lg " value="{{Auth::user()->instagram}}" name="instagram" type="text" placeholder="Instagram Link">
														</div>
													</div>
													<div class="col-md-6 col-xl-4">
														<div class="form-group">
															<input class="form-control form-control-lg " value="{{Auth::user()->linkedin}}" name="linkedin" type="text" placeholder="Linkedin Link">
														</div>
													</div>
													<div class="col-md-6 col-xl-4">
														<button type="submit" class="btn btn-update  mb-0">
														Update Details
														</button>
													</div>
													
												</div>
												<div class="form-row profile_form m-0 align-items-center">
													
												</div>
											
										</div>
									</div>
									</form>
								</div>
								<div class="settings-delete mt-4">
									<div class="row align-items-center justify-content-between">
										<div class="col-md-8">
											<h5>Delete your account</h5>
											<p>Please note, deleting your account is a permanent action and will no be recoverable once completed.</p>
										</div>
										<div class="col-md-4">
											<button type="button" class="btn btn-delete  mb-0" data-bs-toggle="modal" data-bs-target="#delete-account">
											Delete Account
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Tab Contents -->
							
							<!-- Tab Contents -->
							<div class="tab-pane fade " id="notifications">
								<div class="settings-header">
									<h5>Notifications</h5>
									<p>Update your account Notifications</p>
								</div>
								<div class="settings-control full-options">
									<ul>
										<li class="d-flex align-items-center">
											<label class="switch me-3">
											<input type="checkbox" checked="">
											<span class="slider round"></span>
											</label>
											<div>
												<span>Allow mobile notifications</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<label class="switch me-3">
											<input type="checkbox" checked="">
											<span class="slider round"></span>
											</label>
											<div>
												<span>Notifications from your friends</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<label class="switch me-3">
											<input type="checkbox">
											<span class="slider round"></span>
											</label>
											<div>
												<span>Send notifications by email</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<label class="switch me-3">
											<input type="checkbox" checked="">
											<span class="slider round"></span>
											</label>
											<div>
												<span>Allow connected contacts</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<label class="switch me-3">
											<input type="checkbox" checked="">
											<span class="slider round"></span>
											</label>
											<div>
												<span>Confirm message requests</span>
											</div>
										</li>
										<li class="d-flex align-items-center">
											<label class="switch me-3">
											<input type="checkbox">
											<span class="slider round"></span>
											</label>
											<div>
												<span>Profile privacy</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Tab Contents -->
							
							<!-- Tab Contents -->
							<div class="tab-pane fade" id="history">
								<div class="settings-header">
									<div class="row align-items-center">
										<div class="col-md-8">
											<h5>Device History</h5>
											<p>If you see a device here that you believe wasn’t you, please contact our account fraud department immediately.</p>
										</div>
										<div class="col-md-4 text-md-end">
											<button class="btn logout-btn">Log out all Devices</button>
										</div>
									</div>
								</div>
								<div class="logged-devices-settings">
									<div class="logged-device align-items-center d-flex">
										<div class="device-details">
											<h5>IPhone 11</h5>
											<p>Brownsville, VT · Jun 11 at 10:05am</p>
										</div>
										<div class="logged-btn ms-auto">
											<a href="{{route('logout')}}">Sign Out</a>
										</div>
									</div>
									<div class="logged-device align-items-center d-flex">
										<div class="device-details">
											<h5>IMac OSX · Safari 10.2</h5>
											<p>Brownsville, VT · Jun 11 at 10:05am</p>
										</div>
										<div class="logged-btn ms-auto">
											<a href="{{route('logout')}}">Sign Out</a>
										</div>
									</div>
									<div class="logged-device align-items-center d-flex">
										<div class="device-details">
											<h5>HP Laptop Win10</h5>
											<p>Brownsville, VT · Jun 11 at 10:05am</p>
										</div>
										<div class="logged-btn ms-auto">
											<a href="{{route('logout')}}">Sign Out</a>
										</div>
									</div>
									<div class="logged-device align-items-center d-flex">
										<div class="device-details">
											<h5>IMac OSX · Edge browser</h5>
											<p>Brownsville, VT · Jun 11 at 10:05am</p>
										</div>
										<div class="logged-btn ms-auto">
											<a href="{{route('logout')}}">Sign Out</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Tab Contents -->
							
							<!-- Tab Contents -->
							<div class="tab-pane fade" id="security">
								<div class="settings-header">
									<div class="row align-items-center">
										<div class="col-md-8">
											<h5>Change your password</h5>
											<p>We will email you a confirmation when changing your password, so please expect that email after submitting.</p>
										</div>
										<div class="col-md-4 text-md-end">
											<button class="btn logout-btn">Forgot password</button>
										</div>
									</div>
								</div>
								<div class="security-settings">
									<div class="password-updation">
										<div class="row">
											<div class="col-xl-4">
												<div class="form-col form-body">
													<form action="https://dreamschat.dreamstechnologies.com/template-html/template2/index.html">
														<div class="form-group">
															<label>Current password</label>
															<input class="form-control form-control-lg group_formcontrol" name="current-password" type="password">
														</div>
														<div class="form-group">
															<label>New password</label>
															<input class="form-control form-control-lg group_formcontrol" name="new-password" type="password">
														</div>
														<div class="form-group">
															<label>Confirm password</label>
															<input class="form-control form-control-lg group_formcontrol" name="confirm-password" type="password">
														</div>
														<div class="form-row profile_form m-0 align-items-center">
															<div class="me-4">
																<button type="button" class="btn btn-update  mb-0">
																Update Password
																</button>
															</div>
															<!-- Button -->
															<div class="cancel-btn">
																<a href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
															</div>
														</div>
													</form>
												</div>
											</div>
											<div class="col-xl-8">
												<div class="requirment-card">
													<h4>Password requirements</h4>
													<p class="py-3 mb-0">To create a new password, you have to meet all of the following requirements:</p>
													<div class="requirements-list">
														<p>Minimum 8 character</p>
														<p>At least one special character</p>
														<p>At least one number</p>
														<p>Can’t be the same as a previous password</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="authentication">
										<h4>Two Factor Authentication</h4>
										<div class="align-items-center">
											<label class="custom-radio me-2">Password <br> <span><a href="#"  data-bs-toggle="modal" data-bs-target="#password-authentication">edit</a></span>
											<input type="radio" name="radio">
											<span class="checkmark"></span>
											</label>
											<label class="custom-radio me-2">Sequrity Question <br> <span><a href="#"  data-bs-toggle="modal" data-bs-target="#question-authentication">edit</a></span>
											<input type="radio" name="radio">
											<span class="checkmark"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<!-- /Tab Contents -->
							
						</div>
					</div>
					<!-- /Tabs Section -->
					
				</div>
			</div>
			<!-- /Right sidebar -->
			
		</div>
		<!-- /Content -->
		
		<!-- Delete Account -->
		
		
	</div>
	<!-- /Main Wrapper -->
@endsection