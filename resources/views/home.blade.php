<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Hiyou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="themesdesign" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}" id="tabIcon">

    <!-- glightbox css -->
    <link rel="stylesheet" href="{{url('assets/libs/glightbox/css/glightbox.min.css')}}">

    <!-- One of the following themes -->
    <link rel="stylesheet" href="{{url('assets/libs/%40simonwep/pickr/themes/nano.min.css')}}" /> <!-- 'classic' theme -->

    <!-- swiper css -->
    <link rel="stylesheet" href="{{url('assets/libs/swiper/swiper-bundle.min.css')}}">

    <!-- Bootstrap Css -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        .users{
            list-style: none;
        }
        .users li{
            cursor: pointer;
            padding: 10px;
            margin: 0;
            border-radius: 5px;
            color: #6153CC;
            border-bottom:1px solid  rgb(231, 231, 231);
            align-items: center;
            gap: 5px;
        }
        .users p{
            margin: 0;
        }
        .users i{
            font-size:20px; 
        }
        #username{
            width: 100%;
            padding: 10px;
            margin: 2px 0;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            transition: 0.3s
        }
        #username:hover{
            background-color: rgb(231, 231, 231);
        }
        #username #pic{
            border-radius:100%; 
            width: 50px;
            height: 50px;
            font-size: 30px;
            text-align: center;
            background-color: rgb(223, 222, 222);
            color: white;
        }
        #username p{
            width: 80%;
            margin: 0;            
        }
        #more{
            font-size: 20px;
        }
        .selected {
            background-color:  rgb(231, 231, 231);
        }

           

        




    </style>

</head>

<body>

<div class="layout-wrapper d-lg-flex" >

    <!-- Start left sidebar-menu -->
    <div class="side-menu flex-lg-column">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="" class="logo logo-dark">
                <span class="logo-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655zM7 12h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0z" />
                    </svg>
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path
                            d="M7.291 20.824L2 22l1.176-5.291A9.956 9.956 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.956 9.956 0 0 1-4.709-1.176zm.29-2.113l.653.35A7.955 7.955 0 0 0 12 20a8 8 0 1 0-8-8c0 1.334.325 2.618.94 3.766l.349.653-.655 2.947 2.947-.655zM7 12h2a3 3 0 0 0 6 0h2a5 5 0 0 1-10 0z" />
                    </svg>
                </span>
            </a>
        </div>
        <!-- end navbar-brand-box -->

        <!-- Start side-menu nav -->
        <div class="flex-lg-column my-0 sidemenu-navigation">
            <ul class="nav nav-pills side-menu-nav" role="tablist">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" id="pills-user-tab" data-bs-toggle="pill" href="#pills-user" role="tab">
                        <i class="ri-user-3-line"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" href="#pills-chat" role="tab">
                        <i class="ri-discuss-line"></i>
                        <span class="badge bg-danger fs-11 rounded-pill sidenav-item-badge">0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-bookmark-tab" data-bs-toggle="pill" href="#pills-bookmark" role="tab">
                        <i class="ri-bookmark-3-line"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="#pills-setting" role="tab">
                        <i class="ri-settings-4-line"></i>
                    </a>
                </li>
                <li class="nav-item mt-lg-auto">
                    <a class="nav-link light-dark-mode" href="#">
                        <i class="ri-moon-line"></i>
                    </a>
                </li>
                <li class="nav-item dropdown profile-user-dropdown">
                    <a class="nav-link dropdown-toggle bg-light" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{url('assets/images/users/profile_image.jpg')}}" alt="" class="profile-user rounded-circle">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-user-tab"
                            data-bs-toggle="pill" href="#pills-user" role="tab">Profile <i
                                class="bx bx-user-circle text-muted ms-1"></i></a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" id="pills-setting-tab"
                            data-bs-toggle="pill" href="#pills-setting" role="tab">Setting <i
                                class="bx bx-cog text-muted ms-1"></i></a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="auth-changepassword.html">Change Password <i
                                class="bx bx-lock-open text-muted ms-1"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('logout_page')}}">
                            Log out <i class="bx bx-log-out-circle text-muted ms-1"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end side-menu nav -->
    </div>
    <!-- end left sidebar-menu -->

    <!-- start chat-leftsidebar -->
    <div class="chat-leftsidebar">

        <div class="tab-content">
            <!-- Start Profile tab-pane -->
            <div class="tab-pane" id="pills-user" role="tabpanel" aria-labelledby="pills-user-tab">
                <!-- Start profile content -->
                <div>
                    <div class="user-profile-img">
                        <img src="{{url('assets/images/cover_image.jpg')}}" class="profile-img" style="height: 160px;" alt="">
                        <div class="overlay-content">
                            <div>
                                <div class="user-chat-nav p-2 ps-3">

                                    <div class="d-flex w-100 align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="text-white mb-0">My Profile</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <button class="btn nav-btn text-white dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class='bx bx-dots-vertical-rounded'></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">Info <i class="bx bx-info-circle ms-2 text-muted"></i></a>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">Setting <i class="bx bx-cog text-muted ms-2"></i></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">Help <i class="bx bx-help-circle ms-2 text-muted"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center border-bottom border-bottom-dashed pt-2 pb-4 mt-n5 position-relative">
                        <div class="mb-lg-3 mb-2">
                            <img src="{{url('assets/images/users/profile_image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail" alt="">
                        </div>

                        <h5 class="fs-17 mb-1 text-truncate">{{$username}}</h5>
                    </div>
                    <!-- End profile user -->

                    <!-- Start user-profile-desc -->
                    <div class="p-4 profile-desc" data-simplebar>
                        <div class="border-bottom border-bottom-dashed mb-4 pb-2">
                            <div class="d-flex py-2 align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <i class="bx bx-user align-middle text-muted fs-19"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">{{$username}}</p>
                                </div>
                            </div>
                            <div class="d-flex py-2 align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <i class="ri-message-2-line align-middle text-muted fs-19"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="fw-medium mb-0">{{$email}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end user-profile-desc -->
                </div>
                <!-- End profile content -->
            </div>
            <!-- End Profile tab-pane -->

            <!-- Start chats tab-pane -->
            <div class="tab-pane show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
                <!-- Start chats content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-4">Messages <span class="text-primary fs-13" id="message_notification">(0)</span></h4>
                            </div>
                        </div>
                        <form>
                            <div class="input-group search-panel mb-3">
                                <input type="text" class="form-control bg-light border-0" id="searchChatUser" onkeyup="searchUser()"
                                    placeholder="Search here..." aria-label="Example text with button addon"
                                    aria-describedby="searchbtn-addon" autocomplete="off">
                                <button class="btn btn-light p-0" type="button" id="searchbtn-addon"><i
                                        class='bx bx-search align-middle'></i></button>
                            </div>
                        </form>
                    </div> <!-- .p-4 -->

                    <div class="chat-room-list" data-simplebar>
                        <div class="d-flex align-items-center px-4 mt-5 mb-2">
                            <div class="flex-grow-1">
                                <h4 class="mb-0 fs-11 text-muted text-uppercase">Direct Messages</h4>
                            </div>
                            <div class="flex-shrink-0">
                                <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="New Message">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target=".contactModal">
                                        <i class="bx bx-plus align-middle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="chat-message-list">

                            <ul class="list-unstyled chat-list chat-user-list" id="usersList">
                                @foreach ($contactUser as $user)
                                
                                <a href="{{ route('chat_page', ['username' => $user]) }}" class="usercard" data-username="{{ $user }}" onclick="changeRoute(event, '{{ route('chat_page', ['username' => $user]) }}')">
                                     <li class="user-item" id="username" onclick="getUserValue(this)" data-value="{{$user}}">
                                    <i class="ri-user-3-line" id="pic"></i>
                                    <p>{{$user}}</p>
                                    <i class="bx bx-dots-horizontal-rounded" id="more"></i>
                                </li>
                                </a>
                               
                                @endforeach
                            </ul>
                        </div>

                        <div class="chat-message-list">

                            <ul class="list-unstyled chat-list chat-user-list mb-3" id="channelList">
                            </ul>
                        </div>
                        <!-- End chat-message-list -->
                    </div>

                </div>
                <!-- Start chats content -->
            </div>
            <!-- End chats tab-pane -->

           
            <!-- Start calls tab-pane -->
            <div class="tab-pane" id="pills-calls" role="tabpanel" aria-labelledby="pills-calls-tab">
                <!-- Start Contact content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-3">Calls</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end p-4 -->

                    <!-- Start contact lists -->
                    <div class="chat-message-list chat-call-list" data-simplebar>
                        <ul class="list-unstyled chat-list" id="callList">      
                  
                        </ul>
                    </div>
                    <!-- end contact lists -->
                </div>
                <!-- Start Contact content -->
            </div>
            <!-- End calls tab-pane -->

            <!-- Start bookmark tab-pane -->
            <div class="tab-pane" id="pills-bookmark" role="tabpanel" aria-labelledby="pills-bookmark-tab">
                <!-- Start Contact content -->
                <div>
                    <div class="px-4 pt-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h4 class="mb-3">Bookmark</h4>
                            </div>
                        </div>
                        <form>
                            <div class="input-group search-panel mb-3">
                                <input type="text" class="form-control bg-light border-0" id="searchbookmark" onkeyup="searchBookmark()" placeholder="Search here..." aria-label="Example text with button addon"
                                    aria-describedby="searchbookmark-addon" autocomplete="off">
                                <button class="btn btn-light p-0" type="button" id="searchbookmark-addon"><i
                                        class='bx bx-search align-middle'></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- end p-4 -->

                  
                </div>
                <!-- Start Contact content -->
            </div>
            <!-- End bookmark tab-pane -->

            <!-- Start settings tab-pane -->
            <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                <!-- Start Settings content -->
                <div>
                    <div class="user-profile-img">
                        <img src="{{url('assets/images/cover_image.jpg')}}" class="profile-img profile-foreground-img" style="height: 160px;"
                            alt="">
                        <div class="overlay-content">
                            <div>
                                <div class="user-chat-nav p-3">

                                    <div class="d-flex w-100 align-items-center">
                                        <div class="flex-grow-1">
                                            <h5 class="text-white mb-0">Settings</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit" data-bs-toggle="tooltip"
                                                data-bs-trigger="hover" data-bs-placement="bottom" title="Change Background">
                                                <input id="profile-foreground-img-file-input" type="file"
                                                    class="profile-foreground-img-file-input">
                                                <label for="profile-foreground-img-file-input" class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="bx bxs-pencil"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center p-3 p-lg-4 border-bottom pt-2 pt-lg-2 mt-n5 position-relative">
                        <div class="mb-3 profile-user">
                            <img src="{{url('assets/images/users/profile_image.jpg')}}"
                                class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="bx bxs-camera"></i>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <h5 class="fs-16 mb-1 text-truncate"></h5>

                        <div class="dropdown d-inline-block">
                            <a class="text-muted dropdown-toggle d-block" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bxs-circle text-success fs-10 align-middle"></i> Active <i
                                    class="mdi mdi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="bx bxs-circle text-success fs-10 me-1 align-middle"></i>
                                    Active</a>
                                <a class="dropdown-item" href="#"><i class="bx bxs-circle text-warning fs-10 me-1 align-middle"></i>
                                    Away</a>
                                <a class="dropdown-item" href="#"><i class="bx bxs-circle text-danger fs-10 me-1 align-middle"></i> Do
                                    not disturb</a>
                            </div>
                        </div>


                    </div>
                    <!-- End profile user -->

                    <!-- Start User profile description -->
                    <div class="user-setting" data-simplebar>
                        <div id="settingprofile" class="accordion accordion-flush">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headerpersonalinfo">
                                    <a class="accordion-button fs-14 fw-medium" data-bs-toggle="collapse" href="#personalinfo"
                                        aria-expanded="true" aria-controls="personalinfo">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3 avatar-xs">
                                                <div class="avatar-title bg-info-subtle text-info text-info rounded">
                                                    <i class="bx bxs-user"></i>
                                                </div>
                                            </div>
                                            Personal Info
                                        </div>
                                    </a>
                                </div>
                                <div id="personalinfo" class="accordion-collapse collapse show" aria-labelledby="headerpersonalinfo"
                                    data-bs-parent="#settingprofile">
                                    <div class="accordion-body edit-input">
                                        <div class="float-end">
                                            <a href="#" class="badge bg-light text-muted" id="user-profile-edit-btn"> <i
                                                    class="bx bxs-pencil align-middle" id="edit-icon"></i>
                                            </a>
                                        </div>

                                        <div>
                                            <label for="exampleInputPassword1" class="form-label text-muted fs-13">Username</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" value="{{$username}}"
                                                placeholder="Enter name" disabled>
                                        </div>

                                        <div>
                                            <label for="exampleInputPassword1" class="form-label text-muted fs-13">Email</label>
                                            <input type="email" class="form-control" id="exampleInputPassword1"
                                                value="{{$email}}" placeholder="Enter email" disabled>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- end personal info card -->

                        </div>
                        <!-- end profile-setting-accordion -->
                    </div>
                    <!-- End User profile description -->
                </div>
                <!-- Start Settings content -->
            </div>
            <!-- End settings tab-pane -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end chat-leftsidebar -->
    <!-- Start User chat -->

    @if (request()->route()->getName() === 'chat_page')
    @include('chat')
    <script>
        let user_chat = document.querySelector('.user-chat');
        user_chat.classList.add('user-chat-show');

        let user_chat_remove = document.querySelector('.user-chat-remove');
        user_chat_remove.addEventListener('click', () => {
            user_chat.classList.remove('user-chat-show');
        });

        document.addEventListener('DOMContentLoaded', function() {
        let conversation = document.querySelector('#users-conversation');
        conversation.scrollTop = conversation.scrollHeight - conversation.clientHeight;

    });



    </script>
    @else
        @include('index')
    @endif 


    <!-- End User chat -->

    <!-- Start Add contact Modal -->
    <!-- contactModal -->
    <div class="modal fade contactModal" tabindex="-1" role="dialog" aria-labelledby="pinnedtabModalLabel"
        aria-hidden="true">
        <div id="thecard" class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-header-colored border-0">
                <div class="modal-header">
                    <h5 class="modal-title text-white fs-16" id="pinnedtabModalLabel">Contacts</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Search here.." id="searchContactModal"
                            onkeyup="searchContactOnModal()" aria-label="Example text with button"
                            aria-describedby="contactSearchbtn-addon">
                        <button class="btn btn-danger" type="button" id="contactSearchbtn-addon"><i
                                class='bx bx-search align-middle'></i></button>
                    </div>
                    <div class="d-flex align-items-center px-1">
                        <div class="flex-grow-1">
                            <h4 class=" fs-12 text-muted text-uppercase">Contacts</h4>
                        </div>
                    </div>
                    <div class="contact-modal-list px-1" data-simplebar style="max-height: 258px;">
                            <ul class="users">

                            </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-link" data-bs-dismiss="modal"><i
                            class="ri-close-fill align-bottom"></i> Cancel</a>
                    <button id="inviteButton" type="button" class="btn btn-primary"><i class="bx bxs-send align-middle"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- contactModal -->
    <!-- End Add contact Modal -->

   
<!-- end  layout wrapper -->


<!-- JAVASCRIPT -->
<script src="{{url('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{url('assets/libs/node-waves/waves.min.js')}}"></script>

<!-- Modern colorpicker bundle -->
<script src="{{url('assets/libs/%40simonwep/pickr/pickr.min.js')}}"></script>

<!-- glightbox js -->
<script src="{{url('assets/libs/glightbox/js/glightbox.min.js')}}"></script>

<!-- Swiper JS -->
<script src="{{url('assets/libs/swiper/swiper-bundle.min.js')}}"></script>

<!-- fg-emoji-picker JS -->
<script src="{{url('assets/libs/fg-emoji-picker/fgEmojiPicker.js')}}"></script>

<!-- page init -->
<script src="{{url('assets/js/pages/index.init.js')}}"></script>

<script src="{{url('assets/js/app.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>


</html>
<script>
    $(document).ready(function() {
    // Event listener for the input field
    $('#searchContactModal').on('input', function() {
        
        var keyword = $(this).val();

        // Check if the input value is empty
        if (keyword.trim() === '') {
            // If empty, clear the search results and exit the function
            $('.users').empty();
            return;
        }

        // If not empty, make the AJAX request
        $.ajax({
            url: '{{ route("search", ":keyword") }}'.replace(':keyword', keyword),
            type: 'GET',
            success: function(response) {
                // Clear existing results
                $('.users').empty();

                // Append new results
                response.forEach(element => {
                    let user = document.createElement('li'); 
                    user.style.display="flex";

                    let icon = document.createElement('i');
                    icon.classList.add('ri-user-3-line');

                    user.append(icon);
                    let name = document.createElement('p');
                    name.classList.add('username');
                    name.textContent  = element.name;

                    let span = document.createElement('span');
                    span.classList.add('theId');
                    span.style.display='none';

                    span.textContent = element.id;

                    user.append(span);

                    user.append(name);
                    $('.users').append(user); 

                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });

    $(document).ready(function() {
    // Event listener for the click event on the "Invite" button
    $('#inviteButton').click(function() {
        // Find the selected <li> element
        var selectedLi = $('.users li.selected');
        var theUsername = selectedLi.find('p.username');
        var theId = selectedLi.find('span.theId');

        // Check if a <li> element is selected
        if (selectedLi.length > 0) {
            // Get the text content of the selected <li> element
            var selectedUsername = theUsername.text();
            var theSelectedId = theId.text();

            $.ajax({
                url: '{{ route("invite") }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    username: selectedUsername,
                    id: theSelectedId
                },
                success: function(response) {
                    console.log("Response from backend:", response);

                    let thecard = document.querySelector('#thecard');
                    thecard.style.display = "none";

                    document.querySelector('.modal-backdrop').classList.remove('modal-backdrop', 'fade', 'show');

                    window.location.reload();

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        } else {
            console.log("No <li> element is selected.");
        }
    });

    // Event listener for the click event on <li> elements
    $('.users').on('click', 'li', function() {
        // Remove the 'selected' class from all other <li> elements
        $('.users li').removeClass('selected');
        
        // Add the 'selected' class to the clicked <li> element
        $(this).addClass('selected');
    });
});


});



</script>





