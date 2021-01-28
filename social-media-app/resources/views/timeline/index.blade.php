@extends('templates.default')

@section('content')
   <section class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6">
               
                <form action="" method= "POST">
                    @csrf
                   
                    <div class="form-group">
                       
                        <textarea class="form-control" name="status" id="" rows="2" placeholder="whats up onyebuchi"></textarea>
                   
                  </div>
                    
                    <button type="submit" class="btn btn-primary" style="color: white">Update status</button>
                    </form> 
            </div>
        </div>
       </div>
   </section>
@endsection