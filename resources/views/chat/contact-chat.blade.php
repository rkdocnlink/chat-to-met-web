
                    <div class="chat-header">
                        <div class="user-details">
                            <div class="d-lg-none ms-2">
                                <ul class="list-inline mt-2 me-2">
                                    <li class="list-inline-item">
                                        <a class="text-muted px-0 left_side" href="#" data-chat="open">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <figure class="avatar ms-1">
                                <img src="{{URL::asset('uploads/user/profile_pic/')}}/{{$ContactData->profile_pic}}" class="rounded-circle" alt="image">
                            </figure>
                            <div class="mt-1">
                                <h5>{{$ContactData->name?$ContactData->name:""}}</h5>
                                <small class="online">
                                    Online
                                </small>
                            </div>
                        </div>
                        <div class="chat-options">
                            <ul class="list-inline">
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
                                    <a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn" >
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice call">
                                    <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                        data-bs-target="#voice_call">
                                        <i class="fas fa-phone-alt voice_chat_phone"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video call">
                                    <a href="javascript:void(0)" class="btn btn-outline-light" data-bs-toggle="modal"
                                        data-bs-target="#video_call">
                                        <i class="fas fa-video"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item dream_profile_menu" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
                                    <a href="javascript:void(0)" class="btn btn-outline-light">
                                        <i class="fas fa-user"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item dream_profile_menu">Archive <span><i class="fas fa-archive"></i></span></a>
                                        <a href="#" class="dropdown-item">Muted <span class="material-icons">volume_off</span></a>
                                        <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Chat Search -->
                        <div class="chat-search">
                            <form>
                                <span class="fas fa-search form-control-feedback"></span>
                                <input type="text" name="chat-search" placeholder="Search Chats" class="form-control">
                                <div class="close-btn-chat"><span class="material-icons">close</span></div>
                            </form>
                        </div>
                        <!-- /Chat Search -->
                    </div>
                    <div class="chat-body">
                        <div class="messages">
                            @if(isset($chats) && !empty($chats) && $chats->count()>0)
                             @foreach($chats as $chat)
                               @if($chat->user_id!=Auth::user()->id)
                            <div class="chats">
                                <!-- <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle dreams_chat" alt="image">
                                </div> -->
                                <div class="chat-content">
                                    <div class="message-content">
                                        {{$chat->messgae}}
                                        <div class="chat-time">
                                            <div>
                                                <div class="time"><i class="fas fa-clock"></i> {{date('h:i A',strtotime($chat->created_at))}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="chat-profile-name">
                                        <h6>Doris Brown</h6>
                                    </div> -->
                                </div>
                                <div class="chat-action-btns ms-3">
                                    <div class="chat-action-col">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item dream_profile_menu">Copy <span ><i class="far fa-copy"></i></span></a>
                                            <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                            <a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
                                            <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="chats chats-right">
                                <div class="chat-content">
                                <div class="message-content">
                                        {{$chat->messgae}}
                                        <div class="chat-time">
                                            <div>
                                                <div class="time"><i class="fas fa-clock"></i> {{date('h:i A',strtotime($chat->created_at))}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="chat-profile-name text-end">
                                        <h6>Alexandr</h6>
                                    </div> -->
                                </div>
                                <!-- <div class="chat-avatar">
                                    <img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle dreams_chat" alt="image">
                                </div> -->
                                <div class="chat-action-btns me-2">
                                    <div class="chat-action-col">
                                        <a class="#" href="#" data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item dream_profile_menu">Copy <span ><i class="far fa-copy"></i></span></a>
                                            <a href="#" class="dropdown-item">Save <span class="material-icons">save</span></a>
                                            <a href="#" class="dropdown-item">Forward <span><i class="fas fa-share"></i></span></a>
                                            <a href="#" class="dropdown-item">Delete <span><i class="far fa-trash-alt"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="chat-read-col">
                                        <span class="material-icons">done_all</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            @endforeach
                           @endif 
                        </div>
                    </div>
                            
                          


            <script>
                $("#getSubmit").submit(function(event) {
                    event.preventDefault();
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    var user_id=$(".getUserID").val();
                    var message=$(".chat_form").val();
                    $('#getSubmit').trigger("reset");

                    if(message){
                   $.ajax({
                           data: {friendID:user_id,message:message},
                           url: "{{ route('send-message') }}",
                           type: "POST",
                           dataType: 'json',
                           success: function (data) {
                               if(data.status==true){
                                 getContactChat(user_id)
                               }
                           },
                           error: function (data) {
                               console.log('Error:', data);
                           }
                       });
                    }
                })

                var user_id=$(".getUserID").val();
                // alert(user_id)
                if(user_id){
                    setTimeout(()=>{
                        getContactChat(user_id)
                    },1000)
                }
            </script>