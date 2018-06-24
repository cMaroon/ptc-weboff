@php
$path = storage_path() . "/navigation.json"; // ie: /var/www/laravel/app/storage/json/filename.json
$links = json_decode(file_get_contents($path), true); 
@endphp

<div class="visible-xs no-print">
    <nav class="navbar-mobile navbar navbar-default">
        <div class="container">
            <div class="navbar-header navbar-mobile__header">
                <div class="navbar-mobile__header-section">
                    <span class="navbar-mobile__brand navbar-brand u-ellipsis-overflow">{{ $title }}</span>
                </div>
                <div class="navbar-mobile__header-section navbar-mobile__header-section--buttons">
                    <button class="navbar-toggle navbar-mobile__toggle" type="button" data-toggle="collapse" data-target="#xs-navbar" aria-controls="xs-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-mobile__toggle-icon">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse navbar-mobile__menu" id="xs-navbar">
            <ul class="nav navbar-nav navbar-mobile__menu-items">
                @foreach ($links['navigation'] as $link)
                    <li class="navbar-mobile-item dropdown">
                        <a data-toggle="dropdown" class="navbar-mobile-item__main dropdown-toggle" href="{{ route($link['url']) }}">
                            <span class="navbar-mobile-item__icon navbar-mobile-item__icon--main navbar-mobile-item__icon--closed">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                
                            <span class="navbar-mobile-item__icon navbar-mobile-item__icon--main navbar-mobile-item__icon--opened">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                            {{ $link['name'] }}
                        </a>
                
                        <ul class="dropdown-menu" role="menu" aria-labelledby="expand-{{ $link['name'] }}">
                            <li>
                                <a class="navbar-mobile-item__submenu" href="{{ route($link['url']) }}" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                    <span class="navbar-mobile-item__icon">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
            
                                    {{ $link['name'] }}
                                </a>
                            </li>
                            @foreach ($link['submenu'] as $sublink)
                                <li>
                                    <a class="navbar-mobile-item__submenu" href="{{ route($sublink['url']) }}" data-toggle="collapse" data-target=".js-navbar-mobile--menu">
                                        <span class="navbar-mobile-item__icon">
                                            <i class="fas fa-chevron-right"></i>
                                        </span>
                
                                        {{ $sublink['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>

<div class="hidden-xs no-print nav2-header">
    <div class="ptc-page">
        <div class="nav2">
            <div class="nav2__colgroup nav2__colgroup--menu">
                @foreach ($links['navigation'] as $link)
                    <div class="nav2__col nav2__col--menu">
                        <a href="{{ route($link['url']) }}" class="nav2__menu-link-main js-menu" data-menu-target="nav2-menu-popup-{{ $link['name'] }}">
                            <span class="nav2__menu-link-main-text">
                                {{ $link['name'] }}
                                {{-- Active --}}
                                @if (isset($title) && ($title == $link['name']))
                                    <span class="nav2__menu-link-bar u-section--bg-normal"></span>
                                @endif
                            </span>
                        </a>
    
                        <div class="nav2__menu-popup">
                            <div class="simple-menu simple-menu--nav2 simple-menu--nav2-left-aligned" data-menu-id="nav2-menu-popup-{{ $link['name'] }}" data-visibility="hidden">
                                @foreach ($link['submenu'] as $sublink)
                                    <a href="{{ route($sublink['url']) }}" class="simple-menu__item">
                                        {{ $sublink['name'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
