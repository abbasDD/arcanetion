{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Play</span>
                <span class="ion-ios-search pull-right"></span>
                <div class="search">
                    <form method="post">
                        <input type="search" placeholder="Search Here">
                    </form>
                </div>
            </div>

            {{-- Load sidebar from layout --}}
            @include('layout.sidebar')

            <div class="content">

                <div class="html search">
                    <div class="title bounceInDown animated">Search Result</div>
                    <p class="flipInX animated">Sorry,<br>no matches found for <b class="key"></b></p>
                </div>

                <div class="html play visible">
                    <div class="tabs-list clearfix">
                        <a href="#" class="tab active">Users</a>
                        <a href="#" class="tab">Messages</a>
                        <a href="#" class="tab">Groups</a>
                    </div>
                    <div class="active-users">
                        <div class="user clearfix rotateInDownLeft animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/99.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Connor Hartigan</p>
                                <p class="position">Web &amp; UI Designer</p>
                            </div>
                            <div class="idle pull-right"><span class="away"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownRight animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/89.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Jacob Lennon</p>
                                <p class="position">Front-End Developer</p>
                            </div>
                            <div class="idle pull-right"><span class="offline"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownLeft animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/men/79.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Didier Mailly</p>
                                <p class="position">Co-Founder</p>
                            </div>
                            <div class="idle pull-right"><span class="away"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownRight animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/women/69.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Miguel Cunha Ferreira</p>
                                <p class="position">Sales Manager</p>
                            </div>
                            <div class="idle pull-right"><span class="online"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownLeft animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/women/59.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Eric Yuriev</p>
                                <p class="position">App Developer</p>
                            </div>
                            <div class="idle pull-right"><span class="online"></span></div>
                        </div>
                        <div class="user clearfix rotateInDownRight animated">
                            <div class="photo pull-left">
                                <img src="https://randomuser.me/api/portraits/women/49.jpg">
                            </div>
                            <div class="desc pull-left">
                                <p class="name">Theodore Clark</p>
                                <p class="position">Project Manager</p>
                            </div>
                            <div class="idle pull-right"><span class="online"></span></div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Load Nav from layout --}}

            @include('layout.nav')

        </div>
    </div>
@endsection