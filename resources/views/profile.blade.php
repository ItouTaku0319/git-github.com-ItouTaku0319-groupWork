

@extends('layouts.base')
@section('title','ログインページ')

@section('header')
<!--  -->
<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-gray-500 text-sm py-4 dark:bg-white">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
      <div class="flex items-center justify-between">
        
        
        <div class="sm:hidden">
          
            <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border border-gray-700 font-medium bg-gray-800 text-gray-400 shadow-sm align-middle hover:bg-gray-700/[.25] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-collapse="#navbar-dark" aria-controls="navbar-dark" aria-label="Toggle navigation">
                <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
                <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
              </button>
            </div>
          </div>
          <div id="navbar-dark" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
              <a class="font-medium text-blue-500" href="#" aria-current="page">Landing</a>
              <a class="font-medium text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400" href="#">Account</a>
              <a class="font-medium text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400" href="#">Work</a>
              <a class="font-medium text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400" href="#">Blog</a>
            </div>
          </div>
        </nav>

  </header>
  
@endsection

@section('main')
<!-- プロフィール画面 -->
{{-- デパートメントidが1ならシステム部社員 --}}
{{-- そうでないなら一般社員 --}}
@if(\Illuminate\Support\Facades\Auth::user()->department_id === 1)
    <p class="text-3xl">あなたは{{ \Illuminate\Support\Facades\Auth::user()->department_name }}です</p>
    
    <br>
    <a href="{{ route('bookRegister') }}">書籍登録へ</a>
    <a href="{{ route('bookErase' )}}">書籍削除へ</a>
@else
    あなたは{{ \Illuminate\Support\Facades\Auth::user()->department_name }}です
@endif
<br>
{{\Illuminate\Support\Facades\Auth::user()->name}}でログインしています。

<form action="{{ route('user.logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
</form>
<a href=""></a>
<a href="{{ route('bookIndex') }}">書籍一覧表示</a>



@endsection