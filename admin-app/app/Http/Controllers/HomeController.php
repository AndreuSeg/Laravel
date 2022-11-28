<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Implementations\HomeRepository;
use App\Repositories\Implementations\UsersRepository;

class HomeController extends Controller
{
    protected $_homeRepository;

    public function __construct(HomeRepository $homeRepository) {
        $this->_homeRepository = $homeRepository;
    }

    public function index() {
        $this->_homeRepository->helloworld();
        $this->_homeRepository->getUsersRepository()->helloworld();
        die();
        return view('panel.index');
    }
}
