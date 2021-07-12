<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customer = User::count();
        $transaction = Transaction::count();
        $revenue = Transaction::sum('total_price');
        return view('pages.admin.dashboard', [
            'customer' => $customer,
            'transaction' => $transaction,
            'revenue' => $revenue,
        ]);
    }
}
