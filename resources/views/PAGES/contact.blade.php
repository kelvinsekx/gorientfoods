@extends('app')
@section('content')
    
    <div class="container">
    <div class="row">
        <div class="col-lg-9">
        <h1 class="ctu_H1"> Contact Us </h1>
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
         <form action="/post">
            <div>
                <label for="nameInput">Your name</label>
                <input 
                type="text" 
                class="form-control" 
                id="nameInput" 
                placeholder="Name is required"
                required>
            </div>
            <div>
                <label for="EmailInput">Email address</label>
                <input
                type="email" 
                class="form-control" 
                id="EmailInput" 
                placeholder="Email is required"
                required >
            </div>

            <div>
                <label for="yourContent">Content</label>
                <textarea 
                class="form-control" 
                rows="4" id="yourContent" 
                placeholder="Write something beautiful"
                required></textarea>
            </div>
            
            <input 
            type="submit"
            value="Submit for processing"
            >
         </form>
        </div>
</div>
    </div>
    
@endsection