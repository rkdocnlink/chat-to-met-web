<div class="sidebar-menu">
    <div class="logo-col">
        <a href=""><img src="{{URL::asset('assets/img/logo.png')}}" alt=""></a>
    </div>
    <div class="menus-col">
        <div class="chat-menus">
            <ul>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#my-contact-request">
            <span class="material-icons">add_alert</span>
                        <span>Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard')}}" class="chat-unread blue">
                        <span class="material-icons">message</span>
                        <span>Chats</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{route('add-group')}}" class="chat-unread pink">
                        <span class="material-icons">group</span>
                        <span>Groups</span>
                    </a>
                </li>
                <li>
                    <a href="" class="chat-unread">
                        <span class="material-icons">library_books</span>
                        <span>Status</span>
                    </a>
                </li>
                <li>
                    <a href="" class="chat-unread">
                        <span class="material-icons">call</span>
                        <span>Calls</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile')}}" class="chat-unread">
                        <span class="material-icons">settings</span>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-menus">
            <ul>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-group">
                        <span class="material-icons group-add-btn">group_add</span>
                        <span>Add Groups</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="add-contacts-btn" data-bs-toggle="modal" data-bs-target="#add-contact">
                        <i class="fas fa-plus"></i>
                        <span>Add Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
                        <i class="far fa-moon"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="chat-profile-icon" data-bs-toggle="dropdown">
                        <img src="{{URL::asset('assets/img/avatar/avatar-13.jpg')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item dream_profile_menu">Edit Profile <span
                                class="edit-profile-icon"><i class="fas fa-edit"></i></span></a>
                        <a href="#" class="dropdown-item">Profile <span class="profile-icon-col"><i
                                    class="fas fa-id-card-alt"></i></span></a>
                        <a href="" class="dropdown-item">Settings <span
                                class="material-icons">settings</span></a>
                        <a href="" class="dropdown-item">Archived <span
                                class="material-icons">flag</span></a>
                        <a href="{{route('logout')}}" class="dropdown-item">Logout <span
                                class="material-icons">power_settings_new</span></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>