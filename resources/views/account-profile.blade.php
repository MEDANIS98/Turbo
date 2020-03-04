@extends('layouts.app')
@section('title','Profile')
@section('content')

<!-- site__body -->
<div class="site__body">
	<div class="block-space block-space--layout--after-header"></div>
	<div class="block">
		<div class="container container--max--xl">
			<div class="row">
				<div class="col-12 col-lg-3 d-flex">
					<div class="account-nav flex-grow-1">
						<h4 class="account-nav__title">Navigation</h4>
						<ul class="account-nav__list">
							<li class="account-nav__item"><a href="/dashboard">Dashboard</a></li>
							<li class="account-nav__item"><a href="/garage">Garage</a></li>
							<li class="account-nav__item account-nav__item--active"><a href="/account-profile">Edit
									Profile</a></li>
							<li class="account-nav__item"><a href="/account-orders">Order History</a></li>
							<li class="account-nav__item"><a href="/account-addresses">Addresses</a></li>
							<li class="account-nav__item"><a href="/account-password">Password</a></li>
							<li class="account-nav__divider" role="presentation"></li>
							<li class="account-nav__item"><a href="/login">Logout</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-9 mt-4 mt-lg-0">
					<div class="card">
						<div class="card-header">
							<h5>Edit Profile</h5>
						</div>
						<div class="card-divider"></div>
						<div class="card-body card-body--padding--2">
							<div class="row no-gutters">
								<div class="col-12 col-lg-7 col-xl-6">
									<div class="form-group"><label for="profile-first-name">First Name</label> <input type="text"
											class="form-control" id="profile-first-name" placeholder="First Name"></div>
									<div class="form-group"><label for="profile-last-name">Last Name</label> <input type="text"
											class="form-control" id="profile-last-name" placeholder="Last Name"></div>
									<div class="form-group"><label for="profile-email">Email Address</label> <input type="email"
											class="form-control" id="profile-email" placeholder="Email Address"></div>
									<div class="form-group"><label for="profile-phone">Phone Number</label> <input type="text"
											class="form-control" id="profile-phone" placeholder="Phone Number"></div>
									<div class="form-group mb-0"><button class="btn btn-primary mt-3">Save</button></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="block-space block-space--layout--before-footer"></div>
	@stop
