@extends('layouts.app')
@section('title','Garage')
@section('content')


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
                            <li class="account-nav__item account-nav__item--active"><a
                                    href="/garage">Garage</a></li>
                            <li class="account-nav__item"><a href="/account-profile">Edit Profile</a></li>
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
                            <h5>Garage</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body card-body--padding--2">
                            <div class="vehicles-list vehicles-list--layout--account">
                                <div class="vehicles-list__body">
                                    <div class="vehicles-list__item">
                                        <div class="vehicles-list__item-info">
                                            <div class="vehicles-list__item-name">2011 Ford Focus S</div>
                                            <div class="vehicles-list__item-details">Engine 2.0L 1742DA L4 FI
                                                Turbo</div>
                                            <div class="vehicles-list__item-links"><a href="#">Show Parts</a>
                                            </div>
                                        </div><button type="button" class="vehicles-list__item-remove"><svg width="16"
                                                height="16">
                                                <path
                                                    d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                            </svg></button>
                                    </div>
                                    <div class="vehicles-list__item">
                                        <div class="vehicles-list__item-info">
                                            <div class="vehicles-list__item-name">2019 Audi Q7 Premium</div>
                                            <div class="vehicles-list__item-details">Engine 3.0L 5626CC L6 QK
                                            </div>
                                            <div class="vehicles-list__item-links"><a href="#">Show Parts</a>
                                            </div>
                                        </div><button type="button" class="vehicles-list__item-remove"><svg width="16"
                                                height="16">
                                                <path
                                                    d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                            </svg></button>
                                    </div>
                                    <div class="vehicles-list__item">
                                        <div class="vehicles-list__item-info">
                                            <div class="vehicles-list__item-name">2015 Kia Rio LX</div>
                                            <div class="vehicles-list__item-details">Engine 1.6L 8306JK L5 RL
                                            </div>
                                            <div class="vehicles-list__item-links"><a href="#">Show Parts</a>
                                            </div>
                                        </div><button type="button" class="vehicles-list__item-remove"><svg width="16"
                                                height="16">
                                                <path
                                                    d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                            </svg></button>
                                    </div>
                                    <div class="vehicles-list__item">
                                        <div class="vehicles-list__item-info">
                                            <div class="vehicles-list__item-name">2008 BMW M5</div>
                                            <div class="vehicles-list__item-details">Engine 5.0L 8351XZ V10 DB
                                            </div>
                                            <div class="vehicles-list__item-links"><a href="#">Show Parts</a>
                                            </div>
                                        </div><button type="button" class="vehicles-list__item-remove"><svg width="16"
                                                height="16">
                                                <path
                                                    d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-header">
                            <h5>Add A Vehicle</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body card-body--padding--2">
                            <div class="vehicle-form vehicle-form--layout--account">
                                <div class="vehicle-form__item vehicle-form__item--select"><select
                                        class="form-control form-control-select2" aria-label="Year">
                                        <option value="none">Select Year</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                    </select></div>
                                <div class="vehicle-form__item vehicle-form__item--select"><select
                                        class="form-control form-control-select2" aria-label="Brand"
                                        disabled="disabled">
                                        <option value="none">Select Brand</option>
                                        <option>Audi</option>
                                        <option>BMW</option>
                                        <option>Ferrari</option>
                                        <option>Ford</option>
                                        <option>KIA</option>
                                        <option>Nissan</option>
                                        <option>Tesla</option>
                                        <option>Toyota</option>
                                    </select></div>
                                <div class="vehicle-form__item vehicle-form__item--select"><select
                                        class="form-control form-control-select2" aria-label="Model"
                                        disabled="disabled">
                                        <option value="none">Select Model</option>
                                        <option>Explorer</option>
                                        <option>Focus S</option>
                                        <option>Fusion SE</option>
                                        <option>Mustang</option>
                                    </select></div>
                                <div class="vehicle-form__item vehicle-form__item--select"><select
                                        class="form-control form-control-select2" aria-label="Engine"
                                        disabled="disabled">
                                        <option value="none">Select Engine</option>
                                        <option>Gas 1.6L 125 hp AT/L4</option>
                                        <option>Diesel 2.5L 200 hp AT/L5</option>
                                        <option>Diesel 3.0L 250 hp MT/L5</option>
                                    </select></div>
                                <div class="vehicle-form__divider">Or</div>
                                <div class="vehicle-form__item"><input type="text" class="form-control"
                                        placeholder="Enter VIN number" aria-label="VIN number"></div>
                            </div>
                            <div class="mt-4 pt-3"><a href="#" class="btn btn-sm btn-primary">Add A Vehicle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
    @stop
