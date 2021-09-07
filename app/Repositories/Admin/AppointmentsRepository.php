<?php


namespace App\Repositories\Admin;
use App\Interfaces\Admin\AppointmentInterface;
use App\Models\Appointment;

class AppointmentsRepository implements AppointmentInterface
{

    public function all()
    {
        return Appointment::orderBy('created_at' , 'desc')->paginate(10);
    }

    public function getById($id)
    {
        return Appointment::find($id);
    }

    public function delete($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
    }

    public function update($data)
    {
        $appointment = Appointment::find($data['id']);
        $appointment['confirmed'] = $data['confirmed'];
        $appointment->update();
    }
}
