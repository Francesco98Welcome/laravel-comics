<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = config('comics');
    $links = [
        'characters',
        'comic',
        'movies',
        'tv',
        'games',
        'collections',
        'videos',
        'fans',
        'news',
        'shop'
    ];
    $iconLinkBlu = [
        [
            'img' => 'resources/images/buy-comics-digital-comics.png',
            'title' => 'digital comics',
        ],
        [
            'img' => 'resources/images/buy-comics-merchandise.png',
            'title' => 'dc merchandise'
        ],
        [
            'img' => 'resources/images/buy-comics-subscriptions.png',
            'title' => 'subscription'
        ],
        [
            'img' => 'resources/images/buy-comics-shop-locator.png',
            'title' => 'comic shop locator'
        ],
        [
            'img' => 'resources/images/buy-dc-power-visa.svg',
            'title' => 'dc power visa'
        ]
    ];
    $dcComicsLinks = [
        [
            'text' => 'characters',
        ],
        [
            'text' => 'comics',
        ],
        [
            'text' => 'Movies',
        ],
        [
            'text' => 'TV',
        ],
        [
            'text' => 'games',
        ],
        [
            'text' => 'videos',
        ],
        [
            'text' => 'news',
        ],
    ];
    $shopLinks = [
        [
            'text' => 'Shop DC',
        ],
        [
            'text' => 'Shop DC collectbiles'
        ]
    ];
    $DC = [
        [
            'text' => 'Tems of use',
        ],
        [
            'text' => 'Privacy policy(New)'
        ],
        [
            'text' => 'Ad choices'
        ],
        [
            'text' => 'Advertising'
        ],
        [
            'text' => 'Jobs'
        ],
        [
            'text' => 'Subscriptions'
        ],
        [
            'text' => 'Talent workshops'
        ],
        [
            'text' => 'CPSC Certificates'
        ],
        [
            'text' => 'Ratings'
        ],
        [
            'text' => 'Shop Help'
        ],
        [
            'text' => 'Contact Us'
        ]
    ];
    return view(
        'welcome',
        [
            'links' => $links,
            'comics' => $data,
            'iconLinkBlu' => $iconLinkBlu,
            'dcComicsLinks' => $dcComicsLinks,
            'shopLinks' => $shopLinks,
            'DC' => $DC
        ]
    );
});
