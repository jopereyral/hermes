@extends('layouts.app')

@section('body')
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-1/3">
        <h1 class="mb-6 text-center"><span class="font-mono">Hermes</span>
            <svg class="w-10 h-10 align-bottom" enable-background="new 0 0 511.997 511.997" version="1.1" viewBox="0 0 511.997 511.997" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                <path d="m342.51 320.39s21.332 39.663 27.392 70.17c0 0-86.821 13.61-200.94-30.732s-168.96-113-168.96-113c25.068-18.41 67.585-33.264 67.585-33.264l274.92 106.83z" fill="#FF9800" />
                <path d="m0 246.83s9.291 11.625 28.164 28.39c22.56-31.41 64.063-36.165 64.063-36.165l-9.674-19.672-14.967-5.816c-1e-3 -1e-3 -42.518 14.852-67.586 33.263z" fill="#E68900" />
                <path d="m193.16 297.57c91.88 35.702 149.35 22.821 149.35 22.821 29.5-75.918-8.129-161.38-84.047-190.88s-161.38 8.129-190.88 84.047c0 0 33.694 48.306 125.57 84.008z" fill="#FFAD33" />
                <path d="m278.83 139.27c-6.437-3.708-13.235-6.976-20.372-9.75-75.918-29.5-161.38 8.129-190.88 84.047 0 0 7.378 10.577 24.641 25.489 32.888-72.414 110.2-112.33 186.61-99.786z" fill="#E69C2E" />
                <path d="m414.47 303.87c-2.519 48.139-51.513 47.833-94.525 45.583l1.319-25.195 17.74-39.175 62.389 3.265 13.077 15.522z" fill="#E1E4E6" />
                <path d="m343.59 309.35c41.89 2.192 90.99 5.242 93.365-40.165l-11.161-15.111-77.365 3.122-12.6 18.315 7.761 33.839z" fill="#CFD8DC" />
                <path d="m467.25 225.38c-2.219 42.399-35.775 55.135-112.32 51.13l-14.169-25.038 10.967-39.283 92.77 0.551 22.747 12.64z" fill="#E1E4E6" />
                <path d="m360.99 235.38c115.33 4.811 128.92-17.153 130.59-49.246l-8.346-11.145-119.79 13.339-15.142 30.83 12.68 16.222z" fill="#CFD8DC" />
                <path d="m303.84 358.76c-3.535-0.185-7.031-1.533-9.872-4.08-6.593-5.91-7.159-16.039-1.271-22.645 0.617-0.704 36.33-42.075 36.367-105.46 0.015-25.608 9.608-43.073 28.513-51.91 14.998-7.011 33.906-7.548 53.924-8.117 24.615-0.698 52.515-1.491 76.977-14.31 7.858-4.116 17.565-1.086 21.681 6.771 4.118 7.857 1.086 17.565-6.771 21.681-31.039 16.264-64.273 17.208-90.976 17.966-42.819 1.217-51.212 3.576-51.227 27.935-0.046 76.333-42.722 124.82-44.539 126.85-3.372 3.768-8.122 5.568-12.806 5.323z" fill="#ECEFF1" />
            </svg>
        </h1>
        <div class="border-teal p-8 border-t-12 bg-white mb-6 rounded-lg shadow-lg text-center">
            <a href="/login/slack">
                <img alt="Sign in with Slack" height="40" width="172" src="https://platform.slack-edge.com/img/sign_in_with_slack.png" srcset="https://platform.slack-edge.com/img/sign_in_with_slack.png 1x, https://platform.slack-edge.com/img/sign_in_with_slack@2x.png 2x" />
            </a>
        </div>
    </div>
</div>
@endsection
