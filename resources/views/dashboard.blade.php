@extends('layouts.front')
@section('content')

<!-- sidebar group -->
<div class="sidebar-group left-sidebar chat_sidebar">
    <!-- Chats sidebar -->
    <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

        <div class="slimscroll">
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
                        <li onclick="getContactChat({{$list_my_contact->getContactDetails->id}})" class="user-list-item" data-id="{{$list_my_contact->getContactDetails->id}}">
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
                            
                        </ul>
                    </div>

                </div>



                </div>
                <!-- / Chats sidebar -->
            </div>

            <div class="chat" id="middle">
               <div class="slimscroll">
                 <div class="myChat"></div>
                    
                </div>
                <div class="chat-footer">
                            <form id="getSubmit">
                                <div class="smile-col">
                                    <a href="#"><i class="far fa-smile"></i></a>
                                </div>
                                <div class="attach-col">
                                    <a href="#"><i class="fas fa-paperclip"></i></a>
                                </div>
                                <input type="text" class="form-control chat_form" placeholder="Enter Message.....">
                                <div class="form-buttons">
                                    <button class="btn send-btn" type="submit">
                                        <span class="material-icons">send</span>
                                    </button>
                                </div>
                                <div class="specker-col">
                                    <a href="#"><span class="material-icons">settings_voice</span></a>
                                </div>
                            </form>
                     </div>
            </div>
            <input type="hidden" class="getUserID">
        </div> 
        <!-- /Content -->
        <script>
             
              function getUserConnect(getID){
                        $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
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

              function getContactChat(getID){
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });      
                        $.ajax({
                           data: {friendID:getID},
                           url: "{{ route('get-chat') }}",
                           type: "POST",
                           dataType: 'json',
                           success: function (data) {
                            console.log(data)
                               if(data.status==true){
                                   $(".getUserID").val(getID)
                                   $(".myChat").html(data.data)
                               }
                           },
                           error: function (data) {
                               console.log('Error:', data);
                           }
                       });
              }

               
                     

              
        </script>

@endsection