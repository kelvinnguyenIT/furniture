@extends('admin.layouts.app')

@section('title','Liên hệ')

@section('content')

			<div class="email-app todo-box-container">
                <div class=" mail-list bg-white overflow-auto">
                	<div id="todo-list-container">
                		<div class="p-3 border-bottom">
	                    </div>
	                    <div class="todo-listing">
	                    	<div id="all-todo-container" class="p-3">

                                @forelse ($contactList as $contact)
	                    		    <div class="todo-item all-todo-list p-3 border-bottom position-relative">
	                    			    <div class="inner-item d-flex align-items-start">
	                    				    <div class="w-100">
		                    				    <div class="checkbox checkbox-info d-flex align-items-start">
												    <div>
													    <div class="content-todo">
														    <h5 class="font-medium font-16 todo-header mb-0" data-todo-header="{{$contact->name}}">{{$contact->name}}</h5>
														    <div class="todo-subtext"
                                                                 data-todosubtext-html="<p>{{$contact->content}}</p>"
															     data-todosubtextText='{"ops":[{"insert":"{{$contact->content}} \n"}]}'>
															            {{$contact->content}}
														    </div>
                                                            <span class="todo-time font-12 text-muted"><i class="fa fa-user" style="margin-right: 5px"></i>{{$contact->email}}</span><br>
                                                            <span class="todo-time font-12 text-muted"><i class="fa fa-phone" style="margin-right: 5px"></i>{{$contact->phone_number}}</span>
                                                        </div>
												    </div>
												    <div class="ml-auto">
													    <div class="dropdown-action">
														    <div class="dropdown todo-action-dropdown">
                                                                <form action="{{route('feedback.destroy',$contact->id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="remove dropdown-item" type="submit"><i class="far fa-trash-alt text-danger mr-1"></i>Remove</button>
                                                                </form>
														    </div>
													    </div>
												    </div>
                                                </div>
                                            </div>
	                    			    </div>
	                    		    </div>
                                @empty
                                @endforelse

	                    	</div>
                        </div>
                    </div>

	                <aside class="customizer">
                        <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
                        <div class="customizer-body">
                            <ul class="nav customizer-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                        aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab"
                                        aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                        aria-controls="pills-contact" aria-selected="false"><i
                                        class="mdi mdi-star-circle font-20"></i></a>
                                </li>
                            </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="p-3 border-bottom">
                                    <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>
                                    <div class="checkbox checkbox-info mt-3">
                                        <input type="checkbox" name="theme-view" class="material-inputs" id="theme-view">
                                        <label for="theme-view"> <span>Dark Theme</span> </label>
                                    </div>
                                    <div class="checkbox checkbox-info mt-2">
                                        <input type="checkbox" class="sidebartoggler material-inputs" name="collapssidebar" id="collapssidebar">
                                        <label for="collapssidebar"> <span>Collapse Sidebar</span> </label>
                                    </div>
                                    <div class="checkbox checkbox-info mt-2">
                                        <input type="checkbox" name="sidebar-position" class="material-inputs" id="sidebar-position">
                                        <label for="sidebar-position"> <span>Fixed Sidebar</span> </label>
                                    </div>
                                    <div class="checkbox checkbox-info mt-2">
                                        <input type="checkbox" name="header-position" class="material-inputs" id="header-position">
                                        <label for="header-position"> <span>Fixed Header</span> </label>
                                    </div>
                                    <div class="checkbox checkbox-info mt-2">
                                        <input type="checkbox" name="boxed-layout" class="material-inputs" id="boxed-layout">
                                        <label for="boxed-layout"> <span>Boxed Layout</span> </label>
                                    </div>
                                </div>
                            <div class="p-3 border-bottom">
                                <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
                                <ul class="theme-color m-0 p-0">
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-logobg="skin1"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-logobg="skin2"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-logobg="skin3"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-logobg="skin4"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-logobg="skin5"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-logobg="skin6"></a></li>
                                </ul>
                            </div>
                            <div class="p-3 border-bottom">
                                <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
                                <ul class="theme-color m-0 p-0">
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-navbarbg="skin1"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-navbarbg="skin2"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-navbarbg="skin3"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-navbarbg="skin4"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-navbarbg="skin5"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-navbarbg="skin6"></a></li>
                                </ul>
                            </div>
                            <div class="p-3 border-bottom">
                                <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                                <ul class="theme-color m-0 p-0">
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-sidebarbg="skin1"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-sidebarbg="skin2"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-sidebarbg="skin3"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-sidebarbg="skin4"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-sidebarbg="skin5"></a></li>
                                    <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                            data-sidebarbg="skin6"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <ul class="mailbox list-style-none mt-3">
                                <li>
                                    <div class="message-center chat-scroll position-relative">
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_1' data-user-id='1'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_2' data-user-id='2'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_3' data-user-id='3'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_4' data-user-id='4'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_5' data-user-id='5'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_6' data-user-id='6'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/6.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_7' data-user-id='7'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/7.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_8' data-user-id='8'>
                                            <span  class="user-img position-relative d-inline-block"> <img src="../assets/images/users/8.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                            <div class="w-75 d-inline-block v-middle pl-2">
                                                <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab 3 -->
                        <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <h6 class="mt-3 mb-3">Activity Timeline</h6>
                            <div class="steamline">
                                <div class="sl-item">
                                    <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                        <div class="desc">you can write anything </div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Send documents to Clark</div>
                                        <div class="desc">Lorem Ipsum is simply </div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="rounded-circle" alt="user"
                                            src="../assets/images/users/2.jpg"> </div>
                                    <div class="sl-right">
                                        <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                        </div>
                                        <div class="desc">Contrary to popular belief</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="rounded-circle" alt="user"
                                            src="../assets/images/users/1.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                                        </div>
                                        <div class="desc">Approve meeting with tiger</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                        <div class="desc">you can write anything </div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                    <div class="sl-right">
                                        <div class="font-medium">Send documents to Clark</div>
                                        <div class="desc">Lorem Ipsum is simply </div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="rounded-circle" alt="user"
                                            src="../assets/images/users/4.jpg"> </div>
                                    <div class="sl-right">
                                        <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                        </div>
                                        <div class="desc">Contrary to popular belief</div>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="rounded-circle" alt="user"
                                            src="../assets/images/users/6.jpg"> </div>
                                    <div class="sl-right">
                                        <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span>
                                        </div>
                                        <div class="desc">Approve meeting with tiger</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab 3 -->
                    </div>
                </div>
            </aside>
            <div class="chat-windows"></div>
@endsection
