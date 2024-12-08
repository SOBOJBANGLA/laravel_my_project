@extends('frontend.layouts.app')

@section('title','Profile_setting')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <div class="candidate-cover">
                        <div class="profile-banner relative text-transparent">
                            <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
                            <div class="relative shrink-0">
                                <img src="images/hero/bg5.jpg" class="rounded shadow" id="profile-banner" alt="">
                                <label class="profile-image-label" for="pro-banner"></label>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data">
                        
                        
                        @csrf
                        
                    <div class="candidate-profile d-flex align-items-end mx-2">
                        <div class="profile-pic">
                            <input id="pro-img" name="photo" type="file" class="d-none"/>
                            <div class="position-relative d-inline-block">
                                @php 
                                $candidateDetail = Auth::guard()->user()->candidateDetails->first();
                                @endphp
                                @if ($candidateDetail)
                                <img src="{{ asset($candidateDetail->image) }}" class="avatar avatar-medium img-thumbnail rounded-pill shadow-sm" id="profile-image" alt="">
                                @else
                                <img src="{{ asset('images/nophoto.jpg') }}" class="avatar avatar-medium img-thumbnail rounded-pill shadow-sm" id="profile-image" alt="">
                                @endif
                                <label class="icons position-absolute bottom-0 end-0" for="pro-img"><span class="btn btn-icon btn-sm btn-pills btn-primary"><i data-feather="camera" class="icons"></i></span></label>
                            </div>
                        </div>

                        <div class="ms-2">
                            <h5 class="mb-0">{{Auth()->guard()->user()->name}}</h5>
                            <p class="text-muted mb-0">Web Designer</p>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rounded shadow p-4">
                    
                        <h5>Edit Personal Detail :</h5>
                        <div class="row mt-4">
                            {{-- <div class="col-md-6">
                                <div class="mb-3"> --}}
                                    {{-- <label class="form-label fw-semibold">First Name:<span class="text-danger">*</span></label> --}}
                                    <input name="user_id" value="{{Auth()->guard()->user()->id}}" id="firstname" type="hidden" class="form-control" placeholder="First Name :">
                                {{-- </div>
                            </div> --}}

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">First Name:<span class="text-danger">*</span></label>
                                    <input name="fname"  value="{{ $candidate->f_name }}" id="firstname" type="text" class="form-control" placeholder="First Name :">
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Last Name:<span class="text-danger">*</span></label>
                                    <input name="lname" value="" id="lastname" type="text" class="form-control" placeholder="Last Name :">
                                </div>
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Email:<span class="text-danger">*</span></label>
                                    <input name="email" id="email2" value="{{Auth()->guard()->user()->email}}" type="email" class="form-control" placeholder="Your email :">
                                </div> 
                            </div><!--end col-->

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Occupation:</label>
                                    <select class="form-control form-select" name="occupation" id="Type">
                                        <option value="WD">Web Designer</option>
                                        <option value="WD">Web Developer</option>
                                        <option value="UI">UI / UX Desinger</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Phone No. :</label>
                                    <input id="number" name="phone" value="" type="text" class="form-control" placeholder="Phone :">
                                </div>
                            </div><!--end col-->

                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label fw-semibold">Upload Your Cv / Resume :</label>
                                    <input class="form-control" type="file" name="pdf" id="formFile">
                                </div>                                                                               
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Address :</label>
                                    <textarea name="address" id="comments2" rows="4" class="form-control" placeholder="Address"></textarea>
                                </div>
                            </div><!--end col-->


                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Introduction :</label>
                                    <textarea name="about" id="comments2" rows="4" class="form-control" placeholder="Introduction :"></textarea>
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <button type="submit" class="submitBnt btn btn-primary">Save Changes</button>
                               
                            </div><!--end col-->
                        </div>
                    </form>
                </div>

                <div class="rounded shadow p-4 mt-4">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mt-4 pt-2">
                                <h5>Contact Info :</h5>

                                <form>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Phone No. :</label>
                                                <input name="number" id="number" type="number" class="form-control" placeholder="Phone :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Website :</label>
                                                <input name="url" id="url" type="url" class="form-control" placeholder="Url :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Add</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end col-->
                            
                            <div class="col-md-6 mt-4 pt-2"> 
                                <h5>Change password :</h5>
                                <form>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Old password :</label>
                                                <input type="password" class="form-control" placeholder="Old password" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">New password :</label>
                                                <input type="password" class="form-control" placeholder="New password" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Re-type New password :</label>
                                                <input type="password" class="form-control" placeholder="Re-type New password" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Save password</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end col-->
                        </div>
                    </form>
                </div>

                <div class="rounded shadow p-4 mt-4">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Account Notifications :</h5>

                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">When someone mentions me</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="noti1">
                                        <label class="form-check-label" for="noti1"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">When someone follows me</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" checked id="noti2">
                                        <label class="form-check-label" for="noti2"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">When shares my activity</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="noti3">
                                        <label class="form-check-label" for="noti3"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">When someone messages me</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="noti4">
                                        <label class="form-check-label" for="noti4"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <h5>Marketing Notifications :</h5>

                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">There is a sale or promotion</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="noti5">
                                        <label class="form-check-label" for="noti5"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">Company news</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="noti6">
                                        <label class="form-check-label" for="noti6"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">Weekly jobs</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" checked id="noti7">
                                        <label class="form-check-label" for="noti7"></label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-4">
                                    <h6 class="mb-0">Unsubscribe News</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" checked id="noti8">
                                        <label class="form-check-label" for="noti8"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="rounded shadow p-4 mt-4">
                    <form>
                        <h5 class="text-danger">Delete Account :</h5>
                        <div class="row mt-4">
                            <h6 class="mb-0">Do you want to delete the account? Please press below "Delete" button</h6>
                            <div class="mt-4">
                                <button class="btn btn-danger">Delete Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection