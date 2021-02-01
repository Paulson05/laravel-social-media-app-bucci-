
@extends('templates.default')

@section('content')
  

    <div class="container" style="margin-top: 200px;">
        <form action="{{ route('postemail') }}" method="POST">
           @csrf
              <input type="text" name="email" id="" placeholder="type your email">
               <div class="">
                   @if($errors->has('email'))
                       {{ $errors->first() }}
                   @endif
               </div>
              <button type="submit">submit</button>
       </form>
   </div>
</header>
@endsection