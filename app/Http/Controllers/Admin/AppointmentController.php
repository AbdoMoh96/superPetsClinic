<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\AppointmentInterface;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    private $appointmentRepo;

    public function __construct(AppointmentInterface $repo)
    {
        $this->appointmentRepo = $repo;
    }

    public function index(){
        $appointments = $this->appointmentRepo->all();
        return view('dashboard.appointment.index' , compact('appointments'));
    }

    public function show($appointment){
        $appointment = $this->appointmentRepo->getById($appointment);
        return view('dashboard.appointment.show' , compact('appointment'));
    }

    public function destroy($appointment){
        $this->appointmentRepo->delete($appointment);
    }

    public function update(Request $request){
        $this->appointmentRepo->update($request);
        return redirect()->back()->with('success' , 'appointment updated successfully!!');
    }
}
