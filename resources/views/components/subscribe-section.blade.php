<section class="subscription bg-white">
    <div class="container" style="max-width: 70%;">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscription-wrapper">
                    <div class="d-flex subscription-content justify-content-between align-items-center flex-column flex-md-row text-center text-md-left">
                        <h3 class="flex-fill">Subscribe <br> to our newsletter</h3>
                        <form action="/newsletter" method="POST" class="row flex-fill">
                            <div class="col-lg-7 my-md-2 my-2">
                                <input type="email" id="email_address" name="email_address" placeholder="Your Email" class="form-control px-4 border-0 w-100 text-center text-md-left">
                            </div>
                            <div class="col-lg-5 my-md-2 my-2">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-lg border-0 w-100">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                    @error('email_address')
                        <div class="w-100 mt-3 text-center text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</section>
