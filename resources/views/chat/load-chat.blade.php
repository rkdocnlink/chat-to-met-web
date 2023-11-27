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