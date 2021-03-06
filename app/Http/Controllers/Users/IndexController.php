<?php

declare(strict_types=1);

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\GestionExample\User\Infrastructure\GetAllUsersController;

final class IndexController extends Controller
{
    private $controller;

    public function __construct(GetAllUsersController $getAllUsersController)
    {
        $this->controller = $getAllUsersController;
    }

    public function __invoke()
    {
        $users = $this->controller->__invoke();
        return response()->json($users);
    }
}