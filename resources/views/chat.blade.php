<style>
    #users-conversation{
        position: relative;
        height: fit-content;
    }

    .message_wrap{
        width: max(50%);
        height: fit-content;
        background-color: rgba(var(--bs-primary-rgb),1);
        color: white;
        padding: 10px;
        border-radius:20px; 
        display: flex;
        flex-direction: column;

    }
    .message{
        margin-bottom: 0;
    }
    .time{
        width: 100%;
        text-align: end;
        margin-bottom: 0;
    }
    /* Add a background color for messages sent by the requested user */
    .own_message {
        position: relative;
        background-color: rgb(52, 99, 116);
        left: 50%;
    }
    .message_wrap{
        margin: 5px 0;
    }
    .user-chat-remove{
        color: white;
    }

</style>

<div class="user-chat w-100 overflow-hidden">

    <div class="chat-content d-lg-flex">
        <!-- start chat conversation section -->
        <div class="w-100 overflow-hidden position-relative">
            <!-- conversation user -->
            <div id="users-chat" class="position-relative">
                <div class="py-3 user-chat-topbar">
                    <div class="row align-items-center">
                        <div class="col-sm-4 col-8">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 d-block d-lg-none me-3">
                                    <a href="javascript: void(0);" class="btn-primary user-chat-remove fs-18 p-1"><i
                                            class="bx bx-chevron-left align-middle"></i></a>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                            <i style="font-size: 25px" class="ri-user-3-line"></i>
                                            <span class="user-status"></span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h6 class="text-truncate mb-0 fs-18">
                                                <a href="#" class="user-profile-show text-reset">
                                                    @php
                                                        $username = request()->route('username');
                                                    @endphp
                                                    {{$username}}
                                                </a>
                                            </h6>
                                            <p class="text-truncate text-muted mb-0"><small>Online</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 col-4">
                            <ul class="list-inline user-chat-nav text-end mb-0">
                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-search'></i>
                                        </button>
                                        <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                            <div class="search-box p-2">
                                                <input type="text" class="form-control" placeholder="Search.."
                                                    id="searchChatMessage">
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-inline-item d-none d-lg-inline-block me-2 ms-0">
                                    <button type="button" class="btn nav-btn user-profile-show" id="showsideprofile">
                                        <i class='bx bxs-info-circle'></i>
                                    </button>
                                </li>

                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-vertical-rounded'></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show"
                                                href="#" id="showsideprofile">View Profile <i class="bx bx-user text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio <i
                                                    class="bx bxs-phone-call text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                href="#" data-bs-toggle="modal" data-bs-target=".videocallModal">Video <i
                                                    class="bx bx-video text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                href="#">Archive <i class="bx bx-archive text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                href="#">Muted <i class="bx bx-microphone-off text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                href="#">Delete <i class="bx bx-trash text-muted"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end chat user head -->

                <!-- start chat conversation -->

                <div  class="chat-conversation p-3 p-lg-4 " id="chat-conversation" data-simplebar>
                    <ul  class="list-unstyled chat-conversation-list" id="users-conversation">
                        <!--
                       @foreach ($messages as $message)
                        <li class="message_wrap" value="{{$message->contactUser}}">
                            <p class="message">{{$message->message}}</p>
                            <p class="time">{{$message->created_at}}</p>
                        </li>
                       @endforeach
                        -->
                    </ul>

                   
                </div>

                
                <!-- end chat conversation end -->
            </div>



            
            <!-- start chat input section -->
            <div class="position-relative">
                <div class="chat-input-section p-4 border-top">

                    <form id="chatinput-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-0 align-items-center">
                            <div class="file_Upload"></div>
                            <div class="col-auto">
                                <div class="chat-input-links me-md-2">
                                    <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="More">
                                        <button type="button"
                                            class="btn btn-link text-decoration-none btn-lg waves-effect"
                                            data-bs-toggle="collapse" data-bs-target="#chatinputmorecollapse"
                                            aria-expanded="false" aria-controls="chatinputmorecollapse">
                                            <i class="bx bx-dots-horizontal-rounded align-middle"></i>
                                        </button>
                                    </div>
                                    <div class="links-list-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-placement="top" title="Emoji">
                                        <button type="button"
                                            class="btn btn-link text-decoration-none btn-lg waves-effect emoji-btn"
                                            id="emoji-btn">
                                            <i class="bx bx-smile align-middle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="position-relative">
                                    <div class="chat-input-feedback">
                                        Please Enter a Message
                                    </div>
                                    <input autocomplete="off" type="text" class="form-control bg-light border-0 chat-input" autofocus id="chat-input" placeholder="Type your message..." name="message">
                                        <!--is typing-->
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="chat-input-links ms-2 gap-md-1">
                                    <div class="links-list-item d-none d-sm-block"
                                        data-bs-container=".chat-input-links" data-bs-toggle="popover"
                                        data-bs-trigger="focus" data-bs-html="true" data-bs-placement="top"
                                        data-bs-content="<div class='loader-line'><div class='line'></div><div class='line'></div><div class='line'></div><div class='line'></div><div class='line'></div></div>">
                                        <button type="button"
                                            class="btn btn-link text-decoration-none btn-lg waves-effect"
                                            onclick="audioPermission()">
                                            <i class="bx bx-microphone align-middle"></i>
                                        </button>
                                    </div>
                                    <div class="links-list-item">
                                        <button type="submit" id="send-message-btn" class="btn btn-primary btn-lg chat-send waves-effect waves-light" data-bs-toggle="collapse" data-bs-target=".chat-input-collapse1.show">
                                            <i class="bx bxs-send align-middle" id="submit-btn"></i> Send
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="chat-input-collapse chat-input-collapse1 collapse" id="chatinputmorecollapse">
                        <div class="card mb-0">
                            <div class="card-body py-3">
                                <!-- Swiper -->
                                <div class="swiper chatinput-links">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="text-center px-2 position-relative">
                                                <div>
                                                    <input id="attachedfile-input" type="file" class="d-none"
                                                        accept=".zip,.rar,.7zip,.pdf" multiple>
                                                    <label for="attachedfile-input"
                                                        class="avatar-sm mx-auto stretched-link">
                                                        <span
                                                            class="avatar-title fs-18 bg-primary-subtle  text-primary  text-primary rounded-circle">
                                                            <i class="bx bx-paperclip"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-11 text-uppercase mt-3 mb-0 text-body text-truncate">
                                                    Attached</h5>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text-center px-2">
                                                <div class="avatar-sm mx-auto">
                                                    <div
                                                        class="avatar-title fs-18 bg-primary-subtle text-primary  text-primary rounded-circle">
                                                        <i class="bx bxs-camera"></i>
                                                    </div>
                                                </div>
                                                <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                        class="text-body stretched-link"
                                                        onclick="cameraPermission()">Camera</a></h5>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text-center px-2 position-relative">
                                                <div>
                                                    <input id="galleryfile-input" type="file" class="d-none"
                                                        accept="image/png, image/gif, image/jpeg" multiple>
                                                    <label for="galleryfile-input"
                                                        class="avatar-sm mx-auto stretched-link">
                                                        <span
                                                            class="avatar-title fs-18 bg-primary-subtle text-primary  text-primary rounded-circle">
                                                            <i class="bx bx-images"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0">Gallery
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text-center px-2">
                                                <div>
                                                    <input id="audiofile-input" type="file" class="d-none"
                                                        accept="audio/*" multiple>
                                                    <label for="audiofile-input"
                                                        class="avatar-sm mx-auto stretched-link">
                                                        <span
                                                            class="avatar-title fs-18 bg-primary-subtle text-primary  text-primary rounded-circle">
                                                            <i class="bx bx-headphone"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0">Audio</h5>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text-center px-2">
                                                <div class="avatar-sm mx-auto">
                                                    <div
                                                        class="avatar-title fs-18 bg-primary-subtle text-primary  text-primary rounded-circle">
                                                        <i class="bx bx-current-location"></i>
                                                    </div>
                                                </div>

                                                <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                        class="text-body stretched-link"
                                                        onclick="getLocation()">Location</a></h5>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="text-center px-2">
                                                <div class="avatar-sm mx-auto">
                                                    <div
                                                        class="avatar-title fs-18 bg-primary-subtle text-primary  text-primary rounded-circle">
                                                        <i class="bx bxs-user-circle"></i>
                                                    </div>
                                                </div>
                                                <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                        class="text-body stretched-link" data-bs-toggle="modal"
                                                        data-bs-target=".contactModal">Contacts</a></h5>
                                            </div>
                                        </div>

                                        <div class="swiper-slide d-block d-sm-none">
                                            <div class="text-center px-2">
                                                <div class="avatar-sm mx-auto">
                                                    <div
                                                        class="avatar-title fs-18 bg-primary-subtle text-primary  text-primary rounded-circle">
                                                        <i class="bx bx-microphone"></i>
                                                    </div>
                                                </div>
                                                <h5 class="fs-11 text-uppercase text-truncate mt-3 mb-0"><a href="#"
                                                        class="text-body stretched-link">Audio</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="replyCard">
                    <div class="card mb-0">
                        <div class="card-body py-3">
                            <div class="replymessage-block mb-0 d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="conversation-name"></h5>
                                    <p class="mb-0"></p>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" id="close_toggle"
                                        class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                        <i class="bx bx-x align-middle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat input section -->
        </div>
        <!-- end chat conversation section -->

        <!-- start User profile detail sidebar -->
        <div class="user-profile-sidebar">

            <div class="p-3 border-bottom">
                <div class="user-profile-img">
                    <img src="{{url('assets/images/cover_image.jpg')}}" class="profile-img rounded" alt="">
                    <div class="overlay-content rounded">
                        <div class="user-chat-nav p-2">
                            <div class="d-flex w-100">
                                <div class="flex-grow-1">
                                    <button type="button" class="btn nav-btn text-white user-profile-show d-none d-lg-block" id="removeSideProfile">
                                        <i class="bx bx-x"></i>
                                    </button>
                                    <button type="button" class="btn nav-btn text-white user-profile-show d-block d-lg-none">
                                        <i class="bx bx-left-arrow-alt"></i>
                                    </button>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="dropdown">
                                        <button class="btn nav-btn text-white dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class='bx bx-dots-vertical-rounded'></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none user-profile-show"
                                                href="#" id="showsideprofile">View Profile <i class="bx bx-user text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                href="#" data-bs-toggle="modal" data-bs-target=".audiocallModal">Audio <i
                                                    class="bx bxs-phone-call text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center d-lg-none"
                                                href="#" data-bs-toggle="modal" data-bs-target=".videocallModal">Video <i
                                                    class="bx bx-video text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                href="#">Archive <i class="bx bx-archive text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                href="#">Muted <i class="bx bx-microphone-off text-muted"></i></a>
                                            <a class="dropdown-item d-flex justify-content-between align-items-center"
                                                href="#">Delete <i class="bx bx-trash text-muted"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto p-3">
                            <h5 class="user-name mb-0 text-truncate">
                                @php
                                    $username = request()->route('username');
                                @endphp
                            
                                {{$username}}
                            </h5>
                            <p class="fs-14 text-truncate user-profile-status mt-1 mb-0"><i class="bx bxs-circle fs-10 text-success me-1 ms-0"></i>
                                Online</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End profile user -->

            <!-- Start user-profile-desc -->
            <div class="p-4 user-profile-desc" data-simplebar>
                <div class="text-center border-bottom border-bottom-dashed">
                    <div class="d-flex gap-2 justify-content-center mb-4">
                        <button type="button" class="btn avatar-sm p-0">
                            <span class="avatar-title rounded bg-info-subtle text-info text-info">
                                <i class="bx bxs-message-alt-detail"></i>
                            </span>
                        </button>
                        <button type="button" class="btn avatar-sm p-0 favourite-btn">
                            <span class="avatar-title rounded bg-danger-subtle text-danger text-body">
                                <i class="bx bx-heart"></i>
                            </span>
                        </button>
                        <div class="dropdown">
                            <button class="btn avatar-sm p-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="avatar-title bg-primary-subtle text-primary  text-primary rounded">
                                    <i class='bx bx-dots-horizontal-rounded'></i>
                                </span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Archive <i
                                        class="bx bx-archive text-muted"></i></a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Muted <i
                                        class="bx bx-microphone-off text-muted"></i></a>
                                <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">Delete <i
                                        class="bx bx-trash text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-4 border-bottom border-bottom-dashed mb-4">
                    <h5 class="fs-12 text-muted text-uppercase mb-2">Info :</h5>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <i class="ri-user-line align-middle fs-15 text-muted"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fs-14 text-truncate mb-0" id="requistUser">
                                @php
                                    $username = request()->route('username')
                                @endphp
                                {{$username}}
                            </h5>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <div class="flex-shrink-0">
                            <i class="ri-mail-line align-middle fs-15 text-muted"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="fs-14 text-truncate mb-0">
                                {{$userEmail}}
                            </h5>
                        </div>
                    </div>

                   
                </div>

            </div>
            <!-- end user-profile-desc -->
        </div>
        <!-- end User profile detail sidebar -->
    </div>
    <!-- end user chat content -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>


     // Function to fetch and display messages
     function fetchMessages() {

        // Extract the username from the DOM element
        let requistUser = document.querySelector('#requistUser').textContent.trim();

        // Make an AJAX request to fetch messages
        $.ajax({
            url: '/Messages/' + requistUser, 
            method: 'GET',
            success: function(response) {
                // Handle the successful response here
                
                var messagesHtml = '';
                response.messages.forEach(function(message) {
                    var createdAt = new Date(message.created_at);
                    var formattedCreatedAt = createdAt.getFullYear() + '-' + ('0' + (createdAt.getMonth() + 1)).slice(-2) + '-' + ('0' + createdAt.getDate()).slice(-2) + ' / ' + ('0' + createdAt.getHours()).slice(-2) + ':' + ('0' + createdAt.getMinutes()).slice(-2);
                    var isSameUser = message.contactUser === requistUser;

                    messagesHtml += '<li class="message_wrap ' + (isSameUser ? 'own_message' : '') + '" value="' + message.contactUser + '"><p class="message">' + message.message + '</p><p class="time">' + formattedCreatedAt + '</p></li>'; 
                           
                });
                $('#users-conversation').html(messagesHtml); 
            },
            error: function(xhr, status, error) {
                // Handle errors here
                console.error(error);
            }
        });
    }


    document.getElementById('send-message-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        let  conversation = document.querySelector('#users-conversation');
        conversation.scrollTop = 0;

        // Retrieve the message content from the input field
        var message = document.getElementById('chat-input').value;

        // Send an AJAX request to the server
        $.ajax({
            url: '{{route("sendMessage", ["username" => $requistUser])}}', 
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}', 
                message: message
            },
            success: function(response) {
                var message = document.getElementById('chat-input');
                $('#chat-input').val("");

                fetchMessages();

            },
            error: function(xhr, status, error) {
               
                console.error(xhr.responseText);
                alert('Error occurred while sending message');
            }
        });
    });
    
    fetchMessages(); // Call the function on document ready


    setInterval(fetchMessages, 500);

    function notifications(){
        $.ajax({
            url: '/notifications',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                var messageCount = response.message_count;
                var newMessages = response.new_messages;

                // Handle new messages
                if (newMessages.length > 0) {
                    newMessages.forEach(function(message) {
                        let message_notification = document.querySelector('#message_notification');
                        message_notification.textContent = messageCount;

                    });
                } else {
                    let message_notification = document.querySelector('#message_notification');
                        message_notification.textContent = messageCount;
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

   }


let user_profile_sidebar = document.querySelector('.user-profile-sidebar');
let user_profile_show = document.querySelector('#showsideprofile');
user_profile_show.addEventListener('click', ()=>{
    console.log(00)
    user_profile_sidebar.classList.add('d-block');
});

let removeSideProfile = document.querySelector('#removeSideProfile');
removeSideProfile.addEventListener('click', ()=>{
    user_profile_sidebar.classList.remove('d-block');
})
</script>
