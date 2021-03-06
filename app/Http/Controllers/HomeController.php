<?php

namespace App\Http\Controllers;

use App\Models\User\Admin;
use App\Models\User\Moderator;
use App\Models\User\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $userRepository;

    /**
     * Create a new controller instance.
     *
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = $this->userRepository->all();

        return view('home', [
            'users' => $users,
        ]);
    }

    public function userSave(Request $request)
    {
        $user = new User($request->all());

        $this->userRepository->save($user);

        return redirect()->back();
    }

    public function moderatorSave(Request $request)
    {
        $moderator = new Moderator($request->all());

        $this->userRepository->save($moderator);

        return redirect()->back();
    }

    public function adminSave(Request $request)
    {
        $administrator = new Admin($request->all());

        $this->userRepository->save($administrator);

        return redirect()->back();
    }
}
