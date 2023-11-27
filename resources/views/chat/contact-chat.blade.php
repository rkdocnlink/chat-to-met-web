
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
                  