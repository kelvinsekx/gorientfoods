@extends('app')
@section('content')
    
    <div class="container">
    <div class="row">
        <div class="col-lg-9">
        <h1> contact</h1>
    <div>
        <p>Thanks for visiting <strong>distinguished</strong>,</p>
        <p>We love the fact that you visit here, we &rsquo;d love to partner with you. Send us a message now and see how fast we respond and take your matter with the best intentions.</p>
    </div>
    <div class="btn-danger">
        <p>However, if you are a potential distributor, and want to be our distributor the right way,
        Do well to reach us via address, phone or email
        </p>
       
    </div>
        </div>
        <div class="col-lg-7">
         <form>
         <div class="form-group">
                <label for="nameInputEmail1">Your name</label>
                <input type="text" class="form-control" id="nameInputEmail1" placeholder="Name is required">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email is required">
            </div>
            <div class="form-group">
            <label for="yourContent">Content</label>
            <textarea class="form-control" rows="4" id="yourContent" placeholder="Write something beautiful"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
        </div>
</div>
    </div>
    
@endsection