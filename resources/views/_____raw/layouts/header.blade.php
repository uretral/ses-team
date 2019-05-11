<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link href="{{ asset('less/style.css') }}" rel="stylesheet">

    <title></title>
  </head>
  <body >

  <header>
    <div>
      <div class="header">
        <a class="header-call-btn" href="javascript:"></a>
        <div class="header-logo">
          <a href="{{\App\Menu::HOME}}">
            <img src="{{asset('img/logo.png')}}" alt="logo"/>
          </a>
        </div>
        <input type="checkbox" id="topMenuSwitcher"/>
        <label for="topMenuSwitcher">
          <span></span>
          <span></span>
          <span></span>
        </label>
        <div class="header-nav">
          <div class="header-nav-info">
            <a href="javascript:"><span>call: 844-459-4415</span></a>
            <input type="checkbox" id="regionsSwitcher"/>
            <label for="regionsSwitcher"><span>Регионы</span>
            <div class="regions-top">
              <div rel="region"></div>
            </div>
            </label>
            <input  type="checkbox" id="mobileSearchSwitcher"/>
            <label for="mobileSearchSwitcher"><span>Поиск</span>

              <form class="mobile-search-top" action="{{App\Menu::SEARCH}}">
                <label>
                  <input type="search"/>
                </label>
                <button type="submit"><em>Поиск</em></button>
              </form>
            </label>

            <a href="javascript:"><span>customer care</span></a>
            <a href="javascript:"><span>my account</span></a>
          </div>
          <div class="header-nav-main">
            <div class="header-nav-menu">
              <div class="header-nav-menu_top">
                @if(strpos(url()->current(),'business'))
                  <a href="{{\App\Menu::HOME}}">Для дома</a>
                  <a class="active" href="{{\App\Menu::BUSINESS}}">Для бизнеса</a>
                @else
                  <a class="active" href="{{\App\Menu::HOME}}">Для дома</a>
                  <a href="{{\App\Menu::BUSINESS}}">Для бизнеса</a>
                @endif
              </div>
              <div class="header-nav-menu_main">
                <input type="checkbox" id="searchSwitcher"/>
                <label for="searchSwitcher"></label>
                <form class="search-top" action="{{App\Menu::SEARCH}}">
                  <label>
                    <input type="search"/>
                  </label>
                  <button type="submit"><em>Поиск</em></button>
                </form>
                @if(strpos(url()->current(),'business'))
                  @include('layouts.menu_business')
                @else
                  @include('layouts.menu_home')
                @endif
              </div>
            </div>
            <div class="header-nav-callback">
              <a href="javascript:" class="red-callback">Обратный <span>Звонок</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
