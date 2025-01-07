<div>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>






                        <!-- chatbox -->
                        <div class="chatbox">
                            <div class="modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="msg-head">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <span class="chat-icon"><img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg" alt="image title"></span>
                                                    <div class="flex-shrink-0">
                                                        <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png" alt="user img">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h3>{{$user->name }}</h3>
                                                        <p>front end developer</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <ul class="moreoption">
                                                    <li class="navbar nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route("dashboard") }}">Back</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-body">
                                        <div class="msg-body">
                                            <ul>
                                                @foreach ($messages as $message )
                                                    @if ($message["sender"] != auth()->user()->name)
                                                    <li class="sender">
                                                        <p> {{$message["message"]}} </p>
                                                        <span class="time">10:06 am</span>
                                                    </li>
                                                    @else
                                                    <li class="repaly">
                                                        <p> {{$message["message"]}} </p>
                                                        <span class="time">10:20 am</span>
                                                    </li>
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="send-box">
                                        <form wire:submit="sendMessage()">
                                            <input type="text" wire:model="message" class="form-control" aria-label="message…" placeholder="Write message…">

                                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- chatbox -->


                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- char-area -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</div>
