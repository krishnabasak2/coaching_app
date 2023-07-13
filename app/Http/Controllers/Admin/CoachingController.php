<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coaching;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\TryCatch;

class CoachingController extends Controller
{
    public function create(Request $form)
    {
        try {
            $data['title'] = 'Create Coaching';

            if (Request()->isMethod('POST')) {
                $form->validate([
                    'coachingName' => 'required|max:50',
                    'hadeName' => 'required|max:50',
                    'email' => 'required|email|unique:coachings,email|max:50',
                    'phone' => 'required|numeric|unique:coachings,phone',
                    'password' => 'required|max:50',
                    'address' => 'required|max:100',
                    'maxStudent' => 'required|numeric'
                ], [], [
                    'coachingName' => 'Coaching Name',
                    'hadeName' => 'Coaching Head Name',
                    'email' => 'Email',
                    'phone' => 'Phone No.',
                    'password' => 'Password',
                    'maxStudent' => 'Max Student'
                ]);

                $coaching = new Coaching;
                $coaching->name         = $form['coachingName'];
                $coaching->hade_name    = $form['hadeName'];
                $coaching->email        = $form['email'];
                $coaching->phone        = $form['phone'];
                $coaching->password     = Hash::make($form['password']);
                $coaching->address      = $form['address'];
                $coaching->max_student  = $form['maxStudent'];

                if ($coaching->save()) {
                    return redirect('admin/coaching')->with('message', 'Hoorey! Coaching Created Successfully.');
                } else {
                    return redirect()->back()->with('message', 'Oops! Something went wrong.');
                }
            }
            return view('admin.coaching.createCoaching', $data);
        } catch (\Throwable $th) {
            $data['status'] = "500";
            return view('error', $data);
        }
    }

    public function edit($id, Request $form)
    {
        try {
            $data['title'] = 'Update Coaching';
            $data['coaching'] = Coaching::where('id', $id)->first();

            if (empty($data['coaching'])) {
                return redirect()->back();
            }

            if (Request()->isMethod('POST')) {
                $form->validate([
                    'coachingName' => 'required|max:50',
                    'hadeName' => 'required|max:50',
                    'email' => [
                        'required', 'email',
                        Rule::unique('coachings')->ignore($data['coaching']['id']),
                    ],
                    'phone' => [
                        'required', 'numeric',
                        Rule::unique('coachings')->ignore($data['coaching']['id']),
                    ],
                    'maxStudent' => 'required|numeric|',
                    'address' => 'required|max:100',
                ], [], [
                    'coachingName' => 'Coaching Name',
                    'hadeName' => 'Coaching Head Name',
                    'email' => 'Email',
                    'phone' => 'Phone No.',
                    'maxStudent' => 'Max Student',
                    'address' => 'required|max:100',
                ]);

                $coaching['name']         = $form['coachingName'];
                $coaching['hade_name']    = $form['hadeName'];
                $coaching['email']        = $form['email'];
                $coaching['phone']        = $form['phone'];
                $coaching['address']      = $form['address'];
                $coaching['max_student']  = $form['maxStudent'];
                $coaching['address']      = $form['address'];

                if (Coaching::where('id', $id)->update($coaching)) {
                    return redirect('admin/coaching/all')->with('message', 'Hoorey! Coaching Updated Successfully.');
                } else {
                    return redirect()->back()->with('message', 'Oops! Something went wrong.');
                };
            }
            return view('admin.coaching.createCoaching', $data);
        } catch (\Throwable $th) {
            $data['status'] = "500";
            return view('error', $data);
        }
    }

    public function list($type = null)
    {
        try {
            if (!$type) {
                $data['title'] = 'All Coaching';
                $data['list'] = Coaching::orderBy('name', 'ASC')->paginate(20);
            } else {
                $data['title'] = 'Coaching Trash Can';
                $data['list'] = Coaching::onlyTrashed()->orderBy('name', 'ASC')->paginate(20);
            }
            return view('admin.coaching.list', $data);
        } catch (\Throwable $th) {
            $data['status'] = "500";
            return view('error', $data);
        }
    }

    public function status($id, $status)
    {
        try {

            $coaching = Coaching::where('id', $id)->withTrashed()->first();

            if (empty($coaching)) {
                return response()->json(['status' => false, 'message' => 'Sorry! Coaching not found.']);
            }

            if ($status == 'active') {
                $coaching->update(['status' => 'active']);
            } elseif ($status == 'block') {
                $coaching->update(['status' => 'block']);
            } elseif ($status == 'trash') {
                $coaching->delete();
                return response()->json(['status' => true, 'message' => 'Coaching moved to Trash successfully.']);
            } elseif ($status == 'delete') {
                $coaching->forceDelete();
                return response()->json(['status' => true, 'message' => 'Coaching deleted successfully.']);
            } elseif ($status == 'restore') {
                $coaching->restore();
                return response()->json(['status' => true, 'message' => 'Coaching recovered successfully.']);
            } else {
                return response()->json(['status' => false, 'message' => 'Sorry! Something went wrong.']);
            }
            return response()->json(['status' => true, 'message' => 'Status changed successfully.']);
        } catch (\Throwable $th) {
            $data['status'] = "500";
            return view('error', $data);
        }
    }
}
