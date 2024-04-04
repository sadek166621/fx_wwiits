@extends('frontend.master2')
@section('content')

    <!-- Header Start -->
    <header class="hero-area gradient-bg position-relative">
        <div class="section-overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-md-10 col-lg-10 mx-auto">
                        <div
                            class="d-flex text-center text-light flex-column justify-content-center align-items-center mb-5">
                            <h1 class="fw-bold mb-2">Guru Digital IT <br> E-Learning & Earning Platfrom</h1>
                            <p class="fw-medium text-light">The main objective of this set up is how to use online
                                social media in our
                                society.</p>
                        </div>

                        <div class="hero-btns mb-4 row gy-4">
                            <div class=" bg-white text-black col-12 py-2">
                                <h3 class="text-center">Help-Line</h3>

                                <div class="d-flex align-items-center justify-content-center p-2 my-1"
                                    style="background-color: RGB(40, 167, 69, .3)">
                                    <div class="mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg>
                                    </div>
                                    <div class="mx-2">
                                        <p class='text-dark'>Any kind of problem join here for solution</p>
                                    </div>
                                    <a href="https://wa.me/01745457430" class="p-2 bg-primary rounded text-white border-white">Telegram <i
                                            data-feather="support"></i></a>
                                </div>
                            </div>

                            <div class="bg-white text-black p-2 py-4 col-12">

                                <div class="d-flex flex-column my-3 mx-4">
                                    <h3>Instractor Name: {{ Session::get('SubadminName') }}</h3>
                                    <br>
                                    <h4>Class Schedule</h4>
                                    <div class="d-flex ms-auto">

                                        <!-- Add Button Start -->
                                        <div class="me-2">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">
                                                Add <i class="fa-regular fa-square-plus"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Class Schedule</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3" action="{{ route('add.schedule') }}" method="post">
                                                                @csrf

                                                                <div class="col-12">
                                                                    <label for="name" class="form-label">Course
                                                                        Name</label>
                                                                        <select class="form-control" name="department_id" id="department_id" required>
                                                                            <option value="">--Select Course--</option>
                                                                            @foreach ($departments as $department)
                                                                              @isset($teacher)
                                                                                <option value="{{ $department->id }}" @if($teacher->department_id == $department->id) selected @endif>{{ $department->name }}</option>
                                                                              @else
                                                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                                                              @endisset
                                                                            @endforeach
                                                                          </select>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="name" class="form-label">Class
                                                                        Topic</label>
                                                                    <input type="text" name="tropic" class="form-control" id="name"
                                                                        placeholder="Class Topic">
                                                                </div>


                                                                <div class="col-12">
                                                                    <label for="datepicker"
                                                                        class="form-label">Date</label>
                                                                    <input type="date" name="date" class="form-control" id="date">
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="Date" class="form-label">Starting Time</label>
                                                                    <input type="time" name="time" class="form-control" id="time">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="Date" class="form-label">Finishing Time</label>
                                                                    <input type="time" name="finishing_time" class="form-control" id="time">
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="link" class="form-label">Join
                                                                        Link</label>
                                                                    <input type="link" name="link" class="form-control" id="link">
                                                                    <input type="hidden" value="{{ Session::get('SubadminId') }}" name="teacher_id">
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="gridCheck" required>
                                                                        <label class="form-check-label" for="gridCheck">
                                                                            Confirm
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 ">
                                                                    <button type="submit"
                                                                        class="btn btn-primary ">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Button End -->

                                        <!-- Edit Button Start -->
                                        <div class="me-2">


                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Class Schedule</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="row g-3">
                                                                <div class="coi-12">
                                                                    <label for="name" class="form-label">Class
                                                                        Topic</label>
                                                                    <input type="text" class="form-control" id="name"
                                                                        placeholder="Class Topic">
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="datepicker"
                                                                        class="form-label">Date</label>
                                                                    <input type="date" class="form-control" id="date">
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="Date" class="form-label">Staring Time</label>
                                                                    <input type="time" class="form-control" id="time">
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="Date" class="form-label">finishing Time</label>
                                                                    <input type="time" class="form-control" id="time">
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="link" class="form-label">Join
                                                                        Link</label>
                                                                    <input type="link" class="form-control" id="link">
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="gridCheck">
                                                                        <label class="form-check-label" for="gridCheck">
                                                                            Confirm
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 ">
                                                                    <button type="submit"
                                                                        class="btn btn-primary ">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Button End -->

                                    </div>
                                </div>
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                @if (count($subadmin) > 0)
                                @foreach ($subadmin as $schedule )
                                <div class="row border border-black p-2 mx-4 my-2 align-items-center">


                                    <div class="col-6">
                                        Class Topic: {{ $schedule->tropic }} <br>
                                        Date : {{ $schedule->date }} <br>
                                        Joining Time:{{ $schedule->time }}-{{ $schedule->finishing_time }}
                                    </div>
                                    <div class="col-5">
                                        <a href="{{ $schedule->link }}" target="_blank"
                                            class="theme-btn bg-black text-white border-white col-12">Join Meeting <i
                                                data-feather="arrow-right"></i></a>
                                    </div>
                                    <div class="col-1">

                                            <a  href="{{ route('subadmin-schedule-delete',$schedule->id) }}" class="mt-2 text-dark"><i class="fa-regular fa-trash-can"></i></a>


                                    </div>



                                </div>
                                @endforeach
                                @else

                                <div class="row border border-black p-2 mx-4 my-2 align-items-center">

                                    <div class="" style="text-align: center">
                                        <a href="#" target="_blank"
                                            class="theme-btn bg-black text-white border-white col-12">No Schedule Added<i
                                                data-feather="arrow-right"></i></a>
                                    </div>

                                </div>
                                @endif
                            </div>

                            <div class="bg-white text-black p-2 py-4 col-12">
                                <h3 class="text-center my-2">GuruDigital IT Support</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg>
                                    </div>
                                    <div class="mx-2">
                                        <p>Any kind of problem join here for solution</p>
                                    </div>
                                    <a href="https://wa.me/01745457430" class="p-2 bg-black text-white border-white rounded">Whatsapp <i
                                            data-feather="support"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Main Content End-->

    @endsection
