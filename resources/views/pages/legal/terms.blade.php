@extends('layouts.web')
@section('title', 'Terms And Conditions')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container mx-auto" style="min-height:250px">
   <div class="mx-4"> 
    <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl">
        <p class="my-4">We want our customers to go through the following terms and conditions before asking for our services,</p>
       
        <ul style="list-style-type: disc;"  class="mx-4">
            <li class="my-2"><p>We offer the assignment writing services related to all the topics, areas and fields. Moreover, we take full payment in advance and assure that work is delivered on time.</p></li>
            <li class="my-2"><p>In cases of lengthy assignments or dissertation payments are taken in advance with the sections. For example, first customer pays for Chapter#1, and so on.</p></li>
            <li class="my-2"><p>We offer different methods of payments seeing the customer convenience, however, payment on time is requested to start with the work and deliver on time.</p></li>

        </ul>

      
    </div>
   </div> 
</section>

@endsection