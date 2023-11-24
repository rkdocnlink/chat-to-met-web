@extends('layouts.front')
@section('content')
<div class="sidebar-group left-sidebar chat_sidebar">

    <!-- Chats sidebar -->
    <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

        <div class="slimscroll">

            <!-- Left Chat Title -->
            <div class="left-chat-title d-flex justify-content-between align-items-center">
                <div class="chat-title">
                    <h4>GROUP CHAT</h4>
                </div>
                <div class="add-section">
                    <ul>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#add-new-group"><span
                                    class="material-icons group-add-btn">group_add</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /Left Chat Title -->

            <div class="search_chat has-search mb-0">
                <span class="fas fa-search form-control-feedback"></span>
                <input class="form-control chat_input" id="search-contact1" type="text" placeholder="Search Contacts">
            </div>

            <div class="sidebar-body" id="chatsidebar">

                <!-- Left Chat Title -->
                <div class="left-chat-title d-flex justify-content-between align-items-center ps-0 pe-0">
                    <div class="chat-title">
                        <h4>Recent Chats</h4>
                    </div>
                </div>
                <!-- /Left Chat Title -->

                @if(isset($group) && !empty($group) && $group->count()>0)
                        @foreach($group as $group_list)
                <ul class="user-list mt-2">
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-away">
                                <img src="assets/img/group-4.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#{{$group_list->name}} <span class="ms-1"><span
                                            class="material-icons lock-icon">lock</span></span></h5>
                                <p><strong>Moein</strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 Min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>

                    @endforeach
                    @endif
                    <!-- <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-12.jpg" class="rounded-circle" alt="image">
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
                                <img src="assets/img/group-3.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Home Decor </h5>
                                <p><strong>Jonathan</strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                     <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-3.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Interior Design </h5>
                                <p><strong>Judy </strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/group-1.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Photography </h5>
                                <p><strong>Degregorio</strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/group-5.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Interiors </h5>
                                <p><strong>Jean </strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-6.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Inspiration </h5>
                                <p><strong>Burns</strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/group-2.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Artwork </h5>
                                <p><strong>Josh </strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-8.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Handmade </h5>
                                <p><strong>Susan </strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li>
                    <li class="user-list-item">
                        <div>
                            <div class="avatar avatar-online">
                                <img src="assets/img/avatar/avatar-9.jpg" class="rounded-circle" alt="image">
                            </div>
                        </div>
                        <div class="users-list-body">
                            <div>
                                <h5>#Design Inspiration</h5>
                                <p><strong>Johnson</strong> : Hi!!!</p>
                            </div>
                            <div class="last-chat-time">
                                <small class="text-muted">20 min</small>
                                <div class="new-message-count">11</div>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>

        </div>

    </div>
    <!-- / Chats sidebar -->
</div>
@endsection