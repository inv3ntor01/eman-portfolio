<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PortalController extends Controller
{
    /**
     * Display the portal landing page.
     */
    public function index(): Response
    {
        return Inertia::render('portal/index');
    }

    /**
     * Display the connection success page.
     */
    public function success(): Response
    {
        return Inertia::render('portal/success');
    }
}
