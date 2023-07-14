@extends('layouts.web')
@section('title', $service->title ?? "-")
@section('description', $service->meta_description  ?? "-")
@section('canonical', $service->canonical  ?? "-")

@section('content')

<style>
    /* Core CSS */
    .service-section h1 {
        --tw-text-opacity: 1;
        /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
        font-weight: 'semi-bold';
        font-size: 3rem;
        line-height: 3.25rem;
        margin: 1rem 0;
    }
    .service-section h2,h3 {
        --tw-text-opacity: 1;
        /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
        font-size: 2rem;
        line-height: 2rem;
        margin-top: 1rem;
        margin-bottom: 1rem;

    }
    .service-section p{
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .service-section a{
        --tw-text-opacity: 1;
        /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
        font-weight: 700;
    }
    .service-section a:hover{
        --tw-text-opacity: 1;
        /* color: rgb(107 114 128 / var(--tw-text-opacity)); */
    }
    .service-section ul{
        color: #333;
        list-style-type: disc;
    }
    /* Mobile Size CSS */
    .service-section h1 {
        text-align: center;
    }
    .service-section ul{
        margin-left: 1rem;
    }
    /* md and greater screen size */
    @media (min-width: 768px) {
        .service-section h1 {
            text-align: left;
        }
        .service-section ul{
            margin-left: 2.5rem;
        }
    }
    /* sm and greater screen size  screen size */
    /* @media (min-width: 640px) {

    } */

</style>

{{-- <div class="bg-slate-200 px-4 lg:px-20">
    <div class="container mx-auto grid grid-cols-12 py-8 ">
       
        <div class="col-span-12 xl:col-span-9 text-3xl font-bold lg:font-medium lg:text-5xl text-black">
            {{$service->name}}
        </div>

       <div class="hidden xl:block text-black my-auto text-xl"><a href="{{ route('home') }} " class="hover:underline underline-offset-2">Home</a><i class="fa-solid fa-angle-right ml-4 text-sm"></i></div>
       <div class="hidden xl:block col-span-2 text-xl text-black my-auto ">{{ $service->name }}</div>
    </div>
</div>         --}}


<section class="bg-[#1e7a89]">
    <div class="container mx-auto grid grid-cols-12 py-8 px-4 xl:px-10">
        <div class="col-span-12 lg:col-span-7  my-auto mx-auto">
            <div class="relative max-w-screen-xl my-auto mx-auto">
                <div class="relative space-y-4">
                    <div class="  space-y-6">
                        <div class="text-center md:text-left text-3xl font-bold lg:font-medium lg:text-[41px]  lg:leading-[3rem] text-white">
                            Best {{ $service->name }} Help in Dubai to Lay Off the Academic Stress
                        </div>

                        {{-- <p class="text-center md:text-left text-white text-lg">Are your dissertations taking all your time? Want to save your
                            grades with a quality dissertation? Our dissertation experts are here to help you out.
                        </p> --}}

                        <ul class="text-white text-lg space-y-2 ">
                            <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px"
                                    aria-hidden="true"></i> Custom {{ $service->name }} Help</li>
                            <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px"
                                    aria-hidden="true"></i> Bringing You Close to Success</li>
                            <li class="flex flex-row "><i class="fa fa-check-circle text-primary-two" style="font-size:25px"
                                    aria-hidden="true"></i><span class="ml-1"> Quality {{ $service->name }} by Expert Writers</span></li>
                            <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px"
                                    aria-hidden="true"></i><span class="ml-1"> 24/7 Customer Support to Assist Your Queries</span></li>
                        </ul>

                        <div
                            class="mt-6 flex flex-col justify-center lg:justify-start items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                            <a href="javascript:void(Tawk_API.toggle())" class="btn-sec">
                                Live Chat
                            </a>
                            <a href="{{ route('order') }}" class="btn">
                                Order Now
                            </a>
                        </div>

                        <div class="flex flex-col  items-center sm:justify-center lg:justify-start sm:flex-row  md:flex-row lg:flex-row space-x-4 py-2 mt-8">
                                <div class="">
                                    <img src="{{ asset('imgs/reviewsbank.png') }}" alt="UAE Flag" class="mx-auto h-10">
                                    <span
                                        class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none  text-lg  ml-2 text-center">ReviewsBank</span>
                                    <ul class="flex justify-center">
                                        <li class="mr-1">4.9</li>
                                        <li class="my-auto text-yellow-500">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                        viewBox="0 0 172 172" style=" fill:#000000;" class="mx-auto h-10">
                                        <defs>
                                            <linearGradient x1="32.28225" y1="22.79" x2="136.49633" y2="162.20317"
                                                gradientUnits="userSpaceOnUse" id="color-1_8ggStxqyboK5_gr1">
                                                <stop offset="0" stop-color="#18a878"></stop>
                                                <stop offset="1" stop-color="#31dcb9"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                            stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                            text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,172v-172h172v172z" fill="none"></path>
                                            <g fill="url(#color-1_8ggStxqyboK5_gr1)">
                                                <path
                                                    d="M89.27158,18.58317l19.6295,44.032l47.93783,5.06325c3.08525,0.32608 4.32508,4.1495 2.021,6.22425l-35.80825,32.26792l10.00108,47.16025c0.645,3.03508 -2.60867,5.3965 -5.29617,3.8485l-41.75658,-24.09075l-41.75658,24.08717c-2.6875,1.548 -5.93758,-0.81342 -5.29617,-3.8485l10.00108,-47.16025l-35.80825,-32.26792c-2.30408,-2.07475 -1.06067,-5.89817 2.021,-6.22425l47.93783,-5.06325l19.6295,-44.032c1.26133,-2.83083 5.28183,-2.83083 6.54317,0.00358z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span
                                        class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none b text-lg  ml-4">Trustpilot</span>
                                    <ul class="flex justify-center">
                                        <li class="mr-1">4.9</li>
                                        <li class="my-auto text-yellow-500">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="">
                                    <svg class="h-8 mx-auto my-1" id="Layer_1" data-name="Layer 1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 171.54 155.41">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #ef6b25;
                                                }
                        
                                                .cls-2 {
                                                    fill: #fff;
                                                }
                        
                                            </style>
                                        </defs>
                                        <title>Artboard 3ldpi</title>
                                        <path class="cls-1"
                                            d="M140.47,124.23,171.54,155c-2.4.18-3.55.34-4.7.34-30,0-59.89.09-89.84,0-37.71-.13-70.89-29-76.19-66.22a77.83,77.83,0,0,1,153.32-26.6c4.17,21.22,0,40.78-11.9,58.78C141.61,122.25,141.07,123.24,140.47,124.23ZM47.56,114.1c.06,3.42,2.84,5,6.32,3.27,6.63-3.36,13.26-6.74,19.69-10.45,3.15-1.83,5.66-1.65,8.72.09,6.2,3.54,12.53,6.86,18.94,10,1.46.71,4.11,1.11,5,.31,1.16-1,1.71-3.5,1.47-5.2-1-7.18-2.4-14.31-3.7-21.45a7.45,7.45,0,0,1,2.6-7.56c5.42-4.88,10.61-10,15.68-15.25,1.13-1.16,2.19-3.44,1.78-4.72s-2.61-2.56-4.2-2.84C112.27,59,104.6,58.11,97,56.72a7.57,7.57,0,0,1-4.73-3.24c-3.36-6.12-6.14-12.56-9.46-18.71-1.12-2.07-3.23-3.6-4.89-5.38-1.68,1.72-3.84,3.19-5,5.23-3.28,6-6.23,12.2-9.16,18.38-1.12,2.38-2.44,3.66-5.36,4-7.51.79-15,2-22.43,3.34-1.62.28-4,1.48-4.31,2.67-.35,1.49.69,3.82,1.88,5.07,4.73,5,9.57,9.87,14.75,14.35,3.27,2.82,3.93,5.66,3,9.73C49.84,99.35,48.83,106.69,47.56,114.1Z" />
                                        <path class="cls-2"
                                            d="M47.56,114.1c1.27-7.41,2.28-14.75,3.85-22,.88-4.07.22-6.91-3-9.73C43.18,77.91,38.34,73,33.61,68c-1.19-1.25-2.23-3.58-1.88-5.07C32,61.78,34.42,60.58,36,60.3,43.48,59,51,57.75,58.47,57c2.92-.3,4.24-1.58,5.36-4,2.93-6.18,5.88-12.38,9.16-18.38,1.12-2,3.28-3.51,5-5.23,1.66,1.78,3.77,3.31,4.89,5.38,3.32,6.15,6.1,12.59,9.46,18.71A7.57,7.57,0,0,0,97,56.72c7.57,1.39,15.24,2.25,22.83,3.6,1.59.28,3.77,1.54,4.2,2.84s-.65,3.56-1.78,4.72C117.21,73.12,112,78.25,106.6,83.13a7.45,7.45,0,0,0-2.6,7.56c1.3,7.14,2.69,14.27,3.7,21.45.24,1.7-.31,4.17-1.47,5.2-.89.8-3.54.4-5-.31-6.41-3.16-12.74-6.48-18.94-10-3.06-1.74-5.57-1.92-8.72-.09-6.43,3.71-13.06,7.09-19.69,10.45C50.4,119.14,47.62,117.52,47.56,114.1Z" />
                                    </svg>
                                    <span
                                        class="mb-2 sm:mb-0 md:mb-2 lg:mb-0 focus:outline-none b text-lg  ml-4">Sitejabbar</span>
                                    <ul class="flex justify-center">
                                        <li class="mr-1">4.9</li>
                                        <li class="my-auto text-yellow-500">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-yellow-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
            {{-- Calculator --}}
        <div class="col-span-12 lg:col-span-5 xl:col-span-5  md:px-3">
            <div class="mx-auto lg:mx-0 sm:max-w-sm md:max-w-md lg:max-w-lg relative text-white rounded-[2.5rem] ">
                <div class=" text-center ">
                    <span
                        class="relative top-3 md:text-2xl xl:text-3xl text-black text-sm font-medium bg-primary-two p-2 md:p-2 rounded-tl-xl rounded-br-xl px-4 lg:px-16">
                        Calculate <b> Your Price </b>
                    </span>
                </div>
                <div class=" border-4 border-primary-two mx-auto sm:mx-0 rounded-[1rem] p-6 space-y-2">
                    {{-- <input type="hidden" name="paper_type" value=""> --}}
                    <div class="flex flex-col ">
                        <label class="text-primary-two font-semibold">Paper Type</label>
                        <select name="paper_type" class=" form-select">
                            <option hidden="" value="0" disabled="" selected="">Select Paper</option>
                            @foreach ($paper_types as $paper_type)
                                <option {{ old('$paper_type') == $paper_type->id ? 'selected' : '' }}
                                    value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="flex flex-col">
                        <label class="text-primary-two font-semibold">Academic Level</label>
                        <select name="academic_level" id="academic_level" class="get-fare form-select">
                            <option hidden="" value="0" disabled="" selected="">Select Academy</option>
                            @foreach ($academic_levels as $academic_level)
                                <option {{ old('$academic_level') == $academic_level->id ? 'selected' : '' }}
                                    value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-primary-two font-semibold">Number of Pages</label>
                        <select name="number_of_pages" id="no_of_pages" class=" form-select get-fare">
                            <option hidden="" value="0" disabled="" selected="">Number of Pages</option>
                            @for ($i = 1; $i <= 200; $i++)
                                <option  {{ old('number_of_pages') == $i ? 'selected' : '' }} value="{{ $i }}"  >{{ 250 * $i . ' Words ' . ' / ' . $i . ' Pages ' }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-primary-two font-semibold">Deadline</label>
                        <select id="deadline" name="deadline" class="get-fare form-select">
                            <option hidden="" value="0" disabled="" selected="">Deadline</option>
                            @foreach ($deadlines as $deadline)
                                <option {{ old('$deadline') == $deadline->id ? 'selected' : '' }}
                                    value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="form-check">
                        <input
                            class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label inline-block text-primary-two font-semibold"
                            for="flexCheckChecked">
                            Free Plagiarism Report
                        </label>
                    </div> --}}

                    <div
                        class="flex flex-col space-y-4 lg:flex-row lg:space-y-0 lg:space-x-4 justify-center items-center text-black ">
                        <div class="text-white border-2 border-white leading-[44px] rounded-tl-xl rounded-br-xl hover:rounded-none uppercase px-4 ">Total
                            Amount: AED <span id="cost"> 0.00</span></div>
                        <div class="btn "><a href="{{ route('order') }}">Order Now</a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="container mx-auto py-8 px-4">
    <div class="flex flex-col lg:flex-row lg:space-x-8 lg:mx-8 space-y-6 lg:space-y-0">

        <div class="w-full space-y-3 service-section">
            {!! $service->html !!}
            
       
    </div>
</section>
@endsection

@section('scripts')
<script>
    const loading =
        '<svg class="inline-block " width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#ffffff"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
    $("#cost").html(loading)
    $(".get-fare").change(function(e) {
        e.preventDefault();
        var data = {
            "_token": "{{ csrf_token() }}",
            "deadline_id": $('#deadline').val(),
            "academic_level_id": $('#academic_level').val(),
        }
        $.ajax({
            method: 'POST',
            url: '{{ route('get.fare') }}',
            beforeSend: function() {
                // $("#cost-per-page").html("Loading...")


                $("#cost").html(loading)
            },
            complete: function() {
                // $("#loading").removeClass("d-block");
            },
            data: data,
            success: function(res) {
                //  console.log(res);
                // if 1 page is selected
                $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ? 1 : $(
                    "#no_of_pages").val())))
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    });
    </script>
@endsection