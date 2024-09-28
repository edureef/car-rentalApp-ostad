@extends('components.PageLayout')
@section('content')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-11 col-lg-7">
            <div class="card">
                <h3 class="card-title my-3 text-center">Contact Us</h3>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your first name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your last name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter your phone number">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Your Message</label>
                            <textarea class="form-control" rows="3" placeholder="write your message"></textarea>
                        </div>

                        <button type="submit" class="btn w-100 btn-primary">Submit Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
