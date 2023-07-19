@extends('layouts.web')
@section('title', "UAE's Best Dissertation Writing Help Service at Cheap Cost")
@section('description','Get the Best Dissertation Writing Services in Dubai on your PhD papers, Our team of qualified writers offering prompt dissertation writing help online')
@section('canonical', config('app.app_url'))

@section('styles')
    <style>
        .g-color {
            background: -webkit-linear-gradient(right, #73c04e, #26ACE2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tabs .active {
            background-color: #fff;
            color: #30b4b5;
        }
    </style>
@endsection

@section('content')
    <section class="bg-[#1e7a89]">
        <div class="container mx-auto grid grid-cols-12 py-8 px-4 xl:px-10">
            <div class="col-span-12 lg:col-span-7  my-auto mx-auto">
                <div class="relative max-w-screen-xl my-auto mx-auto">
                    <div class="relative space-y-4">
                        <div class="  space-y-6">
                            <h1 class="text-center md:text-left text-3xl font-bold lg:font-medium lg:text-[41px]  lg:leading-[3rem] text-white">
                                Best Dissertation Writing Help in Dubai to Lay Off the Academic Stress
                            </h1>

                            <p class="text-center md:text-left text-white text-lg">Are your dissertations taking all your time? Want to save your
                                grades with a quality dissertation? Our dissertation experts are here to help you out.
                            </p>

                            <ul class="text-white text-lg space-y-2 ">
                                <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px"
                                        aria-hidden="true"></i> Custom Dissertation Help</li>
                                <li><i class="fa fa-check-circle text-primary-two " style="font-size:25px"
                                        aria-hidden="true"></i> Bringing You Close to Success</li>
                                <li class="flex flex-row "><i class="fa fa-check-circle text-primary-two" style="font-size:25px"
                                        aria-hidden="true"></i><span class="ml-1"> Quality Dissertation Writing by Expert Writers</span></li>
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

    <!-- Text -->
    <section class=" px-4 lg:px-20">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-x-20 gap-y-6 lg:gap-y-0">
            <div class="bg-primary-two text-center py-6 rounded-br-xl mx-auto lg:mx-0 lg:px-0 shadow-2xl">
                <p class="text-black px-6 font-medium"> If you’re a student, you must know the importance of
                    dissertation for a degree. But writing a quality dissertation is never an easy task. It requires
                    your time, efforts and skills to come with excellent results. And, unfortunately, students are
                    equipped with a dozen of tasks that they hardly get the time to focus on their dissertation. That’s
                    why our dissertation writing UAE aims to help students to get off through the process smoothly. From
                    Master’s to PhD to creating your custom papers, our experts always make sure that you get the best
                    services from our platform. </p>
            </div>
            <div class="bg-primary-two text-center py-6 rounded-br-xl mx-auto lg:mx-0 lg:px-0 shadow-2xl">
                <p class="text-black px-6 font-medium"> Since the dissertation is the final step of your degree so it’s
                    not right to risk it by doing it on your own, especially when you have got a lot to do. That’s why
                    it’s a wise decision to hire professional help in dissertation writing to get quality yet
                    research-driven dissertation. We have PhD writers who fully understand the importance of your
                    dissertation and culminates all points to make your paper grade-winning over others. Even if you
                    need a Master’s dissertation help or any other writing services, our team will always be on the
                    front to help you. </p>
            </div>
        </div>
    </section>

    <!-- Prices -->
    <section class="container mx-auto px-10">
        <p class="text-3xl md:text-5xl text-center font-medium py-6">Our Prices</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 py-4 gap-x-4 gap-y-3 lg:gap-y-0">
            <div class="bg-primary-one text-white text-center py-6 space-y-6 shadow-2xl">
                <div class="space-x-2 font-medium"><sup class="text-lg">AED</sup><span class="text-4xl">40</span><sup
                        class="text-lg">/Per Page</sup></div>
                <hr class="w-1/2 mx-auto">
                <p class="text-3xl font-bold">UNDER GRADUATE</p>
                <div>
                    <a href="{{ route('order') }}" class="btn ">Order Now</a>
                </div>
            </div>

            <div class="bg-primary-one text-white text-center py-6 space-y-6 shadow-2xl">
                <div class="space-x-2 font-medium"><sup class="text-lg">AED</sup><span class="text-4xl">50</span><sup
                        class="text-lg">/Per Page</sup></div>
                <hr class="w-1/2 mx-auto">
                <p class="text-3xl font-bold">MASTERS</p>
                <div>
                    <a href="{{ route('order') }}" class="btn">Order Now</a>
                </div>
            </div>

            <div
                class="md:col-span-2 lg:col-span-1 md:mx-40 lg:mx-0 bg-primary-one text-white text-center py-6 space-y-6 shadow-2xl">
                <div class="space-x-2 font-medium"><sup class="text-lg">AED</sup><span class="text-4xl">60</span><sup
                        class="text-lg">/Per Page</sup></div>
                <hr class="w-1/2 mx-auto">
                <p class="text-3xl font-bold">PHD</p>
                <div>
                    <a href="{{ route('order') }}" class="btn">Order Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How it Work -->
    <section class="container mx-auto px-10">
        <p class="text-3xl md:text-5xl text-center font-medium py-10">How It Works</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8">
            <div class="mx-auto space-y-3">
                <img src="../imgs/1.JPG" class="mx-auto" alt="Dissertation Writing">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60"
                    style="enable-background:new 0 0 60 60;width: 40px;height: auto;" xml:space="preserve">
                    <g>
                        <path d="M30,16c4.411,0,8-3.589,8-8s-3.589-8-8-8s-8,3.589-8,8S25.589,16,30,16z"></path>
                        <path d="M30,44c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,44,30,44z"></path>
                        <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z"></path>
                    </g>
                </svg>
                <div class="text-center bg-[#f06a22] p-4">
                    <p class="text-xl text-white font-bold">Order Placement</>
                    <p class="text-lg text-white ">You can contact us via chat, Whatsapp or simply by filling order
                        form. Share your assignment details with us.</p>
                </div>
            </div>

            <div class="mx-auto space-y-3">
                <img src="../imgs/2.JPG" class="mx-auto" alt="Dissertation Writing">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60"
                    style="enable-background:new 0 0 60 60;width: 40px;height: auto;" xml:space="preserve">
                    <g>
                        <path d="M30,16c4.411,0,8-3.589,8-8s-3.589-8-8-8s-8,3.589-8,8S25.589,16,30,16z"></path>
                        <path d="M30,44c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,44,30,44z"></path>
                        <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z"></path>
                    </g>
                </svg>
                <div class="text-center bg-[#ffc22a] p-4">
                    <p class="text-xl text-white font-bold">Payment</>
                    <p class="text-lg text-white ">We expect every client to do advance payment so our writers can
                        continue with the work stress-free.</p>
                </div>
            </div>

            <div class="mx-auto space-y-3">
                <img src="../imgs/3.JPG" class="mx-auto" alt="Dissertation Writing">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60"
                    style="enable-background:new 0 0 60 60;width: 40px;height: auto;" xml:space="preserve">
                    <g>
                        <path d="M30,16c4.411,0,8-3.589,8-8s-3.589-8-8-8s-8,3.589-8,8S25.589,16,30,16z"></path>
                        <path d="M30,44c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,44,30,44z"></path>
                        <path d="M30,22c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S34.411,22,30,22z"></path>
                    </g>
                </svg>
                <div class="text-center bg-[#00b67a] p-4">
                    <p class="text-xl text-white font-bold">Receive your order on deadline</>
                    <p class="text-lg text-white ">After payment our writers start working on your assignments and
                        deliver as per your deadline.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sample -->
    <section class="container mx-auto px-10">
        <p class="text-3xl md:text-5xl text-center font-medium pt-6 md:py-10">Sample of Our Papers</p>

        <div class="container mx-auto my-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            <div>
                <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                    <h4 class=" text-center font-bold text-2xl md:text-3xl">DISSERTATION</h4>

                    <ul class="my-2 space-y-3 ">
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Title:</span> <strong>Role of leadership</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Discipline:</span> <strong class=" ">Management</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Academic level:</span> <strong class=" ">Master’s</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Pages:</span> <strong class=" ">24</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Format:</span> <strong class=" ">Harvard</strong>
                        </li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3">

                        <a href="{{ asset('storage/uploads/Role-of-leadership-Management-in-Provision-of-QA-in-Food-Companies.pdf') }}" target="__blank"
                            class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}"
                            class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                    <h4 class=" text-center font-bold text-2xl md:text-3xl">DISSERTATION</h4>
                    <ul class="my-2 space-y-3 ">
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Title:</span> <strong>Role of e-business</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Discipline:</span> <strong class=" ">Business Plan</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Academic level:</span> <strong class=" ">Master’s</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Pages:</span> <strong class=" ">9</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Format:</span> <strong class=" ">APA</strong>
                        </li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3">

                        <a href="{{ asset('storage/uploads/Role-of-e-business-in-shaping-consumer-purchasing-behavior.pdf') }}" target="__blank"
                            class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}"
                            class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 md:mx-28 lg:mx-0 lg:col-span-1">
                <div class=" px-9 rounded-tl-xl rounded-br-xl bg-primary-one text-white sm:px-14 md:px-8 py-6 ">
                    <h4 class=" text-center font-bold text-2xl md:text-3xl">DISSERTATION</h4>

                    <ul class="my-2 space-y-3 ">
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Title:</span> <strong>Orthodontic treatment</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Discipline:</span> <strong class=" ">Tourism and Hotel</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Academic level:</span> <strong class=" ">Master’s</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Pages:</span> <strong class=" ">32</strong>
                        </li>
                        <li class="text-[11.75px] sm:text-sm md:text-lg space-x-3 border-b pb-2 border-white border-dashed flex justify-between">
                            <span>Format:</span> <strong class=" ">Harvard</strong>
                        </li>
                    </ul>
                    <div class="flex flex-col items-center py-2 space-y-3 ">


                        <a href="{{ asset('storage/uploads/Orthodontic-treatment.pdf') }}" target="__blank"
                            class="text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-6">
                            Download Sample
                        </a>
                        <a href="{{ route('order') }}"
                            class=" text-black text-center bg-primary-two rounded-tl-xl rounded-br-xl p-2 px-12">
                            Order Now
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="text-center pb-6">
            <a href="{{ route('sample') }}" class="btn-sec bg-primary-one">View all Samples</a>
        </div>

        <h2 class="heading-primary">Why Should You Hire Our Dissertation Writing Services in
            Dubai?</h2>

        <p class="text-primary">When it comes to choosing the best dissertation writing in Dubai, you might be
            confused in between a lot of options. But with us, it’s always a straightforward process. Firstly, our order
            process is simple, we don’t make you lost in the whims and fancies of the website. Secondly, we have kept
            our service charges super affordable for students. Whether you want a doctoral dissertation writing
            assistance or nursing dissertation help, we won’t burden you with heavy charges. And last, we always give
            what we claim i.e. quality services. Even if you hire us in an emergency deadline, you will never find the
            quality missing from our services.</p>

        <p class="text-primary">If you’re a student and looking for dissertation help in Dubai, Abu Dhabi, Sharjah,
            Ajman, Fujairah, Al Ain or Ras Al-Khaimah, then know that we’re available on a few clicks. Or simply, if you
            want UAE writers to work on your dissertation then also we’re here to facilitate you.</p>

        <h3 class="heading-primary">Get Your Dissertation Done by the Best Dissertation Writers
            in UAE</h3>

        <p class="text-primary">We have experienced and proficient writers who work on your dissertation from
            scratch. They search accurate evidence and mention it with proper facts and figures to make your
            dissertation authentic and unique. If you want us for your dissertation proposal writing help or a
            comprehensive dissertation then we’re only a few clicks away. Here’s how our writers structure your
            dissertation.</p>
    </section>

    <section class="bg-primary-one my-4">
        <div class="container grid grid-cols-1 md:grid-cols-3 px-10 py-8 gap-x-6 gap-y-2 mx-auto">
            <div>
                <ul class="text-white text-lg space-y-2">
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        <span class="ml-1">Relevant Topic Selection</span></li>
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                       <span class="ml-1">Thorough research on the topic</span></li>
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                       <span class="ml-1">Introduction</span></li>
                </ul>
            </div>
            <div>
                <ul class="text-white text-lg space-y-2">
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        <span class="ml-1">Dissertation literature review</span></li>
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        <span class="ml-1">Writing a dissertation hypothesis</span></li>
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        <span class="ml-1">Methodology</span></li>
                </ul>
            </div>
            <div>
                <ul class="text-white text-lg space-y-2">
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        <span class="ml-1">Data Analysis (software or Qualitative)</span></li>
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        <span class="ml-1">Conclusion</span></li>
                    <li class="flex"><i class="fa fa-check-circle text-primary-two " style="font-size:25px" aria-hidden="true"></i>
                        <span class="ml-1">Recommendations</span></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Free Features -->
    <section class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 ">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.667 490.667"
                    style="enable-background:new 0 0 490.667 490.667;width: 75%;height: auto;" xml:space="preserve"
                    width="512px" height="512px" class="">
                    <g>
                        <g>
                            <path style="fill:#455A64"
                                d="M96,224c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571   L195.115,99.115c4.237-4.092,10.99-3.975,15.083,0.262c3.992,4.134,3.992,10.687,0,14.82L103.531,220.864   C101.535,222.866,98.827,223.994,96,224z"
                                data-original="#455A64" class=""></path>
                            <path style="fill:#455A64"
                                d="M394.667,224c-2.831,0.005-5.548-1.115-7.552-3.115L280.448,114.219   c-4.092-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l106.667,106.667c4.159,4.172,4.149,10.926-0.024,15.085   C400.18,222.875,397.482,223.994,394.667,224z"
                                data-original="#455A64" class=""></path>
                        </g>
                        <path style="fill:#F06A22"
                            d="M53.333,202.667h384c29.455,0,53.333,23.878,53.333,53.333v128c0,29.455-23.878,53.333-53.333,53.333  h-384C23.878,437.333,0,413.455,0,384V256C0,226.545,23.878,202.667,53.333,202.667z"
                            data-original="#4CAF50" class="active-path" data-old_color="#4CAF50"></path>
                        <g>
                            <path style="fill:#FAFAFA;"
                                d="M53.333,394.667c-5.891,0-10.667-4.776-10.667-10.667V256c0-5.891,4.776-10.667,10.667-10.667h64   c5.891,0,10.667,4.776,10.667,10.667c0,5.891-4.776,10.667-10.667,10.667H64V384C64,389.891,59.224,394.667,53.333,394.667z"
                                data-original="#FAFAFA" class=""></path>
                            <path style="fill:#FAFAFA;"
                                d="M96,330.667H53.333c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667H96   c5.891,0,10.667,4.776,10.667,10.667C106.667,325.891,101.891,330.667,96,330.667z"
                                data-original="#FAFAFA" class=""></path>
                            <path style="fill:#FAFAFA;"
                                d="M224,394.667c-2.831,0.005-5.548-1.115-7.552-3.115l-45.781-45.803V384   c0,5.891-4.776,10.667-10.667,10.667s-10.667-4.776-10.667-10.667V256c0-5.891,4.776-10.667,10.667-10.667h32   c23.564,0,42.667,19.103,42.667,42.667S215.564,330.667,192,330.667h-6.251l45.781,45.781c4.171,4.16,4.179,10.914,0.019,15.085   C229.549,393.539,226.833,394.666,224,394.667z M170.667,309.333H192c11.782,0,21.333-9.551,21.333-21.333   c0-11.782-9.551-21.333-21.333-21.333h-21.333V309.333z"
                                data-original="#FAFAFA" class=""></path>
                            <path style="fill:#FAFAFA;"
                                d="M330.667,394.667h-64c-5.891,0-10.667-4.776-10.667-10.667V256c0-5.891,4.776-10.667,10.667-10.667   h64c5.891,0,10.667,4.776,10.667,10.667c0,5.891-4.776,10.667-10.667,10.667h-53.333v106.667h53.333   c5.891,0,10.667,4.776,10.667,10.667C341.333,389.891,336.558,394.667,330.667,394.667z"
                                data-original="#FAFAFA" class=""></path>
                            <path style="fill:#FAFAFA;"
                                d="M309.333,330.667h-42.667c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667   h42.667c5.891,0,10.667,4.776,10.667,10.667C320,325.891,315.224,330.667,309.333,330.667z"
                                data-original="#FAFAFA" class=""></path>
                            <path style="fill:#FAFAFA;"
                                d="M437.333,394.667h-64c-5.891,0-10.667-4.776-10.667-10.667V256c0-5.891,4.776-10.667,10.667-10.667   h64c5.891,0,10.667,4.776,10.667,10.667c0,5.891-4.776,10.667-10.667,10.667H384v106.667h53.333   c5.891,0,10.667,4.776,10.667,10.667C448,389.891,443.224,394.667,437.333,394.667z"
                                data-original="#FAFAFA" class=""></path>
                            <path style="fill:#FAFAFA;"
                                d="M416,330.667h-42.667c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667H416   c5.891,0,10.667,4.776,10.667,10.667C426.667,325.891,421.891,330.667,416,330.667z"
                                data-original="#FAFAFA" class=""></path>
                        </g>
                        <path style="fill:#607D8B"
                            d="M245.333,160C215.878,160,192,136.122,192,106.667s23.878-53.333,53.333-53.333  s53.333,23.878,53.333,53.333S274.789,160,245.333,160z"
                            data-original="#607D8B" class="" data-old_color="#607D8B"></path>
                    </g>
                </svg>
            </div>

            <div class="w-[90%] mx-auto mt-8 rounded-tl-3xl rounded-br-3xl bg-primary-one px-6 sm:px-14 md:px-8 py-2 ">
                <h4 class="text-white text-4xl font-semibold py-2 text-center">Free Features</h4>

                <ul class="my-3 space-y-3 ">

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Plagiarism Report</p>
                        <span class="text-center  ">for <span class="line-through text-black font-bold"> <span class="font-bold text-white"> AED 12</span></span></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Formatting</p>
                        <span class="text-center  ">for <span class="line-through text-black font-bold"> <span class="font-bold text-white"> AED 6</span></span></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Title page</p>
                        <span class="text-center  ">for <span class="line-through text-black font-bold"> <span class="font-bold text-white"> AED 3</span></span></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Bibliography</p>
                        <span class="text-center  ">for <span class="line-through text-black font-bold"> <span class="font-bold text-white"> AED 9</span></span></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Outline</p>
                        <span class="text-center  ">for <span class="line-through text-black font-bold"> <span class="font-bold text-white"> AED 3</span></span></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <span class="w-[38%]">Limitless Amendments</span>
                        <span class="text-center  ">for <span class="line-through text-black font-bold"> <span class="font-bold text-white"> AED 18</span></span></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                </ul>

                <h4 class="text-white text-3xl font-semibold py-2 text-center">Get all these features for</h4>

                <div class="grid grid-cols-2 w-3/5 mx-auto">
                    <div class="mx-auto">
                        <span class="font-bold text-xl text-black line-through"><span class=" " style="color:white">AED 51</span></span>
                    </div>
                    <div class="mx-auto">
                        <span class="font-semibold text-xl text-white">FREE</span>
                    </div>
                </div>

                <div class="flex justify-center items-center mt-4 pb-4">
                    <a href="{{ route('order') }}" class="btn">
                        Order Now
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Tabs -->
    <section class="bg-primary-one px-4 lg:px-20 my-8">

        <p class="text-white text-center text-2xl lg:text-3xl py-10">
            Let’s Hear <b>Our Stories</b> from Our Clients
        </p>

        <div class="">
            <nav class="tabs flex flex-col sm:flex-row justify-center space-x-4 ">
                <button data-target="panel-1"
                    class="tab active text-white py-4 px-6 block rounded-3xl hover:bg-primary-two hover:text-black focus:outline-none font-medium ">
                    Ajman University Student
                </button>
                <button data-target="panel-2"
                    class="tab text-white py-4 px-6 block rounded-3xl hover:bg-primary-two hover:text-black focus:outline-none font-medium ">
                    UAE University Student
                </button>
                <button data-target="panel-3"
                    class="tab text-white py-4 px-6 block rounded-3xl hover:bg-primary-two hover:text-black focus:outline-none font-medium ">
                    Al Ghurair University Student
                </button>
                <button data-target="panel-4"
                    class="tab text-white py-4 px-6 block rounded-3xl hover:bg-primary-two hover:text-black focus:outline-none font-medium ">
                    Zayed University Student
                </button>
            </nav>
        </div>

        <div id="panels" class="px-4 lg:px-24 py-10">

            <div class="panel-1 tab-content active py-5 px-3 md:px-16 text-center bg-white rounded-3xl">
                <p class="text-primary-one font-semibold text-lg"> I choose dissertation help because of their quick response and
                    attentive customer support. </p>
            </div>
            <div class="panel-2 tab-content py-5 px-3 md:px-16 text-center bg-white rounded-3xl">
                <p class="text-primary-one font-semibold text-lg"> They really met my deadlines, just 3 days and 9000 words. Keep
                    it up. </p>
            </div>
            <div class="panel-3 tab-content py-5 px-3 md:px-16 text-center bg-white rounded-3xl">
                <p class="text-primary-one font-semibold text-lg"> Thanks to dissertation help for working on my proposal, it was
                    really authentic and plagiarism free content.</p>
            </div>
            <div class="panel-4 tab-content py-5 px-3 md:px-16 text-center bg-white rounded-3xl">
                <p class="text-primary-one font-semibold text-lg"> Thank you dissertation help for helping me get through this
                    academic journey.</p>
            </div>
        </div>

    </section>

    <section class="container px-10 mx-auto pb-8">
        <p class="text-primary">
            Moreover, our dissertation writers are also spread over Gulf countries, like, Qatar and Saudi Arabia. So,
            let your complex pieces of research writing and sequential stages be written by our expert gulf dissertation
            writers. Not only this, if you want us to revise your already written dissertation and fine-tune it to the
            requirements, you can ask us without any hesitation. Just fill in the order form or ping us on our live chat
            to get help from our best dissertation writers in UAE.
        </p>

        <h3 class="heading-primary">
            We Also Provide Gulf Dissertation Writing Help Online
        </h3>

        <p class="text-primary">
            The importance of quality dissertation in the gulf region is as important as in other countries. Being an
            academic writing services provider, we can’t ignore the demand for gulf dissertation from the students. So,
            if you’re from Bahrain, Qatar, Kuwait, Saudi Arabia or any other Gulf country and looking forward to
            reliable dissertation writing service, then we’re here to take you out of your worries. We write every paper
            from scratch according to your requirements to make you a shining armour in the crowd.
        </p>

        <p class="text-primary">
            Now, if you search for the best dissertation writing service near me and find us in the recommendations,
            rush to hire us because we won’t let you regret your decision ever. By handling more than a hundred
            dissertations on various topics, we have gained the trust of our customers who keep coming to us in the
            times of need. And that’s what keeps us going. Check our dissertation writing service review to gain your
            complete satisfaction.
        </p>

        <p class="text-primary">
            And the best part of our services is the 24/7 customer support who are ready to assist you even in the late
            hours. From PhD dissertation writing help to editing and proofreading your dissertation, our gulf writers
            are always a step ahead to rise above your expectations. Opt for our online dissertation writing, UAE and
            Gulf to meet your academic needs with perfection.
        </p>

        <p class="text-primary">
            Even if you don’t want a complete dissertation and need our help in writing dissertation hypothesis only, we
            will be quick in providing you complete assistance.
        </p>

        <h3 class="heading-primary">
            Our Quality Help in Dissertation Writing is Only a Few Clicks Away
        </h3>

        <p class="text-primary">
            We offer our dissertation help not only in UAE but also the gulf regions so we can help maximum students to
            get off with the final phase smoothly. One of the main reasons is that we don’t want students to suffer in
            their PhD writing Dubai as it’s a complex process. Secondly, writing a dissertation requires an expert level
            skillset and research-driven attitude to make the paper outstanding.
        </p>

        <p class="text-primary">
            The best part of hiring is that we have access to a huge library of information and niche experts who are
            masters in their crafts. And when our best dissertation writers in Dubai write your paper there are no
            chances of failing because we have a track record of success in our 5 years of experience.
        </p>

        <p class="text-primary">
            Therefore, if you are in search of dissertation writing services Reddit or best dissertation help near me,
            know that we offer hundred percent value-driven dissertation to our customers.
        </p>

        <p class="text-primary">
            So, no more worries and no more fear of missing out because leading dissertation writing services in UAE is
            right here to help you out. Try us with a sample and become our customer for a lifetime. That’s our
            guarantee!
        </p>
    </section>


@endsection
@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="{{ asset('js/jquery.countup.js') }}"></script> --}}
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

        // $('.counter').countUp({
        //     'time': 2000,
        //     'delay': 10
        // });

        // $('.countertwo').countUp({
        //     'time': 4000,
        //     'delay': 10
        // });

        // $('.counterthree').countUp({
        //     'time': 2500,
        //     'delay': 10
        // });


        const tabs = document.querySelectorAll(".tabs");
        const tab = document.querySelectorAll(".tab");
        const panel = document.querySelectorAll(".tab-content");

        function onTabClick(event) {

            // deactivate existing active tabs and panel

            for (let i = 0; i < tab.length; i++) {
                tab[i].classList.remove("active");
            }

            for (let i = 0; i < panel.length; i++) {
                panel[i].classList.remove("active");
            }


            // activate new tabs and panel
            event.target.classList.add('active');
            let classString = event.target.getAttribute('data-target');
            // console.log(classString);
            document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
        }

        for (let i = 0; i < tab.length; i++) {
            tab[i].addEventListener('click', onTabClick, false);
        }

    </script>
@endsection
