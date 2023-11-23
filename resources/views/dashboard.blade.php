@extends('layouts.front')
@section('content')

<!-- sidebar group -->
<div class="sidebar-group left-sidebar chat_sidebar">
    <!-- Chats sidebar -->
    <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

        <div class="slimscroll">

            <!-- Left Chat Title -->
            <div class="left-chat-title d-flex justify-content-between align-items-center">
                <div class="chat-title">
                    <h4>CHATS</h4>
                </div>
                <div class="add-section">
                    <ul>
                        <li><a href="group.html"><span class="material-icons">group</span></a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#add-user"><i
                                    class="fas fa-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /Left Chat Title -->

            <div class="search_chat has-search">
                <span class="fas fa-search form-control-feedback"></span>
                <input class="form-control chat_input" id="search-contacts" type="text" placeholder="Search Contacts">
            </div>

            <!-- Top Online Contacts -->
            <div class="top-online-contacts">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    @if(isset($list_contacts) && !empty($list_contacts) && $list_contacts->count()>0)
                        @foreach($list_contacts as $list_contact)
                            @if(check_contact_added_or_not(Auth::user()->id, $list_contact->id)==1)
                            <div style="cursor: pointer;width: 100px !important;" class="swiper-slide">
                                <div class="top-contacts-box">
                                    <div class="profile-img online">
                                        <img src="{{URL::asset('uploads/user/profile_pic/')}}/{{$list_contact->profile_pic}}" alt="">
                                    </div>
                                    <div class="profile-name">
                                        <span>{{$list_contact->name}}</span>
                                    </div>
                                    <button     
                                    onclick="getUserConnect({{$list_contact->id}})"
                                    style="background-color: #420BA1;
                                    border-color: #420BA1;
                                    padding: 6px 12px;
                                    color: #fff;
                                    border-radius: 10px;" 
                                    class="btn btn-update mb-1 send_{{$list_contact->id}}">
                                    {{$list_contact->getContactList?$list_contact->getContactList->status==0?"✅Sent":"Send":"Send"}}
                                    </button>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    @endif
                        
                    </div>
                </div>
            </div>
            <!-- /Top Online Contacts -->

            <div class="sidebar-body" id="chatsidebar">

                <!-- Left Chat Title -->
                <div class="left-chat-title d-flex justify-content-between align-items-center ps-0 pe-0">
                    <div class="chat-title">
                        <h4>Recent Chats</h4>
                    </div>
                    <div class="add-section">
                        <a href="#"><i class="fas fa-edit"></i></a>
                    </div>
                </div>
                <!-- /Left Chat Title -->

                <ul class="user-list mt-2">
                    @if(!empty($list_my_contacts) && isset($list_my_contacts) && $list_my_contacts->count()>0)
                        @foreach($list_my_contacts as $list_my_contact)
                        <li class="user-list-item">
                            <div class="avatar avatar-online">
                                <img src="{{URL::asset('uploads/user/profile_pic/')}}/{{$list_my_contact->getContactDetails->profile_pic}}" class="rounded-circle" alt="image">
                            </div>
                            <div class="users-list-body">
                                <div>
                                    <h5>{{$list_my_contact->getContactDetails->name}}</h5>
                                    <!-- <p>It seems logical that the</p> -->
                                </div>
                                <div class="last-chat-time">
                                    <small class="text-muted">05 min</small>
                                    <div class="new-message-count">11</div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    @endif
                    <!-- <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-away">
                                <img src="assets/img/avatar/avatar-9.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>Forest Kroch</h5>
                                <p>It seems logical that the</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">05 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item item-typing">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-10.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>Regina Dickerson</h5>
                                <p><span class="animate-typing-col">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">05 min</small>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <div class="letter-avatar">
                                    M
                                </div>
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>Townsend Seary</h5>
                                <p><span class="material-icons">insert_photo</span> Photo</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">45 min</small>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-11.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>Margaretta Worvell</h5>
                                <p class="missed-call-col"><span class="material-icons">call_missed</span> Missed Call
                                </p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">52 min</small>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-away">
                                <img src="assets/img/avatar/avatar-2.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Tech Support</h5>
                                <p><strong>Haidar</strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">Yesterday</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <div class="letter-avatar">
                                    A
                                </div>
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>Harald Kowalski</h5>
                                <p><span class="material-icons">videocam</span> It seems logical that the</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">Yesterday</small>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-away">
                                <img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>Alexandr Donnelly</h5>
                                <p><span class="material-icons">settings_voice</span> 0.25</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">Yesterday</small>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>Regina Dickerson</h5>
                                <p>It seems logical that the</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">Yesterday</small>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>

        </div>

    </div>
    <!-- / Chats sidebar -->
</div>

        </div> 
        <!-- /Content -->
        <script>
              $(function () {
     
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });
    })
              function getUserConnect(getID){
                   
                        $.ajax({
                                data: {friendID:getID},
                                url: "{{ route('add-contact') }}",
                                type: "POST",
                                dataType: 'json',
                                success: function (data) {
                                    if(data.status==true){
                                        $(".send_"+getID).text("✅Sent")
                                    }
                                },
                                error: function (data) {
                                    console.log('Error:', data);
                                }
                            });
              }
           

              
        </script>

@endsection