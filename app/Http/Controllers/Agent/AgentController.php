<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agentDashboard()
    {
        return view('backend.agent.agent_dashboard');
    }
}
